<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Transfer Alert</title>
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
        .bank-details {
            margin-top: 20px;
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
            ADPROからの銀行振込アラート
        </div>
        <div class="content">
            <div class="important-info">
                <p>
                    <strong>
                        会員{{ $userPayment->user->name }}様が{{ $userPayment->requested_plan == 1 ? 'シルバープラン（¥5,500）' : 'ゴールドプラン（¥6,600）' }}を申し込みされました。
                        お客様は「{{ $userPayment->transfer_name }}」の名義で
                        {{ \Carbon\Carbon::parse($userPayment->transfer_at)->format('Y-m-d') }} に
                        合計金額（¥ {{ number_format($userPayment->amount) }}）を銀行振込を予定しています。
                        振込先の銀行口座情報は以下の通りです。
                    </strong>
                </p>
            </div>

            <div class="bank-details">
                <p><strong>銀行名:</strong> {{ $userPayment->bankAccount->bank_name }}</p>
                <p><strong>支店名:</strong> {{ $userPayment->bankAccount->branch_name }}</p>
                <p><strong>口座種類:</strong> {{ $userPayment->bankAccount->account_type }}</p>
                <p><strong>口座番号:</strong> {{ $userPayment->bankAccount->account_number }}</p>
                <p><strong>口座名義:</strong> {{ $userPayment->bankAccount->account_name }}</p>
            </div>

            <div class="important-info">
                <p><strong>お振込の確認をお願いいたします。</strong></p>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} AD-Pro. All rights reserved.
        </div>
    </div>
</body>
</html>
