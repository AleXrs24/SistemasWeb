<?php
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');

	sleep(1);

	$pass = $_GET['pass'];

	$soapclient = new nusoap_client("http://localhost/SistemasWeb/ComprobarContraseña.php?wsdl", false);

	$result = $soapclient->call('comprobar', array('x'=>$pass));

	echo $result;

?>