<x-section-layout>
    <section class="pt-50 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 section-heading text-center">
                <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">Our Location</h4>
                <hr class="center_line default-bg">
                <p id="contentText" class="mt-30 font-16px dark-color text-center roboto-font">Please, visit to us!</p>
            </div>
          </div>
          <div id="mapLink" class="row text-center">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2611280535918!2d139.7094805379498!3d35.73796627717492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a013f7dbb3%3A0x951f540f2d58a6ad!2z44CSMTcxLTAwMTQgVG9reW8sIFRvc2hpbWEgQ2l0eSwgSWtlYnVrdXJvLCA0LWNoxY1tZeKIkjI34oiSNSDlkoznlLDjg5Pjg6sgNTAy!5e0!3m2!1sen!2sjp!4v1719909993290!5m2!1sen!2sjp"
                width="100%" 
                height="350" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
        </div>
    </section>

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
                    <!-- Text input for Design Studio -->
                    <input type="text" id="linkInput" class="form-control md-input mt-10" placeholder="生成された埋め込みコード">
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
      document.getElementById('linkInput').addEventListener('input', function () {
          document.getElementById('mapLink').innerHTML = this.value;
      });
  </script>
</x-section-layout>