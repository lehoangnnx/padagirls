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
    <div class="bottom-filter-wrap">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll down or  Swipe to Discover</span>
        </div>
        <div class="filter-title">Filters <i class="fal fa-long-arrow-right"></i></div>
        <div class="gallery-filters">
            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>
            <a href="#" class="gallery-filter" data-filter=".nature">Nature</a>
            <a href="#" class="gallery-filter" data-filter=".models">Models</a>
            <a href="#" class="gallery-filter" data-filter=".couples">Couples</a>
            <a href="#" class="gallery-filter" data-filter=".outdoor">Outdoor</a>
        </div>
    </div>
    <!-- bottom-filter-wrap end -->
    <!--horizontal-grid   -->
    <div class="horizontal-grid-wrap  fl-wrap full-height ">

        <!-- portfolio start -->
        <div id="portfolio_horizontal_container" class="two-ver-columns lightgallery">
            <!-- portfolio_item-->
            <div class="portfolio_item nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/1.jpg" alt="">
                    <a href="images/folio/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Alone on Nature</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item couples">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/4.jpg" alt="">
                    <a href="images/folio/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Living my dream</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/2.jpg" alt="">
                    <a href="images/folio/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Forever Young</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item nature couples">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/15.jpg" alt="">
                    <a href="images/folio/15.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Sunny side up</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item couples models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/5.jpg" alt="">
                    <a href="images/folio/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">The other side of me</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/6.jpg" alt="">
                    <a href="images/folio/6.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">A Wonderful Life</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item outdoor nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/7.jpg" alt="">
                    <a href="images/folio/7.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Just Happy</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item nature outdoor">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/16.jpg" alt="">
                    <a href="images/folio/16.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">My Blooming Backyard</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/9.jpg" alt="">
                    <a href="images/folio/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Life, here I come</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item outdoor">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/10.jpg" alt="">
                    <a href="images/folio/10.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Travelling is Fun</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item nature outdoor">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/11.jpg" alt="">
                    <a href="images/folio/11.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Go green</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
            <!-- portfolio_item-->
            <div class="portfolio_item couples nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/14.jpg" alt="">
                    <a href="images/folio/14.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Crazy, cute couple</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- portfolio_item end-->
        </div>
        <!-- portfolio end -->
    </div>
    <!--horizontal-grid end -->
</div>
<!--content end-->
@endsection