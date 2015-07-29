<?php header("X-UA-Compatible: IE=edge"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6 oldie"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7 oldie"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8 oldie"><![endif]-->
<!--[if IE 9]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" class="no-js"><!--<![endif]-->

	<head>

	  <meta http-equiv="X-UA-Compatible" content="IE=edge">

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <title>Big Juicy SASS</title>

	  <link rel="stylesheet" href="/resources/vendor/css/normalize.css">
	  <link rel="stylesheet" href="/resources/site/css/styles.css?<?php echo date('Y-M-d-h-i-s'); ?>"> <? // remove date upon going live, timestamp added so stylesheet is never cached ?>

		<?php /* Font awesome */ ?>
		<?php /* <link rel="stylesheet" href="/resources/vendor/font-awesome/css/font-awesome.min.css"> /* ?>

		<?php // Internet explorer (if you give a care) ?>
		  <!--[if lt IE 9]>
			<script src="/resources/vendor/html5shiv/html5shiv.min.js"></script>
			<script src="/resources/vendor/html5shiv/html5shiv-printshiv.min.js"></script>
		  <![endif]-->

		  <?php /* Magnific Styles  */ ?>
		  <?php /* <link rel="stylesheet" type="text/css" href="/resources/vendor/magnific/magnific-popup.css" /> */ ?>

		  <?php /*  Isotope  */ ?>
		  <?php /* <link rel="stylesheet" type="text/css" href="/resources/vendor/isotope/isotope.css" /> */ ?>

		  <?php /* Slick */ ?>
		  <?php /*
				<link rel="stylesheet" type="text/css" href="/resources/vendor/slick/slick.css">
				<link rel="stylesheet" type="text/css" href="/resources/vendor/slick/slick-theme.css">
			*/ ?>

		<?php /* Favicons http://realfavicongenerator.net/ ?>
		  use both these too
			<link rel="icon" href="/favicon.ico" type="image/x-icon" />
			<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		  */
		?>

		<?php // Open graph protocol
		  /*
			<meta property="og:title" content="" />
			<meta property="og:description" content="" />
			<meta property="og:image" content="" />
			<meta property="og:type" content="website" />
			<meta property="og:site_name" content="" />
			<meta property="og:url" content="http://www.<?php echo $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']; ?>" />
		  */
		?>
		<?php // Twitter Cards
		  /*
			<meta name="twitter:card" content="summary" />
			<meta name="twitter:url" content="http://www.<?php echo $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']; ?>" />
			<meta name="twitter:title" content="" />
			<meta name="twitter:description" content="" />
			<meta name="twitter:image" content="" />
		  */
		?>
	</head>


  	<body>

		<script src="/resources/vendor/modernizr/modernizr.js"></script>

		<!--[if lt IE 9]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script>window.jQuery || document.write('<script src="/resources/vendor/jquery/jquery-1.11.3.min.js"><\/script>')</script> <![endif]-->
		<!--[if gte IE 9]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <script>window.jQuery || document.write('<script src="/resources/vendor/jquery/jquery-2.1.4.min.js"><\/script>')</script><!--<![endif]-->
		<?php // <script src="/resources/vendor/jquery-migrate/jquery-migrate-1.2.1.min.js"></script> ?>
		<script src="/resources/vendor/respond/respond.min.js"></script>

		<?php //<!-- General scripts --> ?>
		<?php /*<script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>*/ ?>
		<?php /*<script src="/resources/vendor/datejs/date.js"></script> */ ?>
		<?php /*<script src="/resources/vendor/columnizer/jquery.columnizer.js"></script> */ ?>
		<?php /*<script src="/resources/vendor/waypoints/jquery.waypoints.min.js"></script> */ ?>
		<?php // <script src="/resources/vendor/validate/jquery.validate.min.js"></script> ?>
		<?php // <script src="/resources/vendor/slick/slick.min.js"></script> ?>
		<?php // <script src="/resources/vendor/placeholder/placeholders.min.js"></script> ?>

		<?php // animation libraries ?>

		<?php /* Velocity
		  <script src="/resources/vendor/velocity/velocity.min.js"></script>
		  <script src="/resources/vendor/velocity/velocity.ui.min.js"></script>
		*/ ?>

		<?php /* GSAP
		  <script src="/resources/vendor/gsap/jquery.gsap.min.js"></script>
		  <script src="/resources/vendor/gsap/plugins/CSSPlugin.min.js"></script>
		  <script src="/resources/vendor/gsap/easing/EasePack.min.js"></script>
		  <script src="/resources/vendor/gsap/TimelineLite.min.js"></script>
		  <script src="/resources/vendor/gsap/TimelineMax.min.js"></script>
		  <script src="/resources/vendor/gsap/TweenLite.min.js"></script>
		  <script src="/resources/vendor/gsap/TweenMax.min.js"></script>
		*/ ?>

		<?php /* Lightboxes  */ ?>
		<?php /*<script src="/resources/vendor/magnific/jquery.magnific-popup.min.js"></script> */ ?>

		<?php /* Isotope - You'll have to pay for a license to use this */ ?>
		<?php /*<script src="/resources/vendor/isotope/jquery.isotope.min.js"></script> */ ?>

		<?php /* If you want to add any others to your project easy just duplicate the line below */ ?>
		<?php /*<script src="/resources/vendor/"></script> */ ?>
		<?php /*<script src="/resources/site/js/"></script> */ ?>

		<script src="/resources/site/js/global.min.js"></script>

  	</body>
</html>
