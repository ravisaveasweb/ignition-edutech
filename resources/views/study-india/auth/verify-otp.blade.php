
<x-study-india-header />

<link rel="stylesheet" href="{{ asset('css/study-india-auth.css') }}?v=2">

<main class="si-auth-page">
    <section class="si-auth-card">
        <div class="si-auth-brand">
            <span class="si-auth-brand-icon">✉</span>
            <span>IGNITION EDUTECH · STUDY INDIA</span>
        </div>

        <h1>Verify your email</h1>
        <p>Enter the six-digit code sent to <strong>{{ $email }}</strong> to continue.</p>

        @if (session('success'))
            <div class="si-auth-success" role="status">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="si-auth-error" role="alert">{{ session('error') }}</div>
        @endif

        @if ($errors->has('otp'))
            <div class="si-auth-error" role="alert">{{ $errors->first('otp') }}</div>
        @endif

        <form id="siOtpForm" method="POST" action="{{ route('study-india.otp.verify') }}">
            @csrf

            <label for="otp">Six-Digit OTP *</label>
            <input id="otp" class="si-auth-otp-input"
                name="otp" type="text" inputmode="numeric"
                autocomplete="one-time-code" pattern="[0-9]{6}"
                minlength="6" maxlength="6" placeholder="000000" required>

            <div class="si-auth-note">
                Your code expires after five minutes. Never share your OTP with anyone.
            </div>

            <button id="siVerifyButton" type="submit">Verify &amp; Continue →</button>
        </form>

        <div class="si-auth-divider"></div>

        <div class="si-auth-otp-meta">
            <span id="siOtpCountdown" class="si-auth-countdown"
                data-seconds="{{ $resendSeconds }}" aria-live="polite"></span>

            <form id="siResendOtpForm" method="POST" action="{{ route('study-india.otp.resend') }}">
                @csrf
                <button id="siResendOtpButton" class="si-auth-resend"
                    type="submit" disabled>Resend OTP</button>
            </form>
        </div>

        <p class="si-auth-switch">
            Need to start again?
            <a href="{{ route('study-india.login') }}">Back to Login</a>
        </p>
    </section>
</main>

<script src="{{ asset('js/study-india-auth.js') }}?v=2" defer></script>
