<x-user-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <figure class="imghvr-shutter-in-out-diag-1">
                        <img src="{{ asset('assets/images/all/' . $user->image) }}" alt="Digital" style="max-height: 300px">
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
                    <h4 class="mt-0 font-700">{{ $user->name }} 
                        <a href="{{ route('user.get.plans') }}">
                            @if ($user->plan_status == 0)
                            <span class="custom-badge free-badge">無料</span>
                            @elseif ($user->plan_status == 1)
                            <span class="custom-badge silver-badge">シルバー</span>
                            @elseif ($user->plan_status == 2)
                            <span class="custom-badge gold-badge">ゴールド</span>
                            @endif
                        </a>
                    </h4>
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
                        method="POST" class="contact-form-style-01" enctype="multipart/form-data">
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
                    <p class="mt-30 font-300 font-16px">{!! nl2br($company->overview) !!}</p>
                    @if ($company->website)
                    <a class="btn btn-md btn-color btn-square mt-20" href="{{ $company->website }}" target="_blank">当社のウェブサイトをご覧ください</a>
                    @endif
                    <div id="editCompanyBtnDiv">
                        <a class="btn btn-md btn-color btn-square mt-20" onclick="showEditUserCompanyDiv()">
                            修正 <i class="ion-android-arrow-forward"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" id="userCompanyDiv">
                    <div class="row">
                        <!-- Phone Section -->
                        <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                            <div class="pull-left mt-30">
                                <i class="fa fa-phone default-color mt-10" style="font-size: 50px !important;"></i>
                            </div>
                            <div class="pull-right mt-30 pl-20">
                                <span class="font-40px font-600 default-color">Phone</span>
                                <h5 class="mt-0 font-600 white-color">Call us :</h5>
                                <h6 class="mt-0 font-500 white-color">{{ $company->phone ?? 'No phone available' }}</h6>
                            </div>
                        </div>
                    
                        <!-- Address Section -->
                        <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="pull-left mt-30">
                                <i class="fa fa-map-marker default-color mt-10" style="font-size: 50px !important;"></i>
                            </div>
                            <div class="pull-right mt-30 pl-20">
                                <span class="font-40px font-600 default-color">Address</span>
                                <h6 class="mt-0 font-500 white-color">{{ $company->postal_code ? '〒 ' . $company->postal_code : 'No postal code' }}</h6>
                                <h6 class="mt-0 font-500 white-color">{{ $company->prefecture->name ?? 'No prefecture' }}</h6>
                                <h6 class="mt-0 font-500 white-color">{{ $company->address ?? 'No address available' }}</h6>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" id="editUserCompanyDiv" style="display: none;">
                    <form name="edit-user-company-form" id="edit-user-company-form" action="{{ route('user.update.company') }}" 
                        method="POST" class="contact-form-style-02" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyName">会社名</label>
                                            <input type="text" name="companyName" class="md-input style-02" id="companyName" placeholder="会社名 *"
                                             value="{{ old('companyName') ? old('companyName') : $company->name }}">
                                            <span class="error" style="color:#BF0731" id="error-companyName"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        @php
                                            $businessTypes = $registerSelectors->where('type', 'business');
                                        @endphp
                                        <div class="form-group">
                                            <select name="businessType" class="md-input">
                                                <option value="">事業形態を選択してください *</option>
                                                @foreach ($businessTypes as $business)
                                                <option value="{{ $business->id }}"
                                                    @if($company->business == $business->id)selected="selected"@endif>
                                                    {{ $business->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-businessType"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        @php
                                            $purposeOfUses = $registerSelectors->where('type', 'purpose');
                                        @endphp
                                        <div class="form-group">
                                            <select name="purposeOfUse" class="md-input">
                                                <option value="">利用目的を選択してください *</option>
                                                @foreach ($purposeOfUses as $purposeOfUse)
                                                <option value="{{ $purposeOfUse->id }}"
                                                    @if($company->purpose == $purposeOfUse->id)selected="selected"@endif>
                                                    {{ $purposeOfUse->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-purposeOfUse"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        @php
                                            $industries = $registerSelectors->where('type', 'industry');
                                        @endphp
                                        <div class="form-group">
                                            <select name="industry" class="md-input">
                                                <option value="">業種を選択してください *</option>
                                                @foreach ($industries as $industry)
                                                <option value="{{ $industry->id }}"
                                                    @if($company->industry == $industry->id)selected="selected"@endif>
                                                    {{ $industry->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-industry"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        @php
                                            $positions = $registerSelectors->where('type', 'position');
                                        @endphp
                                        <div class="form-group">
                                            <select name="position" class="md-input">
                                                <option value="">役職を選択してください *</option>
                                                @foreach ($positions as $position)
                                                <option value="{{ $position->id }}"
                                                    @if($company->position == $position->id)selected="selected"@endif>
                                                    {{ $position->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-position"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyPhone">電話番号</label>
                                            <input type="text" name="companyPhone" class="md-input style-02" id="companyPhone" placeholder="電話番号 *" 
                                            value="{{ old('companyPhone') ? old('companyPhone') : $company->phone }}">
                                            <span class="error" style="color:#BF0731" id="error-companyPhone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyPostalCode">郵便番号</label>
                                            <input type="text" name="companyPostalCode" class="md-input style-02" id="companyPostalCode" placeholder="郵便番号 *" 
                                            value="{{ old('companyPostalCode') ? old('companyPostalCode') : $company->postal_code }}">
                                            <span class="error" style="color:#BF0731" id="error-companyPostalCode"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <select name="companyPrefecture" class="md-input style-02">
                                                <option value="">都道府県を選択してください *</option>
                                                @foreach ($prefectures as $prefecture)
                                                <option value="{{ $prefecture->id }}" 
                                                    @if($company->prefecture_id == $prefecture->id)selected="selected"@endif>
                                                    {{ $prefecture->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-companyPrefecture"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyAddress">住所</label>
                                            <input type="text" name="companyAddress" class="md-input style-02" id="companyAddress" placeholder="住所 *" 
                                            value="{{ old('companyAddress') ? old('companyAddress') : $company->address }}">
                                            <span class="error" style="color:#BF0731" id="error-companyAddress"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="companyWebsite">URL</label>
                                            <input type="text" name="companyWebsite" class="md-input style-02" id="companyWebsite" placeholder="URL"
                                            value="{{ old('companyWebsite') ? old('companyWebsite') : $company->website }}">
                                            <span class="error" style="color:#BF0731" id="error-companyWebsite"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt-10">
                                        <div class="form-group">
                                            <div class="info-icon-container">
                                                <i class="ion-information-circled info-icon"></i>
                                                <div class="guideline-box" id="guideline-box">
                                                    <p>
                                                        重要なテキストを強調するために、<code style="color: black;">&lt;strong&gt;<strong>希望するテキスト</strong>&lt;/strong&gt;</code> を使用します。
                                                    </p>
                                                    <p>
                                                        テキストに斜体を適用するには、<code style="color: black;">&lt;span style="font-style: italic;"&gt;<span style="font-style: italic;">希望するテキスト</span>&lt;/span&gt;</code> を使用します。
                                                    </p>
                                                    <p>
                                                        下線を引くには、<code style="color: black;">&lt;span style="text-decoration: underline;"&gt;<span style="text-decoration: underline;">希望するテキスト</span>&lt;/span&gt;</code> を使用します。
                                                    </p>
                                                    <p>
                                                        色を変更するには、<code style="color: black;">&lt;span style="color: red;"&gt;<span style="color: red;">希望するテキスト</span>&lt;/span&gt;</code> を使用します。
                                                    </p>
                                                    <p>
                                                        リンクを作成するには、<code style="color: black;">&lt;a href="希望するURL" target="_blank"&gt;<a href="#" target="_blank">希望するテキスト</a>&lt;/a&gt;</code> を使用します。
                                                    </p>
                                                </div>
                                            </div>
                                            <label class="sr-only" for="companyOverview">会社概要</label>
                                            <textarea name="companyOverview" class="md-textarea style-02" id="companyOverview" rows="7" placeholder="会社概要 *">{{ old('companyOverview') ? old('companyOverview') : $company->overview }}</textarea>
                                            <span class="error" style="color:#BF0731" id="error-companyOverview"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                            <div class="text-center">
                                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                                <div class="tr-modal-popup">
                                                    <a onclick="showCompanyModal()" id="open-company-modal" class="btn btn-md btn-color btn-square">
                                                        <span>修正 <i class="ion-android-arrow-forward"></i></span>
                                                    </a>
                                                    <a onclick="showUserCompanyDiv()" class="btn btn-md btn-color btn-square">
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
    <!--== Company End ==-->
    <!--== Business Info Start ==-->
    <section class="dark-bg pt-80 pb-80" id="businessInfoSection"
     style="background-image: url({{ asset('assets/images/background/pattern-bg-dark.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 xs-mb-20 sm-mb-20">
                    <div class="wow fadeInRight counter-type-2 relative" data-wow-delay="0.1s">
                    <i class="icon-briefcase default-color font-50px"></i>
                        <h3 class="display-block mt-0 mb-0 line-height-26"><span class="font-700 white-color">事業形態</span></h3>
                        <h5 class="mt-0 font-600 white-color">{{ $company->businessType->name }}</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 xs-mb-20 sm-mb-20">
                    <div class="wow fadeInRight counter-type-2 relative" data-wow-delay="0.2s">
                    <i class="icon-target default-color font-50px"></i>
                        <h3 class="display-block mt-0 mb-0 line-height-26"><span class="font-700 white-color">利用目的</span></h3>
                        <h5 class="mt-0 font-600 white-color">{{ $company->purposeType->name }}</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 xs-mb-20 sm-mb-20">
                    <div class="wow fadeInRight counter-type-2 relative" data-wow-delay="0.3s">
                    <i class="icon-globe default-color font-50px"></i>
                        <h3 class="display-block mt-0 mb-0 line-height-26"><span class="font-700 white-color">業種</span></h3>
                        <h5 class="mt-0 font-600 white-color">{{ $company->industryType->name }}</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 xs-mb-20 sm-mb-20">
                    <div class="wow fadeInRight counter-type-2 relative" data-wow-delay="0.4s">
                    <i class="icon-profile-male default-color font-50px"></i>
                        <h3 class="display-block mt-0 mb-0 line-height-26"><span class="font-700 white-color">役職</span></h3>
                        <h5 class="mt-0 font-600 white-color">{{ $company->positionType->name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Business Info End ==-->

    <!-- Modal Popup Message Box -->
    <div id="company-modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">会社情報修正</span>
        <p class="mb-20">会社情報を修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitCompanyForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

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
        // user
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

        // company
        function showEditUserCompanyDiv() {
            var userCompanyDiv = document.getElementById('userCompanyDiv');
            var editUserCompanyDiv = document.getElementById('editUserCompanyDiv');
            var editCompanyBtnDiv = document.getElementById('editCompanyBtnDiv');
            var businessInfoSection = document.getElementById('businessInfoSection');

            userCompanyDiv.style.display = 'none';
            editUserCompanyDiv.style.display = 'block';
            editCompanyBtnDiv.style.display = 'none';
            businessInfoSection.style.display = 'none';
        }

        function showUserCompanyDiv() {
            var userCompanyDiv = document.getElementById('userCompanyDiv');
            var editUserCompanyDiv = document.getElementById('editUserCompanyDiv');
            var editCompanyBtnDiv = document.getElementById('editCompanyBtnDiv');
            var businessInfoSection = document.getElementById('businessInfoSection');

            userCompanyDiv.style.display = 'block';
            editUserCompanyDiv.style.display = 'none';
            editCompanyBtnDiv.style.display = 'block';
            businessInfoSection.style.display = 'block';
        }

        function showCompanyModal() {
            if (validateEditCompanyForm()) {
                document.getElementById('open-company-modal').setAttribute('href', '#company-modal-popup');
                document.getElementById('open-company-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-company-modal').click();
            }
        }

        function submitCompanyForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-user-company-form').submit();
        }

        function validateEditCompanyForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const companyName = document.getElementById('companyName').value.trim();
            const businessType = document.querySelector('select[name="businessType"]').value;
            const purposeOfUse = document.querySelector('select[name="purposeOfUse"]').value;
            const industry = document.querySelector('select[name="industry"]').value;
            const position = document.querySelector('select[name="position"]').value;
            const companyPhone = document.getElementById('companyPhone').value.trim();
            const companyPostalCode = document.getElementById('companyPostalCode').value.trim();
            const companyAddress = document.getElementById('companyAddress').value.trim();
            const companyPrefecture = document.querySelector('select[name="companyPrefecture"]').value;
            const companyWebsite = document.getElementById('companyWebsite').value.trim();
            const companyOverview = document.getElementById('companyOverview').value.trim();

            if (!companyName) {
                isValid = false;
                document.getElementById('error-companyName').textContent = '会社名を入力してください';
            } else if (companyName.length > 255) {
                isValid = false;
                document.getElementById('error-companyName').textContent = '名前は255文字以内でなければなりません';
            }

            if (!businessType) {
                isValid = false;
                document.getElementById('error-businessType').textContent = '事業形態を選択してください';
            }

            if (!purposeOfUse) {
                isValid = false;
                document.getElementById('error-purposeOfUse').textContent = '利用目的を選択してください';
            }

            if (!industry) {
                isValid = false;
                document.getElementById('error-industry').textContent = '業種を選択してください';
            }

            if (!position) {
                isValid = false;
                document.getElementById('error-position').textContent = '役職を選択してください';
            }

            if (!companyPhone) {
                isValid = false;
                document.getElementById('error-companyPhone').textContent = '電話番号を入力してください';
            } else if (!/^[\d()+-\s]+$/.test(companyPhone)) {
                isValid = false;
                document.getElementById('error-companyPhone').textContent = '電話番号は数字、+、(、)、-、スペースのみを含めることができます';
            }

            if (!companyPostalCode) {
                isValid = false;
                document.getElementById('error-companyPostalCode').textContent = '郵便番号を入力してください';
            } else if (!/^\d+$/.test(companyPostalCode)) {
                isValid = false;
                document.getElementById('error-companyPostalCode').textContent = '郵便番号は数字のみでなければなりません';
            }

            if (!companyPrefecture) {
                isValid = false;
                document.getElementById('error-companyPrefecture').textContent = '都道府県を選択してください';
            }

            if (!companyAddress) {
                isValid = false;
                document.getElementById('error-companyAddress').textContent = '住所を入力してください';
            } else if (companyAddress.length > 255) {
                isValid = false;
                document.getElementById('error-companyAddress').textContent = '住所は255文字以内でなければなりません';
            }

            if (companyWebsite && /\s/.test(companyWebsite)) {
                isValid = false;
                document.getElementById('error-companyWebsite').textContent = 'ウェブサイトにスペースを含めることはできません';
            }

            return isValid;
        }
    </script>
</x-user-layout>