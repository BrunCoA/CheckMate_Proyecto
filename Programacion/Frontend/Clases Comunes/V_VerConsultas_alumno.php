<!DOCTYPE html>
<html lang="es">	 	 
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Consultas contestadas</TITLE>
</head>	 
 	<body>	 
         <h2>Consultas contestadas</h2>
        <h2> <a href="V_App_alumno.php">Volver a la Aplicacion</h2><br></a>
        <?php 
        if ( isset( $_POST['enviarrespuesta'] ) ) {
    $temaconsulta=$_POST['temaconsulta'];
    $asignatura=$_POST['asignatura']; 
    $respuestadocente=$_POST['respuestadocente'];
    }
    ?>
    <h2><?php echo "Tema: $temaconsulta";?></h2><br>
    <h2><?php echo "Asignatura: $asignatura";?></h2><br>
    <h2><?php echo "Respuesta: $respuestadocente";?></h2><br>
    </body>	 
</HTML>	 	 