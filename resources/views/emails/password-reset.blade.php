<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 30px;
        }

        .otp-container {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 0px 10px 0px #b2b2b2;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .otp {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="otp-container">
    <h2>Verify Your Email Address</h2>
    <p>We've received a request to verify your email address. To complete the process, please enter the following OTP:</p>
    <p class="otp">{{ $otp }}</p>
    <p>If you did not make this request, please ignore this email. Your email address will not be verified.</p>
</div>
</body>
</html>
