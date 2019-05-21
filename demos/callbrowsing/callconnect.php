<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/../libraries/phonenumber.inc.php';


define ('TTS_SPEAKER', 'Petra-ML');

define ('ROUTING_IDS_CALLER',	array (88838));
define ('ROUTING_IDS_LINK',		array (88838));
define ('ROUTING_IDS_TTS',		array (88838));

define ('TEXT_DDI_MISSING', 'Bitte rufen Sie uns unter ihrer persönlichen Durchwahl an.');
define ('TEXT_DDI_TIMEOUT',	 'Leider ist ihre persönliche Durchwahl abgelaufen. '
							.'Offenbar wurde diese Nummer abgeschrieben und nach '
							.'mehr als einer Stunde angerufen.');

define ('DATABASE_HOST',	'localhost');
define ('DATABASE_USER',	'db10427997-demos');
define ('DATABASE_PASS',	'asdWQ21345sASD2fdsfds');
define ('DATABASE_DB',		'db10427997-demos');
define ('DATABASE_TABLE',	'callbrowsing');


function response_link ($url, $text)
{
	$response = array ();
	
	$response['link'] = $url;
	$response['link_text'] = $name;

	return $response;
}

function response_text_to_speech ($text)
{
	$response = array ();
	
	$response['tts'] = array ();
	$response['tts']['voice'] = TTS_SPEAKER;
	$response['tts']['text'] = $text;

	return $response;
}


header ('Content-Type: application/json; charset=utf-8');

$request = json_decode (file_get_contents ('php://input'), true);
if (empty ($request['caller']))
{	echo json_encode (array ());
	exit ();
}

if (empty ($request['ddi']))
{	echo json_encode (response_text_to_speech (TEXT_DDI_MISSING));
	exit ();
}


// connect to database
try
{	$pdo = new pdo ('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_DB, DATABASE_USER, DATABASE_PASS);
}
catch (PDOException $e)
{	echo json_encode (array ('error' => 'Database connection error: '.$e->getMessage ()));
	exit ();
}


switch (strtoupper ($request['event']))
{
	case 'START_RP':
		$timeout = time () - (60*60);	// one hour
		$service = phonenumber_to_digit ($request['service']);

		if ((!in_array ($request['routing_id'], ROUTING_IDS_CALLER)) &&
			(!in_array ($request['routing_id'], ROUTING_IDS_LINK)) &&
			(!in_array ($request['routing_id'], ROUTING_IDS_TTS)))
		{	echo json_encode (array ());
			exit ();
		}


		// set caller
		if (in_array ($request['routing_id'], ROUTING_IDS_CALLER))
		{
			$params = array ();
			$query = 'UPDATE callbrowsing
					  SET callstatus=1, caller=?
					  WHERE rootnumber=?
					  AND ddi=?
					  AND UNIX_TIMESTAMP(timestamp)>=?';
			$params[] = $request['caller'];
			$params[] = $service;
			$params[] = $request['ddi'];
			$params[] = $timeout;
	
			$statement = $pdo->prepare ($query);
			if (empty ($statement->execute ($params)))
			{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
				exit ();
			}
		}


		$params = array ();
		$query = 'SELECT text, url
				  FROM callbrowsing
				  WHERE rootnumber=?
				  AND ddi=?
				  AND UNIX_TIMESTAMP(timestamp)>=?';
		$params[] = $service;
		$params[] = $request['ddi'];
		$params[] = $timeout;

		$statement = $pdo->prepare ($query);
		if (empty ($statement->execute ($params)))
		{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
			exit ();
		}
		$row = $statement->fetch ();


		$response = array ();

		if ((in_array ($request['routing_id'], ROUTING_IDS_LINK)) &&
			(!empty ($row['url'])))
				$response = array_merge ($response, reponse_link ($row['url'], 'Callbrowsing'));

		if (in_array ($request['routing_id'], ROUTING_IDS_TTS))
		{
			if (empty ($row['text']))
					$response = array_merge ($response, response_text_to_speech (TEXT_DDI_TIMEOUT));
			else	$response = array_merge ($response, response_text_to_speech ($row['text']));
		}

		echo json_encode ($response);
		break;
	
	case 'CONNECT':
		$service = phonenumber_to_digit ($request['service']);

		$params = array ();
		$query = 'UPDATE callbrowsing
				  SET callstatus=2
				  WHERE rootnumber=?
				  AND ddi=?';
		$params[] = $service;
		$params[] = $request['ddi'];

		$statement = $pdo->prepare ($query);
		if (empty ($statement->execute ($params)))
		{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
			exit ();
		}
	
		echo json_encode (array ());
		break;
	
	case 'HANGUP':
		$service = phonenumber_to_digit ($request['service']);

		$params = array ();
		$query = 'UPDATE callbrowsing
				  SET callstatus=0, caller=""
				  WHERE rootnumber=?
				  AND ddi=?';
		$params[] = $service;
		$params[] = $request['ddi'];

		$statement = $pdo->prepare ($query);
		if (empty ($statement->execute ($params)))
		{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
			exit ();
		}

		echo json_encode (array ());
		break;
	
	default:
		echo json_encode (array ());
		break;
}

















/*
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







// configuration
$file_call = 'sessions/'.$_GET['ddi'].'_call.txt';
$file_website = 'sessions/'.$_GET['ddi'].'_website.txt';


// caller file
switch ($_GET['event'])
{
	case 'connect':
		// save caller and cobrowsing id for website ajax request
		$data = array ();
		$data['caller']		= $_GET['caller'];
		$data['cobrowsing']	= '123';
		$data['timestamp']	= time ();
		file_put_contents ($file_call, json_encode ($data));
		break;
}
*/
?>