<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="Torneo is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="creative, revolution slider, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
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
  <!--== Top Bar Start ==-->
  <div class="top-bar dark-bg pt-10 pb-10">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-sm-6 col-xs-12 xs-text-center">
  				<a href="mailto:support@yoursite.com" class="white-color ml-5 relative">support@yoursite.com</a>
  				<div class="line-verticle-sm v-align-middle display-inline-block relative ml-10 mr-10 white-bg"></div>
  				<div class="btn-group display-inline-block xs-mb-10 dropdown-style-01">
  					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English <span class="caret"></span></button>
  					<ul class="dropdown-menu xs-width-full">
                    	<li><a href="#.">English</a></li>
                      	<li><a href="#.">French</a></li>
                      	<li><a href="#.">Irish</a></li>
                      	<li><a href="#.">German</a></li>
                      	<li><a href="#.">China</a></li>
                    </ul>
  				</div>
  			</div>
  			<div class="col-md-6 col-sm-6 col-xs-12 text-right xs-text-center">
  				<span class="white-color">Call Us (03) 9414 7288</span>
			</div>
  		</div>
  	</div>
  </div>
  <!--== Top Bar End ==-->

  <!--== Header Start ==-->
  <nav class="navbar navbar-default bootsnav on no-full">

    <div class="container">
      <!--== Start Atribute Navigation ==-->
      <div class="attr-nav hidden-xs sm-display-none">
        <ul>
          <li class="search"><a href="#" id="search-button"><i class="icofont icofont-search"></i></a></li>
        </ul>
      </div>
      <!--== End Atribute Navigation ==-->

      <!--== Start Header Navigation ==-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="index.html"><img class="logo logo-scrolled" src="assets/images/logo-black.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-4">
                    <h6 class="title">Home Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="home-company.html">Home Company</a></li>
                        <li><a href="home-digital-agency.html">Home Digital Agency</a></li>
                        <li><a href="home-media-agency.html">Home Media Agency</a></li>
                        <li><a href="home-design-lab.html">Home Design Lab</a></li>
                        <li><a href="home-landing.html">Home Landing</a></li>
                        <li><a href="home-personal-corporate.html">Home Personal Corporate</a></li>
                        <li><a href="home-personal-creative.html">Home Personal Creative</a></li>
                        <li><a href="home-photography.html">Home Photography</a></li>
                        <li><a href="home-fashion-shop.html">Home Fashion Shop</a></li>
                        <li><a href="home-startup.html">Home Startup</a></li>
                        <li><a href="home-classic.html">Home Classic</a></li>
                      </ul>
                    </div>
                  </div>
                  <!--== end col-3 ==-->
                  <div class="col-menu col-md-4">
                    <h6 class="title">Home Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="home-creative-agency.html">Home Creative Agency</a></li>
                        <li><a href="home-app-landing.html">Home App Landing</a></li>
                        <li><a href="home-web-agency.html">Home Web Agency</a></li>
                        <li><a href="home-parallax.html">Home Parallax</a></li>
                        <li><a href="home-particle.html">Home Particle</a></li>
                        <li><a href="home-portfolio-creative.html">Home Portfolio Creative</a></li>
                        <li><a href="home-fullscreen-video.html">Home Fullscreen Video</a></li>
                        <li><a href="home-coming-soon.html">Home Coming Soon</a></li>
                        <li><a href="home-maintenance.html">Home Maintenance</a></li>
                        <li><a href="home-404-page.html">Home 404 Page</a></li>
                        <li><a href="home-careers.html">Home Careers</a></li>
                      </ul>
                    </div>
                  </div>
                  <!--== end col-3 ==-->
                  <div class="col-menu col-md-4">
                    <h6 class="title">Home Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="home-business.html">Home Business</a></li>
                        <li><a href="home-services.html">Home Services</a></li>
                        <li><a href="home-studio.html">Home Studio</a></li>
                        <li><a href="home-onepage.html">Home One Page</a></li>
                        <li><a href="home-restaurant.html">Home Restaurant</a></li>
                        <li><a href="home-blog.html">Home Blog</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--== end row ==-->
              </li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                <ul class="dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="about-me.html">About Me</a></li>
                  <li><a href="about-creative.html">About Creative</a></li>
                  <li><a href="about-classic.html">About Classic</a></li>
                </ul>
              </li>

              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                  <li><a href="services-creative.html">Services Creative</a></li>
                  <li><a href="services-classic.html">Services Classic</a></li>
                  <li><a href="services-startup.html">Services Startup</a></li>
                </ul>
              </li>

              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                <ul class="dropdown-menu">
                  <li><a href="contact-creative.html">Contact Creative</a></li>
                  <li><a href="contact-classic.html">Contact Classic</a></li>
                  <li><a href="contact-modern.html">Contact Modern</a></li>
                  <li><a href="contact-simple.html">Contact Simple</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
            <ul class="dropdown-menu">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Default</a>
                <ul class="dropdown-menu">
                  <li><a href="default-2col.html">Default 2 Columns</a></li>
                  <li><a href="default-3col.html">Default 3 Columns</a></li>
                  <li><a href="default-4col.html">Default 4 Columns</a></li>
