<?php
include 'conexion.php';
session_start();
?>
<html>
<html lang="es">	 	 
 	<head>
   <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Perfil</TITLE>
    </head>	 
 	<BODY>	 
         <h2>Perfil de alumno</h2>
		 <?php
		 $consulta = "SELECT * FROM usuario WHERE ci=$_SESSION[usuario]";
		 $resultado = mysqli_query($conexion,$consulta);
		 while ($listar=mysqli_fetch_array($resultado)){
		 ?>
		 <tr>
			 <td>Foto de perfil<img src="<?php echo $listar['foto']?>"width="80px" height=auto></td>
			 <td><?php echo $listar['ci']?></td>
			 <td><?php echo $listar['nom']?></td>
			 <td><?php echo $listar['ape']?></td>
			 <td><?php echo $listar['apodo']?></td>
		 </tr>
		 <?php
		 }
		 ?>
		 	<h2> <a href="ModificarPerfilAlumno.php">Modificar perfil</h2><br></a>
		<h2> <a href="AppAlumno.php">Salir</h2></a>
	
 	</BODY>	 
</HTML>	 	 