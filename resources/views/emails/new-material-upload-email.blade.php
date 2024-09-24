<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Material Upload</title>
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
            新規素材のアップロード通知
        </div>
        <div class="content">
            <div class="important-info">
                <p><strong>素材のアップロードがありました。</strong></p>
            </div>

            <p>以下の素材がアップロードされました:</p>
            <p><strong>会社名:</strong> {{ $material->user->company_name }}</p>
            <p><strong>名前</strong> {{ $material->user->name }}</p>
            <p><strong>素材ジャンル:</strong> {{ $material->type }}</p>
            <p><strong>素材名:</strong> {{ $material->name }}</p>
            <p><strong>素材プラン:</strong> {{ $material->required_plan == 1 ? '有料' : '無料' }}</p>

            <div class="important-info">
                <p><strong>素材一覧画面でご確認ください。</strong></p>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} AD-Pro. All rights reserved.
        </div>
    </div>
</body>
</html>
