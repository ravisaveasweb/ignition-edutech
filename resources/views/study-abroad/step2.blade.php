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

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #222;
        }

        .application-wrapper {
            max-width: 850px;
            margin: 40px auto;
            padding: 20px;
        }

        .application-box {
            background: #fff;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 10px 35px rgba(0,0,0,.08);
        }

        .application-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .application-title h1 {
            margin: 0 0 10px;
            font-size: 28px;
        }

        .application-title p {
            color: #777;
            margin: 0;
        }

        .step-title {
            margin-bottom: 25px;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            background: #fff;
        }

        .form-control:focus {
            outline: none;
            border-color: #eb933a;
        }

        .test-section {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
        }

        .test-section h3 {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .radio-group label,
        .checkbox-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }

        .score-box {
            display: none;
            margin-top: 10px;
        }

        .submit-button {
            width: 100%;
            border: 0;
            background: #eb933a;
            color: #fff;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 25px;
        }

        .submit-button:hover {
            background: #d9822d;
        }

        .error-box {
            background: #ffeaea;
            color: #c00;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .application-wrapper {
                margin: 20px auto;
                padding: 10px;
            }

            .application-box {
                padding: 20px;
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
            'Engineering',
            'Computer Science',
            'Information Technology',
            'Medicine',
            'Nursing'
        ],
        'UK': [
            'Business',
            'Engineering',
            'Computer Science',
            'Data Science',
            'Medicine',
            'Law'
        ],
        'Canada': [
            'Business',
            'Engineering',
            'Computer Science',
            'Data Science',
            'Information Technology'
        ],
        'USA': [
            'Business',
            'Computer Science',
            'Engineering',
            'Data Science',
            'Medicine'
        ],
        'New Zealand': [
            'Business',
            'Engineering',
            'Information Technology',
            'Computer Science'
        ],
        'Singapore': [
            'Business',
            'Computer Science',
            'Engineering',
            'Finance'
        ],
        'France': [
            'Business',
            'Engineering',
            'Computer Science',
            'Fashion'
        ],
        'Germany': [
            'Engineering',
            'Computer Science',
            'Business',
            'Data Science'
        ],
        'Italy': [
            'Business',
            'Engineering',
            'Architecture',
            'Fashion'
        ],
        'Spain': [
            'Business',
            'Engineering',
            'Computer Science',
            'Tourism'
        ],
        'Netherlands': [
            'Business',
            'Engineering',
            'Computer Science',
            'Data Science'
        ],
        'Switzerland': [
            'Business',
            'Hospitality',
            'Finance',
            'Engineering'
        ],
        'Sweden': [
            'Engineering',
            'Computer Science',
            'Business',
            'Data Science'
        ],
        'Finland': [
            'Computer Science',
            'Engineering',
            'Business'
        ],
        'Norway': [
            'Engineering',
            'Business',
            'Computer Science'
        ],
        'Denmark': [
            'Engineering',
            'Business',
            'Computer Science'
        ],
        'Malaysia': [
            'Business',
            'Engineering',
            'Computer Science',
            'Information Technology'
        ]
    };

    const universities = {
        'Australia': [
            'University of Melbourne',
            'University of Sydney',
            'Monash University',
            'University of Queensland'
        ],
        'UK': [
            'University of Oxford',
            'University of Cambridge',
            'University College London',
            'University of Manchester'
        ],
        'Canada': [
            'University of Toronto',
            'University of British Columbia',
            'McGill University',
            'University of Alberta'
        ],
        'USA': [
            'Harvard University',
            'Stanford University',
            'MIT',
            'University of California'
        ],
        'New Zealand': [
            'University of Auckland',
            'University of Otago'
        ],
        'Singapore': [
            'National University of Singapore',
            'Nanyang Technological University'
        ],
        'France': [
            'Sorbonne University',
            'PSL University'
        ],
        'Germany': [
            'Technical University of Munich',
            'Heidelberg University'
        ],
        'Italy': [
            'University of Bologna',
            'University of Milan'
        ],
        'Spain': [
            'University of Barcelona',
            'Complutense University of Madrid'
        ],
        'Netherlands': [
            'University of Amsterdam',
            'Delft University of Technology'
        ],
        'Switzerland': [
            'ETH Zurich',
            'University of Zurich'
        ],
        'Sweden': [
            'Lund University',
            'Uppsala University'
        ],
        'Finland': [
            'University of Helsinki',
            'Aalto University'
        ],
        'Norway': [
            'University of Oslo',
            'University of Bergen'
        ],
        'Denmark': [
            'University of Copenhagen',
            'Aarhus University'
        ],
        'Malaysia': [
            'University of Malaya',
            'Universiti Putra Malaysia'
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