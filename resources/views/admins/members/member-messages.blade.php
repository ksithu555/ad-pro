<x-admin-layout>
    <!--== Tabs Style 03 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <form action="{{ route('admin.check.member.message', $foucsMember->id) }}" method="GET">
                        <div class="search-box">
                            <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h3 class="mt-20 text-uppercase">{{ $foucsMember->name }}のすべての商談</h3>
                        <hr class="dark-bg" style="width: 700px">
                    </div>
                </div>
            </div>
            <div class="row mt-10 tabs-style-03 tabs-style-03-m">
                <div class="col-md-12">
                    <div class="icon-tabs">
                        <div class="row">
                            <div class="col-md-3 pr-0">
                                <!--== Nav tabs ==-->
                                <ul class="nav nav-tabs text-center" role="tablist">
                                    @foreach ($users as $key => $user)
                                    <li role="presentation">
                                        <a href="#message-box-{{ $user->id }}" role="tab" data-toggle="tab" style="display: flex; align-items: center; width: 100%; text-decoration: none;">
                                            <!-- First part: Image -->
                                            <div style="flex: 0 0 75px; text-align: center;">
                                                <img src="{{ asset('assets/images/all/' . $user->image) }}" alt="" width="75px" height="75px" style="border-radius: 50%;">
                                            </div>

                                            <!-- Second part: Company name and user name -->
                                            <div style="flex: 1; padding-left: 15px; overflow: hidden;">
                                                @if($user->sentMessages->where('seen', 0)->isNotEmpty())
                                                <span class="label label-danger" style="font-size: 12px; padding: 4px 6px;">未読</span>
                                                @endif

                                                <!-- Company name and name -->
                                                <div style="display: flex; flex-direction: column; justify-content: center;">
                                                    <!-- Company Name -->
                                                    <span style="font-weight: bold; font-size: 14px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ $user->company_name }}
                                                    </span>
                                                    <!-- User Name -->
                                                    <span style="font-size: 13px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ $user->name }}
                                                    </span>
                                                    <!-- Position -->
                                                    <span style="font-size: 10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ $user->company->positionType->name }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="line-horizontal grey-bg width-100-percent"></div>
                                    </li>
                                    @endforeach
                                </ul>                                
                            </div>

                            <div class="col-md-9 pl-0">
                                <!--== Initail Tab panes ==-->
                                <div class="tab-content tab-content-m text-center">
                                    <div role="tabpanel" class="tab-pane fade in active">
                                        <!--== Testimonails Style 01 Start ==-->
                                        <div class="row row-flex flex-center">
                                            <div class="col-md-6 col-sm-12 bg-flex-cover">
                                                <img class="img-responsive" style="position: relative;"
                                                src="{{ asset('assets/images/all/message-theme.webp') }}" alt=""/></div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="col-inner spacer text-center">
                                                    <h3 class="mt-20 text-uppercase">商談するためメッセージ</h3>
                                                    <hr class="dark-bg center_line bold-line">
                                                    <h6 class="mt-30">「商談するためのメッセージ」は、ビジネスにおいて重要なコミュニケーション手段です。効率的な商談は、相手との信頼関係を築き、ビジネスチャンスを最大限に引き出すために不可欠です。適切なメッセージのやり取りは、迅速で正確な情報共有を可能にし、交渉をスムーズに進める助けとなります。</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== Testimonails Style 01 End ==-->
                                    </div>

                                    @foreach ($users as $key => $user)
                                    <div role="tabpanel" class="tab-pane fade in" id="message-box-{{ $user->id }}">
                                        <div class="message-content text-left">
                                            <!--== Testimonails Style 01 Start ==-->
                                            <div class="row">
                                                <div class="slick testimonial">
                                                    @if ($user->company)
                                                        @if(!is_null($user->company->business))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">事業形態</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->businessType->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->purpose))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">利用目的</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->purposeType->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->industry))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">業種</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->industryType->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->position))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">役職</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->positionType->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->phone))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">電話番号</h5>
                                                                    <span class="grey-color font-14px mt-10"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->phone }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->address))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">住所</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->prefecture->name }} {{ $user->company->address }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->website))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">URL</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <div class="mt-20 text-center">
                                                                        <a class="btn btn-sm btn-dark btn-circle margin-left-auto margin-right-auto display-table-sm"
                                                                        href="{{ $user->company->website }}" target="_blank">
                                                                            <span>当社のウェブサイト <i class="ion-android-arrow-forward"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(!is_null($user->company->name))
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <!--== Slide ==-->
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-content grey-bg">
                                                                    <h5 class="font-700 mb-0">会社名</h5>
                                                                    <span class="grey-color font-14px"></span>
                                                                    <h6 class="mt-20 font-800">{{ $user->company->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <!--== Testimonails Style 01 End ==-->
                                            {{-- Conversation start --}}
                                            @foreach ($messages as $message)
                                                @if ($message->to_user_id == $foucsMember->id && $message->from_user_id == $user->id)
                                                <div class="message received">
                                                    <p>
                                                        {!! nl2br($message->message) !!}
                                                    </p>
                                                </div>
                                                <div class="timestamp received">{{ $message->created_at->format('Y-m-d H:i:s') }} {{ $message->seen == 1 ? '既読' : '' }}</div>
                                                @endif
                                                @if ($message->from_user_id == $foucsMember->id && $message->to_user_id == $user->id)
                                                <div class="message sent">
                                                    <p>
                                                        {!! nl2br($message->message) !!}
                                                    </p>
                                                </div>
                                                <div class="timestamp sent">{{ $message->created_at->format('Y-m-d H:i:s') }} {{ $message->seen == 1 ? '既読' : '' }}</div>
                                                @endif
                                            @endforeach
                                            {{-- Conversation end --}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Tabs Style 03 End ==-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Listen for tab change event
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                // Re-initialize the slider for the newly active tab pane
                testimonialSlider();
                $('.tab-pane.active .slick').slick('setPosition');
            });
        });

        function testimonialSlider(){
            // Select the testimonial slider in the active tab pane
            const $testimonial = $('.tab-pane.active .testimonial');

            if ($testimonial.length) {
                // Destroy the previous Slick instance to prevent reinitialization issues
                if ($testimonial.hasClass('slick-initialized')) {
                    $testimonial.slick('unslick');
                }

                // Initialize the Slick slider
                $testimonial.slick({
                    dots: true,
                    infinite: true,
                    centerMode: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerPadding: '0',
                    prevArrow: false,
                    nextArrow: false,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        }
    </script>
</x-admin-layout>