<?php
$utm_source = $_REQUEST['utm_source'] ?? '';
$utm_medium = $_REQUEST['utm_medium'] ?? '';
$utm_campaign = $_REQUEST['utm_campaign'] ?? '';
$utm_adgroup = $_REQUEST['utm_adgroup'] ?? '';
$utm_device = $_REQUEST['utm_device'] ?? '';
$utm_content = $_REQUEST['utm_content'] ?? '';
$utm_keyword = $_REQUEST['utm_keyword'] ?? '';
$utm_adposition = $_REQUEST['utm_adposition'] ?? '';
$utm_placement = $_REQUEST['utm_placement'] ?? '';
$utm_matchtype = $_REQUEST['utm_matchtype'] ?? '';
$utm_creative = $_REQUEST['utm_creative'] ?? '';
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
    <title>MET IIS: International BBA in India | Bachelors of Business Administration</title>
    <meta name="Description"
        content="BA (Hons) Business Administration, an International BBA degree program by MET IIS, Mumbai, India, along with NCC Education (global provider of of British education), with credit transfers to foreign universities.">

    <link rel="shortcut icon" type="image/png" href="https://www.met.edu/frontendassets/images/fev/metlogo.ico">

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
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

    <!-- Microsoft Clarity -->
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "pv5l42udd7");
    </script>
    <!-- End Microsoft Clarity -->

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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWD7ZBXF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
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
                                    <span class="linetext b-clr">International Degrees in India</span><br>
                                </p>
                                <p>
                                    2 + 1 Pathway UG Degree in Business Administration. Study for two years in India and
                                    Final year in the UK.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="text-center">
                            <img src="assets/images/bannerstudent.webp" class="" alt="...">
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12" style="z-index:1;">
                        <div class="banform" id="banform">
                            <div class="form-content">
                                <p class="fw-bold form-highlighter">Download Free e-Brochure</p>
                                <div class="form-body">
                                    <!-- <p>Get In Touch </p> -->
                                    <form id="pop-form" action="Bachelors-Degree-Visit16.php" method="POST" novalidate
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

                                            <div class="form-group col-md-12 mobile-inline">
                                                <label class="inputial">Mobile </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend ">
                                                        <select
                                                            class="form-control rounded-pill country-code small-select"
                                                            name="country-code">
                                                            <option value="+1">+1 (United States, Canada)</option>
                                                            <option value="+7">+7 (Russia)</option>
                                                            <option value="+20">+20 (Egypt)</option>
                                                            <option value="+27">+27 (South Africa)</option>
                                                            <option value="+30">+30 (Greece)</option>
                                                            <option value="+31">+31 (Netherlands)</option>
                                                            <option value="+32">+32 (Belgium)</option>
                                                            <option value="+33">+33 (France)</option>
                                                            <option value="+34">+34 (Spain)</option>
                                                            <option value="+36">+36 (Hungary)</option>
                                                            <option value="+39">+39 (Italy)</option>
                                                            <option value="+40">+40 (Romania)</option>
                                                            <option value="+41">+41 (Switzerland)</option>
                                                            <option value="+44">+44 (United Kingdom)</option>
                                                            <option value="+45">+45 (Denmark)</option>
                                                            <option value="+46">+46 (Sweden)</option>
                                                            <option value="+47">+47 (Norway)</option>
                                                            <option value="+48">+48 (Poland)</option>
                                                            <option value="+49">+49 (Germany)</option>
                                                            <option value="+51">+51 (Peru)</option>
                                                            <option value="+52">+52 (Mexico)</option>
                                                            <option value="+53">+53 (Cuba)</option>
                                                            <option value="+54">+54 (Argentina)</option>
                                                            <option value="+55">+55 (Brazil)</option>
                                                            <option value="+57">+57 (Colombia)</option>
                                                            <option value="+58">+58 (Venezuela)</option>
                                                            <option value="+60">+60 (Malaysia)</option>
                                                            <option value="+61">+61 (Australia)</option>
                                                            <option value="+62">+62 (Indonesia)</option>
                                                            <option value="+63">+63 (Philippines)</option>
                                                            <option value="+64">+64 (New Zealand)</option>
                                                            <option value="+65">+65 (Singapore)</option>
                                                            <option value="+66">+66 (Thailand)</option>
                                                            <option value="+81">+81 (Japan)</option>
                                                            <option value="+82">+82 (South Korea)</option>
                                                            <option value="+84">+84 (Vietnam)</option>
                                                            <option value="+86">+86 (China)</option>
                                                            <option value="+91">+91 (India)</option>
                                                            <option value="+92">+92 (Pakistan)</option>
                                                            <option value="+93">+93 (Afghanistan)</option>
                                                            <option value="+94">+94 (Sri Lanka)</option>
                                                            <option value="+95">+95 (Myanmar)</option>
                                                            <option value="+98">+98 (Iran)</option>
                                                            <option value="+211">+211 (South Sudan)</option>
                                                            <option value="+212">+212 (Morocco)</option>
                                                            <option value="+213">+213 (Algeria)</option>
                                                            <option value="+216">+216 (Tunisia)</option>
                                                            <option value="+218">+218 (Libya)</option>
                                                            <option value="+220">+220 (Gambia)</option>
                                                            <option value="+221">+221 (Senegal)</option>
                                                            <option value="+222">+222 (Mauritania)</option>
                                                            <option value="+223">+223 (Mali)</option>
                                                            <option value="+224">+224 (Guinea)</option>
                                                            <option value="+225">+225 (Ivory Coast)</option>
                                                            <option value="+226">+226 (Burkina Faso)</option>
                                                            <option value="+227">+227 (Niger)</option>
                                                            <option value="+228">+228 (Togo)</option>
                                                            <option value="+229">+229 (Benin)</option>
                                                            <option value="+230">+230 (Mauritius)</option>
                                                            <option value="+231">+231 (Liberia)</option>
                                                            <option value="+232">+232 (Sierra Leone)</option>
                                                            <option value="+233">+233 (Ghana)</option>
                                                            <option value="+234">+234 (Nigeria)</option>
                                                            <option value="+235">+235 (Chad)</option>
                                                            <option value="+236">+236 (Central African Republic)
                                                            </option>
                                                            <option value="+237">+237 (Cameroon)</option>
                                                            <option value="+238">+238 (Cape Verde)</option>
                                                            <option value="+239">+239 (São Tomé and Príncipe)</option>
                                                            <option value="+240">+240 (Equatorial Guinea)</option>
                                                            <option value="+241">+241 (Gabon)</option>
                                                            <option value="+242">+242 (Republic of the Congo)</option>
                                                            <option value="+243">+243 (Democratic Republic of the Congo)
                                                            </option>
                                                            <option value="+244">+244 (Angola)</option>
                                                            <option value="+245">+245 (Guinea-Bissau)</option>
                                                            <option value="+246">+246 (Diego Garcia)</option>
                                                            <option value="+247">+247 (Ascension Island)</option>
                                                            <option value="+248">+248 (Seychelles)</option>
                                                            <option value="+249">+249 (Sudan)</option>
                                                            <option value="+250">+250 (Rwanda)</option>
                                                            <option value="+251">+251 (Ethiopia)</option>
                                                            <option value="+252">+252 (Somalia)</option>
                                                            <option value="+253">+253 (Djibouti)</option>
                                                            <option value="+254">+254 (Kenya)</option>
                                                            <option value="+255">+255 (Tanzania)</option>
                                                            <option value="+256">+256 (Uganda)</option>
                                                            <option value="+260">+260 (Zambia)</option>
                                                            <option value="+261">+261 (Madagascar)</option>
                                                            <option value="+262">+262 (Réunion, Mayotte)</option>
                                                            <option value="+263">+263 (Zimbabwe)</option>
                                                            <option value="+264">+264 (Namibia)</option>
                                                            <option value="+265">+265 (Malawi)</option>
                                                            <option value="+266">+266 (Lesotho)</option>
                                                            <option value="+267">+267 (Botswana)</option>
                                                            <option value="+268">+268 (Eswatini)</option>
                                                            <option value="+269">+269 (Comoros)</option>
                                                            <option value="+297">+297 (Aruba)</option>
                                                            <option value="+298">+298 (Faroe Islands)</option>
                                                            <option value="+299">+299 (Greenland)</option>
                                                            <option value="+350">+350 (Gibraltar)</option>
                                                            <option value="+351">+351 (Portugal)</option>
                                                            <option value="+352">+352 (Luxembourg)</option>
                                                            <option value="+353">+353 (Ireland)</option>
                                                            <option value="+354">+354 (Iceland)</option>
                                                            <option value="+355">+355 (Albania)</option>
                                                            <option value="+356">+356 (Malta)</option>
                                                            <option value="+357">+357 (Cyprus)</option>
                                                            <option value="+358">+358 (Finland)</option>
                                                            <option value="+359">+359 (Bulgaria)</option>
                                                            <option value="+370">+370 (Lithuania)</option>
                                                            <option value="+371">+371 (Latvia)</option>
                                                            <option value="+372">+372 (Estonia)</option>
                                                            <option value="+373">+373 (Moldova)</option>
                                                            <option value="+374">+374 (Armenia)</option>
                                                            <option value="+375">+375 (Belarus)</option>
                                                            <option value="+376">+376 (Andorra)</option>
                                                            <option value="+377">+377 (Monaco)</option>
                                                            <option value="+378">+378 (San Marino)</option>
                                                            <option value="+379">+379 (Vatican City)</option>
                                                            <option value="+380">+380 (Ukraine)</option>
                                                            <option value="+381">+381 (Serbia)</option>
                                                            <option value="+382">+382 (Montenegro)</option>
                                                            <option value="+383">+383 (Kosovo)</option>
                                                            <option value="+385">+385 (Croatia)</option>
                                                            <option value="+386">+386 (Slovenia)</option>
                                                            <option value="+387">+387 (Bosnia and Herzegovina)</option>
                                                            <option value="+389">+389 (North Macedonia)</option>
                                                            <option value="+420">+420 (Czech Republic)</option>
                                                            <option value="+421">+421 (Slovakia)</option>
                                                            <option value="+423">+423 (Liechtenstein)</option>
                                                            <option value="+500">+500 (Falkland Islands)</option>
                                                            <option value="+501">+501 (Belize)</option>
                                                            <option value="+502">+502 (Guatemala)</option>
                                                            <option value="+503">+503 (El Salvador)</option>
                                                            <option value="+504">+504 (Honduras)</option>
                                                            <option value="+505">+505 (Nicaragua)</option>
                                                            <option value="+506">+506 (Costa Rica)</option>
                                                            <option value="+507">+507 (Panama)</option>
                                                            <option value="+508">+508 (Saint Pierre and Miquelon)
                                                            </option>
                                                            <option value="+509">+509 (Haiti)</option>
                                                            <option value="+590">+590 (Guadeloupe, Saint Barthélemy,
                                                                Saint Martin)</option>
                                                            <option value="+591">+591 (Bolivia)</option>
                                                            <option value="+592">+592 (Guyana)</option>
                                                            <option value="+593">+593 (Ecuador)</option>
                                                            <option value="+594">+594 (French Guiana)</option>
                                                            <option value="+595">+595 (Paraguay)</option>
                                                            <option value="+596">+596 (Martinique)</option>
                                                            <option value="+597">+597 (Suriname)</option>
                                                            <option value="+598">+598 (Uruguay)</option>
                                                            <option value="+599">+599 (Curaçao, Caribbean Netherlands)
                                                            </option>
                                                            <option value="+670">+670 (Timor-Leste)</option>
                                                            <option value="+672">+672 (Norfolk Island)</option>
                                                            <option value="+673">+673 (Brunei)</option>
                                                            <option value="+674">+674 (Nauru)</option>
                                                            <option value="+675">+675 (Papua New Guinea)</option>
                                                            <option value="+676">+676 (Tonga)</option>
                                                            <option value="+677">+677 (Solomon Islands)</option>
                                                            <option value="+678">+678 (Vanuatu)</option>
                                                            <option value="+679">+679 (Fiji)</option>
                                                            <option value="+680">+680 (Palau)</option>
                                                            <option value="+681">+681 (Wallis and Futuna)</option>
                                                            <option value="+682">+682 (Cook Islands)</option>
                                                            <option value="+683">+683 (Niue)</option>
                                                            <option value="+685">+685 (Samoa)</option>
                                                            <option value="+686">+686 (Kiribati)</option>
                                                            <option value="+687">+687 (New Caledonia)</option>
                                                            <option value="+688">+688 (Tuvalu)</option>
                                                            <option value="+689">+689 (French Polynesia)</option>
                                                            <option value="+690">+690 (Tokelau)</option>
                                                            <option value="+691">+691 (Micronesia)</option>
                                                            <option value="+692">+692 (Marshall Islands)</option>
                                                            <option value="+850">+850 (North Korea)</option>
                                                            <option value="+852">+852 (Hong Kong)</option>
                                                            <option value="+853">+853 (Macau)</option>
                                                            <option value="+855">+855 (Cambodia)</option>
                                                            <option value="+856">+856 (Laos)</option>
                                                            <option value="+880">+880 (Bangladesh)</option>
                                                            <option value="+886">+886 (Taiwan)</option>
                                                            <option value="+960">+960 (Maldives)</option>
                                                            <option value="+961">+961 (Lebanon)</option>
                                                            <option value="+962">+962 (Jordan)</option>
                                                            <option value="+963">+963 (Syria)</option>
                                                            <option value="+964">+964 (Iraq)</option>
                                                            <option value="+965">+965 (Kuwait)</option>
                                                            <option value="+966">+966 (Saudi Arabia)</option>
                                                            <option value="+967">+967 (Yemen)</option>
                                                            <option value="+968">+968 (Oman)</option>
                                                            <option value="+970">+970 (Palestine)</option>
                                                            <option value="+971">+971 (United Arab Emirates)</option>
                                                            <option value="+972">+972 (Israel)</option>
                                                            <option value="+973">+973 (Bahrain)</option>
                                                            <option value="+974">+974 (Qatar)</option>
                                                            <option value="+975">+975 (Bhutan)</option>
                                                            <option value="+976">+976 (Mongolia)</option>
                                                            <option value="+977">+977 (Nepal)</option>
                                                            <option value="+992">+992 (Tajikistan)</option>
                                                            <option value="+993">+993 (Turkmenistan)</option>
                                                            <option value="+994">+994 (Azerbaijan)</option>
                                                            <option value="+995">+995 (Georgia)</option>
                                                            <option value="+996">+996 (Kyrgyzstan)</option>
                                                            <option value="+997">+997 (Kazakhstan)</option>
                                                            <option value="+998">+998 (Uzbekistan)</option>
                                                            <option value="+999">+999 (Reserved for international
                                                                services)</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control rounded-pill number-only "
                                                        name="mobile" required placeholder="Enter Your Number">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter a valid mobile no.
                                                </div>
                                                <input type="hidden" name="full_mobile" id="full_mobile">
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

                                            <div class=" col-md-12 m-0">
                                                <div class="checkboxprivcy">
                                                    <input type="checkbox" id="privacy" name="privacy" value="true"
                                                        required checked="">

                                                    <label for="privacy"> I agree to receive information</label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="page_name" value="IIS UG16">
                                            <input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
                                            <input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
                                            <input type="hidden" name="utm_campaign"
                                                value="<?php echo $utm_campaign ?>">
                                            <input type="hidden" name="utm_adgroup" value="<?php echo $utm_adgroup ?>">
                                            <input type="hidden" name="utm_device" value="<?php echo $utm_device ?>">
                                            <input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
                                            <input type="hidden" name="utm_content" value="<?php echo $utm_content ?>">
                                            <input type="hidden" name="utm_keywords" value="<?php echo $utm_keyword ?>">
                                            <input type="hidden" name="utm_adposition"
                                                value="<?php echo $utm_adposition ?>">
                                            <input type="hidden" name="utm_placement"
                                                value="<?php echo $utm_placement ?>">
                                            <input type="hidden" name="utm_matchtype"
                                                value="<?php echo $utm_matchtype ?>">
                                            <input type="hidden" name="utm_creative"
                                                value="<?php echo $utm_creative ?>">
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
                        Copyright © 2025 MET. All rights reserved
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
        $(document).ready(function () {
            $(".offcanvas-nav .offcanvas-link").click(function () {
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

    <script>
        const countryCode = document.querySelector('[name="country-code"]');
        const mobileInput = document.querySelector('[name="mobile"]');
        const fullMobile = document.getElementById('full_mobile');

        function updateFullMobile() {
            fullMobile.value = countryCode.value + mobileInput.value;
        }

        // Update hidden field whenever inputs change
        countryCode.addEventListener('change', updateFullMobile);
        mobileInput.addEventListener('input', updateFullMobile);
    </script>

</body>

</html>