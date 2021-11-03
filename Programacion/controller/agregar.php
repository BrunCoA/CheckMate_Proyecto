<?php
include_once('../model/usuarios.php');
if(isset($_POST["h_operacion"]))
{
	if($_POST["h_operacion"] == "Agregar")
	{
		$id_persona_ingresada  = Usuarios_Model::Agregar_Persona_Static(
			$_POST["txt_cedula"],
			$_POST["txt_primer_nombre"],
			$_POST["txt_segundo_nombre"],
			$_POST["txt_primer_apellido"],
			$_POST["txt_segundo_apellido"],
			$_POST["txt_pass"]
		);	

		if(!empty($id_persona_ingresada))
			echo $id_persona_ingresada;
	}

	if($_POST["h_operacion"] == "Editar")
	{
		$persona_modificada = Usuarios_Model::Modificar_Persona_Static(
			$_POST["txt_cedula"],
			$_POST["txt_primer_nombre"],
			$_POST["txt_segundo_nombre"],
			$_POST["txt_primer_apellido"],
			$_POST["txt_segundo_apellido"],
			$_POST["txt_pass"],
			$_POST["h_persona_id"]
		);

		if(!empty($persona_modificada))
			echo $persona_modificada;
		
	}
}

?>