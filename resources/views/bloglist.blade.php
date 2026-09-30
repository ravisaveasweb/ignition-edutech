@php
    // 1. Unified blog data array (Easy to add more blogs here in the future)
    $blogs = [
        [
            'category' => 'Admissions Guide',
            'title' => 'NMIMS Distance Education Admission 2026: Complete Step-by-Step Guide',
            'description' =>
                'Everything students usually ask before applying to NMIMS, including admission dates, fees, eligibility, required documents, and the full online application process.',
            'image' => asset('img/blog/nmims-distance-education-admission-2026-process-fees.jpg'),
            'url' => route('nmims-distance-education-admission-2026-process-fees'),
            'read_time' => '12 min read',
            'updated' => 'Updated May 2026',
            'tag' => 'Featured Article',
            'is_featured' => true, // Used to target the main hero spotlight
        ],
        [
            'category' => 'Online MBA Guide',
            'title' => 'Best Online MBA in India 2026: Top UGC-Approved Universities for Working Professionals',
            'description' =>
                'Compare the top-tier UGC-approved distance and online MBA programs in India. Evaluate fees, specializations, and placement support before you enroll.',
            'image' => asset('img/blog/best-online-mba-india-universities.jpg'),
            'url' => route('best-online-mba-india-universities'),
            'read_time' => '15 min read',
            'updated' => 'Updated June 2026',
            'tag' => 'Top Guide',
            'is_featured' => false,
        ],
        [
            'category' => 'CAREER GUIDANCE',
            'title' => 'Career Options After 10th & 12th: Complete Guidance',
            'description' =>
                'Discover the best career options after Class 10 and 12 — science, commerce, arts, diploma courses, and expert career counselling to make the right choice.',
            'image' => asset('img/blog/blog-career-options-after-10-12.jpg'),
            'url' => route('blog-career-options-after-10-12'),
            'read_time' => '13 min read',
            'updated' => 'Updated June 2026',
            'tag' => 'Top Guide',
            'is_featured' => false,
        ],
        [
            'category' => 'SCHOOL ADMISSIONS GUIDE',
            'title' => 'School Admissions 2026-27: How to Choose the Right Board and School for Your Child',
            'description' =>
                'A comprehensive roadmap for parents navigating nursery to high school admissions. Compare CBSE, ICSE, IGCSE, and IB boards, evaluation criteria, and application tips from Ignition Edutech.',
            'image' => asset('img/blog/blog-school-admissions-board-selection-guide.jpg'),
            'url' => route('blog-school-admissions-board-selection-guide'),
            'read_time' => '11 min read',
            'updated' => 'Updated June 2026',
            'tag' => 'Top Guide',
            'is_featured' => false,
        ],
        [
            'category' => 'STUDY ABROAD GUIDE',
            'title' => 'Plan Your Journey: Complete Study Abroad Guide for Indian Students',
            'description' =>
                'Your ultimate roadmap to studying overseas. Explore top country destinations, application timelines, exam requirements (IELTS/GRE), visa processes, and expert guidance from Ignition Edutech.',
            'image' => asset('img/blog/blog-ultimate-study-abroad-guide.jpg'),
            'url' => route('blog-ultimate-study-abroad-guide'),
            'read_time' => '14 min read',
            'updated' => 'Updated June 2026',
            'tag' => 'Top Guide',
            'is_featured' => false,
        ],
    ];

    // Extract the designated featured blog for the hero layout
    $featuredBlog = null;
@endphp
@foreach ($blogs as $b)
    @if (!empty($b['is_featured']))
        @php
            $featuredBlog = $b;
        @endphp
        @break
    @endif
@endforeach
@php
    // Fallback if no blog is explicitly marked as featured
    if (!$featuredBlog) {
        $featuredBlog = $blogs[0];
    }

@endphp

<x-frontend-header />
<section class="blog-list-hero">
    <div class="container">
        <div class="blog-list-hero__inner">
            <div class="blog-list-hero__content">
                <span class="blog-list-eyebrow">Ignition Edutech Blog</span>
                <h1>Guides that help students choose with confidence.</h1>
                <p>
                    Explore admission updates, university comparisons, and practical application advice written to make
                    online and distance education easier to understand.
                </p>
                <div class="blog-list-hero__meta">
                    <div class="blog-list-stat">
                        <!-- Dynamically counts the articles in your array -->
                        <strong>{{ str_pad(count($blogs), 2, '0', STR_PAD_LEFT) }}</strong>
                        <span>Published guides</span>
                    </div>
                    <div class="blog-list-stat">
                        <strong>2026</strong>
                        <span>Fresh admission insights</span>
                    </div>
                    <div class="blog-list-stat">
                        <strong>100%</strong>
                        <span>Student-focused content</span>
                    </div>
                </div>
            </div>

            <a class="blog-list-featured" href="{{ $featuredBlog['url'] }}">
                <div class="blog-list-featured__image">
                    <img src="{{ $featuredBlog['image'] }}" alt="{{ $featuredBlog['title'] }}">
                    <span class="blog-list-featured__badge">{{ $featuredBlog['tag'] }}</span>
                </div>
                <div class="blog-list-featured__body">
                    <span class="blog-list-card__category">{{ $featuredBlog['category'] }}</span>
                    <h2>{{ $featuredBlog['title'] }}</h2>
                    <p>{{ $featuredBlog['description'] }}</p>
                    <div class="blog-list-card__meta">
                        <span>{{ $featuredBlog['read_time'] }}</span>
                        <span>{{ $featuredBlog['updated'] }}</span>
                    </div>
                    <span class="blog-list-card__link">Read full guide</span>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="blog-list-section">
    <div class="container">
        <div class="blog-list-section__head">
            <div>
                <span class="blog-list-section__label">All Blogs</span>
                <h2>Latest articles</h2>
            </div>
            <p>
                Starting with your NMIMS admission guide, this space is ready to grow into a strong library of helpful
                student resources.
            </p>
        </div>

        <div class="blog-list-grid">
            @foreach ($blogs as $blog)
                <article class="blog-list-card mb-4">
                    <a class="blog-list-card__image" href="{{ $blog['url'] }}">
                        <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}">
                    </a>
                    <div class="blog-list-card__body">
                        <span class="blog-list-card__category">{{ $blog['category'] }}</span>
                        <h3>
                            <a href="{{ $blog['url'] }}">{{ $blog['title'] }}</a>
                        </h3>
                        <p>{{ $blog['description'] }}</p>
                        <div class="blog-list-card__meta">
                            <span>{{ $blog['read_time'] }}</span>
                            <span>{{ $blog['updated'] }}</span>
                        </div>
                        <a class="blog-list-card__link" href="{{ $blog['url'] }}">Open article</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<x-frontend-footer />
