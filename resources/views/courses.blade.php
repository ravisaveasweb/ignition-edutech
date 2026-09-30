@php
    $active_nav = 'courses';
    $page_title = 'Compare Courses & Universities | Ignition Edutech';
    $meta_description =
        'Search and compare online degree and certificate programs from top UGC-approved universities — fees, duration, mode and ratings, side by side.';
@endphp
<x-frontend-header />

@php
    /* TODO: Move courses/universities/offerings data into the controller or Blade data partials. */
@endphp
@includeIf('data.courses-data')
@includeIf('data.universities-data')
@includeIf('data.offerings-data')

@php
    /* Flatten courses + offerings into individual listing items (course @ university) */
    $listings = [];
    // Vanilla PHP equivalent of dd()
    // echo '<pre>';
    // var_dump($offerings);
    // echo '</pre>';
    // die();

    foreach ($offerings as $courseSlug => $offeringList) {
        if (!isset($courses[$courseSlug])) {
            continue;
        }
        $course = $courses[$courseSlug];
        foreach ($offeringList as $off) {
            $uniSlug = $off['university'];
            if (!isset($universities[$uniSlug])) {
                continue;
            }
            $listings[] = [
                'course_slug' => $off['url'],
                'course_name' => $course['name'],
                'full_name' => $course['full_name'],
                'category' => $course['category'],
                'category_label' => $course['category_label'],
                'level' => $course['level'],
                'icon' => $course['icon'],
                'university_slug' => $uniSlug,
                'university_name' => $universities[$uniSlug]['short'],
                'university_full' => $universities[$uniSlug]['name'],
                'fees_numeric' => $off['fees_numeric'],
                'fees_display' => $off['fees_display'],
                'duration' => $off['duration'],
                'mode' => $off['mode'],
                'rating' => $off['rating'],
                'popular' => $off['popular'],
            ];
        }
    }

    /* Counts for filter facets */
    $categoryCounts = [];
    $modeCounts = [];
    $uniCounts = [];
    foreach ($listings as $l) {
        $categoryCounts[$l['category']] = ($categoryCounts[$l['category']] ?? 0) + 1;
        $modeCounts[$l['mode']] = ($modeCounts[$l['mode']] ?? 0) + 1;
        $uniCounts[$l['university_slug']] = ($uniCounts[$l['university_slug']] ?? 0) + 1;
    }
    $categoryLabels = [];
    foreach ($courses as $c) {
        $categoryLabels[$c['category']] = $c['category_label'];
    }
@endphp
<section class="courses-hero">
    <div class="container">
        <span class="eyebrow">&#9670; COURSE FINDER</span>
        <h1>Find &amp; Compare the Right <span class="accent">Course &amp; University</span></h1>
        <p class="lede">Search {{ count($listings) }} programs from {{ count($universities) }} UGC-approved partner
            universities.
            Compare fees, duration and mode side by side &mdash; then apply with our free guidance.</p>
    </div>
</section>

