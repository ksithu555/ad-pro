<x-user-layout>
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
            <div class="col-md-7 col-md-offset-2">
                <x-message-box></x-message-box>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>素材名</th>
                            <th>画像</th>
                            <th>支払済みダウンロード数</th>
                            <th>支払済みの金額</th>
                            <th>未支払いダウンロード数</th>
                            <th>未払いの金額</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materials as $key => $material)
                            <tr>
                                <td>
                                    {{ $ttl + 1 - ($materials->firstItem() + $key) }}
                                </td>
                                <td>
                                    {{ $material->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('assets/images/all/' . $material->image ) }}" alt=""> 
                                </td>
                                @php
                                    $countForPaidDownloaded = $material->paidMaterialDownloadHistories->where('paid', 1)->count();
                                @endphp
                                <td>
                                    {{ $countForPaidDownloaded }} 回
                                </td>
                                <td>
                                    <span class="custom-badge free-bg">
                                    ¥ {{ number_format($countForPaidDownloaded * 1100) }}
                                    </span>
                                </td> 
                                @php
                                    $countForUnPaidDownloaded = $material->paidMaterialDownloadHistories->where('paid', 0)->count();
                                @endphp
                                <td>
                                    {{ $countForUnPaidDownloaded }} 回
                                </td>
                                <td>
                                    <span class="custom-badge default-bg">
                                    ¥ {{ number_format($countForUnPaidDownloaded * 1100) }}
                                    </span>
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
  </x-user-layout>
  