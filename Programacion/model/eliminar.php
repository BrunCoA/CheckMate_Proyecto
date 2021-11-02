<?php

include_once('usuarios.php');

if(isset($_POST["persona_id"]))
{
	$result  = Usuarios_Model::Eliminar_Persona_Static($_POST["persona_id"]);
	
	if(!empty($result))
	{
		echo $result;
	}
}



?>