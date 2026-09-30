@php
    $active_nav = 'process';
    $page_title = 'Our Process | Ignition Edutech';
    $meta_description =
        'Discover how Ignition Edutech guides every learner — from Discover to Grow — with a proven, personalised six-step process from first consultation to lifelong career support.';
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
            'sub' => 'Expert Career &amp; Education Guidance',
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
            'sub' => 'Lifelong Learning &amp; Career Support',
            'desc' =>
                "Our relationship doesn't end with admission. We continue supporting your learning, career progression, upskilling, and future educational goals.",
        ],
    ];

@endphp

<x-frontend-header />
<section class="page-hero our-process-image">
    <div class="container">
        <span class="eyebrow">&#9670; OUR PROCESS</span>
        <h1>Your Journey to <span class="accent">Success</span> Starts Here</h1>
        <p class="lede">A proven, personalised process that ensures every learner receives the right guidance, the
            right opportunities, and continuous support — from consultation to successful admission and beyond.</p>
        <div class="hero-actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Start Step 1: Free Consultation &rarr;</a>
        </div>
    </div>
</section>

<div class="container" style="padding: 48px 0 64px; max-width: 880px;">

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

    <div class="cta-band">
        <div class="cta-head">
            <div>
                <h2>Ready for <span class="accent">Step 1</span>?</h2>
                <p class="cta-copy">Book a free consultation and let's discover the right pathway for you — no pressure,
                    just honest guidance.</p>
            </div>
        </div>
        <div class="cta-actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
            <a href="https://wa.me/918655055150" class="btn btn-outline"
                style="border-color:rgba(255,255,255,.3); color:#fff;"><i class="fab fa-whatsapp fa-lg"></i> WhatsApp
                Us</a>
        </div>
    </div>
</div>

<x-frontend-footer />
