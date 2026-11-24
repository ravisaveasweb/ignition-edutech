<!DOCTYPE html>
<html>

<head>
    <title>New University Application</title>
</head>

<body>

    <h2>New University Application Received</h2>

    <table cellpadding="8">
        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $universityApplicationForm->first_name }} {{ $universityApplicationForm->last_name }}</td>
        </tr>

        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $universityApplicationForm->email }}</td>
        </tr>

        <tr>
            <td><strong>Phone</strong></td>
            <td>{{ $universityApplicationForm->phone }}</td>
        </tr>

        <tr>
            <td><strong>Programme</strong></td>
            <td>{{ $universityApplicationForm->programme }}</td>
        </tr>

        <tr>
            <td><strong>City</strong></td>
            <td>{{ $universityApplicationForm->city }}</td>
        </tr>

        <tr>
            <td><strong>Enrollment Timeline</strong></td>
            <td>{{ $universityApplicationForm->enrollment }}</td>
        </tr>

        <tr>
            <td><strong>Message</strong></td>
            <td>{{ $universityApplicationForm->message }}</td>
        </tr>

    </table>

</body>

</html>
