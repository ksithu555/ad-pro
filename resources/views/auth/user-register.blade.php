<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/all/header-ad-list.webp') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>Default Header</h1>
                    <h4 class="text-uppercase mt-30">Our Creative Portfolio</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->
    <!--== Page Title Start ==-->
    <section class="default-bg pt-40 pb-40">
        <div class="container">
          <div class="row white-color">
              <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
                   <div class="v-align-middle text-left text-xs-center breadcrumb">
                         <!-- Breadcrumb Start -->
                             <ul class="text-xs-center white-color">
                            <li>ホーム</li>
                            <li>登録</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">登録</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <form name="register-form" id="register-form" action="{{ route('user.store.register') }}" method="POST" 
                        class="contact-form-style-01" onsubmit="event.preventDefault(); submitForm();" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="nameKanji">名前 (漢字)</label>
                                            <input type="text" name="nameKanji" class="md-input" id="nameKanji" placeholder="名前 (漢字) *">
                                            <span class="error" style="color:#BF0731" id="error-nameKanji"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="nameFurigana">名前 (ふりがな)</label>
                                            <input type="text" name="nameFurigana" class="md-input" id="nameFurigana" placeholder="名前 (ふりがな) *">
                                            <span class="error" style="color:#BF0731" id="error-nameFurigana"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="email" name="email" class="md-input" id="email" placeholder="メール *">
                                            <span class="error" style="color:#BF0731" id="error-email"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="password">パスワード</label>
                                            <input type="password" name="password" class="md-input" id="password" placeholder="パスワード *">
                                            <span class="error" style="color:#BF0731" id="error-password"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="confirmPassword">確認パスワード</label>
                                            <input type="password" name="confirmPassword" class="md-input" id="confirmPassword" placeholder="確認パスワード *">
                                            <span class="error" style="color:#BF0731" id="error-confirmPassword"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyName">会社名</label>
                                            <input type="text" name="companyName" class="md-input" id="companyName" placeholder="会社名 *">
                                            <span class="error" style="color:#BF0731" id="error-companyName"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyPhone">電話番号</label>
                                            <input type="text" name="companyPhone" class="md-input" id="companyPhone" placeholder="電話番号 *">
                                            <span class="error" style="color:#BF0731" id="error-companyPhone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        @php
                                            $businessTypes = $registerSelectors->where('type', 'business');
                                        @endphp
                                        <div class="form-group">
                                            <label for="businessType">事業形態</label>
                                            <select name="businessType" class="orderby social-media">
                                                <option value="" selected="selected">選択してください *</option>
                                                @foreach ($businessTypes as $business)
                                                <option value="{{ $business->id }}">{{ $business->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-businessType"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        @php
                                            $purposeOfUses = $registerSelectors->where('type', 'purpose');
                                        @endphp
                                        <div class="form-group">
                                            <label for="purposeOfUse">利用目的</label>
                                            <select name="purposeOfUse" class="orderby social-media">
                                                <option value="" selected="selected">選択してください *</option>
                                                @foreach ($purposeOfUses as $purposeOfUse)
                                                <option value="{{ $purposeOfUse->id }}">{{ $purposeOfUse->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-purposeOfUse"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        @php
                                            $industries = $registerSelectors->where('type', 'industry');
                                        @endphp
                                        <div class="form-group">
                                            <label for="industry">業種</label>
                                            <select name="industry" class="orderby social-media">
                                                <option value="" selected="selected">選択してください *</option>
                                                @foreach ($industries as $industry)
                                                <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-industry"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        @php
                                            $positions = $registerSelectors->where('type', 'position');
                                        @endphp
                                        <div class="form-group">
                                            <label for="position">役職</label>
                                            <select name="position" class="orderby social-media">
                                                <option value="" selected="selected">選択してください *</option>
                                                @foreach ($positions as $position)
                                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-position"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyPostalCode">郵便番号</label>
                                            <input type="text" name="companyPostalCode" class="md-input" id="companyPostalCode" placeholder="郵便番号 *">
                                            <span class="error" style="color:#BF0731" id="error-companyPostalCode"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyRoomNo">部屋番号</label>
                                            <input type="text" name="companyRoomNo" class="md-input" id="companyRoomNo" placeholder="部屋番号 *">
                                            <span class="error" style="color:#BF0731" id="error-companyRoomNo"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyBuilding">ビル</label>
                                            <input type="text" name="companyBuilding" class="md-input" id="companyBuilding" placeholder="ビル *">
                                            <span class="error" style="color:#BF0731" id="error-companyBuilding"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyBlock">丁目</label>
                                            <input type="text" name="companyBlock" class="md-input" id="companyBlock" placeholder="丁目 *">
                                            <span class="error" style="color:#BF0731" id="error-companyBlock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyCity">市</label>
                                            <input type="text" name="companyCity" class="md-input" id="companyCity" placeholder="市 *">
                                            <span class="error" style="color:#BF0731" id="error-companyCity"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyPrefecture">県</label>
                                            <input type="text" name="companyPrefecture" class="md-input" id="companyPrefecture" placeholder="県 *">
                                            <span class="error" style="color:#BF0731" id="error-companyPrefecture"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyCountry">国</label>
                                            <input type="text" name="companyCountry" class="md-input" id="companyCountry" placeholder="国 *">
                                            <span class="error" style="color:#BF0731" id="error-companyCountry"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyWebsite">URL</label>
                                            <input type="text" name="companyWebsite" class="md-input" id="companyWebsite" placeholder="URL">
                                            <span class="error" style="color:#BF0731" id="error-companyWebsite"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="terms" name="terms">
                                                <label for="terms" class="pt-10">プライバシーポリシーに同意します *</label>
                                            </div>
                                            <span class="error" style="color:#BF0731" id="error-terms"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <input type="hidden" id="confirmed" name="confirmed" value="0">
                                        <div class="text-left ml-10">
                                            <button type="submit" name="submitButton" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
                                                <span>登録<i class="ion-android-arrow-forward"></i></span>
                                            </button>
                                        </div>
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
    <script>
        function submitForm() {
            if (validateRegisterForm()) {
                document.getElementById('confirmed').value = '1';
                document.getElementById('register-form').submit();
            }
        }
        function validateRegisterForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const nameKanji = document.getElementById('nameKanji').value.trim();
            const nameFurigana = document.getElementById('nameFurigana').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();
            const companyName = document.getElementById('companyName').value.trim();
            const companyPhone = document.getElementById('companyPhone').value.trim();
            const companyWebsite = document.getElementById('companyWebsite').value.trim();
            const companyPostalCode = document.getElementById('companyPostalCode').value.trim();
            const companyRoomNo = document.getElementById('companyRoomNo').value.trim();
            const companyBuilding = document.getElementById('companyBuilding').value.trim();
            const companyBlock = document.getElementById('companyBlock').value.trim();
            const companyCity = document.getElementById('companyCity').value.trim();
            const companyPrefecture = document.getElementById('companyPrefecture').value.trim();
            const companyCountry = document.getElementById('companyCountry').value.trim();
            const businessType = document.querySelector('select[name="businessType"]').value;
            const purposeOfUse = document.querySelector('select[name="purposeOfUse"]').value;
            const industry = document.querySelector('select[name="industry"]').value;
            const position = document.querySelector('select[name="position"]').value;
            const terms = document.getElementById('terms');

            // Existing validations
            if (!nameKanji) {
                isValid = false;
                document.getElementById('error-nameKanji').textContent = 'お名前 (漢字)を入力してください';
            } else if (name.length > 255) {
                isValid = false;
                document.getElementById('error-nameKanji').textContent = '名前 (漢字)は255文字以内でなければなりません';
            }

            if (!nameFurigana) {
                isValid = false;
                document.getElementById('error-nameFurigana').textContent = 'お名前 (ふりがな)を入力してください';
            } else if (name.length > 255) {
                isValid = false;
                document.getElementById('error-nameFurigana').textContent = '名前 (ふりがな)は255文字以内でなければなりません';
            }

            if (!email) {
                isValid = false;
                document.getElementById('error-email').textContent = 'メールアドレスを入力してください';
            } else if (!/\S+@\S+\.\S+/.test(email)) {
                isValid = false;
                document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください';
            }

            if (!password) {
                isValid = false;
                document.getElementById('error-password').textContent = 'パスワードを入力してください';
            } else if (password.length < 8) {
                isValid = false;
                document.getElementById('error-password').textContent = 'パスワードは8文字以上でなければなりません';
            }

            if (password && !confirmPassword) {
                isValid = false;
                document.getElementById('error-confirmPassword').textContent = 'パスワードを確認してください';
            } else if (password !== confirmPassword) {
                isValid = false;
                document.getElementById('error-confirmPassword').textContent = 'パスワードが一致していません';
            }

            if (!companyName) {
                isValid = false;
                document.getElementById('error-companyName').textContent = '会社名を入力してください';
            } else if (companyName.length > 255) {
                isValid = false;
                document.getElementById('error-companyName').textContent = '名前は255文字以内でなければなりません';
            }

            if (!companyPhone) {
                isValid = false;
                document.getElementById('error-companyPhone').textContent = '電話番号を入力してください';
            } else if (!/^[\d()-\s]+$/.test(companyPhone)) {
                isValid = false;
                document.getElementById('error-companyPhone').textContent = '電話番号は数字、(、)、-、スペースのみを含めることができます';
            }

            if (companyWebsite && /\s/.test(companyWebsite)) {
                isValid = false;
                document.getElementById('error-companyWebsite').textContent = 'ウェブサイトにスペースを含めることはできません';
            }

            if (!companyPostalCode) {
                isValid = false;
                document.getElementById('error-companyPostalCode').textContent = '郵便番号を入力してください';
            } else if (!/^\d+$/.test(companyPostalCode)) {
                isValid = false;
                document.getElementById('error-companyPostalCode').textContent = '郵便番号は数字のみでなければなりません';
            }

            if (!companyRoomNo) {
                isValid = false;
                document.getElementById('error-companyRoomNo').textContent = '部屋番号を入力してください';
            }

            if (!companyBuilding) {
                isValid = false;
                document.getElementById('error-companyBuilding').textContent = 'ビルを入力してください';
            }

            if (!companyBlock) {
                isValid = false;
                document.getElementById('error-companyBlock').textContent = '部屋番号を入力してください';
            } else if (!/^\d+$/.test(companyBlock)) {
                isValid = false;
                document.getElementById('error-companyBlock').textContent = '部屋番号は数字のみでなければなりません';
            }

            if (!companyCity) {
                isValid = false;
                document.getElementById('error-companyCity').textContent = '市を入力してください';
            } else if (!/^[\p{L}\s]+$/u.test(companyCity)) {
                isValid = false;
                document.getElementById('error-companyCity').textContent = '市は文字（日本語を含む）とスペースのみでなければなりません';
            }

            if (!companyPrefecture) {
                isValid = false;
                document.getElementById('error-companyPrefecture').textContent = '県を入力してください';
            } else if (!/^[\p{L}\s]+$/u.test(companyPrefecture)) {
                isValid = false;
                document.getElementById('error-companyPrefecture').textContent = '県は文字（日本語を含む）とスペースのみでなければなりません';
            }

            if (!companyCountry) {
                isValid = false;
                document.getElementById('error-companyCountry').textContent = '国を入力してください';
            } else if (!/^[\p{L}\s]+$/u.test(companyCountry)) {
                isValid = false;
                document.getElementById('error-companyCountry').textContent = '国は文字（日本語を含む）とスペースのみでなければなりません';
            }

            if (!businessType) {
                isValid = false;
                document.getElementById('error-businessType').textContent = '事業形態を選択してください';
            }

            if (!purposeOfUse) {
                isValid = false;
                document.getElementById('error-purposeOfUse').textContent = '利用目的を選択してください';
            }

            if (!industry) {
                isValid = false;
                document.getElementById('error-industry').textContent = '業種を選択してください';
            }

            if (!position) {
                isValid = false;
                document.getElementById('error-position').textContent = '役職を選択してください';
            }

            if (!terms.checked) {
                isValid = false;
                document.getElementById('error-terms').textContent = 'プライバシーポリシーをチェックしてください';
            }

            return isValid;
        }
    </script>
</x-guest-layout>