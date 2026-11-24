

/* GLA Online Course Dropdown + Form Validation */

(function () {
    'use strict';

    function initGlaOnlinePage() {

        // Initialize Searchable Course Dropdowns
        document.querySelectorAll('.gla-online-course-dropdown').forEach(function (dropdown) {
            if (dropdown.dataset.glaOnlineInitialized === 'true') return;

            const trigger = dropdown.querySelector('.gla-online-course-trigger');
            const selected = dropdown.querySelector('.gla-online-course-selected');
            const hiddenInput = dropdown.querySelector('.gla-online-course-value');
            const searchInput = dropdown.querySelector('.gla-online-course-search');
            const options = [...dropdown.querySelectorAll('.gla-online-course-option')];
            const emptyMessages = [...dropdown.querySelectorAll('.gla-online-course-empty')];

            if (!trigger || !selected || !hiddenInput || !searchInput) return;

            dropdown.dataset.glaOnlineInitialized = 'true';

            // Open Or Close Dropdown
            function toggleDropdown(open) {
                dropdown.classList.toggle('gla-online-course-active', open);
                trigger.setAttribute('aria-expanded', String(open));

                if (open) searchInput.focus();
            }

            // Toggle Dropdown On Trigger Click
            trigger.addEventListener('click', function () {
                toggleDropdown(!dropdown.classList.contains('gla-online-course-active'));
            });

            // Select Course And Update Hidden Input
            options.forEach(function (option) {
                option.addEventListener('click', function () {
                    const value = option.dataset.value || option.textContent.trim();

                    hiddenInput.value = value;
                    selected.textContent = value;
                    selected.classList.add('gla-online-course-has-value');

                    options.forEach(function (item) {
                        item.classList.toggle(
                            'gla-online-course-option-selected',
                            item === option
                        );
                        item.hidden = false;
                    });

                    searchInput.value = '';

                    emptyMessages.forEach(function (item) {
                        item.hidden = true;
                    });

                    hiddenInput.dispatchEvent(new Event('change', {
                        bubbles: true
                    }));

                    toggleDropdown(false);
                });
            });

            // Filter Courses And Show No-Results Message
            searchInput.addEventListener('input', function () {
                const query = this.value.trim().toLowerCase();
                let visibleCount = 0;

                options.forEach(function (option) {
                    const matched = option.textContent
                        .trim()
                        .toLowerCase()
                        .includes(query);

                    option.hidden = !matched;

                    if (matched) visibleCount++;
                });

                if (emptyMessages.length > 1) {
                    emptyMessages[1].hidden = visibleCount > 0;
                }
            });

            // Close Dropdown On Outside Click
            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    toggleDropdown(false);
                }
            });

            // Close Dropdown On Escape
            dropdown.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    toggleDropdown(false);
                    trigger.focus();
                }
            });
        });

        // Initialize Validation On Both GLA Online Forms
        document.querySelectorAll('#glaHomeBannerForm, #glaHelpForm').forEach(function (form) {
            if (form.dataset.glaOnlineValidationInitialized === 'true') return;

            const fields = {
                name: form.querySelector('[name="name"]'),
                mobile: form.querySelector('[name="mobile"]'),
                email: form.querySelector('[name="email"]')
            };

            if (!fields.name || !fields.mobile || !fields.email) return;

            form.dataset.glaOnlineValidationInitialized = 'true';

            // Configure Mobile Number Input
            fields.mobile.setAttribute('inputmode', 'numeric');
            fields.mobile.setAttribute('maxlength', '10');

            // Create Or Reuse Inline Error Messages
            function getErrorElement(input) {
                const parent = input.parentElement;

                let error = parent.querySelector(
                    '.gla-online-form-error[data-for="' + input.name + '"]'
                );

                if (!error) {
                    error = document.createElement('small');
                    error.className = 'gla-online-form-error';
                    error.dataset.for = input.name;
                    error.hidden = true;

                    input.insertAdjacentElement('afterend', error);
                }

                return error;
            }

            const errors = {
                name: getErrorElement(fields.name),
                mobile: getErrorElement(fields.mobile),
                email: getErrorElement(fields.email)
            };

            // Display Validation Message And Update Field Styling
            function showError(input, error, message) {
                error.textContent = message;
                error.hidden = !message;

                input.classList.toggle(
                    'gla-online-form-invalid',
                    Boolean(message)
                );

                input.classList.toggle(
                    'gla-online-form-valid',
                    !message
                );

                input.setAttribute(
                    'aria-invalid',
                    String(Boolean(message))
                );
            }

            // Validate Full Name With Letters And Spaces Only
            function validateName() {
                const value = fields.name.value.trim();
                const pattern = /^[\p{L}\s]+$/u;
                let message = '';

                if (!value) {
                    message = 'Please enter your full name.';
                } else if (value.length < 2) {
                    message = 'Name must contain at least 2 characters.';
                } else if (!pattern.test(value)) {
                    message = 'Name should contain letters only.';
                }

                showError(fields.name, errors.name, message);

                return !message;
            }

            // Validate Indian Mobile Number
            function validateMobile() {
                const value = fields.mobile.value.trim();
                let message = '';

                if (!value) {
                    message = 'Please enter your mobile number.';
                } else if (!/^[6-9]\d{9}$/.test(value)) {
                    message = 'Enter a valid 10-digit mobile number.';
                }

                showError(fields.mobile, errors.mobile, message);

                return !message;
            }

            // Validate Email Address
            function validateEmail() {
                const value = fields.email.value.trim();
                const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
                let message = '';

                if (!value) {
                    message = 'Please enter your email address.';
                } else if (!pattern.test(value)) {
                    message = 'Please enter a valid email address.';
                }

                showError(fields.email, errors.email, message);

                return !message;
            }

            // Allow Only Letters And Spaces While Typing
            fields.name.addEventListener('input', function () {
                this.value = this.value.replace(/[^\p{L}\s]/gu, '');
                validateName();
            });

            // Allow Only Numeric Mobile Input
            fields.mobile.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '').slice(0, 10);
                validateMobile();
            });

            fields.email.addEventListener('input', validateEmail);

            // Validate Fields On Blur
            fields.name.addEventListener('blur', validateName);
            fields.mobile.addEventListener('blur', validateMobile);
            fields.email.addEventListener('blur', validateEmail);

            // Prevent Submission When Any Field Is Invalid
            form.addEventListener('submit', function (event) {
                const isValid = [
                    validateName(),
                    validateMobile(),
                    validateEmail()
                ].every(Boolean);

                if (!isValid) {
                    event.preventDefault();
                    form.querySelector('.gla-online-form-invalid')?.focus();
                }
            });
        });
    }

    // Initialize Page After DOM Is Ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initGlaOnlinePage);
    } else {
        initGlaOnlinePage();
    }

})();