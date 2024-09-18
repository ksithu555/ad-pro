<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">素材修正</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="edit-material-form" id="edit-material-form" action="{{ route('admin.update.material') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="id" name="id" value="{{ $material->id }}">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <select name="type" class="orderby type md-input">
                                    <option value="自然_風景" @if($material->type == '自然_風景')selected="selected"@endif>自然/風景</option>
                                    <option value="自然_天体" @if($material->type == '自然_天体')selected="selected"@endif>自然/天体</option>
                                    <option value="自然_ペット" @if($material->type == '自然_ペット')selected="selected"@endif>自然/ペット</option>
                                    <option value="自然_マクロ" @if($material->type == '自然_マクロ')selected="selected"@endif>自然/マクロ</option>
                                    <option value="自然_花" @if($material->type == '自然_花')selected="selected"@endif>自然/花</option>
                                    <option value="都市風景_建築物" @if($material->type == '都市風景_建築物')selected="selected"@endif>都市風景/建築物</option>
                                    <option value="都市風景_不動産" @if($material->type == '都市風景_不動産')selected="selected"@endif>都市風景/不動産</option>
                                    <option value="都市風景_ドローン撮影" @if($material->type == '都市風景_ドローン撮影')selected="selected"@endif>都市風景/ドローン撮影</option>
                                    <option value="都市風景_航空" @if($material->type == '都市風景_航空')selected="selected"@endif>都市風景/航空</option>
                                    <option value="人物_ポートレート" @if($material->type == '人物_ポートレート')selected="selected"@endif>人物/ポートレート</option>
                                    <option value="人物_顔" @if($material->type == '人物_顔')selected="selected"@endif>人物/顔</option>
                                    <option value="人物_ファッション" @if($material->type == '人物_ファッション')selected="selected"@endif>人物/ファッション</option>
                                    <option value="人物_スポーツ" @if($material->type == '人物_スポーツ')selected="selected"@endif>人物/スポーツ</option>
                                    <option value="人物_ドキュメンタリー" @if($material->type == '人物_ドキュメンタリー')selected="selected"@endif>人物/ドキュメンタリー</option>
                                    <option value="ライフスタイル_ストリート" @if($material->type == 'ライフスタイル_ストリート')selected="selected"@endif>ライフスタイル/ストリート</option>
                                    <option value="ライフスタイル_ライフスタイル" @if($material->type == 'ライフスタイル_ライフスタイル')selected="selected"@endif>ライフスタイル/ライフスタイル</option>
                                    <option value="ライフスタイル_ウェディング" @if($material->type == 'ライフスタイル_ウェディング')selected="selected"@endif>ライフスタイル/ウェディング</option>
                                    <option value="商業用_食べもの" @if($material->type == '商業用_食べもの')selected="selected"@endif>商業用/食べもの</option>
                                    <option value="商業用_製品" @if($material->type == '商業用_製品')selected="selected"@endif>商業用/製品</option>
                                    <option value="商業用_ロゴ" @if($material->type == '商業用_ロゴ')selected="selected"@endif>商業用/ロゴ</option>
                                    <option value="商業用_その他" @if($material->type == '商業用_その他')selected="selected"@endif>商業用/その他</option>
                                    <option value="アート風_静物" @if($material->type == 'アート風_静物')selected="selected"@endif>アート風/静物</option>
                                    <option value="アート風_白黒" @if($material->type == 'アート風_白黒')selected="selected"@endif>アート風/白黒</option>
                                    <option value="アート風_芸術" @if($material->type == 'アート風_芸術')selected="selected"@endif>アート風/若術</option>
                                    <option value="アート風_二重露光" @if($material->type == 'アート風_二重露光')selected="selected"@endif>アート風_二重露光</option>
                                    <option value="アート風_シュルレアリスム" @if($material->type == 'アート風_シュルレアリスム')selected="selected"@endif>アート風/シュルレアリスム</option>
                                    <option value="アート風_抽象" @if($material->type == 'アート風_抽象')selected="selected"@endif>アート風/抽象</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="name">素材名</label>
                                <input type="text" name="name" class="md-input" id="name" placeholder="素材名 *" value="{{ old('name') ? old('name') : $material->name }}">
                                <span class="error" style="color:#BF0731" id="error-name"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="md-file" for="image" id="file-label">画像 *</label>
                                <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;" value="{{ old('image') }}">
                                <img id="image-preview" src="{{ asset('assets/images/all/' . $material->image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                <span class="error" style="color:#BF0731" id="error-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <select name="requiredPlan" class="orderby type md-input">
                                    <option value="0" @if($material->required_plan == '0')selected="selected"@endif>無料</option>
                                    <option value="1" @if($material->required_plan == '1')selected="selected"@endif>有料</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="text-center">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup">
                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">素材修正</span>
        <p class="mb-20">素材を修正してもよろしいですか?</p>
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
            if (validateEditMaterialForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-material-form').submit();
        }

        function validateEditMaterialForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.querySelector('.type').value;
            const name = document.getElementById('name').value.trim();

            if (!type) {
                document.getElementById('error-type').textContent = 'ジャンルを選択してください';
                isValid = false;
            }

            if (!name) {
                document.getElementById('error-name').textContent = '素材名を入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>