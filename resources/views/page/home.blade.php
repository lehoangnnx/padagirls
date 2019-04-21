@extends('layout.layout')
@section('content')
    <!-- Content -->
    <div class="pm_dark_type album_masonry_page pm_gallery_item pm_columns_4">
        <div class="pm_gallery_container gallery_grid">
            <div class="pm_gallery isotope photo_gallery">
                @foreach ($images as $item)
                <div class="pm_gallery_item isotope-item">
                    <div class="pm_gallery_item_wrapper">
                        <div class="pm_image_wrapper "  >
                            <img class="lazyload" data-sizes="auto"
                             data-src="{{ $item->url_thumbnail }}" 
                            data-srcset="{{ $item->srcset }}"
                            alt="" />
                            <div class='pm_image_likes_wrapper'>
                                <div class='pm_image_likes_container'>
                                    <a class='pm_popup_trigger' href='{{ $item->url }}' style="float: none;"></a>
                                    <div class='clear'></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- pm_gallery_item_wrapper -->
                </div><!-- pm_gallery_item -->
            @endforeach
            </div><!-- isotope -->
            <a href="javascript:void(0)" data-current-page="{{ $images->currentPage() }}" class="pm_load_more"><span class="pm_load_more_back"></span></a>
            <div class="clear"></div>
        </div><!-- pm_gallery_container -->
    </div><!-- pm_album_grid -->

@endsection