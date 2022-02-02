<?php
require_once('./libs/router.inc.php');

header('Content-type: text/xml');

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">	
   <sitemap>
      <loc><?= DOMAIN ?>/sitemap-website.xml</loc>
      <lastmod><?= date("Y-m-d") ?></lastmod>
   </sitemap>
   <sitemap>
      <loc><?= DOMAIN ?>/blog/sitemap.xml</loc>
      <lastmod><?= date("Y-m-d") ?></lastmod>
   </sitemap>
   <sitemap>
      <loc><?= DOMAIN ?>/faq/sitemap.xml</loc>
      <lastmod><?= date("Y-m-d") ?></lastmod>
   </sitemap>
</sitemapindex>