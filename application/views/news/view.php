<main class="page ourinit_details_page">

    <section class="page-section full_grid">
        <div class="container">
            <div class="breadCrumbWrap ">
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>" class="homebrc">Acceuil</a></li>                    
                  <li class="current"><?php echo $new->titreFr ?></li>
               </ol>
         </div>

         <div class="news_wrapper_new">
             <div class="n_img_box">
                   <div class="inner_">
                       <div class="img-box">
                        <div class="img_ b-lazy" data-src="<?php echo base_url() ?>uploads/news/<?php echo $new->media ?>"></div>
                    </div>
                   </div>
             </div>

             <div class="n_cont_box">
                    <div class="content_">
                        <span class="title_"><?php echo $new->titreFr ?></span>
                        <span class="date_"><?php echo $new->createdDTM ?></span>
                        <div class="text_box">
                           <?php echo $new->contentFr ?>

                        <p>&nbsp;</p>

                        <b>USERNAME</b>
                        </div>

                        
                    </div>
             </div>
         </div>


        </div>
    </section>

</main>