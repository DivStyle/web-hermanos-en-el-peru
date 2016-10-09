<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
include 'mysql.php';
$mysql = new MySQL();
$cnx = $mysql->Conectar();
$db = $mysql->SeleccionarDB($cnx);
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];
$result = $mysql->Query("select * from usuarios where usuario='$usuario' and clave='$pass'");
$mysql->Desconectar($cnx);
if (count($result) === 1) {
	session_start();
	$_SESSION["user"] = $result[0]['usuario'];
    $_SESSION["estado"] = 'logged';
	header('location: intranet.php');
} else {
		echo 'datos erroneos';
		die();
	}
?>
