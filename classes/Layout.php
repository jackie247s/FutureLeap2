<?php 
    abstract class Layout {
        protected function _renderHeader(){
            ?>
            <!DOCTYPE html>
            <!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
            <!--[if (gte IE 9)|!(IE)]><!-->
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
            <head>
                <!-- Basic Page Needs -->
                <meta charset="UTF-8">
                <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
                <title>FutureLeap</title>

                <meta name="author" content="themsflat.com">

                <!-- Mobile Specific Metas -->
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

                <!-- Boostrap style -->
                <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">

                <!-- Theme style -->
                <link rel="stylesheet" type="text/css" href="stylesheets/fancybox.css">

                <!-- REVOLUTION LAYERS STYLES -->
                <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
                <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

                <!-- Theme style -->
                <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

                <!-- Reponsive -->
                <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

                <!-- Colors -->
                <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

                <!-- Custom -->
                <link rel="stylesheet" type="text/css" href="stylesheets/custom.css">

                <!-- Favicon -->
                <link href="./images/icons/favicon.png" rel="shortcut icon">

            </head>
            <body class="header_sticky ">

                <div class="preloader">
                    <div class="dizzy-gillespie"></div>
                </div><!-- /.preloader -->

                <div class="boxed">

            <?php
        }

        protected function _renderNavbar(){
            ?>
            <section id="header" class="header">
                <div class="container-fluid">
                    <div id="logo" class="logo float-left">
                        <a href="index.php" title="Yolo">
                            FutureLeap
                        </a>
                    </div><!-- /.logo -->
                    
                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                        <div id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="">
                                    <a href="index.php" title="">
                                        Home
                                    </a>
                                </li><!-- /.has-menu-mega -->
                                <li class="">
                                    <a href="about.php" title="">
                                        About Us
                                    </a>
                                </li><!-- /.has-submenu -->
                                <li class="">
                                    <a href="contact-us.php" title="">
                                        Contact Us
                                    </a>
                                </li><!-- /.has-submenu -->
                                <li class="has-submenu">
                                    <a href="#" title="">
                                        Divisions
                                    </a>
                                    <div class="submenu">
                                        <ul>
                                            <li class="">
                                                <a href="divisions.php?division=mep" title="">MEP</a>
                                            </li>
                                            <li class="">
                                                <a href="divisions.php?division=construction" title="">Construction</a>
                                            </li>
                                            <li class="">
                                                <a href="divisions.php?division=firefighting" title="">Firefighting</a>
                                            </li>
                                            <li class="">
                                                <a href="divisions.php?division=infrastructure" title="">Infrastructure</a>
                                            </li>
                                            <li class="">
                                                <a href="divisions.php?division=facilitymanagement" title="">Facility Management</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li><!-- /.has-submenu -->
                            </ul><!-- /.menu -->
                        </div><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                    <div class="clearfix"></div>
                </div><!-- /.container-fluid -->
            </section><!-- /.header -->
            <?php
        }

        abstract protected function _renderContent();

        protected function _renderFooter() {
            ?>
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="widget-ft widget-contact">
                                        <h3 class="title">CONTACT US</h3>
                                        <ul class="flat-contact">
                                            <li class="contact">
                                                <p class="phone">+971 4887 3353</p>
                                                <p class="email">info@futureleap.ae</p>
                                            </li>
                                            <li class="address">
                                                <p>Office 656, Acico Business Park, Port Saeed<br/>Deira, Dubai</p>
                                            </li>
                                            <li class="open-hours">
                                                <p>Open hours: 8.00-18.00 Mon-Fri</p>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget-ft widget-contact -->
                                </div><!-- /.col-md-3 -->
                                <div class="offset-md-6 col-md-3">
                                    <div class="widget-ft widget-link-cat">
                                        <h3 class="title">OUR POLICIES</h3>
                                        <ul class="one-half">
                                            <li>
                                                <a href="ehspolicy.php" title="">EHS Policy</a>
                                            </li>
                                            <li>
                                                <a href="qualitypolicy.php" title="">Quality Policy</a>
                                            </li>
                                        </ul><!-- /.one-half -->
                                    </div><!-- /.widget-ft widget-link-cat -->
                                </div><!-- /.col-md-3 -->
                                
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </footer><!-- /.footer -->

                    <section class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="social-ft">
                                        <li>
                                            <a href="" title="Facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="Google Plus">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="Instagram">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="Pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="Tripadvisor">
                                                <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul><!-- /.social-ft -->
                                    <p class="copyright">Copyright ©2017 <a href="#" title="">FutureLeap</a>. All Rights Reserved</p>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.footer-bottom -->
                    
                    <div class="button-go-top">
                        <a href="#" title="" class="go-top">
                            <i class="fa fa-chevron-up"></i>
                        </a><!-- /.go-top -->
                    </div><!-- /.button-go-top -->

                </div><!-- /.boxed -->

                    <!-- Javascript -->
                    <!-- <script type="text/javascript" src="javascript/jquery.min.js"></script>
                    <script type="text/javascript" src="javascript/tether.min.js"></script>
                    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
                    <script type="text/javascript" src="javascript/jquery-validate.js"></script>
                    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
                    <script type="text/javascript" src="javascript/easing.js"></script>
                    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
                    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
                    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
                    
                    <script type="text/javascript" src="javascript/parallax.js"></script>
                    <script type="text/javascript" src="javascript/jquery.final-countdown.js"></script>
                    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
                    <script type="text/javascript" src="javascript/switcher.js"></script>

                    <script type="text/javascript" src="javascript/main.js"></script> -->
                    <script type="text/javascript" src="javascript/complete.min.js"></script>

            </body>	
            </html>
            <?php
        }

        abstract public function renderPage();
    }
?>