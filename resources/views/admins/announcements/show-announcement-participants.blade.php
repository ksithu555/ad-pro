<x-admin-layout>
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
                                <a href="" data-effect="mfp-newspaper" class="btn btn-lg btn-circle"
                                 style="background-color: #FFC107;">
                                    申し込み中
                                </a>
                                @elseif($participant->status == 1)
                                <a href="" data-effect="mfp-newspaper" class="btn btn-lg btn-circle"
                                 style="background-color: #28A745;">
                                    承認済み
                                </a>
                                @elseif($participant->status == 2)
                                <a href="" data-effect="mfp-newspaper" class="btn btn-lg btn-circle"
                                 style="background-color: #DC3545;">
                                    拒否されました
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
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
  </x-admin-layout>
  