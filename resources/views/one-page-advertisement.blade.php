<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="ADPRO会員になると商談と情報発信機能を完全無料でご利用いただけます。">
<!-- keywords -->
<meta name="keywords" content="dark header style, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ADPRO - WEB広告とマーケティングのアドプロ</title>
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
        $advertisementSections = $advertisement->advertisementSections->where('status', 1)->sortBy('order');
    @endphp
    @if ($advertisement->menu_bar_status == 1)
    <!--== Header Start ==-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav on no-full" style="height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
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
                </div>
                <div class="col-md-10">
                    <!--== Collect the nav links, forms, and other content for toggling ==-->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            @foreach ($advertisementSections as $advertisementSection)
                            @if ($advertisementSection->status == 1 && $advertisementSection->section->type != "footer")
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
            </div>
        </div>
    </nav>
    <!--== Header End ==-->
    @endif

    @php
        $bgKey = 0;
    @endphp
    @foreach ($advertisementSections as $advertisementSection)
        @php
            if ($bgKey % 2 == 0) {
                $sectionBg = 'white-bg';
            } else {
                $sectionBg = 'grey-bg';
            }
            $bgKey++;
        @endphp
        @if ($advertisementSection->section->type == 'header' && $advertisementSection->status == 1)
        {{-- Header Hero Start --}}
            @if ($advertisementSection->section->name == 'Header01')
            <!--== Header01 Start ==-->
            <section class="{{ $sectionBg }} pt-0 pb-0" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementHeaderBlocks as $advertisementHeaderBlock)
                @if ($advertisementHeaderBlock->status == 1)
                <section class="pt-0 pb-0">
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
                                                    {!! nl2br($advertisementHeaderBlock->body) !!}
                                                </span>
                                                <h1 class="white-color font-700 font-120px line-height-120 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60 wow fadeInUp" 
                                                    data-wow-delay="0.2s">
                                                    {{ $advertisementHeaderBlock->title }}
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
                                data-parallax-bg-image="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}" 
                                data-parallax-speed="0.8" data-parallax-direction="up"></div>
                        </div>
                    </div>
                </section>
                @endif
                @endforeach
            </section>
            <!--== Header01 End ==-->
            @elseif ($advertisementSection->section->name == 'Header02')
            <!--== Header02 Start ==-->
            <section class="{{ $sectionBg }} parallax-bg fixed-bg view-height-100vh lg-section" id="{{ $advertisementSection->name }}"
                data-parallax-bg-image="" 
                data-parallax-speed="0.5" data-parallax-direction="up">
                <div class="color-overlay-bg"></div>
                <div class="hero-text-wrap transparent-bg">
                    <div class="hero-text">
                        @foreach ($advertisementSection->advertisementHeaderBlocks as $key => $advertisementHeaderBlock)
                        @if ($advertisementHeaderBlock->status == 1)
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
                                    <div class="all-padding-50 white-color">
                                        <h3 class="roboto-font font-700 line-height-50">{{ $advertisementHeaderBlock->title }}</h3>
                                        <h5 class="roboto-font font-300">{!! nl2br($advertisementHeaderBlock->body) !!}</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-mobile-wrap">
                                        <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"
                                        style="top:70px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </section>
            <!--== Header02 End ==-->
            @elseif ($advertisementSection->section->name == 'Header03')
            <!--== Header03 Start ==-->
            <section class="{{ $sectionBg }} remove-padding transition-none" id="{{ $advertisementSection->name }}">
                <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container" 
                data-alias="creative-freedom" data-source="gallery" style="background-color:#1f1d24;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;" 
                    data-version="5.4.1">
                    <ul>    <!-- SLIDE  -->
                        @php
                            $loopindex = 0;
                        @endphp
                    @foreach ($advertisementSection->advertisementHeaderBlocks as $key => $advertisementHeaderBlock)
                        @if ($advertisementHeaderBlock->status == 1)
                        <li data-index="rs-{{ 2978 + $loopindex }}" data-transition="fadethroughdark" data-slotamount="default" 
                        data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" 
                        data-easeout="default" data-masterspeed="2000"  
                        data-thumb="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  
                        data-rotate="0"  data-saveperformance="off"  data-title="{{ $advertisementHeaderBlock->title }} " 
                        data-param1="{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}" data-param2="" 
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" 
                        data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  
                            alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" 
                            class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                                id="slide-{{ 2978 + $loopindex }}-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontweight="['100','100','400','400']"
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                
                                data-type="shape"
                                data-basealign="slide"
                                data-responsive_offset="off"
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                
                                style="z-index: 5;text-transform:left;background-color:rgba(18, 12, 20, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                            </div>
                
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-{{ 2978 + $loopindex }}-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-178','-178','-168','-141']"
                                data-width="1"
                                data-height="100"
                                data-whitespace="nowrap"
                
                                data-type="shape"
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                
                                style="z-index: 6;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                            </div>
                
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                id="slide-{{ 2978 + $loopindex }}-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-91','-91','-81','-64']"
                                data-fontsize="['20','20','20','10']"
                                data-lineheight="['14','14','14','12']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                
                                data-type="text"
                                data-responsive_offset="on"
                
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                
                                style="z-index: 7; white-space: nowrap;text-transform:left;">
                                {{ $advertisementHeaderBlock->title }} 
                            </div>
                
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                                id="slide-{{ 2978 + $loopindex }}-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']"
                                data-fontsize="['70','70','50','40']"
                                data-lineheight="['70','70','55','45']"
                                data-width="['none','none','none','320']"
                                data-height="none"
                                data-whitespace="nowrap"
                
                                data-type="text"
                                data-responsive_offset="on"
                
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                
                                style="z-index: 8; white-space: nowrap;text-transform:left;">
                                {!! nl2br($advertisementHeaderBlock->body) !!}
                            </div>
                
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                                id="slide-{{ 2978 + $loopindex }}-layer-5"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['137','137','119','100']"
                                data-width="1"
                                data-height="100"
                                data-whitespace="nowrap"
                
                                data-type="shape"
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                
                                style="z-index: 9;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                            </div>
                
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                                id="slide-{{ 2978 + $loopindex }}-layer-6"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['694','611','689','540']"
                                data-fontweight="['400','500','500','500']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                
                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]"
                                data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,50,50]"
                
                                style="z-index: 10; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                次のスライドへ進む 
                            </div>
                        </li>
                        @php
                            $loopindex ++;
                        @endphp
                        @endif
                        @endforeach
                    </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
                </div>
            </section>
            <!--== Header03 End ==-->
            @elseif ($advertisementSection->section->name == 'Header04')
            <!--== Header04 Start ==-->
            <section class="{{ $sectionBg }} remove-padding transition-none" id="{{ $advertisementSection->name }}">
                <div id="rev_slider_151_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="blur-effect-slider" data-source="gallery" style="background-color:#2d3032;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                        <div id="rev_slider_151_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                            <ul>	<!-- SLIDE  -->
                                @php
                                    $counter = 0;
                                @endphp
                                @foreach ($advertisementSection->advertisementHeaderBlocks as $advertisementHeaderBlock)
                                @if ($advertisementHeaderBlock->status == 1 && $counter < 5)
                                @if ($counter == 0)
                                <li data-index="rs-411" data-transition="fadethroughtransparent" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/images/slides/home-bg-21-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div id="rrzt_411" class="rev_row_zone rev_row_zone_top slider-creative" style="z-index: 9;">
                                        <!-- LAYER NR. 1 -->
                                        <div class="hero-text-wrap">
                                            <div class="hero-text">
                                                <div class="tp-caption  "
                                                    id="slide-411-layer-14"
                                                    data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                                    data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                                                data-width="none"
                                                    data-height="none"
                                                    data-whitespace="nowrap"
            
                                                    data-type="row"
                                                    data-columnbreak="2"
                                                    data-basealign="slide"
                                                    data-responsive_offset="on"
                                                    data-responsive="off"
                                                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-margintop="[0,0,0,0]"
                                                    data-marginright="[0,0,0,0]"
                                                    data-marginbottom="[0,0,0,0]"
                                                    data-marginleft="[0,0,0,0]"
                                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                                    data-paddingtop="[0,100,50,50]"
                                                    data-paddingright="[100,50,40,40]"
                                                    data-paddingbottom="[0,0,0,0]"
                                                    data-paddingleft="[100,50,40,40]"
            
                                                    style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                                    <!-- LAYER NR. 2 -->
                                                    <div class="tp-caption  "
                                                        id="slide-411-layer-15"
                                                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                                        data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                                                    data-width="none"
                                                        data-height="none"
                                                        data-whitespace="nowrap"
            
                                                        data-type="column"
                                                        data-responsive_offset="on"
                                                        data-responsive="off"
                                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                        data-columnwidth="100%"
                                                        data-margintop="[0,0,0,0]"
                                                        data-marginright="[0,0,0,0]"
                                                        data-marginbottom="[0,0,0,0]"
                                                        data-marginleft="[0,0,0,0]"
                                                        data-textAlign="['inherit','inherit','center','center']"
                                                        data-paddingtop="[0,0,0,0]"
                                                        data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]"
                                                        data-paddingleft="[0,0,0,0]"
            
                                                        style="z-index: 10; width: 100%;">
                                                        <!-- LAYER NR. 3 -->
                                                        <div class="tp-caption   tp-resizeme  blurslider-gradient"
                                                            id="slide-411-layer-1"
                                                            data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                                            data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                                            data-fontsize="['110','90','100','70']"
                                                            data-lineheight="['100','90','100','70']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
            
                                                            data-type="text"
                                                            data-basealign="slide"
                                                            data-responsive_offset="on"
            
                                                            data-frames='[{"delay":"+290","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                                            data-margintop="[0,0,0,0]"
                                                            data-marginright="[0,0,0,0]"
                                                            data-marginbottom="[30,20,30,30]"
                                                            data-marginleft="[0,0,0,0]"
                                                            data-textAlign="['inherit','inherit','center','center']"
                                                            data-paddingtop="[0,0,0,0]"
                                                            data-paddingright="[0,0,40,40]"
                                                            data-paddingbottom="[0,0,0,0]"
                                                            data-paddingleft="[0,0,40,40]"
            
                                                            style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:'Montserrat', sans-serif;">
                                                            {!! nl2br($advertisementHeaderBlock->body) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @elseif ($counter == 1)
                                <!-- SLIDE  -->
                                <li data-index="rs-412" data-transition="fadethroughtransparent" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/images/home-bg-22-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Two" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div id="rrzt_412" class="rev_row_zone rev_row_zone_top slider-creative" style="z-index: 5;">
                                    <!-- LAYER NR. 10 -->
                                    <div class="hero-text-wrap">
                                        <div class="hero-text">
                                            <div class="tp-caption  "
                                                id="slide-412-layer-14"
                                                data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                                            data-width="none"
                                                data-height="none"
                                                data-whitespace="nowrap"
            
                                                data-type="row"
                                                data-columnbreak="2"
                                                data-basealign="slide"
                                                data-responsive_offset="on"
                                                data-responsive="off"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-margintop="[0,0,0,0]"
                                                data-marginright="[0,0,0,0]"
                                                data-marginbottom="[0,0,0,0]"
                                                data-marginleft="[0,0,0,0]"
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,100,50,50]"
                                                data-paddingright="[100,50,40,40]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[100,50,40,40]"
            
                                                style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                                <!-- LAYER NR. 11 -->
                                                <div class="tp-caption  "
                                                    id="slide-412-layer-15"
                                                    data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                                    data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                                    data-width="none"
                                                    data-height="none"
                                                    data-whitespace="nowrap"
            
                                                    data-type="column"
                                                    data-responsive_offset="on"
                                                    data-responsive="off"
                                                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-columnwidth="100%"
                                                    data-margintop="[0,0,0,0]"
                                                    data-marginright="[0,0,0,0]"
                                                    data-marginbottom="[0,0,0,0]"
                                                    data-marginleft="[0,0,0,0]"
                                                    data-textAlign="['inherit','inherit','center','center']"
                                                    data-paddingtop="[0,0,0,0]"
                                                    data-paddingright="[0,0,0,0]"
                                                    data-paddingbottom="[0,0,0,0]"
                                                    data-paddingleft="[0,0,0,0]"
            
                                                    style="z-index: 6; width: 100%;">
                                                    <!-- LAYER NR. 12 -->
                                                    <div class="tp-caption   tp-resizeme  blurslider-gradient"
                                                            id="slide-411-layer-1"
                                                            data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                                            data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                                                        data-fontsize="['110','90','100','70']"
                                                            data-lineheight="['100','90','100','70']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
            
                                                            data-type="text"
                                                            data-basealign="slide"
                                                            data-responsive_offset="on"
            
                                                            data-frames='[{"delay":"+290","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                                            data-margintop="[0,0,0,0]"
                                                            data-marginright="[0,0,0,0]"
                                                            data-marginbottom="[30,20,30,30]"
                                                            data-marginleft="[0,0,0,0]"
                                                            data-textAlign="['inherit','inherit','center','center']"
                                                            data-paddingtop="[0,0,0,0]"
                                                            data-paddingright="[0,0,40,40]"
                                                            data-paddingbottom="[0,0,0,0]"
                                                            data-paddingleft="[0,0,40,40]"
            
                                                            style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:'Montserrat', sans-serif;">
                                                            {!! nl2br($advertisementHeaderBlock->body) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @elseif ($counter == 2)
                                <!-- SLIDE  -->
                                <li data-index="rs-413" data-transition="fadethroughtransparent" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/images/slides/home-bg-23-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Three" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div id="rrzt_413" class="rev_row_zone rev_row_zone_top slider-creative" style="z-index: 5;">
                                    <!-- LAYER NR. 19 -->
                                        <div class="hero-text-wrap">
                                            <div class="hero-text">
                                                <div class="tp-caption  "
                                                    id="slide-413-layer-14"
                                                    data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                                    data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                                                data-width="none"
                                                    data-height="none"
                                                    data-whitespace="nowrap"
            
                                                    data-type="row"
                                                    data-columnbreak="2"
                                                    data-basealign="slide"
                                                    data-responsive_offset="on"
                                                    data-responsive="off"
                                                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-margintop="[0,0,0,0]"
                                                    data-marginright="[0,0,0,0]"
                                                    data-marginbottom="[0,0,0,0]"
                                                    data-marginleft="[0,0,0,0]"
                                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                                    data-paddingtop="[0,100,50,50]"
                                                    data-paddingright="[100,50,40,40]"
                                                    data-paddingbottom="[0,0,0,0]"
                                                    data-paddingleft="[100,50,40,40]"
            
                                                    style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                                    <!-- LAYER NR. 20 -->
                                                    <div class="tp-caption  "
                                                        id="slide-413-layer-15"
                                                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                                        data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                                        data-width="none"
                                                        data-height="none"
                                                        data-whitespace="nowrap"
            
                                                        data-type="column"
                                                        data-responsive_offset="on"
                                                        data-responsive="off"
                                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                        data-columnwidth="100%"
                                                        data-margintop="[0,0,0,0]"
                                                        data-marginright="[0,0,0,0]"
                                                        data-marginbottom="[0,0,0,0]"
                                                        data-marginleft="[0,0,0,0]"
                                                        data-textAlign="['inherit','inherit','center','center']"
                                                        data-paddingtop="[0,0,0,0]"
                                                        data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]"
                                                        data-paddingleft="[0,0,0,0]"
            
                                                        style="z-index: 6; width: 100%;">
                                                        <!-- LAYER NR. 21 -->
                                                        <div class="tp-caption   tp-resizeme  blurslider-gradient"
                                                            id="slide-411-layer-1"
                                                            data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                                            data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                                            data-fontsize="['110','90','100','70']"
                                                            data-lineheight="['100','90','100','70']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
            
                                                            data-type="text"
                                                            data-basealign="slide"
                                                            data-responsive_offset="on"
            
                                                            data-frames='[{"delay":"+290","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                                            data-margintop="[0,0,0,0]"
                                                            data-marginright="[0,0,0,0]"
                                                            data-marginbottom="[30,20,30,30]"
                                                            data-marginleft="[0,0,0,0]"
                                                            data-textAlign="['inherit','inherit','center','center']"
                                                            data-paddingtop="[0,0,0,0]"
                                                            data-paddingright="[0,0,40,40]"
                                                            data-paddingbottom="[0,0,0,0]"
                                                            data-paddingleft="[0,0,40,40]"
            
                                                            style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:'Montserrat', sans-serif;">
                                                            {!! nl2br($advertisementHeaderBlock->body) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @php
                                    $counter++;
                                @endphp
                                @endif
                                @endforeach
                            </ul>
                            <div style="" class="tp-static-layers">
                                @php
                                    $counter = 0;
                                @endphp
                                @foreach ($advertisementSection->advertisementHeaderBlocks as $advertisementHeaderBlock)
                                @if ($advertisementHeaderBlock->status == 1 && $counter < 5)
                                @if ($counter == 0)
                                <!-- LAYER NR. 28 -->
                                <div class="tp-caption   tp-static-layer"
                                    id="slider-151-layer-29"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['-50','-50','119','119']"
                                    data-width="['260','260','200','70']"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="text"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
            
                                    style="z-index: 17; min-width: 260px; max-width: 260px; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;">1 <div class="blurslider-line" style="display:inline-block;width:40px;height:1px;background:#fff;margin: 10px 20px 4px 15px;"></div>
                                    {{ $advertisementHeaderBlock->title }}
                                </div>
            
                                <!-- LAYER NR. 29 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                    id="slider-151-layer-22"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['-50','-50','102','102']"
                                    data-width="['300','300','240','30%']"
                                    data-height="50"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="shape"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":"bytrigger","speed":800,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":500,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    data-blendmode="overlay"
                                    data-lasttriggerstate="reset"
                                    style="z-index: 18;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> 
                                </div>
            
                                <!-- LAYER NR. 30 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                    id="slider-151-layer-21"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['-50','-50','102','102']"
                                    data-width="['300','300','240','30%']"
                                    data-height="50"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="shape"
                                    data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slider-151-layer-22","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slider-151-layer-22","delay":""},{"event":"click","action":"jumptoslide","slide":"rs-411","delay":""}]'
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Power4.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    data-blendmode="overlay"
            
                                    style="z-index: 19;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> 
                                </div>
            
                                @elseif ($counter == 1)
                                <!-- LAYER NR. 31 -->
                                <div class="tp-caption   tp-static-layer"
                                    id="slider-151-layer-28"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['0','0','68','68']"
                                    data-width="['260','260','200','70']"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="text"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
            
                                    style="z-index: 20; min-width: 260px; max-width: 260px; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;">2 <div class="blurslider-line" style="display:inline-block;width:40px;height:1px;background:#fff;margin: 10px 20px 4px 15px;"></div>
                                    {{ $advertisementHeaderBlock->title }}
                                </div>
            
                                <!-- LAYER NR. 32 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                    id="slider-151-layer-24"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['1','1','51','51']"
                                    data-width="['300','300','240','30%']"
                                    data-height="50"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="shape"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":"bytrigger","speed":800,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":500,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    data-blendmode="overlay"
                                    data-lasttriggerstate="reset"
                                    style="z-index: 21;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> 
                                </div>
            
                                <!-- LAYER NR. 33 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                    id="slider-151-layer-23"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['1','1','51','51']"
                                    data-width="['300','300','240','30%']"
                                    data-height="50"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="shape"
                                    data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slider-151-layer-24","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slider-151-layer-24","delay":""},{"event":"click","action":"jumptoslide","slide":"rs-412","delay":""}]'
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Power4.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    data-blendmode="overlay"
            
                                    style="z-index: 22;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> 
                                </div>
            
                                @elseif ($counter == 2)
                                <!-- LAYER NR. 34 -->
                                <div class="tp-caption   tp-static-layer"
                                    id="slider-151-layer-27"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['50','50','17','17']"
                                    data-width="['260','260','200','70']"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="text"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
            
                                    style="z-index: 23; min-width: 260px; max-width: 260px; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;">3 <div class="blurslider-line" style="display:inline-block;width:40px;height:1px;background:#fff;margin: 10px 20px 4px 15px;"></div>
                                    {{ $advertisementHeaderBlock->title }}
                                </div>
            
                                <!-- LAYER NR. 35 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                    id="slider-151-layer-26"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['52','52','0','0']"
                                    data-width="['300','300','240','30%']"
                                    data-height="50"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="shape"
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":"bytrigger","speed":800,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":500,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    data-blendmode="overlay"
                                    data-lasttriggerstate="reset"
                                    style="z-index: 24;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> 
                                </div>
            
                                <!-- LAYER NR. 36 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-static-layer"
                                    id="slider-151-layer-25"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['52','52','0','0']"
                                    data-width="['300','300','240','30%']"
                                    data-height="50"
                                    data-whitespace="nowrap"
                                    data-visibility="['on','on','on','off']"
            
                                    data-type="shape"
                                    data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slider-151-layer-26","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slider-151-layer-26","delay":""},{"event":"click","action":"jumptoslide","slide":"rs-413","delay":""}]'
                                    data-basealign="slide"
                                    data-responsive_offset="off"
                                    data-responsive="off"
                                    data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:[-100%];","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Power4.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    data-blendmode="overlay"
            
                                    style="z-index: 25;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> 
                                </div>
                                @endif
                                @php
                                    $counter++;
                                @endphp
                                @endif
                                @endforeach
                            </div>
                            <div class="tp-bannertimer" style="height: 5px; background-color: rgba(255, 255, 255, 0.25);"></div>
                        </div>
                    </div>
                </section>
            <!--== Header04 End ==-->
            @elseif ($advertisementSection->section->name == 'Header05')
            <!--== Header05 Start ==-->
            <section class="{{ $sectionBg }} pt-0 pb-0" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementHeaderBlocks as $advertisementHeaderBlock)
                @if ($advertisementHeaderBlock->status == 1)
                <section class="pt-0 pb-0">
                    <div class="parallax-overlay z-index-0"></div>
                    <div class="container relative view-height-50vh">
                        <div class="simple-content-slider text-center">
                            <div class="simple-content-slider-text">
                                <div class="simple-content-text-inner">
                                    <div class="row">
                                        <div class="col-md-10 centerize-col">
                                            <div class="white-color text-center">
                                                <span class="font-40px font-700 play-font wow fadeInUp font-italic" 
                                                    data-wow-delay="0.1s">
                                                    {!! nl2br($advertisementHeaderBlock->body) !!}
                                                </span>
                                                <h1 class="white-color font-700 font-80px line-height-120 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60 wow fadeInUp" 
                                                    data-wow-delay="0.2s">
                                                    {{ $advertisementHeaderBlock->title }}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-height-50vh absolute z-index-minus2 top-0 width-100-percent">
                        <div class="view-height-50vh">
                            <div class="slide-img parallax-bg fixed-bg" 
                                data-parallax-bg-image="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}" 
                                data-parallax-speed="0.8" data-parallax-direction="up"></div>
                        </div>
                    </div>
                </section>
                @endif
                @endforeach
            </section>
            <!--== Header05 End ==-->
            @elseif ($advertisementSection->section->name == 'Header06')
            <!--== Header06 Start ==-->
            <section class="{{ $sectionBg }} pt-0 pb-0 transition-none" id="{{ $advertisementSection->name }}">
                <div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="parallax-zoom-slices" data-source="gallery" style="background:#000000;padding:0px;">
                  <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                      <div id="rev_slider_28_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>	<!-- SLIDE  -->
                        @php
                            $counter = 0;
                        @endphp

                        @foreach ($advertisementSection->advertisementHeaderBlocks as $advertisementHeaderBlock)
                        @if ($advertisementHeaderBlock->status == 1 && $counter < 5)
                        @if ($counter == 0)
                        <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-12-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
            
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-13"
                                data-x="['left','left','left','left']" data-hoffset="['250','171','39','17']"
                                data-y="['top','top','top','top']" data-voffset="['779','693','847','630']"
                                data-fontweight="['100','600','600','600']"
                                data-width="['493','490','490','312']"
                                data-height="['216','222','222','293']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['141','81','48','19']"
                                data-y="['top','top','top','top']" data-voffset="['254','215','270','211']"
                                data-fontweight="['100','600','600','600']"
                                data-width="['281','257','140','75']"
                                data-height="['345','343','250','127']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="10"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":350,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['687','574','469','301']"
                                data-y="['top','top','top','top']" data-voffset="['248','223','281','208']"
                                data-width="['338','308','140','94']"
                                data-height="['621','602','787','542']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="10"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-12"
                                data-x="['left','left','left','left']" data-hoffset="['851','688','551','355']"
                                data-y="['top','top','top','top']" data-voffset="['149','141','222','162']"
                                data-width="['339','329','226','77']"
                                data-height="['809','662','867','569']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":450,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['-54','-22','-4','-23']"
                                data-y="['top','top','top','top']" data-voffset="['195','174','242','187']"
                                data-width="['396','278','133','90']"
                                data-height="['762','664','779','564']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-14"
                                data-x="['left','left','left','left']" data-hoffset="['992','835','644','413']"
                                data-y="['top','top','top','top']" data-voffset="['104','95','156','119']"
                                data-width="['756','404','242','150']"
                                data-height="['810','787','1038','654']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="30"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":550,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-15"
                                data-x="['left','left','left','left']" data-hoffset="['-424','-195','-215','-131']"
                                data-y="['top','top','top','top']" data-voffset="['119','138','208','170']"
                                data-width="['606','253','253','160']"
                                data-height="['762','668','829','670']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="30"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-16"
                                data-x="['left','left','left','left']" data-hoffset="['822','737','534','340']"
                                data-y="['top','top','top','top']" data-voffset="['459','385','536','350']"
                                data-width="['953','501','502','325']"
                                data-height="['464','431','661','400']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="40"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":650,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-82-layer-17"
                                data-x="['left','left','left','left']" data-hoffset="['952','862','643','408']"
                                data-y="['top','top','top','top']" data-voffset="['588','498','676','449']"
                                data-width="['873','404','405','366']"
                                data-height="['462','401','571','343']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="60"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-82-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 14; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                                
                            </div>
            
                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-82-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['120','120','70','40']"
                                data-lineheight="['110','90','80','50']"
                                data-width="['none','none','480','360']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','normal','normal']"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                                data-textAlign="['inherit','inherit','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                                {{ $advertisementHeaderBlock->title }}
                            </div>
            
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-82-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 16; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                                {!! nl2br($advertisementHeaderBlock->body) !!}
                            </div>
                        </li>
                        @elseif ($counter == 1)
                        <!-- SLIDE  -->
                        <li data-index="rs-83" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-13-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #1a1336">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
            
                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-83-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['113','122','40','-95']"
                                data-y="['top','top','top','top']" data-voffset="['-137','27','78','54']"
                                data-width="['973','809','809','573']"
                                data-height="['433','256','256','233']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="10"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-83-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['26','-10','-133','-139']"
                                data-y="['top','top','top','top']" data-voffset="['252','194','190','256']"
                                data-fontweight="['100','600','600','600']"
                                data-width="['413','413','413','279']"
                                data-height="['437','437','437','336']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-83-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['550','486','395','240']"
                                data-y="['top','top','top','top']" data-voffset="['351','334','377','348']"
                                data-width="['380','252','252','159']"
                                data-height="['404','309','309','291']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="30"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 16 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-83-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['708','588','481','312']"
                                data-y="['top','top','top','top']" data-voffset="['245','207','252','251']"
                                data-width="['403','403','403','273']"
                                data-height="['178','178','178','157']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="40"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 17 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-83-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 14; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                                
                            </div>
            
                            <!-- LAYER NR. 18 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-83-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['120','120','70','40']"
                                data-lineheight="['110','90','80','50']"
                                data-width="['none','none','480','360']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','normal','normal']"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                                data-textAlign="['inherit','inherit','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                                {{ $advertisementHeaderBlock->title }}
                            </div>
            
                            <!-- LAYER NR. 19 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-83-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                                {!! nl2br($advertisementHeaderBlock->body) !!}
                            </div>
                        </li>
                        @elseif ($counter == 2)
                        <!-- SLIDE  -->
                        <li data-index="rs-85" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-14-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px rgba(0, 0, 0, 0.15)">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
            
                            <!-- LAYER NR. 20 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-85-layer-1"
                                data-x="['right','left','left','left']" data-hoffset="['664','213','102','-169']"
                                data-y="['top','top','top','top']" data-voffset="['254','203','228','223']"
                                data-width="['1202','253','253','372']"
                                data-height="['939','824','819','493']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"x:25px;y:-25px;sX:1;sY:1;opacity:0;","to":"o:1;rZ:-3;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 21 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-85-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['627','519','404','247']"
                                data-y="['top','top','top','top']" data-voffset="['409','308','344','309']"
                                data-width="['818','413','413','491']"
                                data-height="['775','437','437','374']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="40"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":250,"speed":2000,"frame":"0","from":"x:-25px;y:-25px;sX:1.1;sY:1.1;opacity:0;","to":"o:1;rZ:-2;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 22 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-85-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['621','519','403','248']"
                                data-y="['top','top','top','top']" data-voffset="['-247','-110','41','27']"
                                data-width="['1279','294','214','235']"
                                data-height="['618','370','254','243']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="30"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"x:-25px;y:25px;sX:1;sY:1;opacity:0;","to":"o:1;rZ:3;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 23 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-85-layer-15"
                                data-x="['right','right','right','left']" data-hoffset="['663','560','423','-648']"
                                data-y="['top','top','top','top']" data-voffset="['-415','22','40','27']"
                                data-width="['970','776','776','850']"
                                data-height="['578','146','146','158']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="10"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":350,"speed":2000,"frame":"0","from":"x:25px;y:25px;sX:1;sY:1;opacity:0;","to":"o:1;rZ:2;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 24 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-85-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                                
                            </div>
            
                            <!-- LAYER NR. 25 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-85-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['120','120','70','40']"
                                data-lineheight="['110','90','80','50']"
                                data-width="['none','none','480','360']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','normal','normal']"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                                data-textAlign="['inherit','inherit','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                                {{ $advertisementHeaderBlock->title }}
                            </div>
            
                            <!-- LAYER NR. 26 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-85-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                                {!! nl2br($advertisementHeaderBlock->body) !!}
                            </div>
                        </li>
                        @elseif ($counter == 3)
                        <!-- SLIDE  -->
                        <li data-index="rs-84" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-15-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #373344">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="130" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
            
                            <!-- LAYER NR. 27 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-84-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['762','-10','-133','-139']"
                                data-y="['top','top','top','top']" data-voffset="['553','194','190','256']"
                                data-width="['388','413','413','279']"
                                data-height="['196','437','437','336']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="10"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 28 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-84-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['607','122','40','-95']"
                                data-y="['top','top','top','top']" data-voffset="['17','27','78','54']"
                                data-width="['445','809','809','573']"
                                data-height="['434','256','256','233']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":250,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 29 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-84-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['318','486','395','240']"
                                data-y="['top','top','top','top']" data-voffset="['358','334','377','348']"
                                data-width="['320','252','252','159']"
                                data-height="['436','309','309','291']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="30"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 30 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-84-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['85','588','481','312']"
                                data-y="['top','top','top','top']" data-voffset="['283','207','252','251']"
                                data-width="['291','403','403','273']"
                                data-height="['179','178','178','157']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="50"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 31 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-84-layer-9"
                                data-x="['left','left','left','left']" data-hoffset="['378','588','481','312']"
                                data-y="['top','top','top','top']" data-voffset="['20','207','252','251']"
                                data-width="['165','403','403','273']"
                                data-height="['235','178','178','157']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="70"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 32 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-84-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                                
                            </div>
            
                            <!-- LAYER NR. 33 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-84-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['120','120','70','40']"
                                data-lineheight="['110','90','80','50']"
                                data-width="['none','none','480','360']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','normal','normal']"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                                data-textAlign="['inherit','inherit','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                                {{ $advertisementHeaderBlock->title }}
                            </div>
            
                            <!-- LAYER NR. 34 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-84-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                                {!! nl2br($advertisementHeaderBlock->body) !!}
                            </div>
                        </li>
                        @elseif ($counter == 4)
                        <!-- SLIDE  -->
                        <li data-index="rs-86" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-16-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
            
                            <!-- LAYER NR. 35 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-86-layer-6"
                                data-x="['left','left','left','left']" data-hoffset="['612','77','-51','-139']"
                                data-y="['top','top','top','top']" data-voffset="['427','225','288','256']"
                                data-width="['379','413','413','279']"
                                data-height="['400','437','437','336']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="30"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;fg:0;","to":"o:1;fb:0px;fg:100%;","ease":"Bounce.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fg:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                data-blendmode="lighten"
            
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);">
                            <div class="rs-looped rs-wave"  data-speed="2" data-angle="0" data-radius="2px" data-origin="50% 50%"> </div></div>
            
                            <!-- LAYER NR. 36 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-86-layer-7"
                                data-x="['left','left','left','left']" data-hoffset="['607','122','40','-31']"
                                data-y="['top','top','top','top']" data-voffset="['17','27','78','59']"
                                data-width="['445','809','809','573']"
                                data-height="['434','256','256','233']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="20"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":250,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;","to":"o:1;fb:0px;","ease":"Elastic.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                data-blendmode="lighten"
            
                                style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);">
                                <div class="rs-looped rs-pendulum"  data-easing="Power1.easeInOut" data-startdeg="-1" data-enddeg="1" data-speed="2" data-origin="50% 50%"> </div></div>
            
                            <!-- LAYER NR. 37 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-86-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['318','472','319','123']"
                                data-y="['top','top','top','top']" data-voffset="['358','409','465','386']"
                                data-width="['320','252','252','159']"
                                data-height="['436','309','309','291']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="5"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":300,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;","to":"o:1;fb:0px;","ease":"Elastic.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                data-blendmode="lighten"
            
                                style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 38 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-86-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['474','588','481','224']"
                                data-y="['top','top','top','top']" data-voffset="['234','207','252','403']"
                                data-width="['398','403','403','273']"
                                data-height="['180','178','178','157']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="40"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":350,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;","to":"o:1;fb:0px;","ease":"Bounce.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                data-blendmode="lighten"
            
                                style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
            
                            <!-- LAYER NR. 39 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                                id="slide-86-layer-9"
                                data-x="['left','left','left','left']" data-hoffset="['284','379','329','130']"
                                data-y="['top','top','top','top']" data-voffset="['102','245','324','276']"
                                data-width="['403','403','403','273']"
                                data-height="['349','178','178','157']"
                                data-whitespace="nowrap"
            
                                data-type="shape"
                                data-slicey_offset="10"
                                data-slicey_blurstart="inherit"
                                data-slicey_blurend="inherit"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;fg:0;","to":"o:1;fb:0px;fg:100%;","ease":"Bounce.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fg:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                data-blendmode="lighten"
            
                                style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);">
                                <div class="rs-looped rs-wave"  data-speed="2" data-angle="0" data-radius="3px" data-origin="50% 50%"> </div></div>
            
                            <!-- LAYER NR. 40 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-86-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                                
                            </div>
            
                            <!-- LAYER NR. 41 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-86-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['120','120','70','40']"
                                data-lineheight="['110','90','80','50']"
                                data-width="['none','none','480','360']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','normal','normal']"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                                data-textAlign="['inherit','inherit','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                                {{ $advertisementHeaderBlock->title }}
                            </div>
            
                            <!-- LAYER NR. 42 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-86-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
            
                                data-type="text"
                                data-responsive_offset="on"
            
                                data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                                {!! nl2br($advertisementHeaderBlock->body) !!}
                            </div>
                        </li>
                        @endif
                        @php
                            $counter++;
                        @endphp
                        @endif
                        @endforeach
                    </ul>
                  <div class="tp-bannertimer" style="height: 3px; background: rgba(255,255,255,0.25);"></div>	</div>
                </div>
            </section>
            <!--== Header06 End ==-->
            @elseif ($advertisementSection->section->name == 'Header07')
            <!--== Header07 Start ==-->
            <section class="{{ $sectionBg }} pt-0 pb-0 home-slider no-direction" id="{{ $advertisementSection->name }}">
                <div class="default-slider slick">
                    @foreach ($advertisementSection->advertisementHeaderBlocks as $advertisementHeaderBlock)
                    @if ($advertisementHeaderBlock->status == 1)
                    <div class="slide">
                        <div class="slide-img parallax-effect" style="background:url({{ asset('assets/images/all/' . $advertisementHeaderBlock->image) }}) center center / cover scroll no-repeat;"></div>
                        <div class="hero-text-wrap">
                            <div class="hero-text white-color">
                                <div class="container">
                                    <div class="white-color text-center">
                                        <h2 class="white-color font-700 text-uppercase font-100px line-height-90">{{ $advertisementHeaderBlock->title }}</h2>
                                        <h4 class="white-color roboto-font font-300">{!! nl2br($advertisementHeaderBlock->body) !!}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </section>
            <!--== Header07 End ==-->
            @endif
        {{-- Header Hero End --}}
        @elseif ($advertisementSection->section->type == 'list'  && $advertisementSection->status == 1)
        {{-- List Hero Start --}}
            @if ($advertisementSection->section->name == 'List01')
            <!--== List01 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    @foreach ($advertisementSection->advertisementListBlocks as $key => $advertisementListBlock)
                        @if ($advertisementListBlock->status == 1)
                        @if ($key % 2 == 0)
                        <div class="row row-flex {{ $key != 0 ? 'mt-20' : ''}}" style="align-items: flex-start;">
                            <div class="col-md-6 col-sm-12" style="margin-top: 25px;">
                                <img class="img-responsive" style="position: relative;"
                                src="{{ asset('assets/images/all/' . $advertisementListBlock->image) }}" alt=""/>
                            </div>                
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner text-left">
                                    <h4 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h4>
                                    <hr class="dark-bg left_line bold-line" style="background-color: #BF0731;">
                                    <p class="mt-30 font-14px dark-color text-left">{!! nl2br($advertisementListBlock->body) !!}</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row row-flex {{ $key != 0 ? 'mt-20' : ''}}" style="align-items: flex-start;">              
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner text-left">
                                    <h4 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h4>
                                    <hr class="dark-bg left_line bold-line" style="background-color: #BF0731;">
                                    <p class="mt-30 font-14px dark-color text-left">{!! nl2br($advertisementListBlock->body) !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="margin-top: 25px;">
                                <img class="img-responsive" style="position: relative;"
                                src="{{ asset('assets/images/all/' . $advertisementListBlock->image) }}" alt=""/>
                            </div>  
                        </div>
                        @endif
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== List01 End ==-->
            @elseif ($advertisementSection->section->name == 'List02')
            <!--== List02 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    @foreach ($advertisementSection->advertisementListBlocks as $key => $advertisementListBlock)
                        @if ($advertisementListBlock->status == 1)
                        @if ($key % 2 == 0)
                        <div class="row row-flex {{ $key != 0 ? 'mt-20' : ''}}" style="align-items: flex-start;">              
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner text-left">
                                    <h4 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h4>
                                    <hr class="dark-bg left_line bold-line" style="background-color: #BF0731;">
                                    <p class="mt-30 font-14px dark-color text-left">{!! nl2br($advertisementListBlock->body) !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="margin-top: 25px;">
                                <img class="img-responsive" style="position: relative;"
                                src="{{ asset('assets/images/all/' . $advertisementListBlock->image) }}" alt=""/>
                            </div>  
                        </div>
                        @else
                        <div class="row row-flex {{ $key != 0 ? 'mt-20' : ''}}" style="align-items: flex-start;">
                            <div class="col-md-6 col-sm-12" style="margin-top: 25px;">
                                <img class="img-responsive" style="position: relative;"
                                src="{{ asset('assets/images/all/' . $advertisementListBlock->image) }}" alt=""/>
                            </div>                
                            <div class="col-md-6 col-sm-12">
                                <div class="col-inner text-left">
                                    <h4 class="mt-20 text-uppercase">{{ $advertisementListBlock->title }}</h4>
                                    <hr class="dark-bg left_line bold-line" style="background-color: #BF0731;">
                                    <p class="mt-30 font-14px dark-color text-left">{!! nl2br($advertisementListBlock->body) !!}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== List02 End ==-->
            @endif
        {{-- List Hero End --}}
        @elseif ($advertisementSection->section->type == 'box'  && $advertisementSection->status == 1)
        {{-- Box Hero Start --}}
            @if ($advertisementSection->section->name == 'Box01')
            <!--== Box01 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementBoxBlocks as $advertisementBoxBlock)
                @if ($advertisementBoxBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementBoxBlock->title }}</h4>
                            <hr class="dark-bg center_line bold-line">
                            <p class="mt-30 font-16px dark-color text-center roboto-font">{{ $advertisementBoxBlock->body }}</p>
                        </div>
                    </div>
                    <div class="row mt-50">
                        @foreach ($advertisementBoxBlock->advertisementSubBoxBlocks as $advertisementSubBoxBlock)
                        @php
                            $count = $advertisementBoxBlock->advertisementSubBoxBlocks->where('status', 1)->count();
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
                                <div class="text-center mb-50 feature-box-rounded wow fadeInUp center-feature" data-wow-delay="0.1s">
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
                @endif
                @endforeach
            </section>
            <!--== Box01 End ==-->
            @elseif ($advertisementSection->section->name == 'Box02')
            {{-- Box02 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementBoxBlocks as $advertisementBoxBlock)
                @if ($advertisementBoxBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementBoxBlock->title }}</h4>
                            <hr class="dark-bg center_line bold-line">
                            <p class="mt-30 font-16px dark-color text-center roboto-font">{{ $advertisementBoxBlock->body }}</p>
                        </div>
                    </div>
                    <div class="row mt-50 service-box-style-01">
                        @foreach ($advertisementBoxBlock->advertisementSubBoxBlocks as $advertisementSubBoxBlock)
                        @php
                            $count = $advertisementBoxBlock->advertisementSubBoxBlocks->where('status', 1)->count();
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
                          <div class="text-center mb-50 feature-box-rounded center-feature border-radius-10">
                            <i class="{{ $advertisementSubBoxBlock->icon }} font-40px default-color"></i>
                            <h4 class="mt-0 font-600">{{ $advertisementSubBoxBlock->title }}</h4>
                            <p class="font-400 mt-20">{{ $advertisementSubBoxBlock->body }}</p>
                          </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Box02 End --}}
            @elseif ($advertisementSection->section->name == 'Box03')
            {{-- Box03 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementBoxBlocks as $advertisementBoxBlock)
                @if ($advertisementBoxBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementBoxBlock->title }}</h4>
                            <hr class="dark-bg center_line bold-line">
                            <p class="mt-30 font-16px dark-color text-center roboto-font">{{ $advertisementBoxBlock->body }}</p>
                        </div>
                    </div>
                    <div class="row mt-50 service-box-style-03">
                        @foreach ($advertisementBoxBlock->advertisementSubBoxBlocks as $advertisementSubBoxBlock)
                        @php
                            $count = $advertisementBoxBlock->advertisementSubBoxBlocks->where('status', 1)->count();
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
                            <div class="flipper">
                              <div class="text-center mb-50 main-box">
                                <div class="box-front height-300px {{ $sectionBg == 'white-bg' ? 'grey-bg' : 'white-bg' }}">
                                  <div class="content-wrap">
                                    <i class="{{ $advertisementSubBoxBlock->icon }} font-40px default-color"></i>
                                    <h4 class="font-600">{{ $advertisementSubBoxBlock->title }}</h4>
                                    <p class="font-400 mt-20">{{ $advertisementSubBoxBlock->body }}</p>
                                  </div>
                                </div>
                                <div class="box-back height-300px default-bg">
                                  <div class="content-wrap white-color">
                                    <i class="{{ $advertisementSubBoxBlock->icon }} font-40px"></i>
                                    <h4 class="font-600">{{ $advertisementSubBoxBlock->title }}</h4>
                                    <p class="font-400 mt-20">{{ $advertisementSubBoxBlock->body }}</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Box03 End --}}
            @elseif ($advertisementSection->section->name == 'Box04')
            {{-- Box04 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementBoxBlocks as $advertisementBoxBlock)
                @if ($advertisementBoxBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementBoxBlock->title }}</h4>
                            <hr class="dark-bg center_line bold-line">
                            <p class="mt-30 font-16px dark-color text-center roboto-font">{{ $advertisementBoxBlock->body }}</p>
                        </div>
                    </div>
                    <div class="row mt-50">
                        @foreach ($advertisementBoxBlock->advertisementSubBoxBlocks as $advertisementSubBoxBlock)
                        @php
                            $count = $advertisementBoxBlock->advertisementSubBoxBlocks->where('status', 1)->count();
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
                            <div class="box-icon text-center">
                                <i class="{{ $advertisementSubBoxBlock->icon }} font-50px default-color"></i>
                                <div class="title-section">
                                    <h4 class="mt-10 font-600">{{ $advertisementSubBoxBlock->title }}</h4>
                                    <p class="font-400">{{ $advertisementSubBoxBlock->body }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Box04 End --}}
            @elseif ($advertisementSection->section->name == 'Box05')
            {{-- Box05 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementBoxBlocks as $advertisementBoxBlock)
                @if ($advertisementBoxBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementBoxBlock->title }}</h4>
                            <hr class="dark-bg center_line bold-line">
                            <p class="mt-30 font-16px dark-color text-center roboto-font">{{ $advertisementBoxBlock->body }}</p>
                        </div>
                    </div>
                    <div class="row mt-50">
                        @foreach ($advertisementBoxBlock->advertisementSubBoxBlocks as $advertisementSubBoxBlock)
                        @php
                            $count = $advertisementBoxBlock->advertisementSubBoxBlocks->where('status', 1)->count();
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
                            <div class="box-icon text-center">
                                <img src="{{ asset('assets/images/all/' . $advertisementSubBoxBlock->icon) }}" alt="Parallax Effects" width="150" height="150">
                                <div class="title-section mt-20">
                                    <h4 class="mt-10 font-600">{{ $advertisementSubBoxBlock->title }}</h4>
                                    <p class="font-400">{{ $advertisementSubBoxBlock->body }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Box05 End --}}
            @endif
        {{-- Box Hero End --}}
        @elseif ($advertisementSection->section->type == 'accordion'  && $advertisementSection->status == 1)
        {{-- Accordion Hero Start --}}
            @if ($advertisementSection->section->name == 'Accordion01')
            {{-- Accordion01 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementAccordionBlocks as $advertisementAccordionBlock)
                @if ($advertisementAccordionBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                        <h4 class="text-uppercase mt-0">{{ $advertisementAccordionBlock->title }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-md-8 col-sm-12 centerize-col">
                            <div class="panel-group accordion-style-01" id="accordion-style">
                                @foreach ($advertisementAccordionBlock->advertisementSubAccordionBlocks as $key => $advertisementSubAccordionBlock)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-style" href="#question-{{ $key }}" aria-expanded="false" class="collapsed">
                                            <div class="panel-title text-uppercase">
                                                {{ $advertisementSubAccordionBlock->title }} 
                                                <span class="pull-right">
                                                    @if ($key == 0)
                                                    <i class="ion-android-remove"></i>
                                                    @else
                                                    <i class="ion-android-add"></i>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="question-{{ $key }}" class="panel-collapse collapse {{ $key == 0 ? 'in' : '' }}" aria-expanded="false" role="tablist">
                                        <div class="panel-body">
                                            {!! nl2br($advertisementSubAccordionBlock->body) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Accordion01 End --}}
            @elseif ($advertisementSection->section->name == 'Accordion02')
            {{-- Accordion02 Start --}}
            <section class="dark-bg pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementAccordionBlocks as $advertisementAccordionBlock)
                @if ($advertisementAccordionBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading white-color">
                        <h4 class="text-uppercase mt-0">{{ $advertisementAccordionBlock->title }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-md-8 col-sm-12 centerize-col">
                            <div class="panel-group accordion-style-02" id="accordion-style-02">
                                @foreach ($advertisementAccordionBlock->advertisementSubAccordionBlocks as $key => $advertisementSubAccordionBlock)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-style" href="#dark-{{ $key }}" aria-expanded="false" class="collapsed">
                                            <div class="panel-title text-uppercase white-color">
                                                {{ $advertisementSubAccordionBlock->title }} 
                                                <span class="pull-right">
                                                    @if ($key == 0)
                                                    <i class="ion-android-remove"></i>
                                                    @else
                                                    <i class="ion-android-add"></i>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="dark-{{ $key }}" class="panel-collapse collapse {{ $key == 0 ? 'in' : '' }}" aria-expanded="false" role="tablist">
                                        <div class="panel-body">
                                            {!! nl2br($advertisementSubAccordionBlock->body) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Accordion02 End --}}
            @elseif ($advertisementSection->section->name == 'Accordion03')
            {{-- Accordion03 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementAccordionBlocks as $advertisementAccordionBlock)
                @if ($advertisementAccordionBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                        <h4 class="text-uppercase mt-0">{{ $advertisementAccordionBlock->title }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-md-8 col-sm-12 centerize-col">
                            <div class="panel-group accordion-style-03" id="accordion-style-03">
                                @foreach ($advertisementAccordionBlock->advertisementSubAccordionBlocks as $key => $advertisementSubAccordionBlock)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-style" href="#light-{{ $key }}" aria-expanded="false" class="collapsed">
                                            <div class="panel-title text-uppercase white-color">
                                                {{ $advertisementSubAccordionBlock->title }} 
                                                <span class="pull-right">
                                                    @if ($key == 0)
                                                    <i class="ion-chevron-up"></i>
                                                    @else
                                                    <i class="ion-chevron-down"></i>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="light-{{ $key }}" class="panel-collapse collapse {{ $key == 0 ? 'in' : '' }}" aria-expanded="false" role="tablist">
                                        <div class="panel-body">
                                            {!! nl2br($advertisementSubAccordionBlock->body) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Accordion03 End --}}
            @elseif ($advertisementSection->section->name == 'Accordion04')
            {{-- Accordion04 Start --}}
            <section class="dark-bg pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementAccordionBlocks as $advertisementAccordionBlock)
                @if ($advertisementAccordionBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading white-color">
                        <h4 class="text-uppercase mt-0">{{ $advertisementAccordionBlock->title }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-md-8 col-sm-12 centerize-col">
                            <div class="panel-group accordion-style-04" id="accordion-style-04">
                                @foreach ($advertisementAccordionBlock->advertisementSubAccordionBlocks as $key => $advertisementSubAccordionBlock)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-style" href="#darkstyle-{{ $key }}" aria-expanded="false" class="collapsed">
                                            <div class="panel-title text-uppercase">
                                                {{ $advertisementSubAccordionBlock->title }} 
                                                <span class="pull-right">
                                                    @if ($key == 0)
                                                    <i class="ion-chevron-up"></i>
                                                    @else
                                                    <i class="ion-chevron-down"></i>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="darkstyle-{{ $key }}" class="panel-collapse collapse {{ $key == 0 ? 'in' : '' }}" aria-expanded="false" role="tablist">
                                        <div class="panel-body">
                                            {!! nl2br($advertisementSubAccordionBlock->body) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Accordion04 End --}}
            @elseif ($advertisementSection->section->name == 'Accordion05')
            {{-- Accordion05 Start --}}
            <section class="default-bg pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementAccordionBlocks as $advertisementAccordionBlock)
                @if ($advertisementAccordionBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading white-color">
                        <h4 class="text-uppercase mt-0">{{ $advertisementAccordionBlock->title }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-md-8 col-sm-12 centerize-col">
                            <div class="panel-group accordion-style-02" id="accordion-style-02">
                                @foreach ($advertisementAccordionBlock->advertisementSubAccordionBlocks as $key => $advertisementSubAccordionBlock)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-style" href="#defaultstyle-{{ $key }}" aria-expanded="false" class="collapsed">
                                            <div class="panel-title text-uppercase white-color">
                                                {{ $advertisementSubAccordionBlock->title }} 
                                                <span class="pull-right">
                                                    @if ($key == 0)
                                                    <i class="ion-android-remove"></i>
                                                    @else
                                                    <i class="ion-android-add"></i>
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="defaultstyle-{{ $key }}" class="panel-collapse collapse {{ $key == 0 ? 'in' : '' }}" aria-expanded="false" role="tablist">
                                        <div class="panel-body white-color">
                                            {!! nl2br($advertisementSubAccordionBlock->body) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Accordion05 End --}}
            @endif
        {{-- Image Hero End --}}
        @elseif ($advertisementSection->section->type == 'image'  && $advertisementSection->status == 1)
        {{-- Image Hero Start --}}
            @if ($advertisementSection->section->name == 'Image01')
            {{-- Image01 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementImageBlocks as $advertisementImageBlock)
                @if ($advertisementImageBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                        <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementImageBlock->title }}</h4>
                        </div>
                    </div>
                    <div class="row mt-50">
                        @foreach ($advertisementImageBlock->advertisementSubImageBlocks as $key => $advertisementSubImageBlock)
                            <div class="col-md-12 col-12 mb-30">
                                <figure class="imghvr-{{ $advertisementSubImageBlock->image_hover }}">
                                    <img src="{{ asset('assets/images/all/' . $advertisementSubImageBlock->image) }}" alt="your-image">
                                    <figcaption class="dark-bg">
                                    <div class="center-layout">
                                        <div class="v-align-middle white-color">
                                        <p>{!! nl2br($advertisementSubImageBlock->body) !!}</p>
                                        </div>
                                    </div>
                                    </figcaption>
                                </figure>
                                <h5 class="font-14px dark-color mb-0 mt-10 text-center">{{ $advertisementSubImageBlock->title }}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
            </section>
            {{-- Image01 End --}}
            @elseif ($advertisementSection->section->name == 'Image02')
            {{-- Image02 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementImageBlocks as $advertisementImageBlock)
                @if ($advertisementImageBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementImageBlock->title }}</h4>
                        </div>
                    </div>
                    @foreach ($advertisementImageBlock->advertisementSubImageBlocks as $key => $advertisementSubImageBlock)
                        @if($key % 2 == 0)
                            <div class="row">
                        @endif

                        <div class="col-md-6 col-12 mb-30">
                            <figure class="imghvr-{{ $advertisementSubImageBlock->image_hover }}">
                                <img src="{{ asset('assets/images/all/' . $advertisementSubImageBlock->image) }}" alt="your-image">
                                <figcaption class="dark-bg">
                                    <div class="center-layout">
                                        <div class="white-color">
                                            <p class="p-image-02">{!! nl2br($advertisementSubImageBlock->body) !!}</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <h5 class="font-14px dark-color mb-0 mt-10 text-center">{{ $advertisementSubImageBlock->title }}</h5>
                        </div>

                        @if(($key + 1) % 2 == 0 || $loop->last)
                            </div> <!-- Close the row -->
                        @endif
                    @endforeach
                </div>
                @endif
                @endforeach
            </section>
            {{-- Image02 End --}}
            @elseif ($advertisementSection->section->name == 'Image03')
            {{-- Image03 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementImageBlocks as $advertisementImageBlock)
                @if ($advertisementImageBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementImageBlock->title }}</h4>
                        </div>
                    </div>
                    @foreach ($advertisementImageBlock->advertisementSubImageBlocks as $key => $advertisementSubImageBlock)
                        @if($key % 3 == 0)
                            <div class="row">
                        @endif

                        <div class="col-md-4 col-12 mb-30">
                            <figure class="imghvr-{{ $advertisementSubImageBlock->image_hover }}">
                                <img src="{{ asset('assets/images/all/' . $advertisementSubImageBlock->image) }}" alt="your-image">
                                <figcaption class="dark-bg">
                                    <div class="center-layout">
                                        <div class="white-color">
                                            <p class="p-image-03">{!! nl2br($advertisementSubImageBlock->body) !!}</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <h5 class="font-14px dark-color mb-0 mt-10 text-center">{{ $advertisementSubImageBlock->title }}</h5>
                        </div>

                        @if(($key + 1) % 3 == 0 || $loop->last)
                            </div> <!-- Close the row -->
                        @endif
                    @endforeach
                </div>
                @endif
                @endforeach
            </section>
            {{-- Image03 End --}}
            @elseif ($advertisementSection->section->name == 'Image04')
            {{-- Image04 Start --}}
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                @foreach ($advertisementSection->advertisementImageBlocks as $advertisementImageBlock)
                @if ($advertisementImageBlock->status == 1)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementImageBlock->title }}</h4>
                        </div>
                    </div>
                    @foreach ($advertisementImageBlock->advertisementSubImageBlocks as $key => $advertisementSubImageBlock)
                        @if($key % 4 == 0)
                            <div class="row">
                        @endif

                        <div class="col-md-3 col-12 mb-30">
                            <figure class="imghvr-{{ $advertisementSubImageBlock->image_hover }}">
                                <img src="{{ asset('assets/images/all/' . $advertisementSubImageBlock->image) }}" alt="your-image">
                                <figcaption class="dark-bg">
                                    <div class="center-layout">
                                        <div class="white-color">
                                            <p class="p-image-04">{!! nl2br($advertisementSubImageBlock->body) !!}</p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <h5 class="font-14px dark-color mb-0 mt-10 text-center">{{ $advertisementSubImageBlock->title }}</h5>
                        </div>

                        @if(($key + 1) % 4 == 0 || $loop->last)
                            </div> <!-- Close the row -->
                        @endif
                    @endforeach
                </div>
                @endif
                @endforeach
            </section>
            {{-- Image04 End --}}
            @endif
        {{-- Image Hero End --}}
        @elseif ($advertisementSection->section->type == 'video'  && $advertisementSection->status == 1)
        {{-- Video Hero Start --}}
            @if ($advertisementSection->section->name == 'Video01')
            <!--== Video01 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    @foreach ($advertisementSection->advertisementVideoBlocks as $key => $advertisementVideoBlock)
                        @if ($advertisementVideoBlock->status == 1)
                        <div class="row">
                            <div class="col-sm-8 section-heading text-center">
                                <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementVideoBlock->title }}</h4>
                                <hr class="center_line default-bg">
                                <p class="mt-30 font-16px dark-color text-center roboto-font">{!! nl2br($advertisementVideoBlock->body) !!}</p>
                            </div>
                            <div class="col-sm-8 centerize-col text-center">
                                <div class="video-box mt-50">
                                    <img class="img-responsive" src="{{ asset('assets/images/all/' . $advertisementVideoBlock->image) }}" alt="">
                                    <div class="video-box_overlay">
                                        <div class="center-layout">
                                            <div class="v-align-middle"> 
                                                <a class="popup-youtube" href="{{ $advertisementVideoBlock->url }}">
                                                <div class="play-button"><i class="tr-icon ion-android-arrow-dropright"></i> </div>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== Video01 End ==-->
            @elseif ($advertisementSection->section->name == 'Video02')
            <!--== Video02 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    @foreach ($advertisementSection->advertisementVideoBlocks as $key => $advertisementVideoBlock)
                        @if ($advertisementVideoBlock->status == 1)
                        <div class="row">
                            <div class="col-sm-8 section-heading text-center">
                                <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementVideoBlock->title }}</h4>
                                <hr class="center_line default-bg">
                                <p class="mt-30 font-16px dark-color text-center roboto-font">{!! nl2br($advertisementVideoBlock->body) !!}</p>
                            </div>
                            <div class="col-sm-8 centerize-col text-center">
                                <div class="fit-videos">
                                    <iframe src="{{ $advertisementVideoBlock->url }}" width="640" height="360" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== Video02 End ==-->
            @elseif ($advertisementSection->section->name == 'Video03')
            <!--== Video03 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    @foreach ($advertisementSection->advertisementVideoBlocks as $key => $advertisementVideoBlock)
                        @if ($advertisementVideoBlock->status == 1)
                        <div class="row">
                            <div class="col-md-6 parallax-content">
                                <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementVideoBlock->title }}</h4>
                                <hr class="left_line default-bg">
                                <p class="mt-30 font-16px dark-color roboto-font">{!! nl2br($advertisementVideoBlock->body) !!}</p>
                            </div>
                            <div class="col-md-6">
                                <div class="video-box"> <img class="img-responsive" src="{{ asset('assets/images/all/' . $advertisementVideoBlock->image) }}" alt="">
                                    <div class="video-box_overlay">
                                        <div class="center-layout">
                                            <div class="v-align-middle">
                                                <a class="popup-youtube" href="{{ $advertisementVideoBlock->url }}">
                                                    <div class="play-button">
                                                        <i class="tr-icon ion-android-arrow-dropright"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== Video03 End ==-->
            @endif
        {{-- Video Hero End --}}
        @elseif ($advertisementSection->section->type == 'map'  && $advertisementSection->status == 1)
        {{-- Map Hero Start --}}
            @if ($advertisementSection->section->name == 'Map01')
            <!--== Map01 Start ==-->
            <section class="{{ $sectionBg }} pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    @foreach ($advertisementSection->advertisementMapBlocks as $key => $advertisementMapBlock)
                        @if ($advertisementMapBlock->status == 1)
                        <div class="row">
                            <div class="col-sm-8 section-heading text-center">
                                <h4 class="text-uppercase mt-0 font-700 roboto-font">{{ $advertisementMapBlock->title }}</h4>
                                <hr class="center_line default-bg">
                                <p class="mt-30 font-16px dark-color text-center roboto-font">{!! nl2br($advertisementMapBlock->body) !!}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            {!! nl2br($advertisementMapBlock->url) !!}
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>
            <!--== Map01 End ==-->
            @endif
        {{-- Map Hero End --}}
        @elseif ($advertisementSection->section->type == 'contact'  && $advertisementSection->status == 1)
        {{-- Contact Hero Start --}}
            @if ($advertisementSection->section->name == 'Contact01')
            {{-- Contact01 Start --}}
            <section class="dark-grey-bg pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading">
                            <h4 class="text-uppercase mt-0">お問合せ</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <x-message-box></x-message-box>
                            <form name="send-contact-form" id="send-contact-form" action="{{ route('guest.send.advertisement.contact') }}" method="POST" 
                                class="contact-form-style-01" enctype="multipart/form-data">
                                @csrf
                                <div class="messages"></div>
                                <input type="hidden" id="advertisementId" name="advertisementId" value="{{ $advertisement->id }}">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group">
                                            <label class="sr-only" for="subject">件名</label>
                                            <input type="text" name="subject" class="md-input" id="subject" placeholder="件名 *" value="{{ old('subject') }}">
                                            <span class="error" style="color:#BF0731" id="error-subject"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">名前</label>
                                            <input type="text" name="name" class="md-input" id="name" placeholder="名前 *" value="{{ old('name') }}">
                                            <span class="error" style="color:#BF0731" id="error-name"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') }}">
                                            <span class="error" style="color:#BF0731" id="error-email"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group">
                                            <label class="sr-only" for="phone">電話番号</label>
                                            <input type="text" name="phone" class="md-input" id="phone" placeholder="電話番号 *">
                                            <span class="error" style="color:#BF0731" id="error-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group">
                                            <label class="sr-only" for="content">内容</label>
                                            <textarea name="content" class="md-textarea" id="content" rows="7" placeholder="内容 *">{{ old('content') }}</textarea>
                                            <span class="error" style="color:#BF0731" id="error-content"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="text-left mt-20">
                                            <input type="hidden" id="confirmed" name="confirmed" value="0">
                                            <div class="tr-modal-popup text-center">
                                                <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                                    <span>送信 <i class="ion-android-arrow-forward"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Popup Message Box -->
            <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">お問合せ送信</span>
                <p class="mb-20">お問合せを送信してもよろしいですか?</p>
                <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
            </div>
            {{-- Contact01 End --}}
            @elseif ($advertisementSection->section->name == 'Contact02')
            {{-- Contact02 Start --}}
            <section class="default-bg pt-50 pb-50" id="{{ $advertisementSection->name }}">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 section-heading white-color">
                            <h4 class="text-uppercase mt-0">お問合せ</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <x-message-box></x-message-box>
                            <form name="send-contact-form" id="send-contact-form" action="{{ route('guest.send.advertisement.contact') }}" method="POST" 
                                class="contact-form-style-01" enctype="multipart/form-data">
                                @csrf
                                <div class="messages"></div>
                                <input type="hidden" id="advertisementId" name="advertisementId" value="{{ $advertisement->id }}">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group form-group-02">
                                            <label class="sr-only" for="subject">件名</label>
                                            <input type="text" name="subject" class="md-input style-02" id="subject" placeholder="件名 *" value="{{ old('subject') }}">
                                            <span class="error" style="color:#000" id="error-subject"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group form-group-02">
                                            <label class="sr-only" for="name">名前</label>
                                            <input type="text" name="name" class="md-input style-02" id="name" placeholder="名前 *" value="{{ old('name') }}">
                                            <span class="error" style="color:#000" id="error-name"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group form-group-02">
                                            <label class="sr-only" for="email">メール</label>
                                            <input type="text" name="email" class="md-input style-02" id="email" placeholder="メール *" value="{{ old('email') }}">
                                            <span class="error" style="color:#000" id="error-email"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                        <div class="form-group form-group-02">
                                            <label class="sr-only" for="phone">電話番号</label>
                                            <input type="text" name="phone" class="md-input style-02" id="phone" placeholder="電話番号 *">
                                            <span class="error" style="color:#000" id="error-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="form-group form-group-02">
                                            <label class="sr-only" for="content">内容</label>
                                            <textarea name="content" class="md-textarea style-02" id="content" rows="7" placeholder="内容 *">{{ old('content') }}</textarea>
                                            <span class="error" style="color:#000" id="error-content"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                        <div class="text-left mt-20">
                                            <input type="hidden" id="confirmed" name="confirmed" value="0">
                                            <div class="tr-modal-popup text-center">
                                                <a onclick="showModal()" id="open-modal" class="btn btn-dark btn-md btn-square btn-animate remove-margin">
                                                    <span>送信 <i class="ion-android-arrow-forward"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Popup Message Box -->
            <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">お問合せ送信</span>
                <p class="mb-20">お問合せを送信してもよろしいですか?</p>
                <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
                <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
            </div>
            {{-- Contact02 End --}}
            @endif
        {{-- Contact Hero End --}}
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
                                    @php
                                        $logo = $advertisementSection->advertisementFooterBlocks->where('type', 'logo')->first();
                                        $logoImage = $logo ? $logo->text : null;
                                    @endphp
                                    @if ($logo && $logo->status == 1)
                                    <img class="logo margin-left-auto margin-right-auto" src="{{ asset('assets/images/all/' . $logoImage) }}" alt="ADPRO logo">
                                    @endif
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
{{-- Photography Header06 slide --}}
<script type="text/javascript">
    var tpj=jQuery;
    var revapi28;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_28_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_28_1");
      }else{
        revapi28 = tpj("#rev_slider_28_1").show().revolution({
          sliderType:"standard",
          jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:5500,
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
             mouseScrollReverse:"default",
            onHoverStop:"off",
            arrows: {
              style:"uranus",
              enable:true,
              hide_onmobile:false,
              hide_onleave:false,
              tmp:'',
              left: {
                h_align:"left",
                v_align:"center",
                h_offset:20,
                v_offset:0
              },
              right: {
                h_align:"right",
                v_align:"center",
                h_offset:20,
                v_offset:0
              }
            }
            ,
            bullets: {
              enable:true,
              hide_onmobile:false,
              style:"hermes",
              hide_onleave:false,
              direction:"horizontal",
              h_align:"center",
              v_align:"bottom",
              h_offset:0,
              v_offset:20,
              space:5,
              tmp:''
            }
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[868,768,960,720],
          lazyType:"none",
          shadow:0,
          spinner:"off",
          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,
          shuffle:"off",
          autoHeight:"off",
          fullScreenAutoWidth:"off",
          fullScreenAlignForce:"off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "60px",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
          }
        });
      }
  
              if(revapi28) revapi28.revSliderSlicey();
    });	/*ready*/
