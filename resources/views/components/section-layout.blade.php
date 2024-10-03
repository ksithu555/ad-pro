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

  {{ $slot }}
  
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
<!--== Javascript Plugins End ==-->

</body>
</html>