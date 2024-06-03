<?php
$pageTitle = "Login";
include('../config/function.php');

if (isset($_SESSION['auth'])) {
    redirect('../account/index.php', 'Your already Logged in');
}
?>

<!doctype html>

<!-- HTML Start -->
<html>

<!-- Head -->

<head>

    <script src="../ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../recaptcha/api.js?render=6LctSPcUAAAAAGqGPCeWQHpISurU2OwIHk8P5BFB"></script>
    <meta id="meta-ef-urchin-uid" name="ef-urchin-uid" content="">
    <meta id="meta-ef-urchin-oid" name="ef-urchin-oid" content="">
    <meta id="meta-ef-urchin-latest-name-search" name="ef-urchin-latest-name-search" content="">

    <script>
        var modernBrowser = ('fetch' in window && 'assign' in Object && 'find' in Array.prototype);
        if (!modernBrowser) {
            var scriptElement = document.createElement('script');
            scriptElement.async = false;
            scriptElement.src = 'https://cdn.polyfill.io/v2/polyfill.min.js?features=default,fetch,Array.prototype.find';
            document.head.appendChild(scriptElement);
        }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/builds/w/styles/ef-core.min.css?v=245" rel="stylesheet" type="text/css">
    <link href="/assets/custom/themes/new/jquery-ui.min.css?v=245" rel="stylesheet" type="text/css">
    <script src="../jquery-migrate-3.3.2.min.js"></script>
    <script src="../assets/builds/w/scripts/plugin.efiling.full.min-1.js?v=245"></script>



    <!-- Google tag (gtag.js) -->
    <script async="" src="../gtag/js?id=AW-1022629653"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1022629653');
    </script>


    <!-- Meta Data -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/custom/images/prime_fav.png">

    <!-- SEO Tags -->
    <title>Prime Formations - We are expert in Company Formation , Company Registration & Company setup.</title>
    <meta name="description" content="Prime Formations Website - The Best UK Online Company Formation Agent, Company Registration, Company setup, VAT Registration, Confirmation Statements,">

    <!-- Custom Tags -->






    <!-- Fonts -->
    <link rel="stylesheet" href="../icon?family=Material+Icons">
    <link rel="stylesheet" href="../font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/custom/files/css/index_font_awesome.css">


    <!-- Styles -->
    <link rel="stylesheet" href="../assets/custom/files/css/index_style.css">
    <link rel="stylesheet" href="../assets/custom/files/css/slick73a1.css">
    <link rel="stylesheet" href="../assets/custom/files/css/theme5f9f.css?">
    <link rel="stylesheet" href="https://www.primeformations.co.uk/assets/custom/files/css/ef-core.min5f9f.css">
    <link rel="stylesheet" href="https://www.primeformations.co.uk/assets/custom/files/css/base-min-gzip5f2c.css">
    <link rel="stylesheet" href="../assets/custom/files/css/site-navigation-min8f26.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/custom/files/css/bootstrap_min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/custom/files/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/custom/files/css/responsive.css">

    <!-- JavaScript -->
    <script src="../assets/custom/files/js/plugin_efiling_full_min5f9f.js"></script>

    <!-- Style Override -->
    <link rel="stylesheet" href="../assets/custom/files/css/override-style.css">

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
        })(window, document, 'script', 'dataLayer', 'GTM-K4TF3M6');
    </script>
    <!-- End Google Tag Manager -->

</head>
<!-- End Head -->

<!-- Body -->

