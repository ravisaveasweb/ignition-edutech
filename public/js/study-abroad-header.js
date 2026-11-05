
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

            // function closeExplore() {
            //     hide(explorePanel);
            // }

            let saExploreCloseTimer = null;

            function closeExplore() {
                clearTimeout(saExploreCloseTimer);

                if (explorePanel) {
                    explorePanel.classList.remove('is-open');
                }
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
                // hide(explorePanel);
                closeExplore();
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

            // if (exploreTrigger) {
            //     exploreTrigger.addEventListener('click', function(event) {
            //         event.preventDefault();
            //         event.stopPropagation();

            //         const isOpen = explorePanel && explorePanel.style.display === 'block';

            //         closeUniversityPanel();
            //         closeCountryPopup();
            //         closeSearch();

            //         isOpen ? closeExplore() : show(explorePanel);
            //     });
            // }


            if (exploreTrigger && explorePanel) {

                function saOpenExplore() {
                    clearTimeout(saExploreCloseTimer);

                    // Close other header dropdowns
                    closeUniversityPanel();
                    closeCountryPopup();
                    closeSearch();
                    closeMenu();

                    // Open Explore
                    explorePanel.classList.add('is-open');
                }

                function saScheduleExploreClose() {
                    clearTimeout(saExploreCloseTimer);

                    saExploreCloseTimer = setTimeout(function() {
                        explorePanel.classList.remove('is-open');
                    }, 100);
                }

                // Hover on Explore button
                exploreTrigger.addEventListener('mouseenter', saOpenExplore);

                // Mouse leaves Explore button
                exploreTrigger.addEventListener('mouseleave', saScheduleExploreClose);

                // Mouse enters Explore panel
                explorePanel.addEventListener('mouseenter', function() {
                    clearTimeout(saExploreCloseTimer);
                });

                // Mouse leaves Explore panel
                explorePanel.addEventListener('mouseleave', saScheduleExploreClose);
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
                // if (
                //     explorePanel &&
                //     exploreTrigger &&
                //     !explorePanel.contains(event.target) &&
                //     !exploreTrigger.contains(event.target)
                // ) {
                //     closeExplore();
                // }

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
  