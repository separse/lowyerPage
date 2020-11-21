<!doctype html>

<html lang="fa" dir="rtl">

    <head>

        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

        <!-- jquery -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
        <?php wp_head(); ?>

    </head>

    <body>

    <!-- Back To Top Button -->
    <div id="back2Top" class="fix-btn divshadow">
        <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>
    
    <!-- Start Sticky Navbar -->
    <div id="stickyNavbar" class="hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 pull-right">
                    <div class="stickyLogo">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>//img/separse-logo.png" alt="لوگو" title="لوگو">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 pull-right">
                    <div class="headerMenu">
                        <?php wp_nav_menu(array ('theme-location' => 'main-menu')); ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-7 hidden-xs pull-right">
                    <div class="headerSocialMedia">
                        <ul>
                            <li><a href="#"><i id="facebookLogo" class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i id="telegramLogo" class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="#"><i id="whatsappLogo" class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i id="twitterLogo" class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i id="instagramLogo" class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Navbar -->

    <!-- Start Header -->
    <header class="bodyHeader">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 pull-right">
                    <div class="headerLogo">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/img/separse-logo.png" alt="الکس" title="لوگو">
                        </a>
                        <h2>سپارسه</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 hidden-sm hidden-xs pull-right">
                    <div class="headerMenu">
                        <?php wp_nav_menu(array ('theme-location' => 'main-menu')); ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-7 hidden-xs pull-right">
                    <div class="headerSocialMedia">
                        <ul>
                            <li><a href="#"><i id="facebookLogo" class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i id="telegramLogo" class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="#"><i id="whatsappLogo" class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i id="twitterLogo" class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i id="instagramLogo" class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- End Header -->