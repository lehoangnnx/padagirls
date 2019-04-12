@extends('layout.layout') 
@section('content')
<!-- content -->
<div class="content">
    <!-- column-image  -->
    <div class="column-image">
        <div class="bg" data-bg="images/bg/2.jpg"></div>
        <div class="overlay"></div>
        <div class="column-title">
            <h2>Contact Info</h2>
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
    <div class="column-wrapper ">
        <!--scroll-nav-wrap -->
        <div class="scroll-nav-wrap">
            <nav class="scroll-nav scroll-init">
                <ul>
                    <li><a class="act-scrlink" href="#sec1">Details</a></li>
                    <li><a href="#sec2">Location</a></li>
                    <li><a href="#sec3">Say Hello</a></li>
                </ul>
            </nav>
        </div>
        <!--scroll-nav-wrap end-->
        <!--section  -->
        <section id="sec1">
            <div class="container small-container">
                <div class="section-title fl-wrap">
                    <h3>Contact Information</h3>
                    <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                    <div class="section-number">01.</div>
                </div>
                <div class="column-wrapper_item fl-wrap">
                    <div class="column-wrapper_text fl-wrap">
                        <p>If you’d like to talk about a project, our work or anything else then get in touch.</p>
                        <div class="contact-details fl-wrap">
                            <ul>
                                <li><span>Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                <li><span>Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                <li><span>Phone :</span><a href="#">+7(111)123456789</a> , <a href="#">+8(222)987654321</a></li>
                            </ul>
                        </div>
                        <a href="#sec3" class="custom-scroll-link btn fl-btn">Say Hello</a>
                    </div>
                </div>
            </div>
        </section>
        <!--section end  -->
        <div class="sec-dec"></div>
        <!--section   -->
        <section id="sec2">
            <div class="container small-container">
                <div class="section-title fl-wrap">
                    <h3>Studio Location</h3>
                    <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                    <div class="section-number">02.</div>
                </div>
                <div class="column-wrapper_item fl-wrap">
                    <div class="column-wrapper_text fl-wrap">
                        <div class="map-container">
                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                        </div>
                        <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam venenatis ut
                            dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor odio tempus arcu, vel ultrices
                            nisi nibh vitae ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius
                            lacinia vestibulum. Aliquam lobortis facilisis tellus, in facilisis ex vehicula ac. In malesuada
                            quis turpis vel viverra.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--section end  -->
        <div class="sec-dec"></div>
        <!--section -->
        <section id="sec3">
            <div class="container small-container">
                <div class="section-title fl-wrap">
                    <h3>Get In Touch</h3>
                    <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                    <div class="section-number">03.</div>
                </div>
                <div class="column-wrapper_item fl-wrap">
                    <div class="column-wrapper_text fl-wrap">
                        <div id="contact-form" class="fl-wrap">
                            <div id="message"></div>
                            <form class="custom-form" action="http://kotlis.kwst.net/dark/php/contact.php" name="contactform" id="contactform">
                                <fieldset>
                                    <input type="text" name="name" id="name" placeholder="Your Name *" value="" />
                                    <input type="text" name="email" id="email" placeholder="Email Address *" value="" />
                                    <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                    <button class="btn float-btn flat-btn color-bg" id="submit">Send Message </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section end  -->
        <!--footer -->
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
        <!--footer end  -->
    </div>
    <!-- column-wrapper -->
</div>
<!--content end-->
@endsection