<x-user-layout>
    <style>
        .tabs-style-03 .nav-tabs {
            max-height: 550px; /* Adjust the max-height as needed */
            overflow-y: auto;
        }

        .tab-content {
            max-height: 550px; /* Adjust the max-height as needed */
            overflow-y: auto;
            position: relative;
        }

        .message-content {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100%;
            overflow-y: auto;
            padding-bottom: 60px; /* Space for the input box */
            position: relative; /* Make this relative to position the input box */
        }

        .message {
            display: flex;
            margin: 10px 0;
            padding: 10px 15px;
            border-radius: 5px;
            max-width: 70%;
        }

        .message.received {
            background-color: white;
            align-self: flex-start;
        }

        .message.received p {
            color: #000;
        }

        .message.sent {
            background-color: #BF0731;
            color: white;
            align-self: flex-end;
        }

        .message.sent p {
            color: #000;
        }

        .timestamp {
            font-size: 0.8em;
            color: gray;
            position: sticky;
            bottom: -18px; /* Adjust as needed */
            right: 10px; /* Adjust as needed */
        }
        .timestamp.received {
            text-align: left;
            padding-left: 10px;
        }

        .timestamp.sent {
            text-align: right;
            padding-right: 10px;
        }

        .message-input {
            display: flex;
            position:sticky;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f8f8f8;
            padding: 10px 15px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        .message-input textarea {
            width: 100%;
            margin: 0 auto;
            display: block;
            border-radius: 15px 0 0 15px;
        }

        .message-input button {
            margin: 0 auto;
            display: block;
            border-radius: 0 15px 15px 0;
        }
    </style>
    <!--== Tabs Style 03 Start ==-->
    <section>
        <div class="container">
            <div class="row mt-0 tabs-style-03">
                <div class="col-md-12">
                    <div class="icon-tabs">
                        <div class="row">
                            <div class="col-md-3 pr-0">
                                <!--== Nav tabs ==-->
                                <ul class="nav nav-tabs text-center" role="tablist">
                                    @foreach ($users as $key => $user)
                                    <li role="presentation" class="{{ $key == 0 ? 'active' : '' }}">
                                        <a href="#message-box-{{ $user->id }}" role="tab" data-toggle="tab">
                                            <i class="icofont icofont-social-designfloat"></i>{{ $user->name }}
                                        </a>
                                        <div class="line-horizontal grey-bg width-100-percent"></div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col-md-9 pl-0">
                                <!--== Tab panes ==-->
                                <div class="tab-content text-center">
                                    @foreach ($users as $key => $user)
                                    <div role="tabpanel" class="tab-pane fade in {{ $key == 0 ? 'active' : '' }}" id="message-box-{{ $user->id }}">
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
                                                <div class="timestamp received">{{ $message->created_at->format('Y-m-d H:i:s') }}</div>
                                                @endif
                                                @if ($message->from_email == Auth::user()->email && $message->to_email == $user->email)
                                                <div class="message sent">
                                                    <p>
                                                        {!! nl2br($message->message) !!}
                                                    </p>
                                                </div>
                                                <div class="timestamp sent">{{ $message->created_at->format('Y-m-d H:i:s') }}</div>
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
</x-user-layout>
