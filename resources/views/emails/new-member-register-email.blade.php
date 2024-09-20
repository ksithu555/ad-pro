<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Member Registration</title>
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
        .important-info {
            background-color: #f8d7da;
            border-left: 4px solid #BF0731;
            padding: 15px;
            margin-top: 20px;
            color: #721c24;
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
            新規会員登録通知
        </div>
        <div class="content">
            <div class="important-info">
                <p><strong>新規会員登録がありました。</strong></p>
            </div>

            <p>以下のユーザーが新規登録されました:</p>
            <p><strong>名前 (漢字):</strong> {{ $user->name }}</p>
            <p><strong>名前 (フリガナ):</strong> {{ $user->name_furigana }}</p>
            <p><strong>メールアドレス:</strong> {{ $user->email }}</p>
            <p><strong>会社名:</strong> {{ $user->company_name }}</p>

            <div class="important-info">
                <p><strong>会員リスト画面でご確認ください。</strong></p>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} AD-Pro. All rights reserved.
        </div>
    </div>
</body>
</html>
