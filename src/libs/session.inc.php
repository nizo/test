<?php
// init
session_start();


//  track visited websites for each visitor, data is forwarded to form submits
$current_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (empty ($_SESSION['userRoute']))
{
	// new visitor
	$_SESSION['userRoute'] = []; 

	if (isset ($_SERVER['HTTP_REFERER']))
		$_SESSION['userRoute'][] = $_SERVER['HTTP_REFERER'];
}

$previous_url = end ($_SESSION['userRoute']);
if ($current_url != $previous_url)
	$_SESSION['userRoute'][] = $current_url;


// track difference between 'cookies accepted' and 'cookies NOT accepted'
define ('COOKIES_ACCEPTED_NAME', 'cookiebanner-accepted');

define ('SESSION_TRACKING_DIR_ACCEPTED', $_SERVER['DOCUMENT_ROOT'].'/../log/sessions/accepted');
define ('SESSION_TRACKING_DIR_DENIED', $_SERVER['DOCUMENT_ROOT'].'/../log/sessions/denied');

define ('SESSION_TRACKING_ACCEPTED_FILE', SESSION_TRACKING_DIR_ACCEPTED.'/'.session_id().'.txt');
define ('SESSION_TRACKING_DENIED_FILE', SESSION_TRACKING_DIR_DENIED.'/'.session_id().'.txt');

if (!is_dir (SESSION_TRACKING_DIR_ACCEPTED))
	mkdir (SESSION_TRACKING_DIR_ACCEPTED, 0777, true);
if (!is_dir (SESSION_TRACKING_DIR_DENIED))
	mkdir (SESSION_TRACKING_DIR_DENIED, 0777, true);

if (empty ($_SESSION['userRoute']))
		define ('USER_ROUTE', null);
else	define ('USER_ROUTE', implode (PHP_EOL, $_SESSION['userRoute']));

if (empty ($_COOKIE[COOKIES_ACCEPTED_NAME]))
{
	// 'cookies NOT accepted'
	file_put_contents (SESSION_TRACKING_DENIED_FILE, USER_ROUTE);
}
else
{
	// 'cookies accepted'
	if (file_exists (SESSION_TRACKING_DENIED_FILE))
		unlink (SESSION_TRACKING_DENIED_FILE);
	file_put_contents (SESSION_TRACKING_ACCEPTED_FILE, USER_ROUTE);
}
?>