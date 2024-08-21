<x-user-layout>
    <!--== Tabs Style 03 Start ==-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <div class="search-box">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
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
                                        <a href="#message-box-{{ $user->id }}" role="tab" data-toggle="tab">
                                            <i class="icofont icofont-social-designfloat"></i>{{ $user->name }}
                                            @if($user->sentMessages->where('seen', 0)->isNotEmpty())
                                                <span class="label label-danger">未読</span>
                                            @endif
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
                                        <div class="message-content text-left">
                                            <!--== Testimonails Style 01 Start ==-->
                                            <div class="row">
                                                <div class="slick testimonial">
                                                    @for ($i = 0; $i < 4; $i++)
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <!--== Slide ==-->
                                                        <div class="testimonial-item">
                                                            <div class="testimonial-content">
                                                                <h5 class="font-700 mb-0">Felix Lewis</h5>
                                                                <span class="grey-color font-14px">SEO Manager</span>
                                                                <p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                            <!--== Testimonails Style 01 End ==-->
                                        </div>
                                    </div>
                                    @foreach ($users as $key => $user)
                                    <div role="tabpanel" class="tab-pane fade in" id="message-box-{{ $user->id }}">
                                        <div class="message-content text-left">
                                            <!--== Testimonails Style 01 Start ==-->
                                            <div class="row">
                                                <div class="slick testimonial">
                                                    @for ($i = 0; $i < 4; $i++)
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <!--== Slide ==-->
                                                        <div class="testimonial-item">
                                                            <div class="testimonial-content">
                                                                <h5 class="font-700 mb-0">Felix Lewis</h5>
                                                                <span class="grey-color font-14px">SEO Manager</span>
                                                                <p class="mt-20 line-height-26 font-14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales nec nulla ac aliquet. Duis vel nunc eget.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                            <!--== Testimonails Style 01 End ==-->
                                            {{-- Conversation start --}}
                                            @foreach ($messages as $message)
                                                @if ($message->to_email == Auth::user()->email && $message->from_email == $user->email)
                                                <div class="message received">
                                                    <p>
                                                        {!! nl2br($message->message) !!}
                                                    </p>
                                                </div>
                                                <div class="timestamp received">{{ $message->created_at->format('Y-m-d H:i:s') }} {{ $message->seen == 1 ? '既読' : '' }}</div>
                                                @endif
                                                @if ($message->from_email == Auth::user()->email && $message->to_email == $user->email)
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
                                        <form method="POST" action="{{ route('user.send.message') }}" class="message-input">
                                            @csrf
                                            <input type="hidden" id='toEmail' name='toEmail' value="{{ $user->email }}">
                                            <textarea type="text" name="message" id="message" class="newsletter-input form-control form-group" placeholder="Type your message"></textarea>
                                            <button type="submit" class="btn btn-sm btn-dark margin-left-auto margin-right-auto display-table-sm">
                                                送信
                                            </button>
                                        </form>
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
                // Extract user ID from the href attribute
                var userId = $(e.target).attr('href').split('-').pop();
                // Send AJAX request to mark the message as seen
                $.ajax({
                    url: '/user/' + userId + '/seen/message',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                    },
                    success: function(response) {
                        console.log('Message seen status updated for user: ' + userId);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating message seen status: ' + error);
                    }
                });
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
</x-user-layout>
