<x-frontend-header/>
<x-study-india-header />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@500;600;700;800&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/study-india/universities-courses.css') }}?v=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


@php
    $ignUnivDirectoryOnline = [
        [
            'name' => 'NMIMS CDOE',
            'short' => 'NMIMS',
            'img' => 'img/campus/nimims-university.jpg',
            'description' => 'Online Degree ProgramsOnline Degree ProgramNMIMS Distance Education Online Degree Programs
',
            'route' => 'nmims-distance-education-online-degree-programs',
        ],

        [
            'name' => 'Amity University Online',
            'short' => 'AMITY',
            'img' => 'img/campus/amity-university.jpg',
            'description' => 'Amity University Online UG Courses and PG Programs',
            'route' => 'amity-university-online-ug-pg-courses',
        ],
        [
            'name' => 'Manipal Online',
            'short' => 'MANIPAL',
            'img' => 'img/campus/manipal-university.jpg',
            'description' =>
                'Build your next qualification with a Manipal Online learning path that works around your life',
            'route' => 'manipal-online',
        ],

        [
            'name' => 'Jain Online',
            'short' => 'JAIN',
            'img' => 'img/campus/jain-university-online.jpg',
            'description' =>
                'Accelerate your career with a top-tier online degree built for the digital global economy.',
            'route' => 'jain-online',
        ],
        [
            'name' => 'N.L. Dalmia Online',
            'short' => 'NLD',
            'img' => 'img/campus/nldalmia-online.jpg',
            'description' =>
                'Master next-generation competencies with university degrees built for ambitious digital-era careers',
            'route' => 'nldalmia-online',
        ],
        [
            'name' => 'Vivekananda Global University',
            'short' => 'VGU',
            'img' => 'img/campus/onlinevgu-university.jpg',
            'description' => 'Unlock Your Potential with UGC Entitled Online Degrees',
            'route' => 'vivekananda-global-university-online',
        ],
        [
            'name' => 'GLA University Online',
            'short' => 'GLA',
            'img' => 'img/campus/gla-university-online.jpg',
            'description' => 'Master the Tech & Design Skills That Command the Market',
            'route' => 'gla-university-online',
        ],
        [
            'name' => 'University of Massachusetts Global',
            'short' => 'UMASS',
            'img' => 'img/campus/university-of-massachusetts-global.jpg',
            'description' => 'Launch Your Next Career Leap with Global Degree Programs',
            'route' => 'university-of-massachusetts-global-online',
        ],
    ];

    $ignUnivDirectoryOffline = [
        [
            'name' => 'Vellore Institute of Technology',
            'short' => 'VIT',
            'img' => 'img/campus/VIT-chennai-university.jpg',
            'description' => 'VIT Online Learning Programs, UGC Approved VIT Online Degree Courses',
            'route' => 'vit-online-degree-courses',
        ],

        [
            'name' => 'Sikkim Manipal University',
            'short' => 'SMU',
            'img' => 'img/campus/sikkim-manipal-university.jpg',
            'description' => 'Choose a credible online degree path backed by SMU long-standing academic identity',
            'route' => 'smu',
        ],

        [
            'name' => 'DY Patil Pune',
            'short' => 'DY PATIL',
            'img' => 'img/campus/DPU-pune-university.jpg',
            'description' => 'Present DPU-COL as a career-forward digital campus for ambitious professionals.',
            'route' => 'dr-d-y-patil-pune',
        ],
        [
            'name' => 'Bennett University',
            'short' => 'BENNETT',
            'img' => 'img/campus/bennett-university.jpg',
            'description' =>
                'Master next-generation competencies with university degrees built for ambitious digital-era careers',
            'route' => 'bennett-university',
        ],
    ];
@endphp

