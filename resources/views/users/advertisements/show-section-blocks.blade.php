<x-user-layout>
    <!--== Products Start ==-->
    <section>
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
            if ($type == 'header') {
                $addRoute = 'user.add.header.block';
                $editRoute = 'user.edit.header.block';
                $deleteRoute = 'user.delete.header.block';
            }
            if ($type == 'footer') {
                $addRoute = 'user.add.footer.block';
                $editRoute = 'user.edit.footer.block';
                $deleteRoute = 'user.delete.footer.block';
            }
        @endphp
        <div class="row">
          <div class="col-md-6">
              <div style="text-align: left;">
                  <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                  href="{{ route('user.show.sections', $advertisementSection->advertisement_id) }}">
                      <i class="fa fa-arrow-left"></i> 戻る
                  </a>
              </div>
          </div>
          <div class="col-md-6">
            <div style="text-align: right;">
              <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
              href="{{ route($addRoute, $id) }}">
                <i class="fa-icon-plus-square"></i> ブロック
              </a>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <x-message-box></x-message-box>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if ($type == 'footer')
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">セクション</th>
                            <th>タイプ</th>
                            <th>名前</th>
                            <th>URL</th>
                            <th>注記</th>
                            <th>アクション</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($advertisementSectionBlocks as $key => $block)
                          <tr>
                            <td>
                              {{ $key + 1  }}
                            </td>
                            <td style="min-width: 110px;">
                                {{ $block->advertisementSection->name }}
                            </td>
                            <td>
                              {{ $block->type }}
                            </td>
                            @if ($block->type == 'text' || $block->type == 'contact' || 
                            $block->type == 'copyRight' || $block->type == 'logo')
                            <td colspan="2">
                              {{ $block->text }}
                            </td>
                            @else
                            <td>
                              {{ $block->name }}
                            </td>
                            <td>
                              {{ $block->url }}
                            </td>
                            @endif
                            <td style="min-width: 110px;">
                                <label class="toggle-switch">
                                    <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-footer" {{ $block->status == 1 ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                </label>   
                            </td>  
                            <td>
                              <a href="{{ route($editRoute, $block->id) }}">
                                <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                              </a>
                              @if (!($block->type == 'text' || $block->type == 'contact' || 
                              $block->type == 'copyRight' || $block->type == 'logo'))
                              <div class="tr-modal-popup">
                                <a href="#modal-popup-{{ $block->id }}" data-effect="mfp-newspaper">
                                  <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                </a>
                              </div>
                              @endif
                            </td>
                          </tr>
                          <!-- Modal Popup Message Box -->
                          <div id="modal-popup-{{ $block->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                            <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ブロック削除</span>
                            <p class="mb-20">ブロックを削除してもよろしいですか?</p>
                              <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">Yes</a>
                              <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
                          </div>
                          @endforeach
                        </tbody>
                    </table>
                    @else
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>セクション</th>
                            <th>タイトル</th>
                            <th>ボディ</th>
                            <th>画像</th>
                            <th>注記</th>
                            <th style="min-width: 110px;">アクション</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advertisementSectionBlocks as $key => $block)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $block->advertisementSection->name }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $block->title }}
                                </td>   
                                <td style="min-width: 110px;">
                                    {{ $block->body }}  
                                </td> 
                                <td style="min-width: 110px;">
                                    <img src="{{ asset('assets/images/all/' . $block->image ) }}" alt=""> 
                                </td>
                                <td style="min-width: 110px;">
                                    <label class="toggle-switch">
                                        <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-header" {{ $block->status == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>   
                                </td>  
                                <td>
                                    <a href="{{ route($editRoute, $block->id) }}">
                                      <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                    </a>
                                    <div class="tr-modal-popup">
                                      <a href="#modal-popup-{{ $block->id }}" data-effect="mfp-newspaper">
                                        <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                      </a>
                                    </div>
                                  </td>
                            </tr>

                            <!-- Modal Popup Message Box -->
                            <div id="modal-popup-{{ $block->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ブロック削除</span>
                                <p class="mb-20">ブロックを削除してもよろしいですか?</p>
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">Yes</a>
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
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle-footer').on('change', function() {
                // Get the section ID from the data-id attribute
                var blockId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;

                // Send AJAX request to update the section status
                $.ajax({
                    url: '/user/update/section/footer-block-status', // The route URL
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
    <script>
      $(document).ready(function() {
          // Listen for the toggle switch change event
          $('.status-toggle-header').on('change', function() {
              // Get the section ID from the data-id attribute
              var blockId = $(this).data('id');
              // Determine the status based on whether the checkbox is checked
              var status = $(this).is(':checked') ? 1 : 0;

              // Send AJAX request to update the section status
              $.ajax({
                  url: '/user/update/section/header-block-status', // The route URL
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
  