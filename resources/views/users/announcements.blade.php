<x-user-layout>
    <!--== Blog Standard Posts Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 mb-50">
                    <div class="sidebar_widget widget_recent_post mb-50">
                        @foreach ($announcements as $key => $announcement)
                        <article class="post-item">
                            <div class="post-thumb">
                                <a href="{{ route('user.show.announcement', $announcement->id) }}"><img src="{{ asset('assets/images/all/' . $announcement->image) }}" class="img-responsive"></a>
                            </div>
                            <div class="post-body">
                                @php
                                    $user = $users->where('id', $announcement->created_by)->first();
                                @endphp
                                <span class="font-14px"><a href="{{ route('user.show.announcement', $announcement->id) }}">{{ $user->company_name }}</a></span>
                                <div class="post-time">{{ $announcement->date_time }}<span class="font-12px ml-10" style="background-color: aquamarine">{{ $announcement->type }}</span></div>
                                <a href="{{ route('user.show.announcement', $announcement->id) }}" class="subtitle">{{ $announcement->title }}</a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Blog Standard Posts End ==-->
</x-user-layout>