<x-section-layout>
    <!--== Hero Slider Start ==-->
    <section class="parallax-bg fixed-bg view-height-100vh lg-section" 
    data-parallax-bg-image="" data-parallax-speed="0.5" data-parallax-direction="up">
        <div class="color-overlay-bg"></div>
        <div class="hero-text-wrap transparent-bg">
        <div class="hero-text">
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-30">
                <div class="all-padding-50 white-color">
                    <h3 id="titleText" class="roboto-font font-700 line-height-50">Awesome app landing page for customers</h3>
                    <h5 id="contentText" class="roboto-font font-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id sem vehicula, tristique nibh dictum, bibendum eros. Suspendisse lectus libero, porttitor vitae orci a, venenatis sodales mi.</h5>
                </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-mobile-wrap">
                    <img id="imageFile" src="{{ asset('assets/images/all/iphone-3.png') }}" />
                </div>
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
                    <h4>ブロック</h4>
                    <!-- Text input for Design Studio -->
                    <input type="text" id="titleTextInput" class="form-control md-input mt-10" placeholder="タイトル">
                    <!-- Textarea input for We Design Digital Brand Experiences -->
                    <textarea id="contentTextInput" class="form-control md-textarea mt-10" placeholder="内容"></textarea>
                    <!-- File input for changing background image -->
                    <input type="file" id="fileInput" class="form-control mt-10" accept="image/*">
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
                    // Get the image element and update its src attribute with the uploaded image
                    const imageElement = document.getElementById('imageFile');
                    imageElement.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-section-layout>