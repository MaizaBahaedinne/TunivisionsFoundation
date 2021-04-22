<!-- Banner Section Start -->
        <section class="banner--section">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                
                <?php foreach ($newsRecords as $new ) { ?>

                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="<?php echo base_url()  ?>uploads/news/<?php echo $new->media ?>" data-overlay="0.25" style="height: 800px;">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80">
                                            <div class="title">
                                                <h1 class="h2 text-white"><?php echo $new->titreFr ?></h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h1 text-white">Connect, Share &amp; Engage</h2>
                                            </div>

                                            <div class="desc fs--16">
                                                <p><?php echo $new->contentFr ?></p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="<?php echo base_url()  ?>News/new/<?php echo $new->newsId?>" class="btn btn-white">Learn More</a>
                                                <a href="#" class="btn btn-primary">See Members</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
                    <?php         }?>
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->


          <!-- Features Section Start -->
        <section class="section bg-lighter pt--80 pb--40">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">3</span></h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Chapter</h3>
                            </div>

                            <div class="desc">
                                <p>High School | University | Alumni</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">350</span>+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Clubs</h3>
                            </div>

                            <div class="desc">
                                <p>dans les lycées et les facultés<br>depuis 2016</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">16</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Tunimateurs</h3>
                            </div>

                            <div class="desc">
                                <p>Tranche d'age entre 13 et 25 ans <br>depuis 2016</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">2</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Project</h3>
                            </div>

                            <div class="desc">
                                <p>Conférence | Formation | Evenement <br>depuis 2016</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->



        <section class="section pt--70 pb--20">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items" id="faqItems" data-scroll-reveal="group">
                            <div class="title pb--20" data-sr-id="12" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <h2 class="h2 fw--600">Question fréquemment posée</h2>
                            </div>

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel" data-sr-id="13" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem01" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Comment puis-je m'inscrire?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="content collapse">
                                    <div class="content--inner">
                                        <p>Il suiffit de remplir le formuliare de l'inscription sur le Tunivisions.link</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="faq--item style--1 panel" data-sr-id="14" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="title">
                                    <h3 class="h6 fw--700 text-darker">
                                        <a href="#faqItem02" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                            <span>Quels sont les avantages d'etre?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="content collapse">
                                    <div class="content--inner">
                                        <p>T</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Items End -->
                    </div>

                    <div class="col-md-7 pb--60">
                        <!-- Download Block Start -->
                        <div class="download--block" data-scroll-reveal="group">
                            <div class="img" data-sr-id="17" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <img src="<?php echo base_url() ?>assets/img/download-img/mobile.png" alt="">
                            </div>

                            <div class="info" data-sr-id="18" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                <div class="title">
                                    <h2 class="h2 fw--600">Joinez-nous sur notre platforme</h2>
                                </div>

                                <div class="content fs--12">
                                    <p>Pour rejoindre notre réseau il suffit de s'inscrire sur notre plateforme Tunivisions.Link</p>
                                </div>

                                <div class="action text-uppercase">
                                    <a href="https://www.tunivisions.link" class="btn btn-sm btn-google"><i class="fa mr--8 fa-play"></i>Visiter Tunivisions.Link</a>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- Download Block End -->
                    </div>
                </div>
            </div>
        </section>



 <!-- Most Popular Groups Section Start -->
        <section class="section bg-lighter pt--70 pb--70">
            <div class="container">
                <!-- Box Nav Start -->
                <div class="box--nav clearfix">
                    <h2 class="h2 fw--600 float--left">Nos Partenaires</h2>

                    <ul class="nav ff--primary float--right">
                      <!--  <li class="active"><a href="#boxItemsTab01" class="btn btn-default" data-toggle="tab">Newest</a></li> -->   
                    </ul>
                </div>
                <!-- Box Nav End -->

                <!-- Tab Content Start -->
                <div class="tab-content">
                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade in active" id="boxItemsTab01">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">


                          
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                   

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html">Nom Partenaire</a></h2>
                                    </div>

                                    
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.html" class="btn ff--primary fw--500 btn-default"></a>

                            <a  class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="boxItemsTab02">
                        <!-- Box Items Start -->
                        <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/01.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-plane"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/02.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-music"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/03.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/04.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-paw"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/05.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-laptop"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->

                            <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo base_url()  ?>assets/img/group-img/06.jpg" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-cutlery"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="#">Technology</a></h2>
                                    </div>

                                    <div class="meta">
                                        <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                        <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Item End -->
                        </div>
                        <!-- Box Items End -->

                        <!-- Box Controls Start -->
                        <div class="box--controls text-center">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <!-- Box Controls End -->
                    </div>

                </div>
                <!-- Tab Content End -->
            </div>
        </section>
        <!-- Most Popular Groups Section End -->


