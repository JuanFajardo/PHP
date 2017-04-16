<?php
/* ********************* */
/* Conexion a MySQL      */
/* Ver informacion       */
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="root";
$pass="";
$db="labbase";

//Coneccion con el SGBD-Mysql
$conexion = mysql_connect($host, $user, $pass) or die("Error: Coneccion No valida");

//Seleccion de la base de datos
mysql_select_db($db, $conexion) or die ("Error: No hay base de datos");


//Variable SQl
$sql="select * from alumno";

//Ejecutando la sentencia sql
$exe=mysql_query($sql, $conexion) or die ("Error: Mala consulta");

//Mostrando informacion
echo "<table border=1>";
echo "<th>CI</th>  <th>Nombre</th>  <th>Apellidp</th>  <th>Fecha</th>";
	while($fila=mysql_fetch_array($exe))
		{
			echo "<tr>";
			echo "<td>$fila[0]</td>  <td>$fila[1]</td>  <td>$fila[2]</td>  <td>$fila[3]</td> ";
			echo "</tr>";
		}	
echo "</table>";


?>
