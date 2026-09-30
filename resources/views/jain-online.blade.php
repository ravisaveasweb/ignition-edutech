<x-frontend-header />

<main class="jain-online-page">
    <section class="jain-shell">
        <section class="jain-hero">
            <div class="container jain-hero-layout">
                <div class="jain-hero-copy">
                    <p class="jain-kicker">JAIN Online</p>
                    <h1>Accelerate your career with a <span>top-tier online degree</span> built for the digital global
                        economy.</h1>
                    <p class="jain-lead">Gain a UGC-entitled, NAAC A++ accredited higher education from a prestigious
                        university. JAIN Online delivers global industry recognition, cutting-edge electives, and a
                        flexible virtual campus designed to fit the schedule of ambitious working professionals.</p>

                    <div class="jain-hero-actions">
                        <a href="{{ route('university-application-form') }}" class="jain-btn jain-btn-primary">Explore
                            JAIN
                            Programs</a>
                        <a href="{{ route('contact') }}" class="jain-btn jain-btn-secondary">Talk To A Counsellor</a>
                    </div>

                    <div class="jain-hero-grid-cards">
                        <div class="jain-hero-card">
                            <i class="fa-solid fa-bolt"></i>
                            <div>
                                <strong>Global Elite Accreditation</strong>
                                <span>Learn with confidence under a prestigious NAAC A++ university framework.</span>
                            </div>
                        </div>
                        <div class="jain-hero-card">
                            <i class="fa-solid fa-briefcase"></i>
                            <div>
                                <strong>Career-First Specializations</strong>
                                <span>Programs are deeply aligned with corporate demands, tech transitions, and global
                                    job growth.</span>
                            </div>
                        </div>
                        <div class="jain-hero-card">
                            <i class="fa-solid fa-headset"></i>
                            <div>
                                <strong>Dedicated Placement Support</strong>
                                <span>Access proactive career mentorship, mock interviews, and virtual hiring
                                    drives.</span>
                            </div>
                        </div>
                        <div class="jain-hero-card">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <div>
                                <strong>Flexible Digital Campus</strong>
                                <span>Balance advanced degree timelines alongside full-time work with 24/7 LMS
                                    availability.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="jain-hero-aside">
                    <div class="jain-enquiry-card">
                        <div class="jain-pill">Free Counselling</div>
                        <h3>Discover which JAIN Online path fits your goals best</h3>
                        <p>Get support comparing programs, understanding fit, and choosing a learning route that makes
                            sense for your next move.</p>

                        @includeIf('forms.jain.jain-hero-banner-form')
                    </div>

                    <div class="jain-snapshot-card">
                        <h4>Why Global Professionals Choose JAIN</h4>
                        <ul>
                            <li>UGC-Entitled Degrees recognized by top multinational corporations</li>
                            <li>Advanced dual-specialization tracks across technical and business fields</li>
                            <li>Interactive live masterclasses led by globally recognized faculty</li>
                            <li>A massive network of 2,000+ corporate hiring partners</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="jain-value-band">
            <div class="container jain-value-layout">
                <div class="jain-value-copy">
                    <span class="jain-kicker">The JAIN Distinction</span>
                    <h2>A dynamic academic platform built for industry mobility, digital mastery, and executive
                        leadership.</h2>
                </div>
                <div class="jain-value-cards">
                    <div class="jain-value-card">
                        <strong>Future-Ready Curriculum</strong>
                        <p>Coursework is updated continuously alongside silicon-valley and corporate benchmarks to
                            ensure immediate skills applicability.</p>
                    </div>
                    <div class="jain-value-card">
                        <strong>Global Alumni Network</strong>
                        <p>Connect with a vast, established professional ecosystem spanning major digital, technology,
                            and financial industries globally.</p>
                    </div>
                    <div class="jain-value-card">
                        <strong>Tailored Mentorship Structure</strong>
                        <p>Receive one-on-one professional guidance from corporate executives to prepare your profile
                            for high-growth sectors.</p>
                    </div>
                    <div class="jain-value-card">
                        <strong>Comprehensive E-Learning Ecosystem</strong>
                        <p>Seamlessly navigate through immersive HD video content, digital libraries, and collaborative
                            peer discussion rooms.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="jain-section">
            <div class="container">
                <div class="jain-section-head">
                    <span class="jain-kicker">Who Should Consider It</span>
                    <h2>Empowering modern learners to achieve career transformation on their own terms.</h2>
                </div>

                <div class="jain-profile-grid">
                    <article class="jain-profile-card">
                        <img src="{{ asset('img/campus/flexible-learning.jpg') }}"
                            alt="Busy professionals completing flexible online degrees">
                        <div>
                            <h3>Busy professionals</h3>
                            <p>For learners who want a flexible academic option without losing momentum or sacrificing
                                their current corporate responsibilities.</p>
                        </div>
                    </article>
                    <article class="jain-profile-card">
                        <img src="{{ asset('img/campus/interactive-sessions.jpg') }}"
                            alt="Career switchers upskilling into modern technical and business industries">
                        <div>
                            <h3>Career switchers and upskillers</h3>
                            <p>For individuals looking to break into stronger leadership, next-generation technology
                                roles, or analytics-heavy opportunities.</p>
                        </div>
                    </article>
                    <article class="jain-profile-card">
                        <img src="{{ asset('img/campus/comprehensive-support.jpg') }}"
                            alt="Learners receiving guided academic and profile decisions">
                        <div>
                            <h3>Learners needing guided decisions</h3>
                            <p>For visitors who want dedicated advisor insights to choose a customized academic
                                blueprint that targets distinct industrial outcomes.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="jain-section jain-section-alt">
            <div class="container">
                <div class="jain-section-head jain-section-head-split">
                    <div>
                        <span class="jain-kicker">Program Choices</span>
                        <h2>Industry-focused degree paths structured for explicit professional advancement.</h2>
                    </div>
                    <p>Select from specialized postgraduate and undergraduate tracks designed to match high-demand
                        market directions and emerging technical ecosystems.</p>
                </div>

                <div class="jain-program-grid">
                    <article class="jain-program-card">
                        <div class="jain-program-tag">Business Growth</div>
                        <h3>MBA</h3>
                        <p>Ideal for learners targeting broader business visibility, enterprise leadership confidence,
                            and corporate executive role advancement.</p>
                    </article>
                    <article class="jain-program-card">
                        <div class="jain-program-tag">Technology Growth</div>
                        <h3>MCA</h3>
                        <p>Suitable for learners seeking stronger computing depth, cloud architecture mastery, and
                            long-term technical career progression.</p>
                    </article>
                    <article class="jain-program-card">
                        <div class="jain-program-tag">Digital & Data</div>
                        <h3>Data Science Pathways</h3>
                        <p>Strong for professionals exploring analytical business modeling, artificial intelligence
                            domains, and future-ready digital engineering.</p>
                    </article>
                    <article class="jain-program-card jain-program-card-accent">
                        <div class="jain-program-tag">Need Clarity?</div>
                        <h3>Let us help you compare options</h3>
                        <p>Use counselling guidance to understand workload, eligibility, and which program is the
                            strongest next step.</p>
                        <a class="mt-3" href="{{ route('university-application-form') }}">Request program support</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="jain-section">
            <div class="container jain-experience-layout">
                <div class="jain-experience-copy">
                    <span class="jain-kicker">Learning Experience</span>
                    <h2>A structured, end-to-end framework engineered around professional execution.</h2>
                    <p>Our educational delivery strategy bypasses conventional friction points, enabling an adaptive,
                        high-impact virtual journey from application to graduation.</p>

                    <div class="jain-experience-steps">
                        <div class="jain-experience-step">
                            <strong>01</strong>
                            <div>
                                <h4>Choose the right route</h4>
                                <p>Start by matching your vertical ambitions with the most suitable business, tech, or
                                    digital-learning pathway.</p>
                            </div>
                        </div>
                        <div class="jain-experience-step">
                            <strong>02</strong>
                            <div>
                                <h4>Prepare with clarity</h4>
                                <p>Review enrollment requirements, documentation readiness, and map how the curriculum
                                    rhythm syncs into your real life.</p>
                            </div>
                        </div>
                        <div class="jain-experience-step">
                            <strong>03</strong>
                            <div>
                                <h4>Learn with momentum</h4>
                                <p>Step into an optimized digital space that leverages interactive learning modules to
                                    ensure steady academic consistency.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="jain-experience-visual">
                    <img src="{{ asset('img/help/jain-help.jpg') }}"
                        alt="JAIN Online student learning on the interactive LMS platform">
                </div>
            </div>
        </section>

        <section class="jain-section jain-section-alt">
            <div class="container">
                <div class="jain-section-head">
                    <span class="jain-kicker">Learner Voice</span>
                    <h2>Real Impact: Experiences from the JAIN Online Community</h2>
                </div>

                <div class="jain-testimonial-grid">
                    <article class="jain-testimonial-card">
                        <div class="jain-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The flexibility of JAIN Online allowed me to pursue my MBA without taking a career break.
                            The curriculum was highly relevant to modern management strategies."</p>
                        <div class="jain-person">
                            <img src="{{ asset('img/live/review-01.jpg') }}" alt="JAIN Online graduate testimonial">
                            <div>
                                <strong>Rohan Mehta</strong>
                                <span>Business Development Manager</span>
                            </div>
                        </div>
                    </article>
                    <article class="jain-testimonial-card">
                        <div class="jain-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The advanced cloud and computing electives in the online MCA program directly mirrored the
                            modern frameworks we use across our enterprise platforms."</p>
                        <div class="jain-person">
                            <img src="{{ asset('img/live/review-02.jpg') }}" alt="JAIN Online student review">
                            <div>
                                <strong>Ankita Sharma</strong>
                                <span>Software Engineer</span>
                            </div>
                        </div>
                    </article>
                    <article class="jain-testimonial-card">
                        <div class="jain-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The dedicated career support team helped restructure my portfolio, leading directly to a
                            transition into a data analytics role within three months of graduating."</p>
                        <div class="jain-person">
                            <img src="{{ asset('img/live/review-03.jpg') }}" alt="JAIN Online alumni success review">
                            <div>
                                <strong>Priya Deshmukh</strong>
                                <span>Data Analyst</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="jain-cta">
            <div class="container">
                <div class="jain-cta-panel">
                    <div class="jain-cta-copy">
                        <span class="jain-kicker">Next Step</span>
                        <h2>Want help figuring out which JAIN Online option fits best?</h2>
                        <p>Request a callback and we will help you shortlist the right program for your goals,
                            background, and study style.</p>
                    </div>

                    @includeIf('forms.jain.jain-help-section-form')
                </div>
            </div>
        </section>
    </section>
</main>

<x-frontend-footer />
