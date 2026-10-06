<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $scholarship->scholarship_name }} | Global Scholarships | Ignition Edutech</title>
    <meta name="description"
        content="{{ Str::limit(strip_tags($scholarship->description_en ?? $scholarship->scholarship_name), 160) }}">
    <link rel="icon" href="{{ asset('img/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/study-abroad-global-scholarship-details.css') }}">
</head>

<body>
    <x-study-abroad-header />
    <main class="sa-scholarship-details">
        {{-- Hero --}}
        <section class="sa-scholarship-detail-hero">
            <div class="sa-scholarship-detail-container">
                {{-- Breadcrumb --}}
                <div class="sa-scholarship-breadcrumb">
                    <a href="{{ route('study-abroad.global-scholarships') }}">
                        <i class="bi bi-house"></i>
                        Global Scholarships
                    </a>
                    <i class="bi bi-chevron-right"></i>
                    <span>Scholarship Details</span>
                </div>
                {{-- Hero Content --}}
                <div class="sa-scholarship-hero-content">
                    <div class="sa-scholarship-hero-left">
                        <div class="sa-scholarship-badges">
                            @if ($scholarship->host_country)
                                <span class="sa-scholarship-country-badge">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    {{ $scholarship->host_country }}
                                </span>
                            @endif
                            @if ($scholarship->scholarship_amount)
                                <span class="sa-scholarship-funding-badge">
                                    <i class="bi bi-award-fill"></i>
                                    {{ $scholarship->scholarship_amount }}
                                </span>
                            @endif
                        </div>
                        <h1>{{ $scholarship->scholarship_name }}</h1>
                        @if ($scholarship->provider)
                            <div class="sa-scholarship-provider">
                                <span class="sa-scholarship-provider-icon">
                                    <i class="bi bi-building"></i>
                                </span>
                                <div>
                                    <small>Scholarship Provider</small>
                                    <strong>{{ $scholarship->provider }}</strong>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="sa-scholarship-hero-id">
                        <span>Scholarship ID</span>
                        <strong>{{ $scholarship->scholarship_id }}</strong>
                    </div>
                </div>
            </div>
        </section>
        {{-- Main Content --}}
        <section class="sa-scholarship-detail-main">
            <div class="sa-scholarship-detail-container">
                <div class="sa-scholarship-detail-layout">
                    {{-- Left --}}
                    <div class="sa-scholarship-detail-primary">
                        {{-- Quick Highlights --}}
                        <div class="sa-scholarship-highlights">
                            @if ($scholarship->host_country)
                                <div class="sa-scholarship-highlight">
                                    <div class="sa-scholarship-highlight-icon">
                                        <i class="bi bi-globe2"></i>
                                    </div>
                                    <div>
                                        <span>Study Destination</span>
                                        <strong>{{ $scholarship->host_country }}</strong>
                                    </div>
                                </div>
                            @endif
                            @if ($scholarship->degree_level)
                                <div class="sa-scholarship-highlight">
                                    <div class="sa-scholarship-highlight-icon">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <div>
                                        <span>Degree Level</span>
                                        <strong>{{ str_replace('|', ', ', $scholarship->degree_level) }}</strong>
                                    </div>
                                </div>
                            @endif
                            @if ($scholarship->duration)
                                <div class="sa-scholarship-highlight">
                                    <div class="sa-scholarship-highlight-icon">
                                        <i class="bi bi-calendar3"></i>
                                    </div>
                                    <div>
                                        <span>Duration</span>
                                        <strong>{{ $scholarship->duration }}</strong>
                                    </div>
                                </div>
                            @endif
                            @if ($scholarship->scholarship_amount)
                                <div class="sa-scholarship-highlight">
                                    <div class="sa-scholarship-highlight-icon">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div>
                                        <span>Funding</span>
                                        <strong>{{ $scholarship->scholarship_amount }}</strong>
                                    </div>
                                </div>
                            @endif
                        </div>
                        {{-- Overview --}}
                        <section class="sa-scholarship-detail-card">
                            <div class="sa-scholarship-section-heading">
                                <div class="sa-scholarship-section-icon">
                                    <i class="bi bi-file-text"></i>
                                </div>
                                <div>
                                    <span>ABOUT THIS SCHOLARSHIP</span>
                                    <h2>Scholarship Overview</h2>
                                </div>
                            </div>
                            <div class="sa-scholarship-description">
                                {!! nl2br(
                                    e($scholarship->description_en ?? 'Detailed information about this scholarship is currently unavailable.'),
                                ) !!}
                            </div>
                        </section>
                        {{-- Scholarship Information --}}
                        <section class="sa-scholarship-detail-card">
                            <div class="sa-scholarship-section-heading">
                                <div class="sa-scholarship-section-icon">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <div>
                                    <span>SCHOLARSHIP INFORMATION</span>
                                    <h2>Key Information</h2>
                                </div>
                            </div>
                            <div class="sa-scholarship-info-grid">
                                @if ($scholarship->host_country)
                                    <div class="sa-scholarship-info-item">
                                        <span>Destination</span>
                                        <strong>
                                            <i class="bi bi-geo-alt"></i>
                                            {{ $scholarship->host_country }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->provider)
                                    <div class="sa-scholarship-info-item">
                                        <span>Provider</span>
                                        <strong>
                                            <i class="bi bi-building"></i>
                                            {{ $scholarship->provider }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->degree_level)
                                    <div class="sa-scholarship-info-item">
                                        <span>Degree Level</span>
                                        <strong>
                                            <i class="bi bi-mortarboard"></i>
                                            {{ str_replace('|', ', ', $scholarship->degree_level) }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->duration)
                                    <div class="sa-scholarship-info-item">
                                        <span>Duration</span>
                                        <strong>
                                            <i class="bi bi-clock"></i>
                                            {{ $scholarship->duration }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->scholarship_amount)
                                    <div class="sa-scholarship-info-item">
                                        <span>Funding</span>
                                        <strong>
                                            <i class="bi bi-wallet2"></i>
                                            {{ $scholarship->scholarship_amount }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->target_groups)
                                    <div class="sa-scholarship-info-item">
                                        <span>Target Group</span>
                                        <strong>
                                            <i class="bi bi-people"></i>
                                            {{ $scholarship->target_groups }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->eligible_countries)
                                    <div class="sa-scholarship-info-item">
                                        <span>Eligible Countries</span>
                                        <strong>
                                            <i class="bi bi-passport"></i>
                                            {{ $scholarship->eligible_countries }}
                                        </strong>
                                    </div>
                                @endif
                                @if ($scholarship->study_purpose)
                                    <div class="sa-scholarship-info-item">
                                        <span>Study Purpose</span>
                                        <strong>
                                            <i class="bi bi-bookmark-check"></i>
                                            {{ str_replace('|', ', ', $scholarship->study_purpose) }}
                                        </strong>
                                    </div>
                                @endif
                            </div>
                        </section>
                        {{-- Subject Areas --}}
                        @if ($scholarship->subject_areas)
                            <section class="sa-scholarship-detail-card">
                                <div class="sa-scholarship-section-heading">
                                    <div class="sa-scholarship-section-icon">
                                        <i class="bi bi-grid"></i>
                                    </div>
                                    <div>
                                        <span>AREAS OF STUDY</span>
                                        <h2>Subject Areas</h2>
                                    </div>
                                </div>
                                <div class="sa-scholarship-tags">
                                    @foreach (explode('|', $scholarship->subject_areas) as $subject)
                                        @if (trim($subject))
                                            <span class="sa-scholarship-tag">
                                                <i class="bi bi-check-circle-fill"></i>
                                                {{ trim($subject) }}
                                            </span>
                                        @endif
                                    @endforeach
                                </div>
                            </section>
                        @endif
                        {{-- Eligibility --}}
                        @if ($scholarship->eligible_countries || $scholarship->target_groups)
                            <section class="sa-scholarship-detail-card">
                                <div class="sa-scholarship-section-heading">
                                    <div class="sa-scholarship-section-icon">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                    <div>
                                        <span>ELIGIBILITY</span>
                                        <h2>Who Can Apply?</h2>
                                    </div>
                                </div>
                                <div class="sa-scholarship-eligibility">
                                    @if ($scholarship->eligible_countries)
                                        <div class="sa-scholarship-eligibility-item">
                                            <div>
                                                <i class="bi bi-globe"></i>
                                            </div>
                                            <section>
                                                <span>Eligible Countries</span>
                                                <p>{{ $scholarship->eligible_countries }}</p>
                                            </section>
                                        </div>
                                    @endif
                                    @if ($scholarship->target_groups)
                                        <div class="sa-scholarship-eligibility-item">
                                            <div>
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <section>
                                                <span>Target Applicants</span>
                                                <p>{{ $scholarship->target_groups }}</p>
                                            </section>
                                        </div>
                                    @endif
                                </div>
                            </section>
                        @endif
                    </div>
                    {{-- Right Sidebar --}}
                    <aside class="sa-scholarship-detail-sidebar">
                        <div class="sa-scholarship-apply-card">
                            <div class="sa-scholarship-apply-top">
                                <div class="sa-scholarship-apply-icon">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <span>Scholarship Opportunity</span>
                            </div>
                            <h3>Ready to start your study abroad journey?</h3>
                            <p>Get expert guidance on scholarships, universities, applications and your study abroad
                                plans.</p>
                            <a href="{{ route('study-abroad.application') }}" class="sa-scholarship-apply-btn">
                                Apply Now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="sa-scholarship-apply-note">
                                <i class="bi bi-shield-check"></i>
                                <span>Get guidance from our study abroad experts.</span>
                            </div>
                        </div>
                        {{-- Summary --}}
                        <div class="sa-scholarship-summary-card">
                            <h3>Scholarship Summary</h3>
                            @if ($scholarship->host_country)
                                <div class="sa-scholarship-summary-row">
                                    <span>
                                        <i class="bi bi-globe2"></i>
                                        Country
                                    </span>
                                    <strong>{{ $scholarship->host_country }}</strong>
                                </div>
                            @endif
                            @if ($scholarship->degree_level)
                                <div class="sa-scholarship-summary-row">
                                    <span>
                                        <i class="bi bi-mortarboard"></i>
                                        Level
                                    </span>
                                    <strong>{{ str_replace('|', ', ', $scholarship->degree_level) }}</strong>
                                </div>
                            @endif
                            @if ($scholarship->duration)
                                <div class="sa-scholarship-summary-row">
                                    <span>
                                        <i class="bi bi-calendar"></i>
                                        Duration
                                    </span>
                                    <strong>{{ $scholarship->duration }}</strong>
                                </div>
                            @endif
                            @if ($scholarship->scholarship_amount)
                                <div class="sa-scholarship-summary-row">
                                    <span>
                                        <i class="bi bi-cash"></i>
                                        Funding
                                    </span>
                                    <strong>{{ $scholarship->scholarship_amount }}</strong>
                                </div>
                            @endif
                        </div>
                        {{-- Back --}}
                        <a href="{{ route('study-abroad.global-scholarships') }}" class="sa-scholarship-back-btn">
                            <i class="bi bi-arrow-left"></i>
                            Explore More Scholarships
                        </a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
    <x-frontend-footer />
</body>

</html>
