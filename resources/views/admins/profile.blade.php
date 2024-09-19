<x-admin-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120" style="padding-bottom: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12" id="adminProfileDiv">
                    <h4 class="mt-0 font-700">{{ $admin->name }} 
                        @if ($admin->role == 'admin')
                        <span class="custom-badge gold-badge">ADMIN</span>
                        @else
                        <span class="custom-badge free-badge">SUB ADMIN</span>
                        @endif
                    </h4>
                    <h4 class="mt-0 font-700">{{ $admin->email }}</h4>
                    <div style="margin-top: 130px;">
                        <a onclick="showEditAdminProfileDiv()" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
                            <span>修正 <i class="ion-android-arrow-forward"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3 col-xs-12" id="editAdminProfileDiv" style="display: none;">
                    <form name="edit-admin-profile-form" id="edit-admin-profile-form" action="{{ route('admin.update.profile') }}" 
                        method="POST" class="contact-form-style-01" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="role">役割</label>
                                            <input type="text" name="role" class="md-input" id="role" placeholder="役割 *"value="{{ old('role') ? old('role') : $admin->role }}" disabled>
                                            <span class="error" style="color:#BF0731" id="error-role"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">名前</label>
                                            <input type="text" name="name" class="md-input" id="name" placeholder="名前 *"value="{{ old('name') ? old('name') : $admin->name }}">
                                            <span class="error" style="color:#BF0731" id="error-name"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="text" name="email" class="md-input" id="email" placeholder="メール *"value="{{ old('email') ? old('email') : $admin->email }}">
                                            <span class="error" style="color:#BF0731" id="error-email"></span>
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
                                                    <a onclick="showAdminProfileDiv()" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
                                                        <span>キャンセル</span>
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
    <!--== Who We Are End ==-->

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">プロフィール修正</span>
        <p class="mb-20">プロフィールを修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- validate --}}
    <script>
        // admin
        function showEditAdminProfileDiv() {
            var adminProfileDiv = document.getElementById('adminProfileDiv');
            var editAdminProfileDiv = document.getElementById('editAdminProfileDiv');

            adminProfileDiv.style.display = 'none';
            editAdminProfileDiv.style.display = 'block';
        }

        function showAdminProfileDiv() {
            var adminProfileDiv = document.getElementById('adminProfileDiv');
            var editAdminProfileDiv = document.getElementById('editAdminProfileDiv');

            adminProfileDiv.style.display = 'block';
            editAdminProfileDiv.style.display = 'none';
        }

        function showModal() {
            if (validateEditProfileForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-admin-profile-form').submit();
        }

        function validateEditProfileForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();

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

            return isValid;
        }
    </script>
</x-admin-layout>