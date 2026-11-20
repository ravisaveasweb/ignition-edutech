<x-frontend-header />
<x-study-india-header/>

<main class="ign-ss-page">

    {{-- 1. HERO --}}
    <section class="ign-ss-hero" id="ign-ss-hero-section">
        <div class="ign-ss-container">

            <div class="row align-items-center">

                {{-- LEFT SIDE: HERO CONTENT --}}
                <div class="col-lg-7">

                    <div class="ign-ss-hero-content">

                        <span class="ign-ss-eyebrow">
                            IGNITION EDUTECH SUCCESS STORIES
                        </span>

                        <h1 class="ign-ss-hero-title">
                            Every Student Has a Story.
                            <span>What's Yours?</span>
                        </h1>

                        <p class="ign-ss-hero-description">
                            Discover inspiring journeys of students who turned their dreams into achievements with
                            Ignition Edutech.
                        </p>

                        <div class="ign-ss-hero-actions">
                            <a href="#ign-ss-story-explorer" class="ign-ss-primary-btn">
                                Explore Success Stories
                                <i class="bi bi-arrow-right"></i>
                            </a>

                            <a href="{{ route('study-india.universities-courses') }}" class="ign-ss-secondary-btn">
                               Explore Education Options
                            </a>
                        </div>

                        <div class="ign-ss-hero-trust">
                            <span><i class="bi bi-patch-check-fill"></i> Student-focused guidance</span>
                            <span><i class="bi bi-mortarboard-fill"></i> Education opportunities</span>
                            <span><i class="bi bi-globe2"></i> Global aspirations</span>
                        </div>

                    </div>

                </div>

                {{-- RIGHT SIDE: COUNSELLING FORM --}}
                <div class="col-lg-5">

                    <div class="amt-hero-card">
                        <h3>Get Free Career Counselling</h3>

                        <p class="amt-muted">
                            Talk to our experts and choose the right degree for your career.
                        </p>

                        @includeIf('forms.amity.amity-hero-banner-form')
                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- 2. STATISTICS --}}
    <section class="ign-ss-stories" id="ign-ss-stories">
        <div class="ign-ss-container">

            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">OUR IMPACT</span>
                <h2 class="ign-ss-section-title">Numbers That Tell Our Story</h2>
                <p class="ign-ss-section-description">
                    Every number represents a student's dream, dedication and achievement.
                </p>
            </div>

            <div class="ign-ss-stats-grid">

                <div class="ign-ss-stat-card">
                    <div class="ign-ss-stat-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h3 class="ign-ss-stat-number">{{ number_format($totalStudents) }}+</h3>
                    <p>Students Featured</p>
                </div>

                <div class="ign-ss-stat-card">
                    <div class="ign-ss-stat-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h3 class="ign-ss-stat-number">{{ number_format($totalUniversities) }}+</h3>
                    <p>Universities Represented</p>
                </div>

                <div class="ign-ss-stat-card">
                    <div class="ign-ss-stat-icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h3 class="ign-ss-stat-number">{{ number_format($totalCountries) }}+</h3>
                    <p>Countries Represented</p>
                </div>

                <div class="ign-ss-stat-card">
                    <div class="ign-ss-stat-icon">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <h3 class="ign-ss-stat-number">{{ number_format($totalStories) }}+</h3>
                    <p>Success Stories</p>
                </div>

            </div>
        </div>
    </section>



    {{-- 3. FEATURED STORY --}}
    <section class="ign-ss-featured" id="ign-ss-featured">
        <div class="ign-ss-container">

            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">FEATURED JOURNEY</span>
                <h2 class="ign-ss-section-title">Dreams Turned Into Achievements</h2>
                <p class="ign-ss-section-description">
                    Explore the dedication, decisions and milestones behind student success.
                </p>
            </div>

            @if ($featuredStory)
                <div class="ign-ss-featured-card">

                    <div class="ign-ss-featured-image">
                        <img src="{{ asset('img/success-stories/' . ($featuredStory->banner_image ?: ($featuredStory->student_image ?: 'success_stories_ inspiring2.png'))) }}"
                            alt="{{ $featuredStory->student_name }}" loading="lazy">

                        <span class="ign-ss-featured-badge">
                            Featured Student Story
                        </span>
                    </div>

                    <div class="ign-ss-featured-content">

                        <span class="ign-ss-story-category">
                            {{ strtoupper(str_replace('-', ' ', $featuredStory->category)) }}
                        </span>

                        <h3 class="ign-ss-featured-title">
                            {{ $featuredStory->student_name }}
                        </h3>

                        <p class="ign-ss-featured-description">
                            {{ $featuredStory->short_description }}
                        </p>

                        <div class="ign-ss-student-details">

                            <div>
                                <span>Student Name</span>
                                <strong>{{ $featuredStory->student_name }}</strong>
                            </div>

                            <div>
                                <span>University</span>
                                <strong>{{ $featuredStory->college_name ?: 'Not specified' }}</strong>
                            </div>

                            <div>
                                <span>Destination</span>
                                <strong>{{ $featuredStory->country ?: 'Not specified' }}</strong>
                            </div>

                        </div>

                        <a href="#ign-ss-story-explorer" class="ign-ss-primary-btn">
                            Explore Stories
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>
                </div>
            @else
                <div class="ign-ss-no-results">
                    No featured success story available yet.
                </div>
            @endif

        </div>
    </section>




    {{-- 4. STORY EXPLORER --}}
    <section class="ign-ss-story-explorer" id="ign-ss-story-explorer">
        <div class="ign-ss-container">

            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">SUCCESS STORIES</span>
                <h2 class="ign-ss-section-title">Explore Student Journeys</h2>
                <p class="ign-ss-section-description">
                    Discover different paths, goals and educational experiences.
                </p>
            </div>

            {{-- Search --}}
            <div class="ign-ss-filter-bar">
                <div class="ign-ss-search-box">
                    <i class="bi bi-search"></i>
                    <input type="search" id="ign-ss-story-search" placeholder="Search stories..." autocomplete="off">
                </div>
            </div>

            {{-- Dynamic Story Cards --}}
            <div class="ign-ss-story-grid" id="ign-ss-story-grid">

                @forelse($stories as $story)
                    <article class="ign-ss-story-card" data-category="{{ $story->category }}">

                        <div class="ign-ss-story-image">

                            <img src="{{ asset('img/success-stories/' . ($story->student_image ?: 'success-story-1.png')) }}"
                                alt="{{ $story->student_name }}" loading="lazy">

                            <span class="ign-ss-story-tag">
                                {{ ucwords(str_replace('-', ' ', $story->category)) }}
                            </span>

                        </div>

                        <div class="ign-ss-story-content">

                            <span class="ign-ss-story-meta">
                                {{ $story->country ?: 'STUDENT SUCCESS STORY' }}
                            </span>

                            <h3>{{ $story->student_name }}</h3>

                            <p>
                                {{ $story->short_description }}
                            </p>

                            <div class="ign-ss-card-student">
                                <strong>{{ $story->student_name }}</strong>

                                <span>
                                    {{ $story->course_name ?: 'Student' }}
                                </span>
                            </div>

                        </div>

                    </article>

                @empty

                    {{-- No records currently available --}}
                @endforelse

            </div>

            {{-- View All / Show Less --}}
            <div class="ign-ss-view-all-wrap" id="ign-ss-view-all-wrap" @if ($stories->count() <= 3) hidden @endif>
                <button type="button" class="ign-ss-view-all-btn" id="ign-ss-view-all-btn">
                    View All Stories
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            {{-- No Results --}}
            <div class="ign-ss-no-results" id="ign-ss-no-results" @if ($stories->count() > 0) hidden @endif>
                No success stories available yet.
            </div>

            {{-- Database Pagination --}}
            @if ($stories->hasPages())
                <div class="ign-ss-pagination">
                    {{ $stories->links() }}
                </div>
            @endif

        </div>
    </section>



    {{-- 5. STUDENT REVIEWS --}}
    <section class="ign-ss-reviews" id="ign-ss-reviews">
        <div class="ign-ss-container">

            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">STUDENT REVIEWS</span>
                <h2 class="ign-ss-section-title">What Our Students Say</h2>
                <p class="ign-ss-section-description">
                    Real experiences from students who trusted Ignition Edutech.
                </p>
            </div>

            <div class="ign-ss-reviews-grid">

                @forelse($studentReviews as $review)

                    <article class="ign-ss-review-card">

                        <div class="ign-ss-review-student">

                            {{-- <img src="{{ asset('img/success-stories/' . ($review->student_image ?: 'default-student.jpg')) }}"
                                alt="{{ $review->student_name }}" loading="lazy"> --}}

                            <div class="ign-ss-review-avatar">
                                {{ collect(explode(' ', trim($review->student_name)))->filter()->map(fn($name) => strtoupper(substr($name, 0, 1)))->take(2)->implode('') }}
                            </div>

                            <div>
                                <h3>{{ $review->student_name }}</h3>
                                <span>
                                    {{ $review->course_name ?: 'Student Experience' }}
                                </span>
                            </div>

                        </div>

                        <div class="ign-ss-review-rating">
                            @for ($star = 1; $star <= 5; $star++)
                                <i class="bi {{ $review->rating >= $star ? 'bi-star-fill' : 'bi-star' }}"></i>
                            @endfor
                        </div>

                        <p>
                            “{{ $review->review }}”
                        </p>

                    </article>

                @empty

                    <div class="ign-ss-no-results">
                        No student reviews available yet.
                    </div>

                @endforelse

            </div>
        </div>
    </section>


    {{-- 6. STUDENT JOURNEY --}}
    <section class="ign-ss-journey" id="ign-ss-journey">
        <div class="ign-ss-container">
            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">THE IGNITION JOURNEY</span>
                <h2 class="ign-ss-section-title">From Dreams to the Right Direction</h2>
                <p class="ign-ss-section-description">
                    A structured approach to help students make informed education decisions.
                </p>
            </div>

            <div class="ign-ss-journey-grid">
                <div class="ign-ss-journey-card">
                    <span class="ign-ss-journey-number">01</span>
                    <div class="ign-ss-journey-icon"><i class="bi bi-chat-square-text"></i></div>
                    <h3>Understand Your Goals</h3>
                    <p>Discuss academic interests, ambitions and future plans.</p>
                </div>

                <div class="ign-ss-journey-card">
                    <span class="ign-ss-journey-number">02</span>
                    <div class="ign-ss-journey-icon"><i class="bi bi-search"></i></div>
                    <h3>Explore Opportunities</h3>
                    <p>Research suitable courses, universities and learning options.</p>
                </div>

                <div class="ign-ss-journey-card">
                    <span class="ign-ss-journey-number">03</span>
                    <div class="ign-ss-journey-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <h3>Plan Your Application</h3>
                    <p>Understand application requirements and prepare the next steps.</p>
                </div>

                <div class="ign-ss-journey-card">
                    <span class="ign-ss-journey-number">04</span>
                    <div class="ign-ss-journey-icon"><i class="bi bi-mortarboard"></i></div>
                    <h3>Move Towards Your Goal</h3>
                    <p>Take informed steps towards your educational aspirations.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- 7. TESTIMONIALS --}}
    <section class="ign-ss-testimonials" id="ign-ss-testimonials">
        <div class="ign-ss-container">

            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">STUDENT VOICES</span>
                <h2 class="ign-ss-section-title">Hear It From Our Students</h2>
                <p class="ign-ss-section-description">
                    Experiences and feedback from students about their educational journeys.
                </p>
            </div>

            <div class="ign-ss-testimonial-grid">

                @forelse($testimonials as $testimonial)
                    <article class="ign-ss-testimonial-card">

                        <div class="ign-ss-quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <p>
                            “{{ $testimonial->review }}”
                        </p>

                        <div class="ign-ss-testimonial-author">

                            {{-- @if ($testimonial->student_image)
                                <img src="{{ asset('img/success-stories/' . $testimonial->student_image ?: 'success-story-1.png') }}"
                                    alt="{{ $testimonial->student_name }}" class="ign-ss-author-avatar"
                                    loading="lazy">
                            @else
                                <div class="ign-ss-author-avatar">
                                    {{ strtoupper(substr($testimonial->student_name, 0, 1)) }}
                                </div>
                            @endif --}}

                            <div class="ign-ss-author-avatar">
                                {{ collect(explode(' ', trim($testimonial->student_name)))->filter()->map(fn($name) => strtoupper(substr($name, 0, 1)))->take(2)->implode('') }}
                            </div>

                            <div>
                                <h3>{{ $testimonial->student_name }}</h3>

                                <span>
                                    {{ $testimonial->course_name ?: 'Student Experience' }}
                                </span>
                            </div>

                        </div>

                    </article>

                @empty

                    <div class="ign-ss-no-results">
                        No testimonials available yet.
                    </div>
                @endforelse

            </div>
        </div>
    </section>


    {{-- 8. WHY IGNITION --}}
    <section class="ign-ss-why-ignition" id="ign-ss-why-ignition">
        <div class="ign-ss-container">
            <div class="ign-ss-section-heading">
                <span class="ign-ss-section-label">WHY IGNITION EDUTECH</span>
                <h2 class="ign-ss-section-title">Guidance That Puts Students First</h2>
                <p class="ign-ss-section-description">
                    Helping students explore educational possibilities with clarity and confidence.
                </p>
            </div>

            <div class="ign-ss-benefits-grid">
                <div class="ign-ss-benefit-card">
                    <i class="bi bi-person-check"></i>
                    <h3>Student-Centric Guidance</h3>
                    <p>Understand individual goals and educational preferences.</p>
                </div>

                <div class="ign-ss-benefit-card">
                    <i class="bi bi-book"></i>
                    <h3>Course Exploration</h3>
                    <p>Explore courses and academic opportunities.</p>
                </div>

                <div class="ign-ss-benefit-card">
                    <i class="bi bi-buildings"></i>
                    <h3>University Research</h3>
                    <p>Compare institutions and make informed choices.</p>
                </div>

                <div class="ign-ss-benefit-card">
                    <i class="bi bi-signpost-split"></i>
                    <h3>Career Direction</h3>
                    <p>Consider education pathways aligned with future ambitions.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 9. FINAL CTA --}}
    <section class="ign-ss-cta" id="ign-ss-cta">
        <div class="ign-ss-container">
            <span class="ign-ss-cta-label">YOUR STORY STARTS HERE</span>

            <h2>Ready to Begin Your Own Success Story?</h2>

            <p>
                Take the next step towards your academic goals. Connect with Ignition Edutech and explore your
                opportunities.
            </p>

            <div class="ign-ss-cta-actions">
                <a href="#" class="ign-ss-primary-btn ign-enquiry-popup-trigger" data-source="Success Story - Hero Banner">
                    Get Free Counselling <i class="bi bi-arrow-right"></i>
                </a>

                <a href="{{route('study-india.universities-courses') }}" class="ign-ss-secondary-btn">
                    Explore Education Options
                </a>
            </div>
        </div>
    </section>

</main>

<x-university-enquiry-popup :courses="$courses ?? []" />

{{-- <x-frontend-footer /> --}}
<x-new-footer />
