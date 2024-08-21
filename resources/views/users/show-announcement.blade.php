<x-user-layout>
  <!--== Third Fourth / One Fourth Columns Start ==-->
  <section class="white-bg">
    <div class="container">
        <div class="row mt-50">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="row">
                    <div class="col-md-5">
                        <img id="image-preview" src="{{ asset('assets/images/all/' . $announcement->image) }}" alt="Image Preview">
                    </div>
                    <div class="col-md-7">
                        <h5 style="margin: 0 0 20px 0;"><span class="default-color">{{ $announcement->user->company_name }}</span></h5>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in erat a nisi auctor dictum at vel magna. Praesent enim neque condimentum nec tincidunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div style="padding: 0 30px 0 30px;" class="row lighten-grey-bg">
                    <div class="col-md-12">
                        <h4 style="margin: 0 0 20px 0;">{{ $announcement->title }}</h4>
                        <ul class="remove-padding list-style-04">
                            <li><i class="icon-layers default-color"></i>
                                <span style="background-color: aquamarine;">{{ $announcement->type }}</span>
                            </li>
                            <li><i class=" icon-alarmclock default-color"></i>
                                <span>{{ $announcement->date_time }}</span>
                            </li>
                        </ul>
                        <p>{!! nl2br($announcement->description) !!}</p>
                    </div>
                </div>
                <div class="row lighten-grey-bg">
                    <div class="line-horizontal grey-bg width-100-percent"></div>
                    <div class="col-md-4 col-md-offset-4 text-center align-items-center">
                      <div class="wow fadeInRight counter-type-2 relative" data-wow-delay="0.1s">
                       <i class="icon-profile-male default-color font-50px mt-10"></i>
                        <h3 class="display-block mt-0 mb-0"><span class="counter font-600 default-color">352</span></h3>
                        <h6 class="text-uppercase mt-0">members joined</h6>
                      </div>
                    </div>
                </div>
                {{-- <div class="row lighten-grey-bg">
                    <div class="line-horizontal grey-bg width-100-percent"></div>
                    <div class="col-md-12 text-center">
                      <div class="countdown-container mt-0 mb-0">
                        <ul class="countdown">
                          <li>
                            <span class="days default-color font-30px font-400">28</span>
                            <p class="dark-color text-uppercase">days</p>
                          </li>
                          <li>
                            <span class="hours default-color font-30px font-400">11</span>
                            <p class="dark-color text-uppercase">hours </p>
                          </li>
                          <li>
                            <span class="minutes default-color font-30px font-400">31</span>
                            <p class="dark-color text-uppercase">minutes</p>
                          </li>
                          <li>
                            <span class="seconds default-color font-30px font-400">03</span>
                            <p class="dark-color text-uppercase">seconds</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div> --}}
                <div class="row lighten-grey-bg">
                    <div class="line-horizontal grey-bg width-100-percent"></div>
                    <div class="col-md-4 col-md-offset-4">
                      <div class="text-center">
                        <a class="btn btn-lg btn-light btn-circle margin-left-auto margin-right-auto display-table-sm mt-10 mb-10">
                            このビズ公示を申し込む
                        </a>
                      </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
  </section>
  <!--== Third Fourth / One Fourth Columns End ==-->
</x-user-layout>