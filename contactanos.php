<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Sitio Oficial de la Iglesia de los Hermano en el Perú</title>
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/styles.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<body>
<?php include "componentes/menu.php" ?>
<br>
<div class="container">
  <h1>Contactanos!</h1>
  <hr class="featurette-divider">
    <form class="form-horizontal">
      <div id="form-group-email" class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          <span id="email_status" class="" aria-hidden="true"></span>
        </div>
      </div>
      <div id="form-group-nombre" class="form-group">
        <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
          <span id="nombre_status" class="" aria-hidden="true"></span>
        </div>
      </div>
      <div id="form-group-telefono" class="form-group">
        <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputTelefono" placeholder="Telefono">
          <span id="telefono_status" class="" aria-hidden="true"></span>
        </div>
      </div>
      <div id="form-group-comentario" class="form-group">
        <label for="inputComentario" class="col-sm-2 control-label">Comentario</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="inputComentario" rows="3" placeholder="..."></textarea>
          <span id="comentario_status" class="" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button id="enviar" type="submit" class="btn btn-default">Enviar</button>
        </div>
      </div>
  </form>
  <br>
<?php include 'componentes/footer.php'; ?>
</div>
</body>
<script src="js/contactanos.js"></script>
</html>