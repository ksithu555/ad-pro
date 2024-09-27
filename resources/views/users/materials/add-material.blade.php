<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">素材登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="add-material-form" id="add-material-form" action="{{ route('user.store.material') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <select name="type" class="orderby type md-input">
                                    <option value="" selected="selected">ジャンルを選択してください *</option>
                                    <option value="自然_風景">自然_風景</option>
                                    <option value="自然_天体">自然_天体</option>
                                    <option value="自然_ペット">自然_ペット</option>
                                    <option value="自然_マクロ">自然_マクロ</option>
                                    <option value="自然_花">自然_花</option>
                                    <option value="都市風景_建築物">都市風景_建築物</option>
                                    <option value="都市風景_不動産">都市風景_不動産</option>
                                    <option value="都市風景_ドローン撮影">都市風景_ドローン撮影</option>
                                    <option value="都市風景_航空">都市風景_航空</option>
                                    <option value="人物_ポートレート">人物_ポートレート</option>
                                    <option value="人物_顔">人物_顔</option>
                                    <option value="人物_ファッション">人物_ファッション</option>
                                    <option value="人物_スポーツ">人物_スポーツ</option>
                                    <option value="人物_ドキュメンタリー">人物_ドキュメンタリー</option>
                                    <option value="ライフスタイル_ストリート">ライフスタイル_ストリート</option>
                                    <option value="ライフスタイル_ライフスタイル">ライフスタイル_ライフスタイル</option>
                                    <option value="ライフスタイル_ウェディング">ライフスタイル_ウェディング</option>
                                    <option value="商業用_食べもの">商業用_食べもの</option>
                                    <option value="商業用_製品">商業用_製品</option>
                                    <option value="商業用_ロゴ">商業用_ロゴ</option>
                                    <option value="商業用_その他">商業用_その他</option>
                                    <option value="アート風_静物">アート風_静物</option>
                                    <option value="アート風_白黒">アート風_白黒</option>
                                    <option value="アート風_芸術">アート風_芸術</option>
                                    <option value="アート風_二重露光">アート風_二重露光</option>
                                    <option value="アート風_シュルレアリスム">アート風_シュルレアリスム</option>
                                    <option value="アート風_抽象">アート風_抽象</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="name">素材名</label>
                                <input type="text" name="name" class="md-input" id="name" placeholder="素材名 *" value="{{ old('name') }}">
                                <span class="error" style="color:#BF0731" id="error-name"></span>
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
                            <div class="form-group">
                                <select name="requiredPlan" class="orderby type md-input">
                                    <option value="0" selected="selected">無料</option>
                                    <option value="1">有料</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-requiredPlan"></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">素材登録</span>
        <p class="mb-20">素材を登録してもよろしいですか?</p>
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
            if (validateAddMaterialForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-material-form').submit();
        }

        function validateAddMaterialForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.querySelector('.type').value;
            const name = document.getElementById('name').value.trim();
            const image = document.getElementById('image').files[0];

            if (!type) {
                document.getElementById('error-type').textContent = 'ジャンルを選択してください';
                isValid = false;
            }

            if (!name) {
                document.getElementById('error-name').textContent = '素材名を入力してください';
                isValid = false;
            }

            if (!image) {
                document.getElementById('error-image').textContent = '画像を選択してください';
                isValid = false;
            }else if (!image.type.match('image.*')){
                document.getElementById('error-image').textContent = '有効な画像を選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-user-layout>