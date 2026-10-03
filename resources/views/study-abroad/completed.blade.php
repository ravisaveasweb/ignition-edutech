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
    color: #222;
    background:
        radial-gradient(circle at 8% 15%, rgba(245, 130, 11, .10), transparent 28%),
        radial-gradient(circle at 92% 85%, rgba(235, 147, 58, .08), transparent 30%),
        #f7f8fb;
}

/* Wrapper */
.completed-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 25px 15px;
    position: relative;
    overflow: hidden;
}

/* Decorative circles */
.completed-wrapper::before,
.completed-wrapper::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.completed-wrapper::before {
    width: 230px;
    height: 230px;
    top: -100px;
    left: -90px;
    background: rgba(245, 130, 11, .07);
}

.completed-wrapper::after {
    width: 280px;
    height: 280px;
    right: -120px;
    bottom: -140px;
    background: rgba(245, 130, 11, .06);
}

/* Main card */
.completed-box {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 470px;
    padding: 35px 30px 32px;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 20px;
    text-align: center;
    box-shadow:
        0 20px 55px rgba(25, 25, 25, .09),
        0 3px 10px rgba(25, 25, 25, .03);
}

/* Success icon */
.success-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #effaf3;
    border: 7px solid #f5fcf7;
    color: #16803c;
    font-size: 34px;
    font-weight: 700;
    box-shadow: 0 8px 22px rgba(22, 128, 60, .12);
    animation: successPop .5s ease;
}

/* Heading */
.completed-box h1 {
    margin: 0 0 10px;
    color: #222;
    font-size: 25px;
    line-height: 1.3;
    font-weight: 700;
}

/* Text */
.completed-box p {
    margin: 7px 0;
    color: #707070;
    font-size: 14px;
    line-height: 1.65;
}

.completed-box p:nth-of-type(2) {
    max-width: 390px;
    margin-left: auto;
    margin-right: auto;
}

/* Home button */
.home-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 145px;
    height: 46px;
    margin-top: 20px;
    padding: 0 24px;
    border-radius: 9px;
    background: linear-gradient(135deg, #f5820b, #eb933a);
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .2px;
    box-shadow: 0 7px 18px rgba(245, 130, 11, .23);
    transition: all .2s ease;
}

.home-button:hover {
    background: linear-gradient(135deg, #df7105, #f5820b);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 10px 23px rgba(245, 130, 11, .28);
}

.home-button:active {
    transform: translateY(0);
}

/* Animation */
@keyframes successPop {
    0% {
        opacity: 0;
        transform: scale(.7);
    }

    70% {
        transform: scale(1.08);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Tablet */
@media (max-width: 600px) {
    .completed-wrapper {
        padding: 20px 15px;
    }

    .completed-box {
        max-width: 440px;
        padding: 30px 22px 27px;
        border-radius: 17px;
    }

    .success-icon {
        width: 66px;
        height: 66px;
        font-size: 30px;
    }

    .completed-box h1 {
        font-size: 23px;
    }

    .completed-box p {
        font-size: 13px;
        line-height: 1.6;
    }
}

/* Small mobile */
@media (max-width: 380px) {
    .completed-wrapper {
        padding: 15px 12px;
    }

    .completed-box {
        padding: 27px 17px 24px;
        border-radius: 15px;
    }

    .success-icon {
        width: 62px;
        height: 62px;
        margin-bottom: 17px;
        font-size: 28px;
    }

    .completed-box h1 {
        font-size: 21px;
    }

    .home-button {
        width: 100%;
        height: 44px;
        margin-top: 17px;
    }
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
            Your Email Address has been verified successfully.
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