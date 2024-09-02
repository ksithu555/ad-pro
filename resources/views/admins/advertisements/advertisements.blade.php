<x-admin-layout>
  <!--== Products Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
      <div class="row">
          <div class="col-sm-8 section-heading">
              <div class="search-box">
                  <input type="text" placeholder="Search...">
                  <button type="submit"><i class="fa fa-search"></i></button>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
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
                          <th style="min-width: 110px;">日付</th>
                          <th style="min-width: 110px;">ページ名前</th>
                          <th style="min-width: 110px;">作成者</th>
                          <th style="min-width: 110px;">ビュー</th>
                          <th style="min-width: 110px;">ステータス</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($advertisements as $key => $advertisement)
                          <tr>
                              <td>
                                  {{ $ttl + 1 - ($advertisements->firstItem() + $key) }}
                              </td>
                              <td style="min-width: 110px;">
                                  {{ $advertisement->created_at->format('Y-m-d') }}
                              </td>
                              <td style="min-width: 110px;">
                                  {{ $advertisement->name }}
                              </td>
                              <td style="min-width: 110px;">
                                  {{ $advertisement->user->name }}
                              </td>                             
                              <td style="min-width: 110px;">
                                  <a href="{{ route('guest.one.page.advertisement', $advertisement->param_name) }}" target="_blank">
                                    <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                  </a>
                              </td>
                              <td>
                                  <label class="toggle-switch">
                                      <input type="checkbox" data-id="{{ $advertisement->id }}" class="status-toggle" {{ $advertisement->status == 1 ? 'checked' : '' }} disabled>
                                      <span class="slider"></span>
                                  </label>   
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
</x-admin-layout>
