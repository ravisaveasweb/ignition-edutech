{{-- resources/views/study-abroad/reviews/home-review.blade.php --}}
<link rel="stylesheet" href="{{ asset('css/study-abroad/study-abroad-review.css') }}?v=2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<x-study-abroad-header />

<div class="sa-review-page">
    <section class="sa-review-hero">
        <div class="sa-review-container sa-review-hero-grid">
            <div class="sa-review-hero-copy">
                <span class="sa-review-eyebrow"><i class="bi bi-globe2"></i> STUDENT VOICES · GLOBAL EXPERIENCES</span>
                <h1>Real Study Abroad Stories.<br><span>Honest Student Reviews.</span></h1>
                <p>Explore real experiences shared by students and help future international students make confident
                    decisions about their education abroad.</p>
                <div class="sa-review-hero-actions">
                    <a class="sa-review-btn sa-review-btn-primary"
                        href="{{ route('study-abroad.reviews.create') }}">Write a Review <i
                            class="bi bi-arrow-up-right"></i></a>
                    <a class="sa-review-btn sa-review-btn-secondary" href="#sa-review-student-stories">Read Student
                        Reviews</a>
                </div>
                <div class="sa-review-trust-points">
                    <span><i class="bi bi-patch-check-fill"></i> Genuine experiences</span>
                    <span><i class="bi bi-shield-check"></i> Moderated reviews</span>
                    <span><i class="bi bi-people-fill"></i> Help future students</span>
                </div>
            </div>
            <div class="sa-review-hero-card">
                <div class="sa-review-hero-card-top"><span class="sa-review-card-icon"><i
                            class="bi bi-chat-square-quote-fill"></i></span><span class="sa-review-live-label"><i></i>
                        STUDENT COMMUNITY</span></div>
                <p class="sa-review-card-kicker">YOUR EXPERIENCE CAN HELP</p>
                <h2>Make the next student’s decision easier.</h2>
                <p>Share what studying abroad is really like — academics, student life, accommodation, career support
                    and more.</p>
                <div class="sa-review-card-stat-row">
                    <div><strong>{{ number_format($totalReviews ?? 0) }}</strong><span>Published reviews</span></div>
                    <div><strong>{{ number_format((float) ($averageRating ?? 0), 1) }}<small>/5</small></strong><span>Average
                            rating</span></div>
                </div>
                <a href="{{ route('study-abroad.reviews.create') }}" class="sa-review-card-link">Share your experience
                    <i class="bi bi-arrow-right"></i></a>
                <div class="sa-review-card-decoration" aria-hidden="true"><i class="bi bi-globe-americas"></i></div>
            </div>
        </div>
    </section>

    <section class="sa-review-benefits">
        <div class="sa-review-container">
            <div class="sa-review-section-heading">
                <span class="sa-review-eyebrow">WHY YOUR REVIEW MATTERS</span>
                <h2>One experience can guide a future student.</h2>
                <p>Honest feedback helps students understand what to expect before choosing a university abroad.</p>
            </div>
            <div class="sa-review-benefit-grid">
                <article class="sa-review-benefit"><span><i class="bi bi-mortarboard"></i></span>
                    <h3>Academic insights</h3>
                    <p>Share your experience with teaching quality, courses and academic support.</p>
                </article>
                <article class="sa-review-benefit"><span><i class="bi bi-buildings"></i></span>
                    <h3>Real student life</h3>
                    <p>Help students learn about accommodation, campus culture and daily life.</p>
                </article>
                <article class="sa-review-benefit"><span><i class="bi bi-compass"></i></span>
                    <h3>Better decisions</h3>
                    <p>Offer practical insight that helps future students prepare with confidence.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="sa-review-public-section" id="sa-review-student-stories">
        <div class="sa-review-container">
            <div class="sa-review-public-heading">
                <div><span class="sa-review-eyebrow">REAL STUDENT EXPERIENCES</span>
                    <h2>What students say</h2>
                    <p>Experiences from students who have studied internationally.</p>
                </div>
                <a class="sa-review-btn sa-review-btn-primary" href="{{ route('study-abroad.reviews.create') }}">Write a
                    Review <i class="bi bi-arrow-right"></i></a>
            </div>

            @if (($totalReviews ?? 0) > 0)
                <div class="sa-review-summary">
                    <div class="sa-review-summary-score">
                        <strong>{{ number_format((float) ($averageRating ?? 0), 1) }}</strong><span>/ 5</span>
                    </div>
                    <div>
                        <div class="sa-review-summary-stars"
                            aria-label="{{ number_format((float) ($averageRating ?? 0), 1) }} out of 5 stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i
                                    class="bi {{ $i <= round((float) ($averageRating ?? 0)) ? 'bi-star-fill' : 'bi-star' }}"></i>
                            @endfor
                        </div>
                        <p>Based on {{ $totalReviews }} published
                            {{ \Illuminate\Support\Str::plural('review', $totalReviews) }}</p>
                    </div>
                </div>
            @endif

            @if (session('review_success'))
                <div class="sa-review-public-alert" role="status">{{ session('review_success') }}</div>
                <div class="sa-review-success-modal" id="sa-review-success-modal" role="dialog" aria-modal="true"
                    aria-labelledby="sa-review-success-title">
                    <div class="sa-review-success-card">
                        <button type="button" class="sa-review-success-dismiss" id="sa-review-success-dismiss"
                            aria-label="Close message"><i class="bi bi-x-lg"></i></button>
                        <div class="sa-review-success-icon"><i class="bi bi-check2"></i></div>
                        <span class="sa-review-eyebrow">THANK YOU FOR SHARING</span>
                        <h2 id="sa-review-success-title">Your review has been submitted!</h2>
                        <p>Thank you for sharing your study abroad experience. Your review may be checked by our team
                            before it appears publicly.</p>
                        <button type="button" class="sa-review-btn sa-review-btn-primary"
                            id="sa-review-success-close">Continue</button>
                    </div>
                </div>
                <script>
                    (() => {
                        const modal = document.getElementById('sa-review-success-modal');
                        if (!modal) return;
                        const closeButtons = modal.querySelectorAll('#sa-review-success-dismiss, #sa-review-success-close');
                        const close = () => {
                            modal.hidden = true;
                            document.body.style.overflow = '';
                        };
                        modal.hidden = false;
                        document.body.style.overflow = 'hidden';
                        closeButtons.forEach(button => button.addEventListener('click', close));
                        modal.addEventListener('click', event => {
                            if (event.target === modal) close();
                        });
                        document.addEventListener('keydown', event => {
                            if (event.key === 'Escape' && !modal.hidden) close();
                        });
                    })();
                </script>
            @endif

            @if (isset($reviews) && $reviews->count())
                <div class="sa-review-public-grid">
                    @foreach ($reviews as $review)
                        <article class="sa-review-public-card">
                            <div class="sa-review-public-card-top">
                                <span class="sa-review-public-avatar">
                                    {{ mb_strtoupper(mb_substr($review->student_name ?? 'S', 0, 1)) }}
                                </span>

                                <div class="sa-review-public-person">
                                    <strong>{{ $review->student_name ?? 'Student' }}</strong>
                                    <span>{{ $review->university_name ?? 'International university' }}</span>
                                </div>
                            </div>
                            <div class="sa-review-public-stars"
                                aria-label="{{ (int) ($review->overall_rating ?? 0) }} out of 5 stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i
                                        class="bi {{ $i <= (int) ($review->overall_rating ?? 0) ? 'bi-star-fill' : 'bi-star' }}"></i>
                                @endfor
                                <b>{{ (int) ($review->overall_rating ?? 0) }}/5</b>
                            </div>
                            <h3>{{ $review->review_headline ?? 'Student experience' }}</h3>

                            <p class="sa-review-public-excerpt">
                                {{ \Illuminate\Support\Str::limit(
                                    $review->reason_for_choice ?? ($review->likes ?? 'A student shared their international education experience.'),
                                    210,
                                ) }}
                            </p>
                            <div class="sa-review-public-meta">
                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    {{ $review->country ?? 'Study abroad' }}
                                </span>

                                <span>
                                    <i class="bi bi-mortarboard"></i>
                                    {{ $review->course_name ?? 'Student' }}
                                </span>
                            </div>
                        </article>
                    @endforeach
                </div>
                @if (method_exists($reviews, 'links'))
                    <div class="sa-review-pagination">{{ $reviews->links() }}</div>
                @endif
            @else
                <div class="sa-review-empty">
                    <span><i class="bi bi-chat-square-text"></i></span>
                    <h3>Be the first to share your story</h3>
                    <p>There are no published reviews to display yet. Your experience could help the next student.</p>
                    <a class="sa-review-btn sa-review-btn-primary"
                        href="{{ route('study-abroad.reviews.create') }}">Write the first review <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            @endif
        </div>
    </section>
</div>

<x-frontend-footer />
<script src="{{ asset('js/study-abroad/study-abroad-review.js') }}?v=2" defer></script>
