<?php
/* ********************* */
/* Conexion a PostgreSQL */
/* Ver informacion       */
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="postgres";
$pass="postgres";
$db="labbase";

//Coneccion con el SGBD-Postgres
$conexion = pg_connect("user=$user password=$pass dbname=$db host=$host") or die("Error: Coneccion No valida");



//Variable SQl
$sql="select * from alumno";

//Ejecutando la sentencia sql
$exe=pg_query($conexion, $sql) or die ("Error: Mala consulta");

//Mostrando informacion
echo "<table border=1>";
echo "<th>CI</th>  <th>Nombre</th>  <th>Apellidp</th>  <th>Fecha</th>";
	while($fila=pg_fetch_array($exe))
		{
			echo "<tr>";
			echo "<td>$fila[0]</td>  <td>$fila[1]</td>  <td>$fila[2]</td>  <td>$fila[3]</td> ";
			echo "</tr>";
		}	
echo "</table>";


?>
