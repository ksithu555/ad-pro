<x-admin-layout>
    <!--== Blog Standard Posts Start ==-->
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
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 mb-50">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover shop-cart">
                            <tbody>
                                @foreach ($announcements as $key => $announcement)
                                <tr>
                                    <td>
                                        <article class="post-item">
                                            <div class="post-thumb">
                                                <a href="{{ route('admin.show.announcement', $announcement->id) }}">
                                                    <img src="{{ asset('assets/images/all/' . $announcement->image) }}" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                @php
                                                    $user = $users->where('id', $announcement->created_by)->first();
                                                @endphp
                                                <span class="font-14px"><a href="{{ route('admin.show.announcement', $announcement->id) }}">{{ $user->company_name }}</a></span>
                                                <div class="post-time">{{ $announcement->date_time }}<span class="font-12px ml-10" style="background-color: aquamarine">{{ $announcement->type }}</span></div>
                                                <a href="{{ route('admin.show.announcement', $announcement->id) }}" class="subtitle">{{ $announcement->title }}</a>
                                            </div>
                                        </article>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Blog Standard Posts End ==-->
</x-admin-layout>