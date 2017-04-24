
<?php
/*
Autor:	    Bett0
Para:		    http://www.sisoft.com.bo
Objetivo:	  Detalle de noticia
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
<html>
<head>
<title>Bett0 - SQL Ijection - Detalle de Noticias</title>
</head>
<html lang="es">
<meta charset="utf-8" />
<head>
	<title>Bett0 - SQL Ijection Basico - Detalle</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.css">
<body bgcolor="#C4CEC6">

	<?php
	if(isset($_GET['id']))
		$sql="select * from noticias where id_news=".$_GET['id'];
		$exe=mysql_query($sql, con());
		$f=mysql_fetch_array($exe);
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-14">
				<a href="index.php"><img src="assets/images/banner.jpg" class="img-rounded" width="100%"></img></a>
			</div>
		</div>

		<div class="row media">
			<div class="col-md-9">
				<div class="media-body">
					<h3 class="media-heading">Titulo: <?php echo $f[1]; ?></h3>
					<p><?php echo $f[3]; ?></p>
					<div class="span4">
						<p>	<h4>Fecha: <?php echo $f[4]; ?> <h4/>
								<h4>Area: <?php echo $f[5]; ?> <h4/>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<img width='150' src='assets/images/<?php echo $f[7]; ?>' class='img-rounded media-object' alt='<?php echo $f[1]; ?>'>
			</div>
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
