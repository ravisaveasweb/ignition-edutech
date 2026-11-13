

(function () {
    'use strict';

    /* INITIALIZE ENQUIRY POPUP */
    function initIgnUniversityEnquiryPopup() {
        const popup = document.getElementById('ignUniversityEnquiryPopup');

        if (!popup || popup.dataset.ignEnquiryInitialized === 'true') return;

        const popupCard = popup.querySelector('.ign-enquiry-popup');
        const closeButton = popup.querySelector('.ign-enquiry-popup-close');
        const sourceInput = popup.querySelector('#ignEnquirySource');
        const enquiryForm = popup.querySelector('#ignUniversityEnquiryForm');

        if (!popupCard || !closeButton || !enquiryForm) return;

        popup.dataset.ignEnquiryInitialized = 'true';

        /* OPEN POPUP */
        function openIgnEnquiryPopup(source) {
            if (sourceInput) sourceInput.value = source || 'University Popup';

            popup.classList.add('ign-enquiry-popup-active');
            popup.setAttribute('aria-hidden', 'false');
            document.body.classList.add('ign-enquiry-popup-open');

            const firstInput = enquiryForm.querySelector('input[name="name"]');

            if (firstInput) {
                setTimeout(function () {
                    firstInput.focus();
                }, 150);
            }
        }

        /* CLOSE POPUP */
        function closeIgnEnquiryPopup() {
            popup.classList.remove('ign-enquiry-popup-active');
            popup.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('ign-enquiry-popup-open');
            closeIgnEnquiryProgramDropdown();
        }

        /* OPEN FROM TRIGGER BUTTONS */
        document.addEventListener('click', function (event) {
            const trigger = event.target.closest('.ign-enquiry-popup-trigger');

            if (!trigger) return;

            event.preventDefault();
            openIgnEnquiryPopup(trigger.dataset.source || 'University Popup');
        });

        /* CLOSE BUTTON */
        closeButton.addEventListener('click', closeIgnEnquiryPopup);

        /* CLOSE ON BACKDROP CLICK */
        popup.addEventListener('click', function (event) {
            if (event.target === popup) closeIgnEnquiryPopup();
        });

        /* CLOSE WITH ESCAPE KEY */
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && popup.classList.contains('ign-enquiry-popup-active')) {
                closeIgnEnquiryPopup();
            }
        });

        /* MOBILE NUMBER - DIGITS ONLY */
        const mobileInput = enquiryForm.querySelector('input[name="mobile"]');

        if (mobileInput) {
            mobileInput.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '').slice(0, 10);
            });
        }

        /* INITIALIZE PROGRAM DROPDOWN */
        initIgnEnquiryProgramDropdown(popup);

        /* INITIALIZE AJAX SUBMISSION */
        initIgnEnquiryAjaxSubmission(popup, enquiryForm);
    }

    /* SEARCHABLE PROGRAM DROPDOWN */
    function initIgnEnquiryProgramDropdown(popup) {
        const dropdown = popup.querySelector('.ign-enquiry-program-dropdown');

        if (!dropdown || dropdown.dataset.ignProgramInitialized === 'true') return;

        dropdown.dataset.ignProgramInitialized = 'true';

        const trigger = dropdown.querySelector('.ign-enquiry-program-trigger');
        const selectedText = dropdown.querySelector('.ign-enquiry-program-selected');
        const hiddenInput = dropdown.querySelector('.ign-enquiry-program-value');
        const searchInput = dropdown.querySelector('.ign-enquiry-program-search');
        const options = dropdown.querySelectorAll('.ign-enquiry-program-option');
        const noResults = dropdown.querySelector('.ign-enquiry-program-no-results');
        const emptyMessage = dropdown.querySelector('.ign-enquiry-program-empty');
        const errorMessage = popup.querySelector('.ign-enquiry-program-error');

        if (!trigger || !selectedText || !hiddenInput || !searchInput) return;

        /* CLOSE DROPDOWN */
        function closeDropdown() {
            dropdown.classList.remove('ign-enquiry-program-active');
            trigger.setAttribute('aria-expanded', 'false');
        }

        /* FILTER PROGRAM OPTIONS */
        function filterPrograms(searchTerm) {
            let visibleCount = 0;

            options.forEach(function (option) {
                const optionText = option.textContent.trim().toLowerCase();
                const matches = optionText.includes(searchTerm.toLowerCase());

                option.hidden = !matches;

                if (matches) visibleCount++;
            });

            if (noResults) noResults.hidden = visibleCount !== 0;
            if (emptyMessage) emptyMessage.hidden = options.length !== 0;
        }

        /* OPEN DROPDOWN */
        function openDropdown() {
            dropdown.classList.add('ign-enquiry-program-active');
            trigger.setAttribute('aria-expanded', 'true');
            searchInput.value = '';

            filterPrograms('');

            setTimeout(function () {
                searchInput.focus();
            }, 50);
        }

        /* DROPDOWN TRIGGER */
        trigger.addEventListener('click', function (event) {
            event.preventDefault();

            const isOpen = dropdown.classList.contains('ign-enquiry-program-active');

            if (isOpen) {
                closeDropdown();
            } else {
                openDropdown();
            }

            if (hiddenInput.value.trim()) {
                dropdown.classList.remove('ign-enquiry-program-invalid');

                if (errorMessage) errorMessage.hidden = true;
            }
        });

        /* SEARCH PROGRAMS */
        searchInput.addEventListener('input', function () {
            filterPrograms(this.value.trim());
        });

        /* SELECT PROGRAM */
        options.forEach(function (option) {
            option.addEventListener('click', function () {
                const selectedValue = this.dataset.value || this.textContent.trim();

                hiddenInput.value = selectedValue;
                selectedText.textContent = selectedValue;
                selectedText.classList.add('ign-enquiry-program-has-value');

                options.forEach(function (item) {
                    item.classList.remove('ign-enquiry-program-option-selected');
                });

                this.classList.add('ign-enquiry-program-option-selected');
                dropdown.classList.remove('ign-enquiry-program-invalid');

                if (errorMessage) errorMessage.hidden = true;

                closeDropdown();
            });
        });

        /* CLOSE WHEN CLICKING OUTSIDE */
        document.addEventListener('click', function (event) {
            if (!dropdown.contains(event.target)) closeDropdown();
        });

        /* EXPOSE DROPDOWN HELPERS */
        dropdown.ignOpenDropdown = openDropdown;
        dropdown.ignCloseDropdown = closeDropdown;
    }

    /* CLOSE PROGRAM DROPDOWN */
    function closeIgnEnquiryProgramDropdown() {
        const popup = document.getElementById('ignUniversityEnquiryPopup');

        if (!popup) return;

        const dropdown = popup.querySelector('.ign-enquiry-program-dropdown');

        if (!dropdown) return;

        dropdown.classList.remove('ign-enquiry-program-active');

        const trigger = dropdown.querySelector('.ign-enquiry-program-trigger');

        if (trigger) trigger.setAttribute('aria-expanded', 'false');
    }

    /* AJAX FORM SUBMISSION */
    function initIgnEnquiryAjaxSubmission(popup, enquiryForm) {
        if (enquiryForm.dataset.ignAjaxInitialized === 'true') return;

        enquiryForm.dataset.ignAjaxInitialized = 'true';

        const successMessage = popup.querySelector('.ign-enquiry-popup-success');
        const submitButton = enquiryForm.querySelector('button[type="submit"], input[type="submit"]');
        const programInput = enquiryForm.querySelector('.ign-enquiry-program-value');
        const programDropdown = popup.querySelector('.ign-enquiry-program-dropdown');
        const programError = popup.querySelector('.ign-enquiry-program-error');

        const originalButtonText = submitButton
            ? (submitButton.tagName === 'INPUT' ? submitButton.value : submitButton.innerHTML)
            : '';

        enquiryForm.addEventListener('submit', async function (event) {
            event.preventDefault();

            /* VALIDATE FORM FIELDS */
            if (!enquiryForm.checkValidity()) {
                enquiryForm.reportValidity();
                return;
            }

            /* VALIDATE PROGRAM SELECTION */
            if (!programInput || !programInput.value.trim()) {
                if (programDropdown) {
                    programDropdown.classList.add('ign-enquiry-program-invalid');

                    if (typeof programDropdown.ignOpenDropdown === 'function') {
                        programDropdown.ignOpenDropdown();
                    }

                    const trigger = programDropdown.querySelector('.ign-enquiry-program-trigger');

                    if (trigger) trigger.focus();
                }

                if (programError) programError.hidden = false;

                return;
            }

            /* CLEAR PROGRAM VALIDATION */
            if (programDropdown) {
                programDropdown.classList.remove('ign-enquiry-program-invalid');
            }

            if (programError) programError.hidden = true;

            /* DISABLE SUBMIT BUTTON */
            if (submitButton) {
                submitButton.disabled = true;

                if (submitButton.tagName === 'INPUT') {
                    submitButton.value = 'Please Wait...';
                } else {
                    submitButton.innerHTML = 'Please Wait...';
                }
            }

            try {
                /* SEND AJAX REQUEST */
                const response = await fetch(enquiryForm.action, {
                    method: 'POST',
                    body: new FormData(enquiryForm),
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    credentials: 'same-origin'
                });

                const responseText = await response.text();
                let result;

                try {
                    result = JSON.parse(responseText);
                } catch (parseError) {
                    console.error('Invalid server response:', responseText);
                    throw new Error('The server returned an invalid response. Please check your Laravel logs.');
                }

                /* HANDLE SERVER ERRORS */
                if (!response.ok || !result.success) {
                    if (response.status === 422 && result.errors) {
                        const errorMessages = Object.values(result.errors).flat().join('\n');
                        alert(errorMessages || 'Please check your form details.');
                    } else {
                        alert(result.message || 'Something went wrong. Please try again.');
                    }

                    return;
                }

                /* SHOW SUCCESS MESSAGE */
                enquiryForm.style.display = 'none';

                if (successMessage) {
                    successMessage.hidden = false;
                } else {
                    alert(result.message || 'Thank you! We will contact you shortly.');
                }

                /* RELOAD SAME UNIVERSITY PAGE AFTER 2 SECONDS */
                setTimeout(function () {
                    window.location.reload();
                }, 2000);

            } catch (error) {
                console.error('University enquiry submission error:', error);
                alert(error.message || 'Unable to submit your enquiry. Please try again.');

            } finally {
                /* RESTORE BUTTON ONLY IF SUBMISSION FAILED */
                if (submitButton && enquiryForm.style.display !== 'none') {
                    submitButton.disabled = false;

                    if (submitButton.tagName === 'INPUT') {
                        submitButton.value = originalButtonText;
                    } else {
                        submitButton.innerHTML = originalButtonText;
                    }
                }
            }
        });
    }

    /* INITIALIZE ON PAGE LOAD */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initIgnUniversityEnquiryPopup);
    } else {
        initIgnUniversityEnquiryPopup();
    }
})();
