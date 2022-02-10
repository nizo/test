<!doctype html>
<html lang="de">
<head>   
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title><?= $page->title ?></title>

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
<body class="<?= $page->body_class ?>">
    <?php
    require_once(DIRECTORY_VIEWS.$page->view);
    ?>

    <script src="/assets/javascripts/libs/jquery-3.4.1.min.js"></script>

    <?php
    loadJS(null);
    ?>

</body>
</html>