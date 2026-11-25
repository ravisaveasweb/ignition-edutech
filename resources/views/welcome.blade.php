<x-frontend-header :study-abroad-universities="$studyAbroadUniversities" />
<x-study-india-header />


@php

    $yjJourneyFeatures = [
        ['icon' => 'bi bi-check-lg', 'title' => 'School Admissions'],
        ['icon' => 'bi bi-check-lg', 'title' => 'Career Guidance & Counselling'],
        ['icon' => 'bi bi-check-lg', 'title' => 'Undergraduate & Postgraduate Admissions'],
        ['icon' => 'bi bi-check-lg', 'title' => 'Online & Distance Learning'],
        ['icon' => 'bi bi-check-lg', 'title' => 'Professional Certifications & Skill Development'],
        ['icon' => 'bi bi-check-lg', 'title' => 'Corporate Learning Solutions'],
    ];

    $programCourses = [
        [
            'image' => 'img/icon/master-of-business-administration.png',
            'title' => 'MBA',
            'description' => 'Master of Business Administration',
            'duration' => '2 Years',
        ],
        [
            'image' => 'img/icon/bachelor-of-business-administration.png',
            'title' => 'BBA',
            'description' => 'Bachelor of Business Administration',
            'duration' => '3 Years',
        ],
        [
            'image' => 'img/icon/master-of-computer-applications.png',
            'title' => 'MCA',
            'description' => 'Master of Computer Applications',
            'duration' => '2 Years',
        ],
        [
            'image' => 'img/icon/bachelor-of-computer-applications.png',
            'title' => 'BCA',
            'description' => 'Bachelor of Computer Applications',
            'duration' => '3 Years',
        ],
        [
            'image' => 'img/icon/diploma.png',
            'title' => 'PG Diploma',
            'description' => 'Various Specialized Programs',
            'duration' => '1 Year',
        ],
    ];

    $whyChooseFeatures = [
        [
            'image' => 'img/icon/career.png',
            'title' => 'Career Counselling',
            'description' => 'Personalized guidance to help you choose the right course and career path.',
        ],
        [
            'image' => 'img/icon/admission-process.png',
            'title' => 'Easy Admission',
            'description' => 'Hassle-free admission process with complete end-to-end support.',
        ],
        [
            'image' => 'img/icon/top-university.png',
            'title' => 'Top Universities',
            'description' => 'Partnered with UGC-approved and NAAC-accredited universities.',
        ],
        [
            'image' => 'img/icon/online-learning.png',
            'title' => 'Flexible Learning',
            'description' => 'Learn anytime, anywhere with online classes and recorded sessions.',
        ],
        [
            'image' => 'img/icon/EMI-options.png',
            'title' => 'EMI Options',
            'description' => 'Affordable fee structure with easy EMI plans to suit your budget.',
        ],
        [
            'image' => 'img/icon/placement-support.png',
            'title' => 'Placement Support',
            'description' => 'Resume building, mock interviews, and career assistance.',
        ],
    ];

    $statsServiceData = [
        [
            'image' => 'img/icon/students-enrolled.png',
            'number' => '10,000+',
            'title' => 'Students Enrolled',
        ],
        [
            'image' => 'img/icon/university.png',
            'number' => '50+',
            'title' => 'Top Universities',
        ],
        [
            'image' => 'img/icon/programs-offered.png',
            'number' => '100+',
            'title' => 'Programs Offered',
        ],
        [
            'image' => 'img/icon/student-satisfaction.png',
            'number' => '95%',
            'title' => 'Student Satisfaction',
        ],
        [
            'image' => 'img/icon/average-rating.png',
            'number' => '4.8/5',
            'title' => 'Average Rating',
        ],
    ];

    $successStories = [
        [
            'image' => 'img/course/success-stories-01.jpg',
            'title' => 'From Marketing Executive to MBA Graduate',
            'description' => 'With the right support, I got into a top university.',
            'name' => 'Neha Sharma',
            'course' => 'MBA, Chandigarh University',
        ],
        [
            'image' => 'img/course/success-stories-02.jpg',
            'title' => 'Switching Career with MCA',
            'description' => 'The MCA program helped me transition into tech.',
            'name' => 'Saurabh Tiwari',
            'course' => 'MCA, Manipal University',
        ],
        [
            'image' => 'img/course/success-stories-03.jpg',
            'title' => 'Career Growth with BBA',
            'description' => 'The knowledge and skills I gained helped me get promoted.',
            'name' => 'Pooja Verma',
            'course' => 'BBA, Amity University',
        ],
        [
            'image' => 'img/course/success-stories-04.jpg',
            'title' => 'Learning Without Limits',
            'description' => 'Flexible learning made it possible to balance work and studies.',
            'name' => 'Vikram Joshi',
            'course' => 'PG Diploma, NMIMS',
        ],
    ];

    $approvedServices = [
        [
            'image' => 'img/icon/UGC-approved.png',
            'title' => 'UGC Approved',
            'description' => 'Recognized by UGC',
            'card_class' => 'stat-approved',
            'content_class' => 'approved-content',
        ],
        [
            'image' => 'img/icon/NAAC-A-grade.png',
            'title' => 'NAAC A+ Grade',
            'description' => 'Top Accredited Universities',
            'card_class' => 'stat-approved',
            'content_class' => 'approved-content',
        ],
        [
            'image' => 'img/icon/AICTE-approved.png',
            'title' => 'AICTE Approved',
            'description' => 'Industry Recognized',
            'card_class' => 'stat-approved',
            'content_class' => 'approved-content',
        ],
        [
            'image' => 'img/icon/AIU-member.png',
            'title' => 'AIU Member',
            'description' => 'Association of Indian Universities',
            'card_class' => 'stat-approved',
            'content_class' => 'approved-content',
        ],
        [
            'image' => 'img/icon/secure.png',
            'title' => '100% Secure Process',
            'description' => 'Your data is safer with us',
            'card_class' => 'stat-approved-two',
            'content_class' => 'approved-content-two',
        ],
    ];

    $featureStripData = [
        [
            'image' => 'img/icon/approved-degrees.png',
            'title' => 'UGC Entitled',
            'subtitle' => 'Approved Degrees',
        ],
        [
            'image' => 'img/icon/grade-universities.png',
            'title' => 'NAAC A+ Grade',
            'subtitle' => 'Universities',
        ],
        [
            'image' => 'img/icon/happy-students.png',
            'title' => '10,000+',
            'subtitle' => 'Happy Students',
        ],
        [
            'image' => 'img/icon/secure.png',
            'title' => '100% Secure',
            'subtitle' => '& Easy Process',
        ],
    ];

    $testimonialData = [
        [
            'review_image' => 'img/icon/left.png',
            'stars' => '★★★★★',
            'review' =>
                '“Ignition Edutech made my admission process seamless. I got enrolled in NMIMS and it truly boosted my career growth.”',
            'student_image' => 'img/live/review-01.jpg',
            'name' => 'Rohit Sharma',
            'course' => 'MBA, NMIMS University',
        ],
        [
            'review_image' => 'img/icon/left.png',
            'stars' => '★★★★★',
            'review' =>
                '“The counselors were very supportive and helped me choose the right program. Highly recommended for online education.”',
            'student_image' => 'img/live/review-03.jpg',
            'name' => 'Priya Mehta',
            'course' => 'BCA, Manipal University',
        ],
        [
            'review_image' => 'img/icon/left.png',
            'stars' => '★★★★★',
            'review' =>
                '“I was confused about university selection. Their guidance helped me pick the best course for my future.”',
            'student_image' => 'img/live/review-02.jpg',
            'name' => 'Ankit Verma',
            'course' => 'MCA, Amity University',
        ],
    ];

    $iconRowData = [
        [
            'image' => 'img/icon/flexibility.png',
            'title' => '100% Online',
            'subtitle' => 'Flexible',
        ],
        [
            'image' => 'img/icon/approved.png',
            'title' => 'UGC & NAAC',
            'subtitle' => 'Approved',
        ],
        [
            'image' => 'img/icon/support-career.png',
            'title' => 'Career',
            'subtitle' => 'Support',
        ],
        [
            'image' => 'img/icon/icon-emi.png',
            'title' => 'Easy EMI',
            'subtitle' => 'Options',
        ],
    ];

