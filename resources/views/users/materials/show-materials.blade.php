<x-user-layout>
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
            <div class="col-md-7 col-md-offset-2">
                <x-message-box></x-message-box>
            </div>
            <div class="col-md-3">
                <div style="text-align: right;">
                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                href="{{ route('user.add.material') }}">
                    <i class="fa-icon-plus-square"></i> 素材
                </a>
                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                href="{{ route('user.show.sale.histories') }}">
                販売履歴 <i class="ion-android-arrow-forward"></i>
                </a>
            </div>
          </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>登録日</th>
                            <th style="min-width: 110px;">ジャンル</th>
                            <th>素材名</th>
                            <th>画像</th>
                            <th>必要なプラン</th>
                            {{-- <th style="min-width: 110px;">ダウンロード数</th> --}}
                            <th>ステータス</th>
                            <th style="min-width: 110px;">アクション</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materials as $key => $material)
                            <tr>
                                <td>
                                    {{ $ttl + 1 - ($materials->firstItem() + $key) }}
                                </td>
                                <td>
                                    {{ $material->created_at->format('Y-m-d') }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $material->type }}
                                </td>
                                <td>
                                    {{ $material->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('assets/images/all/' . $material->image ) }}" alt=""> 
                                </td>
                                <td>
                                    @switch($material->required_plan)
                                        @case(0)
                                            <span class="custom-badge free-badge">無料</span>
                                            @break
                                        @case(1)
                                            <span class="custom-badge gold-badge">有料</span>
                                            @php
                                                $counts = 0;
                                                if ($material->paidMaterialDownloadHistories->isNotEmpty()) {
                                                    $counts = $material->paidMaterialDownloadHistories->count();
                                                }
                                            @endphp
                                            <h6>ダウンロード数：{{ $counts }}回</h6>
                                            @break
                                    @endswitch
                                </td>
                                <td style="min-width: 110px;">
                                    <label class="toggle-switch">
                                        <input type="checkbox" data-id="{{ $material->id }}" class="status-toggle" {{ $material->status == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>   
                                </td>
                                <td>
                                    <a href="{{ route('user.edit.material', $material->id) }}">
                                      <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                    </a>
                                    <div class="tr-modal-popup">
                                      <a href="#modal-popup-{{ $material->id }}" data-effect="mfp-newspaper">
                                        <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                      </a>
                                    </div>
                                  </td>
                            </tr>

                            <!-- Modal Popup Message Box -->
                            <div id="modal-popup-{{ $material->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">素材削除</span>
                                <p class="mb-20">素材を削除してもよろしいですか?</p>
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.delete.material', $material->id) }}">はい</a>
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
                    url: '/user/update/material-status', // The route URL
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
  </x-user-layout>
  