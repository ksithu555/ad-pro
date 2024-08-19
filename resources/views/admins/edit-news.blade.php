<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
  <section class="white-bg">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
              <h4 class="text-uppercase mt-0">新着情報修正</h4>
        	</div>
        </div>
        <div class="row mt-50">
            <div class="col-md-12">
              <form name="edit-news-form" id="edit-news-form" action="{{ route('admin.update.news') }}" method="POST" 
                  class="contact-form-style-01" enctype="multipart/form-data">
                @csrf
                <div class="messages"></div>
                <input type="hidden" id="id" name="id" value="{{ $new->id }}">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                          <label class="sr-only" for="title">タイトル</label>
                          <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') ? old('title') : $new->title }}">
                          <span class="error" style="color:#BF0731" id="error-title"></span>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                          <label class="sr-only" for="body">体</label>
                          <textarea name="body" class="md-textarea" id="body" rows="7" placeholder="体 *">{{ old('body') ? old('body') : $new->body }}</textarea>
                          <span class="error" style="color:#BF0731" id="error-body"></span>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                          <label class="md-file" for="image" id="file-label">画像 *</label>
                          <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;">
                          <img id="image-preview" src="{{ asset('assets/images/all/' . $new->image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                          <span class="error" style="color:#BF0731" id="error-image"></span>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                          <label class="sr-only" for="authorName">著者名</label>
                          <input type="text" name="authorName" class="md-input" id="authorName" placeholder="著者名 *" value="{{ old('authorName') ? old('authorName') : $new->author_name }}">
                          <span class="error" style="color:#BF0731" id="error-authorName"></span>
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                          <label class="md-file" for="authorImage" id="author-file-label">著者画像 *</label>
                          <input type="file" name="authorImage" id="authorImage" placeholder="著者画像 *" style="display: none;" value="{{ old('authorImage') ? old('authorImage') : $new->author_image }}">
                          <img id="authorImage-preview" src="{{ asset('assets/images/all/' . $new->author_image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                          <span class="error" style="color:#BF0731" id="error-authorImage"></span>
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
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">新着情報登録</span>
    <p class="mb-20">新着情報を登録してもよろしいですか?</p>
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
  {{-- author image --}}
  <script>
    document.getElementById('authorImage').addEventListener('change', function() {
      var fileName = this.files[0].name;
      var label = document.getElementById('author-file-label');
      label.classList.add('selected');
      label.setAttribute('data-file-name', fileName);
    });
    document.getElementById('authorImage').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imagePreview = document.getElementById('authorImage-preview');
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
        if (validateEditNewsForm()) {
            document.getElementById('open-modal').setAttribute('href', '#modal-popup');
            document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
            document.getElementById('open-modal').click();
        }
    }

    function submitForm() {
        document.getElementById('confirmed').value = '1';
        document.getElementById('edit-news-form').submit();
    }

    function validateEditNewsForm() {
        let isValid = true;
        document.querySelectorAll('.error').forEach(el => el.textContent = '');

        const title = document.getElementById('title').value.trim();
        const body = document.getElementById('body').value.trim();
        const authorName = document.getElementById('authorName').value.trim();

        if (!title) {
            document.getElementById('error-title').textContent = 'タイトルを入力してください。';
            isValid = false;
        }

        if (!body) {
            document.getElementById('error-body').textContent = '体を入力してください。';
            isValid = false;
        }

        if (!authorName) {
            document.getElementById('error-authorName').textContent = '著者名を入力してください。';
            isValid = false;
        }

        return isValid;
    }
  </script>
</x-admin-layout>