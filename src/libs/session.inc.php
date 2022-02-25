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
?>