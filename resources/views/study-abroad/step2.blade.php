<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Education Preferences</title>

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
    box-shadow: 0 12px 35px rgba(0,0,0,.07);
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
    margin: 0 0 5px;

    font-size: 20px;
    line-height: 1.3;
    font-weight: 700;
    letter-spacing: .2px;
}

.application-title p {
    margin: 0;

    font-size: 11px;
    color: rgba(255,255,255,.92);
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

    background: #fff;

    border-bottom: 1px solid #eceeef;

    font-size: 14px;
    line-height: 1.4;
    font-weight: 700;
    color: #252525;
}

.step-title::before {
    content: "2";

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
    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    column-gap: 17px;

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

    color: #3c4045;

    font-size: 10.5px;
    line-height: 1.4;

    font-weight: 600;
}

/* =========================================
   FORM CONTROL
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
   ERROR BOX
========================================= */

.error-box {
    grid-column: 1 / -1;

    margin: 0 23px 18px;

    padding: 10px 12px;

    border: 1px solid #f1d2d2;
    border-radius: 7px;

    background: #fff0f0;

    color: #dc3545;

    font-size: 11px;
    line-height: 1.5;
}

/* =========================================
   TEST SECTIONS
========================================= */

.test-section {
    grid-column: 1 / -1;

    margin: 5px 0 13px;

    padding: 16px 17px;

    background: #fafbfc;

    border: 1px solid #e5e8eb;
    border-radius: 10px;

    transition:
        border-color .2s ease,
        box-shadow .2s ease;
}

.test-section:hover {
    border-color: #d9dde1;
    box-shadow: 0 4px 14px rgba(0,0,0,.035);
}

.test-section h3 {
    display: flex;
    align-items: center;
    gap: 8px;

    margin: 0 0 13px;

    color: #292d32;

    font-size: 13px;
    font-weight: 700;
}

.test-section h3::before {
    content: "";

    width: 4px;
    height: 17px;

    border-radius: 3px;

    background: #f5820b;
}

/* =========================================
   RADIO BUTTONS
========================================= */

.radio-group {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

    gap: 8px;
}

.radio-group label {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    min-height: 34px;

    padding: 0 12px;

    border: 1px solid #e0e3e6;
    border-radius: 6px;

    background: #fff;

    color: #555;

    font-size: 11px;
    font-weight: 500;

    cursor: pointer;

    transition: all .2s ease;
}

.radio-group label:hover {
    border-color: #f5820b;
    color: #f5820b;
    background: #fffaf5;
}

.radio-group input {
    width: 14px;
    height: 14px;

    margin: 0;

    accent-color: #f5820b;

    cursor: pointer;
}

/* =========================================
   ENGLISH / ENTRANCE OPTIONS
========================================= */

.checkbox-group {
    display: flex;
    flex-wrap: wrap;

    gap: 8px;

    margin-top: 13px;
}

.checkbox-group label {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    min-height: 34px;

    padding: 0 11px;

    border: 1px solid #e0e3e6;
    border-radius: 6px;

    background: #fff;

    color: #555;

    font-size: 10.5px;
    font-weight: 500;

    cursor: pointer;

    transition: all .2s ease;
}

.checkbox-group label:hover {
    border-color: #f5820b;
    background: #fffaf5;
    color: #f5820b;
}

.checkbox-group input {
    width: 14px;
    height: 14px;

    margin: 0;

    accent-color: #f5820b;

    cursor: pointer;
}

/* =========================================
   SCORE BOX
========================================= */

.score-box {
    margin-top: 8px;
}

.score-box .form-control {
    height: 38px;

    background: #fff;

    font-size: 11px;
}

/* =========================================
   SUBMIT BUTTON
========================================= */

