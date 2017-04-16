<?php
/* ********************* */
/* Conexion a PostgreSQL */
/* Eliminar informacion */
/* ********************* */

//Datos de coneccion
$host="localhost";
$user="postgres";
$pass="postgres";
$db="labbase";

//Coneccion con el SGBD-Postgres
$conexion = pg_connect("user=$user password=$pass dbname=$db host=$host") or die("Error: Coneccion No valida");

?>

<form action="delete.php" method="get">
<select name="eliminar">
	<?php
	//Variable SQl
	$sql="select * from alumno";
	$exe=pg_query($conexion, $sql) or die ("Error: Mala consulta");
	while($fila=pg_fetch_array($exe))
		{
			echo "<option value='$fila[0]'>$fila[1] $fila[2] </option>";
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
$exe=pg_query($conexion, $sql) or die ("Error: Mala consulta");

//Control de la ejecucion
if($exe)
	echo "Se elminaron los datos de $ci";
else
	echo "No se pudo eliminar los datos";

?>
