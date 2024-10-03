<x-section-layout>
    <!--== Accordion Style 03 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 id="titleText" class="text-uppercase mt-0 font-700 roboto-font">What do we do?</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-8 col-sm-12 centerize-col">
                    <div class="panel-group accordion-style-03" id="accordion-style-03">
                        <div class="panel">
                            <div class="panel-heading"> 
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#light1" aria-expanded="false" class="collapsed">
                                    <div id="titleText1" class="panel-title text-uppercase white-color">
                                        Can I customize the fonts? 
                                        <span class="pull-right"><i class="ion-chevron-up"></i></span> 
                                    </div>
                                </a> 
                            </div>
                            <div id="light1" class="panel-collapse collapse in" aria-expanded="false" role="tablist">
                                <div id="contentText1" class="panel-body"> 
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati,
                                     beatae. Facilis dolore ipsam facere perferendis deserunt 	commodi blanditiis nisi accusamus 
                                     omnis, animi vel tenetur cumque, sed veritatis? 
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading"> 
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#light2" aria-expanded="false" class="collapsed">
                                    <div id="titleText2" class="panel-title text-uppercase white-color">
                                        What about blog options? 
                                        <span class="pull-right"><i class="ion-chevron-down"></i></span> 
                                    </div>
                                </a> 
                            </div>
                            <div id="light2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div id="contentText2" class="panel-body"> 
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, 
                                    beatae. Facilis dolore ipsam facere perferendis deserunt 	commodi blanditiis nisi accusamus 
                                    omnis, animi vel tenetur cumque, sed veritatis? 
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading"> 
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#light3" aria-expanded="false" class="collapsed">
                                    <div id="titleText3" class="panel-title text-uppercase white-color">
                                        Is this template Responsive? 
                                        <span class="pull-right"><i class="ion-chevron-down"></i></span> 
                                    </div>
                                </a> 
                            </div>
                            <div id="light3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div id="contentText3" class="panel-body"> 
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, 
                                    beatae. Facilis dolore ipsam facere perferendis deserunt 	
                                    commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis? 
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading"> 
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#light4" aria-expanded="false" class="collapsed">
                                    <div id="titleText4" class="panel-title text-uppercase white-color">
                                        We're ready to start now? 
                                        <span class="pull-right"><i class="ion-chevron-down"></i></span> 
                                    </div>
                                </a> 
                            </div>
                            <div id="light4" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div id="contentText4" class="panel-body"> 
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, 
                                    beatae. Facilis dolore ipsam facere perferendis deserunt 	commodi blanditiis nisi accusamus 
                                    omnis, animi vel tenetur cumque, sed veritatis? 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Accordion Style 03 End ==--> 
  
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
        
        // Update the Design Studio heading in real-time
        document.getElementById('titleTextInput1').addEventListener('input', function () {
            const panelTitleElement = document.getElementById('titleText1');
            panelTitleElement.childNodes[0].nodeValue = this.value + " ";
        });
        
        // Update the Brand Experiences text in real-time
        document.getElementById('contentTextInput1').addEventListener('input', function () {
            document.getElementById('contentText1').innerText = this.value;
        });
        
        // Update the Design Studio heading in real-time
        document.getElementById('titleTextInput2').addEventListener('input', function () {
            const panelTitleElement = document.getElementById('titleText2');
            panelTitleElement.childNodes[0].nodeValue = this.value + " ";
        });
        
        // Update the Brand Experiences text in real-time
        document.getElementById('contentTextInput2').addEventListener('input', function () {
            document.getElementById('contentText2').innerText = this.value;
        });
        
        // Update the Design Studio heading in real-time
        document.getElementById('titleTextInput3').addEventListener('input', function () {
            const panelTitleElement = document.getElementById('titleText3');
            panelTitleElement.childNodes[0].nodeValue = this.value + " ";
        });
        
        // Update the Brand Experiences text in real-time
        document.getElementById('contentTextInput3').addEventListener('input', function () {
            document.getElementById('contentText3').innerText = this.value;
        });
    
        // Update the Design Studio heading in real-time
        document.getElementById('titleTextInput4').addEventListener('input', function () {
            const panelTitleElement = document.getElementById('titleText4');
            panelTitleElement.childNodes[0].nodeValue = this.value + " ";
        });
    
        // Update the Brand Experiences text in real-time
        document.getElementById('contentTextInput4').addEventListener('input', function () {
            document.getElementById('contentText4').innerText = this.value;
        });
    </script>
</x-section-layout>