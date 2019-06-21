<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/../configs/inopla.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/../libraries/inopla.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/../libraries/phonenumber.inc.php';


define ('INOPLA_ACCESS_ID', 'callone_cfcd208495d565ef66e7dff9f98764da');
define ('CALLBACK_BUTTON_KEY', '4639c811c6701f30ef7c6ac9a2b74d34');
define ('CORS_DOMAINS', array ('://www.callone.de', '.surfly.com', '://resttesttest.com'));


header ('Content-Type: application/json; charset=utf-8');


// CORS access rules
if (!empty ($_SERVER['HTTP_ORIGIN']))
{
	foreach (CORS_DOMAINS as $cors_domain)
	{
		if (stristr ($_SERVER['HTTP_ORIGIN'], $cors_domain) !== false)
		{
			header ('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
			header ('Access-Control-Allow-Methods: POST');
			break;
		}
	}
}


// init
if (empty ($_REQUEST['phonenumber']))
{	echo json_encode (array ('error' => 'phonenumber'));
	exit ();
}
if (empty ($_REQUEST['email']))
{	echo json_encode (array ('error' => 'email'));
	exit ();
}
	
define ('PHONENUMBER', $_REQUEST['phonenumber']);
define ('EMAIL', $_REQUEST['email']);


// start callback
$api_parameters = array ();
$api_parameters['key'] = CALLBACK_BUTTON_KEY;
$api_parameters['caller'] = PHONENUMBER;
$api_parameters['email'] = EMAIL;
$api_parameters['ip_addr'] = $_SERVER['REMOTE_ADDR'];

$api_parameters['tts'] = array ();
$api_parameters['tts']['intro'] = array ();
$api_parameters['tts']['intro']['voice'] = 'Petra-ML';
$api_parameters['tts']['intro']['text'] = 'Vielen Dank dass sie die Call One Voice to Text Demo testen. Sprechen Sie ihre Nachricht nach dem Ton. Wenn Sie fertig sind, legen Sie einfach auf. Anschliessend bekommen Sie eine SMS mit dem transkribierten Text.';


$response = inopla_api_request (INOPLA_ACCESS_ID, '/Callback', 'POST', $api_parameters);
if (empty ($response['response']['reg_token']))
{	echo json_encode (array ('error' => 'callback'));
	exit ();
}



// response
$response = array ();
$response['success']	= true;
echo json_encode ($response);
?>