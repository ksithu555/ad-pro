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
        <div class="row mt-50">
            <div class="col-md-8 centerize-col">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="box-icon text-center mb-20">
                            <i class="icon-wallet font-50px default-color"></i>
                            <div class="title-section">
                                <h4 id="titleText1" class="mt-0 font-600">Attractive Salary</h4>
                                <p id="contentText1" class="font-400">Lorem ipsum dolor sit amet consectetur adipiscing elit sed in arcu est vivamus.</p>
                            </div>
                        </div>
                        <div class="box-icon text-center">
                            <i class="icon-heart font-50px default-color"></i>
                            <div class="title-section">
                                <h4 id="titleText2" class="mt-0 font-600">Medical Insurance</h4>
                                <p id="contentText2" class="font-400">Lorem ipsum dolor sit amet consectetur adipiscing elit sed in arcu est vivamus.</p>
                            </div>
                        </div>
                    </div>
      
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="box-icon text-center">
                            <i class="icon-hourglass font-50px default-color"></i>
                            <div class="title-section">
                                <h4 id="titleText3" class="mt-0 font-600">Fixible Timing</h4>
                                <p id="contentText3" class="font-400">Lorem ipsum dolor sit amet consectetur adipiscing elit sed in arcu est vivamus.</p>
                            </div>
                        </div>
                        <div class="box-icon text-center">
                            <i class="icon-notebook font-50px default-color"></i>
                            <div class="title-section">
                                <h4 id="titleText4" class="mt-0 font-600">Education Support</h4>
                                <p id="contentText4" class="font-400">Lorem ipsum dolor sit amet consectetur adipiscing elit sed in arcu est vivamus.</p>
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