<main class="ign-univ-directory-page">

    {{-- HERO SECTION --}}
    <section class="ign-univ-directory-hero">
        <div class="ign-univ-directory-hero-pattern"></div>

        <div class="ign-univ-directory-container ign-univ-directory-hero-inner">
            <div class="ign-univ-directory-hero-content">
                <span class="ign-univ-directory-eyebrow">
                    <i class="bi bi-mortarboard-fill"></i>
                    YOUR FUTURE STARTS HERE
                </span>

                <h1>Discover the Right University for Your <span>Future</span></h1>

                <p>
                    Explore universities, compare learning options and find the
                    right academic path to achieve your career goals.
                </p>

                <div class="ign-univ-directory-search">
                    <i class="bi bi-search"></i>
                    <input type="search" id="ign-univ-directory-search-input" placeholder="Search universities..."
                        autocomplete="off">
                    <button type="button" id="ign-univ-directory-search-button">
                        Search
                    </button>
                </div>

                <div class="ign-univ-directory-hero-links">
                    <a href="#ign-univ-directory-online">
                        <i class="bi bi-laptop"></i> Online Universities
                    </a>
                    <a href="#ign-univ-directory-offline">
                        <i class="bi bi-building"></i> Offline Universities
                    </a>
                </div>
            </div>


             <div class="amt-hero-card">
                    <h3>Get Free Career Counselling</h3>
                    <p class="amt-muted">
                        Talk to our experts and choose the right degree for your career.
                    </p>

                    @includeIf('forms.courses.amity.amity-ba-course-form')

                </div>
        </div>

        <div class="ign-univ-directory-hero-bottom"></div>
    </section>


    {{-- ONLINE UNIVERSITIES --}}
    <section class="ign-univ-directory-section" id="ign-univ-directory-online">
        <div class="ign-univ-directory-container">

            <div class="ign-univ-directory-section-heading">
                <div class="ign-univ-directory-heading-left">
                    <span class="ign-univ-directory-section-icon ign-univ-directory-online-icon">
                        <i class="bi bi-laptop"></i>
                    </span>
                    <div>
                        <span class="ign-univ-directory-section-kicker">FLEXIBLE LEARNING</span>
                        <h2>Online Universities</h2>
                        <p>Explore flexible online learning options from universities.</p>
                    </div>
                </div>

                <span class="ign-univ-directory-count">
                    {{ count($ignUnivDirectoryOnline) }} Universities
                </span>
            </div>

            <div class="ign-univ-directory-slider" data-ign-univ-directory-slider="online">

                <div class="ign-univ-directory-slider-track">
                    @foreach ($ignUnivDirectoryOnline as $university)
                        <article class="ign-univ-directory-card" data-ign-univ-directory-card
                            data-university-name="{{ strtolower($university['name']) }}">

                            <a href="{{ route($university['route']) }}" class="ign-univ-directory-card-link"
                                aria-label="Explore {{ $university['name'] }}">

                                <div class="ign-univ-directory-card-logo">
                                    {{-- <span>{{ $university['img'] }}</span> --}}
                                    <img src="{{ asset($university['img']) }}" alt="{{ $university['name'] }}"
                                        class="ign-univ-directory-campus-logo" loading="lazy">
                                </div>

                                <div class="ign-univ-directory-card-content">
                                    <span class="ign-univ-directory-card-type">
                                        <i class="bi bi-wifi"></i> ONLINE
                                    </span>
                                    <h3>{{ $university['name'] }}</h3>
                                    <p>{{ $university['description'] }}</p>
                                </div>

                                <div class="ign-univ-directory-card-footer">
                                    <span>Explore University</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </a>
                        </article>
                    @endforeach

                    {{-- Duplicate cards for seamless automatic scrolling --}}
                    @foreach ($ignUnivDirectoryOnline as $university)
                        <article class="ign-univ-directory-card ign-univ-directory-card-clone" aria-hidden="true">

                            <a href="{{ route($university['route']) }}" tabindex="-1"
                                class="ign-univ-directory-card-link">

                                <div class="ign-univ-directory-card-logo">
                                    <img src="{{ asset($university['img']) }}" alt="{{ $university['name'] }}"
                                        class="ign-univ-directory-campus-logo" loading="lazy">
                                </div>

                                <div class="ign-univ-directory-card-content">
                                    <span class="ign-univ-directory-card-type">
                                        <i class="bi bi-wifi"></i> ONLINE
                                    </span>
                                    <h3>{{ $university['name'] }}</h3>
                                    <p>{{ $university['description'] }}</p>
                                </div>

                                <div class="ign-univ-directory-card-footer">
                                    <span>Explore University</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="ign-univ-directory-slider-note">
                <i class="bi bi-arrow-left-right"></i>
                <span>Universities move automatically. Hover to pause or swipe to explore.</span>
            </div>
        </div>
    </section>


    {{-- OFFLINE UNIVERSITIES --}}
    <section class="ign-univ-directory-section ign-univ-directory-offline-section" id="ign-univ-directory-offline">
        <div class="ign-univ-directory-container">

            <div class="ign-univ-directory-section-heading">
                <div class="ign-univ-directory-heading-left">
                    <span class="ign-univ-directory-section-icon ign-univ-directory-offline-icon">
                        <i class="bi bi-building"></i>
                    </span>
                    <div>
                        <span class="ign-univ-directory-section-kicker">CAMPUS EXPERIENCE</span>
                        <h2>Offline Universities</h2>
                        <p>Explore universities offering campus-based learning options.</p>
                    </div>
                </div>

                <span class="ign-univ-directory-count">
                    {{ count($ignUnivDirectoryOffline) }} Universities
                </span>
            </div>

            <div class="ign-univ-directory-slider ign-univ-directory-offline-slider"
                data-ign-univ-directory-slider="offline">

                <div class="ign-univ-directory-slider-track">
                    @foreach ($ignUnivDirectoryOffline as $university)
                        <article class="ign-univ-directory-card" data-ign-univ-directory-card
                            data-university-name="{{ strtolower($university['name']) }}">

                            <a href="{{ route($university['route']) }}" class="ign-univ-directory-card-link"
                                aria-label="Explore {{ $university['name'] }}">

                                <div class="ign-univ-directory-card-logo ">
                                    {{-- <span>{{ $university['img'] }}</span> --}}

                                    <img src="{{ asset($university['img']) }}" alt="{{ $university['name'] }}"
                                        class="ign-univ-directory-campus-logo" loading="lazy">
                                </div>

                                <div class="ign-univ-directory-card-content">
                                    <span class="ign-univ-directory-card-type ign-univ-directory-campus-type">
                                        <i class="bi bi-building"></i> CAMPUS
                                    </span>
                                    <h3>{{ $university['name'] }}</h3>
                                    <p>{{ $university['description'] }}</p>
                                </div>

                                <div class="ign-univ-directory-card-footer">
                                    <span>Explore University</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </a>
                        </article>
                    @endforeach

                    {{-- Duplicate cards for seamless automatic scrolling --}}
                    @foreach ($ignUnivDirectoryOffline as $university)
                        <article class="ign-univ-directory-card ign-univ-directory-card-clone" aria-hidden="true">

                            <a href="{{ route($university['route']) }}" tabindex="-1"
                                class="ign-univ-directory-card-link">

                                <div class="ign-univ-directory-card-logo ">
                                    {{-- <span>{{ $university['img'] }}</span> --}}
                                    <img src="{{ asset($university['img']) }}" alt="{{ $university['name'] }}"
                                        class="ign-univ-directory-campus-logo" loading="lazy">
                                </div>

                                <div class="ign-univ-directory-card-content">
                                    <span class="ign-univ-directory-card-type ign-univ-directory-campus-type">
                                        <i class="bi bi-building"></i> CAMPUS
                                    </span>
                                    <h3>{{ $university['name'] }}</h3>
                                    <p>{{ $university['description'] }}</p>
                                </div>

                                <div class="ign-univ-directory-card-footer">
                                    <span>Explore University</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="ign-univ-directory-slider-note">
                <i class="bi bi-arrow-left-right"></i>
                <span>Swipe or scroll to explore campus-based universities.</span>
            </div>
        </div>
    </section>


    {{-- WHY IGNITION --}}
    <section class="ign-univ-directory-benefits">
        <div class="ign-univ-directory-container">
            <div class="ign-univ-directory-benefits-heading">
                <span class="ign-univ-directory-section-kicker">YOUR EDUCATION PARTNER</span>
                <h2>Make Your University Journey Easier</h2>
                <p>Get support while exploring universities and choosing your next step.</p>
            </div>

            <div class="ign-univ-directory-benefits-grid">
                <div class="ign-univ-directory-benefit-card">
                    <span><i class="bi bi-compass"></i></span>
                    <h3>Explore Options</h3>
                    <p>Discover universities and learning opportunities in one place.</p>
                </div>

                <div class="ign-univ-directory-benefit-card">
                    <span><i class="bi bi-person-check"></i></span>
                    <h3>Guidance</h3>
                    <p>Get help understanding your university and course options.</p>
                </div>

                <div class="ign-univ-directory-benefit-card">
                    <span><i class="bi bi-mortarboard"></i></span>
                    <h3>Plan Your Future</h3>
                    <p>Take an informed step towards your academic and career goals.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- ---------- CTA  ---------- --}}

    <section class="ign-psy-cta" id="psy-book">
        <div class="container">
            <div class="ign-psy-cta-box">
                <div class="ign-psy-cta-content">
                    <h3>Find the Right University. Build Your Future.</h3>
                    <p>Explore online and offline universities, compare courses, and discover the right learning path to
                        match your career goals. Take the next step toward your future with Ignition Edutech.</p>
                </div>

                <a href="{{ route('contact') }}" class="ign-psy-cta-btn">
                    Get Course Guidance
                </a>
            </div>
        </div>
    </section>

</main>

<script src="{{ asset('js/study-india/universities-courses.js') }}?v=1"></script>

<x-frontend-footer />
