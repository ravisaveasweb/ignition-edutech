<x-study-india-header />

<link rel="stylesheet" href="{{ asset('css/study-india-auth.css') }}?v=6">

<main class="si-auth-page si-auth-register-page">
    <section class="si-auth-card si-auth-register-card">

        <div class="si-auth-brand">
            <span class="si-auth-brand-icon">🎓</span>
            <span>IGNITION EDUTECH <span class="si-auth-brand-separator">·</span> STUDY INDIA</span>
        </div>

        <div class="si-auth-register-heading">
            <span class="si-auth-eyebrow">YOUR FUTURE STARTS HERE</span>
            <h1>Create your account</h1>
            <p>
                Discover colleges, explore courses and take the next step
                towards your dream career.
            </p>
        </div>

        @if (session('success'))
            <div class="si-auth-success" role="status">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="si-auth-error" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('study-india.register.store') }}">
            @csrf

            <div class="si-auth-form-grid">

                {{-- Full Name --}}
                <div class="si-auth-field">
                    <label for="full_name">
                        Full Name <span>*</span>
                    </label>

                    <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}"
                        autocomplete="name" placeholder="Enter your full name" minlength="2" maxlength="100"
                        pattern="[\p{L}\p{M}]+([ '\u2019-][\p{L}\p{M}]+)*"
                        title="Use letters, spaces, apostrophes or hyphens only. Numbers are not allowed."
                        oninput="this.value = this.value.replace(/[0-9]/g, '').replace(/[^a-zA-Z\u00C0-\u024F\u0900-\u097F '\u2019-]/g, '')"
                        required>

                    @error('full_name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                {{-- Email Address --}}
                <div class="si-auth-field">
                    <label for="email">
                        Email Address <span>*</span>
                    </label>

                    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email"
                        placeholder="you@example.com" maxlength="255"
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}"
                        title="Enter a valid email address, such as student@gmail.com." required>

                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                {{-- Phone Number --}}
                <div class="si-auth-field">
                    <label for="phone">
                        Phone Number <span>*</span>
                    </label>

                    <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" inputmode="numeric"
                        autocomplete="tel" placeholder="Enter 10-digit phone number"
                        pattern="(?!([0-9])\1{9}$)[1-9][0-9]{9}" minlength="10" maxlength="10"
                        title="Enter a valid 10-digit phone number. Repeated digits such as 1111111111 are not allowed."
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" required>
                    @error('phone')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                {{-- City --}}

                {{-- City --}}
                <div class="si-auth-field">
                    <label for="city">
                        Your City <span>*</span>
                    </label>

                    <select id="city" name="city" autocomplete="address-level2" required>
                        <option value="">Select your city</option>

                        @foreach ($cities as $city)
                            <option value="{{ $city }}" {{ old('city') === $city ? 'selected' : '' }}>
                                {{ $city }}
                            </option>
                        @endforeach
                    </select>

                    @error('city')
                        <small>{{ $message }}</small>
                    @enderror
                </div>


                {{-- Course --}}
                <div class="si-auth-field si-auth-course-field">
                    <label for="course_interested">
                        Course Interested In <span>*</span>
                    </label>

                    <select id="course_interested" name="course_interested" required>
                        <option value="">Choose your preferred course</option>

                        @foreach (['Engineering', 'Management', 'Medical', 'Law', 'Arts', 'Commerce', 'Science', 'Computer Applications', 'Design', 'Other'] as $course)
                            <option value="{{ $course }}" @selected(old('course_interested') === $course)>
                                {{ $course }}
                            </option>
                        @endforeach
                    </select>

                    @error('course_interested')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <button class="si-auth-register-submit" type="submit">
                <span>Create Account &amp; Verify Email</span>
                <span class="si-auth-button-arrow" aria-hidden="true">→</span>
            </button>

            <p class="si-auth-secure-note">
                <span aria-hidden="true">🔒</span>
                Your information helps us connect you with education opportunities.
            </p>
        </form>

        <div class="si-auth-divider"></div>

        <p class="si-auth-switch">
            Already have a Study India account?
            <a href="{{ route('study-india.login') }}">Login with OTP →</a>
        </p>

        <div class="si-auth-note">
            <strong>Email verification required.</strong>
            We will send a one-time password to your email. Your registered
            phone number will also be required when you log in.
        </div>

    </section>
</main>
