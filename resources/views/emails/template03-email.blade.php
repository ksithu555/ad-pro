<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f2f2f2;
            color: #222;
            padding: 30px;
            margin: 0;
        }
        .email-container {
            max-width: 650px;
            margin: 0 auto;
            background-color: #fafafa;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 12px;
        }
        .header {
            background-color: #333;
            color: #ffffff;
            padding: 30px;
            text-align: center;
            font-size: 26px;
            letter-spacing: 1px;
        }
        .content {
            padding: 30px;
            font-size: 16px;
            line-height: 1.7;
            font-style: italic;
        }
        a {
            color: #333;
            text-decoration: underline;
        }
        a:hover {
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            {{ $title }}
        </div>
        <div class="content">
            {{ $selectedEmail->company_name }} <br>
            ご担当者様 <br>
            {!! nl2br(e($body)) !!}
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} AD-Pro. All rights reserved.
        </div>
    </div>
</body>
</html>
