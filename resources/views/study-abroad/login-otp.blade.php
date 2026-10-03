<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    </style>
</head>

<body>

<div class="otp-wrapper">

    <div class="otp-box">

        <h1>Verify Email Address</h1>

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

        <form
            method="POST"
            action="{{ route('study-abroad.login.verify') }}"
        >

            @csrf

            <input
                type="text"
                name="otp"
                class="otp-input"
                maxlength="4"
                minlength="4"
                inputmode="numeric"
                pattern="[0-9]{4}"
                placeholder="0000"
                autocomplete="one-time-code"
                required
            >

            <button
                type="submit"
                class="verify-button"
            >
                VERIFY OTP
            </button>

        </form>

    </div>

</div>

</body>
</html>