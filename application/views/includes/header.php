
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 13:35:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title><?php echo $pageTitle ?>Tunivisions Foundation </title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="Maiza Koussay Bahaedinne">
    <meta name="description" content="Tunivisions Foundation ">
    <meta name="keywords" content="Tunivisions Foundation">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="<?php echo base_url() ?>assets/favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive-style.css">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors/color-4.css" id="changeColorScheme">

    <style type="text/css">
            .alligator-projects {
        object-fit: cover;
        object-position: 50% 50%;
        width: 100%;
        height: 250px;
    }


    .alligator-blog-view {
        object-fit: cover;
        object-position: 50% 50%;
        width: 100%;
        height: 650px;
    }
    </style>
                    <style>

                html {
                        scroll-behavior: smooth;
                    }   

                .menu {
                  position: fixed;
                  left: 0;
                  top: 50%;
                  width: 8em;
                  margin-top: -1.5em;
                }

                .ulH {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
                  background-color: #333333;
                }

                .liH {
                  float: center;
                }

                .liH a {
                  display: block;
                  color: white;
                  text-align: center;
                  padding: 16px;
                  text-decoration: none;
                }

                .liH a:hover {
                  background-color: #111111;
                }
                </style>
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dropify.min.css">

    <script defer type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
    <script defer src="<?php echo base_url() ?>assets/js/dropify.min.js"></script> 
    <script src="https://cdn.tiny.cloud/1/vqf4xobfz4h7owrwfo1qar98sig5s2yt4cgnuskbexcf8zqh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
          
    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section style--1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg-black">
                <div class="container">
                    <!-- Header Topbar Links Start -->
                    
                    <!-- Header Topbar Links End -->

                    <!-- Header Topbar Social Start -->
                    <ul class="header--topbar-social nav float--left hidden-xs">
                        <li><a href="https://www.facebook.com/Tunivisionsfoundation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/tunivisions_foundation/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/c/TunivisionsFoundation/" target="_blank"><i class="fa fa-youtube"> </i></a> | Tunivisions Foundation</li> 
                    </ul>
                    <!-- Header Topbar Social End -->

                    <!-- Header Topbar Links Start -->
                    <ul class="header--topbar-links nav ff--primary float--right">
                     <!--   <li>
                            <a href="cart.html" title="Cart" data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="badge">3</span>
                            </a>
                        </li>
                    -->
                        <li>
                            <?php if($uid == 0){ ?>
                            <a  data-toggle="modal" data-target="#Login" class="btn-link">
                                <i class="fa mr--8 fa-user-o"></i>
                                <span>Se connecter</span>
                            </a>
                            <?php } if($uid > 0){?>
                            <a  class="btn-link">
                                
                                <li class="dropdown">
                                <a  class="dropdown-toggle" data-toggle="dropdown">
                                    <span><?php echo $name ?></span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <?php if($SA == 1 || $SA == 2 ){ ?>
                                    <li><a href="<?php echo base_url() ?>News/Add"><span>Gerer les nouvelles</span></a></li>
                                    <?php } ?>
                                    <li class="btn-danger" ><a href=""><span>Deconnxion</span></a></li>
                                </ul>
                            </li>
                            </a>
                        <?php } ?>
                        </li>
                    </ul>
                    <!-- Header Topbar Links End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bg-black" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle style--1 collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Header Navbar Logo Start -->
                        <div class="header--navbar-logo navbar-brand">
                            <a href="<?php echo base_url() ?>">
                                <img src="<?php echo base_url() ?>assets/img/Logo-white.png" width="40%" class="normal" alt="">
                                <img src="<?php echo base_url() ?>assets/img/Logo-black.png" width="40%" class="sticky" alt="">
                            </a>
                        </div>
                        <!-- Header Navbar Logo End -->
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--right">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links style--1 nav ff--primary">

                            <li class="active" ><a href="<?php echo base_url() ?>"><span>Acceuil</span></a></li>

                            <li class="dropdown">
                                <a  class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Qui Sommes nous ? </span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>About"><span>Présentation</span></a></li>
                                    <li><a href="<?php echo base_url() ?>About#Vsions"><span>Visions</span></a></li>
                                    <li><a href="<?php echo base_url() ?>About#Missions"><span>Missions</span></a></li>
                                    <li><a href="<?php echo base_url() ?>About#Valeurs"><span>Valeurs</span></a></li>
                                    <li><a href="<?php echo base_url() ?>About#Historique"><span>Historique</span></a></li>
                                </ul>
                            </li>


                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Equipe</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>Team"><span>Top Management</span></a></li>
                                    <li><a href="home-2.html"><span>High School</span></a></li>
                                    <li><a href="home-3.html"><span>University</span></a></li>
                                    <li><a href="home-4.html"><span>Alumni</span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span>Nos Clubs</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url() ?>Team/clubsHighSchool"><span>High School</span></a></li>
                                            <li><a href="<?php echo base_url() ?>Team/clubsUniversity"><span>University</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Media</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>News"><span>Actualité</span></a></li>
                                    

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span>Mediathèque</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url() ?>Media/media/TFM"><span>TFM</span></a></li>
                                            <li><a href="<?php echo base_url() ?>Media/media/TUM"><span>TUM</span></a></li>
                                            <li><a href="<?php echo base_url() ?>Media/media/OFF"><span>OFF</span></a></li>
                                            <li><a href="<?php echo base_url() ?>Media/media/Phoenix"><span>Phoenix</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Projets</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>Projets"><span>We Are Carthage</span></a></li>
                                    <li><a href="<?php echo base_url() ?>Projets"><span>Tunivisions.Link</span></a></li>
                                    <li><a href="<?php echo base_url() ?>Projets"><span>We Are Campers</span></a></li>
                                    <li><a href="<?php echo base_url() ?>Projets"><span>Innov/Hack Challange</span></a></li>
                                </ul>
                            </li>
                           
                            
                            
                      
                          <li><a href="<?php echo base_url() ?>Contact"><span>Contact</span></a></li>

                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->