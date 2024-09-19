<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
              <h4 class="text-uppercase mt-0">情報広場修正</h4>
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
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <select name="type" class="orderby type md-input">
                                    <option value="">タイプを選択してください*</option>
                                    <option value="セミナー" @if($announcement->type == 'セミナー')selected="selected"@endif>セミナー</option>
                                    <option value="交流会" @if($announcement->type == '交流会')selected="selected"@endif>交流会</option>
                                    <option value="募集" @if($announcement->type == '募集')selected="selected"@endif>募集</option>
                                    <option value="販売" @if($announcement->type == '販売')selected="selected"@endif>販売</option>
                                    <option value="購入" @if($announcement->type == '購入')selected="selected"@endif>購入</option>
                                    <option value="その他" @if($announcement->type == 'その他')selected="selected"@endif>その他</option>
                                </select>
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="title">タイトル</label>
                                <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') ? old('title') : $announcement->title }}">
                                <span class="error" style="color:#BF0731" id="error-title"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
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
                            <div class="form-group">
                                <label class="sr-only" for="description">内容</label>
                                <textarea name="description" class="md-textarea" id="description" rows="7" placeholder="内容 *">{{ old('description') ? old('description') : $announcement->description }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-description"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="md-file" for="image" id="file-label">画像 *</label>
                                <input type="file" name="image" id="image" placeholder="画像 *" style="display: none;" value="{{ old('image') ? old('image') : $announcement->image }}">
                                <img id="image-preview" src="{{ asset('assets/images/all/' . $announcement->image) }}" alt="Image Preview" style="width: 80px; margin: 10px 0 0 14px;">
                                <span class="error" style="color:#BF0731" id="error-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="startAt">掲載開始日</label>
                                <input type="text" name="startAt" class="md-input" id="startAt" placeholder="掲載開始日 *" value="{{ old('startAt') ? old('startAt') : $announcement->start_at }}">
                                <span class="error" style="color:#BF0731" id="error-startAt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="endAt">掲載終了日</label>
                                <input type="text" name="endAt" class="md-input" id="endAt" placeholder="掲載終了日 *" value="{{ old('endAt') ? old('endAt') : $announcement->end_at }}">
                                <span class="error" style="color:#BF0731" id="error-endAt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="text-left mt-20">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup text-center">
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
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">情報広場修正</span>
    <p class="mb-20">情報広場を修正してもよろしいですか?</p>
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

            const type = document.querySelector('.type').value;
            const title = document.getElementById('title').value.trim();
            const description = document.getElementById('description').value.trim();
            const startAt = document.getElementById('startAt').value.trim();
            const endAt = document.getElementById('endAt').value.trim();

            if (!type) {
                document.getElementById('error-type').textContent = 'タイプを選択してください';
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

            if (!startAt) {
                document.getElementById('error-startAt').textContent = '日時を入力してください';
                isValid = false;
            }

            if (!endAt) {
                document.getElementById('error-endAt').textContent = '日時を入力してください';
                isValid = false;
            }

            if (startAt && endAt) {
                const startDateTime = new Date(startAt);
                const endDateTime = new Date(endAt);

                // Check if endAt is earlier than startAt
                if (endDateTime <= startDateTime) {
                    document.getElementById('error-endAt').textContent = '掲載終了日は掲載開始日より後に設定してください';
                    isValid = false;
                }
            }

            return isValid;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize the date-time picker
        flatpickr("#startAt", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        flatpickr("#endAt", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            defaultHour: 23,
            defaultMinute: 59,
        });
    </script>
</x-user-layout>