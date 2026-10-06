<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/img/logo/favicon.png" />


    <title>Study Abroad Application</title>

<style>
* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #f4f6f8;
    color: #252525;
}

/* =========================================
   MAIN WRAPPER
========================================= */

.application-wrapper {
    width: 100%;
    max-width: 780px;
    margin: 35px auto;
    padding: 0 15px;
}

.application-box {
    width: 100%;
    background: #fff;
    border: 1px solid #e6e8eb;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.07);
}

/* =========================================
   HEADER
========================================= */

.application-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;

    margin: 0;
    padding: 18px 23px;

    background: linear-gradient(
        135deg,
        #f5820b 0%,
        #ff982d 100%
    );

    color: #fff;
}

.application-title h1 {
    margin: 0 0 4px;

    font-size: 20px;
    line-height: 1.3;
    font-weight: 700;
    letter-spacing: .2px;
}

.application-title p {
    margin: 0;

    font-size: 11px;
    line-height: 1.4;

    color: rgba(255,255,255,.92);
}

/* =========================================
   LOGIN / NEW APPLICATION
========================================= */

.application-auth-buttons {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 7px;

    margin: 0;
    flex-shrink: 0;
}

.application-auth-buttons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: auto;
    height: 32px;

    padding: 0 12px;

    border-radius: 5px;

    text-decoration: none;

    font-size: 10px;
    font-weight: 600;

    white-space: nowrap;

    transition: all .2s ease;
}

.application-login-btn {
    background: #fff;
    border: 1px solid #fff;
    color: #f5820b;
}

.application-login-btn:hover {
    background: #fff8f1;
    color: #df7105;
}

.application-register-btn {
    background: transparent;
    border: 1px solid rgba(255,255,255,.85);
    color: #fff;
}

.application-register-btn:hover {
    background: #fff;
    border-color: #fff;
    color: #f5820b;
}

/* =========================================
   STEP HEADER
========================================= */

.step-title {
    display: flex;
    align-items: center;
    gap: 11px;

    margin: 0;

    padding: 13px 23px;

    background: #fff;

    border-bottom: 1px solid #eceeef;
}

.step-title::before {
    content: "1";

    width: 28px;
    height: 28px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    border-radius: 50%;

    background: #fff1e4;
    color: #f5820b;

    font-size: 11px;
    font-weight: 700;
}

.step-title h2 {
    margin: 0;

    font-size: 14px;
    line-height: 1.4;

    font-weight: 700;

    color: #242424;
}

/* =========================================
   FORM
========================================= */

.application-box form {
    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    column-gap: 17px;
    row-gap: 0;

    padding: 22px 23px 24px;
}

/* =========================================
   FORM GROUP
========================================= */

.form-group {
    min-width: 0;
    margin-bottom: 15px;
}

.form-group label {
    display: block;

    margin-bottom: 6px;

    font-size: 10.5px;
    line-height: 1.4;

    font-weight: 600;

    color: #3c4045;
}

.required {
    color: #e74c3c;
}

/* =========================================
   INPUTS
========================================= */

.form-control {
    width: 100%;
    height: 42px;

    padding: 0 12px;

    border: 1px solid #dfe2e6;
    border-radius: 7px;

    background: #fafbfc;

    color: #252525;

    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;

    outline: none;

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background .2s ease;
}

.form-control:hover {
    border-color: #cfd3d8;
    background: #fff;
}

.form-control:focus {
    border-color: #f5820b;
    background: #fff;

    box-shadow: 0 0 0 3px rgba(245,130,11,.08);
}

.form-control::placeholder {
    color: #a7abb0;
}

/* SELECT */

select.form-control {
    cursor: pointer;
}

/* TEXTAREA */

textarea.form-control {
    min-height: 90px;
    height: auto;
    padding-top: 11px;
    resize: vertical;
}

/* =========================================
   ERROR
========================================= */

.error {
    margin-top: 5px;

    color: #dc3545;

    font-size: 10px;
    line-height: 1.4;
}

/* =========================================
   SUCCESS / ERROR ALERT
========================================= */

.success-message,
.error-message {
    grid-column: 1 / -1;

    margin-bottom: 15px;
    padding: 10px 12px;

    border-radius: 7px;

    font-size: 11px;
    line-height: 1.5;
}

.success-message {
    background: #edf9f2;
    border: 1px solid #d3eddd;
    color: #198754;
}

