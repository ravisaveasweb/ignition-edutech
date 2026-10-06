<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/img/logo/favicon.png" />


    <title>Past Education Details</title>

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
   MAIN
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
    border: 1px solid #e5e7ea;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(0,0,0,.07);
}

/* =========================================
   HEADER
========================================= */

.application-title {
    padding: 18px 23px;
    background: linear-gradient(135deg, #f5820b, #ff982d);
    color: #fff;
}

.application-title h1 {
    margin: 0 0 5px;
    font-size: 20px;
    line-height: 1.3;
    font-weight: 700;
    letter-spacing: .2px;
}

.application-title p {
    margin: 0;
    color: rgba(255,255,255,.92);
    font-size: 11px;
}

/* =========================================
   STEP TITLE
========================================= */

.step-title {
    display: flex;
    align-items: center;
    gap: 11px;

    margin: 0;
    padding: 13px 23px;

    border-bottom: 1px solid #eceeef;

    background: #fff;

    font-size: 14px;
    line-height: 1.4;
    font-weight: 700;
    color: #252525;
}

.step-title::before {
    content: "3";

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

/* =========================================
   FORM
========================================= */

.application-box form {
    padding: 20px 23px 24px;
}

/* =========================================
   SECTION TITLE
========================================= */

.section-title {
    position: relative;

    display: flex;
    align-items: center;
    gap: 9px;

    margin: 7px 0 15px;
    padding: 0 0 9px;

    border-bottom: 1px solid #eceeef;

    color: #292d32;

    font-size: 12px;
    line-height: 1.4;
    font-weight: 700;
}

.section-title::before {
    content: "";

    width: 4px;
    height: 17px;

    flex-shrink: 0;

    border-radius: 3px;

    background: #f5820b;
}

/* =========================================
   FORM GROUP
========================================= */

.form-group {
    margin-bottom: 14px;
}

.form-group label {
    display: block;

    margin-bottom: 6px;

    color: #3c4045;

    font-size: 10.5px;
    line-height: 1.4;

    font-weight: 600;
}

/* =========================================
   INPUT / SELECT
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
        background .2s ease,
        box-shadow .2s ease;
}

.form-control:hover {
    border-color: #cdd2d7;
    background: #fff;
}

.form-control:focus {
    border-color: #f5820b;
    background: #fff;

    box-shadow: 0 0 0 3px rgba(245,130,11,.08);
}

.form-control::placeholder {
    color: #a5a9ae;
}

select.form-control {
    cursor: pointer;
}

/* =========================================
   TWO COLUMN ROW
========================================= */

.form-row {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 17px;
}

/* =========================================
   PASSPORT
========================================= */

.passport-group {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.passport-group label {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    min-height: 34px;

    margin: 0;

    padding: 0 14px;

    border: 1px solid #e0e3e6;
    border-radius: 6px;

    background: #fff;

    color: #555;

    font-size: 11px;
    font-weight: 500;

    cursor: pointer;

    transition: all .2s ease;
}

.passport-group label:hover {
    border-color: #f5820b;
    background: #fffaf5;
    color: #f5820b;
}

.passport-group input {
    width: 14px;
    height: 14px;

    margin: 0;

    accent-color: #f5820b;

    cursor: pointer;
}

/* =========================================
   ALERTS
========================================= */

.error-box,
.success-box {
    margin-bottom: 16px;

    padding: 10px 12px;

    border-radius: 7px;

    font-size: 11px;
    line-height: 1.5;
}

.error-box {
    border: 1px solid #f1d2d2;
    background: #fff0f0;
    color: #dc3545;
}

.success-box {
    border: 1px solid #cfe9d8;
    background: #eefaf2;
    color: #16803c;
}

/* =========================================
   SUBMIT
========================================= */

.submit-button {
    width: 100%;
    height: 44px;

    margin-top: 8px;

    border: 0;
    border-radius: 7px;

    background: linear-gradient(135deg, #f5820b, #fb8e1b);

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
   TABLET
========================================= */

@media (max-width: 700px) {

    .application-wrapper {
        margin: 20px auto;
        padding: 0 10px;
    }

    .application-title {
        padding: 17px 18px;
    }

    .application-title h1 {
        font-size: 19px;
    }

    .step-title {
        padding: 12px 18px;
    }

    .application-box form {
        padding: 20px 18px 22px;
    }

    .form-row {
        gap: 14px;
    }
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {

    .application-wrapper {
        margin: 10px auto;
        padding: 0 7px;
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

    .step-title {
        padding: 11px 14px;
        font-size: 13px;
    }

    .step-title::before {
        width: 27px;
        height: 27px;
        font-size: 10px;
    }

    .application-box form {
        padding: 18px 14px 20px;
    }

    .section-title {
        margin-top: 5px;
        margin-bottom: 13px;
        font-size: 11.5px;
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .form-group {
        margin-bottom: 13px;
    }

    .form-group label {
        font-size: 10px;
    }

    .form-control {
        height: 41px;
        font-size: 11.5px;
    }

    .passport-group {
        gap: 6px;
    }

    .passport-group label {
        min-height: 32px;
        padding: 0 12px;
        font-size: 10px;
    }

    .passport-group input {
        width: 13px;
        height: 13px;
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

    .application-wrapper {
        padding: 0 5px;
    }

    .application-title h1 {
        font-size: 16px;
    }

    .application-box form {
        padding-left: 12px;
        padding-right: 12px;
    }

    .passport-group label {
        width: 100%;
    }
}
</style>
</head>

<body>

<div class="application-wrapper">

    <div class="application-box">

        <div class="application-title">
            <h1>REGISTER NOW TO APPLY</h1>

            <p>
                Welcome {{ $application->personalDetails->full_name }}
            </p>
        </div>

        <h2 class="step-title">
            STEP 3 — PAST EDUCATION DETAILS
        </h2>

        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if (session('error'))
            <div class="error-box">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="success-box">
                {{ session('success') }}
            </div>
        @endif

        <form
            method="POST"
            action="{{ route('study-abroad.past-education') }}"
        >

            @csrf

            {{-- 10TH --}}
            <h3 class="section-title">
                10TH EDUCATION DETAILS
            </h3>

            <div class="form-group">

                <label>
                    10th Board *
                </label>

                <select
                    name="tenth_board"
                    class="form-control"
                    required
                >

                    <option value="">
                        Select 10th Board
                    </option>

                    <option value="CBSE"
                        {{ old('tenth_board') == 'CBSE' ? 'selected' : '' }}>
                        CBSE
                    </option>

                    <option value="ICSE"
                        {{ old('tenth_board') == 'ICSE' ? 'selected' : '' }}>
                        ICSE
                    </option>

                    <option value="State Board"
                        {{ old('tenth_board') == 'State Board' ? 'selected' : '' }}>
                        State Board
                    </option>

                    <option value="IB"
                        {{ old('tenth_board') == 'IB' ? 'selected' : '' }}>
                        IB
                    </option>

                    <option value="Other"
                        {{ old('tenth_board') == 'Other' ? 'selected' : '' }}>
                        Other
                    </option>

                </select>

            </div>

            <div class="form-row">

                <div class="form-group">

                    <label>
                        10th Passing Year *
                    </label>

                    <select
                        name="tenth_passing_year"
                        class="form-control"
                        required
                    >

                        <option value="">
                            Select Year
                        </option>

                        @for ($year = date('Y'); $year >= 1950; $year--)

                            <option
                                value="{{ $year }}"
                                {{ old('tenth_passing_year') == $year ? 'selected' : '' }}
                            >
                                {{ $year }}
                            </option>

                        @endfor

                    </select>

                </div>

                <div class="form-group">

                    <label>
                        10th Percentage *
                    </label>

                    <input
                        type="number"
                        name="tenth_percentage"
                        class="form-control"
                        value="{{ old('tenth_percentage') }}"
                        min="0"
                        max="100"
                        step="0.01"
                        placeholder="Enter percentage"
                        required
                    >

                </div>

            </div>

            <div class="form-group">

                <label>
                    10th School Name
                </label>

                <input
                    type="text"
                    name="tenth_school_name"
                    class="form-control"
                    value="{{ old('tenth_school_name') }}"
                    placeholder="Enter school name"
                >

            </div>


            {{-- 12TH --}}
            <h3 class="section-title">
                12TH EDUCATION DETAILS
            </h3>

            <div class="form-group">

                <label>
                    12th Board *
                </label>

                <select
                    name="twelfth_board"
                    id="twelfthBoard"
                    class="form-control"
                    required
                >

                    <option value="">
                        Select 12th Board
                    </option>

                    <option value="CBSE"
                        {{ old('twelfth_board') == 'CBSE' ? 'selected' : '' }}>
                        CBSE
                    </option>

                    <option value="ISC"
                        {{ old('twelfth_board') == 'ISC' ? 'selected' : '' }}>
                        ISC
                    </option>

                    <option value="State Board"
                        {{ old('twelfth_board') == 'State Board' ? 'selected' : '' }}>
                        State Board
                    </option>

                    <option value="IB"
                        {{ old('twelfth_board') == 'IB' ? 'selected' : '' }}>
                        IB
                    </option>

                    <option value="Other"
                        {{ old('twelfth_board') == 'Other' ? 'selected' : '' }}>
                        Other
                    </option>

                </select>

            </div>

            <div class="form-row">

                <div class="form-group">

                    <label>
                        12th Passing Year *
                    </label>

                    <select
                        name="twelfth_passing_year"
                        class="form-control"
                        required
                    >

                        <option value="">
                            Select Year
                        </option>

                        @for ($year = date('Y'); $year >= 1950; $year--)

                            <option
                                value="{{ $year }}"
                                {{ old('twelfth_passing_year') == $year ? 'selected' : '' }}
                            >
                                {{ $year }}
                            </option>

                        @endfor

                    </select>

                </div>

                <div class="form-group">

                    <label>
                        12th Percentage *
                    </label>

                    <input
                        type="number"
                        name="twelfth_percentage"
                        class="form-control"
                        value="{{ old('twelfth_percentage') }}"
                        min="0"
                        max="100"
                        step="0.01"
                        placeholder="Enter percentage"
                        required
                    >

                </div>

            </div>

            <div class="form-group">

                <label>
                    12th School Name *
                </label>

                <input
                    type="text"
                    name="twelfth_school_name"
                    class="form-control"
                    value="{{ old('twelfth_school_name') }}"
                    placeholder="Enter school name"
                    required
                >

            </div>

            <div class="form-group">

                <label>
                    12th Specialization *
                </label>

                <select
                    name="twelfth_specialization"
                    id="twelfthSpecialization"
                    class="form-control"
                    required
                >

                    <option value="">
                        Select Specialization
                    </option>

                    <option value="Science"
                        {{ old('twelfth_specialization') == 'Science' ? 'selected' : '' }}>
                        Science
                    </option>

                    <option value="Commerce"
                        {{ old('twelfth_specialization') == 'Commerce' ? 'selected' : '' }}>
                        Commerce
                    </option>

                    <option value="Arts"
                        {{ old('twelfth_specialization') == 'Arts' ? 'selected' : '' }}>
                        Arts
                    </option>

                    <option value="Humanities"
                        {{ old('twelfth_specialization') == 'Humanities' ? 'selected' : '' }}>
                        Humanities
                    </option>

                    <option value="Vocational"
                        {{ old('twelfth_specialization') == 'Vocational' ? 'selected' : '' }}>
                        Vocational
                    </option>

                    <option value="Other"
                        {{ old('twelfth_specialization') == 'Other' ? 'selected' : '' }}>
                        Other
                    </option>

                </select>

            </div>


            {{-- PASSPORT --}}
            <h3 class="section-title">
                PASSPORT
            </h3>

            <div class="form-group">

                <label>
                    Do you have a valid passport? *
                </label>

                <div class="passport-group">

                    <label>
                        <input
                            type="radio"
                            name="passport"
                            value="1"
                            {{ old('passport') === '1' ? 'checked' : '' }}
                            required
                        >
                        Yes
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="passport"
                            value="0"
                            {{ old('passport') === '0' ? 'checked' : '' }}
                        >
                        No
                    </label>

                </div>

            </div>


            <button
                type="submit"
                class="submit-button"
            >
                SUBMIT
            </button>

        </form>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const board = document.getElementById('twelfthBoard');
    const specialization = document.getElementById('twelfthSpecialization');

    const specializations = {
        'CBSE': [
            'Science',
            'Commerce',
            'Arts',
            'Humanities',
            'Vocational'
        ],

        'ISC': [
            'Science',
            'Commerce',
            'Humanities',
            'Arts'
        ],

        'State Board': [
            'Science',
            'Commerce',
            'Arts',
            'Vocational'
        ],

        'IB': [
            'Science',
            'Business',
            'Humanities',
            'Arts'
        ],

        'Other': [
            'Science',
            'Commerce',
            'Arts',
            'Humanities',
            'Vocational',
            'Other'
        ]
    };

    board.addEventListener('change', function () {

        const selectedBoard = this.value;

        specialization.innerHTML =
            '<option value="">Select Specialization</option>';

        if (!specializations[selectedBoard]) {
            return;
        }

        specializations[selectedBoard].forEach(function (item) {

            const option = document.createElement('option');

            option.value = item;
            option.textContent = item;

            specialization.appendChild(option);

        });

    });

});
</script>

</body>
</html>