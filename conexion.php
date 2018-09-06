<?php

//Creo las variables de conexion para la base de datos y son reconocidas con el simbolo del $
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db	= 'agenda';

/*
Creo una variable $con que contiene el metodo MySql para la conección y le paso por parametro
las variable de conexión.
*/
$con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
/*
Con un condicional evaluo si no hubo error a la hora de conectarnos a la base de datos
MySql usa los método mysqli_connect_errno() y mysqli_connect_errno() para evaluar los errores de
conexión.
*/
if(mysqli_connect_errno())
{
	echo "Error con la conexion " . mysqli_connect_errno();
}/*else{
	echo "conectado";
}*/

?>