.submit-button {
    grid-column: 1 / -1;

    width: 100%;
    height: 44px;

    margin-top: 5px;

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

    .application-title p {
        font-size: 10px;
    }

    .step-title {
        padding: 12px 18px;
    }

    .application-box form {
        grid-template-columns: 1fr;

        padding: 20px 18px 22px;
    }

    .test-section {
        margin-top: 3px;
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

    .test-section {
        padding: 14px 12px;

        margin-bottom: 11px;
    }

    .test-section h3 {
        font-size: 12px;
    }

    .radio-group,
    .checkbox-group {
        gap: 6px;
    }

    .radio-group label,
    .checkbox-group label {
        min-height: 32px;

        padding: 0 9px;

        font-size: 10px;
    }

    .radio-group input,
    .checkbox-group input {
        width: 13px;
        height: 13px;
    }

    .score-box .form-control {
        height: 37px;
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

    .application-box form {
        padding-left: 12px;
        padding-right: 12px;
    }

    .test-section {
        padding: 13px 10px;
    }

    .radio-group label,
    .checkbox-group label {
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
            <p>Welcome {{ $application->personalDetails->full_name }}</p>
        </div>

        <h2 class="step-title">
            STEP 2 — EDUCATION PREFERENCES
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

        <form method="POST" action="{{ route('study-abroad.education') }}">
            @csrf

            {{-- Gender --}}
            <div class="form-group">
                <label>Gender</label>

                <select name="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                        Male
                    </option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                        Female
                    </option>
                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>
                        Other
                    </option>
                </select>
            </div>

            {{-- Destination --}}
            <div class="form-group">
                <label>Preferred Destination *</label>

                <select
                    name="preferred_destination"
                    id="preferredDestination"
                    class="form-control"
                    required
                >
                    <option value="">Select Destination</option>
                    <option value="Australia">Australia</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <option value="USA">USA</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Singapore">Singapore</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="Italy">Italy</option>
                    <option value="Spain">Spain</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Finland">Finland</option>
                    <option value="Norway">Norway</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Malaysia">Malaysia</option>
                </select>
            </div>

            {{-- Specialization --}}
            <div class="form-group">
                <label>Specialization *</label>

                <select
                    name="specialization"
                    id="specialization"
                    class="form-control"
                    required
                >
                    <option value="">Select Specialization</option>
                </select>
            </div>

            {{-- University --}}
            <div class="form-group">
                <label>Interested University *</label>

                <select
                    name="interested_university"
                    id="interestedUniversity"
                    class="form-control"
                    required
                >
                    <option value="">Select University</option>
                </select>
            </div>

            {{-- English Test --}}
            <div class="test-section">

                <h3>English Proficiency Test</h3>

                <div class="radio-group">

                    <label>
                        <input
                            type="radio"
                            name="english_test_status"
                            value="Yes"
                            class="english-status"
                        >
                        Yes
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="english_test_status"
                            value="No"
                            class="english-status"
                        >
                        No
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="english_test_status"
                            value="Booked"
                            class="english-status"
                        >
                        Booked
                    </label>

                </div>

                <div id="englishTests" style="display:none;">

                    <div class="checkbox-group">

                        <label>
                            <input
                                type="checkbox"
                                name="english_tests[]"
                                value="IELTS (Academic)"
                                class="english-test"
                                data-score="ieltsScore"
                            >
                            IELTS (Academic)
                        </label>

                        <label>
                            <input
                                type="checkbox"
                                name="english_tests[]"
                                value="TOEFL"
                                class="english-test"
                                data-score="toeflScore"
                            >
                            TOEFL
                        </label>

                        <label>
                            <input
                                type="checkbox"
                                name="english_tests[]"
                                value="PTE"
                                class="english-test"
                                data-score="pteScore"
                            >
                            PTE
                        </label>

                        <label>
                            <input
                                type="checkbox"
                                name="english_tests[]"
                                value="DET"
                                class="english-test"
                                data-score="detScore"
                            >
                            DET
                        </label>

                    </div>

                    <div class="score-box" id="ieltsScore">
                        <input
                            type="text"
                            name="english_scores[IELTS (Academic)]"
                            class="form-control"
                            placeholder="IELTS Score"
                        >
                    </div>

                    <div class="score-box" id="toeflScore">
                        <input
                            type="text"
                            name="english_scores[TOEFL]"
                            class="form-control"
                            placeholder="TOEFL Score"
                        >
                    </div>

                    <div class="score-box" id="pteScore">
                        <input
                            type="text"
                            name="english_scores[PTE]"
                            class="form-control"
                            placeholder="PTE Score"
                        >
                    </div>

                    <div class="score-box" id="detScore">
                        <input
                            type="text"
                            name="english_scores[DET]"
                            class="form-control"
                            placeholder="DET Score"
                        >
                    </div>

                </div>

            </div>

            {{-- Entrance Exam --}}
            <div class="test-section">

                <h3>Entrance Exam</h3>

                <div class="radio-group">

                    <label>
                        <input
                            type="radio"
                            name="entrance_exam_status"
                            value="Yes"
                            class="entrance-status"
                        >
                        Yes
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="entrance_exam_status"
                            value="No"
                            class="entrance-status"
                        >
                        No
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="entrance_exam_status"
                            value="Booked"
                            class="entrance-status"
                        >
                        Booked
                    </label>

                </div>

                <div id="entranceTests" style="display:none;">

                    <div class="checkbox-group">

                        <label>
                            <input
                                type="checkbox"
                                name="entrance_exams[]"
                                value="SAT"
                                class="entrance-test"
                                data-score="satScore"
                            >
                            SAT
                        </label>

                        <label>
                            <input
                                type="checkbox"
                                name="entrance_exams[]"
                                value="LSAT"
                                class="entrance-test"
                                data-score="lsatScore"
                            >
                            LSAT
                        </label>

                    </div>

                    <div class="score-box" id="satScore">
                        <input
                            type="text"
                            name="entrance_scores[SAT]"
                            class="form-control"
                            placeholder="SAT Score"
                        >
                    </div>

                    <div class="score-box" id="lsatScore">
                        <input
                            type="text"
                            name="entrance_scores[LSAT]"
                            class="form-control"
                            placeholder="LSAT Score"
                        >
                    </div>

                </div>

            </div>

            <button type="submit" class="submit-button">
                NEXT
            </button>

        </form>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const specialization = document.getElementById('specialization');
    const destination = document.getElementById('preferredDestination');
    const university = document.getElementById('interestedUniversity');

   const specializations = {
    'Australia': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Medicine',
        'Nursing',
        'Public Health',
        'Pharmacy',
        'Biotechnology',
        'Architecture',
        'Design',
        'Hospitality Management',
        'Tourism Management',
        'Education',
        'Law',
        'Environmental Science',
        'Agriculture'
    ],

    'UK': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Medicine',
        'Nursing',
        'Public Health',
        'Pharmacy',
        'Biotechnology',
        'Architecture',
        'Design',
        'Fashion Design',
        'Law',
        'Psychology',
        'Education',
        'Media Studies',
        'Journalism',
        'Environmental Science',
        'Social Sciences'
    ],

    'Canada': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Supply Chain Management',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Industrial Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Cloud Computing',
        'Medicine',
        'Nursing',
        'Public Health',
        'Pharmacy',
        'Biotechnology',
        'Architecture',
        'Design',
        'Hospitality Management',
        'Tourism Management',
        'Law',
        'Psychology',
        'Education',
        'Environmental Science',
        'Agriculture'
    ],

    'USA': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Entrepreneurship',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Aerospace Engineering',
        'Chemical Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Robotics',
        'Medicine',
        'Nursing',
        'Public Health',
        'Pharmacy',
        'Biotechnology',
        'Architecture',
        'Design',
        'Fashion Design',
        'Law',
        'Psychology',
        'Education',
        'Media Studies',
        'Journalism',
        'Environmental Science',
        'Political Science',
        'Social Sciences'
    ],

    'New Zealand': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Medicine',
        'Nursing',
        'Public Health',
        'Pharmacy',
        'Biotechnology',
        'Architecture',
        'Design',
        'Hospitality Management',
        'Tourism Management',
        'Agriculture',
        'Environmental Science',
        'Education',
        'Law'
    ],

    'Singapore': [
        'Business',
        'Accounting',
        'Finance',
        'Banking',
        'Marketing',
        'Management',
        'International Business',
        'Supply Chain Management',
        'Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'FinTech',
        'Medicine',
        'Nursing',
        'Biotechnology',
        'Architecture',
        'Design',
        'Hospitality Management',
        'Tourism Management',
        'Law',
        'Media Studies'
    ],

    'France': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Luxury Brand Management',
        'Fashion Management',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Medicine',
        'Nursing',
        'Biotechnology',
        'Architecture',
        'Fashion Design',
        'Fashion Technology',
        'Hospitality Management',
        'Tourism Management',
        'Culinary Arts',
        'Law',
        'International Relations',
        'Media Studies'
    ],

    'Germany': [
        'Engineering',
        'Mechanical Engineering',
        'Automotive Engineering',
        'Civil Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Industrial Engineering',
        'Mechatronics',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Robotics',
        'Business',
        'Accounting',
        'Finance',
        'International Business',
        'Management',
        'Economics',
        'Medicine',
        'Biotechnology',
        'Pharmacy',
        'Architecture',
        'Environmental Science',
        'Renewable Energy',
        'Law'
    ],

    'Italy': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Luxury Brand Management',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Automotive Engineering',
        'Electrical Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Software Engineering',
        'Architecture',
        'Interior Design',
        'Fashion Design',
        'Fashion Management',
        'Fine Arts',
        'Product Design',
        'Industrial Design',
        'Hospitality Management',
        'Tourism Management',
        'Culinary Arts',
        'Law'
    ],

    'Spain': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Architecture',
        'Design',
        'Fashion Design',
        'Hospitality Management',
        'Tourism Management',
        'Culinary Arts',
        'Sports Management',
        'Medicine',
        'Nursing',
        'Law',
        'Environmental Science'
    ],

    'Netherlands': [
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Supply Chain Management',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Industrial Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Robotics',
        'Medicine',
        'Biotechnology',
        'Architecture',
        'Design',
        'Environmental Science',
        'Sustainability',
        'Agriculture',
        'Law'
    ],

    'Switzerland': [
        'Business',
        'Accounting',
        'Finance',
        'Banking',
        'Marketing',
        'Management',
        'International Business',
        'Luxury Management',
        'Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Industrial Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Medicine',
        'Biotechnology',
        'Architecture',
        'Hospitality Management',
        'Hotel Management',
        'Tourism Management',
        'Culinary Arts',
        'Finance & Banking',
        'International Relations',
        'Law'
    ],

    'Sweden': [
        'Engineering',
        'Mechanical Engineering',
        'Civil Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Industrial Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Robotics',
        'Business',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Medicine',
        'Biotechnology',
        'Environmental Science',
        'Sustainability',
        'Renewable Energy',
        'Architecture',
        'Design'
    ],

    'Finland': [
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Game Development',
        'Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Environmental Engineering',
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Medicine',
        'Nursing',
        'Biotechnology',
        'Education',
        'Architecture',
        'Design',
        'Environmental Science',
        'Sustainability'
    ],

    'Norway': [
        'Engineering',
        'Mechanical Engineering',
        'Civil Engineering',
        'Electrical Engineering',
        'Marine Engineering',
        'Petroleum Engineering',
        'Renewable Energy',
        'Environmental Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Business',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Medicine',
        'Nursing',
        'Biotechnology',
        'Architecture',
        'Environmental Science',
        'Sustainability',
        'Aquaculture',
        'Law'
    ],

    'Denmark': [
        'Engineering',
        'Mechanical Engineering',
        'Civil Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Industrial Engineering',
        'Renewable Energy',
        'Environmental Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Robotics',
        'Business',
        'Accounting',
        'Finance',
        'Marketing',
        'Management',
        'International Business',
        'Economics',
        'Medicine',
        'Biotechnology',
        'Architecture',
        'Design',
        'Sustainability',
        'Environmental Science',
        'Hospitality Management',
        'Law'
    ],

    'Malaysia': [
        'Business',
        'Accounting',
        'Finance',
        'Banking',
        'Marketing',
        'Management',
        'International Business',
        'Engineering',
        'Civil Engineering',
        'Mechanical Engineering',
        'Electrical Engineering',
        'Electronics Engineering',
        'Computer Science',
        'Information Technology',
        'Artificial Intelligence',
        'Data Science',
        'Cyber Security',
        'Software Engineering',
        'Medicine',
        'Nursing',
        'Pharmacy',
        'Biotechnology',
        'Architecture',
        'Design',
        'Hospitality Management',
        'Tourism Management',
        'Law',
        'Education',
        'Media Studies',
        'Communication',
        'Environmental Science'
    ]
};

   const universities = {
    'Australia': [
        'University of Melbourne',
        'University of Sydney',
        'Monash University',
        'University of Queensland',
        'University of New South Wales',
        'Australian National University',
        'University of Western Australia',
        'University of Adelaide',
        'University of Technology Sydney',
        'Macquarie University',
        'RMIT University',
        'Deakin University',
        'University of Wollongong',
        'Curtin University',
        'Griffith University',
        'La Trobe University',
        'University of Newcastle',
        'Swinburne University of Technology',
        'Queensland University of Technology',
        'University of South Australia'
    ],

    'UK': [
        'University of Oxford',
        'University of Cambridge',
        'University College London',
        'Imperial College London',
        'University of Manchester',
        'King’s College London',
        'London School of Economics and Political Science',
        'University of Edinburgh',
        'University of Bristol',
        'University of Warwick',
        'University of Glasgow',
        'University of Birmingham',
        'University of Leeds',
        'University of Southampton',
        'University of Sheffield',
        'University of Nottingham',
        'Queen Mary University of London',
        'University of Exeter',
        'University of York',
        'University of Liverpool'
    ],

    'Canada': [
        'University of Toronto',
        'University of British Columbia',
        'McGill University',
        'University of Alberta',
        'McMaster University',
        'University of Waterloo',
        'Western University',
        'University of Montreal',
        'University of Calgary',
        'Queen’s University',
        'University of Ottawa',
        'Dalhousie University',
        'Simon Fraser University',
        'University of Victoria',
        'York University',
        'University of Saskatchewan',
        'University of Manitoba',
        'Carleton University',
        'Concordia University',
        'Toronto Metropolitan University'
    ],

    'USA': [
        'Harvard University',
        'Stanford University',
        'Massachusetts Institute of Technology',
        'Princeton University',
        'Yale University',
        'California Institute of Technology',
        'University of California, Berkeley',
        'University of California, Los Angeles',
        'University of California, San Diego',
        'University of Michigan',
        'University of Pennsylvania',
        'Columbia University',
        'Cornell University',
        'University of Chicago',
        'Duke University',
        'Northwestern University',
        'New York University',
        'University of Southern California',
        'Carnegie Mellon University',
        'University of Washington',
        'University of Texas at Austin',
        'University of Illinois Urbana-Champaign',
        'Boston University',
        'Purdue University',
        'Georgia Institute of Technology'
    ],

    'New Zealand': [
        'University of Auckland',
        'University of Otago',
        'Victoria University of Wellington',
        'University of Canterbury',
        'Massey University',
        'University of Waikato',
        'Lincoln University',
        'Auckland University of Technology'
    ],

    'Singapore': [
        'National University of Singapore',
        'Nanyang Technological University',
        'Singapore Management University',
        'Singapore University of Technology and Design',
        'Singapore Institute of Technology',
        'Singapore University of Social Sciences'
    ],

    'France': [
        'Sorbonne University',
        'PSL University',
        'Université Paris-Saclay',
        'École Polytechnique',
        'Institut Polytechnique de Paris',
        'Université Paris Cité',
        'University of Strasbourg',
        'University of Bordeaux',
        'University of Montpellier',
        'Aix-Marseille University',
        'University of Lyon',
        'Grenoble Alpes University',
        'KEDGE Business School',
        'EDHEC Business School',
        'ESSEC Business School',
        'HEC Paris'
    ],

    'Germany': [
        'Technical University of Munich',
        'Heidelberg University',
        'Ludwig Maximilian University of Munich',
        'Humboldt University of Berlin',
        'Free University of Berlin',
        'RWTH Aachen University',
        'Karlsruhe Institute of Technology',
        'Technical University of Berlin',
        'University of Freiburg',
        'University of Bonn',
        'University of Hamburg',
        'University of Cologne',
        'University of Stuttgart',
        'Dresden University of Technology',
        'University of Mannheim',
        'Goethe University Frankfurt'
    ],

    'Italy': [
        'University of Bologna',
        'University of Milan',
        'Sapienza University of Rome',
        'University of Padua',
        'University of Pisa',
        'University of Turin',
        'University of Florence',
        'University of Naples Federico II',
        'University of Trento',
        'University of Pavia',
        'University of Siena',
        'University of Genoa',
        'Politecnico di Milano',
        'Politecnico di Torino',
        'Bocconi University',
        'LUISS University'
    ],

    'Spain': [
        'University of Barcelona',
        'Complutense University of Madrid',
        'Autonomous University of Barcelona',
        'Autonomous University of Madrid',
        'University of Valencia',
        'University of Seville',
        'University of Granada',
        'Pompeu Fabra University',
        'University of the Basque Country',
        'Polytechnic University of Madrid',
        'Polytechnic University of Valencia',
        'University of Salamanca',
        'University of Zaragoza',
        'Carlos III University of Madrid',
        'IE University',
        'University of Navarra'
    ],

    'Netherlands': [
        'University of Amsterdam',
        'Delft University of Technology',
        'Eindhoven University of Technology',
        'Erasmus University Rotterdam',
        'Leiden University',
        'Utrecht University',
        'University of Groningen',
        'Vrije Universiteit Amsterdam',
        'Wageningen University & Research',
        'Maastricht University',
        'Radboud University',
        'University of Twente',
        'Tilburg University',
        'HAN University of Applied Sciences',
        'Fontys University of Applied Sciences'
    ],

    'Switzerland': [
        'ETH Zurich',
        'University of Zurich',
        'EPFL',
        'University of Geneva',
        'University of Lausanne',
        'University of Bern',
        'University of Basel',
        'University of St. Gallen',
        'USI Università della Svizzera italiana',
        'Zurich University of Applied Sciences',
        'Lucerne University of Applied Sciences and Arts',
        'Bern University of Applied Sciences'
    ],

    'Sweden': [
        'Lund University',
        'Uppsala University',
        'KTH Royal Institute of Technology',
        'Karolinska Institute',
        'Stockholm University',
        'University of Gothenburg',
        'Chalmers University of Technology',
        'Linköping University',
        'Umeå University',
        'Örebro University',
        'Linnaeus University',
        'Malmö University',
        'Jönköping University',
        'Stockholm School of Economics'
    ],

    'Finland': [
        'University of Helsinki',
        'Aalto University',
        'University of Turku',
        'University of Oulu',
        'Tampere University',
        'University of Jyväskylä',
        'University of Eastern Finland',
        'Åbo Akademi University',
        'LUT University',
        'Hanken School of Economics',
        'University of Vaasa',
        'Metropolia University of Applied Sciences'
    ],

    'Norway': [
        'University of Oslo',
        'University of Bergen',
        'Norwegian University of Science and Technology',
        'UiT The Arctic University of Norway',
        'Norwegian University of Life Sciences',
        'University of Stavanger',
        'University of Agder',
        'Nord University',
        'Oslo Metropolitan University',
        'BI Norwegian Business School'
    ],

    'Denmark': [
        'University of Copenhagen',
        'Aarhus University',
        'Technical University of Denmark',
        'Aalborg University',
        'University of Southern Denmark',
        'Copenhagen Business School',
        'Roskilde University',
        'IT University of Copenhagen',
        'VIA University College',
        'Aarhus School of Architecture'
    ],

    'Malaysia': [
        'University of Malaya',
        'Universiti Putra Malaysia',
        'Universiti Kebangsaan Malaysia',
        'Universiti Sains Malaysia',
        'Universiti Teknologi Malaysia',
        'Universiti Teknologi MARA',
        'International Islamic University Malaysia',
        'Taylor’s University',
        'Sunway University',
        'Monash University Malaysia',
        'University of Nottingham Malaysia',
        'UCSI University',
        'INTI International University',
        'Asia Pacific University of Technology & Innovation',
        'Multimedia University',
        'Management and Science University'
    ]
};

    function loadSpecializations() {

        const country = destination.value;

        specialization.innerHTML =
            '<option value="">Select Specialization</option>';

        if (!specializations[country]) {
            return;
        }

        specializations[country].forEach(function (item) {

            const option = document.createElement('option');

            option.value = item;
            option.textContent = item;

            specialization.appendChild(option);
        });
    }

    function loadUniversities() {

        const country = destination.value;

        university.innerHTML =
            '<option value="">Select University</option>';

        if (!universities[country]) {
            return;
        }

        universities[country].forEach(function (item) {

            const option = document.createElement('option');

            option.value = item;
            option.textContent = item;

            university.appendChild(option);
        });
    }

    destination.addEventListener('change', function () {

        loadSpecializations();
        loadUniversities();

    });

    document.querySelectorAll('.english-status').forEach(function (radio) {

        radio.addEventListener('change', function () {

            document.getElementById('englishTests').style.display =
                this.value === 'Yes' || this.value === 'Booked'
                    ? 'block'
                    : 'none';

            if (this.value === 'No') {
                document
                    .querySelectorAll('.english-test')
                    .forEach(function (checkbox) {
                        checkbox.checked = false;
                    });

                document
                    .querySelectorAll('#englishTests .score-box')
                    .forEach(function (box) {
                        box.style.display = 'none';
                    });
            }

        });

    });

    document.querySelectorAll('.english-test').forEach(function (checkbox) {

        checkbox.addEventListener('change', function () {

            const scoreBox =
                document.getElementById(this.dataset.score);

            scoreBox.style.display =
                this.checked ? 'block' : 'none';

        });

    });

    document.querySelectorAll('.entrance-status').forEach(function (radio) {

        radio.addEventListener('change', function () {

            document.getElementById('entranceTests').style.display =
                this.value === 'Yes' || this.value === 'Booked'
                    ? 'block'
                    : 'none';

            if (this.value === 'No') {
                document
                    .querySelectorAll('.entrance-test')
                    .forEach(function (checkbox) {
                        checkbox.checked = false;
                    });

                document
                    .querySelectorAll('#entranceTests .score-box')
                    .forEach(function (box) {
                        box.style.display = 'none';
                    });
            }

        });

    });

    document.querySelectorAll('.entrance-test').forEach(function (checkbox) {

        checkbox.addEventListener('change', function () {

            const scoreBox =
                document.getElementById(this.dataset.score);

            scoreBox.style.display =
                this.checked ? 'block' : 'none';

        });

    });

});
</script>

</body>
</html>