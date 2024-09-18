<x-admin-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 section-heading">
                <form action="{{ route('admin.get.bank.accounts') }}" method="GET">
                    <div class="search-box">
                        <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="text-right">
                  <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                      href="{{ route('admin.add.bank.account') }}">
                      <i class="fa-icon-plus-square"></i> 銀行口座登録
                  </a>
              </div>
              <x-message-box></x-message-box>
            </div>
          </div>
          <div class="row mt-10">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover shop-cart">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="min-width: 110px;">登録日</th>
                      <th>銀行名</th>
                      <th>支店名</th>
                      <th>口座種別</th>
                      <th>口座番号</th>
                      <th>口座名</th>
                      <th style="min-width: 110px;">ステータス</th>
                      <th>アクション</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($bankAccounts as $key => $bankAccount)
                    <tr>
                      <td>
                        {{ $ttl + 1 - ($bankAccounts->firstItem() + $key) }}
                      </td>
                      <td style="min-width: 110px;">
                          {{ $bankAccount->created_at->format('Y-m-d') }}
                      </td>
                      <td>
                        {{ $bankAccount->bank_name }}
                      </td>
                      <td>
                        {{ $bankAccount->branch_name }}
                      </td>
                      <td>
                        {{ $bankAccount->account_type }}
                      </td>
                      <td>
                        {{ $bankAccount->account_number }}
                      </td>
                      <td>
                        {{ $bankAccount->account_name }}
                      </td>
                      <td style="min-width: 110px;">
                          <label class="toggle-switch">
                              <input type="checkbox" data-id="{{ $bankAccount->id }}" class="status-toggle" {{ $bankAccount->status == 1 ? 'checked' : '' }}>
                              <span class="slider"></span>
                          </label>   
                      </td>
                      <td>
                        <a href="{{ route('admin.edit.bank.account', $bankAccount->id) }}">
                          <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                        </a>
                        <div class="tr-modal-popup">
                          <a href="#modal-popup-{{ $bankAccount->id }}" data-effect="mfp-newspaper">
                            <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- Modal Popup Message Box -->
                    <div id="modal-popup-{{ $bankAccount->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                      <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">銀行口座削除</span>
                      <p class="mb-20">銀行口座を削除してもよろしいですか?</p>
                        <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.bank.account', $bankAccount->id) }}">はい</a>
                        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                    </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
              @include('components.pagination')
            </div>
          </div>
        </div>
    </section>
    <!--== Products End ==-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle').on('change', function() {
                // Get the section ID from the data-id attribute
                var sectionId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;

                // Send AJAX request to update the section status
                $.ajax({
                    url: '/admin/update/bank-account-status', // The route URL
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        id: sectionId,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();
                        } else {
                            window.location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating section status: ' + error);
                        window.location.reload();
                    }
                });
            });
        });
    </script>
</x-admin-layout>