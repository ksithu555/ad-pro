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
                            <li>登録確認</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">登録確認</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Call to Actions Style 05 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">登録確認</h4>
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-lg-4 col-md-5 col-xs-12 centerize-col text-center">
                <h6 class="mb-30 font-30px roboto-font font-100 mt-0">We have sent an email to {{ $user->email }} to verify your email address.</h6>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    <button type="submit" class="btn btn-md btn-color btn-animate">Verification Email<i class="tr-icon icofont icofont-arrow-right"></i></span></button>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!--== Call to Actions Style 05 End ==-->
</x-guest-layout>