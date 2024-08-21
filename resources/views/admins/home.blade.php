<x-admin-layout>
    <!--== Header Start ==-->
    <section>
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
                                        <img class="logo logo-display" src="{{ asset('assets/images/all/adpro3_blogo.png') }}" alt="">
                                        </a>
                                    </div>
                                    <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
                                    </div>
                                </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="widget widget-links">
                                    <h5 class="widget-title">Useful Links</h5>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="widget widget-links">
                                    <h5 class="widget-title">Contact Us</h5>
                                    <div class="widget-links">
                                        <ul>
                                            <li>57 Patton Street Caulfield East VIC 3145</li>
                                            <li>(03) 9414 7288</li>
                                            <li>sayhi@gmail.com</li>
                                            <li>www.ADPRO.com</li>
                                        </ul>
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
                                    <div class="copy-right text-left">© 2019 <i class="icon icofont icofont-heart-alt"></i> ADPRO. All rights reserved</div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <ul class="social-media">
                                    <li><a href="#" class="icofont icofont-social-facebook"></a></li>
                                    <li><a href="#" class="icofont icofont-social-twitter"></a></li>
                                    <li><a href="#" class="icofont icofont-social-behance"></a></li>
                                    <li><a href="#" class="icofont icofont-social-dribble"></a></li>
                                    <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
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