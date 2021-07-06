<!doctype html>
<html lang="de">
  <head>   
    <meta charset="utf-8"/>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  	<meta name="google-site-verification" content="Sqndy6_j8hwq2O67oeDnHTdNmKPDaCRcC-g_K3FRYfE" />
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:site_name" content="Callone"/>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.callone.de/assets/images/logo/Logo.png" />
    <meta name="msapplication-TileImage" content="https://www.callone.de/assets/images/logo/Logo@2x.png">
    <meta property="twitter:image" content="https://www.callone.de/assets/images/logo/Logo.png">	
    <meta name="author" content="Callone GmbH" />
    <meta name="revisit-after" content="3 days" />
    <meta name="robots" content="index,follow" />
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="preconnect" href="https://googleads.g.doubleclick.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.google.de">
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.googleadservices.com">

    <!-- Load CSS -->
    <?php
        // LazyLoading CSS Files
        loadCSS(null,true);
    ?>
    <noscript>
    	<link rel="stylesheet" href="/assets/stylesheets/animations.min.css" type="text/css">	
    </noscript>
    <script>
    	var jsFiles = [];
    </script>
  </head>
  <body class="<?= $background; ?>">
