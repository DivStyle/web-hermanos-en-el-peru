<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Intranet de la Iglesia de los Hermano en el Perú</title>
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/styles.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<body style="background-color: #333">

	<div class="container">
		<div class="jumbotron div-login">
		<form class="form-horizontal" action="validar_login.php" method="post">
			  <div class="form-group">
			    <div class="col-sm-10">
					<div class="input-group">
			    	<div class="input-group-addon"><i class="fa fa-user"></i></div>
			    	<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
			    	</div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10">
					<div class="input-group">
			    	<div class="input-group-addon"><i class="fa fa-unlock-alt"></i></div>
			    	<input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
			    	</div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-success">Ingresar</button>
			    </div>
			  </div>
		</form>
		</div>
	</div>
</body>
</html>
