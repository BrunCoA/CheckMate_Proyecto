<html>
<html lang="es">	 	 
 	<head>
   <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Modificar perfil alumno</TITLE>
    </head>	 
 	<BODY>	 
         <h2>Perfil de alumno</h2>
         <?php      
         if(isset($_POST['aplicarcambiosalumno'])){
          $nickname=$_POST['nickname'];
          $cedulaalumnoperfil=$_POST['cedulaalumnoperfil'];
          $nombrealumnoperfil=$_POST['nombrealumnoperfil'];
          $apellidoalumnoperfil=$_POST['apellidoalumnoperfil'];
          $grupoalumnoperfil=$_POST['grupoalumnoperfil'];
          $fotoperfilusuario=$_POST['fotoperfilusuario'];
          }
         ?>
         <h2><?php echo "Cedula: $cedulaalumnoperfil";?></h2><br>
         <h2><?php echo "Nombre: $nombrealumnoperfil";?></h2><br>
         <h2><?php echo "Apellido: $apellidoalumnoperfil";?></h2><br>
         <h2><?php echo "Grupo: $grupoalumnoperfil";?></h2><br>
         <h2><?php echo "Nickname: $nickname";?><h2><br>
         <h2>"Foto de perfil"</h2> <img src=$fotoperfilusuario>
         <h2><a href="ModificarPerfilAlumno.php">Modificar Perfil</h2><br></a>
         <h2> <a href="AppAlumno.php">Volver a la Aplicacion</h2><br></a>
 	</BODY>	 
</HTML>	 	 