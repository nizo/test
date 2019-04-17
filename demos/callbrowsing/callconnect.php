<?php
function xml_response ($text, $url, $url_text)
{
	// replace characters for valid xml
	$text = str_replace ('&', '&#38;', $text);
	$text = str_replace ('<', '&#60;', $text);
	$text = str_replace ('>', '&#62;', $text);
	$text = str_replace ('\'', '&#39;', $text);
	$text = str_replace ('"', '&#34;', $text);

	header ('Content-Type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
	echo '<alldata>';
	echo '<tts><text>'.$text.'</text><voice>Petra-ML</voice></tts>';
	if ((!empty ($url)) && (!empty ($url_text)))
		echo '<link>'.$url.'</link><link_text>'.$url_text.'</link_text>';
	echo '</alldata>';
}


// ddi missing
if (empty ($_GET['ddi']))
{	xml_response ('Bitte rufen Sie uns unter ihrer persönlichen Durchwahl an.', null, null);
	exit ();
}

// configuration
$file_call = 'sessions/'.$_GET['ddi'].'_call.txt';
$file_website = 'sessions/'.$_GET['ddi'].'_website.txt';


// caller file
switch ($_GET['event'])
{
	case 'start_rp':
		// save caller for website ajax request
		if ($_GET['routing_id'] == 88838)
		{
			$data = array ();
			$data['caller']		= $_GET['caller'];
			$data['timestamp']	= time ();
			file_put_contents ($file_call, json_encode ($data));
		}

		// tts website settings
		if ($_GET['routing_id'] == 88835)
		{
			// load website settings
			if (file_exists ($file_website))
			{	$data_json = file_get_contents ($file_website);
				$data_raw = json_decode ($data_json, true);
			}

			if ((!empty ($data_raw['timestamp_end'])) &&
				(time() - $data_raw['timestamp_end'] < 3600))
			{
				$visit_duration = $data_raw['timestamp_end'] - $data_raw['timestamp_start'];
				if ($visit_duration >= 3600)
					$visit_duration_text = round ($visit_duration / 60 / 60).' Stunden';
				else if ($visit_duration >= 120)
					$visit_duration_text = round ($visit_duration / 60).' Minuten';
				else
					$visit_duration_text = $visit_duration.' Sekunden';

				$text  = 'Sie haben unter ihrer persönlichen Durchwahl '.$_GET['ddi'].' angerufen. ';
				$text .= 'Ihre Auswahl ist '.$data_raw['credit_value'].' Euro, bei einer Laufzeit von '.$data_raw['credit_runtime'].' Monaten und ';
				$text .= 'soll für '.$data_raw['credit_type'].' verwendet werden. ';
				$text .= 'Die Webseite wurde am '.date ('d.m.', $data_raw['timestamp_start']).' für '.$visit_duration_text.' besucht.';
				xml_response ($text, 'https://www.callone.de/demos/callbrowsing/agent.php?ddi='.$_GET['ddi'], 'Callbrowsing für Kunde '.$_GET['ddi']);
			}
			else xml_response ('Diese Durchwahl ist abgelaufen, die Rufnummer wurde offenbar abgeschrieben und später angerufen.', null, null);
		}
		break;
	
	case 'connect':
		// save caller and cobrowsing id for website ajax request
		$data = array ();
		$data['caller']		= $_GET['caller'];
		$data['cobrowsing']	= '123';
		$data['timestamp']	= time ();
		file_put_contents ($file_call, json_encode ($data));
		break;
	
	case 'hangup':
		if (file_exists ($file_call))
			unlink ($file_call);
		break;
}
?>