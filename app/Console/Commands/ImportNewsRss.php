<?php

namespace App\Console\Commands;

use App\Models\NewsArticle;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ImportNewsRss extends Command
{
    protected $signature = 'news:import-rss';
    protected $description = 'Import education news from configured RSS feeds';

    private array $feeds = [
        'https://indianexpress.com/section/education/feed/',
        'https://www.thehindu.com/education/feeder/default.rss',
    ];

    public function handle(): int
    {
        $imported = 0;
        $updated = 0;

        foreach ($this->feeds as $feedUrl) {
            try {
                $response = Http::timeout(30)
                    ->withUserAgent('Mozilla/5.0 (compatible; IgnitionEdutechNewsBot/1.0)')
                    ->get($feedUrl);

                if (!$response->successful()) {
                    $this->error("Feed unavailable: {$feedUrl} | HTTP {$response->status()}");
                    continue;
                }

                libxml_use_internal_errors(true);

                $xml = simplexml_load_string(
                    $response->body(),
                    \SimpleXMLElement::class,
                    LIBXML_NONET
                );

                if (!$xml) {
                    $this->error("Invalid RSS/XML: {$feedUrl}");
                    foreach (libxml_get_errors() as $error) {
                        $this->line(trim($error->message));
                    }
                    libxml_clear_errors();
                    continue;
                }

                $items = $xml->channel->item ?? $xml->entry ?? [];

                $this->info("Feed: {$feedUrl}");
                $this->info('RSS items found: ' . count($items));

                foreach ($items as $item) {
                    $title = trim((string) ($item->title ?? ''));
                    $link = trim((string) ($item->link ?? ''));

                    if (isset($item->link) && !$link) {
                        $attributes = $item->link->attributes();
                        $link = trim((string) ($attributes['href'] ?? ''));
                    }

                    if (!$title || !filter_var($link, FILTER_VALIDATE_URL)) {
                        continue;
                    }

                    if (!in_array(
                        strtolower((string) parse_url($link, PHP_URL_SCHEME)),
                        ['http', 'https'],
                        true
                    )) {
                        continue;
                    }

                    $description = (string) ($item->description ?? '');
                    $summary = (string) ($item->summary ?? '');

                    if (!$description && $summary) {
                        $description = $summary;
                    }

                    $content = $item->children('content', true);
                    if (!$description && isset($content->encoded)) {
                        $description = (string) $content->encoded;
                    }

                    $excerpt = trim(html_entity_decode(
                        strip_tags($description),
                        ENT_QUOTES | ENT_HTML5,
                        'UTF-8'
                    ));
                    $excerpt = Str::limit($excerpt, 450, '');

                    $hash = hash('sha256', $link);
                    $existing = NewsArticle::where('source_url_hash', $hash)->first();

                    $image = $this->extractImage($item, $description);

                    $dateText = trim((string) (
                        $item->pubDate
                        ?? $item->published
                        ?? $item->updated
                        ?? ''
                    ));

                    $timestamp = $dateText !== '' ? strtotime($dateText) : false;

                    $source = parse_url($link, PHP_URL_HOST) ?: 'Education News';
                    $source = preg_replace('/^www\./i', '', $source);

                    $data = [
                        'title' => Str::limit($title, 250, ''),
                        'category' => $this->detectCategory($title . ' ' . $excerpt),
                        'excerpt' => $excerpt ?: null,
                        'source_name' => $source,
                        'source_url' => $link,
                        'feed_url' => $feedUrl,
                        'published_at' => $timestamp ? date('Y-m-d H:i:s', $timestamp) : ($existing?->published_at ?? now()),
                        'imported_at' => now(),
                        'status' => 'published',
                    ];

                    if ($image !== '') {
                        $data['featured_image'] = $image;
                    }

                    if ($existing) {
                        $existing->update($data);
                        $updated++;
                        $this->line('Updated: ' . $title);
                        continue;
                    }

                    $data['slug'] = (Str::slug($title) ?: 'education-news') . '-' . substr($hash, 0, 8);
                    $data['source_url_hash'] = $hash;

                    NewsArticle::create($data);
                    $imported++;
                    $this->info('Imported: ' . $title);
                }
            } catch (\Throwable $e) {
                report($e);
                $this->error("Could not import feed: {$feedUrl} | {$e->getMessage()}");
            }
        }

        $this->newLine();
        $this->info("New articles imported: {$imported}");
        $this->info("Existing articles updated: {$updated}");
        $this->info('Total articles saved: ' . NewsArticle::count());
        $this->info('Articles with images: ' . NewsArticle::whereNotNull('featured_image')->where('featured_image', '!=', '')->count());

        return self::SUCCESS;
    }

    private function extractImage(\SimpleXMLElement $item, string $description): string
    {
        // Standard RSS enclosure.
        if (isset($item->enclosure)) {
            foreach ($item->enclosure as $enclosure) {
                $attributes = $enclosure->attributes();
                $url = trim((string) ($attributes['url'] ?? ''));
                $type = strtolower((string) ($attributes['type'] ?? ''));

                if ($url && ($type === '' || str_starts_with($type, 'image/'))) {
                    return $this->validImageUrl($url);
                }
            }
        }

        // Media RSS: media:content and media:thumbnail.
        $namespaces = $item->getNamespaces(true);

        foreach (['media', ''] as $namespaceName) {
            if ($namespaceName !== '' && !isset($namespaces[$namespaceName])) {
                continue;
            }

            $media = $namespaceName !== ''
                ? $item->children($namespaces[$namespaceName])
                : $item;

            foreach (['content', 'thumbnail'] as $tag) {
                if (!isset($media->{$tag})) {
                    continue;
                }

                foreach ($media->{$tag} as $mediaItem) {
                    $attributes = $mediaItem->attributes();
                    $url = trim((string) ($attributes['url'] ?? ''));

                    if ($url !== '') {
                        $valid = $this->validImageUrl($url);
                        if ($valid !== '') {
                            return $valid;
                        }
                    }
                }
            }
        }

        // Image embedded in the RSS description or content.
        if (preg_match('/<img\b[^>]*\b(?:src|data-src)\s*=\s*["\']([^"\']+)["\']/i', $description, $match)) {
            $url = html_entity_decode($match[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $valid = $this->validImageUrl($url);

            if ($valid !== '') {
                return $valid;
            }
        }

        return '';
    }

    private function validImageUrl(string $url): string
    {
        $url = trim(html_entity_decode($url, ENT_QUOTES | ENT_HTML5, 'UTF-8'));

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return '';
        }

        return in_array(
            strtolower((string) parse_url($url, PHP_URL_SCHEME)),
            ['http', 'https'],
            true
        ) ? $url : '';
    }

    private function detectCategory(string $text): string
    {
        $text = strtolower($text);

        $rules = [
            'Scholarships' => ['scholarship', 'fellowship', 'financial aid'],
            'Results' => ['result declared', 'results announced', 'scorecard', 'merit list'],
            'Entrance Exams' => ['entrance exam', 'exam date', 'admit card', 'exam notification', 'jee main', 'neet ug', 'cuet'],
            'Admissions' => ['admission', 'application deadline', 'registration opens', 'counselling'],
            'Study Abroad News' => ['study abroad', 'student visa', 'international student', 'overseas education'],
            'College Updates' => ['university announces', 'college announces', 'campus', 'higher education institution'],
        ];

        foreach ($rules as $category => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($text, $keyword)) {
                    return $category;
                }
            }
        }

        return 'News';
    }
}
