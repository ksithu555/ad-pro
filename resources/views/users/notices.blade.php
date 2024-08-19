<x-user-layout>
    <!--== Products Start ==-->
    <section>
        <div class="container">
            <div class="row mt-10">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover shop-cart">
                            <thead>
                                <tr>
                                <th><strong>#</strong></th>
                                <th><strong>タイトル</strong></th>
                                <th><strong>日付</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notices as $key => $notice)
                                <tr>
                                <td>
                                    {{ $ttl + 1 - ($notices->firstItem() + $key) }}
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