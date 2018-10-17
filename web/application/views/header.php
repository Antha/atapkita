<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> <?php echo $titlebrowser ?> </title>

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url()?>/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo base_url()?>/assets/images/favicon/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="<?php echo base_url()?>/assets/images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo base_url()?>/assets/images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo base_url()?>/assets/images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="<?php echo base_url()?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?php echo base_url()?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/bootstrap-select.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/my.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->
       
        <?php if(!isset($headeroff)){ ?>
        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <ul class="contact-info">
                                <li><i class="fa fa-phone-square"></i> Phone: +123 (4567) 890</li>
                                <li><i class="fa fa-clock-o"></i> Mon - Fri: 9 am - 7 pm</li>
                            </ul>
                        </div>
                        <div class="col col-sm-6">
                            <div class="language">
                                <span><i class="fa fa-globe"></i> Lang:</span>
                                <div class="select-box">
                                    <select class="selectpicker" id="language-select">
                                        <option>Eng</option>
                                        <option>Ban</option>
                                        <option>Tur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><img src="<?php echo base_url()?>/assets/images/logo.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home style 1</a></li>
                                    <li><a href="index-2.html">Home style 2</a></li>
                                    <li><a href="index-3.html">Home style 3</a></li>
                                    <li><a href="index-4.html">Home style 4</a></li>
                                    <li><a href="index-5.html">Home style 5</a></li>
                                    <li><a href="index-6.html">Home style 6</a></li>
                                    <li><a href="index-7.html">Home style 7</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#Level3">Third level</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Level3</a></li>
                                            <li><a href="#">Level3</a></li>
                                            <li><a href="#">Level3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">All services</a></li>
                                    <li><a href="service-single-finance.html">Financial Planning</a></li>
                                    <li><a href="service-single-management.html">Wealth Management</a></li>
                                    <li><a href="service-single-vc.html">VC Funding </a></li>
                                    <li><a href="service-single-investment.html">Investment Planning </a></li>
                                    <li><a href="service-single-insurance.html">Personal Insurance</a></li>
                                    <li><a href="service-single-mutual.html">Mutual Funds</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Case studies</a>
                                <ul class="sub-menu">
                                    <li><a href="case-studies.html">Case studies</a></li>
                                    <li><a href="case-study-single.html">Case study single</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="projects-3-col.html">Projects 3 col </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-default.html">Blog Default</a></li>
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="search-social">
                        <div class="header-search-area">
                            <div class="header-search-form">
                                <form class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div>
                                <button class="btn open-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
        <?php } ?>