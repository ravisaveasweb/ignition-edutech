
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $exam->name }} 2026 - {{ $exam->full_name }} | Ignition Edutech</title>

    <link rel="stylesheet" href="{{ asset('css/exam.css') }}">
</head>

<body>

    {{-- Header --}}
    @include('components.frontend-header')

    {{-- Breadcrumb --}}
    <div class="exam-breadcrumb">
        <div class="exam-container">
            <div class="breadcrumb-inner">
                <a href="/">Home</a>
                <span>/</span>
                <span>Exams</span>
                <span>/</span>
                <strong>{{ $exam->name }}</strong>
            </div>
        </div>
    </div>

    {{-- Exam Hero --}}
    <section class="exam-hero">
        <div class="exam-container">
            <div class="exam-hero-content">
                <div class="exam-hero-left">
                    <h1 class="exam-title">{{ $exam->name }} 2026</h1>

                    @if ($exam->full_name)
                        <p class="exam-full-name">{{ $exam->full_name }}</p>
                    @endif

                    @if ($exam->exam_type)
                        <span class="exam-type">{{ $exam->exam_type }}</span>
                    @endif
                </div>

                @if ($exam->official_website)
                    <div class="exam-hero-right">
                        <a href="{{ $exam->official_website }}" target="_blank" rel="noopener noreferrer"
                            class="exam-hero-button">
                            Official Website
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Section Navigation --}}
    <div class="exam-tabs">
        <div class="exam-container">
            <div class="exam-tabs-inner">
                @foreach ($exam->sections as $section)
                    <a href="#section-{{ $section->id }}" class="exam-tab">
                        {{ $section->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <main class="exam-main">
        <div class="exam-container">
            <div class="exam-layout">

                {{-- Sidebar --}}
                <aside class="exam-sidebar">
                    <div class="sidebar-title">
                        {{ $exam->name }} Information
                    </div>

                    <ul class="sidebar-list">
                        @foreach ($exam->sections as $section)
                            <li>
                                <a href="#section-{{ $section->id }}">
                                    {{ $section->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                {{-- Content --}}
                <div class="exam-content">

                    {{-- Overview --}}
                    <div class="content-card">
                        <div class="content-card-header">
                            <h2>{{ $exam->name }} 2026 - Overview</h2>
                        </div>

                        <div class="content-card-body">
                            @if ($exam->description)
                                {!! $exam->description !!}
                            @elseif ($exam->short_description)
                                <p>{{ $exam->short_description }}</p>
                            @else
                                <p>
                                    Get complete information about {{ $exam->name }}, including
                                    eligibility, application process, exam pattern, syllabus,
                                    fees, preparation and results.
                                </p>
                            @endif
                        </div>

                        {{-- Exam Information --}}
                        <div class="exam-info-grid">
                            @if ($exam->duration)
                                <div class="exam-info-item">
                                    <span class="exam-info-label">Duration</span>
                                    <span class="exam-info-value">{{ $exam->duration }}</span>
                                </div>
                            @endif

                            @if ($exam->mode)
                                <div class="exam-info-item">
                                    <span class="exam-info-label">Mode</span>
                                    <span class="exam-info-value">{{ $exam->mode }}</span>
                                </div>
                            @endif

                            @if ($exam->score_range)
                                <div class="exam-info-item">
                                    <span class="exam-info-label">Score Range</span>
                                    <span class="exam-info-value">{{ $exam->score_range }}</span>
                                </div>
                            @endif

                            @if ($exam->validity)
                                <div class="exam-info-item">
                                    <span class="exam-info-label">Validity</span>
                                    <span class="exam-info-value">{{ $exam->validity }}</span>
                                </div>
                            @endif

                            @if ($exam->conducted_by)
                                <div class="exam-info-item">
                                    <span class="exam-info-label">Conducted By</span>
                                    <span class="exam-info-value">{{ $exam->conducted_by }}</span>
                                </div>
                            @endif

                            @if ($exam->application_fee)
                                <div class="exam-info-item">
                                    <span class="exam-info-label">Application Fee</span>
                                    <span class="exam-info-value">
                                        ₹{{ number_format($exam->application_fee, 2) }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Dynamic Sections --}}
                    @foreach ($exam->sections as $section)
                        <div class="content-card" id="section-{{ $section->id }}">
                            <div class="content-card-header">
                                <h2>{{ $section->title }}</h2>
                            </div>

                            <div class="content-card-body">
                                {!! $section->content !!}
                            </div>
                        </div>
                    @endforeach

                    {{-- CTA --}}
                    <div class="exam-cta">
                        <h2>Need Help With {{ $exam->name }}?</h2>
                        <p>Get guidance from our study abroad experts.</p>

                        <a href="{{ route('study-abroad.application') }}" class="cta-button">
                            Apply Now
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    @include('components.frontend-footer')

</body>

</html>
