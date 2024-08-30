<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/all/header-ad-list.webp') }});">
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
    <section class="default-bg pt-40 pb-40">
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
                      <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">広告一覧</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Portfolio Start ==-->
    <section class="white-bg dark-block">
        <div class="container">
            <div class="row mt-25">
                <div class="col-md-12">
                    <div id="portfolio-gallery" class="cbp">
                        @foreach ($advertisements as $advertisement)
                        <div class="cbp-item col-md-4 col-sm-6 with-spacing text-center">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    @php
                                        $image = $advertisement->logo_color;
                                        if ($advertisement->advertisementSections->isNotEmpty()) {
                                            foreach ($advertisement->advertisementSections as $section) {
                                                if ($section->advertisementHeaderBlocks->isNotEmpty()) {
                                                    $header = $section->advertisementHeaderBlocks->first();
                                                    $image = $header->image;
                                                    break; // Stop after finding the first valid header block
                                                }
                                            }
                                        }
                                    @endphp
                                    <img src="{{ asset('assets/images/all/' . $image) }}" alt="">
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
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--== Portfolio End ==-->
</x-guest-layout>