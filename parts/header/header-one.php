       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">
       <header class="main-header">
            <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <p class="main-menu__top-text">Welcome to Chioary, a crowdfunding & Charity agency</p>
                        <div class="main-menu__top-btn">
                            <a href="#"> <span class="icon-right-arrow1"></span> Signup Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="index.php"><img src="assets/images/resources/logo-1.png" alt=""></a>
                                </div>
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <?php require_once('parts/header/menu.php'); ?>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-search"></a>
                                </div>
                                <div class="main-menu__user">
                                    <a href="#"><span class="icon-people"></span></a>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="courses-details.php" class="main-menu__btn thm-btn"><span>Donation
                                            Now</span><i class="icon-arrow-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->