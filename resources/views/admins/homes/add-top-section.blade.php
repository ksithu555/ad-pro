<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">セクション登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="add-top-section-form" id="add-top-section-form" action="{{ route('admin.store.top.section') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <select name="type" class="orderby type md-input">
                                    <option value="" selected="selected">タイプを選択してください*</option>
                                    <option value="Box01">Box01</option>
                                    <option value="Box02">Box02</option>
                                    <option value="Box03">Box03</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="title">タイトル</label>
                                <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') }}">
                                <span class="error" style="color:#BF0731" id="error-title"></span>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="body">内容</label>
                                <textarea name="body" class="md-textarea" id="body" rows="7" placeholder="内容 *">{{ old('body') }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-body"></span>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="text-left mt-20">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup text-center">
                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">セクション登録</span>
        <p class="mb-20">セクションを登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddTopSectionForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-top-section-form').submit();
        }

        function validateAddTopSectionForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.querySelector('.type').value;
            const title = document.getElementById('title').value.trim();
            const body = document.getElementById('body').value.trim();

            if (!type) {
                document.getElementById('error-type').textContent = 'タイプを入力してください';
                isValid = false;
            }

            if (!title) {
                document.getElementById('error-title').textContent = 'タイトルを入力してください';
                isValid = false;
            }

            if (!body) {
                document.getElementById('error-body').textContent = '内容を選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>