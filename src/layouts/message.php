<!doctype html>
<html lang="de">
<head>   
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <title><?= $page->title ?></title>
    <link rel="stylesheet" href="/assets/stylesheets/application.min.css?build=<?= getCssHash() ?>" />
</head>
<body class="<?= $page->body_class ?>">

    <div class="centered" style="margin-top: 5rem">
    <?php echo pictureTag(
        '/assets/images/logo/callone-logo-negative.svg',
        'CallOne Logo',
        167, 80, [], false
    ) ?>
    </div>

	<main>
    	<?php require_once(DIRECTORY_VIEWS.$page->view); ?>
	</main>
	
    <?php require_once('./partials/footer.php'); ?>
    
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