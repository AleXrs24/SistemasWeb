<html>

	<head>
    	<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	  	<title>Insertar Pregunta</title>
	</head>

	<body>

		<form action="InsertarPregunta.php" method="post">
			<h2>Inserte una pregunta</h2>
			<p> Pregunta: </p>
			<textarea cols="40" rows="7" required name="pregunta"></textarea>
			<p> Respuesta: </p>
			<textarea cols="40" rows="7" required name="respuesta"></textarea>
			<p> Complejidad: <select name="complejidad">
										<option selected>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
							</select>
			</p>
			<p> <input id="input2" type="submit" /> </p>
		</form>
		<a href="layout.html">Volver a la página de inicio</a>
		<br>

	</body>

</html>

<?php
	session_start();

	if (isset($_POST['pregunta'])) {
		mysql_connect("localhost","root","root") or die(mysql_error());
		mysql_select_db("Quiz") or die(mysql_error());
		$email = $_SESSION['email'];
		$pregunta = $_POST['pregunta'];
		$respuesta = $_POST['respuesta'];
		$complejidad = $_POST['complejidad'];
		$sql="INSERT INTO Preguntas(n_pregunta, email, t_pregunta, t_respuesta, complejidad) VALUES
		(NULL,'$email','$pregunta', '$respuesta', '$complejidad')";
		if (!mysql_query($sql)) {
			echo "Se ha detectado un problema a la hora de realizar la inserción en la base de datos<br>";
			die('Error: ' . mysql_error());
		} else {
			echo "Se ha realizado correctamente la inserción";
		}
		mysql_close();
	}
?>