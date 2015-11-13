<?php
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');

	$ns = "http://localhost/SistemasWeb";
	$server = new soap_server;
	$server->configureWSDL('comprobar', $ns);
	$server->wsdl->schemaTargetNameespace=$ns;
	$server->register('comprobar', array('x'=>'xsd:string'),array('z'=>'xsd:string') $ns);

	function comprobar($x){
		$z = 'VALIDA';
		$file = fopen("data/passwords.txt", "r");
		while(!feof($file){
			if($x==fgets($file)){
				$z = 'INVALIDA';
				return $z;
			}
		}
		fclose($file);
		return $z;
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)?
	$HTTP_RAW_POST_DATA : ''; 	
	$server->service($HTTP_RAW_POST_DATA);
?>