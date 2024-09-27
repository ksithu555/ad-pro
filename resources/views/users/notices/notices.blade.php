<x-user-layout>
    <!--== Products Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <form id="search-form" action="{{ route('user.get.notices') }}" method="GET">
                        <div class="search-box">
                            <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>   
            <div class="row mt-10">
                <div class="col-md-12 col-sm-12">
                    @foreach ($notices as $key => $notice)
                    <div class="row {{ $key != 0 ? 'mt-20' : ''}}" style="display: flex; align-items: stretch;">
                        <div class="col-md-2 col-sm-2 default-bg" style="display: flex; align-items: center; justify-content: center;">
                            <div style="text-align: center; color: white;">
                                <div style="font-size: 36px;">
                                    {{ $notice->created_at->format('d') }}
                                </div>
                                <span style="font-size: 16px;">
                                    {{ $notice->created_at->format('m, Y') }}
                                </span>
                            </div>
                        </div>                
                        <div class="col-md-10 col-sm-12 grey-bg" style="display: flex; flex-direction: column; justify-content: center;">
                            <div class="content">
                                <h4 class="mt-20 text-uppercase">{!! nl2br($notice->title) !!}</h4>
                                <hr class="dark-bg" style="background-color: #BF0731;">
                                <p class="mt-20" style="color: black;">
                                    {!! nl2br($notice->body) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                @if ($notices->isEmpty())
                <h1 class="mt-120 mb-90 text-center">お知らせ情報はありません</h1>
                @endif
            </div>
            @include('components.pagination')
        </div>
      </section>
      <!--== Products End ==-->
</x-user-layout>