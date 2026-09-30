
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
</head>

<body style="margin:0;padding:0;background:#f5f7fb;font-family:Arial,sans-serif;">

    <div style="padding:40px 20px;">

        <div style="
            max-width:550px;
            margin:auto;
            background:#ffffff;
            padding:35px;
            border-radius:12px;
            text-align:center;
            box-shadow:0 5px 25px rgba(0,0,0,.08);
        ">

            <h2 style="margin-bottom:10px;color:#222;">
                Verify Your Email
            </h2>

            <p style="color:#666;font-size:15px;">
                Thank you for submitting your Study Abroad application.
            </p>

            <p style="color:#666;font-size:15px;">
                Please use the following OTP to verify your email address:
            </p>

            <div style="
                display:inline-block;
                margin:20px 0;
                padding:15px 30px;
                background:#f5f7fb;
                border-radius:8px;
                font-size:32px;
                font-weight:bold;
                letter-spacing:8px;
                color:#eb933a;
            ">
                {{ $otp }}
            </div>

            <p style="color:#777;font-size:14px;">
                This OTP is valid for 5 minutes.
            </p>

            <p style="color:#999;font-size:13px;margin-top:30px;">
                If you did not submit this application, you can safely ignore this email.
            </p>

        </div>

    </div>

</body>
</html>