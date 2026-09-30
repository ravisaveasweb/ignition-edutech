@php
    $page = is_array($page ?? null) ? $page : [];
    $hero = data_get($page, 'hero', []);
    $recruitmentServices = data_get($page, 'recruitment_services', []);
    $developmentAreas = data_get($page, 'development_areas', []);
    $benefitsOrg = data_get($page, 'benefits_org', []);
    $benefitsEmployee = data_get($page, 'benefits_employee', []);
    $whyUs = data_get($page, 'why_us', []);
    $cta = data_get($page, 'cta', []);
    $meta = data_get($page, 'meta', []);
    $contactHref = \Illuminate\Support\Facades\Route::has('corporate.contact')
        ? route('corporate.contact')
        : '/contact-us';
@endphp

<x-frontend-header />
<div class="corp-recruit">
    <section class="corp-recruit-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <span class="corp-recruit-eyebrow">{{ data_get($hero, 'eyebrow', '') }}</span>
                    <h1 class="corp-recruit-title">{{ data_get($hero, 'title', '') }}</h1>
                    <p class="corp-recruit-subtitle">{{ data_get($hero, 'subtitle', '') }}</p>
                    <a href="#corp-recruit-cta" class="corp-recruit-btn-primary">Talk to Our Team</a>
                </div>
            </div>
        </div>
    </section>

    <section class="corp-recruit-section">
        <div class="container">
            <p class="corp-recruit-kicker">Corporate Recruitment</p>
            <h2 class="corp-recruit-h2">Connect with the right talent for your organisation</h2>
            <div class="row g-4 mt-2">
                @foreach ($recruitmentServices as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($item, 'icon', 'bi-briefcase-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="corp-recruit-section corp-recruit-section-alt">
        <div class="container">
            <p class="corp-recruit-kicker">Employee Development</p>
            <h2 class="corp-recruit-h2">Helping organisations develop the people they have</h2>
            <div class="row g-4 mt-2">
                @foreach ($developmentAreas as $area)
                    <div class="col-md-4">
                        <div class="corp-recruit-card">
                              <i class="bi {{ data_get($area, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($area, 'title', '') }}</h3>
                            <ul class="corp-recruit-tags">
                                @foreach (data_get($area, 'items', []) as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="corp-recruit-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="corp-recruit-benefits-card">
                        <p class="corp-recruit-kicker">For Organisations</p>
                        <ul class="corp-recruit-list">
                            @foreach ($benefitsOrg as $b)
                                <li>{{ $b }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="corp-recruit-benefits-card corp-recruit-benefits-card-alt">
                        <p class="corp-recruit-kicker">For Employees</p>
                        <ul class="corp-recruit-list">
                            @foreach ($benefitsEmployee as $b)
                                <li>{{ $b }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="corp-recruit-section corp-recruit-section-alt">
        <div class="container">
            <p class="corp-recruit-kicker">Why Ignition Edutech</p>
            <h2 class="corp-recruit-h2">One partner. Complete talent solutions.</h2>
            <div class="row g-4 mt-2">
                @foreach ($whyUs as $item)
                    <div class="col-md-4">
                        <div class="corp-recruit-card">
                              <i class="bi {{ data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="corp-recruit-cta" class="corp-recruit-banner">
        <div class="container text-center">
            <h2>{{ data_get($cta, 'title', '') }}</h2>
            <p>{{ data_get($cta, 'text', '') }}</p>
            <a href="{{ $contactHref }}" class="corp-recruit-btn-primary">{{ data_get($cta, 'button', '') }}</a>
        </div>
    </section>
</div>
<x-frontend-footer />