<body id="ef-login/">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4TF3M6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Wrapper -->
    <div id="wrapper">
    <?= alertMessage() ?>

        <!-- Header -->
        <header id="masthead" class="site-header">

            <div class="static-pages">
                <div class="container site-header__wrap">
                    <div class="row">
                        <div class="col-xs-8 col-sm-5 col-lg-5">
                            <a class="site-header__logo" href="../index.php">
                                <img alt="Prime Formations Logo" src="../assets/custom/images/prime_nav.png" alt="Prime Formations Logo">
                            </a>
                        </div>
                        <div class="col-xs-5 col-sm-6 col-lg-7 hidden-xs">
                            <div class="site-header__contact">
                                <span class="site-header__telephone"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:01519092227">0333 533 0264</a></span>
                                <span class="site-header__waiting-time"><i class="fa fa-envelope-square fa-2x" aria-hidden="true"></i> <a href="mailto:info@primeformations.co.uk"> &nbsp;
                                        info@primeformations.co.uk</a></span>
                            </div>
                        </div>
                        <div class="site-nav-burger col-xs-2 col-sm-1">
                            <div class="site-nav-burger__wrap">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="site-nav__wrap">
                    <div class="container">
                        <div class="col closed">
                            <ul class="site-nav__body">
                                <li class="site-nav__item">
                                    <a href="../index.php">Home</a>
                                </li>
                                <li class="site-nav__item site-nav__item--dropdown">
                                    <a id="link-formation-packages" href="#">Packages</a>
                                    <div class="site-nav__menu site-nav__menu--packages site-nav__menu--inactive">
                                        <ul class="site-nav__menu-links">
                                            <div class="site-nav__menu-col-one">
                                                <h3>Company Formation</h3>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../digital-package/index.php">Digital Package</a>
                                                </li>
                                                <!-- <li class="site-nav__menu-sub-item">
                                                    <a href="../digital-print-package/index.php">Digital & Print Package
                                                    </a>
                                                </li> -->
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../privacy-package/index.php">Privacy Package </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../inclusive-package/index.php">Inclusive Package</a>
                                                </li>
                                                <!-- <li class="site-nav__menu-sub-item">
                                                    <a href="../non-resident-package/index.php">Non resident Package</a>
                                                </li> -->
                                            </div>

                                            <div class="site-nav__menu-col-two">
                                                <h3>Special Formation</h3>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../lbg-package/index.php">Limited by Guarantee</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../llp-package/index.php">Limited Liability Partnership</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../charity-company/index.php">Charity Company </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../charity-registration/index.php">Charity Registration
                                                    </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../community-interest/index.php">Community Interest Company
                                                    </a>
                                                </li>

                                            </div>
                                            <div class="site-nav__menu-col-bottom">
                                                <a class="button site-nav__wrap--button" href="../packages/index.php">Compare Packages</a>
                                            </div>
                                        </ul>
                                    </div>
                                </li>

                                <li class="site-nav__item site-nav__item--dropdown">
                                    <a id="link-formation-packages" href="#">Address Services</a>
                                    <div class="site-nav__menu site-nav__menu--packages site-nav__menu--inactive">
                                        <ul class="site-nav__menu-links">
                                            <div class="site-nav__menu-col-one">

                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../registered-office-address/index.php">Registered Office
                                                        Address</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../service-address/index.php">Service Address </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../business-address/index.php"> Business Address </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </li>


                                <li class="site-nav__item site-nav__item--dropdown">
                                    <a id="link-formation-packages" href="#">Company Services</a>
                                    <div class="site-nav__menu site-nav__menu--packages site-nav__menu--inactive">
                                        <ul class="site-nav__menu-links">
                                            <div class="site-nav__menu-col-one">

                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../confirmation-statements/index.php">Confirmation
                                                        Statements</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../company-dissolution/index.php">Company Dissolution</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../company-restoration/index.php">Company Restoration </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../company-name-change/index.php">Company Name Change </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../director-appointment/index.php">Director Appointment &
                                                        Resignation</a>
                                                </li>
                                            </div>

                                            <div class="site-nav__menu-col-two">

                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../issue-of-shares/index.php">Issue of Shares </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../transfer-of-shares/index.php"> Transfer of Shares </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../change-accounting-reference-date/index.php">Change of
                                                        Accounting Reference Date </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../certificate-good-standing/index.php">Certificate of Good
                                                        Standing </a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../apostilled-documents/index.php">Apostilled Documents</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../update-statutory/index.php">Update all five Statutory
                                                        Registers [Annual]</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </li>


                                <li class="site-nav__item site-nav__item--dropdown">
                                    <a href="#">Finance, Tax & Accounts Services</a>
                                    <div class="site-nav__menu site-nav__menu--inactive site-nav__menu--additional-services">
                                        <ul class="site-nav__menu-links">
                                            <div class="site-nav__menu-col-one">
                                                <h3 class="mr-bot-10 pd-bot-5">Finance</h3>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../barclays/index.php">Barclays Business Account</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../cashplus-bank/index.php">Cashplus Bank Account</a>
                                                </li>
                                            </div>


                                            <div class="site-nav__menu-col-two">
                                                <h3>Tax</h3>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../self-assessment/index.php">Self Assessment
                                                        Registration</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../partnership-registration/index.php">Partnership
                                                        Registration</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../self-assessment-partnership-tax-return/index.php">Self
                                                        Assessment and Partnership Tax Return</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../vat-registration/index.php">VAT Registration</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../vat-quarterly-returns/index.php">VAT Quarterly
                                                        Returns</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../paye-registration/index.php">Paye Registration</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../first-year-payroll-administration/index.php">
                                                        Payroll Administration</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../gift-aid-claim-registration/index.php">Gift Aid Claim
                                                        Registration</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../gift-aid-claim-filing/index.php">Gift Aid Claim
                                                        Filing</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../corporation-tax-returns/index.php">Corporation Tax
                                                        Returns</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../capital-gains-tax-filing/index.php">Capital Gains Tax
                                                        Filing</a>
                                                </li>
                                            </div>


                                            <div class="site-nav__menu-col-three">
                                                <h3>Accounts</h3>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../dormant-financial/index.php">Dormant Financial
                                                        Accounts</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../first-year-company-accounts/index.php">
                                                        Company Accounts</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../first-year-charity-accounts/index.php">
                                                        Charity Accounts</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../first-year-llp-accounts/index.php"> Limited
                                                        Liability Partnership Accounts Accounts</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../first-year-cic-accounts/index.php"> Community
                                                        Interest Company Accounts Accounts</a>
                                                </li>
                                                <li class="site-nav__menu-sub-item">
                                                    <a href="../first-year-monthly-bookkeeping/index.php">
                                                        Monthly Bookkeeping Service</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                            <ul class="site-nav__body--subnav">
                                <li class="site-nav__item site-nav__item--subnav">
                                    <a href="https://aamatthewtax.com/">Blog</a>
                                </li>
                                <li class="site-nav__item site-nav__item--subnav">
                                    <a href="../about/index.php">About</a>
                                </li>
                                <li class="site-nav__item site-nav__item--subnav">
                                    <a href="../contact-us/index.php">Contact</a>
                                </li>
                                <li class="site-nav__item site-nav__item--subnav site-nav__item--login">
                                    <a href="index.php">Client Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

        </header>
        <!-- End Header -->
        <!-- Hero Section -->
        <section class="hero ptb-50">
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row pd-top-50 pd-bot-20">
                    <!-- Col -->
                    <div class="col-12">
                        <div id="efPageContent" class="ui-widget">


                            <div id="efLoginContainer">
                                <h2>Account Login</h2>
                                <?= alertMessage() ?>
                                <form action="login-code.php" method="post" class="ef-login-form cc-login-form">
                                    <div id="efLoginBox" class="efPanel1 ui-corner-top ui-widget-content">
                                        <div class="efPanelHeader ui-widget-header ui-corner-top" id="efLoginBoxHeader">
                                            Login Details</div>
                                        <div class="efPanelContent ui-corner-bottom" id="efLoginBoxContent">
                                            <p>
                                                <label>Email:</label>
                                                <input class="efTextInput" name="email" type="text" id="efUsernameField">
                                            </p>
                                            <p>
                                                <label>Password:</label> <input class="efTextInput" type="password" name="password" id="efPasswordField">
                                            <p style="overflow:hidden">
                                                <span style="float:left">
                                                    <a href="javascript:password_reminder()">Forgotten Password?</a>
                                                </span>
                                            <p style="margin-top: -35px; margin-left: 140px; color: red;">
                                                <a href="../register/index.php">Register</a>
                                            </p>
                                            <input type="submit" name="loginBtn" value="Submit" class="efButton" style="float:right">
                                        </div>
                                    </div>
                                    <style type="text/css">
                                        .efPanel1 {
                                            width: 40%;
                                            height: 300px;
                                            margin: 0 auto;
                                            margin-bottom: 0px;
                                            margin-bottom: 0px;
                                            /* padding-left: ; */
                                            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16);
                                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16)
                                        }

                                        @media screen and (max-width: 500px) {
                                            .efPanel1 {
                                                width: 100%;
                                            }
                                        }
                                    </style>
                                    <input type="hidden" name="g-recaptcha-response" placeholder="" value="" id="g-recaptcha-response">
                                </form>
                            </div>

                            <div id="reminder" style="display:none" title="Password Reset">
                                <form action="/login/" method="post">
                                    <input type="hidden" name="pa" value="reminder">
                                    <input type="hidden" name="k" value="">
                                    <input type="hidden" name="re" value="/account/">

                                    <p>Please enter your email address or username in the field below:</p>
                                    <p><input class="efTextInput" name="identifier" type="text" style="width:460px"></p>
                                    <p><input type="submit" value="Submit" class="efButton  ui-button ui-widget" style="float:right"></p>
                                </form>
                            </div>
                            <script>
                                grecaptcha.ready(function() {
                                    grecaptcha.execute('6LctSPcUAAAAAGqGPCeWQHpISurU2OwIHk8P5BFB', {
                                            action: 'login'
                                        })
                                        .then(function(token) {
                                            document.getElementById('g-recaptcha-response').value = token;
                                        });
                                });
                            </script>

                        </div>

                    </div>
                    <!-- End Col -->
                </div>
                <!-- Row -->
            </div>
            <!-- End Container -->
        </section>



        <!-- End Hero Section -->
        <!-- Footer -->
        <footer class="footer-contact-area section-padding-100-0">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-single-widget mb-20">
                            <div class="footer-logo">
                                <a href="../index.php"><img src="../assets/custom/images/prime_white.png" alt="prime formations logo"></a>
                            </div>
                            <ul>
                                <li>
                                    <p class="mt-30" style="color:#ffffff;">
                                        <a href=""> Prime formations Limited offers a new perspective to the business of
                                            incorporating Companies in the UK by offering a distinctive and progressive
                                            business service <a>
                                            </a>
                                    </p>
                                </li>
                            </ul>

                            <div class="footer-contact-icon">
                                <a href="https://www.facebook.com/primeformations/" title="faceboo" taget="_blank"><i class="fa fa-facebook-square fa-2x" style="color: white;" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/PrimeFormation" title="twitter" taget="_blank"><i class="fa fa-twitter-square fa-2x" style="color: white;" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/company/prime-formations-limited" title="linkedin" taget="_blank"><i class="fa fa-linkedin-square fa-2x" style="color: white;" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-single-widget mb-20">
                            <h4>About Us</h4>
                            <ul>
                                <li>Company No: 07066200</li>
                                <li>VAT No: 356106021</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-single-widget mb-20">
                            <h4>Contact info</h4>
                            <ul>
                                <li><a href="#"><i class="material-icons md-18">location_on</i> Newspring House, 3
                                        Worcester Avenue, Old Swan, Liverpool L13 9AZ</a></li>
                                <li><a href="mailto:info@primeformations.co.uk"><i class="material-icons md-18">email</i> info@primeformations.co.uk</a></li>
                                <li><a href="tel:0333 533 0264"><i class="material-icons md-18">add_ic_call</i> 0333 533
                                        0264</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-single-widget">
                            <h4>Legal</h4>
                            <ul>
                                <li><a href="../terms/index.php">Terms & Conditions</a></li>
                                <li><a href="../Complaints/index.php">Complaints Policy</a></li>
                                <li><a href="../refunds-cancellation/index.php">Refunds & Cancellation Policy</a></li>
                                <li><a href="../privacy-policy/index.php">Privacy Policy</a></li>
                                <li><a href="../cookie/index.php">Cookies Policy</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <div class="copy-right-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-6 text-right mt-sm-cu-30">
                            <div class="footer-single-widget mb-5">
                                <div class="copy-right-content">
                                    <ul>
                                        <li>
                                            <p class="mt-30" style="color:#ffffff;">
                                                <a href="../index.php"> &copy; Prime Formations Ltd </a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Footer -->


    </div>
    <!-- End Wrapper -->





    <script src="../assets/builds/w/scripts/login.min.js?v=245"></script>

</body>
<!-- End Body -->

<!-- Footer Scripts -->
<script src="../assets/custom/files/js/pluginsd1eb.js"></script>
<script src="../assets/custom/files/js/common-min-gzip368d.js"></script>
<script src="../assets/custom/files/js/main-mine12f.js"></script>


<style>
    .cs01-tr {
        display: contents !important;
    }
</style>

</html>