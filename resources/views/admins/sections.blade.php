<x-admin-layout>
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
              href="{{ route('admin.add.section') }}">
                <i class="fa-icon-plus-square"></i> Section
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
                            <th>名前</th>
                            <th>注記</th>
                            <th>状態</th>
                            <th style="min-width: 110px;">プレビュー</th>
                            <th style="min-width: 110px;">アクション</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $key => $section)
                            <tr>
                                <td>
                                    {{ $ttl + 1 - ($sections->firstItem() + $key) }}
                                </td>
                                <td>
                                    {{ $section->name }}
                                </td>
                                <td>
                                    {!! nl2br($section->note) !!}
                                </td>
                                <td style="min-width: 110px;">
                                    <label class="toggle-switch">
                                        <input type="checkbox" data-id="{{ $section->id }}" class="status-toggle" {{ $section->status == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>   
                                </td>                                
                                <td style="min-width: 110px;">
                                    <a href="{{ route('admin.preview.section', $section->id) }}" target="_blank">
                                      <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.edit.section', $section->id) }}">
                                      <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                                    </a>
                                    <div class="tr-modal-popup">
                                      <a href="#modal-popup-{{ $section->id }}" data-effect="mfp-newspaper">
                                        <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                                      </a>
                                    </div>
                                  </td>
                            </tr>

                            <!-- Modal Popup Message Box -->
                            <div id="modal-popup-{{ $section->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">セクション削除</span>
                                <p class="mb-20">セクションを削除してもよろしいですか?</p>
                                <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.section', $section->id) }}">Yes</a>
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
                    url: '/admin/update/section-status', // The route URL
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
  