<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="Torneo is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="dark header style, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Torneo - Creative Agency, Business Multi-purpose template</title>
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

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
      <div class="attr-nav hidden-xs sm-display-none">
        <ul>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icofont icofont-user-alt-4"></i></a>
            <ul class="dropdown-menu">
              <li><a href="shop-standard.html">One</a></li>
              <li><a href="{{ route('user.show.advertisement') }}">広告管理</a></li>
              <li><a href="{{ route('user.show.announcements') }}">ビズ公示管理</a></li>
              <li><a href="{{ route('user.get.plans') }}">アップグレード</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="{{ asset('assets/images/logo-black.png') }}" alt=""><img class="logo logo-scrolled" src="{{ asset('assets/images/logo-white.png') }}" alt="">  </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown">
            <a href="{{ route('user.get.alarms') }}" class="dropdown-toggle" data-toggle="dropdown">
                <span class="{{ request()->routeIs('user.get.alarms') ? 'default-color' : '' }}">To Do</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.members') }}" class="dropdown-toggle" data-toggle="dropdown">
                <span class="{{ request()->routeIs('user.get.members')
                ? 'default-color' : '' }}">会員リスト</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.advertisements') }}" class="dropdown-toggle" data-toggle="dropdown">
                <span class="{{ request()->routeIs('user.get.advertisements')
                ? 'default-color' : '' }}">広告配布</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.announcements') }}" class="dropdown-toggle" data-toggle="dropdown">
                <span class="{{ request()->routeIs('user.get.announcements') ||
                request()->routeIs('user.show.announcements') ||
                request()->routeIs('user.add.announcement') ||
                request()->routeIs('user.show.announcement') ||
                request()->routeIs('user.edit.announcement')
                ? 'default-color' : '' }}">ビズ公示</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.messages') }}" class="dropdown-toggle" data-toggle="dropdown">
                <span class="{{ request()->routeIs('user.get.messages')
                ? 'default-color' : '' }}">メッセージ</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.notices') }}" class="dropdown-toggle" data-toggle="dropdown">
                <span class="{{ request()->routeIs('user.get.notices')
                ? 'default-color' : '' }}">お知らせ</span>
            </a>
          </li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->

  {{ $slot }}

  <!--== Footer Start ==-->
  <footer class="footer dark-block">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="copy-right text-left">© 2019 <i class="icon icofont icofont-heart-alt"></i> Torneo. All rights reserved</div>
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