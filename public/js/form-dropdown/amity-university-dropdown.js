
(function () {
    'use strict';

    // INITIALIZE AMITY COURSE DROPDOWNS
    function initAmityCourseDropdown() {
        const dropdowns = document.querySelectorAll('.amity-course-dropdown');

        dropdowns.forEach(function (dropdown) {
            if (dropdown.dataset.amityInitialized) return;

            const trigger = dropdown.querySelector('.amity-course-trigger');
            const selected = dropdown.querySelector('.amity-course-selected');
            const hidden = dropdown.querySelector('.amity-course-value');
            const search = dropdown.querySelector('.amity-course-search');
            const optionsBox = dropdown.querySelector('.amity-course-options');

            if (!trigger || !selected || !hidden || !search || !optionsBox) return;

            dropdown.dataset.amityInitialized = 'true';

            const options = Array.from(optionsBox.querySelectorAll('.amity-course-option'));
            let empty = optionsBox.querySelector('.amity-course-empty');

            // FILTER COURSE OPTIONS
            function filterCourses(value = '') {
                const query = value.trim().toLowerCase();
                let count = 0;

                options.forEach(function (option) {
                    const match = option.textContent.trim().toLowerCase().includes(query);
                    option.hidden = !match;
                    if (match) count++;
                });

                if (!empty) {
                    empty = document.createElement('div');
                    empty.className = 'amity-course-empty';
                    empty.textContent = 'No matching courses found';
                    optionsBox.appendChild(empty);
                }

                empty.hidden = count > 0;
            }

            // CLOSE COURSE DROPDOWN
            function closeDropdown() {
                dropdown.classList.remove('amity-course-active');
                trigger.setAttribute('aria-expanded', 'false');
                search.value = '';
                filterCourses();
            }

            // OPEN OR CLOSE COURSE DROPDOWN
            trigger.addEventListener('click', function (event) {
                event.preventDefault();

                const isOpen = dropdown.classList.contains('amity-course-active');

                document.querySelectorAll('.amity-course-dropdown.amity-course-active')
                    .forEach(function (item) {
                        if (item !== dropdown) {
                            item.classList.remove('amity-course-active');
                            item.querySelector('.amity-course-trigger')
                                ?.setAttribute('aria-expanded', 'false');
                        }
                    });

                if (isOpen) {
                    closeDropdown();
                } else {
                    dropdown.classList.add('amity-course-active');
                    trigger.setAttribute('aria-expanded', 'true');
                    search.focus();
                }
            });

            // SELECT COURSE
            optionsBox.addEventListener('click', function (event) {
                const option = event.target.closest('.amity-course-option');

                if (!option || !optionsBox.contains(option)) return;

                const value = option.dataset.value;
                if (!value) return;

                selected.textContent = value;
                selected.classList.add('amity-course-has-value');
                hidden.value = value;

                options.forEach(function (item) {
                    item.classList.toggle('amity-course-option-selected', item === option);
                });

                hidden.dispatchEvent(new Event('change', { bubbles: true }));
                closeDropdown();
            });

            // SEARCH COURSES
            search.addEventListener('input', function () {
                filterCourses(this.value);
            });

            // CLOSE DROPDOWN WITH ESCAPE KEY
            search.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeDropdown();
                    trigger.focus();
                }
            });

            // CLOSE DROPDOWN WHEN CLICKING OUTSIDE
            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    closeDropdown();
                }
            });
        });
    }

    // INITIALIZE AMITY FORM VALIDATION
    function initAmityFormValidation() {
        const formIds = ['amityHomeBannerForm', 'amityHelpForm'];

        formIds.forEach(function (formId) {
            const form = document.getElementById(formId);

            if (!form || form.dataset.amityValidation) return;

            form.dataset.amityValidation = 'true';

            const name = form.querySelector('[name="name"]');
            const mobile = form.querySelector('[name="mobile"]');
            const email = form.querySelector('[name="email"]');

            // VALIDATE FULL NAME INPUT
            if (name) {
                name.maxLength = 60;
                name.autocomplete = 'name';

                name.addEventListener('input', function () {
                    this.value = this.value.replace(/[^a-zA-Z\s.'-]/g, '');
                    this.setCustomValidity('');
                });
            }

            // VALIDATE MOBILE INPUT
            if (mobile) {
                mobile.type = 'tel';
                mobile.maxLength = 10;
                mobile.inputMode = 'numeric';
                mobile.autocomplete = 'tel';

                mobile.addEventListener('input', function () {
                    this.value = this.value.replace(/\D/g, '').slice(0, 10);
                    this.setCustomValidity('');
                });
            }

            // VALIDATE EMAIL INPUT
            if (email) {
                email.maxLength = 254;
                email.autocomplete = 'email';

                email.addEventListener('input', function () {
                    this.setCustomValidity('');
                });
            }

            // VALIDATE FORM BEFORE SUBMISSION
            form.addEventListener('submit', function (event) {
                if (name) {
                    name.value = name.value.trim();

                    if (!/^[A-Za-z][A-Za-z\s.'-]{1,59}$/.test(name.value)) {
                        event.preventDefault();
                        name.setCustomValidity('Please enter a valid full name (2–60 characters).');
                        name.reportValidity();
                        name.focus();
                        return;
                    }

                    name.setCustomValidity('');
                }

                if (mobile) {
                    if (!/^[6-9]\d{9}$/.test(mobile.value.trim())) {
                        event.preventDefault();
                        mobile.setCustomValidity('Please enter a valid 10-digit Indian mobile number.');
                        mobile.reportValidity();
                        mobile.focus();
                        return;
                    }

                    mobile.setCustomValidity('');
                }

                if (email) {
                    email.value = email.value.trim();

                    if (!email.validity.valid || !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email.value)) {
                        event.preventDefault();
                        email.setCustomValidity('Please enter a valid email address.');
                        email.reportValidity();
                        email.focus();
                        return;
                    }

                    email.setCustomValidity('');
                }
            });
        });
    }

    // INITIALIZE ALL AMITY FUNCTIONALITY
    function initAmityPage() {
        initAmityCourseDropdown();
        initAmityFormValidation();
    }

    // RUN AFTER PAGE LOAD
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAmityPage);
    } else {
        initAmityPage();
    }

})();
