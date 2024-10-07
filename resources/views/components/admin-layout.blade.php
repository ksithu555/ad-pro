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
<style>
  .tr-modal-pop-a{
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    white-space: nowrap
}
</style>
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
  <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav on no-full">
  	<!--== Start Top Search ==-->
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform">
          <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
          <i class="fullscreen-search-icon icofont icofont-search">
          <input value="" type="submit">
          </i>
        </form>
      </div>
    </div>
    <!--== End Top Search ==-->
    <div class="container">
      <!--== Start Atribute Navigation ==-->
      <div class="attr-nav">
        <ul>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              @php
                $defaultColor = '';
                if (request()->routeIs('admin.change.password') ||
                request()->routeIs('admin.get.bank.accounts') ||
                request()->routeIs('admin.add.bank.account') ||
                request()->routeIs('admin.edit.bank.account') ||
                request()->routeIs('admin.show.profile') ||
                request()->routeIs('admin.get.sections') ||
                request()->routeIs('admin.add.section') ||
                request()->routeIs('admin.edit.section') ||
                request()->routeIs('admin.get.sub.admins') ||
                request()->routeIs('admin.add.sub.admin') ||
                request()->routeIs('admin.edit.sub.admin')) {
                  $defaultColor = 'default-color';
                }
              @endphp
              <i class="icofont icofont-user-alt-4 {{ $defaultColor }}"></i>
              <span class="custom-badge default-badge hidden-xs sm-display-none">
                {{ Auth::guard('admin')->user()->name }}
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('admin.show.profile') }}">
                  <span class="{{ request()->routeIs('admin.show.profile')
                  ? 'default-color' : '' }}">プロフィール
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.change.password') }}">
                  <span class="{{ request()->routeIs('admin.change.password')
                  ? 'default-color' : '' }}">パスワード変更
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.get.bank.accounts') }}">
                  <span class="{{ request()->routeIs('admin.get.bank.accounts') ||
                  request()->routeIs('admin.add.bank.account') ||
                  request()->routeIs('admin.edit.bank.account')
                  ? 'default-color' : '' }}">銀行口座管理
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.get.sections') }}">
                    <span class="{{ request()->routeIs('admin.get.sections') ||
                    request()->routeIs('admin.add.section') ||
                    request()->routeIs('admin.edit.section')
                    ? 'default-color' : '' }}">セクション管理</span>
                </a>
              </li>
              @if (Auth::guard('admin')->user()->role == 'admin')
              <li>
                <a href="{{ route('admin.get.sub.admins') }}">
                    <span class="{{ request()->routeIs('admin.get.sub.admins') ||
                    request()->routeIs('admin.add.sub.admin') ||
                    request()->routeIs('admin.edit.sub.admin')
                    ? 'default-color' : '' }}">管理者管理</span>
                </a>
              </li>
              @endif
              <li>
                <a href="{{ route('admin.csv.and.mail.sendings') }}">
                    <span class="{{ request()->routeIs('admin.csv.and.mail.sendings')
                    ? 'default-color' : '' }}">CSVとメール送信</span>
                </a>
              </li>
              <li>
                <div class="tr-modal-popup">
                  <a href="#logout-modal-popup" class="tr-modal-pop-a" data-effect="mfp-newspaper">ログアウト</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>      
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo">
          <a href="/">
            <img class="logo logo-display" src="{{ asset('assets/images/all/adpro2_blogo.png') }}" alt="">
            <img class="logo logo-scrolled" src="{{ asset('assets/images/all/adpro_blogo.png') }}" alt="">
          </a>
        </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="">
            <a href="{{ route('admin.get.home') }}">
                <span class="{{ request()->routeIs('admin.get.home') ||
                request()->routeIs('admin.add.header') ||
                request()->routeIs('admin.edit.headers') ||
                request()->routeIs('admin.edit.header') ||
                request()->routeIs('admin.add.footer') ||
                request()->routeIs('admin.edit.footers') ||
                request()->routeIs('admin.edit.footer')
                ? 'default-color' : '' }}">ホーム</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.get.members') }}">
                <span class="{{ request()->routeIs('admin.get.members') ||
                request()->routeIs('admin.show.member.detail') ||
                request()->routeIs('admin.check.member.message')
                ? 'default-color' : '' }}">会員一覧</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.get.advertisements') }}">
                <span class="{{ request()->routeIs('admin.get.advertisements') ? 'default-color' : '' }}">広告一覧</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.get.materials') }}">
                <span class="{{ request()->routeIs('admin.get.materials') ||
                request()->routeIs('admin.add.material') ||
                request()->routeIs('admin.edit.material') ||
                request()->routeIs('admin.get.material.icons') ||
                request()->routeIs('admin.pay.user.for.material.downloads') ||
                request()->routeIs('admin.paid.user.for.material.downloads')
                ? 'default-color' : '' }}">素材一覧</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.get.announcements') }}">
                <span class="{{ request()->routeIs('admin.get.announcements') ||
                request()->routeIs('admin.show.announcement') ||
                request()->routeIs('admin.show.announcement.participants')
                ? 'default-color' : '' }}">情報広場一覧</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.get.news') }}">
                <span class="{{ request()->routeIs('admin.get.news') ||
                request()->routeIs('admin.add.news') ||
                request()->routeIs('admin.edit.news')
                ? 'default-color' : '' }}">新着情報一覧</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.get.notices') }}">
                <span class="{{ request()->routeIs('admin.get.notices') ||
                request()->routeIs('admin.add.notice') ||
                request()->routeIs('admin.edit.notice')
                ? 'default-color' : '' }}">お知らせ一覧</span>
            </a>
          </li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->

  <!-- Modal Popup Message Box -->
  <div id="logout-modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ログアウト</span>
    <p class="mb-20">ログアウトしてもよろしいですか?</p>
    <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.logout') }}" >はい</a>
    <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
  </div>

  {{ $slot }}

  <!--== Footer Start ==-->
  @php
    $footers = DB::table('top_footers')->get();
    $copyRight = $footers->where('type', 'copyRight')->first();
    $logo = $footers->where('type', 'logo')->first();
  @endphp
  <footer class="footer dark-block">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 display-table" style="height: 40px;">
            @if ($copyRight)
              <div class="copy-right text-left v-align">{{ $copyRight->text }}</div>
            @endif
          </div>
          <div class="col-sm-4 col-xs-12">
              <div class="logo display-block height-auto"><a href="/">
                @if ($logo)
                  <img class="logo margin-left-auto margin-right-auto" src="{{ asset('assets/images/all/' . $logo->text) }}" alt="ADPRO logo"></a>
                @endif
              </div>
          </div>
          <div class="col-sm-4 col-xs-12">
              <ul class="social-media">
                @php
                    $socialFooters = $footers->where('type', 'social');
                @endphp
                @foreach ($socialFooters as $social)
                <li><a href="{{ $social->url }}" class="icofont icofont-social-{{ $social->name }}"></a></li>
                @endforeach
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Select all forms on the page
      const forms = document.querySelectorAll('form:not(#search-form)');

      // Loop through each form
      forms.forEach(function(form) {
          // Add an event listener for the keydown event
          form.addEventListener('keydown', function(event) {
              // Check if the pressed key is 'Enter' and the target is not a textarea
              if (event.key === 'Enter' && event.target.tagName !== 'TEXTAREA') {
                  // Prevent the default form submission behavior
                  event.preventDefault();
              }
          });
      });
  });
</script>
<!--== Javascript Plugins End ==-->

</body>
</html>