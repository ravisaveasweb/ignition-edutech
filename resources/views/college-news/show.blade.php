
<x-frontend-header />
<x-study-india-header/>


<link rel="stylesheet" href="{{ asset('css/college-news.css') }}?v=2">

<main class="ign-news-page ign-news-article-page">
    <div class="ign-news-container">
        <nav class="ign-article-breadcrumb" aria-label="Breadcrumb">
            <a href="/">Home</a>
            <span>›</span>
            <a href="{{ route('college-news.index') }}">Education News</a>
            <span>›</span>
            <span>{{ $article->category }}</span>
        </nav>

        <div class="ign-article-layout">
            <article class="ign-article-main">
                <span class="ign-news-category-label">
                    {{ strtoupper($article->category) }}
                </span>

                <h1>{{ $article->title }}</h1>

                @if($article->excerpt)
                    <p class="ign-article-intro">{{ $article->excerpt }}</p>
                @endif

                <div class="ign-article-byline">
                    <div class="ign-article-author-icon">ED</div>
                    <div>
                        <strong>{{ $article->source_name ?: 'Education News' }}</strong>
                        <span>
                            {{ $article->published_at?->format('d M Y') ?? 'Latest Update' }}
                        </span>
                    </div>
                    <button type="button" id="ignArticleShare" class="ign-article-share">
                        Share Article ↗
                    </button>
                </div>

                @if($article->featured_image)
                    <div class="ign-article-cover">
                        <img
                            src="{{ $article->featured_image }}"
                            alt="{{ $article->title }}"
                            loading="eager">
                    </div>
                @endif

                <div class="ign-article-content">
                    @if($article->excerpt)
                        <p class="ign-article-lead">{{ $article->excerpt }}</p>
                    @endif

                    <p>
                        This education update was originally published by
                        {{ $article->source_name ?: 'the original publisher' }}.
                        Review the original report for complete information,
                        official announcements and any additional details.
                    </p>

                    <div class="ign-article-disclaimer">
                        <strong>Editorial note</strong>
                        <p>
                            This page presents the news headline and summary for
                            informational purposes. The original publisher retains
                            responsibility for its report. Please verify important
                            admission dates, examination schedules, results and
                            eligibility criteria through the relevant official source.
                        </p>
                    </div>
                </div>

                <div class="ign-article-source">
                    <div>
                        <span class="ign-news-eyebrow">ORIGINAL PUBLICATION</span>
                        <h3>{{ $article->source_name ?: 'Original Publisher' }}</h3>
                        <p>
                            Read the full report on the original publisher's website.
                        </p>
                    </div>
                    <a
                        href="{{ $article->source_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="ign-article-source-button">
                        Read Original Article ↗
                    </a>
                </div>

                <a href="{{ route('college-news.index') }}" class="ign-article-back">
                    ← Back to Education News
                </a>

                @if(isset($relatedArticles) && $relatedArticles->isNotEmpty())
                    <section class="ign-article-related">
                        <h2>Related Education News</h2>
                        <div class="ign-news-grid">
                            @foreach($relatedArticles as $related)
                                <article class="ign-news-card">
                                    @if($related->featured_image)
                                        <a
                                            href="{{ route('college-news.show', $related->slug) }}"
                                            class="ign-news-card-image">
                                            <img
                                                src="{{ $related->featured_image }}"
                                                alt="{{ $related->title }}"
                                                loading="lazy">
                                            <span>{{ $related->category }}</span>
                                        </a>
                                    @endif

                                    <div class="ign-news-card-body">
                                        <span class="ign-news-card-kicker">
                                            {{ strtoupper($related->category) }}
                                        </span>
                                        <h3>
                                            <a href="{{ route('college-news.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
                                        </h3>
                                        <div class="ign-news-card-meta">
                                            <span>{{ $related->source_name ?: 'Education News' }}</span>
                                            <span>
                                                {{ $related->published_at?->format('d M Y') ?? 'Latest Update' }}
                                            </span>
                                        </div>
                                        <a
                                            href="{{ route('college-news.show', $related->slug) }}"
                                            class="ign-news-card-read">
                                            Read update <span>→</span>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </section>
                @endif
            </article>

            <aside class="ign-article-sidebar">
                <div class="ign-news-sidebar-card">
                    <span class="ign-news-eyebrow">EXPLORE MORE</span>
                    <h3>Education News Categories</h3>

                    <a href="{{ route('college-news.index') }}" class="ign-article-sidebar-link">
                        All News <span>→</span>
                    </a>

                    @foreach([
                        'Admissions',
                        'Entrance Exams',
                        'Results',
                        'College Updates',
                        'Scholarships',
                        'Study Abroad News'
                    ] as $category)
                        <a
                            href="{{ route('college-news.index', ['category' => $category]) }}"
                            class="ign-article-sidebar-link">
                            {{ $category }} <span>→</span>
                        </a>
                    @endforeach
                </div>

                <div class="ign-news-sidebar-card ign-article-sidebar-note">
                    <span class="ign-news-eyebrow">STUDENT REMINDER</span>
                    <h3>Verify before you apply.</h3>
                    <p>
                        Always confirm admission dates, examination schedules,
                        results and eligibility requirements using official sources.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</main>

<x-frontend-footer />

<script>
document.addEventListener('DOMContentLoaded', function () {
    const shareButton = document.getElementById('ignArticleShare');

    if (shareButton) {
        shareButton.addEventListener('click', async function () {
            const shareData = {
                title: @json($article->title),
                text: @json($article->excerpt ?? $article->title),
                url: window.location.href
            };

            try {
                if (navigator.share) {
                    await navigator.share(shareData);
                } else if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(window.location.href);
                    shareButton.textContent = 'Link Copied ✓';
                } else {
                    window.prompt('Copy this article link:', window.location.href);
                }
            } catch (error) {
                if (error.name !== 'AbortError') {
                    window.prompt('Copy this article link:', window.location.href);
                }
            }
        });
    }
});
</script>
