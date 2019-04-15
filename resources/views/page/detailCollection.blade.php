@extends('layout.layout') 
@section('content')
<!-- content -->
<div class="content">
    <!-- column-image  -->
    <div class="column-image">
        <div class="bg" data-bg="{{ $imagesCover }}"></div>
        <div class="overlay"></div>
        <div class="column-title">
            <h2>{{ $collection->name}}</h2>
        </div>
        <div class="fixed-column-dec"></div>
    </div>
    <!-- column-image end  -->
    <!-- column-wrapper -->
    <div class="column-wrapper single-content-section">
        <div class="fixed-bottom-content">
            <!-- pagination   -->
            <div class="content-nav-fixed">
                <ul>
                    <li>
                        <a href="{{ route('detailCollection', ['slug' => $previousCollection->slug ]) }}" class="ln"><i class="fal fa-long-arrow-left"></i><span>Prev <strong>- {{ $previousCollection->name }}</strong></span></a>
                        <div class="content-nav_mediatooltip cnmd_leftside"><img src="{{ $imagesPreviousCollection->url }}" alt=""></div>
                    </li>
                    <li>
                        <a href="{{ route('detailCollection', ['slug' => $nextCollection->slug ]) }}" class="rn"><span >Next <strong>- {{ $nextCollection->name }}</strong></span> <i class="fal fa-long-arrow-right"></i></a>
                        <div class="content-nav_mediatooltip cnmd_rightside"><img src="{{ $imagesNextCollection->url }}" alt=""></div>
                    </li>
                </ul>
            </div>
        </div>
        <section id="sec1">
            <div class="container small-container">
                <!-- post -->
                <div class="post fl-wrap fw-post single-post ">
                    <div class="section-title fl-wrap">
                        <h3>Project Gallery</h3>
                        <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                        <div class="section-number">01.</div>
                    </div>
                    <div class="pr-det-container  ">
                        <div class="fl-wrap">
                            <!-- blog media -->
                            <div class="blog-media fl-wrap">
                                <!-- portfolio start -->
                                <div class="gallery-items min-pad   three-column fl-wrap lightgallery">
                                    <!-- gallery-item-->
                                    @foreach ($imagesCollection as $item)
                                        @if ($item->is_cover !== 1)
                                            <div class="gallery-item nature">
                                                <div class="grid-item-holder hov_zoom">
                                                    <img src="{{ $item->url_thumbnail }}" alt="">
                                                    <a href="{{ $item->url }}" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <!-- gallery-item end-->
                                </div>
                                <!-- portfolio end -->
                            </div>
                            <!-- blog media end -->
                            <div class="section-title fl-wrap">
                                <h3>Project Details</h3>
                                <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                                <div class="section-number">02.</div>
                            </div>
                            <span class="separator sep-b"></span>
                            <div class="clearfix"></div>
                            <p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem
                                ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae
                                in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant
                                morbi tristique senectus et netus piros labore et dolore magna. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
                                Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.
                                Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis
                                massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
                            </p>
                            <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam venenatis
                                ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor odio tempus arcu,
                                vel ultrices nisi nibh vitae ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Morbi varius lacinia vestibulum. Aliquam lobortis facilisis tellus, in facilisis ex vehicula
                                ac. In malesuada quis turpis vel viverra.</p>
                        </div>
                        <div class="caption-wrap fl-wrap ">
                            <ul>
                                <li>
                                    <span>Album</span>
                                    <a href="{{ route('collectionByAlbum', ['slug' => $album->slug ]) }}">{{ $album->name }}</a>
                                </li>
                                <li>
                                    <span>Model</span>
                                    <a href="{{ route('collectionByAlbum', ['slug' => $model->slug ]) }}">{{ $model->name }}</a>
                                </li>
                                <li>
                                    <span style="text-transform: none;">PASSWORD: pada.tech</span>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ $collectionDownload->url }}" class="btn fl-btn" target="_blank">{{ $download->name }}</a>
                    </div>
                </div>
                <!-- post end-->
            </div>
        </section>
        <footer class="min-footer fl-wrap content-animvisible">
            <div class="container small-container">
                <div class="footer-inner fl-wrap">
                    <!-- policy-box-->
                    <div class="policy-box">
                        <span>&#169; Kotlis 2019  /  All rights reserved. </span>
                    </div>
                    <!-- policy-box end-->
                    <a href="#" class="to-top-btn to-top">Back to top <i class="fal fa-long-arrow-up"></i></a>
                </div>
            </div>
        </footer>
    </div>
    <!-- column-wrapper -->
</div>
<!--content end-->
@endsection