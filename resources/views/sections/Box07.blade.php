<x-section-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg pt-0 pb-0">
      <div class="container-fluid">
        <div class="row row-flex">
            <div class="col-md-3 wow fadeInUp text-center mb-30" data-wow-delay="0.1s">
                <div class="col-inner spacer dark-bg">
                    <div class="text-center">
                        <i class="icon-grid font-60px default-color"></i>
                        <h4 id="titleText1" class="mt-40 font-20px white-color">Bootstrap Grid</h4>
                        <hr class="default-bg center_line bold-line">
                        <p id="contentText1" class="white-color">Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp text-center mb-30" data-wow-delay="0.1s">
                <div class="col-inner spacer dark-bg">
                    <div class="text-center">
                        <i class="icon-paintbrush font-60px default-color"></i>
                        <h4 id="titleText2" class="mt-40 font-20px white-color">Digital Branding</h4>
                        <hr class="default-bg center_line bold-line">
                        <p id="contentText2" class="white-color">Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp text-center mb-30" data-wow-delay="0.1s">
                <div class="col-inner spacer dark-bg">
                    <div class="text-center">
                        <i class="icon-speedometer font-60px default-color"></i>
                        <h4 id="titleText3" class="mt-40 font-20px white-color">Top Performance</h4>
                        <hr class="default-bg center_line bold-line">
                        <p id="contentText3" class="white-color">Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp text-center mb-30" data-wow-delay="0.1s">
                <div class="col-inner spacer dark-bg">
                    <div class="text-center">
                        <i class="icon-laptop font-60px default-color"></i>
                        <h4 id="titleText4" class="mt-40 font-20px white-color">Responsive Design</h4>
                        <hr class="default-bg center_line bold-line">
                        <p id="contentText4" class="white-color">Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p>
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
  
  
                  <h4>サブブロック４</h4>
                  <!-- Text input for Design Studio -->
                  <input type="text" id="titleTextInput4" class="form-control md-input mt-10" placeholder="タイトル">
                  <!-- Textarea input for We Design Digital Brand Experiences -->
                  <textarea id="contentTextInput4" class="form-control md-textarea mt-10" placeholder="内容"></textarea>
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
  
    // Update the Design Studio heading in real-time
    document.getElementById('titleTextInput2').addEventListener('input', function () {
        document.getElementById('titleText2').innerText = this.value;
    });
  
    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput2').addEventListener('input', function () {
        document.getElementById('contentText2').innerText = this.value;
    });
  
    // Update the Design Studio heading in real-time
    document.getElementById('titleTextInput3').addEventListener('input', function () {
        document.getElementById('titleText3').innerText = this.value;
    });
  
    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput3').addEventListener('input', function () {
        document.getElementById('contentText3').innerText = this.value;
    });
  
    // Update the Design Studio heading in real-time
    document.getElementById('titleTextInput4').addEventListener('input', function () {
        document.getElementById('titleText4').innerText = this.value;
    });

    // Update the Brand Experiences text in real-time
    document.getElementById('contentTextInput4').addEventListener('input', function () {
        document.getElementById('contentText4').innerText = this.value;
    });
  </script>
</x-section-layout>