@endphp

<section class="hero">

    <div class="container hero-grid">

        <!-- Left Content -->
        <div class="hero-content">
            <span class="tag">Empowering Every Learning Journey</span>

            <h1>Empowering Every Learning Journey.</h1>
            <!-- <h2>School Admissions • Career Counselling • Higher Education • Study Abroad • Professional Certifications</h2> -->

            <p>School Admissions • Career Counselling • Higher Education • Study Abroad • Professional Certifications
            </p>

            <div class="icon-row">
                @foreach ($iconRowData as $item)
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                        </div>
                        <div class="text">
                            <strong>{{ $item['title'] }}</strong>
                            <span>{{ $item['subtitle'] }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
            <p class="review-text">
                Trusted by <strong>10,000+</strong> students across India
            </p>
            <div class="review-row">
                <!-- Avatars -->
                <div class="avatars">
                    <img src="{{ asset('img/live/review-01.jpg') }}" alt="">
                    <img src="{{ asset('img/live/review-03.jpg') }}" alt="">
                    <img src="{{ asset('img/live/review-02.jpg') }}" alt="">
                    <img src="{{ asset('img/live/review-04.jpg') }}" alt="">
                </div>
                <!-- Text + Rating -->
                <div class="review-content">
                    <div class="stars">
                        ★ ★ ★ ★ ★
                        <span class="rating">4.8/5 (2,300+ Reviews)</span>
                    </div>
                </div>

            </div>
        </div>

        @includeIf('forms.home-banner-form')

    </div>

</section>

<section class="feature-strip">
    <div class="container feature-grid">
        @foreach ($featureStripData as $feature)
            <div class="feature-item">
                <div class="icons">
                    <img src="{{ asset($feature['image']) }}" alt="">
                </div>
                <div class="text">
                    <strong>{{ $feature['title'] }}</strong>
                    <span>{{ $feature['subtitle'] }}</span>
                </div>
            </div>
        @endforeach

    </div>
</section>

<section class="logo-section">
    <div class="container">
        <h2 class="section-title">Learn From India's Top Universities</h2>
        <div class="logo-slider">
            <!-- Left Arrow -->
            <button class="slider-btn prev">&#10094;</button>
            <!-- Slider Track -->
            <div class="logo-track" id="logoTrack">
                <div class="logo-item">
                    <a href="{{ route('nmims-distance-education-online-degree-programs') }}"><img
                            src="{{ asset('img/brand/university-01.png') }}" alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('vellore-institute-of-technology') }}"><img
                            src="{{ asset('img/brand/university-07.png') }}" alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('amity-university-online-ug-pg-courses') }}"><img
                            src="{{ asset('img/brand/university-02.png') }}" alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('dr-d-y-patil-pune') }}"><img src="{{ asset('img/brand/university-03.png') }}"
                            alt=""></a>
                </div>
                <div class="logo-item">
                    <a href="{{ route('manipal-online') }}"><img src="{{ asset('img/brand/university-04.png') }}"
                            alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('jain-online') }}"><img src="{{ asset('img/brand/university-08.png') }}"
                            alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('nldalmia-online') }}"><img src="{{ asset('img/brand/nl-dalmia.png') }}"
                            alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('vivekananda-global-university-online') }}"><img
                            src="{{ asset('img/brand/university-10.png') }}" alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('gla-university-online') }}"><img
                            src="{{ asset('img/brand/gla-university_logo.png') }}" alt=""></a>
                </div>


                <div class="logo-item">
                    <a href="{{ route('university-of-massachusetts-global-online') }}"><img
                            src="{{ asset('img/brand/university-of-massachusetts.png') }}" alt=""></a>
                </div>

                <div class="logo-item">
                    <a href="{{ route('bennett-university') }}"><img
                            src="{{ asset('img/brand/bennett-university.png') }}" alt=""></a>
                </div>

            </div>
            <!-- Right Arrow -->
            <button class="slider-btn next">&#10095;</button>
        </div>
    </div>
