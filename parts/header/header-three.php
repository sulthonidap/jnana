<?php
require_once('parts/app/app.php');
require_once('parts/preloader.php');
require_once('parts/scroll-top-scroll.php');
?>

<div class="page-wrapper">
<header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="container">
                        <div class="main-menu-three__wrapper-inner">
                            <div class="main-menu-three__left">
                                <div class="main-menu-three__logo">
                                    <a href="index.php"><img src="assets/images/resources/logo-1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <?php require_once('parts/header/menu.php'); ?>
                            </div>
                            <div class="main-menu-three__right">
                                <div class="main-menu-three__btn-box">
                                    <a href="courses-details.php" class="main-menu-three__btn thm-btn"><span>Donation
                                            Now</span><i class="icon-arrow-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->