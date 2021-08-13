<!DOCTYPE html>
<html lang="es">	 	 
 	<head>
   <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Ver Agendas</TITLE>
    </head>	 
 	<BODY>	 
         <h2>Agendas</h2>
         <?php      
         if(isset($_POST['agregaragenda'])){
          $horario=$_POST['horario'];
          $asignatura=$_POST['asignatura'];
          }
         ?>
         <h2><?php echo "Horarios: $horario";?></h2><br>
         <h2><?php echo "Asignatura: $asignatura";?></h2><br>
         <h2> <a href="V_App_docente.php">Volver a la Aplicacion Docente</h2><br></a>
         <h2> <a href="V_App_alumno.php">Volver a la Aplicacion Alumno</h2><br></a>
 	</BODY>	 
</HTML>	 	 