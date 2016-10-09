<nav class="navbar navbar-inverse navbar-fixed-top" style="position: float;">
	<div class="container-fluid">

		<div class="navbar-header">
	  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
	    		<span class="sr-only">Navegacion</span>
	    		<span class="icon-bar"></span>
	    		<span class="icon-bar"></span>
	    		<span class="icon-bar"></span>
	  		</button>
	  		<a class="navbar-brand visible-xs visible-lg" href="#"><img src="imagenes/logo_solo.png" width="30px" height="30px" alt="Iglesia de los Hermanos"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
			<ul class="nav navbar-nav">
			  	<li id="index"><a href="index.php">Inicio</a></li>
			  	<li id="nosotros"><a href="nosotros.php">Acerca de nosotros</a></li>
			  	<li id="ministerios"><a href="ministerios.php">Ministerios</a></li>
			  	<li id="sociales"><a href="sociales.php">Servicios Sociales</a></li>
			  	<li id="actividades"><a href="actividades.php">Actividades de la Iglesia</a></li>
			  	<li id="contactanos"><a href="contactanos.php">Contáctanos</a></li>
			  	<li id="conexion"><a href="conexiones.php">Conexiones</a></li>
			  	<li id="fotos"><a href="#">Fotos</a></li>
			  	<li id="videos"><a href="videos.php">Videos</a></li>
			</ul>	
		</div>
	</div>
</nav>
<div style="margin-bottom: 51px;"></div>
<script type="text/javascript">
	$(document).ready(function () {
		$('#index').on('click', function () {
			$('#index').addClass('active');
		})
		$('#nosotros').on('click', function () {
			$('#nosotros').addClass('active');
		})
		$('#ministerios').on('click', function () {
			$('#ministerios').addClass('active');
		})
		$('#sociales').on('click', function () {
			$('#sociales').addClass('active');
		})
		$('#actividades').on('click', function () {
			$('#actividades').addClass('active');
		})
		$('#contactanos').on('click', function () {
			$('#contactanos').addClass('active');
		})
		$('#conexion').on('click', function () {
			$('#conexion').addClass('active');
		})
		$('#fotos').on('click', function () {
			$('#fotos').addClass('active');
		})
		$('#videos').on('click', function () {
			$('#videos').addClass('active');
		})
	})
</script>