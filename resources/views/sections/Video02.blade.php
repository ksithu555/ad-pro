<x-section-layout>
    <!--== Embeded Videos Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">Embeded Videos</h4>
                    <hr class="center_line default-bg">
                    <p id="contentText" class="mt-30 font-16px dark-color text-center roboto-font">
                        Responsive iframe videos that will resize for any device. Just simply put your iframe inside embed-container class.
                    </p>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <div class="fit-videos">
                        <iframe id="videoLink1" width="560" height="315" src="https://www.youtube.com/embed/7e90gBu4pas" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                    <div class="fit-videos">
                        <iframe id="videoLink2" src="https://player.vimeo.com/video/176916362?title=0&byline=0&portrait=0" width="640" height="360" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Embeded Videos End ==-->

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
      
        // Update the Design Studio heading in real-time
        document.getElementById('linkInput').addEventListener('input', function () {
            document.getElementById('videoLink1').src = this.value;
            document.getElementById('videoLink2').src = this.value;
        });
    </script>
</x-section-layout>