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


    <?php
    require_once(DIRECTORY_VIEWS.$page->view);
    ?>

    <script src="/assets/javascripts/application.min.js?build=<?= getJsHash() ?>"></script>
    <?php loadAdditionalScripts(); ?>
</body>
</html>