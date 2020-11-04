<main class="page ourinit_details_page">

    <section class="page-section full_grid">
        <div class="container">
            <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <form method="POST" action="<?php echo base_url() ?>News/editNew/<?php echo $new->newsId ?>" enctype="multipart/form-data"  >
               <h2 class="text_">Ajouter une actualité</h2>
               <div class="contact-form-wrapper">
                
                  <div style="max-height:200px ; max-width: 200px ">
                  <input type="file" class="dropify-fr" data-src- name="media" accept="image/*"  required>
                  </div>

                  <div class="input_bg_body ">
                      <div class="input-field ">
                          <input  type="text" class="input_feild " name="titreFr" required>
                          <label class="feild_label"  for="name_id">titre (FR)</label>
                      </div>
                  </div>
                </div>



                <div class="contact-form-wrapper">
                  <label class="feild_label" for="name_id">Description (FR)</label>
                  <textarea type="text" name="contentFr" id="TinyMCE" class="input_feild " name="contentFr" required></textarea> 
                </div>

                 <input type="submit" class="btn btn-primary" value="envoyer">
            </form>
            </div>
            <div class="col-md-2">
            </div>
            </div>
            </div>
        

        </div>
    </section>

</main>