<x-user-layout>
    <!--== Portfolio Start ==-->
  <section class="white-bg dark-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mb-100">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item dark">
                        All
                    </div>
                    @foreach ($materials as $typeMaterial)
                    <div data-filter=".{{ $typeMaterial->type }}" class="cbp-filter-item">
                        {{ $typeMaterial->type }}
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-12">

            <div id="portfolio-gallery" class="cbp">
                @foreach ($materials as $material)
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
                @endforeach
            </div>
        </div>
  </div>
</section>

<!--== Portfolio End ==-->
</x-user-layout>