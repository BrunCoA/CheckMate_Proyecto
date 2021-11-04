<?php

include_once('../model/listados.php');

try {
	$result = Listados_Model::Listar_Grupo();
	$datos = array();
	foreach ($result as $row) {
		$sub_array = array();
		$sub_array[] = $row["id_gr"];
		$sub_array[] = $row["nom_gr"];
		$sub_array[] = '<button type="button" name="update" id="' . $row["id_gr"] . '" class="btn btn-warning btn-xs update">Modificar</button>';
		$sub_array[] = '<button type="button" name="delete" id="' . $row["id_gr"] . '" class="btn btn-danger btn-xs delete">Eliminar</button>';
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
