@extends('layout.layout') 
@section('content')
<!-- Content -->
<div class="pm_dark_type single-portfolio pm_overflow_visible pm_wrapper pm_container">
    <div class="pm_row">
        <div class="pm_span12">
            <div class="pm_standard_title_and_likes_container">
                <div class="pm_post_title_cont pm_fleft">
                    {{ $collection->name }}
                </div>
                <div class="pm_fright">
                    <a href="{{ route('collectionByModel', ['slug' => $model->slug ]) }}">
                        <div class="pm_post_likes_wrapper">
                            <div class="pm_add_like_button">
                                <i class="pm_likes_icon fa fa-female"></i>
                                 <span class="pm_likes_counter">{{ $model->name }}</span>
                             </div>
                        </div>
                    </a>
                    <div class="pm_prev_slide_button">
                        <span class="pm_prev_thumb_cont" style="background: url('{{ $imagesPreviousCollection->url }}') no-repeat center;"></span>
                        <span class="pm_prev_button_fader"></span>
                        <a href="{{ route('detailCollection', ['slug' => $previousCollection->slug ]) }}"></a>
                    </div>
                    <div class="pm_next_slide_button">
                        <span class="pm_next_thumb_cont" style="background: url('{{ $imagesNextCollection->url }}') no-repeat center;"></span>
                        <span class="pm_next_button_fader"></span>
                        <a href="{{ route('detailCollection', ['slug' => $nextCollection->slug ]) }}"></a>
                    </div>
                </div>
            </div>
            
            <div class="pm_standard_output_cont">
                    <div class="pm_dark_type album_masonry_page pm_album_grid pm_columns_4">
                            <div class="pm_gallery_container gallery_grid">
                                <div class="pm_gallery isotope photo_gallery">
                                    @foreach ($imagesCollection as $item)
                                    <div class="pm_gallery_item isotope-item">
                                        <div class="pm_gallery_item_wrapper">
                                            <div class="pm_image_wrapper">
                                                <img  class="lazyload" data-sizes="auto"
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
                                
                            </div><!-- pm_gallery_container -->
                        </div><!-- pm_album_grid --> 
            </div>
            <div class="pm_divider type_2"></div>
            <div class="pm_row">
                <div class="pm_span12">
                    <div class="pm_content_standard">
                            {{ $collection->discription }}
                    </div>
                    <div class="pm_divider type_2"></div>
                    <div class="pm_standard_title_and_likes_container">
                            <div class="pm_post_title_cont pm_fleft">
                                Download
                            </div>
                            <div class="pm_fright">
                                @foreach ($collectionDownload as $item)
                                    <a href="{{ $item->shortened_url }}" target="_blank">
                                    <div class="pm_post_likes_wrapper">
                                        <div class="pm_add_like_button">
                                            <i class="pm_likes_icon fa fa-download"></i>
                                            <span class="pm_likes_counter">{{ $item->name }}</span>
                                        </div>
                                    </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    <div class="pm_post_meta_standard">
                        Posted on January 12, 2016 by <a href="#">Pixel-Mafia</a> in <a href="#">Travels</a>
                    </div>
                    <div class="pm_post_tags_standard">
                        @foreach ($collectionTags as $item)
                            <a rel="tag" href="{{ route('tags', ['slug' => $item->slug ]) }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection