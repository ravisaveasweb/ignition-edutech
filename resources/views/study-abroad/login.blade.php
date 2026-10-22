
<x-study-abroad-header />

<link rel="stylesheet" href="{{ asset('css/study-india-auth.css') }}?v=4">

<main class="si-auth-page">
    <section class="si-auth-card">

        {{-- Brand --}}
        <div class="si-auth-brand">
            <span class="si-auth-brand-icon">🎓</span>
            <span>IGNITION EDUTECH · STUDY ABROAD</span>
        </div>

        {{-- Heading --}}
        <h1>Welcome back!</h1>

        <p>
            Enter your registered email and phone number.
            We'll send a secure login OTP to your email.
        </p>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="si-auth-success" role="status">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if (session('error'))
            <div class="si-auth-error" role="alert">
                {{ session('error') }}
            </div>
        @endif

        {{-- Login Form --}}
        <form method="POST" action="{{ route('study-abroad.login.send-otp') }}">
            @csrf

            {{-- Email Address --}}
            <label for="email">Registered Email Address *</label>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                autocomplete="email"
                placeholder="you@example.com"
                maxlength="255"
                required
            >

            @error('email')
                <small>{{ $message }}</small>
            @enderror

            {{-- Registered Phone Number --}}
            <label for="phone">Registered Phone Number *</label>

            <input
                id="phone"
                name="phone"
                type="tel"
                value="{{ old('phone') }}"
                inputmode="numeric"
                autocomplete="tel"
                placeholder="Enter your 10-digit phone number"
                pattern="[1-9][0-9]{9}"
                minlength="10"
                maxlength="10"
                title="Enter your registered 10-digit phone number without a leading zero."
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                required
            >

            @error('phone')
                <small>{{ $message }}</small>
            @enderror

            {{-- Submit --}}
            <button type="submit">Send Login OTP →</button>
        </form>

        {{-- Secure Login Note --}}
        <div class="si-auth-note">
            <strong>Secure login</strong><br>
            Your OTP will be sent to your registered email address.
            You must enter the phone number linked to your account.
        </div>

        {{-- Registration Link --}}
        <p class="si-auth-switch">
            New to Study Abroad?
            <a href="{{ route('study-abroad.application') }}">
                Start your application
            </a>
        </p>

    </section>
</main>
