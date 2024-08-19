<x-guest-layout>
    <!--== Page Title Start ==-->
    <section class="default-bg pt-40 pb-40">
        <div class="container">
          <div class="row white-color">
              <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
                   <div class="v-align-middle text-left text-xs-center breadcrumb">
                         <!-- Breadcrumb Start -->
                             <ul class="text-xs-center white-color">
                            <li>ホーム</li>
                            <li>管理者ログイン</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">管理者ログイン</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">管理者ログイン</h4>
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 centerize-col">
                    <form name="login-form" id="login-form" action="{{ route('admin.store.login') }}" method="POST" class="contact-form-style-01">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="email" class="md-input" id="email" placeholder="Email *" required data-error="Please Enter Valid Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" class="md-input" id="password" placeholder="Password *" required data-error="Your Password is Required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sd-offset-2">
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-outline btn-md btn-square btn-animate remove-margin">
                                        <span>ログイン <i class="ion-android-arrow-forward"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--== Contact Form Style 01 End ==-->
</x-guest-layout>