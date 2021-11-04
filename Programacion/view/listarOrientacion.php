<?php

include_once('../model/listados.php');

try {
	$result = Listados_Model::Listar_Orientacion();
	$datos = array();
	foreach ($result as $row) {
		$sub_array = array();
		$sub_array[] = $row["id_or"];
		$sub_array[] = $row["nom_or"];
		$sub_array[] = '<button type="button" name="update" id="' . $row["id_or"] . '" class="btn btn-warning btn-xs update">Modificar</button>';
		$sub_array[] = '<button type="button" name="delete" id="' . $row["id_or"] . '" class="btn btn-danger btn-xs delete">Eliminar</button>';
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
