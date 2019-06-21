<?php
if (empty ($_GET['ddi']))
	exit ();

// load website settings
$file_website = 'sessions/'.$_GET['ddi'].'_website.txt';
if (!file_exists ($file_website))
	exit ();

$data_json = file_get_contents ($file_website);
$data_raw = json_decode ($data_json, true);

if (empty ($data_raw['cobrowsing_url']))
		echo '<script>window.close();</script>';
else	header ('Location: '.$data_raw['cobrowsing_url']);
?>