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
                                    
            <table  class="table" id="tableid" style="width: cover" >
               <thead>
                  <tr>
                     <th>nom</th>
                     <th>region</th>
                     <th>contact</th>
                     <th>statut</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if(!empty($clubRecords))
                     {
                         foreach($clubRecords as $club)
                         {
                     ?>
                  <tr>
                     <td>
                       <a href="<?php echo base_url()?>Team/Club/<?php echo $club->clubID ?>" > <?php echo $club->name ?></a>
                     </td>
                     <td>
                        <?php echo $club->city ?>
                     </td>
                      <td>
                        <a href="<?php echo $club->email ?>" target="_blank" > Club Tunivisions <?php echo $club->name ?> </a><br>
                        <a href="mailto:<?php echo $club->facebook ?>" target="_blank" ><?php echo $club->facebook ?></a>

                     </td>
                     <td>
                        <?php if ($club->is_Actif=="0"){  ?>
                               <i class="btn btn-danger fa fa-ban"  aria-hidden="true"> Inactif</i> 
                            <?php } ?>
                            <?php if ($club->is_Actif=="1"){  ?>
                               <i class="btn btn-success fa fa-check" aria-hidden="true">Actif</i> 
                            <?php } ?>
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




          