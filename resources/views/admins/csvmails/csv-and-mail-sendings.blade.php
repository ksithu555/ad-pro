<x-admin-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-120" style="padding-bottom: 250px;">
        <div class="container">
            <div class="row">
              <div class="col-sm-8 section-heading">
                  <form id="search-form" action="{{ route('admin.csv.and.mail.sendings') }}" method="GET">
                      <div class="search-box">
                          <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                          <input type="hidden" name="group" id="groupInput" value="{{ request()->input('group') }}">
                          <button type="submit"><i class="fa fa-search"></i></button>
                      </div>
                  </form>
              </div>
            </div>  
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <form action="{{ route('admin.set.mails.group') }}" method="POST" id="set-group-form">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="filterGroup" id="filterGroup" class="orderby social-media">
                                <option value="" selected="selected">全て</option>
                                @foreach ($groups as $group)
                                <option value="{{ $group }}" @if(request()->input('group') == $group) selected="selected" @endif>
                                    {{ $group }}
                                </option>                                
                                @endforeach
                            </select>
                            <span class="error" style="color:#BF0731" id="error-filterGroup"></span>
                        </div>
                    </div>
                    <div class="col-md-9">
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
                                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                                    onclick="showModalReset()" id="open-modal-reset">
                                    <i class="ion-arrow-move"></i> グループをリセット
                                </a>
                                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                                    onclick="showModalDelete()" id="open-modal-delete">
                                    <i class="fa-icon-trash"></i> 削除
                                </a>
                                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                                    href="javascript:void(0);" onclick="uploadCsv()">
                                    CSVインポート <i class="ion-android-arrow-forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-md-offset-8 col-sm-offset-8">
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
                                        <th style="max-width: 200px">企業名</th>
                                        <th style="max-width: 200px;">メール</th>
                                        <th style="min-width: 110px;">業種</th>
                                        <th style="min-width: 110px;">グループ名 <span id="rowCount"></span></th>
                                        <th>
                                            <div class="custom-checkbox" style="display: block;">
                                                <input type="checkbox" id="checkAll" name="checkAll" onchange="toggleCheckboxes(this)">
                                            </div>
                                        </th>
                                        <th>詳細</th>
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
                                        <td style="max-width: 200px;">
                                            {{ $csvMail->company_name }}
                                        </td>
                                        <td style="max-width: 200px;">
                                            {{ $csvMail->email }}
                                        </td>
                                        <td style="min-width: 110px;">
                                            {{ $csvMail->industry }}
                                        </td>
                                        <td style="min-width: 110px;">
                                            {{ $csvMail->group }}
                                        </td>
                                        <td>
                                            <div class="custom-checkbox" style="display: block;">
                                                <input type="checkbox" class="checkItem" name="check[]" value="{{ $csvMail->id }}">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.show.csv.mail.detail', $csvMail->id) }}">
                                                <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @include('components.pagination')
                    </div>
                    @if ($csvMails->isEmpty())
                    <h1 class="mt-110 mb-70 text-center">インポートされたメールはありません</h1>
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

    <!-- Modal Popup Message Box -->
    <div id="modal-popup-reset" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">グループリセット</span>
        <p class="mb-20">選択されたメールをグループリセットしてもよろしいですか?</p>
        <form id="reset-group-form" action="{{ route('admin.reset.mails.group') }}" method="POST">
            @csrf <!-- Include CSRF token for security -->
            <input type="hidden" name="checkedEmails" id="checkedEmails" value=""> <!-- Hidden input to store checked values -->
            <button type="submit" class="btn btn-lg btn-circle btn-color">はい</button>
            <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
        </form>
    </div>

    <!-- Modal Popup Message Box -->
    <div id="modal-popup-delete" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">削除</span>
        <p class="mb-20">選択されたデータを削除してもよろしいですか?</p>
        <form id="delete-csv-mails-form" action="{{ route('admin.delete.csv.mails') }}" method="POST">
            @csrf <!-- Include CSRF token for security -->
            <input type="hidden" name="checkedEmails" id="checkedEmails" value=""> <!-- Hidden input to store checked values -->
            <button type="submit" class="btn btn-lg btn-circle btn-color">はい</button>
            <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
        </form>
    </div>  

    {{-- filter Group --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        document.getElementById('filterGroup').addEventListener('change', function() {
            var selectedGroup = this.value; // Get the selected group
            var groupInput = document.getElementById('groupInput'); // Get the hidden input field
            groupInput.value = selectedGroup; // Set the selected group value in the hidden input
            document.getElementById('search-form').submit(); // Submit the form
        });
    </script>
    
    {{-- <script>
        document.getElementById('filterGroup').addEventListener('change', function() {
            const selectedGroup = this.value;
            const url = "{{ route('admin.csv.and.mail.sendings') }}";
    
            // Redirect to the route with the selected group as a query parameter
            window.location.href = `${url}?group=${encodeURIComponent(selectedGroup)}`;
        });
    </script> --}}
    
    {{-- <script>
        $(document).ready(function() {
            // When the filter dropdown changes
            $('select[name="filterGroup"]').on('change', function() {
                var selectedGroup = $(this).val(); // Get selected type
                
                // Variable to keep track of the row count
                var visibleRowsCount = 0;
                
                // If '全て' is selected, show all rows and enable checkboxes
                if (selectedGroup === "") {
                    $('.mail-row').show().find('.checkItem').prop('disabled', false);
                    visibleRowsCount = $('.mail-row').length; // Count all rows
                } else {
                    // Otherwise, show only the rows that match the selected type and enable their checkboxes
                    $('.mail-row').each(function() {
                        var mailGroup = $(this).data('type'); // Get the type of the row
                        if (mailGroup === selectedGroup) {
                            $(this).show().find('.checkItem').prop('disabled', false); // Show the row and enable the checkbox
                            visibleRowsCount++; // Increase count for visible rows
                        } else {
                            $(this).hide().find('.checkItem').prop('disabled', true); // Hide the row and disable the checkbox
                        }
                    });
                }

                // Update the row count in the span next to "グループ名"
                $('#rowCount').text('（' + visibleRowsCount + ' 行）');
            });
            
            // Trigger the change event on page load to display the correct count initially
            $('select[name="filterGroup"]').trigger('change');
        });
    </script>     --}}
    
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
    <script>
        function uploadCsv() {
            // Redirect to the specified route
            window.location.href = "{{ route('admin.csv.upload') }}";
        }
    </script>
    {{-- reset mail group --}}
    <script>
        function showModalReset() {
            if (validateResetMailGroupForm()) {
                document.getElementById('open-modal-reset').setAttribute('href', '#modal-popup-reset');
                document.getElementById('open-modal-reset').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal-reset').click();
            }
        }

        function validateResetMailGroupForm() {
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
    {{-- reset mail group form --}}
    <script>
        $(document).ready(function() {
            // When the modal is triggered
            $('#modal-popup-reset').on('click', '.btn-color', function(event) {
                event.preventDefault(); // Prevent default action
    
                // Collect all checked checkboxes and their values
                var checkedEmails = [];
                $('.mail-row:visible .checkItem:checked').each(function() {
                    checkedEmails.push($(this).val()); // Assuming value is the email or ID
                });
    
                // Join the checked values and set to hidden input
                $('#checkedEmails').val(checkedEmails.join(','));
    
                // Submit the form
                $('#reset-group-form').submit();
            });
        });
    </script>
    {{-- delete maiils --}}
    <script>
        function showModalDelete() {
            if (validateDeleteMailsForm()) {
                document.getElementById('open-modal-delete').setAttribute('href', '#modal-popup-delete');
                document.getElementById('open-modal-delete').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal-delete').click();
            }
        }

        function validateDeleteMailsForm() {
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
    {{-- delete csv mails form --}}
    <script>
        $(document).ready(function() {
            // When the modal is triggered
            $('#modal-popup-delete').on('click', '.btn-color', function(event) {
                event.preventDefault(); // Prevent default action
    
                // Collect all checked checkboxes and their values
                var checkedEmails = [];
                $('.mail-row:visible .checkItem:checked').each(function() {
                    checkedEmails.push($(this).val()); // Assuming value is the email or ID
                });
    
                // Join the checked values and set to hidden input
                $('#checkedEmails').val(checkedEmails.join(','));
    
                // Submit the form
                $('#delete-csv-mails-form').submit();
            });
        });
    </script>
</x-admin-layout>