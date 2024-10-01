<x-section-layout>
    <!--== Hero Scene Start ==-->
    <section class="pt-0 pb-0" id="home">
        <div class="parallax-overlay z-index-0"></div>
        <div class="container relative view-height-50vh">
            <div class="simple-content-slider text-center">
                <div class="simple-content-slider-text">
                    <div class="simple-content-text-inner">
                        <div class="row">
                            <div class="col-md-10 centerize-col">
                                <div class="white-color text-center">
                                    <!-- Update the text dynamically with textarea -->
                                    <span id="contentText" class="font-60px font-700 play-font wow fadeInUp font-italic" data-wow-delay="0.1s">We Design Digital Brand Experiences.</span>
                                    <!-- Update the heading dynamically with text input -->
                                    <h1 id="titleText" class="white-color font-700 font-120px line-height-120 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60 wow fadeInUp" data-wow-delay="0.2s">Design Studio</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update the background image dynamically with file input -->
        <div id="backgroundImage" class="view-height-50vh absolute z-index-minus2 top-0 width-100-percent">
            <div class="view-height-50vh">
                <div class="slide-img parallax-bg fixed-bg" data-parallax-bg-image="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" data-parallax-speed="0.8" data-parallax-direction="up"></div>
            </div>
        </div>
    </section>
    <!--== Hero Scene End ==-->

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
                // Get the slide-img element and update the data-parallax-bg-image attribute
                const slideImgElement = document.querySelector('.slide-img');
                const parallaxInner = document.querySelector('.parallax-inner');
                
                // Update the parallax data attribute
                slideImgElement.setAttribute('data-parallax-bg-image', e.target.result);

                // Update the parallax-inner background image directly
                if (parallaxInner) {
                    parallaxInner.style.backgroundImage = `url(${e.target.result})`;
                }
            };
            reader.readAsDataURL(file);
        }
    });
    </script>
</x-section-layout>
