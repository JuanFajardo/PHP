<?php
/* ********************* */
/* Conexion a Oracle     */
/* Actualizar informacion*/
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="system";
$pass="oracle"; //Cambialo por tu password

//Coneccion con el SGBD-Oracle
$conexion = oci_connect($user, $pass) or die("Error: Coneccion No valida - ");

?>

<form action="update.php" method="get">
<strong>CI :</strong> 	  <input type="text" name="ci" size="5" maxlength="3"><br>
<strong>Nombre :</strong> <input type="text" name="nombre" size="20" maxlength="20"><br>
<strong>Fecha :</strong>  <input type="text" name="fecha" size="10" maxlength="10"><br>
<input type="submit" value="Actualizar">
</form>
<?php

//Recupèrando informacion
$ci=isset($_GET['ci']) ? $_GET['ci'] : 5;
$nombre=isset($_GET['nombre']) ? $_GET['nombre'] : "Default";
$fech=isset($_GET['fecha']) ? $_GET['fecha'] : "2010-01-01";

//Varialbe sql
$sql="update alumno set nombre='$nombre', fech_nac='$fech' where ci=$ci";

//Ejecutando la sentencia sql
$exe=oci_parse($conexion, $sql) or die ("Error: Mala consulta".oci_error());
oci_execute($exe);

//Control de la ejecucion
if($exe)
	echo "Actulizacion correcta";
else
	echo "No se actulizaron los datos revise el codigo";

?>
