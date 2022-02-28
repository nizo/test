<!doctype html>
<html lang="de">
<head>   
    <meta charset="utf-8"/>
    <title><?= $page->title ?></title>
    <meta name="description" content="<?= $page->meta_description ?>" />
    <meta name="keywords" content="<?= $page->meta_keywords ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="google-site-verification" content="Sqndy6_j8hwq2O67oeDnHTdNmKPDaCRcC-g_K3FRYfE" />

    <meta property="og:title" content="<?= $page->og_title ?>"/>
    <meta property="og:site_name" content="Callone"/>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= DOMAIN.$page->uri ?>" />

    <meta property="og:image" content="<?= DOMAIN.'/images/og/1200x630/'.$page->og_image_background.'/'.prepareOgImageText($page->og_image_text).'.png' ?>" />
    <meta property="twitter:image" content="<?= DOMAIN.'/images/og/1200x600/'.$page->og_image_background.'/'.prepareOgImageText($page->og_image_text).'.png' ?>">	
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?= DOMAIN ?>/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= DOMAIN ?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= DOMAIN ?>/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= DOMAIN ?>/assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?= DOMAIN ?>/assets/images/favicons/safari-pinned-tab.svg" color="#86ed18">
    <link rel="shortcut icon" href="<?= DOMAIN ?>/assets/images/favicons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="CallOne">
    <meta name="application-name" content="CallOne">
    <meta name="msapplication-TileColor" content="#86ed18">
    <meta name="msapplication-TileImage" content="<?= DOMAIN ?>/assets/images/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="<?= DOMAIN ?>/assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta name="author" content="Callone GmbH" />
    <meta name="revisit-after" content="3 days" />
    <meta name="robots" content="index,follow" />

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

    <?php if (!empty($page->canonical)): ?>
        <link rel="canonical" href="<?= DOMAIN.$page->canonical ?>" />
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
<body class="<?= $page->body_class; ?> <?php $uriPath = str_replace('/', ' ', $_SERVER['REQUEST_URI']);  if($uriPath === ' ') { echo ' startseite '; } else { echo $uriPath; } ?> lazyBackground">
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
    require_once('./partials/banderole.php');
    require_once('./partials/navigation.php');

    require_once(DIRECTORY_VIEWS.$page->view);

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