<x-guest-layout>
    <style>
        .testimonial-item .testimonial-content {
            padding: 0 !important;
        }
    </style>
    <!--== Top Header Start ==-->
    <section class="pt-0 pb-0 dark-block">
        <div class="service-slider-2 slick height-650px" style="margin-bottom: 0px;">
            @foreach ($headers as $header)
            <div class="slide">
                <div class="slide-img height-650px" style="background:url({{ asset('assets/images/all/' . $header->image) }}) center center / cover scroll no-repeat;"></div>
                <div class="hero-text-wrap height-650px">
                    <div class="hero-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="white-color default-bg all-padding-50">
                                        <h3 class="font-700">{{ $header->title }}</h3>
                                        {{-- <p class="mt-30"><a class="btn btn-dark btn-lg btn-default">Buy Template</a> </p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!--== Top Header End ==-->
    
    <!--== Sections Start ==--> 
    @php
        $bgKey = 0;
    @endphp
    @foreach ($sections as $section)
        @php
            if ($bgKey % 2 == 0) {
                $sectionBg = 'white-bg';
            } else {
                $sectionBg = 'grey-bg';
            }
            $bgKey++;
        @endphp
        @if ($section->type == 'Box01')
        {{-- Box 01 Start --}}
        <section class="{{ $sectionBg }} pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 section-heading">
                        <h2 class="font-700">{{ $section->title }}</h2>
                        <hr class="dark-bg center_line bold-line">
                        <h4>{!! nl2br($section->body) !!}</h4>
                    </div>
                </div>
                <div class="row mt-50">
                    @foreach ($section->topBoxBlocks as $topBoxBlock)
                    @php
                        $count = $section->topBoxBlocks->count();
                        if ($count == 1) {
                            $col = 12;
                        } elseif ($count == 2) {
                            $col = 6;
                        } else {
                            $col = 4;
                        }
                    @endphp
                    <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                        <div class="feature-box text-center mb-50 feature-box-rounded wow fadeInUp center-feature" data-wow-delay="0.1s">
                            <span class="font-100px default-color font-700">
                                <span class="dark-color">
                                    {{ substr($topBoxBlock->icon, 0, 1) }}
                                </span>
                                {{ substr($topBoxBlock->icon, 1) }}
                            </span>
                            <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                            <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Box 01 End --}}
        @elseif ($section->type == 'Box02')
        {{-- Box 02 Start --}}
        <section class="{{ $sectionBg }} pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 section-heading">
                        <h2 class="font-700">{{ $section->title }}</h2>
                        <hr class="dark-bg center_line bold-line">
                        <h4>{!! nl2br($section->body) !!}</h4>
                    </div>
                </div>
                <div class="row mt-50 service-box-style-01">
                    @foreach ($section->topBoxBlocks as $topBoxBlock)
                    @php
                        $count = $section->topBoxBlocks->count();
                        if ($count == 1) {
                            $col = 12;
                        } elseif ($count == 2) {
                            $col = 6;
                        } else {
                            $col = 4;
                        }
                    @endphp
                    <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                      <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="{{ $topBoxBlock->icon }} font-40px default-color"></i>
                        <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                        <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Box 02 End --}}
        @elseif ($section->type == 'Box03')
        {{-- Box 03 Start --}}
        <section class="{{ $sectionBg }} pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 section-heading">
                        <h2 class="font-700">{{ $section->title }}</h2>
                        <hr class="dark-bg center_line bold-line">
                        <h4>{!! nl2br($section->body) !!}</h4>
                    </div>
                </div>
                <div class="row mt-50 service-box-style-03">
                    @foreach ($section->topBoxBlocks as $topBoxBlock)
                    @php
                        $count = $section->topBoxBlocks->count();
                        if ($count == 1) {
                            $col = 12;
                        } elseif ($count == 2) {
                            $col = 6;
                        } else {
                            $col = 4;
                        }
                    @endphp
                    <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                        <div class="flipper">
                            <div class="text-center mb-50 main-box">
                              <div class="box-front height-300px white-bg">
                                <div class="content-wrap">
                                  <i class="{{ $topBoxBlock->icon }} font-40px default-color"></i>
                                  <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                                  <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                                </div>
                              </div>
                              <div class="box-back height-300px default-bg">
                                <div class="content-wrap white-color">
                                  <i class="{{ $topBoxBlock->icon }} font-40px"></i>
                                  <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                                  <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Box 03 End --}}
        @endif
    @endforeach
    <!--== Sections End ==-->

    <!--== Call to Actions Style 03 Start ==-->
  <section class="default-bg">
    <div class="container">
        <div class="row mt-30">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 centerize-col text-center white-color">
              <h5 class="text-uppercase font-600 mb-30 font-40px">An Awesome Template For Your Advert.</h5>
              <a class="btn btn-md btn-light-outline btn-circle">Start from Now</a>
            </div>
        </div>
    </div>
  </section>
  <!--== Call to Actions Style 03 End ==-->

</x-guest-layout>