<?php //header("X-UA-Compatible: IE=edge"); ?>
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta charset="utf-8" />
  <?php /* responsive tag  */ ?>
  <?php /* <meta name="viewport" content="width=device-width" /> */ ?>

  <title></title>

  <link rel="stylesheet" href="<?php echo $res; ?>/third_party/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo $res; ?>/css/styles.css?<?php echo date('Y-M-d-h-i-s'); ?>" />

<?php /* Font awesome */ ?>
<?php /* <link rel="stylesheet" href="<?php echo $res; ?>/third_party/fonts/font-awesome/css/font-awesome.min.css" /> /* ?>

<?php // Internet explorer (if you give a care) ?>
  <!--[if lt IE 9]>
    <script src="<?php echo $res; ?>/third_party/js/html5shiv/html5shiv.min.js"></script>
    <script src="<?php echo $res; ?>/third_party/js/html5shiv/html5shiv-printshiv.min.js"></script>
  <![endif]-->

<?php /*
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php echo $res; ?>/css/ie8.css" type="text/css" />
    <![endif]-->

    <!--[if lte IE 7]>
      <link rel="stylesheet" href="<?php echo $res; ?>/css/ie7.css" type="text/css" />
    <![endif]-->
  */
?>

  <?php /* noUiSlider */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="<?php echo $res; ?>/third_party/js/nouislider/jquery.nouislider.min.css" /> */ ?>

  <?php /* soc.js */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="<?php echo $res; ?>/third_party/js/socjs/soc.min.css" /> */ ?>

  <?php /* Magnific Styles  */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="<?php echo $res; ?>/third_party/magnific/magnific-popup.css" /> */ ?>

  <?php /*  Isotope  */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="<?php echo $res; ?>/third_party/js/isotope/isotope.css" /> */ ?>

  <?php /*  Flexslider  */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="<?php echo $res; ?>/third_party/js/flexslider/flexslider.css" /> */ ?>

  <?php /* Slick */ ?>
  <?php /*<link rel="stylesheet" type="text/css" href="<?php echo $res; ?>/third_party/js/slick/slick.css">*/ ?>

<?php /* Favicons
  use http://www.xiconeditor.com to create 64/32/24/16 versions, all in one .ico
  Or try a new service http://realfavicongenerator.net/ which creates desktop, ios, android home screen, windows 8 tiles, windows taskbar, windows surface icons too.
  */
  /*
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  */
?>

<?php /* Apple icons
    <link rel="apple-touch-icon" href="<?php echo $res; ?>/images/icons/touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $res; ?>/images/icons/touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $res; ?>/images/icons/touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $res; ?>/images/icons/touch-icon-ipad-retina.png" />
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
