
<x-study-india-header />

<link rel="stylesheet" href="{{ asset('css/study-india-auth.css') }}?v=2">

<main class="si-auth-page">
    <section class="si-auth-card">
        <div class="si-auth-brand">
            <span class="si-auth-brand-icon">🎓</span>
            <span>IGNITION EDUTECH · STUDY INDIA</span>
        </div>

        <h1>Create your account</h1>
        <p>Find colleges, explore courses and stay updated on admissions in India.</p>

        @if (session('success'))
            <div class="si-auth-success" role="status">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="si-auth-error" role="alert">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('study-india.register.store') }}">
            @csrf

            <label for="full_name">Full Name *</label>
            <input id="full_name" name="full_name" type="text"
                value="{{ old('full_name') }}" autocomplete="name"
                placeholder="Enter your full name" maxlength="100" required>
            @error('full_name') <small>{{ $message }}</small> @enderror

            <label for="email">Email Address *</label>
            <input id="email" name="email" type="email"
                value="{{ old('email') }}" autocomplete="email"
                placeholder="you@example.com" maxlength="255" required>
            @error('email') <small>{{ $message }}</small> @enderror

            <label for="phone">Phone Number *</label>
            <input id="phone" name="phone" type="tel"
                value="{{ old('phone') }}" inputmode="numeric"
                autocomplete="tel" placeholder="10–15 digits"
                pattern="[0-9]{10,15}" minlength="10" maxlength="15" required>
            @error('phone') <small>{{ $message }}</small> @enderror

            <label for="city">City You Live In *</label>
            <input id="city" name="city" type="text"
                value="{{ old('city') }}" autocomplete="address-level2"
                placeholder="Enter your city" maxlength="100" required>
            @error('city') <small>{{ $message }}</small> @enderror

            <label for="course_interested">Course Interested In *</label>
            <select id="course_interested" name="course_interested" required>
                <option value="">Select a course</option>
                @foreach ([
                    'Engineering',
                    'Management',
                    'Medical',
                    'Law',
                    'Arts',
                    'Commerce',
                    'Science',
                    'Computer Applications',
                    'Design',
                    'Other'
                ] as $course)
                    <option value="{{ $course }}"
                        @selected(old('course_interested') === $course)>
                        {{ $course }}
                    </option>
                @endforeach
            </select>
            @error('course_interested') <small>{{ $message }}</small> @enderror

            <button type="submit">Create Account &amp; Verify Email →</button>
        </form>

        <div class="si-auth-divider"></div>

        <p class="si-auth-switch">
            Already have a Study India account?
            <a href="{{ route('study-india.login') }}">Login with OTP</a>
        </p>

        <div class="si-auth-note">
            Your email address will be verified using a one-time password.
            Your phone number is required for account verification during login.
        </div>
    </section>
</main>
