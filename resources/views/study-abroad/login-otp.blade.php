<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/img/logo/favicon.png" />

    <title>Verify Email Address</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
        }

        .otp-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .otp-box {
            width: 100%;
            max-width: 450px;
            background: #fff;
            padding: 35px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
        }

        .otp-box h1 {
            margin-bottom: 10px;
        }

        .otp-box p {
            color: #777;
            line-height: 1.6;
        }

        .phone-number {
            font-weight: 600;
            color: #222;
        }

        .otp-input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            font-size: 24px;
            letter-spacing: 8px;
            margin: 20px 0;
        }

        .otp-input:focus {
            outline: none;
            border-color: #eb933a;
        }

        .verify-button {
            width: 100%;
            padding: 14px;
            border: 0;
            border-radius: 8px;
            background: #eb933a;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .verify-button:hover {
            background: #d9822f;
        }

        .error-box {
            background: #ffeaea;
            color: #c00;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .success-box {
            background: #eaf8ee;
            color: #16803c;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        /* RESEND OTP */

        .resend-section {
            margin-top: 20px;
        }

        .resend-text {
            margin: 0;
            font-size: 14px;
            color: #777;
        }

        .resend-timer {
            display: inline-block;
            margin-left: 4px;
            color: #eb933a;
            font-weight: 600;
        }

        .resend-button {
            display: none;
            margin: 8px auto 0;
            padding: 8px 16px;
            border: 0;
            background: transparent;
            color: #eb933a;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .resend-button:hover {
            text-decoration: underline;
        }

        .resend-button:disabled {
            opacity: .6;
            cursor: not-allowed;
        }

        .resend-message {
            margin-top: 10px;
            font-size: 13px;
            min-height: 18px;
        }

        .resend-message.success {
            color: #16803c;
        }

        .resend-message.error {
            color: #c00;
        }
    </style>

</head>

<body>

    <div class="otp-wrapper">

        <div class="otp-box">

            <h1>
                Verify Email Address
            </h1>

            <p>
                We have sent a 4-digit OTP to
            </p>

            <p class="phone-number">
                {{ $application->email }}
            </p>

            @if (session('success'))
                <div class="success-box">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="error-box">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="error-box">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('study-abroad.login.verify') }}">

                @csrf

                <input type="text" name="otp" class="otp-input" maxlength="4" minlength="4" inputmode="numeric"
                    pattern="[0-9]{4}" placeholder="0000" autocomplete="one-time-code" required>

                <button type="submit" class="verify-button">
                    VERIFY OTP
                </button>

            </form>

            <!-- RESEND OTP -->

            <div class="resend-section">

                <p class="resend-text">

                    Didn't receive the OTP?

                    <span id="resendTimer" class="resend-timer">
                        Resend OTP in 01:00
                    </span>

                    <button type="button" id="resendOtpButton" class="resend-button">
                        Resend OTP
                    </button>

                </p>

                <div id="resendMessage" class="resend-message"></div>

            </div>

        </div>

    </div>


    <script>
        const resendTimer =
            document.getElementById('resendTimer');

        const resendButton =
            document.getElementById('resendOtpButton');

        const resendMessage =
            document.getElementById('resendMessage');


        let remainingSeconds = @json(max(0, session('study_abroad_login_otp_resend_at', 0) - now()->timestamp));


        let timerInterval = null;


        function formatTime(seconds) {

            const minutes =
                Math.floor(seconds / 60);

            const secondsRemaining =
                seconds % 60;

            return String(minutes).padStart(2, '0') +
                ':' +
                String(secondsRemaining).padStart(2, '0');

        }


        function updateTimer() {

            if (remainingSeconds > 0) {

                resendTimer.style.display = 'inline';

                resendButton.style.display = 'none';

                resendTimer.textContent =
                    'Resend OTP in ' +
                    formatTime(remainingSeconds);

                remainingSeconds--;

            } else {

                clearInterval(timerInterval);

                resendTimer.style.display = 'none';

                resendButton.style.display = 'inline';

            }

        }


        function startTimer(seconds) {

            clearInterval(timerInterval);

            remainingSeconds = seconds;

            updateTimer();

            timerInterval = setInterval(function() {

                updateTimer();

            }, 1000);

        }


        function showMessage(message, type) {

            resendMessage.textContent = message;

            resendMessage.className =
                'resend-message ' + type;

        }


        resendButton.addEventListener(
            'click',
            function() {

                resendButton.disabled = true;

                resendButton.textContent =
                    'Sending...';

                resendMessage.className =
                    'resend-message';

                resendMessage.textContent = '';


                fetch(
                        '{{ route('study-abroad.login.otp.resend') }}', {
                            method: 'POST',

                            headers: {
                                'Content-Type': 'application/json',

                                'Accept': 'application/json',

                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },

                            body: JSON.stringify({})
                        }
                    )

                    .then(async response => {

                        const data =
                            await response.json();

                        if (!response.ok) {

                            throw data;

                        }

                        return data;

                    })

                    .then(data => {

                        showMessage(
                            data.message,
                            'success'
                        );

                        startTimer(
                            data.remaining_seconds || 60
                        );

                        resendButton.disabled = false;

                        resendButton.textContent =
                            'Resend OTP';

                    })

                    .catch(error => {

                        showMessage(
                            error.message ||
                            'Unable to resend OTP. Please try again.',
                            'error'
                        );

                        if (error.remaining_seconds) {

                            startTimer(
                                error.remaining_seconds
                            );

                        }

                        resendButton.disabled = false;

                        resendButton.textContent =
                            'Resend OTP';

                    });

            }
        );


        startTimer(remainingSeconds);
    </script>

</body>

</html>
