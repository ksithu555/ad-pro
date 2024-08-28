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
                            <li>管理者ログイン</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">管理者ログイン</h1>
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
                    <h4 class="text-uppercase mt-0">管理者ログイン</h4>
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 centerize-col">
                    <form name="login-form" id="login-form" action="{{ route('admin.store.login') }}" method="POST" class="contact-form-style-01">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="email" class="md-input" id="email" placeholder="メール *" required data-error="有効なメールアドレスを入力してください">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" class="md-input" id="password" placeholder="パスワード *" required data-error="パスワードを入力してください">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="rememberMeAdmin" name="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="rememberMeAdmin" class="pt-10">ログイン情報を保存する</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group pt-10" style="text-align: right;">
                                    <a href=""><i class="icon-key"></i>&nbsp;&nbsp;&nbsp;パスワードをお忘れですか？</a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
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
            var rememberMeCheckboxAdmin = document.getElementById('rememberMeAdmin');
            var emailInputAdmin = document.getElementById('email');
            var passwordInputAdmin = document.getElementById('password');
    
            // Check if there is a stored cookie and set the checkbox accordingly
            if (document.cookie.includes('rememberMeAdmin=true')) {
                rememberMeCheckboxAdmin.checked = true;
                // If the "Remember Me" cookie is set, populate the email and password fields
                var rememberMeDataAdmin = document.cookie.split('; ').find(row => row.startsWith('rememberMeDataAdmin='));
                if (rememberMeDataAdmin) {
                    var dataAdmin = rememberMeDataAdmin.split('=')[1].split('|');
                    emailInputAdmin.value = decodeURIComponent(dataAdmin[0]);
                    passwordInputAdmin.value = decodeURIComponent(dataAdmin[1]);
                }
            }
    
            rememberMeCheckboxAdmin.addEventListener('change', function() {
                if (this.checked) {
                    var emailAdmin = emailInputAdmin.value.trim();
                    var passwordAdmin = passwordInputAdmin.value.trim();
                    // If checkbox is checked, set a cookie to remember the user
                    var cookieValueAdmin = encodeURIComponent(emailAdmin) + '|' + encodeURIComponent(passwordAdmin);
                    document.cookie = 'rememberMeDataAdmin=' + cookieValueAdmin + '; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                    document.cookie = 'rememberMeAdmin=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                } else {
                    // If checkbox is unchecked, remove the rememberMe cookie
                    document.cookie = 'rememberMeDataAdmin=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                    document.cookie = 'rememberMeAdmin=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                }
            });
        });
    </script>    
</x-guest-layout>