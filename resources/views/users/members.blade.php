<x-user-layout>
    <!--== Products Start ==-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">会員リスト</h4>
                </div>
            </div>
            <div class="row mt-10">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover shop-cart">
                            <thead>
                                <tr>
                                <th><strong>#</strong></th>
                                <th><strong>名前</strong></th>
                                <th><strong>メールアドレス</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                <tr>
                                <td>
                                    {{ $ttl + 1 - ($users->firstItem() + $key) }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
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