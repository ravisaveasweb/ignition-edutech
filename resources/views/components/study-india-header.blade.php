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
    @endphp

    {{-- Study India Header --}}
    <header class="si-header">
        {{-- Top Header --}}
        <div class="si-header-top">
            {{-- Logo --}}
            <div class="si-logo">

            </div>

            {{-- State Selector --}}
            <button type="button" class="si-location-trigger" id="siLocationTrigger">
                <span class="si-location-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </span>
                <span class="si-location-text" id="siLocationText">Select State</span>
                <span class="si-location-arrow">
                    <i class="bi bi-chevron-down"></i>
                </span>
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
                <a href="javascript:void(0);" class="si-review-link">
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


            @foreach ($siStates as $state)
                <button type="button" class="si-state-category-item" data-state="{{ $state }}">
                    {{ $state }}
                </button>
            @endforeach

        </div>


        {{-- =========================================================
     STUDY INDIA EXPLORE STREAM DRAWER
========================================================= --}}
        <div class="si-stream-overlay" id="siStreamOverlay"></div>

        <div class="si-stream-drawer" id="siStreamDrawer">
            <div class="si-stream-slider">

                {{-- =====================================================
             MAIN COURSE PAGE
        ====================================================== --}}
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

                        {{-- B.Tech --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBtechPage">
                                <span>B.Tech</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- MBA --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMbaPage">
                                <span>MBA</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- M.Tech --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMtechPage">
                                <span>M.Tech</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- MBBS --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMbbsPage">
                                <span>MBBS</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Com --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBcomPage">
                                <span>B.Com</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Sc --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBscPage">
                                <span>B.Sc</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Sc Nursing --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBscNursingPage">
                                <span>B.Sc (Nursing)</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- BA --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBaPage">
                                <span>BA</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- BBA --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBbaPage">
                                <span>BBA</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- BCA --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBcaPage">
                                <span>BCA</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Arch --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBarchPage">
                                <span>B.Arch</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Ed --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBedPage">
                                <span>B.Ed</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Pharm --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBpharmPage">
                                <span>B.Pharm</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Sc Agriculture --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBscAgriculturePage">
                                <span>B.Sc (Agriculture)</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- BAMS --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBamsPage">
                                <span>BAMS</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- LLB --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamLlbPage">
                                <span>LLB</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- LLM --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamLlmPage">
                                <span>LLM</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- M.Pharm --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMpharmPage">
                                <span>M.Pharm</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- M.Sc --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMscPage">
                                <span>M.Sc</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- MCA --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMcaPage">
                                <span>MCA</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- Bachelor of Physiotherapy --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBptPage">
                                <span>Bachelor of Physiotherapy</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Des --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBdesPage">
                                <span>B.Des</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- M.Planning --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamMplanningPage">
                                <span>M.Planning</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                        {{-- B.Planning --}}
                        <li>
                            <a href="javascript:void(0);" class="si-stream-open-subpage"
                                data-target="siStreamBplanningPage">
                                <span>B.Planning</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                    </ul>
                </div>


                {{-- =====================================================
             B.TECH
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBtechPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Tech</span>
                            <h3>Browse By B.Tech Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Computer Science &amp; Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Information Technology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Artificial Intelligence &amp; Machine Learning</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Data Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Cyber Security</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Mechanical Engineering</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Civil Engineering</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Electrical Engineering</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Electronics &amp; Communication Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Robotics &amp; Automation</span><i class="bi bi-plus"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- =====================================================
             MBA
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMbaPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">MBA</span>
                            <h3>Browse By MBA Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>MBA in Finance</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Marketing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Human Resource Management</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in International Business</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Operations Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Business Analytics</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Information Technology</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Healthcare Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Hospital Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Entrepreneurship</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Supply Chain Management</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Retail Management</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Banking &amp; Finance</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Digital Marketing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Project Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Tourism &amp; Hospitality Management</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Logistics Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Rural Management</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MBA in Business Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MBA in Strategic Management</span><i class="bi bi-plus"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- =====================================================
             M.TECH
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMtechPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">M.Tech</span>
                            <h3>Browse By M.Tech Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>M.Tech in Computer Science &amp; Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Information Technology</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Artificial Intelligence</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Data Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Cyber Security</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Mechanical Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Civil Engineering</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>M.Tech in Electrical Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Electronics &amp; Communication Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Robotics &amp; Automation</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Biotechnology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Tech in Environmental Engineering</span><i
                                    class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             MBBS
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMbbsPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">MBBS</span>
                            <h3>Browse By MBBS Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>General Medicine</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>General Surgery</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Pediatrics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Obstetrics &amp; Gynecology</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>Orthopedics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Dermatology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Psychiatry</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Ophthalmology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>ENT</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Radiology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Anesthesiology</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.COM
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBcomPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Com</span>
                            <h3>Browse By B.Com Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>B.Com General</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Com Accounting &amp; Finance</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Com Banking &amp; Finance</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>B.Com Computer Applications</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>B.Com Corporate Secretaryship</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>B.Com Taxation</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Com Economics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Com International Business</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>B.Com E-Commerce</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Com Business Analytics</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.SC
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBscPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Sc</span>
                            <h3>Browse By B.Sc Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>B.Sc Mathematics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Physics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Chemistry</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Biology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Computer Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Information Technology</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>B.Sc Biotechnology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Microbiology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Zoology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Botany</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Data Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Sc Artificial Intelligence</span><i class="bi bi-plus"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- =====================================================
             B.SC NURSING
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBscNursingPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Sc Nursing</span>
                            <h3>Browse By B.Sc Nursing Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Medical Surgical Nursing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Community Health Nursing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Child Health Nursing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Mental Health Nursing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Obstetric &amp; Gynecological Nursing</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Community Nursing</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             BA
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBaPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">BA</span>
                            <h3>Browse By BA Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>BA English</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Economics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Psychology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Sociology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Political Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA History</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Geography</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Journalism &amp; Mass Communication</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Hindi</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BA Philosophy</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             BBA
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBbaPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">BBA</span>
                            <h3>Browse By BBA Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>BBA General</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BBA Finance</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BBA Marketing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BBA Human Resource Management</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>BBA International Business</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>BBA Business Analytics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BBA Digital Marketing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BBA Entrepreneurship</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BBA Banking &amp; Finance</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>BBA Logistics &amp; Supply Chain Management</span><i
                                    class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             BCA
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBcaPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">BCA</span>
                            <h3>Browse By BCA Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>BCA General</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Artificial Intelligence</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>BCA Data Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Cyber Security</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Cloud Computing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Web Development</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Software Development</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Information Technology</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>BCA Game Development</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>BCA Blockchain Technology</span><i class="bi bi-plus"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- =====================================================
             B.ARCH
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBarchPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Arch</span>
                            <h3>Browse By B.Arch Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Architectural Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Urban Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Landscape Architecture</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Interior Architecture</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Sustainable Architecture</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Architectural Technology</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.ED
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBedPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Ed</span>
                            <h3>Browse By B.Ed Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>B.Ed English</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Ed Mathematics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Ed Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Ed Social Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Ed Hindi</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Ed Computer Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>B.Ed Physical Education</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.PHARM
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBpharmPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Pharm</span>
                            <h3>Browse By B.Pharm Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Pharmaceutics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Pharmacology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Pharmaceutical Chemistry</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Pharmacognosy</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Pharmaceutical Analysis</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Clinical Pharmacy</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.SC AGRICULTURE
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBscAgriculturePage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Sc Agriculture</span>
                            <h3>Browse By B.Sc Agriculture Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Agronomy</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Horticulture</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Soil Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Agricultural Economics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Plant Pathology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Entomology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Animal Husbandry</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Agricultural Engineering</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             BAMS
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBamsPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">BAMS</span>
                            <h3>Browse By BAMS Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Kayachikitsa</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Shalya Tantra</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Shalakya Tantra</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Kaumarbhritya</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Prasuti Tantra &amp; Stri Roga</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Panchakarma</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Dravyaguna</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             LLB
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamLlbPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">LLB</span>
                            <h3>Browse By LLB Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Corporate Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Criminal Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Civil Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Constitutional Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Cyber Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Tax Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Intellectual Property Law</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>International Law</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             LLM
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamLlmPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">LLM</span>
                            <h3>Browse By LLM Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Corporate Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Criminal Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Constitutional Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>International Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Cyber Law</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Intellectual Property Law</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>Human Rights Law</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             M.PHARM
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMpharmPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">M.Pharm</span>
                            <h3>Browse By M.Pharm Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>M.Pharm Pharmaceutics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Pharm Pharmacology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Pharm Pharmaceutical Chemistry</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Pharm Pharmacognosy</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Pharm Pharmaceutical Analysis</span><i
                                    class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Pharm Clinical Pharmacy</span><i class="bi bi-plus"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- =====================================================
             M.SC
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMscPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">M.Sc</span>
                            <h3>Browse By M.Sc Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>M.Sc Mathematics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Physics</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Chemistry</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Computer Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Biotechnology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Microbiology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Data Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Artificial Intelligence</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>M.Sc Zoology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>M.Sc Botany</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             MCA
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMcaPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">MCA</span>
                            <h3>Browse By MCA Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>MCA Software Development</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MCA Artificial Intelligence</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MCA Data Science</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MCA Cyber Security</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MCA Cloud Computing</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MCA Web Technology</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>MCA Information Technology</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>MCA Blockchain Technology</span><i class="bi bi-plus"></i></a>
                        </li>
                    </ul>
                </div>


                {{-- =====================================================
             BACHELOR OF PHYSIOTHERAPY
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBptPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">Physiotherapy</span>
                            <h3>Browse By Physiotherapy Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Orthopedic Physiotherapy</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Neurological Physiotherapy</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>Cardiopulmonary Physiotherapy</span><i class="bi bi-plus"></i></a>
                        </li>
                        <li><a href="#"><span>Sports Physiotherapy</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Pediatric Physiotherapy</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Geriatric Physiotherapy</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.DES
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBdesPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Des</span>
                            <h3>Browse By B.Des Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Fashion Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Graphic Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Interior Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Product Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Industrial Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>UI/UX Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Communication Design</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Textile Design</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             M.PLANNING
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamMplanningPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">M.Planning</span>
                            <h3>Browse By M.Planning Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Urban Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Regional Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Transport Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Environmental Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Housing Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Infrastructure Planning</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>


                {{-- =====================================================
             B.PLANNING
        ====================================================== --}}
                <div class="si-stream-page" id="siStreamBplanningPage">
                    <div class="si-stream-header si-stream-back">
                        <button type="button" class="si-stream-back-button">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <div>
                            <span class="si-stream-eyebrow">B.Planning</span>
                            <h3>Browse By B.Planning Streams</h3>
                        </div>
                    </div>

                    <ul class="si-stream-list">
                        <li><a href="#"><span>Urban Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Regional Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Transport Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Housing Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Environmental Planning</span><i class="bi bi-plus"></i></a></li>
                        <li><a href="#"><span>Infrastructure Planning</span><i class="bi bi-plus"></i></a></li>
                    </ul>
                </div>

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

            <button type="button" id="siStateClose">
                Close
            </button>
        </div>

        <div class="si-state-grid">
            @foreach ($siStates as $state)
                <button type="button" class="si-state-item" data-state="{{ $state }}">
                    <span class="si-state-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>
                    <span>{{ $state }}</span>
                </button>
            @endforeach
        </div>
    </div>

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
            <div class="si-explore-column">
                <a href="{{ url('/study-india') }}">
                    <span>
                        <i class="bi bi-mortarboard-fill"></i>
                    </span>

                    <div>
                        Study India
                        <small>Explore Indian Colleges</small>
                    </div>
                </a>

                <a href="{{ url('/exams/gre') }}">
                    <span>
                        <i class="bi bi-journal-text"></i>
                    </span>
                    Entrance Exams
                </a>

                <a href="javascript:void(0);">
                    <span>
                        <i class="bi bi-newspaper"></i>
                    </span>
                    College News
                </a>

                <a href="javascript:void(0);">
                    <span>
                        <i class="bi bi-question-circle"></i>
                    </span>
                    Ask a Question
                </a>
            </div>

            <div class="si-explore-column">
                <a href="javascript:void(0);">
                    <span>
                        <i class="bi bi-book"></i>
                    </span>
                    Top Courses
                </a>

                <a href="javascript:void(0);">
                    <span>
                        <i class="bi bi-bell"></i>
                    </span>
                    Admission Alerts 2026
                </a>

                <a href="javascript:void(0);">
                    <span>
                        <i class="bi bi-building"></i>
                    </span>
                    Institutes
                </a>

                <a href="javascript:void(0);">
                    <span>
                        <i class="bi bi-award"></i>
                    </span>
                    Scholarships
                </a>
            </div>
        </div>
    </div>

    {{-- Menu Overlay --}}
    <div class="si-menu-overlay" id="siMenuOverlay"></div>

    {{-- Side Menu --}}
    <aside class="si-menu-drawer" id="siMenuDrawer">
        <div class="si-menu-header">
            <div class="si-menu-user">
                <div class="si-user-icon">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div>
                    <strong>Hello, Welcome to Ignition Edutech</strong>
                    <p>Search Colleges, Courses & More</p>
                </div>
            </div>

            <button type="button" id="siMenuClose" aria-label="Close menu">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <a href="{{ route('study-abroad.login') }}" class="si-login-btn">
            Login / Register
        </a>

    </aside>

    {{-- NIRF Data --}}
    <script>
        window.siNirfData = @json($siNirfData);
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            /* Data */
            const nirfData = Array.isArray(window.siNirfData) ? window.siNirfData : [];

            /* Elements */
            const locationTrigger = document.getElementById('siLocationTrigger');
            const locationText = document.getElementById('siLocationText');
            const statePopup = document.getElementById('siStatePopup');
            const stateClose = document.getElementById('siStateClose');
            const commonOverlay = document.getElementById('siCommonOverlay');
            const stateItems = document.querySelectorAll('.si-state-item');
            const stateCategoryItems = document.querySelectorAll('.si-state-category-item');
            const searchInput = document.getElementById('siInstituteSearch');
            const searchResults = document.getElementById('siSearchResults');
            const searchResultsList = document.getElementById('siSearchResultsList');
            const searchClose = document.getElementById('siSearchClose');
            const institutePanel = document.getElementById('siInstitutePanel');
            const instituteList = document.getElementById('siInstituteList');
            const instituteClose = document.getElementById('siInstituteClose');
            const selectedState = document.getElementById('siSelectedState');
            const categoryFilter = document.getElementById('siCategoryFilter');
            const yearFilter = document.getElementById('siYearFilter');
            const exploreTrigger = document.getElementById('siExploreTrigger');
            const explorePanel = document.getElementById('siExplorePanel');
            const menuTrigger = document.getElementById('siMenuTrigger');
            const menuDrawer = document.getElementById('siMenuDrawer');
            const menuOverlay = document.getElementById('siMenuOverlay');
            const menuClose = document.getElementById('siMenuClose');
            const categoryMenu = document.getElementById('siCategoryMenu');

            /* Study India Stream Drawer Elements */
            const siCategoryMenu = document.getElementById('siCategoryMenu');
            const siStreamDrawer = document.getElementById('siStreamDrawer');
            const siStreamOverlay = document.getElementById('siStreamOverlay');
            const siStreamClose = document.getElementById('siStreamClose');
            const siStreamSearch = document.getElementById('siStreamSearch');
            const siStreamMainPage = document.getElementById('siStreamMainPage');
            const siStreamPages = document.querySelectorAll('.si-stream-page');
            const siStreamOpenButtons = document.querySelectorAll('.si-stream-open-subpage');
            const siStreamBackButtons = document.querySelectorAll('.si-stream-back-button');

            /* Stream Drawer */
            function siOpenStreamDrawer() {
                if (!siStreamDrawer) return;

                closeStatePopup();
                closeInstitutePanel();
                closeSearch();
                closeExplore();
                closeMenu();

                siStreamDrawer.classList.add('active');

                if (siStreamOverlay) {
                    siStreamOverlay.classList.add('active');
                }

                siShowStreamMainPage();

                if (siStreamSearch) {
                    setTimeout(function() {
                        siStreamSearch.focus();
                    }, 200);
                }
            }

            function siCloseStreamDrawer() {
                if (siStreamDrawer) {
                    siStreamDrawer.classList.remove('active');
                }

                if (siStreamOverlay) {
                    siStreamOverlay.classList.remove('active');
                }

                siShowStreamMainPage();

                if (siStreamSearch) {
                    siStreamSearch.value = '';
                    siFilterStreamCourses('');
                }
            }

            function siShowStreamMainPage() {
                siStreamPages.forEach(function(page) {
                    page.classList.remove('active');
                });

                if (siStreamMainPage) {
                    siStreamMainPage.classList.add('active');
                }
            }

            function siOpenStreamSubPage(targetId) {
                if (!targetId) return;

                siStreamPages.forEach(function(page) {
                    page.classList.remove('active');
                });

                const targetPage = document.getElementById(targetId);

                if (targetPage) {
                    targetPage.classList.add('active');

                    if (siStreamDrawer) {
                        siStreamDrawer.scrollTop = 0;
                    }
                }
            }

            function siFilterStreamCourses(searchValue) {
                const searchTerm = searchValue.trim().toLowerCase();
                const courseItems = document.querySelectorAll(
                    '#siStreamMainPage .si-stream-list > li'
                );

                courseItems.forEach(function(item) {
                    const text = item.textContent.toLowerCase();

                    item.style.display = !searchTerm || text.includes(searchTerm) ? '' : 'none';
                });
            }

            /* Open Stream Drawer */
            if (siCategoryMenu) {
                siCategoryMenu.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    siOpenStreamDrawer();
                });
            }

            /* Close Stream Drawer */
            if (siStreamClose) {
                siStreamClose.addEventListener('click', function() {
                    siCloseStreamDrawer();
                });
            }

            /* Stream Overlay */
            if (siStreamOverlay) {
                siStreamOverlay.addEventListener('click', function() {
                    siCloseStreamDrawer();
                });
            }

            /* Open Course Subpages */
            siStreamOpenButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    siOpenStreamSubPage(this.getAttribute('data-target'));
                });
            });

            /* Stream Back Buttons */
            siStreamBackButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    siShowStreamMainPage();
                });
            });

            /* Stream Course Search */
            if (siStreamSearch) {
                siStreamSearch.addEventListener('input', function() {
                    siFilterStreamCourses(this.value);
                });
            }

            /* Stream Escape Key */
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    siCloseStreamDrawer();
                }
            });

            /* State */
            let activeState = 'all';

            /* Helpers */
            function normalize(value) {
                return String(value ?? '').trim().toLowerCase();
            }

            function escapeHtml(value) {
                return String(value ?? '').replace(/[&<>"']/g, function(character) {
                    return {
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        '"': '&quot;',
                        "'": '&#039;'
                    } [character];
                });
            }

            function getRankValue(rank) {
                const value = parseInt(
                    String(rank ?? '').replace(/[^\d]/g, ''),
                    10
                );

                return Number.isNaN(value) ? 999999 : value;
            }

            function sortByRank(a, b) {
                return getRankValue(a.rank) - getRankValue(b.rank);
            }

            /* Close Functions */
            function closeStatePopup() {
                if (statePopup) statePopup.style.display = 'none';
                if (commonOverlay) commonOverlay.style.display = 'none';
            }

            function closeInstitutePanel() {
                if (institutePanel) institutePanel.style.display = 'none';
            }

            function closeSearch() {
                if (searchResults) searchResults.style.display = 'none';
            }

            function closeExplore() {
                if (explorePanel) explorePanel.style.display = 'none';
            }

            function closeMenu() {
                if (menuDrawer) menuDrawer.style.right = '-350px';
                if (menuOverlay) menuOverlay.style.display = 'none';
            }

            /* Open State Popup */
            function openStatePopup() {
                closeInstitutePanel();
                closeSearch();
                closeExplore();
                closeMenu();

                if (statePopup) statePopup.style.display = 'block';
                if (commonOverlay) commonOverlay.style.display = 'block';
            }

            /* Filter Data */
            function getFilteredData() {
                const selectedCategory = categoryFilter ?
                    normalize(categoryFilter.value) :
                    'all';

                const selectedYear = yearFilter ?
                    normalize(yearFilter.value) :
                    'all';

                return nirfData
                    .filter(function(institute) {
                        const instituteState = normalize(institute.state);
                        const stateMatch =
                            activeState === 'all' ||
                            instituteState === normalize(activeState);

                        const instituteCategory = normalize(institute.category);
                        const categoryMatch =
                            selectedCategory === 'all' ||
                            instituteCategory === selectedCategory;

                        const instituteYear = normalize(institute.year);
                        const yearMatch =
                            selectedYear === 'all' ||
                            instituteYear === selectedYear;

                        return stateMatch && categoryMatch && yearMatch;
                    })
                    .sort(sortByRank);
            }

            /* Render Institute List */
            function renderInstituteList(data) {
                if (!instituteList) return;

                instituteList.innerHTML = '';

                /* No Data */
                if (!data.length) {
                    instituteList.innerHTML = `
                <div class="si-no-result">
                    <div class="si-no-result-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <strong>No institutes found</strong>
                    <span>Try another state, category or NIRF year.</span>
                </div>
            `;
                    return;
                }

                const fragment = document.createDocumentFragment();

                data.forEach(function(institute) {
                    const item = document.createElement('div');
                    item.className = 'si-institute-item';

                    item.innerHTML = `
                <div class="si-institute-rank">
                    #${escapeHtml(institute.rank || '-')}
                </div>
                <div class="si-institute-info">
                    <strong>${escapeHtml(institute.institute_name || 'Institute')}</strong>
                    <span class="si-institute-location">
                        <i class="bi bi-geo-alt-fill"></i>
                        ${escapeHtml(institute.city || '-')}
                        ${institute.state ? ', ' + escapeHtml(institute.state) : ''}
                    </span>
                    <div class="si-institute-meta">
                        ${institute.category ? `
                                    <small>${escapeHtml(institute.category)}</small>
                                ` : ''}
                        ${institute.year ? `
                                    <small>NIRF ${escapeHtml(institute.year)}</small>
                                ` : ''}
                        ${institute.score ? `
                                    <small>Score: ${escapeHtml(institute.score)}</small>
                                ` : ''}
                    </div>
                </div>
            `;

                    fragment.appendChild(item);
                });

                instituteList.appendChild(fragment);
            }

            /* Show Selected State */
            function showState(state, resetFilters = true) {
                activeState = state || 'all';

                /* Update Select State Button */
                if (locationText) {
                    locationText.textContent =
                        activeState === 'all' ? 'Select State' : activeState;
                }

                /* Update Institute Panel Heading */
                if (selectedState) {
                    selectedState.textContent =
                        activeState === 'all' ? 'All States' : activeState;
                }

                /* Update Horizontal State Navigation */
                stateCategoryItems.forEach(function(item) {
                    const itemState = item.dataset.state || 'all';

                    item.classList.toggle(
                        'active',
                        normalize(itemState) === normalize(activeState)
                    );
                });

                /* Update Popup State */
                stateItems.forEach(function(item) {
                    const itemState = item.dataset.state || 'all';

                    item.classList.toggle(
                        'active',
                        normalize(itemState) === normalize(activeState)
                    );
                });

                /* Reset Filters */
                if (resetFilters) {
                    if (categoryFilter) categoryFilter.value = 'all';
                    if (yearFilter) yearFilter.value = 'all';
                }

                /* Close Other Panels */
                closeStatePopup();
                closeSearch();
                closeExplore();

                /* Render Institutes */
                renderInstituteList(getFilteredData());

                /* Open Institute Panel */
                if (institutePanel) {
                    institutePanel.style.display = 'block';
                }
            }

            /* State Popup Selection */
            stateItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    showState(this.dataset.state || 'all', true);
                });
            });

            /* Horizontal State Navigation */
            stateCategoryItems.forEach(function(item) {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    showState(this.dataset.state || 'all', true);
                });
            });

            /* Select State Button */
            if (locationTrigger) {
                locationTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    openStatePopup();
                });
            }

            /* Close State Popup */
            if (stateClose) {
                stateClose.addEventListener('click', closeStatePopup);
            }

            if (commonOverlay) {
                commonOverlay.addEventListener('click', closeStatePopup);
            }

            /* Close Institute Panel */
            if (instituteClose) {
                instituteClose.addEventListener('click', closeInstitutePanel);
            }

            /* Category Filter */
            if (categoryFilter) {
                categoryFilter.addEventListener('change', function() {
                    renderInstituteList(getFilteredData());

                    if (institutePanel) {
                        institutePanel.style.display = 'block';
                    }
                });
            }

            /* Year Filter */
            if (yearFilter) {
                yearFilter.addEventListener('change', function() {
                    renderInstituteList(getFilteredData());

                    if (institutePanel) {
                        institutePanel.style.display = 'block';
                    }
                });
            }

            /* Search */
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const search = normalize(this.value);

                    /* Empty Search */
                    if (!search) {
                        closeSearch();
                        return;
                    }

                    /* Close Other Panels */
                    closeStatePopup();
                    closeInstitutePanel();
                    closeExplore();

                    /* Search NIRF Data */
                    const results = nirfData
                        .filter(function(institute) {
                            const searchableText = [
                                    institute.institute_name,
                                    institute.state,
                                    institute.city,
                                    institute.category,
                                    institute.year,
                                    institute.rank,
                                    institute.score
                                ]
                                .filter(function(value) {
                                    return value !== null &&
                                        value !== undefined &&
                                        value !== '';
                                })
                                .join(' ')
                                .toLowerCase();

                            return searchableText.includes(search);
                        })
                        .sort(sortByRank)
                        .slice(0, 50);

                    /* Render Search Results */
                    renderSearchResults(results);

                    /* Open Search Results */
                    if (searchResults) {
                        searchResults.style.display = 'block';
                    }
                });
            }

            /* Render Search Results */
            function renderSearchResults(results) {
                if (!searchResultsList) return;

                searchResultsList.innerHTML = '';

                /* No Results */
                if (!results.length) {
                    searchResultsList.innerHTML = `
                <div class="si-no-search-result">
                    <div class="si-no-result-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <strong>No institute found</strong>
                    <span>Try searching by institute, state, city or category.</span>
                </div>
            `;
                    return;
                }

                const fragment = document.createDocumentFragment();

                results.forEach(function(institute) {
                    const result = document.createElement('button');

                    result.type = 'button';
                    result.className = 'si-search-result';
                    result.dataset.state = institute.state || '';
                    result.dataset.category = institute.category || '';
                    result.dataset.year = institute.year || '';

                    result.innerHTML = `
                <div class="si-result-rank">
                    #${escapeHtml(institute.rank || '-')}
                </div>
                <div class="si-result-content">
                    <strong>${escapeHtml(institute.institute_name || 'Institute')}</strong>
                    <span>
                        <i class="bi bi-geo-alt-fill"></i>
                        ${escapeHtml(institute.city || '-')}
                        ${institute.state ? ', ' + escapeHtml(institute.state) : ''}
                    </span>
                    <small>
                        ${escapeHtml(institute.category || 'NIRF')}
                        ${institute.year ? ' • NIRF ' + escapeHtml(institute.year) : ''}
                    </small>
                </div>
            `;

                    fragment.appendChild(result);
                });

                searchResultsList.appendChild(fragment);
            }

            /* Search Result Click */
            if (searchResultsList) {
                searchResultsList.addEventListener('click', function(event) {
                    const result = event.target.closest('.si-search-result');

                    if (!result) return;

                    const state = result.dataset.state || 'all';
                    const category = result.dataset.category || 'all';
                    const year = result.dataset.year || 'all';

                    /* Set Category */
                    if (categoryFilter) {
                        categoryFilter.value = category || 'all';
                    }

                    /* Set Year */
                    if (yearFilter) {
                        yearFilter.value = year || 'all';
                    }

                    /* Preserve Filters */
                    showState(state, false);
                });
            }

            /* Search Close */
            if (searchClose) {
                searchClose.addEventListener('click', function() {
                    if (searchInput) searchInput.value = '';
                    closeSearch();
                });
            }

            /* Explore Panel */
            if (exploreTrigger && explorePanel) {
                exploreTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();

                    const isOpen = explorePanel.style.display === 'block';

                    closeStatePopup();
                    closeInstitutePanel();
                    closeSearch();
                    closeMenu();

                    explorePanel.style.display = isOpen ? 'none' : 'block';
                });
            }

            /* Menu */
            function openMenu() {
                closeStatePopup();
                closeInstitutePanel();
                closeSearch();
                closeExplore();

                if (menuDrawer) {
                    menuDrawer.style.right = '0';
                }

                if (menuOverlay) {
                    menuOverlay.style.display = 'block';
                }
            }

            if (menuTrigger) {
                menuTrigger.addEventListener('click', openMenu);
            }

            if (menuClose) {
                menuClose.addEventListener('click', closeMenu);
            }

            if (menuOverlay) {
                menuOverlay.addEventListener('click', closeMenu);
            }

            /* Category Menu */
            // Category menu is handled by the Study India Stream Drawer.

            /* Outside Click */
            document.addEventListener('click', function(event) {
                /* Close Explore */
                if (
                    explorePanel &&
                    exploreTrigger &&
                    !explorePanel.contains(event.target) &&
                    !exploreTrigger.contains(event.target)
                ) {
                    closeExplore();
                }

                /* Close Search */
                if (
                    searchResults &&
                    searchInput &&
                    !searchResults.contains(event.target) &&
                    !searchInput.contains(event.target)
                ) {
                    closeSearch();
                }
            });

            /* Escape Key */
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeStatePopup();
                    closeInstitutePanel();
                    closeSearch();
                    closeExplore();
                    closeMenu();
                    siCloseStreamDrawer();
                }
            });

            /* Initial State */
            stateCategoryItems.forEach(function(item) {
                item.classList.toggle(
                    'active',
                    normalize(item.dataset.state || 'all') === 'all'
                );
            });

            /* Show All Institutes Initially */
            renderInstituteList(getFilteredData());
        });
    </script>
