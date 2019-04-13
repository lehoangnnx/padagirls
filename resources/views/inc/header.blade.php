<!-- header start  -->
<header class="main-header">
    <!-- logo   -->
    <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>  
    <!-- logo end  -->		
    <!-- search -->				
    <div class="search-button"><i class="far fa-search"></i></div>
    <div class="search-input"><input name="se" id="se" type="text" class="search" placeholder="Search.." /></div>
    <!-- search end  -->
    <div class="sb-button"></div>
    <div class="share-btn showshare"><i class="fal fa-megaphone"></i><span>Share</span></div>
    <!-- mobile nav -->
    <div class="nav-button-wrap">
        <div class="nav-button"><span></span><span></span><span></span></div>
    </div>
    <!-- mobile nav end-->				
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home')}}">Trang Chủ</a>
                </li>
                <li>
                    <a href="{{ route('random')}}">Tổng Hợp</a>
                </li>
                <li>
                    <a href="{{ route('album')}}">Album </a>
                    <!--second level -->
                    <ul>
                        @foreach ($albums as $item)
                        <li><a href="{{ $item->slug }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                    <!--second level end-->
                </li>
                <li>
                    <a href="about.html">Giới Thiệu</a>
                </li>
                <li>
                    <a href="contacts.html">Liên Hệ</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->               
</header>
<!-- header end -->