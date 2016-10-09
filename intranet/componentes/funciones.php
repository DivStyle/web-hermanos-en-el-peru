<?php
function ValidarSession()
{
	session_start();
	if ($_SESSION['estado'] != 'logged') {
		header('location: index.php');
		return;
	} 
}

?>