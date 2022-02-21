<?php
// Required tools
require_once('./libs/router.inc.php');

// Get current requested page
// define('PAGE', Router::get_by_uri($_SERVER['REQUEST_URI'])); // Working in PHP8+
$page = Router::get_by_uri($_SERVER['REQUEST_URI']);

// No page found
if (!$page) {
    // Check if requested URI is an unavailable /karriere sublink
    // and redirect to /karriere
    if (substr($_SERVER['REQUEST_URI'], 0, 9) === '/karriere') {
        header('Location: /karriere');
        die();
    }
    
    // Otherwise show error 404
    header('HTTP/1.1 404 Not Found');
    $page = Router::get_by_uri('/404');
}
// Set layout of currect requested page
require_once(DIRECTORY_LAYOUTS.$page->layout);

// Page view is included inside layout
?>