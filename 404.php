<?php $head_title = "404 Error  || Chioary || Chioary PHP Template" ?>

<!-- Header Here -->
<?php require_once('parts/header/header-one.php'); ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg-shape"
                style="background-image: url(assets/images/shapes/page-header-bg-shape.png);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__shape-1">
                        <img src="assets/images/shapes/page-header-shape-1.png" alt="">
                    </div>
                    <h2>Error Page</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span>-</span></li>
                            <li>Error Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="error-page__shape-1 float-bob-x">
                <img src="assets/images/shapes/error-page-shape-1.png" alt="">
            </div>
            <div class="error-page__shape-2 float-bob-y">
                <img src="assets/images/shapes/error-page-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="error-page__inner">
                    <div class="error-page__img">
                        <img src="assets/images/resources/error-page-img-1.png" alt="">
                    </div>
                    <h2 class="error-page__title">The Page You Looking For Doesn’t Exist</h2>
                    <p class="error-page__text">This Page May Been Moved Or You Typed The Wrong URL</p>
                    <div class="error-page__btn-box">
                        <a href="index.php" class="error-page__btn thm-btn"><span>Back To Home</span><i
                                class="icon-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

        <!--Newsletter One Start -->
        <section class="newsletter-one">
            <div class="newsletter-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/newsletter-one-bg.jpg);"></div>
            <div class="container">
                <div class="newsletter-one__inner">
                    <h2 class="newsletter-one__title">Get updated by subscribing to
                        <br> our newsletter</h2>
                    <p class="newsletter-one__text">Join our community of supporters by subscribing to our newsletter!
                        <br> Get the latest updates on our projects,</p>
                    <form class="newsletter-one__form">
                        <div class="newsletter-one__input">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <button type="submit" class="newsletter-one__btn"><i class="icon-arrow-up"></i></button>
                    </form>
                </div>
            </div>
        </section>
        <!--Newsletter One End -->

<?php require_once('parts/footer/footer-one.php'); ?>
