<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Big Juicy SASS</title>

  <link rel="stylesheet" href="/resources/third_party/css/normalize.css">
  <link rel="stylesheet" href="/resources/site/css/styles.css?<?php echo date('Y-M-d-h-i-s'); ?>"> <? // remove date upon going live, timestamp added so stylesheet is never cached ?>

<?php /* Font awesome */ ?>
<?php /* <link rel="stylesheet" href="/resources/third_party/font-awesome/css/font-awesome.min.css"> /* ?>

<?php // Internet explorer (if you give a care) ?>
  <!--[if lt IE 9]>
    <script src="/resources/third_party/html5shiv/html5shiv.min.js"></script>
    <script src="/resources/third_party/html5shiv/html5shiv-printshiv.min.js"></script>
  <![endif]-->

  <?php /* Magnific Styles  */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="/resources/third_party/magnific/magnific-popup.css" /> */ ?>

  <?php /*  Isotope  */ ?>
  <?php /* <link rel="stylesheet" type="text/css" href="/resources/third_party/isotope/isotope.css" /> */ ?>

  <?php /* Slick */ ?>
  <?php /*
        <link rel="stylesheet" type="text/css" href="/resources/third_party/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="/resources/third_party/slick/slick-theme.css">
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