</section>




<section class="ie-intro-section">
    <div class="ie-container">
        <header class="ie-header">
            <span class="ie-tagline">Guiding Every Learning Journey. Empowering Every Future.</span>
            <h2 class="ie-main-heading">Your Trusted Partner in Education &amp; Career Success</h2>
        </header>

        <div class="ie-content-wrapper">
            <p class="ie-description">
                At <strong class="ie-brand-highlight">Ignition Edutech Private Limited</strong>, we believe every
                learner deserves the right guidance to make confident educational and career decisions. From school
                admissions and career counselling to higher education, professional certifications, executive learning,
                and lifelong upskilling, we provide personalized solutions that empower individuals to achieve their
                full potential.
            </p>
        </div>
    </div>
</section>



<section class="ign-home-explore-carousel-section">
    <div class="ign-home-explore-carousel-container">

        <div class="ign-home-explore-carousel-heading">
            <div>
                <span class="ign-home-explore-carousel-eyebrow">
                    DISCOVER MORE
                </span>

                <h2>Explore More</h2>

                <p>
                    Everything you need for your education journey.
                </p>
            </div>
        </div>

        @php
            $ignHomeExploreCarouselGroups = [
                [
                    'key' => 'study-india',
                    'title' => 'Study India',
                    'description' => 'Discover education opportunities across India.',
                    'items' => [
                        [
                            'title' => 'Study India',
                            'description' => 'Explore colleges, courses and admissions in India.',
                            'icon' => 'bi-mortarboard-fill',
                            'image' => asset('img/study-india-carousel/study-india-page.jpg'),
                            'url' => url('/'),
                        ],
                        [
                            'title' => 'Entrance Exams',
                            'description' => 'Find entrance exams and admission details.',
                            'icon' => 'bi-journal-text',
                            'image' => asset('img/study-india-carousel/india_exams.jpg'),
                            'url' => url('/entrance-exams'),
                        ],
                        [
                            'title' => 'Top Universities',
                            'description' => 'Discover India\'s leading universities and colleges.',
                            'icon' => 'bi-mortarboard',
                            'image' => asset('img/study-india-carousel/study_india_universities-courses.jpg'),
                            'url' => route('study-india.universities-courses'),
                        ],
                        [
                            'title' => 'Online Universities',
                            'description' => 'Explore flexible online degree programs.',
                            'icon' => 'bi-laptop',
                            'image' => asset('img/study-india-carousel/study-india_online_universities-courses.jpg'),
                            'url' => route('study-india.universities-courses') . '#ign-univ-directory-online',
                        ],
                        [
                            'title' => 'Success Stories',
                            'description' => 'Get inspired by students and their achievements.',
                            'icon' => 'bi-trophy',
                            'image' => asset('img/study-india-carousel/study_success-stories.jpg'),
                            'url' => route('success-stories.index'),
                        ],
                        [
                            'title' => 'College News',
                            'description' => 'Stay updated with the latest college news.',
                            'icon' => 'bi-newspaper',
                            'image' => asset('img/study-india-carousel/india_college-news.jpg'),
                            'url' => route('college-news.index', ['section' => 'study-india']),
                        ],
                        [
                            'title' => 'College Reviews',
                            'description' => 'Read genuine student college experiences.',
                            'icon' => 'bi-chat-square-text',
                            'image' => asset('img/study-india-carousel/study_india_reviews.jpg'),
                            'url' => route('study-india.reviews.all') . '#ign-sir-viewall-review-list',
                        ],
                        [
                            'title' => 'Ask a Question',
                            'description' => 'Get answers to your education-related questions.',
                            'icon' => 'bi-question-circle',
                            'image' => asset('img/study-india-carousel/study_india_questions.jpg'),
                            'url' => route('questions.index'),
                        ],
                    ],
                ],
                [
                    'key' => 'study-abroad',
                    'title' => 'Study Abroad',
                    'description' => 'Explore international education opportunities.',
                    'items' => [
                        [
                            'title' => 'Study Abroad',
                            'description' => 'Explore international universities and destinations.',
                            'icon' => 'bi-globe',
                            'image' => asset('img/study-abroad-carousel/study-global.jpg'),
                            'url' => url('/study-abroad'),
                        ],
                        [
                            'title' => 'Abroad Entrance Exams',
                            'description' => 'Prepare for international entrance examinations.',
                            'icon' => 'bi-journal-text',
                            'image' => asset('img/study-abroad-carousel/study-abroad-exams.jpg'),
                            'url' => route('exams.index'),
                        ],
                        [
                            'title' => 'College News',
                            'description' => 'Explore the latest international education news.',
                            'icon' => 'bi-newspaper',
                            'image' => asset('img/study-abroad-carousel/study-abroad-college-news.jpg'),
                            'url' => route('college-news.index', ['section' => 'study-abroad']),
                        ],
                        [
                            'title' => 'College Reviews',
                            'description' => 'Read experiences from students studying abroad.',
                            'icon' => 'bi-chat-square-text',
                            'image' => asset('img/study-abroad-carousel/study-abroad-reviews.jpg'),
                            'url' => route('study-abroad.reviews.index') . '#viewReviewForAbroad',
                        ],
                        [
                            'title' => 'Ask a Question',
                            'description' => 'Get guidance about studying in another country.',
                            'icon' => 'bi-question-circle',
                            'image' => asset('img/study-abroad-carousel/study-abroad-questions.jpg'),
                            'url' => route('questions.index'),
                        ],
                    ],
                ],
            ];
        @endphp

        @foreach ($ignHomeExploreCarouselGroups as $ignHomeExploreCarouselGroup)
            <div class="ign-home-explore-carousel-group" data-ign-home-explore-carousel-section
                data-ign-home-explore-carousel-key="{{ $ignHomeExploreCarouselGroup['key'] }}">
                <div class="ign-home-explore-carousel-group-heading">
                    <div class="ign-home-explore-carousel-group-info">
                        <h3>{{ $ignHomeExploreCarouselGroup['title'] }}</h3>
                        <p>{{ $ignHomeExploreCarouselGroup['description'] }}</p>
                    </div>

                    <div class="ign-home-explore-carousel-controls">
                        <button type="button" class="ign-home-explore-carousel-arrow"
                            data-ign-home-explore-carousel-prev
                            aria-label="Scroll {{ $ignHomeExploreCarouselGroup['title'] }} backward">
                            <i class="bi bi-arrow-left"></i>
                        </button>

                        <button type="button" class="ign-home-explore-carousel-arrow"
                            data-ign-home-explore-carousel-next
                            aria-label="Scroll {{ $ignHomeExploreCarouselGroup['title'] }} forward">
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="ign-home-explore-carousel-viewport" data-ign-home-explore-carousel-viewport>
                    <div class="ign-home-explore-carousel-track" data-ign-home-explore-carousel-track>
                        @foreach ($ignHomeExploreCarouselGroup['items'] as $ignHomeExploreCarouselItem)
                            <a href="{{ $ignHomeExploreCarouselItem['url'] }}"
                                class="ign-home-explore-carousel-card">
                                <div class="ign-home-explore-carousel-image">
                                    <img src="{{ $ignHomeExploreCarouselItem['image'] }}"
                                        alt="{{ $ignHomeExploreCarouselItem['title'] }}" loading="lazy">

                                    <span class="ign-home-explore-carousel-icon">
                                        <i class="bi {{ $ignHomeExploreCarouselItem['icon'] }}"></i>
                                    </span>
                                </div>

                                <div class="ign-home-explore-carousel-content">
                                    <h4>{{ $ignHomeExploreCarouselItem['title'] }}</h4>

                                    <p>{{ $ignHomeExploreCarouselItem['description'] }}</p>

                                    <span class="ign-home-explore-carousel-link">
                                        Explore Now
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>


