<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
include "componentes/funciones.php";
ValidarSession();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Intranet de la Iglesia de los Hermano en el Perú</title>
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/styles.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<body>
<?php include 'componentes/menu.php'; ?>

<div class="jumbotron">
	<div class="container">
		<h1>Bienvenido <i class="fa fa-user">&nbsp;<?php echo $_SESSION['user'];?></i></h1>
		<!-- <p>Desde esta interface podras administrar las distintas secciones.</p> -->

	</div>
</div>
<div class="container">
	<div class="bs-callout bs-callout-danger" id="callout-btndropdown-dependency">
    <h4 id="plugin-dependency">Indicaciones:<a class="anchorjs-link" href="#plugin-dependency"><span class="anchorjs-icon"></span></a></h4>
    <p>
		<ul>
  			<li>En la parte superior encontraras el menu con las distintas opciones para la edición de contenido.</li>
  			<li>Para cerrar sesión puedes utilizar el boton <i class="fa fa-power-off"></i> ubicado en el menu</li>
		</ul>
    </p>
  </div>
</div>
<br></br>
<div class="container">
<?php include "../componentes/footer.php"; ?>
</div>
</body>

</html>