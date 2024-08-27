<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
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
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="sr-only" for="type">タイプ</label>
                            <input type="text" name="type" class="md-input" id="type" placeholder="タイプ *" value="{{ old('type') ? old('type') : $material->type }}">
                            <span class="error" style="color:#BF0731" id="error-type"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="sr-only" for="name">名前</label>
                            <input type="text" name="name" class="md-input" id="name" placeholder="名前 *" value="{{ old('name') ? old('name') : $material->name }}">
                            <span class="error" style="color:#BF0731" id="error-name"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="md-file" for="image" id="file-label">画像 *</label>
                            <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;" value="{{ old('image') }}">
                            <img id="image-preview" src="{{ asset('assets/images/all/' . $material->image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                            <span class="error" style="color:#BF0731" id="error-image"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="text-left mt-20">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">素材修正</span>
        <p class="mb-20">素材を修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
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

            const type = document.getElementById('type').value.trim();
            const name = document.getElementById('name').value.trim();

            if (!type) {
                document.getElementById('error-type').textContent = 'タイプを入力してください。';
                isValid = false;
            }

            if (!name) {
                document.getElementById('error-name').textContent = '名前を入力してください。';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>