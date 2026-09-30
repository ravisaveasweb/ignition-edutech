<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Past Education Details</title>

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
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
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

        .section-title {
            margin-top: 30px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            font-size: 18px;
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

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .passport-group {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .passport-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
            gap: 7px;
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

        .success-box {
            background: #eaf8ee;
            color: #16803c;
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

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
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