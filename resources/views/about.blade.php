@php

    $steps = [
        [
            'tag' => 'Step 1',
            'title' => 'Discover',
            'sub' => 'Understanding Your Goals',
            'desc' =>
                'Every learner is unique. We begin by understanding your academic background, career aspirations, interests, budget, and preferred learning mode.',
        ],
        [
            'tag' => 'Step 2',
            'title' => 'Consult',
            'sub' => 'Expert Career & Education Guidance',
            'desc' =>
                'Our experienced counsellors evaluate your profile and recommend the most suitable schools, universities, programs, or career pathways.',
        ],
        [
            'tag' => 'Step 3',
            'title' => 'Plan',
            'sub' => 'Creating Your Success Roadmap',
            'desc' =>
                'We develop a customised action plan covering program selection, admission timelines, eligibility, documentation, and financial considerations.',
        ],
        [
            'tag' => 'Step 4',
            'title' => 'Apply',
            'sub' => 'End-to-End Admission Support',
            'desc' =>
                'From application submission to documentation, interview preparation, and follow-ups, we manage every stage with precision.',
        ],
        [
            'tag' => 'Step 5',
            'title' => 'Enroll',
            'sub' => 'Secure Your Admission',
            'desc' =>
                'Once your admission is confirmed, we assist with enrollment formalities, fee guidance, onboarding, and orientation.',
        ],
        [
            'tag' => 'Step 6',
            'title' => 'Grow',
            'sub' => 'Lifelong Learning & Career Support',
            'desc' =>
                "Our relationship doesn't end with admission. We continue supporting your learning, career progression, upskilling, and future educational goals.",
        ],
    ];

    $services = [
        [
            'id' => 'school-admissions',
            'icon' => 'fa-solid fa-school',
            'title' => 'School Admissions & Academic Planning',
            'desc' =>
                'Helping parents and students choose the right schools, academic boards, and educational pathways for long-term success.',
        ],

        [
            'id' => 'career-guidance',
            'icon' => 'fa-solid fa-compass',
            'title' => 'Career Guidance & Counselling',
            'desc' =>
                'Personalised career counselling, aptitude assessments, stream selection, and expert guidance to help students make informed academic and career decisions.',
        ],

        [
            'id' => 'undergraduate',
            'icon' => 'fa-solid fa-graduation-cap',
            'title' => 'Undergraduate Admissions',
            'desc' =>
                'Expert assistance in selecting the right colleges and universities, program selection, admission guidance, and application support.',
        ],

        [
            'id' => 'postgraduate',
            'icon' => 'fa-solid fa-user-tie',
            'title' => 'Postgraduate & Executive Education',
            'desc' =>
                "Guidance for MBA, Master's, Executive Education, and other postgraduate programs through leading institutions in India and abroad.",
        ],

        [
            'id' => 'online-learning',
            'icon' => 'fa-solid fa-laptop',
            'title' => 'Online & Distance Learning',
            'desc' =>
                'Access to UGC-recognised online and distance learning programs designed for working professionals, entrepreneurs, and lifelong learners.',
        ],

        [
            'id' => 'certifications',
            'icon' => 'fa-solid fa-certificate',
            'title' => 'Professional Certifications & Upskilling',
            'desc' =>
                'Industry-relevant certification programs and skill development courses to enhance employability, leadership, and career growth.',
        ],

        [
            'id' => 'corporate-learning',
            'icon' => 'fa-solid fa-building',
            'title' => 'Corporate Learning Solutions',
            'desc' =>
                'Customised learning and development programs, employee upskilling initiatives, executive education, and university partnership solutions for organisations.',
        ],

        [
            'id' => 'institution-consulting',
            'icon' => 'fa-solid fa-handshake',
            'title' => 'Institution Partnership & Consulting',
            'desc' =>
                'Strategic consulting services for schools, colleges, universities, and educational organisations — including student outreach, admissions support, and business development.',
        ],

        [
            'id' => 'scholarship-guidance',
            'icon' => 'fa-solid fa-sack-dollar',
            'title' => 'Scholarship & Education Funding Guidance',
            'desc' =>
                'Support in identifying scholarships, financial aid opportunities, and education financing options to make quality education more accessible.',
        ],

        [
            'id' => 'study-abroad',
            'icon' => 'fa-solid fa-earth-americas',
            'title' => 'Study Abroad Consulting',
            'desc' =>
                'Comprehensive guidance for students aspiring to pursue international education — including university selection, application support, and admission counselling.',
        ],
    ];
