<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">パスワード変更</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <form name="change-password-form" id="change-password-form" action="{{ route('user.update.password') }}" 
                        method="POST" class="contact-form-style-01">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="text" name="email" class="md-input" id="email" placeholder="メール *"value="{{ old('email') ? old('email') : Auth::user()->email }}" disabled>
                                            <span class="error" style="color:#BF0731" id="error-email"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="currentPassword">現在のパスワード</label>
                                            <input type="password" name="currentPassword" class="md-input" id="currentPassword" placeholder="現在のパスワード *" value="{{ old('currentPassword') }}">
                                            <span class="error" style="color:#BF0731" id="error-currentPassword"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="newPassword">新しいパスワード</label>
                                            <input type="password" name="newPassword" class="md-input" id="newPassword" placeholder="新しいパスワード *" value="{{ old('newPassword') }}">
                                            <span class="error" style="color:#BF0731" id="error-newPassword"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="confirmPassword">確認パスワード</label>
                                            <input type="password" name="confirmPassword" class="md-input" id="confirmPassword" placeholder="確認パスワード *" value="{{ old('confirmPassword') }}">
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
                                                        <span>修正 <i class="ion-android-arrow-forward"></i></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">パスワード変更</span>
        <p class="mb-20">パスワードを変更してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateChangePasswordForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('change-password-form').submit();
        }

        function validateChangePasswordForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const email = document.getElementById('email').value.trim();
            const currentPassword = document.getElementById('currentPassword').value.trim();
            const newPassword = document.getElementById('newPassword').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (!email) {
                isValid = false;
                document.getElementById('error-email').textContent = 'メールアドレスを入力してください';
            } else if (!/\S+@\S+\.\S+/.test(email)) {
                isValid = false;
                document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください';
            }

            if (!currentPassword) {
                isValid = false;
                document.getElementById('error-currentPassword').textContent = '現在のパスワードを入力してください';
            }

            if (!newPassword) {
                isValid = false;
                document.getElementById('error-newPassword').textContent = '新しいパスワードを入力してください';
            } else if (newPassword.length < 8) {
                isValid = false;
                document.getElementById('error-newPassword').textContent = '新しいパスワードは8文字以上でなければなりません';
            }

            if (newPassword && !confirmPassword) {
                isValid = false;
                document.getElementById('error-confirmPassword').textContent = 'パスワードを確認してください';
            } else if (newPassword !== confirmPassword) {
                isValid = false;
                document.getElementById('error-confirmPassword').textContent = 'パスワードが一致していません';
            }

            return isValid;
        }
    </script>
</x-admin-layout>