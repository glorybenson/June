<?php
$pageTitle = "Register";
include('../config/function.php');

// if (isset($_SESSION['auth'])) {
//     redirect('../index.php', 'Your already Logged in');
// }
?>

<!doctype phpl>

<!-- phpL Start -->
<phpl>

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
        <meta http-equiv="content-type" content="text/phpl;charset=UTF-8">
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
        <script src="../assets/custom/files/js/jquery_min.js"></script>
        <script src="../assets/custom/files/js/jquery-ui_min.js"></script>

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

    <body id="ef-register/">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.phpl?id=GTM-K4TF3M6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Wrapper -->
        <div id="wrapper">

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
                                    <span class="site-header__waiting-time"><i class="fa fa-envelope-square fa-2x" aria-hidden="true"></i> <a href="mailto:info@primeformations.co.uk"> &nbsp; info@primeformations.co.uk</a></span>
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
                                                        <a href="../digital-print-package/index.php">Digital & Print Package </a>
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
                                                        <a href="../charity-registration/index.php">Charity Registration </a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../community-interest/index.php">Community Interest Company </a>
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
                                                        <a href="../registered-office-address/index.php">Registered Office Address</a>
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
                                                        <a href="../confirmation-statements/index.php">Confirmation Statements</a>
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
                                                        <a href="../director-appointment/index.php">Director Appointment & Resignation</a>
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
                                                        <a href="../change-accounting-reference-date/index.php">Change of Accounting Reference Date </a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../certificate-good-standing/index.php">Certificate of Good Standing </a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../apostilled-documents/index.php">Apostilled Documents</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../update-statutory/index.php">Update all five Statutory Registers [Annual]</a>
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
                                                        <a href="../self-assessment/index.php">Self Assessment Registration</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../partnership-registration/index.php">Partnership Registration</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../self-assessment-partnership-tax-return/index.php">Self Assessment and Partnership Tax Return</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../vat-registration/index.php">VAT Registration</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../vat-quarterly-returns/index.php">VAT Quarterly Returns</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../paye-registration/index.php">Paye Registration</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../first-year-payroll-administration/index.php"> Payroll Administration</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../gift-aid-claim-registration/index.php">Gift Aid Claim Registration</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../gift-aid-claim-filing/index.php">Gift Aid Claim Filing</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../corporation-tax-returns/index.php">Corporation Tax Returns</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../capital-gains-tax-filing/index.php">Capital Gains Tax Filing</a>
                                                    </li>
                                                </div>


                                                <div class="site-nav__menu-col-three">
                                                    <h3>Accounts</h3>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../dormant-financial/index.php">Dormant Financial Accounts</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../first-year-company-accounts/index.php"> Company Accounts</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../first-year-charity-accounts/index.php"> Charity Accounts</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../first-year-llp-accounts/index.php"> Limited Liability Partnership Accounts Accounts</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../first-year-cic-accounts/index.php"> Community Interest Company Accounts Accounts</a>
                                                    </li>
                                                    <li class="site-nav__menu-sub-item">
                                                        <a href="../first-year-monthly-bookkeeping/index.php"> Monthly Bookkeeping Service</a>
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
                                        <a href="../login/index.php">Client Login</a>
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
                <?= alertMessage() ?>

                            <div id="efPageContent" class="ui-widget">
                                <div id="efRegisterContainer">
                                    <h2>Account Registration</h2>
                                    <div class="ui-state-error ui-corner-all efAlert" id="error-message" style="display:none">
                                        <span class="ui-icon ui-icon-alert " style="float: left; margin-right: .3em;">
                                        </span> Invalid Submission Details
                                   
                                    </div>
                                    <div class="ui-state-highlight ui-corner-all efAlert" id="success-message" style="display:none"><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span><span id="success-text"></span></div>
                                    <div id="efRequiredFieldLabel">
                                        <p>Please complete the details below to register with us. All fields marked with <span class="required_mark">*</span> are mandatory.</p>
                                    </div>
                                    <!-- Main Form Content -->
                                    <form name="register" id="register" method="post" action="../code.php">
                                        <input type="hidden" name="pa" value="submit-registration">
                                        <div class="efRegisterUserWrapper efPanel ui-widget-content ui-corner-top">
                                            <div class="ui-corner-top ui-widget-header efPanelHeader">Account Holder</div>
                                            <div class="ui-corner-bottom efPanelContent">
                                                <table class="efRegisterUser">
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Organisation (if applicable):</label></td>
                                                        <td><input class="efTextInput" type="text" name="Organisation" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Title: <span class="required_mark">*</span></label></td>
                                                        <td><select class="efSelectInput" name="title">
                                                                <option value="">Please select...</option>
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Miss">Miss</option>
                                                                <option value="Sir">Sir</option>
                                                                <option value="Ms">Ms</option>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Madam">Madam</option>
                                                                <option value="Ma'am">Ma'am</option>
                                                                <option value="Lord">Lord</option>
                                                                <option value="Lady">Lady</option>
                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Forename: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="firstname" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Surname: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="lastname" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Phone Number: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="phone" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Email: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="email" id="Email" value=""></td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td><label class="efRegisterLabel">Confirm Email: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="EmailConfirm" id="EmailConfirm" value=""></td>
                                                    </tr> -->
                                                    <tr>
                                                        <td>
                                                            <label class="efRegisterLabel">Password: <span class="required_mark">*</span></label>
                                                        </td>
                                                        <td>
                                                            <div class="efPasswordWrapper">
                                                                <input type="password" class="efTextInput js-password-constraints" name="password" id="Password" value="">
                                                                <div class="efPasswordEyeOpen efTogglePasswordControl ef-js-text-mask" data-owner="Password">
                                                                    <div class="efPasswordEyeOpen">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="currentColor" class="bi bi-eye" viewbox="0 0 18 20">
                                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="efPasswordEyeClosed efTogglePasswordControl ef-js-text-mask efHide" data-owner="Password">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash" viewbox="0 0 18 20">
                                                                        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"></path>
                                                                        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"></path>
                                                                        <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div id="password-constraints" class="efHide">
                                                                <ul >
                                                                    <li id="password-constraint-uppercase">At least one uppercase character <img src="../assets/icons/tick.png" class="efHide"></li>
                                                                    <li id="password-constraint-lowercase">At least one lowercase character <img src="../assets/icons/tick.png" class="efHide"></li>
                                                                    <li id="password-constraint-number">At least one number <img src="../assets/icons/tick.png" class="efHide"> </li>
                                                                    <li id="password-constraint-symbol">At least one symbol <img src="../assets/icons/tick.png" class="efHide"></li>
                                                                    <li id="password-constraint-length">Minimum of 8 Characters <img src="../assets/icons/tick.png" class="efHide"> </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="efRegisterUserAddressWrapper efPanel ui-widget-content ui-corner-top">
                                            <div class="efPanelHeader ui-corner-top ui-widget-header">Primary Address</div>
                                            <div class="efPanelContent ui-corner-bottom">
                                                <table class="efRegisterUserAddress">

                                                    <tr>
                                                        <td><label class="efRegisterLabel">House Name / Number: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="houseNumber" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Street: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="street" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Locality:</label></td>
                                                        <td><input class="efTextInput" type="text" name="locality" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Town: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="town" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">County:</label></td>
                                                        <td><input class="efTextInput" type="text" name="county" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Post Code: <span class="required_mark">*</span></label></td>
                                                        <td><input class="efTextInput" type="text" name="postCode" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="efRegisterLabel">Country: <span class="required_mark">*</span></label></td>
                                                        <td><select id="Country" name="country" class="ui-widget-select efSelectInput">
                                                                <option value="AFGHANISTAN">AFGHANISTAN</option>
                                                                <option value="ALAND ISLANDS">ALAND ISLANDS</option>
                                                                <option value="ALBANIA">ALBANIA</option>
                                                                <option value="ALGERIA">ALGERIA</option>
                                                                <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                                                                <option value="ANDORRA">ANDORRA</option>
                                                                <option value="ANGOLA">ANGOLA</option>
                                                                <option value="ANGUILLA">ANGUILLA</option>
                                                                <option value="ANTARCTICA">ANTARCTICA</option>
                                                                <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
                                                                <option value="ARGENTINA">ARGENTINA</option>
                                                                <option value="ARMENIA">ARMENIA</option>
                                                                <option value="ARUBA">ARUBA</option>
                                                                <option value="AUSTRALIA">AUSTRALIA</option>
                                                                <option value="AUSTRIA">AUSTRIA</option>
                                                                <option value="AZERBAIJAN">AZERBAIJAN</option>
                                                                <option value="BAHAMAS">BAHAMAS</option>
                                                                <option value="BAHRAIN">BAHRAIN</option>
                                                                <option value="BANGLADESH">BANGLADESH</option>
                                                                <option value="BARBADOS">BARBADOS</option>
                                                                <option value="BELARUS">BELARUS</option>
                                                                <option value="BELGIUM">BELGIUM</option>
                                                                <option value="BELIZE">BELIZE</option>
                                                                <option value="BENIN">BENIN</option>
                                                                <option value="BERMUDA">BERMUDA</option>
                                                                <option value="BHUTAN">BHUTAN</option>
                                                                <option value="BOLIVIA">BOLIVIA</option>
                                                                <option value="BONAIRE, SINT EUSTATIUS AND SABA">BONAIRE, SINT EUSTATIUS AND SABA</option>
                                                                <option value="BOSNIA AND HERZEGOVINA">BOSNIA AND HERZEGOVINA</option>
                                                                <option value="BOTSWANA">BOTSWANA</option>
                                                                <option value="BOUVET ISLAND">BOUVET ISLAND</option>
                                                                <option value="BRAZIL">BRAZIL</option>
                                                                <option value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY</option>
                                                                <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                                                                <option value="BULGARIA">BULGARIA</option>
                                                                <option value="BURKINA FASO">BURKINA FASO</option>
                                                                <option value="BURUNDI">BURUNDI</option>
                                                                <option value="CAMBODIA">CAMBODIA</option>
                                                                <option value="CAMEROON">CAMEROON</option>
                                                                <option value="CANADA">CANADA</option>
                                                                <option value="CAPE VERDE">CAPE VERDE</option>
                                                                <option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
                                                                <option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN REPUBLIC</option>
                                                                <option value="CHAD">CHAD</option>
                                                                <option value="CHILE">CHILE</option>
                                                                <option value="CHINA">CHINA</option>
                                                                <option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
                                                                <option value="COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS</option>
                                                                <option value="COLOMBIA">COLOMBIA</option>
                                                                <option value="COMOROS">COMOROS</option>
                                                                <option value="CONGO">CONGO</option>
                                                                <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                                <option value="COOK ISLANDS">COOK ISLANDS</option>
                                                                <option value="COSTA RICA">COSTA RICA</option>
                                                                <option value="CROATIA">CROATIA</option>
                                                                <option value="CUBA">CUBA</option>
                                                                <option value="CURACAO">CURACAO</option>
                                                                <option value="CYPRUS">CYPRUS</option>
                                                                <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
                                                                <option value="DENMARK">DENMARK</option>
                                                                <option value="DJIBOUTI">DJIBOUTI</option>
                                                                <option value="DOMINICA">DOMINICA</option>
                                                                <option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
                                                                <option value="EAST TIMOR">EAST TIMOR</option>
                                                                <option value="ECUADOR">ECUADOR</option>
                                                                <option value="EGYPT">EGYPT</option>
                                                                <option value="EL SALVADOR">EL SALVADOR</option>
                                                                <option value="ENGLAND" selected="selected">ENGLAND</option>
                                                                <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
                                                                <option value="ERITREA">ERITREA</option>
                                                                <option value="ESTONIA">ESTONIA</option>
                                                                <option value="ESWATINI">ESWATINI</option>
                                                                <option value="ETHIOPIA">ETHIOPIA</option>
                                                                <option value="FALKLAND ISLANDS">FALKLAND ISLANDS</option>
                                                                <option value="FAROE ISLANDS">FAROE ISLANDS</option>
                                                                <option value="FIJI">FIJI</option>
                                                                <option value="FINLAND">FINLAND</option>
                                                                <option value="FRANCE">FRANCE</option>
                                                                <option value="FRENCH GUIANA">FRENCH GUIANA</option>
                                                                <option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
                                                                <option value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
                                                                <option value="GABON">GABON</option>
                                                                <option value="GAMBIA">GAMBIA</option>
                                                                <option value="GEORGIA">GEORGIA</option>
                                                                <option value="GERMANY">GERMANY</option>
                                                                <option value="GHANA">GHANA</option>
                                                                <option value="GIBRALTAR">GIBRALTAR</option>
                                                                <option value="GREECE">GREECE</option>
                                                                <option value="GREENLAND">GREENLAND</option>
                                                                <option value="GRENADA">GRENADA</option>
                                                                <option value="GUADELOUPE">GUADELOUPE</option>
                                                                <option value="GUAM">GUAM</option>
                                                                <option value="GUATEMALA">GUATEMALA</option>
                                                                <option value="GUERNSEY">GUERNSEY</option>
                                                                <option value="GUINEA">GUINEA</option>
                                                                <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                                                                <option value="GUYANA">GUYANA</option>
                                                                <option value="HAITI">HAITI</option>
                                                                <option value="HEARD ISLAND AND MCDONALD ISLANDS">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                                <option value="HONDURAS">HONDURAS</option>
                                                                <option value="HONG KONG">HONG KONG</option>
                                                                <option value="HUNGARY">HUNGARY</option>
                                                                <option value="ICELAND">ICELAND</option>
                                                                <option value="INDIA">INDIA</option>
                                                                <option value="INDONESIA">INDONESIA</option>
                                                                <option value="IRAN">IRAN</option>
                                                                <option value="IRAQ">IRAQ</option>
                                                                <option value="IRELAND">IRELAND</option>
                                                                <option value="ISLE OF MAN">ISLE OF MAN</option>
                                                                <option value="ISRAEL">ISRAEL</option>
                                                                <option value="ITALY">ITALY</option>
                                                                <option value="IVORY COAST">IVORY COAST</option>
                                                                <option value="JAMAICA">JAMAICA</option>
                                                                <option value="JAPAN">JAPAN</option>
                                                                <option value="JERSEY">JERSEY</option>
                                                                <option value="JORDAN">JORDAN</option>
                                                                <option value="KAZAKHSTAN">KAZAKHSTAN</option>
                                                                <option value="KENYA">KENYA</option>
                                                                <option value="KIRIBATI">KIRIBATI</option>
                                                                <option value="KOSOVO">KOSOVO</option>
                                                                <option value="KUWAIT">KUWAIT</option>
                                                                <option value="KYRGYZSTAN">KYRGYZSTAN</option>
                                                                <option value="LAOS">LAOS</option>
                                                                <option value="LATVIA">LATVIA</option>
                                                                <option value="LEBANON">LEBANON</option>
                                                                <option value="LESOTHO">LESOTHO</option>
                                                                <option value="LIBERIA">LIBERIA</option>
                                                                <option value="LIBYA">LIBYA</option>
                                                                <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                                                <option value="LITHUANIA">LITHUANIA</option>
                                                                <option value="LUXEMBOURG">LUXEMBOURG</option>
                                                                <option value="MACAO">MACAO</option>
                                                                <option value="MACEDONIA">MACEDONIA</option>
                                                                <option value="MADAGASCAR">MADAGASCAR</option>
                                                                <option value="MALAWI">MALAWI</option>
                                                                <option value="MALAYSIA">MALAYSIA</option>
                                                                <option value="MALDIVES">MALDIVES</option>
                                                                <option value="MALI">MALI</option>
                                                                <option value="MALTA">MALTA</option>
                                                                <option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
                                                                <option value="MARTINIQUE">MARTINIQUE</option>
                                                                <option value="MAURITANIA">MAURITANIA</option>
                                                                <option value="MAURITIUS">MAURITIUS</option>
                                                                <option value="MAYOTTE">MAYOTTE</option>
                                                                <option value="MEXICO">MEXICO</option>
                                                                <option value="MICRONESIA">MICRONESIA</option>
                                                                <option value="MOLDOVA">MOLDOVA</option>
                                                                <option value="MONACO">MONACO</option>
                                                                <option value="MONGOLIA">MONGOLIA</option>
                                                                <option value="MONTENEGRO">MONTENEGRO</option>
                                                                <option value="MONTSERRAT">MONTSERRAT</option>
                                                                <option value="MOROCCO">MOROCCO</option>
                                                                <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                                                                <option value="MYANMAR">MYANMAR</option>
                                                                <option value="NAMIBIA">NAMIBIA</option>
                                                                <option value="NAURU">NAURU</option>
                                                                <option value="NEPAL">NEPAL</option>
                                                                <option value="NETHERLANDS">NETHERLANDS</option>
                                                                <option value="NEW CALEDONIA">NEW CALEDONIA</option>
                                                                <option value="NEW ZEALAND">NEW ZEALAND</option>
                                                                <option value="NICARAGUA">NICARAGUA</option>
                                                                <option value="NIGER">NIGER</option>
                                                                <option value="NIGERIA">NIGERIA</option>
                                                                <option value="NIUE">NIUE</option>
                                                                <option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
                                                                <option value="NORTH KOREA">NORTH KOREA</option>
                                                                <option value="NORTHERN IRELAND">NORTHERN IRELAND</option>
                                                                <option value="NORTHERN MARIANA ISLANDS">NORTHERN MARIANA ISLANDS</option>
                                                                <option value="NORWAY">NORWAY</option>
                                                                <option value="OMAN">OMAN</option>
                                                                <option value="PAKISTAN">PAKISTAN</option>
                                                                <option value="PALAU">PALAU</option>
                                                                <option value="PALESTINE, STATE OF">PALESTINE, STATE OF</option>
                                                                <option value="PANAMA">PANAMA</option>
                                                                <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
                                                                <option value="PARAGUAY">PARAGUAY</option>
                                                                <option value="PERU">PERU</option>
                                                                <option value="PHILIPPINES">PHILIPPINES</option>
                                                                <option value="PITCAIRN">PITCAIRN</option>
                                                                <option value="POLAND">POLAND</option>
                                                                <option value="PORTUGAL">PORTUGAL</option>
                                                                <option value="PUERTO RICO">PUERTO RICO</option>
                                                                <option value="QATAR">QATAR</option>
                                                                <option value="REUNION">REUNION</option>
                                                                <option value="ROMANIA">ROMANIA</option>
                                                                <option value="RUSSIA">RUSSIA</option>
                                                                <option value="RWANDA">RWANDA</option>
                                                                <option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
                                                                <option value="SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA">SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA</option>
                                                                <option value="SAINT KITTS AND NEVIS">SAINT KITTS AND NEVIS</option>
                                                                <option value="SAINT LUCIA">SAINT LUCIA</option>
                                                                <option value="SAINT MARTIN (FRENCH PART)">SAINT MARTIN (FRENCH PART)</option>
                                                                <option value="SAINT PIERRE AND MIQUELON">SAINT PIERRE AND MIQUELON</option>
                                                                <option value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT AND THE GRENADINES</option>
                                                                <option value="SAMOA">SAMOA</option>
                                                                <option value="SAN MARINO">SAN MARINO</option>
                                                                <option value="SAO TOME AND PRINCIPE">SAO TOME AND PRINCIPE</option>
                                                                <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                                                                <option value="SCOTLAND">SCOTLAND</option>
                                                                <option value="SENEGAL">SENEGAL</option>
                                                                <option value="SERBIA">SERBIA</option>
                                                                <option value="SEYCHELLES">SEYCHELLES</option>
                                                                <option value="SIERRA LEONE">SIERRA LEONE</option>
                                                                <option value="SINGAPORE">SINGAPORE</option>
                                                                <option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
                                                                <option value="SLOVAKIA">SLOVAKIA</option>
                                                                <option value="SLOVENIA">SLOVENIA</option>
                                                                <option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
                                                                <option value="SOMALIA">SOMALIA</option>
                                                                <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                                                                <option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                                <option value="SOUTH KOREA">SOUTH KOREA</option>
                                                                <option value="SOUTH SUDAN">SOUTH SUDAN</option>
                                                                <option value="SPAIN">SPAIN</option>
                                                                <option value="SRI LANKA">SRI LANKA</option>
                                                                <option value="SUDAN">SUDAN</option>
                                                                <option value="SURINAME">SURINAME</option>
                                                                <option value="SVALBARD AND JAN MAYEN">SVALBARD AND JAN MAYEN</option>
                                                                <option value="SVALBARD AND JAN MAYEN ISLANDS">SVALBARD AND JAN MAYEN ISLANDS</option>
                                                                <option value="SWEDEN">SWEDEN</option>
                                                                <option value="SWITZERLAND">SWITZERLAND</option>
                                                                <option value="SYRIA">SYRIA</option>
                                                                <option value="TAIWAN">TAIWAN</option>
                                                                <option value="TAJIKISTAN">TAJIKISTAN</option>
                                                                <option value="TANZANIA">TANZANIA</option>
                                                                <option value="THAILAND">THAILAND</option>
                                                                <option value="TOGO">TOGO</option>
                                                                <option value="TOKELAU">TOKELAU</option>
                                                                <option value="TONGA">TONGA</option>
                                                                <option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO</option>
                                                                <option value="TUNISIA">TUNISIA</option>
                                                                <option value="TURKEY">TURKEY</option>
                                                                <option value="TURKMENISTAN">TURKMENISTAN</option>
                                                                <option value="TURKS AND CAICOS ISLANDS">TURKS AND CAICOS ISLANDS</option>
                                                                <option value="TUVALU">TUVALU</option>
                                                                <option value="UGANDA">UGANDA</option>
                                                                <option value="UKRAINE">UKRAINE</option>
                                                                <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                                                                <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                                                                <option value="UNITED STATES">UNITED STATES</option>
                                                                <option value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                                <option value="URUGUAY">URUGUAY</option>
                                                                <option value="UZBEKISTAN">UZBEKISTAN</option>
                                                                <option value="VANUATU">VANUATU</option>
                                                                <option value="VATICAN CITY">VATICAN CITY</option>
                                                                <option value="VENEZUELA">VENEZUELA</option>
                                                                <option value="VIETNAM">VIETNAM</option>
                                                                <option value="VIRGIN ISLANDS, BRITISH">VIRGIN ISLANDS, BRITISH</option>
                                                                <option value="VIRGIN ISLANDS, U.S.">VIRGIN ISLANDS, U.S.</option>
                                                                <option value="WALES">WALES</option>
                                                                <option value="WALLIS AND FUTUNA">WALLIS AND FUTUNA</option>
                                                                <option value="WESTERN SAHARA">WESTERN SAHARA</option>
                                                                <option value="YEMEN">YEMEN</option>
                                                                <option value="YUGOSLAVIA">YUGOSLAVIA</option>
                                                                <option value="ZAMBIA">ZAMBIA</option>
                                                                <option value="ZIMBABWE">ZIMBABWE</option>


                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="efRegisterTermsWrapper efWidget ui-widget-content ui-corner-all">
                                            <p><label><input type="checkbox" id="efNewsletterInput" name="newsletter"> Tick this box to join our newsletter mailing list.</label></p>
                                            <p><label><input type="checkbox" id="efRemarketing" name="remarketing"> I would like to receive updates on products and services provided by our business partners</label></p>
                                            <p><label><input type="checkbox" id="efTermsInput" name="terms"> Tick this box to agree to our <a href="../terms/index.php" target="_blank" rel="noopener">Terms and Conditions</a> &amp; <a href="../privacy-policy/index.php" target='_blank'>Privacy Policy</a>.</label></p>
                                            <!-- captcha -->
                                        </div>

                                        <!-- <input type="hidden" name="redir" value=""> -->


                                        <div id="efRegisterSubmitButton">
                                            <button class="efButton ui-button ui-widget" name="clientReg">Submit Registration</button>
                                        </div>
                                    </form>

                                </div>
                                <img src="../assets/loaders/inline.gif" style="visibility:hidden">
                                <div id="reminder" style="display:none" title="Password Reset">
                                    <form action="/login/" method="post">
                                        <input type="hidden" name="pa" value="reminder">
                                        <p>Please enter your email address or username in the field below:</p>
                                        <p><input class="efTextInput" name="identifier" type="text" style="width:460px"></p>
                                        <p><input type="submit" value="Submit" class="efButton  ui-button ui-widget" style="float:right"></p>
                                    </form>
                                </div>

                                <script>
                                    grecaptcha.ready(function() {
                                        grecaptcha.execute('6LctSPcUAAAAAGqGPCeWQHpISurU2OwIHk8P5BFB', {
                                                action: 'register'
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
                                            <a href=""> Prime formations Limited offers a new perspective to the business of incorporating Companies in the UK by offering a distinctive and progressive business service <a>
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
                                    <li><a href="#"><i class="material-icons md-18">location_on</i> Newspring House, 3 Worcester Avenue, Old Swan, Liverpool L13 9AZ</a></li>
                                    <li><a href="mailto:info@primeformations.co.uk"><i class="material-icons md-18">email</i> info@primeformations.co.uk</a></li>
                                    <li><a href="tel:0333 533 0264"><i class="material-icons md-18">add_ic_call</i> 0333 533 0264</a></li>
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




        <script src="../assets/builds/w/scripts/register.min.js"></script>

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

</phpl>
<!-- End phpL -->