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
      <div class="row mt-50">
        <div class="col-md-12">
          <x-message-box></x-message-box>
            <form name="send-contact-form" id="send-contact-form" action="{{ route('guest.send.contact') }}" method="POST" 
                class="contact-form-style-01" enctype="multipart/form-data">
                @csrf
                <div class="messages"></div>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                      <div class="form-group">
                          <label class="sr-only" for="subject">件名</label>
                          <input type="text" name="subject" class="md-input" id="subject" placeholder="件名 *" value="{{ old('subject') }}">
                          <span class="error" style="color:#BF0731" id="error-subject"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                      <div class="form-group">
                          <label class="sr-only" for="name">名前</label>
                          <input type="text" name="name" class="md-input" id="name" placeholder="名前 *" value="{{ old('name') }}">
                          <span class="error" style="color:#BF0731" id="error-name"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                      <div class="form-group">
                          <label class="sr-only" for="email">メール</label>
                          <input type="text" name="email" class="md-input" id="email" placeholder="メール *" value="{{ old('email') }}">
                          <span class="error" style="color:#BF0731" id="error-email"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                      <div class="form-group">
                          <label class="sr-only" for="phone">電話番号</label>
                          <input type="text" name="phone" class="md-input" id="phone" placeholder="電話番号 *">
                          <span class="error" style="color:#BF0731" id="error-phone"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                      <div class="form-group">
                          <label class="sr-only" for="content">内容</label>
                          <textarea name="content" class="md-textarea" id="content" rows="7" placeholder="内容 *">{{ old('content') }}</textarea>
                          <span class="error" style="color:#BF0731" id="error-content"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                      <div class="text-left mt-20">
                          <input type="hidden" id="confirmed" name="confirmed" value="0">
                          <div class="tr-modal-popup text-center">
                              <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                  <span>登録 <i class="ion-android-arrow-forward"></i></span>
                              </a>
                          </div>
                      </div>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>
  <!--== Contact Form Style 01 End ==-->

  <!-- Modal Popup Message Box -->
  <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
    <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">お問合せ送信</span>
    <p class="mb-20">お問合せを送信してもよろしいですか?</p>
    <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
    <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
  </div>

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
                  <p class="font-400 mt-20">4-27-5 Ikebukuro,<br> Toshima-ku, Tokyo</p>
                </div>
              </div>
              <div class="box-back height-300px grey-bg">
                <div class="content-wrap">
                  <i class="icon-map-pin font-40px default-color"></i>
                  <h4 class="font-600">Contact Address</h4>
                  <p class="font-400 mt-20">4-27-5 Ikebukuro,<br> Toshima-ku, Tokyo</p>
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
                  <p class="font-400 mt-20">Tel:(+81)03-3981-5090</p>
                </div>
              </div>
              <div class="box-back height-300px grey-bg">
                <div class="content-wrap">
                  <i class="icon-chat font-40px default-color"></i>
                  <h4 class="font-600">Call Us Now</h4>
                  <p class="font-400 mt-20">Tel:(+81)03-3981-5090</p>
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
                  <p class="font-400 mt-20"><a href="#.">support@ad-pro.site</a></p>
                </div>
              </div>
              <div class="box-back height-300px grey-bg">
                <div class="content-wrap">
                  <i class="icon-envelope font-40px default-color"></i>
                  <h4 class="font-600">Email Us</h4>
                  <p class="font-400 mt-20"><a href="#.">support@ad-pro.site</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--== Contact Info End ==-->
  {{-- validate --}}
  <script>
    function showModal() {
        if (validateSendContactForm()) {
            document.getElementById('open-modal').setAttribute('href', '#modal-popup');
            document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
            document.getElementById('open-modal').click();
        }
    }

    function submitForm() {
        document.getElementById('confirmed').value = '1';
        document.getElementById('send-contact-form').submit();
    }

    function validateSendContactForm() {
        let isValid = true;
        document.querySelectorAll('.error').forEach(el => el.textContent = '');

        const subject = document.getElementById('subject').value.trim();
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const content = document.getElementById('content').value.trim();

        if (!subject) {
            document.getElementById('error-subject').textContent = '件名を入力してください';
            isValid = false;
        } else if (subject.length > 255) {
            isValid = false;
            document.getElementById('error-subject').textContent = '件名は255文字以内でなければなりません';
        }
        
        if (!name) {
            document.getElementById('error-name').textContent = '名前を入力してください';
            isValid = false;
        } else if (name.length > 255) {
            isValid = false;
            document.getElementById('error-name').textContent = '名前は255文字以内でなければなりません';
        }
        
        if (!email) {
            isValid = false;
            document.getElementById('error-email').textContent = 'メールアドレスを入力してください';
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            isValid = false;
            document.getElementById('error-email').textContent = '有効なメールアドレスを入力してください';
        }
        
        if (!phone) {
            isValid = false;
            document.getElementById('error-phone').textContent = '電話番号を入力してください';
        } else if (!/^[\d()-\s]+$/.test(phone)) {
            isValid = false;
            document.getElementById('error-phone').textContent = '電話番号は数字、(、)、-、スペースのみを含めることができます';
        }

        if (!content) {
            document.getElementById('error-content').textContent = '内容を入力してください';
            isValid = false;
        }

        return isValid;
    }
  </script>
</x-guest-layout>