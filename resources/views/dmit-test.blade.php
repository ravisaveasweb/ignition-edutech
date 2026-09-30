<x-frontend-header />

{{-- @section('title', 'DMIT Test – Dermatoglyphics Multiple Intelligence Test | Ignition Edutech')

@section('meta')
    <meta name="description"
        content="Discover your child's inborn intelligence with the DMIT Test — a fingerprint-based Dermatoglyphics Multiple Intelligence assessment for ages 3 and up. Book a session with Ignition Edutech.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "DMIT Test (Dermatoglyphics Multiple Intelligence Test)",
        "provider": {
            "@type": "EducationalOrganization",
            "name": "Ignition Edutech Private Limited",
            "telephone": "+91-8655-055-150",
            "email": "support@ignitionedutech.com"
        },
        "areaServed": "IN",
        "audience": {
            "@type": "PeopleAudience",
            "suggestedMinAge": 3
        },
        "description": "A fingerprint and palm-pattern based assessment used to identify inborn intelligence potential, learning style, and personality traits from age 3 and up."
    }
    </script>
@endsection --}}

<div class="dmit-page">

    {{-- ============ HERO (UNCHANGED) ============ --}}
    <section class="dmit-hero">
        <div class="container">
            <div class="dmit-hero-inner">
                <div class="dmit-hero-copy">
                    <span class="eyebrow">Dermatoglyphics Multiple Intelligence Test</span>
                    <h1>Your child's talent leaves a fingerprint. We help you read it.</h1>
                    <p class="lede">DMIT analyses fingerprint and palm patterns formed before birth to map inborn
                        intelligence, learning style and personality — so you can guide your child's growth with
                        evidence, not guesswork.</p>
                    <div class="age-pill">Suitable for <strong>all ages, 3 years and above</strong></div>
                    <div class="hero-cta">
                        <a href="#dmit-book" class="btn-dmit">Book a DMIT Session</a>
                        <a href="#dmit-params" class="btn-outline-dmit">See what it measures</a>
                    </div>
                </div>

                <div class="dmit-hero-visual" aria-label="Multiple Intelligences model">
                    <div class="scene">
                        <div class="title">Multiple Intelligences Model</div>
                        <div class="corner tl"></div>
                        <div class="corner tr"></div>
                        <div class="corner bl"></div>
                        <div class="corner br"></div>

                        <svg viewBox="0 0 800 800" preserveAspectRatio="xMidYMid meet" role="img"
                            aria-label="Multiple intelligences model illustration">
                            <defs>
                                <filter id="dmitGlow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="8" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                                <filter id="dmitIconGlow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="3" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                                <radialGradient id="dmitCenterGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.35" />
                                    <stop offset="50%" stop-color="#1e40af" stop-opacity="0.15" />
                                    <stop offset="100%" stop-color="#020817" stop-opacity="0" />
                                </radialGradient>
                                <linearGradient id="dmitFingerGrad" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" stop-color="#bfdbfe" />
                                    <stop offset="50%" stop-color="#3b82f6" />
                                    <stop offset="100%" stop-color="#1e3a8a" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalGreen" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#34d399" />
                                    <stop offset="100%" stop-color="#047857" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalOrange" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#fb923c" />
                                    <stop offset="100%" stop-color="#c2410c" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalRose" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#fb7185" />
                                    <stop offset="100%" stop-color="#be123c" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalCyan" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#22d3ee" />
                                    <stop offset="100%" stop-color="#0e7490" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalPurple" x1="15%" y1="10%"
                                    x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#a78bfa" />
                                    <stop offset="100%" stop-color="#6d28d9" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalTeal" x1="15%" y1="10%"
                                    x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#2dd4bf" />
                                    <stop offset="100%" stop-color="#0f766e" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalGold" x1="15%" y1="10%"
                                    x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#facc15" />
                                    <stop offset="100%" stop-color="#a16207" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalViolet" x1="15%" y1="10%"
                                    x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#c084fc" />
                                    <stop offset="100%" stop-color="#7e22ce" />
                                </linearGradient>
                                <linearGradient id="dmitProfessionalBlue" x1="15%" y1="10%"
                                    x2="85%" y2="90%">
                                    <stop offset="0%" stop-color="#60a5fa" />
                                    <stop offset="100%" stop-color="#1d4ed8" />
                                </linearGradient>
                            </defs>

                            <circle cx="400" cy="400" r="380" fill="url(#dmitCenterGlow)" />

                            <g fill="#60a5fa" opacity="0.5">
                                <circle cx="80" cy="120" r="1" />
                                <circle cx="720" cy="100" r="1.5" />
                                <circle cx="150" cy="680" r="1" />
                                <circle cx="680" cy="720" r="1.5" />
                                <circle cx="50" cy="400" r="1" />
                                <circle cx="750" cy="400" r="1" />
                                <circle cx="400" cy="40" r="1.5" />
                                <circle cx="400" cy="760" r="1" />
                                <circle cx="120" cy="250" r="1" />
                                <circle cx="680" cy="250" r="1" />
                                <circle cx="120" cy="550" r="1.5" />
                                <circle cx="680" cy="550" r="1" />
                                <circle cx="250" cy="80" r="1" />
                                <circle cx="550" cy="80" r="1" />
                                <circle cx="250" cy="720" r="1.5" />
                                <circle cx="550" cy="720" r="1" />
                            </g>

                            <circle cx="400" cy="400" r="340" fill="none" stroke="#1e3a8a"
                                stroke-width="0.5" opacity="0.3" stroke-dasharray="2,12" />
                            <circle cx="400" cy="400" r="295" fill="none" stroke="#1e3a8a"
                                stroke-width="1" opacity="0.4" />
                            <circle cx="400" cy="400" r="295" fill="none" stroke="#3b82f6"
                                stroke-width="6" opacity="0.25" stroke-dasharray="2 28.5" />
                            <circle cx="400" cy="400" r="170" fill="none" stroke="#1e3a8a"
                                stroke-width="0.5" opacity="0.4" stroke-dasharray="4,4" />
                            <circle cx="400" cy="400" r="105" fill="none" stroke="#1e3a8a"
                                stroke-width="0.5" opacity="0.3" />

                            <g opacity="0.3">
                                <animateTransform attributeName="transform" type="rotate" from="360 400 400"
                                    to="0 400 400" dur="80s" repeatCount="indefinite" />
                                <circle cx="400" cy="400" r="340" fill="none" stroke="#3b82f6"
                                    stroke-width="0.5" stroke-dasharray="20,15" />
                            </g>

                            <g id="dmitRing">
                                <animateTransform attributeName="transform" type="rotate" from="0 400 400"
                                    to="360 400 400" dur="45s" repeatCount="indefinite" />

                                <g transform="translate(400, 105)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalGreen)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-lightbulb"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Naturalistic</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(585, 160)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalOrange)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-person"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Bodily-Kinesthetic</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(675, 315)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalRose)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-user-group"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Interpersonal</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(645, 500)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalCyan)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-book-open"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Linguistic</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(515, 650)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalPurple)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-eye"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Visual-Spatial</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(285, 650)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalTeal)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-comments"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Verbal-Linguistic</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(155, 500)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalGold)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-calculator"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Mathematical</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(125, 315)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalViolet)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-music"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Musical</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>

                                <g transform="translate(215, 160)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#dmitProfessionalBlue)"
                                            filter="url(#dmitIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <circle r="41" fill="none" stroke="#ffffff" stroke-width="1"
                                            opacity=".25" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fa-icon"><i
                                                    class="fa-solid fa-user"></i></div>
                                        </foreignObject>
                                        <text class="dmit-component-label" y="76">Intrapersonal</text>
                                        <text class="dmit-component-label" y="96">Intelligence</text>
                                    </g>
                                </g>
                            </g>

                            <g transform="translate(400,400)">
                                <foreignObject x="-70" y="-70" width="140" height="140">
                                    <div xmlns="http://www.w3.org/1999/xhtml" class="dmit-fingerprint">
                                        <i class="fa-solid fa-fingerprint"></i>
                                    </div>
                                </foreignObject>
                                <circle r="2" fill="#bfdbfe" />
                                <circle r="0.8" fill="#ffffff" />
                                <circle r="72" fill="none" stroke="#3b82f6" stroke-width="0.5" opacity="0.3"
                                    stroke-dasharray="3,3" />
                                <circle r="78" fill="none" stroke="#3b82f6" stroke-width="0.3" opacity="0.2" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ WELCOME / FOUNDER MESSAGE ============ --}}
    <section class="dmit-welcome">
        <div class="container reveal">
            <span class="eyebrow">Welcome</span>
            <h2>There is nothing an enlightened brain cannot achieve</h2>
            <p>It gives us immense pleasure to congratulate you for undergoing Ignition Edutech's Dermatoglyphics
                Multiple Intelligence Test. You are indeed very fortunate to take part in this scientific and
                revolutionary technology for making the best choices in your life.</p>
            <p style="margin-top:1rem;">Through this test, we strive to identify your truest innate abilities, the best
                career options for you and your strongest areas. Our aim is to bring a meaningful transformation and a
                positive change in your life by unleashing the true and hidden potential of your brain. By taking this
                test, you have already proven two great things about yourself: <strong style="color:#facc15;">you love
                    yourself and those who love you</strong>, and <strong style="color:#facc15;">you are desirous of
                    going on a sojourn of self-discovery</strong>.</p>
            <p style="margin-top:1rem;">Each page of this analysis report will unfold your true potential, inborn
                talent, multiple intelligences, most suitable learning style and much more. Our team of experts analyses
                and evaluates various parameters of your innate abilities to arrive upon their inferences about you.</p>
        </div>
    </section>

    {{-- ============ WHAT IS DMIT (About) ============ --}}
    <!-- DMIT / Dermatoglyphics Overview Section -->
    <section class="dmit-section pb-0" id="dmit-params" aria-labelledby="dmit-heading">
        <div class="container reveal">

            <!-- Section Header -->
            <header class="section-head">
                <span class="eyebrow">Dermatoglyphics</span>
                <h2 id="dmit-heading">Discover Inborn Potential &amp; Personality Traits</h2>
                <p>
                    The Dermatoglyphics Multiple Intelligence Assessment evaluates skin ridge patterns formed
                    during early fetal development. By combining principles from genetics, neuroscience,
                    and observational psychology, this framework provides insights into natural learning preferences
                    and cognitive strengths.
                </p>
            </header>

            <!-- Feature Cards Grid -->
            <div class="gives-grid">
                <article class="gives-card">
                    <div class="card-icon" aria-hidden="true">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f5820b"
                            stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <h4>Scientific Foundations</h4>
                    <p>
                        In 1926, Dr. Harold Cummins coined the term <strong>Dermatoglyphics</strong> to define
                        the formal scientific study of epidermal skin ridge patterns, establishing foundational
                        methodology used in research today.
                    </p>
                </article>

                <article class="gives-card">
                    <div class="card-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f5820b"
                            stroke-width="2">
                            <path
                                d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 4.44-2.04Z" />
                            <path
                                d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-4.44-2.04Z" />
                        </svg>
                    </div>
                    <h4>Cortical Mapping</h4>
                    <p>
                        Neurosurgeon Dr. Wilder Penfield established the sensory homunculus mapping, highlighting the
                        high concentration
                        of somatosensory cortex real estate dedicated to tactile finger inputs.
                    </p>
                </article>

                <article class="gives-card">
                    <div class="card-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f5820b"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a7 7 0 0 0 7 7c0 7-7 13-7 13S5 16 5 9a7 7 0 0 1 7-7z" />
                        </svg>
                    </div>
                    <h4>Hemispheric Specialization</h4>
                    <p>
                        In 1981, Dr. Roger W. Sperry won the Nobel Prize for discovering functional lateralization in
                        the brain, proving
                        that left and right cerebral hemispheres process cognitive tasks differently.
                    </p>
                </article>

                <article class="gives-card">
                    <div class="card-icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f5820b"
                            stroke-width="2">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <h4>Genetic Fingerprints</h4>
                    <p>
                        Epidermal ridges develop alongside the central nervous system between the 13th and 21st weeks of
                        gestation,
                        making them a permanent, unique genetic marker of embryological development.
                    </p>
                </article>
            </div>

        </div>
    </section>

    {{-- ============ HISTORY TIMELINE ============ --}}
    <section class="dmit-section alt">
        <div class="container reveal">
            <div class="section-head">
                <span class="eyebrow">Years of Research</span>
                <h2>Development of Dermatoglyphics Research</h2>
            </div>
            <div class="timeline">
                <div class="tl-item">
                    <div class="tl-year">1823</div>
                    <div class="tl-title">John E. Purkinji</div>
                    <div class="tl-desc">Professor of anatomy at the University of Breslau published his thesis
                        researching fingerprint patterns classification, consisting of nine print categories.</div>
                </div>
                <div class="tl-item">
                    <div class="tl-year">1892</div>
                    <div class="tl-title">Sir Francis Galton</div>
                    <div class="tl-desc">British Anthropologist, cousin of Charles Darwin, scientifically established
                        the individuality and permanence of fingerprints.</div>
                </div>
                <div class="tl-item">
                    <div class="tl-year">1926</div>
                    <div class="tl-title">Dr. Harold Cummins — Father of Dermatoglyphics</div>
                    <div class="tl-desc">Established the theory of Dermatoglyphics, standardizing the definition still
                        used today.</div>
                </div>
                <div class="tl-item">
                    <div class="tl-year">1950</div>
                    <div class="tl-title">Dr. Penfield</div>
                    <div class="tl-desc">Canadian brain surgeon pointed out the close link between fingerprints and the
                        brain.</div>
                </div>
                <div class="tl-item">
                    <div class="tl-year">1970</div>
                    <div class="tl-title">USSR Olympic Selection</div>
                    <div class="tl-desc">Former Soviet Union used Dermatoglyphics in selecting contestants for
                        Olympics.</div>
                </div>
                <div class="tl-item">
                    <div class="tl-year">1981</div>
                    <div class="tl-title">Nobel Prize — Roger W. Sperry</div>
                    <div class="tl-desc">Awarded Nobel Prize in Biomedicine for the study of right and left cerebral
                        hemispheres.</div>
                </div>
                <div class="tl-item">
                    <div class="tl-year">1985</div>
                    <div class="tl-title">Dr. Chen Yi Mou, Harvard University</div>
                    <div class="tl-desc">Based on Multiple Intelligence theory of Dr. Howard Gardner, first applied
                        Dermatoglyphics to educational fields and brain physiology.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 1. 10 ABILITIES ============ --}}
    {{-- ============ DMIT REPORT FOR PARENTS ============ --}}
    <section class="dmit-section dmit-parent-section" id="dmit-report">

        <div class="container">

            <!-- Section Heading -->
            <div class="section-head dmit-parent-head">
                <span class="eyebrow">DMIT Report Insights</span>

                <h2>
                    Understand Your Child's
                    <span>Unique Potential</span>
                </h2>

                <p>
                    A DMIT report gives parents a broader understanding of their
                    child's natural abilities, learning preferences, personality,
                    interests and possible areas of development.
                </p>
            </div>


            <!-- Parent Benefits Grid -->
            <div class="parent-insights-grid">

                <!-- 01 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">01</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 3L14.8 8.6L21 9.5L16.5 13.8L17.6 20L12 17.1L6.4 20L7.5 13.8L3 9.5L9.2 8.6L12 3Z"
                                    stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Your 10 Hidden Abilities</h3>

                    <p>
                        Discover the key abilities that can help parents better
                        understand their child's natural strengths and potential.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Understand Natural Strengths
                    </div>
                </div>


                <!-- 02 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">02</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="8.5" stroke="currentColor"
                                    stroke-width="1.8" />
                                <path d="M12 7V17M7 12H17" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Brain Dominance</h3>

                    <p>
                        Understand your child's natural thinking preferences and
                        how they may approach information, situations and problems.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Understand Thinking Patterns
                    </div>
                </div>


                <!-- 03 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">03</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 19V5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path d="M4 17L9 12L13 15L20 7" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 7H20V11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Your Overall Potential</h3>

                    <p>
                        Get a broader picture of your child's potential and identify
                        areas where encouragement and development may be helpful.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        See the Bigger Picture
                    </div>
                </div>


                <!-- 04 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">04</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor"
                                    stroke-width="1.8" />
                                <path d="M8 15L11 12L13 14L17 9" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Multiple Quotient Distribution</h3>

                    <p>
                        Explore different dimensions of your child's abilities to
                        build a more complete understanding beyond academics alone.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Look Beyond Academics
                    </div>
                </div>


                <!-- 05 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">05</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M4 5.5C4 4.67 4.67 4 5.5 4H10L12 6H18.5C19.33 6 20 6.67 20 7.5V18.5C20 19.33 19.33 20 18.5 20H5.5C4.67 20 4 19.33 4 18.5V5.5Z"
                                    stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                <path d="M8 12H16M8 15H13" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Learning &amp; Communication Styles</h3>

                    <p>
                        Understand how your child may prefer to learn, process
                        information and communicate with people around them.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Support Better Learning
                    </div>
                </div>


                <!-- 06 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">06</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="8" r="3.5" stroke="currentColor"
                                    stroke-width="1.8" />
                                <path d="M5 20C5.8 16.6 8.1 14.5 12 14.5C15.9 14.5 18.2 16.6 19 20"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Personality &amp; Behavior Styles</h3>

                    <p>
                        Gain useful insights into personality and behavioral
                        tendencies that can help parents communicate more effectively.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Build Better Understanding
                    </div>
                </div>


                <!-- 07 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">07</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="8.5" stroke="currentColor"
                                    stroke-width="1.8" />
                                <path d="M12 7V17M7 12H17" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" />
                                <circle cx="12" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                        </div>
                    </div>

                    <h3>
                        Eight Intelligences
                        <small>Based on Dr. Howard Gardner's theory</small>
                    </h3>

                    <p>
                        Explore different forms of intelligence and understand how
                        your child's strengths may appear across different areas.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Discover Different Strengths
                    </div>
                </div>


                <!-- 08 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">08</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 3L14.1 8.2L19.5 8.6L15.4 12.1L16.7 17.4L12 14.5L7.3 17.4L8.6 12.1L4.5 8.6L9.9 8.2L12 3Z"
                                    stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                                <path d="M18 16L19 19L22 20" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Extra-Curricular Activity Guidance</h3>

                    <p>
                        Get guidance on activities that may complement your child's
                        interests, strengths and overall development.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Encourage Holistic Growth
                    </div>
                </div>


                <!-- 09 -->
                <div class="parent-insight-card">
                    <div class="insight-top">
                        <div class="insight-number">09</div>

                        <div class="insight-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 19V5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                <path
                                    d="M4 6C7 4.5 9 7.5 12 6C15 4.5 17 7.5 20 6V14C17 15.5 15 12.5 12 14C9 15.5 7 12.5 4 14"
                                    stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <h3>Broad Career Choices &amp; Guidance</h3>

                    <p>
                        Explore broader career possibilities and use the insights
                        as one input when planning your child's future direction.
                    </p>

                    <div class="insight-label">
                        <span></span>
                        Plan With Greater Clarity
                    </div>
                </div>

            </div>


            <!-- Parent CTA -->
            <div class="dmit-parent-cta">
                <div class="cta-content">
                    <span class="cta-eyebrow">For Parents</span>

                    <h3>
                        Give your child the right direction,
                        not just more pressure.
                    </h3>

                    <p>
                        Understand their individuality, support their natural
                        strengths and make more informed decisions about learning,
                        activities and future possibilities.
                    </p>
                </div>

                <a href="#contact" class="dmit-cta-btn">
                    Understand Your Child
                    <span>→</span>
                </a>
            </div>

        </div>
    </section>

    {{-- ============ SERVICES (from service profile) ============ --}}
    <section class="dmit-section" id="services">
        <div class="container reveal">
            <div class="section-head">
                <span class="eyebrow">Our Services</span>
                <h2>End-to-end support from school to success</h2>
                <p>At Ignition Edutech, using scientific methodology, we empower students to discover their potential,
                    gain career clarity, build the right profile, and achieve their educational dreams in India and
                    across the globe.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="ico" style="background:linear-gradient(135deg,#3b82f6,#1d4ed8);"><i
                            class="fa-solid fa-compass"></i></div>
                    <h4>Gifted Potential &amp; Career Assessment</h4>
                    <ul>
                        <li>Aligning Passion with Potential</li>
                        <li>Stream &amp; Career Mapping</li>
                        <li>Right Pathway for Future Growth</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="ico" style="background:linear-gradient(135deg,#34d399,#047857);"><i
                            class="fa-solid fa-user-graduate"></i></div>
                    <h4>Profile Development Guidance</h4>
                    <ul>
                        <li>Academic Profile Building</li>
                        <li>Extracurricular Activity Planning</li>
                        <li>SOP Guidance for Admissions</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="ico" style="background:linear-gradient(135deg,#facc15,#a16207);"><i
                            class="fa-solid fa-globe"></i></div>
                    <h4>International Test Excellence</h4>
                    <ul>
                        <li>SAT, GRE, IELTS &amp; TOEFL Prep</li>
                        <li>1-on-1 &amp; Group Training</li>
                        <li>Strategy, Practice &amp; Confidence</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="ico" style="background:linear-gradient(135deg,#a78bfa,#6d28d9);"><i
                            class="fa-solid fa-plane-departure"></i></div>
                    <h4>Complete Study Abroad Solution</h4>
                    <ul>
                        <li>University Shortlisting &amp; Apply</li>
                        <li>Scholarship &amp; Grants Guidance</li>
                        <li>Visa &amp; Pre-Departure Support</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="ico" style="background:linear-gradient(135deg,#fb923c,#c2410c);"><i
                            class="fa-solid fa-hands-helping"></i></div>
                    <h4>Additional Support &amp; Mentorship</h4>
                    <ul>
                        <li>Soft Skills &amp; Behavioural Guidance</li>
                        <li>Career Analysis Post-Sabbatical</li>
                        <li>Mind Gym &amp; Skill Workshops</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ WHY CHOOSE / PILLARS ============ --}}
    <section class="dmit-section"
        style="background:linear-gradient(135deg,#0a1c38 0%,#12305f 50%,#1e3a8a 100%);color:#fff;">
        <div class="container reveal">
            <div class="section-head" style="text-align:center;max-width:48rem;margin:0 auto;">
                <span class="eyebrow">Why
                    Choose Ignition Edutech</span>
                <h2 class="mt-3" style="color:#fff;">Pillars of Ignition Edutech</h2>
                <p style="color:rgba(255,255,255,.8);margin:0 auto;">27+ years of experience in education sector &amp;
                    mentoring. Proven results with happy students &amp; parents. End-to-end support — from school to
                    success. With empathy, we guide you.</p>
            </div>

            <div class="pillars-grid">
                <div class="pillar">
                    <div class="ico" style="background:linear-gradient(135deg,#3b82f6,#1d4ed8);"><i
                            class="fa-solid fa-flask"></i></div>
                    <h4>Scientific Assessments</h4>
                </div>
                <div class="pillar">
                    <div class="ico" style="background:linear-gradient(135deg,#34d399,#047857);"><i
                            class="fa-solid fa-user-tie"></i></div>
                    <h4>Personalised Guidance</h4>
                </div>
                <div class="pillar">
                    <div class="ico" style="background:linear-gradient(135deg,#facc15,#a16207);"><i
                            class="fa-solid fa-earth-americas"></i></div>
                    <h4>Global Opportunities</h4>
                </div>
                <div class="pillar">
                    <div class="ico" style="background:linear-gradient(135deg,#fb7185,#be123c);"><i
                            class="fa-solid fa-shield"></i></div>
                    <h4>Ethical &amp; Trustworthy</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ MISSION ============ --}}
    <section class="dmit-section alt">
        <div class="container reveal">
            <div class="mission-box">
                <div class="quote">"</div>
                <p>To empower every student with clarity, confidence and the right direction to achieve their dreams.
                </p>
                <div
                    style="margin-top:1.5rem;font-size:.85rem;letter-spacing:.2em;text-transform:uppercase;color:#bfdbfe;">
                    Our Mission</div>
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

    {{-- ============ CONCLUSION / DISCLAIMER ============ --}}
    <section class="dmit-section alt">
        <div class="container reveal">
            <div class="section-head">
                <span class="eyebrow">Conclusion &amp; Disclaimer</span>
                <h2>Understanding your report responsibly</h2>
            </div>

            <div
                style="background:#fff;border:1px solid var(--line);border-radius:18px;padding:2rem;margin-top:1.5rem;">
                <p style="color:var(--ink);font-size:.98rem;line-height:1.8;">This report can help an individual to do
                    the analysis of themselves or their children — of their strengths, areas of improvements and
                    opportunities. Every individual has his/her own advantages and behavior pattern; it is the brain's
                    cognitive process which is the result of mental development. Through this report we can foresee
                    difficulties which a child is going to face in studies or learning new things. We can help your
                    child to excel in his/her studies by choosing the right courses as per his bent of mind and core
                    competence, thus creating a cycle of excellence and an illustrious career.</p>
                <p style="color:var(--ink);font-size:.98rem;line-height:1.8;"> Our intelligent
                    assessment is being done by the use of a proven science named <strong>"DERMATOGLYPHICS"</strong>. It
                    has more than years of history. With thousands of intelligent assessments done, previous studies
                    have been completed with brain physiology, psychology, learning and behavior in children to ensure
                    the accuracy of the analyzed reports from a scientific point of view.</p>
                <p
                    style="color:var(--text-muted);font-size:.98rem;line-height:1.7;margin-top:.8rem;padding:1rem;background:#fef9c3;border-radius:10px;border-left:4px solid #a16207;">
                    <strong>Disclaimer:</strong> The content of this analysis is only for reference, based on scientific
                    research in the field of Dermatoglyphics and statistical study conducted based on the fingerprint
                    analysis. The decision to follow any instruction, advice, suggestion or recommendation completely
                    depends upon you. Before taking any crucial decision, please refer to your family doctor,
                    psychiatrist or psychologist. The results are only indicative and should not be used as a standalone
                    instrument for any important decision-making.
                </p>
            </div>
        </div>
    </section>

    {{-- ============ CTA ============ --}}
    <section class="dmit-cta" id="dmit-book">
        <div class="container reveal">
            <div class="box">
                <div>
                    <h3>Ready to find out what their fingerprints say?</h3>
                    <p>Book a DMIT session with our certified counsellors and get a full report mapped to your child's
                        abilities — covering all 10 abilities, brain dominance, multiple quotients, learning styles,
                        personality, multiple intelligences, extra-curricular guidance and career options.</p>
                </div>
                <a href="{{ route('contact') }}" class="btn-dmit">Book Free Counselling</a>
            </div>
        </div>
    </section>
</div>

<x-frontend-footer />

<script>
    (function() {
        var els = document.querySelectorAll('.dmit-page .reveal');
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
