<?php

include_once('../model/listados.php');

try {
	$result = Listados_Model::Listar_Alumno();
	$datos = array();
	foreach ($result as $row) {
		$sub_array = array();
		$sub_array[] = $row["ci"];
		$sub_array[] = $row["p_nom"];
		$sub_array[] = $row["s_nom"];
		$sub_array[] = $row["p_ape"];
		$sub_array[] = $row["s_ape"];
		$sub_array[] = $row["pass"];
		$sub_array[] = $row["nom_gr"];
		$sub_array[] = '<button type="button" name="update" id="' . $row["ci"] . '" class="btn btn-warning btn-xs update">Modificar</button>';
		$sub_array[] = '<button type="button" name="delete" id="' . $row["ci"] . '" class="btn btn-danger btn-xs delete">Eliminar</button>';
		$datos[] = $sub_array;
	}
	$output = array( 
		"recordsFiltered"	=>	count($result), 
		"data"			=>	$datos
	);
	echo json_encode($output);
} catch (Exception $e) {
	echo $e->getMessage();
}
