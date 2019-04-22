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
                                            <a class="pm_text_menu_item" href="{{ route('collectionByModel', ['slug' =>$item->slug] ) }}">{{ $item->name }}</a>
                                         </li>
                                    @endforeach
                                    
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