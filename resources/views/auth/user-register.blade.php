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
                        class="contact-form-style-01" onsubmit="event.preventDefault(); submitForm();">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Name</label>
                                    <input type="text" name="name" class="md-input" id="name" placeholder="Name *">
                                    <span class="error" style="color:#BF0731" id="error-name"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="email" class="md-input" id="email" placeholder="Email *">
                                    <span class="error" style="color:#BF0731" id="error-email"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" class="md-input" id="password" placeholder="Password *">
                                    <span class="error" style="color:#BF0731" id="error-password"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="confirmPassword">Confirm Password</label>
                                    <input type="password" name="confirmPassword" class="md-input" id="confirmPassword" placeholder="Confirm Password *">
                                    <span class="error" style="color:#BF0731" id="error-confirmPassword"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="companyName">Company Name</label>
                                    <input type="text" name="companyName" class="md-input" id="companyName" placeholder="Company Name *">
                                    <span class="error" style="color:#BF0731" id="error-companyName"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="text-left mt-20">
                                    <button type="submit" name="submitButton" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
                                        <span>登録<i class="ion-android-arrow-forward"></i></span>
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
            if (validateRegisterForm()) {
                document.getElementById('confirmed').value = '1';
                document.getElementById('register-form').submit();
            }
        }
        function validateRegisterForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();
            const companyName = document.getElementById('companyName').value.trim();

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
    
            if (!companyName) {
                isValid = false;
                document.getElementById('error-companyName').textContent = '会社名を入力してください';
            } else if (companyName.length > 255) {
                isValid = false;
                document.getElementById('error-companyName').textContent = '名前は255文字以内でなければなりません';
            }
            return isValid;
        }
    </script>
</x-guest-layout>