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
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    @php
        $worldUniversities = \App\Models\WorldUniversityRanking::query()
            ->orderByRaw('CAST(rank_2026 AS UNSIGNED)')
            ->get();

        $worldCountries = $worldUniversities
            ->pluck('country')
            ->filter()
            ->map(function ($country) {
                return trim($country);
            })
            ->unique()
            ->sort()
            ->values();
        $countryCodes = [
            'Argentina' => 'ar',
            'Armenia' => 'am',
            'Australia' => 'au',
            'Austria' => 'at',
            'Azerbaijan' => 'az',
            'Bahrain' => 'bh',
            'Bangladesh' => 'bd',
            'Belarus' => 'by',
            'Belgium' => 'be',
            'Bosnia and Herzegovina' => 'ba',
            'Brazil' => 'br',
            'Brunei Darussalam' => 'bn',
            'Bulgaria' => 'bg',
            'Canada' => 'ca',
            'Chile' => 'cl',
            'China (Mainland)' => 'cn',
            'Colombia' => 'co',
            'Costa Rica' => 'cr',
            'Croatia' => 'hr',
            'Cuba' => 'cu',
            'Cyprus' => 'cy',
            'Czechia' => 'cz',
            'Denmark' => 'dk',
            'Dominican Republic' => 'do',
            'Ecuador' => 'ec',
            'Egypt' => 'eg',
            'Estonia' => 'ee',
            'Ethiopia' => 'et',
            'Finland' => 'fi',
            'France' => 'fr',
            'Georgia' => 'ge',
            'Germany' => 'de',
            'Ghana' => 'gh',
            'Greece' => 'gr',
            'Guatemala' => 'gt',
            'Honduras' => 'hn',
            'Hong Kong SAR, China' => 'hk',
            'Hungary' => 'hu',
            'Iceland' => 'is',
            'India' => 'in',
            'Indonesia' => 'id',
            'Iran (Islamic Republic of)' => 'ir',
            'Iraq' => 'iq',
            'Ireland' => 'ie',
            'Israel' => 'il',
            'Italy' => 'it',
            'Japan' => 'jp',
            'Jordan' => 'jo',
            'Kazakhstan' => 'kz',
            'Kenya' => 'ke',
            'Kuwait' => 'kw',
            'Kyrgyzstan' => 'kg',
            'Latvia' => 'lv',
            'Lebanon' => 'lb',
            'Libya' => 'ly',
            'Lithuania' => 'lt',
            'Luxembourg' => 'lu',
            'Macao SAR, China' => 'mo',
            'Malaysia' => 'my',
            'Malta' => 'mt',
            'Mexico' => 'mx',
            'Morocco' => 'ma',
            'Netherlands' => 'nl',
            'New Zealand' => 'nz',
            'Nigeria' => 'ng',
            'Northern Cyprus' => 'cy',
            'Norway' => 'no',
            'Oman' => 'om',
            'Pakistan' => 'pk',
            'Palestine' => 'ps',
            'Panama' => 'pa',
            'Paraguay' => 'py',
            'Peru' => 'pe',
            'Philippines' => 'ph',
            'Poland' => 'pl',
            'Portugal' => 'pt',
            'Puerto Rico' => 'pr',
            'Qatar' => 'qa',
            'Republic of Korea' => 'kr',
            'Romania' => 'ro',
            'Russian Federation' => 'ru',
            'Saudi Arabia' => 'sa',
            'Serbia' => 'rs',
            'Singapore' => 'sg',
            'Slovakia' => 'sk',
            'Slovenia' => 'si',
            'South Africa' => 'za',
            'Spain' => 'es',
            'Sri Lanka' => 'lk',
            'Sudan' => 'sd',
            'Sweden' => 'se',
            'Switzerland' => 'ch',
            'Syrian Arab Republic' => 'sy',
            'Taiwan' => 'tw',
            'Thailand' => 'th',
            'Tunisia' => 'tn',
            'Türkiye' => 'tr',
            'Uganda' => 'ug',
            'Ukraine' => 'ua',
            'United Arab Emirates' => 'ae',
            'United Kingdom' => 'gb',
            'United States of America' => 'us',
            'Uruguay' => 'uy',
            'Uzbekistan' => 'uz',
            'Venezuela (Bolivarian Republic of)' => 've',
            'Viet Nam' => 'vn',
        ];
    @endphp

    <header class="sa-header">
        <div class="sa-header-top">
            <div class="sa-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo/ignition-logo.png') }}" alt="Ignition Edutech">
                </a>
            </div>

            <button type="button" class="sa-country-trigger" id="saCountryTrigger">
                <span>🌐</span>
                <span class="sa-country-text">Select Country</span>
                <span class="sa-arrow">⌄</span>
            </button>

            <div class="sa-search">
                <span>⌕</span>
                <input type="text" id="saUniversitySearch" placeholder="Search Country and Universities"
                    autocomplete="off">
            </div>

            <div class="sa-header-actions">
                <a href="javascript:void(0);" class="sa-review">
                    ✎ Write a Review
                </a>

                <a href="javascript:void(0);" class="sa-counselling">

                    <a href="{{ route('study-abroad.application') }}">
                        <span>♧ Get Counselling</span>
                    </a>
                    {{-- <small>1 on 1 Interaction</small> --}}
                </a>

                <button type="button" class="sa-explore-trigger" id="saExploreTrigger">
                    ▦ Explore
                </button>

                <button type="button" class="sa-menu-trigger" id="saMenuTrigger">
                    ☰
                    <span>◉</span>
                </button>
            </div>
        </div>

        <div class="sa-category-bar" id="saCategoryBar">

            <a href="javascript:void(0);" id="saCategoryMenu">
                ☰ Menu
            </a>

            @foreach ($worldCountries as $country)
                <a href="javascript:void(0);" class="sa-category-country" data-country="{{ $country }}">
                    {{ $country }}
                </a>
            @endforeach

        </div>
    </header>

    <div class="sa-overlay" id="saCountryOverlay"></div>

    <div class="sa-country-popup" id="saCountryPopup">
        <div class="sa-country-popup-header">
            <strong>Select Your Study Preference</strong>

            <button type="button" id="saCountryClose">
                Skip
            </button>
        </div>

        <div class="sa-country-grid">
            @foreach ($worldCountries as $country)
                @php
                    $countryCode = $countryCodes[$country] ?? null;
                @endphp

                <a href="javascript:void(0);" class="sa-country" data-country="{{ $country }}">
                    <span class="sa-country-flag">
                        @if ($countryCode)
                            <span class="fi fi-{{ $countryCode }}"></span>
                        @else
                            <span class="fi fi-un"></span>
                        @endif
                    </span>

                    <span>{{ $country }}</span>
                </a>
            @endforeach
        </div>
    </div>

    <div class="sa-search-results" id="saSearchResults">
        <div class="sa-search-results-header">
            <strong>Universities & Countries</strong>
            <button type="button" id="saSearchClose">×</button>
        </div>

        <div class="sa-search-results-list">
            @foreach ($worldUniversities as $university)
                <a href="javascript:void(0);" class="sa-search-result" data-country="{{ $university->country }}">
                    <div class="sa-result-rank">
                        #{{ $university->rank_2026 }}
                    </div>

                    <div class="sa-result-content">
                        <strong>{{ $university->institution_name }}</strong>
                        <span>{{ $university->country }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="sa-university-panel" id="saUniversityPanel">
        <div class="sa-university-header">
            <div>
                <small>Universities in</small>
                <h3 id="saSelectedCountry"></h3>
            </div>

            <button type="button" id="saUniversityClose">
                ×
            </button>
        </div>

        <div class="sa-university-list" id="saUniversityList">
            @foreach ($worldUniversities as $university)
                <div class="sa-university-item" data-country="{{ $university->country }}">
                    <div class="sa-university-rank">
                        #{{ $university->rank_2026 }}
                    </div>

                    <div class="sa-university-info">
                        <strong>{{ $university->institution_name }}</strong>
                        <span>{{ $university->country }}</span>

                        @if ($university->overall_score)
                            <small>Overall Score: {{ $university->overall_score }}</small>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="sa-explore-panel" id="saExplorePanel">
        <div class="sa-explore-title">
            Explore More
        </div>

        <div class="sa-explore-columns">
            <div class="sa-explore-column">
                <a href="{{ url('/study-abroad') }}">
                    <span>🌐</span>
                    <div>
                        Study Abroad
                        <small>Explore Study Abroad</small>
                    </div>
                </a>

                <a href="{{ url('exams/gre') }}">
                    <span>▣</span>
                    Abroad Exams
                </a>

                {{-- <a href="javascript:void(0);">
                <span>▤</span>
                Exams
            </a> --}}

                <a href="javascript:void(0);">
                    <span>▣</span>
                    News
                </a>

                {{-- <a href="javascript:void(0);">
                <span>♨</span>
                Education Loan
            </a> --}}

                <a href="javascript:void(0);">
                    <span>▱</span>
                    Ask a Question
                </a>

                {{-- <a href="javascript:void(0);">
                <span>▧</span>
                Test Series
            </a> --}}

                {{-- <a href="javascript:void(0);">
                <span>▧</span>
                Course Finder
            </a> --}}

                {{-- <a href="javascript:void(0);">
                <span>▤</span>
                Articles
            </a> --}}
            </div>

            <div class="sa-explore-column">
                {{-- <a href="javascript:void(0);">
                <span>♧</span>
                Top Universities & Colleges
            </a> --}}

                <a href="javascript:void(0);">
                    <span>▱</span>
                    Top Courses
                </a>

                {{-- <a href="javascript:void(0);">
                <span>☆</span>
                Read College Reviews
            </a> --}}

                <a href="javascript:void(0);">
                    <span>♙</span>
                    Admission Alerts 2026
                </a>

                <a href="javascript:void(0);">
                    <span>▥</span>
                    Institute
                </a>

                {{-- <a href="javascript:void(0);">
                <span>♧</span>
                College Predictor
            </a> --}}

                {{-- <a href="javascript:void(0);">
                <span>▧</span>
                Practice Questions
            </a> --}}

                <a href="javascript:void(0);">
                    <span>♙</span>
                    Scholarship
                </a>
            </div>
        </div>
    </div>

    <div class="sa-menu-overlay" id="saMenuOverlay"></div>

    <aside class="sa-menu-drawer" id="saMenuDrawer">
        <div class="sa-menu-header">
            <div class="sa-menu-user">
                <div class="sa-user-icon">
                    👤
                </div>

                <div>
                    <strong>Hello, Welcome to Ignition Edutech</strong>
                    <p>Search Universities, Courses & More</p>
                </div>
            </div>

            <button type="button" id="saMenuClose">
                ×
            </button>
        </div>

        {{-- <button type="button" class="sa-login-btn">
        Login/Register
    </button> --}}

        <a href="{{ route('study-abroad.login') }}" class="sa-login-btn">
            Login/Register
        </a>

        {{-- <div class="sa-menu-links">
        <a href="{{ url('/') }}">
            <span>⌂</span>
            Home
        </a>

        <a href="{{ url('/study-abroad') }}">
            <span>🌐</span>
            Study Abroad
        </a>

        <a href="javascript:void(0);">
            <span>🎓</span>
            Universities
        </a>

        <a href="javascript:void(0);">
            <span>▣</span>
            Exams
        </a>

        <a href="javascript:void(0);">
            <span>▤</span>
            Courses
        </a>

        <a href="javascript:void(0);">
            <span>♧</span>
            College Predictor
        </a>

        <a href="javascript:void(0);">
            <span>♙</span>
            Scholarships
        </a>

        <a href="javascript:void(0);">
            <span>▱</span>
            Education Loan
        </a>

        <a href="{{ route('contact') }}">
            <span>✉</span>
            Contact Us
        </a>
    </div> --}}
    </aside>

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .sa-header {
            width: 100%;
            background: #fff;
            border-bottom: 1px solid #ddd;
            position: relative;
            z-index: 1000;
            font-family: Arial, sans-serif;
        }

        .sa-header-top {
            min-height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 0 25px;
        }

        .sa-logo {
            width: 175px;
            flex: 0 0 175px;
        }

        .sa-logo a {
            display: block;
        }

        .sa-logo img {
            width: 165px;
            max-width: 100%;
            height: auto;
            display: block;
        }

        .sa-country-trigger {
            height: 40px;
            padding: 0 12px;
            background: #fff;
            border: 0;
            border-left: 1px solid #ddd;
            cursor: pointer;
            white-space: nowrap;
            color: #222;
            display: flex;
            align-items: center;
            gap: 6px;
            flex-shrink: 0;
        }

        .sa-country-trigger:hover {
            color: #eb933a;
        }

        .sa-arrow {
            margin-left: 2px;
        }

        .sa-search {
            height: 40px;
            flex: 1 1 400px;
            width: 100%;
            max-width: 635px;
            min-width: 120px;
            display: flex;
            align-items: center;
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0 12px;
        }

        .sa-search>span {
            color: #777;
            font-size: 20px;
            flex-shrink: 0;
        }

        .sa-search input {
            width: 100%;
            min-width: 0;
            border: 0;
            outline: 0;
            background: transparent;
            padding-left: 8px;
            font-size: 13px;
        }

        .sa-header-actions {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-left: auto;
            flex-shrink: 0;
        }

        .sa-header-actions a,
        .sa-explore-trigger {
            color: #222;
            text-decoration: none;
            font-size: 13px;
            white-space: nowrap;
        }

        .sa-header-actions a:hover,
        .sa-explore-trigger:hover {
            color: #eb933a;
        }

        .sa-explore-trigger {
            border: 0;
            background: transparent;
            cursor: pointer;
            padding: 5px;
        }

        .sa-counselling {
            display: flex;
            flex-direction: column;
        }

        .sa-counselling small {
            background: #eb933a;
            color: #fff;
            font-size: 8px;
            padding: 2px 5px;
            text-align: center;
        }

        .sa-menu-trigger {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border: 1px solid #ddd;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sa-menu-trigger:hover {
            border-color: #eb933a;
        }

        .sa-menu-trigger span {
            color: #eb933a;
        }

        .sa-category-bar {
            width: 100%;
            min-height: 35px;
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 0 35px;
            border-top: 1px solid #eee;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            scrollbar-width: thin;
        }

        .sa-category-bar::-webkit-scrollbar {
            height: 4px;
        }

        .sa-category-bar a {
            color: #111;
            text-decoration: none;
            font-size: 11px;
            flex-shrink: 0;
        }

        .sa-category-bar a:hover {
            color: #eb933a;
        }

        /* OVERLAY */

        .sa-overlay,
        .sa-menu-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .45);
        }

        .sa-overlay {
            z-index: 1100;
        }

        .sa-menu-overlay {
            z-index: 1300;
        }

        /* COUNTRY POPUP */

        .sa-country-popup {
            display: none;
            position: fixed;
            z-index: 1200;
            top: 65px;
            left: 27px;
            width: 650px;
            max-width: calc(100vw - 54px);
            max-height: 75vh;
            overflow-y: auto;
            background: #fff;
            border-radius: 9px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .2);
            padding: 20px;
        }

        .sa-country-popup-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .sa-country-popup-header strong {
            font-size: 14px;
        }

        .sa-country-popup-header button {
            border: 0;
            background: transparent;
            color: #0878c9;
            cursor: pointer;
            flex-shrink: 0;
        }

        .sa-country-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px 15px;
        }

        .sa-country {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
            text-decoration: none;
            font-size: 13px;
            cursor: pointer;
            min-width: 0;
        }

        .sa-country:hover {
            color: #0878c9;
        }

        .sa-country-flag {
            width: 24px;
            min-width: 24px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sa-country-flag .fi {
            width: 24px;
            height: 18px;
            display: inline-block;
            background-size: cover;
            background-position: center;
            border-radius: 2px;
        }

        /* SEARCH RESULTS */

        .sa-search-results {
            display: none;
            position: absolute;
            top: 60px;
            left: 380px;
            width: 635px;
            max-width: calc(100vw - 40px);
            max-height: 450px;
            overflow: hidden;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .15);
            z-index: 1250;
        }

        .sa-search-results-header {
            min-height: 42px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
            border-bottom: 1px solid #eee;
        }

        .sa-search-results-header strong {
            font-size: 13px;
        }

        .sa-search-results-header button {
            border: 0;
            background: transparent;
            font-size: 22px;
            color: #777;
            cursor: pointer;
        }

        .sa-search-results-list {
            max-height: 405px;
            overflow-y: auto;
        }

        .sa-search-result {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 15px;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            color: #222;
        }

        .sa-search-result:hover {
            background: #f7f7f7;
        }

        .sa-result-rank {
            width: 40px;
            min-width: 40px;
            color: #eb933a;
            font-weight: bold;
            font-size: 12px;
        }

        .sa-result-content {
            display: flex;
            flex-direction: column;
            gap: 3px;
            min-width: 0;
        }

        .sa-result-content strong {
            font-size: 13px;
            overflow-wrap: anywhere;
        }

        .sa-result-content span {
            color: #777;
            font-size: 11px;
        }

        /* UNIVERSITY PANEL */

        .sa-university-panel {
            display: none;
            position: fixed;
            top: 65px;
            left: 27px;
            width: 650px;
            max-width: calc(100vw - 54px);
            max-height: 75vh;
            overflow-y: auto;
            background: #fff;
            border-radius: 9px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .2);
            z-index: 1210;
            padding: 20px;
        }

        .sa-university-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 2px 2px 14px;
            margin-bottom: 12px;
            border-bottom: 1px solid #ececec;
        }

        .sa-university-header>div {
            min-width: 0;
        }

        .sa-university-header small {
            display: block;
            margin-bottom: 3px;
            color: #8a929b;
            font-size: 10px;
            font-weight: 500;
        }

        .sa-university-header h3 {
            margin: 0;
            color: #202832;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.25;
            overflow-wrap: anywhere;
        }

        .sa-university-header button {
            width: 34px;
            height: 34px;
            min-width: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e5e5e5;
            border-radius: 7px;
            background: #fff;
            color: #555;
            font-size: 20px;
            cursor: pointer;
            transition: .2s ease;
        }

        .sa-university-header button:hover {
            color: #fff;
            background: #eb933a;
            border-color: #eb933a;
        }

        .sa-university-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .sa-university-item {
            display: none;
            position: relative;
            width: 100%;
            min-height: 82px;
            align-items: center;
            gap: 18px;
            padding: 14px 16px;
            background: #fff;
            border: 1px solid #e6e8eb;
            border-radius: 12px;
            transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
        }

        .sa-university-item:hover {
            border-color: #eb933a;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .08);
            transform: translateY(-1px);
        }

        .sa-university-rank {
            width: 58px;
            min-width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: linear-gradient(145deg, #fff7ed, #fff1df);
            border: 1px solid #f5d6b1;
            border-radius: 10px;
            color: #eb933a;
            font-size: 10px;
            font-weight: 700;
            line-height: 1;
        }

        .sa-university-info {
            flex: 1;
            min-width: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 6px;
        }

        .sa-university-info strong {
            display: block;
            margin: 0;
            color: #1d2733;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.35;
            overflow-wrap: anywhere;
        }

        .sa-university-info span {
            display: flex;
            align-items: center;
            width: fit-content;
            max-width: 100%;
            color: #68717c;
            font-size: 11px;
            line-height: 1.3;
            overflow-wrap: anywhere;
        }

        .sa-university-info span::before {
            content: "🌍";
            display: inline-flex;
            margin-right: 6px;
            font-size: 11px;
        }

        .sa-university-info small {
            display: inline-flex;
            align-items: center;
            width: fit-content;
            max-width: 100%;
            padding: 4px 8px;
            color: #555e68;
            background: #f7f8fa;
            border: 1px solid #eceef1;
            border-radius: 5px;
            font-size: 10px;
            line-height: 1;
        }

        /* EXPLORE PANEL */

        .sa-explore-panel {
            display: none;
            position: absolute;
            top: 60px;
            right: 70px;
            width: 575px;
            max-width: calc(100vw - 30px);
            background: #fff;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .2);
            padding: 18px;
            z-index: 1200;
        }

        .sa-explore-title {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .sa-explore-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .sa-explore-column a {
            min-height: 34px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #222;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            font-size: 13px;
        }

        .sa-explore-column a:hover {
            color: #eb933a;
        }

        .sa-explore-column a span {
            color: #1767bd;
            font-size: 18px;
            width: 20px;
            min-width: 20px;
        }

        .sa-explore-column a small {
            display: inline-block;
            margin-left: 7px;
            background: #e8f7f0;
            color: #35a477;
            padding: 3px 5px;
            font-size: 8px;
        }

        /* SIDE MENU */

        .sa-menu-drawer {
            position: fixed;
            top: 0;
            right: -350px;
            width: 330px;
            max-width: 90vw;
            height: 100vh;
            background: #fff;
            z-index: 1400;
            box-shadow: -5px 0 20px rgba(0, 0, 0, .2);
            transition: right .3s ease;
            padding: 20px;
            overflow-y: auto;
        }

        .sa-menu-header {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .sa-menu-header button {
            border: 0;
            background: transparent;
            font-size: 25px;
            cursor: pointer;
            flex-shrink: 0;
        }

        .sa-menu-user {
            display: flex;
            gap: 10px;
            min-width: 0;
        }

        .sa-user-icon {
            width: 42px;
            height: 42px;
            min-width: 42px;
            background: #eee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sa-menu-user strong {
            font-size: 13px;
        }

        .sa-menu-user p {
            font-size: 11px;
            color: #666;
            margin: 4px 0;
        }

        .sa-login-btn {
            width: 100%;
            height: 38px;
            margin: 20px 0;
            border: 0;
            border-radius: 4px;
            background: #eb933a;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .sa-login-btn:hover {
            color: #fff;
            background: #d9822f;
        }

        .sa-menu-links a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 5px;
            color: #222;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .sa-menu-links a:hover {
            color: #eb933a;
        }

        .sa-menu-links a span {
            width: 25px;
            min-width: 25px;
            color: #1670bf;
        }

        /* =========================
   LAPTOP
========================= */

        @media (max-width: 1200px) {
            .sa-header-top {
                gap: 10px;
                padding: 0 18px;
            }

            .sa-logo {
                width: 145px;
                flex-basis: 145px;
            }

            .sa-logo img {
                width: 140px;
            }

            .sa-header-actions {
                gap: 10px;
            }

            .sa-header-actions .sa-review,
            .sa-header-actions .sa-counselling {
                display: none;
            }

            .sa-search-results {
                left: 260px;
                width: 500px;
            }

            .sa-category-bar {
                padding: 0 20px;
            }
        }

        /* =========================
   TABLET
========================= */

        @media (max-width: 900px) {
            .sa-header-top {
                min-height: 58px;
                padding: 8px 15px;
                flex-wrap: wrap;
            }

            .sa-logo {
                width: 145px;
                flex-basis: 145px;
            }

            .sa-logo img {
                width: 140px;
            }

            .sa-search {
                order: 5;
                flex: 1 1 100%;
                width: 100%;
                max-width: none;
            }

            .sa-header-actions {
                margin-left: auto;
            }

            .sa-country-popup,
            .sa-university-panel {
                left: 20px;
                right: 20px;
                width: auto;
                max-width: none;
            }

            .sa-search-results {
                left: 20px;
                right: 20px;
                width: auto;
                max-width: none;
            }

            .sa-explore-panel {
                right: 20px;
                width: 500px;
                max-width: calc(100vw - 40px);
            }

            .sa-country-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* =========================
   MOBILE
========================= */

        @media (max-width: 650px) {
            .sa-header-top {
                min-height: 58px;
                padding: 8px 10px;
                gap: 7px;
                flex-wrap: nowrap;
            }

            .sa-logo {
                width: 115px;
                flex: 0 0 115px;
            }

            .sa-logo img {
                width: 110px;
            }

            .sa-country-trigger {
                width: 38px;
                min-width: 38px;
                height: 38px;
                padding: 0;
                justify-content: center;
                border-left: 0;
            }

            .sa-country-trigger .sa-country-text,
            .sa-country-trigger .sa-arrow {
                display: none;
            }

            .sa-country-trigger span:first-child {
                font-size: 18px;
            }

            .sa-search {
                display: none;
            }

            .sa-header-actions {
                margin-left: auto;
                gap: 6px;
            }

            .sa-header-actions .sa-explore-trigger {
                width: 38px;
                height: 38px;
                padding: 0;
                font-size: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .sa-header-actions .sa-explore-trigger::before {
                content: "▦";
                font-size: 19px;
            }

            .sa-menu-trigger {
                width: 38px;
                height: 38px;
                min-width: 38px;
            }

            .sa-category-bar {
                min-height: 36px;
                padding: 0 10px;
                gap: 15px;
            }

            .sa-category-bar a {
                font-size: 11px;
            }

            .sa-country-popup,
            .sa-university-panel {
                top: 60px;
                left: 10px;
                right: 10px;
                width: auto;
                max-width: none;
                max-height: calc(100vh - 75px);
                padding: 15px;
                border-radius: 8px;
            }

            .sa-country-popup-header {
                margin-bottom: 15px;
            }

            .sa-country-popup-header strong {
                font-size: 13px;
            }

            .sa-country-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 18px 10px;
            }

            .sa-country {
                gap: 8px;
                font-size: 12px;
            }

            .sa-country-flag,
            .sa-country-flag .fi {
                width: 23px;
                min-width: 23px;
                height: 17px;
            }

            .sa-search-results {
                position: fixed;
                top: 60px;
                left: 10px;
                right: 10px;
                width: auto;
                max-width: none;
                max-height: calc(100vh - 75px);
            }

            .sa-search-results-list {
                max-height: calc(100vh - 125px);
            }

            .sa-search-result {
                gap: 10px;
                padding: 11px 10px;
            }

            .sa-result-rank {
                width: 35px;
                min-width: 35px;
            }

            .sa-result-content strong {
                font-size: 12px;
            }

            .sa-university-header h3 {
                font-size: 17px;
            }

            .sa-university-item {
                gap: 10px;
                padding: 12px 10px;
                min-height: 72px;
            }

            .sa-university-rank {
                width: 44px;
                min-width: 44px;
                height: 44px;
                font-size: 12px;
            }

            .sa-university-info {
                gap: 4px;
            }

            .sa-university-info strong {
                font-size: 12px;
            }

            .sa-university-info span {
                font-size: 10px;
            }

            .sa-university-info small {
                font-size: 9px;
            }

            .sa-explore-panel {
                position: fixed;
                top: 60px;
                left: 10px;
                right: 10px;
                width: auto;
                max-width: none;
                max-height: calc(100vh - 75px);
                overflow-y: auto;
                padding: 15px;
                border-radius: 8px;
            }

            .sa-explore-columns {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .sa-explore-column a {
                min-height: 42px;
                font-size: 12px;
            }

            .sa-menu-drawer {
                width: 300px;
                max-width: 88vw;
                padding: 18px;
            }
        }

        /* =========================
   SMALL MOBILE
========================= */

        @media (max-width: 400px) {
            .sa-header-top {
                padding: 7px 8px;
                gap: 5px;
            }

            .sa-logo {
                width: 100px;
                flex-basis: 100px;
            }

            .sa-logo img {
                width: 98px;
            }

            .sa-country-trigger,
            .sa-header-actions .sa-explore-trigger,
            .sa-menu-trigger {
                width: 35px;
                height: 35px;
            }

            .sa-country-trigger {
                min-width: 35px;
            }

            .sa-menu-trigger {
                min-width: 35px;
            }

            .sa-country-popup,
            .sa-university-panel,
            .sa-explore-panel {
                left: 7px;
                right: 7px;
                padding: 12px;
            }

            .sa-country-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .sa-country {
                font-size: 13px;
            }

            .sa-university-item {
                gap: 8px;
                padding: 10px 7px;
            }

            .sa-university-rank {
                width: 40px;
                min-width: 40px;
                height: 40px;
                font-size: 11px;
            }

            .sa-university-info strong {
                font-size: 11px;
            }

            .sa-university-info span {
                font-size: 9px;
            }

            .sa-university-info small {
                font-size: 8px;
                padding: 3px 6px;
            }

            .sa-menu-drawer {
                width: 285px;
                max-width: 90vw;
            }
        }

        /* =========================
   VERY SMALL PHONES
========================= */

        @media (max-width: 340px) {
            .sa-header-top {
                gap: 3px;
                padding-left: 5px;
                padding-right: 5px;
            }

            .sa-logo {
                width: 88px;
                flex-basis: 88px;
            }

            .sa-logo img {
                width: 86px;
            }

            .sa-country-trigger,
            .sa-header-actions .sa-explore-trigger,
            .sa-menu-trigger {
                width: 32px;
                height: 32px;
            }

            .sa-country-trigger {
                min-width: 32px;
            }

            .sa-menu-trigger {
                min-width: 32px;
            }

            .sa-category-bar {
                gap: 12px;
                padding: 0 7px;
            }

            .sa-category-bar a {
                font-size: 10px;
            }
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countryTrigger = document.getElementById('saCountryTrigger');
            const countryPopup = document.getElementById('saCountryPopup');
            const countryOverlay = document.getElementById('saCountryOverlay');
            const countryClose = document.getElementById('saCountryClose');

            const exploreTrigger = document.getElementById('saExploreTrigger');
            const explorePanel = document.getElementById('saExplorePanel');

            const menuTrigger = document.getElementById('saMenuTrigger');
            const menuDrawer = document.getElementById('saMenuDrawer');
            const menuOverlay = document.getElementById('saMenuOverlay');
            const menuClose = document.getElementById('saMenuClose');
            const categoryMenu = document.getElementById('saCategoryMenu');

            const searchInput = document.getElementById('saUniversitySearch');
            const searchResults = document.getElementById('saSearchResults');
            const searchClose = document.getElementById('saSearchClose');

            const universityPanel = document.getElementById('saUniversityPanel');
            const selectedCountry = document.getElementById('saSelectedCountry');
            const universityClose = document.getElementById('saUniversityClose');

            const categoryCountries = document.querySelectorAll('.sa-category-country');
            const countryItems = document.querySelectorAll('.sa-country');
            const universityItems = document.querySelectorAll('.sa-university-item');
            const searchItems = document.querySelectorAll('.sa-search-result');

            function closeCountryPopup() {
                countryPopup.style.display = 'none';
                countryOverlay.style.display = 'none';
            }

            function closeUniversityPanel() {
                universityPanel.style.display = 'none';

                universityItems.forEach(function(item) {
                    item.style.display = 'none';
                });
            }

            function closeExplore() {
                explorePanel.style.display = 'none';
            }

            function closeSearch() {
                searchResults.style.display = 'none';

                searchItems.forEach(function(item) {
                    item.style.display = 'none';
                });
            }

            function showCountry(country) {
                closeCountryPopup();
                closeExplore();
                closeSearch();

                selectedCountry.textContent = country;

                let found = false;

                universityItems.forEach(function(item) {
                    if (item.dataset.country === country) {
                        item.style.display = 'flex';
                        found = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (found) {
                    universityPanel.style.display = 'block';
                }
            }

            function openCountryPopup() {
                closeUniversityPanel();
                closeExplore();
                closeSearch();

                countryPopup.style.display = 'block';
                countryOverlay.style.display = 'block';
            }

            function openMenu() {
                closeUniversityPanel();
                closeCountryPopup();
                closeExplore();
                closeSearch();

                menuDrawer.style.right = '0';
                menuOverlay.style.display = 'block';
            }

            function closeMenu() {
                menuDrawer.style.right = '-350px';
                menuOverlay.style.display = 'none';
            }

            countryTrigger.addEventListener('click', function(e) {
                e.stopPropagation();
                openCountryPopup();
            });

            countryClose.addEventListener('click', closeCountryPopup);
            countryOverlay.addEventListener('click', closeCountryPopup);

            countryItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    showCountry(this.dataset.country);
                });
            });

            categoryCountries.forEach(function(item) {
                item.addEventListener('click', function() {
                    showCountry(this.dataset.country);
                });
            });

            categoryMenu.addEventListener('click', function() {
                openMenu();
            });

            universityClose.addEventListener('click', closeUniversityPanel);

            exploreTrigger.addEventListener('click', function(e) {
                e.stopPropagation();

                const isOpen = explorePanel.style.display === 'block';

                closeUniversityPanel();
                closeCountryPopup();
                closeSearch();

                explorePanel.style.display = isOpen ? 'none' : 'block';
            });

            menuTrigger.addEventListener('click', function() {
                openMenu();
            });

            menuClose.addEventListener('click', closeMenu);
            menuOverlay.addEventListener('click', closeMenu);

            searchInput.addEventListener('input', function() {
                const search = this.value.trim().toLowerCase();

                if (!search) {
                    closeSearch();
                    return;
                }

                closeUniversityPanel();
                closeCountryPopup();
                closeExplore();

                let found = false;

                searchItems.forEach(function(item) {
                    const text = item.textContent.toLowerCase();

                    if (text.includes(search)) {
                        item.style.display = 'flex';
                        found = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                searchResults.style.display = found ? 'block' : 'none';
            });

            searchClose.addEventListener('click', function() {
                searchInput.value = '';
                closeSearch();
            });

            document.addEventListener('click', function(e) {
                if (
                    !explorePanel.contains(e.target) &&
                    !exploreTrigger.contains(e.target)
                ) {
                    closeExplore();
                }

                if (
                    !searchResults.contains(e.target) &&
                    !searchInput.contains(e.target)
                ) {
                    closeSearch();
                }
            });
        });
    </script>
