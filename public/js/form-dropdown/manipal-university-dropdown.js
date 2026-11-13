
// MANIPAL DROPDOWNS + FORM VALIDATION

(function () {
    'use strict';

    function initManipalPage() {

        // COURSE DROPDOWNS

        document.querySelectorAll('.manipal-course-dropdown').forEach(function (dropdown) {

            if (dropdown.dataset.manipalInitialized === 'true') return;

            const trigger = dropdown.querySelector('.manipal-course-trigger');
            const selected = dropdown.querySelector('.manipal-course-selected');
            const hiddenInput = dropdown.querySelector('.manipal-course-value');
            const searchInput = dropdown.querySelector('.manipal-course-search');
            const options = [...dropdown.querySelectorAll('.manipal-course-option')];
            const emptyMessages = [...dropdown.querySelectorAll('.manipal-course-empty')];

            if (!trigger || !selected || !hiddenInput || !searchInput) return;

            dropdown.dataset.manipalInitialized = 'true';

            // TOGGLE DROPDOWN

            function toggleDropdown(open) {
                dropdown.classList.toggle('manipal-course-active', open);
                trigger.setAttribute('aria-expanded', String(open));

                if (open) searchInput.focus();
            }

            trigger.addEventListener('click', function () {
                toggleDropdown(!dropdown.classList.contains('manipal-course-active'));
            });

            // SELECT COURSE

            options.forEach(function (option) {

                option.addEventListener('click', function () {

                    const value = option.dataset.value;

                    hiddenInput.value = value;
                    selected.textContent = value;
                    selected.classList.add('manipal-course-has-value');

                    options.forEach(function (item) {
                        item.classList.toggle(
                            'manipal-course-option-selected',
                            item === option
                        );
                    });

                    searchInput.value = '';

                    options.forEach(function (item) {
                        item.hidden = false;
                    });

                    emptyMessages.forEach(function (item) {
                        item.hidden = true;
                    });

                    toggleDropdown(false);
                });
            });

            // SEARCH COURSES

            searchInput.addEventListener('input', function () {

                const searchValue = this.value.trim().toLowerCase();
                let visibleCount = 0;

                options.forEach(function (option) {

                    const matched = option.textContent.toLowerCase().includes(searchValue);

                    option.hidden = !matched;

                    if (matched) visibleCount++;
                });

                // Keep the first empty message for the no-courses state.
                if (emptyMessages.length > 1) {
                    emptyMessages[1].hidden = visibleCount > 0;
                }
            });

            // CLOSE ON OUTSIDE CLICK OR ESCAPE

            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    toggleDropdown(false);
                }
            });

            dropdown.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    toggleDropdown(false);
                    trigger.focus();
                }
            });
        });


        // BOTH MANIPAL FORMS VALIDATION

        document.querySelectorAll(
            '#manipalHomeBannerForm, #manipalHelpForm'
        ).forEach(function (form) {

            if (form.dataset.manipalValidation === 'true') return;

            const name = form.querySelector('[name="name"]');
            const mobile = form.querySelector('[name="mobile"]');
            const email = form.querySelector('[name="email"]');

            if (!name || !mobile || !email) return;

            form.dataset.manipalValidation = 'true';

            // VALIDATION RULES

            const namePattern = /^[a-zA-Z][a-zA-Z\s.'-]*$/;
            const mobilePattern = /^[6-9][0-9]{9}$/;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

            // VALIDATE INDIVIDUAL FIELDS

            function validateField(field, pattern, message) {

                const value = field.value.trim();

                if (value && !pattern.test(value)) {
                    field.setCustomValidity(message);
                    return false;
                }

                field.setCustomValidity('');
                return true;
            }

            // FULL NAME

            name.addEventListener('input', function () {
                this.value = this.value.replace(/[^a-zA-Z\s.'-]/g, '');
                this.setCustomValidity('');
            });

            name.addEventListener('blur', function () {

                const value = this.value.trim();

                if (value.length < 2 || !namePattern.test(value)) {
                    this.setCustomValidity('Please enter a valid full name.');
                } else {
                    this.setCustomValidity('');
                }
            });

            // MOBILE NUMBER

            mobile.setAttribute('maxlength', '10');
            mobile.setAttribute('inputmode', 'numeric');

            mobile.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '').slice(0, 10);
                this.setCustomValidity('');
            });

            mobile.addEventListener('blur', function () {
                validateField(
                    this,
                    mobilePattern,
                    'Please enter a valid 10-digit Indian mobile number.'
                );
            });

            // EMAIL

            email.addEventListener('input', function () {
                this.setCustomValidity('');
            });

            email.addEventListener('blur', function () {
                validateField(
                    this,
                    emailPattern,
                    'Please enter a valid email address.'
                );
            });

            // FORM SUBMISSION

            form.addEventListener('submit', function (event) {

                name.value = name.value.trim();
                mobile.value = mobile.value.trim();
                email.value = email.value.trim();

                // Validate all fields on submission.

                name.dispatchEvent(new Event('blur'));
                mobile.dispatchEvent(new Event('blur'));
                email.dispatchEvent(new Event('blur'));

                if (!form.checkValidity()) {
                    event.preventDefault();
                    form.reportValidity();
                }
            });
        });
    }

    // DOM READY

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initManipalPage);
    } else {
        initManipalPage();
    }

})();
