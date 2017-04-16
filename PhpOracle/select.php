<?php
/* ********************* */
/* Conexion a Oracle     */
/* Ver informacion       */
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="system";
$pass="oracle"; //Cambialo por tu password

//Coneccion con el SGBD-Oracle
$conexion = oci_connect($user, $pass) or die("Error: Coneccion No valida - ");

//Variable SQl
$sql='select ci, nombre, apellido, fech_nac from alumno';
//$sql='select current_date from dual';

//Ejecutando la sentencia sql
$exe=oci_parse($conexion, $sql) or die ("Error: Mala consulta".oci_error());
oci_execute($exe);



//Mostrando informacion
echo "<table border=1>";
echo "<th>CI</th>  <th>Nombre</th>  <th>Apellidp</th>  <th>Fecha</th>";
	while($fila=oci_fetch_array($exe , OCI_BOTH))
		{
			echo "<tr>";
			echo "<td>".$fila[0]."</td>  <td>".$fila[1]."</td>  <td>".$fila[2]."</td>  <td>".$fila[3]."</td> ";
			echo "</tr>";
		}	
echo "</table>";


?>
