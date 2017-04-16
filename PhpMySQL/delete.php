<?php
/* ********************* */
/* Conexion a MySQL      */
/* Eliminar informacion  */
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


?>

<form action="delete.php" method="get">
<select name="eliminar">
	<?php
	//Variable SQl
	$sql="select * from alumno";
	$exe=mysql_query($sql, $conexion) or die ("Error: Mala consulta");
	while($fila=mysql_fetch_array($exe))
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
$exe=mysql_query($sql, $conexion) or die ("Error: Mala consulta");

//Control de la ejecucion
if($exe)
	echo "Se elminaron los datos de $ci";
else
	echo "No se pudo eliminar los datos";

?>
