<?php
/* ********************* */
/* Conexion a SqLite     */
/* Eliminar informacion  */
/* ********************* */


//Coneccion con el SGBD-SqLite
$db= new SQLite3('Bett0.db');

?>

<form action="delete.php" method="get">
<select name="eliminar">
	<?php
	//Variable SQl
	$sql="select * from alumno";
	$exe=$db->query($sql) or die ("Error: Mala consulta");
	while($fila=$exe->fetchArray())
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
$exe=$db->querysingle($sql,true);


?>