@endphp
<x-frontend-header />

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">&#9670; ABOUT IGNITION EDUTECH</span>
        <h1>Welcome to Ignition Edutech —<br>Empowering Every <span class="accent">Learning Journey</span></h1>
        <p class="lede">Education is the foundation of opportunity, growth, and lifelong success. We help learners at
            every stage make confident, informed decisions.</p>
        <div class="hero-actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
            <a href="{{ route('services') }}" class="btn btn-outline"
                style="border-color:rgba(255,255,255,.35); color:#fff;">Explore
                Our Services</a>
        </div>
    </div>
</section>

<div class="container">
    <div class="layout">
        <div class="content">
            <div class="section-heading mt-0" id="who-we-are">
                <!-- <span class="num">3</span> -->
                <h2>Who We are</h2>
            </div>

            <p style="font-size:17px; color:var(--ie-dark); font-weight:500;">At <strong>Ignition Edutech Private
                    Limited</strong>, we believe that education is the foundation of opportunity, growth, and lifelong
                success. Every learner's journey is unique, and every decision — from choosing the right school to
                building a successful career — has the power to shape the future.</p>

            <p>As a comprehensive education consulting and learning solutions company, we are committed to guiding
                students, parents, working professionals, educational institutions, and corporate organisations through
                every stage of the educational journey. Whether it's school admissions, career counselling, higher
                education planning, professional certifications, executive learning, or lifelong upskilling, we provide
                trusted guidance and personalised solutions to help individuals achieve their aspirations.</p>

            <p>Our strength lies in combining expert counselling, innovative technology, and strategic partnerships with
                leading schools, colleges, universities, and industry partners. By understanding each learner's goals,
                we create personalised pathways that empower informed decisions and meaningful outcomes.</p>

            <div class="callout callout-major">
                <div class="icon">&#9888;</div>
                <div class="body">
                    <strong>Our Belief</strong>
                    <p>At Ignition Edutech, we don't just facilitate admissions — we inspire confidence, unlock
                        potential, and build brighter futures.</p>
                </div>
            </div>

            <div class="vm-section">

                <div class="vm-card">
                    <div class="vm-icon">
                        <i class="fa-solid fa-eye fa-sm"></i>
                    </div>

                    <div class="vm-content">
                        <!-- <span class="vm-badge">01</span> -->
                        <h2>Our Vision</h2>

                        <p>
                            To shape the future of education by building India's most respected
                            education and career consulting ecosystem — where every learner
                            discovers the right path to excel, lead, and create lasting impact.
                        </p>
                    </div>
                </div>

                <div class="vm-card">
                    <div class="vm-icon">
                        <i class="fa-solid fa-rocket fa-sm"></i>
                    </div>

                    <div class="vm-content">
                        <!-- <span class="vm-badge">02</span> -->
                        <h2>Our Mission</h2>

                        <p>
                            To set new standards in education consulting by combining expert
                            mentorship, cutting-edge technology, and strategic partnerships with
                            leading institutions — enabling learners to achieve academic excellence,
                            career advancement, and lifelong growth.
                        </p>
                    </div>
                </div>

            </div>

            <div>
                <div class="section-heading" id="our-approach">
                    <!-- <span class="num">3</span> -->
                    <h2>Our Approach</h2>
                </div>

                <div class="container" style="max-width: 880px;">

                    <div class="process-track">
                        @foreach ($steps as $i => $s)
                            <div class="process-step {{ $i === 0 ? 'active' : '' }}">
                                <div class="step-num">{{ $i + 1 }}</div>
                                <div class="step-body">
                                    <span class="step-tag">{{ $s['sub'] }}</span>
                                    <h3>{{ $s['title'] }}</h3>
                                    <p>{{ $s['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- <div class="cta-band">
                        <div class="cta-head">
                            <div>
                                <h2>Ready for <span class="accent">Step 1</span>?</h2>
                                <p class="cta-copy">Book a free consultation and let's discover the right pathway for
                                    you — no pressure,
                                    just honest guidance.</p>
                            </div>
                        </div>
                        <div class="cta-actions">
                            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
                            <a href="https://wa.me/918655055150" class="btn btn-outline"
                                style="border-color:rgba(255,255,255,.3); color:#fff;"><i
                                    class="fab fa-whatsapp fa-lg"></i> WhatsApp
                                Us</a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="set-us-apart">

                <div class="section-heading" id="why-ignition-edutech">
                    <!-- <span class="num">3</span> -->
                    <h2>Why Ignition Edutech</h2>
                </div>

                <div class="card-grid">

                    <div class="info-card">
                        <div class="ic">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h4>Personalised Guidance</h4>
                        <p>Pathways built around each learner's goals, strengths and budget — never a one-size-fits-all
                            approach.</p>
                    </div>

                    <div class="info-card">
                        <div class="ic">
                            <i class="fa-solid fa-handshake-angle"></i>
                        </div>
                        <h4>Trusted Partnerships</h4>
                        <p>Direct relationships with leading schools, colleges, universities and industry partners.</p>
                    </div>

                    <div class="info-card">
                        <div class="ic">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <h4>Expert Counsellors</h4>
                        <p>Experienced professionals who understand both education pathways and career outcomes.</p>
                    </div>

                    <div class="info-card">
                        <div class="ic">
                            <i class="fa-solid fa-shield"></i>
                        </div>
                        <h4>Ethical & Transparent</h4>
                        <p>Honest, student-first advice — free of pressure, free of hidden agendas.</p>
                    </div>

                    <div class="info-card">
                        <div class="ic">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h4>Technology-Driven Solutions</h4>
                        <p>Leveraging modern digital tools and data-driven insights to simplify admissions, counselling,
                            and
                            educational planning.</p>
                    </div>

                    <div class="info-card">
                        <div class="ic">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h4>Proven Success</h4>
                        <p>A strong track record of helping students secure admissions to leading institutions and
                            achieve
                            their academic and career goals.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="section-heading" id="services-we-offer">
                    <!-- <span class="num">3</span> -->
                    <h2>What Services We Offer</h2>
                </div>
                <div class="service-grid">
                    @foreach ($services as $i => $s)
                        <div class="service-card" id="{{ $s['id'] }}">
                            {{-- <span class="num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span> --}}
                            <div class="ic-wrap"><i class="{{ $s['icon'] }}"></i></div>
                            <h3>{{ $s['title'] }}</h3>
                            <p>{{ $s['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <aside class="sidebar">
            <div class="side-card">
                <div class="side-card-head">On This Page</div>
                <div class="side-card-body">
                    <ul class="toc-list">
                        <li><a href="#who-we-are">Who We are</a></li>
                        <li><a href="#our-approach">Our Approach</a></li>
                        <li><a href="#why-ignition-edutech">Why Ignition Edutech</a></li>
                        <li><a href="#services-we-offer">What Services We Offer</a></li>
                    </ul>
                </div>
            </div>
            <div class="mini-cta">
                <h4 style="color:#fff; margin-bottom:4px;">Talk to a Counsellor</h4>
                <p>Zero pressure, honest guidance — free of cost.</p>
                <a href="tel:+918655055150" class="phone">+91 8655 055 150</a>
                <a href="{{ route('contact') }}" class="btn btn-orange btn-block" style="margin-top:14px;">Book Free
                    Counselling</a>
            </div>
        </aside>
    </div>

    <div class="cta-band about-cta-class">
        <div class="cta-head">
            <div>
                <h2>From your first classroom to your <span class="accent">dream career</span>.</h2>
                <p class="cta-copy">Ignition Edutech is your trusted education partner — guiding every learner through
                    every educational milestone.</p>
            </div>
        </div>
        <ul class="cta-checks">
            <li>Personalised Education & Career Guidance</li>
            <li>Expert Counsellors & Industry Professionals</li>
            <li>Trusted Institutional Partnerships</li>
            <li>Student-Centric Approach</li>
            <li>Technology-Driven Learning Solutions</li>
            <li>End-to-End Admission & Career Support</li>
        </ul>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
            <a href="https://wa.me/918655055150" class="btn btn-outline"
                style="border-color:rgba(255,255,255,.3); color:#fff;">WhatsApp Us</a>
        </div>
    </div>
</div>

<x-frontend-footer />
