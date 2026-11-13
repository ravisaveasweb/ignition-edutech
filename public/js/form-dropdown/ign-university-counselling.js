
/* =========================================
   IGNITION COMMON UNIVERSITY COURSE DROPDOWN
========================================= */

(function () {

    function initIgnUniversityCounselling() {

        const dropdowns = document.querySelectorAll(
            '.ign-home-course-dropdown'
        );

        dropdowns.forEach(function (dropdown) {

            if (dropdown.dataset.initialized === 'true') {
                return;
            }

            const trigger = dropdown.querySelector(
                '.ign-home-course-trigger'
            );

            const selected = dropdown.querySelector(
                '.ign-home-course-selected'
            );

            const hiddenInput = dropdown.querySelector(
                '.ign-home-course-value'
            );

            const searchInput = dropdown.querySelector(
                '.ign-home-course-search-input'
            );

            const options = dropdown.querySelectorAll(
                '.ign-home-course-option'
            );

            if (!trigger || !selected || !hiddenInput || !searchInput) {
                return;
            }

            dropdown.dataset.initialized = 'true';

            // OPEN / CLOSE DROPDOWN
            trigger.addEventListener('click', function (e) {

                e.preventDefault();
                e.stopPropagation();

                // Close other dropdowns
                dropdowns.forEach(function (otherDropdown) {

                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove(
                            'ign-home-course-open'
                        );
                    }

                });

                dropdown.classList.toggle(
                    'ign-home-course-open'
                );

                if (dropdown.classList.contains(
                    'ign-home-course-open'
                )) {

                    searchInput.focus();

                }

            });

            // SELECT COURSE
            options.forEach(function (option) {

                option.addEventListener('click', function () {

                    const value = this.dataset.value;

                    selected.textContent = value;

                    hiddenInput.value = value;

                    dropdown.classList.remove(
                        'ign-home-course-open'
                    );

                    searchInput.value = '';

                    // Reset course list
                    options.forEach(function (item) {

                        item.style.display = 'block';

                    });

                });

            });

            // SEARCH COURSE
            searchInput.addEventListener('input', function () {

                const searchValue = this.value
                    .toLowerCase()
                    .trim();

                options.forEach(function (option) {

                    const courseName = option.textContent
                        .toLowerCase();

                    option.style.display =
                        courseName.includes(searchValue)
                            ? 'block'
                            : 'none';

                });

            });

        });

        // CLOSE WHEN CLICKING OUTSIDE
        if (!document.body.dataset.ignCourseOutsideClick) {

            document.body.dataset.ignCourseOutsideClick = 'true';

            document.addEventListener('click', function (e) {

                document.querySelectorAll(
                    '.ign-home-course-dropdown'
                ).forEach(function (dropdown) {

                    if (!dropdown.contains(e.target)) {

                        dropdown.classList.remove(
                            'ign-home-course-open'
                        );

                    }

                });

            });

        }

    }

    // INITIALIZE
    if (document.readyState === 'loading') {

        document.addEventListener(
            'DOMContentLoaded',
            initIgnUniversityCounselling
        );

    } else {

        initIgnUniversityCounselling();

    }

})();
