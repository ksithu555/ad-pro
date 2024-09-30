<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
              <h4 class="text-uppercase mt-0">グーグルマップブロック登録</h4>
        	</div>
        </div>
        <div class="row mt-50">
            <div class="col-md-8 col-md-offset-2">
                <form name="add-map-block-form" id="add-map-block-form" action="{{ route('user.store.map.block') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="advertisementSectionId" name="advertisementSectionId" value="{{ $id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="title">タイトル</label>
                                <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') }}">
                                <span class="error" style="color:#BF0731" id="error-title"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="body">内容</label>
                                <textarea name="body" class="md-textarea" id="body" rows="7" placeholder="内容 *">{{ old('body') }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-body"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="info-icon-container">
                                <i class="ion-information-circled info-icon"></i>
                                <div class="guideline-box" id="guideline-box">
                                    <p>Googleマップを開きます: <a href="https://maps.google.com" target="_blank">Googleマップ</a> にアクセスしてください。</p>
                                    <p>埋め込みたい場所を検索バーに入力して検索します。</p>
                                    <p>場所が表示されたら、「共有」ボタンをクリックします。共有アイコンは通常、クリップのようなアイコンです。</p>
                                    <p>ポップアップウィンドウで「リンクを送信」と「地図を埋め込む」オプションが表示されます。「地図を埋め込む」を選択します。</p>
                                    <p>地図のサイズ（小、中、大、カスタムサイズ）を選択し、生成された埋め込みコードをコピーしてご利用ください。</p>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="url">生成された埋め込みコード</label>
                                <input type="text" name="url" class="md-input" id="url" placeholder="生成された埋め込みコード *" value="{{ old('url') }}">
                                <span class="error" style="color:#BF0731" id="error-url"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="text-center mt-20">
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
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">グーグルマップブロック登録</span>
    <p class="mb-20">グーグルマップブロックを登録してもよろしいですか?</p>
    <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
    <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
  </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddListBlockForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-map-block-form').submit();
        }

        function validateAddListBlockForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const title = document.getElementById('title').value.trim();
            const body = document.getElementById('body').value.trim();
            const url = document.getElementById('url').value.trim();

            if (!title) {
                document.getElementById('error-title').textContent = 'タイトルを入力してください';
                isValid = false;
            }

            if (!body) {
                document.getElementById('error-body').textContent = 'ボデイを入力してください';
                isValid = false;
            }

            if (!url) {
                document.getElementById('error-url').textContent = 'URLを入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-user-layout>