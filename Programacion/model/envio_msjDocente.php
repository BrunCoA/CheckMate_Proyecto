<?php

include "conexion.php";
session_start();
if($_POST)
{
	$con=new Conexion;
	$name=$_SESSION['ci'];
    $msj=$_POST['msj'];
    
	$sql="INSERT INTO `chat`(`name`, `mensaje`) VALUES ('".$name."', '".$msj."')";

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