<div class="container">
    <div class="course-toolbar">
        <div class="course-search">
            <input type="text" id="courseSearchInput"
                placeholder="Search by course name, e.g. &quot;MBA&quot; or &quot;Data Science&quot;">
        </div>
        <div class="course-filters" id="quickCategoryFilters">
            <button type="button" class="qf-btn active" data-category="all">All Courses</button>
            @foreach ($categoryLabels as $slug => $label)
                <button type="button" class="qf-btn" data-category="{{ $slug }}">{{ $label }}</button>
            @endforeach
        </div>
    </div>

    <div class="courses-layout">

        <aside class="filter-panel" id="filterPanel">
            <div class="fp-head">Filters <button type="button" id="clearFilters">Clear All</button></div>

            <div class="filter-group">
                <h4>Level</h4>
                @php
                    $levelCounts = [];
                    foreach ($listings as $l) {
                        $levelCounts[$l['level']] = ($levelCounts[$l['level']] ?? 0) + 1;
                    }
                @endphp
                @foreach ($levelCounts as $level => $count)
                    <label class="filter-option">
                        <input type="checkbox" class="f-level" value="{{ $level }}">
                        {{ $level }}
                        <span class="fo-count">{{ $count }}</span>
                    </label>
                @endforeach
            </div>

            <div class="filter-group">
                <h4>Mode of Learning</h4>
                @foreach ($modeCounts as $mode => $count)
                    <label class="filter-option">
                        <input type="checkbox" class="f-mode" value="{{ $mode }}">
                        {{ $mode }}
                        <span class="fo-count">{{ $count }}</span>
                    </label>
                @endforeach
            </div>

            <div class="filter-group">
                <h4>University</h4>
                @foreach ($uniCounts as $uniSlug => $count)
                    <label class="filter-option">
                        <input type="checkbox" class="f-university" value="{{ $uniSlug }}">
                        {{ $universities[$uniSlug]['short'] }}
                        <span class="fo-count">{{ $count }}</span>
                    </label>
                @endforeach
            </div>

            <div class="filter-group">
                <h4>Max Fees: <span id="feeRangeLabel">&#8377;4,00,000+</span></h4>
                <div class="fee-range-inputs">
                    <input type="range" id="feeRangeSlider" min="40000" max="400000" step="10000"
                        value="400000">
                </div>
                <p class="fee-range-value">Drag to filter by total program fees</p>
            </div>
        </aside>

        <div class="listing-main">
            <div class="listing-toolbar">
                <p class="listing-count"><strong id="resultCount">{{ count($listings) }}</strong> programs found</p>
                <div class="listing-sort">
                    Sort by
                    <select id="sortSelect" class="form-control" data-nice="false">
                        <option value="all">All</option>
                        <option value="popular">Popularity</option>
                        <option value="fees-low">Fees: Low to High</option>
                        <option value="fees-high">Fees: High to Low</option>
                        <option value="rating">Rating</option>
                    </select>
                </div>
            </div>

            <div class="active-chips" id="activeChips"></div>

            <div class="listing-grid" id="listingGrid">
                @foreach ($listings as $l)
                    <div class="listing-card" data-category="{{ $l['category'] }}" data-level="{{ $l['level'] }}"
                        data-mode="{{ $l['mode'] }}" data-university="{{ $l['university_slug'] }}"
                        data-fees="{{ $l['fees_numeric'] }}" data-rating="{{ $l['rating'] }}"
                        data-popular="{{ $l['popular'] ? '1' : '0' }}"
                        data-name="{{ strtolower($l['course_name'] . ' ' . $l['full_name'] . ' ' . $l['university_full']) }}">

                        <div class="lc-uni-badge">{{ strtoupper(substr($l['university_name'], 0, 4)) }}</div>

                        <div class="lc-main">
                            <div class="lc-tags">
                                <span class="tag-cat">{{ $l['category_label'] }}</span>
                                @if ($l['popular'])
                                    <span class="tag-popular">&#9733; Popular</span>
                                @endif
                            </div>
                            <h3><a href="{{ $l['course_slug'] }}.php">{{ $l['course_name'] }} &mdash;
                                    {{ $l['full_name'] }}</a>
                            </h3>
                            <p class="lc-uni-name">Offered by <strong>{{ $l['university_full'] }}</strong></p>
                            <div class="lc-meta">
                                <span>&#128337; {{ $l['duration'] }}</span>
                                <span>&#128187; {{ $l['mode'] }}</span>
                                <span class="lc-rating">&#9733; {{ number_format($l['rating'], 1) }}</span>
                                <label class="compare-check">
                                    <input type="checkbox" class="compare-input"
                                        data-id="{{ $l['course_slug'] . '-' . $l['university_slug'] }}"
                                        data-label="{{ $l['course_name'] . ' @ ' . $l['university_name'] }}"
                                        data-fees="{{ $l['fees_display'] }}" data-duration="{{ $l['duration'] }}"
                                        data-mode="{{ $l['mode'] }}"
                                        data-rating="{{ number_format($l['rating'], 1) }}">
                                    Compare
                                </label>
                            </div>
                        </div>

                        <div class="lc-side">
                            <div class="lc-fees"><span class="lbl">Total Fees</span>{{ $l['fees_display'] }}</div>
                            <div class="lc-actions">
                                <a href="{{ $l['course_slug'] }}.php" class="btn btn-outline">Details</a>
                                <a href="{{ route('contact') }}" class="btn btn-orange">Apply Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="no-results" id="noResults" style="display:none;">
                <div class="nr-icon">&#128269;</div>
                <p>No programs match your filters. Try clearing a few and search again.</p>
                <button type="button" class="btn btn-outline" id="noResultsClear">Clear All Filters</button>
            </div>
        </div>
    </div>

    <div class="cta-band-navy">
        <div>
            <h3>Not sure which course or university to pick?</h3>
            <p>Our counsellors compare options for free and shortlist the best fit for your goals and budget.</p>
        </div>
        <div class="actions">
            <a href="{{ route('contact') }}" class="btn btn-orange">Get Free Counselling &rarr;</a>
            <a href="https://wa.me/918655055150" class="btn btn-outline"
                style="border-color:rgba(255,255,255,.3); color:#fff;">WhatsApp Us</a>
        </div>
    </div>
</div>

<!-- Compare bar -->
<div class="compare-bar" id="compareBar">
    <div class="cb-chips" id="compareChips"></div>
    <div class="cb-actions">
        <button type="button" class="cb-clear" id="compareClear">Clear</button>
        <button type="button" class="btn btn-blue" id="compareNowBtn">Compare Now</button>
    </div>
</div>

<!-- Compare modal -->
<div class="compare-modal-overlay" id="compareModalOverlay">
    <div class="compare-modal">
        <div class="cm-head">
            <h3>Compare Programs</h3>
            <button type="button" class="cm-close" id="compareModalClose">&times;</button>
        </div>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                        <th>Program</th>
                        <th>Total Fees</th>
                        <th>Duration</th>
                        <th>Mode</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody id="compareModalBody"></tbody>
            </table>
        </div>
    </div>
</div>

<x-frontend-footer />
