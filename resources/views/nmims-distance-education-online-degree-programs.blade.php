<x-frontend-header />

<main>
    <!-- about banner area start -->
    <section class="nmims-hero">

        <div class="container nmims-hero-grid">

            <!-- Left Content -->
            <div class="nmims-hero-content">
                <span><img src="{{ asset('\img\brand\brand-logos\nmims-logo2.png') }}" alt=""
                        width="30%"></span>

                <h1>NMIMS Distance Education Online Degree Programs</h1>
                <h2>Advance Your Career with UGC Entitled NMIMS Online Degree Courses</h2>
                <p class="fw-bold">MBA, BBA, B.Com and Executive Programs</p>
                <p>NMIMS CDOE offers UGC entitled NMIMS online degree courses built for students and working
                    professionals across India. You can study at your own pace, hold on to your job and still earn a
                    degree through a trusted NMIMS distance learning university with a strong track record in placements
                    and academics.</p>

                <div class="nmims-hero-banner-area">
                    <button class="nmims-hero-button" type="submit">Apply Now <span><svg
                                xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12"
                                fill="none">
                                <path d="M1 11L6 6L1 1" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg></span></button>
                </div>

                <!-- <p>Empower your career with NMIMS CDOE’s flexible and industry-aligned online programs, designed to fit seamlessly into your professional life.</p> -->

                <div class="nmims-icon-row">
                    <div class="nmims-icon-box">
                        <div class="nmims-icon">
                            <img src="{{ asset('img/icon/entitled.png') }}" alt="">
                        </div>
                        <div class="text">
                            <strong>UGC Entitled</strong>
                            <span>Programs</span>
                        </div>
                    </div>
                    <div class="nmims-icon-box">
                        <div class="nmims-icon">
                            <img src="{{ asset('img/icon/grade.png') }}" alt="">
                        </div>
                        <div class="text">
                            <strong>NAAC A+ University</strong>
                            <span>University</span>
                        </div>
                    </div>
                    <div class="nmims-icon-box">
                        <div class="nmims-icon">
                            <img src="{{ asset('img/icon/post-icon-03.png') }}" alt="">
                        </div>
                        <div class="text">
                            <strong>AICTE Approved Programs</strong>
                            <span>Curriculum</span>
                        </div>
                    </div>

                    <div class="nmims-icon-box">
                        <div class="nmims-icon">
                            <img src="{{ asset('img/icon/post-icon-01.png') }}" alt="">
                        </div>
                        <div class="text">
                            <strong>500+ Hiring Partners</strong>
                            <span>10,000+ Learners</span>
                        </div>
                    </div>

                    <div class="nmims-icon-box">
                        <div class="nmims-icon">
                            <img src="{{ asset('img/icon/knowledge.png') }}" alt="">
                        </div>
                        <div class="text">
                            <strong>Flexible Learning</strong>
                            <span>10,000+ Learners</span>
                        </div>
                    </div>

                    <div class="nmims-icon-box">
                        <div class="nmims-icon">
                            <img src="{{ asset('img/icon/employment1.png') }}" alt="">
                        </div>
                        <div class="text">
                            <strong>Career Support</strong>
                            <span>10,000+ Learners</span>
                        </div>
                    </div>

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

            <!-- Right Form -->
            @includeIf('forms.nmims.nmims-hero-banner-form')

        </div>

    </section>


    <section class="nmims-stats-service-section" aria-label="Key Highlights of NMIMS Online Programs">
        <div class="container-fluid">
            <div class="nmims-stats-service">

                <div class="nmims-stat">
                    <div class="nmims-icon-stat">
                        <img src="{{ asset('img/icon/service.png') }}" alt="UGC Entitled Online Programs Icon"
                            loading="lazy" width="64" height="64">
                    </div>
                    <div class="nmims-stat-content">
                        <h3 class="nmims-stats-service-heading">UGC-Entitled Programs</h3>
                        <p>Recognized NMIMS online degree courses valid worldwide</p>
                    </div>
                </div>

                <div class="nmims-stat">
                    <div class="nmims-icon-stat">
                        <img src="{{ asset('img/icon/university2.png') }}" alt="NAAC A+ Grade Accreditation Icon"
                            loading="lazy" width="64" height="64">
                    </div>
                    <div class="nmims-stat-content">
                        <h3 class="nmims-stats-service-heading">NAAC A+ Accredited</h3>
                        <p>Top-rated NMIMS distance & online learning university</p>
                    </div>
                </div>

                <div class="nmims-stat">
                    <div class="nmims-icon-stat">
                        <img src="{{ asset('img/icon/educational-programs.png') }}"
                            alt="AICTE and DEB Approved Courses Icon" loading="lazy" width="64" height="64">
                    </div>
                    <div class="nmims-stat-content">
                        <h3 class="nmims-stats-service-heading">AICTE & DEB Approved</h3>
                        <p>Government-recognized technical & distance education</p>
                    </div>
                </div>

                <div class="nmims-stat">
                    <div class="nmims-icon-stat">
                        <img src="{{ asset('img/icon/review.png') }}" alt="Industry Oriented Curriculum Icon"
                            loading="lazy" width="64" height="64">
                    </div>
                    <div class="nmims-stat-content">
                        <h3 class="nmims-stats-service-heading">Industry-Oriented Learning</h3>
                        <p>Career-focused curriculum designed with industry experts</p>
                    </div>
                </div>

                <div class="nmims-stat">
                    <div class="nmims-icon-stat">
                        <img src="{{ asset('img/icon/verified.png') }}" alt="100% Secure Online Admission Icon"
                            loading="lazy" width="64" height="64">
                    </div>
                    <div class="nmims-stat-content">
                        <h3 class="nmims-stats-service-heading">100% Secure Admissions</h3>
                        <p>Hassle-free digital enrollment & direct guidance</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-area pt-60 pb-40">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 col-md-12">
                    <div class="tp-section mb-45 text-center">
                        <div class="heading-section">
                            <h2>Why Choose NMIMS CDOE for Distance Education</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <!-- Added 'd-flex flex-wrap' to ensure equal row heights -->
                    <div class="row d-flex flex-wrap">

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/legacy-excellence.jpg') }}"
                                            alt="NMIMS Legacy of Excellence in Distance Education" loading="lazy"
                                            width="300" height="200">
                                    </a>
                                </div>
                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title"><a href="#">Legacy of Excellence</a></h3>
                                    <p class="flex-grow-1">Over three decades of experience in distance and online
                                        education have made NMIMS CDOE one of the most recognized names among NMIMS
                                        distance education programs in India, with thousands of learners graduating
                                        every year.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/accreditations.jpg') }}"
                                            alt="UGC and NAAC A+ Accreditations" loading="lazy" width="300"
                                            height="200">
                                    </a>
                                </div>
                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title"><a href="#">Accreditations</a></h3>
                                    <p class="flex-grow-1">NMIMS holds Category 1 deemed university status under UGC
                                        and a NAAC A+ grade, giving NMIMS online degree courses the same standing as a
                                        full time, on-campus qualification.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/industry-relevant-curriculum.jpg') }}"
                                            alt="Industry Relevant Curriculum Design" loading="lazy" width="300"
                                            height="200">
                                    </a>
                                </div>
                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title"><a href="#">Industry Relevant
                                            Curriculum</a></h3>
                                    <p class="flex-grow-1">Courses are built and updated with input from experienced
                                        faculty, researchers, and working industry professionals, so every program stays
                                        close to what employers actually need.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/global-recognition.jpg') }}"
                                            alt="Global Recognition for NMIMS Graduates" loading="lazy"
                                            width="300" height="200">
                                    </a>
                                </div>
                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title"><a href="#">Global Recognition</a></h3>
                                    <p class="flex-grow-1">Graduates of NMIMS distance learning courses in India go on
                                        to work at leading companies, growing SMEs, and high-growth startups, both in
                                        India and overseas.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <a href="#" class="btn-primary offering-btn">View All Programs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area grey-bg pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-45">
                    <div class="heading-section">
                        <span>PROGRAM OFFERINGS</span>
                        <h2>Flexible, Interactive, Engaging</h2>
                        <p>From undergraduate degrees to executive level programs, NMIMS CDOE offers some of the best
                            NMIMS online courses in India for every stage of your career.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Undergraduate Degrees -->
                <div class="col-lg-3 col-md-6">
                    <div class="offering-card">
                        <div class="offering-thumb">
                            <a href="#"><img src="{{ asset('img/campus/undergraduate-degrees.jpg') }}"
                                    alt="Undergraduate"></a>
                        </div>
                        <div class="offering-body">
                            <a href="#" class="offering-title">Undergraduate Degrees</a>
                            <p class="offering-text">Build a strong foundation with BBA and B.Com, two of the most
                                popular NMIMS distance education programs among students starting their career.</p>
                            <ul class="offering-feature-list">
                                <li><i class="fa-solid fa-check"></i> Well Rounded Curriculum</li>
                                <li><i class="fa-solid fa-check"></i> Experienced Faculty</li>
                                <li><i class="fa-solid fa-check"></i> Industry Exposure</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Masters Program -->
                <div class="col-lg-3 col-md-6">
                    <div class="offering-card">
                        <div class="offering-thumb">
                            <a href="#"><img src="{{ asset('img/campus/masters-program.jpg') }}"
                                    alt="Masters"></a>
                        </div>
                        <div class="offering-body">
                            <a href="#" class="offering-title">Masters Program (MBA)</a>
                            <p class="offering-text">Move your career forward with an online MBA offering
                                specializations in finance, marketing, human resources, operations and more, one of the
                                most searched NMIMS online degree courses among postgraduate students.</p>
                            <ul class="offering-feature-list">
                                <li><i class="fa-solid fa-check"></i> Industry Aligned Learning</li>
                                <li><i class="fa-solid fa-check"></i> Leadership Development</li>
                                <li><i class="fa-solid fa-check"></i> Career Enhancement</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Executive MBA -->
                <div class="col-lg-3 col-md-6">
                    <div class="offering-card">
                        <div class="offering-thumb">
                            <a href="#"><img src="{{ asset('img/campus/executive.jpg') }}"
                                    alt="Executive"></a>
                        </div>
                        <div class="offering-body">
                            <a href="#" class="offering-title">Executive MBA</a>
                            <p class="offering-text">Designed for professionals with prior work experience, this track
                                is one of the strongest NMIMS online courses for working professionals who want to move
                                into leadership roles without pausing their job.</p>
                            <ul class="offering-feature-list">
                                <li><i class="fa-solid fa-check"></i> Flexible for Working Professionals</li>
                                <li><i class="fa-solid fa-check"></i> Advanced Leadership Training</li>
                                <li><i class="fa-solid fa-check"></i> Peer Networking</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Certificate Programs -->
                <div class="col-lg-3 col-md-6">
                    <div class="offering-card">
                        <div class="offering-thumb">
                            <a href="#"><img src="{{ asset('img/campus/certificate-programs.jpg') }}"
                                    alt="Certificates"></a>
                        </div>
                        <div class="offering-body">
                            <a href="#" class="offering-title">Certificate Programs</a>
                            <p class="offering-text">Short, practical programs in digital marketing, data science,
                                project management and business analytics, ideal if you want job ready skills quickly.
                            </p>
                            <ul class="offering-feature-list">
                                <li><i class="fa-solid fa-check"></i> Short Duration</li>
                                <li><i class="fa-solid fa-check"></i> Practical Learning</li>
                                <li><i class="fa-solid fa-check"></i> Career Boost</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-12 text-center">
                    <button class="btn-primary offering-btn">Explore All Programs</button>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area pt-60 pb-40" aria-label="NMIMS Online Learning Experience Highlights">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 col-md-12">
                    <div class="tp-section mb-45 text-center">
                        <div class="heading-section">
                            <span>LEARNING EXPERIENCE</span>
                            <h2>Flexible. Interactive. Engaging.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <!-- Flex container wrapper for row-level height matching -->
                    <div class="row d-flex flex-wrap">

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100 position-relative">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/flexible-learning.jpg') }}"
                                            alt="Flexible Mobile and Desktop Digital Learning Portal" loading="lazy"
                                            width="300" height="200">
                                    </a>
                                </div>

                                <div class="icon-badge">
                                    <img src="{{ asset('img/icon/book.png') }}" alt="Flexible Learning Icon"
                                        width="35" height="35">
                                </div>

                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title">
                                        <a href="#">Flexible Learning</a>
                                    </h3>
                                    <p class="flex-grow-1">Study anytime from anywhere with a dependable digital campus
                                        accessible on desktop or mobile—a core advantage of NMIMS online degree courses.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100 position-relative">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/interactive-sessions.jpg') }}"
                                            alt="Live Interactive Sessions with Faculty and Peers" loading="lazy"
                                            width="300" height="200">
                                    </a>
                                </div>

                                <div class="icon-badge">
                                    <img src="{{ asset('img/icon/interactive-session.png') }}"
                                        alt="Interactive Lectures Icon" width="35" height="35">
                                </div>

                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title">
                                        <a href="#">Interactive Sessions</a>
                                    </h3>
                                    <p class="flex-grow-1">Engage in live virtual classrooms, doubt-clearing webinars,
                                        and peer discussions led by experienced NMIMS distance education faculty.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100 position-relative">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/comprehensive-resources.jpg') }}"
                                            alt="Digital Library and Comprehensive E-Learning Resources"
                                            loading="lazy" width="300" height="200">
                                    </a>
                                </div>

                                <div class="icon-badge">
                                    <img src="{{ asset('img/icon/resources.png') }}" alt="Learning Resources Icon"
                                        width="35" height="35">
                                </div>

                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title">
                                        <a href="#">Comprehensive Resources</a>
                                    </h3>
                                    <p class="flex-grow-1">Gain 24/7 access to an extensive digital library, e-books,
                                        recorded lectures, and personalized study paths tailored for working
                                        professionals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30 d-flex">
                            <div class="tp-event-inner-item d-flex flex-column w-100 position-relative">
                                <div class="tp-event-inner-thumb">
                                    <a href="#">
                                        <img src="{{ asset('img/campus/dedicated-support.jpg') }}"
                                            alt="Dedicated Student Support Services" loading="lazy" width="300"
                                            height="200">
                                    </a>
                                </div>

                                <div class="icon-badge">
                                    <img src="{{ asset('img/icon/online-support.png') }}" alt="Online Support Icon"
                                        width="35" height="35">
                                </div>

                                <div class="tp-event-inner-content flex-grow-1 d-flex flex-column">
                                    <h3 class="tp-event-inner-title">
                                        <a href="#">Dedicated Support</a>
                                    </h3>
                                    <p class="flex-grow-1">A committed student success team guides you from enrollment
                                        to graduation, providing end-to-end academic and technical assistance.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-advancement-section pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <div class="heading-section">
                        <span>CAREER ADVANCEMENT</span>
                        <h2>Opening Doors to Limitless Opportunities</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4 align-items-stretch">

                <!-- LEFT SIDE -->
                <div class="col-lg-6">
                    <div class="row g-4">

                        <!-- Hiring Partners -->
                        <div class="col-md-12">
                            <div class="career-card">
                                <div class="career-card-img">
                                    <img src="{{ asset('img/campus/hiring-partners.jpg') }}" alt="Hiring Partners">
                                </div>

                                <div class="career-card-content">
                                    <h4>Hiring Partners</h4>
                                    <p>
                                        With collaborations across 500+ hiring partners, including multinational
                                        companies, corporations and startups, learners from NMIMS CDOE get real
                                        placement support, not just a certificate.
                                    </p>

                                    <div class="career-meta">
                                        <img src="{{ asset('img/icon/hiring2.png') }}" alt=""
                                            width="15%">
                                        500+ Hiring Partners
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alumni Success -->
                        <div class="col-md-12">
                            <div class="career-card">
                                <div class="career-card-img">
                                    <img src="{{ asset('img/campus/alumni-success.jpg') }}" alt="Alumni Success">
                                </div>

                                <div class="career-card-content">
                                    <h4>Alumni Success</h4>
                                    <p>
                                        A wide network of alumni from NMIMS distance learning courses in India have gone
                                        on to build strong careers, with many moving into leadership roles within a few
                                        years of graduating.
                                    </p>

                                    <div class="career-meta">
                                        <img src="{{ asset('img/icon/career.png') }}" alt="" width="15%">
                                        Global Alumni Network
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-6">
                    <div class="nmims-blue-panel">
                        <h3>Why NMIMS CDOE Stands Out?</h3>

                        <ul>
                            <li>UGC Entitled Online Degree Programs</li>
                            <li>NAAC A+ Accredited University</li>
                            <li>Industry Relevant Curriculum</li>
                            <li>Experienced Faculty From Top Institutes</li>
                            <li>Placement and Career Support</li>
                            <li>Flexible Learning Options</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="nmims-testimonials">
        <div class="container">
            <div class="heading-section">
                <span>STUDENT SUCCESS STORIES</span>
                <h2>Real Stories. Real Impact.</h2>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="students-review">
                        <div class="icon-review">
                            <img src="{{ asset('img/icon/left.png') }}" alt="">
                        </div>
                        <div class="stars">★★★★★</div>
                    </div>
                    <p class="review">
                        “The MBA program at NMIMS CDOE helped me gain the confidence and skills to take on leadership
                        roles at my workplace.”
                    </p>
                    <div class="student">
                        <img src="{{ asset('img/live/review-01.jpg') }}" alt="">
                        <div>
                            <h4>Rohan Mehta</h4>
                            <span>MBA (Marketing)</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="students-review">
                        <div class="icon-review">
                            <img src="{{ asset('img/icon/left.png') }}" alt="">
                        </div>
                        <div class="stars">★★★★★</div>
                    </div>
                    <p class="review">
                        “Flexible classes and recorded sessions made it easy for me to balance work and study without
                        any compromise.”
                    </p>
                    <div class="student">
                        <img src="{{ asset('img/live/review-03.jpg') }}" alt="">
                        <div>
                            <h4>Priya Deshmukh</h4>
                            <span>Executive MBA (WX)</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="students-review">
                        <div class="icon-review">
                            <img src="{{ asset('img/icon/left.png') }}" alt="">
                        </div>
                        <div class="stars">★★★★★</div>
                    </div>
                    <p class="review">
                        “NMIMS CDOE’s industry-oriented approach and excellent support system truly shaped my career
                        path.”
                    </p>
                    <div class="student">
                        <img src="{{ asset('img/live/review-02.jpg') }}" alt="">
                        <div>
                            <h4>Ankit Verma</h4>
                            <span>BBA Graduate</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ratings-width">
                <div class="ratings">
                    <div class="icon-ratings">
                        <img src="{{ asset('img/icon/google-icon.png') }}" alt="">
                        <div><strong>4.8/5</strong></div>
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


    <section class="nmims-feature-strip">
        <div class="container nmims-feature-grid">
            <div class="feature-item">
                <div class="icons">
                    <img src="{{ asset('img/icon/student.png') }}" alt="">
                </div>
                <div class="text">
                    <strong>10,000+</strong>
                    <span>Happy Learners</span>
                </div>
            </div>

            <div class="feature-item">
                <div class="icons">
                    <img src="{{ asset('img/icon/onboarding.png') }}" alt="">
                </div>
                <div class="text">
                    <strong>500+</strong>
                    <span>Hiring Partners</span>
                </div>
            </div>

            <div class="feature-item">
                <div class="icons">
                    <img src="{{ asset('img/icon/educational-programs.png') }}" alt="">
                </div>
                <div class="text">
                    <strong>100+</strong>
                    <span>Programs Offered</span>
                </div>
            </div>

            <div class="feature-item">
                <div class="icons">
                    <img src="{{ asset('img/icon/customer-satisfaction.png') }}" alt="">
                </div>
                <div class="text">
                    <strong>95%</strong>
                    <span>Learner Satisfaction</span>
                </div>
            </div>

            <div class="feature-item">
                <div class="icons">
                    <img src="{{ asset('img/icon/exceptional.png') }}" alt="">
                </div>
                <div class="text">
                    <strong>2+ Decades</strong>
                    <span>Legacy of Excellence</span>
                </div>
            </div>
        </div>
    </section>


    <section class="nmims-help-section">
        <div class="container">
            <div class="nmims-help-wrapper">

                <!-- Left Image -->
                <div class="nmims-help-image">
                    <img src="{{ asset('img/help/nmims-help.jpg') }}" alt="Student Guidance">
                    <div class="mt-3 p-3 card">
                        <h2>Admissions Open for the Current Session</h2>
                        <h5>July 2026 Session</h5>
                        <p class="text-danger fw-bold">Apply Before Seats Fill !!!</p>
                        <a href="#" class="apply-now-btn">Apply now &nbsp; <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Center Content -->
                <div class="nmims-help-content">
                    <h2>Ready to Take the Next Step?</h2>
                    <p>
                        Book a free one on one counselling session with our experts and pick the right NMIMS online
                        degree course for your career goals.
                    </p>

                    <ul class="nmims-help-points">
                        <li><i class="fas fa-check"></i> Personalized Career Guidance</li>
                        <li><i class="fas fa-check"></i> Program and Eligibility Assistance</li>
                        <li><i class="fas fa-check"></i> Scholarship and Fee Details</li>
                        <li><i class="fas fa-check"></i> 100% Free Counselling</li>
                    </ul>
                </div>

                <!-- Right Form -->
                @includeIf('forms.nmims.nmims-help-section-form')

            </div>
        </div>
    </section>

    <section class="nmims-approved-service">
        <div class="container">
            <h2>Approved. Accredited. Trusted.</h2>
            <div class="nmims-approved-trusted">
                <div class="nmims-stat-approved">
                    <div class="nmims-approved">
                        <img src="{{ asset('img/icon/UGC-approved.png') }}" alt="">
                    </div>
                    <div class="nmims-approved-content">
                        <h3>UGC Entitled</h3>
                        <p>Approved Programs</p>
                    </div>
                </div>
                <div class="nmims-stat-approved">
                    <div class="nmims-approved">
                        <img src="{{ asset('img/icon/NAAC-A-grade.png') }}" alt="">
                    </div>
                    <div class="nmims-approved-content">
                        <h3>NAAC A+ Grade</h3>
                        <p>Accredited University</p>
                    </div>
                </div>
                <div class="nmims-stat-approved">
                    <div class="nmims-approved">
                        <img src="{{ asset('img/icon/AICTE-approved.png') }}" alt="">
                    </div>
                    <div class="nmims-approved-content">
                        <h3>AICTE Approved</h3>
                        <p>Industry Recognized</p>
                    </div>
                </div>
                <div class="nmims-stat-approved">
                    <div class="nmims-approved">
                        <img src="{{ asset('img/icon/AIU-member.png') }}" alt="">
                    </div>
                    <div class="nmims-approved-content">
                        <h3>Member of AIU</h3>
                        <p>Association of Indian Universities</p>
                    </div>
                </div>
                <div class="nmims-stat-approved-two">
                    <div class="nmims-approved">
                        <img src="{{ asset('img/icon/secure.png') }}" alt="">
                    </div>
                    <div class="nmims-approved-content-two">
                        <h3>100% Secure Process</h3>
                        <p>Your data is safer with us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nmims-approved-service pt-0">
        <div class="container">
            <div class="nmims-approved-trusted">
                <div class="nmims-stat-approved ps-4">
                    <div class="border-start border-3 border-warning ps-4">
                        <p><i class="fas fa-warning me-2"></i> <strong>Disclaimer:</strong>

                            As an Affiliate Enquiry Partner (AEP) of NMIMS Centre for Distance and Online Education
                            (NMIMS CDOE), we display and showcase program information of NMIMS CDOE. Counselling,
                            admission, program delivery and examinations are managed solely by NMIMS CDOE. We act only
                            as a lead generation and counselling partner.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nmims-faq-section py-5">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="nmims-faq-subtitle">Frequently Asked Questions</span>
                    <h2 class="nmims-faq-title">
                        NMIMS CDOE <span>FAQs</span>
                    </h2>
                    <p class="nmims-faq-desc">
                        Find answers to the most commonly asked questions about NMIMS Distance and Online Education
                        Programs.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="accordion nmims-custom-accordion" id="nmimsFaqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    What are NMIMS distance education programs?
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    NMIMS distance education programs are UGC-entitled undergraduate,
                                    postgraduate, diploma and certificate courses delivered through
                                    NMIMS CDOE. These programs are designed for students and working
                                    professionals seeking a recognized degree without attending
                                    regular on-campus classes.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Is NMIMS good for online degree courses?
                                </button>
                            </h2>

                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Yes. NMIMS holds UGC Category-1 deemed university status and a
                                    NAAC A+ accreditation. Its online degree programs are widely
                                    recognized by employers and supported by experienced faculty and
                                    industry hiring partners.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Are NMIMS online degree courses UGC approved?
                                </button>
                            </h2>

                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Yes. NMIMS online degree programs are approved under UGC and
                                    Distance Education Bureau (DEB) guidelines. Technology-oriented
                                    programs also carry AICTE approval wherever applicable.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    What is the difference between NMIMS distance learning and NMIMS online learning?
                                </button>
                            </h2>

                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    NMIMS has transitioned most of its earlier ODL programs into
                                    fully online learning. Students now attend live classes, access
                                    study material, submit assignments and appear for exams through
                                    the online learning platform.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Which NMIMS online courses are best for working professionals?
                                </button>
                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    MBA WX (Working Executive), MBA Executive in Business Analytics,
                                    Digital Marketing, Data Science, Project Management certificates
                                    and diploma programs are among the most popular choices for
                                    working professionals.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    What is the eligibility for NMIMS distance learning courses in India?
                                </button>
                            </h2>

                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Undergraduate programs require Class 12 with at least 50% marks.
                                    Postgraduate programs require a bachelor's degree with minimum
                                    qualifying marks. Executive programs also require relevant work
                                    experience.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven">
                                    How do I apply for NMIMS online courses admission?
                                </button>
                            </h2>

                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Register on the official NMIMS CDOE admission portal, select
                                    your preferred program, upload documents, complete the
                                    application form and pay the online application fee.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight">
                                    What is the fee for NMIMS CDOE programs?
                                </button>
                            </h2>

                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Fees vary according to the course, specialization and duration.
                                    Most programs provide installment payment options. Contact the
                                    admissions team for the latest fee structure.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine">
                                    How long does it take to complete an NMIMS online MBA?
                                </button>
                            </h2>

                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    The online MBA generally takes 2 years. Undergraduate programs
                                    like BBA and B.Com require 3 years, while certificate and diploma
                                    courses range from 3 months to 1 year.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen">
                                    Is a degree from NMIMS CDOE valid for government jobs and higher studies?
                                </button>
                            </h2>

                            <div id="collapseTen" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Yes. NMIMS online degrees are UGC-entitled and valid for
                                    government jobs, private sector employment and higher education
                                    opportunities.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 11 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEleven">
                                    What is the best NMIMS online course for someone starting their career?
                                </button>
                            </h2>

                            <div id="collapseEleven" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Students can begin with BBA or B.Com. Skill-based certificate
                                    and diploma programs in Digital Marketing or Data Science are
                                    also excellent options. Working professionals usually choose MBA
                                    or M.Sc. programs.
                                </div>

                            </div>
                        </div>

                        <!-- FAQ 12 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwelve">
                                    Does NMIMS CDOE offer placement support for distance learners?
                                </button>
                            </h2>

                            <div id="collapseTwelve" class="accordion-collapse collapse"
                                data-bs-parent="#nmimsFaqAccordion">

                                <div class="accordion-body">
                                    Yes. NMIMS CDOE works with more than 500 hiring partners and
                                    provides career guidance, placement support and networking
                                    opportunities for online and distance learners.
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="nmims-overview-section py-5">
        <div class="container">

            <!-- Heading -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <span class="nmims-subtitle">NMIMS CDOE</span>
                    <h2 class="nmims-main-title">
                        NMIMS Distance Education Programs:
                        <span>Complete Overview</span>
                    </h2>
                </div>
            </div>

            <!-- Overview -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="nmims-content-box">
                        <p>
                            NMIMS CDOE, the Centre for Distance and Online Education under SVKM's Narsee Monjee
                            Institute of Management Studies,
                            has been offering NMIMS distance education programs to students and working professionals
                            for more than three decades.
                            What began as the distance learning wing of a well-known Mumbai-based deemed university has
                            grown into one of the
                            largest providers of NMIMS online degree courses in India.
                        </p>

                        <p>
                            Unlike several private universities that entered the online education space only in recent
                            years, NMIMS built its
                            reputation through its regular campus programs before extending the same academic quality to
                            its online and distance
                            learning offerings. This is one of the reasons employers continue to value an NMIMS CDOE
                            qualification.
                        </p>
                    </div>
                </div>
            </div>

            <!-- What is NMIMS -->
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="nmims-content-box">
                        <h3>What is NMIMS CDOE?</h3>

                        <p>
                            NMIMS CDOE stands for NMIMS Centre for Distance and Online Education, the official online
                            learning division of
                            NMIMS University. Students can attend live classes, access digital study material, submit
                            assignments and appear
                            for examinations through an online learning platform while earning a UGC-recognized degree.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recognition -->
            <div class="row mt-5">

                <div class="col-lg-12">
                    <h3 class="nmims-section-title">
                        NMIMS Distance Learning University:
                        Accreditation & Recognition
                    </h3>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="nmims-feature-card">
                        <h5>UGC Category 1</h5>
                        <p>
                            Recognized as a Category 1 Deemed-to-be University with greater academic flexibility.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="nmims-feature-card">
                        <h5>NAAC A+</h5>
                        <p>
                            Accredited with NAAC A+ reflecting high academic quality and credibility.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="nmims-feature-card">
                        <h5>UGC-DEB & AICTE</h5>
                        <p>
                            Programs follow UGC-DEB guidelines and AICTE approval wherever applicable.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Course Table -->
            <div class="row my-5">

                <div class="col-lg-12">
                    <h3 class="nmims-section-title">
                        List of NMIMS Online Degree Courses
                    </h3>

                    <div class="table-responsive">

                        <table class="table table-bordered align-middle nmims-table">

                            <thead>
                                <tr>
                                    <th>Program</th>
                                    <th>Level</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>BBA</td>
                                    <td>Undergraduate</td>
                                    <td>3 Years</td>
                                </tr>

                                <tr>
                                    <td>B.Com</td>
                                    <td>Undergraduate</td>
                                    <td>3 Years</td>
                                </tr>

                                <tr>
                                    <td>MBA (Finance, Marketing, HR, Operations, Business Analytics)</td>
                                    <td>Postgraduate</td>
                                    <td>2 Years</td>
                                </tr>

                                <tr>
                                    <td>MBA WX</td>
                                    <td>Postgraduate</td>
                                    <td>2 Years</td>
                                </tr>

                                <tr>
                                    <td>MBA Executive in Business Analytics</td>
                                    <td>Postgraduate</td>
                                    <td>2 Years</td>
                                </tr>

                                <tr>
                                    <td>M.Sc Applied Finance</td>
                                    <td>Postgraduate</td>
                                    <td>2 Years</td>
                                </tr>

                                <tr>
                                    <td>M.Sc Artificial Intelligence</td>
                                    <td>Postgraduate</td>
                                    <td>2 Years</td>
                                </tr>

                                <tr>
                                    <td>Digital Marketing Certificate</td>
                                    <td>Certificate</td>
                                    <td>3 Months - 1 Year</td>
                                </tr>

                                <tr>
                                    <td>Project Management / Business Analytics</td>
                                    <td>Certificate</td>
                                    <td>3-6 Months</td>
                                </tr>

                                <tr>
                                    <td>Diploma in Management / Data Science</td>
                                    <td>Diploma</td>
                                    <td>1 Year</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Working Professionals -->
            <div class="row mt-5">

                <div class="col-lg-6 mb-4">

                    <div class="nmims-content-box h-100">

                        <h3>NMIMS Online Courses for Working Professionals</h3>

                        <p>
                            NMIMS CDOE offers flexible online learning with live classes, recorded lectures,
                            digital study material and online examinations. Programs like MBA WX and Executive MBA
                            are specially designed for working professionals.
                        </p>

                    </div>

                </div>

                <div class="col-lg-6 mb-4">

                    <div class="nmims-content-box h-100">

                        <h3>Eligibility Criteria</h3>

                        <ul class="nmims-list">

                            <li>UG Programs – 10+2 with minimum qualifying marks.</li>

                            <li>PG Programs – Bachelor's Degree with required percentage.</li>

                            <li>Executive Programs – Graduation + Work Experience.</li>

                            <li>Certificate Courses – Eligibility varies by program.</li>

                        </ul>

                    </div>

                </div>

            </div>

            <!-- Admission -->

            <div class="row mt-5">

                <div class="col-lg-12">

                    <div class="nmims-content-box mb-4">

                        <h3>NMIMS Online Courses Admission Process</h3>

                        <ol class="nmims-steps ps-3">

                            <li>Register on the admission portal.</li>

                            <li>Select your desired course.</li>

                            <li>Fill personal & academic details.</li>

                            <li>Upload required documents.</li>

                            <li>Pay application fee.</li>

                            <li>Submit application.</li>

                            <li>Confirm admission after selection.</li>

                        </ol>

                    </div>

                </div>

            </div>

            <!-- Fee + Documents -->

            <div class="row mt-5">

                <div class="col-lg-6 mb-4">

                    <div class="nmims-content-box h-100">

                        <h3>Fee Structure</h3>

                        <p>
                            Fees depend on program level, specialization and duration. Most courses allow
                            installment payment options. Contact admissions for the latest fee details.
                        </p>

                    </div>

                </div>

                <div class="col-lg-6 mb-4">

                    <div class="nmims-content-box h-100">

                        <h3>Documents Required</h3>

                        <ul class="nmims-list">

                            <li>Passport Size Photograph</li>

                            <li>Aadhaar / PAN / Passport</li>

                            <li>10th & 12th Marksheets</li>

                            <li>Graduation Documents</li>

                            <li>Work Experience Certificate (If Required)</li>

                        </ul>

                    </div>

                </div>

            </div>

            <!-- Why Choose -->

            <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="nmims-highlight-box h-100">

                        <h3>Why Choose NMIMS CDOE?</h3>

                        <p>
                            NAAC A+ Accreditation, UGC Recognition, Industry-Oriented Curriculum, Experienced Faculty,
                            Career Support, Placement Assistance, Flexible Learning and Strong Employer Acceptance make
                            NMIMS CDOE one of India's leading online education providers.
                        </p>

                    </div>

                </div>


                <!-- Career -->


                <div class="col-lg-6">

                    <div class="nmims-content-box">

                        <h3>Career Outcomes</h3>

                        <p>
                            Graduates work across Banking, Finance, IT, Consulting, Retail, Manufacturing and many
                            other industries. NMIMS qualifications help professionals qualify for promotions,
                            managerial roles and career transitions.
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>


<x-frontend-footer />
