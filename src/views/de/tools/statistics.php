<?php
define ('SESSION_TRACKING_DIR_ACCEPTED', $_SERVER['DOCUMENT_ROOT'].'/../log/sessions/accepted');
define ('SESSION_TRACKING_DIR_DENIED', $_SERVER['DOCUMENT_ROOT'].'/../log/sessions/denied');


function files_cleanup (&$files)
{
	if (empty ($files))
		return;
	
	foreach ($files as $key => $file)
	{	if ($file[0] == '.')
			unset ($files[$key]);
	}
}

function files_sort_by_timestamp ($dir, &$files)
{
	$files_unsorted = $files;

	$files_sorted = [];
	foreach ($files_unsorted as $file)
	{	$timestamp = filemtime ($dir.'/'.$file);
		$files_sorted[$timestamp] = $file;
	}

	krsort ($files_sorted);
	$files = $files_sorted;
}

function file_to_view ($timestamp, $dir, $file, $greater_one_class)
{
	$file_content = file_get_contents ($dir.'/'.$file);
	if (empty ($file_content))
		return;
	$json_content = json_decode ($file_content, true);

	$datetime = date ('Y-m-d H:i', $timestamp);

	if (empty ($json_content['userRoute']))
	{	$route_count = 0;
		$route_class = null;
	}
	else
	{
		$route_count = count ($json_content['userRoute']);
		if ((empty ($greater_one_class)) || (count ($json_content['userRoute']) <= 1))
				$route_class = null;
		else	$route_class = $greater_one_class;
	}
	
	echo '<tr class="'.$route_class.'">';
	echo '<td class="stats_info" title="'.$file.'">(i)</td>';
	echo '<td class="stats_datetime">'.$datetime.'</td>';
	echo '<td class="stats_route">'.$route_count.' visited links</td>';
	if (empty ($json_content['HTTP_USER_AGENT']))
			echo '<td class="stats_browser">Unknown Browser!</td>';
	else	echo '<td class="stats_browser">'.$json_content['HTTP_USER_AGENT'].'</td>';
	echo '<td class="stats_links">';
	if (!empty ($json_content['userRoute']))
	{
		echo '<ul>';
		foreach ($json_content['userRoute'] as $link)
			echo '<li><a href="'.$link.'" target="_blank">'.$link.'</a></li>';
		echo '</ul>';
	}
	echo '</td>';
	echo '</tr>';
}


?>
<style>
	.stats_info		{white-space: nowrap; vertical-align: top;}
	.stats_datetime	{white-space: nowrap; vertical-align: top;}
	.stats_route	{white-space: nowrap; vertical-align: top;}
	.stats_browser	{white-space: wrap; vertical-align: top; font-size: 10px;}
	.stats_links	{white-space: nowrap; vertical-align: top; font-size: 10px;}
	.red	{background-color: #ff0000;}
	.green	{background-color: #00ff00;}
</style>
<?php


$files_cookies_accepted = scandir (SESSION_TRACKING_DIR_ACCEPTED);
$files_cookies_denied = scandir (SESSION_TRACKING_DIR_DENIED);

files_cleanup ($files_cookies_accepted);
files_cleanup ($files_cookies_denied);

files_sort_by_timestamp (SESSION_TRACKING_DIR_ACCEPTED, $files_cookies_accepted);
files_sort_by_timestamp (SESSION_TRACKING_DIR_DENIED, $files_cookies_denied);


echo '<h3>Cookies Accepted:</h3><br/>';
echo '<table width="100%">';
foreach ($files_cookies_accepted as $timestamp => $file)
	file_to_view ($timestamp, SESSION_TRACKING_DIR_ACCEPTED, $file, 'green');
echo '</table>';

echo '<br/><br/>';
echo '<h3>Cookies Denied:</h3><br/>';
echo '<table width="100%">';
foreach ($files_cookies_denied as $timestamp => $file)
	file_to_view ($timestamp, SESSION_TRACKING_DIR_DENIED, $file, 'red');
echo '</table>';
?>