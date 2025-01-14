<?php
$utm_source = $_REQUEST['utm_source'] ?? '';
$utm_medium = $_REQUEST['utm_medium'] ?? '';
$utm_campaign = $_REQUEST['utm_campaign'] ?? '';
$utm_adgroup = $_REQUEST['utm_adgroup'] ?? '';
$utm_device = $_REQUEST['utm_device'] ?? '';
$utm_term = $_REQUEST['utm_term'] ?? '';
$gclid = $_REQUEST['gclid'] ?? '';
$fbclid = $_REQUEST['fbclid'] ?? '';
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.webp" type="image/png" sizes="16x16">
    <title>
        PGP in Mass Communication & Media Management
    </title>

    <meta name="Description"
        content="MET Institute of PGDM is one of the best PGDM colleges in Mumbai. PGDM at MET is approved by AICTE &amp; DTE. It is more than an MBA since its industry-driven course content, pedagogy, New Age Add on specialisation">

    <link rel="shortcut icon" type="image/png" href="https://www.met.edu/frontendassets/images/fev/metlogo.ico">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PWD7ZBXF');
    </script>
    <!-- End Google Tag Manager -->


    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/general.css">

    <link rel="stylesheet" href="css/aos.css" />

    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- FancyBox CSS -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWD7ZBXF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="loader-container">
        <div class="loader-wrapper">
            <div class="loader">
            </div>
        </div>
    </div>

    <?php include 'assets/component/header.php' ?>

    <main>

        <!------------------- Banner section ----------------->
        <section class="main-banner">
            <div class="custom-container-2">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12 pt-5">
                        <div class="banner-txt">
                            <div class="visualtxt ">
                                <div class="headline-pgdm">
                                    <div class="head-line"></div>
                                </div>
                                <p>
                                    <span class="linetext b-clr">PGP in Mass Communication & Media Management</span><br>
                                </p>
                                <p>
                                    Specialisations in Advertising & PR | Entertainment | Journalism | Digital Marketing
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class=""> <img src="assets/images/bannerstudent.webp" class="" alt="...">
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12" style="z-index:1;">
                        <div class="banform" id="banform">
                            <div class="form-content">
                                <p class="fw-bold form-highlighter">Download Free e-Brochure</p>
                                <div class="form-body">
                                    <!-- <p>Get In Touch </p> -->
                                    <form id="pop-form" action="IMM-Visit9.php" method="POST" novalidate
                                        class="needs-validation">
                                        <div class="row g-3">
                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <label class="inputial">Name </label>

                                                    <input id="enqform-fname" type="text"
                                                        class="form-control rounded-pill" required name="fname"
                                                        placeholder="Enter Your Name">

                                                    <div class="invalid-feedback">
                                                        Please enter a valid name.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <label class="inputial">Email Address </label>

                                                    <input type="email" class="form-control rounded-pill" required
                                                        name="email" placeholder="Enter Your Email">
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <label class="inputial">Mobile </label>

                                                    <input type="text" class="form-control rounded-pill number-only"
                                                        name="mobile" maxlength="10" required
                                                        placeholder="Enter Your Number">
                                                    <div class="invalid-feedback">
                                                        Please enter a valid mbile no.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <label class="inputial">City </label>

                                                    <input type="text" class="form-control rounded-pill" name="city"
                                                        required placeholder="Enter Your City">
                                                    <div class="invalid-feedback">
                                                        Please enter a valid city.
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <label class="inputial">Qualification </label>

                                                    <select type="text" class="form-select rounded-pill"
                                                        name="qualification" placeholder="Enter Your City" required>
                                                        <option value="" selected hidden>Choose...</option>
                                                        <option value="Graduation">Graduation</option>
                                                        <option value="Post-Graduation">Post-Graduation</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Select enter a valid qualification.
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group col-md-12">
                                                <div class="input-group">
                                                    <label class="inputial">Course </label>

                                                    <select type="text" class=" form-select rounded-pill" name="Course"
                                                        placeholder="Select Course" required>
                                                        <option value="" selected hidden>Choose...</option>
                                                        <option value="PGP MCMM - Advertising & PR">PGP MCMM - Advertising & PR </option>
                                                        <option value="PGP MCMM - Entertainment">PGP MCMM - Entertainment</option>
                                                        <option value="PGP MCMM - Journalism">PGP MCMM - Journalism</option>
                                                        <option value="PGP MCMM - Digital Marketing">PGP MCMM - Digital Marketing</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Select Valid Course.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-12 m-0">
                                                <div class="checkboxprivcy">
                                                    <input type="checkbox" id="privacy" name="privacy" value="true"
                                                        required checked="">

                                                    <label for="privacy"> I agree to receive information</label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="page_name" value="IMM9">
                                            <input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
                                            <input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
                                            <input type="hidden" name="utm_campaign"
                                                value="<?php echo $utm_campaign ?>">
                                            <input type="hidden" name="utm_adgroup" value="<?php echo $utm_adgroup ?>">
                                            <input type="hidden" name="utm_device" value="<?php echo $utm_device ?>">
                                            <input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
                                            <input type="hidden" name="gclid" value="<?php echo $gclid ?>">
                                            <input type="hidden" name="fbclid" value="<?php echo $fbclid ?>">
                                            <input type="hidden" name="url" value="<?php echo $url ?>">
                                            <button type="submit"
                                                class="form-btn round-btn text-center d-inline btn-submit-1"
                                                href="#"><span>Register Now <i class="flaticon-right-arrow"></i></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!------------------- Banner section ----------------->

        <?php include 'assets/component/content.php' ?>

    </main>

    <!--=================footer section starts=============== -->
    <footer class="footer-background">
        <div class="conatiner">
            <div class="row">
                <div class="footer-text">
                    <p class="footer-p">
                        Copyright © 2024 MET. All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- =================footer section ends================ -->

    <!-- bootstrap js cdn -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>

    <!-- FancyBox JS -->
    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/AOS.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/url-tracking.js"></script>
    <script src="js/custom-validate.js"></script>
    <script src="js/form-validation.js"></script>

    <script>
        Delete_Cookie('formfilled');
        $(document).ready(function() {
            $(".offcanvas-nav .offcanvas-link").click(function() {
                $('.offcanvas-start').offcanvas('hide');
            });
            $('.gallery-carousel').owlCarousel({
                items: 1,
                loop: false,
                margin: 10,
                // center: true,
                autoplay: false,
                smartSpeed: 2000,
                //autoplayTimeout: 6000,
                //autoplayHoverPause: true,
                dots: true,
                backFocus: false,
                navText: [
                    '<img class="arrow" src="assets/images/icons/left-arrow.svg" alt="arrow"></img>',
                    '<img class="arrow" src="assets/images/icons/right-arrow.svg" alt="arrow"></img>'
                ],
                responsive: {
                    567: {
                        items: 1,
                        nav: false,
                        margin: 0,
                    },
                    768: {
                        items: 1,
                        nav: true,
                        margin: 10,
                    },
                    992: {
                        items: 1,
                        nav: true,
                        margin: 20,
                    },
                    1300: {
                        items: 1,
                        nav: true,
                        margin: 20,
                    }
                }
            });
            $('.takeaways-carousel').owlCarousel({
                items: 1,
                margin: 30,
                smartSpeed: 2000,
                nav: true,
                autoplayTimeout: 6000,
                autoplay: true,
                loop: false,
                dots: true,
                autoplayHoverPause: true,
                navText: [
                    '<img class="arrow" src="assets/images/icons/left-arrow-2.svg" alt="arrow"></img>',
                    '<img class="arrow rotate" src="assets/images/icons/left-arrow-2.svg" alt="arrow"></img>'
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    992: {
                        items: 2,
                    },
                    1350: {
                        items: 3,
                    },
                    1700: {
                        items: 4,
                    }
                }
            });
            $('.event-carousel').owlCarousel({
                items: 1,
                margin: 30,
                smartSpeed: 2000,
                nav: false,
                autoplayTimeout: 6000,
                autoplay: false,
                loop: true,
                dots: true,
                autoplayHoverPause: true,
                // navText: ['<img class="arrow" src="assets/images/icons/left-arrow-2.svg" alt="arrow"></img>',
                //     '<img class="arrow rotate" src="assets/images/icons/left-arrow-2.svg" alt="arrow"></img>'
                // ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    },
                    1300: {
                        items: 4,
                    }
                }
            });
            $('.testimonial-carousel').owlCarousel({
                items: 1,
                margin: 30,
                smartSpeed: 2000,
                nav: false,
                autoplayTimeout: 6000,
                autoplay: false,
                loop: true,
                dots: true,
                autoplayHoverPause: true,
                navText: [
                    '<img class="arrow" src="assets/images/icons/left-arrow-2.svg" alt="arrow"></img>',
                    '<img class="arrow rotate" src="assets/images/icons/left-arrow-2.svg" alt="arrow"></img>'
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                    1300: {
                        items: 3,
                    }
                }
            });
            // Initialize FancyBox
            $("[data-fancybox]").fancybox({
                // Options
            });
        })
    </script>

</body>

</html>