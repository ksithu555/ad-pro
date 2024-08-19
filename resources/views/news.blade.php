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
                            <li>新着情報</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                      <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">新着情報</h1>
                  </div>
               </div>
             </div>
          </div>
    </section>
    <!--== Page Title End ==-->

    <!--== Blog Classic Post Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row blog-style-01">
                @foreach ($news as $key => $new)
                <!--== Post Start ==-->
                <div class="col-md-4 col-sm-4 col-xs-12 mb-30">
                    <div class="post">
                        <div class="post-img"> <img class="img-responsive" src="{{ asset('assets/images/all/' . $new->image) }}" alt=""/> </div>
                        <div class="post-info all-padding-40">
                            <h3><a href="blog-grid.html">{{ nl2br($new->title) }}</a></h3>
                            <h6>{{ $new->created_at->format('F d, Y') }}</h6>
                            <hr>
                            <p class="mt-10">
                                <span class="extras-wrap"><i class="fa fa-user"></i><span>{{ $new->author_name }}</span></span>
                            </p>
                            <a class="readmore" href="{{ route('guest.show.news', $new->id) }}"><span>Read More</span></a> 
                        </div>
                    </div>
                </div>
                <!--== Post End ==-->
                @endforeach
            </div>
            @include('components.pagination')
        </div>

    </section>
    <!--== Blog Classic Post End ==-->
</x-guest-layout>