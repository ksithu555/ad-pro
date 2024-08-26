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
        <div class="row">
            <div class="col-md-12">
                <div style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                    href="{{ route('user.add.advertisement') }}">
                        <i class="fa-icon-plus-square"></i> ページ
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
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">ページ名前</th>
                            <th style="min-width: 110px;">白いロゴ</th>
                            <th style="min-width: 110px;">カラーロゴ</th>
                            <th style="min-width: 110px;">プレビュー</th>
                            <th>ステータス</th>
                            <th style="min-width: 110px;">アクション</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advertisements as $key => $advertisement)
                            <tr>
                                <td>
                                    {{ $ttl + 1 - ($advertisements->firstItem() + $key) }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $advertisement->name }}
                                </td>
                                <td style="min-width: 110px;">
                                    <img src="{{ asset('assets/images/all/' . $advertisement->logo_white ) }}" alt=""> 
                                </td>   
                                <td style="min-width: 110px;">
                                    <img src="{{ asset('assets/images/all/' . $advertisement->logo_color ) }}" alt=""> 
                                </td>                              
                                <td style="min-width: 110px;">
                                    <a href="{{ route('guest.one.page.advertisement', $advertisement->param_name) }}" target="_blank">
                                      <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                    </a>
                                </td>
                                <td>
                                    <label class="toggle-switch">
                                        <input type="checkbox" data-id="{{ $advertisement->id }}" class="status-toggle" {{ $advertisement->status == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>   
                                </td>
                                <td>
                                    <div class="text-align-center-arrow">
                                        <button class="arrow-button up" aria-label="Move Up" data-id="{{ $advertisement->id }}">&#9650;</button>
                                        <button class="arrow-button down" aria-label="Move Down" data-id="{{ $advertisement->id }}" style="margin-top: 5px;">&#9660;</button>
                                    </div>                                  
                                </td>
                                <td style="min-width: 110px;">
                                    <a href="{{ route('user.show.section.blocks', $advertisement->id) }}">
                                      <i class="fa-icon-plus-square" style="font-size: 1.5em;"></i>
                                    </a>
                                    <div class="tr-modal-popup">
                                      <a href="#modal-popup-{{ $advertisement->id }}" data-effect="mfp-newspaper">
                                        <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                      </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Popup Message Box -->
                            <div id="modal-popup-{{ $advertisement->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ページ削除</span>
                                <p class="mb-20">ページを削除してもよろしいですか?</p>
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.delete.section', $advertisement->id) }}">Yes</a>
                                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
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
                    url: '/user/update/section-status', // The route URL
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
    <script>
        $(document).ready(function() {
            // Listen for the up arrow button click event
            $('.arrow-button.up').on('click', function() {
                // Get the section ID from the data-id attribute
                var sectionId = $(this).data('id');
    
                // Send AJAX request to move the section up
                $.ajax({
                    url: '/user/section/order-up/' + sectionId, // The route URL
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // CSRF token for security
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();
                        } else {
                            alert('Failed to move the section up.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error moving section up: ' + error);
                        alert('An error occurred while moving the section up.');
                    }
                });
            });
    
            // Listen for the down arrow button click event
            $('.arrow-button.down').on('click', function() {
                // Get the section ID from the data-id attribute
                var sectionId = $(this).data('id');
    
                // Send AJAX request to move the section down
                $.ajax({
                    url: '/user/section/order-down/' + sectionId, // The route URL
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // CSRF token for security
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();
                        } else {
                            alert('Failed to move the section down.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error moving section down: ' + error);
                        alert('An error occurred while moving the section down.');
                    }
                });
            });
        });
    </script>    
  </x-user-layout>
  