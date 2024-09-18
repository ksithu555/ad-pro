<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">新着情報登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="add-news-form" id="add-news-form" action="{{ route('admin.store.news') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="title">タイトル</label>
                                <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') }}">
                                <span class="error" style="color:#BF0731" id="error-title"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
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
                                <label class="sr-only" for="body">内容</label>
                                <textarea name="body" class="md-textarea" id="body" rows="7" placeholder="内容 *">{{ old('body') }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-body"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="md-file" for="image" id="file-label">画像 *</label>
                                <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;" value="{{ old('image') }}">
                                <img id="image-preview" src="" alt="Image Preview" style="display:none; width: 80px; margin: 10px 0 0 14px;">
                                <span class="error" style="color:#BF0731" id="error-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="text-center">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">新着情報登録</span>
        <p class="mb-20">新着情報を登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
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
        function showModal() {
            if (validateAddNewsForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-news-form').submit();
        }

        function validateAddNewsForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const title = document.getElementById('title').value.trim();
            const body = document.getElementById('body').value.trim();
            const image = document.getElementById('image').files[0];

            if (!title) {
                document.getElementById('error-title').textContent = 'タイトルを入力してください';
                isValid = false;
            }

            if (!body) {
                document.getElementById('error-body').textContent = '体を入力してください';
                isValid = false;
            }

            if (!image) {
                document.getElementById('error-image').textContent = '画像を選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>