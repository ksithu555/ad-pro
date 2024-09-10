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
        @php
            if ($type == 'box') {
                $addRoute = 'user.add.sub.box.block';
                $editRoute = 'user.edit.sub.box.block';
                $deleteRoute = 'user.delete.sub.box.block';
            }
            if ($type == 'accordion') {
                $addRoute = 'user.add.sub.accordion.block';
                $editRoute = 'user.edit.sub.accordion.block';
                $deleteRoute = 'user.delete.sub.accordion.block';
            }
        @endphp
        <div class="row">
          <div class="col-md-2">
              <div style="text-align: left;">
                  <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                  href="{{ route('user.show.section.blocks', $advertisementBlock->advertisementSection->id) }}">
                      <i class="fa fa-arrow-left"></i> 戻る
                  </a>
              </div>
          </div>
          <div class="col-md-8">
              <x-message-box></x-message-box>
          </div>
          <div class="col-md-2">
            <div style="text-align: right;">
              <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
              href="{{ route($addRoute, $id) }}">
                <i class="fa-icon-plus-square"></i> サブブロック
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if ($type == 'box')
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">セクション</th>
                            <th>タイトル</th>
                            <th>内容</th>
                            <th>アイコン</th>
                            <th>注記</th>
                            <th style="min-width: 110px;">アクション</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advertisementBlockSubBlocks as $key => $subBlock)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $subBlock->advertisementBoxBlock->advertisementSection->name }}
                                </td>
                                <td>
                                    {{ $subBlock->title }}
                                </td>   
                                <td>
                                    {{ $subBlock->body }}  
                                </td>  
                                <td style="min-width: 110px;">
                                    {{ $subBlock->icon }}  
                                </td>
                                <td style="min-width: 110px;">
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $subBlock->id }}" class="status-toggle-sub-box" {{ $subBlock->status == 1 ? 'checked' : '' }}>
                                      <span class="slider"></span>
                                  </label>   
                                </td>
                                <td>
                                    <a href="{{ route($editRoute, $subBlock->id) }}">
                                      <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                    </a>
                                    <div class="tr-modal-popup">
                                      <a href="#modal-popup-{{ $subBlock->id }}" data-effect="mfp-newspaper">
                                        <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                      </a>
                                    </div>
                                  </td>
                            </tr>

                            <!-- Modal Popup Message Box -->
                            <div id="modal-popup-{{ $subBlock->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ブロック削除</span>
                                <p class="mb-20">ブロックを削除してもよろしいですか?</p>
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $subBlock->id) }}">Yes</a>
                                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
      </div>
    </section>
    <!--== Products End ==-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    {{-- sub box toggle --}}
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle-sub-box').on('change', function() {
                // Get the section ID from the data-id attribute
                var blockId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;
  
                // Send AJAX request to update the section status
                $.ajax({
                    url: '/user/update/box-block/sub-box-block-status', // The route URL
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        id: blockId,
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
                        console.error('Error updating section status: ' + status);
                        // window.location.reload();
                    }
                });
            });
        });
      </script>
  </x-user-layout>
  