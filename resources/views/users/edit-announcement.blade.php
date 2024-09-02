<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
              <h4 class="text-uppercase mt-0">ビズ公示修正</h4>
        	</div>
        </div>
        <div class="row mt-50">
            <div class="col-md-12">
                <form name="edit-announcement-form" id="edit-announcement-form" action="{{ route('user.update.announcement') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="id" name="id" value="{{ $announcement->id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="type">タイプ</label>
                                <input type="text" name="type" class="md-input" id="type" placeholder="タイプ *" value="{{ old('type') ? old('type') : $announcement->type }}">
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="title">タイトル</label>
                                <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') ? old('title') : $announcement->title }}">
                                <span class="error" style="color:#BF0731" id="error-title"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="description">体</label>
                                <textarea name="description" class="md-textarea" id="description" rows="7" placeholder="体 *">{{ old('description') ? old('description') : $announcement->description }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-description"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="md-file" for="image" id="file-label">画像 *</label>
                                <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;" value="{{ old('image') ? old('image') : $announcement->image }}">
                                <img id="image-preview" src="{{ asset('assets/images/all/' . $announcement->image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                <span class="error" style="color:#BF0731" id="error-image"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="dateTime">日時</label>
                                <input type="text" name="dateTime" class="md-input" id="dateTime" placeholder="日時 *" value="{{ old('dateTime') ? old('dateTime') : $announcement->date_time }}">
                                <span class="error" style="color:#BF0731" id="error-dateTime"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="location">場所</label>
                                <input type="text" name="location" class="md-input" id="location" placeholder="場所 *" value="{{ old('location') ? old('location') : $announcement->location }}">
                                <span class="error" style="color:#BF0731" id="error-location"></span>
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
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ビズ公示修正</span>
    <p class="mb-20">ビズ公示を修正してもよろしいですか?</p>
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
            if (validateEditAnnouncementForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-announcement-form').submit();
        }

        function validateEditAnnouncementForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.getElementById('type').value.trim();
            const title = document.getElementById('title').value.trim();
            const description = document.getElementById('description').value.trim();
            const dateTime = document.getElementById('dateTime').value.trim();
            const location = document.getElementById('location').value.trim();

            if (!type) {
                document.getElementById('error-type').textContent = 'タイプを入力してください';
                isValid = false;
            }

            if (!title) {
                document.getElementById('error-title').textContent = 'タイトルを入力してください';
                isValid = false;
            }

            if (!description) {
                document.getElementById('error-description').textContent = '体を入力してください';
                isValid = false;
            }

            if (!dateTime) {
                document.getElementById('error-dateTime').textContent = '日時を入力してください';
                isValid = false;
            }

            if (!location) {
                document.getElementById('error-location').textContent = '場所を選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize the date-time picker
        flatpickr("#dateTime", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
</x-user-layout>