</script>
<!-- SLICEY ADD-ON FILES -->
<script type="text/javascript" src="{{ asset('revolution/js/revolution.addon.slicey.min.js?ver=1.0.0') }}"></script>
  
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

{{-- validate --}}
<script>
    function showModal() {
        if (validateSendContactForm()) {
            document.getElementById('open-modal').setAttribute('href', '#modal-popup');
            document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
            document.getElementById('open-modal').click();
        }
    }

    function submitForm() {
        document.getElementById('confirmed').value = '1';
        document.getElementById('send-contact-form').submit();
    }

    function validateSendContactForm() {
        let isValid = true;
        document.querySelectorAll('.error').forEach(el => el.textContent = '');

        const subject = document.getElementById('subject').value.trim();
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const content = document.getElementById('content').value.trim();

        if (!subject) {
            document.getElementById('error-subject').textContent = '件名を入力してください';
            isValid = false;
        } else if (subject.length > 255) {
            isValid = false;
            document.getElementById('error-subject').textContent = '件名は255文字以内でなければなりません';
        }
        
        if (!name) {
            document.getElementById('error-name').textContent = '名前を入力してください';
            isValid = false;
        } else if (name.length > 255) {
            isValid = false;
            document.getElementById('error-name').textContent = '名前は255文字以内でなければなりません';
        }
        
        if (!email) {
            isValid = false;
            document.getElementById('error-email').textContent = 'メールアドレスを入力してください';
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            isValid = false;
            document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください';
        }
        
        if (!phone) {
            isValid = false;
            document.getElementById('error-phone').textContent = '電話番号を入力してください';
        } else if (!/^[\d()+-\s]+$/.test(phone)) {
            isValid = false;
            document.getElementById('error-phone').textContent = '電話番号は数字、+、(、)、-、スペースのみを含めることができます';
        }

        if (!content) {
            document.getElementById('error-content').textContent = '内容を入力してください';
            isValid = false;
        }

        return isValid;
    }
</script>
{{-- section margin nav bar --}}
<script>
    $(document).ready(function() {
        // Get the height of the navbar
        var navbarHeight = $('.navbar').outerHeight();
        
        // Apply the height as a margin to the closest section after the navbar
        $('.navbar').next('section').css('margin-top', navbarHeight + 'px');
        
        // Update margin when window is resized (optional, for responsiveness)
        $(window).resize(function() {
            navbarHeight = $('.navbar').outerHeight();
            $('.navbar').next('section').css('margin-top', navbarHeight + 'px');
        });
    });
</script>
<!--== Javascript Plugins End ==-->
</body>
</html>