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
                <div class="col-md-12">
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
                        {{-- @foreach ($materials as $material)
                        <div class="cbp-item {{ $material->type }} col-md-4 col-sm-6 with-spacing text-center">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('assets/images/all/' . $material->image) }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap dark">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{ asset('assets/images/all/' . $material->image) }}" 
                                                class="cbp-l-caption-buttonLeft" 
                                                download="{{ $material->image }}" 
                                                rel="nofollow">
                                                <i class="icon-download"></i>
                                            </a>
                                            <a href="{{ asset('assets/images/all/' . $material->image) }}" 
                                                class="cbp-lightbox cbp-l-caption-buttonRight" 
                                                data-title="{{ $material->name }}<br>by Designs ADPRO">
                                                <i class="icofont icofont-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title dark-color font-500 text-uppercase">{{ $material->name }}</div>
                            <div class="cbp-l-grid-projects-desc default-color font-14px">{{ $material->type }}</div>
                        </div>
                        @endforeach --}}
                        @foreach ($materials as $material)
                        <div class="cbp-item {{ $material->type }} col-md-4 col-sm-6 with-spacing text-center">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap image-container">
                                    <div class="image-overlay"></div>
                                    @if ($material->required_plan == 1)
                                    <div class="post-date-box" style="background-color: #7e7e7e;width:60px;height:60px;">
                                        <span class="font-600">シルバー</span>
                                    </div>
                                    @elseif ($material->required_plan == 2)
                                    <div class="post-date-box" style="background-color: #ffc107;width:60px;height:60px;">
                                        <span class="font-600">ゴールド</span>
                                    </div>
                                    @endif
                                    <div class="image" style="background-image: url('{{ asset('assets/images/all/' . $material->image) }}');"></div>
                                </div>
                                <div class="cbp-caption-activeWrap dark">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            @if (Auth::user()->plan_status >= $material->required_plan)
                                                <a href="{{ asset('assets/images/all/' . $material->image) }}" rel="nofollow"
                                                class="cbp-l-caption-buttonLeft" download="{{ $material->image }}">
                                                    <i class="icon-download"></i>
                                                </a>
                                                <a href="{{ asset('assets/images/all/' . $material->image) }}" 
                                                class="cbp-lightbox cbp-l-caption-buttonRight" 
                                                data-title="{{ $material->name }}<br>by Designs ADPRO">
                                                    <i class="icofont icofont-search"></i>
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

</x-user-layout>