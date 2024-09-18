<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">管理者登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <form name="add-sub-admin-form" id="add-sub-admin-form" action="{{ route('admin.store.sub.admin') }}" 
                        method="POST" class="contact-form-style-01">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">名前</label>
                                            <input type="text" name="name" class="md-input" id="name" placeholder="名前 *" value="{{ old('name') }}">
                                            <span class="error" style="color:#BF0731" id="error-name"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') }}">
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
                                            <div class="text-center">
                                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                                <div class="tr-modal-popup">
                                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
                                                        <span>登録 <i class="ion-android-arrow-forward"></i></span>
                                                    </a>
                                                </div>
                                            </div>
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

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">管理者登録</span>
        <p class="mb-20">管理者を登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddSubAdminForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-sub-admin-form').submit();
        }

        function validateAddSubAdminForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (!name) {
                isValid = false;
                document.getElementById('error-name').textContent = 'お名前を入力してください';
            } else if (name.length > 255) {
                isValid = false;
                document.getElementById('error-name').textContent = '名前は255文字以内でなければなりません';
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

            return isValid;
        }
    </script>
</x-admin-layout>