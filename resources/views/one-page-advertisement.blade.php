<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="ADPRO is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="dark header style, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ADPRO - Creative Agency, Business Multi-purpose template</title>
<link rel="shortcut icon" href="{{ asset('assets/images/all/adpro_slogo.png') }}">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/fonts/font-awesome/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/fonts/font-awesome/css/font-awesome.min.css') }}">
{{-- Date Time Picker --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>

<!--== Loader Start ==-->
<div id="loader-overlay">
  <div class="loader">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
      <rect x="20" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="30" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.2s" dur="0.6s" repeatCount="indefinite" />
      </rect>
      <rect x="40" y="50" width="4" height="10" fill="#BF0731">
        <animateTransform attributeType="xml"
          attributeName="transform" type="translate"
          values="0 0; 0 20; 0 0"
          begin="0.4s" dur="0.6s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">
    @php
        $advertisementSections = $advertisement->advertisementSections->sortBy('order');
    @endphp
    <!--== Header Start ==-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav on no-full">
        <div class="container">
            <!--== Start Header Navigation ==-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
                <div class="logo">
                    <a href="#">
                        <img class="logo logo-display" src="{{ asset('assets/images/all/' . $advertisement->logo_color) }}" alt="">
                        <img class="logo logo-scrolled" src="{{ asset('assets/images/all/' . $advertisement->logo_white) }}" alt="">
                    </a>
                </div>
            </div>
            <!--== End Header Navigation ==-->

            <!--== Collect the nav links, forms, and other content for toggling ==-->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                    @foreach ($advertisementSections as $advertisementSection)
                    @if ($advertisementSection->status == 1)
                    <li>
                        <a class="page-scroll" href="#{{ $advertisementSection->name }}">
                            <span>{{ $advertisementSection->name }}</span>
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <!--== /.navbar-collapse ==-->
        </div>
    </nav>
    <!--== Header End ==-->

    @foreach ($advertisementSections as $advertisementSection)
        @if ($advertisementSection->section->type == 'header' && $advertisementSection->status == 1)
        {{-- Header Hero Start --}}
            @if ($advertisementSection->section->name == 'Header01')
            <!--== Header01 Start ==-->
            <section class="pt-0 pb-0" id="{{ $advertisementSection->name }}">
                @if ($advertisementSection->advertisementHeaderBlocks[0]->status == 1)
                <div class="parallax-overlay z-index-0"></div>
                <div class="container relative view-height-100vh">
                    <div class="simple-content-slider text-center">
                        <div class="simple-content-slider-text">
                            <div class="simple-content-text-inner">
                                <div class="row">
                                    <div class="col-md-10 centerize-col">
                                        <div class="white-color text-center">
                                            <span class="font-60px font-700 play-font wow fadeInUp font-italic" 
                                                data-wow-delay="0.1s">
                                                {!! nl2br($advertisementSection->advertisementHeaderBlocks[0]->body) !!}
                                            </span>
                                            <h1 class="white-color font-700 font-120px line-height-120 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60 wow fadeInUp" 
                                                data-wow-delay="0.2s">
                                                {{ $advertisementSection->advertisementHeaderBlocks[0]->title }}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-height-100vh absolute z-index-minus2 top-0 width-100-percent">
                    <div class="view-height-100vh">
                        <div class="slide-img parallax-bg fixed-bg" 
                            data-parallax-bg-image="{{ asset('assets/images/all/' . $advertisementSection->advertisementHeaderBlocks[0]->image) }}" 
                            data-parallax-speed="0.8" data-parallax-direction="up"></div>
                    </div>
                </div>
                @endif
            </section>
            <!--== Header01 End ==-->
            @elseif ($advertisementSection->section->name == 'Header02')
            <!--== Header02 Start ==-->
            <section class="parallax-bg fixed-bg view-height-100vh lg-section"  id="{{ $advertisementSection->name }}"
                data-parallax-bg-image="{{ asset('assets/images/all/header-02.webp') }}" 
                data-parallax-speed="0.5" data-parallax-direction="up">
                @if ($advertisementSection->advertisementHeaderBlocks[0]->status == 1)
                <div class="color-overlay-bg"></div>
                <div class="hero-text-wrap transparent-bg">
                    <div class="hero-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
                                    <div class="all-padding-50 white-color">
                                        <h3 class="roboto-font font-700 line-height-50">{{ $advertisementSection->advertisementHeaderBlocks[0]->title }}</h3>
                                        <h5 class="roboto-font font-300">{!! nl2br($advertisementSection->advertisementHeaderBlocks[0]->body) !!}</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-mobile-wrap">
                                        <img src="{{ asset('assets/images/all/' . $advertisementSection->advertisementHeaderBlocks[0]->image) }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </section>
            <!--== Header02 End ==-->
            @endif

        {{-- Header Hero End --}}
        @elseif ($advertisementSection->section->type == 'list'  && $advertisementSection->status == 1)
        {{-- List Hero Start --}}
            @if ($advertisementSection->section->name == 'List01')
            <!--== List01 Start ==-->
            <section class="pt-0 pb-0 grey-bg" id="{{ $advertisementSection->name }}">
                <div class="container-fluid">
                    @foreach ($advertisementSection->advertisementListBlocks as $key => $advertisementListBlock)
                        @if ($advertisementListBlock->status == 1)
                        @if ($key % 2 == 0)
                        <div class="row row-flex flex-center">
                            <div class="col-md-6 col-sm-12 bg-flex-cover" style="background-image: url({{ asset('assets/images/all/' . $advertisementListBlock->image) }});"></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner spacer text-center">
                                    <h3 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h3>
                                    <hr class="dark-bg center_line bold-line">
                                    <h6 class="mt-30">{!! nl2br($advertisementListBlock->body) !!}</h6>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row row-flex flex-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner spacer text-center">
                                    <h3 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h3>
                                    <hr class="dark-bg center_line bold-line">
                                    <h6 class="mt-30">{!! nl2br($advertisementListBlock->body) !!}</h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 bg-flex-cover" style="background-image: url({{ asset('assets/images/all/' . $advertisementListBlock->image) }});"></div>
                        </div>
                        @endif
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== List01 End ==-->
            @elseif ($advertisementSection->section->name == 'List02')
            <!--== List02 Start ==-->
            <section class="pt-0 pb-0 grey-bg" id="{{ $advertisementSection->name }}">
                <div class="container-fluid">
                    @foreach ($advertisementSection->advertisementListBlocks as $key => $advertisementListBlock)
                        @if ($advertisementListBlock->status == 1)
                        @if ($key % 2 == 0)
                        <div class="row row-flex flex-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner spacer text-center">
                                    <h3 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h3>
                                    <hr class="dark-bg center_line bold-line">
                                    <h6 class="mt-30">{!! nl2br($advertisementListBlock->body) !!}</h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 bg-flex-cover" style="background-image: url({{ asset('assets/images/all/' . $advertisementListBlock->image) }});"></div>
                        </div>
                        @else
                        <div class="row row-flex flex-center">
                            <div class="col-md-6 col-sm-12 bg-flex-cover" style="background-image: url({{ asset('assets/images/all/' . $advertisementListBlock->image) }});"></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner spacer text-center">
                                    <h3 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h3>
                                    <hr class="dark-bg center_line bold-line">
                                    <h6 class="mt-30">{!! nl2br($advertisementListBlock->body) !!}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== List01 End ==-->
            @endif
        {{-- List Hero End --}}
        @elseif ($advertisementSection->section->type == 'box'  && $advertisementSection->status == 1)
        {{-- Box Hero Start --}}
            @if ($advertisementSection->section->name == 'Box01')
            <!--== Box01 Start ==-->
            <section class="white-bg pt-0 pb-0" id="{{ $advertisementSection->name }}">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h2 class="font-700">{{ $advertisementSection->advertisementBoxBlock->title }}</h2>
                            <hr class="dark-bg center_line bold-line">
                            <h4>{{ $advertisementSection->advertisementBoxBlock->body }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        @foreach ($advertisementSection->advertisementBoxBlock->advertisementSubBoxBlocks as $advertisementSubBoxBlock)
                        @php
                            $count = $advertisementSection->advertisementBoxBlock->advertisementSubBoxBlocks->where('status', 1)->count();
                            if ($count == 1) {
                                $col = 12;
                            } elseif ($count == 2) {
                                $col = 6;
                            } else {
                                $col = 4;
                            }
                        @endphp    
                        @if ($advertisementSubBoxBlock->status == 1)
                            <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                                <div class="feature-box text-center mb-50 feature-box-rounded wow fadeInUp center-feature" data-wow-delay="0.1s">
                                    <span class="font-100px default-color font-700">
                                        <span class="dark-color">
                                            {{ substr($advertisementSubBoxBlock->icon, 0, 1) }}
                                        </span>
                                        {{ substr($advertisementSubBoxBlock->icon, 1) }}
                                    </span>
                                    <h4 class="mt-0 font-600">{{ $advertisementSubBoxBlock->title }}</h4>
                                    <p class="font-400">{{ $advertisementSubBoxBlock->body }}</p>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
            <!--== Box01 End ==-->
            @endif
        {{-- Box Hero End --}}
        @elseif ($advertisementSection->section->type == 'footer'  && $advertisementSection->status == 1)
        {{-- Footer Hero Start --}}
            @if ($advertisementSection->section->name == 'Footer01')
            <!--== Footer01 Start ==-->
            <footer class="footer dark-block" id="{{ $advertisementSection->name }}">
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <div class="widget widget-text">
                                    @php
                                        $logo = $advertisementSection->advertisementFooterBlocks->where('type', 'logo')->first();
                                        $logoImage = $logo ? $logo->text : null;
                                    @endphp
                                    @if ($logo && $logo->status == 1)
                                    <div class="logo logo-footer">
                                        <img class="logo logo-display" src="{{ asset('assets/images/all/' . $logoImage) }}" alt="">
                                    </div>
                                    @endif
                                    @php
                                        $text = $advertisementSection->advertisementFooterBlocks->where('type', 'text')->first();
                                        $footerText = $text ? $text->text : null;
                                    @endphp
                                    @if ($text && $text->status == 1)
                                    <p>{{ $footerText }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="widget widget-links">
                                    @php
                                        $usefuls = $advertisementSection->advertisementFooterBlocks->where('type', 'useful');
                                    @endphp
                                    @if ($usefuls->isNotEmpty())
                                    <h5 class="widget-title">Useful Links</h5>
                                    <ul>
                                        @foreach ($usefuls as $usefulLink)
                                        @if ($usefulLink->status == 1)
                                        <li><a href="{{ $usefulLink->url }}">{{ $usefulLink->name }}</a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="widget widget-links">
                                    @php
                                        $contactUs = null;
                                        $contact = $advertisementSection->advertisementFooterBlocks->where('type', 'contact')->first();
                                        if ($contact && $contact->text) {
                                            $contactUs = explode('|', $contact->text);
                                        }
                                    @endphp
                                    @if ($contactUs && $contact->status == 1)
                                    <h5 class="widget-title">Contact Us</h5>
                                    <div class="widget-links">
                                        <ul>
                                            @foreach ($contactUs as $contactDetaiil)
                                            <li>{{ $contactDetaiil }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                @php
                                    $copyRight = $advertisementSection->advertisementFooterBlocks->where('type', 'copyRight')->first();
                                    $copyRightText = $copyRight ? $copyRight->text : null;
                                @endphp
                                @if ($copyRight && $copyRight->status == 1)
                                <div class="copy-right text-left">
                                    {{ $copyRightText }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
                                @php
                                    $socials = $advertisementSection->advertisementFooterBlocks->where('type', 'social');
                                @endphp
                                <ul class="social-media">
                                    @foreach ($socials as $social)
                                    @if ($social->status == 1)
                                    <li><a href="{{ $social->url }}" class="icofont icofont-social-{{ $social->name }}"></a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--== Footer01 End ==-->
            @elseif ($advertisementSection->section->name == 'Footer02')
            <!--== Footer02 Start ==-->
            <footer class="footer dark-block" id="{{ $advertisementSection->name }}">
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                @php
                                    $copyRight = $advertisementSection->advertisementFooterBlocks->where('type', 'copyRight')->first();
                                    $copyRightText = $copyRight ? $copyRight->text : null;
                                @endphp
                                @if ($copyRight && $copyRight->status == 1)
                                <div class="copy-right text-left">
                                    {{ $copyRightText }}
                                </div>
                                @endif
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="logo display-block height-auto">
                                    <img class="logo margin-left-auto margin-right-auto" src="{{ asset('assets/images/all/adpro3_blogo.png') }}" alt="ADPRO logo">
                                </div>
                            </div>
                            <div class="col-md-4col-xs-12">
                                @php
                                    $socials = $advertisementSection->advertisementFooterBlocks->where('type', 'social');
                                @endphp
                                <ul class="social-media">
                                    @foreach ($socials as $social)
                                    @if ($social->status == 1)
                                    <li><a href="{{ $social->url }}" class="icofont icofont-social-{{ $social->name }}"></a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--== Footer02 End ==-->
            @endif
        {{-- Footer Hero End --}}
        @endif
    @endforeach


  <!--== Go to Top  ==-->
  <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
  <!--== Go to Top End ==-->

</div>
<!--== Wrapper End ==-->

<!--== Javascript Plugins ==-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/master.js') }}"></script>

<!-- Revolution js Files -->
<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('revolution/js/revolution.extension.video.min.js') }}"></script>

{{-- Date Time Picker --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!--== Javascript Plugins End ==-->
</body>
</html>