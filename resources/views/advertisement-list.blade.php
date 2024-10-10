<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/title-bg/top-advertisement-bg.jpg') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>広告一覧</h1>
                    <h4 class="text-uppercase mt-30">Advertisement List</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->
    <!--== Page Title Start ==-->
    <section class="default-bg pt-20 pb-20">
        <div class="container">
          <div class="row white-color">
              <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
                   <div class="v-align-middle text-left text-xs-center breadcrumb">
                        <!-- Breadcrumb Start -->
                        <ul class="text-xs-center white-color">
                            <li>Home</li>
                            <li>Advertisement List</li>
                        </ul>
                        <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-16px line-height-26 mt-0">広告一覧</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Portfolio Start ==-->
    <section class="white-bg dark-block">
        <div class="container">
            <div class="row">
              <div class="col-sm-8 section-heading">
                  <form id="search-form" action="{{ route('guest.advertisement.list') }}" method="GET">
                      <div class="search-box">
                          <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                          <button type="submit"><i class="fa fa-search"></i></button>
                      </div>
                  </form>
              </div>
            </div>
            <div class="row mt-25">
                <div class="col-md-12">
                    <div id="portfolio-gallery" class="cbp">
                        @foreach ($advertisements as $advertisement)
                        <div class="cbp-item col-md-4 col-sm-6 with-spacing text-center">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('assets/images/all/' . $advertisement->main_image) }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap dark">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{ route('guest.one.page.advertisement', $advertisement->param_name) }}" 
                                                class="cbp-l-caption-buttonLeft" rel="nofollow" target="_blank">
                                                <i class="ion-android-arrow-forward"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title dark-color font-500 text-uppercase">{{ $advertisement->name }}</div>
                            <div class="cbp-l-grid-projects-desc default-color font-14px">
                                <span class="company-name" style="font-weight: bold;">
                                    <i class="fa fa-building"></i> {{ $advertisement->user->company_name }}
                                </span>
                                <span class="date" style="color: #999; margin-left: 10px;">
                                    <i class="fa fa-calendar"></i> {{ $advertisement->created_at->format('Y-m-d') }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @if ($advertisements->isEmpty())
                <h1 class="mt-20 mb-20 text-center">広告がありません</h1>
                @endif
            </div>
            @include('components.pagination')
        </div>
    </section>

    <!--== Portfolio End ==-->
</x-guest-layout>