.error-message {
    background: #fff0f0;
    border: 1px solid #f1d1d1;
    color: #dc3545;
}

/* =========================================
   TERMS
========================================= */

.terms {
    grid-column: 1 / -1;

    display: flex;
    align-items: flex-start;

    gap: 9px;

    margin: 2px 0 8px;

    padding: 10px 11px;

    background: #fafafa;

    border: 1px solid #ededed;

    border-radius: 7px;
}

.terms input {
    width: 15px;
    height: 15px;

    margin: 1px 0 0;

    flex-shrink: 0;

    accent-color: #f5820b;

    cursor: pointer;
}

.terms label {
    margin: 0;

    color: #777;

    font-size: 9.5px;
    line-height: 1.5;

    font-weight: 400;
}


/* =========================================
   TERMS ERROR
========================================= */

.application-box form > .terms + .error {
    grid-column: 1 / -1;

    margin-top: -5px;
    margin-bottom: 8px;
}

/* =========================================
   SUBMIT BUTTON
========================================= */

.submit-button {
    grid-column: 1 / -1;

    width: 100%;
    height: 44px;

    margin-top: 4px;

    border: 0;
    border-radius: 7px;

    background: linear-gradient(
        135deg,
        #f5820b,
        #fb8e1b
    );

    color: #fff;

    font-family: Arial, Helvetica, sans-serif;

    font-size: 12px;
    font-weight: 700;

    letter-spacing: .2px;

    cursor: pointer;

    box-shadow: 0 4px 10px rgba(245,130,11,.13);

    transition: all .2s ease;
}

.submit-button:hover {
    background: #df7105;

    box-shadow: 0 6px 16px rgba(245,130,11,.22);

    transform: translateY(-1px);
}

.submit-button:active {
    transform: translateY(0);
}

/* =========================================
   DESKTOP VISUAL SPACING
========================================= */

@media (min-width: 701px) {

    .application-box form > .form-group:nth-of-type(1),
    .application-box form > .form-group:nth-of-type(2),
    .application-box form > .form-group:nth-of-type(3),
    .application-box form > .form-group:nth-of-type(4),
    .application-box form > .form-group:nth-of-type(5),
    .application-box form > .form-group:nth-of-type(6) {
        width: 100%;
    }
}

/* =========================================
   TABLET
========================================= */

@media (max-width: 700px) {

    .application-wrapper {
        margin: 20px auto;
        padding: 0 10px;
    }

    .application-title {
        align-items: flex-start;
        flex-direction: column;

        gap: 13px;

        padding: 17px 18px;
    }

    .application-title h1 {
        font-size: 19px;
    }

    .application-title p {
        font-size: 10px;
    }

    .application-auth-buttons {
        width: 100%;
        justify-content: flex-start;
    }

    .application-auth-buttons a {
        flex: 1;
    }

    .step-title {
        padding: 12px 18px;
    }

    .application-box form {
        grid-template-columns: 1fr;

        padding: 20px 18px 22px;
    }

    .success-message,
    .error-message,
    .terms,
    .submit-button {
        grid-column: 1;
    }
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 480px) {

    .application-wrapper {
        margin: 8px auto;
        padding: 0 6px;
    }

    .application-box {
        border-radius: 11px;
    }

    .application-title {
        padding: 16px 14px;
    }

    .application-title h1 {
        font-size: 17px;
    }

    .application-title p {
        font-size: 9.5px;
    }

    .application-auth-buttons {
        gap: 6px;
    }

    .application-auth-buttons a {
        height: 31px;
        padding: 0 8px;

        font-size: 9px;
    }

    .step-title {
        padding: 11px 14px;
    }

    .step-title::before {
        width: 27px;
        height: 27px;
    }

    .step-title h2 {
        font-size: 13px;
    }

    .application-box form {
        padding: 18px 14px 20px;
    }

    .form-group {
        margin-bottom: 14px;
    }

    .form-group label {
        font-size: 10px;
    }

    .form-control {
        height: 41px;
        font-size: 11.5px;
    }

    .terms {
        padding: 9px 10px;
    }

    .terms label {
        font-size: 9px;
    }

    .submit-button {
        height: 43px;
        font-size: 11px;
    }
}

/* =========================================
   VERY SMALL MOBILE
========================================= */

