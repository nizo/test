<?php
define ('COOKIES_ACCEPTED_NAME', 'cookiebanner-accepted');
define ('SESSION_TRACKING_DIR_ACCEPTED', $_SERVER['DOCUMENT_ROOT'].'/../log/sessions/accepted');
define ('SESSION_TRACKING_DIR_DENIED', $_SERVER['DOCUMENT_ROOT'].'/../log/sessions/denied');


// init
session_start();

define ('SESSION_TRACKING_ACCEPTED_FILE', SESSION_TRACKING_DIR_ACCEPTED.'/'.session_id().'.txt');
define ('SESSION_TRACKING_DENIED_FILE', SESSION_TRACKING_DIR_DENIED.'/'.session_id().'.txt');

// track difference between 'cookies accepted' and 'cookies NOT accepted'
if (!is_dir (SESSION_TRACKING_DIR_ACCEPTED))
	mkdir (SESSION_TRACKING_DIR_ACCEPTED, 0777, true);
if (!is_dir (SESSION_TRACKING_DIR_DENIED))
	mkdir (SESSION_TRACKING_DIR_DENIED, 0777, true);

if (empty ($_COOKIE[COOKIES_ACCEPTED_NAME]))
{
	// 'cookies NOT accepted'
	if (!file_exists (SESSION_TRACKING_DENIED_FILE))
		touch (SESSION_TRACKING_DENIED_FILE);
}
else
{
	// 'cookies accepted'
	if (file_exists (SESSION_TRACKING_DENIED_FILE))
		unlink (SESSION_TRACKING_DENIED_FILE);
	if (!file_exists (SESSION_TRACKING_ACCEPTED_FILE))
		touch (SESSION_TRACKING_ACCEPTED_FILE);
}
?>