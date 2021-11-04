<?php

include_once('listados.php');

if(isset($_POST["ci"]))
{
	$result  = Listados_Model::Eliminar_Usuario_Static($_POST["ci"]);
	
	if(!empty($result))
	{
		echo $result;
	}
}



?>