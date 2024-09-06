<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/all/second-header-01.jpg') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>登録確認</h1>
                    <h4 class="text-uppercase mt-30">Registration Confirmation</h4>
                </div>
            </div>
        </section>
    </div>
    <!--== Page Title End ==-->
    <!--== Page Title Start ==-->
    <section class="default-bg pt-20 pb-20">
        <div class="container">
          <div class="row white-color">
              <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" style="height:30px;">
                   <div class="v-align-middle text-left text-xs-center breadcrumb">
                         <!-- Breadcrumb Start -->
                             <ul class="text-xs-center white-color">
                            <li>Home</li>
                            <li>Registration Confirmation</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-16px line-height-26 mt-0">登録確認</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Call to Actions Style 05 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row mt-25">
                <div class="col-lg-4 col-md-5 col-xs-12 centerize-col text-center">
                <x-message-box></x-message-box>
                <h6 class="mb-30 font-30px roboto-font font-100 mt-0">あなたのメールアドレスを確認するために、{{ $user->email }} にメールを送信しました。</h6>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    <button type="submit" class="btn btn-md btn-color btn-animate">確認メールを再送信<i class="tr-icon icofont icofont-arrow-right"></i></span></button>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!--== Call to Actions Style 05 End ==-->
</x-guest-layout>