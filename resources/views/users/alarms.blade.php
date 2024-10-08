<x-user-layout>
    <!--== Tabs Style 01 Start ==-->
    <section>
        <div class="container">
            <div class="row tabs-style-01">
                <div class="col-md-12">
                    <x-message-box></x-message-box>
                    <div class="icon-tabs">
                        <!--== Nav tabs ==-->
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#check" role="tab" data-toggle="tab">
                                    <i class="icofont icofont-exclamation-circle"></i>未対応
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#checked" role="tab" data-toggle="tab">
                                    <i class="icofont icofont-check-alt"></i>チェック済み
                                </a>
                            </li>
                        </ul>
                        <!--== Tab panes ==-->
                        <div class="tab-content text-center">
                            {{-- check --}}
                            <div role="tabpanel" class="tab-pane fade in active" id="check">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover shop-cart">
                                                <thead>
                                                    <tr>
                                                    <th><strong>タイプ</strong></th>
                                                    <th><strong>アラーム</strong></th>
                                                    <th><strong>送信者</strong></th>
                                                    <th><strong>日付</strong></th>
                                                    <th><strong>チェックしましたか?</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($alarms as $key => $alarm)
                                                    <tr>
                                                        <td>
                                                            {{ $alarm->type }}
                                                        </td>
                                                        <td>
                                                            {{ $alarm->alarm }}
                                                        </td>
                                                        <td>
                                                            @php
                                                            $sender = $users->where('email', $alarm->from_email)->first();
                                                            @endphp
                                                            {{ $sender->name }}
                                                        </td>
                                                        <td>
                                                            {{ $alarm->updated_at->format('Y-m-d H:i:s') }}
                                                        </td>
                                                        <td>
                                                            <div class="tr-modal-popup">
                                                                <a class="btn btn-sm btn-light btn-circle margin-left-auto margin-right-auto display-table-sm" style="border: 1px solid black;"
                                                                    href="#modal-popup-{{ $alarm->id }}" data-effect="mfp-newspaper">
                                                                    終わり
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal Popup Message Box -->
                                                    <div id="modal-popup-{{ $alarm->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                                        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">チェック</span>
                                                        <p class="mb-20">終わりましたか?</p>
                                                        <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.check.alarm', $alarm->id) }}">Yes</a>
                                                        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
                                                    </div>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- checked --}}
                            <div role="tabpanel" class="tab-pane fade" id="checked">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover shop-cart">
                                                <thead>
                                                    <tr>
                                                    <th><strong>タイプ</strong></th>
                                                    <th><strong>アラーム</strong></th>
                                                    <th><strong>送信者</strong></th>
                                                    <th><strong>日付</strong></th>
                                                    <th><strong>チェックしましたか?</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($checkedAlarms as $key => $checkedAlarm)
                                                    <tr>
                                                        <td>
                                                            {{ $checkedAlarm->type }}
                                                        </td>
                                                        <td>
                                                            {{ $checkedAlarm->alarm }}
                                                        </td>
                                                        <td>
                                                            @php
                                                            $sender = $users->where('email', $checkedAlarm->from_email)->first();
                                                            @endphp
                                                            {{ $sender->name }}
                                                        </td>
                                                        <td>
                                                            {{ $checkedAlarm->updated_at->format('Y-m-d H:i:s') }}
                                                        </td>
                                                        <td>
                                                            <div class="tr-modal-popup">
                                                                <a class="btn btn-sm btn-light btn-circle margin-left-auto margin-right-auto display-table-sm" style="border: 1px solid black;"
                                                                    href="#checked-modal-popup-{{ $checkedAlarm->id }}" data-effect="mfp-newspaper">
                                                                    削除
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal Popup Message Box -->
                                                    <div id="checked-modal-popup-{{ $checkedAlarm->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-3 col-md-6 col-sm-7 col-xs-11 text-center">
                                                        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">チェック</span>
                                                        <p class="mb-20">削除しましたか?</p>
                                                        <a class="btn btn-lg btn-circle btn-color" href="{{ route('user.delete.alarm', $checkedAlarm->id) }}">Yes</a>
                                                        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
                                                    </div>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Tabs Style 01 End ==-->
</x-user-layout>