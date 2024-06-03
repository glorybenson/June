<?php
include('includes/header.php');
?>

<head>

	<link rel="shortcut icon" type="image/png" href="assets/custom/images/prime_fav.png" />
	<meta id="meta-ef-urchin-uid" name="ef-urchin-uid" content="">
	<meta id="meta-ef-urchin-oid" name="ef-urchin-oid" content="">
	<meta id="meta-ef-urchin-latest-name-search" name="ef-urchin-latest-name-search" content="">

		<!-- <script>
        var modernBrowser = ('fetch' in window &&'assign' in Object && 'find' in Array.prototype );
            if (!modernBrowser) {
                var scriptElement = document.createElement('script');
                scriptElement.async = false;
                scriptElement.src = 'https://cdn.polyfill.io/v2/polyfill.min.js?features=default,fetch,Array.prototype.find';
                document.head.appendChild(scriptElement);
            }
        </script> -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/builds/w/styles/ef-core.min.css?v=245" rel="stylesheet" type="text/css">
	<link href="assets/custom/themes/new/jquery-ui.min.css?v=245" rel="stylesheet" type="text/css">

	<title>
		<?php if (isset($pageTitle)) {
			echo $pageTitle;
		} else {
			echo webSetting('title') ?? '';
		} ?>
		Home Page
	</title>

</head>

