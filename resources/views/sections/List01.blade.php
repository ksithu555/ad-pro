<x-section-layout>
    <!--== List01 Start ==-->
    <section class="pt-0 pb-0 grey-bg">
        <div class="container">
            <div class="row row-flex" style="align-items: flex-start;">
                <div class="col-md-6 col-sm-12" style="margin-top: 25px;">
                    <img id="imageFile1" class="img-responsive" style="position: relative;"
                    src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt=""/>
                </div>                
                <div class="col-md-6 col-sm-12">
                    <div class="col-inner text-left">
                        <h4 id="titleText1" class="mt-20 text-uppercase">Innovation in digital media consulting excellence.</h4>
                        <hr class="dark-bg left_line bold-line" style="background-color: #BF0731;">
                        <p id="contentText1" class="mt-30 font-14px dark-color text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper ex ac velit varius semper. Mauris at dolor nec ante ultricies aliquam ac vitae diam. Quisque sodales vehicula elementum. Phasellus tempus tellus vitae ullamcorper hendrerit.</p>
                    </div>
                </div>
            </div>
            <div class="row row-flex mt-20" style="align-items: flex-start;">            
                <div class="col-md-6 col-sm-12">
                    <div class="col-inner text-left">
                        <h4 id="titleText2" class="mt-20 text-uppercase">Innovation in digital media consulting excellence.</h4>
                        <hr class="dark-bg left_line bold-line" style="background-color: #BF0731;">
                        <p id="contentText2" class="mt-30 font-14px dark-color text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper ex ac velit varius semper. Mauris at dolor nec ante ultricies aliquam ac vitae diam. Quisque sodales vehicula elementum. Phasellus tempus tellus vitae ullamcorper hendrerit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="margin-top: 25px;">
                    <img id="imageFile2" class="img-responsive" style="position: relative;"
                    src="{{ asset('assets/images/title-bg/ad-pro-default.jpg') }}" alt=""/>
                </div>    
            </div>
        </div>
    </section>
    <!--== List01 End ==-->

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
                    slideImgElement.src = e.target.result;
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
                    slideImgElement.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-section-layout>