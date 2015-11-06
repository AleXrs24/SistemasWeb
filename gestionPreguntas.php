<html>

	<head>
    	<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	  	<title>Gestión de preguntas</title>

	  	<script type="text/javascript">
	  		/*
	  		function obtenerPreguntas(){
	  			xmlhttp = new XMLHttpRequest();
	  			xmlhttp.onreadystatechange=function(){
	  				if(xmlhttp.readyState==4 && xmlhttp.status==200){
	  					document.getElementById("preguntas").innerHTML=xmlhttp.responseText;
	  				}
	  			}
	  			xmlhttp.open("GET", "misPreguntas.php", true);
	  			xmlhttp.send();
	  		}

	  		function insertarPregunta(){
	  			xmlhttp = new XMLHttpRequest();
	  			xmlhttp.onreadystatechange=function(){
	  				if(xmlhttp.readyState==4 && xmlhttp.status==200){
	  					document.getElementById("insertar").innerHTML=xmlhttp.responseText;
	  				}
	  			}
	  			xmlhttp.open("GET", "insertarPregunta.php?pregunta="+document.Preguntas.pregunta.value+"&respuesta="+document.Preguntas.respuesta.value+"&complejidad="+document.Preguntas.complejidad.value+"&tema="+document.Preguntas.tema.value, true);
	  			xmlhttp.send();
	  			
	  		}
	  		*/

	  		XMLHttpRequestObject = new XMLHttpRequest();
	  		XMLHttpRequestObject.onreadystatechange = function(){
	  			if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
	  				document.getElementById("preguntas").innerHTML = XMLHttpRequestObject.responseText;
	  			}
	  		}

	  		XMLHttpRequestObject2 = new XMLHttpRequest();
	  		XMLHttpRequestObject2.onreadystatechange = function(){
	  			if((XMLHttpRequestObject2.readyState==4)&&(XMLHttpRequestObject2.status=200)){
	  				document.getElementById("insercion").innerHTML = XMLHttpRequestObject2.responseText;
	  			}
	  		}

	  		function obtenerPreguntas(){
	  			XMLHttpRequestObject.open("GET", "misPreguntas.php", true);
	  			XMLHttpRequestObject.send();
	  		}

	  		function nuevaPregunta(){
	  			XMLHttpRequestObject2.open("GET", "insertarPregunta.php?pregunta="+document.Preguntas.pregunta.value+"&respuesta="+document.Preguntas.respuesta.value+"&complejidad="+document.Preguntas.complejidad.value+"&tema="+document.Preguntas.tema.value, true);
	  			document.getElementById("Preguntas").reset();
	  			XMLHttpRequestObject2.send();
	  		}
	  	</script>
	</head>

	<body>

		<form>
			<input type="button" name="verPreguntas" value="Ver mis preguntas" onClick="obtenerPreguntas()">
		</form>
		<div id="preguntas" style="background-color:#99FF66;">Aquí aparecerán tus preguntas</div>
		
		<br>
		<form id="Preguntas" name="Preguntas" action="">
			<fieldset>
				<legend>Insertar una nueva pregunta</legend>
				<h2></h2>
				<p> Pregunta: </p>
				<textarea cols="40" rows="3" required name="pregunta" id="pregunta"></textarea>
				<p> Respuesta: </p>
				<textarea cols="40" rows="3" required name="respuesta" id="respuesta"></textarea>
				<p> Complejidad: <select name="complejidad" id="complejidad">
											<option selected>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
								</select>
				</p>
				<p> Tema: </p>
				<input type="text" required name="tema" id="tema"></input>
				<p> <input id="insertar" type="button" value="Enviar" onClick="nuevaPregunta()"/> </p>
			</fieldset>
		</form>
			
		<div id="insercion" style="background-color:#99FF66;"></div>
		<a href="layout.html">Volver a la página de inicio</a>
		<br>

	</body>

</html>