<li><a href="default-nospace.html">Default No Space</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Boxed</a>
                <ul class="dropdown-menu">
                  <li><a href="boxed-2col.html">Boxed 2 Columns</a></li>
                  <li><a href="boxed-3col.html">Boxed 3 Columns</a></li>
                  <li><a href="boxed-4col.html">Boxed 4 Columns</a></li>
                  <li><a href="boxed-nospace.html">Boxed No Space</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Masonry</a>
                <ul class="dropdown-menu">
                  <li><a href="masonry-2col.html">Masonry 2 Columns</a></li>
                  <li><a href="masonry-3col.html">Masonry 3 Columns</a></li>
                  <li><a href="masonry-4col.html">Masonry 4 Columns</a></li>
                  <li><a href="masonry-nospace.html">Masonry No Space</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Metro</a>
                <ul class="dropdown-menu">
                  <li><a href="metro-boxed.html">Metro Boxed</a></li>
                  <li><a href="metro-fullwidth.html">Metro Fullwidth</a></li>
                  <li><a href="metro-nospace.html">Metro No Space</a></li>
                </ul>
              </li>
			  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hover Types</a>
                <ul class="dropdown-menu">
                  <li><a href="up-transform.html">Up Transform</a></li>
                  <li><a href="blur-zoom.html">Blur Zoom</a></li>
                  <li><a href="blur-zoom-with-icons.html">Blur Zoom With Icons</a></li>
                  <li><a href="dark-overlay.html">Dark Overlay</a></li>
                  <li><a href="dark-overlay-with-icons.html">Dark Overlay With Icons</a></li>
                  <li><a href="color-overlay.html">Color Overlay</a></li>
                  <li><a href="color-overlay-with-icons.html">Color Overlay With Icons</a></li>
                </ul>
			  </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Project Page</a>
                <ul class="dropdown-menu">
                  <li><a href="single-project-page-01.html">Single Project Page 01</a></li>
                  <li><a href="single-project-page-02.html">Single Project Page 02</a></li>
                  <li><a href="single-project-page-03.html">Single Project Page 03</a></li>
				  <li><a href="single-project-page-04.html">Single Project Page 04</a></li>
				  <li><a href="single-project-page-05.html">Single Project Page 05</a></li>
				  <li><a href="single-project-page-06.html">Single Project Page 06</a></li>
				  <li><a href="single-project-page-07.html">Single Project Page 07</a></li>
				  <li><a href="single-project-page-08.html">Single Project Page 08</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
            <ul class="dropdown-menu">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Grid</a>
                <ul class="dropdown-menu">
                  <li><a href="blog-grid-wide.html">Blog Grid Wide</a></li>
                  <li><a href="blog-grid-boxed.html">Blog Grid Boxed</a></li>
                  <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Classic</a>
                <ul class="dropdown-menu">
                  <li><a href="blog-classic-wide.html">Blog Classic Wide</a></li>
                  <li><a href="blog-classic-boxed.html">Blog Classic Boxed</a></li>
	  <li><a href="blog-classic-sidebar.html">Blog Classic Sidebar</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Standard</a>
                <ul class="dropdown-menu">
                  <li><a href="blog-standard-wide.html">Blog Standard Wide</a></li>
                  <li><a href="blog-standard-boxed.html">Blog Standard Boxed</a></li>
                  <li><a href="blog-standard-sidebar.html">Blog Standard Sidebar</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Masonry</a>
                <ul class="dropdown-menu">
                  <li><a href="blog-masonry-wide.html">Blog Masonry Wide</a></li>
                  <li><a href="blog-masonry-boxed.html">Blog Masonry Boxed</a></li>
                  <li><a href="blog-masonry-sidebar.html">Blog Masonry Sidebar</a></li>
                </ul>
              </li>
			  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Types</a>
                <ul class="dropdown-menu">
				  	<li><a href="blog-html5-video-post.html">HTML5 video post</a></li>
                <li><a href="blog-youtube-video-post.html">Youtube video post</a></li>
                <li><a href="blog-vimeo-video-post.html">Vimeo video post</a></li>
	<li><a href="blog-slider-post.html">Slider post</a></li>
                <li><a href="blog-audio-post.html">Audio post</a></li>
                <li><a href="blog-blockquote-post.html">Blockquote post</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
            <ul class="dropdown-menu">
              <li><a href="shop-standard.html">Shop Standard</a></li>
              <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
              <li><a href="shop-with-sidebar.html">Shop with Sidebar</a></li>
              <li><a href="shop-product.html">Single Product</a></li>
              <li><a href="shop-cart.html">Shop Cart</a></li>
              <li><a href="shop-checkout.html">Shop Checkout</a></li>
            </ul>
          </li>
          <li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-4">
                    <h6 class="title">Feature</h6>
                    <div class="content">
                      <ul class="menu-col">
                      	<li><a href="accordions.html">Accordions</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="boxed-icons.html">Boxed Icons</a></li>
                        <li><a href="blockqoute.html">Blockqoute</a></li>
                        <li><a href="blog-posts.html">Blog Posts</a></li>
                        <li><a href="contact-form.html">Contact Forms</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="columns.html">Columns</a></li>
                        <li><a href="countdown.html">Countdown</a></li>
                        <li><a href="counters.html">Counters</a></li>
                        <li><a href="dropcaps.html">Dropcaps</a></li>
                        <li><a href="lightbox.html">Lightbox</a></li>
                        <li><a href="videos.html">Videos</a></li>
                       </ul>
                    </div>
                  </div>
                  <!--== end col-4 ==-->
                  <div class="col-menu col-md-4">
                    <h6 class="title">Feature</h6>
                    <div class="content">
                      <ul class="menu-col">
                      	<li><a href="call-to-action.html">Call to Action</a></li>
                        <li><a href="google-maps.html">Google Maps</a></li>
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="client-carousel.html">Client Carousel</a></li>
                        <li><a href="modal-box.html">Modal Box</a></li>
                        <li><a href="message-box.html">Message Box</a></li>
                        <li><a href="progress-bar.html">Progress Bars</a></li>
                        <li><a href="pricing-table.html">Pricing Tables</a></li>
                        <li><a href="parallax-scrolling.html">Parallax Scrolling</a></li>
                        <li><a href="popup-video.html">Popup Video</a></li>
                        <li><a href="pie-chart.html">Pie Charts</a></li>
                        <li><a href="header-styles.html">Header Styles</a></li>
                        <li><a href="footer-styles.html">Footer Styles</a></li>
                      </ul>
                    </div>
                  </div>
                  <!--== end col-4 ==-->
                  <div class="col-menu col-md-4">
                    <h6 class="title">Feature</h6>
                    <div class="content">
                      <ul class="menu-col">
                      	<li><a href="sliders.html">Sliders</a></li>
                        <li><a href="subscribe.html">Subscribe</a></li>
                        <li><a href="seperators.html">Seperators</a></li>
                        <li><a href="social-icons.html">Social Icons</a></li>
                        <li><a href="service-boxes.html">Service Boxes</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="icon-fonts.html">Icon Fonts</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="team-member.html">Team Members</a></li>
                        <li><a href="animated-text.html">Animated Text</a></li>
                        <li><a href="our-process.html">Our Process</a></li>
                        <li><a href="image-hover.html">Image Hover</a></li>
                        <li><a href="icon-text.html">Icon with Text</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--== end row ==-->
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>
  </nav>
  <!--== Header End ==-->

  <!--== Hero Slider Start ==-->

  <section class="home-slider light-slider dark-block">
    <div class="default-slider slick">
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-17.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text">
            <div class="container">
              <div class="row">
              	<div class="col-md-6">
              		<div class="dark-color">
              			<h4 class="text-uppercase mb-0 mt-0 line-height-15">Casual</h4>
						<h3 class="font-700 text-uppercase mt-0">50% Discount</h3>
						<h2 class="font-700 text-uppercase mt-0 mb-0">New Arrivals</h2>
						<p class="mt-10"><a class="btn btn-color btn-lg btn-square">Shop Now</a> <a class="btn btn-lg btn-square btn-dark-outline">Learn More</a> </p>
              		</div>
              	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets/images/slides/home-bg-18.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text">
            <div class="container">
              <div class="row">
              	<div class="col-md-6 col-md-offset-6">
              		<div class="dark-color">
              			<h4 class="text-uppercase mb-0 mt-0 line-height-15">Timeless</h4>
						<h3 class="font-700 text-uppercase mt-0">Fall/Winter</h3>
						<h2 class="font-700 text-uppercase mt-0 mb-0">Save $10</h2>
						<p class="mt-10"><a class="btn btn-color btn-lg btn-square">Shop Now</a> <a class="btn btn-lg btn-square btn-dark-outline">Learn More</a> </p>
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

  <!--== Banners Start ==-->
  <section class="white-bg">
   	<div class="tr-collection-type-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 banner-left">
          <div class="row">
          	<div class="col-xs-12 col-md-6 col-sm-6 shop-banner">
          		<div class="tr-collection">
          			<a href="#.">
						<img src="assets/images/shop/banner-02.jpg" alt="torner-shop-banner"/>
						<span class="tr-collection-btn">Demin Jeans</span>
       				</a>
          		</div>
          	</div>
          	<div class="col-xs-12 col-md-6 col-sm-6 shop-banner">
          		<div class="tr-collection">
          			<a href="#.">
						<img src="assets/images/shop/banner-03.jpg" alt="torner-shop-banner"/>
						<span class="tr-collection-btn">Sunglasses</span>
       				</a>
          		</div>
          	</div>
          	<div class="col-xs-12 col-md-6 col-sm-6 shop-banner">
          		<div class="tr-collection">
          			<a href="#.">
						<img src="assets/images/shop/banner-04.jpg" alt="torner-shop-banner"/>
						<span class="tr-collection-btn">Footwear</span>
       				</a>
          		</div>
          	</div>
          	<div class="col-xs-12 col-md-6 col-sm-6 shop-banner">
          		<div class="tr-collection">
          			<a href="#.">
						<img src="assets/images/shop/banner-05.jpg" alt="torner-shop-banner"/>
						<span class="tr-collection-btn">Man Collection</span>
       				</a>
          		</div>
          	</div>

          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 banner-right">
          <div class="shop-banner">
          	<div class="tr-collection">
          		<a href="#.">
       				<img src="assets/images/shop/banner-01.jpg" alt="torner-shop-banner"/>
       				<span class="tr-collection-btn">Woman Accessories</span>
       			</a>
          	</div>
          </div>
        </div>

      </div>
    </div>

	</div>
  </section>
  <!--== Banners End ==-->

  <!--== Featured Product Start ==-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-7 section-heading">
       		<h3 class="font-600 mt-0">Shop Featured Products</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed fermentum nibh, vel aliquet massa. Etiam in magna id risus lacinia luctus eget eu est.</p>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-01.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
       				<div class="wrap-label">
       					<span class="label-product new-label">New</span>
       					<span class="label-product hot-label">hot</span>
       					<span class="label-product sale-label">-50%</span>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Stitchout Boot">Stitchout Boot</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$25.00</span>
        				<span class="tr-product-price-price price-old">$40.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-02.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
       				<div class="wrap-label">
       					<span class="label-product hot-label">hot</span>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Baseball Cap">Baseball Cap</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$15.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-03.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Sun Glasses">Sun Glasses</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$179.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-04.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
       				<div class="wrap-label">
       					<span class="label-product new-label">New</span>
       					<span class="label-product sale-label">-35%</span>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="White Skirt">White Skirt</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$200.00</span>
        				<span class="tr-product-price-price price-old">$250.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-05.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
       				<div class="wrap-label">
       					<span class="label-product sale-label">-70%</span>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Slim indigo Shirt">Slim indigo Shirt</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$100.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-06.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Striped Shirt">Striped Shirt</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$75.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-07.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
       				<div class="wrap-label">
       					<span class="label-product new-label">New</span>
       					<span class="label-product hot-label">hot</span>
       					<span class="label-product sale-label">-20%</span>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Casual T-Shirt">Casual T-Shirt</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$64.00</span>
        				<span class="tr-product-price-price price-old">$80.00</span>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="product-item tr-products">
        		<div class="product-image tr-product-thumbnail">
        			<a href="shop-product.html">
       					<img class="img-responsive" src="assets/images/shop/product-08.jpg" alt="torneo-product"/>
					</a>
       				<div class="product-action">
       					<button class="btn-shopping btn-light btn-md btn-square btn" type="button" value="Add to Cart">
       						<i class="icofont icofont-cart"></i> <span>Add to Cart</span>
       					</button>
       				</div>
       				<div class="tr-product-actions">
       					<div class="product-addto-links">
       						<a class="act-btn" data-label="Wishlist" href="#." data-toggle="tooltip" data-placement="left">
								<i class="icofont icofont-heart-alt"></i>
								<span class="hidden">Wishlist</span>
							</a>
       					</div>
       					<div class="quickview-btn hidden-sm hidden-xs">
       						<a href="#." data-label="Quickview" class="act-btn" data-toggle="tooltip" data-placement="left">
       							<i class="icofont icofont-plus"></i>
       							<span class="hidden">Quickview</span>
       						</a>
       					</div>
       				</div>
       				<div class="wrap-label">
       					<span class="label-product hot-label">hot</span>
       				</div>
        		</div>
        		<div class="tr-product-content">
        			<h4><a href="#." class="tr-product-title" title="Jackie Shell">Jackie Shell</a></h4>
        			<div class="product-price tr-product-price">
        				<span class="tr-product-price-price">$44.00</span>
        				<span class="tr-product-price-price price-old">$65.00</span>
        			</div>
        		</div>
        	</div>
        </div>

      </div>
    </div>
  </section>
  <!--== Featured Product End ==-->

  <!--== Bottom Banners Start ==-->
  <section class="white-bg">
  	<div class="tr-collection-type-1">
		<div class="container">
			<div class="row">
			  <div class="col-md-6 col-sm-6 col-xs-12 shop-banner">
					<div class="tr-collection">
						<a href="#.">
							<img src="assets/images/shop/banner-06.jpg" alt="banner-06"/>
							<div class="tr-collection-content">
								<h3>50% Off <br> Leather Totebag</h3>
								<span class="btn btn-dark-outline btn-square btn-md">shop now</span>
							</div>
						</a>
				  </div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 shop-banner">
					<div class="tr-collection">
						<a href="#.">
							<img src="assets/images/shop/banner-07.jpg" alt="banner-06"/>
							<div class="tr-collection-content">
								<h3>50% Off <br> Casual Shoes</h3>
								<span class="btn btn-dark-outline btn-square btn-md">shop now</span>
							</div>
						</a>
				  </div>
				</div>
			</div>
		</div>
  	</div>
  </section>
  <!--== Bottom Banners End ==-->

  <!--== Subscribe Start ==-->
  <section class="pt-80 pb-80 default-bg">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-7 section-heading white-color">
				<h3 class="font-600 mt-0">Sign up for newsletters</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed fermentum nibh, vel aliquet massa. Etiam in magna id risus lacinia luctus eget eu est.</p>
      			<div class="tr-form-subscribe mt-30">
					<form class="signup-form remove-margin" method="post">
						<div class="input-group password-input-group">
							<input type="email" name="EMAIL" id="Email" class="newsletter-input form-control form-group border-radius-25" value="" placeholder="Your Mail Address">
							<span class="input-group-btn">
							  <button type="submit" class="newsletter-submit btn btn-dark btn-md btn-square" name="subscribe" id="Subscribe">
								<span>sign up now</span>
							  </button>
							</span>
						</div>
					</form>
       			</div>
        	</div>
  		</div>
  	</div>
  </section>
  <!--== Subscribe End ==-->

  <!--== Footer Start ==-->
  <footer class="footer" id="footer-fixed">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 display-table" style="height: 40px;">
            <div class="copy-right text-left v-align">© 2019 <i class="icon icofont icofont-heart-alt"></i> Torneo. All rights reserved</div>
          </div>
          <div class="col-sm-4 col-xs-12">
          	<div class="logo display-block height-auto z-index-1"><a href="index.html">
          		<img class="logo margin-left-auto margin-right-auto" src="assets/images/logo-footer.png" alt="torneo logo"></a>
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
