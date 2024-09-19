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
<style>
  .tr-modal-pop-a{
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #BF0731;
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
                request()->routeIs('admin.edit.bank.account')) {
                  $defaultColor = 'default-color';
                }
              @endphp
              <i class="icofont icofont-user-alt-4 {{ $defaultColor }}"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="shop-standard.html">One</a></li>
              <li><a href="{{ route('admin.get.bank.accounts') }}">銀行口座</a></li>
              <li><a href="{{ route('admin.change.password') }}">パスワード変更</a></li>
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
                ? 'default-color' : '' }}">会員リスト</span>
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
            <a href="{{ route('admin.get.sections') }}">
                <span class="{{ request()->routeIs('admin.get.sections') ||
                request()->routeIs('admin.add.section') ||
                request()->routeIs('admin.edit.section')
                ? 'default-color' : '' }}">セクション一覧</span>
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
          @if (Auth::guard('admin')->user()->role == 'admin')
          <li class="dropdown">
            <a href="{{ route('admin.get.sub.admins') }}">
                <span class="{{ request()->routeIs('admin.get.sub.admins') ||
                request()->routeIs('admin.add.sub.admin') ||
                request()->routeIs('admin.edit.sub.admin')
                ? 'default-color' : '' }}">管理者一覧</span>
            </a>
          </li>
          @endif
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