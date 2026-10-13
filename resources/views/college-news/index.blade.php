
<x-frontend-header />
<x-study-india-header/>
<link rel="stylesheet" href="{{ asset('css/college-news.css') }}?v=2">

@php
    $heroArticle = $featured ?? $articles->first();
    $currentCategory = $selectedCategory ?? request('category', '');
    $currentSearch = $search ?? request('search', '');
    $newsCategories = [
        // 'News',
        'Admissions',
        'Entrance Exams',
        'Results',
        'College Updates',
        'Scholarships',
        'Study Abroad News',
    ];
@endphp

<main class="ign-news-page">
    <section class="ign-news-hero">
        <div class="ign-news-container">
            <div class="ign-news-hero-content">
                <span class="ign-news-eyebrow">IGNITION EDUTECH • YOUR EDUCATION UPDATE</span>
                <h1>Education News Portal</h1>
                <p>Stay ahead with education news, admission alerts, entrance exam updates, results and scholarships.</p>

                <form class="ign-news-search" id="ignNewsSearchForm" action="{{ route('college-news.index') }}" method="GET">
                    <span class="ign-news-search-icon">⌕</span>
                    <input
                        type="search"
                        name="search"
                        id="ignNewsSearch"
                        value="{{ $currentSearch }}"
                        placeholder="Search news, exams, colleges and more..."
                        aria-label="Search education news">
                    @if($currentCategory)
                        <input type="hidden" name="category" value="{{ $currentCategory }}">
                    @endif
                    <button type="submit">Search News</button>
                </form>

                <div class="ign-news-hero-stats">
                    <span><i></i> Education Updates</span>
                    <span><i></i> Admission Alerts</span>
                    <span><i></i> Exam Notifications</span>
                </div>
            </div>

            <div class="ign-news-hero-visual">
                <div class="ign-news-visual-card">
                    <div class="ign-news-visual-top">
                        <span>YOUR DAILY BRIEFING</span>
                        <span class="ign-news-live-dot"></span>
                    </div>
                    <div class="ign-news-visual-icon">EDU</div>
                    <h3>Make informed decisions about your future.</h3>
                    <p>Education updates gathered in one student-focused destination.</p>
                    <div class="ign-news-visual-lines"><span></span><span></span><span></span></div>
                </div>
                <div class="ign-news-floating-tag">Your future, updated.</div>
            </div>
        </div>
    </section>

    <section class="ign-news-container ign-news-quicklinks">
        <a href="{{ route('college-news.index') }}#ignNewsLatest" class="ign-news-quicklink">
            <span class="ign-news-quick-icon">N</span>
            <span><strong>Latest News</strong><small>Education updates</small></span>
            <b>↗</b>
        </a>
        <a href="{{ route('college-news.index', ['category' => 'Admissions']) }}#ignNewsLatest" class="ign-news-quicklink">
            <span class="ign-news-quick-icon">A</span>
            <span><strong>Admissions</strong><small>Important deadlines</small></span>
            <b>↗</b>
        </a>
        <a href="{{ route('college-news.index', ['category' => 'Entrance Exams']) }}#ignNewsLatest" class="ign-news-quicklink">
            <span class="ign-news-quick-icon">E</span>
            <span><strong>Entrance Exams</strong><small>Exam announcements</small></span>
            <b>↗</b>
        </a>
        <a href="{{ route('college-news.index', ['category' => 'Scholarships']) }}#ignNewsLatest" class="ign-news-quicklink">
            <span class="ign-news-quick-icon">S</span>
            <span><strong>Scholarships</strong><small>Funding opportunities</small></span>
            <b>↗</b>
        </a>
    </section>

    <section class="ign-news-container ign-news-main">
        <div class="ign-news-main-column">
            <div class="ign-news-category-wrap">
                <div class="ign-news-heading">
                    <div>
                        <span class="ign-news-eyebrow">EXPLORE THE LATEST</span>
                        <h2>Browse Education News</h2>
                    </div>
                </div>

                <nav class="ign-news-categories" id="ignNewsCategories" aria-label="Filter news by category">
                    <a href="{{ route('college-news.index', ['search' => $currentSearch ?: null]) }}#ignNewsLatest"
                       class="{{ !$currentCategory ? 'active' : '' }}">All News</a>

                    @foreach($newsCategories as $category)
                        <a
                            href="{{ route('college-news.index', ['category' => $category, 'search' => $currentSearch ?: null]) }}#ignNewsLatest"
                            class="{{ $currentCategory === $category ? 'active' : '' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </nav>
            </div>

            @if($heroArticle)
                <section class="ign-news-featured" id="ignNewsFeatured">
                    <div class="ign-news-featured-image">
                        @if($heroArticle->featured_image)
                            <img src="{{ $heroArticle->featured_image }}" alt="{{ $heroArticle->title }}" loading="eager">
                        @else
                            <div class="ign-news-image-placeholder">Education News</div>
                        @endif
                        <span class="ign-news-image-tag">FEATURED NEWS</span>
                    </div>

                    <div class="ign-news-featured-content">
                        <span class="ign-news-category-label">{{ strtoupper($heroArticle->category) }}</span>
                        <h2>
                            <a href="{{ route('college-news.show', $heroArticle->slug) }}">
                                {{ $heroArticle->title }}
                            </a>
                        </h2>
                        <p>{{ $heroArticle->excerpt ?: 'Read the latest education update from the original publisher.' }}</p>

                        <div class="ign-news-card-meta">
                            <span>{{ $heroArticle->source_name ?: 'Education News' }}</span>
                            <span>{{ $heroArticle->published_at?->format('d M Y') ?? 'Latest Update' }}</span>
                        </div>

                        <a href="{{ route('college-news.show', $heroArticle->slug) }}" class="ign-news-text-link">
                            Read Featured News <span>→</span>
                        </a>
                    </div>
                </section>
            @endif

            <section class="ign-news-list-section" id="ignNewsLatest">
                <div class="ign-news-heading">
                    <div>
                        <span class="ign-news-eyebrow">WHAT'S HAPPENING</span>
                        <h2>
                            @if($currentCategory)
                                {{ $currentCategory }}
                            @else
                                Latest Education News
                            @endif
                        </h2>
                        <p>Explore updates selected for students and aspirants.</p>
                    </div>
                    <span class="ign-news-count">
                        {{ $articles->total() }} {{ $articles->total() === 1 ? 'story' : 'stories' }}
                    </span>
                </div>

                @if($currentSearch || $currentCategory)
                    <div class="ign-news-active-filter">
                        <span>
                            Showing results
                            @if($currentSearch)
                                for "{{ $currentSearch }}"
                            @endif
                            @if($currentCategory)
                                in {{ $currentCategory }}
                            @endif
                        </span>
                        <a href="{{ route('college-news.index') }}">Clear filters ×</a>
                    </div>
                @endif

                <div class="ign-news-grid" id="ignNewsGrid">
                    @forelse($articles as $article)
                        <article class="ign-news-card">
                            <a href="{{ route('college-news.show', $article->slug) }}" class="ign-news-card-image">
                                @if($article->featured_image)
                                    <img src="{{ $article->featured_image }}" alt="{{ $article->title }}" loading="lazy">
                                @else
                                    <div class="ign-news-image-placeholder">Education News</div>
                                @endif
                                <span>{{ $article->category }}</span>
                            </a>

                            <div class="ign-news-card-body">
                                <span class="ign-news-card-kicker">{{ strtoupper($article->category) }}</span>
                                <h3>
                                    <a href="{{ route('college-news.show', $article->slug) }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p>{{ $article->excerpt ?: 'Read this education update for more information.' }}</p>

                                <div class="ign-news-card-meta">
                                    <span>{{ $article->source_name ?: 'Education News' }}</span>
                                    <span>{{ $article->published_at?->format('d M Y') ?? 'Latest Update' }}</span>
                                </div>

                                <a href="{{ route('college-news.show', $article->slug) }}" class="ign-news-card-read">
                                    Read update <span>→</span>
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="ign-news-empty">
                            <span>⌕</span>
                            <h3>No matching news found</h3>
                            <p>
                                @if($currentSearch || $currentCategory)
                                    Try another keyword or choose a different category.
                                @else
                                    No news has been published yet. Please check again soon.
                                @endif
                            </p>
                            <a href="{{ route('college-news.index') }}" class="ign-news-text-link">Show All News →</a>
                        </div>
                    @endforelse
                </div>

               
