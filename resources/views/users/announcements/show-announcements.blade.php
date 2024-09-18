<x-user-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 section-heading">
              <form action="{{ route('user.show.announcements') }}" method="GET">
                  <div class="search-box">
                      <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </div>
              </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <x-message-box></x-message-box>
          </div>
          <div class="col-md-2">
            <div class="text-right">
                <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                    href="{{ route('user.add.announcement') }}">
                    <i class="fa-icon-plus-circle"></i> 情報広場
                </a>
            </div>
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
                    <th style="min-width: 110px;">種類</th>
                    <th style="min-width: 110px;">タイトル</th>
                    <th>内容</th>
                    <th style="min-width: 110px;">画像</th>
                    <th style="min-width: 110px;">掲載開始日</th>
                    <th style="min-width: 110px;">掲載終了日</th>
                    <th style="min-width: 110px;">参加者</th>
                    <th style="min-width: 110px;">アクション</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($announcements as $key => $announcement)
                  <tr>
                    <td>
                      {{ $ttl + 1 - ($announcements->firstItem() + $key) }}
                    </td>
                    <td style="min-width: 110px;">
                      {{ $announcement->created_at->format('Y-m-d') }}
                    </td>
                    <td>
                      {{ $announcement->type }}
                    </td>
                    <td>
                      {!! nl2br($announcement->title) !!}
                    </td>
                    <td>
                      {!! nl2br(Str::limit($announcement->description, 150, '...')) !!}
                    </td>
                    <td style="min-width: 110px;">
                      <img src="{{ asset('assets/images/all/' . $announcement->image ) }}" alt=""> 
                    </td>
                    <td style="min-width: 110px;">
                      {{ $announcement->start_at}}
                    </td>
                    <td style="min-width: 110px;">
                      {{ $announcement->end_at}}
                    </td>
                    <td>
                      <a href="{{ route('user.show.announcement.participants', $announcement->id) }}">
                        <i class="ion-android-person" style="font-size: 1.5em;"></i>
                      </a>
                    </td>
                    <td style="min-width: 110px;">
                      <div>
                        <a href="{{ route('user.show.announcement', $announcement->id) }}">
                          <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                        </a>
                      </div>
                      <div>
                        <a href="{{ route('user.edit.announcement', $announcement->id) }}">
                          <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                        </a>
                      </div>
                      <div class="tr-modal-popup">
                        <a href="#modal-popup-{{ $announcement->id }}" data-effect="mfp-newspaper">
                          <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <!-- Modal Popup Message Box -->
                  <div id="modal-popup-{{ $announcement->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">情報広場削除</span>
                    <p class="mb-20">情報広場を削除してもよろしいですか?</p>
                      <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.delete.announcement', $announcement->id) }}">はい</a>
                      <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                  </div>
                  @endforeach
                </tbody>
              </table>
            </div>
            @include('components.pagination')
          </div>
          @if ($announcements->isEmpty())
          <h1 class="mt-120 mb-70 text-center">情報はありません</h1>
          @endif
        </div>
      </div>
    </section>
    <!--== Products End ==-->
  </x-user-layout>
  