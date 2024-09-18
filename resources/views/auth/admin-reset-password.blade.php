<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/title-bg/top-login-bg.jpg') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>管理者パスワードをリセット</h1>
                    <h4 class="text-uppercase mt-30">Admin Reset Password</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->
    <!--== Page Title Start ==-->
    <section class="default-bg pt-20 pb-20">
        <div class="container">
          <div class="row white-color">
              <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
                   <div class="v-align-middle text-left text-xs-center breadcrumb">
                         <!-- Breadcrumb Start -->
                             <ul class="text-xs-center white-color">
                            <li>Home</li>
                            <li>Admin Reset Password</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-16px line-height-26 mt-0">管理者パスワードをリセット</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row mt-25">
                <div class="col-md-8 centerize-col">
                    <x-message-box></x-message-box>
                    <form method="POST" action="{{ route('admin.update.forgot.password') }}" class="contact-form-style-01" 
                    name="reset-password-form" id="reset-password-form" onsubmit="event.preventDefault(); submitForm();">
                        @csrf
                        <div class="messages"></div>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') }}">
                                    <span class="error" style="color:#BF0731" id="error-email"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="password">新しいパスワード</label>
                                    <input type="password" name="password" class="md-input" id="password" placeholder="新しいパスワード *" value="{{ old('password') }}">
                                    <span class="error" style="color:#BF0731" id="error-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="password_confirmation">パスワード確認</label>
                                    <input type="password" name="password_confirmation" class="md-input" id="password_confirmation" placeholder="パスワード確認 *" value="{{ old('password_confirmation') }}">
                                    <span class="error" style="color:#BF0731" id="error-password_confirmation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="text-center">
                                    <button type="submit" name="submitButton" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
                                        <span>パスワードをリセット <i class="ion-android-arrow-forward"></i></span>
                                    </button>
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
            if (validateResetForm()) {
                document.getElementById('confirmed').value = '1';
                document.getElementById('reset-password-form').submit();
            }
        }
        function validateResetForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const password_confirmation = document.getElementById('password_confirmation').value.trim();

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

            if (password && !password_confirmation) {
                isValid = false;
                document.getElementById('error-password_confirmation').textContent = 'パスワードを確認してください';
            } else if (password !== password_confirmation) {
                isValid = false;
                document.getElementById('error-password_confirmation').textContent = 'パスワードが一致していません';
            }

            return isValid;
        }
    </script>
</x-guest-layout>