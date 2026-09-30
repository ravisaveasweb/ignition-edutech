@php
    $page = is_array($page ?? null) ? $page : [];
    $hero = data_get($page, 'hero', []);
    $keyPoints = data_get($page, 'key_points', []);
    $process = data_get($page, 'process', []);
    $benefitsOrg = data_get($page, 'benefits_org', []);
    $benefitsEmployee = data_get($page, 'benefits_employee', []);
    $cta = data_get($page, 'cta', []);
    $meta = data_get($page, 'meta', []);
    $contactHref = \Illuminate\Support\Facades\Route::has('corporate.contact')
        ? route('corporate.contact')
        : '/contact-us';
@endphp

<x-frontend-header />
<div class="corp-edu">
    <section class="corp-edu-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <span class="corp-edu-eyebrow">{{ data_get($hero, 'eyebrow', '') }}</span>
                    <h1 class="corp-edu-title">{{ data_get($hero, 'title', '') }}</h1>
                    <p class="corp-edu-subtitle">{{ data_get($hero, 'subtitle', '') }}</p>
                    <a href="#corp-edu-cta" class="corp-edu-btn-primary">Partner With Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="corp-edu-section">
        <div class="container">
            <p class="corp-edu-kicker">Key Points</p>
            <h2 class="corp-edu-h2">What a partnership gives your organisation</h2>
            <div class="row g-4 mt-2">
                @foreach($keyPoints as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="corp-recruit-card">
                              <i class="bi {{ data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-edu-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-edu-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="corp-edu-section corp-edu-section-alt">
        <div class="container">
            <p class="corp-edu-kicker">How It Works</p>
            <h2 class="corp-edu-h2">From partnership to enrolment, in five steps</h2>
            <div class="corp-edu-process mt-3">
                @foreach($process as $step)
                    <div class="corp-edu-process-step">
                        <span class="corp-edu-process-num">{{ data_get($step, 'step', '') }}</span>
                        <div>
                            <h3 class="corp-edu-card-title">{{ data_get($step, 'title', '') }}</h3>
                            <p class="corp-edu-card-text">{{ data_get($step, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="corp-edu-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="corp-edu-benefits-card">
                        <p class="corp-edu-kicker">Benefits for Organisations</p>
                        <ul class="corp-edu-list">
                            @foreach($benefitsOrg as $b)
                                <li>{{ $b }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="corp-edu-benefits-card corp-edu-benefits-card-alt">
                        <p class="corp-edu-kicker">Benefits for Employees</p>
                        <ul class="corp-edu-list">
                            @foreach($benefitsEmployee as $b)
                                <li>{{ $b }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="corp-edu-cta" class="corp-edu-banner">
        <div class="container text-center">
            <h2>{{ data_get($cta, 'title', '') }}</h2>
            <p>{{ data_get($cta, 'text', '') }}</p>
            <a href="{{ $contactHref }}" class="corp-edu-btn-primary">{{ data_get($cta, 'button', '') }}</a>
        </div>
    </section>
</div>
<x-frontend-footer />
