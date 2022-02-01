<?php
// Required tools
require_once('./libs/functions.php');
require_once('./libs/faqs.php');
require_once('./libs/jobs.php');
require_once('./libs/products.php');
require_once('./libs/session.inc.php');
require_once('./router.php');

// Get current requested page
define('PAGE', Router::get_by_uri($_SERVER['REQUEST_URI']));

// Set layout of currect requested page
require_once(DIRECTORY_LAYOUTS.PAGE->layout);

// Page view is included inside layout
?>