<x-admin-layout>
    <!--== Header Start ==-->
    <section class="white-bg pt-120">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Header</span>
                    </a>
                </div>
                <div class="col-md-7">
                    <x-message-box></x-message-box>
                </div>
                <div class="col-md-3" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.header') }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.headers') }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
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
    <!--== Sections Start ==-->
    <section class="grey-bg">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Sections</span>
                    </a>
                </div>
                <div class="col-md-10">
                    <div style="text-align: right;">
                        <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                            href="{{ route('admin.add.top.section') }}">
                            <i class="fa-icon-plus-square"></i> 追加
                        </a>
                        <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                            href="{{ route('admin.edit.top.sections') }}">
                            <i class="fa-icon-pencil-square"></i> 編集
                        </a>
                    </div>
                </div>
            </div>
            <hr class="dark-bg">
        </div>
    </section>
    @php
        $bgKey = 0;
    @endphp
    @foreach ($sections as $section)
        @php
            if ($bgKey % 2 == 0) {
                $sectionBg = 'white-bg';
            } else {
                $sectionBg = 'grey-bg';
            }
            $bgKey++;
        @endphp
    @if ($section->type == 'Box01')
    {{-- Box 01 Start --}}
    <section class="{{ $sectionBg }} pt-0 pb-0">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Section</span>
                    </a>
                </div>
                <div class="col-md-10" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.top.section.top.block', $section->id) }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.top.section.top.blocks', $section->id) }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="font-700">{{ $section->title }}</h2>
                    <hr class="dark-bg center_line bold-line">
                    <h4>{!! nl2br($section->body) !!}</h4>
                </div>
            </div>
            <div class="row mt-50">
                @foreach ($section->topBoxBlocks as $topBoxBlock)
                @php
                    $count = $section->topBoxBlocks->count();
                    if ($count == 1) {
                        $col = 12;
                    } elseif ($count == 2) {
                        $col = 6;
                    } else {
                        $col = 4;
                    }
                @endphp
                <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded wow fadeInUp center-feature" data-wow-delay="0.1s">
                        <span class="font-100px default-color font-700">
                            <span class="dark-color">
                                {{ substr($topBoxBlock->icon, 0, 1) }}
                            </span>
                            {{ substr($topBoxBlock->icon, 1) }}
                        </span>
                        <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                        <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Box 01 End --}}
    @elseif ($section->type == 'Box02')
    {{-- Box 02 Start --}}
    <section class="pb-0">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Section</span>
                    </a>
                </div>
                <div class="col-md-10" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.top.section.top.block', $section->id) }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.top.section.top.blocks', $section->id) }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="font-700">{{ $section->title }}</h2>
                    <hr class="dark-bg center_line bold-line">
                    <h4>{!! nl2br($section->body) !!}</h4>
                </div>
            </div>
            <div class="row mt-50 service-box-style-01">
                @foreach ($section->topBoxBlocks as $topBoxBlock)
                @php
                    $count = $section->topBoxBlocks->count();
                    if ($count == 1) {
                        $col = 12;
                    } elseif ($count == 2) {
                        $col = 6;
                    } else {
                        $col = 4;
                    }
                @endphp
                <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                  <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                    <i class="{{ $topBoxBlock->icon }} font-40px default-color"></i>
                    <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                    <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Box 02 End --}}
    @elseif ($section->type == 'Box03')
    {{-- Box 03 Start --}}
    <section class="pb-0">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Section</span>
                    </a>
                </div>
                <div class="col-md-10" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.top.section.top.block', $section->id) }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.top.section.top.blocks', $section->id) }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="font-700">{{ $section->title }}</h2>
                    <hr class="dark-bg center_line bold-line">
                    <h4>{!! nl2br($section->body) !!}</h4>
                </div>
            </div>
            <div class="row mt-50 service-box-style-03">
                @foreach ($section->topBoxBlocks as $topBoxBlock)
                @php
                    $count = $section->topBoxBlocks->count();
                    if ($count == 1) {
                        $col = 12;
                    } elseif ($count == 2) {
                        $col = 6;
                    } else {
                        $col = 4;
                    }
                @endphp
                <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                    <div class="flipper">
                        <div class="text-center mb-50 main-box">
                          <div class="box-front height-300px white-bg">
                            <div class="content-wrap">
                              <i class="{{ $topBoxBlock->icon }} font-40px default-color"></i>
                              <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                              <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                            </div>
                          </div>
                          <div class="box-back height-300px default-bg">
                            <div class="content-wrap white-color">
                              <i class="{{ $topBoxBlock->icon }} font-40px"></i>
                              <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                              <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Box 03 End --}}
    @endif
    @endforeach
    <!--== Sections End ==-->
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
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Footer</span>
                    </a>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.footers') }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
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