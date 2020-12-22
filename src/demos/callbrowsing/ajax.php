<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/../configs/mariadb.www_callone_de_demos.inc.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/../libraries/mariadb.inc.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/../libraries/phonenumber.inc.php');


// cors domains
define ('CORS_DOMAINS', array ('://www.callone.de', '://beta.www.callone.de', '.surfly.com', '://resttesttest.com'));

// register numbers
$rootnumbers = new rootnumbers ();
$rootnumbers->rootnumber_add ('405aa97e70dddcbb269d2494b91c3c2f', '+49 6131 - 888 9713', 3);	// smava, check24, etc.


class rootnumbers
{
	private $rootnumbers;

	function __construct ()
	{	$this->rootnumbers = array ();
	}

	function rootnumber_add ($hash, $rootnumber, $ddi_length)
	{	$this->rootnumbers[] = new rootnumber ($hash, $rootnumber, $ddi_length);		
	}

	function rootnumber_find ($hash)
	{
		foreach ($this->rootnumbers as $rootnumber)
		{	if (!strcmp ($rootnumber->hash_get(), $hash))
				return $rootnumber;
		}

		return null;
	}
}

class rootnumber
{
	private $hash;
	private $rootnumber;
	private $ddi_length;

	function __construct ($hash, $rootnumber, $ddi_length)
	{
		$this->hash = $hash;
		$this->rootnumber = $rootnumber;
		$this->ddi_length = $ddi_length;
	}

	function hash_get ()
	{	return $this->hash;		
	}

	function rootnumber_get ()
	{	return $this->rootnumber;
	}

	function ddi_length_get ()
	{	return $this->ddi_length;
	}
}


function ddi_create ($pdo, $rootnumber)
{
	$params = array ();
	$query = 'SELECT ddi, UNIX_TIMESTAMP(timestamp)
			  FROM callbrowsing
			  WHERE rootnumber=?
			  ORDER BY ddi';
	$params[] = phonenumber_to_digit ($rootnumber->rootnumber_get());
	
	$statement = $pdo->prepare ($query);
	if (empty ($statement->execute ($params)))
	{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
		exit ();
	}

	$ddis = array ();
	while ($row = $statement->fetch ())
		$ddis[$row['ddi']] = $row['UNIX_TIMESTAMP(timestamp)'];

	$timeout = time () - (60*60);	// one hour
	$ddi_length = $rootnumber->ddi_length_get();

	$ddi_max = 9;
	for ($i=2; $i<=$ddi_length; $i++)
		$ddi_max = $ddi_max * 10 + 9;

	// try 10 times max to get a random ddi
	for ($i=1; $i<=10; $i++)
	{
		$ddi = str_pad (random_int(1, $ddi_max), $ddi_length, '0', STR_PAD_LEFT);
		
		if ((empty ($ddis[$ddi])) ||
			($ddis[$ddi] < $timeout))
			return $ddi;
	}

	// no free ddi found by random, go through each
	for ($i=1; $i<=$ddi_max; $i++)
	{
		$ddi = str_pad ($i, $ddi_length, '0', STR_PAD_LEFT);
		
		if ((empty ($ddis[$ddi])) ||
			($ddis[$ddi] < $timeout))
			return $ddi;
	}

	return null;
}


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
if ((empty ($_REQUEST['rootnumberhash'])) ||
	(empty ($_REQUEST['identity'])) ||
	(empty ($rootnumbers->rootnumber_find($_REQUEST['rootnumberhash']))))
{	echo json_encode (array ('error' => 'Access denied.'));
	exit ();
}
define ('ROOTNUMBERHASH', $_REQUEST['rootnumberhash']);
define ('IDENTITY', $_REQUEST['identity']);

// session
if (empty ($_REQUEST['session']))
		define ('SESSION', md5 (random_int(PHP_INT_MIN, PHP_INT_MAX).time()));
else	define ('SESSION', $_REQUEST['session']);

// text
if (empty ($_REQUEST['text']))
		define ('TEXT', '');
else	define ('TEXT', $_REQUEST['text']);

// agent url
if (empty ($_REQUEST['url']))
		define ('URL', '');
else	define ('URL', $_REQUEST['url']);


// connect to database
$pdo = mariadb_connect (MARIADB_DATABASE);


// init personal number
$params = array ();
$query = 'SELECT ddi, callstatus, caller
		  FROM callbrowsing
		  WHERE session=?';
$params[] = IDENTITY.SESSION;

$statement = $pdo->prepare ($query);
if (empty ($statement->execute ($params)))
{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
	exit ();
}
$row = $statement->fetch ();

if (empty ($row['ddi']))
{
	// create new personal number
	$rootnumber = $rootnumbers->rootnumber_find (ROOTNUMBERHASH);
	$ddi = ddi_create ($pdo, $rootnumber);
	if (empty ($ddi))
	{	echo json_encode (array ('error' => 'No ddi available.'));
		exit ();
	}
	define ('DDI', $ddi);
	define ('CALLSTATUS', 0);
	define ('CALLER', '');

	$params = array ();
	$query = 'REPLACE INTO callbrowsing
			  (rootnumber, ddi, timestamp, session, text, callstatus, caller, url)
			  VALUES (?, ?, FROM_UNIXTIME(?), ?, ?, ?, ?, ?)';
	$params[] = phonenumber_to_digit ($rootnumber->rootnumber_get());
	$params[] = DDI;
	$params[] = time();
	$params[] = IDENTITY.SESSION;
	$params[] = '';
	$params[] = 0;
	$params[] = '';
	$params[] = '';

	$statement = $pdo->prepare ($query);
	if (empty ($statement->execute ($params)))
	{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
		exit ();
	}
}
else
{
	// use existing personal number
	define ('DDI', $row['ddi']);
	define ('CALLSTATUS', $row['callstatus']);
	define ('CALLER', phonenumber_to_e164 ($row['caller']));

	// update personal number
	$params = array ();
	$query = 'UPDATE callbrowsing
			  SET timestamp=NOW(),
			  text=?,
			  url=?
			  WHERE session=?';
	$params[] = TEXT;
	$params[] = URL;
	$params[] = IDENTITY.SESSION;

	$statement = $pdo->prepare ($query);
	if (empty ($statement->execute ($params)))
	{	echo json_encode (array ('error' => 'Database query error: '.$statement->queryString.' '.$statement->errorInfo()[2]));
		exit ();
	}
}


// response
$response = array ();
$response['success']	= true;
$response['session']	= SESSION;
$response['rootnumber'] = $rootnumbers->rootnumber_find (ROOTNUMBERHASH)->rootnumber_get();
$response['ddi']		= DDI;
$response['callstatus']	= (int) CALLSTATUS;
$response['caller']		= CALLER;
echo json_encode ($response);
?>