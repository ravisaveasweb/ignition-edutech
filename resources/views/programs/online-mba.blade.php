@php
    $page = is_array($page ?? null) ? $page : [];
    $hero = data_get($page, 'hero', []);
    $highlights = data_get($page, 'highlights', []);
    $specializations = data_get($page, 'specializations', []);
    $structure = data_get($page, 'structure', []);
    $industryRelevance = data_get($page, 'industry_relevance', []);
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
<div class="oe-mba">
    <section class="oe-mba-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="oe-mba-eyebrow">{{ data_get($hero, 'eyebrow', '') }}</span>
                    <h1 class="oe-mba-title">{{ data_get($hero, 'title', '') }}</h1>
                    <p class="oe-mba-subtitle">{{ data_get($hero, 'subtitle', '') }}</p>
                    <a href="{{ $applicationHref }}" class="oe-mba-btn-primary">Apply Now</a>
                    <a href="#oe-mba-faqs" class="oe-mba-btn-secondary">See Eligibility &amp; FAQs</a>
                </div>
            </div>
            <div class="row oe-mba-stats">
                @foreach (data_get($hero, 'stats', []) as $stat)
                    <div class="col-6 col-md-4">
                        <div class="oe-mba-stat-card">
                            <span class="oe-mba-stat-value">{{ data_get($stat, 'value', '') }}</span>
                            <span class="oe-mba-stat-label">{{ data_get($stat, 'label', '') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-mba-section">
        <div class="container">
            <p class="oe-mba-kicker">Key Highlights</p>
            <h2 class="oe-mba-h2">Why choose this Online MBA</h2>
            <div class="row g-4 mt-2">
                @foreach ($highlights as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($item, 'icon' , 'bi-lightbulb-fill') }}"> </i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-mba-section oe-mba-section-alt">
        <div class="container">
            <p class="oe-mba-kicker">MBA Specialisations</p>
            <h2 class="oe-mba-h2">Choose the specialisation that fits your career goals</h2>
            <div class="row g-3 mt-2">
                @foreach ($specializations as $spec)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="oe-mba-spec-pill">{{ data_get($spec, 'name', '') }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-mba-section">
        <div class="container">
            <p class="oe-mba-kicker">Program Structure</p>
            <h2 class="oe-mba-h2">Designed for working professionals</h2>
            <div class="row g-4 mt-2 text-center">
                <div class="col-6 col-md-3">
                    <div class="oe-mba-structure-box">
                        <span class="oe-mba-structure-value">{{ data_get($structure, 'duration', '') }}</span>
                        <span class="oe-mba-structure-label">Duration</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-mba-structure-box">
                        <span class="oe-mba-structure-value">{{ data_get($structure, 'validity', '') }}</span>
                        <span class="oe-mba-structure-label">Validity</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-mba-structure-box">
                        <span class="oe-mba-structure-value">{{ data_get($structure, 'terms', '') }}</span>
                        <span class="oe-mba-structure-label">Semesters</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-mba-structure-box">
                        <span class="oe-mba-structure-value">Evaluation</span>
                        <span class="oe-mba-structure-label">{{ data_get($structure, 'evaluation', '') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oe-mba-section oe-mba-section-alt">
        <div class="container">
            <p class="oe-mba-kicker">Career Growth &amp; Industry Relevance</p>
            <h2 class="oe-mba-h2">Placement support built into the program</h2>
            <div class="row g-4 mt-2">
                @foreach ($industryRelevance as $item)
                    <div class="col-md-6">
                        <div class="corp-recruit-card">
                            <i class="bi {{ data_get($item, 'icon' , 'bi-lightbulb-fill') }}"> </i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-mba-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="oe-mba-kicker">Eligibility</p>
                    <h2 class="oe-mba-h2">{{ data_get($eligibility, 'title', '') }}</h2>
                    <ul class="oe-mba-list">
                        @foreach (data_get($eligibility, 'points', []) as $point)
                            <li>{{ $point }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="oe-mba-cta-box">
                        <h3>{{ data_get($cta, 'title', '') }}</h3>
                        <p>{{ data_get($cta, 'text', '') }}</p>
                        <a href="{{ $applicationHref }}"
                            class="oe-mba-btn-primary">{{ data_get($cta, 'button', '') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oe-mba-section oe-mba-section-alt">
        <div class="container">
            <p class="oe-mba-kicker">Career Opportunities</p>
            <h2 class="oe-mba-h2">Roles this MBA can prepare you for</h2>
            <div class="row g-4 mt-2">
                @foreach ($careerOutcomes as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="corp-recruit-card">
                              <i class="bi {{ data_get($item, 'icon' , 'bi-lightbulb-fill') }}"> </i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'role', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-mba-section">
        <div class="container">
            <p class="oe-mba-kicker">Admission Process</p>
            <h2 class="oe-mba-h2">Four steps to get started</h2>
            <div class="oe-mba-process">
                @foreach ($admissionProcess as $i => $step)
                    <div class="oe-mba-process-step">
                        <span class="oe-mba-process-num">{{ $i + 1 }}</span>
                        <div>
                            <h3 class="oe-mba-card-title">{{ data_get($step, 'step', '') }}</h3>
                            <p class="oe-mba-card-text">{{ data_get($step, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="oe-mba-faqs" class="oe-mba-section oe-mba-section-alt">
        <div class="container">
            <p class="oe-mba-kicker">Common Questions</p>
            <h2 class="oe-mba-h2">Frequently asked questions</h2>
            <div class="accordion oe-mba-accordion mt-3" id="oeMbaFaqAccordion">
                @foreach ($faqs as $i => $faq)
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="oeMbaFaqHeading{{ $i }}">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#oeMbaFaqCollapse{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                aria-controls="oeMbaFaqCollapse{{ $i }}">
                                {{ data_get($faq, 'q', '') }}
                            </button>
                        </h3>
                        <div id="oeMbaFaqCollapse{{ $i }}"
                            class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                            aria-labelledby="oeMbaFaqHeading{{ $i }}" data-bs-parent="#oeMbaFaqAccordion">
                            <div class="accordion-body">{{ data_get($faq, 'a', '') }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-mba-banner">
        <div class="container text-center">
            <h2>{{ data_get($cta, 'title', '') }}</h2>
            <p>{{ data_get($cta, 'text', '') }}</p>
            <a href="{{ $applicationHref }}" class="oe-mba-btn-primary">{{ data_get($cta, 'button', '') }}</a>
        </div>
    </section>
</div>

<x-frontend-footer />
