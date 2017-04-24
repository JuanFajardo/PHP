<?php
/*
Autor:	    Bett0
Para:		    http://www.sisoft.com.bo
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/

function con()
{
	if(!($cn=mysql_connect("localhost", "root", "")))
		echo "Mala coneccion";
	else
		mysql_select_db("sqli", $cn) or die("db");
	return $cn;
}
?>
<html lang="es">
<meta charset="utf-8" />
<head>
	<title>Bett0 - SQL Ijection Basico - Principal</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.css">
<body bgcolor="#C4CEC6">

	<div class="container">
		<div class="row">
			<div class="col-md-14">
				<a href="index.php"><img src="assets/images/banner.jpg" class="img-rounded" width="100%"></img></a>
			</div>
		</div>

		<div class="row media">
			<?php
			$sql="select * from noticias";
			$exe=mysql_query($sql, con())or die("No hay exe");
			while($f=mysql_fetch_array($exe))
			{
				echo "<div class='col-md-9'>";
				echo "<h3>Titulo: ".$f[1]."</h3>";
				echo "<p>".$f[2]."</p><br/>";
				echo "<a href='detalle.php?id=".$f[0]."' ><strong><i>Leer Mas...</i></strong></a><br/><br/>";
				echo "</div> <div class='col-md-2'> <img width='150' src='assets/images/".$f[7]."' class='img-rounded' alt='".$f[1]."'> </div>";
			}
			?>
		</div>

		<div class="row">
			<div class="col-md-12">
				<footer style="margin-top:50px">
					<span class="span4"> <b><i>Sociedad Científica de Estudiantes de Ingeniería Informática – UATF</i></b> </span>
				</footer>
			</div>
		</div>
	</div>

 <script type="text/javascript" src="assets/jquery/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap/bootstrap.js"></script>
</body>
</html>
