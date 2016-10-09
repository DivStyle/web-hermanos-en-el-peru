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
  <h1>Videos</h1>
  <hr class="featurette-divider">
	<div class="media visible-md visible-lg">
	<div class="media-left">
  		<!-- visible solo para web completa -->
  		<div>
  			<iframe id="videos_frame_lg" class="embed-responsive-item videos_lg" width="500" height="315" src="https://www.youtube.com/embed/wScd6tCT7VE" frameborder="0" allowfullscreen></iframe>
  		</div>
	</div>
  	<div class="media-body">
    	<h4 class="media-heading">Lista de videos:</h4>
	  	<div>
	  		<dl>
	  			<dt><h4><a id="video1"><i class="fa fa-film">&nbsp;Brethren church in Lima</i></a></h4></dt>
		  		<dt><h4><a id="video2"><i class="fa fa-film">&nbsp;Brethren church in Lima - Social Work</i></a></h4></dt>
		  		<dt><h4><a id="video3"><i class="fa fa-film">&nbsp;Bautizo 2012</i></a></h4></dt>
	  		</dl>
	  	</div>
	  	</div>
	</div>

	<!-- visible para tablet -->
	<div class=" visible-xs visible-sm">
	  	<div class="embed-responsive embed-responsive-16by9">
	  		<iframe id="videos_frame_sm" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/hxauk9LgqDA" frameborder="0" allowfullscreen></iframe>
	  	</div>
	  	<br>
	  	<h4 class="media-heading">Lista de videos:</h4>
		<div>
		  	<dl>
		  		<dt><h4><a id="video_sm1"><i class="fa fa-film">&nbsp;Brethren church in Lima</i></a></h4></dt>
			  	<dt><h4><a id="video_sm2"><i class="fa fa-film">&nbsp;Brethren church in Lima - Social Work</i></a></h4></dt>
			  	<dt><h4><a id="video_sm3"><i class="fa fa-film">&nbsp;Bautizo 2012</i></a></h4></dt>
		  	</dl>
		</div>
	</div>
	<br>
	<?php include 'componentes/footer.php'; ?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		// para videos en web completa
		$('#video1').on('click',function() {
			$('#videos_frame_lg').attr('src','https://www.youtube.com/embed/hxauk9LgqDA')
		})
		$('#video2').on('click',function() {
			$('#videos_frame_lg').attr('src','https://www.youtube.com/embed/yQ9Nw9qAltA')
		})
		$('#video3').on('click',function() {
			$('#videos_frame_lg').attr('src','https://www.youtube.com/embed/wScd6tCT7VE')
		})
		// para videos que se ven en moviles
		$('#video_sm1').on('click',function() {
			$('#videos_frame_sm').attr('src','https://www.youtube.com/embed/hxauk9LgqDA')
		})
		$('#video_sm2').on('click',function() {
			$('#videos_frame_sm').attr('src','https://www.youtube.com/embed/yQ9Nw9qAltA')
		})
		$('#video_sm3').on('click',function() {
			$('#videos_frame_sm').attr('src','https://www.youtube.com/embed/wScd6tCT7VE')
		})
	})

</script>
</body>

</html>