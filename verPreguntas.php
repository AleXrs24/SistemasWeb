<html>

	<head>
    	<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	  	<title>Ver preguntas</title>
	</head>

<?php
	mysql_connect("localhost","root","root") or die(mysql_error());
	mysql_select_db("Quiz") or die(mysql_error());
	$preguntas = mysql_query( "select t_pregunta, complejidad from Preguntas" );
	echo '<table border=1> <tr> <th> Enunciado de la pregunta </th> <th> Complejidad </th> </tr>';
	while($row = mysql_fetch_array($preguntas)) {
		echo '<tr><td>' . $row['t_pregunta'] . '</td> <td>' . $row['complejidad'] . '</td> </tr>';
	}
	echo '</table>';
	echo '<br>';
	echo '<a href="layout.html"> Volver a la página de inicio </a>';
?>