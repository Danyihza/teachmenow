<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Teachmenow - Aplikasi pintar pendampingan pembelajaran Bahasa Inggris</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/flaticon1.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="https://use.fontawesome.com/fdabbcab25.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="<?= base_url() ?>"><img src="assets/img/logo/logonew.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <?php foreach ($section as $s) : ?>
                                            <li class="<?= $s['id_section'] === '1' ? 'active' : '' ?>"><a href="#section_<?= $s['id_section'] ?>"><?= $s['title']; ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area" id="section_<?= $section[0]['id_section']; ?>">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s"><?= $section[0]['content_1']; ?></span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s"><?= $section[0]['content_2']; ?></h1>
                                    <p data-animation="fadeInUp" data-delay=".8s"><?= $section[0]['content_3']; ?>
                                    </p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="#section_4" class="btn radius-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right3.png" alt="">
                                </div>
                                <img class="blob rotate" src="assets/img/shape/blob.svg" alt="" width="100%" style="left:96px;top:-77px;">
                                <svg class="blob upndown" width="120px" style="bottom: 26px;right: 23px;" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#00A2E9" d="M66.1,-37.4C80.1,-13.9,82,17.3,69,41.4C56,65.6,28,82.6,-0.3,82.8C-28.5,82.9,-57,66.2,-70.7,41.7C-84.3,17.2,-83.1,-15,-68.8,-38.7C-54.6,-62.3,-27.3,-77.3,-0.6,-76.9C26,-76.6,52.1,-60.8,66.1,-37.4Z" transform="translate(100 100)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Services Area Start -->
        <section class="service-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center" id="section_<?= $section[1]['id_section'] ?>">
                    <div class="col-lg-10">
                        <div class="section-tittle text-center">
                            <h1 class="mb-3 wow" style="color: #00a2e9" data-animation="fadeInUp" data-delay=".5s"><?= $section[1]['title']; ?></h1>
                            <h2 class="mb-3 wow" style="font-size: 26px" data-animation="fadeInUp" data-delay=".10s"><?= $section[1]['content_1']; ?></h2>
                            <p class="mb-50 wow" style="font-size: 18px" data-animation="fadeInUp" data-delay=".15s"><?= $section[1]['content_2']; ?></p>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow" data-animation="fadeInUp" data-delay=".25s">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#"><?= $section[1]['content_3']; ?></a></h4>
                                <p><?= $section[1]['content_4']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow" data-animation="fadeInUp" data-delay=".5s">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#"><?= $section[1]['content_5']; ?></a></h4>
                                <p><?= $section[1]['content_6']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow" data-animation="fadeInUp" data-delay=".75s">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#"><?= $section[1]['content_7']; ?></a></h4>
                                <p><?= $section[1]['content_8']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->

        <!-- Best Features Start -->
        <section class="best-features-area section-padd4 sky-blue">

            <div class="container" id="section_<?= $section[2]['id_section'] ?>">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="section-tittle text-center">
                                    <h2><?= $section[2]['content_1']; ?></h2>
                                </div>
                            </div>
                        </div>

                        <!-- Section caption -->
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon wow" data-animation="flipInY" data-delay="1.0s">
                                        <span><i class="fas fa-check"></i></span>
                                    </div>
                                    <div class="features-caption wow" data-animation="flipInY" data-delay="1.15s">
                                        <h3><?= $section[2]['content_2']; ?></h3>
                                        <p><?= $section[2]['content_3']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon wow" data-animation="flipInY" data-delay="1.25s">
                                        <span><i class="far fa-user"></i></span>
                                    </div>
                                    <div class="features-caption wow" data-animation="flipInY" data-delay="1.35s">
                                        <h3><?= $section[2]['content_4']; ?></h3>
                                        <p><?= $section[2]['content_5']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon wow" data-animation="flipInY" data-delay="1.45s">
                                        <span class="flaticon-ebook-1"></span>
                                    </div>
                                    <div class="features-caption wow" data-animation="flipInY" data-delay="1.55s">
                                        <h3><?= $section[2]['content_6']; ?></h3>
                                        <p><?= $section[2]['content_7']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon wow" data-animation="flipInY" data-delay="1.65s">
                                        <span class="flaticon-exam"></span>
                                    </div>
                                    <div class="features-caption wow" data-animation="flipInY" data-delay="1.75s">
                                        <h3><?= $section[2]['content_8']; ?></h3>
                                        <p><?= $section[2]['content_9']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Best Features End -->



        <!-- Applic App Start -->
        <div class="applic-apps section-padding2">
            <div class="container-fluid" id="section_<?= $section[3]['id_section'] ?>">
                <div class="row justify-content-center">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3><?= $section[3]['content_1']; ?></h3>
                            <p><?= $section[3]['content_2']; ?></p>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class="app-active owl-carousel">
                            <div class="single-cases-img">
                                <img src="assets/img/apps/app-1.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/apps/app-2.png" alt="">
                            </div>
                            <div class="single-cases-img">
                                <img src="assets/img/apps/app-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-75">
                        <a class="btn radius-btn wow" href="#" data-animation="fadeInUp">Download</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Applic App End -->


        <?php foreach ($section as $sec) : ?>
            <?php if ($sec['id_section'] > 4) : ?>
                <?php $modulos = $sec['id_section'] % 2 ?>
                <!-- Services Area Start -->
                <section class="service-area section-padding2 <?= $modulos == 0 ? '' : 'sky-blue' ?>" id="section_<?= $s['id_section'] ?>">
                    <div class="container">
                        <!-- Section Tittle -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="section-tittle text-center">
                                    <h1 class="mb-3 wow" style="color: #00a2e9" data-animation="fadeInUp" data-delay=".5s"><?= $sec['title']; ?></h1>
                                    <h2 class="mb-3 wow" style="font-size: 26px" data-animation="fadeInUp" data-delay=".10s"><?= $sec['content_1']; ?></h2>
                                    <p class="mb-50 wow" style="font-size: 18px" data-animation="fadeInUp" data-delay=".15s"><?= $sec['content_2']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php if (
                            $sec['content_4'] == ''  &&
                            $sec['content_5'] == ''  &&
                            $sec['content_6'] == ''  &&
                            $sec['content_7'] == ''  &&
                            $sec['content_8'] == ''  &&
                            $sec['content_9'] == ''  &&
                            $sec['content_10'] == ''
                        ) : ?>
                        <?php else : ?>
                            <!-- Section caption -->
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 wow" data-animation="fadeInUp" data-delay=".25s">
                                    <div class="services-caption text-center mb-30">
                                        <div class="service-icon">
                                            <span class="flaticon-businessman"></span>
                                        </div>
                                        <div class="service-cap">
                                            <h4><a href="#"><?= $sec['content_3']; ?></a></h4>
                                            <p><?= $sec['content_4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 wow" data-animation="fadeInUp" data-delay=".5s">
                                    <div class="services-caption text-center mb-30">
                                        <div class="service-icon">
                                            <span class="flaticon-pay"></span>
                                        </div>
                                        <div class="service-cap">
                                            <h4><a href="#"><?= $sec['content_7']; ?></a></h4>
                                            <p><?= $sec['content_8']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 wow" data-animation="fadeInUp" data-delay=".75s">
                                    <div class="services-caption text-center mb-30">
                                        <div class="service-icon">
                                            <span class="flaticon-plane"></span>
                                        </div>
                                        <div class="service-cap">
                                            <h4><a href="#"><?= $sec['content_5']; ?></a></h4>
                                            <p><?= $sec['content_6']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- Services Area End -->
            <?php endif; ?>
        <?php endforeach; ?>


    </main>
    <footer>

        <!-- Footer Start-->
        <div class="footer-main sky-blue">
            <div class="footer-area footer-padding" id="contact">
                <div class="container">
                    <div class="row  justify-content-left">
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="<?= base_url(); ?>"><img src="assets/img/logo/logonew.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">ITS Sukolilo, Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111</p>
                                        <p class="info1">Telp : <a style="color: #000" href="tel:+6289677015186">+62 896-7701-5186</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Social Media</h4>
                                    <ul>
                                        <li><a href="https://instagram.com/teachmenow_?igshid=1advhi5eaivfz">Instagram</a></li>
                                        <li><a href="https://wa.me/6285755511371">WhatsApp</a></li>
                                        <li><a href="https://www.youtube.com/channel/UCp277FpQzuGB_5Ra_j57kkw/videos?view_as=subscriber">YouTube</a></li>
                                        <li><a style="cursor:default">Line: @329ilfzz</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul id="navigation">
                                        <?php foreach ($section as $s) : ?>
                                            <li><a href="#section_<?= $s['id_section'] ?>"><?= $s['title']; ?></a></li>
                                        <?php endforeach; ?>
                                        <!-- <li><a href="#contact">Contact</a></li>
                                        <li><a href="#top">Home</a></li>
                                        <li><a href="#about">About Us</a></li>
                                        <li><a href="#feature">Features</a></li>
                                        <li><a href="#screenshot">Screenshot</a></li> -->
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Copy-Right -->
                    <div class="row align-items-center">
                        <div class="col-xl-12 text-left">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy; <script>
                                        document.write(new Date().getFullYear());
                                    </script> Tim Teachmenow</p>
                                <p style="color:#f4feff"> | This template is made with <i style="color:#f4feff" class="ti-heart" aria-hidden="true"></i> by <a style="color:#f4feff" href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <script src="./assets/js/myjs.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>



    <script>
        new WOW().init();
    </script>

</body>

</html>