<x-user-layout>
    <!--== Blog Standard Posts Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <form action="{{ route('user.get.announcements') }}" method="GET">
                        <div class="search-box">
                            <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div> 
            <div class="row mt-25">
                <div class="col-md-12 col-sm-12">
                    @foreach ($announcements as $key => $announcement)
                    <div class="row row-flex {{ $key != 0 ? 'mt-20' : ''}}" style="align-items: flex-start; background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                        <div class="col-md-4 col-sm-12">
                            <img class="img-responsive" style="border-radius: 10px; object-fit: cover; width: 100%; height: 200px;" 
                            src="{{ asset('assets/images/all/' . $announcement->image) }}" alt="Announcement Image"/>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="content" style="padding: 10px;">
                                <div style="font-size: 14px; color: #333;">
                                    <span style="font-weight: bold;">
                                        <i class="fa fa-building"></i> {{ $announcement->user->company_name }}
                                    </span>
                                    <span style="margin-left: 10px;">
                                        <i class="fa fa-tag"></i> {{ $announcement->type }}
                                    </span>
                                </div>
                                <div style="font-size: 14px; color: #555; margin-top: 5px;">
                                    <i class="fa fa-calendar"></i> 
                                    {{ \Carbon\Carbon::parse($announcement->start_at)->format('Y-m-d') }}
                                </div>
                                <h3 class="mt-20 text-uppercase" style="font-size: 24px; color: #333; font-weight: bold; margin-top: 15px;">{{ $announcement->title }}</h3>
                                <hr class="dark-bg" style="background-color: #BF0731;">
                                <p style="font-size: 14px; color: #666;">
                                    {!! nl2br(Str::limit($announcement->description, 150, '...')) !!} <!-- Assuming you have a description field -->
                                </p>
                                <a href="{{ route('user.show.announcement', $announcement->id) }}" class="btn btn-color" style="padding: 10px 20px; text-transform: uppercase; text-decoration: none;">もっと見る。。。</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @include('components.pagination')
                </div>
                @if ($announcements->isEmpty())
                <h1 class="mt-120 mb-100 text-center">案件情報はありません</h1>
                @endif
            </div>
        </div>
    </section>
    <!--== Blog Standard Posts End ==-->
</x-user-layout>