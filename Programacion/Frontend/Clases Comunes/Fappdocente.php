<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">	 	 
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Aplicacion de docente</TITLE>
</head>	 
 	<body><?php
    ?>	 
         <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
         <h2> <a href="Fperfildocente.php">Ver perfil</h2><br></a>
         <h2> <a href="../Alumno/Blogout.php">Cerrar sesión</h2></a>
    </body>	 
</HTML>	 	 