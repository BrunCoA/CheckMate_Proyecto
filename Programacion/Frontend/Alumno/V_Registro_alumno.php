<!DOCTYPE html>
<html lang="es">	 	 
 	<head>
   <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Registro de Alumno</TITLE>
    </head>	 
 	<BODY>	 
         <h2>Registro de Alumno</h2>
 	 	<form action="L_Registro_alumno.php" method="post" enctype="multipart/form-data"> 
              <input type="text" placeholder="Cedula" name="cedulaalumnoregistro" >
              <input type="text" placeholder="Nombre Nombre" name="nombrealumnoregistro" >
              <input type="text" placeholder="Apellido Apellido" name="apellidoalumnoregistro" >
              <input type="text" placeholder="Grupo" name="grupoalumnoregistro" >
              <input type="password" placeholder="Contraseña" name="passalumnoregistro" >
              <input type="password" placeholder="Verificar Contraseña" name="passveralumnoregistro" >
              <h2>Seleccione una foto de perfil</h2>
              <input type="file" name="foto" >
              <input type="submit" value="Registrarse" style="margin: 3%;" name="registrar">
 	</BODY>	 
</HTML>	 	 