<x-section-layout>
  <!--== Image Hover Styles Start ==-->
<section class="white-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 section-heading">
          <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">All Image Hover Effects</h4>
      </div>
    </div>
    <div class="row">
        <div class="col-md-8 centerize-col">
            <button id="testButton" class="btn btn-color btn-circle">ライブプレビューで確認</button>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8 centerize-col">
          <div id="dynamicForm" class="mt-20" style="display: none;">
              <h4>ブロック</h4>
              <!-- Text input for Design Studio -->
              <input type="text" id="titleTextInput" class="form-control md-input mt-10" placeholder="タイトル">


              <h4>サブブロック</h4>
              <!-- Text input for Design Studio -->
              <input type="text" id="titleTextInput1" class="form-control md-input mt-10" placeholder="タイトル">
              <!-- Textarea input for We Design Digital Brand Experiences -->
              <textarea id="contentTextInput1" class="form-control md-textarea mt-10" placeholder="内容"></textarea>
              <!-- File input for changing background image -->
              <input type="file" id="fileInput1" class="form-control mt-10" accept="image/*">
          </div>
      </div>
    </div>
    <div class="row mt-50">
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-fade"><img id="imageFile1" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                <p id="contentText1">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText1" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-push-up"><img id="imageFile2" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                <p id="contentText2">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText2" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-push-down"><img id="imageFile3" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText3">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText3" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-push-left"><img id="imageFile4" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText4">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText4" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-push-right"><img id="imageFile5" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText5">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText5" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-slide-up"><img id="imageFile6" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText6">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText6" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-slide-down"><img id="imageFile7" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText7">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText7" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-slide-left"><img id="imageFile8" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText8">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText8" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-slide-right"><img id="imageFile9" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText9">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText9" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-reveal-up"><img id="imageFile10" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText10">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText10" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-reveal-down"><img id="imageFile11" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText11">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText11" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-reveal-left"><img id="imageFile12" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText12">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText12" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-reveal-right"><img id="imageFile13" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText13">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText13" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-hinge-up"><img id="imageFile14" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText14">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText14" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-hinge-down"><img id="imageFile15" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText15">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText15" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-hinge-left"><img id="imageFile16" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText16">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText16" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-hinge-right"><img id="imageFile17" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText17">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText17" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-flip-horiz"><img id="imageFile18" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText18">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText18" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-flip-vert"><img id="imageFile19" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText19">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText19" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-flip-diag-1"><img id="imageFile20" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText20">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText20" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-flip-diag-2"><img id="imageFile21" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText21">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText21" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-out-horiz"><img id="imageFile22" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText22">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText22" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-out-vert"><img id="imageFile23" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText23">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText23" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-out-diag-1"><img id="imageFile24" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText24">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText24" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-out-diag-2"><img id="imageFile25" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText25">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText25" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-in-horiz"><img id="imageFile26" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText26">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText26" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-in-out-horiz"><img id="imageFile27" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText27">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText27" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-in-out-vert"><img id="imageFile28" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText28">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText28" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-in-out-diag-1"><img id="imageFile29" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText29">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText29" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-shutter-in-out-diag-2"><img id="imageFile30" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText30">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText30" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-fold-up"><img id="imageFile31" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText31">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText31" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-fold-down"><img id="imageFile32" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText32">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText32" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-fold-left"><img id="imageFile33" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText33">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText33" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-fold-right"><img id="imageFile34" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText34">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText34" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-zoom-in"><img id="imageFile35" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText35">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText35" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-zoom-out"><img id="imageFile36" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText36">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText36" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-zoom-out-flip-horiz"><img id="imageFile37" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText37">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText37" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-zoom-out-flip-vert"><img id="imageFile38" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText38">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText38" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
      <div class="col-md-4 col-12 mb-30">
        <figure class="imghvr-blur"><img id="imageFile39" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="your-image">
          <figcaption class="dark-bg">
            <div class="center-layout">
              <div class="v-align-middle white-color">
                
                <p id="contentText39">Passion, Dedication, and <br>a lot of coffee.</p>
              </div>
            </div>
          </figcaption>
        </figure>
        <h5 id="titleText39" class="mb-0 mt-10 text-center">Digital Designs</h5>
      </div>
    </div>
  </div>
</section>
<!--== Image Hover Styles End ==-->
<script>
  // Show the form when clicking the Test button
  document.getElementById('testButton').addEventListener('click', function () {
      document.getElementById('dynamicForm').style.display = 'block';
  });

  // Update the Design Studio heading in real-time
  document.getElementById('titleTextInput').addEventListener('input', function () {
      document.getElementById('titleText').innerText = this.value;
  });

  // Update all title texts in real-time
  document.getElementById('titleTextInput1').addEventListener('input', function () {
      for (let i = 1; i <= 39; i++) {
          document.getElementById('titleText' + i).innerText = this.value;
      }
  });

  // Update all content texts in real-time
  document.getElementById('contentTextInput1').addEventListener('input', function () {
      for (let i = 1; i <= 39; i++) {
          document.getElementById('contentText' + i).innerText = this.value;
      }
  });

  // Update all background images dynamically
  document.getElementById('fileInput1').addEventListener('change', function (event) {
      const file = event.target.files[0];
      if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
              for (let i = 1; i <= 39; i++) {
                  const slideImgElement = document.getElementById('imageFile' + i);
                  slideImgElement.src = e.target.result;
              }
          };
          reader.readAsDataURL(file);
      }
  });
</script>
</x-section-layout>