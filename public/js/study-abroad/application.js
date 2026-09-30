


document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('ignitionApplyModal');

    if (!modal) {
        return;
    }

    const form = document.getElementById('studyAbroadApplicationForm');
    const overlay = document.getElementById('ignitionApplyOverlay');
    const closeButton = document.getElementById('closeApplyForm');
    const successScreen = document.getElementById('applicationSuccess');
    const successCloseButton = document.getElementById('successCloseButton');

    const applicationHeader = document.getElementById('applicationHeader');
    const applicationProgress = document.getElementById('applicationProgress');
    const formBody = document.getElementById('applicationFormBody');

    const stepTitle = document.getElementById('applicationStepTitle');
    const stepDescription = document.getElementById('applicationStepDescription');
    const stepNumber = document.getElementById('applicationStepNumber');

    const sendOtpButton = document.getElementById('sendOtpButton');
    const resendOtpButton = document.getElementById('resendOtpButton');
    const submitButton = document.getElementById('submitApplicationButton');

    const otpPhoneDisplay = document.getElementById('otpPhoneDisplay');
    const otpTimer = document.getElementById('otpTimer');
    const otpError = document.getElementById('otpError');

    const otpInputs = document.querySelectorAll('.otp-input');
    const otpHiddenInput = document.getElementById('otp');

    const sendOtpUrl = modal.dataset.sendOtpUrl;
    const submitUrl = modal.dataset.submitUrl;

    const csrfToken = document.querySelector(
        'meta[name="csrf-token"]'
    )?.getAttribute('content');

    let currentStep = 1;
    let timerInterval = null;
    let remainingSeconds = 300;

    const stepData = {
        1: {
            title: 'Tell us about yourself',
            description: 'Enter your basic details to get started.'
        },
        2: {
            title: 'Choose your study preferences',
            description: 'Tell us where and what you would like to study.'
        },
        3: {
            title: 'Tell us about your academics',
            description: 'Share your academic background with us.'
        },
        4: {
            title: 'Verify your mobile number',
            description: 'Enter the OTP sent to your mobile number.'
        }
    };

    /* =====================================================
       OPEN MODAL
    ===================================================== */

    function openModal() {
        modal.classList.add('is-open');
        document.body.classList.add('application-modal-open');

        showStep(1);
    }

    /* =====================================================
       CLOSE MODAL
    ===================================================== */

    function closeModal() {
        modal.classList.remove('is-open');
        document.body.classList.remove('application-modal-open');
    }

    if (overlay) {
        overlay.addEventListener('click', closeModal);
    }

    if (closeButton) {
        closeButton.addEventListener('click', closeModal);
    }

    if (successCloseButton) {
        successCloseButton.addEventListener('click', function () {
            closeModal();
            resetApplicationForm();
        });
    }

    /* =====================================================
       FIND APPLY BUTTONS
    ===================================================== */

    const applyButtons = document.querySelectorAll(
        '#openApplyForm, .open-apply-form, [data-open-application]'
    );

    applyButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            openModal();
        });
    });

    /* =====================================================
       SHOW STEP
    ===================================================== */

    function showStep(step) {

        currentStep = step;

        const steps = document.querySelectorAll(
            '.application-step'
        );

        steps.forEach(function (item) {

            const itemStep = Number(
                item.dataset.step
            );

            item.classList.toggle(
                'active',
                itemStep === step
            );
        });

        updateHeader(step);
        updateProgress(step);

        if (formBody) {
            formBody.scrollTop = 0;
        }
    }

    /* =====================================================
       UPDATE HEADER
    ===================================================== */

    function updateHeader(step) {

        if (!stepData[step]) {
            return;
        }

        stepTitle.textContent = stepData[step].title;

        stepDescription.textContent =
            stepData[step].description;

        stepNumber.innerHTML =
            `0${step} <span>/ 04</span>`;
    }

    /* =====================================================
       UPDATE PROGRESS
    ===================================================== */

    function updateProgress(step) {

        const progressItems = document.querySelectorAll(
            '.progress-item'
        );

        progressItems.forEach(function (item) {

            const progressStep = Number(
                item.dataset.progress
            );

            item.classList.remove(
                'active',
                'completed'
            );

            if (progressStep < step) {
                item.classList.add('completed');
            }

            if (progressStep === step) {
                item.classList.add('active');
            }
        });

        const progressLines = document.querySelectorAll(
            '.progress-line'
        );

        progressLines.forEach(function (line, index) {

            if (index < step - 1) {
                line.style.background = '#172033';
            } else {
                line.style.background = '#e5e7eb';
            }
        });
    }

    /* =====================================================
       VALIDATE CURRENT STEP
    ===================================================== */

    function validateStep(step) {

        const currentStepElement =
            document.querySelector(
                `.application-step[data-step="${step}"]`
            );

        if (!currentStepElement) {
            return false;
        }

        const fields =
            currentStepElement.querySelectorAll(
                'input[required], select[required], textarea[required]'
            );

        for (const field of fields) {

            if (!field.checkValidity()) {

                field.reportValidity();

                return false;
            }
        }

        return true;
    }

    /* =====================================================
       NEXT BUTTONS
    ===================================================== */

    document.querySelectorAll(
        '.continue-btn[data-next]'
    ).forEach(function (button) {

        button.addEventListener('click', function () {

            const nextStep = Number(
                button.dataset.next
            );

            if (!validateStep(currentStep)) {
                return;
            }

            showStep(nextStep);
        });
    });

    /* =====================================================
       BACK BUTTONS
    ===================================================== */

    document.querySelectorAll(
        '.back-btn[data-back]'
    ).forEach(function (button) {

        button.addEventListener('click', function () {

            const previousStep = Number(
                button.dataset.back
            );

            showStep(previousStep);
        });
    });

    /* =====================================================
       SEND OTP
    ===================================================== */

    if (sendOtpButton) {

        sendOtpButton.addEventListener(
            'click',
            async function () {

                if (!validateStep(3)) {
                    return;
                }

                const phoneInput =
                    document.getElementById('phone');

                if (!phoneInput) {
                    return;
                }

                const phone =
                    phoneInput.value.trim();

                sendOtpButton.disabled = true;

                const originalText =
                    sendOtpButton.innerHTML;

                sendOtpButton.innerHTML =
                    '<i class="bi bi-arrow-repeat application-spinner"></i> Sending...';

                try {

                    const response =
                        await fetch(sendOtpUrl, {

                            method: 'POST',

                            headers: {
                                'Content-Type':
                                    'application/json',

                                'Accept':
                                    'application/json',

                                'X-CSRF-TOKEN':
                                    csrfToken
                            },

                            body: JSON.stringify({
                                phone: phone
                            })
                        });

                    const data =
                        await response.json();

                    if (!response.ok || !data.success) {

                        throw new Error(
                            data.message ||
                            'Unable to send OTP.'
                        );
                    }

                    if (data.development_otp) {

                        console.log(
                            'Development OTP:',
                            data.development_otp
                        );
                    }

                    if (otpPhoneDisplay) {

                        otpPhoneDisplay.textContent =
                            maskPhone(phone);
                    }

                    resetOtpFields();
                    startOtpTimer();

                    showStep(4);

                } catch (error) {

                    alert(
                        error.message ||
                        'Something went wrong while sending OTP.'
                    );

                } finally {

                    sendOtpButton.disabled = false;

                    sendOtpButton.innerHTML =
                        originalText;
                }
            }
        );
    }

    /* =====================================================
       MASK PHONE
    ===================================================== */

    function maskPhone(phone) {

        if (phone.length <= 4) {
            return phone;
        }

        const lastFour =
            phone.slice(-4);

        return '******' + lastFour;
    }

    /* =====================================================
       OTP INPUT
    ===================================================== */

    otpInputs.forEach(function (input, index) {

        input.addEventListener(
            'input',
            function () {

                input.value =
                    input.value.replace(/\D/g, '');

                if (input.value && index < otpInputs.length - 1) {

                    otpInputs[index + 1].focus();
                }

                updateOtpValue();
            }
        );

        input.addEventListener(
            'keydown',
            function (event) {

                if (
                    event.key === 'Backspace' &&
                    !input.value &&
                    index > 0
                ) {

                    otpInputs[index - 1].focus();
                }
            }
        );

        input.addEventListener(
            'paste',
            function (event) {

                event.preventDefault();

                const pastedData =
                    event.clipboardData
                        .getData('text')
                        .replace(/\D/g, '')
                        .slice(0, 6);

                pastedData
                    .split('')
                    .forEach(function (digit, digitIndex) {

                        if (otpInputs[digitIndex]) {

                            otpInputs[digitIndex].value =
                                digit;
                        }
                    });

                updateOtpValue();

                const nextEmpty =
                    Array.from(otpInputs)
                        .find(function (item) {
                            return !item.value;
                        });

                if (nextEmpty) {
                    nextEmpty.focus();
                } else {
                    otpInputs[otpInputs.length - 1].focus();
                }
            }
        );
    });

    /* =====================================================
       UPDATE OTP
    ===================================================== */

    function updateOtpValue() {

        let otp = '';

        otpInputs.forEach(function (input) {
            otp += input.value;
        });

        if (otpHiddenInput) {
            otpHiddenInput.value = otp;
        }
    }

    /* =====================================================
       RESET OTP
    ===================================================== */

    function resetOtpFields() {

        otpInputs.forEach(function (input) {
            input.value = '';
        });

        if (otpHiddenInput) {
            otpHiddenInput.value = '';
        }

        if (otpError) {
            otpError.textContent = '';
        }

        if (otpInputs.length) {
            otpInputs[0].focus();
        }
    }

    /* =====================================================
       OTP TIMER
    ===================================================== */

    function startOtpTimer() {

        clearInterval(timerInterval);

        remainingSeconds = 300;

        if (resendOtpButton) {
            resendOtpButton.disabled = true;
        }

        updateTimerDisplay();

        timerInterval = setInterval(function () {

            remainingSeconds--;

            updateTimerDisplay();

            if (remainingSeconds <= 0) {

                clearInterval(timerInterval);

                if (resendOtpButton) {
                    resendOtpButton.disabled = false;
                }
            }

        }, 1000);
    }

    function updateTimerDisplay() {

        if (!otpTimer) {
            return;
        }

        const minutes =
            Math.floor(
                remainingSeconds / 60
            );

        const seconds =
            remainingSeconds % 60;

        otpTimer.textContent =
            `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    }

    /* =====================================================
       RESEND OTP
    ===================================================== */

    if (resendOtpButton) {

        resendOtpButton.addEventListener(
            'click',
            async function () {

                const phoneInput =
                    document.getElementById('phone');

                if (!phoneInput) {
                    return;
                }

                const phone =
                    phoneInput.value.trim();

                resendOtpButton.disabled = true;

                try {

                    const response =
                        await fetch(sendOtpUrl, {

                            method: 'POST',

                            headers: {
                                'Content-Type':
                                    'application/json',

                                'Accept':
                                    'application/json',

                                'X-CSRF-TOKEN':
                                    csrfToken
                            },

                            body: JSON.stringify({
                                phone: phone
                            })
                        });

                    const data =
                        await response.json();

                    if (!response.ok || !data.success) {

                        throw new Error(
                            data.message ||
                            'Unable to resend OTP.'
                        );
                    }

                    if (data.development_otp) {

                        console.log(
                            'Development OTP:',
                            data.development_otp
                        );
                    }

                    resetOtpFields();
                    startOtpTimer();

                } catch (error) {

                    resendOtpButton.disabled = false;

                    alert(
                        error.message ||
                        'Unable to resend OTP.'
                    );
                }
            }
        );
    }

    /* =====================================================
       SUBMIT APPLICATION
    ===================================================== */

    if (form) {

        form.addEventListener(
            'submit',
            async function (event) {

                event.preventDefault();

                updateOtpValue();

                if (!otpHiddenInput.value ||
                    otpHiddenInput.value.length !== 6) {

                    if (otpError) {
                        otpError.textContent =
                            'Please enter the complete 6-digit OTP.';
                    }

                    return;
                }

                if (otpError) {
                    otpError.textContent = '';
                }

                submitButton.disabled = true;
                submitButton.classList.add('loading');

                try {

                    const formData =
                        new FormData(form);

                    const response =
                        await fetch(submitUrl, {

                            method: 'POST',

                            headers: {
                                'Accept':
                                    'application/json',

                                'X-CSRF-TOKEN':
                                    csrfToken
                            },

                            body: formData
                        });

                    const data =
                        await response.json();

                    if (!response.ok || !data.success) {

                        if (data.errors) {

                            const firstError =
                                Object.values(
                                    data.errors
                                )[0];

                            throw new Error(
                                Array.isArray(firstError)
                                    ? firstError[0]
                                    : firstError
                            );
                        }

                        throw new Error(
                            data.message ||
                            'Unable to submit application.'
                        );
                    }

                    showSuccess();

                } catch (error) {

                    if (otpError) {

                        otpError.textContent =
                            error.message ||
                            'Unable to submit application.';
                    }

                } finally {

                    submitButton.disabled = false;
                    submitButton.classList.remove('loading');
                }
            }
        );
    }

    /* =====================================================
       SHOW SUCCESS
    ===================================================== */

    function showSuccess() {

        clearInterval(timerInterval);

        if (applicationHeader) {
            applicationHeader.style.display = 'none';
        }

        if (applicationProgress) {
            applicationProgress.style.display = 'none';
        }

        if (formBody) {
            formBody.style.display = 'none';
        }

        if (successScreen) {
            successScreen.classList.add('active');
        }
    }

    /* =====================================================
       RESET FORM
    ===================================================== */

    function resetApplicationForm() {

        clearInterval(timerInterval);

        if (form) {
            form.reset();
        }

        resetOtpFields();

        if (applicationHeader) {
            applicationHeader.style.display = '';
        }

        if (applicationProgress) {
            applicationProgress.style.display = '';
        }

        if (formBody) {
            formBody.style.display = '';
        }

        if (successScreen) {
            successScreen.classList.remove('active');
        }

        if (sendOtpButton) {
            sendOtpButton.disabled = false;
        }

        showStep(1);
    }

    /* =====================================================
       ESCAPE KEY
    ===================================================== */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                modal.classList.contains('is-open')
            ) {
                closeModal();
            }
        }
    );

    /* =====================================================
       INITIAL STATE
    ===================================================== */

    showStep(1);

});