<x-admin-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
                <div class="col-md-3">
                    <div style="display: flex; justify-content: flex-end; align-items: center; gap: 10px;">
                        <div class="tr-modal-popup">
                            <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                            onclick="showModal()" id="open-modal">
                                <i class="fa-icon-pencil-square"></i> 修正
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="row mt-10">
                <div class="col-md-3 col-md-offset-9">
                    <span class="error" style="color:#BF0731;" id="error-checked"></span>
                </div>
            </div>
            <div class="row mt-10">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <form action="{{ route('admin.unpaid.user.for.selected.material.downloads') }}" method="POST" id="paymentForm">
                            @csrf
                            <table class="table table-bordered table-striped table-hover shop-cart">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ダウンロード日</th>
                                        <th>画像</th>
                                        <th style="min-width: 170px;">ダウンロードした人</th>
                                        <th>
                                            <div class="custom-checkbox" style="display: block;">
                                                <input type="checkbox" id="checkAll" name="checkAll" onchange="toggleCheckboxes(this)">
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($downloadHistories as $key => $history)
                                    <tr>
                                        <td>{{ $ttl + 1 - (1 + $key) }}</td>
                                        <td>{{ $history->created_at->format('Y-m-d h:m:i') }}</td>
                                        <td>
                                            <img src="{{ asset('assets/images/all/' . $history->material->image ) }}" alt=""> 
                                        </td>
                                        <td style="min-width: 170px;">
                                            {{ $history->user->name }}
                                        </td>
                                        <td>
                                            <div class="custom-checkbox" style="display: block;">
                                                <input type="checkbox" class="checkItem" name="paid[]" value="{{ $history->id }}">
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <input type="hidden" id="confirmed" name="confirmed" value="0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Products End ==-->
    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">支払う修正</span>
        <p class="mb-20">選択されたものは支払うを修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    <script>
        function toggleCheckboxes(source) {
            const checkboxes = document.querySelectorAll('.checkItem');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
        }
    </script>
    <script>
        function showModal() {
            if (validatePayForMaterialDownloadForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('paymentForm').submit();
        }

        function validatePayForMaterialDownloadForm() {
            let isValid = false;
            const checkboxes = document.querySelectorAll('.checkItem');

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
</x-admin-layout>
  