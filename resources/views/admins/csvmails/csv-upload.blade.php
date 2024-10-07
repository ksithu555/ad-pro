<x-admin-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120" style="padding-bottom: 380px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <form name="upload-csv-form" id="upload-csv-form" action="{{ route('admin.upload.csv') }}" 
                        method="POST" class="contact-form-style-01" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="md-file" for="csvFile" id="file-label">CSV *</label>
                                            <input type="file" name="csvFile" id="csvFile" placeholder="CSV *" style="display: none;" value="{{ old('csvFile') }}">
                                            <span class="error" style="color:#BF0731" id="error-csvFile"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                            <div class="text-center">
                                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                                <div class="tr-modal-popup">
                                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-light btn-md btn-square btn-animate remove-margin">
                                                        <span>インポート <i class="ion-android-arrow-forward"></i></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">CSVアップロード</span>
        <p class="mb-20">CSVをインポートしてもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- csv --}}
    <script>
        document.getElementById('csvFile').addEventListener('change', function() {
        var fileName = this.files[0].name;
        var label = document.getElementById('file-label');
        label.classList.add('selected');
        label.setAttribute('data-file-name', fileName);
        });
    </script>
    {{-- validate --}}
    <script>
        function showModal() {
            if (validateUploadCSVForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('upload-csv-form').submit();
        }

        function validateUploadCSVForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const csvFile = document.getElementById('csvFile').files[0];

            if (!csvFile) {
                document.getElementById('error-csvFile').textContent = 'CSVを選択してください';
                isValid = false;
            } else if (csvFile.type !== 'text/csv') {
                document.getElementById('error-csvFile').textContent = '有効なCSVを選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>