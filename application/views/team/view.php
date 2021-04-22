<div class="cover--header pt--80 text-center bg--img" data-overlay="0.6" data-overlay-color="white" data-rjs="2" style="background-image: url(&quot;img/cover-header-img/bg-02.jpg&quot;);">
   <div class="container">
      <h2>Club Tunivisions <?php echo $clubInfo->name ?> </h2>
      <i class="fa fa-birthday-cake"></i>&nbsp;&nbsp;Crée le : <?php echo $clubInfo->birthday ?> </br>
      <i class="fa fa-users"></i>&nbsp;&nbsp;<?php echo count($members) ?> Membre actif</br>
      <i class="fa fa-users"></i>&nbsp;&nbsp;<?php echo count($projectRecords) ?> Activités</br>
      <i class="fa fa-facebook-square"></i>&nbsp;&nbsp;<a href="<?php echo $clubInfo->email ?>" title="">club Tunivisions <?php echo $clubInfo->name ?></a></br>
      <i class="fa fa-at"></i>&nbsp;&nbsp;<?php echo $clubInfo->facebook ?></br>
      <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
      </div>
   </div>
</div>
<section class="page--wrapper pt--80 pb--20" style="transform: none;">
   <div class="container" style="transform: none;">
   <div class="row" style="transform: none;">
   <!-- Main Content Start -->
   <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
      <!-- Load More Button Start -->
      <!-- Load More Button End -->
      <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
         <div class="main--content-inner drop--shadow">
            <!-- Content Nav Start -->
            <div class="content--nav pb--30">
               <ul class="nav nav-tabs  nav ff--primary fs--14 fw--500 bg-lighter">
                  <li class="btn   nav-item">
                     <a class="active" href="#About" data-toggle="tab" data-ripple="">Bureau Executif</a>
                  </li>
                  <li class="btn  nav-item">
                     <a href="#Membres" data-toggle="tab" data-ripple="">Membres</a>
                  </li>
                  <li class="btn  nav-item">
                     <a href="#Projects" data-toggle="tab" data-ripple="">Activités</a>
                  </li>
               </ul>
            </div>
            <!-- Content Nav End -->
            <div class="tab-content">
               <div class="tab-pane " id="About">
                  <div class="cover--avatar" data-overlay="0.3" data-overlay-color="primary">
                     <img src="img/cover-header-img/avatar-02.jpg" alt="">
                  </div>
                  <div class="cover--user-name">
                     <h4 class="h3 fw--600">Food Recipes</h4>
                  </div>
                  <div class="cover--user-activity">
                     <p><i class="fa mr--8 fa-clock-o"></i>Président</p>
                  </div>
                  <div class="cover--avatars">
                     <p>Vice Président</p>
                     <ul class="nav">
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-01.jpg" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-02.jpg" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-03.jpg" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-03.jpg" alt="">
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="cover--avatars">
                     <p>Assitants</p>
                     <ul class="nav">
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-01.jpg" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-02.jpg" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-03.jpg" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">
                           <img src="img/group-img/admin-avatar-03.jpg" alt="">
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane" id="Membres">
                  <style>
                     .wrapper1 {
                     display: grid;
                     grid-template-columns: repeat(3, 1fr);
                     grid-gap: 10px;
                     }
                  </style>
                  <input type="text" id="membreSearch" class="form-control" onkeyup="searchMembrer()" style="width: cover" placeholder="Chercher un membre">
                  <br><br>
                  <ul id="myUL" class="wrapper1">
                     <?php foreach ($members as $member ) {?>
                     <li style="list-style:none;">
                        <a href="#">
                           <div class="row">
                              <div class="col-md-3 member--item online ">
                                 <div class="img img-circle">
                        <a href="member-activity-personal.html" class="btn-link">
                        <img src="<?php echo base_url() ?>assets/img/members-img/member-12.jpg" alt="">
                        </a>
                        </div>
                        </div>
                        <div class="col-md-9">
                        <h5><?php echo $member->name?></h5>
                        <b><?php echo $member->role?></b> <?php echo $member->cellule?><br>
                        membre depuis <?php echo $member->affectedYear?> 
                        </div>
                        </div>    
                        </a>
                     </li>
                     <?php } ?>
                  </ul>
                  <script>
                     function searchMembrer() {
                       // Declare variables
                       var input, filter, ul, li, a, i, txtValue;
                       input = document.getElementById('membreSearch');
                       filter = input.value.toUpperCase();
                       ul = document.getElementById("myUL");
                       li = ul.getElementsByTagName('li');
                     
                       // Loop through all list items, and hide those who don't match the search query
                       for (i = 0; i < li.length; i++) {
                         a = li[i].getElementsByTagName("h5")[0];
                         txtValue = a.textContent || a.innerText;
                         if (txtValue.toUpperCase().indexOf(filter) > -1) {
                           li[i].style.display = "";
                         } else {
                           li[i].style.display = "none";
                         }
                       }
                     }
                  </script>
               </div>
               <div class="tab-pane" id="Projects">
                  <style>
                     .wrapper2 {
                     display: grid;
                     grid-template-columns: repeat(1, 1fr);
                     grid-gap: 10px;
                     }
                  </style>
                  <input type="text" id="projectSearch" class="form-control" onkeyup="searchProject()" style="width: cover" placeholder="Chercher un projet">
                  <br><br>
                  <ul id="myULP" class="wrapper2">
                     <?php foreach ($projectRecords as $project ) {?>
                     <li style="list-style:none;">
                        <div class="activity--info fs--14" style="border-radius: 30px ;  padding: 10px;" >
                           <div class="activity--header">
                              <p><?php echo $project->titre ?></p>
                           </div>
                           <div class="activity--meta fs--12">
                              <p><i class="fa mr--8 fa-clock-o"></i><?php echo $project->startDate ?> <i class="fa mr--8 fa-clock-o"></i><?php echo $project->endDate ?></p>
                           </div>
                           <div class="activity--content">
                              <p><?php echo $project->description ?></p>
                           </div>
                        </div>
                        <hr>
                     </li>
                     <?php } ?>
                  </ul>
                  <script>
                     function searchProject() {
                       // Declare variables
                       var input, filter, ul, li, a, i, txtValue;
                       input = document.getElementById('projectSearch');
                       filter = input.value.toUpperCase();
                       ul = document.getElementById("myULP");
                       li = ul.getElementsByTagName('li');
                     
                       // Loop through all list items, and hide those who don't match the search query
                       for (i = 0; i < li.length; i++) {
                         a = li[i].getElementsByTagName("p")[0];
                         txtValue = a.textContent || a.innerText;
                         if (txtValue.toUpperCase().indexOf(filter) > -1) {
                           li[i].style.display = "";
                         } else {
                           li[i].style.display = "none";
                         }
                       }
                     }
                  </script>
               </div>
            </div>
            <!-- Activity List End -->
            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
               <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                  <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 1892px;"></div>
               </div>
               <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                  <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- Main Content End -->
      <!-- Main Sidebar Start -->
      <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
      </div>
   </div>
</section>