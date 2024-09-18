<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">アコーディオンブロック登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <form name="add-accordion-block-form" id="add-accordion-block-form" action="{{ route('user.store.accordion.block') }}" method="POST" 
                        class="contact-form-style-01" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <input type="hidden" id="advertisementSectionId" name="advertisementSectionId" value="{{ $id }}">
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">アコーディオンブロック登録</span>
        <p class="mb-20">アコーディオンブロックを登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddAccordionBlockForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-accordion-block-form').submit();
        }

        function validateAddAccordionBlockForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const title = document.getElementById('title').value.trim();

            if (!title) {
                document.getElementById('error-title').textContent = 'タイトルを入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-user-layout>