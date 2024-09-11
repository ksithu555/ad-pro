<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">銀行口座登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <form name="add-bank-account-form" id="add-bank-account-form" action="{{ route('admin.store.bank.account') }}" method="POST" 
                        class="contact-form-style-01">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="bankName">銀行名</label>
                                    <input type="text" name="bankName" class="md-input" id="bankName" placeholder="銀行名 *" value="{{ old('bankName') }}">
                                    <span class="error" style="color:#BF0731" id="error-bankName"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="branchName">支店名</label>
                                    <input type="text" name="branchName" class="md-input" id="branchName" placeholder="支店名 *" value="{{ old('branchName') }}">
                                    <span class="error" style="color:#BF0731" id="error-branchName"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="accountType">口座種別</label>
                                    <input type="text" name="accountType" class="md-input" id="accountType" placeholder="口座種別 *" value="{{ old('accountType') }}">
                                    <span class="error" style="color:#BF0731" id="error-accountType"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="accountNumber">口座番号</label>
                                    <input type="text" name="accountNumber" class="md-input" id="accountNumber" placeholder="口座番号 *" value="{{ old('accountNumber') }}">
                                    <span class="error" style="color:#BF0731" id="error-accountNumber"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="accountName">口座名</label>
                                    <input type="text" name="accountName" class="md-input" id="accountName" placeholder="口座名 *" value="{{ old('accountName') }}">
                                    <span class="error" style="color:#BF0731" id="error-accountName"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="text-center">
                                    <input type="hidden" id="confirmed" name="confirmed" value="0">
                                    <div class="tr-modal-popup">
                                        <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                            <span>登録 <i class="ion-android-arrow-forward"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--== Contact Form Style 01 End ==-->

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">銀行口座登録</span>
        <p class="mb-20">銀行口座を登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>    

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddBankAccountForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-bank-account-form').submit();
        }

        function validateAddBankAccountForm() {
        let isValid = true;
        document.querySelectorAll('.error').forEach(el => el.textContent = '');

        const bankName = document.getElementById('bankName').value.trim();
        const branchName = document.getElementById('branchName').value.trim();
        const accountType = document.getElementById('accountType').value.trim();
        const accountNumber = document.getElementById('accountNumber').value.trim();
        const accountName = document.getElementById('accountName').value.trim();

        // Validate bankName
        if (!bankName) {
            document.getElementById('error-bankName').textContent = '銀行名を入力してください';
            isValid = false;
        }

        // Validate branchName
        if (!branchName) {
            document.getElementById('error-branchName').textContent = '支店名を入力してください';
            isValid = false;
        }

        // Validate accountType
        if (!accountType) {
            document.getElementById('error-accountType').textContent = '口座の種類を選択してください';
            isValid = false;
        }

        // Validate accountNumber (only digits allowed)
        if (!accountNumber) {
            document.getElementById('error-accountNumber').textContent = '口座番号を入力してください';
            isValid = false;
        } else if (!/^\d+$/.test(accountNumber)) {
            document.getElementById('error-accountNumber').textContent = '口座番号は数字のみを入力してください';
            isValid = false;
        }

        // Validate accountName
        if (!accountName) {
            document.getElementById('error-accountName').textContent = '口座名義を入力してください';
            isValid = false;
        }

        return isValid;
    }
    </script>
</x-admin-layout>