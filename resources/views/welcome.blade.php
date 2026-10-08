<x-frontend-header :study-abroad-universities="$studyAbroadUniversities" />
<x-study-india-header/>

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
                <div class="icon-box">
                    <div class="icon">
                        <img src="{{ asset('img/icon/flexibility.png') }}" alt="">
                    </div>
                    <div class="text">
                        <strong>100% Online</strong>
                        <span>Flexible</span>
                    </div>
                </div>
                <div class="icon-box">
                    <div class="icon">
                        <img src="{{ asset('img/icon/approved.png') }}" alt="">
                    </div>
                    <div class="text">
                        <strong>UGC & NAAC</strong>
                        <span>Approved</span>
                    </div>
                </div>
                <div class="icon-box">
                    <div class="icon">
                        <img src="{{ asset('img/icon/support-career.png') }}" alt="">
                    </div>
                    <div class="text">
                        <strong>Career</strong>
                        <span>Support</span>
                    </div>
                </div>

                <div class="icon-box">
                    <div class="icon">
                        <img src="{{ asset('img/icon/icon-emi.png') }}" alt="">
                    </div>
                    <div class="text">
                        <strong>Easy EMI</strong>
                        <span>Options</span>
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

        @includeIf('forms.home-banner-form')

    </div>

</section>

<section class="feature-strip">
    <div class="container feature-grid">
        <div class="feature-item">
            <div class="icons">
                <img src="{{ asset('img/icon/approved-degrees.png') }}" alt="">
            </div>
            <div class="text">
                <strong>UGC Entitled</strong>
                <span>Approved Degrees</span>
            </div>
        </div>

        <div class="feature-item">
            <div class="icons">
                <img src="{{ asset('img/icon/grade-universities.png') }}" alt="">
            </div>
            <div class="text">
                <strong>NAAC A+ Grade</strong>
                <span>Universities</span>
            </div>
        </div>

        <div class="feature-item">
            <div class="icons">
                <img src="{{ asset('img/icon/happy-students.png') }}" alt="">
            </div>
            <div class="text">
                <strong>10,000+</strong>
                <span>Happy Students</span>
            </div>
        </div>

        <div class="feature-item">
            <div class="icons">
                <img src="{{ asset('img/icon/secure.png') }}" alt="">
            </div>
            <div class="text">
                <strong>100% Secure</strong>
                <span>& Easy Process</span>
            </div>
        </div>
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
                <div class="logo-item"><img src="{{ asset('img/brand/university-01.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-02.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-03.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-04.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-05.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-06.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-07.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-08.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-09.png') }}" alt=""></div>
                <div class="logo-item"><img src="{{ asset('img/brand/university-10.png') }}" alt=""></div>
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

<section class="yj-journey-section">
    <div class="yj-container">
        <h2 class="yj-heading">Your Journey Begins Here</h2>

        <ul class="yj-feature-list">
            <li class="yj-feature-item">
                <span class="yj-icon-check">✔</span>
                <span class="yj-feature-text">School Admissions</span>
            </li>
            <li class="yj-feature-item">
                <span class="yj-icon-check">✔</span>
                <span class="yj-feature-text">Career Guidance &amp; Counselling</span>
            </li>
            <li class="yj-feature-item">
                <span class="yj-icon-check">✔</span>
                <span class="yj-feature-text">Undergraduate &amp; Postgraduate Admissions</span>
            </li>
            <li class="yj-feature-item">
                <span class="yj-icon-check">✔</span>
                <span class="yj-feature-text">Online &amp; Distance Learning</span>
            </li>
            <li class="yj-feature-item">
                <span class="yj-icon-check">✔</span>
                <span class="yj-feature-text">Professional Certifications &amp; Skill Development</span>
            </li>
            <li class="yj-feature-item">
                <span class="yj-icon-check">✔</span>
                <span class="yj-feature-text">Corporate Learning Solutions</span>
            </li>
        </ul>
    </div>
</section>

