<x-frontend-header />

{{-- @section('title', 'Career Counselling & DMIT Test | Ignition Edutech')

@section('meta')
    <meta name="description"
        content="Guiding you to Uplift your Career Paths, enabling you to reach Summit of SUCCESS. Discover career personality, interests, motivators, learning styles and skills with our AI-assisted Psychometric & DMIT Test.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Career Counselling & DMIT Test",
        "provider": {
            "@type": "EducationalOrganization",
            "name": "Ignition Edutech Private Limited",
            "telephone": "+91-8655-055-150",
            "email": "support@ignitionedutech.com"
        },
        "areaServed": "IN",
        "description": "An AI-assisted psychometric and DMIT assessment covering career personality, interests, motivators, learning styles and skills, paired with certified career counselling."
    }
    </script>
@endsection --}}

<div class="psy-page">

    {{-- ============ HERO ============ --}}
    <section class="psy-hero">
        <div class="container">
            <div class="row align-items-center hero-layout">
                <div class="col-lg-7 hero-copy">
                    <span class="eyebrow">Career Discovery</span>
                    <h1>Explore your Professional Journey with Us</h1>
                    <p class="lede">Guiding you to Uplift your Career Paths, enabling you to reach the Summit of
                        SUCCESS — through an AI-powered assessment across five dimensions of you.</p>
                    <div class="hero-cta">
                       <a href="{{ route('contact') }}" class="btn-psy">Take the Assessment</a>
                        <a href="#psy-pillars" class="btn-outline-psy">Explore the 5 pillars</a>
                    </div>
                    <div class="stat-strip">
                        <div><strong>5</strong><span>Assessment pillars</span></div>
                        <div><strong>20+</strong><span>Career clusters mapped</span></div>
                        <div><strong>6</strong><span>Step guided process</span></div>
                    </div>
                </div>

                <div class="col-lg-5 hero-visual">
                    <div class="hero-scene" aria-label="Career discovery framework diagram">
                        <div class="hero-scene-title">CAREER DISCOVERY FRAMEWORK</div>
                        <div class="hero-scene-subtitle">GUIDING YOUR PATH TO PROFESSIONAL SUCCESS</div>

                        <div class="hero-corner tl"></div>
                        <div class="hero-corner tr"></div>
                        <div class="hero-corner bl"></div>
                        <div class="hero-corner br"></div>

                        <svg class="hero-framework-svg" viewBox="0 0 800 800" preserveAspectRatio="xMidYMid meet" role="img" aria-labelledby="careerFrameworkTitle">
                            <title id="careerFrameworkTitle">Career discovery framework</title>
                            <defs>
                                <filter id="psyGlow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="8" result="blur"/>
                                    <feMerge>
                                        <feMergeNode in="blur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                                <filter id="psyIconGlow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feMerge>
                                        <feMergeNode in="blur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>

                                <radialGradient id="psyCenterGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.35"/>
                                    <stop offset="50%" stop-color="#1e40af" stop-opacity="0.15"/>
                                    <stop offset="100%" stop-color="#020817" stop-opacity="0"/>
                                </radialGradient>

                                <linearGradient id="professionalGreen" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#34d399"/>
                                    <stop offset="100%" stop-color="#047857"/>
                                </linearGradient>
                                <linearGradient id="professionalOrange" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#fb923c"/>
                                    <stop offset="100%" stop-color="#c2410c"/>
                                </linearGradient>
                                <linearGradient id="professionalRose" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#fb7185"/>
                                    <stop offset="100%" stop-color="#be123c"/>
                                </linearGradient>
                                <linearGradient id="professionalCyan" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#22d3ee"/>
                                    <stop offset="100%" stop-color="#0e7490"/>
                                </linearGradient>
                                <linearGradient id="professionalPurple" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#a78bfa"/>
                                    <stop offset="100%" stop-color="#6d28d9"/>
                                </linearGradient>
                                <linearGradient id="professionalTeal" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#2dd4bf"/>
                                    <stop offset="100%" stop-color="#0f766e"/>
                                </linearGradient>
                                <linearGradient id="professionalGold" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#facc15"/>
                                    <stop offset="100%" stop-color="#a16207"/>
                                </linearGradient>
                                <linearGradient id="professionalViolet" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#c084fc"/>
                                    <stop offset="100%" stop-color="#7e22ce"/>
                                </linearGradient>
                                <linearGradient id="professionalBlue" x1="15%" y1="10%" x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#60a5fa"/>
                                    <stop offset="100%" stop-color="#1d4ed8"/>
                                </linearGradient>
                            </defs>

                            <circle cx="400" cy="400" r="380" fill="url(#psyCenterGlow)"/>

                            <g fill="#60a5fa" opacity="0.5">
                                <circle cx="80" cy="120" r="1"/><circle cx="720" cy="100" r="1.5"/>
                                <circle cx="150" cy="680" r="1"/><circle cx="680" cy="720" r="1.5"/>
                                <circle cx="50" cy="400" r="1"/><circle cx="750" cy="400" r="1"/>
                                <circle cx="400" cy="40" r="1.5"/><circle cx="400" cy="760" r="1"/>
                            </g>

                            <circle cx="400" cy="400" r="340" fill="none" stroke="#1e3a8a" stroke-width="0.5" opacity="0.3" stroke-dasharray="2,12"/>
                            <circle cx="400" cy="400" r="295" fill="none" stroke="#1e3a8a" stroke-width="1" opacity="0.4"/>
                            <circle cx="400" cy="400" r="295" fill="none" stroke="#3b82f6" stroke-width="6" opacity="0.25" stroke-dasharray="2 28.5"/>
                            <circle cx="400" cy="400" r="170" fill="none" stroke="#1e3a8a" stroke-width="0.5" opacity="0.4" stroke-dasharray="4,4"/>
                            <circle cx="400" cy="400" r="105" fill="none" stroke="#1e3a8a" stroke-width="0.5" opacity="0.3"/>

                            <g opacity="0.3">
                                <animateTransform attributeName="transform" type="rotate" from="360 400 400" to="0 400 400" dur="80s" repeatCount="indefinite"/>
                                <circle cx="400" cy="400" r="340" fill="none" stroke="#3b82f6" stroke-width="0.5" stroke-dasharray="20,15"/>
                            </g>

                            <g id="psyRing">
                                <animateTransform attributeName="transform" type="rotate" from="0 400 400" to="360 400 400" dur="45s" repeatCount="indefinite"/>

                                <g transform="translate(400, 105)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalGreen)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-user-gear"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Self-Assessment</text>
                                        <text class="psy-component-label" y="96">&amp; Profiling</text>
                                    </g>
                                </g>

                                <g transform="translate(585, 160)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalOrange)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-cubes"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Skill &amp; Talent</text>
                                        <text class="psy-component-label" y="96">Mapping</text>
                                    </g>
                                </g>

                                <g transform="translate(675, 315)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalRose)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Stream &amp; Academic</text>
                                        <text class="psy-component-label" y="96">Selection</text>
                                    </g>
                                </g>

                                <g transform="translate(645, 500)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalCyan)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-chart-line"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Industry &amp; Market</text>
                                        <text class="psy-component-label" y="96">Exploration</text>
                                    </g>
                                </g>

                                <g transform="translate(515, 650)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalPurple)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-bullseye"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Career Goal</text>
                                        <text class="psy-component-label" y="96">Setting</text>
                                    </g>
                                </g>

                                <g transform="translate(285, 650)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalTeal)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-route"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Personalized</text>
                                        <text class="psy-component-label" y="96">Career Roadmap</text>
                                    </g>
                                </g>

                                <g transform="translate(155, 500)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalGold)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-id-card"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Resume &amp; Profile</text>
                                        <text class="psy-component-label" y="96">Building</text>
                                    </g>
                                </g>

                                <g transform="translate(125, 315)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalViolet)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-user-check"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Interview &amp; Skill</text>
                                        <text class="psy-component-label" y="96">Preparation</text>
                                    </g>
                                </g>

                                <g transform="translate(215, 160)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0" to="-360 0 0" dur="45s" repeatCount="indefinite"/>
                                        <circle r="48" fill="url(#professionalBlue)" filter="url(#psyIconGlow)"/>
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2" opacity=".9"/>
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i class="fa-solid fa-rocket"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Action Plan &amp;</text>
                                        <text class="psy-component-label" y="96">Execution</text>
                                    </g>
                                </g>
                            </g>

                            <g transform="translate(400,400)">
                                <foreignObject x="-70" y="-70" width="140" height="140">
                                    <div xmlns="http://www.w3.org/1999/xhtml" style="width:140px;height:140px;display:flex;align-items:center;justify-content:center;color:#dff7ff;font-size:110px;line-height:1;filter:drop-shadow(0 0 12px rgba(56,217,255,.55));">
                                        <i class="fa-solid fa-compass"></i>
                                    </div>
                                </foreignObject>
                                <circle r="2" fill="#bfdbfe"/>
                                <circle r="0.8" fill="#ffffff"/>
                                <circle r="72" fill="none" stroke="#3b82f6" stroke-width="0.5" opacity="0.3" stroke-dasharray="3,3"/>
                                <circle r="78" fill="none" stroke="#3b82f6" stroke-width="0.3" opacity="0.2"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ FIVE PILLARS (PSYCHOMETRIC) ============ --}}
    {{-- <section class="psy-pillars" id="psy-pillars">
        <div class="container reveal">
            <div class="section-head">
                <span class="eyebrow navy">Psychometric Test</span>
                <h2 class="mt-3">Five pillars, one clearer picture of you</h2>
                <p>Each pillar looks at a different part of how you think, work and grow — together they build a full
                    career profile.</p>
            </div>
            <div class="pillar-grid">
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-user-tie"></i></div>
                    <h4>Career Personality</h4>
                    <p>Discover your unique career personality to understand how your traits influence your professional
                        choices and workplace interactions.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-compass"></i></div>
                    <h4>Career Interest</h4>
                    <p>Identify your career interests to explore fields and roles that align with your passions and
                        preferences.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-bullseye"></i></div>
                    <h4>Career Motivator</h4>
                    <p>Uncover what drives you in your career, from achieving goals to seeking stability, to find
                        fulfilling job opportunities.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-brain"></i></div>
                    <h4>Learning Styles</h4>
                    <p>Understand your preferred learning styles to optimize your educational and professional
                        development strategies.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-layer-group"></i></div>
                    <h4>Skills &amp; Abilities</h4>
                    <p>Evaluate your current skills and abilities to guide future improvements and career development.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- ============ DMIT TEST ============ --}}
    {{-- <section class="psy-pillars" id="psy-dmit">
        <div class="container reveal">
            <div class="section-head">
                <span class="eyebrow navy">Multiple Intelligence Analysis</span>
                <h2 class="mt-3">Dermatoglyphics Multiple Intelligence Test (DMIT)</h2>
                <p>A scientific method used to analyze fingerprints and palm patterns to understand an individual's
                    unique potential, strengths, and weaknesses.</p>
            </div>
            <div class="pillar-grid">
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-square-root-variable"></i></div>
                    <h4>iQ Test</h4>
                    <p>Intelligence Quotient test for assessing mathematical, logical &amp; linguistic efficiency.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h4>eQ Test</h4>
                    <p>Emotional Quotient test for assessing intrapersonal and interpersonal efficiency.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-shield"></i></div>
                    <h4>aQ Test</h4>
                    <p>Adversity Quotient test for assessing competency efficiency towards changes and challenges.</p>
                </div>
                <div class="pillar-card">
                    <div class="ic"><i class="fa-solid fa-palette"></i></div>
                    <h4>cQ Test</h4>
                    <p>Creativity Quotient test for assessing visual, spatial and musical efficiency.</p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- ============ 6-STEP AI PROCESS ============ --}}
    <section class="ai-journey-section">
        <div class="ai-journey-container reveal">

            <header class="ai-journey-header">
                <span class="eyebrow navy">Artificial Intelligence Powered Assessment</span>
                <h2 class="ai-journey-title">How the Counselling Process Works</h2>
                <p class="ai-journey-subtitle">A structured, six-step journey from your first form to ongoing support —
                    every step feeds the next.</p>
            </header>

            <div class="ai-journey-grid">

                <article class="ai-step-card">
                    <div class="ai-step-header">
                        <span class="ai-step-number">01</span>
                        <div class="ai-step-indicator"></div>
                    </div>
                    <h3 class="ai-step-heading">Student On-board</h3>
                    <p class="ai-step-body">Students are welcomed and provided with an overview of the counselling
                        process. They fill out forms and questionnaires to provide background information.</p>
                </article>

                <article class="ai-step-card">
                    <div class="ai-step-header">
                        <span class="ai-step-number">02</span>
                        <div class="ai-step-indicator"></div>
                    </div>
                    <h3 class="ai-step-heading">Test - DMIT / Psychometric</h3>
                    <p class="ai-step-body">Tailored to the interests of both students and parents, a choice between the
                        DMIT or Psychometric test will be offered to unearth strengths, passions, and aspirations.</p>
                </article>

                <article class="ai-step-card">
                    <div class="ai-step-header">
                        <span class="ai-step-number">03</span>
                        <div class="ai-step-indicator"></div>
                    </div>
                    <h3 class="ai-step-heading">Personalized Plan</h3>
                    <p class="ai-step-body">Counsellors develop a customized career strategy tailored to each student,
                        informed by their assessment results from 20+ Career Clusters.</p>
                </article>

                <article class="ai-step-card">
                    <div class="ai-step-header">
                        <span class="ai-step-number">04</span>
                        <div class="ai-step-indicator"></div>
                    </div>
                    <h3 class="ai-step-heading">Education Road-Mapping</h3>
                    <p class="ai-step-body">Counselors review the assessment results with the student, discuss potential
                        career paths, and co-create a personalized career plan. This plan outlines short-term and
                        long-term goals, recommended activities, and resources.</p>
                </article>

                <article class="ai-step-card">
                    <div class="ai-step-header">
                        <span class="ai-step-number">05</span>
                        <div class="ai-step-indicator"></div>
                    </div>
                    <h3 class="ai-step-heading">Guidance for Skill Development</h3>
                    <p class="ai-step-body">Tailored programs or courses may be recommended to help students develop
                        specific skills relevant to their career interests.</p>
                </article>

                <article class="ai-step-card">
                    <div class="ai-step-header">
                        <span class="ai-step-number">06</span>
                        <div class="ai-step-indicator"></div>
                    </div>
                    <h3 class="ai-step-heading">Ongoing Support &amp; Monitoring</h3>
                    <p class="ai-step-body">Scheduled check-ins with career counselors provide ongoing support, allowing
                        students to discuss progress, challenges, and any changes in their career interests or goals.
                    </p>
                </article>

            </div>
        </div>
    </section>

    {{-- ============ FOUNDER ============ --}}
    <section class="dmit-section py-0" id="founder">
        <div class="container reveal">
            <div class="founder-card">
                <div class="img-wrap">
                    <img src="{{ asset('img/team/ulka.png') }}" alt="Ulka S Padwalkar">
                </div>
                <div>
                    <span class="eyebrow">Expert in Educational Consultancy</span>
                    <h3 class="my-4">Ulka S Padwalkar</h3>
                    {{-- <div class="role">Expert in Educational Consultancy</div> --}}
                    <p>At Ignition Edutech, using scientific methodology, we empower students to discover their
                        potential, gain career clarity, build the right profile, and achieve their educational dreams in
                        India and across the globe. With Ignition Edutech, you're not just taking a test — you're laying
                        the groundwork for a successful future. Our certified counsellors guide you through every pillar
                        of the assessment and every step that follows.</p>
                    <p style="margin-top:1rem;">With over 27+ years of experience in the education sector and
                        mentoring, our proven results speak through the happy students and parents we have served.
                        End-to-end support — from school to success — is not just a slogan but a commitment we live by
                        every single day.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ CTA ============ --}}
    <section class="psy-cta" id="psy-book">
        <div class="container reveal">
            <div class="box">
                <div>
                    <h3>Ready to see your full career profile?</h3>
                    <p>Book a session and get a personalized plan across 20+ career clusters.</p>
                </div>
                <a href="{{ route('contact') }}" class="btn-psy">Book Free Counselling</a>
            </div>
        </div>
    </section>

</div>

<x-frontend-footer />

<script>
    (function() {
        var els = document.querySelectorAll('.psy-page .reveal');
        if (!('IntersectionObserver' in window)) {
            els.forEach(function(e) {
                e.classList.add('is-visible');
            });
            return;
        }
        var io = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, {
            threshold: .12
        });
        els.forEach(function(e) {
            io.observe(e);
        });
    })();
</script>
