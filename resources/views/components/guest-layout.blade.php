<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="ADPRO会員になると商談と情報発信機能を完全無料でご利用いただけます。">
<!-- keywords -->
<meta name="keywords" content="header styles, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
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
                        {{-- <ul class="social-media-dark social-top">
                        <li><a href="#" class="icofont icofont-social-facebook"></a></li>
                        <li><a href="#" class="icofont icofont-social-twitter"></a></li>
                        <li class="search"><a href="#" id="search-button"><i class="icofont icofont-search"></i></a></li>
                        </ul> --}}
                    </div>
                    <!--== End Atribute Navigation ==-->

                    <!--== Start Header Navigation ==-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
                        <div class="logo">
                            <a href="/">
                                <img class="logo logo-display" src="{{ asset('assets/images/all/adpro_blogo.png') }}" alt="">
                                <img class="logo logo-scrolled" src="{{ asset('assets/images/all/adpro2_blogo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!--== End Header Navigation ==-->

                    <!--== Collect the nav links, forms, and other content for toggling ==-->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li>
                                <a href="{{ route('guest.home') }}">
                                    <span class="{{ request()->routeIs('guest.home') ? 'default-color' : '' }}">ホーム</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guest.advertisement.list') }}" class="active">
                                    <span class="{{ request()->routeIs('guest.advertisement.list') ? 'default-color' : '' }}">広告一覧</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guest.news') }}">
                                    <span class="{{ request()->routeIs('guest.news') || request()->routeIs('guest.show.news') ? 'default-color' : '' }}">新着情報</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guest.faqs') }}">
                                    <span class="{{ request()->routeIs('guest.faqs') ? 'default-color' : '' }}">よくあるご質問</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guest.contact') }}">
                                    <span class="{{ request()->routeIs('guest.contact') ? 'default-color' : '' }}">お問合せ</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.show.login') }}">
                                    <span class="{{ request()->routeIs('user.show.login') ? 'default-color' : '' }}">ログイン</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.show.register') }}">
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
            @php
                $footers = DB::table('top_footers')->get();

                $footerText = $footers->where('type', 'text')->first();
                $usefulFooters = $footers->where('type', 'useful');
                $contactUs = $footers->where('type', 'contact')->first();
                $contactDetails = [];

                if ($contactUs && $contactUs->text) {
                    $contactDetails = explode('|', $contactUs->text);
                }
                $copyRight = $footers->where('type', 'copyRight')->first();
                $logo = $footers->where('type', 'logo')->first();
            @endphp
            <footer class="footer dark-block">
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-5">
                                <div class="widget widget-text">
                                <div class="logo logo-footer">
                                    <a href="#">
                                    @if ($logo)
                                    <img class="logo logo-display" src="{{ asset('assets/images/all/' . $logo->text) }}" alt="">
                                    @endif
                                    </a>
                                </div>
                                @if ($footerText)
                                <p>{!! nl2br($footerText->text) !!}</p>
                                @endif
                                </div>
                            </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="widget widget-links">
                                <h5 class="widget-title">Useful Links</h5>
                                @if ($usefulFooters)
                                <ul>
                                    @foreach ($usefulFooters as $useful)
                                    <li><a href="{{ $useful->url }}">{{ $useful->name }}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="widget widget-links">
                                <h5 class="widget-title">Contact Us</h5>
                                <div class="widget-links">
                                    @if ($contactDetails)
                                    <ul>
                                        @foreach ($contactDetails as $contact)
                                        <li>{{ $contact }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                @if ($copyRight)
                                <div class="copy-right text-left">{{ $copyRight->text }}</div>
                                @endif
                            </div>
                            <div class="col-md-6 col-xs-12">
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

        <!-- Typewriter Addon -->
        <!-- Typewriter and Coming Soon add on -->
        <script type="text/javascript" src="{{ asset('revolution/js/revolution.addon.typewriter.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('revolution/js/revolution.addon.countdown.min.js') }}"></script>
        
        <script type="text/javascript">
            var tpj=jQuery;
        
            var revapi152;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_152_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_152_1");
                }else{
                revapi152 = tpj("#rev_slider_152_1").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"revolution/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[868,768,960,720],
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                    }
                });
                }
        
        
                    // SET TARGET DATE TO START COUNT DOWN FROM
                    // SET UNLIMITED TIME STAMPS TO JUMP TO OTHER SLIDES BASED ON THE REST TIME VIA slidechanges
                    // SET THE JUMP AHEAD VIA THE QUICK JUMP  (15000 == 15 sec)
                    // DONT FORGET TO DEFINE THE CONTAINER ID
        
                    var targetdate = new Date('2024/09/30 11:00:00').getTime();
                        slidechanges = [
                                        { days:0, hours:0, minutes:0, seconds:12, slide:2},
                                        { days:0, hours:0, minutes:0, seconds:0, slide:3}
                                        ];
        
                    tp_countdown(revapi152,targetdate,slidechanges);
        
                            RsTypewriterAddOn(tpj, revapi152);
                });	/*ready*/
        </script>
        <!-- Typewriter and Coming Soon add on End -->

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
                const forms = document.querySelectorAll('form:not(#search-form, #login-form)');
          
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
