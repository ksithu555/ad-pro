<x-guest-layout>
    <!--== Page Title Start ==-->
    <div class="transition-none">
        <section class="title-hero-bg parallax-effect" style="background-image: url({{ asset('assets/images/title-bg/top-news-bg.jpg') }});">
            <div class="container">
                <div class="page-title text-center white-color">
                    <h1>Default Header</h1>
                    <h4 class="text-uppercase mt-30">Our Creative Portfolio</h4>
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
                            <li>ホーム</li>
                            <li>新着情報</li>
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

    <!--== Blog Standard Posts Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="col-md-9 col-sm-9 col-xs-12 xs-mb-50">
                <div class="col-md-12 col-sm-12 col-xs-12 mb-50">
                    <div class="post">
                        <div class="post-img"> <img class="img-responsive" src="{{ asset('assets/images/all/' . $new->image) }}" alt=""/> </div>
                        <div class="post-info all-padding-40 bordered">
                            <h3 class="font-20px text-uppercase">{{ nl2br($new->title) }}</h3>
                            <h6>Post on {{ $new->created_at->format('F d, Y') }}</h6>
                            <p class="font-16px">
                                {!! nl2br($new->body) !!}
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!--== Post End ==-->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="mb-50">
                    <h5 class="aside-title text-uppercase">About Author</h5>
                    <img src="{{ asset('assets/images/all/' . $new->author_image) }}" alt="about-me" />
                    <p class="mt-10">
                        <span class="extras-wrap"><i class="fa fa-user"></i><span style="margin-left: 10px;">{{ $new->author_name }}</span></span>
                    </p>
                </div>
                <div class="social-icons-style-06 mb-50">
                    <h5 class="aside-title text-uppercase">Follow Us</h5>
                    <ul class="xs-icon">
                        <li><a class="icon facebook" href="#."><i class="icofont icofont-social-facebook"></i></a></li>
                        <li><a class="icon twitter" href="#."><i class="icofont icofont-social-twitter"></i></a></li>
                        <li><a class="icon tumblr" href="#."><i class="icofont icofont-social-tumblr"></i></a></li>
                        <li><a class="icon flicker" href="#."><i class="icofont icofont-social-flikr"></i></a></li>
                        <li><a class="icon instagram" href="#."><i class="icofont icofont-social-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="sidebar_widget widget_recent_post mb-50">
                    <h5 class="aside-title text-uppercase">Recent Posts</h5>
                    @foreach ($recentNews as $key => $recentNew)
                    <article class="post-item">
                        <div class="post-thumb">
                            <a href=""><img width="100" height="90" src="{{ asset('assets/images/all/' . $recentNew->image) }}" class="img-responsive"></a>
                        </div>
                        <div class="post-body">
                            <span class="font-14px"><a href="">{{ $recentNew->title }}</a></span>
                            <div class="post-time">{{ $recentNew->created_at->format('d/m/Y') }}</div>
                            <a class="readmore" href="{{ route('guest.show.news', $recentNew->id) }}"><span>Read More</span></a> 
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--== Blog Standard Posts End ==-->
</x-guest-layout>