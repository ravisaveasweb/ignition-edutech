@php
    $active_nav = 'services';
    $page_title = 'Our Services | Ignition Edutech';
    $meta_description =
        'Explore end-to-end education and career consulting services from Ignition Edutech — school admissions, career counselling, higher education, online learning, study abroad and more.';

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

<section class="page-hero services-page-image">
    <div class="container">
        <span class="eyebrow">&#9670; OUR SERVICES</span>
        <h1>Comprehensive Education & <span class="accent">Career Solutions</span></h1>
        <p class="lede">End-to-end education and career consulting services designed to support learners, parents,
            institutions, and organisations at every stage of their journey.</p>
        <div class="hero-actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
        </div>
    </div>
</section>

<div class="container" style="padding: 48px 0 64px;">

    <div class="service-grid">
        @foreach ($services as $i => $s)
            <div class="service-card" id="{{ $s['id'] }}">
                <span class="num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <div class="ic-wrap"><i class="{{ $s['icon'] }}"></i></div>
                <h3>{{ $s['title'] }}</h3>
                <p>{{ $s['desc'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="section-heading" style="border-color: var(--ie-orange);">
        <span class="num" style="background: var(--ie-orange);">&#9733;</span>
        <h2>Why Choose Ignition Edutech?</h2>
    </div>

    <div class="card-grid" style="grid-template-columns: repeat(3,1fr);">

        <div class="info-card">
            <div class="ic">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h4>Personalised Guidance</h4>
            <p>Education & career pathways built around you.</p>
        </div>

        <div class="info-card">
            <div class="ic">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
            <h4>Expert Counsellors</h4>
            <p>Industry professionals with real-world insight.</p>
        </div>

        <div class="info-card">
            <div class="ic">
                <i class="fa-solid fa-handshake"></i>
            </div>
            <h4>Trusted Partnerships</h4>
            <p>Direct relationships with leading institutions.</p>
        </div>

        <div class="info-card">
            <div class="ic">
                <i class="fa-solid fa-users"></i>
            </div>
            <h4>Student-Centric</h4>
            <p>Every recommendation starts with your goals.</p>
        </div>

        <div class="info-card">
            <div class="ic">
                <i class="fa-solid fa-laptop-code"></i>
            </div>
            <h4>Technology-Driven</h4>
            <p>Modern tools for a smoother admissions journey.</p>
        </div>

        <div class="info-card">
            <div class="ic">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <h4>Ethical & Transparent</h4>
            <p>Honest advice, always — free of pressure.</p>
        </div>

    </div>

    <p style="text-align:center; font-size:17px; font-weight:600; color:var(--ie-dark); margin-top:32px;">From your
        first classroom to your dream career, Ignition Edutech is your trusted education partner.</p>

    <div class="cta-band">
        <div class="cta-head">
            <div>
                <h2>Not sure which service you need?</h2>
                <p class="cta-copy">Talk to our counsellors — we'll map out the right pathway for your goals, at no
                    cost.</p>
            </div>
        </div>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
            <a href="https://wa.me/918655055150" class="btn btn-outline"
                style="border-color:rgba(255,255,255,.3); color:#fff;">WhatsApp Us</a>
        </div>
    </div>
</div>

<x-frontend-footer />
