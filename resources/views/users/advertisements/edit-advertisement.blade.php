<x-user-layout>
    @if ($advertisement)
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <x-message-box></x-message-box>
                <h4 class="text-uppercase mt-0">広告修正</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <form name="edit-advertisement-form" id="edit-advertisement-form" action="{{ route('user.update.advertisement') }}" method="POST" 
                        class="contact-form-style-01" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <input type="hidden" id="id" name="id" value="{{ $advertisement->id }}">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="name">広告名</label>
                                    <input type="text" name="name" class="md-input" id="name" placeholder="広告名 *" value="{{ old('name') ? old('name') : $advertisement->name }}">
                                    <span class="error" style="color:#BF0731" id="error-name"></span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="md-file" for="logoWhite" id="logoWhite-file-label">白いロゴ *</label>
                                    <input type="file" name="logoWhite" id="logoWhite" placeholder="白いロゴ *" style="display: none;" value="{{ old('logoWhite') }}">
                                    <img id="logoWhite-preview" src="{{ asset('assets/images/all/' . $advertisement->logo_white) }}" alt="LogoWhite Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                    <span class="error" style="color:#BF0731" id="error-logoWhite"></span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="md-file" for="logoColor" id="logoColor-file-label">カラーロゴ *</label>
                                    <input type="file" name="logoColor" id="logoColor" placeholder="カラーロゴ *" style="display: none;" value="{{ old('logoColor') }}">
                                    <img id="logoColor-preview" src="{{ asset('assets/images/all/' . $advertisement->logo_color) }}" alt="LogoColor Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                    <span class="error" style="color:#BF0731" id="error-logoColor"></span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="paramName">広告パラメータ</label>
                                    <input type="text" name="paramName" class="md-input" id="paramName" placeholder="広告パラメータ *" value="{{ old('paramName') ? old('paramName') : $advertisement->param_name }}">
                                    <span class="error" style="color:#BF0731" id="error-paramName"></span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="text-left mt-20">
                                    <input type="hidden" id="confirmed" name="confirmed" value="0">
                                    <div class="tr-modal-popup text-center">
                                        <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                            <span>修正 <i class="ion-android-arrow-forward"></i></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">広告修正</span>
        <p class="mb-20">広告を修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    <!--== Call to Actions Style 03 Start ==-->
    <section class="default-bg">
        <div class="container">
            <div class="row mt-50">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 centerize-col text-center white-color">
                    <h5 class="text-uppercase font-600 mb-30 font-40px">No Coding required to build your page.</h5>
                    <a class="btn btn-md btn-light-outline btn-circle"
                    href="{{ route('user.show.sections', $advertisement->id) }}">今から始めましょう</a>
                </div>
            </div>
        </div>
    </section>
    <!--== Call to Actions Style 03 End ==-->

    <!--== Call to Actions Style 02 Start ==-->
    <section class="parallax-bg fixed-bg pt-80 pb-80" data-parallax-bg-image="{{ asset('assets/images/all/header-01.webp') }}" data-parallax-speed="0.8" data-parallax-direction="up">
        <div class="parallax-overlay"></div>
        <div class="container">
                <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 centerize-col text-center white-color relative">
                    <span class="sm-mb-30 font-20px display-inline-block mr-30">
                        The URL of your advertising page is {{ url(route('guest.one.page.advertisement', $advertisement->param_name)) }}
                    </span>
                    <a class="btn btn-md btn-light-outline btn-square"
                    href="{{ route('guest.one.page.advertisement', $advertisement->param_name) }}" target="_blank">ここをクリック</a>
                </div>
            </div>
        </div>
    </section>
    <!--== Call to Actions Style 02 End ==-->
    @endif

    {{-- logo white --}}
    <script>
        document.getElementById('logoWhite').addEventListener('change', function() {
        var fileName = this.files[0].name;
        var label = document.getElementById('logoWhite-file-label');
        label.classList.add('selected');
        label.setAttribute('data-file-name', fileName);
        });
        document.getElementById('logoWhite').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const logoWhitePreview = document.getElementById('logoWhite-preview');
                    logoWhitePreview.src = e.target.result;
                    logoWhitePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    {{-- logo color --}}
    <script>
        document.getElementById('logoColor').addEventListener('change', function() {
        var fileName = this.files[0].name;
        var label = document.getElementById('logoColor-file-label');
        label.classList.add('selected');
        label.setAttribute('data-file-name', fileName);
        });
        document.getElementById('logoColor').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const logoColorPreview = document.getElementById('logoColor-preview');
                    logoColorPreview.src = e.target.result;
                    logoColorPreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    {{-- validate --}}
    <script>
        function showModal() {
            if (validateEditAdvertisementForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-advertisement-form').submit();
        }

        function validateEditAdvertisementForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();
            const paramName = document.getElementById('paramName').value.trim();
            const namePattern = /^[a-zA-Z0-9-_]+$/; 

            if (!name) {
                document.getElementById('error-name').textContent = '広告名を入力してください';
                isValid = false;
            }

            if (!paramName) {
                document.getElementById('error-paramName').textContent = '広告パラメータを入力してください';
                isValid = false;
            } else if (!namePattern.test(paramName)) {
                isValid = false;
                document.getElementById('error-paramName').textContent = '広告パラメータには英数字、ダッシュ、およびアンダースコアのみを使用できます';
            }

            return isValid;
        }
    </script>
</x-user-layout>