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
                if (request()->routeIs('user.get.plans') ||
                request()->routeIs('user.change.password') ||
                request()->routeIs('user.show.profile') ||
                request()->routeIs('user.show.announcements') ||
                request()->routeIs('user.add.announcement') ||
                request()->routeIs('user.edit.announcement') ||
                request()->routeIs('user.show.announcement.participants') ||
                request()->routeIs('user.show.announcement') ||
                request()->routeIs('user.purchase.plan') ||
                request()->routeIs('user.show.materials') ||
                request()->routeIs('user.add.material') ||
                request()->routeIs('user.edit.material') ||
                request()->routeIs('user.show.sale.histories')) {
                  $defaultColor = 'default-color';
                }
              @endphp
              <i class="icofont icofont-user-alt-4 {{ $defaultColor }}"></i>
              @if (Auth::user()->plan_status == 0)
                <span class="custom-badge free-badge hidden-xs sm-display-none">{{ Auth::user()->name }}</span>
              @elseif (Auth::user()->plan_status == 1)
                <span class="custom-badge silver-badge hidden-xs sm-display-none">{{ Auth::user()->name }}</span>
              @elseif (Auth::user()->plan_status == 2)
                <span class="custom-badge gold-badge hidden-xs sm-display-none">{{ Auth::user()->name }}</span>
              @endif
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('user.show.profile') }}">
                  <span class="{{ request()->routeIs('user.show.profile')
                  ? 'default-color' : '' }}">プロフィール
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('user.show.materials') }}">
                  <span class="{{ request()->routeIs('user.show.materials') ||
                  request()->routeIs('user.add.material') ||
                  request()->routeIs('user.edit.material') ||
                  request()->routeIs('user.show.sale.histories')
                  ? 'default-color' : '' }}">素材管理
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('user.show.announcements') }}">
                  <span class="{{ request()->routeIs('user.show.announcements') ||
                  request()->routeIs('user.add.announcement') ||
                  request()->routeIs('user.edit.announcement') ||
                  request()->routeIs('user.show.announcement.participants') ||
                  request()->routeIs('user.show.announcement')
                  ? 'default-color' : '' }}">情報広場管理
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('user.get.plans') }}">
                  <span class="{{ request()->routeIs('user.get.plans') ||
                  request()->routeIs('user.purchase.plan')
                  ? 'default-color' : '' }}">アップグレード
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('user.change.password') }}">
                  <span class="{{ request()->routeIs('user.change.password')
                  ? 'default-color' : '' }}">パスワード変更
                  </span>
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
        <div class="logo"> <a href="/">
          <img class="logo logo-display" src="{{ asset('assets/images/all/adpro2_blogo.png') }}" alt="">
          <img class="logo logo-scrolled" src="{{ asset('assets/images/all/adpro_blogo.png') }}" alt="">  </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown">
            <a href="{{ route('user.get.alarms') }}">
                <span class="{{ request()->routeIs('user.get.alarms') ? 'default-color' : '' }}">To Do</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.members') }}">
                <span class="{{ request()->routeIs('user.get.members') ||
                request()->routeIs('user.show.member.detail')
                ? 'default-color' : '' }}">会員リスト</span>
            </a>
          </li>
          {{-- <li class="dropdown">
            <a href="{{ route('user.get.advertisements') }}">
                <span class="{{ request()->routeIs('user.get.advertisements')
                ? 'default-color' : '' }}">広告配布</span>
            </a>
          </li> --}}
          <li class="dropdown">
            <a href="{{ route('user.get.advertisements') }}">
                <span class="{{ request()->routeIs('user.get.advertisements') ||
                request()->routeIs('user.show.advertisement') ||
                request()->routeIs('user.add.advertisement') ||
                request()->routeIs('user.show.sections') ||
                request()->routeIs('user.add.section') ||
                request()->routeIs('user.show.section.blocks') ||
                request()->routeIs('user.add.header.block') ||
                request()->routeIs('user.edit.header.block') ||
                request()->routeIs('user.add.footer.block') ||
                request()->routeIs('user.edit.footer.block') ||
                request()->routeIs('user.add.list.block') ||
                request()->routeIs('user.edit.list.block') ||
                request()->routeIs('user.add.box.block') ||
                request()->routeIs('user.edit.box.block') ||
                request()->routeIs('user.show.block.sub.blocks') ||
                request()->routeIs('user.add.sub.box.block') ||
                request()->routeIs('user.edit.sub.box.block')
                ? 'default-color' : '' }}">広告管理</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.materials') }}">
                <span class="{{ request()->routeIs('user.get.materials') ||
                request()->routeIs('user.get.material.icons')
                ? 'default-color' : '' }}">素材集</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.announcements') }}">
                <span class="{{ request()->routeIs('user.get.announcements') ||
                request()->routeIs('user.show.announcement')
                ? 'default-color' : '' }}">情報広場</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.messages') }}">
                <span class="{{ request()->routeIs('user.get.messages') ||
                request()->routeIs('user.start.message')
                ? 'default-color' : '' }}">商談管理</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{ route('user.get.notices') }}">
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

  <!-- Modal Popup Message Box -->
  <div id="logout-modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ログアウト</span>
    <p class="mb-20">ログアウトしてもよろしいですか?</p>
    <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.logout') }}" >はい</a>
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

{{-- Date Time Picker --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Select all forms on the page
      const forms = document.querySelectorAll('form');

      // Loop through each form
      forms.forEach(function(form) {
          // Add an event listener for the keydown event
          form.addEventListener('keydown', function(event) {
              // Check if the pressed key is 'Enter'
              if (event.key === 'Enter') {
                  // Prevent the default form submission behavior
                  event.preventDefault();
              }
          });

          // Handle form submission via showModal() instead of the default submit
          form.addEventListener('submit', function(event) {
              event.preventDefault(); // Prevent default submit
              showModal(); // Call your custom modal submission function
          });
      });
  });
</script>
<!--== Javascript Plugins End ==-->
</body>
</html>