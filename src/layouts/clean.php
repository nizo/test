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

    <script>
        var jsFiles = [];
    </script>
</head>
<body class="<?= $page->body_class ?>">
    <?php
    require_once(DIRECTORY_VIEWS.$page->view);
    ?>

    <?php
    loadJS(null);
    ?>

</body>
</html>