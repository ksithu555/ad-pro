<x-admin-layout>
    <!--== Products Start ==-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                    href="{{ route('admin.add.news') }}">
                    <i class="fa-icon-plus-circle"></i> 新着情報登録
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
                    <th><strong>#</strong></th>
                    <th><strong>タイトル</strong></th>
                    <th><strong>体</strong></th>
                    <th><strong>画像</strong></th>
                    <th><strong>著者名</strong></th>
                    <th><strong>著者画像</strong></th>
                    <th><strong>アクション</strong></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($news as $key => $new)
                  <tr>
                    <td>
                      {{ $ttl + 1 - ($news->firstItem() + $key) }}
                    </td>
                    <td>
                      {{ nl2br($new->title) }}
                    </td>
                    <td>
                      {!! nl2br($new->body) !!}
                    </td>
                    <td>
                      <img src="{{ asset('assets/images/all/' . $new->image ) }}" alt=""> 
                    </td>
                    <td>
                      {{ nl2br($new->author_name) }}
                    </td>
                    <td>
                      <img src="{{ asset('assets/images/all/' . $new->author_image ) }}" alt=""> 
                    </td>
                    <td>
                      <a href="{{ route('admin.edit.news', $new->id) }}">
                        <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                      </a>
                      <div class="tr-modal-popup">
                        <a href="#modal-popup-{{ $new->id }}" data-effect="mfp-newspaper">
                          <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <!-- Modal Popup Message Box -->
                  <div id="modal-popup-{{ $new->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">新着情報削除</span>
                    <p class="mb-20">新着情報を削除してもよろしいですか?</p>
                      <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.news', $new->id) }}">Yes</a>
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
  </x-admin-layout>
  