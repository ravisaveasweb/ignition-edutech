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
    <link rel="stylesheet" href="{{ asset('css/study-abroad-header.css') }}">


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
                <span class="sa-arrow"><i class="bi bi-chevron-down"></i></span>
            </button>

            <div class="sa-search">
                <span>⌕</span>
                <input type="text" id="saUniversitySearch" placeholder="Search Country and Universities"
                    autocomplete="off">
            </div>

            <div class="sa-header-actions">
                <a href="javascript:void(0);" class="sa-review">✎ Write a Review</a>

                <a href="javascript:void(0);" class="sa-counselling">
                    <a href="{{ route('study-abroad.application') }}">
                        <span>♧ Get Counselling</span>
                    </a>
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
            <a href="javascript:void(0);" id="saCategoryMenu">☰ Menu</a>

            @foreach ($worldCountries as $country)
                <a href="javascript:void(0);" class="sa-category-country" data-country="{{ $country }}">
                    {{ $country }}
                </a>
            @endforeach
        </div>

        {{-- Study Abroad Multi Level Category Menu --}}
        <div class="sa-navmenu-overlay" id="saNavmenuOverlay"></div>

        <div class="sa-navmenu-drawer" id="saNavmenuDrawer">
            {{-- Level 1: Countries --}}
            <div class="sa-navmenu-page sa-navmenu-page-active" id="saNavmenuCountriesPage">
                <div class="sa-navmenu-header">
                    <div class="sa-navmenu-header-title">
                        <span class="sa-navmenu-header-icon">🌎</span>
                        <div>
                            <strong>Study Abroad</strong>
                            <small>Choose your destination</small>
                        </div>
                    </div>

                    <button type="button" class="sa-navmenu-close" id="saNavmenuClose">×</button>
                </div>

                <div class="sa-navmenu-search">
                    <span class="sa-navmenu-search-icon">⌕</span>
                    <input type="text" id="saNavmenuCountrySearch" placeholder="Search country..."
                        autocomplete="off">
                    <button type="button" class="sa-navmenu-search-clear" id="saNavmenuSearchClear">×</button>
                </div>

                <div class="sa-navmenu-list-wrapper">
                    <ul class="sa-navmenu-list" id="saNavmenuCountryList">
                        @php
                            $saNavmenuCountries = [
                                'australia' => 'Study Abroad In Australia',
                                'uk' => 'Study Abroad In UK',
                                'canada' => 'Study Abroad In Canada',
                                'usa' => 'Study Abroad In USA',
                                'newZealand' => 'Study Abroad In New Zealand',
                                'singapore' => 'Study Abroad In Singapore',
                                'france' => 'Study Abroad In France',
                                'germany' => 'Study Abroad In Germany',
                                'spain' => 'Study Abroad In Spain',
                                'italy' => 'Study Abroad In Italy',
                                'netherlands' => 'Study Abroad In Netherlands',
                                'switzerland' => 'Study Abroad In Switzerland',
                                'sweden' => 'Study Abroad In Sweden',
                                'latvia' => 'Study Abroad In Latvia',
                                'lithuania' => 'Study Abroad In Lithuania',
                                'malta' => 'Study Abroad In Malta',
                                'finland' => 'Study Abroad In Finland',
                                'norway' => 'Study Abroad In Norway',
                                'denmark' => 'Study Abroad In Denmark',
                                'malaysia' => 'Study Abroad In Malaysia',
                                'restOfEurope' => 'Study Abroad In Rest of Europe',
                            ];
                        @endphp

                        @foreach ($saNavmenuCountries as $saNavmenuKey => $saNavmenuCountry)
                            <li class="sa-navmenu-country-item"
                                data-country-name="{{ strtolower($saNavmenuCountry) }}">
                                <button type="button" class="sa-navmenu-page-link"
                                    data-target="saNavmenuCountry-{{ $saNavmenuKey }}">
                                    <span class="sa-navmenu-country-name">{{ $saNavmenuCountry }}</span>
                                    <span class="sa-navmenu-arrow">›</span>
                                </button>
                            </li>
                        @endforeach

                        <li class="sa-navmenu-no-result" id="saNavmenuCountryNoResult">No country found</li>
                    </ul>
                </div>
            </div>

            {{-- Level 2/3: Country Pages --}}
            @foreach ($saNavmenuCountries as $saNavmenuKey => $saNavmenuCountry)
                {{-- Country Main Page --}}
                <div class="sa-navmenu-page" id="saNavmenuCountry-{{ $saNavmenuKey }}">
                    <div class="sa-navmenu-header">
                        <button type="button" class="sa-navmenu-back" data-target="saNavmenuCountriesPage">
                            <span>‹</span>
                            <span>Countries</span>
                        </button>

                        <button type="button" class="sa-navmenu-close sa-navmenu-inner-close">×</button>
                    </div>

                    <div class="sa-navmenu-country-title">
                        <span class="sa-navmenu-country-title-icon">🌎</span>
                        <div>
                            <strong>{{ $saNavmenuCountry }}</strong>
                            <small>Explore study options</small>
                        </div>
                    </div>

                    <ul class="sa-navmenu-list">
                        {{-- Universities --}}
                        <li>
                            <button type="button" class="sa-navmenu-page-link"
                                data-target="saNavmenuUniversities-{{ $saNavmenuKey }}">
                                <span>
                                    <b class="sa-navmenu-item-icon">🎓</b>
                                    Universities
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </button>
                        </li>

                        {{-- Scholarships --}}
                        <li>
                            <button type="button" class="sa-navmenu-page-link"
                                data-target="saNavmenuScholarships-{{ $saNavmenuKey }}">
                                <span>
                                    <b class="sa-navmenu-item-icon">🏆</b>
                                    Scholarships
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </button>
                        </li>

                        {{-- Visa --}}
                        <li>
                            <a href="{{ route('study-abroad.visa-process') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">🛂</b>
                                    Visa Process
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        {{-- Lead Form --}}
                        <li>
                            <a href="{{ route('study-abroad.application') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">📝</b>
                                    Lead Form
                                </span>
                                <span class="sa-navmenu-direct-label">Apply Now</span>
                            </a>
                        </li>

                        {{-- Exams --}}
                        <li>
                            <button type="button" class="sa-navmenu-page-link"
                                data-target="saNavmenuExams-{{ $saNavmenuKey }}">
                                <span>
                                    <b class="sa-navmenu-item-icon">📚</b>
                                    Exams
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </button>
                        </li>
                    </ul>
                </div>

                {{-- Universities Page --}}
                <div class="sa-navmenu-page" id="saNavmenuUniversities-{{ $saNavmenuKey }}">
                    <div class="sa-navmenu-header">
                        <button type="button" class="sa-navmenu-back"
                            data-target="saNavmenuCountry-{{ $saNavmenuKey }}">
                            <span>‹</span>
                            <span>{{ $saNavmenuCountry }}</span>
                        </button>

                        <button type="button" class="sa-navmenu-close sa-navmenu-inner-close">×</button>
                    </div>

                    <div class="sa-navmenu-subtitle">
                        <strong>{{ $saNavmenuCountry }} Universities</strong>
                        <small>Explore universities and institutions</small>
                    </div>

                    @php
                        $saNavmenuCountryMap = [
                            'australia' => 'Australia',
                            'uk' => 'United Kingdom',
                            'canada' => 'Canada',
                            'usa' => 'United States',
                            'newZealand' => 'New Zealand',
                            'singapore' => 'Singapore',
                            'france' => 'France',
                            'germany' => 'Germany',
                            'spain' => 'Spain',
                            'italy' => 'Italy',
                            'netherlands' => 'Netherlands',
                            'switzerland' => 'Switzerland',
                            'sweden' => 'Sweden',
                            'latvia' => 'Latvia',
                            'lithuania' => 'Lithuania',
                            'malta' => 'Malta',
                            'finland' => 'Finland',
                            'norway' => 'Norway',
                            'denmark' => 'Denmark',
                            'malaysia' => 'Malaysia',
                        ];

                        $saNavmenuDatabaseCountry = $saNavmenuCountryMap[$saNavmenuKey] ?? null;
                        $saNavmenuUniversities = collect();

                        if ($saNavmenuDatabaseCountry) {
                            $saNavmenuUniversities = $worldUniversities
                                ->filter(function ($university) use ($saNavmenuDatabaseCountry) {
                                    return strtolower(trim($university->country ?? '')) ===
                                        strtolower(trim($saNavmenuDatabaseCountry));
                                })
                                ->values();
                        }
                    @endphp

                    <div class="sa-navmenu-list-wrapper">
                        <ul class="sa-navmenu-list">
                            @forelse ($saNavmenuUniversities as $saNavmenuUniversity)
                                <li class="sa-navmenu-university-item">
                                    <a href="javascript:void(0);" class="sa-navmenu-university-link">
                                        <span class="sa-navmenu-university-icon">🎓</span>
                                        <span class="sa-navmenu-university-name">
                                            {{ $saNavmenuUniversity->institution_name }}
                                            @if ($saNavmenuUniversity->overall_score)
                                                <small class="sa-navmenu-university-score">Score:
                                                    {{ $saNavmenuUniversity->overall_score }}</small>
                                            @endif
                                        </span>
                                        <span class="sa-navmenu-arrow">›</span>
                                    </a>
                                </li>
                            @empty
                                <li class="sa-navmenu-empty">
                                    <span class="sa-navmenu-empty-icon">🎓</span>
                                    <strong>No universities found</strong>
                                    <small>University information is currently unavailable for this destination.</small>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                {{-- Scholarships Page --}}
                <div class="sa-navmenu-page" id="saNavmenuScholarships-{{ $saNavmenuKey }}">
                    <div class="sa-navmenu-header">
                        <button type="button" class="sa-navmenu-back"
                            data-target="saNavmenuCountry-{{ $saNavmenuKey }}">
                            <span>‹</span>
                            <span>{{ $saNavmenuCountry }}</span>
                        </button>

                        <button type="button" class="sa-navmenu-close sa-navmenu-inner-close">×</button>
                    </div>

                    <div class="sa-navmenu-subtitle">
                        <strong>Scholarships</strong>
                        <small>Funding opportunities for {{ $saNavmenuCountry }}</small>
                    </div>

                    <ul class="sa-navmenu-list">
                        <li>
                            <a href="{{ route('study-abroad.global-scholarships') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">🏛️</b>
                                    Government Scholarships
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('study-abroad.global-scholarships') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">🎓</b>
                                    University Scholarships
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('study-abroad.global-scholarships') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">🏆</b>
                                    Merit Scholarships
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('study-abroad.global-scholarships') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">💰</b>
                                    Need Based Scholarships
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Exams Page --}}
                <div class="sa-navmenu-page" id="saNavmenuExams-{{ $saNavmenuKey }}">
                    <div class="sa-navmenu-header">
                        <button type="button" class="sa-navmenu-back"
                            data-target="saNavmenuCountry-{{ $saNavmenuKey }}">
                            <span>‹</span>
                            <span>{{ $saNavmenuCountry }}</span>
                        </button>

                        <button type="button" class="sa-navmenu-close sa-navmenu-inner-close">×</button>
                    </div>

                    <div class="sa-navmenu-subtitle">
                        <strong>Study Abroad Exams</strong>
                        <small>Prepare for your international education journey</small>
                    </div>

                    <ul class="sa-navmenu-list">
                        <li>
                            <a href="{{ route('exams.show', 'ielts') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">📖</b>
                                    IELTS
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('exams.show', 'pte') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">📖</b>
                                    PTE
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('exams.show', 'toefl') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">📖</b>
                                    TOEFL
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('exams.show', 'gre') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">📖</b>
                                    GRE
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('exams.show', 'gmat') }}" class="sa-navmenu-direct-link">
                                <span>
                                    <b class="sa-navmenu-item-icon">📖</b>
                                    GMAT
                                </span>
                                <span class="sa-navmenu-arrow">›</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </header>

    <div class="sa-overlay" id="saCountryOverlay"></div>

    <div class="sa-country-popup" id="saCountryPopup">
        <div class="sa-country-popup-header">
            <strong>Select Your Study Preference</strong>
            <button type="button" id="saCountryClose">Skip</button>
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
                    <div class="sa-result-rank">#{{ $university->rank_2026 }}</div>
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
            <button type="button" id="saUniversityClose">×</button>
        </div>

        <div class="sa-university-list" id="saUniversityList">
            @foreach ($worldUniversities as $university)
                <div class="sa-university-item" data-country="{{ $university->country }}">
                    <div class="sa-university-rank">#{{ $university->rank_2026 }}</div>

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
        <div class="sa-explore-title">Explore More</div>

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

                <a href="javascript:void(0);">
                    <span>▣</span>
                    News
                </a>

                <a href="javascript:void(0);">
                    <span>▱</span>
                    Ask a Question
                </a>
            </div>

            <div class="sa-explore-column">
                <a href="javascript:void(0);">
                    <span>▱</span>
                    Top Courses
                </a>

                <a href="javascript:void(0);">
                    <span>♙</span>
                    Admission Alerts 2026
                </a>

                <a href="javascript:void(0);">
                    <span>▥</span>
                    Institute
                </a>

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
                <div class="sa-user-icon">👤</div>

                <div>
                    <strong>Hello, Welcome to Ignition Edutech</strong>
                    <p>Search Universities, Courses & More</p>
                </div>
            </div>

            <button type="button" id="saMenuClose">×</button>
        </div>

        <a href="{{ route('study-abroad.login') }}" class="sa-login-btn">
            Login/Register
        </a>
    </aside>




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

            const saNavmenuTrigger = document.getElementById('saCategoryMenu');
            const saNavmenuDrawer = document.getElementById('saNavmenuDrawer');
            const saNavmenuOverlay = document.getElementById('saNavmenuOverlay');
            const saNavmenuClose = document.getElementById('saNavmenuClose');
            const saNavmenuSearch = document.getElementById('saNavmenuCountrySearch');
            const saNavmenuSearchClear = document.getElementById('saNavmenuSearchClear');
            const saNavmenuPages = document.querySelectorAll('.sa-navmenu-page');
            const saNavmenuPageLinks = document.querySelectorAll('.sa-navmenu-page-link');
            const saNavmenuBackButtons = document.querySelectorAll('.sa-navmenu-back');
            const saNavmenuInnerClose = document.querySelectorAll('.sa-navmenu-inner-close');
            const saNavmenuCountryItems = document.querySelectorAll('.sa-navmenu-country-item');
            const saNavmenuCountryNoResult = document.getElementById('saNavmenuCountryNoResult');

            function hide(element) {
                if (element) element.style.display = 'none';
            }

            function show(element, display = 'block') {
                if (element) element.style.display = display;
            }

            function closeCountryPopup() {
                hide(countryPopup);
                hide(countryOverlay);
            }

            function closeUniversityPanel() {
                hide(universityPanel);
                universityItems.forEach(item => item.style.display = 'none');
            }

            function closeExplore() {
                hide(explorePanel);
            }

            function closeSearch() {
                hide(searchResults);
                searchItems.forEach(item => item.style.display = 'none');
            }

            function showCountry(country) {
                closeCountryPopup();
                closeExplore();
                closeSearch();

                if (selectedCountry) selectedCountry.textContent = country;

                let found = false;

                universityItems.forEach(item => {
                    const match = item.dataset.country === country;
                    item.style.display = match ? 'flex' : 'none';
                    if (match) found = true;
                });

                if (found) show(universityPanel);
            }

            function openCountryPopup() {
                closeUniversityPanel();
                closeExplore();
                closeSearch();
                show(countryPopup);
                show(countryOverlay);
            }

            function openMenu() {
                closeUniversityPanel();
                closeCountryPopup();
                closeExplore();
                closeSearch();

                if (menuDrawer) menuDrawer.style.right = '0';
                show(menuOverlay);
            }

            function closeMenu() {
                if (menuDrawer) menuDrawer.style.right = '-350px';
                hide(menuOverlay);
            }

            function searchUniversities() {
                const search = searchInput.value.trim().toLowerCase();

                if (!search) {
                    closeSearch();
                    return;
                }

                closeUniversityPanel();
                closeCountryPopup();
                closeExplore();

                let found = false;

                searchItems.forEach(item => {
                    const match = item.textContent.toLowerCase().includes(search);
                    item.style.display = match ? 'flex' : 'none';
                    if (match) found = true;
                });

                found ? show(searchResults) : hide(searchResults);
            }

            function saNavmenuShowPage(pageId) {
                if (!pageId) return;

                saNavmenuPages.forEach(page => {
                    page.classList.remove('sa-navmenu-page-active');
                });

                const targetPage = document.getElementById(pageId);

                if (!targetPage) {
                    console.warn('Study Abroad menu page not found:', pageId);
                    return;
                }

                targetPage.classList.add('sa-navmenu-page-active');

                const scrollWrapper = targetPage.querySelector('.sa-navmenu-list-wrapper');

                if (scrollWrapper) scrollWrapper.scrollTop = 0;
            }

            function saNavmenuResetSearch() {
                saNavmenuCountryItems.forEach(item => item.style.display = '');

                if (saNavmenuCountryNoResult) {
                    saNavmenuCountryNoResult.style.display = 'none';
                }

                if (saNavmenuSearchClear) {
                    saNavmenuSearchClear.classList.remove('sa-navmenu-search-clear-visible');
                }
            }

            function saNavmenuReset() {
                saNavmenuShowPage('saNavmenuCountriesPage');

                if (saNavmenuSearch) {
                    saNavmenuSearch.value = '';
                }

                saNavmenuResetSearch();
            }

            function saNavmenuOpen() {
                if (!saNavmenuDrawer || !saNavmenuOverlay) return;

                hide(countryPopup);
                hide(countryOverlay);
                hide(explorePanel);
                hide(universityPanel);
                hide(searchResults);

                saNavmenuDrawer.classList.add('sa-navmenu-drawer-active');
                saNavmenuOverlay.classList.add('sa-navmenu-overlay-active');
                document.body.classList.add('sa-navmenu-body-open');

                saNavmenuReset();
            }

            function saNavmenuCloseDrawer() {
                if (!saNavmenuDrawer || !saNavmenuOverlay) return;

                saNavmenuDrawer.classList.remove('sa-navmenu-drawer-active');
                saNavmenuOverlay.classList.remove('sa-navmenu-overlay-active');
                document.body.classList.remove('sa-navmenu-body-open');

                saNavmenuReset();
            }

            function saNavmenuSearchCountries() {
                if (!saNavmenuSearch) return;

                const searchValue = saNavmenuSearch.value.trim().toLowerCase();

                if (saNavmenuSearchClear) {
                    saNavmenuSearchClear.classList.toggle(
                        'sa-navmenu-search-clear-visible',
                        Boolean(searchValue)
                    );
                }

                let found = false;

                saNavmenuCountryItems.forEach(item => {
                    const countryName = item.getAttribute('data-country-name') || '';
                    const match = !searchValue || countryName.includes(searchValue);

                    item.style.display = match ? '' : 'none';

                    if (match) found = true;
                });

                if (saNavmenuCountryNoResult) {
                    saNavmenuCountryNoResult.style.display = found ? 'none' : 'block';
                }
            }

            if (countryTrigger) {
                countryTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    openCountryPopup();
                });
            }

            if (countryClose) countryClose.addEventListener('click', closeCountryPopup);
            if (countryOverlay) countryOverlay.addEventListener('click', closeCountryPopup);

            countryItems.forEach(item => {
                item.addEventListener('click', function() {
                    showCountry(this.dataset.country);
                });
            });

            categoryCountries.forEach(item => {
                item.addEventListener('click', function() {
                    showCountry(this.dataset.country);
                });
            });

            if (universityClose) {
                universityClose.addEventListener('click', closeUniversityPanel);
            }

            if (exploreTrigger) {
                exploreTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();

                    const isOpen = explorePanel && explorePanel.style.display === 'block';

                    closeUniversityPanel();
                    closeCountryPopup();
                    closeSearch();

                    isOpen ? closeExplore() : show(explorePanel);
                });
            }

            if (menuTrigger) {
                menuTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    openMenu();
                });
            }

            if (menuClose) menuClose.addEventListener('click', closeMenu);
            if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

            if (searchInput) {
                searchInput.addEventListener('input', searchUniversities);
            }

            if (searchClose) {
                searchClose.addEventListener('click', function() {
                    if (searchInput) searchInput.value = '';
                    closeSearch();
                });
            }

            document.addEventListener('click', function(event) {
                if (
                    explorePanel &&
                    exploreTrigger &&
                    !explorePanel.contains(event.target) &&
                    !exploreTrigger.contains(event.target)
                ) {
                    closeExplore();
                }

                if (
                    searchResults &&
                    searchInput &&
                    !searchResults.contains(event.target) &&
                    !searchInput.contains(event.target)
                ) {
                    closeSearch();
                }
            });

            saNavmenuPageLinks.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    saNavmenuShowPage(this.getAttribute('data-target'));
                });
            });

            saNavmenuBackButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    saNavmenuShowPage(this.getAttribute('data-target'));
                });
            });

            if (saNavmenuSearch) {
                saNavmenuSearch.addEventListener('input', saNavmenuSearchCountries);
            }

            if (saNavmenuSearchClear) {
                saNavmenuSearchClear.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();

                    if (saNavmenuSearch) {
                        saNavmenuSearch.value = '';
                        saNavmenuSearch.focus();
                    }

                    saNavmenuResetSearch();
                });
            }

            if (saNavmenuTrigger) {
                saNavmenuTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    saNavmenuOpen();
                });
            }

            if (saNavmenuClose) {
                saNavmenuClose.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    saNavmenuCloseDrawer();
                });
            }

            saNavmenuInnerClose.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    saNavmenuCloseDrawer();
                });
            });

            if (saNavmenuOverlay) {
                saNavmenuOverlay.addEventListener('click', saNavmenuCloseDrawer);
            }

            document.addEventListener('keydown', function(event) {
                if (
                    event.key === 'Escape' &&
                    saNavmenuDrawer &&
                    saNavmenuDrawer.classList.contains('sa-navmenu-drawer-active')
                ) {
                    saNavmenuCloseDrawer();
                }
            });
        });
    </script>
