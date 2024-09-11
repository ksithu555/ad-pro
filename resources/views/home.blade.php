<x-guest-layout>
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
    <!--== Boxed Icons Style 04 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">こんなお悩みありませんか？</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-laptop font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">WEBの広告</h4>
                            <p class="font-400">ウェブの広告ページを作成したいですが、専門知識がなく、他人に依頼するしかない！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-tools-2 font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">良質な画像</h4>
                            <p class="font-400">ホームページやチラシ作成に利用できる良質な画像がなかなか見つからない！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-anchor font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">営業のツール</h4>
                            <p class="font-400">パートナー会社を簡単に開拓できる無料の営業ツールがなかなか見つからない！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-beaker font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">情報の発信</h4>
                            <p class="font-400">自社商品とサービスを会員に向け発信できる無料のサイトがなかなか見つからない！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Boxed Icons Style 04 End ==-->

    <!--== Service Boxes Style 01 Start ==-->
    <section class="grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">ADPROでこんなことができます！</h4>
                </div>
            </div>
            <div class="row mt-0 service-box-style-01">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="icofont icofont-magic font-40px default-color"></i>
                        <h4 class="mt-0 font-600">広告作成機能の利用</h4>
                        <p class="font-400 mt-20">ソフトウェア知識が全くなくても、簡単に広告ページを作成しウェブに公開できます！</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="icofont icofont-globe-alt font-40px default-color"></i>
                        <h4 class="mt-0 font-600">無料商談機能の利用</h4>
                        <p class="font-400 mt-20">無料の商談メッセージ機能を無制限で利用できるので、協業会社を簡単に見つけます！</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="icofont icofont-headphone-alt font-40px default-color"></i>
                        <h4 class="mt-0 font-600">無料情報広場の利用</h4>
                        <p class="font-400 mt-20">無料の情報広場機能を利用し自社商品とサービスをADPRO会員に向け発信できます！</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Service Boxes Style 01 End ==-->

    <!--== Testimonails Style 03 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">利用者の声</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="slick testimonial">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--== Slide ==-->
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <img class="img-responsive img-circle text-center" src="{{ asset('assets/images/clients/com01.png') }}" alt="avatar-1"/>
                                <p class="mt-20 line-height-26 font-14px">ソフトウェア知識が全くなくても、簡単に 広告ページを作成しウェブに公開しました！</p>
                                <h5 class="font-700 mb-0">A社</h5>
                                <span class="default-color font-14px">SEO Manager</span>
                                <ul class="social-default-no-border mt-20 mb-20">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="https://x.com/" target="_blank" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--== Slide ==-->
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <img class="img-responsive img-circle text-center" src="{{ asset('assets/images/clients/com02.png') }}" alt="avatar-2"/>
                                <p class="mt-20 line-height-26 font-14px">無料の商談メッセージ機能を利用して愛想が いい協業会社を複数社見つけました！</p>
                                <h5 class="font-700 mb-0">B社                                </h5>
                                <span class="default-color font-14px">Head of Product</span>
                                <ul class="social-default-no-border mt-20 mb-20">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="https://x.com/" target="_blank" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--== Slide ==-->
                        <div class="testimonial-item">
                            <div class="testimonial-content"> <img class="img-responsive img-circle" src="{{ asset('assets/images/clients/com03.png') }}" alt="avatar-1"/>
                                <p class="mt-20 line-height-26 font-14px">無料の情報広場機能を利用し弊社商品とサービスを情報を発信し注目を集めました！</p>
                                <h5 class="font-700 mb-0">C社</h5>
                                <span class="default-color font-14px">CEO / Founder</span>
                                <ul class="social-default-no-border mt-20 mb-20">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="https://x.com/" target="_blank" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonails Style 03 End ==-->

    <!--== Accordion Style 01 Start ==-->
    <section class="grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">選ばれる理由</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-8 col-sm-12 centerize-col">
                    <div class="panel-group accordion-style-01" id="accordion-style">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question1" aria-expanded="false" class="collapsed">
                                    <div class="panel-title text-uppercase">
                                        完全無料のマッチング機能のご利用<span class="pull-right"><i class="ion-android-remove"></i></span> 
                                    </div>
                                </a> 
                            </div>
                            <div id="question1" class="panel-collapse collapse in" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    会員同士はメッセンジャー機能を完全無料でご利用し自由にやり取りができます。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question2" aria-expanded="false" class="collapsed">
                                    <div class="panel-title text-uppercase">
                                        完全無料の情報広場機能のご利用<span class="pull-right"><i class="ion-android-add"></i></span>
                                    </div>
                                </a> 
                            </div>
                            <div id="question2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    セミナー、募集、販売、購入などの案件情報掲載を完全無料でご利用いただけます。<br>
                                    買い手、売り手とも完全無料です。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question3" aria-expanded="false" class="collapsed">
                                <div class="panel-title text-uppercase">
                                    自ら御社広告ページの制作が可能<span class="pull-right"><i class="ion-android-add"></i></span>
                                </div>
                                </a>
                            </div>
                            <div id="question3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    IT知識が全くない方でも簡単に広告ページの制作と配布が可能です。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question4" aria-expanded="false" class="collapsed">
                                <div class="panel-title text-uppercase">
                                    有料サービスの適正価格の設定<span class="pull-right"><i class="ion-android-add"></i></span>
                                </div>
                                </a> 
                            </div>
                            <div id="question4" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    一部有料サービスの価額は業界最低水準の適正価額で設定しています。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Accordion Style 01 End ==--> 

    <!--== Portfolio Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">最新の広告</h4>
                </div>
            </div>
            <div class="row mt-0">
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
            </div>
        </div>
    </section>
    <!--== Portfolio End ==-->
    <!--== Sections End ==-->

    <!--== Call to Actions Style 03 Start ==-->
  <section class="default-bg">
    <div class="container">
        <div class="row mt-30">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 centerize-col text-center white-color">
              <h5 class="text-uppercase font-600 mb-30 font-40px">IT開発知識が全くなくても広告ページを簡単に作成しウェブに公開できます！</h5>
              <a class="btn btn-md btn-light-outline btn-circle" href="{{ route('user.show.login') }}">さあ、今すぐ始めましょう！</a>
            </div>
        </div>
    </div>
  </section>
  <!--== Call to Actions Style 03 End ==-->
</x-guest-layout>