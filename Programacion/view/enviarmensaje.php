<?php
include_once('../model/conexion.php');
session_start();
if($_POST)
{	
	$con=new Conexion;
	$name=$_SESSION['ci'];
    $msj=$_POST['msj'];
    
	$sql="INSERT INTO mensaje(`name`, `msj`) VALUES ('".$name."', '".$msj."')";

	$query = $con->query($sql);
	if($query)
	{
		header('Location: chat.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>