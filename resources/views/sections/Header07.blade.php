<x-section-layout>
    <!--== Hero Slider Start ==-->
  <section class="home-slider no-direction">
    <div class="default-slider slick">
      <div class="slide">
        <div id="imageFile1" class="slide-img parallax-effect" style="background:url({{ asset('assets/images/title-bg/ad-pro-default.jpg') }}) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h2 id="titleText1" class="white-color font-700 text-uppercase font-100px line-height-90">Digital Creations</h2>
                <h4 id="contentText1" class="white-color roboto-font font-300">Your expectise of this is <br>critical to your success</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div id="imageFile2" class="slide-img parallax-effect" style="background:url({{ asset('assets/images/title-bg/ad-pro-default.jpg') }}) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color text-center">
                <h2 id="titleText2" class="white-color font-700 text-uppercase font-100px line-height-90">Innovate Transform</h2>
                <h4 id="contentText2" class="white-color roboto-font font-300">Core to the success of what we achieve for our clients</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Hero Slider End ==-->

  <!-- Test Button and Dynamic Form Section -->
  <div class="container mt-40 mb-40">
    <div class="row">
        <div class="col-md-8 centerize-col">
            <button id="testButton" class="btn btn-color btn-circle">ライブプレビューで確認</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 centerize-col">
            <div id="dynamicForm" class="mt-20" style="display: none;">
                <h4>ブロック１</h4>
                <!-- Text input for Design Studio -->
                <input type="text" id="titleTextInput1" class="form-control md-input mt-10" placeholder="タイトル">
                <!-- Textarea input for We Design Digital Brand Experiences -->
                <textarea id="contentTextInput1" class="form-control md-textarea mt-10" placeholder="内容"></textarea>
                <!-- File input for changing background image -->
                <input type="file" id="fileInput1" class="form-control mt-10" accept="image/*">

                <h4>ブロック２</h4>
                <!-- Text input for Design Studio -->
                <input type="text" id="titleTextInput2" class="form-control md-input mt-10" placeholder="タイトル">
                <!-- Textarea input for We Design Digital Brand Experiences -->
                <textarea id="contentTextInput2" class="form-control md-textarea mt-10" placeholder="内容"></textarea>
                <!-- File input for changing background image -->
                <input type="file" id="fileInput2" class="form-control mt-10" accept="image/*">
            </div>
        </div>
    </div>
  </div>

  <script>
      // Show the form when clicking the Test button
      document.getElementById('testButton').addEventListener('click', function () {
          document.getElementById('dynamicForm').style.display = 'block';
      });

      // Update the Design Studio heading in real-time
      document.getElementById('titleTextInput1').addEventListener('input', function () {
          document.getElementById('titleText1').innerText = this.value;
      });

      // Update the Brand Experiences text in real-time
      document.getElementById('contentTextInput1').addEventListener('input', function () {
          document.getElementById('contentText1').innerText = this.value;
      });

      // Update the background image dynamically by changing the data-parallax-bg-image attribute
      document.getElementById('fileInput1').addEventListener('change', function (event) {
          const file = event.target.files[0];
          if (file) {
              const reader = new FileReader();
              reader.onload = function (e) {
                  // Get the slide-img element and update the data-parallax-bg-image attribute
                  const slideImgElement = document.getElementById('imageFile1');

                  // Update the parallax-inner background image directly
                  if (slideImgElement) {
                    slideImgElement.style.backgroundImage = `url(${e.target.result})`;
                  }
              };
              reader.readAsDataURL(file);
          }
      });

      // Update the Design Studio heading in real-time
      document.getElementById('titleTextInput2').addEventListener('input', function () {
          document.getElementById('titleText2').innerText = this.value;
      });

      // Update the Brand Experiences text in real-time
      document.getElementById('contentTextInput2').addEventListener('input', function () {
          document.getElementById('contentText2').innerText = this.value;
      });

      // Update the background image dynamically by changing the data-parallax-bg-image attribute
      document.getElementById('fileInput2').addEventListener('change', function (event) {
          const file = event.target.files[0];
          if (file) {
              const reader = new FileReader();
              reader.onload = function (e) {
                  // Get the slide-img element and update the data-parallax-bg-image attribute
                  const slideImgElement = document.getElementById('imageFile2');

                  // Update the parallax-inner background image directly
                  if (slideImgElement) {
                    slideImgElement.style.backgroundImage = `url(${e.target.result})`;
                  }
              };
              reader.readAsDataURL(file);
          }
      });
  </script>
</x-section-layout>