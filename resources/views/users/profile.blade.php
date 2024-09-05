<x-user-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <figure class="imghvr-shutter-in-out-diag-1">
                        <img src="{{ asset('assets/images/all/default-profile.webp') }}" alt="Digital" style="max-height: 300px">
                        <figcaption class="dark-bg text-center">
                        <div class="center-layout">
                                    <div class="v-align-middle">
                                        <a onclick="showEditUserProfileDiv()" data-effect="mfp-newspaper" class="btn btn-sm btn-light btn-circle margin-left-auto margin-right-auto display-table-sm">
                                            写真をアップロードする
                                        </a>
                                </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-8 col-xs-12" id="userProfileDiv">
                    <h4 class="mt-0 font-700">{{ $user->name }} <span class="badge badge-info">無料</span></h4>
                    <h4 class="default-color font-600">{{ $user->name_furigana }}</h4>
                    <h4 class="mt-0 font-700">{{ $user->email }}</h4>
                    <div style="margin-top: 130px;">
                        <a onclick="showEditUserProfileDiv()" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
                            <span>修正 <i class="ion-android-arrow-forward"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12" id="editUserProfileDiv" style="display: none;">
                    <form name="edit-user-profile-form" id="edit-user-profile-form" action="{{ route('user.update.profile') }}" 
                        method="POST" class="contact-form-style-01">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="nameKanji">名前 (漢字)</label>
                                            <input type="text" name="nameKanji" class="md-input" id="nameKanji" placeholder="名前 (漢字) *"value="{{ old('nameKanji') ? old('nameKanji') : $user->name }}">
                                            <span class="error" style="color:#BF0731" id="error-nameKanji"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="nameFurigana">名前 (ふりがな)</label>
                                            <input type="text" name="nameFurigana" class="md-input" id="nameFurigana" placeholder="名前 (ふりがな) *"value="{{ old('nameFurigana') ? old('nameFurigana') : $user->name_furigana }}">
                                            <span class="error" style="color:#BF0731" id="error-nameFurigana"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="text" name="email" class="md-input" id="email" placeholder="メール *"value="{{ old('email') ? old('email') : $user->email }}">
                                            <span class="error" style="color:#BF0731" id="error-email"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group">
                                            <label class="md-file" for="image" id="file-label">画像 *</label>
                                            <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;" value="{{ old('image') ? old('image') : $user->image }}">
                                            <img id="image-preview" src="{{ asset('assets/images/all/' . $user->image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                            <span class="error" style="color:#BF0731" id="error-image"></span>
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
                                                    <a onclick="showUserProfileDiv()" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
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
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    <!--== Company Start ==-->
    <section class="dark-bg">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 xs-mb-30 wow fadeInLeft" data-wow-delay="0.1s">
            <h2 class="mt-0 font-700 white-color">{{ $company->name }}</h2>
                <hr class="left-line default-bg bold-line">
            <p class="mt-30 font-300 font-16px">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis <br> cutting-edge deliverables.</p>
                <p class="mt-30 font-300 font-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim urna, accumsan quis erat nec, condimentum laoreet nulla. Pellentesque<br> porttitor est eu arcu condimentum aliquet non id felis.</p>
            @if ($company->website)
                <a class="btn btn-md btn-color btn-square mt-20" href="{{ $company->website }}" target="_blank">当社のウェブサイトをご覧ください</a>
            @endif
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <!-- Phone Section -->
                    <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="pull-left">
                            <i class="fa fa-phone default-color font-80px  mt-40"></i>
                        </div>
                        <div class="pull-right">
                            <span class="font-80px default-color">01</span>
                            <h5 class="mt-0 font-600 white-color">Phone</h5>
                            <h5 class="mt-0 font-600 white-color">{{ $company->phone ?? 'No phone available' }}</h5>
                        </div>
                    </div>
                
                    <!-- Address Section -->
                    <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="pull-left">
                            <i class="fa fa-map-marker font-40px default-color mt-40"></i>
                        </div>
                        <div class="pull-right">
                            <span class="font-80px default-color">02</span>
                            <h5 class="mt-0 font-600 white-color">Address</h5>
                            <p class="font-300">
                                {{ $company->postal_code ?? 'No postal code' }}<br>
                                {{ $company->prefecture->name ?? 'No prefecture' }}<br>
                                {{ $company->address ?? 'No address available' }}
                            </p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!--== Company End ==-->

    {{-- image --}}
    <script>
        document.getElementById('image').addEventListener('change', function() {
            var fileName = this.files[0].name;
            var label = document.getElementById('file-label');
            label.classList.add('selected');
            label.setAttribute('data-file-name', fileName);
        });
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imagePreview = document.getElementById('image-preview');
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    {{-- validate --}}
    <script>
        function showEditUserProfileDiv() {
            var userProfileDiv = document.getElementById('userProfileDiv');
            var editUserProfileDiv = document.getElementById('editUserProfileDiv');

            userProfileDiv.style.display = 'none';
            editUserProfileDiv.style.display = 'block';
        }

        function showUserProfileDiv() {
            var userProfileDiv = document.getElementById('userProfileDiv');
            var editUserProfileDiv = document.getElementById('editUserProfileDiv');

            userProfileDiv.style.display = 'block';
            editUserProfileDiv.style.display = 'none';
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
            document.getElementById('edit-user-profile-form').submit();
        }

        function validateEditProfileForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const nameKanji = document.getElementById('nameKanji').value.trim();
            const nameFurigana = document.getElementById('nameFurigana').value.trim();
            const email = document.getElementById('email').value.trim();

            if (!nameKanji) {
                isValid = false;
                document.getElementById('error-nameKanji').textContent = 'お名前 (漢字)を入力してください';
            } else if (nameKanji.length > 255) {
                isValid = false;
                document.getElementById('error-nameKanji').textContent = '名前 (漢字)は255文字以内でなければなりません';
            }

            if (!nameFurigana) {
                isValid = false;
                document.getElementById('error-nameFurigana').textContent = 'お名前 (ふりがな)を入力してください';
            } else if (nameFurigana.length > 255) {
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

            return isValid;
        }
    </script>
</x-user-layout>