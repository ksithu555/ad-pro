<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">フッター登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="add-footer-block-form" id="add-footer-block-form" action="{{ route('user.store.footer.block') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="advertisementSectionId" name="advertisementSectionId" value="{{ $id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <select name="type" class="orderby" id="typeSelect" onchange="toggleFields()">
                                    @if ($advertisementSection->section->name == 'Footer01')
                                        @if ($advertisementSection->advertisementFooterBlocks->where('type', 'logo')->first() == null) 
                                        <option value="logo">Logo</option>
                                        @endif
                                        @if ($advertisementSection->advertisementFooterBlocks->where('type', 'text')->first() == null) 
                                        <option value="text">Footer Text</option>
                                        @endif
                                        <option value="useful">Useful Links</option>
                                        <option value="social">Social Media</option>
                                        @if ($advertisementSection->advertisementFooterBlocks->where('type', 'contact')->first() == null) 
                                        <option value="contact">Contact Us</option>
                                        @endif
                                        @if ($advertisementSection->advertisementFooterBlocks->where('type', 'copyRight')->first() == null) 
                                        <option value="copyRight">Copy Right</option>
                                        @endif
                                    @else
                                        @if ($advertisementSection->advertisementFooterBlocks->where('type', 'logo')->first() == null) 
                                        <option value="logo">Logo</option>
                                        @endif
                                        <option value="social">Social Media</option>
                                        @if ($advertisementSection->advertisementFooterBlocks->where('type', 'copyRight')->first() == null)
                                        <option value="copyRight">Copy Right</option>
                                        @endif
                                    @endif
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    
                        <div class="col-md-12 col-sm-12" id="usefulLinkField">
                            <div class="form-group">
                                <label class="sr-only" for="nameUseful">名前</label>
                                <input type="text" name="nameUseful" class="md-input" id="nameUseful" placeholder="名前 *" value="{{ old('nameUseful') }}">
                                <span class="error" style="color:#BF0731" id="error-nameUseful"></span>
                            </div>
                        </div>
                    
                        <div class="col-md-12 col-sm-12" id="socialMediaField" style="display:none;">
                            <div class="form-group">
                                <select name="nameSocial" class="orderby social-media">
                                    <option value="" selected="selected">選択*</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="twitter">Twitter</option>
                                    <option value="behance">Behance</option>
                                    <option value="linkedin">Linkedin</option>
                                    <option value="youtube">Youtube</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="tumblr">Tumblr</option>
                                    <option value="flikr">Flikr</option>
                                    <option value="pinterest">Pinterest</option>
                                    <option value="github">Github</option>
                                    <option value="google-plus">Google Plus</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-nameSocial"></span>
                            </div>
                        </div>
                    
                        <div class="col-md-12 col-sm-12" id="urlField">
                            <div class="form-group">
                                <label class="sr-only" for="url">URL</label>
                                <input type="text" name="url" class="md-input" id="url" placeholder="URL *" value="{{ old('url') }}">
                                <span class="error" style="color:#BF0731" id="error-url"></span>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12" id="logoField">
                            <div class="form-group">
                                <label class="md-file" for="logo" id="file-label">画像 *</label>
                                <input type="file" name="logo" id="logo" placeholder="画像 *" style="display: none;" value="{{ old('logo') }}">
                                <img id="logo-preview" src="" alt="Logo Preview" style="display:none; width: 80px; margin: 10px 0 0 14px;">
                                <span class="error" style="color:#BF0731" id="error-logo"></span>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12" id="footerTextField">
                            <div class="form-group">
                                <label class="sr-only" for="text">内容</label>
                                <textarea name="text" class="md-textarea" id="text" rows="7" placeholder="内容 *">{{ old('text') }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-text"></span>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12" id="contactUsField">
                            <div class="form-group">
                                <label class="sr-only" for="address">住所</label>
                                <input type="text" name="address" class="md-input" id="address" placeholder="住所 *" value="{{ old('address') }}">
                                <span class="error" style="color:#BF0731" id="error-address"></span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="phone">電話番号</label>
                                <input type="text" name="phone" class="md-input" id="phone" placeholder="電話番号 *" value="{{ old('phone') }}">
                                <span class="error" style="color:#BF0731" id="error-phone"></span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">メール</label>
                                <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') }}">
                                <span class="error" style="color:#BF0731" id="error-email"></span>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12" id="copyRightField">
                            <div class="form-group">
                                <label class="sr-only" for="copyRight">コピーライト</label>
                                <input type="text" name="copyRight" class="md-input" id="copyRight" placeholder="コピーライト *" value="{{ old('copyRight') }}">
                                <span class="error" style="color:#BF0731" id="error-copyRight"></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">フッター登録</span>
        <p class="mb-20">フッターを登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
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
            if (validateAddFooterBlockForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-footer-block-form').submit();
        }

        function validateAddFooterBlockForm() {
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
            const logo = document.getElementById('logo').files[0];

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
            } else if (type === 'logo') {
                if (!logo) {
                    document.getElementById('error-logo').textContent = '画像を選択してください';
                    isValid = false;
                }
            }

            return isValid;
        }
    </script>
</x-user-layout>