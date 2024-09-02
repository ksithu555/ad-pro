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
                <form name="add-section-form" id="add-section-form" action="{{ route('admin.store.section') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="type">タイプ</label>
                                <input type="text" name="type" class="md-input" id="type" placeholder="タイプ *" value="{{ old('type') }}">
                                <span class="error" style="color:#BF0731" id="error-type"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="name">名前</label>
                                <input type="text" name="name" class="md-input" id="name" placeholder="名前 *" value="{{ old('name') }}">
                                <span class="error" style="color:#BF0731" id="error-name"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="note">注記</label>
                                <textarea name="note" class="md-textarea" id="note" rows="7" placeholder="注記 *">{{ old('note') }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-note"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="minBlock">最小ブロック</label>
                                <input type="number" name="minBlock" class="md-input" id="minBlock" placeholder="最小ブロック *" value="{{ old('minBlock') }}">
                                <span class="error" style="color:#BF0731" id="error-minBlock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="maxBlock">最大ブロック</label>
                                <input type="number" name="maxBlock" class="md-input" id="maxBlock" placeholder="最大ブロック *" value="{{ old('maxBlock') }}">
                                <span class="error" style="color:#BF0731" id="error-maxBlock"></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">セクション登録</span>
        <p class="mb-20">セクションを登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddSectionForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-section-form').submit();
        }

        function validateAddSectionForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const type = document.getElementById('type').value.trim();
            const name = document.getElementById('name').value.trim();
            const note = document.getElementById('note').value.trim();

            if (!type) {
                document.getElementById('error-type').textContent = 'タイプを入力してください';
                isValid = false;
            }

            if (!name) {
                document.getElementById('error-name').textContent = 'セクションを入力してください';
                isValid = false;
            }

            if (!note) {
                document.getElementById('error-note').textContent = '注記を入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>