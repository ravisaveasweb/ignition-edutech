

        document.addEventListener('DOMContentLoaded', function() {
            // Data
            const nirfData = Array.isArray(window.siNirfData) ? window.siNirfData : [];

            // Elements
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

            // Study India Stream Drawer Elements
            const siCategoryMenu = document.getElementById('siCategoryMenu');
            const siStreamDrawer = document.getElementById('siStreamDrawer');
            const siStreamOverlay = document.getElementById('siStreamOverlay');
            const siStreamClose = document.getElementById('siStreamClose');
            const siStreamSearch = document.getElementById('siStreamSearch');
            const siStreamMainPage = document.getElementById('siStreamMainPage');
            const siStreamPages = document.querySelectorAll('.si-stream-page');
            const siStreamOpenButtons = document.querySelectorAll('.si-stream-open-subpage');
            const siStreamBackButtons = document.querySelectorAll('.si-stream-back-button');

            // Study Preference (two-step: Course → City)
            const siPreferenceTrigger = document.getElementById('siStudyPreferenceTrigger');
            const siPreferenceModal = document.getElementById('siPreferenceModal');
            const siPreferenceOverlay = document.getElementById('siPreferenceOverlay');
            const siPreferenceClose = document.getElementById('siPreferenceClose');
            const siPreferenceSkip = document.getElementById('siPreferenceSkip');
            const siPreferenceSearch = document.getElementById('siPreferenceSearch');
            const siPreferenceContent = document.getElementById('siPreferenceContent');
            const siPreferenceSelectedWrap = document.getElementById('siPreferenceSelectedWrap');
            const siPreferenceSelected = document.getElementById('siPreferenceSelected');
            const siPreferenceNoResults = document.getElementById('siPreferenceNoResults');
            const siPrefStepCourse = document.getElementById('siPrefStepCourse');
            const siPrefStepCity = document.getElementById('siPrefStepCity');
            const siCitySearch = document.getElementById('siCitySearch');
            const siCityGrid = document.getElementById('siCityGrid');
            const siCityEmpty = document.getElementById('siCityEmpty');
            const siCitySkip = document.getElementById('siCitySkip');
            const siCityClose = document.getElementById('siCityClose');
            const siModifyGoal = document.getElementById('siModifyGoal');
            const siGoalCourseName = document.getElementById('siGoalCourseName');

            let siSelectedCourses = [];
            let siSelectedCity = null;
            let siSelectedState = null;

            // Search State List
            const siStateSearch = document.getElementById('siStateSearch');
            const siStateEmpty = document.getElementById('siStateEmpty');

            if (siStateSearch) {
                siStateSearch.addEventListener('input', function() {
                    const term = this.value.trim().toLowerCase();
                    let visible = 0;
                    document.querySelectorAll('#siStateGrid .si-state-item').forEach(function(item) {
                        const matches = item.textContent.toLowerCase().includes(term);
                        item.style.display = matches ? '' : 'none';
                        if (matches) visible++;
                    });
                    if (siStateEmpty) siStateEmpty.hidden = visible > 0;
                });
            }

            
            // Popular cities with Bootstrap-icon style landmarks (CollegeDunia style)
            const siPopularCities = [{
                    name: 'New Delhi',
                    icon: 'bi-building'
                },
                {
                    name: 'Gurgaon',
                    icon: 'bi-buildings'
                },
                {
                    name: 'Noida',
                    icon: 'bi-geo'
                },
                {
                    name: 'Mumbai',
                    icon: 'bi-water'
                },
                {
                    name: 'Chennai',
                    icon: 'bi-lighthouse'
                },
                {
                    name: 'Kolkata',
                    icon: 'bi-bank'
                },
                {
                    name: 'Hyderabad',
                    icon: 'bi-building-fill'
                },
                {
                    name: 'Bangalore',
                    icon: 'bi-tree'
                },
                {
                    name: 'Pune',
                    icon: 'bi-house-door'
                },
                {
                    name: 'Ahmedabad',
                    icon: 'bi-mosque'
                },
                {
                    name: 'Lucknow',
                    icon: 'bi-bank2'
                },
                {
                    name: 'Coimbatore',
                    icon: 'bi-triangle'
                },
                {
                    name: 'Jaipur',
                    icon: 'bi-castle'
                },
                {
                    name: 'Chandigarh',
                    icon: 'bi-geo-alt'
                },
                {
                    name: 'Indore',
                    icon: 'bi-shop'
                },
                {
                    name: 'Bhopal',
                    icon: 'bi-building'
                }
            ];

            // Popular States
            const siPopularStates = [{
                    name: 'Delhi',
                    icon: 'bi-building'
                },
                {
                    name: 'Maharashtra',
                    icon: 'bi-water'
                },
                {
                    name: 'Karnataka',
                    icon: 'bi-tree'
                },
                {
                    name: 'Tamil Nadu',
                    icon: 'bi-lighthouse'
                },
                {
                    name: 'Uttar Pradesh',
                    icon: 'bi-bank'
                },
                {
                    name: 'West Bengal',
                    icon: 'bi-bank2'
                },
                {
                    name: 'Telangana',
                    icon: 'bi-building-fill'
                },
                {
                    name: 'Gujarat',
                    icon: 'bi-mosque'
                },
                {
                    name: 'Rajasthan',
                    icon: 'bi-castle'
                },
                {
                    name: 'Madhya Pradesh',
                    icon: 'bi-geo-alt'
                },
                {
                    name: 'Punjab',
                    icon: 'bi-house-door'
                },
                {
                    name: 'Haryana',
                    icon: 'bi-buildings'
                },
                {
                    name: 'Kerala',
                    icon: 'bi-palm'
                },
                {
                    name: 'Andhra Pradesh',
                    icon: 'bi-geo'
                },
                {
                    name: 'Bihar',
                    icon: 'bi-shop'
                },
                {
                    name: 'Odisha',
                    icon: 'bi-triangle'
                }
            ];

            // Restore from session
            try {
                const saved = JSON.parse(sessionStorage.getItem('siStudyPreferences') || '{}');
                if (Array.isArray(saved.courses)) siSelectedCourses = saved.courses.filter(c => typeof c ===
                    'string');
                if (saved.city) siSelectedCity = saved.city;
                if (saved.state) siSelectedState = saved.state;
            } catch (e) {
                siSelectedCourses = [];
                siSelectedCity = null;
                siSelectedState = null;
            }

            function siOpenPreferenceModal() {
                if (!siPreferenceModal || !siPreferenceOverlay) return;

                // Close other panels if you have those helpers
                if (typeof closeStatePopup === 'function') closeStatePopup();
                if (typeof closeInstitutePanel === 'function') closeInstitutePanel();
                if (typeof closeSearch === 'function') closeSearch();
                if (typeof closeExplore === 'function') closeExplore();
                if (typeof closeMenu === 'function') closeMenu();
                if (typeof siCloseStreamDrawer === 'function') siCloseStreamDrawer();

                siPreferenceModal.classList.add('active');
                siPreferenceOverlay.classList.add('active');
                siPreferenceModal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('si-preference-open');

                // Always start at course step
                showCourseStep();
                siRenderPreferenceSelection();
                if (siPreferenceSearch) setTimeout(() => siPreferenceSearch.focus(), 80);
            }

            function siClosePreferenceModal() {
                if (!siPreferenceModal || !siPreferenceOverlay) return;

                siPreferenceModal.classList.remove('active');
                siPreferenceOverlay.classList.remove('active');
                siPreferenceModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('si-preference-open');
            }

            function showCourseStep() {
                siPrefStepCourse.hidden = false;
                siPrefStepCity.hidden = true;
            }

            // Render both grids
            function renderCityAndStateGrids(filter = '') {
                const term = filter.trim().toLowerCase();
                const cityGrid = document.getElementById('siCityGrid');
                const stateGrid = document.getElementById('siStateGridPref');
                const emptyEl = document.getElementById('siCityEmpty');

                if (!cityGrid || !stateGrid) return;

                // Cities
                cityGrid.innerHTML = '';
                const filteredCities = siPopularCities.filter(c => c.name.toLowerCase().includes(term));

                filteredCities.forEach(city => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'si-city-item' + (siSelectedCity === city.name ? ' active' : '');
                    btn.dataset.type = 'city';
                    btn.dataset.value = city.name;
                    btn.innerHTML = `
                <span class="si-city-icon"><i class="bi ${city.icon}"></i></span>
                <span>${city.name}</span>
            `;
                    btn.addEventListener('click', () => selectLocation('city', city.name));
                    cityGrid.appendChild(btn);
                });

                // States
                stateGrid.innerHTML = '';
                const filteredStates = siPopularStates.filter(s => s.name.toLowerCase().includes(term));

                filteredStates.forEach(state => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'si-city-item' + (siSelectedState === state.name ? ' active' : '');
                    btn.dataset.type = 'state';
                    btn.dataset.value = state.name;
                    btn.innerHTML = `
                <span class="si-city-icon"><i class="bi ${state.icon}"></i></span>
                <span>${state.name}</span>
            `;
                    btn.addEventListener('click', () => selectLocation('state', state.name));
                    stateGrid.appendChild(btn);
                });

                // Show/hide empty message
                const hasResults = filteredCities.length > 0 || filteredStates.length > 0;
                if (emptyEl) emptyEl.hidden = hasResults;

                // Hide section titles when empty (optional polish)
                const cityTitle = cityGrid.previousElementSibling;
                const stateTitle = stateGrid.previousElementSibling;
                if (cityTitle) cityTitle.style.display = filteredCities.length ? '' : 'none';
                if (stateTitle) stateTitle.style.display = filteredStates.length ? '' : 'none';
            }

            function selectLocation(type, value) {
                if (type === 'city') {
                    siSelectedCity = value;
                    siSelectedState = null; // Clear opposite selection
                } else {
                    siSelectedState = value;
                    siSelectedCity = null;
                }

                // Save
                try {
                    sessionStorage.setItem('siStudyPreferences', JSON.stringify({
                        courses: siSelectedCourses,
                        city: siSelectedCity,
                        state: siSelectedState
                    }));
                } catch (e) {}

                document.dispatchEvent(new CustomEvent('si:study-preferences-updated', {
                    detail: {
                        courses: [...siSelectedCourses],
                        city: siSelectedCity,
                        state: siSelectedState
                    }
                }));

                // Visual update + close
                renderCityAndStateGrids(document.getElementById('siCitySearch')?.value || '');
                setTimeout(siClosePreferenceModal, 280);
            }

            function showCityStep(courseName) {
                siPrefStepCourse.hidden = true;
                siPrefStepCity.hidden = false;
                if (siGoalCourseName) siGoalCourseName.textContent = courseName;
                renderCityAndStateGrids();

                if (siCitySearch) {
                    siCitySearch.value = '';
                    setTimeout(() => siCitySearch.focus(), 80);
                }
            }

            // Course step helpers (same logic as before)
            function siRenderPreferenceSelection() {
                if (!siPreferenceModal) return;

                const courses = siPreferenceModal.querySelectorAll('.si-preference-course');

                courses.forEach(btn => {
                    const selected = siSelectedCourses.includes(btn.dataset.course);
                    btn.classList.toggle('active', selected);
                    btn.setAttribute('aria-pressed', selected ? 'true' : 'false');

                    const icon = btn.querySelector('i');
                    if (icon) icon.className = selected ? 'bi bi-check-lg' : 'bi bi-plus-lg';
                });

                if (siPreferenceSelected) {
                    siPreferenceSelected.innerHTML = '';

                    siSelectedCourses.forEach(course => {
                        const chip = document.createElement('span');
                        chip.className = 'si-preference-chip';

                        const label = document.createElement('span');
                        label.textContent = course;

                        const remove = document.createElement('button');
                        remove.type = 'button';
                        remove.textContent = '×';
                        remove.setAttribute('aria-label', 'Remove ' + course);
                        remove.addEventListener('click', () => {
                            siSelectedCourses = siSelectedCourses.filter(c => c !== course);
                            siRenderPreferenceSelection();
                        });

                        chip.append(label, remove);
                        siPreferenceSelected.appendChild(chip);
                    });
                }

                if (siPreferenceSelectedWrap) {
                    siPreferenceSelectedWrap.hidden = siSelectedCourses.length === 0;
                }
            }

            function siFilterPreferenceCourses() {
                if (!siPreferenceContent || !siPreferenceSearch) return;

                const term = siPreferenceSearch.value.trim().toLowerCase();
                let totalVisible = 0;

                siPreferenceContent.querySelectorAll('.si-preference-group').forEach(group => {
                    let groupVisible = 0;

                    group.querySelectorAll('.si-preference-course').forEach(btn => {
                        const matches = btn.dataset.course.toLowerCase().includes(term) ||
                            group.dataset.category.toLowerCase().includes(term);

                        btn.style.display = matches ? '' : 'none';
                        if (matches) groupVisible++;
                    });

                    group.style.display = groupVisible ? '' : 'none';
                    totalVisible += groupVisible;
                });

                if (siPreferenceNoResults) siPreferenceNoResults.hidden = totalVisible > 0;
            }

            // City step

            // Event listeners
            if (siPreferenceTrigger) siPreferenceTrigger.addEventListener('click', siOpenPreferenceModal);
            if (siPreferenceClose) siPreferenceClose.addEventListener('click', siClosePreferenceModal);
            if (siPreferenceSkip) siPreferenceSkip.addEventListener('click', siClosePreferenceModal);
            if (siPreferenceOverlay) siPreferenceOverlay.addEventListener('click', siClosePreferenceModal);
            if (siCityClose) siCityClose.addEventListener('click', siClosePreferenceModal);
            if (siCitySkip) siCitySkip.addEventListener('click', siClosePreferenceModal);
            if (siPreferenceSearch) siPreferenceSearch.addEventListener('input', siFilterPreferenceCourses);

            if (siCitySearch) {
                siCitySearch.addEventListener('input', function() {
                    renderCityAndStateGrids(this.value);
                });
            }

            if (siModifyGoal) {
                siModifyGoal.addEventListener('click', () => {
                    showCourseStep();
                    siRenderPreferenceSelection();
                });
            }

            // Course click → go to city step (single selection for clean flow)
            if (siPreferenceModal) {
                siPreferenceModal.querySelectorAll('.si-preference-course').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const course = this.dataset.course;
                        if (!course) return;

                        // Single-select behaviour (like CollegeDunia)
                        siSelectedCourses = [course];
                        siRenderPreferenceSelection();

                        // Immediately switch to city step
                        showCityStep(course);
                    });
                });
            }

            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') siClosePreferenceModal();
            });

            siRenderPreferenceSelection();

            // Stream Drawer
            function siOpenStreamDrawer() {
                if (!siStreamDrawer) return;

                closeStatePopup();
                closeInstitutePanel();
                closeSearch();
                closeExplore();
                closeMenu();

                siStreamDrawer.classList.add('active');
                if (siStreamOverlay) siStreamOverlay.classList.add('active');
                siShowStreamMainPage();

                if (siStreamSearch) {
                    setTimeout(function() {
                        siStreamSearch.focus();
                    }, 200);
                }
            }

            function siCloseStreamDrawer() {
                if (siStreamDrawer) siStreamDrawer.classList.remove('active');
                if (siStreamOverlay) siStreamOverlay.classList.remove('active');

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

                if (siStreamMainPage) siStreamMainPage.classList.add('active');
            }

            function siOpenStreamSubPage(targetId) {
                if (!targetId) return;

                siStreamPages.forEach(function(page) {
                    page.classList.remove('active');
                });

                const targetPage = document.getElementById(targetId);

                if (targetPage) {
                    targetPage.classList.add('active');
                    if (siStreamDrawer) siStreamDrawer.scrollTop = 0;
                }
            }

            function siFilterStreamCourses(searchValue) {
                const searchTerm = searchValue.trim().toLowerCase();
                const courseItems = document.querySelectorAll('#siStreamMainPage .si-stream-list > li');

                courseItems.forEach(function(item) {
                    const text = item.textContent.toLowerCase();
                    item.style.display = !searchTerm || text.includes(searchTerm) ? '' : 'none';
                });
            }

            // Open Stream Drawer
            if (siCategoryMenu) {
                siCategoryMenu.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    siOpenStreamDrawer();
                });
            }

            // Close Stream Drawer
            if (siStreamClose) {
                siStreamClose.addEventListener('click', function() {
                    siCloseStreamDrawer();
                });
            }

            // Stream Overlay
            if (siStreamOverlay) {
                siStreamOverlay.addEventListener('click', function() {
                    siCloseStreamDrawer();
                });
            }

            // Open Course Subpages
            siStreamOpenButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    siOpenStreamSubPage(this.getAttribute('data-target'));
                });
            });

            // Stream Back Buttons
            siStreamBackButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    siShowStreamMainPage();
                });
            });

            // Stream Course Search
            if (siStreamSearch) {
                siStreamSearch.addEventListener('input', function() {
                    siFilterStreamCourses(this.value);
                });
            }

            // Stream Escape Key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') siCloseStreamDrawer();
            });

            // State
            let activeState = 'all';

            // Helpers
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
                const value = parseInt(String(rank ?? '').replace(/[^\d]/g, ''), 10);
                return Number.isNaN(value) ? 999999 : value;
            }

            function sortByRank(a, b) {
                return getRankValue(a.rank) - getRankValue(b.rank);
            }

            // Close Functions
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

            // Open State Popup
            function openStatePopup() {
                closeInstitutePanel();
                closeSearch();
                closeExplore();
                closeMenu();

                if (statePopup) statePopup.style.display = 'block';
                if (commonOverlay) commonOverlay.style.display = 'block';
            }

            // Filter Data
            function getFilteredData() {
                const selectedCategory = categoryFilter ? normalize(categoryFilter.value) : 'all';
                const selectedYear = yearFilter ? normalize(yearFilter.value) : 'all';

                return nirfData
                    .filter(function(institute) {
                        const instituteState = normalize(institute.state);
                        const stateMatch = activeState === 'all' || instituteState === normalize(activeState);

                        const instituteCategory = normalize(institute.category);
                        const categoryMatch = selectedCategory === 'all' || instituteCategory ===
                            selectedCategory;

                        const instituteYear = normalize(institute.year);
                        const yearMatch = selectedYear === 'all' || instituteYear === selectedYear;

                        return stateMatch && categoryMatch && yearMatch;
                    })
                    .sort(sortByRank);
            }

            // Render Institute List
            function renderInstituteList(data) {
                if (!instituteList) return;

                instituteList.innerHTML = '';

                // No Data
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
                        ${institute.category ? `<small>${escapeHtml(institute.category)}</small>` : ''}
                        ${institute.year ? `<small>NIRF ${escapeHtml(institute.year)}</small>` : ''}
                        ${institute.score ? `<small>Score: ${escapeHtml(institute.score)}</small>` : ''}
                    </div>
                </div>
            `;

                    fragment.appendChild(item);
                });

                instituteList.appendChild(fragment);
            }

            // Show Selected State
            function showState(state, resetFilters = true) {
                activeState = state || 'all';

                // Update Select State Button
                if (locationText) locationText.textContent = activeState === 'all' ? 'Select State' : activeState;

                // Update Institute Panel Heading
                if (selectedState) selectedState.textContent = activeState === 'all' ? 'All States' : activeState;

                // Update Horizontal State Navigation
                stateCategoryItems.forEach(function(item) {
                    const itemState = item.dataset.state || 'all';
                    item.classList.toggle('active', normalize(itemState) === normalize(activeState));
                });

                // Update Popup State
                stateItems.forEach(function(item) {
                    const itemState = item.dataset.state || 'all';
                    item.classList.toggle('active', normalize(itemState) === normalize(activeState));
                });

                // Reset Filters
                if (resetFilters) {
                    if (categoryFilter) categoryFilter.value = 'all';
                    if (yearFilter) yearFilter.value = 'all';
                }

                // Close Other Panels
                closeStatePopup();
                closeSearch();
                closeExplore();

                // Render Institutes
                renderInstituteList(getFilteredData());

                // Open Institute Panel
                if (institutePanel) institutePanel.style.display = 'block';
            }

            // State Popup Selection
            stateItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    showState(this.dataset.state || 'all', true);
                });
            });

            // Horizontal State Navigation
            stateCategoryItems.forEach(function(item) {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    showState(this.dataset.state || 'all', true);
                });
            });

            // Select State Button
            if (locationTrigger) {
                locationTrigger.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    openStatePopup();
                });
            }

            // Close State Popup
            if (stateClose) stateClose.addEventListener('click', closeStatePopup);
            if (commonOverlay) commonOverlay.addEventListener('click', closeStatePopup);

            // Close Institute Panel
            if (instituteClose) instituteClose.addEventListener('click', closeInstitutePanel);

            // Category Filter
            if (categoryFilter) {
                categoryFilter.addEventListener('change', function() {
                    renderInstituteList(getFilteredData());
                    if (institutePanel) institutePanel.style.display = 'block';
                });
            }

            // Year Filter
            if (yearFilter) {
                yearFilter.addEventListener('change', function() {
                    renderInstituteList(getFilteredData());
                    if (institutePanel) institutePanel.style.display = 'block';
                });
            }

            // Search
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const search = normalize(this.value);

                    // Empty Search
                    if (!search) {
                        closeSearch();
                        return;
                    }

                    // Close Other Panels
                    closeStatePopup();
                    closeInstitutePanel();
                    closeExplore();

                    // Search NIRF Data
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
                                    return value !== null && value !== undefined && value !== '';
                                })
                                .join(' ')
                                .toLowerCase();

                            return searchableText.includes(search);
                        })
                        .sort(sortByRank)
                        .slice(0, 50);

                    // Render Search Results
                    renderSearchResults(results);

                    // Open Search Results
                    if (searchResults) searchResults.style.display = 'block';
                });
            }

            // Render Search Results
            function renderSearchResults(results) {
                if (!searchResultsList) return;

                searchResultsList.innerHTML = '';

                // No Results
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

            // Search Result Click
            if (searchResultsList) {
                searchResultsList.addEventListener('click', function(event) {
                    const result = event.target.closest('.si-search-result');
                    if (!result) return;

                    const state = result.dataset.state || 'all';
                    const category = result.dataset.category || 'all';
                    const year = result.dataset.year || 'all';

                    // Set Category
                    if (categoryFilter) categoryFilter.value = category || 'all';

                    // Set Year
                    if (yearFilter) yearFilter.value = year || 'all';

                    // Preserve Filters
                    showState(state, false);
                });
            }

            // Search Close
            if (searchClose) {
                searchClose.addEventListener('click', function() {
                    if (searchInput) searchInput.value = '';
                    closeSearch();
                });
            }

            // Explore Panel
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

            // Menu
            function openMenu() {
                closeStatePopup();
                closeInstitutePanel();
                closeSearch();
                closeExplore();

                if (menuDrawer) menuDrawer.style.right = '0';
                if (menuOverlay) menuOverlay.style.display = 'block';
            }

            if (menuTrigger) menuTrigger.addEventListener('click', openMenu);
            if (menuClose) menuClose.addEventListener('click', closeMenu);
            if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

            // Category Menu
            // Category menu is handled by the Study India Stream Drawer.

            // Outside Click
            document.addEventListener('click', function(event) {
                // Close Explore
                if (
                    explorePanel &&
                    exploreTrigger &&
                    !explorePanel.contains(event.target) &&
                    !exploreTrigger.contains(event.target)
                ) {
                    closeExplore();
                }

                // Close Search
                if (
                    searchResults &&
                    searchInput &&
                    !searchResults.contains(event.target) &&
                    !searchInput.contains(event.target)
                ) {
                    closeSearch();
                }
            });

            // Escape Key
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

            // Initial State
            stateCategoryItems.forEach(function(item) {
                item.classList.toggle('active', normalize(item.dataset.state || 'all') === 'all');
            });

            // Show All Institutes Initially
            renderInstituteList(getFilteredData());
        });


        //  NIRF Data 
    // <script>
    //     window.siNirfData = @json($siNirfData);
    // </script>
   