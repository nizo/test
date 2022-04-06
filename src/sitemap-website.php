<?php
require_once('./libs/router.inc.php');

header('Content-type: text/xml');

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.PHP_EOL;
foreach (Router::get_sorted('sitemap_priority', 'desc') as $route) {
    // Exclude route from sitemap if specified in route data
    if (!$route->sitemap_include)
        continue;

    // Get last modification date of view file
    if (!file_exists(DIRECTORY_VIEWS.$route->view))
        continue;
    $lastmod = filemtime(DIRECTORY_VIEWS.$route->view);
    $lastmod = date('Y-m-d', $lastmod);

    // Display sitemap url details
    echo '<url>'.PHP_EOL;
    echo '    <loc>'.DOMAIN.$route->uri.'</loc>'.PHP_EOL;
    echo '    <lastmod>'.$lastmod.'</lastmod>'.PHP_EOL;
    echo '    <changefreq>'.$route->sitemap_change_frequency.'</changefreq>'.PHP_EOL;
    echo '    <priority>'.$route->sitemap_priority.'</priority>'.PHP_EOL;
    echo '</url>'.PHP_EOL;
}
echo '</urlset>';
?>