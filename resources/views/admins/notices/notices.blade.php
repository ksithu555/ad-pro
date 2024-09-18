<x-admin-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 section-heading">
                <form action="{{ route('admin.get.notices') }}" method="GET">
                    <div class="search-box">
                        <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
          </div>   
          <div class="row">
            <div class="col-md-12">
              <div class="text-right">
                  <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                      href="{{ route('admin.add.notice') }}">
                      <i class="fa-icon-plus-square"></i> お知らせ登録
                  </a>
              </div>
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
                      <th>タイトル</th>
                      <th>内容</th>
                      <th>アクション</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($notices as $key => $notice)
                    <tr>
                      <td>
                        {{ $ttl + 1 - ($notices->firstItem() + $key) }}
                      </td>
                      <td style="min-width: 110px;">
                          {{ $notice->created_at->format('Y-m-d') }}
                      </td>
                      <td>
                        {{ nl2br($notice->title) }}
                      </td>
                      <td>
                        {!! nl2br($notice->body) !!}
                      </td>
                      <td>
                        <a href="{{ route('admin.edit.notice', $notice->id) }}">
                          <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                        </a>
                        <div class="tr-modal-popup">
                          <a href="#modal-popup-{{ $notice->id }}" data-effect="mfp-newspaper">
                            <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- Modal Popup Message Box -->
                    <div id="modal-popup-{{ $notice->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                      <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">お知らせ削除</span>
                      <p class="mb-20">お知らせを削除してもよろしいですか?</p>
                        <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.notice', $notice->id) }}">はい</a>
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
</x-admin-layout>