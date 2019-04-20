<!-- Header -->
<header class="pm_header">
    <div class="pm_fleft">
        <a href="http://pixel-mafia.com/demo/html-templates/travis/index.html" class="pm_logo">
            <img class="pm_non_retina" src="http://pixel-mafia.com/demo/html-templates/travis/img/logo-dark.png" alt="Travis" />
            <img class="pm_retina" src="http://pixel-mafia.com/demo/html-templates/travis/img/retina/logo-dark.png" alt="Travis" />
        </a>
    </div><!-- pm_fleft -->
    <div class="pm_fright">
        <div class="pm_innerpadding_menu">
            <div class="pm_menu_cont">
                <ul class="menu">
                    <li class="menu-item">
                        <a class="pm_icon_menu_item" href="{{ route('home') }}">
                           Trang Chủ
                        </a>
                        <a class="pm_menu_mobile_item" href="{{ route('home') }}">Trang Chủ</a>
                    </li>

                    <li class="menu-item menu-item-has-children current-menu-ancestor">
                        <a class="pm_icon_menu_item" href="{{ route('album') }}">
                            Album
                        </a>
                        <a class="pm_menu_mobile_item" href="javascript:void(0)">Album</a>
                        <div class="sub_menu_wrapper">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class="pm_menu_mobile_item" href="{{ route('album') }}">All Album</a>
                                </li>
                                @foreach ($albums as $item)
                                    <li class="menu-item">
                                        <a class="pm_text_menu_item" href="{{ route('collectionByAlbum', ['slug' =>$item->slug] ) }}">{{ $item->name }}</a>
                                     </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children current-menu-ancestor">
                            <a class="pm_icon_menu_item" href="javascript:void(0)">
                                Model
                            </a>
                            <a class="pm_menu_mobile_item" href="javascript:void(0)">Model</a>
                            <div class="sub_menu_wrapper">
                                <ul class="sub-menu">
                                    @foreach ($models as $item)
                                        <li class="menu-item">
                                            <a class="pm_text_menu_item" href="{{ route('modelBySlug', ['slug' =>$item->slug] ) }}">{{ $item->name }}</a>
                                         </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </li>

                    <li class="menu-item menu-item-has-children">
                        <a class="pm_icon_menu_item" href="javascript:void(0)">
                            <i class="pmicon-073"></i>
                        </a>
                        <a class="pm_menu_mobile_item" href="javascript:void(0)">Other</a>
                        <div class="sub_menu_wrapper">
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a class="pm_text_menu_item" href="javascript:void(0)">Portfolio</a>
                                    <div class="sub_menu_wrapper">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-grid-2.html">2 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-grid-3.html">3 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-grid-4.html">4 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-grid-5.html">5 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-grid-margin.html">Grid with Margins</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-grid-title.html">Grid with Titles</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-masonry.html">Masonry</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/portfolio-masonry-margin.html">Masonry with Margins</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="portfolio-masonry-title.html">Masonry with Titles</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/porfolio-post-image-full.html">Fullscreen Image Post</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/porfolio-post-video-full.html">Fullscreen Video Post</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="porfolio-post-standard.html">Standard Post</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a class="pm_text_menu_item" href="javascript:void(0)">Blog</a>
                                    <div class="sub_menu_wrapper">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-tape.html">Tape Blog</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-grid-2.html">2 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-grid-3.html">3 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-grid-4.html">4 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-grid-5.html">5 Columns Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-grid-margin.html">Grid with Margins</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-grid-title.html">Grid with Titles</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-masonry.html">Masonry</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-masonry-margin.html">Masonry with Margins</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-masonry-title.html">Masonry with Titles</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-post-image-full.html">Fullscreen Image Post</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-post-video-full.html">Fullscreen Video Post</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/blog-post-standard.html">Standard Post</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a class="pm_text_menu_item" href="javascript:void(0)">Contacts</a>
                                    <div class="sub_menu_wrapper">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/contacts-full.html">Fullscreen</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/contacts-standard.html">Standard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a class="pm_text_menu_item" href="javascript:void(0)">Page Styling</a>
                                    <div class="sub_menu_wrapper">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/styling-full.html">Fullscreen</a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/styling-standard.html">Standard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/coming-soon.html">Coming Soon</a>
                                </li>
                                <li class="menu-item">
                                    <a class="pm_text_menu_item" href="http://pixel-mafia.com/demo/html-templates/travis/page404.html">404 Error Page</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul><!-- menu -->
            </div><!-- pm_menu_cont -->
            <a class="pm_menu_mobile_toggler" href="#"></a>
            <span class="pm_share_button"></span>
        </div><!-- pm_innerpadding_menu -->
    </div><!-- pm_fright -->
    <div class="clear"></div>
</header>

<!-- Menu Mobile -->
<div class="pm_menu_mobile_container_wrapper">
    <div class="pm_menu_mobile_container pm_container"></div>
</div>