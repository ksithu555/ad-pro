<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                  <h4 class="text-uppercase mt-0">ヘッダ修正</h4>
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
                          <th>タイトル</th>
                          <th>画像</th>
                          <th>アクション</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($headers as $key => $header)
                        <tr>
                          <td>
                            {{ $ttl + 1 - ($headers->firstItem() + $key) }}
                          </td>
                          <td>
                            {{ nl2br($header->title) }}
                          </td>
                          <td>
                            <img src="{{ asset('assets/images/all/' . $header->image ) }}" alt=""> 
                          </td>
                          <td>
                            <a href="{{ route('admin.edit.header', $header->id) }}">
                              <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                            </a>
                            @if ($key != 0 && $key != 1)
                            <div class="tr-modal-popup">
                              <a href="#modal-popup-{{ $header->id }}" data-effect="mfp-newspaper">
                                <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                              </a>
                            </div>
                            @endif
                          </td>
                        </tr>
                        <!-- Modal Popup Message Box -->
                        <div id="modal-popup-{{ $header->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                          <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ヘッダ削除</span>
                          <p class="mb-20">ヘッダを削除してもよろしいですか?</p>
                            <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.header', $header->id) }}">Yes</a>
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
</x-admin-layout>