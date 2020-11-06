<?php 
                     function xTimeAgo ($oldTime, $newTime) {
                      $timeCalc = strtotime($newTime) - strtotime($oldTime);
                      if ($timeCalc > (60*60*24)) {$timeCalc = round($timeCalc/60/60/24) . " jours";}
                      else if ($timeCalc > (60*60)) {$timeCalc = round($timeCalc/60/60) . " heures";}
                      else if ($timeCalc > 60) {$timeCalc = round($timeCalc/60) . " minutes";}
                      else if ($timeCalc > 0) {$timeCalc .= " seconds";}
                      return $timeCalc;
                      }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr" class="ltr">
	
<!-- Mirrored from arabyouthcenter.org/en by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 19:59:11 GMT -->
<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tunivisions Foundation</title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=no, maximum-scale=1.0">
	<link rel="preload" href="<?php echo base_url() ?>assets/frontend/dist/images/logo.svg" as="image">   
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontend/dist/images/favicon.ico">
    <meta name="keywords" content="Tunivisions Foundation" />
	<meta name="author" content="Maiza Koussay Bahaedinne" /> 
    <meta name="description" content="Tunivisions Foundation" />
	<meta name="keywords" content="Tunivisions Foundation" />
	<meta name="author" content="Maiza Koussay Bahaedinne" />
 
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/dist/styles/mainc4ca.css?1"> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/dist/styles/page.css">  

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/dist/styles/devpe4da.css?5"> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/dist/styles/devp.css?5">   
	<style>

        .alligator-profile {
        object-fit: cover;
        object-position: 50% 20%;
        width: 250px;
        height: 250px;
    }
    .loader {
        position: fixed;
        bottom:0px;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        z-index: 99999999;
        background: #ffffff;
        
        margin: auto;
        -webkit-transition: width .5s ease-in-out, height .5s ease-in-out , opacity .3s .5s ease-in-out , visibility .3s .5s ease-in-out;
        -o-transition: width .5s ease-in-out, height .5s ease-in-out , opacity .3s .5s ease-in-out , visibility .3s .5s ease-in-out;
        transition: width .5s ease-in-out, height .5s ease-in-out , opacity .3s .5s ease-in-out , visibility .3s .5s ease-in-out;
    }

    .loader .loader-block {    
        -webkit-transition: all .4s .1s ease-in-out;    
        -o-transition: all .4s .1s ease-in-out;    
        transition: all .4s .1s ease-in-out;
    }
    
    .is-loaded .loader {
        opacity: 0;
        visibility: hidden;
        /*width: 66.5vw; 
        height: calc(100% - 120px);
        left: 7%;
        right: auto;
        bottom: -200px;*/
    }
     
    .is-loaded .loader .loader-block{
        opacity: 0;
        -webkit-transform: translateY(2em) scale(.5);
        -ms-transform: translateY(2em) scale(.5);
        transform: translateY(2em) scale(.5);
     }
    
    @media  only screen and (max-height: 650px) and (max-width: 1300px) and (min-height: 500px) and (min-width: 1024px) {
         .is-loaded .loader {
            /*width: 80%;        
            width: 66.5vw; 
            height: calc(100% - 120px);*/
         }
    
    }

    @media  only screen and (min-width: 768px) and (max-width: 980px) {
        .is-loaded .loader {
            /*width: 80%;        
            height: calc(100% - 130px);*/
         }
    }
	</style>	

    <style>
    	button.login_link {
    		padding: 0 0 6px;
    		background-color: transparent;
    		border: none;
    	}
    </style>

        <script defer src="<?php echo base_url() ?>assets/frontend/dist/scripts/min/dropify.min.js"></script> 
       <script src="https://cdn.tiny.cloud/1/vqf4xobfz4h7owrwfo1qar98sig5s2yt4cgnuskbexcf8zqh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body  class="en home__page __index" >
 <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
	<header id="header">
    <nav class="navbar navbar-light">
        <div class="barnd_box left_">
            <a  href="<?php echo base_url() ?>" title=""><img width="250px" src="<?php echo base_url() ?>assets/frontend/dist/images/logorouge.png" alt="" ></a>
        </div>

        <div class="nav_box">
            <div class="lang-swtich-mob">
                <a class="lang-switch" href="ar.php"><span>ع</span></a>
               
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <div class="burger_box">
                    <span class="line_"></span>
                </div>              
            </button>
            
            <div class="collapse navbar-collapse" id="navbar-main">
                <div class="navbar-inner">
                    <ul class="navbar-nav">
                                <li class="hasChild nav-item">
                                    <a class="nav-link " href="<?php echo base_url() ?>About">À propos</a>
                                    <span class="downArrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ></span>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>About#who-we-are" class="nav-link" title="Who we are">Qui nous sommes ?</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>About#our-vision" class="nav-link" title="Our Vision &amp; Mission">Notre vision &amp; Mission</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>About#our-values" class="nav-link" title="Our Values">Nos valeurs</a>
                                            </li>
                                                                                   
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>About#partners" class="nav-link" title="Partners">Les partenaires</a>
                                            </li>
                                                                            </ul>
                                </li>

                                <li class="hasChild nav-item">
                                    <a class="nav-link " href="en/media.html">Médias</a>
                                    <span class="downArrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ></span>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>Media#newsletter" class="nav-link" title="Newsletter">Newsletter</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>Media#news" class="nav-link" title="News">Nouvelles</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="<?php echo base_url() ?>Media#gallery" class="nav-link" title="Gallery">Galerie</a>
                                            </li>
                                                                            </ul>
                                </li>
                                <li class="hasChild nav-item">
                                    <a class="nav-link " href="<?php echo base_url() ?>Team">Équipe</a>
                                    <span class="downArrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ></span>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li class="nav-item">
                                                <a href="en/team.html#the-team" class="nav-link" title="The Team">L'équipe</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="en/team.html#join-the-team" class="nav-link" title="Join The Team">Rejoins l'équipe</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="en/team.html#our-founder" class="nav-link" title="Our President">Notre président</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="en/team.html#our-leadership" class="nav-link" title="Our Leadership">Notre leadership</a>
                                            </li>
                                                                            </ul>
                                </li>
                                                                                                                <li class="hasChild nav-item">
                                    <a class="nav-link " href="en/impact.html">Notre impact</a>
                                    <span class="downArrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ></span>
                                    <ul class="dropdown-menu" role="menu">
                                                                                    <li class="nav-item">
                                                <a href="en/impact.html#achievement-reports" class="nav-link" title="Achievement Reports">Rapports de réussite</a>
                                            </li>
                                                                                    <li class="nav-item">
                                                <a href="en/impact.html#success-stories-1" class="nav-link" title="Success Stories">Réussites</a>
                                            </li>
                                                                            </ul>
                                </li>
                                                                            <li class="nav-item langSwitch">
                            <a class="nav-link lang-switch" href="ar.html"><span>ع</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>	
<div id="custom-pointer">
    <span></span>
</div>

<div class="loader">
    <div class="loader-block">
        <div class="loader-img">
            <img src="<?php echo base_url() ?>assets/frontend/dist/images/logorouge.png"  alt="">
        </div>
        <div class="linePreloader"></div>
    </div>
</div>


	<ol class="fl-social">
    
            <li><a target="_blank" href="https://www.facebook.com/Tunivisionsfoundation"><i class="icon icon-icons-facebook"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCARV6Ni2vFLsrfNfHENhbyA"><i class="icon icon-icons-youtube"></i></a></li>

                <li><a target="_blank" href="https://twitter.com/ArabYouthCenter"><i class="icon icon-icons-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/arabyouthcenter/"><i class="icon icon-icons-instagram"></i></a></li>
        <li><a href="../../en.html#contact" title="" target="_blank"><i class="icon icon-info-2"></i></a></li>

</ol>



