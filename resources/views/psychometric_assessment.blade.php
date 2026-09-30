<x-frontend-header />
<div class="psy-assess">

    {{-- ---------- HERO ---------- --}}
    <section class="psy-hero">
        <div class="container">
            <div class="row align-items-center hero-layout">
                <div class="col-lg-7 hero-copy">
                    <span class="eyebrow">{{ $page['hero']['eyebrow'] }}</span>

                    <h1>{{ $page['hero']['title'] }}</h1>

                    <p class="lede">{{ $page['hero']['subtitle'] }}</p>

                    <div class="ign-psy-hero-cta">
                        <a href="{{ $page['hero']['cta_primary']['href'] }}" class="ign-psy-assessment-btn">
                            {{ $page['hero']['cta_primary']['label'] }}
                        </a>

                        <a href="{{ $page['hero']['cta_tertiary']['href'] }}" class="ign-psy-measure-btn">
                            {{ $page['hero']['cta_tertiary']['label'] }}
                        </a>
                    </div>

                    <div class="ign-psy-hero-stats">
                        @foreach ($page['hero']['stats'] as $stat)
                            <div class="ign-psy-hero-stat">
                                <strong class="ign-psy-hero-stat-value">{{ $stat['value'] }}</strong>
                                <span class="ign-psy-hero-stat-label">{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5 hero-visual">
                    <div class="hero-scene">
                        <span class="hero-scene-title">Psychometric Assessment</span>
                        <span class="hero-scene-subtitle">Discover your potential</span>

                        <span class="hero-corner tl"></span>
                        <span class="hero-corner tr"></span>
                        <span class="hero-corner bl"></span>
                        <span class="hero-corner br"></span>

                        {{-- Keep your existing SVG exactly as it is --}}
                        <svg class="hero-framework-svg" viewBox="0 0 800 800" preserveAspectRatio="xMidYMid meet"
                            role="img" aria-labelledby="careerFrameworkTitle">
                            <title id="careerFrameworkTitle">Career discovery framework</title>
                            <defs>
                                <filter id="psyGlow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="8" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                                <filter id="psyIconGlow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="3" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>

                                <radialGradient id="psyCenterGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.35" />
                                    <stop offset="50%" stop-color="#1e40af" stop-opacity="0.15" />
                                    <stop offset="100%" stop-color="#020817" stop-opacity="0" />
                                </radialGradient>

                                <linearGradient id="professionalGreen" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#34d399" />
                                    <stop offset="100%" stop-color="#047857" />
                                </linearGradient>
                                <linearGradient id="professionalOrange" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#fb923c" />
                                    <stop offset="100%" stop-color="#c2410c" />
                                </linearGradient>
                                <linearGradient id="professionalRose" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#fb7185" />
                                    <stop offset="100%" stop-color="#be123c" />
                                </linearGradient>
                                <linearGradient id="professionalCyan" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#22d3ee" />
                                    <stop offset="100%" stop-color="#0e7490" />
                                </linearGradient>
                                <linearGradient id="professionalPurple" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#a78bfa" />
                                    <stop offset="100%" stop-color="#6d28d9" />
                                </linearGradient>
                                <linearGradient id="professionalTeal" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#2dd4bf" />
                                    <stop offset="100%" stop-color="#0f766e" />
                                </linearGradient>
                                <linearGradient id="professionalGold" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#facc15" />
                                    <stop offset="100%" stop-color="#a16207" />
                                </linearGradient>
                                <linearGradient id="professionalViolet" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#c084fc" />
                                    <stop offset="100%" stop-color="#7e22ce" />
                                </linearGradient>
                                <linearGradient id="professionalBlue" x1="15%" y1="10%" x2="85%"
                                    y2="90%">
                                    <stop offset="0%" stop-color="#60a5fa" />
                                    <stop offset="100%" stop-color="#1d4ed8" />
                                </linearGradient>
                            </defs>

                            <circle cx="400" cy="400" r="380" fill="url(#psyCenterGlow)" />

                            <g fill="#60a5fa" opacity="0.5">
                                <circle cx="80" cy="120" r="1" />
                                <circle cx="720" cy="100" r="1.5" />
                                <circle cx="150" cy="680" r="1" />
                                <circle cx="680" cy="720" r="1.5" />
                                <circle cx="50" cy="400" r="1" />
                                <circle cx="750" cy="400" r="1" />
                                <circle cx="400" cy="40" r="1.5" />
                                <circle cx="400" cy="760" r="1" />
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

                            <g id="psyRing">
                                <animateTransform attributeName="transform" type="rotate" from="0 400 400"
                                    to="360 400 400" dur="45s" repeatCount="indefinite" />

                                <g transform="translate(400, 105)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalGreen)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-user-gear"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Self-Assessment</text>
                                        <text class="psy-component-label" y="96">&amp; Profiling</text>
                                    </g>
                                </g>

                                <g transform="translate(585, 160)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalOrange)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-cubes"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Skill &amp; Talent</text>
                                        <text class="psy-component-label" y="96">Mapping</text>
                                    </g>
                                </g>

                                <g transform="translate(675, 315)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalRose)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-graduation-cap"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Stream &amp; Academic</text>
                                        <text class="psy-component-label" y="96">Selection</text>
                                    </g>
                                </g>

                                <g transform="translate(645, 500)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalCyan)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-chart-line"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Industry &amp; Market</text>
                                        <text class="psy-component-label" y="96">Exploration</text>
                                    </g>
                                </g>

                                <g transform="translate(515, 650)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalPurple)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-bullseye"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Career Goal</text>
                                        <text class="psy-component-label" y="96">Setting</text>
                                    </g>
                                </g>

                                <g transform="translate(285, 650)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalTeal)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-route"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Personalized</text>
                                        <text class="psy-component-label" y="96">Career Roadmap</text>
                                    </g>
                                </g>

                                <g transform="translate(155, 500)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalGold)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-id-card"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Resume &amp; Profile</text>
                                        <text class="psy-component-label" y="96">Building</text>
                                    </g>
                                </g>

                                <g transform="translate(125, 315)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalViolet)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-user-check"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Interview &amp; Skill</text>
                                        <text class="psy-component-label" y="96">Preparation</text>
                                    </g>
                                </g>

                                <g transform="translate(215, 160)">
                                    <g>
                                        <animateTransform attributeName="transform" type="rotate" from="0 0 0"
                                            to="-360 0 0" dur="45s" repeatCount="indefinite" />
                                        <circle r="48" fill="url(#professionalBlue)" filter="url(#psyIconGlow)" />
                                        <circle r="48" fill="none" stroke="#ffffff" stroke-width="2"
                                            opacity=".9" />
                                        <foreignObject x="-32" y="-34" width="64" height="58">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="psy-fa-icon"><i
                                                    class="fa-solid fa-rocket"></i></div>
                                        </foreignObject>
                                        <text class="psy-component-label" y="76">Action Plan &amp;</text>
                                        <text class="psy-component-label" y="96">Execution</text>
                                    </g>
                                </g>
                            </g>

                            <g transform="translate(400,400)">
                                <foreignObject x="-70" y="-70" width="140" height="140">
                                    <div xmlns="http://www.w3.org/1999/xhtml"
                                        style="width:140px;height:140px;display:flex;align-items:center;justify-content:center;color:#dff7ff;font-size:110px;line-height:1;filter:drop-shadow(0 0 12px rgba(56,217,255,.55));">
                                        <i class="fa-solid fa-compass"></i>
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

    {{-- ---------- PILLARS WHEEL ---------- --}}
    {{-- ---------- PILLARS WHEEL ---------- --}}

    <section id="edu-psy-pillars" class="edu-psy-pillars">
        <div class="container">
            @if (!empty($page['pillars']['kicker']))
                <p class="edu-psy-pillars-kicker text-center">
                    {{ $page['pillars']['kicker'] }}
                </p>
            @endif

            @if (!empty($page['pillars']['title']))
                <h2 class="edu-psy-pillars-title text-center">
                    {{ $page['pillars']['title'] }}
                </h2>
            @endif

            {{-- Desktop: Radial Wheel --}}
            <div class="edu-psy-wheel d-none d-md-block">
                <!-- Central Node -->
                <div class="edu-psy-wheel-center">
                    <span>
                        {{ $page['pillars']['center_label'] ?? 'CORE ASSESSMENT' }}
                        <small>Structured Career Insights</small>
                    </span>
                </div>

                @php
                    $count = count($page['pillars']['items']);
                    $angleStep = $count > 0 ? 360 / $count : 0;
                    // Start slightly offset so top card sits nicely
                    $startAngle = -90; // 0° = right, -90° puts first item at top
                @endphp

                @foreach ($page['pillars']['items'] as $i => $item)
                    @php
                        $angle = $startAngle + $i * $angleStep;
                    @endphp

                    <div class="edu-psy-wheel-item" style="--angle: {{ $angle }}deg;">
                        <div class="edu-psy-wheel-card">
                            @if (!empty($item['icon']))
                                <div class="edu-psy-card-icon">
                                    <i class="{{ $item['icon'] }}"></i>
                                </div>
                            @endif

                            <h3 class="edu-psy-card-title">
                                {{ $item['title'] }}
                            </h3>

                            <p class="edu-psy-card-text">
                                {{ $item['text'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Mobile Grid Layout --}}
            <div class="row g-3 d-md-none mt-3">
                @foreach ($page['pillars']['items'] as $item)
                    <div class="col-12">
                        <div class="edu-psy-card">
                            @if (!empty($item['icon']))
                                <div class="edu-psy-card-icon">
                                    <i class="{{ $item['icon'] }}"></i>
                                </div>
                            @endif
                            <h3 class="edu-psy-card-title">
                                {{ $item['title'] }}
                            </h3>
                            <p class="edu-psy-card-text">
                                {{ $item['text'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ---------- WHY TAKE THE ASSESSMENT ---------- --}}
   

    <section class="psy-section psy-section-alt">
    <div class="container">
        <div class="text-center mb-4">
            <p class="psy-kicker edu-psy-pillars-kicker d-inline-block">
                {{ $page['why']['kicker'] }}
            </p>
        </div>

        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="psy-h2">{{ $page['why']['title'] }}</h2>
                <p class="psy-card-text">{{ $page['why']['text'] }}</p>
            </div>

            <div class="col-lg-6">
                <ul class="psy-list">
                    @foreach ($page['why']['benefits'] as $b)
                        <li>{{ $b }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


    {{-- ---------- WHO CAN TAKE ---------- --}}
    <section class="psy-section">
        <div class="container">
            <p class="psy-kicker edu-psy-pillars-kicker">{{ $page['audience']['kicker'] }}</p>
            <h2 class="psy-h2">{{ $page['audience']['title'] }}</h2>
            <div class="row g-4 mt-2">
                @foreach ($page['audience']['items'] as $item)
                    <div class="col-md-6 col-lg-4">

                        <div class="psy-card">
                            <div class="psy-card-icon">
                                <i class="{{ $item['icon'] }}"></i>
                            </div>
                            <h3 class="psy-card-title">{{ $item['title'] }}</h3>
                            <p class="psy-card-text">{{ $item['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ---------- WHAT YOU GET / PROCESS ---------- --}}
    <section class="psy-section psy-section-alt">
        <div class="container">
            <p class="psy-kicker edu-psy-pillars-kicker">{{ $page['process']['kicker'] }}</p>
            <h2 class="psy-h2">{{ $page['process']['title'] }}</h2>
            <div class="psy-process mt-3">
                @foreach ($page['process']['steps'] as $i => $step)
                    <div class="psy-process-step">
                        <span class="psy-process-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <div>
                            <h3 class="psy-card-title">{{ $step['title'] }}</h3>
                            <p class="psy-card-text">{{ $step['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    {{-- ---------- PULL QUOTE ---------- --}}
    <section class="psy-quote-section">
        <div class="container">
            <blockquote class="psy-quote">{{ $page['quote'] }}</blockquote>
        </div>
    </section>

    {{-- ---------- SHARED EXPERT BIO (same block used on the other counselling pages) ---------- --}}
    @include('partials.expert-bio')

    {{-- ---------- CTA  ---------- --}}

    <section class="ign-psy-cta" id="psy-book">
        <div class="container">
            <div class="ign-psy-cta-box">
                <div class="ign-psy-cta-content">
                    <h3>Your career should match your potential — not just your marks.</h3>
                    <p>Take the Psychometric Assessment and start understanding your career direction with greater
                        clarity.</p>
                </div>

                <a href="{{ route('contact') }}" class="ign-psy-cta-btn">
                    Take the Assessment
                </a>
            </div>
        </div>
    </section>



</div>

<x-frontend-footer />
