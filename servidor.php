<?php
//requerimos el archivo conexion.php con el metodo require de php para hacer uso de la conexion
require "conexion.php";
/*include "conexion.php"; hace lo mismo que require "conexion.php"; genera la conexion con la base de datos.
/*
Hacemos una consulta para traer todos los datos guardados en la tabla amigos y guardamos la consulta en la variable $resultadoDB
*/
$resultadoDB = mysqli_query($con, "SELECT * FROM amigos");

//Creeo una variable vacia
$amigosDB = " ";

//Imprimo una tabla HTML concatenando las etiquetas html con la variable $amigosDB
$amigosDB .="<table>"; /*El punto concatena como si fuera un mas + en javascript*/
$amigosDB .="<tr>";
$amigosDB .="<th>ID</th>";
$amigosDB .="<th>Nombre</th>";
$amigosDB .="<th>Apellido</th>";
$amigosDB .="<th>Teléfono</th>";
$amigosDB .="<th>Cumpleaños</th>";
$amigosDB .="</tr>";

//Hago que las filas que contienen los datos dinámicos se obtengan de la base de datos
/*
Usamos el metodo mysqli_fetch_assoc($resultadoDB) para recorrer la tabla amigos y le pasamos como parámetro la variable $resultado para mostrar por pantalla cada fila de la tabla. 
*/
while($row = mysqli_fetch_assoc($resultadoDB))
{
	$amigosDB .="<tr>";
	$amigosDB .="<td>". $row['id'] ."</td>";
	$amigosDB .="<td>". $row['nombre'] ."</td>";
	$amigosDB .="<td>". $row['apellido']."</td>";
	$amigosDB .="<td>". $row['telefono']."</td>";
	$amigosDB .="<td>". $row['fecha_nacimiento']."</td>";
	$amigosDB .="</tr>";
}

//Cerramos la etiquta table
$amigosDB .="</table>";

//Mostramos el contenido de la variable $amigosDB
echo $amigosDB;
//Cerramos la conexion que abrimos con la variable $con
mysqli_close($con);
?>