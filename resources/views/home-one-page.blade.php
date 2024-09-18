<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="ADPRO is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="creative, animation, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ADPRO - 広告制作とマーケティングのアドプロ</title>
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

  <!--== Header Start ==-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
    <div class="container">
      <!--== Start Atribute Navigation ==-->
      <div class="attr-nav hidden-xs sm-display-none">
        <ul class="social-media-dark social-top">
          <li><a href="#" class="icofont icofont-social-facebook"></a></li>
          <li><a href="#" class="icofont icofont-social-twitter"></a></li>
          <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
        </ul>
      </div>
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="assets/images/all/adpro_blogo.png" alt=""> <img class="logo logo-scrolled" src="assets/images/all/adpro2_blogo.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
          <li><a class="page-scroll" href="#home">Home</a></li>
          <li><a class="page-scroll" href="#about">About</a></li>
          <li><a class="page-scroll" href="#team">Team</a></li>
          <li><a class="page-scroll" href="#service">Services</a></li>
          <li><a class="page-scroll" href="#work">Works</a></li>
          <li><a class="page-scroll" href="#pricing">Pricing</a></li>
          <li><a class="page-scroll" href="#client">Clients</a></li>
          <li><a class="page-scroll" href="#contact">Contact</a></li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->

  {{-- HEADER START --}}

  <!--== Hero Scene Start ==-->
  <section class="pt-0 pb-0" id="home">
    <div class="parallax-overlay z-index-0"></div>
    <div class="container relative view-height-100vh">
      <div class="simple-content-slider text-center">
        <div class="simple-content-slider-text">
          <div class="simple-content-text-inner">
            <div class="row">
              <div class="col-md-10 centerize-col">
                <div class="white-color text-center">
                  <span class="font-60px font-700 play-font wow fadeInUp font-italic" data-wow-delay="0.1s">We Design Digital Brand Expericences.</span>
                  <h1 class="white-color font-700 font-120px line-height-120 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60 wow fadeInUp" data-wow-delay="0.2s">Design Studio</h1>
                  <p class="mt-50"><a class="btn btn-lg btn-light-outline btn-square wow fadeInUp" data-wow-delay="0.3s">Purchase ADPRO</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="view-height-100vh absolute z-index-minus2 top-0 width-100-percent">
      <div class="view-height-100vh">
        <div class="slide-img parallax-bg fixed-bg" data-parallax-bg-image="assets/images/slides/home-bg-48.jpg" data-parallax-speed="0.8" data-parallax-direction="up"></div>
      </div>
    </div>
  </section>
  <!--== Hero Scene End ==-->
  <!--== Hero Slider Start ==-->
  <section class="remove-padding transition-none">
    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
  <ul>	<!-- SLIDE  -->
      <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/images/slides/home-bg-1-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="assets/images/slides/home-bg-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
  
          <!-- LAYER NR. 1 -->
          <div class="hero-text-wrap">
          <div class="tp-caption NotGeneric-Title   tp-resizeme"
               id="slide-3045-layer-1"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-fontsize="['70','70','70','45']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[10,10,10,10]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 5; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;">Better. Best. Awesome!</div>
  
  
          <!-- LAYER NR. 2 -->
          <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
               id="slide-3045-layer-2"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 6; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;letter-spacing: 0px;font-size:18px;">We may be strong as individuals but together we are invincible. </div>
  
          <!-- LAYER NR. 3 -->
          <div class="tp-caption NotGeneric-Icon   tp-resizeme"
               id="slide-3045-layer-3"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 7; white-space: nowrap;text-transform:left;cursor:default;"><a class="btn btn-color btn-lg btn-default" tabindex="0">Learn Now</a> </div>
  
              </div>
      </li>
      <!-- SLIDE  -->
      <li data-index="rs-3046" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/images/slides/home-bg-2-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="assets/images/slides/home-bg-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
  
          <!-- LAYER NR. 1 -->
          <div class="hero-text-wrap">
          <div class="tp-caption NotGeneric-Title   tp-resizeme"
               id="slide-3045-layer-1"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-fontsize="['70','70','70','45']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[10,10,10,10]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 5; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;">Think. Explore.Know.</div>
  
          <!-- LAYER NR. 2 -->
          <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
               id="slide-3045-layer-4"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 6; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;letter-spacing: 0px;font-size:18px;">Only advertising would take a word most people run from and treat it as a good thing. </div>
  
          <!-- LAYER NR. 3 -->
          <div class="tp-caption NotGeneric-Icon   tp-resizeme"
               id="slide-3045-layer-3"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 7; white-space: nowrap;text-transform:left;cursor:default;"><a class="btn btn-light-outline btn-lg btn-default" tabindex="0">Start a Project</a> </div>
          </div>
      </li>
      <!-- SLIDE  -->
      <li data-index="rs-3047" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/images/slides/home-bg-10-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="assets/images/slides/home-bg-10.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
  
          <!-- LAYER NR. 1 -->
          <div class="hero-text-wrap">
          <div class="tp-caption NotGeneric-Title   tp-resizeme"
               id="slide-3045-layer-1"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-fontsize="['70','70','70','45']"
              data-lineheight="['70','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[10,10,10,10]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 5; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;">Digital Development </div>
  
          <!-- LAYER NR. 2 -->
          <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
               id="slide-3045-layer-4"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 6; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;letter-spacing: 0px;font-size:18px;">The path from good idea to great product starts </div>
  
          <!-- LAYER NR. 3 -->
          <div class="tp-caption NotGeneric-Icon   tp-resizeme"
               id="slide-3045-layer-3"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 7; white-space: nowrap;text-transform:left;cursor:default;"><a class="btn btn-color btn-lg btn-default" tabindex="0">What We Do</a> </div>
          </div>
      </li>
      <!-- SLIDE  -->
  
  </ul>
  <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);"></div>	</div>
  </div>
    </section>
    <!--== Hero Slider End ==-->
    <!--== Hero Slider Start ==-->
  <section class="home-slider light-slider dark-block">
    <div class="default-slider slick no-direction">
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-3.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text">
            <div class="container">
              <div class="row">
              	<div class="col-md-8">
              		<div class="dark-color">
        						<h2 class="font-700">Creative & Innovative Digital Agency.</h2>
        						<h5 class="white-color">Only advertising would take a word most people <br>run from and treat it as a good thing.</h5>
        						<p class="mt-30"><a class="btn btn-dark btn-lg btn-default">Buy Template</a> </p>
              		</div>
              	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-4.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text">
            <div class="container">
              <div class="row">
              	<div class="col-md-8 col-md-offset-4">
              		<div class="dark-color">
        						<h2 class="font-700">Let's Do Something Amazing.</h2>
        						<h5 class="white-color">Only advertising would take a word most people <br>run from and treat it as a good thing.</h5>
        						<p class="mt-30"><a class="btn btn-dark btn-lg btn-default">Buy Template</a> </p>
              		</div>
              	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Hero Slider End ==-->
  <!--== Hero Slider Start ==-->
  <section class="home-slider no-direction">
    <div class="default-slider slick">
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-6.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h1 class="white-color font-700 text-uppercase font-100px line-height-90">Digital <br>Creations</h1>
                <h4 class="white-color roboto-font font-300">Your expectise of this is critical to your success</h4>
                <p class="text-center mt-30"><a class="btn btn-light-outline btn-lg radius-0">Purchase Theme</a> <a class="btn btn-color btn-lg radius-0">Start a Project</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-7.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h1 class="white-color font-700 text-uppercase font-100px line-height-90">Innovate <br>Transform</h1>
                <h4 class="white-color roboto-font font-300">Core to the success of what we achieve for our clients</h4>
                <p class="text-center mt-30"><a class="btn btn-light-outline btn-lg radius-0">Purchase Theme</a> <a class="btn btn-light-outline btn-lg radius-0">Start a Project</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-8.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h1 class="white-color font-700 text-uppercase font-100px line-height-90">Introducing <br>New Trends</h1>
                <h4 class="white-color roboto-font font-300">Design thinking guides every digital product we create.</h4>
                <p class="text-center mt-30"><a class="btn btn-color btn-lg radius-0">Purchase Theme</a> <a class="btn btn-light-outline btn-lg radius-0">Start a Project</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Hero Slider End ==-->
  <!--== Hero Slider Start ==-->
  <section class="remove-padding transition-none">
    <div id="rev_slider_347_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="parallaxjoy" data-source="gallery" style="background:linear-gradient(45deg, rgba(63,13,60,1) 0%, rgba(63,13,60,1) 100%);padding:0px;">
  <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
      <div id="rev_slider_347_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
  <ul>	<!-- SLIDE  -->
      <li data-index="rs-967" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="assets/images/transparent.png" data-bgcolor='linear-gradient(45deg, rgba(63,13,60,1) 0%, rgba(63,13,60,1) 100%)' style='background:linear-gradient(45deg, rgba(63,13,60,1) 0%, rgba(63,13,60,1) 100%)' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
  
          <!-- LAYER NR. 1 -->
          <div class="tp-caption   tp-resizeme"
               id="slide-967-layer-25"
               data-x="['left','left','left','left']" data-hoffset="['21','21','21','-9']"
               data-y="['top','top','top','top']" data-voffset="['45','45','45','30']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:15;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 5;"><img src="assets/images/object/OBJ_triangle_s.png" alt="" data-ww="['55px','55px','55px','56px']" data-hh="48px" width="111" height="96" data-no-retina> </div>
  
          <!-- LAYER NR. 2 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
               id="slide-967-layer-7"
               data-x="['left','left','left','left']" data-hoffset="['-146','-146','-50','-86']"
               data-y="['top','top','top','top']" data-voffset="['38','38','131','54']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:240deg;opacity:0;fb:20px;","to":"o:1;rZ:-25;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 6;"><img src="assets/images/object/OBJ_pen.png" alt="" data-ww="['530px','530px','300px','265px']" data-hh="['60px','60px','34px','30px']" width="530" height="60" data-no-retina> </div>
  
  
  
          <!-- LAYER NR. 3 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10"
               id="slide-967-layer-20"
               data-x="['left','left','left','left']" data-hoffset="['1079','1079','587','315']"
               data-y="['top','top','top','top']" data-voffset="['512','512','692','471']"
                          data-width="['100','100','100','50']"
              data-height="['100','100','100','50']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:35;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 8;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;">
  <div class="rs-looped rs-wave"  data-speed="8" data-angle="0" data-radius="3px" data-origin="50% 50%"> </div></div>
  
          <!-- LAYER NR. 4 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
               id="slide-967-layer-1"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','-1']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-3']"
                          data-width="2500"
              data-height="['500','500','400','300']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-basealign="slide"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":750,"frame":"0","from":"sX:3;sY:3;opacity:0;","to":"o:1;rZ:-15;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 9;background-color:rgb(191,7,49);"> </div>
  
          <!-- LAYER NR. 5 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
               id="slide-967-layer-11"
               data-x="['left','left','left','left']" data-hoffset="['76','76','58','-23']"
               data-y="['top','top','top','top']" data-voffset="['593','593','677','503']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:-180deg;opacity:0;fb:20px;","to":"o:1;rZ:25;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 10;"><img src="assets/images/object/OBJ_mouse.png" alt="" data-ww="['300px','300px','150px','150px']" data-hh="['400px','400px','200','200px']" width="300" height="400" data-no-retina> </div>
  
          <!-- LAYER NR. 6 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
               id="slide-967-layer-13"
               data-x="['left','left','left','left']" data-hoffset="['884','884','579','355']"
               data-y="['top','top','top','top']" data-voffset="['232','232','288','204']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:-180deg;opacity:0;fb:20px;","to":"o:1;rZ:15;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 11;"><img src="assets/images/object/OBJ_eraser.png" alt="" data-ww="['230px','230px','20%','165px']" data-hh="['130px','130px','130px','93px']" width="230" height="130" data-no-retina> </div>
  
          <!-- LAYER NR. 7 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2"
               id="slide-967-layer-6"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-width="['700','700','560','400']"
              data-height="['600','600','500','500']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.7;sY:0.7;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 12;border-color:rgb(255,255,255);border-style:solid;border-width:20px 20px 20px 20px;"> </div>
  
          <!-- LAYER NR. 8 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
               id="slide-967-layer-2"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-100','-80']"
                          data-fontsize="['100','100','80','50']"
              data-lineheight="['100','100','80','50']"
              data-letterspacing="['30','30','30','20']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"delay":550,"split":"chars","splitdelay":0.1000000000000000055511151231257827021181583404541015625,"speed":2500,"split_direction":"random","frame":"0","from":"y:50px;sX:1;sY:1;opacity:0;fb:20px;","color":"#001536","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[30,30,30,20]"
  
              style="z-index: 13; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 600; color: #ffffff; letter-spacing: 30px;font-family:Poppins;">ADPRO </div>
  
          <!-- LAYER NR. 9 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
               id="slide-967-layer-3"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-fontsize="['100','100','80','50']"
              data-lineheight="['100','100','80','50']"
              data-letterspacing="['30','30','30','20']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"delay":600,"split":"chars","splitdelay":0.1000000000000000055511151231257827021181583404541015625,"speed":2500,"split_direction":"random","frame":"0","from":"y:50px;sX:1;sY:1;opacity:0;fb:20px;","color":"#001536","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[30,30,30,20]"
  
              style="z-index: 14; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 600; color: #ffffff; letter-spacing: 30px;font-family:Poppins;">AGENCY </div>
  
  
          <!-- LAYER NR. 10 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10"
               id="slide-967-layer-27"
               data-x="['left','left','left','left']" data-hoffset="['1047','1047','715','715']"
               data-y="['top','top','top','top']" data-voffset="['728','728','574','574']"
                          data-width="50"
              data-height="100"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:15;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 16;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;border-radius:25px 25px 25px 25px;">
  <div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="4px" data-origin="50% 50%"> </div></div>
  
          <!-- LAYER NR. 11 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-4"
               id="slide-967-layer-12"
               data-x="['left','left','left','left']" data-hoffset="['687','687','452','271']"
               data-y="['top','top','top','top']" data-voffset="['356','356','499','328']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:-140deg;opacity:0;fb:20px;","to":"o:1;rZ:-15;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 17;"><img src="assets/images/object/OBJ_headphones.png" alt="" data-ww="['710px','710px','400px','355px']" data-hh="['630px','630px','355px','315px']" width="710" height="630" data-no-retina> </div>
  
          <!-- LAYER NR. 12 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
               id="slide-967-layer-8"
               data-x="['left','left','left','left']" data-hoffset="['332','332','175','82']"
               data-y="['top','top','top','top']" data-voffset="['-3','-3','109','54']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:-180deg;opacity:0;fb:20px;","to":"o:1;rZ:-15;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 18;"><img src="assets/images/object/OBJ_glasses.png" alt="" data-ww="['500px','500px','350px','250px']" data-hh="['170px','170px','119px','85px']" width="500" height="170" data-no-retina> </div>
  
          <!-- LAYER NR. 13 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10"
               id="slide-967-layer-21"
               data-x="['left','left','left','left']" data-hoffset="['1158','1158','658','416']"
               data-y="['top','top','top','top']" data-voffset="['19','19','334','60']"
                          data-width="['100','100','50','50']"
              data-height="['100','100','50','50']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 19;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;border-radius:50px 50px 50px 50px;">
  <div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="4px" data-origin="50% 50%"> </div></div>
  
          <!-- LAYER NR. 14 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
               id="slide-967-layer-9"
               data-x="['left','left','left','left']" data-hoffset="['899','899','490','306']"
               data-y="['top','top','top','top']" data-voffset="['-136','-136','31','24']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:-180deg;opacity:0;fb:20px;","to":"o:1;rZ:-15;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 20;"><img src="assets/images/object/OBJ_watch.png" alt="" data-ww="['320px','320px','200px','160px']" data-hh="['450px','450px','281px','225px']" width="320" height="450" data-no-retina> </div>
  
          <!-- LAYER NR. 15 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-10"
               id="slide-967-layer-22"
               data-x="['left','left','left','left']" data-hoffset="['-203','-203','-4','42']"
               data-y="['top','top','top','top']" data-voffset="['349','349','328','360']"
                          data-width="['100','100','100','50']"
              data-height="['100','100','100','50']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 21;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;border-radius:50px 50px 50px 50px;">
  <div class="rs-looped rs-wave"  data-speed="6" data-angle="0" data-radius="6px" data-origin="50% 50%"> </div></div>
  
          <!-- LAYER NR. 16 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
               id="slide-967-layer-10"
               data-x="['left','left','left','left']" data-hoffset="['-294','-294','-82','-106']"
               data-y="['top','top','top','top']" data-voffset="['179','179','285','158']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":200,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:180deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;rZ:15;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 22;"><img src="assets/images/object/OBJ_phone.png" alt="" data-ww="['390px','390px','250px','195px']" data-hh="['620px','620px','397px','310px']" width="390" height="620" data-no-retina> </div>
  
  
          <!-- LAYER NR. 17 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
               id="slide-967-layer-16"
               data-x="['left','left','center','left']" data-hoffset="['100','100','0','-226']"
               data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','64']"
                          data-width="200"
              data-height="5"
              data-whitespace="nowrap"
              data-visibility="['on','on','on','off']"
  
              data-type="shape"
              data-basealign="slide"
              data-responsive_offset="on"
  
              data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 24;background-color:rgb(255,255,255);"> </div>
  
          <!-- LAYER NR. 18 -->
          <div class="tp-caption   tp-resizeme tp-svg-layer"
               id="slide-967-layer-17"
               data-x="['left','left','center','left']" data-hoffset="['175','175','0','-153']"
               data-y="['bottom','bottom','bottom','bottom']" data-voffset="['86','86','50','91']"
                          data-width="50"
              data-height="50"
              data-whitespace="nowrap"
              data-visibility="['on','on','on','off']"
  
              data-type="svg"
              data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"1500","ease":"Power4.easeOut"}]'
              data-svg_src="assets/images/object/ic_arrow_downward_24px.svg"
              data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
              data-basealign="slide"
              data-responsive_offset="on"
  
              data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 25; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; color: #ffffff;cursor:pointer;">
  <div class="rs-looped rs-slideloop"  data-easing="Power1.easeIn" data-speed="1" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"> </div></div>
  
          <!-- LAYER NR. 19 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-12"
               id="slide-967-layer-19"
               data-x="['left','left','left','left']" data-hoffset="['94','94','123','39']"
               data-y="['top','top','top','top']" data-voffset="['77','77','138','65']"
                          data-width="['60','60','60','30']"
              data-height="['60','60','60','30']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 26;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;border-radius:50px 50px 50px 50px;">
  <div class="rs-looped rs-wave"  data-speed="6" data-angle="0" data-radius="5px" data-origin="50% 50%"> </div></div>
  
          <!-- LAYER NR. 20 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
               id="slide-967-layer-23"
               data-x="['left','left','left','left']" data-hoffset="['1081','1081','657','394']"
               data-y="['top','top','top','top']" data-voffset="['109','109','128','298']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:25;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 27;">
  <div class="rs-looped rs-wave"  data-speed="7" data-angle="0" data-radius="5px" data-origin="50% 50%"><img src="assets/images/object/OBJ_triangle.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['95px','95px','95px','95px']" width="221" height="191" data-no-retina> </div></div>
  
          <!-- LAYER NR. 21 -->
          <div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
               id="slide-967-layer-24"
               data-x="['left','left','left','left']" data-hoffset="['-31','-31','31','-34']"
               data-y="['top','top','top','top']" data-voffset="['548','548','589','494']"
                          data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="image"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:-40;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 28;">
  <div class="rs-looped rs-wave"  data-speed="6" data-angle="0" data-radius="6px" data-origin="50% 50%"><img src="assets/images/object/OBJ_triangle.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['95px','95px','95px','95px']" width="221" height="191" data-no-retina> </div></div>
  
          <!-- LAYER NR. 22 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-12"
               id="slide-967-layer-26"
               data-x="['left','left','left','left']" data-hoffset="['42','42','24','57']"
               data-y="['top','top','top','top']" data-voffset="['257','257','209','226']"
                          data-width="['40','40','40','20']"
              data-height="['40','40','40','20']"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:45;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 29;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;">
  <div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="5px" data-origin="50% 50%"> </div></div>
  
          <!-- LAYER NR. 23 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-11"
               id="slide-967-layer-28"
               data-x="['left','left','left','left']" data-hoffset="['1173','1173','764','764']"
               data-y="['top','top','top','top']" data-voffset="['652','652','723','723']"
                          data-width="30"
              data-height="30"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:center;y:middle;rZ:360deg;opacity:0;","to":"o:1;rZ:-15;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 30;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;">
  <div class="rs-looped rs-wave"  data-speed="8" data-angle="0" data-radius="8px" data-origin="50% 50%"> </div></div>
      </li>
  </ul>
  <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
  </div>
    </section>
    <!--== Hero Slider End ==-->
    <!--== Hero Slider Corporate ==-->
  <section class="remove-padding transition-none">
    <div id="rev_slider_1059_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept121" data-source="gallery" style="background-color:#000000;padding:0px;">
  <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
      <div id="rev_slider_1059_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
  <ul>    <!-- SLIDE  -->
      <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="assets/images/slides/home-bg-11.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
  
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-shape tp-shapewrapper "
               id="slide-2972-layer-1"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-width="full"
              data-height="full"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-basealign="slide"
              data-responsive_offset="off"
              data-responsive="off"
              data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
  
          <!-- LAYER NR. 2 -->
          <div class="tp-caption Concept-SubTitle   tp-resizeme rs-parallaxlevel-2"
               id="slide-2972-layer-4"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-57','-54']"
                          data-fontsize="['25','25','20','20']"
              data-lineheight="['25','25','20','20']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 6; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 500;">The Best Ideas Take </div>
  
          <!-- LAYER NR. 3 -->
          <div class="tp-caption Concept-Title   tp-resizeme rs-parallaxlevel-2"
               id="slide-2972-layer-2"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-fontsize="['70','70','50','40']"
              data-lineheight="['70','70','50','40']"
              data-width="['none','none','none','400']"
              data-height="none"
              data-whitespace="['nowrap','nowrap','nowrap','normal']"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
              data-textAlign="['center','center','center','center']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 7; white-space: nowrap;text-transform:left;font-family: 'Playfair Display', serif;">CORPORATE PORTFOLIO </div>
  
          <!-- LAYER NR. 4 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2"
               id="slide-2972-layer-5"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['50','50','43','39']"
                          data-width="80"
              data-height="2"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1900,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 8;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0.50);border-width:0px;"> </div>
      </li>
      <!-- SLIDE  -->
      <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Elegant Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="assets/images/slides/home-bg-41.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
  
          <!-- BACKGROUND VIDEO LAYER -->
          <div class="hero-text-wrap">
          <div class="rs-background-video-layer"
              data-forcerewind="on"
              data-volume="mute"
              data-videowidth="100%"
              data-videoheight="100%"
              data-videomp4="assets/videos/Agency.mp4"
              data-videopreload="auto"
              data-videoloop="loop"
              data-aspectratio="16:9"
              data-autoplay="true"
              data-autoplayonlyfirsttime="false"
  ></div>
          <!-- LAYER NR. 10 -->
          <div class="tp-caption tp-shape tp-shapewrapper "
               id="slide-2973-layer-1"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-width="full"
              data-height="full"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-basealign="slide"
              data-responsive_offset="off"
              data-responsive="off"
              data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":"bytrigger","ease":"Power2.easeInOut"},{"delay":"bytrigger","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
              data-lasttriggerstate="keep"
              style="z-index: 16;text-transform:left;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
  
          <!-- LAYER NR. 11 -->
          <div class="tp-caption Concept-SubTitle   tp-resizeme rs-parallaxlevel-2"
               id="slide-2973-layer-4"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['-65','-65','-57','-54']"
                          data-fontsize="['25','25','20','20']"
              data-lineheight="['25','25','20','20']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 6; white-space: nowrap;text-transform:left;font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 500;">Innovation For Prosperity </div>
  
          <!-- LAYER NR. 12 -->
          <div class="tp-caption Concept-Title   tp-resizeme rs-parallaxlevel-2"
               id="slide-2973-layer-2"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                          data-fontsize="['70','70','50','40']"
              data-lineheight="['70','70','50','40']"
              data-width="['none','none','none','400']"
              data-height="none"
              data-whitespace="['nowrap','nowrap','nowrap','normal']"
  
              data-type="text"
              data-responsive_offset="on"
  
              data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
              data-textAlign="['center','center','center','center']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[10,10,10,10]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 18; white-space: nowrap;text-transform:left;font-family: 'Playfair Display', serif;">CREATIVE DESIGNER </div>
  
          <!-- LAYER NR. 13 -->
          <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2"
               id="slide-2973-layer-5"
               data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['middle','middle','middle','middle']" data-voffset="['50','50','43','39']"
                          data-width="80"
              data-height="2"
              data-whitespace="nowrap"
  
              data-type="shape"
              data-responsive_offset="on"
  
              data-frames='[{"from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;","speed":1500,"to":"o:1;","delay":1900,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
              data-textAlign="['left','left','left','left']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[0,0,0,0]"
  
              style="z-index: 19;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0.50);border-width:0px;"> </div>
  
  
          </div>
  
      </li>
  
  </ul>
  <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
  </div>
    </section>
    <!--== Hero Slider Corporate ==-->
    <!--== Photography Rev Slider Start ==-->
  <section class="remove-padding transition-none">
    <div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="parallax-zoom-slices" data-source="gallery" style="background:#000000;padding:0px;">
          <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
              <div id="rev_slider_28_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul>	<!-- SLIDE  -->
              <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-12-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                  <!-- MAIN IMAGE -->
                  <img src="assets/images/slides/home-bg-12.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
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
  
                      style="z-index: 14; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">Model Agency </div>
  
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
  
                      style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">Design Studio</div>
  
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
  
                      style="z-index: 16; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">ADPRO Photography </div>
              </li>
              <!-- SLIDE  -->
              <li data-index="rs-83" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-13-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #1a1336">
                  <!-- MAIN IMAGE -->
                  <img src="assets/images/slides/home-bg-13.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
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
  
                      style="z-index: 14; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">Model Agency </div>
  
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
  
                      style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">Personal Fashion </div>
  
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
  
                      style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">ADPRO Photography </div>
              </li>
              <!-- SLIDE  -->
              <li data-index="rs-85" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-14-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px rgba(0, 0, 0, 0.15)">
                  <!-- MAIN IMAGE -->
                  <img src="assets/images/slides/home-bg-14.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
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
  
                      style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">Model Agency</div>
  
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
  
                      style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">New Collection </div>
  
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
  
                      style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">ADPRO Photography </div>
              </li>
              <!-- SLIDE  -->
              <li data-index="rs-84" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-15-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #373344">
                  <!-- MAIN IMAGE -->
                  <img src="assets/images/slides/home-bg-15.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="130" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
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
  
                      style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">Model Agency</div>
  
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
  
                      style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">Simple & Creative </div>
  
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
  
                      style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">ADPRO Photography </div>
              </li>
              <!-- SLIDE  -->
              <li data-index="rs-86" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-16-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                  <!-- MAIN IMAGE -->
                  <img src="assets/images/slides/home-bg-16.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
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
  
                      style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">Model Agency </div>
  
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
  
                      style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">Amazing Measures </div>
  
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
  
                      style="z-index: 11; white-space: nowrap; font-size: 55px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;">ADPRO Photography </div>
              </li>
          </ul>
          <div class="tp-bannertimer" style="height: 3px; background: rgba(255,255,255,0.25);"></div>	</div>
    </div>
    </section>
    <!--== Photography Rev Slider End ==-->
    <!--== Hero Slider Start ==-->
  <section class="remove-padding transition-none">
    <div id="rev_slider_1163_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="blendmode-header" data-source="gallery" style="background-color:transparent;padding:0px;">
  <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
      <div id="rev_slider_1163_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul>	<!-- SLIDE  -->
              <li data-index="rs-3203" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-delay="9000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="assets/videos/To-The-Left.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                  <!-- LAYERS -->

                  <!-- BACKGROUND VIDEO LAYER -->
                  <div class="rs-background-video-layer"
                      data-forcerewind="on"
                      data-volume="mute"
                      data-videowidth="100%"
                      data-videoheight="100%"
                      data-videomp4="assets/videos/To-The-Left.mp4"
                      data-videopreload="auto"
                      data-videoloop="loop"
                      data-forceCover="1"
                      data-aspectratio="16:9"
                      data-autoplay="true"
                      data-autoplayonlyfirsttime="false"
          ></div>
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper "
                       id="slide-3203-layer-18"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                  data-width="full"
                      data-height="full"
                      data-whitespace="nowrap"

                      data-type="shape"
                      data-actions=''
                      data-basealign="slide"
                      data-responsive_offset="off"
                      data-responsive="off"
                      data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      data-blendmode="lighten"
                      data-lasttriggerstate="reset"
                      style="z-index: 5;background-color:rgba(124, 211, 255, 0.90);border-color:rgba(0, 0, 0, 0);"> </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption   tp-resizeme tp-svg-layer"
                       id="slide-3203-layer-19"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                  data-width="['600','600','500','400']"
                      data-height="['600','600','500','400']"
                      data-whitespace="nowrap"

                      data-type="svg"
                      data-svg_src="../../assets/images/ic_layers_24px.svg"
                      data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                      data-responsive_offset="on"

                      data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      data-blendmode="overlay"

                      style="z-index: 6; min-width: 600px; max-width: 600px; max-width: 600px; max-width: 600px; color: rgba(255, 255, 255, 0.20);"> </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-shape tp-shapewrapper "
                       id="slide-3203-layer-16"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                  data-width="full"
                      data-height="full"
                      data-whitespace="nowrap"

                      data-type="shape"
                      data-basealign="slide"
                      data-responsive_offset="off"
                      data-responsive="off"
                      data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      data-blendmode="lighten"
                      data-lasttriggerstate="reset"
                      style="z-index: 7;background-color:rgba(156, 139, 255, 0.90);border-color:rgba(0, 0, 0, 0);"> </div>

                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption  "
                       id="slide-3203-layer-1"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-100','-90']"
                                  data-fontsize="['180','180','150','100']"
                      data-lineheight="['180','180','150','100']"
                      data-width="['640','480','480','320']"
                      data-height="none"
                      data-whitespace="normal"

                      data-type="text"
                      data-responsive_offset="off"
                      data-responsive="off"
                      data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.3;sY:1.3;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[50,48,40,25]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      data-blendmode="overlay"

                      style="z-index: 8; min-width: 640px; max-width: 640px; white-space: normal; font-size: 180px; line-height: 180px; font-weight: 400; color: rgba(0, 0, 0, 1.00);font-family: 'Kaushan Script', cursive;letter-spacing:-5px;">ADPRO  </div>

                  <!-- LAYER NR. 5 -->
                  <div class="tp-caption  "
                       id="slide-3203-layer-2"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-12','-21']"
                                  data-fontsize="['20','20','17','17']"
                      data-lineheight="['20','20','17','17']"
                      data-width="['480','480','480','320']"
                      data-height="none"
                      data-whitespace="normal"

                      data-type="text"
                      data-responsive_offset="off"
                      data-responsive="off"
                      data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:20px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-textAlign="['center','center','center','center']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      data-blendmode="overlay"

                      style="z-index: 9; min-width: 480px; max-width: 480px; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;letter-spacing:3px;">STARTUP & INNOVATIVE AGENCY </div>

                  <!-- LAYER NR. 6 -->
                  <div class="tp-caption rev-btn "
                       id="slide-3203-layer-4"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['80','80','87','71']"
                                  data-lineheight="['60','60','60','50']"
                      data-width="none"
                      data-height="none"
                      data-whitespace="nowrap"

                      data-type="button"
                      data-actions='[{"event":"mouseenter","action":"stoplayer","layer":"slide-3203-layer-18","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-3203-layer-16","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-3203-layer-18","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-3203-layer-16","delay":""},{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                      data-responsive_offset="off"
                      data-responsive="off"
                      data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"1000","ease":"Power2.easeInOut","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 0);"}]'
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[50,50,50,30]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[50,50,50,30]"
                      data-blendmode="overlay"

                      style="z-index: 10; white-space: nowrap; font-size: 13px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:2px 2px 2px 2px;border-radius:5px 5px 5px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:2px;cursor:pointer;">I WANT TO BUY </div>
              </li>
          </ul>
      <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
    </div>
