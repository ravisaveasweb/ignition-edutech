<x-frontend-header />

<main class="smu-online-page">
    <section class="smu-shell">
        <section class="smu-hero">
            <div class="container smu-hero-layout">
                <div class="smu-hero-copy">
                    <p class="smu-kicker">Sikkim Manipal University Online</p>
                    <h1>Choose a <span>credible online degree path</span> backed by SMU's long-standing academic
                        identity.</h1>
                    <p class="smu-lead">Gain a UGC-entitled, industry-recognized higher education with flexible delivery.
                        Sikkim Manipal University provides trusted online degrees tailored for career continuity,
                        professional growth, and structured academic progression.</p>

                    <div class="smu-hero-actions">
                        <a href="{{ route('university-application-form') }}" class="smu-btn smu-btn-primary">Explore SMU
                            Programs</a>
                        <a href="{{ route('contact') }}" class="smu-btn smu-btn-secondary">Talk To An Advisor</a>
                    </div>

                    <div class="smu-hero-highlights">
                        <div class="smu-highlight-card">
                            <i class="fa-solid fa-shield-check"></i>
                            <div>
                                <strong>Trusted academic framing</strong>
                                <span>Built for learners who care about institutional credibility and continuity.</span>
                            </div>
                        </div>
                        <div class="smu-highlight-card">
                            <i class="fa-solid fa-compass-drafting"></i>
                            <div>
                                <strong>Clearer study direction</strong>
                                <span>Useful for professionals choosing between management, IT, and analytics
                                    routes.</span>
                            </div>
                        </div>
                        <div class="smu-highlight-card">
                            <i class="fa-solid fa-calendar-check"></i>
                            <div>
                                <strong>Schedule-aware flexibility</strong>
                                <span>A better fit for learners balancing work, family, and academic ambition.</span>
                            </div>
                        </div>
                        <div class="smu-highlight-card">
                            <i class="fa-solid fa-bullseye"></i>
                            <div>
                                <strong>Career-aligned outcomes</strong>
                                <span>Designed to help working professionals secure promotions, industry pivots, and
                                    salary growth.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="smu-hero-aside">
                    <div class="smu-enquiry-card">
                        <div class="smu-pill mb-3">Free Counselling</div>
                        <h3>Find the SMU program that matches your current stage</h3>
                        <p>Speak with our team about eligibility, career alignment, and the online study format before
                            you apply.</p>

                        @includeIf('forms.smu.smu-hero-banner-form')
                    </div>

                    <div class="smu-quick-panel">
                        <h4>Best for learners who want</h4>
                        <ul>
                            <li>A recognised online degree option</li>
                            <li>Guidance before committing to a program</li>
                            <li>A structured academic experience with flexibility</li>
                            <li>Clarity on postgraduate career fit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="smu-proof-band">
            <div class="container smu-proof-grid">
                <div class="smu-proof-intro">
                    <span class="smu-kicker">The SMU Advantage</span>
                    <h2>A Legacy of Academic Excellence and Career-Focused Higher Education</h2>
                </div>
                <div class="smu-proof-cards">
                    <div class="smu-proof-card">
                        <strong>Recognition-first positioning</strong>
                        <p>Useful for visitors who need trust signals before exploring courses in detail.</p>
                    </div>
                    <div class="smu-proof-card">
                        <strong>Decision support narrative</strong>
                        <p>The page now encourages comparison and counselling instead of passive browsing.</p>
                    </div>
                    <div class="smu-proof-card">
                        <strong>Career-conscious framing</strong>
                        <p>Programs are grouped around learner intent, not just academic labels.</p>
                    </div>
                    <div class="smu-proof-card">
                        <strong>Outcome-driven validation</strong>
                        <p>Salary insights and placement data are front-loaded to immediately answer the learner's ROI
                            questions.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="smu-section">
            <div class="container">
                <div class="smu-section-head">
                    <span class="smu-kicker">Who This Fits</span>
                    <h2>Designed for Ambitious Learners Shaping the Future of Business and IT</h2>
                </div>

                <div class="smu-fit-grid">
                    <article class="smu-fit-card">
                        <img src="{{ asset('img/campus/legacy-excellence.jpg') }}"
                            alt="Working
                            professionals building career credibility with SMU Online">
                        <div>
                            <h3>Professionals building credibility</h3>
                            <p>Suitable for learners who want a recognised qualification to strengthen promotion and
                                profile-building plans.</p>
                        </div>
                    </article>
                    <article class="smu-fit-card">
                        <img src="{{ asset('img/campus/flexible-learning.jpg') }}"
                            alt="Flexible
                            online learning schedules for higher education">
                        <div>
                            <h3>Learners needing flexibility</h3>
                            <p>Supports those who cannot shift to full-time study but still want structured academic
                                growth.</p>
                        </div>
                    </article>
                    <article class="smu-fit-card">
                        <img src="{{ asset('img/campus/comprehensive-support.jpg') }}"
                            alt="Academic
                            counselling and mentorship support for online students">
                        <div>
                            <h3>Students looking for guidance</h3>
                            <p>Get dedicated mentorship, career counselling, and end-to-end support to navigate your
                                online learning journey with confidence.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="smu-section smu-section-alt">
            <div class="container">
                <div class="smu-section-head smu-section-head-split">
                    <div>
                        <span class="smu-kicker">Program Routes</span>
                        <h2>Choose the study route that best supports your next move.</h2>
                    </div>
                    <p>Advance your professional skill set with specialized postgraduate tracks built around real-world
                        industry demands and modern tech frameworks.</p>
                </div>

                <div class="smu-program-grid">
                    <article class="smu-program-card">
                        <div class="smu-program-tag">Leadership Growth</div>
                        <h3>MBA</h3>
                        <p>For learners preparing for management responsibility, business visibility, or broader
                            strategic roles.</p>
                    </article>
                    <article class="smu-program-card">
                        <div class="smu-program-tag">Technical Progression</div>
                        <h3>MCA</h3>
                        <p>A stronger route for learners who want to deepen their computing foundation and technical
                            role readiness.</p>
                    </article>
                    <article class="smu-program-card">
                        <div class="smu-program-tag">Data & Analytics</div>
                        <h3>M.Sc Data Science</h3>
                        <p>Useful for career paths that increasingly depend on analytics, insight generation, and
                            digital problem solving.</p>
                    </article>
                    <article class="smu-program-card">
                        <div class="smu-program-tag">Guided Choice</div>
                        <h3>Not sure which to pick?</h3>
                        <p>Our advisors can help compare programs based on academic background, workload comfort, and
                            long-term career intent.</p>
                        <!-- <a href="{{ route('university-application-form') }}">Request program comparison</a> -->
                    </article>
                </div>
            </div>
        </section>

        <section class="smu-section">
            <div class="container smu-journey-layout">
                <div class="smu-journey-copy">
                    <span class="smu-kicker">Learning Experience</span>
                    <h2>A Step-by-Step Pathway Engineered for Your Academic Success</h2>
                    <p>From day one, our online infrastructure ensures you have continuous access to masterclasses,
                        recorded lectures, and live industry interaction without compromising your job.</p>

                    <div class="smu-journey-list">
                        <div class="smu-journey-item">
                            <strong>01</strong>
                            <div>
                                <h4>Discuss career intent</h4>
                                <p>Start with a conversation about where you want the degree to take you, not just which
                                    course name sounds familiar.</p>
                            </div>
                        </div>
                        <div class="smu-journey-item">
                            <strong>02</strong>
                            <div>
                                <h4>Confirm academic fit</h4>
                                <p>Review eligibility, timelines, and whether the workload makes sense for your current
                                    routine.</p>
                            </div>
                        </div>
                        <div class="smu-journey-item">
                            <strong>03</strong>
                            <div>
                                <h4>Move into guided online learning</h4>
                                <p>Use digital access, academic structure, and support touchpoints to stay consistent
                                    through the program.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="smu-journey-visual">
                    <img src="{{ asset('img/help/smu-help.jpg') }}" alt="Sikkim Manipal University online experience">
                </div>
            </div>
        </section>

        <section class="smu-section smu-section-alt">
            <div class="container">
                <div class="smu-section-head">
                    <span class="smu-kicker">Learner Signals</span>
                    <h2>Real Impact: What Our Distance Learning Alumni Say</h2>
                </div>

                <div class="smu-testimonial-grid">
                    <article class="smu-testimonial-card">
                        <div class="smu-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The program structure made it incredibly straightforward to balance my office workload while
                            acquiring highly relevant business management skills."</p>
                        <div class="smu-person">
                            <img src="{{ asset('img/live/review-01.jpg') }}" alt="SMU learner testimonial">
                            <div>
                                <strong>Rohan Mehta</strong>
                                <span>Management aspirant</span>
                            </div>
                        </div>
                    </article>
                    <article class="smu-testimonial-card">
                        <div class="smu-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The online portal and recorded sessions let me complete assignments on my own schedule
                            without falling behind on my technical metrics."</p>
                        <div class="smu-person">
                            <img src="{{ asset('img/live/review-02.jpg') }}" alt="SMU online learner review">
                            <div>
                                <strong>Ankita Sharma</strong>
                                <span>Working professional</span>
                            </div>
                        </div>
                    </article>
                    <article class="smu-testimonial-card">
                        <div class="smu-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"Choosing an established university name like SMU gave me the confidence that my certificate
                            would be valued by corporate recruiters."</p>
                        <div class="smu-person">
                            <img src="{{ asset('img/live/review-03.jpg') }}" alt="SMU student review">
                            <div>
                                <strong>Priya Deshmukh</strong>
                                <span>Career growth learner</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="smu-cta">
            <div class="container">
                <div class="smu-cta-panel">
                    <div class="smu-cta-copy">
                        <span class="smu-kicker">Next Step</span>
                        <h2>Want help deciding whether SMU is the right online university fit?</h2>
                        <p>Request a quick counselling conversation and we will help you shortlist the right path based
                            on your profile and goals.</p>
                    </div>
                    @includeIf('forms.smu.smu-help-section-form')
                </div>
            </div>
        </section>
    </section>
</main>

<x-frontend-footer />