<section class="ir-hero-section">
    <div class="ir-container">
        <!-- Top Call to Action Block -->
        <div class="ir-cta-block">
            <span class="ir-tagline">Education Reimagined.</span>
            <h2 class="ir-main-heading">Lifelong Success Begins Here.</h2>

            <div class="ir-btn-wrapper">
                <a href="#book-session" class="ir-btn-primary">Book a Free Counselling Session</a>
            </div>
        </div>

        <hr class="ir-divider" />

        <!-- Bottom Trust / University Block -->
        <div class="ir-trust-block">
            <h3 class="ir-trust-heading">Learn From India's Top Universities</h3>
            <p class="ir-trust-subtext">UGC-approved online degrees from India's best universities.</p>
        </div>
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
            <div class="program-card">
                <div class="icon-online">
                    <img src="{{ asset('img/icon/master-of-business-administration.png') }}" alt="">
                </div>
                <h3>MBA</h3>
                <p>Master of Business Administration</p>
                <span class="duration">2 Years</span>
                <button>Check Eligibility</button>
            </div>
            <!-- Card 2 -->
            <div class="program-card">
                <div class="icon-online">
                    <img src="{{ asset('img/icon/bachelor-of-business-administration.png') }}" alt="">
                </div>
                <h3>BBA</h3>
                <p>Bachelor of Business Administration</p>
                <span class="duration">3 Years</span>
                <button>Check Eligibility</button>
            </div>

            <!-- Card 3 -->
            <div class="program-card">
                <div class="icon-online">
                    <img src="{{ asset('img/icon/master-of-computer-applications.png') }}" alt="">
                </div>
                <h3>MCA</h3>
                <p>Master of Computer Applications</p>
                <span class="duration">2 Years</span>
                <button>Check Eligibility</button>
            </div>

            <!-- Card 4 -->
            <div class="program-card">
                <div class="icon-online">
                    <img src="{{ asset('img/icon/bachelor-of-computer-applications.png') }}" alt="">
                </div>
                <h3>BCA</h3>
                <p>Bachelor of Computer Applications</p>
                <span class="duration">3 Years</span>
                <button>Check Eligibility</button>
            </div>

            <!-- Card 5 -->
            <div class="program-card">
                <div class="icon-online">
                    <img src="{{ asset('img/icon/diploma.png') }}" alt="">
                </div>
                <h3>PG Diploma</h3>
                <p>Various Specialized Programs</p>
                <span class="duration">1 Year</span>
                <button>Check Eligibility</button>
            </div>
        </div>
        <div class="view-all">
            <a href="#">View All Programs →</a>
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
            <div class="feature-box">
                <div class="icon-why">
                    <img src="{{ asset('img/icon/career.png') }}" alt="">
                </div>
                <h4>Career Counselling</h4>
                <p>Personalized guidance to help you choose the right course and career path.</p>
            </div>

            <div class="feature-box">
                <div class="icon-why">
                    <img src="{{ asset('img/icon/admission-process.png') }}" alt="">
                </div>
                <h4>Easy Admission</h4>
                <p>Hassle-free admission process with complete end-to-end support.</p>
            </div>
            <div class="feature-box">
                <div class="icon-why">
                    <img src="{{ asset('img/icon/top-university.png') }}" alt="">
                </div>
                <h4>Top Universities</h4>
                <p>Partnered with UGC-approved and NAAC-accredited universities.</p>
            </div>
            <div class="feature-box">
                <div class="icon-why">
                    <img src="{{ asset('img/icon/online-learning.png') }}" alt="">
                </div>
                <h4>Flexible Learning</h4>
                <p>Learn anytime, anywhere with online classes and recorded sessions.</p>
            </div>
            <div class="feature-box">
                <div class="icon-why">
                    <img src="{{ asset('img/icon/EMI-options.png') }}" alt="">
                </div>
                <h4>EMI Options</h4>
                <p>Affordable fee structure with easy EMI plans to suit your budget.</p>
            </div>
            <div class="feature-box">
                <div class="icon-why">
                    <img src="{{ asset('img/icon/placement-support.png') }}" alt="">
                </div>
                <h4>Placement Support</h4>
                <p>Resume building, mock interviews, and career assistance.</p>
            </div>
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
                        <a href="#" class="btn-primary">Book Free Counselling Call</a>
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
            <div class="testimonial-card">
                <div class="students-review">
                    <div class="icon-review">
                        <img src="{{ asset('img/icon/left.png') }}" alt="">
                    </div>
                    <div class="stars">★★★★★</div>
                </div>
                <p class="review">
                    “Ignition Edutech made my admission process seamless. I got enrolled in NMIMS and it truly boosted
                    my career growth.”
                </p>
                <div class="student">
                    <img src="{{ asset('img/live/review-01.jpg') }}" alt="">
                    <div>
                        <h4>Rohit Sharma</h4>
                        <span>MBA, NMIMS University</span>
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
                    “The counselors were very supportive and helped me choose the right program. Highly recommended for
                    online education.”
                </p>
                <div class="student">
                    <img src="{{ asset('img/live/review-03.jpg') }}" alt="">
                    <div>
                        <h4>Priya Mehta</h4>
                        <span>BCA, Manipal University</span>
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
                    “I was confused about university selection. Their guidance helped me pick the best course for my
                    future.”
                </p>
                <div class="student">
                    <img src="{{ asset('img/live/review-02.jpg') }}" alt="">
                    <div>
                        <h4>Ankit Verma</h4>
                        <span>MCA, Amity University</span>
                    </div>
                </div>
            </div>
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

        <p class="subtitle">
            Your journey from inquiry to admission in 3 simple steps
        </p>

        <div class="steps">

            <div class="step">

                <div class="icon-works orange">
                    <i class="fa-solid fa-xl fa-file-signature"></i>
                </div>

                <div class="works-content">
                    <h4>Fill the Enquiry Form</h4>

                    <p>
                        Share your details and our counselor will connect
                        with you within 30 minutes.
                    </p>
                </div>

            </div>

            <div class="connector"></div>

            <div class="step">

                <div class="icon-works purple">
                    <i class="fa-solid fa-xl fa-user-graduate"></i>
                </div>

                <div class="works-content">

                    <h4>Get Expert Counselling</h4>

                    <p>
                        Understand your options, fees, and career
                        opportunities with expert guidance.
                    </p>

                </div>

            </div>

            <div class="connector"></div>

            <div class="step">

                <div class="icon-works blue">
                    <i class="fa-solid fa-xl fa-circle-check"></i>
                </div>

                <div class="works-content">

                    <h4>Confirm Admission</h4>

                    <p>
                        We assist you in the complete admission process—
                        simple, fast, and transparent.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>
