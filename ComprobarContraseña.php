<?php
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');

	$server = new soap_server;
	$server->register('comprobar');

	function comprobar($pass){
		$file = fopen("toppasswords.txt", "r");
		while(!feof($file)){
			if($pass==fgets($file)){
				return 'INVALIDA';
				break;
			}
		}
		return 'VALIDA';
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)?
	$HTTP_RAW_POST_DATA : ";"
	$server->service($HTTP_RAW_POST_DATA);
?>