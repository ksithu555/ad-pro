<x-admin-layout>
    <!--== Header Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Header</span>
                    </a>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.header') }}">
                        <i class="fa-icon-plus-square"></i> Add
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.headers') }}">
                        <i class="fa-icon-pencil-square"></i> Edit
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row mt-10">
                <!--== Sliders Style 02 Start ==-->
                <section class="pt-0 pb-0 dark-block">
                    <div class="service-slider-2 slick height-650px" style="margin-bottom: 0px;">
                        @foreach ($headers as $header)
                        <div class="slide">
                            <div class="slide-img height-650px" style="background:url({{ asset('assets/images/all/' . $header->image) }}) center center / cover scroll no-repeat;"></div>
                            <div class="hero-text-wrap height-650px">
                                <div class="hero-text">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="white-color default-bg all-padding-50">
                                                    <h3 class="font-700">{{ $header->title }}</h3>
                                                    {{-- <p class="mt-30"><a class="btn btn-dark btn-lg btn-default">Buy Template</a> </p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!--== Sliders Style 02 End ==-->
            </div>
        </div>
    </section>
    <!--== Header End ==-->
    <!--== Footer Start ==-->
    @php
        $footerText = $footers->where('type', 'text')->first();
        $usefulFooters = $footers->where('type', 'useful');
        $contactUs = $footers->where('type', 'contact')->first();
        $contactDetails = [];

        if ($contactUs && $contactUs->text) {
            $contactDetails = explode('|', $contactUs->text);
        }
        $copyRight = $footers->where('type', 'copyRight')->first();
        $logo = $footers->where('type', 'logo')->first();
    @endphp
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Footer</span>
                    </a>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.footers') }}">
                        <i class="fa-icon-pencil-square"></i> Edit
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <x-message-box></x-message-box>
                </div>
            </div>
            <div class="row mt-10">
                <!--== Footer Start ==-->
                <footer class="footer dark-block">
                    <div class="footer-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-5">
                                    <div class="widget widget-text">
                                    <div class="logo logo-footer">
                                        <a href="#">
                                        @if ($logo)
                                        <img class="logo logo-display" src="{{ asset('assets/images/all/' . $logo->text) }}" alt="">
                                        @endif
                                        </a>
                                    </div>
                                    @if ($footerText)
                                    <p>{!! nl2br($footerText->text) !!}</p>
                                    @endif
                                    </div>
                                </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="widget widget-links">
                                    <h5 class="widget-title">Useful Links</h5>
                                    @if ($usefulFooters)
                                    <ul>
                                        @foreach ($usefulFooters as $useful)
                                        <li><a href="{{ $useful->url }}">{{ $useful->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="widget widget-links">
                                    <h5 class="widget-title">Contact Us</h5>
                                    <div class="widget-links">
                                        @if ($contactDetails)
                                        <ul>
                                            @foreach ($contactDetails as $contact)
                                            <li>{{ $contact }}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    @if ($copyRight)
                                    <div class="copy-right text-left">{{ $copyRight->text }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <ul class="social-media">
                                        @php
                                            $socialFooters = $footers->where('type', 'social');
                                        @endphp
                                        @foreach ($socialFooters as $social)
                                        <li><a href="{{ $social->url }}" class="icofont icofont-social-{{ $social->name }}"></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--== Footer End ==-->
            </div>
        </div>
    </section>
    <!--== Footer End ==-->
</x-admin-layout>