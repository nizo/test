<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/../configs/mariadb.inc.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/../libraries/mariadb.inc.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/../libraries/phonenumber.inc.php');


define ('TTS_SPEAKER', 'Marlene');

define ('ROUTING_IDS_CALLER',	array (88838));
define ('ROUTING_IDS_LINK',		array (88838));
define ('ROUTING_IDS_TTS',		array (88838));

define ('TEXT_DDI_MISSING', 'Bitte rufen Sie uns unter ihrer persönlichen Durchwahl an.');
define ('TEXT_DDI_TIMEOUT',	 'Leider ist ihre persönliche Durchwahl abgelaufen. '
							.'Offenbar wurde diese Nummer abgeschrieben und nach '
							.'mehr als einer Stunde angerufen.');


function response_link ($url, $text)
{
	$response = array ();
	
	$response['link'] = $url;
	$response['link_text'] = $text;

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
$pdo = mariadb_connect ('db10427997-demos');


switch (strtoupper ($request['event']))
{
	case 'START_RP':
		$timeout = time () - (60*60);	// one hour

		$service = null;
		if (!empty ($request['cb_data1']))
			$service = phonenumber_to_digit ($request['cb_data1']);
		if (empty ($service))
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
		{	$url = $row['url'].'&caller='.$request['caller'];
			$response = array_merge ($response, response_link ($url, 'CRM-Datensatz öffnen'));
		}

		if (in_array ($request['routing_id'], ROUTING_IDS_TTS))
		{
			if (empty ($row['text']))
					$response = array_merge ($response, response_text_to_speech (TEXT_DDI_TIMEOUT));
			else	$response = array_merge ($response, response_text_to_speech ($row['text']));
		}

		echo json_encode ($response);
		break;
	
	case 'CONNECT':
		$service = null;
		if (!empty ($request['cb_data1']))
			$service = phonenumber_to_digit ($request['cb_data1']);
		if (empty ($service))
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
		$service = null;
		if (!empty ($request['cb_data1']))
			$service = phonenumber_to_digit ($request['cb_data1']);
		if (empty ($service))
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
?>