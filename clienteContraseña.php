<?php
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');

	$soapclient = new soap_client("http://localhost/SistemasWeb/ComprobarContraseña.php?wsdl", false);

	
?>