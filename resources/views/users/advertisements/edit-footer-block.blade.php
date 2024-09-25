<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">フッター修正</h4>
                <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-8 col-md-offset-2">
                <form name="edit-footer-block-form" id="edit-footer-block-form" action="{{ route('user.update.footer.block') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="id" name="id" value="{{ $advertisementFooterBlock->id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <select name="type" class="orderby" id="typeSelect" onchange="toggleFields()">
                                    @if($advertisementFooterBlock->advertisementSection->section->name == 'Footer01')
                                        @if ($advertisementFooterBlock->type == 'useful')
                                        <option value="useful" selected="selected">Useful Links</option>
                                        @elseif ($advertisementFooterBlock->type == 'social')
                                        <option value="social" selected="selected">Social Media</option>
                                        @elseif ($advertisementFooterBlock->type == 'logo')
                                        <option value="logo" selected="selected">Logo</option>
                                        @elseif ($advertisementFooterBlock->type == 'text')
                                        <option value="text" selected="selected">Footer Text</option>
                                        @elseif ($advertisementFooterBlock->type == 'contact')
                                        <option value="contact" selected="selected">Contact Us</option>
                                        @elseif ($advertisementFooterBlock->type == 'copyRight')
                                        <option value="copyRight" selected="selected">Copy Right</option>
                                        @endif
                                    @else
                                        @if ($advertisementFooterBlock->type == 'social')
                                        <option value="social" selected="selected">Social Media</option>
                                        @elseif ($advertisementFooterBlock->type == 'logo')
                                        <option value="logo" selected="selected">Logo</option>
                                        @elseif ($advertisementFooterBlock->type == 'copyRight')
                                        <option value="copyRight" selected="selected">Copy Right</option>
                                        @endif
                                    @endif
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12" id="usefulLinkField">
                            <div class="form-group">
                                <label class="sr-only" for="nameUseful">名前</label>
                                <input type="text" name="nameUseful" class="md-input" id="nameUseful" placeholder="名前 *" value="{{ old('nameUseful') ? old('nameUseful') : $advertisementFooterBlock->name }}">
                                <span class="error" style="color:#BF0731" id="error-nameUseful"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12" id="socialMediaField" style="display:none;">
                            <div class="form-group">
                                <select name="nameSocial" class="orderby social-media">
                                    <option value="">選択*</option>
                                    <option value="facebook" @if($advertisementFooterBlock->name == 'facebook')selected="selected"@endif>Facebook</option>
                                    <option value="twitter" @if($advertisementFooterBlock->name == 'twitter')selected="selected"@endif>Twitter</option>
                                    <option value="behance" @if($advertisementFooterBlock->name == 'behance')selected="selected"@endif>Behance</option>
                                    <option value="linkedin" @if($advertisementFooterBlock->name == 'linkedin')selected="selected"@endif>Linkedin</option>
                                    <option value="youtube" @if($advertisementFooterBlock->name == 'youtube')selected="selected"@endif>Youtube</option>
                                    <option value="instagram" @if($advertisementFooterBlock->name == 'instagram')selected="selected"@endif>Instagram</option>
                                    <option value="tumblr" @if($advertisementFooterBlock->name == 'tumblr')selected="selected"@endif>Tumblr</option>
                                    <option value="flikr" @if($advertisementFooterBlock->name == 'flikr')selected="selected"@endif>Flikr</option>
                                    <option value="pinterest" @if($advertisementFooterBlock->name == 'pinterest')selected="selected"@endif>Pinterest</option>
                                    <option value="github" @if($advertisementFooterBlock->name == 'github')selected="selected"@endif>Github</option>
                                    <option value="google-plus" @if($advertisementFooterBlock->name == 'google-plus')selected="selected"@endif>Google Plus</option>
                                </select>                                
                                <span class="error" style="color:#BF0731" id="error-nameSocial"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12" id="urlField">
                            <div class="form-group">
                                <label class="sr-only" for="url">URL</label>
                                <input type="text" name="url" class="md-input" id="url" placeholder="URL *" value="{{ old('url') ? old('url') : $advertisementFooterBlock->url }}">
                                <span class="error" style="color:#BF0731" id="error-url"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12" id="logoField">
                            <div class="form-group">
                                <label class="md-file" for="logo" id="file-label">画像 *</label>
                                <input type="file" name="logo" id="logo" placeholder="画像 *" style="display: none;">
                                <img id="logo-preview" src="{{ asset('assets/images/all/' . $advertisementFooterBlock->text) }}" alt="Logo Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                <span class="error" style="color:#BF0731" id="error-logo"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12" id="footerTextField">
                            <div class="form-group">
                                <label class="sr-only" for="text">内容</label>
                                <textarea name="text" class="md-textarea" id="text" rows="7" placeholder="内容 *">{{ old('text') ? old('text') : $advertisementFooterBlock->text }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $contactUs = [null,null,null];
                            if ($advertisementFooterBlock->type == 'contact') {
                                $contactUs = explode('|', $advertisementFooterBlock->text);
                            }
                        @endphp
                        <div class="col-md-12 col-sm-12" id="contactUsField">
                            <div class="form-group">
                                <label class="sr-only" for="address">住所</label>
                                <input type="text" name="address" class="md-input" id="address" placeholder="住所 *" value="{{ old('address') ? old('address') : $contactUs[0] }}">
                                <span class="error" style="color:#BF0731" id="error-address"></span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="phone">電話番号</label>
                                <input type="text" name="phone" class="md-input" id="phone" placeholder="電話番号 *" value="{{ old('phone') ? old('phone') : $contactUs[1] }}">
                                <span class="error" style="color:#BF0731" id="error-phone"></span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">メール</label>
                                <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') ? old('email') : $contactUs[2] }}">
                                <span class="error" style="color:#BF0731" id="error-email"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12" id="copyRightField">
                            <div class="form-group">
                                <label class="sr-only" for="copyRight">コピーライト</label>
                                <input type="text" name="copyRight" class="md-input" id="copyRight" placeholder="コピーライト *" value="{{ old('copyRight') ? old('copyRight') : $advertisementFooterBlock->text }}">
                                <span class="error" style="color:#BF0731" id="error-copyRight"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="text-center mt-20">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup">
                                    <a onclick="showModal()" id="open-modal" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">フッター修正</span>
        <p class="mb-20">フッターを修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- toggle type --}}
    <script>
        function toggleFields() {
            var typeSelect = document.getElementById('typeSelect').value;
            var usefulLinkField = document.getElementById('usefulLinkField');
            var socialMediaField = document.getElementById('socialMediaField');
            var urlField = document.getElementById('urlField');
            var footerTextField = document.getElementById('footerTextField');
            var contactUsField = document.getElementById('contactUsField');
            var copyRightField = document.getElementById('copyRightField');
            var logoField = document.getElementById('logoField');
    
            if (typeSelect === 'useful') {
                usefulLinkField.style.display = 'block';
                socialMediaField.style.display = 'none';
                urlField.style.display = 'block';
                footerTextField.style.display = 'none';
                contactUsField.style.display = 'none';
                copyRightField.style.display = 'none';
                logoField.style.display = 'none';
            } else if (typeSelect === 'social') {
                usefulLinkField.style.display = 'none';
                socialMediaField.style.display = 'block';
                urlField.style.display = 'block';
                footerTextField.style.display = 'none';
                contactUsField.style.display = 'none';
                copyRightField.style.display = 'none';
                logoField.style.display = 'none';
            } else if (typeSelect === 'text') {
                usefulLinkField.style.display = 'none';
                socialMediaField.style.display = 'none';
                urlField.style.display = 'none';
                footerTextField.style.display = 'block';
                contactUsField.style.display = 'none';
                copyRightField.style.display = 'none';
                logoField.style.display = 'none';
            } else if (typeSelect === 'contact') {
                usefulLinkField.style.display = 'none';
                socialMediaField.style.display = 'none';
                urlField.style.display = 'none';
                footerTextField.style.display = 'none';
                contactUsField.style.display = 'block';
                copyRightField.style.display = 'none';
                logoField.style.display = 'none';
            } else if (typeSelect === 'copyRight') {
                usefulLinkField.style.display = 'none';
                socialMediaField.style.display = 'none';
                urlField.style.display = 'none';
                footerTextField.style.display = 'none';
                contactUsField.style.display = 'none';
                copyRightField.style.display = 'block';
                logoField.style.display = 'none';
            } else if (typeSelect === 'logo') {
                usefulLinkField.style.display = 'none';
                socialMediaField.style.display = 'none';
                urlField.style.display = 'none';
                footerTextField.style.display = 'none';
                contactUsField.style.display = 'none';
                copyRightField.style.display = 'none';
                logoField.style.display = 'block';
            }
        }
    
        // Initialize the fields on page load based on the selected value
        document.addEventListener('DOMContentLoaded', function() {
            toggleFields();
        });
    </script>
    {{-- image --}}
    <script>
        document.getElementById('logo').addEventListener('change', function() {
        var fileName = this.files[0].name;
        var label = document.getElementById('file-label');
        label.classList.add('selected');
        label.setAttribute('data-file-name', fileName);
        });
        document.getElementById('logo').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const logoPreview = document.getElementById('logo-preview');
                    logoPreview.src = e.target.result;
                    logoPreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    {{-- validate --}}
    <script>
        function showModal() {
            if (validateEditFooterBlockForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-footer-block-form').submit();
        }

        function validateEditFooterBlockForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.getElementById('typeSelect').value;
            const nameUseful = document.getElementById('nameUseful').value.trim();
            const nameSocial = document.querySelector('.social-media').value;
            const url = document.getElementById('url').value.trim();
            const text = document.getElementById('text').value.trim();
            const address = document.getElementById('address').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const copyRight = document.getElementById('copyRight').value.trim();

            if (type === 'useful') {
                if (!nameUseful) {
                    document.getElementById('error-nameUseful').textContent = '名前を入力してください';
                    isValid = false;
                }

                if (!url) {
                    document.getElementById('error-url').textContent = 'URLを入力してください';
                    isValid = false;
                }
            } else if (type === 'social') {
                if (nameSocial == '') {
                    document.getElementById('error-nameSocial').textContent = 'ソーシャルメディアを選択してください';
                    isValid = false;
                }

                if (!url) {
                    document.getElementById('error-url').textContent = 'URLを入力してください';
                    isValid = false;
                }
            } else if (type === 'text') {
                if (!text) {
                    document.getElementById('error-text').textContent = '内容を入力してください';
                    isValid = false;
                }
            } else if (type === 'contact') {
                if (!address) {
                    document.getElementById('error-address').textContent = '住所を入力してください';
                    isValid = false;
                }
                if (!phone) {
                    document.getElementById('error-phone').textContent = '電話番号を入力してください';
                    isValid = false;
                }
                if (!email) {
                    document.getElementById('error-email').textContent = 'メールを入力してください';
                    isValid = false;
                }
            } else if (type === 'copyRight') {
                if (!copyRight) {
                    document.getElementById('error-copyRight').textContent = 'コピーライトを入力してください';
                    isValid = false;
                }
            }

            return isValid;
        }
    </script>
</x-user-layout>