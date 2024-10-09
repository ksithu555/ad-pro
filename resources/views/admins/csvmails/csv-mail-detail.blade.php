<x-admin-layout>
    <section class="white-bg pt-120" style="padding-bottom: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div style="text-align: left;">
                        <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.csv.and.mail.sendings') }}">
                            <i class="fa fa-arrow-left"></i> 戻る
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <x-message-box></x-message-box>
                </div>
                <div class="col-md-3">
                    <div style="text-align: right;">
                        <a id="edit-btn" class="btn btn-dark-outline btn-md btn-square remove-margin" onclick="enableEditing()">
                            <span>編集</span>
                        </a>
                    </div>
                </div>
            </div>
            <form name="edit-csv-mail-form" id="edit-csv-mail-form" action="{{ route('admin.update.csv.mail') }}" method="POST" class="contact-form-style-01" enctype="multipart/form-data">
                @csrf
                <div class="messages"></div>
                <input type="hidden" id="id" name="id" value="{{ $csvMail->id }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover shop-cart">
                                <thead>
                                    <tr>
                                        <th style="width: 333px;">タイトル</th>
                                        <th>内容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add all your rows here as they are -->
                                    <tr>
                                        <td>
                                            企業名
                                        </td>
                                        <td style="text-align: left">
                                            <div class="form-group">
                                                <label class="sr-only" for="companyName">企業名</label>
                                                <input type="text" name="companyName" class="md-input" id="companyName" placeholder="企業名 *" value="{{ $csvMail->company_name }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-companyName"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            郵便番号
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="postalCode">郵便番号</label>
                                                <input type="text" name="postalCode" class="md-input" id="postalCode" placeholder="郵便番号 *" value="{{ $csvMail->postal_code }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-postalCode"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            住所
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="address">住所</label>
                                                <input type="text" name="address" class="md-input" id="address" placeholder="住所 *" value="{{ $csvMail->address }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-address"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            電話番号
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="phone">電話番号</label>
                                                <input type="text" name="phone" class="md-input" id="phone" placeholder="電話番号 *" value="{{ $csvMail->phone }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-phone"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FAX
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="fax">FAX</label>
                                                <input type="text" name="fax" class="md-input" id="fax" placeholder="FAX *" value="{{ $csvMail->fax }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-fax"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            資本金
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="capital">資本金</label>
                                                <input type="text" name="capital" class="md-input" id="capital" placeholder="資本金 *" value="{{ $csvMail->capital }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-capital"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            従業員数(人)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="numberOfEmployees">従業員数(人)</label>
                                                <input type="text" name="numberOfEmployees" class="md-input" id="numberOfEmployees" placeholder="従業員数(人) *" value="{{ $csvMail->number_of_employees }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-numberOfEmployees"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            年商
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="annualTurnover">年商</label>
                                                <input type="text" name="annualTurnover" class="md-input" id="annualTurnover" placeholder="年商 *" value="{{ $csvMail->annual_turnover }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-annualTurnover"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            上場
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="listed">上場</label>
                                                <input type="text" name="listed" class="md-input" id="listed" placeholder="上場 *" value="{{ $csvMail->listed }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-listed"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            URL
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="url">URL</label>
                                                <input type="text" name="url" class="md-input" id="url" placeholder="URL *" value="{{ $csvMail->URL }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-url"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            メール
                                        </td>
                                        <td style="text-align: left">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">メール</label>
                                                <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ $csvMail->email }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-email"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            設立
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="establishedDate">設立</label>
                                                <input type="text" name="establishedDate" class="md-input" id="establishedDate" placeholder="設立 *" value="{{ $csvMail->established_date }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-establishedDate"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            業種
                                        </td>
                                        <td style="text-align: left">
                                            <div class="form-group">
                                                <label class="sr-only" for="industry">業種</label>
                                                <input type="text" name="industry" class="md-input" id="industry" placeholder="業種 *" value="{{ $csvMail->industry }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-industry"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            グループ名
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="sr-only" for="group">グループ名</label>
                                                <input type="text" name="group" class="md-input" id="group" placeholder="グループ名 *" value="{{ $csvMail->group }}" disabled>
                                                <span class="error" style="color:#BF0731" id="error-group"></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-30">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <input type="hidden" id="confirmed" name="confirmed" value="0">
                        <div class="tr-modal-popup text-center">
                            <a onclick="showModal()" id="save-btn" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin" style="display:none;" onclick="submitForm()">
                                <span>修正 <i class="ion-android-arrow-forward"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>            
        </div>
    </section>

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">CSV内容修正</span>
        <p class="mb-20">CSV内容を修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    <script>
        function enableEditing() {
            // Hide the "編集" button and show the "修正" button
            // document.getElementById('edit-btn').style.display = 'none';
            document.getElementById('save-btn').style.display = 'inline-block';
            
            // Enable all input fields
            var inputs = document.querySelectorAll('input.md-input');
            inputs.forEach(function(input) {
                input.removeAttribute('disabled');
            });
        }
    </script>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateEditCsvMailForm()) {
                document.getElementById('save-btn').setAttribute('href', '#modal-popup');
                document.getElementById('save-btn').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('save-btn').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-csv-mail-form').submit();
        }

        function validateEditCsvMailForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const companyName = document.getElementById('companyName').value.trim();
            const email = document.getElementById('email').value.trim();
            const industry = document.getElementById('industry').value.trim();

            if (!companyName) {
                document.getElementById('error-companyName').textContent = '会社名を入力してください';
                isValid = false;
            }
        
            if (!email) {
                isValid = false;
                document.getElementById('error-email').textContent = 'メールアドレスを入力してください';
            } else if (!/\S+@\S+\.\S+/.test(email)) {
                isValid = false;
                document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください';
            }

            if (!industry) {
                document.getElementById('error-industry').textContent = '業種を入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>