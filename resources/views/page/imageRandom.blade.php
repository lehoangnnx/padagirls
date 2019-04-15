@extends('layout.layout') 
@section('content')
<!-- content -->
<div class="content full-height hor-content hor-content_padd">
    <!-- slider-counter_wrap-->
    <div class="slider-counter_wrap">
        <div class="count-folio round-counter">
            <div class="num-album"></div>
            <div class="all-album"></div>
        </div>
    </div>
    <!-- slider-counter_wrap end -->
    <!-- bottom-filter-wrap -->
    <div class="fixed-bottom-content" style="width: 100%; height: 70px;">
        
        {{-- <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll down or  Swipe to Discover</span>
        </div>
        <div class="filter-title">Filters <i class="fal fa-long-arrow-right"></i></div> --}}
        
        <div class="gallery-filters">
                {{ $images->render('vendor.pagination.custom') }}
            {{-- <a href="#" class="gallery-filter  gallery-filter-active disabled" data-filter="*">All</a> --}}
            {{-- <a href="#" class="gallery-filter" data-filter=".nature">Nature</a>
            <a href="#" class="gallery-filter" data-filter=".models">Models</a>
            <a href="#" class="gallery-filter" data-filter=".couples">Couples</a>
            <a href="#" class="gallery-filter" data-filter=".outdoor">Outdoor</a> --}}
        </div>
    </div>
    <!-- bottom-filter-wrap end -->
    <!--horizontal-grid   -->
    <div class="horizontal-grid-wrap  fl-wrap full-height ">

        <!-- portfolio start -->
        <div id="portfolio_horizontal_container" class="two-ver-columns lightgallery">
            <!-- portfolio_item-->
            @foreach ($images as $item)
                <div class="portfolio_item">
                    <div class="grid-item-holder hov_zoom">
                        <img  src="{{ $item->url_thumbnail }}" alt="">
                        <a href="{{ $item->url }}" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                    </div>
                </div>
            @endforeach
            <!-- portfolio_item end-->
        </div>
        <!-- portfolio end -->
    </div>
    <!--horizontal-grid end -->
</div>
<!--content end-->
@endsection