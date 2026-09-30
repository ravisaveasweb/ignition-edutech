<x-frontend-header />

<main class="vit-online-page">
    <section class="vit-page-shell">
        <section class="vit-hero-section">
            <div class="container vit-hero-grid">
                <div class="vit-hero-copy">
                    <p class="vit-eyebrow">VELLORE INSTITUTE OF TECHNOLOGY</p>
                    <h1>Welcome to <span>VIT Online</span> Learning (VITOL)</h1>
                    <p class="vit-hero-text">Established in 2019, VITOL is the digital education arm of Vellore Institute
                        of Technology (VIT), delivering world-class online programs with flexibility, accessibility, and
                        academic excellence.</p>

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
                                <span>Accredited</span>
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
                            <p>Approved Programs</p>
                        </div>
                    </div>
                    <div class="vit-stat-approved">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/NAAC-A-grade.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content">
                            <h3>NAAC A+ Grade</h3>
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
                            <h3>Member of AIU</h3>
                            <p>Association of Indian Universities</p>
                        </div>
                    </div>
                    <div class="vit-stat-approved-two">
                        <div class="vit-approved">
                            <img src="{{ asset('img/icon/secure.png') }}" alt="">
                        </div>
                        <div class="vit-approved-content-two">
                            <h3>100% Secure Process</h3>
                            <p>Your data is safer with us</p>
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
                        <img src="{{ asset('img/campus/legacy-excellence.jpg') }}"alt="Accredited excellence">
                        <h3>Accredited Excellence</h3>
                        <p>Our programs are approved by the university grants commission and recognized for academic
                            quality.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/flexible-learning.jpg') }}"alt="Flexible learning">
                        <h3>Flexible Learning</h3>
                        <p>Live and asynchronous modules let learners study at their own pace without pausing career
                            growth.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/interactive-sessions.jpg') }}"alt="Expert faculty">
                        <h3>Expert Faculty</h3>
                        <p>Courses are led by experienced VIT faculty members who bring academic rigor and industry
                            insight.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/structured-curriculum.jpg') }}"alt="Structured curriculum">
                        <h3>Structured Curriculum</h3>
                        <p>Each program includes well-defined learning objectives and carefully sequenced course
                            materials.</p>
                    </article>
                    <article class="vit-info-card">
                        <img src="{{ asset('img/campus/comprehensive-support.jpg') }}"alt="Comprehensive support">
                        <h3>Comprehensive Support</h3>
                        <p>Students receive mentor guidance, prompt support, and regular interaction throughout the
                            journey.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="vit-section vit-section-soft">
            <div class="container">
                <div class="vit-section-heading">
                    <span>PROGRAM OFFERINGS</span>
                    <h2>Industry-Relevant Programs for Your Career Growth</h2>
                </div>

                <div class="vit-program-layout">
                    <div class="vit-programs-wrap">
                        <div class="vit-program-group">
                            <h3>Degree Programs (24 Months)</h3>
                            <div class="vit-program-grid">
                                <article class="vit-program-card">
                                    <img src="{{ asset('img/campus/master-business-01.jpg') }}
                                        alt="Master
                                        of Business Administration">
                                    <h4>Master of Business Administration (MBA)</h4>
                                    <p>Focuses on developing leadership and managerial skills.</p>
                                </article>
                                <article class="vit-program-card">
                                    <img src="{{ asset('img/campus/master-business-02.jpg') }}
                                        alt="Master
                                        of Computer Application">
                                    <h4>Master of Computer Application (MCA)</h4>
                                    <p>Emphasizes advanced computing and application development.</p>
                                </article>
                                <article class="vit-program-card">
                                    <img src="{{ asset('img/campus/master-business-03.jpg') }}
                                        alt="Master
                                        of Science in Data Science">
                                    <h4>Master of Science in Data Science</h4>
                                    <p>Covers data analytics, machine learning, and statistical modeling.</p>
                                </article>
                            </div>
                        </div>

                        <div class="vit-program-group">
                            <h3>Certificate Programs (16 Weeks)</h3>
                            <div class="vit-program-grid vit-program-grid-two">
                                <article class="vit-program-card vit-program-card-wide">
                                    <img src="{{ asset('img/campus/data-science-and-AI.jpg') }}"alt="Data Science and
                                        AI">
                                    <div>
                                        <h4>Data Science and AI</h4>
                                        <p>Introduces foundational concepts in data science and artificial intelligence.
                                        </p>
                                    </div>
                                </article>
                                <article class="vit-program-card vit-program-card-wide">
                                    <img src="{{ asset('img/campus/machine-learning.jpg') }}
                                        alt="Artificial
                                        Intelligence and Machine Learning">
                                    <div>
                                        <h4>Artificial Intelligence and Machine Learning</h4>
                                        <p>Focuses on AI principles and machine learning techniques.</p>
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
                                <strong>2+ Decades</strong>
                                <span>Legacy of Excellence</span>
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
                            <p>Engage in live lectures and Q&amp;A with faculty.</p>
                        </div>
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-book-open-reader"></i>
                            <h4>Comprehensive Resources</h4>
                            <p>Access e-books, recordings, and more.</p>
                        </div>
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-headset"></i>
                            <h4>Dedicated Support</h4>
                            <p>Get assistance from mentors and advisors.</p>
                        </div>
                        <div class="vit-learning-icon">
                            <i class="fa-solid fa-chart-column"></i>
                            <h4>Career Advancement</h4>
                            <p>Gain skills and credentials to accelerate your career.</p>
                        </div>
                    </div>
                </div>

                <div class="vit-learning-image">
                    <img src="{{ asset('img/help/vit-help.jpg') }}"alt="Student learning online">
                </div>
            </div>
        </section>

        <section class="vit-section vit-section-soft">
            <div class="container">
                <div class="vit-bottom-feature-layout">
                    <div class="vit-about-card">
                        <h3>About VIT Online Learning</h3>
                        <p>VIT Online Education was started with the objective of offering quality online education to
                            aspiring learners around the globe. Our mission is to enrich lives through excellence in
                            online education, grounded in ethics and critical thinking.</p>
                        <ul>
                            <li>Global Recognition</li>
                            <li>Industry-Relevant Curriculum</li>
                            <li>Experienced Faculty</li>
                            <li>Holistic Student Support</li>
                        </ul>
                        <a href="about.php">Know More About VIT</a>
                    </div>

                    <div class="vit-advantage-card">
                        <h3>VITOL Advantage</h3>
                        <ul>
                            <li>Well-defined learning objectives</li>
                            <li>Continuous student engagement</li>
                            <li>Synchronous & asynchronous classes</li>
                            <li>Course mentors for regular interaction</li>
                            <li>Structured course materials</li>
                            <li>Student support</li>
                        </ul>
                        <img src="{{ asset('img/campus/VIT-chennai-university.jpg') }}"alt="VIT campus">
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
                                <img src="{{ asset('img/live/review-03.jpg') }}"alt="Priya Deshmukh">
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
                                <img src="{{ asset('img/live/review-02.jpg') }}"alt="Ankit Verma">
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
                    <p>Your journey from inquiry to success in 4 simple steps</p>
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

        @includeIf('forms.vitol.vitol-help-section-form')
    </section>
</main>

<x-frontend-footer />

