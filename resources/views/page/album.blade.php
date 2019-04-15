@extends('layout.layout') 
@section('content')
<!-- content -->
<div class="content">
    <!-- column-image  -->
    <div class="column-image">
        <div class="bg" data-bg="images/bg/27.jpg"></div>
        <div class="overlay"></div>
        <div class="column-title">
            <h2>{{ $titleAlbum }}</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</h3>
        </div>
        <div class="fixed-column-dec"></div>
    </div>
    <!-- column-image end  -->
    <!-- column-wrapper -->
    <div class="column-wrapper column-wrapper_smallpadding">
        <!--fixed-bottom-content -->
        <div class="fixed-bottom-content fbc_white">
            <div class="gallery-filters">
                {{ $collections->render('vendor.pagination.custom') }}
            </div>
        </div>
        <!-- fixed-bottom-content end -->
        <!-- portfolio start -->
        <div class="gallery-items min-pad three-column fl-wrap lightgallery">
            <!-- gallery-item-->
            @foreach ($collections as $item)
                <div class="gallery-item">
                    <div class="grid-item-holder hov_zoom">
                        <img src="{{ $item->url_thumbnail_images_collection }}" alt="">
                        <a href="{{ $item->url_images_collection }}" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                        <div class="thumb-info">
                            <h3><a href="{{ route('detailCollection', ['slug' => $item->slug_collection ]) }}">{{ $item->name_collection }}</a></h3>
                            <p>Album: {{ $item->name_collection }} 
                                <br>Model: {{ $item->model_name }} 
                                <br>Photo: {{ $item->count_images }} Photo</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- gallery-item end-->
        </div>
        <!-- portfolio end -->
    </div>
    <!-- column-wrapper -->
</div>
<!--content end-->
@endsection