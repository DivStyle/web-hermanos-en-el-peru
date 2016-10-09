<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

class MySQL
{
	function Conectar()
	{
		try {
			$cnx = mysql_connect('localhost', 'root', '');
			if ($cnx) {
				return $cnx;
			} else {
				throw new Exception("No me conecte");
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}	
	}
	function Desconectar($cnx)
	{
		try {
			mysql_close($cnx);	
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function SeleccionarDB($cnx)
	{
		try {
			$db = mysql_select_db('HermanosEnElPeru',$cnx);	
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}
	function Query($query)
	{
		try {
			$result = mysql_query($query);
			$result2 = array();
			while ($row =  mysql_fetch_array($result, MYSQL_ASSOC))
				$result2[]=$row;
				return $result2;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function Insert($query)
	{
		$result = mysql_query($query);
		return $result;
	}

}



 ?>
