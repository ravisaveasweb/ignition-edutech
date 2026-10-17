
<x-study-india-header />

<link rel="stylesheet" href="{{ asset('css/study-india-auth.css') }}?v=2">

<main class="si-auth-page">
    <section class="si-auth-card">
        <div class="si-auth-brand">
            <span class="si-auth-brand-icon">🎓</span>
            <span>IGNITION EDUTECH · STUDY INDIA</span>
        </div>

        <h1>Welcome back!</h1>
        <p>Enter your registered email and phone number. We'll send a secure login OTP to your email.</p>

        @if (session('success'))
            <div class="si-auth-success" role="status">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="si-auth-error" role="alert">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('study-india.login.send-otp') }}">
            @csrf

            <label for="email">Email Address *</label>
            <input id="email" name="email" type="email"
                value="{{ old('email') }}" autocomplete="email"
                placeholder="you@example.com" maxlength="255" required>
            @error('email') <small>{{ $message }}</small> @enderror

            <label for="phone">Registered Phone Number *</label>
            <input id="phone" name="phone" type="tel"
                value="{{ old('phone') }}" inputmode="numeric"
                autocomplete="tel" placeholder="Enter your registered phone number"
                pattern="[0-9]{10,15}" minlength="10" maxlength="15" required>
            @error('phone') <small>{{ $message }}</small> @enderror

            <button type="submit">Send Login OTP →</button>
        </form>

        <div class="si-auth-note">
            <strong>Secure login</strong><br>
            Your OTP will be sent to the registered email address.
            You must enter the phone number linked to your account.
        </div>

        <p class="si-auth-switch">
            New to Study India?
            <a href="{{ route('study-india.register') }}">Create an account</a>
        </p>
    </section>
</main>
