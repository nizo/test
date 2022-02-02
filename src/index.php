<?php
// Required tools
require_once('./libs/router.inc.php');

// Get current requested page
// define('PAGE', Router::get_by_uri($_SERVER['REQUEST_URI'])); // Working in PHP8+
$page = Router::get_by_uri($_SERVER['REQUEST_URI']);

// Set layout of currect requested page
require_once(DIRECTORY_LAYOUTS.$page->layout);

// Page view is included inside layout
?>