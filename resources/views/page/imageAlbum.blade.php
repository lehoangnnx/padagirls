@extends('layout.layout') 
@section('content')
<!-- content -->
<div class="content">
    <!-- column-image  -->
    <div class="column-image">
        <div class="bg" data-bg="images/bg/27.jpg"></div>
        <div class="overlay"></div>
        <div class="column-title">
            <h2>My Portfolio</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</h3>
        </div>
        <div class="column-notifer">
            <div class="scroll-down-wrap transparent_sdw">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll down  to Discover</span>
            </div>
        </div>
        <div class="fixed-column-dec"></div>
    </div>
    <!-- column-image end  -->
    <!-- column-wrapper -->
    <div class="column-wrapper column-wrapper_smallpadding">
        <!--fixed-bottom-content -->
        <div class="fixed-bottom-content fbc_white">
            <div class="gallery-filters">
                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>
                <a href="#" class="gallery-filter" data-filter=".nature">Nature</a>
                <a href="#" class="gallery-filter" data-filter=".models">Models</a>
                <a href="#" class="gallery-filter" data-filter=".couples">Couples</a>
                <a href="#" class="gallery-filter" data-filter=".outdoor">Outdoor</a>
            </div>
        </div>
        <!-- fixed-bottom-content end -->
        <!-- portfolio start -->
        <div class="gallery-items min-pad   three-column fl-wrap lightgallery">
            <!-- gallery-item-->
            <div class="gallery-item nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/1.jpg" alt="">
                    <a href="images/folio/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Alone on Nature</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item couples">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/2.jpg" alt="">
                    <a href="images/folio/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Living my dream</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/3.jpg" alt="">
                    <a href="images/folio/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Forever Young</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/4.jpg" alt="">
                    <a href="images/folio/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Sunny side up</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item couples">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/5.jpg" alt="">
                    <a href="images/folio/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">The other side of me</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/6.jpg" alt="">
                    <a href="images/folio/6.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">A Wonderful Life</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item outdoor couples">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/7.jpg" alt="">
                    <a href="images/folio/7.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Just Happy</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/8.jpg" alt="">
                    <a href="images/folio/8.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">My Blooming Backyard</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/9.jpg" alt="">
                    <a href="images/folio/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Life, here I come</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item outdoor">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/10.jpg" alt="">
                    <a href="images/folio/10.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Travelling is Fun</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item outdoor models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/11.jpg" alt="">
                    <a href="images/folio/11.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Go green</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item couples nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/12.jpg" alt="">
                    <a href="images/folio/12.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Crazy, cute couple</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item outdoor nature">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/16.jpg" alt="">
                    <a href="images/folio/16.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Just Happy</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item outdoor models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/13.jpg" alt="">
                    <a href="images/folio/13.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">My Blooming Backyard</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
            <!-- gallery-item-->
            <div class="gallery-item models">
                <div class="grid-item-holder hov_zoom">
                    <img src="images/folio/18.jpg" alt="">
                    <a href="images/folio/18.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    <div class="thumb-info">
                        <h3><a href="portfolio-single.html">Life, here I come</a></h3>
                        <p>Here you can place an optional description of your Project</p>
                    </div>
                </div>
            </div>
            <!-- gallery-item end-->
        </div>
        <!-- portfolio end -->
    </div>
    <!-- column-wrapper -->
</div>
<!--content end-->
@endsection