XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.onreadystatechange = function(){
    if((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
        document.getElementById("comprobacionEmail").innerHTML = XMLHttpRequestObject.responseText;
        if(XMLHttpRequestObject.responseText=="Esta dirección de correo no está matriculada en Sistemas Web"){
            document.getElementById("enviar").disabled = true;
            document.getElementById("comprobacionEmail").style.color="red";
        }else{
            document.getElementById("comprobacionEmail").style.color="green";
        }
    }
}

function comprobarEmail(){
    var email = document.getElementById("email").value;
    XMLHttpRequestObject.open("GET", "comprobarMatricula.php?email="+email, true);
    XMLHttpRequestObject.send();
}

function vervalores() {
    var sAux = "";
 	var frm = document.getElementById("registro");
 	for (i = 0; i < frm.elements.length; i++) {
        sAux += "NOMBRE: " + frm.elements[i].name + " ";
 		sAux += "VALOR: " + frm.elements[i].value + "\n";
 	}
 	alert(sAux);
}

function validar() {
    var camposTexto = document.getElementById("registro").elements;
    var camposRadio = document.getElementsByName("especialidad");
    var password = document.getElementById("contrasena");
    var correo = document.getElementById("email");
    var tlf = document.getElementById("telefono");
    var name = document.getElementById("nombre");
    var surname = document.getElementById("apellidos");
    var expr_email = /^[a-zA-Z]+[0-9]{3}@ikasle.ehu.(es|eus)$/;
    var expr_phone = /^\d{9}$/;
    var expr_name = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]{3,12}$/;
    var expr_surname = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]{3,12} [a-zA-ZñÑáéíóúÁÉÍÓÚ]{3,12}$/;

    for (var i = 0; i < camposTexto.length; i++) {
        if (camposTexto[i].value == '' && (camposTexto[i].type == 'text' || camposTexto[i].type == 'password')) {
        alert("El campo " + camposTexto[i].id + " está vacío y es obligatorio");
        return false;
        } else if (/^\s+$/.test(camposTexto[i].value) && (camposTexto[i].type == 'text' || camposTexto[i].type == 'password')) {
            alert("El campo " + camposTexto[i].id + " no se puede rellenar solamente con espacios en blanco");
            return false;
        }
    }

    for (var j = 0; j < camposRadio.length; j++) {    
        if (camposRadio[j].checked) {
        checked = true;
        break;
        }
    }

    if (checked != true) {
        alert("El campo " + camposRadio[0].name + " tiene que tener alguna de las opciones seleccionada");
        return false;
    }

    if (password.value.length < 6) {
        alert("El campo " + password.id + " debe tener al menos 6 caracteres");
        return false;
    }

    if (!(expr_email.test(correo.value))) {
        alert("El formato del campo " + correo.id + " no es correcto. Asegúrese de que cumple el siguiente formato {Letras + 3 dígitos + “@ikasle.ehu.” + “es”/”eus”}");
        return false;
    }

    if (!(expr_phone.test(tlf.value))) {
        alert("El campo " + tlf.id + " debe tener 9 dígitos");
        return false;
    }

    if (!(expr_name.test(name.value))) {
        alert("El campo " + name.id + " debe contener de 3 a 12 caracteres alfabéticos");
        return false;
    }

    if (!(expr_surname.test(surname.value))) {
        alert("El campo " + surname.id + " debe contener 2 apellidos de 3 a 12 caracteres alfabéticos cada uno separados por un único espacio");
        return false;
    }

    alert("¡Todos los campos han sido validados de forma correcta!");
    return true;
}

function crearCaja() {
    var newbox = document.createElement('newbox');
    newbox.innerHTML = '<input type="text" id="nueva_especialidad" name="especialidad" value="">';
    document.getElementById("nuevacaja").appendChild(newbox);
}

function eliminarCaja() {
    document.getElementById("nueva_especialidad").remove();
}


