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
            <div class="row mt-10">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover shop-cart">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th style="min-width: 110px;">登録日</th>
                                <th>タイトル</th>
                                <th>日付</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $key => $notice)
                                <tr>
                                <td>
                                    {{ $ttl + 1 - ($notices->firstItem() + $key) }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $notice->created_at->format('Y-m-d') }}
                                </td>
                                <td>
                                    {{ nl2br($notice->title) }}
                                </td>
                                <td>
                                    {{ $notice->created_at->format('d/m/Y') }}
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