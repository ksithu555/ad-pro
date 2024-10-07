<x-admin-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120" style="padding-bottom: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <form action="{{ route('admin.set.mails.group') }}" method="POST" id="set-group-form">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            @php
                                $groups = $csvMails->sortBy('group')->pluck('group')->unique();
                            @endphp
                            <select name="filterGroup" class="orderby social-media">
                                <option value="" selected="selected">全て</option>
                                @foreach ($groups as $group)
                                <option value="{{ $group }}">{{ $group }}</option>
                                @endforeach
                            </select>
                            <span class="error" style="color:#BF0731" id="error-filterGroup"></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        <div class="text-right" style="display: flex; justify-content: flex-end; align-items: center; gap: 10px;">
                            <div class="tr-modal-popup">
                                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                                    onclick="showModalEmail()" id="open-modal-email">
                                    <i class="ion-email"></i> メール送信
                                </a>
                                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                                    onclick="showModal()" id="open-modal">
                                    <i class="ion-arrow-shrink"></i> グループを設定
                                </a>
                            </div>
                            <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                                href="{{ route('admin.csv.upload') }}">
                                CSVインポート <i class="ion-android-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6">
                        <div class="form-group">
                            <label class="sr-only" for="groupName">グループ名</label>
                            <input type="text" name="groupName" class="md-input" id="groupName" placeholder="グループ名 *" value="{{ old('groupName') }}">
                            <span class="error" style="color:#BF0731" id="error-groupName"></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-md-4 col-md-offset-8">
                        <span class="error" style="color:#BF0731;" id="error-checked"></span>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover shop-cart">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="min-width: 110px;">登録日</th>
                                            <th>会社名</th>
                                            <th>メール</th>
                                            <th>担当者名</th>
                                            <th>グループ名</th>
                                            <th>
                                                <div class="custom-checkbox" style="display: block;">
                                                    <input type="checkbox" id="checkAll" name="checkAll" onchange="toggleCheckboxes(this)">
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($csvMails as $key => $csvMail)
                                        <tr class="mail-row" data-type="{{ $csvMail->group }}">
                                            <td>
                                                {{ $ttl + 1 - (1 + $key) }}
                                            </td>
                                            <td style="min-width: 110px;">
                                                {{ $csvMail->created_at->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                {{ $csvMail->company_name }}
                                            </td>
                                            <td>
                                                {{ $csvMail->email }}
                                            </td>
                                            <td>
                                                {{ $csvMail->name }}
                                            </td>
                                            <td>
                                                {{ $csvMail->group }}
                                            </td>

                                            <td>
                                                <div class="custom-checkbox" style="display: block;">
                                                    <input type="checkbox" class="checkItem" name="check[]" value="{{ $csvMail->id }}">
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    @if ($csvMails->isEmpty())
                    <h1 class="mt-110 mb-70 text-center">アップロードされたメールはありません</h1>
                    @endif
                </div>
                <input type="hidden" id="confirmed" name="confirmed" value="0">
            </form>
        </div>
    </section>
    <!--== Who We Are End ==-->

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">グループを設定</span>
        <p class="mb-20">選択されたものはグループ設定してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    <!-- Modal Popup Message Box -->
    <div id="modal-popup-email" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">メール送信</span>
        <p class="mb-20">選択されたメールを送信してもよろしいですか?</p>
        <form id="send-mail-form" action="{{ route('admin.send.csv.mails') }}" method="POST">
            @csrf <!-- Include CSRF token for security -->
            <input type="hidden" name="checkedEmails" id="checkedEmails" value=""> <!-- Hidden input to store checked values -->
            <button type="submit" class="btn btn-lg btn-circle btn-color">はい</button>
            <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
        </form>
    </div>    

    {{-- filter Group --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // When the filter dropdown changes
            $('select[name="filterGroup"]').on('change', function() {
                var selectedGroup = $(this).val(); // Get selected type
    
                // If '全て' is selected, show all rows and enable checkboxes
                if (selectedGroup === "") {
                    $('.mail-row').show().find('.checkItem').prop('disabled', false);
                } else {
                    // Otherwise, show only the rows that match the selected type and enable their checkboxes
                    $('.mail-row').each(function() {
                        var mailGroup = $(this).data('type'); // Get the type of the row
                        if (mailGroup === selectedGroup) {
                            $(this).show().find('.checkItem').prop('disabled', false); // Show the row and enable the checkbox
                        } else {
                            $(this).hide().find('.checkItem').prop('disabled', true); // Hide the row and disable the checkbox
                        }
                    });
                }
            });
        });
    </script>    
    <script>
        function toggleCheckboxes(source) {
            // Select all checkboxes within visible mail-row elements
            const visibleCheckboxes = document.querySelectorAll('.checkItem');
            visibleCheckboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
        }
    </script>
    <script>
        function showModal() {
            if (validateSetForGroupForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('set-group-form').submit();
        }

        function validateSetForGroupForm() {
            let isValid = false;
            const checkboxes = document.querySelectorAll('.checkItem');
            const groupName = document.getElementById('groupName').value.trim();

            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isValid = true;
                }
            });

            if (!isValid) {
                document.getElementById('error-checked').textContent = '少なくとも1つチェックしてください';
            }

            if (!groupName) {
                document.getElementById('error-groupName').textContent = 'グループ名を入力してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
    <script>
        function showModalEmail() {
            if (validateSendMailGroupForm()) {
                document.getElementById('open-modal-email').setAttribute('href', '#modal-popup-email');
                document.getElementById('open-modal-email').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal-email').click();
            }
        }

        function validateSendMailGroupForm() {
            let isValid = false;
            const checkboxes = document.querySelectorAll('.checkItem');

            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isValid = true;
                }
            });

            if (!isValid) {
                document.getElementById('error-checked').textContent = '少なくとも1つチェックしてください';
            }

            return isValid;
        }
    </script>
    {{-- email send-mail-form --}}
    <script>
        $(document).ready(function() {
            // When the modal is triggered
            $('#modal-popup-email').on('click', '.btn-color', function(event) {
                event.preventDefault(); // Prevent default action
    
                // Collect all checked checkboxes and their values
                var checkedEmails = [];
                $('.mail-row:visible .checkItem:checked').each(function() {
                    checkedEmails.push($(this).val()); // Assuming value is the email or ID
                });
    
                // Join the checked values and set to hidden input
                $('#checkedEmails').val(checkedEmails.join(','));
    
                // Submit the form
                $('#send-mail-form').submit();
            });
        });
    </script>    
</x-admin-layout>