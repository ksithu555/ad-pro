<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>Please click the button below to verify your email address:</p>
    <a href="{{ $verificationUrl }}" style="display: inline-block; padding: 10px 20px; color: black; background-color: #BF0731; text-decoration: none;">Verify Email</a>
    <p>If you did not create an account, no further action is required.</p>
</body>
</html>
