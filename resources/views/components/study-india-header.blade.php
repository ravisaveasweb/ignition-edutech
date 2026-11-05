<style>
    .si-menu-user .si-user-icon {
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }

    .si-menu-user .si-menu-profile-photo {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }
</style>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QW8RF45QY5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QW8RF45QY5');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="google-site-verification" content="ew7DxskiRKXGEeE1iEL_93HUyfjYtSZoH7oI3QpWDSY" />
    <title>UGC Approved Online Degree Courses in India | Ignition Edutech</title>
    <meta name="description"
        content="Apply for UGC approved online degree courses from India's top universities. Online MBA, MCA, BBA and BCA admission with placement support." />
    <meta name="keywords"
        content="online degree courses, online university admission, UGC approved online degree, online MBA admission, online universities in India, distance education programs, online degree admission, online courses with placement support, online education platform" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="author" content="">
    <meta property="og:title" content="UGC Approved Online Degree Courses in India | Ignition Edutech" />
    <meta property="og:description"
        content="India's trusted online education platform. UGC approved online degrees, online MBA, MCA, BBA, BCA admission with placement assistance." />
    <meta property="og:type" content="website" />
    <meta property="og:locate" content="en_IN" />
    <meta property="og:image" content="#" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Ignition Edutech" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Online Degree Courses in India | Ignition Edutech" />
    <meta name="twitter:description"
        content="Apply for online university admission with UGC approved online degree programs. Flexible online learning for working professionals." />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/hover-reveal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome-pro.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/spacing.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nmims-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vit-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/amity-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/manipal-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/smu-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dpu-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jain-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nld-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vgu-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/gla-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/umass-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bennett-university.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/study-india-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/entrance-exam.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/study-india-auth.css?v=3') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>





    @php
        use App\Models\NirfHistoricalRanking;

        $siInstitutes = NirfHistoricalRanking::query()
            ->whereNotNull('institute_name')
            ->whereNotNull('rank')
            ->orderByRaw('CAST(rank AS UNSIGNED)')
            ->orderByDesc('year')
            ->get();

        $siStates = $siInstitutes
            ->pluck('state')
            ->filter()
            ->map(fn($state) => trim($state))
            ->unique()
            ->sort()
            ->values();

        $siCategories = $siInstitutes
            ->pluck('category')
            ->filter()
            ->map(fn($category) => trim($category))
            ->unique()
            ->sort()
            ->values();

        $siYears = $siInstitutes->pluck('year')->filter()->unique()->sortDesc()->values();

        $siNirfData = $siInstitutes
            ->map(function ($institute) {
                return [
                    'rank' => $institute->rank,
                    'year' => $institute->year,
                    'institute_name' => $institute->institute_name,
                    'category' => $institute->category,
                    'city' => $institute->city,
                    'state' => $institute->state,
                    'score' => $institute->score,
                ];
            })
            ->values()
            ->toArray();

        $studyCoursesData = include app_path('Data/study_india_coursesData.php');
        $studyCourses = $studyCoursesData['courses'] ?? [];
    @endphp


    {{-- Study India Header --}}
    <header class="si-header">
        {{-- Top Header --}}
        <div class="si-header-top">
            {{-- Logo --}}
            <div class="si-logo">
                {{-- State Selector --}}
                <button type="button" class="si-location-trigger" id="siLocationTrigger" aria-haspopup="dialog"
                    aria-expanded="false">
                    <span class="si-location-icon">
                        <i class="bi bi-award-fill"></i>
                    </span>
                    <span class="si-location-text-wrap">
                        <span class="si-location-label">NIRF Ranked</span>
                        <span class="si-location-text" id="siLocationText">Select State</span>
                    </span>
                    <span class="si-location-arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </button>

            </div>


            <button type="button" class="si-study-preference-trigger" id="siStudyPreferenceTrigger">
                <i class="bi bi-mortarboard"></i>
                <span>Study Preferences</span>
            </button>


            {{-- Search --}}
            <div class="si-search-box">
                <span class="si-search-icon">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" id="siInstituteSearch" placeholder="Search Country and Universities"
                    autocomplete="off">
            </div>

            {{-- Header Actions --}}
            <div class="si-header-actions">
                <a href="{{ route('study-india.reviews.index') }}" class="si-review-link">
                    <i class="bi bi-pencil-square"></i>
                    Write a Review
                </a>
                <a href="{{ route('study-abroad.application') }}" class="si-counselling-link">
                    <i class="bi bi-chat-dots"></i>
                    Get Counselling
                </a>
                <button type="button" class="si-explore-trigger" id="siExploreTrigger">
                    <i class="bi bi-grid-3x3-gap"></i>
                    Explore
                </button>
                <button type="button" class="si-menu-trigger" id="siMenuTrigger" aria-label="Open menu">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>

        {{-- State Navigation Bar --}}
        <div class="si-category-bar" id="siCategoryBar">
            <button type="button" class="si-category-menu" id="siCategoryMenu">
                <i class="bi bi-list"></i>
                <span>Menu</span>
            </button>
            {{-- @foreach ($siStates as $state)
                <button type="button" class="si-state-category-item" data-state="{{ $state }}">
                    {{ $state }}
                </button>
            @endforeach --}}
        </div>

        {{-- Study India Explore Stream Drawer --}}
        <div class="si-stream-overlay" id="siStreamOverlay"></div>
        <div class="si-stream-drawer" id="siStreamDrawer">
            <div class="si-stream-slider">
                {{-- Main Course Page --}}
                <div class="si-stream-page si-stream-main-page active" id="siStreamMainPage">
                    <div class="si-stream-header">
                        <div>
                            <span class="si-stream-eyebrow">Explore</span>
                            <h3>Explore Streams</h3>
                        </div>
                        <button type="button" class="si-stream-close" id="siStreamClose">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div class="si-stream-search-item">
                        <div class="si-stream-search">
                            <i class="bi bi-search"></i>
                            <input type="text" id="siStreamSearch" placeholder="Search All Courses"
                                autocomplete="off">
                        </div>
                    </div>
                    <ul class="si-stream-list" id="siStreamCourseList">
                        @foreach ($studyCourses as $item)
                            @php
                                $pageId = match ($item['course']) {
                                    'B.Tech' => 'siStreamBtechPage',
                                    'MBA' => 'siStreamMbaPage',
                                    'M.Tech' => 'siStreamMtechPage',
                                    'MBBS' => 'siStreamMbbsPage',
                                    'B.Com' => 'siStreamBcomPage',
                                    'B.Sc' => 'siStreamBscPage',
                                    'B.Sc (Nursing)' => 'siStreamBscNursingPage',
                                    'BA' => 'siStreamBaPage',
                                    'BBA' => 'siStreamBbaPage',
                                    'BCA' => 'siStreamBcaPage',
                                    'B.Arch' => 'siStreamBarchPage',
                                    'B.Ed' => 'siStreamBedPage',
                                    'B.Pharm' => 'siStreamBpharmPage',
                                    'B.Sc (Agriculture)' => 'siStreamBscAgriculturePage',
                                    'BAMS' => 'siStreamBamsPage',
                                    'LLB' => 'siStreamLlbPage',
                                    'LLM' => 'siStreamLlmPage',
                                    'M.Pharm' => 'siStreamMpharmPage',
                                    'M.Sc' => 'siStreamMscPage',
                                    'MCA' => 'siStreamMcaPage',
                                    'Bachelor of Physiotherapy' => 'siStreamBptPage',
                                    'B.Des' => 'siStreamBdesPage',
                                    'M.Planning' => 'siStreamMplanningPage',
                                    'B.Planning' => 'siStreamBplanningPage',
                                    default => 'siStream' .
                                        str_replace([' ', '.', '(', ')'], '', $item['course']) .
                                        'Page',
                                };
                            @endphp
                            <li>
                                <a href="javascript:void(0);" class="si-stream-open-subpage"
                                    data-target="{{ $pageId }}">
                                    <span>{{ $item['course'] }}</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Dynamic Sub Pages --}}
                @foreach ($studyCourses as $item)
                    @php
                        $pageId = match ($item['course']) {
                            'B.Tech' => 'siStreamBtechPage',
                            'MBA' => 'siStreamMbaPage',
                            'M.Tech' => 'siStreamMtechPage',
                            'MBBS' => 'siStreamMbbsPage',
                            'B.Com' => 'siStreamBcomPage',
                            'B.Sc' => 'siStreamBscPage',
                            'B.Sc (Nursing)' => 'siStreamBscNursingPage',
                            'BA' => 'siStreamBaPage',
                            'BBA' => 'siStreamBbaPage',
                            'BCA' => 'siStreamBcaPage',
                            'B.Arch' => 'siStreamBarchPage',
                            'B.Ed' => 'siStreamBedPage',
                            'B.Pharm' => 'siStreamBpharmPage',
                            'B.Sc (Agriculture)' => 'siStreamBscAgriculturePage',
                            'BAMS' => 'siStreamBamsPage',
                            'LLB' => 'siStreamLlbPage',
                            'LLM' => 'siStreamLlmPage',
                            'M.Pharm' => 'siStreamMpharmPage',
                            'M.Sc' => 'siStreamMscPage',
                            'MCA' => 'siStreamMcaPage',
                            'Bachelor of Physiotherapy' => 'siStreamBptPage',
                            'B.Des' => 'siStreamBdesPage',
                            'M.Planning' => 'siStreamMplanningPage',
                            'B.Planning' => 'siStreamBplanningPage',
                            default => 'siStream' . str_replace([' ', '.', '(', ')'], '', $item['course']) . 'Page',
                        };
                    @endphp
                    <div class="si-stream-page" id="{{ $pageId }}">
                        <div class="si-stream-header si-stream-back">
                            <button type="button" class="si-stream-back-button">
                                <i class="bi bi-arrow-left"></i>
                            </button>
                            <div>
                                <span class="si-stream-eyebrow">{{ $item['course'] }}</span>
                                <h3>Browse By {{ $item['course'] }} Streams</h3>
                            </div>
                        </div>
                        <ul class="si-stream-list">
                            @foreach ($item['specializations'] as $spec)
                                <li>
                                    <a href="#">
                                        <span>{{ $spec }}</span>
                                        <i class="bi bi-plus"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </header>

    {{-- Common Overlay --}}
    <div class="si-overlay" id="siCommonOverlay"></div>

    {{-- State Popup --}}
    <div class="si-state-popup" id="siStatePopup">
        <div class="si-popup-header">
            <div>
                <strong>Select Your Preferred State</strong>
                <small>Explore NIRF ranked institutes by state</small>
            </div>
            <button type="button" id="siStateClose" aria-label="Close state selector">Close</button>
        </div>
        <div class="si-state-search-wrap">
            <i class="bi bi-search"></i>
            <input type="search" id="siStateSearch" placeholder="Search and select your state..."
                autocomplete="off">
        </div>
        <div class="si-state-grid" id="siStateGrid">
            <button type="button" class="si-state-item" data-state="all">
                <span class="si-state-icon"><i class="bi bi-globe-asia-australia"></i></span>
                <span>All States</span>
            </button>
            @foreach ($siStates as $state)
                <button type="button" class="si-state-item" data-state="{{ $state }}">
                    <span class="si-state-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <span>{{ $state }}</span>
                </button>
            @endforeach
        </div>
        <div class="si-state-empty" id="siStateEmpty" hidden>No states found. Try another search.</div>
    </div>

    {{-- Study Preference Modal --}}
    <div class="si-preference-overlay" id="siPreferenceOverlay"></div>
    <section class="si-preference-modal" id="siPreferenceModal" role="dialog" aria-modal="true"
        aria-labelledby="siPreferenceTitle" aria-hidden="true">
        {{-- Step 1: Course Selection --}}
        <div class="si-pref-step" id="siPrefStepCourse">
            <div class="si-preference-header">
                <div>
                    <h3 id="siPreferenceTitle">Select Your Study Preference</h3>
                    <p>Choose the courses you are interested in</p>
                </div>
                <button type="button" class="si-preference-skip" id="siPreferenceSkip">Skip</button>
                <button type="button" class="si-preference-close" id="siPreferenceClose"
                    aria-label="Close preferences">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="si-preference-search">
                <i class="bi bi-search"></i>
                <input type="search" id="siPreferenceSearch" placeholder="Search and select your course..."
                    autocomplete="off">
            </div>
            <div class="si-preference-selected-wrap" id="siPreferenceSelectedWrap" hidden>
                <strong>Selected courses</strong>
                <div class="si-preference-selected" id="siPreferenceSelected"></div>
            </div>
            <div class="si-preference-content" id="siPreferenceContent">
                @foreach ($studyCourses as $item)
                    <section class="si-preference-group" data-category="{{ $item['category'] }}">
                        <h4>
                            <i class="bi {{ $item['icon'] }}"></i> {{ $item['category'] }}
                        </h4>
                        <div class="si-preference-courses">
                            {{-- Main Course --}}
                            <button type="button" class="si-preference-course" data-course="{{ $item['course'] }}">
                                {{ $item['course'] }}
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            {{-- Specializations --}}
                            @foreach ($item['specializations'] as $spec)
                                <button type="button" class="si-preference-course"
                                    data-course="{{ $spec }}">
                                    {{ $spec }}
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            @endforeach
                        </div>
                    </section>
                @endforeach
                <div class="si-preference-no-results" id="siPreferenceNoResults" hidden>
                    No matching courses found.
                </div>
            </div>
        </div>

        {{-- Step 2: City / State Selection --}}
        <div class="si-pref-step" id="siPrefStepCity" hidden>
            <div class="si-preference-header">
                <div>
                    <h3>Select Your Study Preference</h3>
                </div>
                <button type="button" class="si-preference-skip" id="siCitySkip">Skip</button>
                <button type="button" class="si-preference-close" id="siCityClose" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            {{-- Selected Goal Bar --}}
            <div class="si-selected-goal-bar">
                <span>Your Selected Goal is:</span>
                <span class="si-goal-chip"><i class="bi bi-check-circle-fill"></i> Country: India</span>
                <span class="si-goal-chip" id="siGoalCourseChip">
                    <i class="bi bi-check-circle-fill"></i> Course: <span id="siGoalCourseName"></span>
                </span>
                <button type="button" class="si-modify-btn" id="siModifyGoal">
                    <i class="bi bi-pencil"></i> Modify
                </button>
            </div>
            <div class="si-preference-search">
                <i class="bi bi-search"></i>
                <input type="search" id="siCitySearch" placeholder="Search / Select Your Preferred City or State"
                    autocomplete="off">
            </div>
            <div class="si-city-content">
                {{-- Popular Cities --}}
                <h4 class="si-popular-title">Popular Cities</h4>
                <div class="si-city-grid" id="siCityGrid">
                    {{-- Rendered by JS --}}
                </div>
                {{-- Popular States --}}
                <h4 class="si-popular-title" style="margin-top:28px;">Popular States</h4>
                <div class="si-city-grid" id="siStateGridPref">
                    {{-- Rendered by JS --}}
                </div>
                <div class="si-city-empty" id="siCityEmpty" hidden>No matching cities or states found.</div>
            </div>
        </div>
    </section>


    {{-- Search Results --}}
    <div class="si-search-results" id="siSearchResults">
        <div class="si-search-results-header">
            <strong>Colleges & Universities</strong>
            <button type="button" id="siSearchClose" aria-label="Close search">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="si-search-results-list" id="siSearchResultsList"></div>
    </div>

    {{-- Institute Panel --}}
    <div class="si-institute-panel" id="siInstitutePanel">
        <div class="si-institute-header">
            <div>
                <small>NIRF Ranked Institutes</small>
                <h3 id="siSelectedState">All States</h3>
            </div>
            <button type="button" id="siInstituteClose" aria-label="Close institutes">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        {{-- Institute List --}}
        <div class="si-institute-list" id="siInstituteList"></div>
    </div>

    {{-- Explore Panel --}}
    <div class="si-explore-panel" id="siExplorePanel">
        <div class="si-explore-title">Explore More</div>
        <div class="si-explore-columns">
            <div class="si-explore-column" >
                <a href="{{ url('/') }}">
                    <span>
                        <i class="bi bi-mortarboard-fill"></i>
                    </span>
                    <div>
                        Study India
                        <small>Explore Study India</small>
                    </div>
                </a>
                <a href="{{ url('/entrance-exams') }}">
                    <span>
                        <i class="bi bi-journal-text"></i>
                    </span>
                    Entrance Exams
                </a>

                <a href="{{ route('study-india.universities-courses') }}">
                    <span>
                        <i class="bi bi-mortarboard"></i>
                    </span>
                    Top Courses
                </a>

                <a href="{{ route('study-india.universities-courses') }}#ign-univ-directory-online ">
                    <span>
                        <i class="bi bi-laptop"></i>
                    </span>
                    Online Courses
                </a>

                <a href="{{ route('college-news.index', ['section' => 'study-india']) }}">
                    <span>
                        <i class="bi bi-newspaper"></i>
                    </span>
                    College News
                </a>


                <a href="{{ route('study-india.reviews.all') }}#ign-sir-viewall-review-list">
                    <span>
                        <i class="bi bi-chat-square-text"></i>
                    </span>
                    Read College Reviews
                </a>


                <a href="{{ route('questions.index') }}">
                    <span>
                        <i class="bi bi-question-circle"></i>
                    </span>
                    Ask a Question
                </a>




            </div>
            <div class="si-explore-column">
                <a href="{{ url('/study-abroad') }}">
                    <span> <i class="bi bi-globe"></i></span>
                    <div>
                        Study Abroad
                        <small>Explore Study Abroad</small>
                    </div>
                </a>


                <a href="{{ url('exams/gre') }}">
                    <span> <i class="bi bi-journal-text"></i></span>
                    Abroad Exams
                </a>


                <a href="{{ route('college-news.index', ['section' => 'study-abroad']) }}">
                    <span>
                        <i class="bi bi-newspaper"></i>
                    </span>
                    College News
                </a>

                <a href="{{ route('study-abroad.reviews.index') }}#viewReviewForAbroad">
                    <span>
                        <i class="bi bi-chat-square-text"></i>
                    </span>
                    Read College Reviews
                </a>

                <a href="{{ route('questions.index') }}">
                    <span>
                        <i class="bi bi-question-circle"></i>
                    </span>
                    Ask a Question
                </a>

                {{-- <a href="javascript:void(0);">
                    <span> <i class="bi bi-book"></i></span>
                    Top Courses
                </a> --}}


            </div>
        </div>
    </div>

    {{-- Menu Overlay --}}
    <div class="si-menu-overlay" id="siMenuOverlay"></div>

    {{-- Side Menu --}}

    <aside class="si-menu-drawer" id="siMenuDrawer">
        <div class="si-menu-header">
            @php
                $studyIndiaLoggedInUser = session('study_india_user_id')
                    ? \App\Models\StudyIndiaUser::where('id', session('study_india_user_id'))
                        ->where('is_active', true)
                        ->where('is_verified', true)
                        ->first()
                    : null;
            @endphp

            {{-- 
            <div class="si-menu-user">
                <div class="si-user-icon">
                    <i class="bi bi-person-fill"></i>
                </div>
                <div>
                    @if ($studyIndiaLoggedInUser)
                        <strong>Hello, {{ $studyIndiaLoggedInUser->full_name }}</strong>
                        <p>{{ $studyIndiaLoggedInUser->email }}</p>
                    @else
                        <strong>Hello, Welcome to Ignition Edutech</strong>
                        <p>Search Colleges, Courses & More</p>
                    @endif
                </div>
            </div> --}}


            <div class="si-menu-user">
                <div class="si-user-icon">
                    @if ($studyIndiaLoggedInUser && $studyIndiaLoggedInUser->profile_photo)
                        <img src="{{ asset('storage/' . $studyIndiaLoggedInUser->profile_photo) }}"
                            alt="{{ $studyIndiaLoggedInUser->full_name }}'s profile photo"
                            class="si-menu-profile-photo">
                    @else
                        <i class="bi bi-person-fill"></i>
                    @endif
                </div>

                <div>
                    @if ($studyIndiaLoggedInUser)
                        <strong>Hello, {{ $studyIndiaLoggedInUser->full_name }}</strong>
                        <p>{{ $studyIndiaLoggedInUser->email }}</p>
                    @else
                        <strong>Hello, Welcome to Ignition Edutech</strong>
                        <p>Search Colleges, Courses & More</p>
                    @endif
                </div>
            </div>

            <button type="button" id="siMenuClose" aria-label="Close menu">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        @if ($studyIndiaLoggedInUser)
            <a href="{{ url('/') }}" class="si-login-btn">
                <i class="bi bi-house-door"></i> Study India Home
            </a>

            <a href="{{ route('study-india.profile') }}" class="si-login-btn">
                <i class="bi bi-person"></i> Your Profile
            </a>

            <a href="{{ route('study-india.settings') }}" class="si-login-btn">
                <i class="bi bi-gear"></i> Account Settings
            </a>

            <form action="{{ route('study-india.logout') }}" method="POST" class="si-menu-logout-form">
                @csrf
                <button type="submit" class="si-login-btn">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('study-india.login') }}" class="si-login-btn">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>

            <a href="{{ route('study-india.register') }}" class="si-login-btn">
                <i class="bi bi-person-plus"></i> Register
            </a>
        @endif
    </aside>

    @if (session('study_india_auth_success'))
        <div class="si-auth-modal-backdrop" role="presentation">
            <section class="si-auth-modal" role="dialog" aria-modal="true" aria-labelledby="siAuthSuccessTitle">
                <div class="si-auth-modal-icon" aria-hidden="true">✓</div>
                <h2 id="siAuthSuccessTitle">You're all set!</h2>
                <p>{{ session('study_india_auth_success') }}</p>
                <button type="button" class="si-auth-modal-close" data-si-auth-modal-close>
                    Continue to Study India
                </button>
            </section>
        </div>
    @endif


