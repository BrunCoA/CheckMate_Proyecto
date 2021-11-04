<?php

include_once('../model/listados.php');

if(isset($_POST["ci"]))
{
	$result =  Listados_Model::Listar_Por_Cedula($_POST["ci"]);
	foreach($result as $row)
	{
		$output["ci"] = $row["ci"];
        $output["p_nom"] = $row["p_nom"];
        $output["s_nom"] = $row["s_nom"];
        $output["p_ape"] = $row["p_ape"];
        $output["s_ape"] = $row["s_ape"];
		$output["pass"] = $row['pass'];
	}
	echo json_encode($output);
}
?>