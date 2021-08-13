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
         <h2> <a href="PerfilAlumno.php">Ver perfil</h2><br></a>
         <h2><a href="ConsultaAlumnoDocente.php">Realizar Consulta Asincronica</h2><br></a>
         <h2> <a href="VerConsultasAlumno.php">Ver consultas contestadas</h2></a>
         <h2> <a href="VerAgendaDocente.php">Ver Agendas</h2></a>
         <h2> <a href="logout.php">Salir</h2></a>
    </body>	 
</HTML>	 	 