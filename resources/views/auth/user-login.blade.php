<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/all/header-ad-list.webp') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>ログイン</h1>
                    <h4 class="text-uppercase mt-30">Login</h4>
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
                            <li>Login</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-16px line-height-26 mt-0">ログイン</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row mt-25">
                <div class="col-md-8 centerize-col">
                    <x-message-box></x-message-box>
                    <form name="login-form" id="login-form" action="{{ route('user.store.login') }}" method="POST" 
                        class="contact-form-style-01" onsubmit="event.preventDefault(); submitForm();">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') }}">
                                    <span class="error" style="color:#BF0731" id="error-email"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" class="md-input" id="password" placeholder="パスワード *" value="{{ old('password') }}">
                                    <span class="error" style="color:#BF0731" id="error-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="rememberMe" name="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="rememberMe" class="pt-10">ログイン情報を保存する</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group pt-10" style="text-align: right;">
                                    <a href=""><i class="icon-key"></i>&nbsp;&nbsp;&nbsp;パスワードをお忘れですか？</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="text-center">
                                    <button type="submit" name="submitButton" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
                                        <span>ログイン <i class="ion-android-arrow-forward"></i></span>
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
        document.addEventListener('DOMContentLoaded', function() {
            var rememberMeCheckbox = document.getElementById('rememberMe');
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');
    
            // Check if there is a stored cookie and set the checkbox accordingly
            if (document.cookie.includes('rememberMe=true')) {
                rememberMeCheckbox.checked = true;
                // If the "Remember Me" cookie is set, populate the email and password fields
                var rememberMeData = document.cookie.split('; ').find(row => row.startsWith('rememberMeData='));
                if (rememberMeData) {
                    var data = rememberMeData.split('=')[1].split('|');
                    emailInput.value = decodeURIComponent(data[0]);
                    passwordInput.value = decodeURIComponent(data[1]);
                }
            }
    
            rememberMeCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    var email = emailInput.value.trim();
                    var password = passwordInput.value.trim();
                    // If checkbox is checked, set a cookie to remember the user
                    var cookieValue = encodeURIComponent(email) + '|' + encodeURIComponent(password);
                    document.cookie = 'rememberMeData=' + cookieValue + '; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                    document.cookie = 'rememberMe=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                } else {
                    // If checkbox is unchecked, remove the rememberMe cookie
                    document.cookie = 'rememberMeData=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                    document.cookie = 'rememberMe=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                }
            });
        });
    </script>
    <script>
        function submitForm() {
            if (validateLoginForm()) {
                document.getElementById('confirmed').value = '1';
                document.getElementById('login-form').submit();
            }
        }
        function validateLoginForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

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
            }

            return isValid;
        }
    </script>
</x-guest-layout>