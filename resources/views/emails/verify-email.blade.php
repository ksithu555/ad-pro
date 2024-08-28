<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .header {
            text-align: center;
            color: #BF0731;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            text-align: center;
        }
        .button {
            display: block;
            width: 200px;
            margin: 30px auto;
            text-align: center;
            padding: 12px 0;
            color: white;
            background-color: #BF0731;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>こんにちは、{{ $user->name }} さん</h1>
        </div>
        <div class="content">
            <p>メールアドレスを確認するには、以下のボタンをクリックしてください。</p>
            <a href="{{ $verificationUrl }}" class="button">メールアドレスを確認する</a>
            <p>もしこのアカウントを作成していない場合は、特に対応は必要ありません。</p>
        </div>
        <div class="footer">
            <p>このメッセージは自動生成されたものです。返信しないでください。</p>
        </div>
    </div>
</body>
</html>
