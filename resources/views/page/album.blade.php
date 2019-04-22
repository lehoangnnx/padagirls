@extends('layout.layout') 
@section('content')
<!-- Content -->
<div class="pm_dark_type page-template-page-portfolio portfolio_masonry_title_page pm_portfolio_listing_container pm_columns_4 pm_with_margin">
    <div class="pm_portfolio_listing isotope portfolio_isotope">
        @foreach ($collections as $item)
            <div class="pm_portfolio_item isotope-item"><!-- Item 1 -->
                <div class="pm_portfolio_item_wrapper">
                    <div class="pm_portfolio_featured_image_wrapper">
                        <img class="lazyload" data-sizes="auto"
                        data-src="{{ $item->url_thumbnail_images_collection }}" 
                        data-srcset="{{ $item->srcset }}"
                        alt="" />
                        <div class="pm_post_likes_wrapper">
                            <div class="pm_image_likes_container">
                                <div class="pm_add_like_button">
                                    <span class="pm_images_counter_icon"></span>
                                    <span class="images_counter">{{ $item->count_images }}</span>
                                </div>
                                <a class="pm_potrfolio_read_more" href="{{ route('detailCollection', ['slug' => $item->slug_collection ]) }}"></a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('detailCollection', ['slug' => $item->slug_collection ]) }}">
                        <div class="pm_portfolio_post_title">
                            {{ $item->name_collection }}
                        </div>
                    </a>
                </div>
            </div><!-- pm_portfolio_item -->
        @endforeach
    </div><!-- pm_portfolio_listing -->
    @if ($collections->hasMorePages())
        <a href="javascript:void(0)" data-next-page="{{ $collections->nextPageUrl() }}" 
            class="pm_load_more"><span class="pm_load_more_back"></span></a>        
    @endif
    <div class="clear"></div>
</div><!-- pm_portfolio_listing_container -->
@endsection