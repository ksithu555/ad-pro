<x-user-layout>
    <!--== User Start ==-->
    <section class="white-bg pt-120 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <figure class="imghvr-shutter-in-out-diag-1">
                        <img src="{{ asset('assets/images/all/' . $user->image) }}" alt="Digital" style="max-height: 300px">
                    </figure>
                </div>
                <div class="col-md-8 col-xs-12" id="userProfileDiv">
                    <h4 class="mt-0 font-700">{{ $user->name }} <span class="badge badge-info">無料</span></h4>
                    <h4 class="default-color font-600">{{ $user->name_furigana }}</h4>
                    <h4 class="mt-0 font-700">{{ $user->email }}</h4>
                </div>
            </div>
        </div>
    </section>
    <!--== User End ==-->

    <!--== Company Start ==-->
    <section class="dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 xs-mb-30 wow fadeInLeft" data-wow-delay="0.1s">
                    <h2 class="mt-0 font-700 white-color">{{ $company->name }}</h2>
                    <hr class="left-line default-bg bold-line">
                    <p class="mt-30 font-300 font-16px">{!! nl2br($company->overview) !!}</p>
                    @if ($company->website)
                    <a class="btn btn-md btn-color btn-square mt-20" href="{{ $company->website }}" target="_blank">当社のウェブサイトをご覧ください</a>
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" id="userCompanyDiv">
                    <div class="row">
                        <!-- Phone Section -->
                        <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                            <div class="pull-left mt-30">
                                <i class="fa fa-phone default-color mt-10" style="font-size: 50px !important;"></i>
                            </div>
                            <div class="pull-right mt-30 pl-20">
                                <span class="font-40px font-600 default-color">Phone</span>
                                <h5 class="mt-0 font-600 white-color">Call us :</h5>
                                <h6 class="mt-0 font-500 white-color">{{ $company->phone ?? 'No phone available' }}</h6>
                            </div>
                        </div>
                    
                        <!-- Address Section -->
                        <div class="col-md-12 feature-box text-left mb-20 col-sm-6 col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="pull-left mt-30">
                                <i class="fa fa-map-marker default-color mt-10" style="font-size: 50px !important;"></i>
                            </div>
                            <div class="pull-right mt-30 pl-20">
                                <span class="font-40px font-600 default-color">Address</span>
                                <h6 class="mt-0 font-500 white-color">{{ $company->postal_code ?? 'No postal code' }}</h6>
                                <h6 class="mt-0 font-500 white-color">{{ $company->prefecture->name ?? 'No prefecture' }}</h6>
                                <h6 class="mt-0 font-500 white-color">{{ $company->address ?? 'No address available' }}</h6>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </section>
    <!--== Company End ==-->
</x-user-layout>