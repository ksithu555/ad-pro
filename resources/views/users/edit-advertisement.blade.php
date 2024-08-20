<x-user-layout>
    @if ($advertisement)
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
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
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="name">広告名</label>
                                    <input type="text" name="name" class="md-input" id="name" placeholder="広告名 *" value="{{ old('name') ? old('name') : $advertisement->name }}">
                                    <span class="error" style="color:#BF0731" id="error-name"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="paramName">広告パラメータ</label>
                                    <input type="text" name="paramName" class="md-input" id="paramName" placeholder="広告パラメータ *" value="{{ old('paramName') ? old('paramName') : $advertisement->param_name }}">
                                    <span class="error" style="color:#BF0731" id="error-paramName"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="text-left mt-20">
                                    <input type="hidden" id="confirmed" name="confirmed" value="0">
                                    <div class="tr-modal-popup">
                                        <a onclick="showModal()" id="open-modal" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">広告修正</span>
        <p class="mb-20">広告を修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    <!--== Call to Actions Style 03 Start ==-->
    <section class="default-bg">
        <div class="container">
            <div class="row mt-50">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 centerize-col text-center white-color">
                    <h5 class="text-uppercase font-600 mb-30 font-40px">An Awesome Team For Your Next Project.</h5>
                    <a class="btn btn-md btn-light-outline btn-circle">Start from Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--== Call to Actions Style 03 End ==-->
    @endif

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
                document.getElementById('error-name').textContent = '広告名を入力してください。';
                isValid = false;
            }

            if (!paramName) {
                document.getElementById('error-paramName').textContent = '広告パラメータを入力してください。';
                isValid = false;
            } else if (!namePattern.test(paramName)) {
                isValid = false;
                document.getElementById('error-paramName').textContent = '広告パラメータには英数字、ダッシュ、およびアンダースコアのみを使用できます。';
            }

            return isValid;
        }
    </script>
</x-user-layout>