<body data-gr-ext-disabled="forever" data-gr-ext-installed="" data-new-gr-c-s-check-loaded="14.1027.0">

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
		<link href="assets/builds/w/styles/ef-core.min.css?v=245" rel="stylesheet" type="text/css">
		<link href="assets/custom/themes/new/jquery-ui.min.css?v=245" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


		<!-- Google tag (gtag.js) -->
		<script async="" src="gtag/js?id=AW-1022629653"></script>
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
		<link rel="shortcut icon" type="image/png" href="assets/custom/images/prime_fav.png">

		<!-- SEO Tags -->
		<title>Prime Formations - We are expert in Company Formation , Company Registration & Company setup.</title>
		<meta name="description" content="Prime Formations Website - The Best UK Online Company Formation Agent, Company Registration, Company setup, VAT Registration, Confirmation Statements,">

		<!-- Fonts -->
		<link rel="stylesheet" href="icon?family=Material+Icons">
		<link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_font_awesome.css">

		<!-- Styles -->
		<link href="assets/themes/purple/theme.css?v=135" rel="stylesheet" type="text/css">
		<link href="assets/builds/w/styles/ef-core.min-1.css?v=135" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="assets/custom/files/css/index_aws.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_bootstrap.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_font_awesome.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_ionicons.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_master.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_skin.css">
		<link rel="stylesheet" href="assets/custom/files/css/index_style.css">

		<script src="assets/builds/w/scripts/plugin.efiling.full.min.js?v=135"></script>

		<script>
			var modernBrowser = ('fetch' in window && 'assign' in Object && 'find' in Array.prototype);
			if (!modernBrowser) {
				var scriptElement = document.createElement('script');
				scriptElement.async = false;
				scriptElement.src = 'https://cdn.polyfill.io/v2/polyfill.min.js?features=default,fetch,Array.prototype.find';
				document.head.appendChild(scriptElement);
			}
		</script>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/custom/files/css/bootstrap_min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/custom/files/css/style.css">
		<!-- Responsive CSS -->
	 	<link rel="stylesheet" href="assets/custom/files/css/responsive.css">

		<!-- JavaScript -->
		<script src="assets/custom/files/js/plugin_efiling_full_min5f9f.js"></script>
        <script src="assets/custom/files/js/jquery_min.js"></script>
        <script src="assets/custom/files/js/jquery-ui_min.js"></script>

		<script src="ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>


		<!-- Style Override -->
		<link rel="stylesheet" href="assets/custom/files/css/override-style.css">

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

	<body class="home-page">
		<?= alertMessage() ?>


		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.phpl?id=GTM-K4TF3M6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<i><!-- TrustBox script --></i>
		<script type="text/javascript" src="bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script>
		<i><!-- End TrustBox script --></i> 
		<!-- Hero & Nav -->
		<div class="static-pages">
			<section class="home-hero">
				<div class="home-hero__main">
					<header class="site-header site-header--home">
						<div class="container site-header__wrap">
							<div class="row">
								<div class="col-xs-8 col-sm-5 col-lg-5">
									<a class="site-header__logo" href="index.php">
										<img alt="Prime Formations Logo" src="assets/custom/images/prime_white.png">

									</a>
								</div>

								<div class="col-xs-5 col-sm-6 col-lg-7 hidden-xs">
									<div class="site-header__contact">
										<span class="site-header__telephone">
											<a href="tel:03335330264">
												0333 533 0264
											</a>

										</span>

										<span class="site-header__waiting-time">

											<a href="mailto:info@primeformations.co.uk">
												&nbsp; info@primeformations.co.uk
											</a>

										</span>
									</div>
								</div>

								<div class="site-nav-burger col-xs-2 col-sm-1">
									<div class="site-nav-burger__wrap">
									</div>
								</div>
							</div>
						</div>

						<section class="site-nav__wrap site-nav__wrap--home">
							<div class="container">
								<div class="col closed">
									<ul class="site-nav__body">
										<li class="site-nav__item">
											<a href="index.php">
												Home
											</a>
										</li>
										<li class="site-nav__item site-nav__item--dropdown">
											<a href="#" id="link-formation-packages">
												Packages
											</a>
											<div class="site-nav__menu site-nav__menu--packages site-nav__menu--inactive">
												<div class="site-nav__menu-col-one">
													<h3>
														Company Formation
													</h3>

													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="digital-package/index.php">
																Digital Package
															</a>
														</li>

														<li class="site-nav__menu-sub-item">
															<a href="privacy-package/index.php">
																Privacy Package
															</a>
														</li>

														<li class="site-nav__menu-sub-item">
															<a href="inclusive-package/index.php">
																Inclusive Package
															</a>
														</li>
													</ul>
												</div>

												<div class="site-nav__menu-col-two">
													<h3>
														Special Formation
													</h3>

													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="lbg-package/index.php">
																Limited by Guarantee
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="llp-package/index.php">
																Limited Liability Partnership
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="charity-company/index.php">
																Charity Company
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="community-interest/index.php">
																Community Interest Company
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="charity-registration/index.php">
																Charity Registration
															</a>
														</li>
													</ul>
												</div>

												<div class="site-nav__menu-col-bottom">
													<a class="button site-nav__wrap--button" href="packages/index.php">
														Compare Packages
													</a>
												</div>

												<ul class="site-nav__menu-links">
												</ul>
											</div>
										</li>
										<li class="site-nav__item site-nav__item--dropdown">
											<a href="#" id="link-formation-packages">
												Address Services
											</a>
											<div class="site-nav__menu site-nav__menu--packages site-nav__menu--inactive">
												<div class="site-nav__menu-col-one">
													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="registered-office-address/index.php">
																Registered Office Address
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="service-address/index.php">
																Service Address
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="business-address/index.php">
																Business Address
															</a>
														</li>
													</ul>
												</div>

												<ul class="site-nav__menu-links">
												</ul>
											</div>
										</li>
										<li class="site-nav__item site-nav__item--dropdown">
											<a href="#" id="link-formation-packages">
												Company Services
											</a>
											<div class="site-nav__menu site-nav__menu--packages site-nav__menu--inactive">
												<div class="site-nav__menu-col-one">
													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="confirmation-statements/index.php">
																Confirmation Statements
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="company-dissolution/index.php">
																Company Dissolution
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="company-restoration/index.php">
																Company Restoration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="company-name-change/index.php">
																Company Name Change
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="director-appointment/index.php">
																Director Appointment &amp; Resignation
															</a>
														</li>
													</ul>
												</div>

												<div class="site-nav__menu-col-two">
													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="issue-of-shares/index.php">
																Issue of Shares
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="transfer-of-shares/index.php">
																Transfer of Shares
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="change-accounting-reference-date/index.php">
																Change of Accounting Reference Date
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="certificate-good-standing/index.php">
																Certificate of Good Standing
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="apostilled-documents/index.php">
																Apostilled Documents
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="update-statutory/index.php">
																Update all five Statutory Registers [Annual]
															</a>
														</li>
													</ul>
												</div>

												<ul class="site-nav__menu-links">
												</ul>
											</div>
										</li>
										<li class="site-nav__item site-nav__item--dropdown">
											<a href="#">
												Tax &amp; Accounts Services
											</a>
											<div class="site-nav__menu site-nav__menu--inactive site-nav__menu--additional-services">
												<!-- <div class="site-nav__menu-col-one">
											<h3 class="mr-bot-10 pd-bot-5">
												Finance
											</h3>

											<ul>
												<li class="site-nav__menu-sub-item">
													<a href="barclays/index.php">
														Barclays Business Account 
													</a>
												</li>
												<li class="site-nav__menu-sub-item">
													<a href="cashplus-bank/index.php">
														Cashplus Bank Account 
													</a>
												</li>
											</ul>
										</div> -->

												<div class="site-nav__menu-col-two">
													<h3>
														Tax
													</h3>

													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="self-assessment/index.php">
																Self Assessment Registration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="partnership-registration/index.php">
																Partnership Registration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="self-assessment-partnership-tax-return/index.php">
																Self Assessment and Partnership Tax Return
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="vat-registration/index.php">
																VAT Registration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="vat-quarterly-returns/index.php">
																VAT Quarterly Returns
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="paye-registration/index.php">
																Paye Registration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="first-year-payroll-administration/index.php">
																Payroll Administration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="gift-aid-claim-registration/index.php">
																Gift Aid Claim Registration
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="gift-aid-claim-filing/index.php">
																Gift Aid Claim Filing
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="corporation-tax-returns/index.php">
																Corporation Tax Returns
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="capital-gains-tax-filing/index.php">
																Capital Gains Tax Filing
															</a>
														</li>
													</ul>
												</div>
												<div class="site-nav__menu-col-three">
													<h3>
														Accounts
													</h3>
													<ul>
														<li class="site-nav__menu-sub-item">
															<a href="dormant-financial/index.php">
																Dormant Financial Accounts
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="first-year-company-accounts/index.php">
																Company Accounts
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="first-year-charity-accounts/index.php">
																Charity Accounts
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="first-year-llp-accounts/index.php">
																Limited Liability Partnership Accounts
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="first-year-cic-accounts/index.php">
																Community Interest Company Accounts
															</a>
														</li>
														<li class="site-nav__menu-sub-item">
															<a href="first-year-monthly-bookkeeping/index.php">
																Monthly Bookkeeping Service
															</a>
														</li>
													</ul>
												</div>

												<ul class="site-nav__menu-links">
												</ul>
											</div>
										</li>
									</ul>

									<ul class="site-nav__body--subnav">
										<li class="site-nav__item site-nav__item--subnav">
											<a href="https://aamatthewtax.com/">
												Blog
											</a>
										</li>
										<li class="site-nav__item site-nav__item--subnav">
											<a href="about/index.php">
												About
											</a>
										</li>
										<li class="site-nav__item site-nav__item--subnav">
											<a href="contact-us/index.php">
												Contact
											</a>
										</li>
										<li class="site-nav__item site-nav__item--subnav site-nav__item--login">
											<a href="login/index.php">
												Login
											</a>
										</li>
									</ul>
								</div>
							</div>
						</section>

						<div class="container container--name-search">
							<div class="row">
								<div class="col">
									<div class="company-name-search" id="scroll-to">
										<h1>
											Company Formation made easy from &pound;12.89
										</h1>

										<h3>
											Order a company using your mobile phone today!
										</h3>

										<div id="nameCheckNotification">
										</div>
										<a class="button button--secondary button--hide" href="formation-packages/index.php" id="continue-button">
											Save &amp; Continue
										</a>
										<form id="searchForm">
											
											<input type="text" id="searchTerm" name="q" placeholder="Enter search term...">
											<button class="button button--home-search" type="submit">Search</button>
										</form>
										<br>
										<div id="searchResults"></div>

										<script src="script.js"></script>

									</div>
								</div>
							</div>
						</div>

						<div class="home-hero__review">
							<div class="container">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<!-- <div class="home-hero__review-box home-hero__review-box--banking">
									<span class="home-hero__review-box___title">
										Banking Partners 
									</span>
									<div class="home-hero__review-box___logos">
										<div class="home-hero__review-box___logo home-hero__review-box___logos--barclays">
										</div>

										<div class="home-hero__review-box___logo home-hero__review-box___logos--Natwest">
										</div>

										<div class="home-hero__review-box___logo home-hero__review-box___logos--cashplus">
										</div>
									</div>
								</div> -->
							</div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 google-center">
								 Google Reviews
								<div data-romw-token="hLjlUv2dELLKX95DJD3ZUbXH11XLstHF7YYTOV62G6zdxkaw9S">
								</div>
								<script src="https://reviewsonmywebsite.com/js/v2/embed.js?id=c338ae55b38e487f19ae" type="text/javascript"></script>
							</div>

									<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
										<!--<i>TrustBox widget - Review Collector;</i>-->
										<div class="trustpilot-widget" data-businessunit-id="61088ff329f1cf001da261d0" data-locale="en-GB" data-style-height="52px" data-style-width="100%" data-template-id="56278e9abfbbba0bdcd568bc">
											<a href="https://uk.trustpilot.com/review/primeformations.co.uk" rel="noopener" target="_blank">
												Trustpilot
											</a>
										</div>
										<i><!-- End TrustBox widget --></i>
									</div>
								</div>
							</div>
						</div>
					</header>
				</div>
			</section>
		</div>
		<!-- End Hero & Nav --> <!-- Prime Formation Services -->

		<div class="our-service-area section-padding-100-50">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-7">
						<div class="section-title t_center">
							<h2>
								Ready To Register Your Brand-New UK Company?
							</h2>

							<p>
								It could not be easier to set up a limited company with Prime Formations.
							</p>

							<p>
								To start the company registration process, simply enter your company name into our name
								check tool, select a company formation package, add any of the below services you may
								require, proceed to checkout. It really is that simple!
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="content-box">
							<div class="inner-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
								<div class="row">
									<div class="col-md-6 col-lg-3">
										<div class="single-item">
											<div class="bg-layer">
											</div>

											<div class="icon-box one">
												<svg aria-hidden="true" class="svg-inline--fa fa-file-signature fa-w-18" data-icon="file-signature" data-prefix="fas" focusable="false" role="img" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M218.17 424.14c-2.95-5.92-8.09-6.52-10.17-6.52s-7.22.59-10.02 6.19l-7.67 15.34c-6.37 12.78-25.03 11.37-29.48-2.09L144 386.59l-10.61 31.88c-5.89 17.66-22.38 29.53-41 29.53H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h12.39c4.83 0 9.11-3.08 10.64-7.66l18.19-54.64c3.3-9.81 12.44-16.41 22.78-16.41s19.48 6.59 22.77 16.41l13.88 41.64c19.75-16.19 54.06-9.7 66 14.16 1.89 3.78 5.49 5.95 9.36 6.26v-82.12l128-127.09V160H248c-13.2 0-24-10.8-24-24V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24v-40l-128-.11c-16.12-.31-30.58-9.28-37.83-23.75zM384 121.9c0-6.3-2.5-12.4-7-16.9L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1zm-96 225.06V416h68.99l161.68-162.78-67.88-67.88L288 346.96zm280.54-179.63l-31.87-31.87c-9.94-9.94-26.07-9.94-36.01 0l-27.25 27.25 67.88 67.88 27.25-27.25c9.95-9.94 9.95-26.07 0-36.01z" fill="currentColor"></path>
												</svg>
											</div>

											<h5>
												<a href="packages/index.php">
													Companies House Service
												</a>
											</h5>

											<p class="text mb-0">
												We will provide you with low-cost options and many benefits that save
												you time and money, as we understand that registering your company with
												Companies House can be time consuming as well as confusing.
											</p>
										</div>
									</div>

									<div class="col-md-6 col-lg-3">
										<div class="single-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="bg-layer">
											</div>

											<div class="icon-box two">
												<svg aria-hidden="true" class="svg-inline--fa fa-map-marked-alt fa-w-18" data-icon="map-marked-alt" data-prefix="fas" focusable="false" role="img" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z" fill="currentColor"></path>
												</svg>
											</div>

											<h5>
												<a href="registered-office-address/index.php">
													Address Services
												</a>
											</h5>

											<p class="text mb-0">
												Give your business the trustworthy image of a successful Liverpool
												brand, by using our address services you will receive a prime registered
												office address.
											</p>
										</div>
									</div>

									<div class="col-md-6 col-lg-3">
										<div class="single-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
											<div class="bg-layer">
											</div>

											<div class="icon-box three">
												<svg aria-hidden="true" class="svg-inline--fa fa-university fa-w-16" data-icon="university" data-prefix="fas" focusable="false" role="img" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z" fill="currentColor"></path>
												</svg>
											</div>

											<h5>
												<a href="barclays/index.php">
													Charity Registration
												</a>
											</h5>

											<p class="text mb-0">
												Prime Formations offers up charity registration services particularly charitable organzation .
											</p>
										</div>
									</div>

									<div class="col-md-6 col-lg-3">
										<div class="single-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
											<div class="bg-layer">
											</div>

											<div class="icon-box four">
												<svg aria-hidden="true" class="svg-inline--fa fa-balance-scale-right fa-w-20" data-icon="balance-scale-right" data-prefix="fas" focusable="false" role="img" viewbox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M96 464v32c0 8.84 7.16 16 16 16h224c8.84 0 16-7.16 16-16V153.25c4.56-2 8.92-4.35 12.99-7.12l142.05 47.63c8.38 2.81 17.45-1.71 20.26-10.08l10.17-30.34c2.81-8.38-1.71-17.45-10.08-20.26l-128.4-43.05c.42-3.32 1.01-6.6 1.01-10.03 0-44.18-35.82-80-80-80-29.69 0-55.3 16.36-69.11 40.37L132.96.83c-8.38-2.81-17.45 1.71-20.26 10.08l-10.17 30.34c-2.81 8.38 1.71 17.45 10.08 20.26l132 44.26c7.28 21.25 22.96 38.54 43.38 47.47V448H112c-8.84 0-16 7.16-16 16zM0 304c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02c0-15.67 2.08-7.25-85.05-181.51-17.68-35.36-68.22-35.29-85.87 0C-1.32 295.27.02 287.82.02 304H0zm56-16l72-144 72 144H56zm328.02 144H384c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02c0-15.67 2.08-7.25-85.05-181.51-17.68-35.36-68.22-35.29-85.87 0-86.38 172.78-85.04 165.33-85.04 181.51zM440 416l72-144 72 144H440z" fill="currentColor"></path>
												</svg>
											</div>

											<h5>
												<a href="corporation-tax-returns/index.php">
													Legal and Other services
												</a>
											</h5>

											<p class="text mb-0">
												We offer a comprehensive VAT registration service, we can help set up
												your PAYE. We also offer a robust Legal service for your company in
												areas such as Confirmation Statements, Issue of Shares, Transfer of
												Shares, Company Dissolution and Company Restoration amongst others.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Prime Formation Services  --> <!-- Formation Steps -->

		<section class="how-it-work-area section-padding-100-50">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-7">
						<div class="section-title t_center">
							<h2>
								Our Prime Process to Help You Register Your Company in Minutes!
							</h2>

							<p>
								Let&rsquo;s get started and register your company today.
							</p>

							<p>
								Just follow our 4 simple steps.
							</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<div class="how-it-work-content mb-50">
							<div class="single-work-area">
								<div class="work-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-search fa-w-16" data-icon="search" data-prefix="fas" focusable="false" role="img" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" fill="currentColor"></path>
									</svg>
								</div>

								<h4>Search Company Name</h4>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="how-it-work-content">
							<div class="single-work-area mb-50">
								<div class="work-icon work-icon-p">
									<svg aria-hidden="true" class="svg-inline--fa fa-mouse-pointer fa-w-10" data-icon="mouse-pointer" data-prefix="fas" focusable="false" role="img" viewbox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M302.189 329.126H196.105l55.831 135.993c3.889 9.428-.555 19.999-9.444 23.999l-49.165 21.427c-9.165 4-19.443-.571-23.332-9.714l-53.053-129.136-86.664 89.138C18.729 472.71 0 463.554 0 447.977V18.299C0 1.899 19.921-6.096 30.277 5.443l284.412 292.542c11.472 11.179 3.007 31.141-12.5 31.141z" fill="currentColor"></path>
									</svg>
								</div>

								<h4>Select formation package</h4>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="how-it-work-content">
							<div class="single-work-area mb-50">
								<div class="work-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-shopping-cart fa-w-18" data-icon="shopping-cart" data-prefix="fas" focusable="false" role="img" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" fill="currentColor"></path>
									</svg>
								</div>

								<h4>Checkout and Pay</h4>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="how-it-work-content">
							<div class="single-work-area mb-50">
								<div class="work-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-desktop fa-w-18" data-icon="desktop" data-prefix="fas" focusable="false" role="img" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z" fill="currentColor"></path>
									</svg>
								</div>

								<h4>Complete registration process</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Formation Steps --> <!-- Pricing Standard -->

		<div class="price-table-area  section-padding-100-0" id="price">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-7">
						<div class="section-title t_center">
							<h2>
								Company Formation
							</h2>
						</div>
					</div>
				</div>
				<?php
				// Function to fetch column based on ID
				function getColumnById($conn, $id)
				{
					$sql = "SELECT amount FROM packages WHERE id = $id"; // Change 'column_name' and 'your_table' accordingly

					$result = $conn->query($sql);
					$rows = array();

					if ($result->num_rows > 0) {
						// Fetch the result and add it to the array
						while ($row = $result->fetch_assoc()) {
							$rows[] = $row["amount"]; // Change 'column_name' accordingly
						}
					}

					return $rows;
				}

				// Example usage of the function with different IDs
				$id1 = 7;
				$id2 = 6;
				$id3 = 8;

				$result1 = getColumnById($conn, $id1);
				$result2 = getColumnById($conn, $id2);
				$result3 = getColumnById($conn, $id3);

				// Handle the output outside the function
				// echo "Results for ID $id1: ";
				// foreach ($result1 as $value) {
				// 	echo $value . ", ";
				// }
				// echo "<br>";

				// echo "Results for ID $id2: ";
				// foreach ($result2 as $value) {
				// 	echo $value . ", ";
				// }
				// echo "<br>";

				?>

				<div class="price-table-area  section-padding-10-50" id="price">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-md-6 col-12">
								<div class="box box-default ">
									<div class="box-header with-border" style="background-color: #4863eb; text-align: center;">
										<h3 class="box-title">
											Digital Package
										</h3>

										<div class="box-tools pull-right">
											<button class="btn btn-box-tool" data-widget="collapse" type="button"><i class="material-icons md-18">keyboard_arrow_down</i></button>
										</div>
									</div>

									<div class="box-body" style="background-color: #4863eb;">
										<div class="pricing-table-new mb-50 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
											<div class="pricing-table text-center">
												<div class="choice-box">
													Popular Choice
												</div>

												<div class="table-header">
													<h2 class="price">
														<?php
														foreach ($result2 as $value) {
															echo $value . " ";
														}
														?>
													</h2>
												</div>

												<div class="table-content">
													Form a ready to trade company online
												</div>

												<div class="table-btn mt-20">
													<a class="btn theme-btn-two" href="digital-package/index.php">
														Read More
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-md-6 col-12">
								<div class="box box-default">
									<div class="box-header with-border" style="background-color: #eb5a51; text-align: center;">
										<h3 class="box-title">
											Privacy Package
										</h3>

										<div class="box-tools pull-right">
											<button class="btn btn-box-tool" data-widget="collapse" type="button"><i class="material-icons md-18">keyboard_arrow_down</i></button>
										</div>
									</div>

									<div class="box-body" style="background-color: #eb5a51;">
										<div class="pricing-table-new mb-50 wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="pricing-table text-center">
												<div class="choice-box">
													Popular Choice
												</div>

												<div class="table-header">
													<h2 class="price">
														<?php
														foreach ($result1 as $value) {
															echo $value . " ";
														}
														?>
													</h2>
												</div>

												<div class="table-content">
													Form a ready to trade company online with a registered office and
													service address to protect your home address and your privacy
												</div>

												<div class="table-btn mt-20">
													<a class="btn theme-btn-two" href="privacy-package/index.php">
														Read More
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-md-6 col-12">
								<div class="box box-default ">
									<div class="box-header with-border" style="background-color: #0ad37b; text-align: center;">
										<h3 class="box-title">
											Inclusive Package
										</h3>

										<div class="box-tools pull-right">
											<button class="btn btn-box-tool" data-widget="collapse" type="button"><i class="material-icons md-18">keyboard_arrow_down</i></button>
										</div>
									</div>

									<div class="box-body" style="background-color: #0ad37b;">
										<div class="pricing-table-new mb-50 wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="pricing-table text-center">
												<div class="choice-box">
													Popular Choice
												</div>

												<div class="table-header">
													<h2 class="price">
														<?php
														foreach ($result3 as $value) {
															echo $value . " ";
														}
														?>
													</h2>
												</div>

												<div class="table-content">
													<ul>
														<li>
															The All Inclusive package provides you with all you need to
															start up your new business. PAYE Registration, VAT
															registration, Confirmation Statement filing are all
															included. Available at a discounted price
														</li>
													</ul>
												</div>

												<div class="table-btn mt-20">
													<a class="btn theme-btn-two" href="inclusive-package/index.php">
														Read More
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Pricing Standard --><!-- Features Section -->

			<div class="feature-area section-padding-100-50" id="service">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 col-lg-7">
							<div class="section-title t_center">
								<h2>
									How We Differentiate Ourselves
								</h2>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-4">
							<div class="single-feature-area text-center">
								<div class="feature-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-globe fa-w-16" data-icon="globe" data-prefix="fas" focusable="false" role="img" viewbox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z" fill="currentColor"></path>
									</svg>
								</div>

								<div class="feature-content-text">
									<h4>Non- Resident&rsquo;s Package.</h4>

									<p class="mb-0">
										We offer a non - Resident&rsquo;s package. This allows people who are overseas
										to form a company in the UK.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="single-feature-area text-center">
								<div class="feature-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-headset fa-w-16" data-icon="headset" data-prefix="fas" focusable="false" role="img" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z" fill="currentColor"></path>
									</svg>
								</div>

								<div class="feature-content-text">
									<h4>24/7 Guaranteed Customer Support</h4>

									<p class="mb-0">
										Via online chat, telephone, or email; we will always be available for you!
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="single-feature-area text-center">
								<div class="feature-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-money-check fa-w-20" data-icon="money-check" data-prefix="fas" focusable="false" role="img" viewbox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 448c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V128H0v320zm448-208c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v32c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-32zm0 120c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H456c-4.42 0-8-3.58-8-8v-16zM64 264c0-4.42 3.58-8 8-8h304c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zm0 96c0-4.42 3.58-8 8-8h176c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zM624 32H16C7.16 32 0 39.16 0 48v48h640V48c0-8.84-7.16-16-16-16z" fill="currentColor"></path>
									</svg>
								</div>

								<div class="feature-content-text">
									<h4>Business Bank Account Support</h4>

									<p class="mb-0">
										We have on offer bank account services for high street banks for Prime Formation
										clients exclusively.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="single-feature-area text-center">
								<div class="feature-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-piggy-bank fa-w-18" data-icon="piggy-bank" data-prefix="fas" focusable="false" role="img" viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M560 224h-29.5c-8.8-20-21.6-37.7-37.4-52.5L512 96h-32c-29.4 0-55.4 13.5-73 34.3-7.6-1.1-15.1-2.3-23-2.3H256c-77.4 0-141.9 55-156.8 128H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h40c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-48h128v48c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-80.7c11.8-8.9 22.3-19.4 31.3-31.3H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-128 64c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM256 96h128c5.4 0 10.7.4 15.9.8 0-.3.1-.5.1-.8 0-53-43-96-96-96s-96 43-96 96c0 2.1.5 4.1.6 6.2 15.2-3.9 31-6.2 47.4-6.2z" fill="currentColor"></path>
									</svg>
								</div>

								<div class="feature-content-text">
									<h4>Incredible Value for Money</h4>

									<p class="mb-0">
										We have no hidden costs, everything is transparent
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="single-feature-area text-center">
								<div class="feature-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-business-time fa-w-20" data-icon="business-time" data-prefix="fas" focusable="false" role="img" viewbox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M496 224c-79.59 0-144 64.41-144 144s64.41 144 144 144 144-64.41 144-144-64.41-144-144-144zm64 150.29c0 5.34-4.37 9.71-9.71 9.71h-60.57c-5.34 0-9.71-4.37-9.71-9.71v-76.57c0-5.34 4.37-9.71 9.71-9.71h12.57c5.34 0 9.71 4.37 9.71 9.71V352h38.29c5.34 0 9.71 4.37 9.71 9.71v12.58zM496 192c5.4 0 10.72.33 16 .81V144c0-25.6-22.4-48-48-48h-80V48c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h395.12c28.6-20.09 63.35-32 100.88-32zM320 96H192V64h128v32zm6.82 224H208c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h291.43C327.1 423.96 320 396.82 320 368c0-16.66 2.48-32.72 6.82-48z" fill="currentColor"></path>
									</svg>
								</div>

								<div class="feature-content-text">
									<h4>Our Time Saving Formation process</h4>

									<p class="mb-0">
										Simply choose a company name, select a package, checkout, and complete a short
										form with your company details. The whole order process should take you no more
										than 10 to 15 minutes.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="single-feature-area text-center">
								<div class="feature-icon">
									<svg aria-hidden="true" class="svg-inline--fa fa-building fa-w-14" data-icon="building" data-prefix="fas" focusable="false" role="img" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z" fill="currentColor"></path>
									</svg>
								</div>

								<div class="feature-content-text">
									<h4>We Are Companies House Authorised</h4>

									<p class="mb-0">
										You can place your trust in us when it comes to registering your new UK company.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Features Section -->
		</div>
		<!-- Footer -->
		<footer class="footer-contact-area section-padding-100-0">

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-single-widget mb-20">
							<div class="footer-logo">
								<a href="index.php"><img src="assets/custom/images/prime_white.png" alt="prime formations logo"></a>
							</div>
							<ul>
								<li>
									<p class="mt-30" style="color:#ffffff;">
										<a href=""> <?= webSetting('small_description') ?? 'small descri'; ?> <a>
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
								<li> <?= webSetting('email2') ?? ''; ?></li>
								<li><?= webSetting('phone2') ?? ''; ?></li>
							</ul>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-single-widget mb-20">
							<h4>Contact info</h4>
							<ul>
								<li><a href="#"><i class="material-icons md-18">location_on</i> <?= webSetting('address') ?? ''; ?></a></li>
								<li><a href="mailto:info@primeformations.co.uk"><i class="material-icons md-18">email</i> <?= webSetting('email1') ?? ''; ?> </a></li>
								<li><a href="tel:0333 533 0264"><i class="material-icons md-18">add_ic_call</i> <?= webSetting('phone1') ?? ''; ?> </a></li>
							</ul>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-single-widget">
							<h4>Legal</h4>
							<ul>
								<li><a href="terms/index.php">Terms & Conditions</a></li>
								<li><a href="Complaints/index.php">Complaints Policy</a></li>
								<li><a href="refunds-cancellation/index.php">Refunds & Cancellation Policy</a></li>
								<li><a href="privacy-policy/index.php">Privacy Policy</a></li>
								<li><a href="cookie/index.php">Cookies Policy</a></li>
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
												<a href="index.php"> &copy; <?= webSetting('title') ?? 'small descri'; ?> </a>
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



		<!-- End Wrapper -->






	</body>
	<!-- End Body -->

	<!-- Footer Scripts -->
	<script type="text/javascript" src="assets/custom/files/js/jquery_min.js"></script>
	<script type="text/javascript" src="assets/custom/files/js/jquery_cookie_min.js"></script>
	<script type="text/javascript" src="assets/custom/files/js/main-mine12f.js"></script>
	<script type="text/javascript" src="assets/custom/files/js/owl_carousel_min.js"></script>
	<script type="text/javascript" src="assets/custom/files/js/bundle.js"></script>
	<script type="text/javascript" src="assets/custom/files/js/main.js"></script>
	<script type="text/javascript" src="assets/custom/files/js/template.js"></script>

</body>

</phpl>
<!-- End phpL -->