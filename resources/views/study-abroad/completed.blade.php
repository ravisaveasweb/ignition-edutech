<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Completed</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
        }

        .completed-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .completed-box {
            width: 100%;
            max-width: 550px;
            background: #fff;
            padding: 45px 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
        }

        .success-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #eaf8ee;
            color: #16803c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            font-weight: bold;
        }

        .completed-box h1 {
            margin: 0 0 15px;
        }

        .completed-box p {
            color: #666;
            line-height: 1.7;
        }

        .home-button {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 25px;
            background: #eb933a;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="completed-wrapper">

    <div class="completed-box">

        <div class="success-icon">
            ✓
        </div>

        <h1>
            Application Completed
        </h1>

        <p>
            Thank you for submitting your application.
        </p>

        <p>
            Your phone number has been verified successfully.
            Our admissions team will review your application
            and contact you soon.
        </p>

        <a href="/" class="home-button">
            Back to Home
        </a>

    </div>

</div>

</body>
</html>