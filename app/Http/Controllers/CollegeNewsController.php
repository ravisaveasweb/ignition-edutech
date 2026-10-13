<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;

class CollegeNewsController extends Controller
{
    private array $categories = [
        'News',
        'Admissions',
        'Entrance Exams',
        'Results',
        'College Updates',
        'Scholarships',
        'Study Abroad News',
    ];

    public function index(Request $request)
    {
        $category = $request->query('category');
        $search = trim((string) $request->query('search', ''));

        $articles = NewsArticle::where('status', 'published')
            ->when(
                in_array($category, $this->categories, true),
                fn ($query) => $query->where('category', $category)
            )
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%")
                        ->orWhere('source_name', 'like', "%{$search}%");
                });
            })
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(12)
            ->withQueryString();

        $featured = NewsArticle::where('status', 'published')
            ->where('is_featured', true)
            ->latest('published_at')
            ->first();

        return view('college-news.index', [
            'articles' => $articles,
            'featured' => $featured,
            'categories' => $this->categories,
            'selectedCategory' => $category,
            'search' => $search,
        ]);
    }

    public function show(string $slug)
    {
        $article = NewsArticle::where('status', 'published')
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedArticles = NewsArticle::where('status', 'published')
            ->where('category', $article->category)
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('college-news.show', compact(
            'article',
            'relatedArticles'
        ));
    }
}
