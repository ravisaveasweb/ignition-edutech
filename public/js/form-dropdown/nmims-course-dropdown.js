
/* NMIMS COURSE DROPDOWN + BOTH FORM VALIDATIONS */

(function () {
    'use strict';

    /* COURSE DROPDOWN */
    function initNmimsCourseDropdown() {
        document.querySelectorAll('.nmims-course-dropdown').forEach(function (dropdown) {
            if (dropdown.dataset.nmimsInitialized === 'true') return;

            const trigger = dropdown.querySelector('.nmims-course-trigger');
            const selected = dropdown.querySelector('.nmims-course-selected');
            const hiddenInput = dropdown.querySelector('.nmims-course-value');
            const searchInput = dropdown.querySelector('.nmims-course-search');
            const optionsContainer = dropdown.querySelector('.nmims-course-options');

            if (!trigger || !selected || !hiddenInput || !searchInput || !optionsContainer) return;

            dropdown.dataset.nmimsInitialized = 'true';

            function filterCourses(value) {
                const search = value.toLowerCase().trim();
                const options = optionsContainer.querySelectorAll('.nmims-course-option');
                let visibleCount = 0;

                options.forEach(function (option) {
                    const match = option.textContent.toLowerCase().trim().includes(search);
                    option.hidden = !match;
                    if (match) visibleCount++;
                });

                let emptyMessage = optionsContainer.querySelector('.nmims-course-empty');

                if (!emptyMessage) {
                    emptyMessage = document.createElement('div');
                    emptyMessage.className = 'nmims-course-empty';
                    emptyMessage.textContent = 'No matching courses found';
                    optionsContainer.appendChild(emptyMessage);
                }

                emptyMessage.hidden = visibleCount > 0;
            }

            function closeDropdown() {
                dropdown.classList.remove('nmims-course-active');
                trigger.setAttribute('aria-expanded', 'false');
                searchInput.value = '';
                filterCourses('');
            }

            function closeOtherDropdowns() {
                document.querySelectorAll('.nmims-course-dropdown.nmims-course-active').forEach(function (other) {
                    if (other !== dropdown) {
                        other.classList.remove('nmims-course-active');
                        const otherTrigger = other.querySelector('.nmims-course-trigger');
                        if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            function openDropdown() {
                closeOtherDropdowns();
                dropdown.classList.add('nmims-course-active');
                trigger.setAttribute('aria-expanded', 'true');
                searchInput.focus();
            }

            trigger.addEventListener('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                dropdown.classList.contains('nmims-course-active') ? closeDropdown() : openDropdown();
            });

            optionsContainer.addEventListener('click', function (event) {
                const option = event.target.closest('.nmims-course-option');
                if (!option || !optionsContainer.contains(option)) return;

                const value = option.dataset.value;
                if (!value) return;

                selected.textContent = value;
                selected.classList.add('nmims-course-has-value');
                hiddenInput.value = value;

                optionsContainer.querySelectorAll('.nmims-course-option').forEach(function (item) {
                    item.classList.remove('nmims-course-option-selected');
                });

                option.classList.add('nmims-course-option-selected');
                hiddenInput.setCustomValidity('');
                hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
                closeDropdown();
            });

            searchInput.addEventListener('input', function () {
                filterCourses(this.value);
            });

            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) closeDropdown();
            });

            trigger.addEventListener('keydown', function (event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    openDropdown();
                }
                if (event.key === 'Escape') closeDropdown();
            });

            searchInput.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeDropdown();
                    trigger.focus();
                }
            });
        });
    }

    /* SHARED NMIMS FORM VALIDATION */
    function initNmimsFormValidation(formId) {
        const form = document.getElementById(formId);
        if (!form || form.dataset.nmimsValidationInitialized === 'true') return;

        const nameInput = form.querySelector('[name="name"]');
        const mobileInput = form.querySelector('[name="mobile"]');
        const emailInput = form.querySelector('[name="email"]');

        if (!nameInput || !mobileInput || !emailInput) return;

        form.dataset.nmimsValidationInitialized = 'true';

        nameInput.addEventListener('input', function () {
            this.value = this.value.replace(/[^a-zA-Z ]/g, '');
            this.setCustomValidity('');
        });

        mobileInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
            this.setCustomValidity('');
        });

        emailInput.addEventListener('input', function () {
            this.setCustomValidity('');
        });

        form.addEventListener('submit', function (event) {
            const name = nameInput.value.trim();
            const mobile = mobileInput.value.trim();
            const email = emailInput.value.trim();

            nameInput.value = name;
            mobileInput.value = mobile;
            emailInput.value = email;

            if (!/^[a-zA-Z ]{2,60}$/.test(name)) {
                event.preventDefault();
                nameInput.setCustomValidity('Please enter a valid full name (2–60 letters).');
                nameInput.reportValidity();
                nameInput.focus();
                return;
            }

            nameInput.setCustomValidity('');

            if (!/^[6-9][0-9]{9}$/.test(mobile)) {
                event.preventDefault();
                mobileInput.setCustomValidity('Please enter a valid 10-digit Indian mobile number.');
                mobileInput.reportValidity();
                mobileInput.focus();
                return;
            }

            mobileInput.setCustomValidity('');

            if (!emailInput.checkValidity()) {
                event.preventDefault();
                emailInput.setCustomValidity('Please enter a valid email address.');
                emailInput.reportValidity();
                emailInput.focus();
                return;
            }

            emailInput.setCustomValidity('');
        });
    }

    /* INITIALIZE ALL NMIMS FEATURES */
    function initNmimsUniversityFeatures() {
        initNmimsCourseDropdown();
        initNmimsFormValidation('nmimsHomeBannerForm');
        initNmimsFormValidation('nmimsHelpForm');
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initNmimsUniversityFeatures);
    } else {
        initNmimsUniversityFeatures();
    }

})();
