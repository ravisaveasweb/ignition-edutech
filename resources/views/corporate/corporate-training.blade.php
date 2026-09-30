@php
    $page = is_array($page ?? null) ? $page : [];
    $hero = data_get($page, 'hero', []);
    $trainingAreas = data_get($page, 'training_areas', []);
    $whyTraining = data_get($page, 'why_training', []);
    $audienceCards = data_get($page, 'audience_cards', []);
    $cta = data_get($page, 'cta', []);
    $meta = data_get($page, 'meta', []);
    $contactHref = \Illuminate\Support\Facades\Route::has('corporate.contact')
        ? route('corporate.contact')
        : '/contact-us';
@endphp

<x-frontend-header />
<div class="corp-train">
    <section class="corp-train-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <span class="corp-train-eyebrow">{{ data_get($hero, 'eyebrow', '') }}</span>
                    <h1 class="corp-train-title">{{ data_get($hero, 'title', '') }}</h1>
                    <p class="corp-train-subtitle">{{ data_get($hero, 'subtitle', '') }}</p>
                    <a href="#corp-train-cta" class="corp-train-btn-primary">Discuss Your Training Requirements</a>
                </div>
            </div>
        </div>
    </section>

    <section class="corp-train-section">
        <div class="container">
            <p class="corp-train-kicker">Our Corporate Training Areas</p>
            <h2 class="corp-train-h2">Four pillars of workplace-ready training</h2>
            <div class="row g-4 mt-2">
                @foreach ($trainingAreas as $area)
                    <div class="col-md-6">
                        <div class="corp-recruit-card">
                           <i class="bi {{ data_get($area, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($area, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($area, 'text', '') }}</p>
                            <ul class="corp-train-tags">
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

    <section class="corp-train-section corp-train-section-alt">
        <div class="container">
            <p class="corp-train-kicker">Why Corporate Training</p>
            <h2 class="corp-train-h2">Develop → Upskill → Adapt → Perform → Grow</h2>
            <div class="row g-4 mt-2">
                @foreach ($whyTraining as $point)
                    <div class="col-md-6">
                        <div class="corp-train-why-card">
                            <p>{{ $point }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="corp-train-section">
        <div class="container">
            <p class="corp-train-kicker">Designed for Today's Workforce</p>
            <h2 class="corp-train-h2">Programs customised by seniority level</h2>
            <div class="row g-4 mt-2">
                @foreach ($audienceCards as $item)
                    <div class="col-md-6 col-lg-3">
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

    <section id="corp-train-cta" class="corp-train-banner">
        <div class="container text-center">
            <h2>{{ data_get($cta, 'title', '') }}</h2>
            <p>{{ data_get($cta, 'text', '') }}</p>
            <a href="{{ $contactHref }}" class="corp-train-btn-primary">{{ data_get($cta, 'button', '') }}</a>
        </div>
    </section>
</div>
<x-frontend-footer />
