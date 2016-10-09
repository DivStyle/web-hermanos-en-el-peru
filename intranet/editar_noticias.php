<?php 
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(-1);
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
<?php include 'componentes/menu.php'; ?>
<br>
<div class="container">
	<div class="bs-callout bs-callout-danger" id="callout-btndropdown-dependency">
    <h4 id="plugin-dependency">Tener en cuenta:<a class="anchorjs-link" href="#plugin-dependency"><span class="anchorjs-icon"></span></a></h4>
    <p>
		<ul>
  			<li>Es requisito para publicar una noticia que todos los campos contengan información</li>
  			<li>La imagen debe ser de 1280 x 803, es lo recomendable, pero, el sistema acepta cualquier tamaño.</li>
		</ul>
    </p>
  </div>
</div>
<div class="container">
<?php 
if ($_REQUEST['mensaje']!='') {
	echo "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_REQUEST['mensaje']."</div>";
}
?>
<form  id="subir_noticias_form" action="subir_noticias.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control"  name="titulo" id="titulo" placeholder="Ingresa un titulo" pattern="^[a-zA-Z0-9$#/()=+*%!¿?:.,;áéíóúñÑ\-_]+$" required>
  </div>
  <div class="form-group">
    <label for="sub-titulo">Subtitulo</label>
    <input type="text" class="form-control" name="sub-titulo" id="sub-titulo" placeholder="Ingresa un sub-titulo" pattern="^[a-zA-Z0-9$#/()=+*%!¿?:.,;áéíóúñÑ\-_]+$" required>
  </div>
  <div class="form-group">
    <label for="contenido_noticia">Contenido</label>
    <textarea class="form-control" name="contenido_noticia" id="contenido_noticia" placeholder="Redacta el contenido" pattern="^[a-zA-Z0-9$#/()=+*%!¿?:.,;áéíóúñÑ\-_\s\n]+$" required></textarea>
  </div>
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" id="imagen" name="imagen" required>
    <p class="help-block">Las imagenes deben ser de (1280 × 803) para una vista optima</p>
  </div>
  <input id="subir" type="button" class="btn btn-success" value="Subir Noticia">
  <button>hola</button>
  <!-- <input id="limpiar" type="button" class="btn btn-info" value="Limpiar"></input> -->
</form>
</div>
<br></br>
<div class="container">
<?php include "../componentes/footer.php"; ?>
</div>
<script type="text/javascript">
	// $(document).ready(function() {
	// 	$('#subir').on('click',function() {
	// 		var titulo = $('#titulo').val();
	// 		var subtitulo = $('#sub-titulo').val();
	// 		var contenido = $('#contenido_noticia').val();
	// 		var imagen = $('#imagen').val();
	// 		if (titulo == '' || subtitulo == '' || contenido == '' || imagen == '') {
	// 			alert('debes de completar todos los campos');
	// 		} else {
	// 			$('#subir_noticias_form').submit()
	// 		};
	// 	})
	// })

</script>
</body>
</html>