@media (max-width: 350px) {

    .application-title h1 {
        font-size: 16px;
    }

    .application-auth-buttons a {
        font-size: 8px;
        padding: 0 6px;
    }

    .application-box form {
        padding-left: 12px;
        padding-right: 12px;
    }
}


</style>
</head>

<body>

<div class="application-wrapper">

    <div class="application-box">

        {{-- <div class="application-title">
            <h1>REGISTER NOW TO APPLY</h1>
            <p>Start your study abroad application</p>
        </div> --}}

        <div class="application-title">
    <h1>REGISTER NOW TO APPLY</h1>
    <p>Start your study abroad application</p>

    <div class="application-auth-buttons">
        <a href="{{ route('study-abroad.login') }}" class="application-login-btn">
            Already Applied? Login
        </a>

        <a href="{{ route('study-abroad.application') }}#registered" class="application-register-btn" id="registered">
            New Application
        </a>
    </div>
</div>



        <div class="step-title" id="registered">
            <h2>Step 1 — Personal Details</h2>
        </div>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        <form
            method="POST"
            action="{{ route('study-abroad.personal') }}"
        >

            @csrf

            {{-- Full Name --}}
            <div class="form-group">
                <label for="full_name">
                    Full Name <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    class="form-control"
                    value="{{ old('full_name') }}"
                    placeholder="Enter your full name"
                >

                @error('full_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label for="email">
                    Email Address <span class="required">*</span>
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    placeholder="Enter your email address"
                >

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            {{-- Mobile --}}
            <div class="form-group">
                <label for="phone">
                    Mobile Number <span class="required">*</span>
                </label>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="form-control"
                    value="{{ old('phone') }}"
                    placeholder="Enter your mobile number"
                >

                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

          
         
{{-- City --}}
<div class="form-group">
    <label for="city">
        City You Live In <span class="required">*</span>
    </label>

    <select
        id="city"
        name="city"
        class="form-control"
    >
        <option value="">Select City</option>

        @foreach($cities as $city)
            <option
                value="{{ $city->name }}"
                {{ old('city') == $city->name ? 'selected' : '' }}
            >
                {{ $city->name }}
            </option>
        @endforeach
    </select>

    @error('city')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

            {{-- Course --}}
            <div class="form-group">
    <label for="course_interested">
        Course Interested In <span class="required">*</span>
    </label>

    <select
        id="course_interested"
        name="course_interested"
        class="form-control"
    >
        <option value="">Select Course</option>

        @foreach($courses as $course)
            <option 
                value="{{ $course->name }}" 
                {{ old('course_interested') == $course->name ? 'selected' : '' }}
            >
                {{ $course->name }}
            </option>
        @endforeach
    </select>

    @error('course_interested')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

            {{-- Start Study --}}
            <div class="form-group">
                <label for="start_study">
                    When Do You Plan To Start Your Studies?
                    <span class="required">*</span>
                </label>

                <select
                    id="start_study"
                    name="start_study"
                    class="form-control"
                >
                    <option value="">Select Intake</option>

                    <option value="Spring (Jan-Mar)" {{ old('start_study') == 'Spring (Jan-Mar)' ? 'selected' : '' }}>
                        Spring (Jan-Mar)
                    </option>

                    <option value="Summer (Apr-Jun)" {{ old('start_study') == 'Summer (Apr-Jun)' ? 'selected' : '' }}>
                        Summer (Apr-Jun)
                    </option>

                    <option value="Fall (Sep-Nov)" {{ old('start_study') == 'Fall (Sep-Nov)' ? 'selected' : '' }}>
                        Fall (Sep-Nov)
                    </option>

                    <option value="Winter (Dec)" {{ old('start_study') == 'Winter (Dec)' ? 'selected' : '' }}>
                        Winter (Dec)
                    </option>
                </select>

                @error('start_study')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            {{-- Terms --}}
            <div class="terms">

                <input
                    type="checkbox"
                    id="terms_accepted"
                    name="terms_accepted"
                    value="1"
                    {{ old('terms_accepted') ? 'checked' : '' }}
                >

                <label for="terms_accepted">
                    I agree to the Terms & Conditions and Privacy Policy.
                    <span class="required">*</span>
                </label>

            </div>

            @error('terms_accepted')
                <div class="error">{{ $message }}</div>
            @enderror

            {{-- Submit --}}
            <button
                type="submit"
                class="submit-button"
            >
                SUBMIT
            </button>

        </form>

    </div>

</div>

</body>
</html>