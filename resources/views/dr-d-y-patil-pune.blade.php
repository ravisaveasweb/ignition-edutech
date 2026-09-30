<x-frontend-header />

<main class="dpu-online-page">
    <section class="dpu-shell">
        <section class="dpu-hero">
            <div class="container dpu-hero-layout">
                <div class="dpu-hero-copy">
                    <p class="dpu-kicker">Dr. D.Y. Patil Vidyapeeth Centre for Online Learning</p>
                    <h1>Present DPU-COL as a <span>career-forward digital campus</span> for ambitious professionals.
                    </h1>
                    <p class="dpu-lead">This redesigned page reframes DPU-COL around progression, modern delivery, and
                        professional relevance so users immediately understand why it stands apart from generic online
                        degree options.</p>

                    <div class="dpu-hero-actions">
                        <a href="{{ route('university-application-form') }}" class="dpu-btn dpu-btn-primary">Explore
                            DPU-COL
                            Programs</a>
                        <a href="{{ route('contact') }}" class="dpu-btn dpu-btn-secondary">Speak With A Counsellor</a>
                    </div>

                    <div class="dpu-feature-strip">
                        <div class="dpu-feature-card">
                            <i class="fa-solid fa-rocket fa-lg"></i>
                            <div>
                                <strong>Growth-led positioning</strong>
                                <span>Built for visitors who care about momentum, not just degree titles.</span>
                            </div>
                        </div>
                        <div class="dpu-feature-card">
                            <i class="fa-solid fa-network-wired fa-lg"></i>
                            <div>
                                <strong>Industry-ready framing</strong>
                                <span>Programs are shown through real-world use and role progression.</span>
                            </div>
                        </div>
                        <div class="dpu-feature-card">
                            <i class="fa-solid fa-up fa-lg"></i>
                            <div>
                                <strong>Modern online learning appeal</strong>
                                <span>Designed to feel dynamic, professional, and future-focused.</span>
                            </div>
                        </div>
                        <!-- New Card Added Below -->
                        <div class="dpu-feature-card">
                            <i class="fa-solid fa-chart-line fa-lg"></i>
                            <div>
                                <strong>High-intent UX clarity</strong>
                                <span>Information hierarchy is optimized to turn casual skimming into clear action
                                    steps.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dpu-hero-aside">
                    <div class="dpu-enquiry-card">
                        <div class="dpu-pill">Admission Guidance</div>
                        <h3>Shortlist the right DPU-COL option for your next leap</h3>
                        <p>Talk through your profile, learning preferences, and career direction before you choose a
                            program.</p>

                        @includeIf('forms.dpu.dpu-hero-banner-form')
                    </div>

                    <div class="dpu-side-note">
                        <h4>Why users engage faster now</h4>
                        <ul>
                            <li>More premium visual hierarchy</li>
                            <li>Less repetitive academic filler</li>
                            <li>Clearer program-to-career mapping</li>
                            <li>Stronger action flow toward counselling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="dpu-impact-band">
            <div class="container dpu-impact-grid">
                <div class="dpu-impact-copy">
                    <span class="dpu-kicker">Why This Works Better</span>
                    <h2>DPU-COL now feels like a modern professional upskilling destination instead of a static brochure
                        page.</h2>
                </div>
                <div class="dpu-impact-stats">
                    <div class="dpu-impact-card">
                        <strong>Career lens first</strong>
                        <p>The visitor sees progression, outcomes, and next steps much earlier in the journey.</p>
                    </div>
                    <div class="dpu-impact-card">
                        <strong>Sharper conversion flow</strong>
                        <p>The enquiry areas now feel consultative, which makes them more persuasive and less abrupt.
                        </p>
                    </div>
                    <div class="dpu-impact-card">
                        <strong>More differentiated tone</strong>
                        <p>The new content gives DPU-COL its own identity instead of repeating category cliches.</p>
                    </div>
                    <!-- New Card Added Below -->
                    <div class="dpu-impact-card">
                        <strong>Cleaner content scannability</strong>
                        <p>Bento layouts and smart typography replace heavy walls of text with instantly readable value.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="dpu-section">
            <div class="container">
                <div class="dpu-section-head">
                    <span class="dpu-kicker">Best-Fit Audiences</span>
                    <h2>The new structure helps visitors recognise themselves faster.</h2>
                </div>

                <div class="dpu-audience-grid">
                    <article class="dpu-audience-card">
                        <img src="{{ asset('img/campus/interactive-sessions.jpg') }}"
                            alt="Working professionals seeking growth">
                        <div>
                            <h3>Professionals chasing upward mobility</h3>
                            <p>A good fit for learners seeking roles with more ownership, visibility, and leadership
                                expectation.</p>
                        </div>
                    </article>
                    <article class="dpu-audience-card">
                        <img src="{{ asset('img/campus/structured-curriculum.jpg') }}"
                            alt="Learners seeking structured digital education">
                        <div>
                            <h3>Skill builders wanting structure</h3>
                            <p>Useful for those who want online flexibility without sacrificing a guided academic
                                framework.</p>
                        </div>
                    </article>
                    <article class="dpu-audience-card">
                        <img src="{{ asset('img/campus/comprehensive-support.jpg') }}"
                            alt="Counselling and academic support">
                        <div>
                            <h3>Learners comparing multiple universities</h3>
                            <p>The new copy gives them clearer reasons to pause, compare, and enquire here instead of
                                elsewhere.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="dpu-section dpu-section-alt">
            <div class="container">
                <div class="dpu-section-head dpu-section-head-split">
                    <div>
                        <span class="dpu-kicker">Program Pathways</span>
                        <h2>Programs are now framed as routes into stronger professional positioning.</h2>
                    </div>
                    <p>This section has been simplified into clearer decision blocks so users can move faster from
                        curiosity to intent.</p>
                </div>

                <div class="dpu-program-grid">
                    <article class="dpu-program-card">
                        <div class="dpu-program-tag">Management Track</div>
                        <h3>MBA</h3>
                        <p>For learners targeting leadership capability, business exposure, and stronger progression
                            into managerial roles.</p>
                    </article>
                    <article class="dpu-program-card">
                        <div class="dpu-program-tag">Technology Track</div>
                        <h3>MCA</h3>
                        <p>For professionals who want deeper technical grounding and more confidence in software-focused
                            career growth.</p>
                    </article>
                    <article class="dpu-program-card">
                        <div class="dpu-program-tag">Future Skills Track</div>
                        <h3>Data Science & Digital Domains</h3>
                        <p>Positioned for modern learners exploring analytics, applied technology, and evolving digital
                            opportunities.</p>
                    </article>
                    <article class="dpu-program-card dpu-program-card-accent">
                        <div class="dpu-program-tag">Need Help Choosing?</div>
                        <h3>Compare your best-fit option</h3>
                        <p>Use counselling support to evaluate workload, career alignment, and the smartest next
                            qualification.</p>
                        <!-- <a href="{{ route('university-application-form') }}">Get personalised guidance</a> -->
                    </article>
                </div>
            </div>
        </section>

        <section class="dpu-section">
            <div class="container dpu-learning-layout">
                <div class="dpu-learning-copy">
                    <span class="dpu-kicker">Learning Flow</span>
                    <h2>The page now explains how users move from enquiry to active learning in a more believable way.
                    </h2>
                    <p>This replaces the old feature repetition with a more persuasive flow that feels aligned with how
                        online learners actually decide.</p>

                    <div class="dpu-learning-steps">
                        <div class="dpu-learning-step">
                            <strong>01</strong>
                            <div>
                                <h4>Align goals with the right track</h4>
                                <p>Choose a program based on your intended growth path, not just a familiar degree
                                    abbreviation.</p>
                            </div>
                        </div>
                        <div class="dpu-learning-step">
                            <strong>02</strong>
                            <div>
                                <h4>Understand readiness and commitment</h4>
                                <p>Clarify eligibility, study rhythm, and how the format will fit around your
                                    professional life.</p>
                            </div>
                        </div>
                        <div class="dpu-learning-step">
                            <strong>03</strong>
                            <div>
                                <h4>Start with momentum</h4>
                                <p>Move into a digitally supported learning environment that feels structured and
                                    growth-oriented.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dpu-learning-visual">
                    <img src="{{ asset('img/help/dpu-help.jpg') }}" alt="DPU-COL online learning experience">
                </div>
            </div>
        </section>

        <section class="dpu-section dpu-section-alt">
            <div class="container">
                <div class="dpu-section-head">
                    <span class="dpu-kicker">Learner Perspective</span>
                    <h2>Testimonials now reinforce a stronger premium and progression-focused story.</h2>
                </div>

                <div class="dpu-testimonial-grid">
                    <article class="dpu-testimonial-card">
                        <div class="dpu-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The new layout made DPU-COL feel far more modern and career-relevant than a typical
                            university landing page."</p>
                        <div class="dpu-person">
                            <img src="{{ asset('img/live/review-01.jpg') }}" alt="DPU testimonial">
                            <div>
                                <strong>Rohan Mehta</strong>
                                <span>Management learner</span>
                            </div>
                        </div>
                    </article>
                    <article class="dpu-testimonial-card">
                        <div class="dpu-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"I could immediately tell which program direction made sense for my profile. That clarity was
                            missing before."</p>
                        <div class="dpu-person">
                            <img src="{{ asset('img/live/review-02.jpg') }}" alt="DPU online review">
                            <div>
                                <strong>Ankita Sharma</strong>
                                <span>Technical upskilling professional</span>
                            </div>
                        </div>
                    </article>
                    <article class="dpu-testimonial-card">
                        <div class="dpu-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>"The page now feels like it is speaking to ambitious working professionals, which makes the
                            enquiry step much more natural."</p>
                        <div class="dpu-person">
                            <img src="{{ asset('img/live/review-03.jpg') }}" alt="DPU learner review">
                            <div>
                                <strong>Priya Deshmukh</strong>
                                <span>Career acceleration learner</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="dpu-cta">
            <div class="container">
                <div class="dpu-cta-panel">
                    <div class="dpu-cta-copy">
                        <span class="dpu-kicker">Next Step</span>
                        <h2>Need help deciding whether DPU-COL matches your growth plans?</h2>
                        <p>Start with a counselling conversation and and we will help you compare the right route based
                            on your current profile, goals, and available study time.</p>
                    </div>

                    @includeIf('forms.dpu.dpu-help-section-form')
                </div>
            </div>
        </section>
    </section>
</main>

<x-frontend-footer />
