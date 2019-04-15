@extends('layout.layout')
@section('content')
    <!--content -->	
    <div class="content full-height">
        <!-- media-container  -->
        <div class="media-container">
            <!--fs-slider-wrap -->						
            <div class="fs-slider-wrap fs-slider-det full-height fl-wrap">
                <div class="fs-slider lightgallery full-height fl-wrap" data-mousecontrol2="true">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- swiper-slide-->
                            @foreach ($collectionAndAlbumAndImagesAndModelLimit as $item)
                            <div class="swiper-slide hov_zoom" data-fsslideropt1="Album : <span>{{ $item->album_name }}</span>" 
                                data-fsslideropt2="Photos : <span>{{ $item->count_images }} Photos</span>" 
                                data-fsslideropt3="Model : <span>{{ $item->model_name }}</span>"
                                 data-fssurl="{{ route('detailCollection', ['slug' => $item->slug_collection])}}">
                                <div class="fs-slider-item fl-wrap">
                                    <div class="bg" data-bg="{{ $item->url_images_collection }}"></div>
                                    <div class="overlay"></div>
                                    <div class="fs-slider_align_title">
                                        <h2><a href="{{ route('detailCollection', ['slug' => $item->slug_collection])}}">{{ $item->name_collection }}</a></h2>
                                        <p>{{ $item->discription_collection }} </p>
                                        <div class="clearfix"></div>
                                        <a href="portfolio-single.html" class="btn fl-btn">Details</a>
                                    </div>
                                    <a href="{{ $item->url_images_collection }}" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                                </div>
                            </div>
                            @endforeach
                            <!-- swiper-slide-->
                        </div>
                    </div>
                </div>
            </div>
            <!--fs-slider-wrap end -->	
            <div class="hero-slider-wrap_pagination hlaf-slider-pag"></div>
            <!-- hero-slider_details_wrap--> 
            <div class="hero-slider_details_wrap">
                <div class="hero-slider_details fl-wrap">
                    <ul>
                        <li class="opt-one"></li>
                        <li class="opt-two"></li>
                        <li class="opt-three"></li>
                    </ul>
                </div>
                <a href="#" class="hero-slider_details_url ajax"><i class="fal fa-chevron-right"></i></a>
            </div>
            <!-- hero-slider_details_wrap  end --> 
        </div>
        <!-- media-container   end -->         
        <!-- slider-counter_wrap -->   
        <div class="slider-counter_wrap">
            <div class="swiper-counter">
                <div id="current">1</div>
                <div id="total"></div>
            </div>
        </div>
        <!-- slider-counter_wrap   end -->   
    </div>
    <!--content end-->
@endsection