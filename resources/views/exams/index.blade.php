{{-- resources/views/exams/index.blade.php --}}

<x-study-abroad-header />

<link rel="stylesheet" href="{{ asset('css/exam-directory.css') }}">

@php
    $ignExamDirectoryCategories = [
        'ielts' => 'english',
        'pte' => 'english',
        'toefl' => 'english',
        'gre' => 'graduate',
        'gmat' => 'graduate',
    ];

    $ignExamDirectoryIcons = [
        'ielts' => 'bi-mic',
        'pte' => 'bi-mic',
        'toefl' => 'bi-mic',
        'gre' => 'bi-mortarboard',
        'gmat' => 'bi-mortarboard',
    ];
@endphp

<main class="ign-exam-directory-page" id="ignExamDirectoryPage">

    {{-- BREADCRUMB --}}
    <section class="ign-exam-directory-breadcrumb-section">
        <div class="ign-exam-directory-container">
            <nav class="ign-exam-directory-breadcrumb" aria-label="Breadcrumb">

                <a href="{{ route('home') }}">
                    <i class="bi bi-house-door"></i>
                    <span>Home</span>
                </a>

                <i class="bi bi-chevron-right"></i>

                <span>Study Abroad Exams</span>

            </nav>
        </div>
    </section>


    {{-- HERO --}}
    <section class="ign-exam-directory-hero">
        <div class="ign-exam-directory-hero-bg"></div>

        <div class="ign-exam-directory-container">
            <div class="ign-exam-directory-hero-content">

                <span class="ign-exam-directory-eyebrow">
                    STUDY ABROAD EXAMS
                </span>

                <h1 class="ign-exam-directory-title">
                    Explore Exams for Your
                    <span>Study Abroad Journey</span>
                </h1>

                <p class="ign-exam-directory-description">
                    Find the right exam for your university admission,
                    destination and career goals. Explore eligibility,
                    syllabus, pattern, scores and preparation details.
                </p>

                {{-- SEARCH --}}
                <div class="ign-exam-directory-search-wrap">
                    <i class="bi bi-search ign-exam-directory-search-icon"></i>


                    <input type="search" id="ignExamDirectorySearch" class="ign-exam-directory-search"
                        placeholder="Search IELTS, PTE, TOEFL, GRE, GMAT..." autocomplete="off">

                    <button type="button" id="ignExamDirectorySearchButton" class="ign-exam-directory-search-button">
                        Search
                    </button>

                    <button type="button" id="ignExamDirectorySearchClear" class="ign-exam-directory-search-clear"
                        aria-label="Clear search" hidden>
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                {{-- FILTERS --}}
                <div class="ign-exam-directory-filters" id="ignExamDirectoryFilter" role="group"
                    aria-label="Exam categories">

                    <button type="button" class="ign-exam-directory-filter-button is-active" data-category="all" data-category-link="all">
                        All Exams
                    </button>

                    <button type="button" class="ign-exam-directory-filter-button" data-category="english" data-category-link="english">
                        English Proficiency
                    </button>

                    <button type="button" class="ign-exam-directory-filter-button" data-category="graduate" data-category-link="graduate">
                        Graduate Admission
                    </button>

                </div>

            </div>
        </div>
    </section>


    {{-- EXAM DIRECTORY --}}
    <section class="ign-exam-directory-listing">
        <div class="ign-exam-directory-container">

            <div class="ign-exam-directory-section-heading">

                <div>
                    <span class="ign-exam-directory-section-label">
                        EXAM DIRECTORY
                    </span>

                    <h2 class="ign-exam-directory-section-title">
                        Popular Study Abroad Exams
                    </h2>

                    <p class="ign-exam-directory-section-description">
                        Explore popular exams and access detailed information
                        to plan your study abroad journey.
                    </p>
                </div>

                <div class="ign-exam-directory-count-wrap">
                    <strong id="ignExamDirectoryCount">
                        {{ $exams->count() }}
                    </strong>

                    <span>Exams Available</span>
                </div>

            </div>


            {{-- CARDS --}}
            <div class="ign-exam-directory-grid" id="ignExamDirectoryGrid">

                @foreach ($exams as $exam)
                    @php
                        $ignExamDirectoryCategory = $ignExamDirectoryCategories[$exam->slug] ?? 'graduate';

                        $ignExamDirectoryIcon = $ignExamDirectoryIcons[$exam->slug] ?? 'bi-journal-text';
                    @endphp

                    <article class="ign-exam-directory-card" data-category="{{ $ignExamDirectoryCategory }}"
                        data-exam-name="{{ strtolower($exam->name) }}"
                        data-exam-full-name="{{ strtolower($exam->full_name ?? '') }}"
                        data-exam-type="{{ strtolower($exam->exam_type ?? '') }}">

                        <div class="ign-exam-directory-card-top">

                            <div class="ign-exam-directory-card-icon">
                                <i class="bi {{ $ignExamDirectoryIcon }}"></i>
                            </div>

                            <span class="ign-exam-directory-card-badge">
                                {{ $exam->exam_type }}
                            </span>

                        </div>


                        <div class="ign-exam-directory-card-content">

                            <h3 class="ign-exam-directory-card-title">
                                {{ $exam->name }}
                            </h3>

                            <p class="ign-exam-directory-card-full-name">
                                {{ $exam->full_name }}
                            </p>

                            <p class="ign-exam-directory-card-description">
                                Explore eligibility, exam pattern,
                                syllabus, fees, preparation, scores
                                and other important details.
                            </p>

                        </div>


                        <div class="ign-exam-directory-card-explore">

                            <span class="ign-exam-directory-card-explore-label">
                                Explore
                            </span>

                            <div class="ign-exam-directory-card-tags">
                                <span>Overview</span>
                                <span>Eligibility</span>
                                <span>Pattern</span>
                                <span>Syllabus</span>
                                <span>Scores</span>
                                <span>Preparation</span>
                            </div>

                        </div>


                        <div class="ign-exam-directory-card-footer">

                            <a href="{{ route('exams.show', $exam->slug) }}" class="ign-exam-directory-card-link">

                                <span>
                                    View {{ $exam->name }} Details
                                </span>

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </div>

                    </article>
                @endforeach

            </div>


            {{-- NO RESULTS --}}
            <div class="ign-exam-directory-no-results" id="ignExamDirectoryNoResults" hidden>

                <div class="ign-exam-directory-no-results-icon">
                    <i class="bi bi-search"></i>
                </div>

                <h3>No Exams Found</h3>

                <p>
                    Try searching for IELTS, PTE, TOEFL, GRE or GMAT.
                </p>

                <button type="button" id="ignExamDirectoryReset" class="ign-exam-directory-reset-button">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Clear Search
                </button>

            </div>

        </div>
    </section>


    {{-- QUICK COMPARISON --}}
    <section class="ign-exam-directory-comparison" id="ign-exam-directory-comparison">

        <div class="ign-exam-directory-container">

            <div class="ign-exam-directory-section-heading is-centered">

                <span class="ign-exam-directory-section-label">
                    QUICK COMPARISON
                </span>

                <h2 class="ign-exam-directory-section-title">
                    Compare Exams at a Glance
                </h2>

                <p class="ign-exam-directory-section-description">
                    Quickly understand which exam category matches
                    your study abroad goals.
                </p>

            </div>


            <div class="ign-exam-directory-table-wrap">

                <table class="ign-exam-directory-table">

                    <thead>
                        <tr>
                            <th>Exam</th>
                            <th>Exam Type</th>
                            <th>Suitable For</th>
                            <th>Explore</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($exams as $exam)
                            @php
                                $ignExamDirectoryCategory = $ignExamDirectoryCategories[$exam->slug] ?? 'graduate';

                                $ignExamDirectorySuitableFor =
                                    $ignExamDirectoryCategory === 'english'
                                        ? 'Study Abroad'
                                        : ($exam->slug === 'gmat'
                                            ? 'Business / Management'
                                            : 'Graduate Studies');
                            @endphp

                            <tr>

                                <td>
                                    <strong>
                                        {{ $exam->name }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $exam->exam_type }}
                                </td>

                                <td>
                                    {{ $ignExamDirectorySuitableFor }}
                                </td>

                                <td>
                                    <a href="{{ route('exams.show', $exam->slug) }}"
                                        class="ign-exam-directory-table-link">
                                        View Details
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    </section>


    {{-- WHICH EXAM IS RIGHT --}}
    <section class="ign-exam-directory-choice" id="ign-exam-directory-choice">

        <div class="ign-exam-directory-container">

            <div class="ign-exam-directory-section-heading is-centered">

                <span class="ign-exam-directory-section-label">
                    FIND YOUR EXAM
                </span>

                <h2 class="ign-exam-directory-section-title">
                    Which Exam Is Right for You?
                </h2>

                <p class="ign-exam-directory-section-description">
                    Start with your study goal and explore the exam
                    category that fits your journey.
                </p>

            </div>


            <div class="ign-exam-directory-choice-grid">

                {{-- ENGLISH --}}
                <div class="ign-exam-directory-choice-card">

                    <div class="ign-exam-directory-choice-icon">
                        <i class="bi bi-mic"></i>
                    </div>

                    <span class="ign-exam-directory-choice-label">
                        ENGLISH PROFICIENCY
                    </span>

                    <h3>
                        English Proficiency Exams
                    </h3>

                    <p>
                        Need to demonstrate your English language
                        proficiency for studying abroad?
                    </p>

                    <div class="ign-exam-directory-choice-exams">
                        <span>IELTS</span>
                        <span>PTE</span>
                        <span>TOEFL</span>
                    </div>

                    <button type="button" class="ign-exam-directory-choice-link" data-category-target="english" data-category-link="english">

                        Explore English Exams
                        <i class="bi bi-arrow-right"></i>

                    </button>

                </div>


                {{-- GRADUATE --}}
                <div class="ign-exam-directory-choice-card">

                    <div class="ign-exam-directory-choice-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>

                    <span class="ign-exam-directory-choice-label">
                        GRADUATE ADMISSION
                    </span>

                    <h3>
                        Graduate Admission Exams
                    </h3>

                    <p>
                        Planning postgraduate study, graduate school
                        or business education?
                    </p>

                    <div class="ign-exam-directory-choice-exams">
                        <span>GRE</span>
                        <span>GMAT</span>
                    </div>

                    <button type="button" class="ign-exam-directory-choice-link" data-category-target="graduate"  data-category-link="graduate">

                        Explore Graduate Exams
                        <i class="bi bi-arrow-right"></i>

                    </button>

                </div>

            </div>

        </div>
    </section>


    {{-- HOW IT WORKS --}}
    <section class="ign-exam-directory-process" id="ign-exam-directory-process">

        <div class="ign-exam-directory-container">

            <div class="ign-exam-directory-section-heading is-centered">

                <span class="ign-exam-directory-section-label">
                    HOW IT WORKS
                </span>

                <h2 class="ign-exam-directory-section-title">
                    Find the Right Exam in 4 Simple Steps
                </h2>

            </div>


            <div class="ign-exam-directory-process-grid">

                <div class="ign-exam-directory-process-card">

                    <span class="ign-exam-directory-process-number">
                        01
                    </span>

                    <div class="ign-exam-directory-process-icon">
                        <i class="bi bi-search"></i>
                    </div>

                    <h3>
                        Choose Your Exam
                    </h3>

                    <p>
                        Select the exam based on your destination,
                        university and course requirements.
                    </p>

                </div>


                <div class="ign-exam-directory-process-card">

                    <span class="ign-exam-directory-process-number">
                        02
                    </span>

                    <div class="ign-exam-directory-process-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <h3>
                        Explore Details
                    </h3>

                    <p>
                        Check eligibility, application process,
                        pattern, syllabus, fees and more.
                    </p>

                </div>


                <div class="ign-exam-directory-process-card">

                    <span class="ign-exam-directory-process-number">
                        03
                    </span>

                    <div class="ign-exam-directory-process-icon">
                        <i class="bi bi-bar-chart"></i>
                    </div>

                    <h3>
                        Compare Options
                    </h3>

                    <p>
                        Compare exams and understand which test
                        aligns with your admission goals.
                    </p>

                </div>


                <div class="ign-exam-directory-process-card">

                    <span class="ign-exam-directory-process-number">
                        04
                    </span>

                    <div class="ign-exam-directory-process-icon">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>

                    <h3>
                        Prepare & Apply
                    </h3>

                    <p>
                        Build your preparation plan and move
                        forward with your application.
                    </p>

                </div>

            </div>

        </div>
    </section>


    {{-- COUNSELLING CTA --}}
    <section class="ign-exam-directory-cta-section" id="ign-exam-directory-cta">

        <div class="ign-exam-directory-container">

            <div class="ign-exam-directory-cta">

                <div class="ign-exam-directory-cta-content">

                    <span class="ign-exam-directory-cta-label">
                        NEED HELP CHOOSING?
                    </span>

                    <h2>
                        Not Sure Which Exam You Need?
                    </h2>

                    <p>
                        Get expert guidance based on your destination,
                        university, course and admission requirements.
                    </p>

                </div>

                <div class="ign-exam-directory-cta-action">

                    <a href="#" class="ign-exam-directory-cta-button ign-enquiry-popup-trigger"
                                        data-source="Study Abroad Exam - Help Banner">

                        Book a Free Counselling Session

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>


<script src="{{ asset('js/exam-directory.js') }}"></script>

<x-university-enquiry-popup :courses="$courses ?? []" />

<x-new-footer />
