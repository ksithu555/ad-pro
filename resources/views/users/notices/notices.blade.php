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
                <div class="col-md-12 col-sm-12">
                    @foreach ($notices as $key => $notice)
                    <div class="row {{ $key != 0 ? 'mt-20' : ''}}">
                        <div class="col-md-4 col-sm-12 default-bg" style="margin-top: 25px;">
                            <div class="post-date-box" style="width: 100%;height: 100%;">
                                {{ $notice->created_at->format('d') }}
                                <span>{{ $notice->created_at->format('m, Y') }}</span>
                            </div>
                        </div>                
                        <div class="col-md-8 col-sm-12">
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
            </div>
            @include('components.pagination')
        </div>
      </section>
      <!--== Products End ==-->
</x-user-layout>