<section class="yj-journey-section">
    <div class="yj-container">
        <h2 class="yj-heading">Your Journey Begins Here</h2>
        <ul class="yj-feature-list">
            @foreach ($yjJourneyFeatures as $yjFeature)
                <li class="yj-feature-item">
                    <span class="yj-icon-check"><i class="{{ $yjFeature['icon'] }}"></i></span>
                    <span class="yj-feature-text">{{ $yjFeature['title'] }}</span>

                    <span class="yj-feature-arrow" aria-hidden="true">
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<section class="ir-hero-section">
    <div class="ir-container">
        <!-- Top Call to Action Block -->
        <div class="ir-cta-block">
            <span class="ir-tagline">Education Reimagined.</span>
            <h2 class="ir-main-heading">Lifelong Success Begins Here.</h2>

            {{-- <div class="ir-btn-wrapper">
                <a href="/contact" class="ir-btn-primary">Book a Free Counselling Session</a>
            </div> --}}
            <a href="#" class="ir-btn-primary  ign-enquiry-popup-trigger" data-source="Home - Hero Banner">
                Book a Free Counselling Session
            </a>
        </div>

        <hr class="ir-divider" />
    </div>
</section>

<section class="programs-section">
    <div class="container">
        <h2 class="section-title2">Popular Online Programs</h2>
        <p class="section-subtitle">
            Industry-relevant programs designed for your career growth
        </p>
        <div class="program-grid">
            <!-- Card 1 -->
            @foreach ($programCourses as $program)
                <div class="program-card">
                    <div class="icon-online">
                        <img src="{{ asset($program['image']) }}" alt="">
                    </div>
                    <h3>{{ $program['title'] }}</h3>
                    <p>{{ $program['description'] }}</p>
                    <span class="duration">{{ $program['duration'] }}</span>
                    <button>Check Eligibility</button>
                </div>
            @endforeach

        </div>
        <div class="view-all">
            <a href="{{ route('study-india.universities-courses') }}">View All Programs →</a>
        </div>
    </div>
</section>


