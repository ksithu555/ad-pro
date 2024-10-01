<x-section-layout>
  <!--== Who We Are Start ==-->
  <section class="white-bg pt-50 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
            <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">The Best Way to Sell Your Design.</h4>
            <hr class="dark-bg center_line bold-line">
            <p id="contentText" class="mt-30 font-16px dark-color text-center roboto-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
      <div class="row mt-50 service-box-style-03">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="flipper">
            <div class="text-center mb-50 main-box">
              <div class="box-front height-300px white-bg">
                <div class="content-wrap">
                  <i class="icofont icofont-magic font-40px default-color"></i>
                  <h4 id="titleText1" class="font-600">Design</h4>
                  <p id="contentText1" class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-back height-300px default-bg">
                <div class="content-wrap white-color">
                  <i class="icofont icofont-magic font-40px"></i>
                  <h4 id="titleTextBack1" class="font-600">Design</h4>
                  <p id="contentTextBack1" class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                  <i class="icofont icofont-globe-alt font-40px default-color"></i>
                  <h4 id="titleText2" class="font-600">Development</h4>
                  <p id="contentText2" class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-back height-300px default-bg">
                <div class="content-wrap white-color">
                  <i class="icofont icofont-globe-alt font-40px"></i>
                  <h4 id="titleTextBack2" class="font-600">Development</h4>
                  <p id="contentTextBack2" class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                  <i class="icofont icofont-headphone-alt font-40px default-color"></i>
                  <h4 id="titleText3" class="font-600">Release</h4>
                  <p id="contentText3" class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-back height-300px default-bg">
                <div class="content-wrap white-color">
                  <i class="icofont icofont-headphone-alt font-40px"></i>
                  <h4 id="titleTextBack3" class="font-600">Release</h4>
                  <p id="contentTextBack3" class="font-400 mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== Who We Are End ==-->

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
                <h4>ブロック</h4>
                <!-- Text input for Design Studio -->
                <input type="text" id="titleTextInput" class="form-control md-input mt-10" placeholder="タイトル">
                <!-- Textarea input for We Design Digital Brand Experiences -->
                <textarea id="contentTextInput" class="form-control md-textarea mt-10" placeholder="内容"></textarea>


                <h4>サブブロック１</h4>
                <!-- Text input for Design Studio -->
                <input type="text" id="titleTextInput1" class="form-control md-input mt-10" placeholder="タイトル">
                <!-- Textarea input for We Design Digital Brand Experiences -->
                <textarea id="contentTextInput1" class="form-control md-textarea mt-10" placeholder="内容"></textarea>


                <h4>サブブロック２</h4>
                <!-- Text input for Design Studio -->
                <input type="text" id="titleTextInput2" class="form-control md-input mt-10" placeholder="タイトル">
                <!-- Textarea input for We Design Digital Brand Experiences -->
                <textarea id="contentTextInput2" class="form-control md-textarea mt-10" placeholder="内容"></textarea>


                <h4>サブブロック３</h4>
                <!-- Text input for Design Studio -->
                <input type="text" id="titleTextInput3" class="form-control md-input mt-10" placeholder="タイトル">
                <!-- Textarea input for We Design Digital Brand Experiences -->
                <textarea id="contentTextInput3" class="form-control md-textarea mt-10" placeholder="内容"></textarea>
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
    document.getElementById('titleTextInput').addEventListener('input', function () {
        document.getElementById('titleText').innerText = this.value;
    });

    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput').addEventListener('input', function () {
        document.getElementById('contentText').innerText = this.value;
    });

    // Update the Design Studio heading in real-time
    document.getElementById('titleTextInput1').addEventListener('input', function () {
        document.getElementById('titleText1').innerText = this.value;
        document.getElementById('titleTextBack1').innerText = this.value;
    });

    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput1').addEventListener('input', function () {
        document.getElementById('contentText1').innerText = this.value;
        document.getElementById('contentTextBack1').innerText = this.value;
    });

    // Update the Design Studio heading in real-time
    document.getElementById('titleTextInput2').addEventListener('input', function () {
        document.getElementById('titleText2').innerText = this.value;
        document.getElementById('titleTextBack2').innerText = this.value;
    });

    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput2').addEventListener('input', function () {
        document.getElementById('contentText2').innerText = this.value;
        document.getElementById('contentTextBack2').innerText = this.value;
    });

    // Update the Design Studio heading in real-time
    document.getElementById('titleTextInput3').addEventListener('input', function () {
        document.getElementById('titleText3').innerText = this.value;
        document.getElementById('titleTextBack3').innerText = this.value;
    });

    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput3').addEventListener('input', function () {
        document.getElementById('contentText3').innerText = this.value;
        document.getElementById('contentTextBack3').innerText = this.value;
    });
  </script>
</x-section-layout>