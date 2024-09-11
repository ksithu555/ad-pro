<x-user-layout>
    <style>
        /* Bank Card Styling */
.bank-card {
    border: 1px solid #eee;
    border-radius: 8px;
    background-color: #f9f9f9;
    padding: 20px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.bank-card:hover {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

/* Header with radio button */
.bank-header {
    background-color: #fff;
    border-bottom: 2px solid #BF0731;
    padding: 10px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 8px 8px 0 0;
}

/* Custom radio button styling */
.custom-radio:checked {
    background-color: #BF0731;
    border-color: #BF0731;
}

.custom-radio {
    accent-color: #BF0731;
    margin-right: 10px;
}

/* Bank details layout */
.bank-details {
    padding: 15px;
}

.bank-info {
    display: flex;
    justify-content: space-between;
    padding: 5px 0;
    border-bottom: 1px solid #eee;
}

.bank-info:last-child {
    border-bottom: none;
}

/* Labels and values */
.info-label {
    font-weight: bold;
    color: #333;
    font-size: 14px;
}

.info-value {
    font-size: 14px;
    color: #666;
}

/* Styling for the radio label */
.form-check-label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.form-check-label strong {
    color: #BF0731;
}

    </style>
    <!--== Tabs Style 02 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">支払い</h4>
                </div>
            </div>
            <div class="row mt-50 tabs-style-02">
                <div class="col-md-12">
                    <div class="light-tabs">
                    <!--== Nav tabs ==-->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active default-bg">
                            <a href="#bank-transfer" role="tab" data-toggle="tab">銀行振込</a>
                        </li>
                        <li role="presentation">
                            <a href="#paypal-credit" role="tab" data-toggle="tab">PayPal/クレジット</a>
                        </li>
                    </ul>
                    <!--== Tab panes ==-->
                    <div class="tab-content">
                        {{-- Bank Transfer --}}
                        <div role="tabpanel" class="tab-pane fade in active" id="bank-transfer">
                            <form name="bank-transfer-payment-form" id="bank-transfer-payment-form" action="{{ route('user.bank.transfer.payment') }}" method="POST" 
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="requestedPlan" name="requestedPlan" value="{{ $requestedPlan }}">
                                <div class="row mt-20">
                                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                        <div class="slick testimonial">
                                            @foreach ($bankAccounts as $key => $bankAccount)
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <!--== Bank Info Card ==-->
                                                <div class="bank-card">
                                                    <div class="bank-header">
                                                        <div class="form-check">
                                                            <input class="form-check-input custom-radio" type="radio" name="bankAccountId" id="bank{{$key}}" value="{{ $bankAccount->id }}" {{ $key == 0 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="bank{{$key}}">
                                                                <strong>{{ $bankAccount->bank_name }}</strong>の支払い方法を選択してください
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="bank-details">
                                                        <div class="bank-info">
                                                            <div class="info-label">銀行名:</div>
                                                            <div class="info-value">{{ $bankAccount->bank_name }}</div>
                                                        </div>
                                                        <div class="bank-info">
                                                            <div class="info-label">支店名:</div>
                                                            <div class="info-value">{{ $bankAccount->branch_name }}</div>
                                                        </div>
                                                        <div class="bank-info">
                                                            <div class="info-label">口座種類:</div>
                                                            <div class="info-value">{{ $bankAccount->account_type }}</div>
                                                        </div>
                                                        <div class="bank-info">
                                                            <div class="info-label">口座番号:</div>
                                                            <div class="info-value">{{ $bankAccount->account_number }}</div>
                                                        </div>
                                                        <div class="bank-info">
                                                            <div class="info-label">口座名義:</div>
                                                            <div class="info-value">{{ $bankAccount->account_name }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <span class="error" style="color:#BF0731" id="error-bankAccountId"></span>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                        <p style="color:red; font-size:12px;">
                                            * 正しい振込人名を入力してください。この名前は、支払いが行われたかどうかを確認するために、
                                            振込確認で使用されます。
                                        </p>
                                        <div class="form-group">
                                            <label class="sr-only" for="transferName">銀行口座名</label>
                                            <input type="text" name="transferName" class="md-input" id="transferName" placeholder="銀行口座名 *" value="{{ old('transferName') }}">
                                            <span class="error" style="color:#BF0731" id="error-transferName"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                        <div class="form-group">
                                            <label class="sr-only" for="transferAt">振込日</label>
                                            <input type="text" name="transferAt" class="md-input" id="transferAt" placeholder="振込日 *" value="{{ old('transferAt') }}">
                                            <span class="error" style="color:#BF0731" id="error-transferAt"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                        <div class="text-left mt-20">
                                            <input type="hidden" id="confirmed" name="confirmed" value="0">
                                            <div class="tr-modal-popup text-center">
                                                <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                                    <span>登録 <i class="ion-android-arrow-forward"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- PayPal Credit --}}
                        <div role="tabpanel" class="tab-pane fade" id="paypal-credit">
                        <p>Duis pulvinar mattis turpis in mollis. Suspendisse eu eros id dolor efficitur tincidunt quis id tellus. In lacinia laoreet auctor. Mauris a consequat magna, in tempus urna laoreet eu mi nec sagittis. Curabitur nunc velit, egestas vel aliquet ac, tempus quis dolor.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Tabs Style 02 End ==-->
     <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">銀行振込</span>
        <p class="mb-20">銀行振込で支払いしてもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateBankTransferPaymentForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('bank-transfer-payment-form').submit();
        }

        function validateBankTransferPaymentForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const selectedBank = document.querySelector('input[name="bankAccountId"]:checked');
            const transferName = document.getElementById('transferName').value.trim();
            const transferAt = document.getElementById('transferAt').value.trim();

            if (!selectedBank) {
                document.getElementById('error-bankAccountId').textContent = '銀行を選択してください';
                isValid = false;
            }

            // Validate name
            if (!transferName) {
                document.getElementById('error-transferName').textContent = '銀行口座名を入力してください';
                isValid = false;
            }

            // Validate transfer date
            if (!transferAt) {
                document.getElementById('error-transferAt').textContent = '振込日を入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize the date-time picker
        flatpickr("#transferAt", {
            enableTime: false,
            dateFormat: "Y-m-d H:i",
        });
    </script>
</x-user-layout>