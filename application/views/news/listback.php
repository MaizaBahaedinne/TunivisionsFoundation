     <div class="page--header pt--60 pb--60 text-center bg--img" data-overlay="0.85" data-rjs="2" style="background-image: url(&quot;img/page-header-img/bg.jpg&quot;);">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Equipe</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link"><?php echo $page ?></a></li>
                    
                </ul>
            </div>
        </div>



        <div class="section pt--80 pb--40">
            <div class="container">
            <h2>Liste des nouvelles </h2>    <a class="align-right main-btn" data-toggle="modal" data-target="#AddNew" >Ajouter</a>                     
            <table  class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
               <thead>
                  <tr>
                     <th>Titre</th>
                     <th>crée par</th>
                     <th>Crée le</th>
                     <th>statut</th>
                     <th>club</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if(!empty($newsRecords))
                     {
                         foreach($newsRecords as $new)
                         {
                     ?>
                  <tr>
                     <td>
                       <?php echo $new->titreFr ?>
                     </td>
                     <td>
                        <?php echo $new->createdBy->name ?>
                     </td>
                      <td>
                        <?php echo $new->createdDTM ?>
                        

                     </td>
                     <td>
                        <?php if ($new->statut=="0"){  ?>
                               <i class="btn btn-success fa fa-ban"  aria-hidden="true"> Publié</i> 
                            <?php } ?>
                            <?php if ($new->statut=="1"){  ?>
                               <i class="btn btn-danger fa fa-check" aria-hidden="true">Supprimé</i> 
                            <?php } ?>
                     </td>
                     <td>
                          <?php echo $new->club->name ?>                  
                     </td>
                     <td>
                          <a >   <i class="fa fa-pencil"></i> </a>
                          <a ><i class="fa fa-link"></i> </a>
                       
                     </td>
                  </tr>
                  <?php
                     }
                     }
                     ?>
               </tbody>
            </table>
                    
                   
              
            </div>
        </div>       





  <div class="modal fade" id="AddNew">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Ajouter une nouvelle 
                        
                </h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form"  action="<?php echo base_url() ?>News/AddNew" enctype="multipart/form-data"  method="post" >

                      <input type="file" class="dropify-fr" name="media" accept="image/*"  required>
                       <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 500 ko </p>
                                    <p id="error1" style="display:none; color:#FF0000;">
                                          Format d'image invalide! Le format d'image doit être JPG, JPEG.
                                          </p>
                                          <p id="error2" style="display:none; color:#FF0000;">
                                          La taille maximale du fichier est de 500 ko.
                                          </p>
                                    <script type="text/javascript">
                                          $('#submitt').prop("disabled", true);
                                            var a=0;
                                            //binds to onchange event of your input field
                                            $('.dropify-fr').bind('change', function() {
                                              if ($('input:submit').attr('disabled',false)){
                                                 $('input:submit').attr('disabled',true);
                                                 }
                                                var ext = $('#file').val().split('.').pop().toLowerCase();
                                                if ($.inArray(ext, ['jpg','jpeg']) == -1){
                                                   $('#error1').slideDown("slow");
                                                   $('#error2').slideUp("slow");
                                                   a=0;
                                                 }else{
                                                   var picsize = (this.files[0].size);
                                                   if (picsize > 500000){
                                                   $('#error2').slideDown("slow");
                                                 a=0;
                                                 }else{
                                                 a=1;
                                                    $('#error2').slideUp("slow");
                                                 }
                                                    $('#error1').slideUp("slow");
                                                 if (a==1){
                                                 $('input:submit').attr('disabled',false);
                                               }
                                            }
                                        });
                                    </script>
                     
                     <label class="feild_label"  for="name_id">titre (FR)</label>
                     <input  type="text" class="form-control " name="titreFr" required>
                     <label class="feild_label"  for="name_id">titre (FR)</label>
                     <textarea class="form-control" name="contentFr"  id="TinyMCE" rows="20" ></textarea>
                    
                          
                        

                    <br>
                      <input type="submit" class="btn align-right btn-primary" value="Envoyer" />
                    </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->



          