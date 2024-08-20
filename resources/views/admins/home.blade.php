<x-admin-layout>
    <!--== Products Start ==-->
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
    <!--== Products End ==-->
</x-admin-layout>