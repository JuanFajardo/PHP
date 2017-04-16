<?php
/* ********************* */
/* Conexion a SqLite     */
/* Ver informacion       */
/* ********************* */

//Coneccion con el SGBD-SqLite
$db = new SQLite3('Bett0.db');

//Variable SQl
$sql="select * from alumno";

//Ejecutando la sentencia sql
$exe=$db->query($sql) or die ("Error: Mala consulta");

//Mostrando informacion
echo "<table border=1>";
echo "<th>CI</th>  <th>Nombre</th>  <th>Apellidp</th>  <th>Fecha</th>";
	while($fila=$exe->fetchArray())
		{
			echo "<tr>";
			echo "<td>$fila[0]</td><td>$fila[1]</td>  <td>$fila[2]</td>  <td>$fila[3]</td> ";
			echo "</tr>";
			
		}	
echo "</table>";


?>
