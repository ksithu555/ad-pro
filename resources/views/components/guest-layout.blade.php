<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="Torneo is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="header styles, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
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
                        <ul class="social-media-dark social-top">
                        <li><a href="#" class="icofont icofont-social-facebook"></a></li>
                        <li><a href="#" class="icofont icofont-social-twitter"></a></li>
                        <li class="search"><a href="#" id="search-button"><i class="icofont icofont-search"></i></a></li>
                        </ul>
                    </div>
                    <!--== End Atribute Navigation ==-->

                    <!--== Start Header Navigation ==-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
                        <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="{{ asset('assets/images/logo-white.png') }}" alt=""> <img class="logo logo-scrolled" src="{{ asset('assets/images/logo-black.png') }}" alt=""> </a> </div>
                    </div>
                    <!--== End Header Navigation ==-->

                    <!--== Collect the nav links, forms, and other content for toggling ==-->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="dropdown">
                                <a href="{{ route('guest.home') }}" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('guest.home') ? 'default-color' : '' }}">ホーム</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('guest.advertisement.list') }}" class="dropdown-toggle active" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('guest.advertisement.list') ? 'default-color' : '' }}">広告一覧</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('guest.news') }}" class="dropdown-toggle active" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('guest.news') ||
                                    request()->routeIs('guest.show.news')
                                    ? 'default-color' : '' }}">新着情報</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('guest.faqs') }}" class="dropdown-toggle active" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('guest.faqs') ? 'default-color' : '' }}">よくある質問</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('guest.contact') }}" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('guest.contact') ? 'default-color' : '' }}">お問合せ</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('user.show.login') }}" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('user.show.login') ? 'default-color' : '' }}">ログイン</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('user.show.register') }}" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="{{ request()->routeIs('user.show.register') ? 'default-color' : '' }}">会員登録</span>
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
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="widget widget-text">
                                <div class="logo logo-footer"><a href="index.html"> <img class="logo logo-display" src="{{ asset('assets/images/logo-footer-light.png') }}" alt=""></a> </div>
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
                                        <li>www.torneo.com</li>
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
        <!--== Javascript Plugins End ==-->

    </body>
</html>
