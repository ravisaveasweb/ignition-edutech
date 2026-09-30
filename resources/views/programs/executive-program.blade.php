@php
    $page = is_array($page ?? null) ? $page : [];
    $hero = data_get($page, 'hero', []);
    $highlights = data_get($page, 'highlights', []);
    $specializations = data_get($page, 'specializations', []);
    $structure = data_get($page, 'structure', []);
    $leadershipBenefits = data_get($page, 'leadership_benefits', []);
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
<div class="oe-exec">
    <section class="oe-exec-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="oe-exec-eyebrow">{{ data_get($hero, 'eyebrow', '') }}</span>
                    <h1 class="oe-exec-title">{{ data_get($hero, 'title', '') }}</h1>
                    <p class="oe-exec-subtitle">{{ data_get($hero, 'subtitle', '') }}</p>
                    <a href="{{ $applicationHref }}" class="oe-exec-btn-primary">Apply Now</a>
                    <a href="#oe-exec-faqs" class="oe-exec-btn-secondary">See Eligibility &amp; FAQs</a>
                </div>
            </div>
            <div class="row oe-exec-stats">
                @foreach (data_get($hero, 'stats', []) as $stat)
                    <div class="col-6 col-md-4">
                        <div class="oe-exec-stat-card">
                            <span class="oe-exec-stat-value">{{ data_get($stat, 'value', '') }}</span>
                            <span class="oe-exec-stat-label">{{ data_get($stat, 'label', '') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-exec-section">
        <div class="container">
            <p class="oe-exec-kicker">Key Highlights</p>
            <h2 class="oe-exec-h2">Why choose this Executive Program</h2>
            <div class="row g-4 mt-2">
                @foreach ($highlights as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="corp-recruit-card">
                            <i class="bi {{data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-exec-section oe-exec-section-alt">
        <div class="container">
            <p class="oe-exec-kicker">Choose Your Specialisation</p>
            <h2 class="oe-exec-h2">Five leadership-focused specialisations</h2>
            <div class="row g-3 mt-2">
                @foreach ($specializations as $spec)
                    <div class="col-6 col-md-4">
                        <div class="oe-exec-spec-pill">{{ data_get($spec, 'name', '') }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-exec-section">
        <div class="container">
            <p class="oe-exec-kicker">Program Structure</p>
            <h2 class="oe-exec-h2">Built for experienced professionals</h2>
            <div class="row g-4 mt-2 text-center">
                <div class="col-6 col-md-3">
                    <div class="oe-exec-structure-box">
                        <span class="oe-exec-structure-value">{{ data_get($structure, 'duration', '') }}</span>
                        <span class="oe-exec-structure-label">Duration</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-exec-structure-box">
                        <span class="oe-exec-structure-value">{{ data_get($structure, 'validity', '') }}</span>
                        <span class="oe-exec-structure-label">Validity</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-exec-structure-box">
                        <span class="oe-exec-structure-value">{{ data_get($structure, 'terms', '') }}</span>
                        <span class="oe-exec-structure-label">Terms</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="oe-exec-structure-box">
                        <span class="oe-exec-structure-value">Evaluation</span>
                        <span class="oe-exec-structure-label">{{ data_get($structure, 'evaluation', '') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oe-exec-section oe-exec-section-alt">
        <div class="container">
            <p class="oe-exec-kicker">Leadership Development</p>
            <h2 class="oe-exec-h2">More than coursework — applied leadership experience</h2>
            <div class="row g-4 mt-2">
                @foreach ($leadershipBenefits as $item)
                    <div class="col-md-4">
                        <div class="corp-recruit-card">
                             <i class="bi {{data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'title', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-exec-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="oe-exec-kicker">Eligibility</p>
                    <h2 class="oe-exec-h2">{{ data_get($eligibility, 'title', '') }}</h2>
                    <ul class="oe-exec-list">
                        @foreach (data_get($eligibility, 'points', []) as $point)
                            <li>{{ $point }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="oe-exec-cta-box">
                        <h3>{{ data_get($cta, 'title', '') }}</h3>
                        <p>{{ data_get($cta, 'text', '') }}</p>
                        <a href="{{ $applicationHref }}"
                            class="oe-exec-btn-primary">{{ data_get($cta, 'button', '') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oe-exec-section oe-exec-section-alt">
        <div class="container">
            <p class="oe-exec-kicker">Career Advancement</p>
            <h2 class="oe-exec-h2">Where this program can take your career</h2>
            <div class="row g-4 mt-2">
                @foreach ($careerOutcomes as $item)
                    <div class="col-md-4">
                        <div class="corp-recruit-card">
                             <i class="bi {{data_get($item, 'icon', 'bi-lightbulb-fill') }}"></i>
                            <h3 class="corp-recruit-card-title">{{ data_get($item, 'role', '') }}</h3>
                            <p class="corp-recruit-card-text">{{ data_get($item, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-exec-section">
        <div class="container">
            <p class="oe-exec-kicker">Admission Process</p>
            <h2 class="oe-exec-h2">From application to confirmation</h2>
            <div class="oe-exec-process">
                @foreach ($admissionProcess as $i => $step)
                    <div class="oe-exec-process-step">
                        <span class="oe-exec-process-num">{{ $i + 1 }}</span>
                        <div>
                            <h3 class="oe-exec-card-title">{{ data_get($step, 'step', '') }}</h3>
                            <p class="oe-exec-card-text">{{ data_get($step, 'text', '') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="oe-exec-faqs" class="oe-exec-section oe-exec-section-alt">
        <div class="container">
            <p class="oe-exec-kicker">Common Questions</p>
            <h2 class="oe-exec-h2">Frequently asked questions</h2>
            <div class="accordion oe-exec-accordion mt-3" id="oeExecFaqAccordion">
                @foreach ($faqs as $i => $faq)
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="oeExecFaqHeading{{ $i }}">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#oeExecFaqCollapse{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                aria-controls="oeExecFaqCollapse{{ $i }}">
                                {{ data_get($faq, 'q', '') }}
                            </button>
                        </h3>
                        <div id="oeExecFaqCollapse{{ $i }}"
                            class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                            aria-labelledby="oeExecFaqHeading{{ $i }}"
                            data-bs-parent="#oeExecFaqAccordion">
                            <div class="accordion-body">{{ data_get($faq, 'a', '') }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="oe-exec-banner">
        <div class="container text-center">
            <h2>{{ data_get($cta, 'title', '') }}</h2>
            <p>{{ data_get($cta, 'text', '') }}</p>
            <a href="{{ $applicationHref }}" class="oe-exec-btn-primary">{{ data_get($cta, 'button', '') }}</a>
        </div>
    </section>
</div>

<x-frontend-footer />
