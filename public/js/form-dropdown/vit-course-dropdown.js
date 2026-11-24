
/* VIT COURSE DROPDOWN + HOME FORM VALIDATION */

(function () {
    'use strict';

    function initVitPage() {

        /* COURSE DROPDOWN */
        document.querySelectorAll('.vit-course-dropdown').forEach(function (dropdown) {
            if (dropdown.dataset.vitInitialized) return;

            const trigger = dropdown.querySelector('.vit-course-trigger');
            const selected = dropdown.querySelector('.vit-course-selected');
            const hidden = dropdown.querySelector('.vit-course-value');
            const search = dropdown.querySelector('.vit-course-search');
            const optionsBox = dropdown.querySelector('.vit-course-options');

            if (!trigger || !selected || !hidden || !search || !optionsBox) return;

            dropdown.dataset.vitInitialized = 'true';

            const options = Array.from(optionsBox.querySelectorAll('.vit-course-option'));
            let empty = optionsBox.querySelector('.vit-course-empty');

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
                    empty.className = 'vit-course-empty';
                    empty.textContent = 'No matching courses found';
                    optionsBox.appendChild(empty);
                }

                empty.hidden = count > 0;
            }

            function closeDropdown() {
                dropdown.classList.remove('vit-course-active');
                trigger.setAttribute('aria-expanded', 'false');
                search.value = '';
                filterCourses();
            }

            function closeOtherDropdowns() {
                document.querySelectorAll('.vit-course-dropdown.vit-course-active')
                    .forEach(function (item) {
                        if (item !== dropdown) {
                            item.classList.remove('vit-course-active');
                            item.querySelector('.vit-course-trigger')
                                ?.setAttribute('aria-expanded', 'false');

                            const input = item.querySelector('.vit-course-search');
                            if (input) input.value = '';

                            item.querySelectorAll('.vit-course-option').forEach(function (option) {
                                option.hidden = false;
                            });

                            const noResult = item.querySelector('.vit-course-empty');
                            if (noResult) noResult.hidden = true;
                        }
                    });
            }

            trigger.addEventListener('click', function (event) {
                event.preventDefault();

                const isOpen = dropdown.classList.contains('vit-course-active');

                closeOtherDropdowns();

                if (isOpen) {
                    closeDropdown();
                } else {
                    dropdown.classList.add('vit-course-active');
                    trigger.setAttribute('aria-expanded', 'true');
                    search.focus();
                }
            });

            optionsBox.addEventListener('click', function (event) {
                const option = event.target.closest('.vit-course-option');
                if (!option || !optionsBox.contains(option)) return;

                const value = option.dataset.value;
                if (!value) return;

                selected.textContent = value;
                selected.classList.add('vit-course-has-value');
                hidden.value = value;

                options.forEach(function (item) {
                    item.classList.toggle('vit-course-option-selected', item === option);
                });

                hidden.dispatchEvent(new Event('change', { bubbles: true }));
                closeDropdown();
            });

            search.addEventListener('input', function () {
                filterCourses(this.value);
            });

            search.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeDropdown();
                    trigger.focus();
                }
            });

            trigger.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') closeDropdown();
            });
        });

        /* CLOSE DROPDOWN ON OUTSIDE CLICK */
        if (!document.documentElement.dataset.vitOutsideClick) {
            document.documentElement.dataset.vitOutsideClick = 'true';

            document.addEventListener('click', function (event) {
                if (!event.target.closest('.vit-course-dropdown')) {
                    document.querySelectorAll('.vit-course-dropdown.vit-course-active')
                        .forEach(function (dropdown) {
                            dropdown.classList.remove('vit-course-active');
                            dropdown.querySelector('.vit-course-trigger')
                                ?.setAttribute('aria-expanded', 'false');

                            const search = dropdown.querySelector('.vit-course-search');
                            if (search) search.value = '';

                            dropdown.querySelectorAll('.vit-course-option').forEach(function (option) {
                                option.hidden = false;
                            });

                            const empty = dropdown.querySelector('.vit-course-empty');
                            if (empty) empty.hidden = true;
                        });
                }
            });
        }

        /* VIT HOME BANNER + HELP FORM VALIDATION */
        ['vitolHomeBannerForm', 'vitolHelpForm'].forEach(function (formId) {
            const form = document.getElementById(formId);

            if (!form || form.dataset.vitValidation) return;

            form.dataset.vitValidation = 'true';

            const name = form.querySelector('[name="name"]');
            const mobile = form.querySelector('[name="mobile"]');
            const email = form.querySelector('[name="email"]');
            const course = form.querySelector('.vit-course-value');
            const trigger = form.querySelector('.vit-course-trigger');

            if (name) {
                name.maxLength = 60;

                name.addEventListener('input', function () {
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
                    this.setCustomValidity('');
                });
            }

            if (mobile) {
                mobile.type = 'tel';
                mobile.maxLength = 10;
                mobile.inputMode = 'numeric';

                mobile.addEventListener('input', function () {
                    this.value = this.value.replace(/\D/g, '').slice(0, 10);
                    this.setCustomValidity('');
                });
            }

            if (email) {
                email.addEventListener('input', function () {
                    this.setCustomValidity('');
                });
            }

            if (course) {
                course.addEventListener('change', function () {
                    this.setCustomValidity('');
                });
            }

            form.addEventListener('submit', function (event) {
                if (name) {
                    name.value = name.value.trim();

                    if (!/^[a-zA-Z ]{2,60}$/.test(name.value)) {
                        event.preventDefault();
                        name.setCustomValidity('Please enter a valid full name (2–60 letters).');
                        name.reportValidity();
                        name.focus();
                        return;
                    }

                    name.setCustomValidity('');
                }

                if (mobile) {
                    if (!/^[6-9][0-9]{9}$/.test(mobile.value.trim())) {
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

                    if (!email.validity.valid) {
                        event.preventDefault();
                        email.setCustomValidity('Please enter a valid email address.');
                        email.reportValidity();
                        email.focus();
                        return;
                    }

                    email.setCustomValidity('');
                }

                if (course && !course.value.trim()) {
                    event.preventDefault();
                    alert('Please select your program of interest.');

                    if (trigger) trigger.focus();

                    return;
                }

                if (course) course.setCustomValidity('');
            });
        });

    } // END initVitPage()

    /* INITIALIZE VIT FEATURES */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initVitPage);
    } else {
        initVitPage();
    }

})();
