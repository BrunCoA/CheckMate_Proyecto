<?php

include_once('usuarios.php');

if(isset($_POST["ci"]))
{
	$result  = Usuarios_Model::Eliminar_Persona_Static($_POST["ci"]);
	
	if(!empty($result))
	{
		echo $result;
	}
}



?>