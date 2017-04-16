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

?>

<form action="delete.php" method="get">
<select name="eliminar">
	<?php
	//Variable SQl
	$sql="select * from alumno";
	//Ejecutando la sentencia sql
	$exe=oci_parse($conexion, $sql) or die ("Error: Mala consulta".oci_error());
	oci_execute($exe);

	while($fila=oci_fetch_array($exe, OCI_BOTH))
		{
			echo "<option value='".$fila[0]."'>".$fila[1]." ".$fila[2]."</option>";
		}	
	?>
</select>
<input type="submit" value="Eliminar">
</form>
<?php

//Recupèrando informacion
$ci=isset($_GET['eliminar']) ? $_GET['eliminar'] : 5;

//Varialbe sql
$sql="delete from alumno where ci=$ci";

//Ejecutando la sentencia sql
$exe=oci_parse($conexion, $sql) or die ("Error: Mala consulta".oci_error());
oci_execute($exe);


//Control de la ejecucion
if($exe)
	echo "Se elminaron los datos de $ci";
else
	echo "No se pudo eliminar los datos";

?>
