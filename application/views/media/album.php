		 <ul class=" menu ulH">
     		<?php foreach ($albumRecords as $album ) { ?>
     			<li class="liH" ><a href="#<?php echo $album->albumId ?>"><?php echo $album->titre ?></a></li>
     		<?php } ?>
     	</ul>

		<div class="page--header pt--60 pb--60 text-center bg--img" data-overlay="0.85" data-rjs="2" style="background-image: url(&quot;img/page-header-img/bg.jpg&quot;);">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Mediathèque</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a  class="btn-link">Mediathèque</a></li>
                    
                </ul>
            </div>
        </div>

        


        <?php foreach ($albumRecords as $album ) { ?>

         <div class="section pt--80 pb--40" id="<?php echo $album->albumId ?>">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-8 pb--40">
                        <div class="video--popup style--1" data-overlay="0.3">
                                <img src="<?php echo base_url() ?>assets/img/why-choose-us-img/video-poster-1.jpg" alt="" >

                                <a href="<?php echo $album->officiel ?>" lass="btn-link"  data-overlay="0.1"  data-trigger="video_popup">
                                               
                                                 <span><i class="fa fa-play"></i></span>
                                            </a>
                           
                            </div>
                    </div>

                    <div class="col-md-4 pb--40">
                        <!-- Text Block Start -->
                        <div class="text--block">
                            <div class="content fs--14">


                                <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
 
                            <!-- Content Nav End -->

                           

                            <!-- Gallery Header Start -->
                            <div class="gallery--header pb--15 clearfix">
                                <div class="gallery--title float--left">
                                    <h3 class="h3 fw--500 text-default"><?php echo $album->titre ?></h3>
                                </div>
                                <?php  if( $uid != 0 ) { if ($SA == 0) { ?>
                                <div class="gallery--upload-btn ff--primary float--right">
                                    <a href="#" class="btn btn-sm btn-default"><i class="mr--10 fa fa-cloud-upload"></i>Charger</a>
                                </div>
                            	<?php } } ?>
                            </div>
                            <!-- Gallery Header End -->

                            <!-- Gallery Items Start -->
                            <div class="gallery--items">
                                <?php echo $album->description ?>
                                <div class="row gutter--15 AdjustRow" style="position: relative; height: 100px;">
                                    
         
                                   <?php  foreach ($album->albumcontent as $content) { ?> 

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15" style="position: absolute; left: 543px; top: 0px;">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="<?php echo base_url() ?>assets/img/gallery-img/thumb-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

									<?php } ?>
                                   
                                   
                                </div>
                            </div>
                            <!-- Gallery Items End -->
                        </div>

                                

                                

                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>



     