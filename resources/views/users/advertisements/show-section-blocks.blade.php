<x-user-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
      <div class="container">
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
            if ($type == 'list') {
                $addRoute = 'user.add.list.block';
                $editRoute = 'user.edit.list.block';
                $deleteRoute = 'user.delete.list.block';
            }
            if ($type == 'box') {
                $addRoute = 'user.add.box.block';
                $editRoute = 'user.edit.box.block';
                $deleteRoute = 'user.delete.box.block';
                $showRoute = 'user.show.block.sub.blocks';
            }
            if ($type == 'contact') {
                $addRoute = 'user.add.contact.block';
                $editRoute = 'user.edit.contact.block';
                $deleteRoute = 'user.delete.contact.block';
            }
            if ($type == 'accordion') {
                $addRoute = 'user.add.accordion.block';
                $editRoute = 'user.edit.accordion.block';
                $deleteRoute = 'user.delete.accordion.block';
                $showRoute = 'user.show.block.sub.blocks';
            }
            if ($type == 'image') {
                $addRoute = 'user.add.image.block';
                $editRoute = 'user.edit.image.block';
                $deleteRoute = 'user.delete.image.block';
                $showRoute = 'user.show.block.sub.blocks';
            }
        @endphp
        <div class="row">
          <div class="col-md-3">
              <div style="text-align: left;">
                  <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                  href="{{ route('user.show.sections', $advertisementSection->advertisement_id) }}">
                      <i class="fa fa-arrow-left"></i> 戻る
                  </a>
              </div>
          </div>
          <div class="col-md-6">
              <x-message-box></x-message-box>
          </div>
          <div class="col-md-3">
            <div style="text-align: right;">
              <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
              href="{{ route($addRoute, $id) }}">
                <i class="fa-icon-plus-square"></i> ブロック
              </a>
            </div>
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
                            <th style="min-width: 110px;">タイプ</th>
                            <th>名前</th>
                            <th>URL</th>
                            <th style="min-width: 110px;">ステータス</th>
                            <th style="min-width: 110px;">アクション</th>
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
                            <td style="min-width: 110px;">
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
                            <td style="min-width: 110px;">
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
                              <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">はい</a>
                              <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                          </div>
                          @endforeach
                        </tbody>
                    </table>
                    @elseif ($type == 'header' || $type == 'list')
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">セクション</th>
                            <th>タイトル</th>
                            <th>内容</th>
                            <th>画像</th>
                            <th>ステータス</th>
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
                                @if ($type == 'header')
                                <td style="min-width: 110px;">
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-header" {{ $block->status == 1 ? 'checked' : '' }}>
                                      <span class="slider"></span>
                                  </label>   
                                </td>
                                @elseif ($type == 'list')
                                <td style="min-width: 110px;">
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-list" {{ $block->status == 1 ? 'checked' : '' }}>
                                      <span class="slider"></span>
                                  </label>   
                                </td>
                                @endif
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
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">はい</a>
                                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    @elseif ($type == 'box')
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">セクション</th>
                            <th>タイトル</th>
                            <th>内容</th>
                            <th>ステータス</th>
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
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-box" {{ $block->status == 1 ? 'checked' : '' }}>
                                      <span class="slider"></span>
                                  </label>   
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ route($showRoute, ['type' => $type, 'id' => $block->id]) }}">
                                            <i class="fa-icon-plus-square" style="font-size: 1.5em;"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route($editRoute, $block->id) }}">
                                            <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                        </a>
                                    </div>
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
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">はい</a>
                                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    @elseif ($type == 'accordion')
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">セクション</th>
                            <th>タイトル</th>
                            <th>ステータス</th>
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
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-accordion" {{ $block->status == 1 ? 'checked' : '' }}>
                                      <span class="slider"></span>
                                  </label>   
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ route($showRoute, ['type' => $type, 'id' => $block->id]) }}">
                                            <i class="fa-icon-plus-square" style="font-size: 1.5em;"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route($editRoute, $block->id) }}">
                                            <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                        </a>
                                    </div>
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
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">はい</a>
                                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    @elseif ($type == 'image')
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">セクション</th>
                            <th>タイトル</th>
                            <th>ステータス</th>
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
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $block->id }}" class="status-toggle-image" {{ $block->status == 1 ? 'checked' : '' }}>
                                      <span class="slider"></span>
                                  </label>   
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ route($showRoute, ['type' => $type, 'id' => $block->id]) }}">
                                            <i class="fa-icon-plus-square" style="font-size: 1.5em;"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route($editRoute, $block->id) }}">
                                            <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                        </a>
                                    </div>
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
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route($deleteRoute, $block->id) }}">はい</a>
                                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
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
    {{-- footer toggle --}}
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
    {{-- header toggle --}}
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
    {{-- list toggle --}}
    <script>
      $(document).ready(function() {
          // Listen for the toggle switch change event
          $('.status-toggle-list').on('change', function() {
              // Get the section ID from the data-id attribute
              var blockId = $(this).data('id');
              // Determine the status based on whether the checkbox is checked
              var status = $(this).is(':checked') ? 1 : 0;

              // Send AJAX request to update the section status
              $.ajax({
                  url: '/user/update/section/list-block-status', // The route URL
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
    {{-- box toggle --}}
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle-box').on('change', function() {
                // Get the section ID from the data-id attribute
                var blockId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;
  
                // Send AJAX request to update the section status
                $.ajax({
                    url: '/user/update/section/box-block-status', // The route URL
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
    {{-- accordion toggle --}}
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle-accordion').on('change', function() {
                // Get the section ID from the data-id attribute
                var blockId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;
  
                // Send AJAX request to update the section status
                $.ajax({
                    url: '/user/update/section/accordion-block-status', // The route URL
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
    {{-- image hover toggle --}}
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle-image').on('change', function() {
                // Get the section ID from the data-id attribute
                var blockId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;
  
                // Send AJAX request to update the section status
                $.ajax({
                    url: '/user/update/section/image-block-status', // The route URL
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
  