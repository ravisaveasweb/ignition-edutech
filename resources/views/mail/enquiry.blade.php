<!DOCTYPE html>
<html>

<head>
    <title>New Enquiry</title>
</head>

<body>

    <h2>New Enquiry Received</h2>

    <table cellpadding="8">
        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $enquiry->name }}</td>
        </tr>

        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $enquiry->email }}</td>
        </tr>

        <tr>
            <td><strong>Mobile</strong></td>
            <td>{{ $enquiry->mobile }}</td>
        </tr>

        <tr>
            <td><strong>Program</strong></td>
            <td>{{ $enquiry->program }}</td>
        </tr>

        <tr>
            <td><strong>Source</strong></td>
            <td>{{ $enquiry->source }}</td>
        </tr>

        {{-- <tr>
            <td><strong>Message</strong></td>
            <td>{{ $enquiry->message }}</td>
        </tr> --}}

    </table>

</body>

</html>