<section class="stats-service-section">
    <div class="container">
        <div class="stats-service">
            <div class="stat">
                <div class="icon-stat">
                    <img src="{{ asset('img/icon/students-enrolled.png') }}" alt="">
                </div>
                <div class="stat-content">
                    <h3>10,000+</h3>
                    <p>Students Enrolled</p>
                </div>
            </div>
            <div class="stat">
                <div class="icon-stat">
                    <img src="{{ asset('img/icon/university.png') }}" alt="">
                </div>
                <div class="stat-content">
                    <h3>50+</h3>
                    <p>Top Universities</p>
                </div>
            </div>
            <div class="stat">
                <div class="icon-stat">
                    <img src="{{ asset('img/icon/programs-offered.png') }}" alt="">
                </div>
                <div class="stat-content">
                    <h3>100+</h3>
                    <p>Programs Offered</p>
                </div>
            </div>
            <div class="stat">
                <div class="icon-stat">
                    <img src="{{ asset('img/icon/student-satisfaction.png') }}" alt="">
                </div>
                <div class="stat-content">
                    <h3>95%</h3>
                    <p>Student Satisfaction</p>
                </div>
            </div>
            <div class="stat">
                <div class="icon-stat">
                    <img src="{{ asset('img/icon/average-rating.png') }}" alt="">
                </div>
                <div class="stat-content">
                    <h3>4.8/5</h3>
                    <p>Average Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="success-section">
    <div class="container">
        <h2>Success Stories That Inspire</h2>
        <p class="subtitle">Students who transformed their careers with us</p>
        <div class="cards">
            <div class="card">
                <img src="{{ asset('img/course/success-stories-01.jpg') }}" alt="">
                <div class="card-content-area">
                    <h3>From Marketing Executive to MBA Graduate</h3>
                    <p>With the right support, I got into a top university.</p>
                    <span>- Neha Sharma</span>
                    <small>MBA, Chandigarh University</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/course/success-stories-02.jpg') }}" alt="">
                <div class="card-content-area">
                    <h3>Switching Career<br> with MCA</h3>
                    <p>The MCA program helped me transition into tech.</p>
                    <span>- Saurabh Tiwari</span>
                    <small>MCA, Manipal University</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/course/success-stories-03.jpg') }}" alt="">
                <div class="card-content-area">
                    <h3>Career Growth<br> with BBA</h3>
                    <p>The knowledge and skills I gained helped me get promoted.</p>
                    <span>- Pooja Verma</span>
                    <small>BBA, Amity University</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/course/success-stories-04.jpg') }}" alt="">
                <div class="card-content-area">
                    <h3>Learning<br> Without Limits</h3>
                    <p>Flexible learning made it possible to balance work and studies.</p>
                    <span>- Vikram Joshi</span>
                    <small>PG Diploma, NMIMS</small>
                </div>
            </div>
        </div>
        <a href="#" class="view-more">View More Success Stories →</a>
    </div>
