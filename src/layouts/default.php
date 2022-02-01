<!doctype html>
<html lang="de">
<head>   
    <meta charset="utf-8"/>
    <title><?= PAGE->title ?></title>
    <meta name="description" content="<?= PAGE->meta_description ?>" />
    <meta name="keywords" content="<?= PAGE->meta_keywords ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="google-site-verification" content="Sqndy6_j8hwq2O67oeDnHTdNmKPDaCRcC-g_K3FRYfE" />

    <meta property="og:title" content="<?= PAGE->og_title ?>"/>
    <meta property="og:site_name" content="Callone"/>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= DOMAIN.PAGE->uri ?>" />

    <meta property="og:image" content="<?= DOMAIN.'/images/og/1200x630/'.PAGE->og_image_background.'/'.prepareOgImageText(PAGE->og_image_text).'.png' ?>" />
    <meta property="twitter:image" content="<?= DOMAIN.'/images/og/1200x600/'.PAGE->og_image_background.'/'.prepareOgImageText(PAGE->og_image_text).'.png' ?>">	
    <meta name="msapplication-TileImage" content="<?= DOMAIN ?>/assets/images/logo/og-image.png">

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

    <?php
    // LazyLoading CSS Files
    loadCSS(null,true);
    ?>
    <noscript>
        <link rel="stylesheet" href="/assets/stylesheets/animations.min.css" type="text/css">	
    </noscript>

    <?php if (!empty(PAGE->canonical)): ?>
        <link rel="canonical" href="<?= DOMAIN.PAGE->canonical ?>" />
    <?php endif; ?>

    <?php 
    require_once('./partials/tracking.php');
    ?>

    <script type="application/ld+json">
    {
        "@context" : "http://schema.org",
        "@type" : "Organization",
        "name" : "CallOne",
        "url" : "https://www.callone.de",
        "sameAs" : [
            "https://de.linkedin.com/company/callone-gmbh",
            "https://de-de.facebook.com/CallOneGmbH/"
        ]
    }
    </script>
    <script>
        var jsFiles = [];
    </script>
</head>
<body class="<?= PAGE->body_class; ?> <?php $uriPath = str_replace('/', ' ', $_SERVER['REQUEST_URI']);  if($uriPath === ' ') { echo ' startseite '; } else { echo $uriPath; } ?> lazyBackground">
    <?php if (isset($_COOKIE['cookiebanner-accepted']) && ($_COOKIE['cookiebanner-accepted'] > 100 || $_COOKIE['cookiebanner-accepted'] == 1) ): ?>
        <?php if (isLocalHost()) : ?>
            <!-- Google Tag Manager (noscript) Testsystem -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZN2XV4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php else : ?>  
            <!--Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5K7C35"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php endif; ?>
    <?php endif; ?>

    <?php
    require_once('./partials/navigation.php');

    require_once(DIRECTORY_VIEWS.PAGE->view);

    require_once('./partials/footer.php');
    ?>
    
    <div id="wishlist" style="">
    	<span class="numberOfElements"></span>
    	<a class="sl sl-before sl-wish relative button openModal" data-modal="wishlist">Wunschliste</a>
    </div>
    
    <div class="modal cookiebanner">
      <?php include('./partials/modal-cookiebanner.php'); ?>
    </div>
    
    <div class="modal cookiebanner-config">
      <?php include('./partials/modal-cookiebanner-config.php'); ?>
    </div>
    
    <div class="modal contact">
      <?php include('./partials/modal-contact.php'); ?>
    </div>
    
    <div class="modal wishlist">
    	<?php include('./partials/modal-wishlist.php'); ?>
    </div>
     
	<div class="modal shortApplication">
      <?php include('./partials/modal-10-second-application.php'); ?>
    </div>  

    <script src="/assets/javascripts/libs/jquery-3.4.1.min.js"></script>
    
    <?php
    loadJS(null);
    ?>
    
    </body>
</html>