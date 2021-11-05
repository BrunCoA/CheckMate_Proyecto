<?php

include "conexion.php";
session_start();
if($_POST)
{
	$name=$_SESSION['ci'];
    $msj=$_POST['msj'];
    
	$sql="INSERT INTO `chat`(`name`, `mensaje`) VALUES ('".$name."', '".$msj."')";

	$query = mysqli_query($conexion,$sql);
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