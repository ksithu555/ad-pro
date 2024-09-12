<x-user-layout>
    @if ($requestedPlan == 1)
        @php
            $finalAmount = 3300; // Silver Plan total amount
            $paypalBtnColor = 'silver';
        @endphp
    @else
        @php
            // Initialize refundAmount to avoid undefined variable issues
            $refundAmount = 0;
            $totalAmount = 3300; // Silver Plan total amount
            $finalAmount = 5500; // Gold Plan total amount
            $paypalBtnColor = 'gold';

            // Check if the current plan is Silver
            if (Auth::user()->plan_status == 1) {
                $planStart = Auth::user()->plan_start;
                $planEnd = Auth::user()->plan_end;

                // Calculate the total number of days in the plan period
                $totalDays = \Carbon\Carbon::parse($planStart)->diffInDays($planEnd);

                // Calculate the remaining days from now to the plan_end
                $remainingDays = \Carbon\Carbon::now()->diffInDays($planEnd, false);

                // Calculate the refund amount based on the remaining days
                if ($remainingDays > 0 && $totalDays > 0) {
                    $refundAmount = ($totalAmount / $totalDays) * $remainingDays;
                }
            }

            // Calculate the total amount after the refund
            $finalAmount = 5500 - $refundAmount;
        @endphp
    @endif
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
                        <li role="presentation" class="active">
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
                                <input type="hidden" id="finalAmount" name="finalAmount" value="{{ $finalAmount }}">
                                @if($bankAccounts->count() > 2)
                                <div class="row mt-20">
                                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                        <p style="color:red; font-size:16px; margin-left: 20px;">
                                            @if ($requestedPlan == 1)
                                                * シルバープラン : ¥ 3,300
                                            @else
                                                * ゴールドプラン : ¥ 5,500
                                        
                                                @if (Auth::user()->plan_status == 1)
                                                    <br>* シルバープランの払い戻し : ¥ {{ number_format($refundAmount) }}
                                                    <br>* 合計金額 : ¥ {{ number_format($finalAmount) }}
                                                @endif
                                            @endif
                                        </p>  
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
                                @else
                                <div class="row mt-20">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="row">
                                            <p style="color:red; font-size:16px; margin-left: 20px;">
                                                @if ($requestedPlan == 1)
                                                    * シルバープラン : ¥ 3,300
                                                @else
                                                    * ゴールドプラン : ¥ 5,500
                                            
                                                    @if (Auth::user()->plan_status == 1)
                                                        <br>* シルバープランの払い戻し : ¥ {{ number_format($refundAmount) }}
                                                        <br>* 合計金額 : ¥ {{ number_format($finalAmount) }}
                                                    @endif
                                                @endif
                                            </p>  
                                            @foreach ($bankAccounts as $key => $bankAccount)
                                            <div class="col-md-6 col-sm-6 col-xs-12">
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
                                    </div>
                                </div>
                                @endif
                                <div class="row mt-20">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
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
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
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
                            <div class="row mt-20">
                                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                                    <p style="color:red; font-size:16px;">
                                        @if ($requestedPlan == 1)
                                            * シルバープラン : ¥ 3,300
                                        @else
                                            * ゴールドプラン : ¥ 5,500
                                    
                                            @if (Auth::user()->plan_status == 1)
                                                <br>* シルバープランの払い戻し : ¥ {{ number_format($refundAmount) }}
                                                <br>* 合計金額 : ¥ {{ number_format($finalAmount) }}
                                            @endif
                                        @endif
                                    </p>                                        
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
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
    <script src="https://www.paypal.com/sdk/js?client-id=AR2lokFqBXcd_mRdoa5LKYA9LwdB5xCN3pc8u15_Ff5fdsv3aitLYTn8mKQz-ZJ4ySHNOKSxT2jNPiad&currency=JPY">
    // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>
    <script>
        var paypalBtnColor = '{{ $paypalBtnColor }}';
        paypal.Buttons({

            style: {
                layout: 'vertical',
                color: paypalBtnColor,
                shape: 'pill',
                label: 'paypal',
                height: 50
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ $finalAmount }}'

                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    if (details.status == 'COMPLETED') {

                        purchasepaymentdone('{{ $finalAmount }}', function(result) {
                            if (result == 1) {
                                $('#paymentsuccessModal').modal('show');
                            } else {
                                $('#paymentfailModal').modal('show');
                            }
                        });

                    } else {
                        $('#paymentfailModal').modal('show');
                    }
                });
            }
        }).render('#paypal-button-container');

        function purchasepaymentdone(finalAmount, callback) {
            var requestedPlan = <?php echo json_encode($requestedPlan); ?>;

            $.ajax({
                url: '{{ route('user.complete.payment') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    finalAmount: finalAmount,
                    requestedPlan: requestedPlan,
                    payment: "PayPal"
                },
                async: false,
                success: function(response) {
                    window.location.href = "{{ route('user.show.profile') }}";
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    alert('Error - ' + errorMessage);
                    // You can log the error to console for debugging purposes
                    console.error('Error: ' + errorMessage + 'error:' + response);
                }
            });
        }
    </script>
</x-user-layout>