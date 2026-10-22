
document.addEventListener('DOMContentLoaded', function () {
    const otpForm = document.getElementById('siOtpForm');
    const otpInput = document.getElementById('otp');
    const verifyButton = document.getElementById('siVerifyButton');
    const resendForm = document.getElementById('siResendOtpForm');
    const resendButton = document.getElementById('siResendOtpButton');
    const countdown = document.getElementById('siOtpCountdown');

    if (otpInput) {
        otpInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
        });
    }

    if (otpForm && verifyButton) {
        otpForm.addEventListener('submit', function () {
            if (!otpForm.checkValidity()) return;
            verifyButton.disabled = true;
            verifyButton.textContent = 'Verifying OTP...';
        });
    }

    if (resendForm && resendButton && countdown) {
        let remaining = Math.max(0, Number(countdown.dataset.seconds) || 0);
        let timer = null;

        function updateCountdown() {
            if (remaining <= 0) {
                remaining = 0;
                resendButton.disabled = false;
                countdown.textContent = 'You can request a new OTP now.';
                if (timer) clearInterval(timer);
                return;
            }

            resendButton.disabled = true;
            const minutes = String(Math.floor(remaining / 60)).padStart(2, '0');
            const seconds = String(remaining % 60).padStart(2, '0');

            countdown.textContent = 'Resend available in ' + minutes + ':' + seconds;
            remaining--;
        }

        updateCountdown();
        if (remaining > 0) timer = setInterval(updateCountdown, 1000);

        resendForm.addEventListener('submit', function (event) {
            if (resendButton.disabled) {
                event.preventDefault();
                return;
            }

            resendButton.disabled = true;
            resendButton.textContent = 'Sending OTP...';
        });
    }

    document.querySelectorAll('[data-si-auth-modal-close]').forEach(function (button) {
        button.addEventListener('click', function () {
            const modal = button.closest('.si-auth-modal-backdrop');
            if (modal) modal.remove();
        });
    });

    document.querySelectorAll('.si-auth-modal-backdrop').forEach(function (backdrop) {
        backdrop.addEventListener('click', function (event) {
            if (event.target === backdrop) backdrop.remove();
        });
    });

    // fOR ACCOUNT SETTINGS : 
        // Confirm account deactivation
    document.querySelectorAll('[data-si-confirm-deactivation]').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            const checkbox = form.querySelector(
                'input[name="confirm_deactivation"]'
            );

            if (!checkbox || !checkbox.checked) {
                event.preventDefault();
                alert('Please confirm that you want to deactivate your account.');
                return;
            }

            if (!confirm(
                'Are you sure you want to deactivate your Study India account? You will be signed out.'
            )) {
                event.preventDefault();
                return;
            }

            const button = form.querySelector('button[type="submit"]');

            if (button) {
                button.disabled = true;
                button.textContent = 'Deactivating account...';
            }
        });
    });

    // Confirm logout
    document.querySelectorAll('[data-si-confirm-logout]').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!confirm('Are you sure you want to log out?')) {
                event.preventDefault();
                return;
            }

            const button = form.querySelector('button[type="submit"]');

            if (button) {
                button.disabled = true;
                button.textContent = 'Logging out...';
            }
        });
    });
});
