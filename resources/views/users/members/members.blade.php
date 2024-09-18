<x-user-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <form action="{{ route('user.get.members') }}" method="GET">
                        <div class="search-box">
                            <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>    
            <div class="row mt-10">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover shop-cart">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>登録日</th>
                                    <th>会社名</th>
                                    <th>会員名</th>
                                    <th>詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                <tr>
                                    <td>
                                        {{ $ttl + 1 - ($users->firstItem() + $key) }}
                                    </td>
                                    <td>
                                        {{ $user->created_at->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        {{ $user->company->name }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>                           
                                    <td style="min-width: 110px;">
                                        <a href="{{ route('user.show.member.detail', $user->id) }}">
                                          <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @include('components.pagination')
                </div>
                @if ($users->isEmpty())
                <h1 class="mt-120 mb-100 text-center">会員メンバーがいません</h1>
                @endif
            </div>
        </div>
      </section>
      <!--== Products End ==-->
</x-user-layout>