</section>

<section class="approved-service">
    <div class="container">
        <h2>Approved. Accredited. Trusted.</h2>
        <div class="approved-trusted">
            <div class="stat-approved">
                <div class="approved">
                    <img src="{{ asset('img/icon/UGC-approved.png') }}" alt="">
                </div>
                <div class="approved-content">
                    <h3>UGC Approved</h3>
                    <p>Recognized by UGC</p>
                </div>
            </div>
            <div class="stat-approved">
                <div class="approved">
                    <img src="{{ asset('img/icon/NAAC-A-grade.png') }}" alt="">
                </div>
                <div class="approved-content">
                    <h3>NAAC A+ Grade</h3>
                    <p>Top Accredited Universities</p>
                </div>
            </div>
            <div class="stat-approved">
                <div class="approved">
                    <img src="{{ asset('img/icon/AICTE-approved.png') }}" alt="">
                </div>
                <div class="approved-content">
                    <h3>AICTE Approved</h3>
                    <p>Industry Recognized</p>
                </div>
            </div>
            <div class="stat-approved">
                <div class="approved">
                    <img src="{{ asset('img/icon/AIU-member.png') }}" alt="">
                </div>
                <div class="approved-content">
                    <h3>AIU Member</h3>
                    <p>Association of Indian Universities</p>
                </div>
            </div>
            <div class="stat-approved-two">
                <div class="approved">
                    <img src="{{ asset('img/icon/secure.png') }}" alt="">
                </div>
                <div class="approved-content-two">
                    <h3>100% Secure Process</h3>
                    <p>Your data is safer with us</p>
                </div>
            </div>
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

                                    <h3>
                                        Ready to Start Your Journey?
                                    </h3>

                                    <p>
                                        Take the first step towards a successful
                                        career.
                                    </p>

                                    <a href="{{ route('university-application-form') }}" class="btn primary-btn">
                                        Apply Now
                                    </a>

                                    <span class="or">
                                        or
                                    </span>

                                    <a href="{{ route('contact') }}" class="btn outline-btn">
                                        Talk to Counselor
                                    </a>

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


<div class="hs-form-frame" data-region="na2" data-form-id="a7c9f6e6-c812-409c-8110-288692f5e36e" data-portal-id="247564101"></div>


<x-frontend-footer />



<!-- footer-area-start -->
<script>
    const track = document.getElementById("logoTrack");
    const nextBtn = document.querySelector(".next");
    const prevBtn = document.querySelector(".prev");

    let scrollAmount = 200;

    nextBtn.addEventListener("click", () => {
        track.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
        });
    });

    prevBtn.addEventListener("click", () => {
        track.scrollBy({
            left: -scrollAmount,
            behavior: "smooth"
        });
    });
</script>
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



