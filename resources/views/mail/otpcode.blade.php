<!DOCTYPE html>
<html lang="en">
​
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
​
<body style="font-family:Poppins;">
    <h1 style="text-align:center;">
        <img src="http://www.tutorvy.com/assets/images/logo/logo.png" alt="">
    </h1>
    <h2 style="text-align:center;">Verification Code</h2>
    <h1 style="text-align:center;">{{Session::get('otp')}}</h1>
    <h4 style="text-align:center;">
        Here is your OTP verification Code
    </h4 style="text-align:center;">
</body>
​
</html>
