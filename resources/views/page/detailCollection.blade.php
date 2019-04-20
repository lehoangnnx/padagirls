@extends('layout.layout') 
@section('content')
<!-- Content -->
<div class="pm_dark_type single-portfolio pm_overflow_visible pm_wrapper pm_container">
    <div class="pm_row">
        <div class="pm_span12">
            <div class="pm_standard_title_and_likes_container">
                <div class="pm_post_title_cont pm_fleft">
                    Standard Post
                </div>
                <div class="pm_fright">
                    <div class="pm_post_likes_wrapper">
                        <div class="pm_add_like_button">
                            <i class="pm_likes_icon fa fa-heart-o"></i>
                            <span class="pm_likes_counter">0</span>
                        </div>
                    </div>
                    <div class="pm_prev_slide_button">
                        <span class="pm_prev_thumb_cont" style="background: url('http://pixel-mafia.com/demo/html-templates/travis/img/clipart/grid/thumbs/thumb-10.jpg') no-repeat center;"></span>
                        <span class="pm_prev_button_fader"></span>
                        <a href="http://pixel-mafia.com/demo/html-templates/travis/porfolio-post-video-full.html"></a>
                    </div>
                    <div class="pm_next_slide_button">
                        <span class="pm_next_thumb_cont" style="background: url('http://pixel-mafia.com/demo/html-templates/travis/img/clipart/grid/thumbs/thumb-09.jpg') no-repeat center;"></span>
                        <span class="pm_next_button_fader"></span>
                        <a href="http://pixel-mafia.com/demo/html-templates/travis/porfolio-post-image-full.html"></a>
                    </div>
                </div>
            </div>
            
            <div class="pm_standard_output_cont">
                    <div class="pm_dark_type album_masonry_page pm_album_grid pm_columns_4">
                            <div class="pm_gallery_container gallery_grid">
                                <div class="pm_gallery isotope photo_gallery">
                    
                                    @foreach ($imagesCollection as $item)
                    
                                    <div class="pm_gallery_item">
                                        <div class="pm_gallery_item_wrapper">
                                            <div class="pm_image_wrapper">
                                                <img src="{{ $item->url_thumbnail }}" alt="" />
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
            <div class="pm_row">
                <div class="pm_span12">
                    <div class="pm_content_standard">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus neque, malesuada sit amet
                            commodo a, sollicitudin in nulla. Duis sed dui consectetur, faucibus diam sit amet, blandit ligula.
                            Pellentesque eleifend vestibulum facilisis. Integer ac lobortis sapien. Quisque ut lacus et risus
                            dictum pulvinar vel id leo. Pellentesque hendrerit pulvinar neque ac ornare cum sociis.</p>
                        <p>Magnis dis parturient montes, nascetur ridiculus mus. Sed quis neque sit amet diam luctus feugiat
                            vel nec tortor. Ut vitae ultrices nibh, quis gravida ipsum. Quisque euismod dolor eu neque sollicitudin,
                            at pulvinar lectus malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Suspendisse potenti. Mauris eros lacus, mollis ac felis eget, faucibus
                            tempus tellus. Etiam mollis ultricies ligula ac maximus. Proin at sem molestie, euismod nisi
                            et, dapibus velit. Phasellus condimentum ac ligula non malesuada. Sed varius tempus odio, eget
                            imperdiet nibh egestas at. Curabitur gravida ligula in ultrices semper a praesent dis parturient
                            montes, nascetur ridiculus mus. Sed quis neque sit amet diam luctus feugiat vel nec tortor. Ut
                            vitae ultrices nibh, quis gravida ipsum. Quisque euismod dolor eu neque sollicitudin, at pulvinar
                            lectus malesuada class aptent taciti sociosqu.</p>
                    </div>
                    <div class="pm_post_meta_standard">
                        Posted on January 12, 2016 by <a href="#">Pixel-Mafia</a> in <a href="#">Travels</a>
                    </div>
                    <div class="pm_post_tags_standard">
                        <a rel="tag" href="#">image</a>
                        <a rel="tag" href="#">photo</a>
                        <a rel="tag" href="#">photography</a>
                        <a rel="tag" href="#">travel</a>
                    </div>
                    <div class="pm_post_comments_standard pm_simple_layout">
                        <div id="comments">
                            <div class="pm_comments_wrapper">
                                <h1 class="pm_comments_number">
                                    <span class="pm_comments_icon"></span> 2
                                </h1>
                                <ul class="pm_comments_list">

                                    <li class="comment">
                                        <div class="pm_comment_container">
                                            <div class="pm_comment_wrapper">
                                                <div class="pm_comment_avatar">
                                                    <img class="avatar" src="http://pixel-mafia.com/demo/html-templates/travis/img/clipart/avatar-1.jpeg" alt="" />
                                                </div>
                                                <div class="pm_comment_info">
                                                    <span class="pm_comment_author">Amy K.</span>
                                                    <span class="pm_comment_date">January 18, 2016</span>
                                                    <span class="pm_comment_reply">
                                                            <span class="pm_comment_reply_back"></span>
                                                    <span class="pm_comment_reply_back_hover"></span>
                                                    </span>
                                                </div>
                                                <div class="pm_comment_text">
                                                    <p>Wow! So creative and unique theme!</p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>

                                    <li class="comment">
                                        <div class="pm_comment_container">
                                            <div class="pm_comment_wrapper">
                                                <div class="pm_comment_avatar">
                                                    <img class="avatar" src="http://pixel-mafia.com/demo/html-templates/travis/img/clipart/avatar-2.jpeg" alt="" />
                                                </div>
                                                <div class="pm_comment_info">
                                                    <span class="pm_comment_author">Steve</span>
                                                    <span class="pm_comment_date">January 18, 2016</span>
                                                    <span class="pm_comment_reply">
                                                            <span class="pm_comment_reply_back"></span>
                                                    <span class="pm_comment_reply_back_hover"></span>
                                                    </span>
                                                </div>
                                                <div class="pm_comment_text">
                                                    <p>Really amazing theme BY photographers FOR photographers!</p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- pm_comments_wrapper -->
                            <div class="comment-respond">
                                <form class="comment-form">
                                    <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
                                    <div class="pm_comment_input_wrapper">
                                        <input class="pm_comment_respond_field" type="text" name="author" title="Name*" placeholder="Name*">
                                    </div>
                                    <div class="pm_comment_input_wrapper">
                                        <input class="pm_comment_respond_field" type="text" name="tmail" title="Email*" placeholder="Email*">
                                    </div>
                                    <div class="pm_comment_input_wrapper">
                                        <input class="pm_comment_respond_field" type="text" name="web" title="Web" placeholder="Web">
                                    </div>
                                    <div class="pm_comment_input_wrapper">
                                        <textarea class="pm_comment_respond_field" name="comment" placeholder="Leave Your Comment*" rows="5" cols="45"></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <div class="pm_submit_wrapper">
                                            <div class="pm_send_comment_button">
                                                <span class="btn_text">Submit</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- comments -->
                    </div>
                    <!-- pm_post_comments_standard -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection