<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
include 'mysql.php';
include "componentes/funciones.php";
ValidarSession();
$mysql = new MySQL();
$cnx = $mysql->Conectar();
$db = $mysql->SeleccionarDB($cnx);
if ($_FILES['imagen']['error'] > 0) {
    echo 'Error: ' . $_FILES['imagen']['error'] . '<br/>';
} else {
	$nombre = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$tamano = ($_FILES['imagen']['size'] / 1024);
	$nombre_tmp = $_FILES['imagen']['tmp_name'];
	$ruta = $_SERVER["DOCUMENT_ROOT"].'bootstrap/imagenes/noticias/';
	$ruta2 = 'imagenes/noticias/';
	try {
		if (move_uploaded_file($nombre_tmp, $ruta.$nombre)) {
        	$titulo = $_REQUEST['titulo'];
			$subtitulo = $_REQUEST['sub-titulo'];
			$contenido = $_REQUEST['contenido_noticia'];
			$imagen = $ruta2.$nombre;
			$fecha = date('Y-m-d H:i:s');
		
			$result = $mysql->Insert("insert into noticias values ('','$titulo','$subtitulo','$contenido','$fecha','$imagen')");
			if ($result==true) {
				$mensaje = 'La noticia se subio con exito';
				header("location: editar_noticias.php?mensaje=$mensaje");
			} else {
				$mensaje = 'La noticia no se pudo subir ocurrio un error'; 
				header("location: editar_noticias.php?mensaje_error=$mensaje");
			}
    	} else {
        $mensaje_error_imagen = 'No se pudo subir la imagen al servidor'; 
		header("location: editar_noticias.php?mensaje=$mensaje_error_imagen");
    	}
		
	} catch (Exception $e) {
		$mensaje = $e->getMessage();
		header("location: editar_noticias.php?error_desconocido=$mensaje");
	}
}
 ?>