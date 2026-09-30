<x-frontend-header />

<main class="manipal-online-page">
    <section class="manipal-shell">
        <section class="manipal-hero">
            <div class="container manipal-hero-layout">
                <div class="manipal-hero-copy">
                    <p class="manipal-kicker">Online Degrees. Career Momentum. Trusted Guidance.</p>
                    <h1>Build your next qualification with a <span>Manipal Online</span> learning path that works around
                        your life.</h1>
                    <p class="manipal-lead">Explore UGC-entitled online programs from the Manipal ecosystem with flexible
                        schedules, academic support, and a counselling-first admission experience designed for working
                        professionals, graduates, and ambitious career switchers.</p>

                    <div class="manipal-hero-actions">
                        <a href="{{ route('university-application-form') }}"
                            class="manipal-btn manipal-btn-primary">Explore
                            Programs</a>
                        <a href="{{ route('contact') }}" class="manipal-btn manipal-btn-secondary">Talk to a
                            Counsellor</a>
                    </div>

                    <div class="manipal-hero-bullets">
                        <div class="manipal-bullet-card">
                            <i class="fa-solid fa-building-columns"></i>
                            <div>
                                <strong>Recognised university ecosystem</strong>
                                <span>Structured online programs backed by established institutions.</span>
                            </div>
                        </div>
                        <div class="manipal-bullet-card">
                            <i class="fa-solid fa-laptop"></i>
                            <div>
                                <strong>Study without pressing pause</strong>
                                <span>Balance work, family, and higher education with flexible delivery.</span>
                            </div>
                        </div>
                        <div class="manipal-bullet-card">
                            <i class="fa-solid fa-user-tie"></i>
                            <div>
                                <strong>Career-aligned decision making</strong>
                                <span>Choose a program based on goals, timelines, and role progression.</span>
                            </div>
                        </div>
                        <div class="manipal-bullet-card">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <div>
                                <strong>Mentorship & alumni network</strong>
                                <span>Learn from industry experts and connect with global community.</span>
                            </div>
                        </div>
                    </div>

                    <div class="manipal-hero-metrics">
                        <div>
                            <strong>Live + recorded</strong>
                            <span>Learning support</span>
                        </div>
                        <div>
                            <strong>Program-led</strong>
                            <span>Specialisations</span>
                        </div>
                        <div>
                            <strong>Admission</strong>
                            <span>Guidance included</span>
                        </div>
                    </div>
                </div>

                @includeIf('forms.manipal.manipal-hero-banner-form')

            </div>
        </section>

        <section class="manipal-trust-bar">
            <div class="container manipal-trust-grid">
                <div class="manipal-trust-intro">
                    <span class="manipal-kicker">Why learners start here</span>
                    <h2>A more thoughtful way to choose an online university journey</h2>
                    <p>Choosing an online university journey should require more than a cursory glance at tuition costs
                        and a simple search for schedule flexibility. A truly thoughtful approach shifts the focus from
                        mere convenience to deep compatibility, prompting prospective students to look past the
                        marketing gloss of digital brochures and closely examine a school’s internal ecosystem.</p>
                </div>
                <div class="manipal-trust-points">
                    <div class="manipal-trust-item">
                        <i class="fa-solid fa-award"></i>
                        <div>
                            <strong>Quality-first positioning</strong>
                            <span>Programs are designed around academic structure, not just marketing claims.</span>
                        </div>
                    </div>
                    <div class="manipal-trust-item">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <div>
                            <strong>Flexible delivery model</strong>
                            <span>Useful for professionals who need weekend, recorded, or self-paced support.</span>
                        </div>
                    </div>
                    <div class="manipal-trust-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <strong>Career-minded choices</strong>
                            <span>Best suited for upskilling, promotion prep, and role transitions.</span>
                        </div>
                    </div>
                    <div class="manipal-trust-item">
                        <i class="fa-solid fa-handshake"></i>
                        <div>
                            <strong>Corporate & placement trust</strong>
                            <span>Degrees are widely accepted by top MNCs for recruitment and internal appraisal
                                cycles.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="manipal-section">
            <div class="container">
                <div class="manipal-section-head">
                    <span class="manipal-kicker">Built For Real Goals</span>
                    <h2>Whether you want growth, credibility, or a career pivot, the page now speaks to outcomes first.
                    </h2>
                </div>

                <div class="manipal-outcome-grid">
                    <article class="manipal-outcome-card">
                        <img src="{{ asset('img/campus/legacy-excellence.jpg') }}"
                            alt="Professionals planning career growth">
                        <div>
                            <h3>Career acceleration</h3>
                            <p>Ideal when your next move needs a recognised qualification that supports managerial,
                                technical, or analytical progression.</p>
                        </div>
                    </article>
                    <article class="manipal-outcome-card">
                        <img src="{{ asset('img/campus/flexible-learning.jpg') }}"
                            alt="Flexible online learning environment">
                        <div>
                            <h3>Flexibility with structure</h3>
                            <p>Get a more manageable study rhythm through a blend of scheduled interaction and learning
                                resources you can revisit.</p>
                        </div>
                    </article>
                    <article class="manipal-outcome-card">
                        <img src="{{ asset('img/campus/comprehensive-support.jpg') }}"
                            alt="Student support and mentoring">
                        <div>
                            <h3>Guided learner experience</h3>
                            <p>From counselling to onboarding, the journey feels more supported for first-time online
                                degree learners.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="manipal-section manipal-section-alt">
            <div class="container">
                <div class="manipal-section-head manipal-section-head-split">
                    <div>
                        <span class="manipal-kicker">Program Portfolio</span>
                        <h2>Start with the qualification that matches your next milestone.</h2>
                    </div>
                    <p>Instead of a flat list, the new layout groups programs by intent so visitors can self-identify
                        faster and move toward the right conversation.</p>
                </div>

                <div class="manipal-program-grid">
                    <article class="manipal-program-card">
                        <div class="manipal-program-badge">Leadership Track</div>
                        <h3>MBA</h3>
                        <p>For professionals targeting management roles, cross-functional growth, or formal business
                            credentials.</p>
                        <ul>
                            <li>Popular for working professionals</li>
                            <li>Useful for promotion-focused learners</li>
                        </ul>
                    </article>
                    <article class="manipal-program-card">
                        <div class="manipal-program-badge">Technology Track</div>
                        <h3>MCA</h3>
                        <p>Well suited for learners aiming to deepen technical capability in software, systems, and
                            application-oriented roles.</p>
                        <ul>
                            <li>Strong option for IT upskilling</li>
                            <li>Fits structured technical advancement</li>
                        </ul>
                    </article>
                    <article class="manipal-program-card">
                        <div class="manipal-program-badge">Analytics Track</div>
                        <h3>M.Sc Data Science</h3>
                        <p>Built for learners who want a more data-focused route spanning analytics, insights, and
                            modern digital decision making.</p>
                        <ul>
                            <li>Career pivot friendly</li>
                            <li>Good for data-driven roles</li>
                        </ul>
                    </article>
                    <article class="manipal-program-card">
                        <div class="manipal-program-badge">Foundation Track</div>
                        <h3>BBA / BCA</h3>
                        <p>Undergraduate pathways for learners seeking early-career credibility in business, commerce,
                            or computing.</p>
                        <ul>
                            <li>Entry-to-growth oriented</li>
                            <li>Useful for long-term academic planning</li>
                        </ul>
                    </article>
                    <article class="manipal-program-card">
                        <div class="manipal-program-badge">Short-Term Upskilling</div>
                        <h3>Certificates & Specialisations</h3>
                        <p>Practical options for professionals who want focused learning without immediately committing
                            to a full degree.</p>
                        <ul>
                            <li>Good for targeted skill building</li>
                            <li>Fast way to test a domain shift</li>
                        </ul>
                    </article>
                    <article class="manipal-program-card manipal-program-card-accent">
                        <div class="manipal-program-badge">Need Help Choosing?</div>
                        <h3>Compare before you commit</h3>
                        <p>Our counsellors can help you narrow options using your experience level, career goals, and
                            available study time.</p>
                        <a href="{{ route('university-application-form') }}">Request program comparison</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="manipal-section">
            <div class="container manipal-journey-layout">
                <div class="manipal-journey-copy">
                    <span class="manipal-kicker">Learning Journey</span>
                    <h2>A clearer picture of how the experience can feel from enquiry to enrolment.</h2>
                    <p>The redesigned middle section replaces generic feature repetition with a more useful journey map.
                        It focuses on the questions most visitors actually have: how learning works, how much support
                        they receive, and what happens after they submit interest.</p>

                    <div class="manipal-journey-steps">
                        <div class="manipal-journey-step">
                            <strong>01</strong>
                            <div>
                                <h4>Discover the right fit</h4>
                                <p>Understand which degree or certificate aligns best with your role, profile, and
                                    future plans.</p>
                            </div>
                        </div>
                        <div class="manipal-journey-step">
                            <strong>02</strong>
                            <div>
                                <h4>Review admissions and readiness</h4>
                                <p>Get help with eligibility, documentation, timelines, and how to prepare for the
                                    learning commitment.</p>
                            </div>
                        </div>
                        <div class="manipal-journey-step">
                            <strong>03</strong>
                            <div>
                                <h4>Begin with ongoing support</h4>
                                <p>Access classes, digital resources, and structured academic engagement throughout the
                                    program.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="manipal-journey-visual">
                    <img src="{{ asset('img/help/dpu-help.jpg') }}" alt="Manipal online student experience">
                    <div class="manipal-journey-panel">
                        <h3>Best-fit learner profiles</h3>
                        <div class="manipal-profile-list">
                            <div><i class="fa-solid fa-chart-line"></i><span>Working professionals seeking growth</span>
                            </div>
                            <div><i class="fa-solid fa-arrows-rotate"></i><span>Learners planning a domain
                                    transition</span></div>
                            <div><i class="fa-solid fa-user-graduate"></i><span>Graduates looking for stronger
                                    employability</span></div>
                            <div><i class="fa-solid fa-business-time"></i><span>Managers upgrading formal
                                    credentials</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="manipal-section manipal-section-alt">
            <div class="container">
                <div class="manipal-section-head">
                    <span class="manipal-kicker">Why Students Choose Us</span>
                    <h2>A World-Class Education Built Around Your Career Goals</h2>
                </div>

                <div class="manipal-differentiator-grid">
                    <div class="manipal-differentiator-card"> <i class="fa-solid fa-layer-group"></i>
                        <h3>Comprehensive and Structured Learning Experience</h3>
                        <p> Every program is carefully structured to provide a seamless learning journey. Students can
                            easily understand course objectives, curriculum details, specialization options, career
                            outcomes, and admission requirements through a well-organized academic framework. This
                            approach helps learners make informed decisions about their education and professional
                            future. </p>
                    </div>
                    <div class="manipal-differentiator-card"> <i class="fa-solid fa-comments"></i>
                        <h3>Personalized Academic and Career Counselling</h3>
                        <p> Choosing the right degree program can be challenging. Our experienced academic advisors and
                            counselling experts provide personalized guidance to help learners select programs aligned
                            with their career aspirations, educational background, and industry interests. From
                            admission to graduation, students receive dedicated support throughout their learning
                            journey. </p>
                    </div>
                    <div class="manipal-differentiator-card"> <i class="fa-solid fa-table-cells-large"></i>
                        <h3>Industry-Relevant Curriculum and Practical Skills</h3>
                        <p> Our online programs are designed in collaboration with academic experts and industry
                            professionals to ensure students gain knowledge that aligns with current market demands. The
                            curriculum emphasizes practical application, problem-solving abilities, leadership
                            development, and job-ready skills that enhance employability across diverse industries. </p>
                    </div>
                    <div class="manipal-differentiator-card"> <i class="fa-solid fa-mobile-screen-button"></i>
                        <h3>Flexible Learning Designed for Modern Professionals</h3>
                        <p> Study anytime and anywhere through a mobile-friendly digital learning environment. Working
                            professionals, entrepreneurs, and students can access lectures, assignments, study
                            materials, and assessments at their convenience while maintaining a healthy balance between
                            education, work, and personal responsibilities. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="manipal-section">
            <div class="container">
                <div class="manipal-section-head manipal-section-head-split">
                    <div>
                        <span class="manipal-kicker">Student Success Stories</span>
                        <h2>Real Stories from Our Global Alumni Network</h2>
                    </div>
                    <p>Hear firsthand how our industry-aligned programs helped graduates achieve their career milestones
                        and unlock new professional opportunities.</p>
                </div>

                <div class="manipal-testimonial-grid">
                    <article class="manipal-testimonial-card">
                        <div class="manipal-stars">★★★★★</div>

                        <p>
                            "As a full-time professional, finding a program that offered flexibility without
                            compromising educational quality was important to me. The structured curriculum, expert
                            faculty support, and practical learning approach helped me strengthen my management skills
                            and prepare for leadership opportunities within my organization."
                        </p>

                        <div class="manipal-person">
                            <img src="{{ asset('img/live/review-01.jpg') }}"
                                alt="MBA student success story and online learning experience">
                            <div>
                                <strong>Rohan Mehta</strong>
                                <span>MBA Aspirant & Corporate Professional</span>
                            </div>
                        </div>
                    </article>

                    <article class="manipal-testimonial-card">
                        <div class="manipal-stars">★★★★★</div>

                        <p>
                            "The online learning platform provided the flexibility I needed while delivering a highly
                            engaging educational experience. The industry-focused curriculum and continuous academic
                            support helped me acquire new technical skills and confidently pursue career advancement
                            opportunities."
                        </p>

                        <div class="manipal-person">
                            <img src="{{ asset('img/live/review-02.jpg') }}"
                                alt="Online education review by technology professional">
                            <div>
                                <strong>Ankita Sharma</strong>
                                <span>Technology Professional</span>
                            </div>
                        </div>
                    </article>

                    <article class="manipal-testimonial-card">
                        <div class="manipal-stars">★★★★★</div>

                        <p>
                            "I wanted a program that combined flexibility, academic excellence, and career relevance.
                            The practical assignments, expert faculty guidance, and industry-oriented curriculum helped
                            me successfully transition into a data-focused role while continuing my professional
                            responsibilities."
                        </p>

                        <div class="manipal-person">
                            <img src="{{ asset('img/live/review-03.jpg') }}"
                                alt="Career growth through online degree program">
                            <div>
                                <strong>Priya Deshmukh</strong>
                                <span>Data Analytics Professional</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="manipal-cta-section">
            <div class="container">
                <div class="manipal-cta-panel">
                    <div class="manipal-cta-copy">
                        <span class="manipal-kicker">Next Step</span>
                        <h2>Need help choosing between Manipal Online options?</h2>
                        <p>Start with a counselling conversation and we will help you narrow the right program based on
                            your goals, time availability, and academic background.</p>
                    </div>

                    @includeIf('forms.manipal.manipal-help-section-form')
                </div>
            </div>
        </section>
    </section>
</main>

<x-frontend-footer />
