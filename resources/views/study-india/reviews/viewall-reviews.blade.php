<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/study-india/study-india-review.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<x-study-india-header />



{{-- resources/views/study-india/reviews/viewall-reviews.blade.php --}}


@php
    $reviews = $reviews ?? collect();
    $topReviews = $topReviews ?? collect();
    $totalReviews = $totalReviews ?? $reviews->count();
    $averageRating = $averageRating ?? 0;
@endphp

<main class="ign-sir-viewall-page">

    {{-- Hero --}}
    <section class="ign-sir-viewall-hero">
        <div class="ign-sir-viewall-hero-shade"></div>

        <div class="ign-sir-viewall-hero-inner">
            <div class="ign-sir-viewall-eyebrow">
                <span></span> STUDENT VOICES · REAL EXPERIENCES
            </div>

            <h1>Find reviews for <em>25,000+ colleges</em></h1>

            <p>Real student perspectives on academics, faculty, placements, campus life and fees.</p>

            <form class="ign-sir-viewall-search" id="ign-sir-viewall-search-form">
                <span class="ign-sir-viewall-search-icon" aria-hidden="true">⌕</span>

                <input id="ign-sir-viewall-search-input" type="search"
                    placeholder="Search college, course or review keyword"
                    aria-label="Search college, course or review keyword">

                <button type="submit" aria-label="Search reviews">→</button>
            </form>

            <div class="ign-sir-viewall-hero-subline">
                Looking for a college?
                <a href="{{ route('study-india.reviews.create') }}">
                    Share your own experience instead ↗
                </a>
            </div>
        </div>
    </section>

    {{-- Main reviews section --}}
    <section class="ign-sir-viewall-main">
        <div class="ign-sir-viewall-content">

            {{-- Filters --}}
            <div class="ign-sir-viewall-toolbar">
                <div class="ign-sir-viewall-filter-label">Filter by</div>

                <label class="ign-sir-viewall-filter-select">
                    <span class="ign-sir-viewall-sr-only">Stream</span>

                    <select id="ign-sir-viewall-stream-filter">
                        <option value="">All streams</option>
                        @foreach ($streams as $stream)
                            <option value="{{ $stream }}">{{ $stream }}</option>
                        @endforeach
                    </select>
                    <i class="bi bi-chevron-down ign-sir-viewall-dropdown-icon" aria-hidden="true"></i>

                </label>

                {{-- Dynamic course filter --}}
                <label class="ign-sir-viewall-filter-select">
                    <span class="ign-sir-viewall-sr-only">Course</span>

                    <select id="ign-sir-viewall-course-filter">
                        <option value="">All courses</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course }}">{{ $course }}</option>
                        @endforeach
                    </select>
                    <i class="bi bi-chevron-down ign-sir-viewall-dropdown-icon" aria-hidden="true"></i>
                </label>

                {{-- Dynamic batch filter --}}
                <label class="ign-sir-viewall-filter-select">
                    <span class="ign-sir-viewall-sr-only">Batch</span>

                    <select id="ign-sir-viewall-batch-filter">
                        <option value="">All batches</option>
                        @foreach (collect(range(1991, 2026))->filter()->unique()->sortDesc() as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>

                    <i class="bi bi-chevron-down ign-sir-viewall-dropdown-icon" aria-hidden="true"></i>

                </label>

                <label class="ign-sir-viewall-sort-select">
                    <span>⇅ Sort by</span>

                    <select id="ign-sir-viewall-sort-filter">
                        <option value="newest">Newest first</option>
                        <option value="highest">Highest rating</option>
                        <option value="lowest">Lowest rating</option>
                        <option value="helpful">Most helpful</option>
                    </select>
                    <i class="bi bi-chevron-down ign-sir-viewall-dropdown-icon" aria-hidden="true"></i>

                </label>
            </div>

            {{-- Stream chips --}}
            <div class="ign-sir-viewall-category-chips" aria-label="Popular streams">
                <button type="button" class="ign-sir-viewall-chip ign-sir-viewall-active" data-stream="">All
                    reviews</button>

                @foreach ($streams as $stream)
                    <button type="button" class="ign-sir-viewall-chip"
                        data-stream="{{ $stream }}">{{ $stream }}</button>
                @endforeach
            </div>

            {{-- Popular tags --}}
            <section class="ign-sir-viewall-popular-tags">
                <h2>Most popular tags</h2>

                <div class="ign-sir-viewall-tag-list">
                    <button type="button" data-tag="Faculty">Faculty</button>
                    <button type="button" data-tag="Placement Experience">Placement</button>
                    <button type="button" data-tag="Scholarship">Scholarship</button>
                    <button type="button" data-tag="Fees and Financial Aid">Fee Structure</button>
                    <button type="button" data-tag="Campus Life">Campus</button>
                    <button type="button" data-tag="Admission">Admission</button>
                    <button type="button" data-tag="Course Curriculum Overview">Course</button>
                    <button type="button" data-tag="Internship Opportunities">Internship</button>
                    <button type="button" data-tag="Experience">Experience</button>
                    <button type="button" data-tag="Hostel">Hostel</button>
                    <button type="button" data-tag="Engineering">Engineering</button>
                    <button type="button" data-tag="Entrance Exam">Entrance Exam</button>
                    <button type="button" data-tag="Semester">Semester</button>
                </div>
            </section>

            {{-- Dynamic results heading --}}
            <div class="ign-sir-viewall-results-heading">
                <h2 id="ign-sir-viewall-results-count">
                    {{ $totalReviews }} student {{ $totalReviews === 1 ? 'review' : 'reviews' }}
                </h2>

                <span>
                    Average rating: {{ number_format((float) $averageRating, 1) }}/5
                </span>
            </div>

            {{-- Dynamic review list --}}
            <div class="ign-sir-viewall-review-list" id="ign-sir-viewall-review-list">

                @forelse ($reviews as $review)
                    @php
                        $courseText = strtolower(trim($review->course ?? ''));

                        $stream = match (true) {
                            str_contains($courseText, 'engineering'),
                            str_contains($courseText, 'b.tech'),
                            str_contains($courseText, 'b.e.')
                                => 'Engineering & Technology',

                            str_contains($courseText, 'computer science'),
                            str_contains($courseText, 'information technology'),
                            str_contains($courseText, 'bca'),
                            str_contains($courseText, 'mca')
                                => 'Computer Science & IT',

                            str_contains($courseText, 'mba'),
                            str_contains($courseText, 'management'),
                            str_contains($courseText, 'pgdm')
                                => 'Management',

                            str_contains($courseText, 'commerce'),
                            str_contains($courseText, 'b.com')
                                => 'Commerce & Finance',

                            str_contains($courseText, 'nursing') => 'Nursing & Allied Health Sciences',

                            str_contains($courseText, 'medical'), str_contains($courseText, 'mbbs') => 'Medical',

                            str_contains($courseText, 'pharmacy'),
                            str_contains($courseText, 'b.pharm'),
                            str_contains($courseText, 'm.pharm')
                                => 'Pharmacy',

                            str_contains($courseText, 'law'), str_contains($courseText, 'llb') => 'Law',

                            str_contains($courseText, 'design'),
                            str_contains($courseText, 'fine arts')
                                => 'Design & Fine Arts',

                            str_contains($courseText, 'architecture'),
                            str_contains($courseText, 'planning')
                                => 'Architecture & Planning',

                            str_contains($courseText, 'education'),
                            str_contains($courseText, 'teaching'),
                            str_contains($courseText, 'b.ed')
                                => 'Education & Teaching',

                            str_contains($courseText, 'hotel management'),
                            str_contains($courseText, 'hospitality')
                                => 'Hotel Management & Hospitality',

                            str_contains($courseText, 'agriculture') => 'Agriculture & Allied Sciences',

                            str_contains($courseText, 'veterinary') => 'Veterinary Sciences',

                            str_contains($courseText, 'journalism'),
                            str_contains($courseText, 'mass communication')
                                => 'Journalism & Mass Communication',

                            str_contains($courseText, 'economics') => 'Economics',

                            str_contains($courseText, 'aviation'),
                            str_contains($courseText, 'aerospace')
                                => 'Aviation & Aerospace',

                            str_contains($courseText, 'maritime'),
                            str_contains($courseText, 'merchant navy')
                                => 'Maritime & Merchant Navy',

                            str_contains($courseText, 'sports'),
                            str_contains($courseText, 'physical education')
                                => 'Sports & Physical Education',

                            str_contains($courseText, 'social work') => 'Social Work',

                            str_contains($courseText, 'library science'),
                            str_contains($courseText, 'information science')
                                => 'Library & Information Science',

                            str_contains($courseText, 'vocational'),
                            str_contains($courseText, 'skill-based')
                                => 'Vocational & Skill-Based Courses',

                            str_contains($courseText, 'research'),
                            str_contains($courseText, 'doctoral'),
                            str_contains($courseText, 'ph.d')
                                => 'Research & Doctoral Studies',

                            str_contains($courseText, 'science'), str_contains($courseText, 'b.sc') => 'Science',

                            str_contains($courseText, 'arts'),
                            str_contains($courseText, 'humanities'),
                            str_contains($courseText, 'b.a.')
                                => 'Arts & Humanities',

                            default => '',
                        };

                        $studentName = $review->student_name ?: 'Student';

                        $initials = collect(explode(' ', trim($studentName)))
                            ->filter()
                            ->take(2)
                            ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                            ->implode('');

                        $reviewDate = $review->created_at ? $review->created_at->format('Y-m-d') : '';

                        $searchableText = implode(
                            ' ',
                            array_filter([
                                $review->student_name,
                                $review->college_name,
                                $review->college_display_name,
                                $review->course,
                                $review->review_title,
                                $review->review_text,
                                $review->pros,
                                $review->cons,
                            ]),
                        );

                        $displayCollege =
                            $review->college_display_name ?: $review->college_name ?: 'College not specified';

                        $reviewRating = (float) ($review->overall_rating ?? 0);
                    @endphp

                    <article class="ign-sir-viewall-review-card" data-stream="{{ $stream }}"
                        data-course="{{ $review->course ?? '' }}" data-batch="{{ $review->graduation_year ?? '' }}"
                        data-rating="{{ $reviewRating }}" data-helpful="0" data-date="{{ $reviewDate }}"
                        data-tags="{{ $searchableText }}">

                        <div class="ign-sir-viewall-review-top">
                            <div class="ign-sir-viewall-review-person">
                                <span class="ign-sir-viewall-avatar ign-sir-viewall-avatar-purple">
                                    {{ $initials ?: 'S' }}
                                </span>

                                <div>
                                    <b>{{ $studentName }}</b>

                                    <small>
                                        {{ $displayCollege }}

                                        @if ($review->graduation_year)
                                            <i>·</i> Batch {{ $review->graduation_year }}
                                        @endif

                                        @if ($review->course)
                                            <i>·</i> {{ $review->course }}
                                        @endif

                                        @if ($review->created_at)
                                            <i>·</i> {{ $review->created_at->format('M d, Y') }}
                                        @endif
                                    </small>
                                </div>
                            </div>

                            <div class="ign-sir-viewall-review-score">
                                <b>{{ number_format($reviewRating, 1) }}/5</b>
                                <span>Overall rating</span>
                            </div>
                        </div>

                        <h3>
                            {{ $review->review_title ?: 'Student experience at ' . $displayCollege }}
                        </h3>

                        <div class="ign-sir-viewall-review-topic">
                            <b>Overall Experience</b>
                            <p>{{ $review->review_text }}</p>
                        </div>

                        @if ($review->pros)
                            <div class="ign-sir-viewall-review-topic">
                                <b>What went well</b>
                                <p>{{ $review->pros }}</p>
                            </div>
                        @endif

                        @if ($review->cons)
                            <div class="ign-sir-viewall-review-topic">
                                <b>Areas to improve</b>
                                <p>{{ $review->cons }}</p>
                            </div>
                        @endif

                        <div class="ign-sir-viewall-review-actions">
                            <button type="button" class="ign-sir-viewall-helpful" aria-pressed="false">
                                ♧ <span>Helpful</span> <b>0</b>
                            </button>

                            <button type="button" class="ign-sir-viewall-not-helpful" aria-pressed="false">
                                ♧ <span>Not helpful</span>
                            </button>

                            <button type="button" class="ign-sir-viewall-report">
                                Report
                            </button>

                            <a class="ign-sir-viewall-write-link" href="{{ route('study-india.reviews.create') }}">
                                Write a similar review ↗
                            </a>
                        </div>

                        <div class="ign-sir-viewall-expanded-review" hidden>
                            <div class="ign-sir-viewall-review-topic">
                                <b>College</b>
                                <p>{{ $displayCollege }}</p>
                            </div>

                            @if ($review->course)
                                <div class="ign-sir-viewall-review-topic">
                                    <b>Course</b>
                                    <p>{{ $review->course }}</p>
                                </div>
                            @endif

                            @if ($review->graduation_year)
                                <div class="ign-sir-viewall-review-topic">
                                    <b>Batch</b>
                                    <p>{{ $review->graduation_year }}</p>
                                </div>
                            @endif

                            @if ($review->course_fees !== null)
                                <div class="ign-sir-viewall-review-topic">
                                    <b>Course Fees</b>
                                    <p>₹{{ number_format((float) $review->course_fees, 2) }}</p>
                                </div>
                            @endif
                        </div>

                        <button type="button" class="ign-sir-viewall-expand-button" aria-expanded="false">
                            Read More <span>＋</span>
                        </button>
                    </article>

                @empty
                    <div class="ign-sir-viewall-no-results" id="ign-sir-viewall-empty-state">
                        <b>No approved reviews available yet.</b>
                        <p>Be the first to share your college experience.</p>

                        <a href="{{ route('study-india.reviews.create') }}">
                            Write a Review
                        </a>
                    </div>
                @endforelse

                {{-- Shown by JavaScript when filters have no matches --}}
                @if ($reviews->isNotEmpty())
                    <div class="ign-sir-viewall-no-results" id="ign-sir-viewall-no-results" hidden>
                        <b>No reviews match those filters.</b>
                        <p>Try a different search or clear one of the filters.</p>

                        <button type="button" id="ign-sir-viewall-clear-filters">
                            Clear filters
                        </button>
                    </div>
                @endif

            </div>

            {{-- Show more --}}
            <div class="ign-sir-viewall-load-more-wrap">
                <button type="button" id="ign-sir-viewall-load-more" class="ign-sir-viewall-outline-button">
                    Show more reviews ↓
                </button>
            </div>
        </div>

        {{-- Dynamic sidebar --}}
        <aside class="ign-sir-viewall-top-reviews">
            <div class="ign-sir-viewall-side-heading">
                <h2>Top reviews</h2>
                <span>Highest rated</span>
            </div>

            @forelse ($topReviews as $topReview)
                @php
                    $topStudentName = $topReview->student_name ?: 'Student';

                    $topInitials = collect(explode(' ', trim($topStudentName)))
                        ->filter()
                        ->take(2)
                        ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                        ->implode('');

                    $topCollege =
                        $topReview->college_display_name ?: $topReview->college_name ?: 'College not specified';
                @endphp

                <article>
                    <div class="ign-sir-viewall-side-person">
                        <span class="ign-sir-viewall-avatar ign-sir-viewall-avatar-blue">
                            {{ $topInitials ?: 'S' }}
                        </span>

                        <div>
                            <b>{{ $topStudentName }}</b>

                            <small>
                                {{ $topReview->course ?: 'Student review' }}

                                @if ($topReview->graduation_year)
                                    · {{ $topReview->graduation_year }}
                                @endif
                            </small>
                        </div>
                    </div>

                    <p>
                        {{ \Illuminate\Support\Str::limit($topReview->review_text ?? '', 120) }}
                    </p>

                    <div class="ign-sir-viewall-review-score">
                        <b>{{ number_format((float) ($topReview->overall_rating ?? 0), 1) }}/5</b>
                    </div>

                    <a href="#ign-sir-viewall-review-list">
                        Read reviews ↗
                    </a>
                </article>

            @empty
                <article>
                    <p>No approved reviews are available yet.</p>
                </article>
            @endforelse

            <div class="ign-sir-viewall-side-cta">
                <span>Have you studied here?</span>
                <h3>Your experience can help the next student.</h3>

                <a href="{{ route('study-india.reviews.create') }}" class="ign-sir-viewall-orange-button">
                    Write a Review ↗
                </a>
            </div>
        </aside>
    </section>

    {{-- FAQ / review CTA --}}
    <section class="ign-sir-viewall-faq-strip">
        <div class="ign-sir-viewall-faq-inner">
            <div>
                <div class="ign-sir-viewall-eyebrow">NEED A HAND?</div>
                <h2>Have a college experience to share?</h2>
                <p>Write a clear, respectful review to help future students make informed choices.</p>
            </div>

            <a href="{{ route('study-india.reviews.create') }}" class="ign-sir-viewall-orange-button">
                Write a Review <span>→</span>
            </a>
        </div>
    </section>

</main>

<div class="ign-sir-viewall-toast" id="ign-sir-viewall-toast" role="status" aria-live="polite"></div>



{{-- <x-frontend-footer /> --}}

<script src="{{ asset('js/study-india/study-india-review.js') }}"></script>
