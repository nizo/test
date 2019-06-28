<?php session_start(); ?>
<!DOCTYPE html>
<html lang="de">
  <head>   
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0, user-scalable = no">
  	<meta name="google-site-verification" content="Sqndy6_j8hwq2O67oeDnHTdNmKPDaCRcC-g_K3FRYfE" />
    <meta property="og:image" content="https://www.callone.de/assets/images/logo/Logo.svg" />
    <meta property="og:image:alt" content="Callone Logo" />
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:site_name" content="Callone"/>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:type" content="website" />
    <?php if (isset($ogUrl)): ?>
    	<meta property="og:url" content="<?= $ogUrl ?>" />
    <?php endif; ?>	
    <meta name="author" content="Callone GmbH" />
    <meta name="revisit-after" content="3 days" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0, user-scalable = no" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    
    <!-- Load CSS -->
    <?php
        // null -> std-drirectory
        loadCSS(null);
    ?>    
    <?php if (isset($canonical)): ?>
    	<link rel="canonical" href="<?= $canonical ?>" />
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
  <body class="<?php echo $background; ?> lazyBackground">
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
  
    <div class="navbar">
        <?php
        require_once('./partials/top-promotion.php');
        require_once('./partials/main-navigation.php');
        require_once('./partials/mobile-navigation.php');
        ?>
    </div>
    <div class="navbar-spacer"></div>
