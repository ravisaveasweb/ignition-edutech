
<x-frontend-header />
<link rel="stylesheet" href="{{ asset('css/entrance-exam.css') }}?v=5">

@php
    $categories = collect($exams)
        ->pluck('category')
        ->filter()
        ->unique()
        ->sort()
        ->values();

    $popularExams = collect($exams)->filter(function ($exam) {
        return filter_var($exam['popular'] ?? false, FILTER_VALIDATE_BOOLEAN);
    })->values();

    $categoryIcons = [
        'Engineering' => 'bi-cpu',
        'Medical' => 'bi-heart-pulse',
        'Management' => 'bi-briefcase',
        'Law' => 'bi-bank',
        'Design' => 'bi-palette',
        'Design & Fashion' => 'bi-palette',
        'University' => 'bi-building',
        'University Entrance' => 'bi-building',
        'Architecture' => 'bi-rulers',
        'Government' => 'bi-shield-check',
    ];

    $categoryColors = [
        'Engineering' => 'ign-ee-icon-orange',
        'Medical' => 'ign-ee-icon-green',
        'Management' => 'ign-ee-icon-blue',
        'Law' => 'ign-ee-icon-purple',
        'Design' => 'ign-ee-icon-pink',
        'Design & Fashion' => 'ign-ee-icon-pink',
        'University' => 'ign-ee-icon-teal',
        'University Entrance' => 'ign-ee-icon-teal',
        'Architecture' => 'ign-ee-icon-yellow',
        'Government' => 'ign-ee-icon-gray',
    ];

    $categoryLabels = [
        'Design' => 'Design & Fashion',
        'University' => 'University Admissions',
        'University Entrance' => 'University Admissions',
        'Government' => 'Government & Defence',
    ];

    $categoryDescriptions = [
        'Engineering' => 'Explore engineering entrance exams',
        'Medical' => 'Explore medical entrance exams',
        'Management' => 'Explore management entrance exams',
        'Law' => 'Explore law entrance exams',
        'Design' => 'Explore design and fashion exams',
        'Design & Fashion' => 'Explore design and fashion exams',
        'University' => 'Explore university admission exams',
        'University Entrance' => 'Explore university admission exams',
        'Architecture' => 'Explore architecture entrance exams',
        'Government' => 'Explore government and defence exams',
    ];

    $qualificationOptions = collect($exams)
        ->pluck('qualification')
        ->filter()
        ->unique()
        ->sort()
        ->values();

    $heroCategories = $categories->take(3);
@endphp

