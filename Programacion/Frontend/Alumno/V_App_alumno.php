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
         <h2> <a href="V_Perfil_alumno.php">Ver perfil</h2><br></a>
         <h2><a href="V_Consulta_alumnodocente.php">Realizar Consulta Asincronica</h2><br></a>
         <h2> <a href="V_VerConsultas_alumno.php">Ver consultas contestadas</h2></a>
         <h2> <a href="V_VerAgenda_docente.php">Ver Agendas</h2></a>
         <h2> <a href="L_Logout.php">Salir</h2></a>
    </body>	 
</HTML>	 	 