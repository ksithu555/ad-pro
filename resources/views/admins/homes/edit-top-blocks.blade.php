<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                  <h4 class="text-uppercase mt-0">ブロック修正</h4>
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
                          <th>タイトル</th>
                          <th>内容</th>
                          <th>アイコン</th>
                          <th>アクション</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($blocks as $key => $block)
                        <tr>
                          <td>
                            {{ $ttl + 1 - ($blocks->firstItem() + $key) }}
                          </td>
                          <td>
                            {{ $block->title }}
                          </td>
                          <td>
                            {!! nl2br($block->body) !!}
                          </td>
                          <td>
                            {{ $block->icon }}
                          </td>
                          <td>
                            <a href="{{ route('admin.edit.top.section.top.block', ['sid' => $block->top_section_id, 'id' => $block->id]) }}">
                              <i class="fa-icon-pencil-square" style="font-size: 1.5em;"></i>
                            </a>
                            <div class="tr-modal-popup">
                              <a href="#modal-popup-{{ $block->id }}" data-effect="mfp-newspaper">
                                <i class="fa-icon-trash" style="font-size: 1.5em;"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <!-- Modal Popup Message Box -->
                        <div id="modal-popup-{{ $block->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                          <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ブロック削除</span>
                          <p class="mb-20">ブロックを削除してもよろしいですか?</p>
                            <a class="btn btn-lg btn-circle btn-color" href="{{ route('admin.delete.top.section.top.block', ['sid' => $block->top_section_id, 'id' => $block->id]) }}">はい</a>
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
    <!--== Contact Form Style 01 End ==-->
</x-admin-layout>