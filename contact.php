<?php $head_title = "Contact || Chioary || Chioary PHP Template" ?>

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
                    <h2>Contact Us</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span>-</span></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="contact-page__inner">
                    <h3 class="contact-page__title">Send Message</h3>
                    <form class="contact-form-validated contact-page__form" action="assets/inc/sendemail.php"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-page__input-box">
                                    <h4 class="contact-page__input-title">Your Name</h4>
                                    <input type="text" name="name" placeholder="Enter Your Name" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-page__input-box">
                                    <h4 class="contact-page__input-title">Your Mail</h4>
                                    <input type="email" name="email" placeholder="infoflex@info.com" required="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input-box text-message-box">
                                    <h4 class="contact-page__input-title">Message</h4>
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="contact-page__btn"><span>Submit
                                            Now</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Two Start-->
        <section class="google-map-two">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="google-map__two" allowfullscreen></iframe>
            </div>
        </section>
        <!--Google Map Two End-->

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <!--Contact Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="contact-two__content">
                                <h4>Contact Phone</h4>
                                <p><a href="tel:22202066633">+22(2020) 666 33</a></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Two Single End-->
                    <!--Contact Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <span class="icon-pin"></span>
                            </div>
                            <div class="contact-two__content">
                                <h4>Contact Mail</h4>
                                <p><a href="mailto:Chioary@gmail.com">Chioary@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Two Single End-->
                    <!--Contact Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <span class="icon-clock"></span>
                            </div>
                            <div class="contact-two__content">
                                <h4>Office Time</h4>
                                <p>Office 10am - 17pm</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Two Single End-->
                    <!--Contact Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="contact-two__single">
                            <div class="contact-two__icon">
                                <span class="icon-mail"></span>
                            </div>
                            <div class="contact-two__content">
                                <h4>Office Location</h4>
                                <p>4517 Washington Ave.</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Two Single End-->
                </div>
            </div>
        </section>
        <!--Contact Two End-->

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
