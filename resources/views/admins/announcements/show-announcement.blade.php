<x-admin-layout>
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
                    <p style="color: #6c757d; line-height: 1.6;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in erat a nisi auctor dictum at vel magna. Praesent enim neque condimentum nec tincidunt.</p>
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
                        <span class="text-muted">{{ $announcement->start_at }} 〜 {{ $announcement->end_at }}</span>
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
          </div>
        </div>    
      </div>
    </section>
    <!--== Third Fourth / One Fourth Columns End ==-->
  </x-admin-layout>