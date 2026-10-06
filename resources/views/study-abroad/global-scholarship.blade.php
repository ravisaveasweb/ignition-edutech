<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Scholarships | Study Abroad | Ignition Edutech</title>
    <meta name="description"
        content="Find global scholarships to study abroad based on your destination, degree, subject and funding requirements.">
    <link rel="icon" href="{{ asset('img/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/study-abroad-global-scholarship.css') }}">
</head>

<body>

    <x-study-abroad-header />

    @php
        $selectedCountries = (array) request('country', []);
        $selectedDegrees = (array) request('degree', []);
        $selectedSubjects = (array) request('subject', []);
        $selectedFundings = (array) request('funding', []);

        $flagCodes = [
            'USA' => 'us',
            'United States' => 'us',
            'UK' => 'gb',
            'United Kingdom' => 'gb',
            'Canada' => 'ca',
            'Australia' => 'au',
            'Germany' => 'de',
            'South Korea' => 'kr',
            'Korea' => 'kr',
            'China' => 'cn',
            'Japan' => 'jp',
            'France' => 'fr',
            'Italy' => 'it',
            'Spain' => 'es',
            'Ireland' => 'ie',
            'New Zealand' => 'nz',
            'Netherlands' => 'nl',
            'Sweden' => 'se',
            'Switzerland' => 'ch',
            'Singapore' => 'sg',
            'Malaysia' => 'my',
            'Hong Kong' => 'hk',
            'Taiwan' => 'tw',
            'Finland' => 'fi',
            'Denmark' => 'dk',
            'Norway' => 'no',
            'Belgium' => 'be',
            'Austria' => 'at',
            'Poland' => 'pl',
            'Portugal' => 'pt',
            'Russia' => 'ru',
            'Turkey' => 'tr',
            'United Arab Emirates' => 'ae',
            'UAE' => 'ae',
            'Saudi Arabia' => 'sa',
            'India' => 'in',
            'Thailand' => 'th',
            'Indonesia' => 'id',
            'Vietnam' => 'vn',
            'South Africa' => 'za',
            'Brazil' => 'br',
            'Mexico' => 'mx',
            'Argentina' => 'ar',
        ];

        $getFlagCode = function ($country) use ($flagCodes) {
            return $flagCodes[trim($country)] ?? null;
        };

        $subjectOptions = collect($subjects)
            ->flatMap(function ($subject) {
                return preg_split('/\s*\|\s*/', $subject);
            })
            ->map(fn($subject) => trim($subject))
            ->filter()
            ->unique()
            ->sort()
            ->values();

        $degreeOptions = collect($degrees)
            ->flatMap(function ($degree) {
                return preg_split('/\s*\|\s*/', $degree);
            })
            ->map(fn($degree) => trim($degree))
            ->filter()
            ->unique()
            ->sort()
            ->values();
    @endphp

    <main class="sa-global-scholarship">

        {{-- 01. HERO --}}
        <section class="sa-global-scholarship-hero">
            <div class="sa-global-scholarship-container">

                <div class="sa-global-scholarship-hero-heading">
                    <div>
                        <span class="sa-global-scholarship-section-label"></span>
                        <h1>FIND YOUR <strong>SCHOLARSHIP</strong></h1>
                        <p>Search scholarships to study abroad based on your destination, degree and subject.</p>
                    </div>

                    <a href="{{ route('study-abroad.application') }}" class="sa-global-scholarship-apply-btn">
                        APPLY NOW
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <form method="GET" action="{{ route('study-abroad.global-scholarships') }}"
                    class="sa-global-scholarship-hero-search">
                    <i class="bi bi-search"></i>
                    <input type="text" name="search" id="globalScholarshipHeroSearch"
                        value="{{ request('search') }}" placeholder="Search scholarship, university or country...">
                    <button type="submit" id="globalScholarshipHeroSearchBtn">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

                {{-- HERO FILTER DROPDOWNS --}}
                <div class="sgs-filter-dropdowns">

                    {{-- COUNTRY --}}
                    <div class="sgs-filter-dropdown" data-dropdown="country">
                        <button type="button" class="sgs-filter-trigger">
                            <span class="sgs-filter-trigger-left">
                                <i class="bi bi-globe2"></i>
                                <span>Country</span>
                            </span>
                            <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                        </button>

                        <div class="sgs-filter-menu">
                            <div class="sgs-filter-menu-header">
                                <div>
                                    <strong>Choose Country</strong>
                                    <small>Select one or more destinations</small>
                                </div>
                                <button type="button" class="sgs-filter-close">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>

                            <div class="sgs-filter-menu-search">
                                <i class="bi bi-search"></i>
                                <input type="text" class="sgs-dropdown-search" placeholder="Search country...">
                            </div>

                            <div class="sgs-filter-options">
                                @foreach ($countries as $country)
                                    @php
                                        $country = trim($country);
                                        $flagCode = $getFlagCode($country);
                                    @endphp

                                    <label class="sgs-filter-option">
                                        <input type="checkbox" name="country[]" value="{{ $country }}"
                                            data-dropdown-type="country"
                                            {{ in_array($country, $selectedCountries) ? 'checked' : '' }}>

                                        <span class="sgs-option-check">
                                            <i class="bi bi-check"></i>
                                        </span>

                                        @if ($flagCode)
                                            <span class="sgs-option-flag">
                                                <span class="fi fi-{{ $flagCode }}"></span>
                                            </span>
                                        @else
                                            <span class="sgs-option-icon">
                                                <i class="bi bi-globe2"></i>
                                            </span>
                                        @endif

                                        <span class="sgs-option-name">
                                            {{ $country }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>

                            <div class="sgs-filter-menu-footer">
                                <span class="sgs-selected-count">
                                    <strong>0</strong> selected
                                </span>

                                <button type="button" class="sgs-apply-dropdown" data-apply-filter="country">
                                    Apply Filter
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- DEGREE --}}
                    <div class="sgs-filter-dropdown" data-dropdown="degree">
                        <button type="button" class="sgs-filter-trigger">
                            <span class="sgs-filter-trigger-left">
                                <i class="bi bi-mortarboard"></i>
                                <span>Degree</span>
                            </span>
                            <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                        </button>

                        <div class="sgs-filter-menu">
                            <div class="sgs-filter-menu-header">
                                <div>
                                    <strong>Choose Degree</strong>
                                    <small>Select your study level</small>
                                </div>
                                <button type="button" class="sgs-filter-close">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>

                            <div class="sgs-filter-menu-search">
                                <i class="bi bi-search"></i>
                                <input type="text" class="sgs-dropdown-search" placeholder="Search degree...">
                            </div>

                            <div class="sgs-filter-options">
                                @foreach ($degreeOptions as $degree)
                                    <label class="sgs-filter-option">
                                        <input type="checkbox" name="degree[]" value="{{ $degree }}"
                                            data-dropdown-type="degree"
                                            {{ in_array($degree, $selectedDegrees) ? 'checked' : '' }}>

                                        <span class="sgs-option-check">
                                            <i class="bi bi-check"></i>
                                        </span>

                                        <span class="sgs-option-icon">
                                            <i class="bi bi-mortarboard"></i>
                                        </span>

                                        <span class="sgs-option-name">
                                            {{ $degree }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>

                            <div class="sgs-filter-menu-footer">
                                <span class="sgs-selected-count">
                                    <strong>0</strong> selected
                                </span>

                                <button type="button" class="sgs-apply-dropdown" data-apply-filter="degree">
                                    Apply Filter
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- SUBJECT --}}
                    <div class="sgs-filter-dropdown" data-dropdown="subject">
                        <button type="button" class="sgs-filter-trigger">
                            <span class="sgs-filter-trigger-left">
                                <i class="bi bi-book"></i>
                                <span>Subject</span>
                            </span>
                            <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                        </button>

                        <div class="sgs-filter-menu">
                            <div class="sgs-filter-menu-header">
                                <div>
                                    <strong>Choose Subject</strong>
                                    <small>Select your area of study</small>
                                </div>
                                <button type="button" class="sgs-filter-close">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>

                            <div class="sgs-filter-menu-search">
                                <i class="bi bi-search"></i>
                                <input type="text" class="sgs-dropdown-search" placeholder="Search subject...">
                            </div>

                            <div class="sgs-filter-options">
                                @foreach ($subjectOptions as $subject)
                                    <label class="sgs-filter-option">
                                        <input type="checkbox" name="subject[]" value="{{ $subject }}"
                                            data-dropdown-type="subject"
                                            {{ in_array($subject, $selectedSubjects) ? 'checked' : '' }}>

                                        <span class="sgs-option-check">
                                            <i class="bi bi-check"></i>
                                        </span>

                                        <span class="sgs-option-icon">
                                            <i class="bi bi-book"></i>
                                        </span>

                                        <span class="sgs-option-name">
                                            {{ $subject }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>

                            <div class="sgs-filter-menu-footer">
                                <span class="sgs-selected-count">
                                    <strong>0</strong> selected
                                </span>

                                <button type="button" class="sgs-apply-dropdown" data-apply-filter="subject">
                                    Apply Filter
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- FUNDING --}}
                    <div class="sgs-filter-dropdown" data-dropdown="funding">
                        <button type="button" class="sgs-filter-trigger">
                            <span class="sgs-filter-trigger-left">
                                <i class="bi bi-cash-stack"></i>
                                <span>Funding</span>
                            </span>
                            <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                        </button>

                        <div class="sgs-filter-menu">
                            <div class="sgs-filter-menu-header">
                                <div>
                                    <strong>Choose Funding</strong>
                                    <small>Select your funding preference</small>
                                </div>
                                <button type="button" class="sgs-filter-close">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>

                            <div class="sgs-filter-menu-search">
                                <i class="bi bi-search"></i>
                                <input type="text" class="sgs-dropdown-search" placeholder="Search funding...">
                            </div>

                            <div class="sgs-filter-options">
                                @foreach ($fundings as $funding)
                                    @php
                                        $funding = trim($funding);
                                    @endphp

                                    <label class="sgs-filter-option">
                                        <input type="checkbox" name="funding[]" value="{{ $funding }}"
                                            data-dropdown-type="funding"
                                            {{ in_array($funding, $selectedFundings) ? 'checked' : '' }}>

                                        <span class="sgs-option-check">
                                            <i class="bi bi-check"></i>
                                        </span>

                                        <span class="sgs-option-icon">
                                            <i class="bi bi-cash-stack"></i>
                                        </span>

                                        <span class="sgs-option-name">
                                            {{ $funding }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>

                            <div class="sgs-filter-menu-footer">
                                <span class="sgs-selected-count">
                                    <strong>0</strong> selected
                                </span>

                                <button type="button" class="sgs-apply-dropdown" data-apply-filter="funding">
                                    Apply Filter
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sa-global-scholarship-available">
                    <i class="bi bi-check-circle-fill"></i>
                    <strong>{{ number_format($totalScholarships) }}</strong>
                    <span>Scholarships Available</span>
                </div>

            </div>
        </section>

        {{-- 02. SCHOLARSHIP DIRECTORY --}}
        <section class="sa-global-scholarship-directory" id="globalScholarshipDirectory">
            <div class="sa-global-scholarship-container">

                <div class="sa-global-scholarship-section-heading">
                    <span></span>
                    <h2>FIND SCHOLARSHIPS</h2>
                    <p>Explore funding opportunities that match your study goals and destination.</p>
                    <strong>
                        {{ number_format($totalScholarships) }}
                        <small>scholarships available</small>
                    </strong>
                </div>

                <div class="sa-global-scholarship-directory-layout">

                    {{-- FILTER SIDEBAR --}}
                    <aside class="sa-global-scholarship-sidebar">

                        <div class="sa-global-scholarship-sidebar-heading">
                            <div>
                                <i class="bi bi-sliders"></i>
                                <strong>FILTER</strong>
                            </div>

                            <a href="{{ route('study-abroad.global-scholarships') }}" id="globalScholarshipClearAll">
                                Clear All
                            </a>
                        </div>

                        {{-- COUNTRY DROPDOWN --}}
                        <div class="sgs-filter-dropdown sgs-directory-filter-dropdown" data-dropdown="country">

                            <button type="button" class="sgs-filter-trigger">
                                <span class="sgs-filter-trigger-left">
                                    <i class="bi bi-globe2"></i>
                                    <span>Country</span>
                                </span>
                                <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                            </button>

                            <div class="sgs-filter-menu">

                                <div class="sgs-filter-menu-header">
                                    <div>
                                        <strong>Choose Country</strong>
                                        <small>Select one or more destinations</small>
                                    </div>

                                    <button type="button" class="sgs-filter-close">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                <div class="sgs-filter-menu-search">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="sgs-dropdown-search"
                                        placeholder="Search country...">
                                </div>

                                <div class="sgs-filter-options">

                                    @foreach ($countries as $country)
                                        @php
                                            $country = trim($country);
                                            $flagCode = $getFlagCode($country);
                                        @endphp

                                        <label class="sgs-filter-option">

                                            <input type="checkbox" name="country[]" value="{{ $country }}"
                                                data-dropdown-type="country"
                                                {{ in_array($country, $selectedCountries) ? 'checked' : '' }}>

                                            <span class="sgs-option-check">
                                                <i class="bi bi-check"></i>
                                            </span>

                                            @if ($flagCode)
                                                <span class="sgs-option-flag">
                                                    <span class="fi fi-{{ $flagCode }}"></span>
                                                </span>
                                            @else
                                                <span class="sgs-option-icon">
                                                    <i class="bi bi-globe2"></i>
                                                </span>
                                            @endif

                                            <span class="sgs-option-name">
                                                {{ $country }}
                                            </span>

                                        </label>
                                    @endforeach

                                </div>

                                <div class="sgs-filter-menu-footer">
                                    <span class="sgs-selected-count">
                                        <strong>0</strong> selected
                                    </span>

                                    <button type="button" class="sgs-apply-dropdown" data-apply-filter="country">
                                        Apply Filter
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        {{-- DEGREE DROPDOWN --}}
                        <div class="sgs-filter-dropdown sgs-directory-filter-dropdown" data-dropdown="degree">

                            <button type="button" class="sgs-filter-trigger">
                                <span class="sgs-filter-trigger-left">
                                    <i class="bi bi-mortarboard"></i>
                                    <span>Degree</span>
                                </span>
                                <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                            </button>

                            <div class="sgs-filter-menu">

                                <div class="sgs-filter-menu-header">
                                    <div>
                                        <strong>Choose Degree</strong>
                                        <small>Select your study level</small>
                                    </div>

                                    <button type="button" class="sgs-filter-close">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                <div class="sgs-filter-menu-search">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="sgs-dropdown-search" placeholder="Search degree...">
                                </div>

                                <div class="sgs-filter-options">

                                    @foreach ($degreeOptions as $degree)
                                        <label class="sgs-filter-option">

                                            <input type="checkbox" name="degree[]" value="{{ $degree }}"
                                                data-dropdown-type="degree"
                                                {{ in_array($degree, $selectedDegrees) ? 'checked' : '' }}>

                                            <span class="sgs-option-check">
                                                <i class="bi bi-check"></i>
                                            </span>

                                            <span class="sgs-option-icon">
                                                <i class="bi bi-mortarboard"></i>
                                            </span>

                                            <span class="sgs-option-name">
                                                {{ $degree }}
                                            </span>

                                        </label>
                                    @endforeach

                                </div>

                                <div class="sgs-filter-menu-footer">
                                    <span class="sgs-selected-count">
                                        <strong>0</strong> selected
                                    </span>

                                    <button type="button" class="sgs-apply-dropdown" data-apply-filter="degree">
                                        Apply Filter
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        {{-- SUBJECT DROPDOWN --}}
                        <div class="sgs-filter-dropdown sgs-directory-filter-dropdown" data-dropdown="subject">

                            <button type="button" class="sgs-filter-trigger">
                                <span class="sgs-filter-trigger-left">
                                    <i class="bi bi-book"></i>
                                    <span>Subject</span>
                                </span>
                                <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                            </button>

                            <div class="sgs-filter-menu">

                                <div class="sgs-filter-menu-header">
                                    <div>
                                        <strong>Choose Subject</strong>
                                        <small>Select your area of study</small>
                                    </div>

                                    <button type="button" class="sgs-filter-close">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                <div class="sgs-filter-menu-search">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="sgs-dropdown-search"
                                        placeholder="Search subject...">
                                </div>

                                <div class="sgs-filter-options">

                                    @foreach ($subjectOptions as $subject)
                                        <label class="sgs-filter-option">

                                            <input type="checkbox" name="subject[]" value="{{ $subject }}"
                                                data-dropdown-type="subject"
                                                {{ in_array($subject, $selectedSubjects) ? 'checked' : '' }}>

                                            <span class="sgs-option-check">
                                                <i class="bi bi-check"></i>
                                            </span>

                                            <span class="sgs-option-icon">
                                                <i class="bi bi-book"></i>
                                            </span>

                                            <span class="sgs-option-name">
                                                {{ $subject }}
                                            </span>

                                        </label>
                                    @endforeach

                                </div>

                                <div class="sgs-filter-menu-footer">
                                    <span class="sgs-selected-count">
                                        <strong>0</strong> selected
                                    </span>

                                    <button type="button" class="sgs-apply-dropdown" data-apply-filter="subject">
                                        Apply Filter
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        {{-- FUNDING DROPDOWN --}}
                        <div class="sgs-filter-dropdown sgs-directory-filter-dropdown" data-dropdown="funding">

                            <button type="button" class="sgs-filter-trigger">
                                <span class="sgs-filter-trigger-left">
                                    <i class="bi bi-cash-stack"></i>
                                    <span>Funding</span>
                                </span>
                                <i class="bi bi-chevron-down sgs-filter-arrow"></i>
                            </button>

                            <div class="sgs-filter-menu">

                                <div class="sgs-filter-menu-header">
                                    <div>
                                        <strong>Choose Funding</strong>
                                        <small>Select your funding preference</small>
                                    </div>

                                    <button type="button" class="sgs-filter-close">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                <div class="sgs-filter-menu-search">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="sgs-dropdown-search"
                                        placeholder="Search funding...">
                                </div>

                                <div class="sgs-filter-options">

                                    @foreach ($fundings as $funding)
                                        @php
                                            $funding = trim($funding);
                                        @endphp

                                        <label class="sgs-filter-option">

                                            <input type="checkbox" name="funding[]" value="{{ $funding }}"
                                                data-dropdown-type="funding"
                                                {{ in_array($funding, $selectedFundings) ? 'checked' : '' }}>

                                            <span class="sgs-option-check">
                                                <i class="bi bi-check"></i>
                                            </span>

                                            <span class="sgs-option-icon">
                                                <i class="bi bi-cash-stack"></i>
                                            </span>

                                            <span class="sgs-option-name">
                                                {{ $funding }}
                                            </span>

                                        </label>
                                    @endforeach

                                </div>

                                <div class="sgs-filter-menu-footer">
                                    <span class="sgs-selected-count">
                                        <strong>0</strong> selected
                                    </span>

                                    <button type="button" class="sgs-apply-dropdown" data-apply-filter="funding">
                                        Apply Filter
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </aside>

                    {{-- RESULTS --}}
                    <div class="sa-global-scholarship-results-area">

                        <div class="sa-global-scholarship-results-toolbar">

                            <form method="GET" action="{{ route('study-abroad.global-scholarships') }}"
                                class="sa-global-scholarship-directory-search">

                                @foreach ($selectedCountries as $country)
                                    <input type="hidden" name="country[]" value="{{ $country }}">
                                @endforeach

                                @foreach ($selectedDegrees as $degree)
                                    <input type="hidden" name="degree[]" value="{{ $degree }}">
                                @endforeach

                                @foreach ($selectedSubjects as $subject)
                                    <input type="hidden" name="subject[]" value="{{ $subject }}">
                                @endforeach

                                @foreach ($selectedFundings as $funding)
                                    <input type="hidden" name="funding[]" value="{{ $funding }}">
                                @endforeach

                                <input type="hidden" name="sort" value="{{ request('sort', 'relevance') }}">

                                <i class="bi bi-search"></i>

                                <input type="text" name="search" id="globalScholarshipSearch"
                                    value="{{ request('search') }}" placeholder="Search scholarships...">

                            </form>

                            <form method="GET" action="{{ route('study-abroad.global-scholarships') }}"
                                class="sa-global-scholarship-sort">

                                @if (request('search'))
                                    <input type="hidden" name="search" value="{{ request('search') }}">
                                @endif

                                @foreach ($selectedCountries as $country)
                                    <input type="hidden" name="country[]" value="{{ $country }}">
                                @endforeach

                                @foreach ($selectedDegrees as $degree)
                                    <input type="hidden" name="degree[]" value="{{ $degree }}">
                                @endforeach

                                @foreach ($selectedSubjects as $subject)
                                    <input type="hidden" name="subject[]" value="{{ $subject }}">
                                @endforeach

                                @foreach ($selectedFundings as $funding)
                                    <input type="hidden" name="funding[]" value="{{ $funding }}">
                                @endforeach

                                <label for="globalScholarshipSort">SORT:</label>

                                <select id="globalScholarshipSort" name="sort" onchange="this.form.submit()">

                                    <option value="relevance"
                                        {{ request('sort', 'relevance') === 'relevance' ? 'selected' : '' }}>
                                        Relevance
                                    </option>

                                    <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>
                                        Newest
                                    </option>

                                    <option value="funding" {{ request('sort') === 'funding' ? 'selected' : '' }}>
                                        Funding
                                    </option>

                                    <option value="duration" {{ request('sort') === 'duration' ? 'selected' : '' }}>
                                        Duration
                                    </option>

                                </select>
                            </form>
                        </div>

                        {{-- ACTIVE FILTERS --}}
                        <div class="sa-global-scholarship-active-filters" id="globalScholarshipActiveFilters">

                            @if (request('search'))
                                <a href="{{ request()->fullUrlWithQuery(['search' => null, 'page' => null]) }}">
                                    Search: {{ request('search') }}
                                    <i class="bi bi-x"></i>
                                </a>
                            @endif

                            @foreach ($selectedCountries as $country)
                                <a
                                    href="{{ request()->fullUrlWithQuery([
                                        'country' => array_values(array_diff($selectedCountries, [$country])),
                                        'page' => null,
                                    ]) }}">
                                    {{ $country }}
                                    <i class="bi bi-x"></i>
                                </a>
                            @endforeach

                            @foreach ($selectedDegrees as $degree)
                                <a
                                    href="{{ request()->fullUrlWithQuery([
                                        'degree' => array_values(array_diff($selectedDegrees, [$degree])),
                                        'page' => null,
                                    ]) }}">
                                    {{ $degree }}
                                    <i class="bi bi-x"></i>
                                </a>
                            @endforeach

                            @foreach ($selectedSubjects as $subject)
                                <a
                                    href="{{ request()->fullUrlWithQuery([
                                        'subject' => array_values(array_diff($selectedSubjects, [$subject])),
                                        'page' => null,
                                    ]) }}">
                                    {{ $subject }}
                                    <i class="bi bi-x"></i>
                                </a>
                            @endforeach

                            @foreach ($selectedFundings as $funding)
                                <a
                                    href="{{ request()->fullUrlWithQuery([
                                        'funding' => array_values(array_diff($selectedFundings, [$funding])),
                                        'page' => null,
                                    ]) }}">
                                    {{ $funding }}
                                    <i class="bi bi-x"></i>
                                </a>
                            @endforeach

                        </div>

                        {{-- RESULT COUNT --}}
                        <div class="sa-global-scholarship-result-count">
                            <strong id="globalScholarshipResultCount">
                                {{ number_format($scholarships->total()) }}
                            </strong>
                            <span>Scholarships Found</span>
                        </div>

                        {{-- SCHOLARSHIP CARDS --}}
                        @forelse($scholarships as $scholarship)
                            @php
                                $country = trim($scholarship->host_country);
                                $flagCode = $getFlagCode($country);

                                $subjectsCard = collect(preg_split('/\s*\|\s*/', $scholarship->subject_areas ?? ''))
                                    ->filter()
                                    ->values();

                                $degreesCard = collect(preg_split('/\s*\|\s*/', $scholarship->degree_level ?? ''))
                                    ->filter()
                                    ->values();
                            @endphp

                            <article class="sa-global-scholarship-card" data-country="{{ $country }}"
                                data-degree="{{ $scholarship->degree_level }}"
                                data-subject="{{ $scholarship->subject_areas }}"
                                data-funding="{{ $scholarship->scholarship_amount }}">

                                <div class="sa-global-scholarship-card-country">

                                    <span class="sa-global-scholarship-flag">
                                        @if ($flagCode)
                                            <span class="fi fi-{{ $flagCode }}"></span>
                                        @else
                                            <i class="bi bi-globe2"></i>
                                        @endif
                                    </span>

                                    <div>
                                        <small>DESTINATION</small>
                                        <strong>{{ strtoupper($country) }}</strong>
                                    </div>

                                    <span class="sa-global-scholarship-funding">
                                        {{ strtoupper($scholarship->scholarship_amount ?: 'SCHOLARSHIP') }}
                                    </span>

                                </div>

                                <div class="sa-global-scholarship-card-main">

                                    <div>
                                        <h3>{{ $scholarship->scholarship_name }}</h3>

                                        <h4>{{ $scholarship->provider }}</h4>

                                        <div class="sa-global-scholarship-card-meta">

                                            @if ($degreesCard->isNotEmpty())
                                                <span>
                                                    <i class="bi bi-mortarboard"></i>
                                                    {{ $degreesCard->implode(', ') }}
                                                </span>
                                            @endif

                                            @if ($scholarship->duration)
                                                <span>
                                                    <i class="bi bi-clock"></i>
                                                    {{ $scholarship->duration }}
                                                </span>
                                            @endif

                                            @if ($subjectsCard->isNotEmpty())
                                                <span>
                                                    <i class="bi bi-book"></i>
                                                    {{ $subjectsCard->implode(', ') }}
                                                </span>
                                            @endif

                                        </div>

                                        @if ($scholarship->description_en)
                                            <p>{{ $scholarship->description_en }}</p>
                                        @endif

                                    </div>

                                    <a href="{{ route('study-abroad.global-scholarship.show', $scholarship->scholarship_id) }}"
                                        class="sa-global-scholarship-details-btn">
                                        View Details
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>
                            </article>

                        @empty

                            <div class="sa-global-scholarship-no-results">
                                <i class="bi bi-search"></i>
                                <h3>No Scholarships Found</h3>
                                <p>Try changing your search or filter selections.</p>
                                <a href="{{ route('study-abroad.global-scholarships') }}">
                                    Clear Filters
                                </a>
                            </div>
                        @endforelse

                        {{-- PAGINATION --}}
                        @if ($scholarships->hasPages())

                            <div class="sa-global-scholarship-pagination">

                                @if ($scholarships->onFirstPage())
                                    <button type="button" disabled>
                                        <i class="bi bi-chevron-left"></i>
                                    </button>
                                @else
                                    <a href="{{ $scholarships->previousPageUrl() }}">
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                @endif

                                @foreach ($scholarships->getUrlRange(max(1, $scholarships->currentPage() - 2), min($scholarships->lastPage(), $scholarships->currentPage() + 2)) as $page => $url)
                                    @if ($page == $scholarships->currentPage())
                                        <button type="button" class="active">
                                            {{ $page }}
                                        </button>
                                    @else
                                        <a href="{{ $url }}">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach

                                @if ($scholarships->hasMorePages())
                                    <a href="{{ $scholarships->nextPageUrl() }}">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                @else
                                    <button type="button" disabled>
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                @endif

                            </div>

                        @endif

                    </div>
                </div>
            </div>
        </section>

        {{-- 03. EXPLORE --}}
        <section class="sa-global-scholarship-explore">
            <div class="sa-global-scholarship-container">

                <div class="sa-global-scholarship-section-heading centered">
                    <span></span>
                    <h2>EXPLORE BY DESTINATION</h2>
                </div>

                <div class="sa-global-scholarship-destination-grid">

                    @foreach ($destinationCounts as $destination)
                        @php
                            $destinationCountry = trim($destination->host_country);
                            $destinationFlag = $getFlagCode($destinationCountry);
                        @endphp

                        <a href="{{ route('study-abroad.global-scholarships', [
                            'country[]' => $destinationCountry,
                        ]) }}"
                            class="sa-global-scholarship-destination-card">

                            <span class="sa-global-scholarship-destination-flag">

                                @if ($destinationFlag)
                                    <span class="fi fi-{{ $destinationFlag }}"></span>
                                @else
                                    <i class="bi bi-globe2"></i>
                                @endif

                            </span>

                            <div>
                                <strong>{{ $destinationCountry }}</strong>
                                <span>
                                    {{ number_format($destination->total) }} Scholarships
                                </span>
                            </div>

                            <i class="bi bi-arrow-up-right"></i>

                        </a>
                    @endforeach

                </div>

                <div class="sa-global-scholarship-view-all">
                    <a href="{{ route('study-abroad.global-scholarships') }}">
                        View All
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </section>

        {{-- 04. GET GUIDANCE --}}
        <section class="sa-global-scholarship-guidance">
            <div class="sa-global-scholarship-container">

                <div class="sa-global-scholarship-guidance-box">

                    <span></span>

                    <h2>
                        NOT SURE WHICH SCHOLARSHIP
                        <br>
                        IS RIGHT FOR YOU?
                    </h2>

                    <p>
                        Get guidance on country, university, course and scholarships.
                    </p>

                    <a href="{{ route('study-abroad.application') }}" class="sa-global-scholarship-guidance-btn">
                        TALK TO AN EXPERT
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>
        </section>

    </main>

    <x-frontend-footer />

    <script src="{{ asset('js/study-abroad-global-scholarship.js') }}"></script>

</body>

</html>
