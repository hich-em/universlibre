<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">


	<title>Univers Libre</title>
	<meta name="description" content="Club des logiciels libres au sein de l'EPI">

	<!-- /// Favicons ////////  -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">

	<!-- /// Google Fonts ////////  -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css@family=Open+Sans_3A300italic,400italic,600italic,700italic,400,300,600,700">

	<!-- /// FontAwesome Icons 4.2.0 ////////  -->
	<link rel="stylesheet" href="_layout/css/fontawesome/font-awesome.min.css">

	<!-- /// Custom Icon Font ////////  -->
	<link rel="stylesheet" href="_layout/css/iconfontcustom/icon-font-custom.css">

	<!-- /// Template CSS ////////  -->
	<link rel="stylesheet" href="_layout/css/base.css">
	<link rel="stylesheet" href="_layout/css/grid.css">
	<link rel="stylesheet" href="_layout/css/elements.css">
	<link rel="stylesheet" href="_layout/css/layout.css">

	<!-- /// JS Plugins CSS ////////  -->
	<link rel="stylesheet" href="_layout/js/revolutionslider/css/settings.css">
	<link rel="stylesheet" href="_layout/js/revolutionslider/css/custom.css">
	<link rel="stylesheet" href="_layout/js/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="_layout/js/magnificpopup/magnific-popup.css">
	<link rel="stylesheet" href="_layout/js/animations/animate.min.css">
	<link rel="stylesheet" href="_layout/js/itplayer/css/YTPlayer.css">

	<!-- /// Template Skin CSS ////////  -->
	<!-- <link rel="stylesheet" href="_layout/css/skins/default.css"> -->
	<!-- <link rel="stylesheet" href="_layout/css/skins/blue.css"> -->

	<!-- /// Style Switcher CSS ////////  -->
	<link rel="stylesheet" href="_layout/css/skins/default.css" id="template-skin">
	<link rel="stylesheet" href="_layout/js/switcher/switcher.css">

</head>

<body class="sticky-header">

	<div id="page-loader">
		<div class="loader-img">

			<img src="_layout/images/logo2.png" height="205" width="290"alt="">

		</div>
		<!-- end .loader-img -->
	</div>
	<!-- end .pageloader -->

	<!-- Style Switcher read settings for layout and skin -->
	<script src="_layout/js/switcher/readcookies.js"></script>

	<noscript>
		<div class="javascript-required">
			<i class="fa fa-times-circle"></i> You seem to have Javascript disabled. This website needs javascript in order to function properly!
		</div>
	</noscript>

	<!--[if lte IE 8]>
         <div class="modern-browser-required">
        	You are using an <strong>outdated</strong> browser. Please 
        	<a href="//windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade your browser</a> 
            to improve your experience.
		</div>
    <![endif]-->

	<div id="wrap">

		<header>

			<div id="header">

				<!-- /// HEADER  ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

				<div class="row">
					<div class="span3">

						<!-- // Logo // -->

						<a href="./" id="logo">
							<img class="responsive-img" src="_layout/images/logo.png" alt="">
						</a>

					</div>
					<!-- end .span3 -->
					<div class="span9">

						<!-- // Mobile menu trigger // -->

						<a href="#" id="mobile-menu-trigger">
							<i class="fa fa-bars"></i>
						</a>

						<!-- // Menu // -->

						<nav>

							<ul class="sf-menu fixed" id="menu">
								<li>
									<a href="./#home">Accueil</a>
								</li>
								<li>
									<a href="./#about">A propos</a>
								</li>
								<li>
									<a href="./#events">Événements</a>
								</li>
								<!--<li>
									<a href="./#portfolio">Projets</a>
								</li>-->
								<li>
									<a href="./#contact">Contact</a>
								</li>
							</ul>

						</nav>

					</div>
					<!-- end .span9 -->
				</div>
				<!-- end .row -->

				<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div>
			<!-- end #header -->

		</header>

		<div id="content">
			<?php echo $content;?>
		</div>
		<!-- end #content -->
        <!--
		<footer>
			<div id="footer">
				<div id="footer-bottom">
					<div class="row">
						<div class="span6" id="footer-widget-area-1">
							<div class="widget widget_text">
								<div class="textwidget">
									<h1 class="text-uppercase last"><strong>Subscribe to our newsletter</strong></h1>
								</div>
							</div>
						</div>
						<div class="span6" id="footer-widget-area-2">

							<div class="widget ewf_widget_newsletter">

								<form id="newsletter-subscribe-form" action="#">
									<fieldset>
										<input type="text" name="email" placeholder="Your e-mail address">
										<input class="btn" type="submit" name="submit" value="Subscribe">
									</fieldset>
								</form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
    -->
	<a id="back-to-top" href="#">Up</a>

	<!-- /// jQuery ////////  -->
	<script src="_layout/js/jquery-2.1.1.min.js"></script>

	<!-- /// ViewPort ////////  -->
	<script src="_layout/js/viewport/jquery.viewport.js"></script>

	<!-- /// Easing ////////  -->
	<script src="_layout/js/easing/jquery.easing.1.3.js"></script>

	<!-- /// SimplePlaceholder ////////  -->
	<script src="_layout/js/simpleplaceholder/jquery.simpleplaceholder.js"></script>

	<!-- /// Fitvids ////////  -->
	<script src="_layout/js/fitvids/jquery.fitvids.js"></script>

	<!-- /// Animations ////////  -->
	<script src="_layout/js/animations/animate.js"></script>

	<!-- /// Superfish Menu ////////  -->
	<script src="_layout/js/superfish/hoverIntent.js"></script>
	<script src="_layout/js/superfish/superfish.js"></script>

	<!-- /// Revolution Slider ////////  -->
	<script src="_layout/js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
	<script src="_layout/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>

	<!-- /// bxSlider ////////  -->
	<script src="_layout/js/bxslider/jquery.bxslider.min.js"></script>

	<!-- /// Magnific Popup ////////  -->
	<script src="_layout/js/magnificpopup/jquery.magnific-popup.min.js"></script>

	<!-- /// Isotope ////////  -->
	<script src="_layout/js/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="_layout/js/isotope/isotope.pkgd.min.js"></script>

	<!-- /// Parallax ////////  -->
	<script src="_layout/js/parallax/jquery.parallax.min.js"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="_layout/js/easypiechart/jquery.easypiechart.min.js"></script>

	<!-- /// YTPlayer ////////  -->
	<script src="_layout/js/itplayer/jquery.mb.YTPlayer.js"></script>

	<!-- /// Easy Tabs ////////  -->
	<script src="_layout/js/easytabs/jquery.easytabs.min.js"></script>

	<!-- /// Form validate ////////  -->
	<script src="_layout/js/jqueryvalidate/jquery.validate.min.js"></script>

	<!-- /// Form submit ////////  -->
	<script src="_layout/js/jqueryform/jquery.form.min.js"></script>

	<!-- /// gMap ////////  -->
	<script src="//maps.google.com/maps/api/js@sensor=false"></script>
	<script src="_layout/js/gmap/jquery.gmap.min.js"></script>

	<!-- /// Twitter ////////  -->
	<script src="_layout/js/twitter/twitterfetcher.js"></script>

	<!-- /// ScrollSpy ////////  -->
	<script src="_layout/js/scrollspy/scrollspy.min.js"></script>

	<!-- /// Custom JS ////////  -->
	<script src="_layout/js/plugins.js"></script>
	<script src="_layout/js/scripts.js"></script>

	<script src="_layout/js/switcher/jquery_cookie.js"></script>

</body>

</html>