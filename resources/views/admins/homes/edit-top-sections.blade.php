<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                  <h4 class="text-uppercase mt-0">セクション修正</h4>
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
                          <th>タイプ</th>
                          <th>タイトル</th>
                          <th>内容</th>
                          <th>順番</th>
                          <th>アクション</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sections as $key => $section)
                        <tr>
                          <td>
                            {{ $ttl + 1 - ($sections->firstItem() + $key) }}
                          </td>
                          <td>
                            {{ $section->type }}
                          </td>
                          <td>
                            {{ $section->title }}
                          </td>
                          <td>
                            {!! nl2br($section->body) !!}
                          </td>
                          <td>
                              <div class="text-align-center-arrow">
                                  <button class="arrow-button up" aria-label="Move Up" data-id="{{ $section->id }}">&#9650;</button>
                                  <button class="arrow-button down" aria-label="Move Down" data-id="{{ $section->id }}" style="margin-top: 5px;">&#9660;</button>
                              </div>                                  
                          </td>
                          <td>
                            <a href="{{ route('admin.edit.top.section', $section->id) }}">
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
                            <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.top.section', $section->id) }}">Yes</a>
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
    <!--== Contact Form Style 01 End ==-->
    {{-- Order --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
      $(document).ready(function() {
          // Listen for the up arrow button click event
          $('.arrow-button.up').on('click', function() {
              // Get the section ID from the data-id attribute
              var sectionId = $(this).data('id');
  
              // Send AJAX request to move the section up
              $.ajax({
                  url: '/admin/top-section/order-up/' + sectionId, // The route URL
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
                  url: '/admin/top-section/order-down/' + sectionId, // The route URL
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
</x-admin-layout>