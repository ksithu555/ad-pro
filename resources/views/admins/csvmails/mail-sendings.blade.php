<x-admin-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <form name="send-mail-form" id="send-mail-form" action="{{ route('admin.send.mail.csv.mails') }}" 
                        method="POST" class="contact-form-style-01" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <button id="toggleButton" class="btn btn-md btn-circle btn-color" type="button">Show Emails</button>
                                        
                                            <input type="hidden" name="selectedMails" id="selectedMails" 
                                                value="{{ implode(',', $selectedMails->pluck('id')->toArray()) }}">
                                            <ul id="emailList" style="display: none; margin-top: 20px; margin-left: 20px;">
                                                @foreach ($selectedMails as $mail)
                                                    <li>{{ $mail->email }}</li>
                                                @endforeach
                                            </ul>
                                        </div>                                                                              
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 pt-10">
                                        <div class="form-group">
                                            <select name="selectTemplate" class="orderby social-media md-input">
                                                <option value="1" selected="selected">Template01</option>
                                                <option value="2">Template02</option>
                                                <option value="3">Template03</option>
                                            </select>
                                            <span class="error" style="color:#BF0731" id="error-selectTemplate"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="subject">件名</label>
                                            <input type="text" name="subject" class="md-input" id="subject" placeholder="件名 *" value="{{ old('subject') }}">
                                            <span class="error" style="color:#BF0731" id="error-subject"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="body">メール本文</label>
                                            <textarea name="body" class="md-textarea" id="body" rows="10" placeholder="メール本文 *">{{ old('body') }}</textarea>
                                            <span class="error" style="color:#BF0731" id="error-body"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                            <div class="text-center">
                                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                                <div class="tr-modal-popup">
                                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
                                                        <span>送信 <i class="ion-android-arrow-forward"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--== Who We Are End ==-->

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">メール送信</span>
        <p class="mb-20">メールを送信してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateSendMailForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('send-mail-form').submit();
        }

        function validateSendMailForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const subject = document.getElementById('subject').value.trim();
            const body = document.getElementById('body').value.trim();

            if (!subject) {
                document.getElementById('error-subject').textContent = '件名を入力してください';
                isValid = false;
            }

            if (!body) {
                document.getElementById('error-body').textContent = 'メール本文を入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
    {{-- toggle the mails list --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#toggleButton').on('click', function() {
                var emailList = $('#emailList');
                
                if (emailList.is(':visible')) {
                    // If the list is visible, hide it and change the button text
                    emailList.hide();
                    $(this).text('メールを表示');
                } else {
                    // If the list is hidden, show it and change the button text
                    emailList.show();
                    $(this).text('メールを非表示');
                }
            });
        });
    </script>    
</x-admin-layout>