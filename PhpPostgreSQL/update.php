<?php
/* ********************* */
/* Conexion a PostgreSQL */
/* Actulizar informacion */
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="postgres";
$pass="postgres";
$db="labbase";

//Coneccion con el SGBD-Postgres
$conexion = pg_connect("user=$user password=$pass dbname=$db host=$host") or die("Error: Coneccion No valida");

?>

<form action="update.php" method="get">
<strong>CI :</strong> 	  <input type="text" name="ci" size="5" maxlength="3"><br>
<strong>Nombre :</strong> <input type="text" name="nombre" size="20" maxlength="20"><br>
<strong>Fecha :</strong>  <input type="text" name="fecha" size="10" maxlength="10"><br>
<input type="submit" value="Actualizar">
</form>
<?php

//Recup�rando informacion
$ci=isset($_GET['ci']) ? $_GET['ci'] : 5;
$nombre=isset($_GET['nombre']) ? $_GET['nombre'] : "Default";
$fech=isset($_GET['fecha']) ? $_GET['fecha'] : "2010-01-01";

//Varialbe sql
$sql="update alumno set nombre='$nombre', fech_nac='$fech' where ci=$ci";

//Ejecutando la sentencia sql
$exe=pg_query($conexion, $sql) or die ("Error: Mala consulta");

//Control de la ejecucion
if($exe)
	echo "Actulizacion correcta";
else
	echo "No se actulizaron los datos revise el codigo";

?>
