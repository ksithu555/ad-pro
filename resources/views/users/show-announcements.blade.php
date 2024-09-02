<x-user-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                    href="{{ route('user.add.announcement') }}">
                    <i class="fa-icon-plus-circle"></i> ビズ公示登録
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
                  @foreach ($announcements as $key => $announcement)
                  <tr>
                    <td>
                      {{ $ttl + 1 - ($announcements->firstItem() + $key) }}
                    </td>
                    <td>
                      {{ $announcement->type }}
                    </td>
                    <td>
                      {!! nl2br($announcement->title) !!}
                    </td>
                    <td>
                      {!! nl2br($announcement->description) !!}
                    </td>
                    <td>
                      <img src="{{ asset('assets/images/all/' . $announcement->image ) }}" alt=""> 
                    </td>
                    <td>
                      {{ $announcement->date_time}}
                    </td>
                    <td>
                      {!! nl2br($announcement->location) !!}
                    </td>
                    <td>
                      <a href="{{ route('user.edit.announcement', $announcement->id) }}">
                        <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                      </a>
                      <div class="tr-modal-popup">
                        <a href="#modal-popup-{{ $announcement->id }}" data-effect="mfp-newspaper">
                          <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <!-- Modal Popup Message Box -->
                  <div id="modal-popup-{{ $announcement->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ビズ公示削除</span>
                    <p class="mb-20">ビズ公示を削除してもよろしいですか?</p>
                      <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.delete.announcement', $announcement->id) }}">Yes</a>
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
  </x-user-layout>
  