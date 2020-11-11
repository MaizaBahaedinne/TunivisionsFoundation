<section class="home-banner" id="banner">
   <div class="container-fluid">
    <div class="banner-slider">
        <div class="swiper-container banner-swiper-container">
            <div class="swiper-wrapper">
                <?php  foreach ($newsRecords as $new) { ?>
                <?php if ($new->mediaType=="video"){?>
                <div class="swiper-slide slides_">
                    <div class="inner_">

                        <div class="overlay_">
                            <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve" preserveAspectRatio="none">
                                <polygon fill="#2E2C54" points="0,0 50,50 0,50 "/> jjhgh
                            </svg>
                        </div>

                        <div class="videoWrap hidden-xs" style="background-image:url('index.html')">
                            <div id="container">

                            <video id="background_video" loop="" muted="" autoplay="" playinline>
                            	<source src="<?php echo base_url() ?>uploads/news/<?php echo $new->media; ?>" type="video/mp4">
                            	<source src="<?php echo base_url() ?>assets/frontend/dist/video/AYC-banner.webm" type="video/webm;codecs=&quot;vp8, vorbis&quot;">
                            </video>






                            <div id="video_cover" style="display: none;"></div>

                            </div>
                        </div>


                         <div class="content-box">
                            <div class="content_">
                                <h1>

                                    <?php echo $new->titreFr; ?>

                                                                    </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <!-- image -->
                <?php if ($new->mediaType=="photo"){?>
                <div class="swiper-slide slides_">
                                    <div class="inner_">

                                        <div class="overlay_">
                                            <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve" preserveAspectRatio="none">
                                                <polygon fill="#2E2C54" points="0,0 50,50 0,50 "/>
                                            </svg>
                                        </div>

                                        <div class="img-box">
                                            <div class="b-lazy img_" data-src="<?php echo base_url() ?>uploads/news/<?php echo $new->media; ?>"></div>
                                        </div>

                                        <div class="content-box">
                                            <a href="<?php echo base_url ()?>News/new/<?php echo $new->newsId; ?>" target="blank_" class="white_">
                                            <div class="content_">
                                                <h1><p><?php echo $new->titreFr; ?></p></h1>
                                                <div class="read_ ">



                                                </div>
                                            </div>
                                                </a>
                                        </div>
                                    </div>
                 </div>
                  <?php }?>
                <?php } ?>





            </div>
        </div>

    </div>
   </div>

   <div class="banner-navigation">
        <div class="navigator_ banner-prev">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-14 8 38.3 50" style="enable-background:new -14 8 38.3 50;" xml:space="preserve">
                <g id="red">
                    <path class="p-red" d="M-9.1,32.2l29-20c0.3-0.2,0.7-0.2,1-0.1c0.3,0.2,0.5,0.5,0.5,0.9v40c0,0.4-0.2,0.7-0.5,0.9
                        C20.8,54,20.7,54,20.5,54c-0.2,0-0.4-0.1-0.6-0.2l-29-20c-0.3-0.2-0.4-0.5-0.4-0.8C-9.5,32.7-9.3,32.4-9.1,32.2z"/>
                </g>
                <g id="white">
                    <polygon class="p-white" points="-7.8,33 20.2,52.6 20.2,14.3 	"/>
                    <path class="p-black" d="M-9.4,33c0,0.3,0.2,0.6,0.4,0.8l29,20c0.2,0.1,0.4,0.2,0.6,0.2c0.2,0,0.3,0,0.5-0.1c0.3-0.2,0.5-0.5,0.5-0.9V13
                        c0-0.4-0.2-0.7-0.5-0.9c-0.3-0.2-0.7-0.1-1,0.1l-29,20C-9.3,32.4-9.4,32.7-9.4,33z M-6.7,33l26.2-18.1v36.2L-6.7,33z"/>
                </g>
                </svg>

        </div>
       <div class="navigator_ banner-next">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-14 8 38.3 50" style="enable-background:new -14 8 34.6 50;" xml:space="preserve">

                <g id="red">
                    <path class="p-red" d="M19.2,32.2l-29-20c-0.3-0.2-0.7-0.2-1-0.1c-0.3,0.2-0.5,0.5-0.5,0.9v40c0,0.4,0.2,0.7,0.5,0.9
                        c0.1,0.1,0.3,0.1,0.5,0.1c0.2,0,0.4-0.1,0.6-0.2l29-20c0.3-0.2,0.4-0.5,0.4-0.8C19.6,32.7,19.4,32.4,19.2,32.2z"/>
                </g>
                <g id="white">
                    <polygon  class="p-white" points="17.9,33 -10.1,52.6 -10.1,14.3 	"/>
                    <path class="p-black" d="M19.1,32.2l-29-20c-0.3-0.2-0.7-0.2-1-0.1c-0.3,0.2-0.5,0.5-0.5,0.9v40c0,0.4,0.2,0.7,0.5,0.9c0.1,0.1,0.3,0.1,0.5,0.1
                        c0.2,0,0.4-0.1,0.6-0.2l29-20c0.3-0.2,0.4-0.5,0.4-0.8C19.5,32.7,19.3,32.4,19.1,32.2z M-9.5,51.1V14.9L16.7,33L-9.5,51.1z"/>
                </g>
            </svg>


       </div>

   </div>
</section>

<section class="home-section about-us">
    <div class="container-fluid ">
        <div class="about-inner">
            <div class="widget-wrapper"> 
                <div class="widget-box">
                    <ul class="widget-list">
                        <li class="widget-items">
                            <div class="inner_">
                                <div class="icon_">

                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                    <g class="bulb_body">
                                         <path class="st0" fill="#FFFFFF" d="M11.8,15.4h-1.2v-3.3l1.4-1.4c0.1-0.1,0.1-0.4,0-0.5s-0.4-0.1-0.5,0l-1.3,1.3l-1.3-1.3c-0.1-0.1-0.4-0.1-0.5,0
                                        s-0.1,0.4,0,0.5l1.4,1.4v3.3H8.6C8.5,14,8,12.8,7.1,11.6c-0.7-0.9-1-2-0.8-3.1C6.5,6.8,8,5.4,9.7,5.2c0.1,0,0.3,0,0.4,0
                                        c2.2,0,4,1.8,4,4c0,0.9-0.3,1.9-0.9,2.6C12.4,12.7,11.9,14,11.8,15.4 M11.8,18.2H8.7c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h3.1
                                        c0.2,0,0.3,0.1,0.3,0.3C12.1,18.1,11.9,18.2,11.8,18.2 M8.3,16.5c0-0.2,0.1-0.3,0.3-0.3h3.1c0.2,0,0.3,0.1,0.3,0.3s-0.1,0.3-0.3,0.3
                                        H8.6C8.5,16.8,8.3,16.7,8.3,16.5 M14.9,9.1c0-2.6-2.1-4.7-4.7-4.7c-0.2,0-0.4,0-0.6,0C7.6,4.7,5.8,6.4,5.5,8.4
                                        c-0.2,1.3,0.1,2.6,1,3.7c0.9,1.1,1.3,2.4,1.3,3.7c-0.2,0.2-0.3,0.4-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7c-0.1,0.2-0.3,0.4-0.3,0.7
                                        C7.5,18.5,8,19,8.6,19h3.1c0.6,0,1.1-0.5,1.1-1.1c0-0.3-0.1-0.5-0.3-0.7c0.1-0.2,0.3-0.4,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7
                                        c0-1.3,0.4-2.6,1.2-3.5C14.5,11.3,14.9,10.3,14.9,9.1"/>
                                    </g>
                                    <g class="glow">
                                        <path class="st0" fill="#FFFFFF" d="M6.4,13c-0.1-0.1-0.4-0.1-0.5,0l-1.5,1.5c-0.1,0.1-0.1,0.4,0,0.5c0.2,0.1,0.3,0.1,0.5,0l1.5-1.5
                                            C6.6,13.4,6.6,13.2,6.4,13"></path><path class="st0" fill="#FFFFFF" d="M4.8,9.3c0-0.2-0.1-0.4-0.4-0.4H2.3C2.1,8.9,2,9,2,9.3c0,0.2,0.1,0.4,0.4,0.4h2.1C4.7,9.6,4.8,9.4,4.8,9.3"></path><path class="st0" fill="#FFFFFF" d="M5.8,5.4C5.9,5.5,6,5.5,6.1,5.5c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.1-0.4,0-0.5L4.9,3.4c-0.1-0.1-0.4-0.1-0.5,0
                                            s-0.1,0.4,0,0.5L5.8,5.4z"></path><path class="st0" fill="#FFFFFF" d="M10.2,3.8c0.2,0,0.4-0.1,0.4-0.4v-2c0-0.2-0.1-0.4-0.4-0.4C10,1,9.8,1.2,9.8,1.4v2C9.8,3.6,10,3.8,10.2,3.8"></path><path class="st0" fill="#FFFFFF" d="M14.3,5.6c0.1,0,0.2,0,0.3-0.1L16,4c0.1-0.1,0.1-0.4,0-0.5c-0.1-0.1-0.4-0.1-0.5,0L14,4.9
                                            c-0.1,0.1-0.1,0.4,0,0.5C14.1,5.5,14.2,5.6,14.3,5.6"></path><path class="st0" fill="#FFFFFF" d="M18,8.9h-2.1c-0.2,0-0.4,0.1-0.4,0.4s0.1,0.4,0.4,0.4H18c0.2,0,0.4-0.1,0.4-0.4S18.2,8.9,18,8.9"></path>
                                        
                                        
                                        
                                        
                                        <path class="st0" fill="#FFFFFF" d="M16,14.5L14.5,13c-0.1-0.1-0.4-0.1-0.5,0s-0.1,0.4,0,0.5l1.5,1.5c0.2,0.1,0.4,0.1,0.5,0
                                            C16.1,14.9,16.1,14.7,16,14.5"></path>
                                        
                                    </g>
                                    </svg>



                                </div>

                                <div class="number_">
                                    <span class="plus_ counter" data-count="09">3</span>
                                </div>

                                <div class="title_">
                                    <label>Chapitres</label>
                                </div>
                            </div>
                        </li>

                        <li class="widget-items">
                            <div class="inner_">
                                <div class="icon_"> 
                                    <!-- Generator: Adobe Illustrator 24.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                   
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" 
        style="enable-background:new 0 0 20 20;" xml:space="preserve">
        <g class="men _1">
            <path fill="#0A4F98" class="st0" d="M18.7,7.9h-3c-0.4,0-0.7,0.3-0.7,0.7v4.5c0,0.1,0.1,0.2,0.2,0.2H16v3.8c0,0.1,0.1,0.2,0.2,0.2h2
                c0.1,0,0.2-0.1,0.2-0.2v-3.8h0.8c0.1,0,0.2-0.1,0.2-0.2V8.6C19.4,8.2,19.1,7.9,18.7,7.9z"/>
            <path fill="#0A4F98" class="st0" d="M17.2,6.2c0.6,0,1.2-0.5,1.2-1.2c0-0.6-0.5-1.2-1.2-1.2S16.1,4.4,16.1,5C16.1,5.7,16.6,6.2,17.2,6.2z"/>
            <path fill="#FFFFFF" class="st1" d="M18.7,7.4h-3c-0.7,0-1.3,0.6-1.3,1.3v4.5c0,0.4,0.4,0.8,0.8,0.8h0.2v3.2c0,0.4,0.4,0.8,0.8,0.8h2
                c0.4,0,0.8-0.3,0.8-0.8v-3.2h0.2c0.4,0,0.8-0.3,0.8-0.8V8.6C20,7.9,19.4,7.4,18.7,7.4z M19.4,13.2c0,0.1-0.1,0.2-0.2,0.2h-0.8v3.8
                c0,0.1-0.1,0.2-0.2,0.2h-2c-0.1,0-0.2-0.1-0.2-0.2v-3.8h-0.8c-0.1,0-0.2-0.1-0.2-0.2V8.6c0-0.4,0.3-0.7,0.7-0.7h3
                c0.4,0,0.7,0.3,0.7,0.7V13.2z"/>
            <path fill="#FFFFFF" class="st1" d="M17.2,6.7c0.9,0,1.7-0.8,1.7-1.7c0-0.9-0.8-1.7-1.7-1.7c-0.9,0-1.7,0.8-1.7,1.7C15.5,6,16.3,6.7,17.2,6.7z
                M17.2,3.9c0.6,0,1.2,0.5,1.2,1.2c0,0.6-0.5,1.2-1.2,1.2S16.1,5.7,16.1,5C16.1,4.4,16.6,3.9,17.2,3.9z"/>
        </g>
        <g class="men _2">
            <path fill="#0A4F98" class="st0" d="M4.3,7.9h-3c-0.4,0-0.7,0.3-0.7,0.7v4.5c0,0.1,0.1,0.2,0.2,0.2h0.8v3.8c0,0.1,0.1,0.2,0.2,0.2h2
                c0.1,0,0.2-0.1,0.2-0.2v-3.8h0.8c0.1,0,0.2-0.1,0.2-0.2V8.6C5,8.2,4.7,7.9,4.3,7.9z"/>
            <path fill="#0A4F98" class="st0" d="M2.8,6.2c0.6,0,1.2-0.5,1.2-1.2c0-0.6-0.5-1.2-1.2-1.2S1.6,4.4,1.6,5C1.6,5.7,2.2,6.2,2.8,6.2z"/>
            <path fill="#FFFFFF" class="st1" d="M4.3,7.4h-3C0.6,7.4,0,7.9,0,8.6v4.5c0,0.4,0.4,0.8,0.8,0.8H1v3.2C1,17.6,1.4,18,1.8,18h2
                c0.4,0,0.8-0.3,0.8-0.8v-3.2h0.2c0.4,0,0.8-0.3,0.8-0.8V8.6C5.6,7.9,5,7.4,4.3,7.4z M5,13.2c0,0.1-0.1,0.2-0.2,0.2H4v3.8
                c0,0.1-0.1,0.2-0.2,0.2h-2c-0.1,0-0.2-0.1-0.2-0.2v-3.8H0.8c-0.1,0-0.2-0.1-0.2-0.2V8.6c0-0.4,0.3-0.7,0.7-0.7h3
                C4.7,7.9,5,8.2,5,8.6V13.2z"/>
            <path fill="#FFFFFF" class="st1" d="M2.8,6.7C3.7,6.7,4.5,6,4.5,5c0-0.9-0.8-1.7-1.7-1.7C1.9,3.3,1.1,4.1,1.1,5C1.1,6,1.9,6.7,2.8,6.7z M2.8,3.9
                c0.6,0,1.2,0.5,1.2,1.2c0,0.6-0.5,1.2-1.2,1.2S1.6,5.7,1.6,5C1.6,4.4,2.2,3.9,2.8,3.9z"/>
        </g>

<g>
    <path fill="#0A4F98" class="st0" d="M11.9,7H8.1C7.6,7,7.2,7.4,7.2,7.9v5.7c0,0.2,0.1,0.3,0.3,0.3h1v4.8c0,0.2,0.1,0.3,0.3,0.3h2.5
        c0.2,0,0.3-0.1,0.3-0.3v-4.8h1c0.2,0,0.3-0.1,0.3-0.3V7.9C12.8,7.4,12.4,7,11.9,7z"/>
    <path fill="#0A4F98" class="st0" d="M10,4.8c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5S8.5,2.5,8.5,3.3C8.5,4.1,9.2,4.8,10,4.8z"/>
    <path fill="#FFFFFF" class="st1" d="M11.9,6.3H8.1C7.2,6.3,6.5,7,6.5,7.9v5.7c0,0.5,0.4,1,1,1h0.3v4.1c0,0.5,0.4,1,1,1h2.5c0.5,0,1-0.4,1-1v-4.1
        h0.3c0.5,0,1-0.4,1-1V7.9C13.5,7,12.8,6.3,11.9,6.3z M12.8,13.6c0,0.2-0.1,0.3-0.3,0.3h-1v4.8c0,0.2-0.1,0.3-0.3,0.3H8.7
        c-0.2,0-0.3-0.1-0.3-0.3v-4.8h-1c-0.2,0-0.3-0.1-0.3-0.3V7.9C7.2,7.4,7.6,7,8.1,7h3.8c0.5,0,0.9,0.4,0.9,0.9V13.6z"/>
    <path fill="#FFFFFF" class="st1" d="M10,5.5c1.2,0,2.2-1,2.2-2.2c0-1.2-1-2.2-2.2-2.2c-1.2,0-2.2,1-2.2,2.2C7.8,4.5,8.8,5.5,10,5.5z M10,1.9
        c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5S8.5,4.1,8.5,3.3C8.5,2.5,9.2,1.9,10,1.9z"/>
</g>

</svg> 


                                    </div>

                                <div class="number_">
                                    <span class="plus_ counter" data-count="08">10 000</span>
                                </div>

                                <div class="title_">
                                    <label>Tunimateurs</label>
                                </div> 
                            </div>
                        </li>

                        <li class="widget-items">
                            <div class="inner_">
                                <div class="icon_">
                                    <svg version="1.1" class="hand" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 28.4 20" style="enable-background:new 0 0 28.4 20;" xml:space="preserve">
                                        <g class="h_2">
                                            <path style="fill:none;stroke:#FFFFFF;stroke-width:0.7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
                                            M22.1,11.9l-1.3,0.8c0,0-6.5,3.9-7.8,3.7s-4.5-2.6-4.3-3.9s1-3.3,2.4-3.8"/>
                                        </g>
                                        <g class="h_1">
                                            <path style="fill:none;stroke:#FFFFFF;stroke-width:0.7;stroke-miterlimit:10;" d="M5.3,4.8v7.8h2.6c0-0.1,1.8-5.3,1.8-6.6
                                                C9.7,6,8.8,4.8,5.3,4.8z"/>
                                            <path style="fill:#0A4F98;stroke:#FFFFFF;stroke-width:0.7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
                                                M9.7,6.5L13.6,7l2.7,1.9l5,4.1c0.9,1.7-0.9,1.9-0.9,1.9l-3-2.8l2.6,2.6c0,1.3-1.4,1.1-1.4,1.1l-2.5-2.4l2.2,2.2
                                                c0,1.3-1.3,1.3-1.3,1.3l-2.6-2.6l2.2,2.2c-0.9,2.2-7.9-4.7-7.9-4.7L9.7,6.5z"/>
                                        </g>
                                        <g class="h_2">
                                            <path style="fill:none;stroke:#FFFFFF;stroke-width:0.7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
                                                M19,5.3c0,0,2.2,5.2,2.6,6.9h2.6V4.5C24.2,4.5,20.7,4.5,19,5.3z"/>
                                            <path style="fill:#0A4F98;stroke:#FFFFFF;stroke-width:0.7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
                                                M18.9,6.1l-2-0.8c-3-1.7-4.7,0.4-4.7,0.4S11.9,6,11.6,6.3c-0.7,0.8-1.5,2.2-0.4,2.5c1.7,0.4,1.7-0.9,2.2-0.9s1.3-0.4,1.3-0.4
                                                l5.2,4.3"/>
                                        </g>
                                        </svg>
                                </div>

                                <div class="number_">
                                    <span class="plus_ counter" data-count="03">20</span>
                                </div>
 
                                <div class="title_">
                                    <label>Partenaires</label>
                                </div>
                            </div>
                        </li>

                        <li class="widget-items">
                            <div class="inner_">
                                <div class="icon_">

                                   <svg version="1.1" class="folderSvgBody" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                    <path fill="#ffffff" class="st0" d="M16.3,13l-3,2.8v-2.1c0-0.4,0.3-0.7,0.7-0.7L16.3,13L16.3,13z M3.8,15V6.9h13.1v5.5h-2.8
                                        c-0.8,0-1.4,0.6-1.4,1.4v2.5H5C4.3,16.3,3.8,15.7,3.8,15 M5,3.7h10.6c0.7,0,1.3,0.6,1.3,1.3v1.2H3.8V5C3.8,4.3,4.3,3.7,5,3.7
                                        M17.6,12.7V5c0-1.1-0.9-2-2-2H5c-1.1,0-2,0.9-2,2V15c0,1.1,0.9,2,2,2h8c0.1,0,0.2,0,0.3-0.1l4.2-4C17.6,12.9,17.6,12.8,17.6,12.7"
                                        />
                                    <path fill="#ffffff" class="svgline _1" d="M5.6,9.6h6.1c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4H5.6C5.4,8.9,5.3,9,5.3,9.2S5.4,9.6,5.6,9.6"/>
                                    <path fill="#ffffff" class="svgline _2" d="M5.7,11.6h8.8c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4H5.7c-0.2,0-0.4,0.2-0.4,0.4S5.5,11.6,5.7,11.6"/>
                                    <path fill="#ffffff" class="svgline _3" d="M9,13H5.7c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4H9c0.2,0,0.4-0.2,0.4-0.4C9.4,13.2,9.2,13,9,13"/>
                                    </svg>



                                </div>

                                <div class="number_">
                                    <span>2000 </span>
                                </div>

                                <div class="title_">
                                    <label>Événements et initiatives</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="about-content-wrapper">
 
                <div class="about-img">            
                    <div class="inner_">

                         

                        <div class="img-box">
                            <div class="img_ b-lazy"  data-src="<?php echo base_url() ?>uploads/nizar.jpg"></div>
                        </div>
                    </div>                  

                   

                </div> 

                <div class="about-center-text">
                    <div class="inner_">
                        <span class="text_">
                            <p>Arab Youth are our advisors, &amp; they are well aware of how to accomplish their personal visions &amp; strategies. We have great faith in them &amp; unlimited confidence in their abilities.</p>
                        </span>
                    </div>
                     <div class="image-title">
                        <span class="bold_">Nizar Chaari</span>
                        <span class="italic_">Président du group Tunivisions </span>
                    </div>

                </div>

                
                                
                
            </div>
        </div>
    </div> 
</section>