{{-- Floating Buttons Start --}}

        <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- whatsapp button -->
    <div class="whatsapp-wrapper">
        <a href="https://wa.me/+918655055150" target="_blank" id="whatsapp_button" type="button"
            class="whatsapp-btn">
            <svg role="img" viewBox="0 0 24 24" fill="#25D366" xmlns="http://www.w3.org/2000/svg">
                <title>WhatsApp</title>
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
            </svg>
        </a>
    </div>
    <!-- whatsapp button end -->

    <!-- phone button -->
    <div class="phone-wrapper">
        <a href="tel:+918655055150" id="phone_button" type="button" class="phone-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                <path fill="rgb(255, 255, 255)"
                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" />
            </svg>
        </a>
    </div>
    <!-- phone button end -->

    <!-- mail button -->
    <div class="mail-wrapper">
        <a href="mailto:support@ignitionedutech.com" target="_blank" id="mail_button" type="button"
            class="mail-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                <path fill="rgb(255, 255, 255)"
                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
            </svg>
        </a>
    </div>
    <!-- mail button end -->

    {{-- Floating Buttons Ends--}}


    <script src="{{ asset('js/study-india-auth.js') }}?v=2" defer></script>



    {{-- Script --}}

    <script>
        window.siNirfData = @json($siNirfData);
    </script>

    <script>
    window.siCityImageBase = @json(asset('img/study-india/cities'));
    window.siStateImageBase = @json(asset('img/study-india/states'));
    window.siLocationRouteBase = @json(url('/study-india/location'));
</script>

    <script src="{{ asset('js/study-india-header.js') }}" defer></script>

    <script>
        document.addEventListener('click', function(event) {
            const closeButton = event.target.closest('[data-si-auth-modal-close]');

            if (closeButton) {
                const popup = closeButton.closest('.si-auth-modal-backdrop');
                if (popup) popup.remove();
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.si-auth-modal-backdrop').forEach(function(popup) {
                    popup.remove();
                });
            }
        });
    </script>
