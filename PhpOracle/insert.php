<?php
/* ********************* */
/* Conexion a Oracle     */
/* Insertar informacion  */
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="system";
$pass="oracle"; //Cambialo por tu password

//Coneccion con el SGBD-Oracle
$conexion = oci_connect($user, $pass) or die("Error: Coneccion No valida - ");

?>

<form action="insert.php" method="get">
<strong>CI :</strong> 	  <input type="text" name="ci" size="5" maxlength="3"><br>
<strong>Nombre :</strong> <input type="text" name="nombre" size="20" maxlength="20"><br>
<strong>Apellido :</strong> <input type="text" name="apellido" size="20" maxlength="20"><br>
<strong>Fecha :</strong>  <input type="text" name="fecha" size="10" maxlength="10"><br>
<input type="submit" value="Insertar">
</form>
<?php

//Recupèrando informacion
$ci=isset($_GET['ci']) ? $_GET['ci'] : 0;
$nombre=isset($_GET['nombre']) ? $_GET['nombre'] : "";
$apellido=isset($_GET['apellido']) ? $_GET['apellido'] : "";
$fech=isset($_GET['fecha']) ? $_GET['fecha'] : "2010-01-01";

//Varialbe sql
$sql="insert into alumno values('$ci', '$nombre', '$apellido', '$fech')";

if($ci!=0 && $nombre!="" && $apellido!="" && $fech!="")
{
//Ejecutando la sentencia sql
$exe=oci_parse($conexion, $sql) or die ("Error: Mala consulta".oci_error());
oci_execute($exe);
}
else
{
	$exe=false;
}


//Control de la ejecucion
if($exe)
	echo "Se insertaron los datos correctamente";
else
	echo "No se pudo insertar los datos, revise el codigo";

?>
