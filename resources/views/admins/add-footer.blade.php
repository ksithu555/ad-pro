<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">フッター登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="add-footer-form" id="add-footer-form" action="{{ route('admin.store.footer') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <select name="type" class="orderby" id="typeSelect" onchange="toggleFields()">
                                    <option value="useful" selected="selected">Useful Links</option>
                                    <option value="social">Social Media</option>
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
                                    <option value="ソーシャルメディアを選択" selected="selected">選択*</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="twitter">Twitter</option>
                                    <option value="behance">Behance</option>
                                    <option value="linkedin">Linkedin</option>
                                    <option value="youtube">Youtube</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="tumblr">Tumblr</option>
                                    <option value="flikr">Flikr</option>
                                    <option value="rss">RSS</option>
                                    <option value="pinterest">Pinterest</option>
                                    <option value="github">Github</option>
                                    <option value="google">Google Plus</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-nameSocial"></span>
                            </div>
                        </div>
                    
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="url">URL</label>
                                <input type="text" name="url" class="md-input" id="url" placeholder="URL *" value="{{ old('url') }}">
                                <span class="error" style="color:#BF0731" id="error-url"></span>
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
    
            if (typeSelect === 'useful') {
                usefulLinkField.style.display = 'block';
                socialMediaField.style.display = 'none';
            } else if (typeSelect === 'social') {
                usefulLinkField.style.display = 'none';
                socialMediaField.style.display = 'block';
            }
        }
    
        // Initialize the fields on page load based on the selected value
        document.addEventListener('DOMContentLoaded', function() {
            toggleFields();
        });
    </script>
    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddFooterForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-footer-form').submit();
        }

        function validateAddFooterForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.getElementById('typeSelect').value;
            const nameUseful = document.getElementById('nameUseful').value.trim();
            const nameSocial = document.querySelector('.social-media').value;
            const url = document.getElementById('url').value.trim();

            if (type === 'useful') {
                if (!nameUseful) {
                    document.getElementById('error-nameUseful').textContent = '名前を入力してください。';
                    isValid = false;
                }
            } else if (type === 'social') {
                if (nameSocial == 'ソーシャルメディアを選択') {
                    document.getElementById('error-nameSocial').textContent = 'ソーシャルメディアを選択してください。';
                    isValid = false;
                }
            }

            if (!url) {
                document.getElementById('error-url').textContent = 'URLを入力してください。';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>