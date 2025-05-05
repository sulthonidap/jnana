<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $head_title;?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Chioary PHP Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/custom-animate.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-all.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/vegas.min.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />


    <link rel="stylesheet" href="assets/css/module-css/slider.css" />
    <link rel="stylesheet" href="assets/css/module-css/footer.css" />
    <link rel="stylesheet" href="assets/css/module-css/error-page.css" />
    <link rel="stylesheet" href="assets/css/module-css/coming-soon.css" />
    <link rel="stylesheet" href="assets/css/module-css/services.css" />
    <link rel="stylesheet" href="assets/css/module-css/about.css" />
    <link rel="stylesheet" href="assets/css/module-css/counter.css" />
    <link rel="stylesheet" href="assets/css/module-css/courses.css" />
    <link rel="stylesheet" href="assets/css/module-css/event.css" />
    <link rel="stylesheet" href="assets/css/module-css/video.css" />
    <link rel="stylesheet" href="assets/css/module-css/become-volunteer.css" />
    <link rel="stylesheet" href="assets/css/module-css/team.css" />
    <link rel="stylesheet" href="assets/css/module-css/testimonial.css" />
    <link rel="stylesheet" href="assets/css/module-css/faq.css" />
    <link rel="stylesheet" href="assets/css/module-css/blog.css" />
    <link rel="stylesheet" href="assets/css/module-css/newsletter.css" />
    <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="assets/css/module-css/model.css" />
    <link rel="stylesheet" href="assets/css/module-css/donation.css" />
    <link rel="stylesheet" href="assets/css/module-css/contact.css" />
    <link rel="stylesheet" href="assets/css/module-css/google-map.css"/> 
    <?php if(isset($home2)&&!empty($home2)) {?>
    <link rel="stylesheet" href="assets/css/module-css/banner.css" />
    <?php }?>
    <?php if(isset($home2)&&!empty($home2)) {?>
    <link rel="stylesheet" href="assets/css/module-css/join.css" />
    <?php }?>
    <?php if(isset($home2)&&!empty($home2)) {?>
    <link rel="stylesheet" href="assets/css/module-css/brand.css" />
    <?php }?>
    <?php if(isset($home2)&&!empty($home2)) {?>
    <link rel="stylesheet" href="assets/css/module-css/contact.css" />
    <?php }?>
    <?php if(isset($home3)&&!empty($home3)) {?>
    <link rel="stylesheet" href="assets/css/module-css/project.css" />
    <?php }?>
    <?php if(isset($home3)&&!empty($home3)) {?>
    <link rel="stylesheet" href="assets/css/module-css/process.css" />
    <?php }?>
    <?php if(isset($home3)&&!empty($home3)) {?>
    <link rel="stylesheet" href="assets/css/module-css/donation.css" />
    <?php }?>

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <?php if(isset($dark_mode)&&!empty($dark_mode)) {?>
    <link rel="stylesheet" href="assets/css/dark.css" />
    <?php }?>
</head>

<body
<?php if(isset($body_class)&&!empty($body_class)) {?>
class="<?php echo $body_class;?>"
<?php }?>
<?php if(isset($body_bg_image)&&!empty($body_bg_image)) {?>
data-tm-bg-img="<?php echo $body_bg_image;?>"
<?php }?>
>