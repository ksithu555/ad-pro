<x-guest-layout>
  <!--== Page Title Start ==-->
  <div class="transition-none">
      <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/all/header-ad-list.webp') }});">
          <div class="container">
              <div class="page-title text-center white-color">
                  <h1>お問合せ</h1>
                  <h4 class="text-uppercase mt-30">Contact Us</h4>
              </div>
          </div>
      </section>
  </div>
  <!--== Page Title End ==-->
  <!--== Page Title Start ==-->
  <section class="default-bg pt-20 pb-20">
  	<div class="container">
    	<div class="row white-color">
        	<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
             	<div class="v-align-middle text-left text-xs-center breadcrumb">
                   	<!-- Breadcrumb Start -->
                       	<ul class="text-xs-center white-color">
                          <li>Home</li>
                          <li>Contact Us</li>
                        </ul>
                    <!-- Breadcrumb End -->
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
             	<div class="v-align-middle text-right text-xs-center">
                	<h1 class="text-uppercase mb-0 font-600 font-16px line-height-26 mt-0">お問合せ</h1>
                </div>
             </div>
           </div>
        </div>
  </section>
  <!--== Page Title End ==-->

  <!--== Contact Form Style 01 Start ==-->
  <section class="white-bg">
    <div class="container">
        <div class="row mt-25">
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
                      <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
                        <span>Send Message <i class="ion-android-arrow-forward"></i></span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </section>
  <!--== Contact Form Style 01 End ==-->

  <!--== Contact Info Start ==-->
  <section class="default-bg">
    <div class="container">
      <div class="row mt-50 service-box-style-03">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="flipper">
            <div class="text-center mb-50 main-box">
              <div class="box-front height-300px white-bg">
                <div class="content-wrap">
                  <i class="icon-map-pin font-40px default-color"></i>
                  <h4 class="font-600">Contact Address</h4>
                  <p class="font-400 mt-20">Patton Street Caulfield<br> East VIC 3145</p>
                </div>
              </div>
              <div class="box-back height-300px grey-bg">
                <div class="content-wrap">
                  <i class="icon-map-pin font-40px default-color"></i>
                  <h4 class="font-600">Contact Address</h4>
                  <p class="font-400 mt-20">Patton Street Caulfield<br> East VIC 3145</p>
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
                  <i class="icon-chat font-40px default-color"></i>
                  <h4 class="font-600">Call Us Now</h4>
                  <p class="font-400 mt-20">Tel:+61 (03) 9414 7288<br>Tel:+56 (0)12 7686 7405</p>
                </div>
              </div>
              <div class="box-back height-300px grey-bg">
                <div class="content-wrap">
                  <i class="icon-chat font-40px default-color"></i>
                  <h4 class="font-600">Call Us Now</h4>
                  <p class="font-400 mt-20">Tel:+61 (03) 9414 7288<br>Tel:+56 (0)12 7686 7405</p>
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
                  <i class="icon-envelope font-40px default-color"></i>
                  <h4 class="font-600">Email Us</h4>
                  <p class="font-400 mt-20"><a href="#.">sayhi@yoursite.com</a><br><a href="#.">info@yoursite.com</a></p>
                </div>
              </div>
              <div class="box-back height-300px grey-bg">
                <div class="content-wrap">
                  <i class="icon-envelope font-40px default-color"></i>
                  <h4 class="font-600">Email Us</h4>
                  <p class="font-400 mt-20"><a href="#.">sayhi@yoursite.com</a><br><a href="#.">info@yoursite.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--== Contact Info End ==-->

  <!--== Social Icons Style 08 Start ==-->
  <section class="white-bg pt-10 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-10 col-xs-10 centerize-col text-center social-icons-style-08">
              <ul class="md-icon">
                <li><a class="facebook" href="#."><i class="icofont icofont-social-facebook"></i></a></li>
                <li><a class="twitter" href="#."><i class="icofont icofont-social-twitter"></i></a></li>
                <li><a class="behance" href="#."><i class="icofont icofont-social-behance"></i></a></li>
                <li><a class="linkedin" href="#."><i class="icofont icofont-social-linkedin"></i></a></li>
                <li><a class="youtube" href="#."><i class="icofont icofont-social-youtube"></i></a></li>
                <li><a class="instagram" href="#."><i class="icofont icofont-social-instagram"></i></a></li>
                <li><a class="tumblr" href="#."><i class="icofont icofont-social-tumblr"></i></a></li>
                <li><a class="flickr" href="#."><i class="icofont icofont-social-flikr"></i></a></li>
                <li><a class="dribble" href="#."><i class="icofont icofont-social-dribble"></i></a></li>
                <li><a class="pinterest" href="#."><i class="icofont icofont-social-pinterest"></i></a></li>
                <li><a class="github" href="#."><i class="icofont icofont-social-github"></i></a></li>
                <li><a class="rss" href="#."><i class="icofont icofont-ui-rss"></i></a></li>
                <li><a class="google-plus" href="#."><i class="icofont icofont-social-google-plus"></i></a></li>
              </ul>
            </div>
        </div>
    </div>
  </section>
  <!--== Social Icons Style 08 End ==-->
</x-guest-layout>