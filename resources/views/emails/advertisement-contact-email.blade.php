<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            margin: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #BF0731;
            color: #fff;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            {{ $advertisement->name }}からのお問合せ
        </div>
        <div class="content">
            <p><strong>Subject:</strong> {{ $advertisementContact->subject }}</p>
            <p><strong>Name:</strong> {{ $advertisementContact->name }}</p>
            <p><strong>Email:</strong> {{ $advertisementContact->email }}</p>
            <p><strong>Phone:</strong> {{ $advertisementContact->phone }}</p>
            <p><strong>Message:</strong></p>
            <p>{!! nl2br($advertisementContact->content) !!}</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} AD-Pro. All rights reserved.
        </div>
    </div>
</body>
</html>
