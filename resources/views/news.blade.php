<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/all/header-ad-list.webp') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>新着情報</h1>
                    <h4 class="text-uppercase mt-30">News</h4>
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
                            <li>News</li>
                        </ul>
                        <!-- Breadcrumb End -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                    <div class="v-align-middle text-right text-xs-center">
                        <h1 class="text-uppercase mb-0 font-600 font-16px line-height-26 mt-0">新着情報</h1>
                    </div>
                </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== News Start ==-->
    <section class="grey-bg">
        <div class="container">
            <div class="row mt-25">
                <div class="col-md-12 col-sm-12">
                    @foreach ($news as $key => $new)
                    <div class="row row-flex {{ $key != 0 ? 'mt-20' : ''}}" style="align-items: flex-start;">
                        <div class="col-md-4 col-sm-12" style="margin-top: 25px;">
                            <div class="post-date-box">
                                {{ $new->created_at->format('d') }}
                                <span>{{ $new->created_at->format('m, Y') }}</span>
                            </div>
                            <img class="img-responsive" style="position: relative;"
                            src="{{ asset('assets/images/all/' . $new->image) }}" alt=""/>
                        </div>                
                        <div class="col-md-8 col-sm-12">
                            <div class="content">
                                <h4 class="mt-20 text-uppercase">{!! nl2br($new->title) !!}</h4>
                                <hr class="dark-bg" style="background-color: #BF0731;">
                                <p class="mt-20" style="color: black;">
                                    {!! nl2br($new->body) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @include('components.pagination')
        </div>
    </section>
    <!--== News End ==-->
</x-guest-layout>