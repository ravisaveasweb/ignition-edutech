<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>
        New Study Abroad Application
    </title>
</head>

<body>

    <h2>
        New Study Abroad Application
    </h2>

    <hr>

    <h3>
        Personal Details
    </h3>

    <p>
        <strong>Name:</strong>
        {{ $application->personalDetails->full_name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $application->personalDetails->email }}
    </p>

    <p>
        <strong>Phone:</strong>
        {{ $application->personalDetails->phone }}
    </p>

    <p>
        <strong>City:</strong>
        {{ $application->personalDetails->city }}
    </p>

    <p>
        <strong>Course Interested:</strong>
        {{ $application->personalDetails->course_interested }}
    </p>

    <p>
        <strong>Start Study:</strong>
        {{ $application->personalDetails->start_study }}
    </p>

    <hr>

    <h3>
        Education Preferences
    </h3>

    @if ($application->educationPreference)
        <p>
            <strong>Gender:</strong>
            {{ $application->educationPreference->gender ?? 'Not provided' }}
        </p>

        <p>
            <strong>Preferred Destination:</strong>
            {{ $application->educationPreference->preferred_destination }}
        </p>

        <p>
            <strong>Specialization:</strong>
            {{ $application->educationPreference->specialization }}
        </p>

        <p>
            <strong>Interested University:</strong>
            {{ $application->educationPreference->interested_university }}
        </p>

        <p>
            <strong>English Test:</strong>
            {{ $application->educationPreference->english_test_status ?? 'Not provided' }}
        </p>

        <p>
            <strong>Entrance Exam:</strong>
            {{ $application->educationPreference->entrance_exam_status ?? 'Not provided' }}
        </p>
    @endif

    <hr>

    <h3>
        Test Scores
    </h3>

    @if ($application->testScores->count())

        <table cellpadding="8" cellspacing="0" border="1" width="100%">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Test</th>
                    <th>Score</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($application->testScores as $test)
                    <tr>
                        <td>
                            {{ ucfirst($test->test_type) }}
                        </td>

                        <td>
                            {{ $test->test_name }}
                        </td>

                        <td>
                            {{ $test->score ?? 'Not provided' }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>
            No test scores provided.
        </p>

    @endif

    <hr>

    <h3>
        Past Education
    </h3>

    @if ($application->pastEducation)
        <p>
            <strong>10th Board:</strong>
            {{ $application->pastEducation->tenth_board }}
        </p>

        <p>
            <strong>10th Passing Year:</strong>
            {{ $application->pastEducation->tenth_passing_year }}
        </p>

        <p>
            <strong>10th Percentage:</strong>
            {{ $application->pastEducation->tenth_percentage }}%
        </p>

        <p>
            <strong>10th School:</strong>
            {{ $application->pastEducation->tenth_school_name ?? 'Not provided' }}
        </p>

        <br>

        <p>
            <strong>12th Board:</strong>
            {{ $application->pastEducation->twelfth_board }}
        </p>

        <p>
            <strong>12th Passing Year:</strong>
            {{ $application->pastEducation->twelfth_passing_year }}
        </p>

        <p>
            <strong>12th Percentage:</strong>
            {{ $application->pastEducation->twelfth_percentage }}%
        </p>

        <p>
            <strong>12th School:</strong>
            {{ $application->pastEducation->twelfth_school_name }}
        </p>

        <p>
            <strong>12th Specialization:</strong>
            {{ $application->pastEducation->twelfth_specialization }}
        </p>

        <p>
            <strong>Passport:</strong>

            {{ $application->pastEducation->passport ? 'Yes' : 'No' }}

        </p>
    @endif

    <hr>

    <h3>
        Application Status
    </h3>

    <p>
        <strong>Phone Verified:</strong>
        {{ $application->otp_verified ? 'Yes' : 'No' }}
    </p>

    <p>
        <strong>Status:</strong>
        {{ $application->status }}
    </p>

    <p>
        <strong>Application ID:</strong>
        {{ $application->id }}
    </p>

</body>

</html>
