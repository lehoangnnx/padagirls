@extends('layout.layout')
@section('content')
    <!--content -->	
    <div class="content full-height">
        <!-- media-container  -->
        <div class="media-container">
            <!--fs-slider-wrap -->						
            <div class="fs-slider-wrap fs-slider-det full-height fl-wrap">
                <div class="fs-slider lightgallery full-height fl-wrap" data-mousecontrol2="true">
                    <div class="swiper-container  ">
                        <div class="swiper-wrapper" >
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom" data-fsslideropt1="Location : <span>Switzerland , Bern</span>" data-fsslideropt2="Photos : <span>27 Photos</span>" data-fsslideropt3="Camera : <span>Canon EOS R</span>" data-fssurl="portfolio-single.html">
                                <div class="fs-slider-item fl-wrap">
                                    <div class="bg"  data-bg="images/bg/25.jpg"></div>
                                    <div class="overlay"></div>
                                    <div class="fs-slider_align_title">
                                        <h2><a href="portfolio-single.html">Switzerland Nature</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. </p>
                                        <div class="clearfix"></div>
                                        <a href="portfolio-single.html" class="btn fl-btn">Details</a>
                                    </div>
                                    <a href="images/bg/25.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                </div>
                            </div>
                            <!-- swiper-slide-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom" data-fsslideropt1="Location : <span>Norway , Oslo</span>" data-fsslideropt2="Photos : <span>27 Photos</span>" data-fsslideropt3="Model : <span>Brooke Kowalsky</span>" data-fssurl="portfolio-single2.html">
                                <div class="fs-slider-item fl-wrap">
                                    <div class="bg"  data-bg="images/bg/11.jpg"></div>
                                    <div class="overlay"></div>
                                    <div class="fs-slider_align_title">
                                        <h2><a href="portfolio-single.html">Discover Norway</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. </p>
                                        <div class="clearfix"></div>
                                        <a href="portfolio-single.html" class="btn fl-btn">Details</a>
                                    </div>
                                    <a href="images/bg/11.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                </div>
                            </div>
                            <!-- swiper-slide-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom" data-fsslideropt1="Location : <span>Switzerland , Bern</span>" data-fsslideropt2="Photos : <span>27 Photos</span>" data-fsslideropt3="Camera : <span>Canon EOS R</span>" data-fssurl="portfolio-single.html">
                                <div class="fs-slider-item fl-wrap">
                                    <div class="bg"  data-bg="images/bg/9.jpg"></div>
                                    <div class="overlay"></div>
                                    <div class="fs-slider_align_title">
                                        <h2><a href="portfolio-single.html">Greeen Flowers</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. </p>
                                        <div class="clearfix"></div>
                                        <a href="portfolio-single.html" class="btn fl-btn">Details</a>
                                    </div>
                                    <a href="images/bg/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                </div>
                            </div>
                            <!-- swiper-slide-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom" data-fsslideropt1="Location : <span>Switzerland , Bern</span>" data-fsslideropt2="Photos : <span>27 Photos</span>" data-fsslideropt3="Camera : <span>Canon EOS R</span>" data-fssurl="portfolio-single.html">
                                <div class="fs-slider-item fl-wrap">
                                    <div class="bg"  data-bg="images/bg/10.jpg"></div>
                                    <div class="overlay"></div>
                                    <div class="fs-slider_align_title">
                                        <h2><a href="portfolio-single.html">Alone on Nature</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. </p>
                                        <div class="clearfix"></div>
                                        <a href="portfolio-single.html" class="btn fl-btn">Details</a>
                                    </div>
                                    <a href="images/bg/10.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                </div>
                            </div>
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