<main class="ign-ee-page">
    {{-- Hero --}}
    <section class="ign-ee-hero">
        <div class="ign-ee-hero-decoration ign-ee-hero-decoration-one"></div>
        <div class="ign-ee-hero-decoration ign-ee-hero-decoration-two"></div>

        <div class="ign-ee-container ign-ee-hero-content">
            <span class="ign-ee-eyebrow">
                <i class="bi bi-stars"></i> YOUR FUTURE STARTS HERE
            </span>

            <h1>Find the Right <span>Entrance Exam</span> for Your Future</h1>

            <p>Explore entrance exams across India. Discover eligibility, application steps, syllabus, exam patterns and admission details—all in one place.</p>

            <form class="ign-ee-search-box" id="ignEeSearchForm" role="search">
                <i class="bi bi-search"></i>
                <input type="search" id="ignEeSearchInput" placeholder="Search exams, courses or exam names..." aria-label="Search entrance exams">
                <button type="submit">Search Exams <i class="bi bi-arrow-right"></i></button>
            </form>

            {{-- Popular searches from config --}}
            <div class="ign-ee-popular-searches">
                <span>Popular:</span>
                @forelse ($popularExams->take(4) as $exam)
                    <button type="button" data-search="{{ $exam['name'] ?? $exam['shortName'] ?? '' }}">
                        {{ $exam['shortName'] ?? $exam['name'] ?? 'Entrance Exam' }}
                    </button>
                @empty
                    <span>Explore the exam directory below.</span>
                @endforelse
            </div>

            {{-- Dynamic category statistics --}}
            <div class="ign-ee-hero-stats">
                @forelse ($heroCategories as $category)
                    <div>
                        <strong>{{ $categoryLabels[$category] ?? $category }}</strong>
                        <span>
                            {{ collect($exams)->where('category', $category)->count() }}
                            {{ collect($exams)->where('category', $category)->count() === 1 ? 'exam' : 'exams' }}
                        </span>
                    </div>
                @empty
                    <div>
                        <strong>{{ count($exams) }}</strong>
                        <span>Entrance exams</span>
                    </div>
                @endforelse

                <div>
                    <strong>{{ count($exams) }}+</strong>
                    <span>Exams to explore</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Dynamic categories --}}
    <section class="ign-ee-section ign-ee-category-section" id="ign-ee-categories">
        <div class="ign-ee-container">
            <div class="ign-ee-section-heading">
                <div>
                    <span class="ign-ee-section-label">EXPLORE BY INTEREST</span>
                    <h2>Browse Entrance Exams by Category</h2>
                    <p>Start with the stream you want to study.</p>
                </div>
            </div>

            <div class="ign-ee-category-grid">
                @forelse ($categories as $category)
                    @php
                        $categoryCount = collect($exams)->where('category', $category)->count();
                    @endphp

                    <button
                        type="button"
                        class="ign-ee-category-card"
                        data-category="{{ $category }}"
                        aria-label="Explore {{ $categoryLabels[$category] ?? $category }} exams"
                    >
                        <span class="ign-ee-category-icon {{ $categoryColors[$category] ?? 'ign-ee-icon-orange' }}">
                            <i class="bi {{ $categoryIcons[$category] ?? 'bi-mortarboard' }}"></i>
                        </span>

                        <strong>{{ $categoryLabels[$category] ?? $category }}</strong>

                        <span>
                            {{ $categoryCount }}
                            {{ $categoryCount === 1 ? 'exam available' : 'exams available' }}
                        </span>

                        <i class="bi bi-arrow-up-right ign-ee-category-arrow"></i>
                    </button>
                @empty
                    <p>No exam categories are available yet.</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Popular exams: cards rendered by entrance-exam.js --}}
    <section class="ign-ee-section ign-ee-popular-section" id="ign-ee-popular">
        <div class="ign-ee-container">
            <div class="ign-ee-section-heading ign-ee-heading-row">
                <div>
                    <span class="ign-ee-section-label">STUDENT FAVOURITES</span>
                    <h2>Popular Entrance Exams</h2>
                    <p>Explore some of India's well-known entrance exams.</p>
                </div>

                <a href="#ign-ee-exam-list" class="ign-ee-text-link">
                    View all exams <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="ign-ee-popular-grid" id="ignEePopularGrid"></div>
        </div>
    </section>

    {{-- Exam directory --}}
    <section class="ign-ee-section ign-ee-list-section" id="ign-ee-exam-list">
        <div class="ign-ee-container">
            <div class="ign-ee-section-heading">
                <span class="ign-ee-section-label">YOUR EXAM DIRECTORY</span>
                <h2>Explore Entrance Exams in India</h2>
                <p>Search and filter exams based on your preferred stream and qualification.</p>
            </div>

            <div class="ign-ee-filter-panel">
                <div class="ign-ee-filter-search">
                    <i class="bi bi-search"></i>
                    <input type="search" id="ignEeDirectorySearch" placeholder="Search by exam name or course..." aria-label="Search exam directory">
                </div>

                {{-- Dynamic category filter --}}
                <select id="ignEeCategoryFilter" aria-label="Filter by category">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}">
                            {{ $categoryLabels[$category] ?? $category }}
                        </option>
                    @endforeach
                </select>

                {{-- Dynamic qualification filter --}}
                <select id="ignEeQualificationFilter" aria-label="Filter by qualification">
                    <option value="">All Qualifications</option>
                    @foreach ($qualificationOptions as $qualification)
                        <option value="{{ $qualification }}">
                            {{ $qualification }}
                        </option>
                    @endforeach
                </select>

                <button type="button" class="ign-ee-reset-button" id="ignEeResetFilters">
                    <i class="bi bi-arrow-counterclockwise"></i> Reset
                </button>
            </div>

            <div class="ign-ee-results-summary">
                <p id="ignEeResultsCount" aria-live="polite">Loading exams...</p>
                <span>Choose an exam to explore its details.</span>
            </div>

            {{-- Cards and filters handled by JavaScript --}}
            <div class="ign-ee-exam-grid" id="ignEeExamGrid"></div>

            <div class="ign-ee-empty-state" id="ignEeEmptyState" hidden>
                <i class="bi bi-search"></i>
                <h3>No exams found</h3>
                <p>Try another search term or change your filters.</p>
                <button type="button" id="ignEeEmptyReset">Clear Filters</button>
            </div>
        </div>
    </section>

    {{-- Guidance --}}
    <section class="ign-ee-guidance-section">
        <div class="ign-ee-container ign-ee-guidance-inner">
            <div class="ign-ee-guidance-icon">
                <i class="bi bi-compass"></i>
            </div>

            <div class="ign-ee-guidance-copy">
                <span class="ign-ee-section-label">NOT SURE WHERE TO START?</span>
                <h2>Find an exam that matches your goals.</h2>
                <p>Compare streams, understand eligibility and plan your next step with confidence.</p>
            </div>

            <a href="#ign-ee-categories" class="ign-ee-guidance-button">
                Explore Categories <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="ign-ee-section ign-ee-faq-section">
        <div class="ign-ee-container ign-ee-faq-layout">
            <div class="ign-ee-faq-intro">
                <span class="ign-ee-section-label">QUICK ANSWERS</span>
                <h2>Frequently Asked Questions</h2>
                <p>Learn how to use the entrance exam directory.</p>
            </div>

            <div class="ign-ee-faq-list">
                <details>
                    <summary>Which entrance exams are available in India?</summary>
                    <p>India has entrance exams for engineering, medical, management, law, design, architecture, university admissions and government careers. Explore the available categories above.</p>
                </details>

                <details>
                    <summary>How can I find an exam based on my qualification?</summary>
                    <p>Use the qualification filter to explore exams listed for your education level. Always confirm the official eligibility criteria before applying.</p>
                </details>

                <details>
                    <summary>Where can I find exam dates and application forms?</summary>
                    <p>Visit the relevant exam's official website to confirm exam dates and application windows.</p>
                </details>

                <details>
                    <summary>What information should an exam detail page contain?</summary>
                    <p>A useful exam page should explain eligibility, application steps, important dates, exam pattern, syllabus, admit card, results, counselling and official links.</p>
                </details>
            </div>
        </div>
    </section>
</main>

<script>
    window.entranceExamData = @json($exams);
</script>
<script src="{{ asset('js/entrance-exam.js') }}?v=5"></script>

<x-frontend-footer />
