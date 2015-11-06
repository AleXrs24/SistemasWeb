<?php 
 
$conex_remota = mysql_connect('mysql.hostinger.es', "u470105749_root", "2pImAxE9"); 

 
if (!($conex_remota)) { 
    $conex_local = mysql_connect("localhost", "root", "root") OR die ("No se puede conectar a la base de datos local");
    mysql_select_db("Quiz");
} else {
	mysql_select_db("u470105749_quiz"); 
}
?>