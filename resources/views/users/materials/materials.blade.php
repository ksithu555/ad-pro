<x-user-layout>
    <style>
        .image-container {
            position: relative;
            width: 100%;
            height: 200px; /* Set the height you want */
        }

        .image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            pointer-events: none; /* Prevent interaction */
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: transparent;
            z-index: 2; /* Ensure overlay is on top */
        }
    </style>
    <!--== Portfolio Start ==-->
    <section class="white-bg dark-block pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <x-message-box></x-message-box>
                </div>
                <div class="col-md-2">
                    <div style="text-align: right;">
                        <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('user.get.material.icons') }}">
                            <i class="fa fa-eye"></i> &nbsp;アイコン
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mb-100">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item dark">
                            All
                        </div>
                        @foreach ($types as $type)
                        <div data-filter=".{{ $type }}" class="cbp-filter-item">
                            {{ $type }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="portfolio-gallery" class="cbp">
                        @foreach ($materials as $material)
                        <div class="cbp-item {{ $material->type }} col-md-4 col-sm-6 with-spacing text-center">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap image-container">
                                    <div class="image-overlay"></div>
                                    @if ($material->required_plan == 1)
                                    <div class="post-date-box" style="background-color: #ffc107;width:60px;height:60px;">
                                        <span class="font-600">有料</span>
                                    </div>
                                    @endif
                                    <div class="image" style="background-image: url('{{ asset('assets/images/all/' . $material->image) }}');"></div>
                                </div>
                                <div class="cbp-caption-activeWrap dark">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            @if (Auth::user()->plan_status >= $material->required_plan)
                                                @if ($material->required_plan == 0 || $material->user_id == Auth::user()->id)
                                                    <a href="{{ route('user.download.material', $material->id) }}" rel="nofollow"
                                                    class="cbp-l-caption-buttonLeft">
                                                        <i class="icon-download"></i>
                                                    </a>
                                                    <a href="{{ asset('assets/images/all/' . $material->image) }}" 
                                                    class="cbp-lightbox cbp-l-caption-buttonRight" 
                                                    data-title="{{ $material->name }}<br>by Designs ADPRO">
                                                        <i class="icofont icofont-search"></i>
                                                    </a>
                                                @else
                                                    <div class="tr-modal-popup">
                                                        <a href="#modal-popup-{{ $material->id }}" data-effect="mfp-newspaper" rel="nofollow"
                                                            class="cbp-l-caption-buttonLeft">
                                                            <i class="icon-download"></i>
                                                        </a>
                                                        <a href="{{ asset('assets/images/all/' . $material->image) }}" 
                                                        class="cbp-lightbox cbp-l-caption-buttonRight" 
                                                        data-title="{{ $material->name }}<br>by Designs ADPRO">
                                                            <i class="icofont icofont-search"></i>
                                                        </a>
                                                    </div>
                                                    <!-- Modal Popup Message Box -->
                                                    <div id="modal-popup-{{ $material->id }}" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
                                                        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">素材ダウンロード</span>
                                                        <p class="mb-20 default-color">残り素材をダウンロード：{{ Auth::user()->paidUserDownloadLimitation ? Auth::user()->paidUserDownloadLimitation->count : '10' }}回</p>
                                                        @if (Auth::user()->paidUserDownloadLimitation && Auth::user()->paidUserDownloadLimitation->count != 0)
                                                            <p class="mb-20">素材をダウンロードしてもよろしいですか?</p>
                                                            <form id="downloadForm" action="{{ route('user.download.material', $material->id) }}" method="GET" style="display: none;"></form>
                                                            <a class="btn btn-lg btn-circle btn-color" href="javascript:void(0);" 
                                                            onclick="downloadAndReload()">Yes</a>
                                                            <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
                                                        @else
                                                            <p class="mb-20">素材を10回ダウンロードしました<br>これ以上のダウンロードはできません</p>
                                                            <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">Close</a>
                                                        @endif
                                                    </div>
                                                @endif
                                            @else
                                                <a href="{{ route('user.get.plans') }}" 
                                                    class="cbp-l-caption-buttonLeft" rel="nofollow">
                                                    <i class="ion-arrow-graph-up-right"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title dark-color font-500 text-uppercase">{{ $material->name }}</div>
                            <div class="cbp-l-grid-projects-desc default-color font-14px">{{ $material->type }}</div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--== Portfolio End ==-->
<script>
    document.addEventListener('contextmenu', function(e) {
        var el = e.target;

        // Allow right-click only on download button or other specific elements
        if (el.tagName !== 'A' && !el.closest('a')) {
            e.preventDefault();
        }
    });
</script>
{{-- Download and Reload --}}
<script>
    function downloadAndReload() {
        // Submit the form to initiate the download
        document.getElementById('downloadForm').submit();

        // Reload the page after a short delay (adjust delay as needed)
        setTimeout(function() {
            window.location.reload();
        }, 1000); // Adjust the delay as necessary
    }
</script>

</x-user-layout>