@if ($articles->hasPages())
    @php
        $currentPage = $articles->currentPage();
        $lastPage = $articles->lastPage();
        $groupStart = (int) (floor(($currentPage - 1) / 4) * 4) + 1;
        $groupEnd = min($groupStart + 3, $lastPage);
    @endphp

    <div class="ign-news-pagination">
        <nav role="navigation" aria-label="Pagination Navigation">
            <div></div>
            <div>
                @if ($groupStart > 1)
                    <a href="{{ $articles->url($groupStart - 1) }}" rel="prev">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="m15 18-6-6 6-6"/>
                        </svg>
                        <span>Previous</span>
                    </a>
                @else
                    <span aria-disabled="true" class="ign-news-page-disabled">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="m15 18-6-6 6-6"/>
                        </svg>
                        <span>Previous</span>
                    </span>
                @endif

                @for ($page = $groupStart; $page <= $groupEnd; $page++)
                    @if ($page == $currentPage)
                        <span aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $articles->url($page) }}">{{ $page }}</a>
                    @endif
                @endfor

                @if ($groupEnd < $lastPage)
                    <a href="{{ $articles->url($groupEnd + 1) }}" rel="next">
                        <span>Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" class="ign-news-page-disabled">
                        <span>Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </span>
                @endif
            </div>
        </nav>
    </div>
