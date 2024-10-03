<x-section-layout>
    <!--== Who We Are Start ==-->
    <section class="white-bg">
        <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading text-center">
                <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">What We Do</h4>
                <hr class="center_line default-bg">
                <p id="contentText" class="mt-30 font-16px dark-color text-center roboto-font">Whether you're building a simple prototype or a business-critical product, And We have Developers, designers, and happy clients.</p>
            </div>
            <div class="col-sm-8 centerize-col text-center">
                <div class="video-box mt-50">
                    <img id="imageFile" class="img-responsive" src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt="">
                    <div class="video-box_overlay">
                        <div class="center-layout">
                            <div class="v-align-middle"> 
                                <a id="videoLink" class="popup-youtube" href="https://www.youtube.com/watch?v=xih-KwqC7q0">
                                <div class="play-button"><i class="tr-icon ion-android-arrow-dropright"></i> </div>
                                </a> 
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
                    <!-- File input for changing background image -->
                    <input type="file" id="fileInput" class="form-control mt-10" accept="image/*">
                    <!-- Text input for Design Studio -->
                    <input type="text" id="linkInput" class="form-control md-input mt-10" placeholder="URL">
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
    
        // Update the background image dynamically by changing the data-parallax-bg-image attribute
        document.getElementById('fileInput').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Get the slide-img element and update the data-parallax-bg-image attribute
                    const slideImgElement = document.getElementById('imageFile');
                    slideImgElement.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
      
        // Update the Design Studio heading in real-time
        document.getElementById('linkInput').addEventListener('input', function () {
            document.getElementById('videoLink').setAttribute('href', this.value);
        });
    </script>
</x-section-layout>