<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
</head>

<body>

    <h2>New Contact Form Submission Received</h2>

    <table cellpadding="8">
        <tr>
            <td><strong>Subject</strong></td>
            <td>{{ $contactformdata->subject }}</td>
        </tr>

        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $contactformdata->name }}</td>
        </tr>

        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $contactformdata->email }}</td>
        </tr>

        <tr>
            <td><strong>Mobile</strong></td>
            <td>{{ $contactformdata->mobile }}</td>
        </tr>

        <tr>
            <td><strong>Message</strong></td>
            <td>{{ $contactformdata->message }}</td>
        </tr>

    </table>

</body>

</html>
