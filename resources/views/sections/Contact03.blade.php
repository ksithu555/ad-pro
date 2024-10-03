<x-section-layout>
    <section class="dark-bg pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading white-color">
                    <h4 class="text-uppercase mt-0">お問合せ</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <x-message-box></x-message-box>
                    <form name="send-contact-form" id="send-contact-form" action="" method="POST" 
                        class="contact-form-style-04" enctype="multipart/form-data">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="subject">件名</label>
                                    <input type="text" name="subject" class="md-input style-02" id="subject" placeholder="件名 *" value="{{ old('subject') }}">
                                    <span class="error" style="color:#BF0731" id="error-subject"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="name">名前</label>
                                    <input type="text" name="name" class="md-input style-02" id="name" placeholder="名前 *" value="{{ old('name') }}">
                                    <span class="error" style="color:#BF0731" id="error-name"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="email">メール</label>
                                    <input type="text" name="email" class="md-input style-02" id="email" placeholder="メール *" value="{{ old('email') }}">
                                    <span class="error" style="color:#BF0731" id="error-email"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2 pt-10">
                                <div class="form-group">
                                    <label class="sr-only" for="phone">電話番号</label>
                                    <input type="text" name="phone" class="md-input style-02" id="phone" placeholder="電話番号 *">
                                    <span class="error" style="color:#BF0731" id="error-phone"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group ">
                                    <label class="sr-only" for="content">内容</label>
                                    <textarea name="content" class="md-textarea style-02" id="content" rows="7" placeholder="内容 *">{{ old('content') }}</textarea>
                                    <span class="error" style="color:#BF0731" id="error-content"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="text-left mt-20">
                                    <input type="hidden" id="confirmed" name="confirmed" value="0">
                                    <div class="tr-modal-popup text-center">
                                        <a id="open-modal" class="btn btn-color btn-md btn-square btn-animate remove-margin">
                                            <span>送信 <i class="ion-android-arrow-forward"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-section-layout>