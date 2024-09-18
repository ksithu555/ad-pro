<x-user-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <x-message-box></x-message-box>
            </div>
        </div>
        <div class="row mt-10">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover shop-cart">
                <thead>
                  <tr>
                    <th>#</th>
                    <th style="min-width: 110px;">参加者</th>
                    <th style="min-width: 110px;">ステータス</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($participants as $key => $participant)
                    <tr>
                        <td>
                        {{ $ttl + 1 - ($participants->firstItem() + $key) }}
                        </td>
                        <td style="min-width: 110px;">
                        {{ $participant->user->name }}
                        </td>
                        <td style="min-width: 110px;">
                            <div class="tr-modal-popup">
                                @if($participant->status == 0)
                                <a href="#modal-popup-{{ $participant->id }}" data-effect="mfp-newspaper" class="btn btn-lg btn-circle"
                                 style="background-color: #FFC107;">
                                    申し込み中
                                </a>
                                @elseif($participant->status == 1)
                                <a href="#modal-popup-{{ $participant->id }}" data-effect="mfp-newspaper" class="btn btn-lg btn-circle"
                                 style="background-color: #28A745;">
                                    承認済み
                                </a>
                                @elseif($participant->status == 2)
                                <a href="#modal-popup-{{ $participant->id }}" data-effect="mfp-newspaper" class="btn btn-lg btn-circle"
                                 style="background-color: #DC3545;">
                                    拒否されました
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <!-- Modal Popup Message Box -->
                    <div id="modal-popup-{{ $participant->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ステータス変更</span>
                        <p class="mb-20">ステータスを変更してもよろしいですか?</p>
                        <div class="tr-modal-popup">
                            @if($participant->status != 1)
                                <a data-effect="mfp-newspaper" class="btn btn-lg btn-circle" 
                                href="#accept-modal-popup-{{ $participant->id }}" style="background-color: #28A745;">承認</a>
                            @endif
                            @if($participant->status != 2)
                                <a data-effect="mfp-newspaper" class="btn btn-lg btn-circle" 
                                href="#reject-modal-popup-{{ $participant->id }}" style="background-color: #DC3545;">拒否</a>
                            @endif
                        </div>
                    </div>

                    <div id="accept-modal-popup-{{ $participant->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">承認</span>
                        <p class="mb-20">参加者を承認してもよろしいですか?</p>
                        <a class="btn btn-lg btn-circle btn-color"
                         href="{{ route('user.update.participant.status', ['id' => $participant->id, 'status' => 1, 'reason' => 'Accepted']) }}">
                            はい
                        </a>
                        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                    </div>

                    <div id="reject-modal-popup-{{ $participant->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">拒否</span>
                        <p class="mb-20">参加者を拒否してもよろしいですか?</p>
                        <div class="row">
                            <textarea name="reason" class="md-textarea" id="reason" rows="7" placeholder="拒否理由 *" style="background-color: gray;">{{ old('reason') }}</textarea>
                            <span class="error" style="color:#BF0731" id="error-reason"></span>
                        </div>
                        <a class="btn btn-lg btn-circle btn-color" href="#" onclick="rejected({{ $participant->id }})">
                         はい
                        </a>
                        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
            @include('components.pagination')
          </div>
        </div>
      </div>
    </section>
    <!--== Products End ==-->
    <script>
        function rejected(participantId) {
            let reason = document.getElementById('reason').value.trim();
            if (!reason) {
                document.getElementById('error-reason').textContent = '理由を入力してください';
            } else {
                let url = "{{ route('user.update.participant.status', ['id' => ':id', 'status' => 2, 'reason' => ':reason']) }}"
                            .replace(':id', participantId)
                            .replace(':reason', encodeURIComponent(reason));

                // Redirect to the generated URL
                window.location.href = url;
            }
        }
    </script>
  </x-user-layout>
  