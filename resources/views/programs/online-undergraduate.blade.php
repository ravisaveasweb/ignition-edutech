@php
    $page = is_array($page ?? null) ? $page : [];
    $hero = data_get($page, 'hero', []);
    $highlights = data_get($page, 'highlights', []);
    $specializations = data_get($page, 'specializations', []);
    $structure = data_get($page, 'structure', []);
    $methodology = data_get($page, 'methodology', []);
    $eligibility = data_get($page, 'eligibility', []);
    $cta = data_get($page, 'cta', []);
    $careerOutcomes = data_get($page, 'career_outcomes', []);
    $admissionProcess = data_get($page, 'admission_process', []);
    $faqs = data_get($page, 'faqs', []);
    $meta = data_get($page, 'meta', []);
    $applicationHref = \Illuminate\Support\Facades\Route::has('university-application-form')
        ? route('university-application-form')
        : '/university-application-form';
@endphp

<x-frontend-header />
<div class="oe-ug">
    <section class="oe-ug-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="oe-ug-eyebrow">{{ data_get($hero, 'eyebrow', '') }}</span>
                    <h1 class="oe-ug-title">{{ data_get($hero, 'title', '') }}</h1>
                    <p class="oe-ug-subtitle">{{ data_get($hero, 'subtitle', '') }}</p>
                    <a href="{{ $applicationHref }}" class="oe-ug-btn-primary">Apply Now</a>
                    <a href="#oe-ug-faqs" class="oe-ug-btn-secondary">See Eligibility &amp; FAQs</a>
                </div>
            </div>
            <div class="row oe-ug-stats">
                @foreach (data_get($hero, 'stats', []) as $stat)
                    <div class="col-6 col-md-4">
                        <div class="oe-ug-stat-card">
                            <span class="oe-ug-stat-value">{{ data_get($stat, 'value', '') }}</span>
                            <span class="oe-ug-stat-label">{{ data_get($stat, 'label', '') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-ug-section">
        <div class="container">
            <p class="oe-ug-kicker">Key Highlights</p>
            <h2 class="oe-ug-h2">Why choose this Online Undergraduate Program</h2>
            <div class="row g-4 mt-2">
                @foreach ($highlights as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="oe-ug-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="oe-ug-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-ug-section oe-ug-section-alt">
        <div class="container">
            <p class="oe-ug-kicker">Choose Your Program</p>
            <h2 class="oe-ug-h2">Build a foundation for the corporate world</h2>
            <div class="row g-4 mt-2">
                @foreach ($specializations as $spec)
                    <div class="col-md-6">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($spec, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="oe-ug-card-title">{{ data_get($spec, 'name', '') }}</h3>
                            <p class="oe-ug-card-text">{{ data_get($spec, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-ug-section">
        <div class="container">
            <p class="oe-ug-kicker">Program Structure</p>
            <h2 class="oe-ug-h2">A curriculum built in six terms</h2>
            <div class="row g-4 mt-2 text-center">
                <div class="col-6 col-md-3">
                    <div class="oe-ug-structure-box">
                        <span class="oe-ug-structure-value">{{ data_get($structure, 'duration', '') }}</span>
                        <span class="oe-ug-structure-label">Duration</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-ug-structure-box">
                        <span class="oe-ug-structure-value">{{ data_get($structure, 'validity', '') }}</span>
                        <span class="oe-ug-structure-label">Validity</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-ug-structure-box">
                        <span class="oe-ug-structure-value">{{ data_get($structure, 'terms', '') }}</span>
                        <span class="oe-ug-structure-label">Terms</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-ug-structure-box">
                        <span class="oe-ug-structure-value">Evaluation</span>
                        <span class="oe-ug-structure-label">{{ data_get($structure, 'evaluation', '') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oe-ug-section oe-ug-section-alt">
        <div class="container">
            <p class="oe-ug-kicker">Learning Methodology</p>
            <h2 class="oe-ug-h2">Study at your own pace, on your own schedule</h2>
            <div class="row g-4 mt-2">
                @foreach ($methodology as $item)
                    <div class="col-md-4">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="oe-ug-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="oe-ug-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-ug-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="oe-ug-kicker">Eligibility</p>
                    <h2 class="oe-ug-h2">{{ data_get($eligibility, 'title', '') }}</h2>
                    <ul class="oe-ug-list">
                        @foreach (data_get($eligibility, 'points', []) as $point)
                            <li>{{ $point }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="oe-ug-cta-box">
                        <h3>{{ data_get($cta, 'title', '') }}</h3>
                        <p>{{ data_get($cta, 'text', '') }}</p>
                        <a href="{{ $applicationHref }}"
                            class="oe-ug-btn-primary">{{ data_get($cta, 'button', '') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oe-ug-section oe-ug-section-alt">
        <div class="container">
            <p class="oe-ug-kicker">Career Opportunities</p>
            <h2 class="oe-ug-h2">Where this degree can take you</h2>
            <div class="row g-4 mt-2">
                @foreach ($careerOutcomes as $item)
                    <div class="col-md-4">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="oe-ug-card-title">{{ data_get($item, 'role', '') }}</h3>
                            <p class="oe-ug-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-ug-section">
        <div class="container">
            <p class="oe-ug-kicker">Admission Process</p>
            <h2 class="oe-ug-h2">Four steps to get started</h2>
            <div class="oe-ug-process">
                @foreach ($admissionProcess as $i => $step)
                    <div class="oe-ug-process-step">
                        <span class="oe-ug-process-num">{{ $i + 1 }}</span>
                        <div>
                            <h3 class="oe-ug-card-title">{{ data_get($step, 'step', '') }}</h3>
                            <p class="oe-ug-card-text">{{ data_get($step, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="oe-ug-faqs" class="oe-ug-section oe-ug-section-alt">
        <div class="container">
            <p class="oe-ug-kicker">Common Questions</p>
            <h2 class="oe-ug-h2">Frequently asked questions</h2>
            <div class="accordion oe-ug-accordion mt-3" id="oeUgFaqAccordion">
                @foreach ($faqs as $i => $faq)
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="oeUgFaqHeading{{ $i }}">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#oeUgFaqCollapse{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                aria-controls="oeUgFaqCollapse{{ $i }}">
                                {{ data_get($faq, 'q', '') }}
                            </button>
                        </h3>
                        <div id="oeUgFaqCollapse{{ $i }}"
                            class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                            aria-labelledby="oeUgFaqHeading{{ $i }}" data-bs-parent="#oeUgFaqAccordion">
                            <div class="accordion-body">{{ data_get($faq, 'a', '') }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-ug-banner">
        <div class="container text-center">
            <h2>{{ data_get($cta, 'title', '') }}</h2>
            <p>{{ data_get($cta, 'text', '') }}</p>
            <a href="{{ $applicationHref }}" class="oe-ug-btn-primary">{{ data_get($cta, 'button', '') }}</a>
        </div>
    </section>
</div>
<x-frontend-footer />
