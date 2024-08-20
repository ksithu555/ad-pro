<x-admin-layout>
    <!--== Products Start ==-->
    <section>
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
                                <th>名前</th>
                                <th>メールアドレス</th>
                                <th>アクション</th>
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
                                    <td>
                                        <label class="toggle-switch">
                                            <input type="checkbox" {{ $user->status == 1 ? 'checked' : '' }}>
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
      <!--== Products End ==-->
</x-admin-layout>