<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Study Abroad Application</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f6f7f9;
            color: #222;
        }

        .application-wrapper {
            width: 100%;
            max-width: 850px;
            margin: 50px auto;
            padding: 20px;
        }

        .application-box {
            background: #fff;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        .application-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .application-title h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .application-title p {
            margin: 0;
            color: #777;
        }

        .step-title {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .step-title h2 {
            margin: 0;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .required {
            color: #e74c3c;
        }

        .form-control {
            width: 100%;
            height: 48px;
            border: 1px solid #d8dce2;
            border-radius: 8px;
            padding: 0 14px;
            font-size: 15px;
            outline: none;
        }

        textarea.form-control {
            height: 100px;
            padding-top: 12px;
        }

        .form-control:focus {
            border-color: #f5820b;
        }

        .error {
            color: #dc3545;
            font-size: 13px;
            margin-top: 6px;
        }

        .success-message {
            background: #e8f7ee;
            color: #198754;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error-message {
            background: #fdeaea;
            color: #dc3545;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .terms {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 25px;
        }

        .terms input {
            margin-top: 4px;
        }

        .terms label {
            margin: 0;
            font-weight: 400;
        }

        .submit-button {
            width: 100%;
            height: 50px;
            border: 0;
            border-radius: 8px;
            background: #f5820b;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .submit-button:hover {
            background: #dc7006;
        }

        @media (max-width: 600px) {
            .application-wrapper {
                margin: 20px auto;
                padding: 12px;
            }

            .application-box {
                padding: 22px;
            }

            .application-title h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

<div class="application-wrapper">

    <div class="application-box">

        <div class="application-title">
            <h1>REGISTER NOW TO APPLY</h1>
            <p>Start your study abroad application</p>
        </div>

        <div class="step-title">
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

                <input
                    type="text"
                    id="city"
                    name="city"
                    class="form-control"
                    value="{{ old('city') }}"
                    placeholder="Enter your city"
                >

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
                    <option value="B.Tech" {{ old('course_interested') == 'B.Tech' ? 'selected' : '' }}>
                        B.Tech
                    </option>
                    <option value="MBA" {{ old('course_interested') == 'MBA' ? 'selected' : '' }}>
                        MBA
                    </option>
                    <option value="MBBS" {{ old('course_interested') == 'MBBS' ? 'selected' : '' }}>
                        MBBS
                    </option>
                    <option value="B.Com" {{ old('course_interested') == 'B.Com' ? 'selected' : '' }}>
                        B.Com
                    </option>
                    <option value="BCA" {{ old('course_interested') == 'BCA' ? 'selected' : '' }}>
                        BCA
                    </option>
                    <option value="MCA" {{ old('course_interested') == 'MCA' ? 'selected' : '' }}>
                        MCA
                    </option>
                    <option value="Other" {{ old('course_interested') == 'Other' ? 'selected' : '' }}>
                        Other
                    </option>
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