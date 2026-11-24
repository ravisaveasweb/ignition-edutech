<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        World University Rankings 2026 | Ignition Edutech
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <section class="ign-world-ranking">

        <div class="ign-world-container">

            <div class="ign-world-heading">

                <div class="ign-world-heading-left">

                    <div class="ign-world-badge">
                        <i class="bi bi-globe2"></i>
                        Global University Rankings
                    </div>

                    <h2>
                        World University
                        <span>Rankings 2026</span>
                    </h2>

                    <p>
                        Explore globally recognised universities and compare
                        their rankings, location, institutional status and
                        overall performance.
                    </p>

                </div>

                <a href="{{ route('study-abroad') }}" class="ign-world-view">
                    <i class="bi bi-arrow-left"></i>
                    Back to Study Abroad
                </a>

            </div>


            <div class="ign-ranking-toolbar">

                <div class="ign-ranking-search">

                    <i class="bi bi-search"></i>

                    <input type="text" id="ignAllUniversitySearch" placeholder="Search university by name...">

                </div>


                <div class="ign-ranking-filter">

                    <select id="ignAllCountryFilter">

                        <option value="">
                            All Countries
                        </option>

                        @foreach ($worldCountries as $country)
                            <option value="{{ strtolower($country) }}">
                                {{ $country }}
                            </option>
                        @endforeach

                    </select>

                    <i class="bi bi-chevron-down"></i>

                </div>

            </div>


            <div class="ign-ranking-list">

                <div class="ign-ranking-head">

                    <div>
                        Rank
                    </div>

                    <div>
                        University
                    </div>

                    <div>
                        Country
                    </div>

                    <div>
                        Status
                    </div>

                    <div>
                        Overall Score
                    </div>

                    <div>
                        Action
                    </div>

                </div>


                @foreach ($worldUniversities as $university)
                    <div class="ign-ranking-item" data-name="{{ strtolower($university->institution_name) }}"
                        data-country="{{ strtolower($university->country) }}">

                        <div class="ign-rank-number">

                            #{{ $university->rank_2026 }}

                        </div>


                        <div class="ign-ranking-university">

                            <div class="ign-ranking-logo">

                                {{ strtoupper(substr($university->institution_name, 0, 1)) }}

                            </div>

                            <div class="ign-ranking-university-info">

                                <h3>
                                    {{ $university->institution_name }}
                                </h3>

                                <span>
                                    World University Ranking 2026
                                </span>

                            </div>

                        </div>


                        <div class="ign-ranking-country">

                            <i class="bi bi-geo-alt-fill"></i>

                            {{ $university->country }}

                        </div>


                        <div class="ign-ranking-status">

                            <span>
                                {{ $university->status }}
                            </span>

                        </div>


                        <div class="ign-ranking-score">

                            <strong>
                                {{ $university->overall_score }}
                            </strong>

                            <div class="ign-score-progress">

                                <span style="width: {{ min((float) $university->overall_score, 100) }}%;"></span>

                            </div>

                        </div>


                        <div class="ign-ranking-action">

                            <a href="{{ route('study-abroad.application') }}" class="ign-ranking-apply">
                                Apply Now
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>
                @endforeach

            </div>


            <div class="ign-pagination">

                {{-- Previous --}}
                @if ($worldUniversities->onFirstPage())
                    <span class="ign-page-arrow disabled">
                        <i class="bi bi-chevron-left"></i>
                        Previous
                    </span>
                @else
                    <a href="{{ $worldUniversities->previousPageUrl() }}" class="ign-page-arrow">
                        <i class="bi bi-chevron-left"></i>
                        Previous
                    </a>
                @endif

                {{-- Page Numbers --}}
                <div class="ign-page-numbers">

                    @foreach ($worldUniversities->getUrlRange(max(1, $worldUniversities->currentPage() - 2), min($worldUniversities->lastPage(), $worldUniversities->currentPage() + 2)) as $page => $url)
                        @if ($page == $worldUniversities->currentPage())
                            <span class="ign-page-number active">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="ign-page-number">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                </div>

                {{-- Next --}}
                @if ($worldUniversities->hasMorePages())
                    <a href="{{ $worldUniversities->nextPageUrl() }}" class="ign-page-arrow">
                        Next
                        <i class="bi bi-chevron-right"></i>
                    </a>
                @else
                    <span class="ign-page-arrow disabled">
                        Next
                        <i class="bi bi-chevron-right"></i>
                    </span>
                @endif

            </div>


            <div class="ign-ranking-footer">

                <div class="ign-ranking-footer-content">

                    <div class="ign-footer-icon">

                        <i class="bi bi-mortarboard-fill"></i>

                    </div>

                    <div>

                        <h4>
                            Planning to study abroad?
                        </h4>

                        <p>
                            Get personalised guidance to choose your university,
                            course and study destination.
                        </p>

                    </div>

                </div>

                <a href="{{ route('study-abroad.application') }}" class="ign-footer-button">
                    Get Free Counselling
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const searchInput =
                document.getElementById('ignAllUniversitySearch');

            const countryFilter =
                document.getElementById('ignAllCountryFilter');

            const universityItems =
                document.querySelectorAll('.ign-ranking-item');

            function filterUniversities() {

                const search =
                    searchInput.value.toLowerCase().trim();

                const country =
                    countryFilter.value.toLowerCase();

                universityItems.forEach(function(item) {

                    const name =
                        item.dataset.name || '';

                    const itemCountry =
                        item.dataset.country || '';

                    const nameMatch =
                        name.includes(search);

                    const countryMatch = !country ||
                        itemCountry === country;

                    item.style.display =
                        nameMatch && countryMatch ?
                        '' :
                        'none';

                });

            }

            searchInput.addEventListener(
                'input',
                filterUniversities
            );

            countryFilter.addEventListener(
                'change',
                filterUniversities
            );

        });
    </script>

</body>

</html>
