
/* DYPATIL COURSE DROPDOWN + FORM VALIDATION */

(function () {
    'use strict';

    function initDypatilPage() {

        // Initialize searchable course dropdowns
        document.querySelectorAll('.dypatil-course-dropdown').forEach(function (dropdown) {
            if (dropdown.dataset.dypatilInitialized === 'true') return;

            const trigger = dropdown.querySelector('.dypatil-course-trigger');
            const selected = dropdown.querySelector('.dypatil-course-selected');
            const hiddenInput = dropdown.querySelector('.dypatil-course-value');
            const searchInput = dropdown.querySelector('.dypatil-course-search');
            const options = [...dropdown.querySelectorAll('.dypatil-course-option')];
            const emptyMessages = [...dropdown.querySelectorAll('.dypatil-course-empty')];

            if (!trigger || !selected || !hiddenInput || !searchInput) return;

            dropdown.dataset.dypatilInitialized = 'true';

            // Open or close dropdown
            function toggleDropdown(open) {
                dropdown.classList.toggle('dypatil-course-active', open);
                trigger.setAttribute('aria-expanded', String(open));

                if (open) searchInput.focus();
            }

            // Toggle dropdown on trigger click
            trigger.addEventListener('click', function () {
                toggleDropdown(!dropdown.classList.contains('dypatil-course-active'));
            });

            // Select course and update hidden input
            options.forEach(function (option) {
                option.addEventListener('click', function () {
                    const value = option.dataset.value || option.textContent.trim();

                    hiddenInput.value = value;
                    selected.textContent = value;
                    selected.classList.add('dypatil-course-has-value');

                    options.forEach(function (item) {
                        item.classList.toggle('dypatil-course-option-selected', item === option);
                        item.hidden = false;
                    });

                    searchInput.value = '';

                    emptyMessages.forEach(function (item) {
                        item.hidden = true;
                    });

                    hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
                    toggleDropdown(false);
                });
            });

            // Filter courses and show no-results message
            searchInput.addEventListener('input', function () {
                const query = this.value.trim().toLowerCase();
                let visibleCount = 0;

                options.forEach(function (option) {
                    const matched = option.textContent.trim().toLowerCase().includes(query);
                    option.hidden = !matched;

                    if (matched) visibleCount++;
                });

                if (emptyMessages.length > 1) {
                    emptyMessages[1].hidden = visibleCount > 0;
                }
            });

            // Close dropdown on outside click
            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) toggleDropdown(false);
            });

            // Close dropdown on Escape
            dropdown.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    toggleDropdown(false);
                    trigger.focus();
                }
            });
        });

        // Initialize validation on both DPU forms
        document.querySelectorAll('#dpuHomeBannerForm, #dpuHelpForm').forEach(function (form) {
            if (form.dataset.dypatilValidationInitialized === 'true') return;

            const fields = {
                name: form.querySelector('[name="name"]'),
                mobile: form.querySelector('[name="mobile"]'),
                email: form.querySelector('[name="email"]')
            };

            if (!fields.name || !fields.mobile || !fields.email) return;

            form.dataset.dypatilValidationInitialized = 'true';

            // Configure mobile number input
            fields.mobile.setAttribute('inputmode', 'numeric');
            fields.mobile.setAttribute('maxlength', '10');

            // Create or reuse inline error messages
            function getErrorElement(input) {
                const parent = input.parentElement;
                let error = parent.querySelector('.dypatil-form-error[data-for="' + input.name + '"]');

                if (!error) {
                    error = document.createElement('small');
                    error.className = 'dypatil-form-error';
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

            // Display validation message and update field styling
            function showError(input, error, message) {
                error.textContent = message;
                error.hidden = !message;
                input.classList.toggle('dypatil-form-invalid', Boolean(message));
                input.classList.toggle('dypatil-form-valid', !message);
                input.setAttribute('aria-invalid', String(Boolean(message)));
            }

            // Validate full name with letters and spaces only
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

            // Validate Indian mobile number
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

            // Validate email address
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

            // Allow only letters and spaces while typing
            fields.name.addEventListener('input', function () {
                this.value = this.value.replace(/[^\p{L}\s]/gu, '');
                validateName();
            });

            // Allow only numeric mobile input
            fields.mobile.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '').slice(0, 10);
                validateMobile();
            });

            fields.email.addEventListener('input', validateEmail);

            // Validate fields on blur
            fields.name.addEventListener('blur', validateName);
            fields.mobile.addEventListener('blur', validateMobile);
            fields.email.addEventListener('blur', validateEmail);

            // Prevent submission when any field is invalid
            form.addEventListener('submit', function (event) {
                const isValid = [
                    validateName(),
                    validateMobile(),
                    validateEmail()
                ].every(Boolean);

                if (!isValid) {
                    event.preventDefault();
                    form.querySelector('.dypatil-form-invalid')?.focus();
                }
            });
        });
    }

    // Initialize page after DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDypatilPage);
    } else {
        initDypatilPage();
    }

})();