</section>
<!--== Hero Slider End ==-->
<!--== Hero Slider Start ==-->
<section class="remove-padding transition-none">
    <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="creative-freedom" data-source="gallery" style="background-color:#1f1d24;padding:0px;">
    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
    <ul>    <!-- SLIDE  -->
        <li data-index="rs-2978" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="assets/images/slides/home-bg-33-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Development" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="assets/images/slides/home-bg-33.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- BACKGROUND VIDEO LAYER -->
            <div class="rs-background-video-layer"
                data-forcerewind="on"
                data-volume="mute"
                data-videowidth="100%"
                data-videoheight="100%"
                data-videomp4="assets/videos/Sail-Away.mp4"
                data-videopreload="auto"
                data-videoloop="loop"
                data-aspectratio="16:9"
                data-autoplay="true"
                data-autoplayonlyfirsttime="false"
    ></div>
            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                 id="slide-2978-layer-1"
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

                style="z-index: 5;text-transform:left;background-color:rgba(191, 7, 49, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                 id="slide-2978-layer-4"
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

                style="z-index: 6;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                 id="slide-2978-layer-3"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-91','-91','-81','-64']"
                            data-fontsize="['14','14','14','12']"
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

                style="z-index: 7; white-space: nowrap;text-transform:left;">WE MAKE AWESOME CLASSIC DESIGN </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                 id="slide-2978-layer-2"
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

                style="z-index: 8; white-space: nowrap;text-transform:left;">Digital<br/>
    Development Execellence </div>

            <!-- LAYER NR. 5 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                 id="slide-2978-layer-5"
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

                style="z-index: 9;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 6 -->
            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                 id="slide-2978-layer-6"
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

                style="z-index: 10; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">GOTO SLIDE TWO </div>
        </li>
        <!-- SLIDE  -->
        <li data-index="rs-2979" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="assets/images/slides/home-bg-34-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Quality" data-param1="02" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="assets/images/slides/home-bg-34.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 7 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                 id="slide-2979-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
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

                style="z-index: 11;text-transform:left;background-color:rgba(18, 12, 20, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 8 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                 id="slide-2979-layer-4"
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

                style="z-index: 12;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 9 -->
            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                 id="slide-2979-layer-3"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-91','-91','-81','-64']"
                            data-fontsize="['14','14','14','12']"
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

                style="z-index: 13; white-space: nowrap;text-transform:left;">GREAT THEME GREAT CODE </div>

            <!-- LAYER NR. 10 -->
            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                 id="slide-2979-layer-2"
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

                style="z-index: 14; white-space: nowrap;text-transform:left;">Quality Web<br/>
    Presentations </div>

            <!-- LAYER NR. 11 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                 id="slide-2979-layer-5"
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

                style="z-index: 15;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 12 -->
            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                 id="slide-2979-layer-6"
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

                style="z-index: 16; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">JUST MOVE </div>
        </li>
        <!-- SLIDE  -->
        <li data-index="rs-2980" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="assets/images/slides/home-bg-35-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Classic" data-param1="03" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="assets/images/slides/home-bg-35.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 13 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                 id="slide-2980-layer-1"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
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

                style="z-index: 17;text-transform:left;background-color:rgba(18, 12, 20, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 14 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                 id="slide-2980-layer-4"
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

                style="z-index: 18;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 15 -->
            <div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2"
                 id="slide-2980-layer-3"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['middle','middle','middle','middle']" data-voffset="['-91','-91','-81','-64']"
                            data-fontsize="['14','14','14','12']"
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

                style="z-index: 19; white-space: nowrap;text-transform:left;">WE ARE CLASSIC AGENCY </div>

            <!-- LAYER NR. 16 -->
            <div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1"
                 id="slide-2980-layer-2"
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

                style="z-index: 20; white-space: nowrap;text-transform:left;">Innovative<br/>
    Technology </div>

            <!-- LAYER NR. 17 -->
            <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3"
                 id="slide-2980-layer-5"
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

                style="z-index: 21;text-transform:left;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

            <!-- LAYER NR. 18 -->
            <div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15"
                 id="slide-2980-layer-6"
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

                style="z-index: 22; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">BACK TO THE FIRST SLIDE </div>
        </li>
    </ul>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
    </div>
  </section>
  <!--== Hero Slider End ==-->

  <!--== Hero Slider Start ==-->
  <section class="remove-padding transition-none">
    <div id="rev_slider_151_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="blur-effect-slider" data-source="gallery" style="background-color:#2d3032;padding:0px;">
    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
    	<div id="rev_slider_151_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
    <ul>	<!-- SLIDE  -->
    	<li data-index="rs-411" data-transition="fadethroughtransparent" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/images/slides/home-bg-21-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    		<!-- MAIN IMAGE -->
    		<img src="assets/images/slides/home-bg-21.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
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

    			style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:'Montserrat', sans-serif;">Innovative<br/>Design </div>

    				</div>
    			</div>

            </div>
          </div>
    		</div>

    	</li>
    	<!-- SLIDE  -->
    	<li data-index="rs-412" data-transition="fadethroughtransparent" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/images/home-bg-22-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Two" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    		<!-- MAIN IMAGE -->
    		<img src="assets/images/slides/home-bg-22.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
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

    			style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:'Montserrat', sans-serif;">Strategic<br/>Plans </div>




    				</div>
    			</div>

            </div>
          </div>
    		</div>




    	</li>
    	<!-- SLIDE  -->
    	<li data-index="rs-413" data-transition="fadethroughtransparent" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/images/slides/home-bg-23-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Three" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    		<!-- MAIN IMAGE -->
    		<img src="assets/images/slides/home-bg-23.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
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

            			style="z-index: 11; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:'Montserrat', sans-serif;">Art<br/>Makers </div>




    				</div>
    			</div>

            </div>
          </div>
    		</div>



    	</li>
    </ul>
    <div style="" class="tp-static-layers">

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

    			style="z-index: 17; min-width: 260px; max-width: 260px; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;">1 <div class="blurslider-line" style="display:inline-block;width:40px;height:1px;background:#fff;margin: 10px 20px 4px 15px;"></div>Creativity </div>

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
    			style="z-index: 18;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> </div>

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

    			style="z-index: 19;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>

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

    			style="z-index: 20; min-width: 260px; max-width: 260px; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;">2 <div class="blurslider-line" style="display:inline-block;width:40px;height:1px;background:#fff;margin: 10px 20px 4px 15px;"></div>Digital Solutions </div>

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
    			style="z-index: 21;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> </div>

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

    			style="z-index: 22;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>

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

    			style="z-index: 23; min-width: 260px; max-width: 260px; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:'Montserrat', sans-serif;">3 <div class="blurslider-line" style="display:inline-block;width:40px;height:1px;background:#fff;margin: 10px 20px 4px 15px;"></div>Marketing </div>

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
    			style="z-index: 24;background-color:rgba(0, 0, 0, 0.25);cursor:pointer;"> </div>

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

    			style="z-index: 25;background-color:rgba(255, 255, 255, 0.05);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>
    </div>
    <div class="tp-bannertimer" style="height: 5px; background-color: rgba(255, 255, 255, 0.25);"></div>	</div>
    </div><!-- END REVOLUTION SLIDER -->
  </section>
  <!--== Hero Slider End ==-->

  {{-- HEADER END --}}

  {{-- ABOUT US START --}}

  <!--== About Company Start ==-->
  <section class="pt-0 pb-0 grey-bg">
    <div class="container-fluid">
      <div class="row row-flex flex-center">
      	<div class="col-md-6 col-sm-12 bg-flex-cover" style="background-image: url(assets/images/bg-left-img-6.jpg);"></div>
      		<div class="col-md-6 col-sm-12">
      			<div class="col-inner spacer text-center">
      				<div class="sign"><img class="img-responsive" src="assets/images/sign.png"/></div>
      				<h2 class="mt-20 text-uppercase font-700">Innovation in digital media<br> consulting excellence.</h2>
      				<hr class="dark-bg center_line bold-line">
      				<h5 class="mt-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper ex ac velit varius semper. Mauris at dolor nec ante ultricies aliquam ac vitae diam. Quisque sodales vehicula elementum. Phasellus tempus tellus vitae ullamcorper hendrerit.</h5>
      			</div>
      		</div>
      </div>
    </div>
  </section>
  <!--== About Company End ==-->

  <!--== Who We Are Start ==-->
  <section class="dark-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 xs-mb-30 wow fadeInLeft" data-wow-delay="0.1s">
          <h2 class="mt-0 font-700 white-color">We create effective Interface & Pre-build Websites.</h2>
        	<hr class="left-line default-bg bold-line">
          <p class="mt-30 font-300 font-16px">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis <br> cutting-edge deliverables.</p>
        	<p class="mt-30 font-300 font-16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim urna, accumsan quis erat nec, condimentum laoreet nulla. Pellentesque<br> porttitor est eu arcu condimentum aliquet non id felis.</p>
          <a class="btn btn-md btn-color btn-square mt-20">Know More</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row">
              <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
              <div class="pull-left"><i class="icon-paintbrush font-40px default-color mt-40"></i></div>
              <div class="pull-right">
                <span class="font-80px default-color">01</span>
                <h5 class="mt-0 font-600 white-color">Productivity</h5>
                <p class="font-300">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
               </div>
              </div>
              <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
              <div class="pull-left"><i class="icon-streetsign font-40px default-color mt-40"></i></div>
              <div class="pull-right">
                <span class="font-80px default-color">02</span>
                <h5 class="mt-0 font-600 white-color">Innovative Ideas</h5>
                <p class="font-300">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
              </div>
              </div>
              <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
              <div class="pull-left"><i class="icon-aperture font-40px default-color mt-40"></i></div>
              <div class="pull-right">
                <span class="font-80px default-color">03</span>
                <h5 class="mt-0 font-600 white-color">Code Ninja's</h5>
                <p class="font-300">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
              </div>
              </div>

              <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
              <div class="pull-left"><i class="icon-mobile font-40px default-color mt-40"></i></div>
              <div class="pull-right">
                <span class="font-80px default-color">04</span>
                <h5 class="mt-0 font-600 white-color">Elegant Design</h5>
                <p class="font-300">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Who We Are End ==-->

  <!--== About Company Start ==-->
  <section class="pt-0 pb-0">
    <div class="container-fluid">
      <div class="row row-flex flex-center">
        <div class="col-md-6 col-sm-4 col-xs-12 relative">
          <div class="img-center" style="background-image: url(assets/images/bg-left-img-7.jpg);"></div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 dark-bg">
          <div class="center-layout text-center">
            <div class="v-align-middle white-color">
              <div class="col-inner spacer">
                <h2 class="play-font font-700">We're Perfect <br>Creative Experience</h2>
                <hr class="center_line default-bg bold-line">
                <p class="roboto-font font-300">Objectively innovate empowered manufactured products whereas parallel platforms.
  Holisticly predominate extensible testing procedures for reliable supply chains. </p>
                <p><a href="#." class="btn btn-md btn-square btn-light-outline mt-30">Meet The Team</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 relative">
          <div class="img-center" style="background-image: url(assets/images/bg-right-img-8.jpg);"></div>
        </div>
      </div>
    </div>
  </section>
  <!--== About Company End ==-->

  <!--== About Us Start ==-->
  <section class="grey-bg" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 centerize-col text-center">
          <div class="sign width-30-percent"><img class="img-responsive" src="assets/images/sign.png"></div>
          <h3 class="mt-30 default-color font-700 play-font font-italic">Immortalizing Ideas</h3>
          <h2 class="mt-0 font-700">Creative Solutions Since Always.</h2>
        	<p class="mt-20 font-300 font-20px line-height-30 play-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim urna, accumsan quis erat nec, condimentum laoreet nulla. Pellentesque porttitor est eu arcu condimentum aliquet non id felis.</p>
          <a class="btn btn-md btn-dark btn-square mt-20">About Us</a>
        </div>
      </div>
    </div>
  </section>
  <!--== About Us End ==-->

  <!--== About Company Start ==-->
  <section class="pt-0 pb-0 grey-bg">
    <div class="container-fluid">
      <div class="row row-flex flex-center">
      	<div class="col-md-6 col-sm-12 bg-flex-cover" style="background-image: url(assets/images/bg-left-img-5.jpg);"></div>
      		<div class="col-md-6 col-sm-12">
      			<div class="col-inner spacer">
      				<div class="service-slider text-center slick">
						<div class="service-item">
							<h5 class="default-color text-uppercase mt-0 font-600">Devoted to Design Agency Excellence</h5>
							<h2 class="mt-10 font-700">Case studies are vital for showcasing <br>the skills of your team.</h2>
							<hr class="dark-bg center_line bold-line">
							<div class="row mt-30">
								<div class="col-md-12">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper ex ac velit varius semper. Mauris at dolor nec ante ultricies aliquam ac vitae diam. Quisque sodales vehicula elementum. Phasellus tempus tellus vitae ullamcorper hendrerit.</p>
									<p class="mt-30"><a class="btn btn-dark btn-md btn-default">About Company</a> </p>
								</div>
							</div>
						</div>
        				<div class="service-item">
							<h5 class="default-color text-uppercase font-600">Create Meaningful Impact</h5>
							<h2 class="mt-10 font-700">We are at the heart of the <br>digital marketing sector.</h2>
							<hr class="dark-bg center_line bold-line">
							<div class="row mt-30">
								<div class="col-md-12">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper ex ac velit varius semper. Mauris at dolor nec ante ultricies aliquam ac vitae diam. Quisque sodales vehicula elementum. Phasellus tempus tellus vitae ullamcorper hendrerit.</p>
									<p class="mt-30"><a class="btn btn-dark-outline btn-md btn-default">About Company</a> </p>
								</div>
							</div>
						</div>
       					<div class="service-item">
							<h5 class="default-color text-uppercase font-600">Individual & Interactive Digital Agency</h5>
							<h2 class="mt-10 font-700">We research and strategy to uncover <br>brands most powerful truths.</h2>
							<hr class="dark-bg center_line bold-line">
							<div class="row mt-30">
								<div class="col-md-12">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper ex ac velit varius semper. Mauris at dolor nec ante ultricies aliquam ac vitae diam. Quisque sodales vehicula elementum. Phasellus tempus tellus vitae ullamcorper hendrerit.</p>
									<p class="mt-30"><a class="btn btn-dark btn-md btn-default">About Company</a> </p>
								</div>
							</div>
						</div>
        		</div>
      		</div>
      	</div>
      </div>
    </div>
  </section>
  <!--== About Company End ==-->

  {{-- ABOUT US END --}}

  {{-- TEAM MEMBER START --}}

  <!--== Team Members Start ==-->
  <section class="white-bg" id="team">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
            <h3 class="mt-0 default-color font-700 play-font font-italic">Meet Our Team</h3>
            <h2 class="mt-0 font-700">Ideas That Get Australians Talking.</h2>
        	</div>
        </div>
        <div class="row mt-50">
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.1s">
            <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-13.jpg" class="img-responsive" alt="team-01">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Barry Arroyo</h4>
                    <p class="member-subtitle text-uppercase">Lead Product Designer</p>
                    <ul class="member-icons">
                      <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Member End ==-->
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
            <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-14.jpg" class="img-responsive" alt="team-02">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Debra Johnson</h4>
                    <p class="member-subtitle text-uppercase">Creative Director</p>
                    <ul class="member-icons">
                      <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Member End ==-->
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-15.jpg" class="img-responsive" alt="team-03">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Andrew Dean</h4>
                    <p class="member-subtitle text-uppercase">CEO / Founder</p>
                    <ul class="member-icons">
                      <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Member End ==-->
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
            <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-16.jpg" class="img-responsive" alt="team-04">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Luara Prior</h4>
                    <p class="member-subtitle text-uppercase">Marketing Manager</p>
                    <ul class="member-icons">
                      <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
          			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== Member End ==-->
        </div>
    </div>
  </section>
  <!--== Team Members End ==-->
  <!--== Our Team Start ==-->
  <section class="grey-bg dark-block">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h5 class="default-color mt-0 text-uppercase">Strategic Digital Solutions</h5>
          <h3 class="roboto-font font-400">Team means together everyone <br>achieves more</h3>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.1s">
          <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-01.jpg" class="img-responsive" alt="team-01">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Barry Arroyo</h4>
                  <p class="member-subtitle text-uppercase">Lead Product Designer</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--== Member End ==-->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
          <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-02.jpg" class="img-responsive" alt="team-02">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Debra Johnson</h4>
                  <p class="member-subtitle text-uppercase">Creative Director</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--== Member End ==-->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
          <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-03.jpg" class="img-responsive" alt="team-03">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Andrew Dean</h4>
                  <p class="member-subtitle text-uppercase">CEO / Founder</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--== Member End ==-->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
          <div class="team-member-container gallery-image-hover"> <img src="assets/images/team/team-04.jpg" class="img-responsive" alt="team-04">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Luara Prior</h4>
                  <p class="member-subtitle text-uppercase">Marketing Manager</p>
                  <ul class="member-icons">
                    <li class="social-icon"><a href="#" class="icofont icofont-social-facebook"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-twitter"></a></li>
			  		<li class="social-icon"><a href="#" class="icofont icofont-social-behance"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--== Member End ==-->
      </div>
    </div>
  </section>
  <!--== Our Team End ==-->

  <!--== Our Team Start ==-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h5 class="default-color mt-0">Strategic Digital Solutions</h5>
          <h2 class="mt-0 font-700">Our Team</h2>
          <hr class="center_line dark-bg bold-line">
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.1s">
          <figure class="imghvr-blur text-center"><img src="assets/images/team/team-01.jpg" alt="your-image">
            <figcaption class="secondary-bg">
              <div class="center-layout">
					  	<div class="v-align-middle">
					  		<h4 class="mb-0 mt-10 default-color">Barry Arroyo</h4>
					  		<p class="white-smoke text-uppercase">Lead Product Designer</p>
					  	</div>
					  </div>
            </figcaption>
          </figure>
          <ul class="social-default-no-border mt-20 mb-20">
			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
			  <li><a href="#" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
			  <li><a href="#" class="behance"><i class="icofont icofont-social-behance"></i></a></li>
			  <li><a href="#" class="dribble"><i class="icofont icofont-social-dribble"></i></a></li>
		  </ul>
        </div>
        <!--== Member End ==-->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
          <figure class="imghvr-blur text-center"><img src="assets/images/team/team-02.jpg" alt="your-image">
            <figcaption class="secondary-bg">
              <div class="center-layout">
					  	<div class="v-align-middle">
					  		<h4 class="mb-0 mt-10 default-color">Debra Johnson</h4>
					  		<p class="white-smoke text-uppercase">Creative Director</p>
					  	</div>
					  </div>
            </figcaption>
          </figure>
          <ul class="social-default-no-border mt-20 mb-20">
			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
			  <li><a href="#" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
			  <li><a href="#" class="pinterest"><i class="icofont icofont-social-pinterest"></i></a></li>
			  <li><a href="#" class="flicker"><i class="icofont icofont-social-flikr"></i></a></li>
		  </ul>
        </div>
        <!--== Member End ==-->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
          <figure class="imghvr-blur text-center"><img src="assets/images/team/team-03.jpg" alt="your-image">
            <figcaption class="secondary-bg">
              <div class="center-layout">
					  	<div class="v-align-middle">
					  		<h4 class="mb-0 mt-10 default-color">Andrew Dean</h4>
					  		<p class="white-smoke text-uppercase">CEO / Founder</p>
					  	</div>
					  </div>
            </figcaption>
          </figure>
          <ul class="social-default-no-border mt-20 mb-20">
			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
			  <li><a href="#" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
			  <li><a href="#" class="google-plus"><i class="icofont icofont-social-google-plus"></i></a></li>
			  <li><a href="#" class="linkedin"><i class="icofont icofont-social-linkedin"></i></a></li>
		  </ul>
        </div>
        <!--== Member End ==-->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
          <figure class="imghvr-blur text-center"><img src="assets/images/team/team-04.jpg" alt="your-image">
            <figcaption class="secondary-bg">
              <div class="center-layout">
					  	<div class="v-align-middle">
					  		<h4 class="mb-0 mt-10 default-color">Luara Prior</h4>
					  		<p class="white-smoke text-uppercase">Marketing Manager</p>
					  	</div>
					  </div>
            </figcaption>
          </figure>
          <ul class="social-default-no-border mt-20 mb-20">
    			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
    			  <li><a href="#" class="linkedin"><i class="icofont icofont-social-linkedin"></i></a></li>
    			  <li><a href="#" class="github"><i class="icofont icofont-social-github"></i></a></li>
    			  <li><a href="#" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
    		  </ul>
        </div>
        <!--== Member End ==-->
      </div>
    </div>
  </section>
  <!--== Our Team End ==-->

  <!--== Testimonails Start ==-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
            <h5 class="default-color text-uppercase mt-0">What Our Client Say</h5>
            <h2 class="mt-10 font-700">Our Testimonails</h2>
				    <hr class="dark-bg center_line bold-line">
            <h4>No Coding required for build your page. ADPRO delivers<br> everything you need to create a modern web page. </h4>
        </div>
      </div>
      <div class="row">
        <div class="slick testimonial">
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<!--== Slide ==-->
				<div class="testimonial-item">
				  <div class="testimonial-content">
				  	<img class="img-responsive img-circle text-center" src="assets/images/team/avatar-1.jpg" alt="avatar-1"/>
					<h5 class="font-700 mb-0">Felix Lewis</h5>
					<span class="default-color font-14px">SEO Manager</span>
					<p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
				  </div>
				</div>
        	</div>

        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<!--== Slide ==-->
				<div class="testimonial-item">
				  <div class="testimonial-content">
				  	<img class="img-responsive img-circle text-center" src="assets/images/team/avatar-2.jpg" alt="avatar-2"/>
					<h5 class="font-700 mb-0">Helen Ellis</h5>
					<span class="default-color font-14px">Head of Product</span>
					<p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<!--== Slide ==-->
				<div class="testimonial-item">
				  <div class="testimonial-content"> <img class="img-responsive img-circle" src="assets/images/team/avatar-3.jpg" alt="avatar-1"/>
					<h5 class="font-700 mb-0">Daniel Lane</h5>
					<span class="default-color font-14px">CEO / Founder</span>
					<p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
        		<!--== Slide ==-->
				<div class="testimonial-item">
				  <div class="testimonial-content"> <img class="img-responsive img-circle" src="assets/images/team/avatar-1.jpg" alt="avatar-1"/>
					<h5 class="font-700 mb-0">Jackie Taylor</h5>
					<span class="default-color font-14px">Graphics Designer </span>
					<p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
				  </div>
				</div>
        	</div>

		</div>
      </div>
    </div>
  </section>
  <!--== Testimonails End ==-->

  <!--== Team Members Start ==-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
          <div class="col-sm-8 section-heading">
            <h1 class="font-700">Meet Our Team</h1>
            <hr class="center_line default-bg bold-line">
          </div>
      </div>
        <div class="row mt-50">
          <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-delay="0.1s">
            <figure class="imghvr-blur text-center"><img src="assets/images/team/team-01.jpg" alt="your-image">
              <figcaption class="default-bg">
                <div class="center-layout">
  					  	<div class="v-align-middle">
  					  		<h4 class="mb-0 mt-10 white-color">Barry Arroyo</h4>
  					  		<p class="white-smoke text-uppercase">Lead Product Designer</p>
  					  	</div>
  					  </div>
              </figcaption>
            </figure>
            <ul class="social-default-no-border mt-20 mb-20">
      			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
      			  <li><a href="#" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
      			  <li><a href="#" class="behance"><i class="icofont icofont-social-behance"></i></a></li>
      			  <li><a href="#" class="dribble"><i class="icofont icofont-social-dribble"></i></a></li>
      		  </ul>
          </div>
          <!--== Member End ==-->
          <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
            <figure class="imghvr-blur text-center"><img src="assets/images/team/team-02.jpg" alt="your-image">
              <figcaption class="default-bg">
                <div class="center-layout">
  					  	<div class="v-align-middle">
  					  		<h4 class="mb-0 mt-10 white-color">Debra Johnson</h4>
  					  		<p class="white-smoke text-uppercase">Creative Director</p>
  					  	</div>
  					  </div>
              </figcaption>
            </figure>
            <ul class="social-default-no-border mt-20 mb-20">
      			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
      			  <li><a href="#" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
      			  <li><a href="#" class="pinterest"><i class="icofont icofont-social-pinterest"></i></a></li>
      			  <li><a href="#" class="flicker"><i class="icofont icofont-social-flikr"></i></a></li>
      		  </ul>
          </div>
          <!--== Member End ==-->
          <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <figure class="imghvr-blur text-center"><img src="assets/images/team/team-03.jpg" alt="your-image">
              <figcaption class="default-bg">
                <div class="center-layout">
  					  	<div class="v-align-middle">
  					  		<h4 class="mb-0 mt-10 white-color">Andrew Dean</h4>
  					  		<p class="white-smoke text-uppercase">CEO / Founder</p>
  					  	</div>
  					  </div>
              </figcaption>
            </figure>
            <ul class="social-default-no-border mt-20 mb-20">
      			  <li><a href="#" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
      			  <li><a href="#" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
      			  <li><a href="#" class="google-plus"><i class="icofont icofont-social-google-plus"></i></a></li>
      			  <li><a href="#" class="linkedin"><i class="icofont icofont-social-linkedin"></i></a></li>
      		  </ul>
          </div>
          <!--== Member End ==-->
        </div>
    </div>
  </section>
  <!--== Team Members End ==-->

  <!--== Testimonails Start ==-->
  <section class="dark-bg pb-30">
    <div class="container">
        <div class="row">
          <div class="col-sm-8 section-heading">
            <h5 class="default-color text-uppercase">Our Statisfy Customers</h5>
            <h2 class="play-font white-color font-700">Great Experience. Above & Beyond As <span class="default-color">The Service</span> Describe</h2>
          </div>
        </div>
        <div class="row mt-10">
          <div class="testimonial-style-3">
          	<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
          		<!--== Slide ==-->
      				<div class="testimonial-item">
      				  <div class="testimonial-content">
      				  	<img class="img-responsive img-circle text-center" src="assets/images/team/avatar-1.jpg" alt="avatar-1"/>
      					  <p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
                  <h5 class="font-700 mb-0 white-color">Felix Lewis</h5>
        					<span class="default-color font-14px">SEO Manager</span>
                  <div class="social-icons-style-02">
                    <ul class="md-icon mt-20 mb-20">
                      <li><a class="fb" href="#."><i class="icofont icofont-social-facebook"></i></a></li>
                      <li><a class="tw" href="#."><i class="icofont icofont-social-twitter"></i></a></li>
                      <li><a class="be" href="#."><i class="icofont icofont-social-behance"></i></a></li>
                    </ul>
                  </div>
      				  </div>
      				</div>
          	</div>

          	<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
          		<!--== Slide ==-->
      				<div class="testimonial-item">
      				  <div class="testimonial-content">
      				  	<img class="img-responsive img-circle text-center" src="assets/images/team/avatar-2.jpg" alt="avatar-2"/>
                  <p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
      					  <h5 class="font-700 mb-0 white-color">Helen Ellis</h5>
      					  <span class="default-color font-14px">Head of Product</span>
                  <div class="social-icons-style-02">
                    <ul class="md-icon mt-20 mb-20">
                      <li><a class="fb" href="#."><i class="icofont icofont-social-facebook"></i></a></li>
                      <li><a class="tw" href="#."><i class="icofont icofont-social-twitter"></i></a></li>
                      <li><a class="be" href="#."><i class="icofont icofont-social-behance"></i></a></li>
                    </ul>
                  </div>
      				  </div>
      				</div>
  			    </div>
      			<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
      				<!--== Slide ==-->
      				<div class="testimonial-item">
      				  <div class="testimonial-content"> <img class="img-responsive img-circle" src="assets/images/team/avatar-3.jpg" alt="avatar-1"/>
                  <p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
      					  <h5 class="font-700 mb-0 white-color">Daniel Lane</h5>
      					  <span class="default-color font-14px">CEO / Founder</span>
                  <div class="social-icons-style-02">
                    <ul class="md-icon mt-20 mb-20">
                      <li><a class="fb" href="#."><i class="icofont icofont-social-facebook"></i></a></li>
                      <li><a class="tw" href="#."><i class="icofont icofont-social-twitter"></i></a></li>
                      <li><a class="be" href="#."><i class="icofont icofont-social-behance"></i></a></li>
                    </ul>
                  </div>
      				  </div>
      				</div>
      			</div>
  		    </div>
        </div>
    </div>
  </section>
  <!--== Testimonails End ==-->

  {{-- TEAM MEMBER END --}}

  {{-- SERVICE START --}}

  <!--== Our Services Start ==-->
  <section class="grey-bg" id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 centerize-col text-center">
          <h3 class="mt-0 default-color font-700 play-font font-italic">Media That Matters</h3>
          <h2 class="mt-0 font-700">Brand Builders & Storytellers.</h2>
        	<p class="mt-30 font-300 font-20px line-height-30 play-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim urna, accumsan quis erat nec, condimentum laoreet nulla. Pellentesque porttitor est eu arcu condimentum aliquet non id felis.</p>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 col-sm-4 col-xs-12 mt-40 mb-30 feature-box text-center wow fadeInUp" data-wow-delay="0.1s">
          <i class="icon-tools font-40px dark-color fade-icon white-bg-icon circle-icon"></i>
          <h3 class="mt-10 font-700 play-font">Branding</h3>
          <p class="font-400 play-font">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 mt-40 mb-30 feature-box text-center wow fadeInUp" data-wow-delay="0.2s">
          <i class="icon-lightbulb font-40px dark-color fade-icon white-bg-icon circle-icon"></i>
          <h3 class="mt-10 font-700 play-font">Marketing</h3>
          <p class="font-400 play-font">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 mt-40 mb-30 feature-box text-center wow fadeInUp" data-wow-delay="0.3s">
          <i class="icon-desktop font-40px dark-color fade-icon white-bg-icon circle-icon"></i>
          <h3 class="mt-10 font-700 play-font">Development</h3>
          <p class="font-400 play-font">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 mt-40 mb-30 feature-box text-center wow fadeInUp" data-wow-delay="0.4s">
          <i class="icon-pencil font-40px dark-color fade-icon white-bg-icon circle-icon"></i>
          <h3 class="mt-10 font-700 play-font">Web Design</h3>
          <p class="font-400 play-font">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 mt-40 mb-30 feature-box text-center wow fadeInUp" data-wow-delay="0.5s">
          <i class="icon-pictures font-40px dark-color fade-icon white-bg-icon circle-icon"></i>
          <h3 class="mt-10 font-700 play-font">Social Media</h3>
          <p class="font-400 play-font">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 mt-40 mb-30 feature-box text-center wow fadeInUp" data-wow-delay="0.6s">
          <i class="icon-genius font-40px dark-color fade-icon white-bg-icon circle-icon"></i>
          <h3 class="mt-10 font-700 play-font">Research</h3>
          <p class="font-400 play-font">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
        </div>
      </div>
    </div>
  </section>
  <!--== Our Services End ==-->

  <!--== Service Boxes Style 01 Start ==-->
  <section class="pb-0">
    <div class="container">
        <div class="row mt-50 service-box-style-01">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                <i class="icofont icofont-magic font-40px default-color"></i>
             	  <h4 class="mt-0 font-600">Design</h4>
              	<p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                <i class="icofont icofont-globe-alt font-40px default-color"></i>
             	  <h4 class="mt-0 font-600">Development</h4>
              	<p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                <i class="icofont icofont-headphone-alt font-40px default-color"></i>
             	  <h4 class="mt-0 font-600">Marketing</h4>
              	<p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
        </div>
    </div>

  </section>
  <!--== Service Boxes Style 01 End ==-->

  <!--== Service Boxes Style 02 Start ==-->
  <section class="white-bg pb-0">
	<div class="container-fluid">
      <div class="row row-flex mt-50 service-box-style-02">
        <div class="col-md-3">
          <div class="col-inner bordered-bg dark-color feature-box border-right">
              <div class="icon-heading">
        				<i class="icofont icofont-magic font-40px default-color"></i>
        				<h5 class="text-uppercase">Responsive Framework</h5>
              </div>
              <div class="hidden-content">
      				    <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="col-inner bordered-bg dark-color feature-box border-right">
            <div class="icon-heading">
              <i class="icofont icofont-polygonal font-40px default-color"></i>
              <h5 class="text-uppercase">Innovative Design</h5>
            </div>
            <div class="hidden-content">
                <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="col-inner bordered-bg dark-color feature-box border-right">
            <div class="icon-heading">
              <i class="icofont icofont-rocket font-40px default-color"></i>
              <h5 class="text-uppercase">Retina Ready</h5>
            </div>
            <div class="hidden-content">
                <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
            </div>
          </div>
        </div>
		      <div class="col-md-3">
          <div class="col-inner bordered-bg dark-color feature-box">
            <div class="icon-heading">
              <i class="icofont icofont-gears font-40px default-color"></i>
              <h5 class="text-uppercase">Easy to Use</h5>
            </div>
            <div class="hidden-content">
                <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Service Boxes Style 02 End ==-->


  <!--== Service Boxes Style 03 Start ==-->
  <section>
    <div class="container">
        <div class="row mt-50 service-box-style-03">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="flipper">
              <div class="text-center mb-50 main-box">
                <div class="box-front height-300px white-bg">
                  <div class="content-wrap">
                    <i class="icofont icofont-headphone-alt font-40px default-color"></i>
                    <h4 class="font-600">Marketing</h4>
                    <p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                </div>
                <div class="box-back height-300px default-bg">
                  <div class="content-wrap white-color">
                    <i class="icofont icofont-headphone-alt font-40px"></i>
                    <h4 class="font-600">Marketing</h4>
                    <p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="flipper">
              <div class="text-center mb-50 main-box">
                <div class="box-front height-300px white-bg">
                  <div class="content-wrap">
                    <i class="icofont icofont-globe-alt font-40px default-color"></i>
                    <h4 class="font-600">Development</h4>
                    <p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                </div>
                <div class="box-back height-300px default-bg">
                  <div class="content-wrap white-color">
                    <i class="icofont icofont-globe-alt font-40px"></i>
                    <h4 class="font-600">Development</h4>
                    <p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="flipper">
              <div class="text-center mb-50 main-box">
                <div class="box-front height-300px white-bg">
                  <div class="content-wrap">
                    <i class="icofont icofont-magic font-40px default-color"></i>
                    <h4 class="font-600">Design</h4>
                    <p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                </div>
                <div class="box-back height-300px default-bg">
                  <div class="content-wrap white-color">
                    <i class="icofont icofont-magic font-40px"></i>
                    <h4 class="font-600">Design</h4>
                    <p class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

  </section>
  <!--== Service Boxes Style 03 End ==-->

  {{-- SERVICE END --}}

  <!--== Our Works Start ==-->
  <section class="white-bg" id="work">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 centerize-col text-center">
          <h3 class="mt-0 default-color font-700 play-font font-italic">Our Awesome Projects</h3>
          <h2 class="mt-0 font-700">Brilliance Is Our Business.</h2>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-12">
            <div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mb-100">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item dark">
                  All
              </div>
              <div data-filter=".branding" class="cbp-filter-item">
                  Branding
              </div>
              <div data-filter=".print" class="cbp-filter-item">
                  Print Design
              </div>
              <div data-filter=".web-design" class="cbp-filter-item">
                  Web Design
              </div>
              <div data-filter=".advertising" class="cbp-filter-item">
                  Advertising
              </div>
              <div data-filter=".photography" class="cbp-filter-item">
                  Photography
              </div>
            </div>
          </div>

          <div class="col-md-12">

          <div id="portfolio-gallery" class="cbp">
              <div class="cbp-item branding col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/55.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Daniel Barkle</h4>
                        <p class="default-color">Visual Identity</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item print web-design col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/56.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Versions Packaging</h4>
                        <p class="default-color">Art Direction</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item print advertising col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/57.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Juicy Redruby</h4>
                        <p class="default-color">Print Media</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item branding photography col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/58.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Fruit Up</h4>
                        <p class="default-color">Web Design</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item branding web-design col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/59.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Clini Cloud</h4>
                        <p class="default-color">Typography</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item print advertising col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/60.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Ovik Luxury</h4>
                        <p class="default-color">Branding</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item branding photography col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/61.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Loeffler Randall</h4>
                        <p class="default-color">User Interface</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item print web-design col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/62.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Sofia Palmero</h4>
                        <p class="default-color">Identity</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="cbp-item branding web-design col-md-4 col-sm-6 with-spacing">
                <figure class="imghvr-blur text-center">
                  <img src="assets/images/portfolio/grid/63.jpg" alt="your-image">
                  <figcaption class="dark-bg">
                    <div class="center-layout">
                      <div class="v-align-middle">
                        <h4 class="mb-0 mt-10 white-color">Eva Trio</h4>
                        <p class="default-color">Branding</p>
                      </div>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
      </div>

    </div>
  </section>
  <!--== Our Works End ==-->

  {{-- PRICING START --}}

  <!--== Pricing Table Style 01 Start ==-->
  <section class="white-bg">
    <div class="container">
        <div class="row mt-50">
          <div class="col-md-4 pricing-table col-sm-4">
            <div class="pricing-box">
              <h3 class="dark-color mb-0">Personal</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website.</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>10</span></h2>
              <ul>
              	<li>Mobile-Optimized Website</li>
                  <li>Powerful Website Metrics</li>
                  <li>Free Custom Domain</li>
                  <li>24/7 Customer Support</li>
                  <li>Fully Integrated E-Commerce</li>
                  <li>Sell Unlimited Products &amp; Accept Donations</li>
              </ul>
              <div class="pricing-box-bottom"> <a class="btn btn-dark btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>

          <div class="col-md-4 pricing-table col-sm-4">
            <div class="pricing-box">
              <h3 class="default-color mb-0">Professional</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website.</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>16</span></h2>
              <div class="pricicng-feature">
                  <ul>
                      <li>Mobile-Optimized Website</li>
                      <li>Powerful Website Metrics</li>
                      <li>Free Custom Domain</li>
                      <li>24/7 Customer Support</li>
                      <li>Fully Integrated E-Commerce</li>
                      <li>Sell Unlimited Products &amp; Accept Donations</li>
              	</ul>
              </div>
              <div class="pricing-box-bottom"> <a class="btn btn-color btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>

          <div class="col-md-4 pricing-table col-sm-4">
            <div class="pricing-box">
              <h3 class="dark-color mb-0">Ultimate</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website.</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>29</span></h2>
              <ul>
                      <li>Mobile-Optimized Website</li>
                      <li>Powerful Website Metrics</li>
                      <li>Free Custom Domain</li>
                      <li>24/7 Customer Support</li>
                      <li>Fully Integrated E-Commerce</li>
                      <li>Sell Unlimited Products &amp; Accept Donations</li>
              	</ul>
              <div class="pricing-box-bottom"> <a class="btn btn-dark btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--== Pricing Table Style 01 End ==-->

  <!--== Pricing Table Style 02 Start ==-->
  <section class="white-bg">
    <div class="container">
        <div class="row mt-50">
          <div class="col-md-3 pricing-table col-sm-6">
            <div class="pricing-box text-center">
              <i class="icon-anchor default-color font-40px"></i>
              <h3 class="dark-color mb-0">Free</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>10</span></h2>
              <ul>
              	<li>Mobile-Optimized Website</li>
                  <li>Powerful Website Metrics</li>
                  <li>Free Custom Domain</li>
                  <li>24/7 Customer Support</li>
                  <li>Fully Integrated E-Commerce</li>
                  <li>Sell Unlimited Products &amp; Accept Donations</li>
              </ul>
              <div class="pricing-box-bottom"> <a class="btn btn-dark btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>

          <div class="col-md-3 pricing-table col-sm-6">
            <div class="pricing-box text-center">
              <i class="icon-profile-male default-color font-40px"></i>
              <h3 class="dark-color mb-0">Personal</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>10</span></h2>
              <ul>
              	<li>Mobile-Optimized Website</li>
                  <li>Powerful Website Metrics</li>
                  <li>Free Custom Domain</li>
                  <li>24/7 Customer Support</li>
                  <li>Fully Integrated E-Commerce</li>
                  <li>Sell Unlimited Products &amp; Accept Donations</li>
              </ul>
              <div class="pricing-box-bottom"> <a class="btn btn-dark btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>

          <div class="col-md-3 pricing-table col-sm-6">
            <div class="pricing-box text-center">
              <i class="icon-briefcase default-color font-40px"></i>
              <h3 class="default-color mb-0">Professional</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>16</span></h2>
              <div class="pricicng-feature">
                  <ul>
                      <li>Mobile-Optimized Website</li>
                      <li>Powerful Website Metrics</li>
                      <li>Free Custom Domain</li>
                      <li>24/7 Customer Support</li>
                      <li>Fully Integrated E-Commerce</li>
                      <li>Sell Unlimited Products &amp; Accept Donations</li>
              	</ul>
              </div>
              <div class="pricing-box-bottom"> <a class="btn btn-color btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>

          <div class="col-md-3 pricing-table col-sm-6">
            <div class="pricing-box text-center">
              <i class="icon-global default-color font-40px"></i>
              <h3 class="dark-color mb-0">Ultimate</h3>
              <h4 class="grey-color text-uppercase">Basic and simple website</h4>
              <h2 class="roboto-font font-60px default-color"><sup>$</sup><span>29</span></h2>
              <ul>
                      <li>Mobile-Optimized Website</li>
                      <li>Powerful Website Metrics</li>
                      <li>Free Custom Domain</li>
                      <li>24/7 Customer Support</li>
                      <li>Fully Integrated E-Commerce</li>
                      <li>Sell Unlimited Products &amp; Accept Donations</li>
              	</ul>
              <div class="pricing-box-bottom"> <a class="btn btn-dark btn-md btn-default full-width">Try it Now</a> </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--== Pricing Table Style 02 End ==-->

  {{-- PRICING END --}}

  <!--== Our Clients Start ==-->
  <section class="white-bg" id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 centerize-col text-center">
          <h3 class="mt-0 default-color font-700 play-font font-italic">Do Things That Matter</h3>
          <h2 class="mt-0 font-700">We Are Not Afraid To Be Different.</h2>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
              <div class="v-align-middle">
                <a href="#"><img src="assets/images/clients/1-colored.png" alt="01"/></a>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
              <div class="v-align-middle">
                <a href="#"><img src="assets/images/clients/2-colored.png" alt="02"/></a>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
              <div class="v-align-middle">
                <a href="#"><img src="assets/images/clients/3-colored.png" alt="03"/></a>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
              <div class="v-align-middle">
                <a href="#"><img src="assets/images/clients/4-colored.png" alt="04"/></a>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
              <div class="v-align-middle">
                <a href="#"><img src="assets/images/clients/5-colored.png" alt="05"/></a>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
          <div class="white-bg text-center display-table mb-30 full-width client-logo-height">
              <div class="v-align-middle">
                <a href="#"><img src="assets/images/clients/6-colored.png" alt="06"/></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Our Clients End ==-->

  {{-- CONTACT US START --}}

  <!--== Contact Us Start ==-->
  <section class="dark-bg transition-none" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 centerize-col text-center">
          <h3 class="mt-0 default-color font-700 play-font font-italic">Contact Us</h3>
          <h2 class="mt-0 font-700  white-color">The One With The Mastertouch.</h2>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-6 col-sm-6 col-xs-12 xs-mb-30">
          <form name="contact-form" id="contact-form-03" action="php/contact.php" method="POST" class="mt-50">
            <div class="messages"></div>
              <div class="form-group wow fadeInUp" data-wow-delay="0.1s">
                <label class="sr-only" for="name">Name</label>
                <input type="text" name="name" class="md-input style-02" id="name3" required placeholder="Name *" data-error="Your Name is Required">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group wow fadeInUp" data-wow-delay="0.2s">
                <label class="sr-only" for="email">Email</label>
                <input type="email" name="email" class="md-input style-02" id="email3" placeholder="Email*" required data-error="Please Enter Valid Email">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group wow fadeInUp" data-wow-delay="0.3s">
                <label class="sr-only" for="message">Message</label>
                <textarea name="message" class="md-textarea style-02" id="message3" rows="7" placeholder="Message*" required data-error="Please, Leave us a message"></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <button type="submit" name="submit" class="btn btn-color btn-md remove-margin btn-square wow fadeInUp" data-wow-delay="0.4s">Send Message</button>
            </form>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 xs-mb-30 mt-40 col-md-offset-1 col-sm-offset-1">
          <div id="map-style-3" class="min-height-300px relative wow fadeInUp" data-wow-delay="0.1s"></div>
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <p class="mt-50 font-16px">Patton Street Caulfield East VIC 3145</p>
            <p class="font-16px">Email Us: sayhi@yoursite.com</p>
            <p class="font-16px">Call Us: +61 (03) 9414 7288</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Contact Us End ==-->

  <!--== Contact Form Style 01 Start ==-->
  <section class="white-bg">
    <div class="container">
        <div class="row mt-50">
            <div class="col-md-12">
              <form name="contact-form" id="contact-form" action="php/contact.php" method="POST" class="contact-form-style-01">
                <div class="messages"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" name="name" class="md-input" id="name" placeholder="Name *" required data-error="Your Name is Required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="md-input" id="email" placeholder="Email *" required data-error="Please Enter Valid Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                    	<label class="sr-only" for="subject">Subject</label>
                    	<input type="text" name="subject" class="md-input" id="subject-2" placeholder="Subject">
                	  </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">Project Details</label>
                      <textarea name="message" class="md-textarea" id="message" rows="7" placeholder="Project Details" required data-error="Please, Leave us a message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <form method="get">
                      <select name="orderby" class="orderby">
                        <option value="" selected="selected">$500 - $1000</option>
                        <option value="">$1000 - $2000</option>
                        <option value="">$2000 - $5000</option>
                      </select> <input type="hidden" name="paged" value="1">
                      <input type="hidden" name="min_price" value="20"><input type="hidden" name="max_price" value="290">
                    </form>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="text-left mt-20">
                      <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin"><span>Send Message <i class="ion-android-arrow-forward"></i></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form Style 01 End ==-->

  <!--== Contact Form Style 02 Start ==-->
  <section class="default-bg">
    <div class="container">
        <div class="row mt-50">
            <div class="col-md-8 centerize-col">
              <form name="contact-form" id="contact-form-02" action="php/contact.php" method="POST" class="contact-form-style-02">
                <div class="messages"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" name="name" class="md-input style-02" id="name2" placeholder="Name *" required data-error="Your Name is Required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="md-input style-02" id="email2" placeholder="Email *" required data-error="Please Enter Valid Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">Project Details</label>
                      <textarea name="message" class="md-textarea style-02" id="message2" rows="7" placeholder="Project Details" required data-error="Please, Leave us a message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-dark btn-lg btn-square">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form Style 02 End ==-->

  <!--== Contact Form Style 03 Start ==-->
  <section class="bordered-bg pb-0 transition-none">
    <div class="container-fluid">
    	   <div class="row row-flex flex-center mt-50">
        	  <div class="col-md-6 col-sm-12 map-section">
				        <div id="map-style-3"></div>
        	  </div>
          <div class="col-md-6 col-sm-12">
          		<div class="col-inner pt-70 pb-50 spacer">
                	<form name="contact-form" id="contact-form-03" action="php/contact.php" method="POST" class="contact-form-style-03">
                        <div class="messages"></div>
                        <div class="form-group">
                          <label class="sr-only" for="name">Name</label>
                          <input type="text" name="name" class="md-input" id="name3" required placeholder="Name *" data-error="Your Name is Required">
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="email">Email</label>
                          <input type="email" name="email" class="md-input" id="email3" placeholder="Email*" required data-error="Please Enter Valid Email">
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="message">Message</label>
                          <textarea name="message" class="md-textarea" id="message3" rows="7" placeholder="Message*" required data-error="Please, Leave us a message"></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark btn-md remove-margin">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form Style 03 End ==-->

  <!--== Contact Form Style 04 Start ==-->
  <section class="parallax-bg fixed-bg" data-parallax-bg-image="assets/images/background/parallax-bg-5.jpg" data-parallax-speed="0.8" data-parallax-direction="up">
  	<div class="parallax-overlay"></div>
    <div class="container">
        <div class="row mt-50">
            <div class="col-md-12">
              <form name="contact-form" id="contact-form-04" action="php/contact.php" method="POST">
                <div class="messages"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" name="name" class="md-input style-02" id="name4" placeholder="Name *" required data-error="Your Name is Required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="md-input style-02" id="email4" placeholder="Email *" required data-error="Please Enter Valid Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                    	<label class="sr-only" for="subject">Subject</label>
                    	<input type="text" name="subject" class="md-input style-02" id="subject-4" placeholder="Subject">
                	  </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label class="sr-only" for="message">Project Details</label>
                      <textarea name="message" class="md-textarea style-02" id="message4" rows="7" placeholder="Project Details" required data-error="Please, Leave us a message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="text-left">
                      <button type="submit" name="submit" class="btn btn-light btn-md btn-square btn-animate remove-margin"><span>Send Message <i class="ion-android-arrow-forward"></i></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form Style 04 End ==-->

  {{-- CONTACT US END --}}

  <!--== Call to Actions Start ==-->
  <section class="white-bg">
    <div class="container">
    	  <div class="row">
            <div class="col-lg-7 col-md-7 col-xs-12 centerize-col text-center">
              <h2 class="mb-30 play-font font-700 mt-0 font-50px">Interested to work and cooperate with us?</h2>
              <a class="btn btn-md btn-dark btn-animate btn-square"><span>Start a Project <i class="tr-icon icofont icofont-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
  </section>
  <!--== Call to Actions End ==-->

  <!--== Footer Start ==-->
  <footer class="footer dark-block">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 display-table" style="height: 40px;">
            <div class="copy-right text-left v-align">© 2019 <i class="icon icofont icofont-heart-alt"></i> ADPRO. All rights reserved</div>
          </div>
          <div class="col-sm-4 col-xs-12">
          	<div class="logo display-block height-auto"><a href="index.html">
          		<img class="logo margin-left-auto margin-right-auto" src="assets/images/logo-footer-light.png" alt="ADPRO logo"></a>
          	</div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <ul class="social-media">
              <li><a href="#" class="icofont icofont-social-facebook"></a></li>
			  <li><a href="#" class="icofont icofont-social-twitter"></a></li>
			  <li><a href="#" class="icofont icofont-social-behance"></a></li>
			  <li><a href="#" class="icofont icofont-social-dribble"></a></li>
           	  <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--== Footer End ==-->
  <!--== Footer Start ==-->
  <footer class="footer dark-block">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="widget widget-text">
              <div class="logo logo-footer"><a href="index.html"> <img class="logo logo-display" src="assets/images/logo-footer-light.png" alt=""></a> </div>
              <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="widget widget-links">
              <h5 class="widget-title">Useful Links</h5>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-links">
              <h5 class="widget-title">Contact Us</h5>
              <div class="widget-links">
                  <ul>
                    <li>57 Patton Street Caulfield East VIC 3145</li>
                    <li>(03) 9414 7288</li>
                    <li>sayhi@gmail.com</li>
                    <li>www.ADPRO.com</li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-text">
              <h5 class="widget-title">Popular Tags</h5>
              <div class="popular-tags"> <a href="#">Design</a> <a href="#">One Page</a> <a href="#">Envato</a> <a href="#">Creative</a> <a href="#">Apps</a> <a href="#">Themeforest</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="copy-right text-left">© 2019 <i class="icon icofont icofont-heart-alt"></i> ADPRO. All rights reserved</div>
          </div>
          <div class="col-md-6 col-xs-12">
            <ul class="social-media">
              <li><a href="#" class="icofont icofont-social-facebook"></a></li>
			  <li><a href="#" class="icofont icofont-social-twitter"></a></li>
			  <li><a href="#" class="icofont icofont-social-behance"></a></li>
			  <li><a href="#" class="icofont icofont-social-dribble"></a></li>
           	  <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--== Footer End ==-->

  <!--== Go to Top  ==-->
  <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
  <!--== Go to Top End ==-->

</div>
<!--== Wrapper End ==-->

<!--== Javascript Plugins ==-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJNGOwO2hJpJ9kz8e0UUPjZhEbgDJTTXE"></script>
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