<section class="why-choose">
    <div class="container">
        <h2 class="why-title">Why Students Choose Ignition Edutech?</h2>
        <p class="section-subtitle2">
            We make higher education simple, accessible, and career-focused.
        </p>
        <div class="features-grid">

            @foreach ($whyChooseFeatures as $feature)
                <div class="feature-box">
                    <div class="icon-why">
                        <img src="{{ asset($feature['image']) }}" alt="">
                    </div>
                    <h4>{{ $feature['title'] }}</h4>
                    <p>{{ $feature['description'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="help-section">
    <div class="container help-wrapper">
        <div class="help-image">
            <img src="{{ asset('img/about/still-confused-image.png') }}" alt="Student Guidance">
        </div>
        <div class="help-content">
            <h2>Still Confused? Let Our Experts Help You!</h2>
            <div class="row">
                <div class="col-lg-7">
                    <p>
                        Get personalized career guidance from our expert counselors and make the right decision for your
                        future.
                    </p>
                    <ul class="help-points">
                        <li>✔ Find the best program based on your career goals</li>
                        <li>✔ Understand fees, eligibility & admission process</li>
                        <li>✔ Get support with university selection</li>
                    </ul>
                    <div class="help-actions">
                        <a href="#" class="btn-primary  ign-enquiry-popup-trigger"
                            data-source="Home - Hero Banner">Book Free Counselling
                            Call</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-box">
                        <h4>Talk to Our Experts</h4>
                        <p>Mon - Sat (10 AM - 7 PM)</p>
                        <a href="tel:+918655055150" class="phone">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none">
                                    <path
                                        d="M10.291 3.86696C10.9924 4.00354 11.637 4.34592 12.1424 4.85028C12.6477 5.35463 12.9907 5.99801 13.1276 6.69808M10.291 1C11.7483 1.16158 13.1072 1.81291 14.1446 2.84704C15.182 3.88118 15.8363 5.23665 16 6.69091M15.2819 12.4105V14.5607C15.2827 14.7603 15.2417 14.9579 15.1616 15.1408C15.0815 15.3237 14.964 15.4879 14.8166 15.6228C14.6692 15.7578 14.4952 15.8605 14.3058 15.9244C14.1163 15.9884 13.9156 16.0121 13.7164 15.9942C11.5067 15.7545 9.38404 15.0009 7.5191 13.7938C5.78402 12.6934 4.31297 11.2251 3.21043 9.49336C1.99681 7.62353 1.24154 5.49467 1.00583 3.27923C0.987883 3.08103 1.01148 2.88127 1.07513 2.69267C1.13877 2.50407 1.24106 2.33076 1.37549 2.18378C1.50992 2.0368 1.67353 1.91937 1.85592 1.83896C2.03831 1.75855 2.23548 1.71693 2.43487 1.71674H4.58921C4.93771 1.71332 5.27557 1.83649 5.53981 2.06331C5.80406 2.29012 5.97665 2.6051 6.02543 2.94953C6.11636 3.63765 6.28499 4.31329 6.52811 4.96357C6.62472 5.22011 6.64564 5.49891 6.58836 5.76695C6.53109 6.03498 6.39803 6.28101 6.20496 6.47589L5.29296 7.38614C6.31523 9.18053 7.8038 10.6663 9.60163 11.6866L10.5136 10.7763C10.7089 10.5836 10.9554 10.4508 11.2239 10.3936C11.4925 10.3365 11.7718 10.3574 12.0288 10.4538C12.6804 10.6964 13.3573 10.8648 14.0467 10.9555C14.3956 11.0046 14.7142 11.18 14.9419 11.4483C15.1696 11.7165 15.2906 12.059 15.2819 12.4105Z"
                                        stroke="#065f46" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            +91 8655 055 150</a>
                        <a href="https://wa.me/+918655055150" class="btn-whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            Chat on WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h2 class="section-title">What Our Students Say</h2>
        <p class="section-subtitle">Real students. Real stories. Real success.</p>
        <div class="testimonial-grid">

            @foreach ($testimonialData as $testimonial)
                <div class="testimonial-card">
                    <div class="students-review">
                        <div class="icon-review">
                            <img src="{{ asset($testimonial['review_image']) }}" alt="">
                        </div>
                        <div class="stars">{{ $testimonial['stars'] }}</div>
                    </div>
                    <p class="review">
                        {{ $testimonial['review'] }}
                    </p>
                    <div class="student">
                        <img src="{{ asset($testimonial['student_image']) }}" alt="">
                        <div>
                            <h4>{{ $testimonial['name'] }}</h4>
                            <span>{{ $testimonial['course'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container ratings-width">
            <div class="ratings">
                <div class="icon-ratings">
                    <img src="{{ asset('img/icon/google-icon.png') }}" alt="">
                    <div class="google">Google <strong>4.8/5</strong></div>
                    <div class="stars-ratings">★★★★★</div>
                </div>
                <div class="justdial-icon">
                    <img src="{{ asset('img/icon/Justdial_Logo.svg.png') }}" alt="">
                    <div><strong>4.7/5</strong></div>
                    <div class="stars-ratings">★★★★★</div>
                </div>
                <div class="trustpilot-icon">
                    <img src="{{ asset('img/icon/Trustpilot_Logo.png') }}" alt="">
                    <div><strong>4.6/5</strong></div>
                    <div class="stars-ratings">★★★★★</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-works">
    <div class="container">
        <h2>How It Works?</h2>
        <p class="subtitle">Your journey from inquiry to admission in 3 simple steps</p>

        <div class="steps">
            <div class="step">
                <div class="icon-works orange">
                    <i class="fa-solid fa-xl fa-file-signature"></i>
                </div>
                <div class="works-content">
                    <h4>Fill the Enquiry Form</h4>
                    <p>Share your details and our counselor will connect with you within 30 minutes.</p>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step">
                <div class="icon-works purple">
                    <i class="fa-solid fa-xl fa-user-graduate"></i>
                </div>
                <div class="works-content">
                    <h4>Get Expert Counselling</h4>
                    <p>Understand your options, fees, and career opportunities with expert guidance.</p>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step">
                <div class="icon-works blue">
                    <i class="fa-solid fa-xl fa-circle-check"></i>
                </div>
                <div class="works-content">
                    <h4>Confirm Admission</h4>
                    <p>We assist you in the complete admission process—simple, fast, and transparent.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-service-section">
    <div class="container">
        <div class="stats-service">
            @foreach ($statsServiceData as $stat)
                <div class="stat">
                    <div class="icon-stat">
                        <img src="{{ asset($stat['image']) }}" alt="">
                    </div>
                    <div class="stat-content">
                        <h3>{{ $stat['number'] }}</h3>
                        <p>{{ $stat['title'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="success-section">
    <div class="container">
        <h2>Success Stories That Inspire</h2>
        <p class="subtitle">Students who transformed their careers with us</p>
        <div class="cards">

            @foreach ($successStories as $story)
                <div class="card">
                    <img src="{{ asset($story['image']) }}" alt="">
                    <div class="card-content-area">
                        <h3>{{ $story['title'] }}</h3>
                        <p>{{ $story['description'] }}</p>
                        <span>- {{ $story['name'] }}</span>
                        <small>{{ $story['course'] }}</small>
                    </div>
                </div>
            @endforeach

        </div>
        <a href="{{ route('success-stories.index') }}" class="view-more">View More Success Stories →</a>
    </div>
</section>



<section class="approved-service">
    <div class="container">
        <h2>Approved. Accredited. Trusted.</h2>
        <div class="approved-trusted">
            @foreach ($approvedServices as $service)
                <div class="{{ $service['card_class'] }}">
                    <div class="approved">
                        <img src="{{ asset($service['image']) }}" alt="">
                    </div>
                    <div class="approved-content">
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="online-education">
    <div class="container-education">
        <div class="left-content">
            <h2>Online Education That <br> Fits Your Life & Goals</h2>
            <p>
                At Ignition Edutech, we believe in helping students achieve their academic and career goals
                with flexible learning solutions.
            </p>
            <p>
                Our online degree programs are designed for students and working professionals who want to
                advance their education without compromising their schedules. With expert faculty, practical
                coursework, and industry-relevant curriculum, we ensure that you not only earn a degree but
                also gain the skills and confidence to succeed in your career.
            </p>
        </div>
        <div class="middle-content">
            <h4>Why Online Education is the Future?</h4>
            <ul>
                <li>Learn from anywhere, anytime</li>
                <li>Industry-relevant curriculum</li>
                <li>Cost-effective education</li>
                <li>Better work-life-study balance</li>
                <li>Globally recognized degrees</li>
            </ul>
        </div>
    </div>
    <div class="right-image">
        <img src="{{ asset('img/help/index-help.jpg') }}" alt="Online Learning">
    </div>
</section>

<section class="faq-section">
    <div class="container">

        <div class="row align-items-start g-4">

            <!-- Left FAQ -->

            <div class="col-lg-6">

                <h2 class="faq-title mb-4">
                    Frequently Asked Questions
                </h2>

                <div class="faq-item active">
                    <div class="faq-question">
                        Are the degrees UGC approved?
                        <span>−</span>
                    </div>

                    <div class="faq-answer">
                        Yes, all the universities we are associated with are UGC
                        approved and recognized.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How is the online learning experience?
                        <span>+</span>
                    </div>

                    <div class="faq-answer">
                        Our platform provides interactive classes, recorded
                        lectures, and expert guidance.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What are the eligibility criteria?
                        <span>+</span>
                    </div>

                    <div class="faq-answer">
                        Eligibility depends on the program. Generally, a 10+2 or
                        graduation is required.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I get placement support?
                        <span>+</span>
                    </div>

                    <div class="faq-answer">
                        Yes, we provide placement assistance, resume building,
                        and interview preparation.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How can I pay the course fee?
                        <span>+</span>
                    </div>

                    <div class="faq-answer">
                        You can pay via online transfer, EMI options, or
                        supported payment gateways.
                    </div>
                </div>

            </div>

            <!-- Right CTA -->

            <div class="col-lg-6">
                <div class="cta-card-right">
                    <div class="cta-card">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="cta-card-content">
                                    <h3>Ready to Start Your Journey?</h3>
                                    <p>Take the first step towards a successful career.</p>
                                    <a href="{{ route('study-india.register') }}" class="btn primary-btn">Apply
                                        Now</a>
                                    <span class="or">or</span>
                                    <a href="#" class="btn outline-btn ign-enquiry-popup-trigger"
                                        data-source="Home - Hero Banner">Talk to Counselor</a>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('img/about/frequently-img.png') }}" class="img-fluid frequently"
                                    alt="Graduation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


{{-- <div class="hs-form-frame" data-region="na2" data-form-id="a7c9f6e6-c812-409c-8110-288692f5e36e"
    data-portal-id="247564101"></div> --}}


<x-university-enquiry-popup :courses="$courses ?? []" />

{{-- <x-frontend-footer /> --}}
<x-new-footer />


<!-- footer-area-start -->

{{-- <script>
    const track = document.getElementById("logoTrack");
    const nextBtn = document.querySelector(".logo-section .next");
    const prevBtn = document.querySelector(".logo-section .prev");

    let scrollAmount = 200;
    let autoScrollSpeed = 2;
    let autoScroll;
    let isPaused = false;

    // Duplicate logos for infinite loop
    const originalItems = Array.from(track.children);

    originalItems.forEach((item) => {
        track.appendChild(item.cloneNode(true));
    });


    // Automatic Infinite Horizontal Scrolling
    function startAutoScroll() {
        clearInterval(autoScroll);

        autoScroll = setInterval(() => {
            if (isPaused) return;

            track.scrollLeft += autoScrollSpeed;

            // Loop continuously without jumping to the beginning
            if (track.scrollLeft >= halfWidth) {
                track.scrollLeft -= halfWidth;
            }

        }, 15);
    }

    // Next Button
    nextBtn.addEventListener("click", () => {
        isPaused = true;

        track.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
        });

        setTimeout(() => {
            isPaused = false;
        }, 700);
    });

    // Previous Button
    prevBtn.addEventListener("click", () => {
        isPaused = true;

        track.scrollBy({
            left: -scrollAmount,
            behavior: "smooth"
        });

        setTimeout(() => {
            isPaused = false;
        }, 700);
    });

    // Pause on Hover
    track.addEventListener("mouseenter", () => {
        isPaused = true;
    });

    track.addEventListener("mouseleave", () => {
        isPaused = false;
    });

    // Start Auto Scroll
    startAutoScroll();
</script> --}}



{{-- Auto scroll bar start  --}}
<script>
    (() => {
        "use strict";

        const track = document.getElementById("logoTrack");
        const nextBtn = document.querySelector(".logo-section .next");
        const prevBtn = document.querySelector(".logo-section .prev");

        if (!track || track.dataset.infiniteInitialized) return;
        track.dataset.infiniteInitialized = "true";

        const scrollAmount = 200;
        const autoScrollSpeed = 2;
        const originalItems = Array.from(track.children);

        let loopWidth = 0,
            position = 0,
            isPaused = false;
        let animationFrame = null,
            lastFrameTime = 0,
            buttonAnimation = null;

        // Disable native smooth scrolling
        track.style.scrollBehavior = "auto";

        // Duplicate original university logos
        originalItems.forEach(item => {
            const clone = item.cloneNode(true);
            clone.setAttribute("aria-hidden", "true");
            track.appendChild(clone);
        });

        const clonedFirstItem = track.children[originalItems.length];

        // Calculate exact loop width
        function calculateLoopWidth() {
            if (!originalItems.length || !clonedFirstItem) return;

            loopWidth = clonedFirstItem.getBoundingClientRect().left -
                originalItems[0].getBoundingClientRect().left;

            position = ((position % loopWidth) + loopWidth) % loopWidth;
            track.scrollLeft = position;
        }

        // Smooth button animation
        function moveSlider(distance) {
            buttonAnimation = {
                distance,
                startTime: null,
                previousEase: 0,
                duration: 450
            };
        }

        // Next and previous buttons
        if (nextBtn) nextBtn.addEventListener("click", event => {
            event.preventDefault();
            moveSlider(scrollAmount);
        });

        if (prevBtn) prevBtn.addEventListener("click", event => {
            event.preventDefault();
            moveSlider(-scrollAmount);
        });

        // Pause on hover
        track.addEventListener("mouseenter", () => isPaused = true);
        track.addEventListener("mouseleave", () => isPaused = false);

        // Continuous infinite scrolling
        function animate(currentTime) {
            if (!lastFrameTime) lastFrameTime = currentTime;

            const deltaTime = Math.min(currentTime - lastFrameTime, 40);
            lastFrameTime = currentTime;

            if (!isPaused && loopWidth > 0) {
                position += autoScrollSpeed * (deltaTime / 15);
            }

            // Smooth arrow movement without stopping auto-scroll
            if (buttonAnimation) {
                const animation = buttonAnimation;

                if (animation.startTime === null) animation.startTime = currentTime;

                const progress = Math.min(
                    (currentTime - animation.startTime) / animation.duration, 1
                );

                const eased = progress < 0.5 ?
                    2 * progress * progress :
                    1 - Math.pow(-2 * progress + 2, 2) / 2;

                position += animation.distance * (eased - animation.previousEase);
                animation.previousEase = eased;

                if (progress >= 1) buttonAnimation = null;
            }

            // Normalize position for seamless infinite looping
            if (loopWidth > 0) {
                position = ((position % loopWidth) + loopWidth) % loopWidth;
                track.scrollLeft = position;
            }

            animationFrame = requestAnimationFrame(animate);
        }

        // Initialize after images load
        function init() {
            calculateLoopWidth();

            position = 0;
            track.scrollLeft = 0;

            if (animationFrame) cancelAnimationFrame(animationFrame);

            lastFrameTime = 0;
            animationFrame = requestAnimationFrame(animate);
        }

        if (document.readyState === "complete") {
            init();
        } else {
            window.addEventListener("load", init, {
                once: true
            });
        }

        // Recalculate on window resize
        let resizeTimer;

        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(calculateLoopWidth, 200);
        });

    })();
</script>

{{-- Auto scroll Bar End  --}}

<script>
    document.querySelectorAll(".faq-question").forEach((question) => {

        question.addEventListener("click", function() {

            const item = this.parentElement;
            const icon = this.querySelector("span");

            document.querySelectorAll(".faq-item").forEach((faq) => {

                if (faq !== item) {
                    faq.classList.remove("active");
                    faq.querySelector("span").textContent = "+";
                }

            });

            item.classList.toggle("active");

            if (item.classList.contains("active")) {
                icon.textContent = "−";
            } else {
                icon.textContent = "+";
            }

        });

    });
</script>


<script>
    (function() {
        'use strict';

        function ignHomeExploreCarouselInitialize() {
            const sections = document.querySelectorAll('[data-ign-home-explore-carousel-section]');

            if (!sections.length) return;

            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            sections.forEach(function(section) {
                if (section.dataset.ignHomeExploreCarouselInitialized === 'true') return;

                const viewport = section.querySelector('[data-ign-home-explore-carousel-viewport]');
                const track = section.querySelector('[data-ign-home-explore-carousel-track]');
                const previous = section.querySelector('[data-ign-home-explore-carousel-prev]');
                const next = section.querySelector('[data-ign-home-explore-carousel-next]');

                if (!viewport || !track) return;

                const originalCards = Array.from(track.children);

                if (originalCards.length < 2) return;

                section.dataset.ignHomeExploreCarouselInitialized = 'true';

                // IMPORTANT: Keep this as the only auto-scroll controller.
                const speed = 150;

                let animationFrame = null;
                let previousTime = 0;
                let resumeTimer = null;
                let paused = true;
                let userInteracting = false;

                // Calculate the exact width of the ORIGINAL card set.
                let originalWidth = 0;

                // CLONE CARDS
                originalCards.forEach(function(card) {
                    const clone = card.cloneNode(true);

                    clone.setAttribute('aria-hidden', 'true');

                    clone.querySelectorAll('a, button').forEach(function(element) {
                        element.setAttribute('tabindex', '-1');
                    });

                    track.appendChild(clone);
                });

                // CALCULATE LOOP WIDTH
                function ignHomeExploreCarouselCalculateWidth() {
                    // Calculate the distance between the first original and first cloned card.
                    if (originalCards.length && track.children[originalCards.length]) {
                        const firstOriginal = originalCards[0];
                        const firstClone = track.children[originalCards.length];

                        originalWidth = firstClone.offsetLeft - firstOriginal.offsetLeft;
                    }
                }

                ignHomeExploreCarouselCalculateWidth();

                // PAUSE
                function ignHomeExploreCarouselPause() {
                    paused = true;
                    previousTime = 0;

                    if (animationFrame !== null) {
                        cancelAnimationFrame(animationFrame);
                        animationFrame = null;
                    }
                }

                // RESUME
                function ignHomeExploreCarouselResume() {
                    if (reducedMotion || document.hidden || userInteracting) return;
                    if (!paused) return;

                    paused = false;
                    previousTime = 0;

                    animationFrame = requestAnimationFrame(ignHomeExploreCarouselAnimate);
                }

                // AUTO SCROLL
                function ignHomeExploreCarouselAnimate(timestamp) {
                    animationFrame = null;

                    if (paused || userInteracting || document.hidden) return;

                    if (previousTime !== 0) {
                        // Limit frame delta to prevent visible jumps.
                        const elapsed = Math.min((timestamp - previousTime) / 1000, 0.016);

                        viewport.scrollLeft += speed * elapsed;

                        // Seamless loop.
                        if (originalWidth > 0 && viewport.scrollLeft >= originalWidth) {
                            viewport.scrollLeft -= originalWidth;
                        }
                    }

                    previousTime = timestamp;
                    animationFrame = requestAnimationFrame(ignHomeExploreCarouselAnimate);
                }

                // START USER INTERACTION
                function ignHomeExploreCarouselStartInteraction() {
                    userInteracting = true;
                    clearTimeout(resumeTimer);
                    ignHomeExploreCarouselPause();
                }

                // END USER INTERACTION
                function ignHomeExploreCarouselEndInteraction() {
                    clearTimeout(resumeTimer);

                    resumeTimer = setTimeout(function() {
                        userInteracting = false;
                        paused = true;
                        ignHomeExploreCarouselResume();
                    }, 500);
                }

                // BUTTON SCROLL
                function ignHomeExploreCarouselManualScroll(direction) {
                    userInteracting = true;
                    clearTimeout(resumeTimer);
                    ignHomeExploreCarouselPause();

                    const card = originalCards[0];
                    const gap = 20;

                    const cardWidth = card ?
                        card.getBoundingClientRect().width + gap :
                        300;

                    const scrollAmount = cardWidth * 2;

                    viewport.scrollLeft += direction === 'next' ?
                        scrollAmount :
                        -scrollAmount;

                    // Keep the position inside the duplicated range.
                    if (originalWidth > 0 && viewport.scrollLeft >= originalWidth) {
                        viewport.scrollLeft -= originalWidth;
                    }

                    if (viewport.scrollLeft < 0 && originalWidth > 0) {
                        viewport.scrollLeft += originalWidth;
                    }

                    resumeTimer = setTimeout(function() {
                        userInteracting = false;
                        paused = true;
                        ignHomeExploreCarouselResume();
                    }, 500);
                }

                // PREVIOUS
                if (previous) {
                    previous.addEventListener('click', function(event) {
                        event.preventDefault();
                        ignHomeExploreCarouselManualScroll('previous');
                    });
                }

                // NEXT
                if (next) {
                    next.addEventListener('click', function(event) {
                        event.preventDefault();
                        ignHomeExploreCarouselManualScroll('next');
                    });
                }

                // MOUSE ENTER
                section.addEventListener('mouseenter', function() {
                    clearTimeout(resumeTimer);
                    ignHomeExploreCarouselPause();
                });

                // MOUSE LEAVE
                section.addEventListener('mouseleave', function() {
                    if (!userInteracting) {
                        paused = true;
                        ignHomeExploreCarouselResume();
                    }
                });

                // POINTER START
                viewport.addEventListener('pointerdown', function() {
                    ignHomeExploreCarouselStartInteraction();
                }, {
                    passive: true
                });

                // POINTER END
                viewport.addEventListener('pointerup', function() {
                    ignHomeExploreCarouselEndInteraction();
                }, {
                    passive: true
                });

                // POINTER CANCEL
                viewport.addEventListener('pointercancel', function() {
                    ignHomeExploreCarouselEndInteraction();
                }, {
                    passive: true
                });

                // WHEEL
                viewport.addEventListener('wheel', function() {
                    ignHomeExploreCarouselStartInteraction();
                    clearTimeout(resumeTimer);

                    resumeTimer = setTimeout(function() {
                        userInteracting = false;
                        paused = true;
                        ignHomeExploreCarouselResume();
                    }, 500);
                }, {
                    passive: true
                });

                // KEYBOARD FOCUS
                section.addEventListener('focusin', function() {
                    ignHomeExploreCarouselPause();
                });

                section.addEventListener('focusout', function(event) {
                    if (!section.contains(event.relatedTarget) && !userInteracting) {
                        paused = true;
                        ignHomeExploreCarouselResume();
                    }
                });

                // VISIBILITY
                document.addEventListener('visibilitychange', function() {
                    if (document.hidden) {
                        ignHomeExploreCarouselPause();
                    } else if (
                        !userInteracting &&
                        !section.contains(document.activeElement)
                    ) {
                        paused = true;
                        ignHomeExploreCarouselResume();
                    }
                });

                // WINDOW RESIZE
                window.addEventListener('resize', function() {
                    ignHomeExploreCarouselCalculateWidth();
                }, {
                    passive: true
                });

                // START
                if (!reducedMotion) {
                    paused = true;
                    ignHomeExploreCarouselResume();
                }
            });
        }

        // INITIALIZE
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', ignHomeExploreCarouselInitialize);
        } else {
            ignHomeExploreCarouselInitialize();
        }
    })();
</script>
