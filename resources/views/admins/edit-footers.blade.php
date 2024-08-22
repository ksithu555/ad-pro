<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                  <h4 class="text-uppercase mt-0">フッター修正</h4>
                  <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.footer') }}">
                        <i class="fa-icon-plus-square"></i> Add
                    </a>
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
                          <th>名前</th>
                          <th>URL</th>
                          <th>アクション</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($footers as $key => $footer)
                        <tr>
                          <td>
                            {{ $ttl + 1 - ($footers->firstItem() + $key) }}
                          </td>
                          <td>
                            {{ $footer->type }}
                          </td>
                          @if ($footer->type == 'text' || $footer->type == 'contact' || 
                          $footer->type == 'copyRight' || $footer->type == 'logo')
                          <td colspan="2">
                            {{ $footer->text }}
                          </td>
                          @else
                          <td>
                            {{ $footer->name }}
                          </td>
                          <td>
                            {{ $footer->url }}
                          </td>
                          @endif
                          <td>
                            <a href="{{ route('admin.edit.footer', $footer->id) }}">
                              <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                            </a>
                            @if (!($footer->type == 'text' || $footer->type == 'contact' || 
                            $footer->type == 'copyRight' || $footer->type == 'logo'))
                            <div class="tr-modal-popup">
                              <a href="#modal-popup-{{ $footer->id }}" data-effect="mfp-newspaper">
                                <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                              </a>
                            </div>
                            @endif
                          </td>
                        </tr>
                        <!-- Modal Popup Message Box -->
                        <div id="modal-popup-{{ $footer->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                          <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">フッター削除</span>
                          <p class="mb-20">フッターを削除してもよろしいですか?</p>
                            <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.footer', $footer->id) }}">Yes</a>
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