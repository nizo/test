<!doctype html>
<html lang="de">
<head>   
    <meta charset="utf-8"/>
    <title><?= $page->title ?> | <?= DEFAULT_SITENAME ?></title>
    <meta name="description" content="<?= $page->meta_description ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="google-site-verification" content="Sqndy6_j8hwq2O67oeDnHTdNmKPDaCRcC-g_K3FRYfE" />

    <meta property="og:title" content="<?= $page->og_title ?>"/>
    <meta property="og:site_name" content="Callone"/>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= DOMAIN.$page->uri ?>" />

    <meta property="og:image" content="<?= DOMAIN; ?>/assets/images/lp/callone-voicebot-lp-social.jpeg" />
    <meta property="twitter:image" content="<?= DOMAIN; ?>/assets/images/lp/callone-voicebot-lp-social.jpeg" />
    
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

    <link rel="stylesheet" href="/assets/stylesheets/application.min.css?build=<?= getCssHash() ?>" />

    <?php if (!empty($page->canonical)): ?>
        <link rel="canonical" href="<?= DOMAIN.$page->canonical ?>" />
    <?php endif; ?>

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
</head>
<body class="<?= $page->body_class; ?>">
    



<nav class="navigation">
    <div class="navigation__links">
        <a href="/" class="navigation__logo" style="pointer-events: none" title="Zur Startseite von CallOne">
           
            <?php echo pictureTag(
                '/assets/images/logo/callone-logo-negative.svg',
                'CallOne Logo',
                167, 80, [], false
            ) ?>

        </a>
        <?php if ($page->shorttitle): ?>
            <div class="navigation__title"><?= $page->shorttitle; ?></div>
        <?php endif; ?>

        
        <div class="navigation__right">
            <a href="tel:+493092033500" class="navigation__phonenumber trackedContactSubmit"><span>030 920 33 500</span></a>
            <a href="#" data-openmodal="contact-sales" class="trackedContactModal" style="--fw:700">Sign-up</a>
            <a href="https://box.callone.de" class="navigation__login" target="_blank" rel="nofollow noreferrer">Login</a>
        </div>

        <div class="navigation__mobile-button">
            <div></div>
        </div>
    </div>
</nav>

<div class="navigation__shadow"></div>

<div class="navigation-spacer"></div>



    <?php

    require_once(DIRECTORY_VIEWS.$page->view);

    require_once('./partials/footer.php');
    ?>
    
    <script src="/assets/javascripts/application.min.js?build=<?= getJsHash() ?>"></script>
    <?php loadAdditionalScripts(); ?>

    <?php if ((empty ($_SERVER['HTTP_USER_AGENT'])) || (!isCrawler ($_SERVER['HTTP_USER_AGENT']))): ?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                let urlQuery = window.location.search;
                let params = new URLSearchParams(urlQuery);
                if (!params.has('no-banner') && !cookiesettings.exists('cookiesettings'))
                    new Modal(null, 'cookie-settings', null, 1000);
            });
        </script>
    <?php endif; ?>
</body>
</html>