@endif

            </section>

            <section class="ign-news-bottom-cta">
                <div>
                    <span class="ign-news-eyebrow">YOUR NEXT STEP STARTS HERE</span>
                    <h2>Make better-informed education decisions.</h2>
                    <p>Keep track of the updates that matter for your academic journey.</p>
                </div>
                <a href="{{ route('college-news.index') }}">Explore Education News <span>→</span></a>
            </section>
        </div>

        <aside class="ign-news-sidebar">
            <section class="ign-news-sidebar-card ign-news-sidebar-highlight">
                <span class="ign-news-sidebar-icon">01</span>
                <h3>Student Action Centre</h3>
                <p>Quick access to the education information you may need.</p>
                <a href="{{ route('college-news.index', ['category' => 'Admissions']) }}#ignNewsLatest">Admission Updates <span>→</span></a>
                <a href="{{ route('college-news.index', ['category' => 'Entrance Exams']) }}#ignNewsLatest">Entrance Exam News <span>→</span></a>
                <a href="{{ route('college-news.index', ['category' => 'Scholarships']) }}#ignNewsLatest">Scholarship Updates <span>→</span></a>
            </section>

            <section class="ign-news-sidebar-card">
                <span class="ign-news-eyebrow">TRENDING TOPICS</span>
                <h3>Explore Popular Topics</h3>
                <div class="ign-news-tags">
                    @foreach([
                        'Admissions',
                        'Entrance Exams',
                        'Results',
                        'Scholarships',
                        'Study Abroad News',
                        'College Updates'
                    ] as $topic)
                        <a href="{{ route('college-news.index', ['category' => $topic]) }}#ignNewsLatest">
                            {{ $topic }}
                        </a>
                    @endforeach
                </div>
            </section>

            <section class="ign-news-sidebar-card ign-news-source-note">
                <span class="ign-news-eyebrow">ABOUT THIS PORTAL</span>
                <h3>Education news, in one place.</h3>
                <p>Discover education headlines and summaries from publishers in one convenient, student-focused destination.</p>
                <p class="ign-news-demo-note">
                    News summaries link to their original publications. Always verify important announcements through official sources.
                </p>
            </section>
        </aside>
    </section>
</main>

<x-frontend-footer />
