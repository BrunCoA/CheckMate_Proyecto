<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">	 	 
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Aplicacion de alumno</TITLE>
</head>	 
 	<body><?php
    ?>	 
         <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
         <h2> <a href="Fperfilalumno.php">Ver perfil</h2><br></a>
         <h2> <a href="Blogout.php">Cerrar sesión</h2></a>
    </body>	 
</HTML>	 	 