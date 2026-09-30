<x-frontend-header />

<main class="vit-online-page">
    <section class="vit-page-shell">
        <section class="vit-hero-section">
            <div class="container vit-hero-grid">
                <div class="vit-hero-copy">
                    <p class="vit-eyebrow">VELLORE INSTITUTE OF TECHNOLOGY</p>
                    <h1>VIT Online Learning Programs,<span> UGC Approved</span> VIT Online Degree Courses</h1>
                    <p class="vit-hero-text">Established in 2019, VITOL is the digital education arm of Vellore Institute
                        of Technology (VIT), delivering UGC approved VIT online degree courses and certificate programs
                        with flexibility, accessibility and academic excellence.</p>

                    <div class="vit-hero-badges">
                        <div class="vit-hero-badge">
                            <img src="{{ asset('img/icon/entitled.png') }}" alt="UGC Entitled">
                            <div>
                                <strong>UGC Entitled</strong>
                                <span>Programs</span>
                            </div>
                        </div>
                        <div class="vit-hero-badge">
                            <img src="{{ asset('img/icon/grade.png') }}" alt="NAAC A++ Grade">
                            <div>
                                <strong>NAAC A++ Grade</strong>
                                <span>Accredited </span>
                            </div>
                        </div>
                        <div class="vit-hero-badge">
                            <img src="{{ asset('img/icon/approved2.png') }}" alt="AICTE Approved">
                            <div>
                                <strong>AICTE</strong>
                                <span>Approved</span>
                            </div>
                        </div>
                        <div class="vit-hero-badge">
                            <img src="{{ asset('img/icon/post-icon-03.png') }}" alt="Industry-oriented curriculum">
                            <div>
                                <strong>Industry-Oriented</strong>
                                <span>Curriculum</span>
                            </div>
                        </div>
                    </div>

                    <div class="vit-review-row">
                        <div class="vit-review-avatars">
                            <img src="{{ asset('img/live/review-01.jpg') }}" alt="Student review">
                            <img src="{{ asset('img/live/review-02.jpg') }}" alt="Student review">
                            <img src="{{ asset('img/live/review-03.jpg') }}" alt="Student review">
                        </div>
                        <div class="vit-review-score">
                            <div class="vit-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                            <span>4.9/5 (2,300+ Reviews)</span>
                        </div>
                        <div class="vit-google-mark">
                            <img src="{{ asset('img/icon/google-icon.png') }}" alt="Google reviews">
                        </div>
                    </div>
                </div>

                @includeIf('forms.vitol.vitol-hero-banner-form')

                <!-- <div class="vit-floating-actions">
     <a class="vit-float-pill vit-float-whatsapp" href="https://wa.me/919876543210" target="_blank" rel="noopener noreferrer">
      <span class="vit-float-icon"><i class="fa-brands fa-whatsapp"></i></span>
      <span>Chat on WhatsApp</span>
     </a>
     <a class="vit-float-pill vit-float-call" href="tel:+919876543210">
      <span class="vit-float-icon"><i class="fa-solid fa-phone"></i></span>
      <span>Talk to Counsellor</span>
     </a>
    </div> -->
            </div>
        </section>

        <section class="vit-approved-service">
            <div class="container">
                <!-- <h2>Approved. Accredited. Trusted.</h2> -->
                <div class="vit-approved-trusted">
                    <div class="vit-stat-approved">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/UGC-approved.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content">
                            <h3>UGC Entitled</h3>
                            <p> Programs</p>
                        </div>
                    </div>
                    <div class="vit-stat-approved">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/NAAC-A-grade.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content">
                            <h3>NAAC A++ Grade</h3>
                            <p>Accredited University</p>
                        </div>
                    </div>
                    <div class="vit-stat-approved">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/AICTE-approved.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content">
                            <h3>AICTE Approved</h3>
                            <p>Industry Recognized</p>
                        </div>
                    </div>
                    <div class="vit-stat-approved">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/AIU-member.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content">
                            <h3>Member of AIU,</h3>
                            <p>Association of Indian Universities</p>
                        </div>
                    </div>
                    <div class="vit-stat-approved-two">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/secure.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content-two">
                            <h3>100% Secure Process,</h3>
                            <p>Your Data Is Safer With Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="vit-section">
            <div class="container">
                <div class="vit-section-heading">
                    <span>WHY CHOOSE VITOL?</span>
                    <h2>Education That Empowers Your Future</h2>
                </div>

                <div class="vit-card-grid vit-five-grid">
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/legacy-excellence.jpg') }}" alt="Accredited excellence">
                        <h3>Accredited Excellence</h3>
                        <p>VIT online learning programs are backed by UGC entitlement and NAAC A++ accreditation, so
                            every VIT online degree course carries the same recognition as a full time program.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/flexible-learning.jpg') }}" alt="Flexible learning">
                        <h3>Flexible Learning</h3>
                        <p>Live and recorded modules let you study at your own pace, a big reason working learners
                            search for VIT online classes for professionals instead of a fixed campus schedule.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/interactive-sessions.jpg') }}" alt="Expert faculty">
                        <h3>Expert Faculty</h3>
                        <p>Courses are led by experienced VIT faculty who bring academic depth and real industry insight
                            into every session.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/structured-curriculum.jpg') }}" alt="Structured curriculum">
                        <h3>Structured Curriculum</h3>
                        <p>Each program includes clearly defined learning objectives and a carefully sequenced course
                            structure, built to match what employers expect from a VIT online degree course.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/comprehensive-support.jpg') }}" alt="Comprehensive support">
                        <h3>Ongoing Student Support</h3>
                        <p>Students receive mentor guidance, prompt support and regular interaction throughout their
                            course, from enrollment to graduation.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="vit-section vit-section-soft">
            <div class="container">
                <div class="vit-section-heading">
                    <span>PROGRAM OFFERINGS</span>
                    <h2>Industry-Relevant Programs for Your Career Growth</h2>

                    <p>From full postgraduate degrees to short certificate programs, every course listed here is a UGC
                        approved VIT online degree, backed by the same academic standards as VIT&#39;s on campus
                        programs.</p>
                </div>

                <div class="vit-program-layout">
                    <div class="vit-programs-wrap">
                        <div class="vit-program-group">
                            <h3>Degree Programs (24 Months)</h3>
                            <div class="vit-program-grid">
                                <article class="vit-program-card">
                                    <img src="{{ asset('img/campus/master-business-01.jpg') }}"
                                        alt="Master
                                        of Business Administration">
                                    <h4>Master of Business Administration (MBA)</h4>
                                    <p>Focuses on developing leadership and managerial skills, one of the most searched
                                        VIT online degree courses among postgraduate students who want an MBA without
                                        stepping away from their job.</p>
                                </article>
                                <article class="vit-program-card">
                                    <img src="{{ asset('img/campus/master-business-02.jpg') }}"
                                        alt="Master
                                        of Computer Application">
                                    <h4>Master of Computer Application (MCA)</h4>
                                    <p>Emphasizes advanced computing and application development, built for graduates
                                        and working professionals moving into software and IT roles.</p>
                                </article>
                                <article class="vit-program-card">
                                    <img src="{{ asset('img/campus/master-business-03.jpg') }}"
                                        alt="Master
                                        of Science in Data Science">
                                    <h4>Master of Science in Data Science</h4>
                                    <p>Covers data analytics, machine learning and statistical modeling, one of the
                                        fastest growing VIT online learning programs for tech focused careers.</p>
                                </article>
                            </div>
                        </div>

                        <div class="vit-program-group">
                            <h3>Certificate Programs (16 Weeks)</h3>
                            <div class="vit-program-grid vit-program-grid-two">
                                <article class="vit-program-card vit-program-card-wide">
                                    <img src="{{ asset('img/campus/data-science-and-AI.jpg') }}"
                                        alt="Data Science and
                                        AI">
                                    <div>
                                        <h4>Certificate in Data Science and AI</h4>
                                        <p>Introduces foundational concepts in data science and artificial intelligence,
                                            one of the most popular VIT online courses with certificate for
                                            professionals who want a fast skill upgrade.</p>
                                    </div>
                                </article>
                                <article class="vit-program-card vit-program-card-wide">
                                    <img src="{{ asset('img/campus/machine-learning.jpg') }}"
                                        alt="Artificial
                                        Intelligence and Machine Learning">
                                    <div>
                                        <h4>Certificate in Artificial Intelligence and Machine Learning</h4>
                                        <p>Focuses on AI principles and machine learning techniques, delivered through
                                            live sessions alongside recorded content, in collaboration with Emeritus.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <aside class="vit-program-sidebar">
                        <h3>Why Choose VIT Online?</h3>
                        <ul>
                            <li>UGC Entitled Online Degrees</li>
                            <li>NAAC A+ Accredited University</li>
                            <li>AICTE Approved Curriculum</li>
                            <li>Expert Faculty & Industry Exposure</li>
                            <li>Flexible Learning Options</li>
                            <li>Dedicated Student Support</li>
                        </ul>

                        <div class="vit-sidebar-stats">
                            <div>
                                <strong>10,000+</strong>
                                <span>Happy Learners</span>
                            </div>
                            <div>
                                <strong>500+</strong>
                                <span>Hiring Partners</span>
                            </div>
                            <div>
                                <strong>40+</strong>
                                <span>Years of Academic Excellence</span>
                            </div>
                        </div>

                        <a href="{{ route('university-application-form') }}" class="vit-sidebar-cta">Explore All
                            Programs</a>
                    </aside>
                </div>
            </div>
        </section>

        <section class="vit-section">
            <div class="container vit-learning-layout">
                <div class="vit-learning-content">
                    <div class="vit-section-heading vit-section-heading-left">
                        <span>LEARNING EXPERIENCE</span>
                        <h2>Designed for Flexibility. Built for Success.</h2>
                    </div>

                    <div class="vit-learning-icons">
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <h4>Interactive Live Sessions</h4>
                            <p>Engage in live lectures and question and answer sessions with faculty, a key reason
                                working learners choose VIT online classes for professionals over a purely recorded
                                course.</p>
                        </div>
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-book-open-reader"></i>
                            <h4>Rich Learning Resources</h4>
                            <p>Access e-books, recordings and structured study material anytime, from any device.</p>
                        </div>
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-headset"></i>
                            <h4>Dedicated Support</h4>
                            <p>Get assistance from mentors and advisors throughout your program.</p>
                        </div>
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-chart-column"></i>
                            <h4>Career Advancement</h4>
                            <p>Gain skills and credentials to accelerate your career through a recognized VIT online
                                degree course.</p>
                        </div>
                    </div>
                </div>

                <div class="vit-learning-image">
                    <img src="{{ asset('img/help/vit-help.jpg') }}" alt="Student learning online">
                </div>
            </div>
        </section>

        <section class="vit-section vit-section-soft">
            <div class="container">
                <div class="vit-bottom-feature-layout">
                    <div class="vit-about-card">
                        <h3>About VIT Online Learning</h3>
                        <p>VIT Online Learning was started with the goal of offering quality online education to
                            learners around the globe. The mission is to enrich lives through excellence in online
                            education, grounded in ethics and critical thinking.</p>
                        <ul>
                            <li>Global Recognition</li>
                            <li>Industry Relevant Curriculum</li>
                            <li>Experienced Faculty</li>
                            <li>Holistic Student Support</li>
                        </ul>
                        <a href="about.php">Know More About VIT</a>
                    </div>

                    <div class="vit-advantage-card">
                        <h3>VITOL Advantage</h3>
                        <ul>
                            <li>Well Defined Learning Objectives</li>
                            <li>Continuous Student Engagement</li>
                            <li>Synchronous & Asynchronous Classes</li>
                            <li>Course Mentors for Regular Interaction</li>
                            <li>Structured Course Materials</li>
                            <li>Student Support</li>
                        </ul>
                        <img src="{{ asset('img/campus/VIT-chennai-university.jpg') }}" alt="VIT campus">
                    </div>

                    <div class="vit-stat-panel">
                        <h3>Climb the Corporate Ladder with VIT Online</h3>
                        <div class="vit-stat-highlights">
                            <div><strong>77%</strong><span>Higher Salary</span></div>
                            <div><strong>91%</strong><span>MBA Hiring</span></div>
                        </div>
                        <p>VIT ranks among India's top private universities for innovation, research, and placement
                            outcomes.</p>
                        <div class="vit-rank-row">
                            <div><strong>Top 10</strong><span>Private Universities</span></div>
                            <div><strong>Top 20</strong><span>Engineering Institutes</span></div>
                            <div><strong>Top 3</strong><span>In Innovation</span></div>
                        </div>
                        <a href="{{ route('university-application-form') }}">About VIT</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="vit-section">
            <div class="container">
                <div class="vit-section-heading">
                    <h2>What Our Learners Say</h2>
                    <p>Real stories. Real impact.</p>
                </div>

                <div class="vit-testimonial-layout">
                    <div class="vit-testimonial-grid">
                        <article class="vit-testimonial-card">
                            <div class="vit-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                            <p>"VITOL's MBA program gave me the confidence and skills to take on leadership roles at my
                                workplace."</p>
                            <div class="vit-person">
                                <img src="{{ asset('img/live/review-01.jpg') }}" alt="Rohan Mehta">
                                <div>
                                    <strong>Rohan Mehta</strong>
                                    <span>MBA (Marketing)</span>
                                </div>
                            </div>
                        </article>
                        <article class="vit-testimonial-card">
                            <div class="vit-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                            <p>"The flexibility of online classes and recorded sessions helped me balance work and study
                                effortlessly."</p>
                            <div class="vit-person">
                                <img src="{{ asset('img/live/review-03.jpg') }}" alt="Priya Deshmukh">
                                <div>
                                    <strong>Priya Deshmukh</strong>
                                    <span>MCA</span>
                                </div>
                            </div>
                        </article>
                        <article class="vit-testimonial-card">
                            <div class="vit-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                            <p>"The faculty support and structured content made learning engaging and effective."</p>
                            <div class="vit-person">
                                <img src="{{ asset('img/live/review-02.jpg') }}" alt="Ankit Verma">
                                <div>
                                    <strong>Ankit Verma</strong>
                                    <span>Data Science</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="vit-rating-column">
                        <div class="vit-rating-item">
                            <img src="{{ asset('img/icon/google-icon.png') }}" alt="Google">
                            <strong>4.8/5</strong>
                            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                        <div class="vit-rating-item">
                            <img src="{{ asset('img/icon/Justdial_Logo.svg.png') }}" alt="Justdial">
                            <strong>4.7/5</strong>
                            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                        <div class="vit-rating-item">
                            <img src="{{ asset('img/icon/Trustpilot_Logo.png') }}" alt="Trustpilot">
                            <strong>4.6/5</strong>
                            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="vit-section vit-how-section">
            <div class="container">
                <div class="vit-section-heading">
                    <h2>How It Works?</h2>
                    <p>Your journey from inquiry to a UGC approved VIT online degree in 4 simple steps.</p>
                </div>

                <div class="vit-steps-grid">
                    <div class="vit-step-card">
                        <div class="vit-step-no">01</div>
                        <i class="fa-regular fa-file-lines"></i>
                        <h3>Submit Enquiry</h3>
                        <p>Fill out the form and our counsellor will connect.</p>
                    </div>
                    <div class="vit-step-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="vit-step-card">
                        <div class="vit-step-no">02</div>
                        <i class="fa-solid fa-user-graduate"></i>
                        <h3>Career Counselling</h3>
                        <p>Get expert guidance to choose the right program.</p>
                    </div>
                    <div class="vit-step-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="vit-step-card">
                        <div class="vit-step-no">03</div>
                        <i class="fa-solid fa-book-bookmark"></i>
                        <h3>Enroll & Learn</h3>
                        <p>Complete enrollment and start your journey.</p>
                    </div>
                    <div class="vit-step-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="vit-step-card">
                        <div class="vit-step-no">04</div>
                        <i class="fa-solid fa-trophy"></i>
                        <h3>Achieve Your Goals</h3>
                        <p>Gain skills, credentials, and advance your career.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vit-faq-section py-5" style="background: rgba(250,252,253,1);">
            <div class="container py-4">
                <div class="text-center mb-5 mx-auto" style="max-width: 650px;">
                    <span
                        class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3 fw-semibold small amity-faq-badge"
                        style="color: var(--secondary);">QUESTIONS & ANSWERS</span>
                    <h2 class="vit-faq-heading  fw-bold">Frequently Asked Questions</h2>
                    <!-- <p class="mb-4">Everything you need to know about Amity Online's programs, validity, and learning structure.</p> -->
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion amity-custom-accordion" id="amityFaqAccordion">

                            <!-- FAQ 1 -->
                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq1" aria-expanded="false"
                                        aria-controls="vitFaq1">
                                        What is VIT Online Learning (VITOL)?
                                    </button>
                                </h2>
                                <div id="vitFaq1" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body vit-faq-body">
                                        VITOL is the digital education arm of Vellore Institute of Technology, launched
                                        in 2019 to deliver UGC approved VIT online degree courses and certificate
                                        programs to students and working professionals across India.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq2" aria-expanded="false"
                                        aria-controls="vitFaq2">
                                        What VIT online learning programs are available?
                                    </button>
                                </h2>
                                <div id="vitFaq2" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        VITOL currently offers three postgraduate degrees, MBA, MCA and M.Sc in Data
                                        Science, along with two certificate programs, Certificate in Data Science and
                                        AI, and Certificate in Artificial Intelligence and Machine Learning.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq3" aria-expanded="false"
                                        aria-controls="vitFaq3">
                                        Are VIT online classes suitable for working professionals?
                                    </button>
                                </h2>
                                <div id="vitFaq3" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        Yes. Classes combine live weekend sessions with recorded lectures, and
                                        assignments are scheduled around a working week, which is why VIT online classes
                                        for professionals are a popular option for people who want a postgraduate
                                        qualification without leaving their job.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button amity-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq4" aria-expanded="false"
                                        aria-controls="vitFaq4">
                                        What is the eligibility for VIT online degree courses?
                                    </button>
                                </h2>
                                <div id="vitFaq4" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        MBA needs a bachelor&#39;s degree with at least 50% marks. MCA needs a
                                        bachelor&#39;s degree with 50% marks and usually mathematics at 10+2 or
                                        graduation level. M.Sc Data Science needs an engineering degree or a STEM based
                                        B.Sc with 50% marks. Certificate programs are generally open to graduates and
                                        professionals.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq5" aria-expanded="false"
                                        aria-controls="vitFaq5">
                                        Do VIT online courses with certificate hold real value?
                                    </button>
                                </h2>
                                <div id="vitFaq5" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        Yes. The certificate programs are delivered with VIT faculty involvement in
                                        partnership with Emeritus, and the completion certificate clearly states the
                                        university and program name, which is recognized by employers as a genuine
                                        upskilling credential.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq6" aria-expanded="false"
                                        aria-controls="vitFaq6">
                                        How do I apply now for VIT online degree?
                                    </button>
                                </h2>
                                <div id="vitFaq6" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        You register on the official VITOL admission portal, select your program, upload
                                        your academic documents, pay the registration fee, and wait for admission
                                        confirmation. Once confirmed, you pay the program fee to secure your seat.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq7" aria-expanded="false"
                                        aria-controls="vitFaq7">
                                        Is there an entrance exam for VIT online degree courses?
                                    </button>
                                </h2>
                                <div id="vitFaq7" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        No. Most VIT online learning programs do not require a separate entrance exam.
                                        Admission is based on your academic record and document verification rather than
                                        a competitive test.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button vit-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq8" aria-expanded="false"
                                        aria-controls="vitFaq8">
                                        What is the fee for VIT online degree courses?
                                    </button>
                                </h2>
                                <div id="vitFaq8" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        Fees vary by program and are usually payable yearly or semester wise, with a
                                        separate non refundable registration fee at the time of application. Since fees
                                        are revised periodically, it is best to confirm current figures through a free
                                        counselling session.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button amity-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq9" aria-expanded="false"
                                        aria-controls="vitFaq9">
                                        How long does a VIT online degree take to complete?
                                    </button>
                                </h2>
                                <div id="vitFaq9" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        The MBA, MCA and M.Sc in Data Science each run for 2 years. The certificate
                                        programs in Data Science and AI, and in AI and Machine Learning, run for 16
                                        weeks.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button amity-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq10" aria-expanded="false"
                                        aria-controls="vitFaq10">
                                        Is a VIT online degree valid for government jobs?
                                    </button>
                                </h2>
                                <div id="vitFaq10" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        Yes. Since VIT online degree courses are UGC approved and NAAC A++ accredited,
                                        they are valid for government jobs, private sector roles and further academic
                                        study, on the same basis as degrees from other UGC recognized universities.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button amity-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq11" aria-expanded="false"
                                        aria-controls="vitFaq11">
                                        Does VITOL offer scholarships?
                                    </button>
                                </h2>
                                <div id="vitFaq11" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        VITOL offers fee concessions in select categories, including for defence
                                        personnel and VIT alumni. It is worth asking about eligibility for these
                                        concessions during your counselling session.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item vit-faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button amity-faq-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vitFaq12" aria-expanded="false"
                                        aria-controls="vitFaq12">
                                        Who delivers the VIT online certificate programs?
                                    </button>
                                </h2>
                                <div id="vitFaq12" class="accordion-collapse collapse"
                                    data-bs-parent="#amityFaqAccordion">
                                    <div class="accordion-body amity-faq-body">
                                        The certificate programs in Data Science and AI, and in Artificial Intelligence
                                        and Machine Learning, are delivered in partnership with Emeritus, a global
                                        platform for executive education, with course content and faculty involvement
                                        from VIT.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @includeIf('forms.vitol.vitol-help-section-form')

        <section class="vit-overview-section py-5">
            <div class="container">

                <!-- Heading -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-10 text-center">
                        <span class="vit-subtitle">VIT Online Learning</span>

                        <h2 class="vit-main-title">
                            VIT Online Degree Courses:
                            <span>Complete Overview</span>
                        </h2>
                    </div>
                </div>

                <!-- Overview -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="vit-content-box">

                            <p>
                                VIT Online Learning (VITOL) is the digital education initiative of Vellore Institute of
                                Technology, one of India's leading private universities. Established in 2019, VITOL
                                extends VIT's academic excellence in engineering, management, and technology through
                                fully online degree programs that allow students and working professionals to study from
                                anywhere in India.
                            </p>

                            <p>
                                This page provides a complete overview of VIT Online Learning programs, including
                                available courses, eligibility criteria, admission process, fee structure, scholarships,
                                and career opportunities after graduation.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- What is NMIMS -->
                <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="vit-content-box">

                            <h3>About VIT Online Learning</h3>

                            <p>
                                VIT Online Learning (VITOL) delivers UGC-approved online postgraduate degrees and
                                professional certificate programs through an advanced digital learning platform.
                                Students benefit from experienced faculty, live online classes, recorded lectures,
                                industry-focused curriculum, and flexible learning schedules.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Recognition -->
                <div class="row mt-5">
                    <div class="col-md-4 mb-4">

                        <div class="vit-feature-card">

                            <h5>UGC Approved</h5>

                            <p>
                                All online degree programs are delivered under UGC regulations.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-4 mb-4">

                        <div class="vit-feature-card">

                            <h5>NAAC A++</h5>

                            <p>
                                VIT is accredited with the prestigious NAAC A++ grade.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-4 mb-4">

                        <div class="vit-feature-card">

                            <h5>Industry Ready Curriculum</h5>

                            <p>
                                Programs are designed to match current industry requirements.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- Course Table -->
                <div class="row my-5">

                    <div class="col-lg-12">
                        <h3 class="vit-section-title">
                            VIT Online Degree Programs Table
                        </h3>

                        <div class="table-responsive rounded-2">

                            <table class="table table-bordered align-middle vit-table">

                                <thead>

                                    <tr>

                                        <th>Program</th>

                                        <th>Duration</th>

                                        <th>Best Suited For</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>MBA</td>

                                        <td>2 Years</td>

                                        <td>Management Professionals</td>

                                    </tr>

                                    <tr>

                                        <td>MCA</td>

                                        <td>2 Years</td>

                                        <td>Software & IT Professionals</td>

                                    </tr>

                                    <tr>

                                        <td>M.Sc Data Science</td>

                                        <td>2 Years</td>

                                        <td>Analytics & Data Careers</td>

                                    </tr>

                                    <tr>

                                        <td>Certificate in Data Science & AI</td>

                                        <td>16 Weeks</td>

                                        <td>Skill Enhancement</td>

                                    </tr>

                                    <tr>

                                        <td>Certificate in AI & Machine Learning</td>

                                        <td>16 Weeks</td>

                                        <td>AI & ML Professionals</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <!-- Working Professionals -->
                <div class="row mt-5">

                    <div class="col-lg-6 mb-4">

                        <div class="vit-content-box h-100">

                            <h3>VIT Online Classes for Professionals</h3>

                            <p>

                                VITOL offers flexible online learning through weekend live classes, recorded lectures,
                                online assignments, and digital assessments. The MBA and MCA programs are particularly
                                suitable for working professionals who want to continue their careers while earning a
                                postgraduate degree.

                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <div class="vit-content-box h-100">

                            <h3>VIT Online Courses with Certificate</h3>

                            <p>

                                Professionals looking for a quick skill upgrade can enroll in the 16-week certificate
                                programs in Data Science & AI or Artificial Intelligence & Machine Learning. These
                                programs include live sessions, recorded lectures, projects, and university
                                certification.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- Admission -->

                <div class="row mt-5">

                    <div class="col-lg-6">

                        <div class="vit-content-box mb-4">

                            <h3>Eligibility Criteria</h3>

                            <ul class="vit-list">

                                <li>MBA – Bachelor's Degree with minimum qualifying marks.</li>

                                <li>MCA – Bachelor's Degree with Mathematics background.</li>

                                <li>M.Sc Data Science – Engineering or STEM Degree.</li>

                                <li>Certificate Programs – Graduate or working professional.</li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <div class="vit-content-box h-100">

                            <h3>VIT Online Degree Fee Range</h3>

                            <p>

                                Program fees vary depending on the course and specialization. Students can usually pay
                                through semester-wise or yearly installments. Scholarships and fee concessions may also
                                be available for eligible applicants.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- Fee + Documents -->

                <div class="row mt-5">

                    <div class="col-lg-6 mb-4">

                        <div class="vit-content-box">

                            <h3>How to Apply for VIT Online Degree</h3>

                            <ol class="vit-steps ps-3">

                                <li>Register on the VITOL admission portal.</li>

                                <li>Select your preferred program.</li>

                                <li>Fill academic details.</li>

                                <li>Upload required documents.</li>

                                <li>Pay registration fee.</li>

                                <li>Complete document verification.</li>

                                <li>Pay program fee and start learning.</li>

                            </ol>

                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <div class="vit-content-box h-100">

                            <h3>Documents Required</h3>

                            <ul class="vit-list">

                                <li>Passport Size Photograph</li>

                                <li>Aadhaar / PAN / Passport</li>

                                <li>10th & 12th Mark Sheets</li>

                                <li>Graduation Mark Sheets & Degree Certificate</li>

                                <li>Work Experience Certificate (If Applicable)</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- Why Choose -->

                <div class="row mt-5">

                    <div class="col-lg-6">

                        <div class="vit-highlight-box h-100">

                            <h3>Scholarships & Fee Concessions</h3>

                            <p>

                                VIT Online Learning offers scholarships and fee concessions for eligible candidates,
                                including defence personnel, VIT alumni, and selected categories. Applicants should
                                confirm current scholarship eligibility during the admission process.

                            </p>

                        </div>

                    </div>


                    <!-- Career -->


                    <div class="col-lg-6">

                        <div class="vit-content-box">

                            <h3>Career Outcomes</h3>

                            <p>

                                Graduates from VIT Online programs build careers across Information Technology, Software
                                Development, Data Science, Banking, Analytics, and Business Management. VIT's strong
                                academic reputation and NAAC A++ accreditation make its online degrees highly valued by
                                recruiters across India.

                            </p>

                        </div>

                    </div>

                </div>

            </div>
        </section>
    </section>


</main>

<x-frontend-footer />

