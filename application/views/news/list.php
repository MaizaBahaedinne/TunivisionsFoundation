<div class="page--header pt--60 pb--60 text-center bg--img" data-overlay="0.85" data-rjs="2" style="background-image: url(&quot;img/page-header-img/bg.jpg&quot;);">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Actualité</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Actualité</span></li>
                </ul>
            </div>
        </div>


<section class="page--wrapper pt--80 pb--20" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <!-- Main Content Start -->
                <div class="main--content col-md-12 pb--30" data-trigger="stickyScroll" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div class="main--content-inner">
                            <div class="row MasonryRow" style="position: relative; height: 1683.48px;">


                                

                                <?php foreach ($newsRecords as $new ) { ?> 

                                <div class="col-sm-6 col-xs-12 pb--30" style="position: absolute; left: 0px; top: 1158px;">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom" data-sr-id="7" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: box-shadow 0.25s ease-in-out 0s, -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: box-shadow 0.25s ease-in-out 0s, transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                        <!-- Post Audio Start -->
                                        <div class="post--audio embed-responsive embed-responsive-16by9">
                                             <img src="<?php echo base_url()  ?>uploads/news/<?php echo $new->media ?>" >
                                        </div>
                                        <!-- Post Audio End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-06.jpg" alt="">
                                                            <span>Randall E. Dempsey</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>17 Mar 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="<?php echo base_url()  ?>News/new/<?php echo $new->newsId ?>" class="btn-link"><?php echo $new->titreFr ?></a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Music</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Audio</span></a>
                                                        <a href="#"><span>Sound</span></a>
                                                        <a href="#"><span>Audio</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p><?php echo $new->contentFr ?></p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.html" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <?php         }?>

                                <div class="col-xs-12 pb--30" style="position: absolute; left: 0px; top: 1623px;">
                                    <!-- Page Count Start -->
                                    <div class="page--count">
                                        <label class="ff--primary fs--14 fw--500 text-darker">
                                            <span>Viewing</span>

                                            <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                            <input type="number" name="page-count" value="01" class="form-control form-sm">
                                            <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                            <span>of 68</span>
                                        </label>
                                    </div>
                                    <!-- Page Count End -->
                                </div>
                            </div>
                        </div><div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 1724px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
           
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>