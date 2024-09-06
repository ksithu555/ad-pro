<x-user-layout>
  <!--== Third Fourth / One Fourth Columns Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
      <div class="row">
        <x-message-box></x-message-box>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 col-sm-12 sm-mb-30">
          <div class="row">
              <div class="col-md-12">
                  <img id="image-preview" src="{{ asset('assets/images/all/' . $announcement->image) }}" alt="Image Preview" class="img-fluid rounded mb-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%;">
              </div>
          </div>
          <div class="row mt-10">
              <div class="col-md-12">
                  <h5 class="mt-10" style="margin: 0;">
                      <span class="text-primary font-weight-bold">
                          <i class="fa fa-building"></i> {{ $announcement->user->company_name }}
                      </span>
                  </h5>
              </div>
          </div>
          <div class="row mt-20">
              <div class="col-md-12">
                  <p style="color: #6c757d; line-height: 1.6;">{!! nl2br($announcement->user->company->overview) !!}</p>
              </div>
          </div>
        </div>      
        <div class="col-md-8 col-sm-12 sm-mb-30">
          <div class="row" style="padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="col-md-12">
              <h4 class="font-weight-bold text-secondary mb-20">{{ $announcement->title }}</h4>
              <hr class="dark-bg" style="background-color: #BF0731;">
              <ul class="list-unstyled mb-20">
                  <li class="mb-2">
                      <i class="fa fa-tag"></i>
                      <span class="badge badge-info">{{ $announcement->type }}</span>
                  </li>
                  <li>
                    <i class="fa fa-calendar"></i> 
                      <span class="badge badge-info">掲載期間</span>
                      <span class="text-muted">{{ \Carbon\Carbon::parse($announcement->start_at)->format('Y-m-d') }} 
                        〜 {{ \Carbon\Carbon::parse($announcement->end_at)->format('Y-m-d') }}</span>
                  </li>
              </ul>
              <p style="color: #333; line-height: 1.6;">{!! nl2br($announcement->description) !!}</p>
            </div>
          </div>
          <div class="row mt-20" style="padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="col-md-4 col-md-offset-4 text-center">
              <div class="wow fadeInRight counter-type-2 relative" data-wow-delay="0.1s">
                  <i class="icon-profile-male text-primary font-50px mt-10"></i>
                  <h3 class="font-weight-bold text-primary mt-0 mb-0">
                    <span class="counter">{{ $announcement->announcementParticipants->count() }}</span>
                  </h3>
                  <h6 class="text-uppercase text-muted mt-0" style="font-size: 0.85em;">メンバーが参加しました</h6>
              </div>
            </div>
          </div>
          @if ($announcement->created_by != Auth::user()->id)
          @php
              $check = $announcement->announcementParticipants->where('announcement_id', $announcement->id)
              ->where('user_id', Auth::user()->id)->first();
              if (!$check) {
                $btnName = 'この情報広場を申し込む';
                $btnColor = '#BF0731';
                $popUp = '#modal-popup';
              } elseif ($check->status == 0) {
                $btnName = '申し込み中';
                $btnColor = '#FFC107';
                $popUp = '';
              } elseif ($check->status == 1) {
                $btnName = '承認済み';
                $btnColor = '#28A745';
                $popUp = '';
              } elseif ($check->status == 2) {
                $btnName = '拒否されました';
                $btnColor = '#DC3545';
                $popUp = '#reason-modal-popup';
              }
          @endphp
          <div class="row mt-20" style="padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <div class="col-md-4 col-md-offset-4 tr-modal-popup text-center">
                  <a href="{{ $popUp }}" data-effect="mfp-newspaper" class="btn btn-lg btn-primary btn-circle mt-10 mb-10"
                    style="background-color: {{ $btnColor }}; color: #fff; padding: 10px 30px;">
                      {{ $btnName }}
                  </a>
              </div>
          </div>
          @endif
        </div>
      </div>    
    </div>
  </section>
  <!--== Third Fourth / One Fourth Columns End ==-->

  <!-- Modal Popup Message Box -->
  <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">情報広場参加</span>
    <p class="mb-20">情報広場を参加してもよろしいですか?</p>
      <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.request.announcement', $announcement->id) }}">Yes</a>
      <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
  </div>

  @if ($announcement->created_by != Auth::user()->id && $check)
  <div id="reason-modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">拒否理由</span>
    <p class="mb-20">{!! $check->reason !!}</p>
    <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">Close</a>
  </div>
  @endif
</x-user-layout>