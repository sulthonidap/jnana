<?php
require_once('parts/app/app.php');
require_once('parts/preloader.php');
require_once('parts/scroll-top-scroll.php');
?>

<div class="page-wrapper">
    <header class="main-header-two">
        <nav class="main-menu main-menu-two">
            <div class="main-menu-two__wrapper">
                <div class="container">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                                <a href="index.php"><img src="assets/images/resources/logo-2.png" alt=""></a>
                            </div>
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <?php require_once('parts/header/menu.php'); ?>
                            </div>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__search-box">
                                <a href="#" class="main-menu-two__search search-toggler icon-search"></a>
                            </div>
                            <div class="main-menu-two__user">
                                <a href="#"><span class="icon-people"></span></a>
                            </div>
                            <div class="main-menu-two__btn-box">
                                <a href="contact.php" class="main-menu-two__btn thm-btn"><span>Donation
                                        Now</span><i class="icon-arrow-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->