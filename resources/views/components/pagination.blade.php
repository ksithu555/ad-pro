@if ($ttlpage > 0)
    <!-- Pagination -->
    <div class="row mt-100">
        <div class="col-md-12">
            <div class="text-center">
                <div class="pagination text-uppercase dark-color">
                    <ul>
                        @php
                            if (empty($_GET['page'])) {
                                $_GET['page'] = 1;
                            }
                            $set = ceil($_GET['page'] / 5);
                            $page = $_GET['page'];
                            $ppage = $_GET['page'] - 1;
                            $npage = $_GET['page'] + 1;
                            // $activeTab = request()->query('tab', 'list'); // Default to 'list' if 'tab' is not set
                            if ($page < 3) {
                                $k = 0;
                            } elseif ($page > $ttlpage - 2) {
                                $k = $ttlpage - 5;
                            } else {
                                $k = $page - 3;
                            }
                            if ($k < 0) {
                                $k = 0;
                            }
                        @endphp

                        <li @if ($page < 2) style="display: none" @endif>
                            <a href="{{ request()->fullUrlWithQuery(['page' => $ppage, 'tab' => 'list']) }}">
                                <i class="icofont icofont-long-arrow-left mr-5 xs-display-none"></i> Prev</a>
                            </a>
                        </li>
        
                        @for ($i = $k + 1; $i <= $k + 6; $i++)
                            @if ($i <= $ttlpage)
                                <li class="@if ($page == $i) active @endif">
                                    <a href="{{ request()->fullUrlWithQuery(['page' => $i, 'tab' => 'list']) }}">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endif
                        @endfor
        
                        <li @if ($page == $ttlpage) style="display: none" @endif>
                            <a href="{{ request()->fullUrlWithQuery(['page' => $npage, 'tab' => 'list']) }}">
                                Next <i class="icofont icofont-long-arrow-right ml-5 xs-display-none"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
