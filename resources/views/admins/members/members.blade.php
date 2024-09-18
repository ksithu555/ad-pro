<x-admin-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <div class="search-box">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
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
                                    <th>会社前</th>
                                    <th>会員前</th>
                                    <th>メール</th>
                                    <th>プラン</th>
                                    <th>ステータス</th>
                                    <th style="min-width: 110px;">ビュー</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                <tr>
                                    <td>
                                        {{ $ttl + 1 - ($users->firstItem() + $key) }}
                                    </td>
                                    <td>
                                        {{ $user->created_at->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        {{ $user->company_name }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        @php
                                            $userPayment = $user->userPayments
                                                ->whereNull('plan_start')
                                                ->whereNull('plan_end')
                                                ->first();
                                        @endphp
                                    
                                        @if ($userPayment)
                                            @switch($userPayment->requested_plan)
                                                @case(1)
                                                    <div class="tr-modal-popup">
                                                        <a href="#modal-popup-{{ $user->id }}" data-effect="mfp-newspaper">
                                                            <span class="custom-badge silver-badge">承認待ち（シルバー）</span>
                                                        </a>
                                                    </div>
                                                    @break
                                                @case(2)
                                                    <div class="tr-modal-popup">
                                                        <a href="#modal-popup-{{ $user->id }}" data-effect="mfp-newspaper">
                                                            <span class="custom-badge gold-badge">承認待ち（ゴールド）</span>
                                                        </a>
                                                    </div>
                                                    @break
                                            @endswitch
                                            <!-- Modal Popup Message Box -->
                                            <div id="modal-popup-{{ $user->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">プランのアップグレード承認</span>
                                                <p class="mb-20">プランのアップグレードを承認してもよろしいですか?</p>
                                                <a class="btn btn-md btn-circle btn-dark" href="{{ route('admin.reject.bank.transfer', $userPayment->id) }}">拒否する</a>
                                                <a class="btn btn-md btn-circle btn-color" href="{{ route('admin.approve.bank.transfer', $userPayment->id) }}">はい</a>
                                                <a class="btn btn-md btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                                            </div>
                                        @else
                                            @switch($user->plan_status)
                                                @case(0)
                                                    <span class="custom-badge free-badge">無料</span>
                                                    @break
                                                @case(1)
                                                    <span class="custom-badge silver-badge">シルバー</span>
                                                    @break
                                                @case(2)
                                                    <span class="custom-badge gold-badge">ゴールド</span>
                                                    @break
                                            @endswitch
                                        @endif
                                    </td>                                    
                                    <td>
                                        <label class="toggle-switch">
                                            <input type="checkbox" data-id="{{ $user->id }}" class="status-toggle" {{ $user->status == 1 ? 'checked' : '' }}>
                                            <span class="slider"></span>
                                        </label>   
                                    </td>                           
                                    <td style="min-width: 110px;">
                                        <a href="{{ route('admin.show.member.detail', $user->id) }}">
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
                    url: '/admin/update/member-status', // The route URL
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