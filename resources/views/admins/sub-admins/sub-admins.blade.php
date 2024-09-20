<x-admin-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <form action="{{ route('admin.get.sub.admins') }}" method="GET">
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
                        href="{{ route('admin.add.sub.admin') }}">
                        <i class="fa-icon-plus-square"></i> 管理者登録
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
                                    <th>名前</th>
                                    <th>メール</th>
                                    <th>ステータス</th>
                                    <th>アクション</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subAdmins as $key => $subAdmin)
                                <tr>
                                    <td>
                                        {{ $ttl + 1 - ($subAdmins->firstItem() + $key) }}
                                    </td>
                                    <td>
                                        {{ $subAdmin->name }}
                                    </td>
                                    <td>
                                        {{ $subAdmin->email }}
                                    </td>
                                    <td style="min-width: 110px;">
                                        <label class="toggle-switch">
                                            <input type="checkbox" data-id="{{ $subAdmin->id }}" class="status-toggle" {{ $subAdmin->status == 1 ? 'checked' : '' }}>
                                            <span class="slider"></span>
                                        </label>   
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit.sub.admin', $subAdmin->id) }}">
                                            <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                        </a>
                                        <div class="tr-modal-popup">
                                            <a href="#modal-popup-{{ $subAdmin->id }}" data-effect="mfp-newspaper">
                                                <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal Popup Message Box -->
                                <div id="modal-popup-{{ $subAdmin->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">管理者削除</span>
                                <p class="mb-20">管理者を削除してもよろしいですか?</p>
                                    <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.sub.admin', $subAdmin->id) }}">はい</a>
                                    <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @include('components.pagination')
                </div>
                @if ($subAdmins->isEmpty())
                <h1 class="mt-120 mb-60 text-center">サブ管理者はありません</h1>
                @endif
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
                    url: '/admin/update/sub-admin-status', // The route URL
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