<!DOCTYPE html>
<html lang="es">	 	 
 	<head>
   <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Registro de Docente</TITLE>
    </head>	 
 	<BODY>	 
         <h2>Registro de Docente</h2>
 	 	<form action="Bregistrodocente.php" method="post" enctype="multipart/form-data"> 
              <input type="text" placeholder="Cedula" name="ceduladocenteregistro" >
              <input type="text" placeholder="Nombre Nombre" name="nombredocenteregistro" >
              <input type="text" placeholder="Apellido Apellido" name="apellidodocenteregistro" >
              <input type="text" placeholder="Grupo" name="grupodocenteregistro" >
              <input type="password" placeholder="Contraseña" name="passdocenteregistro" >
              <input type="password" placeholder="Verificar Contraseña" name="passverdocenteregistro" >
              <h2>Seleccione una foto de perfil</h2>
              <input type="file" name="foto" >
              <input type="submit" value="Registrarse" style="margin: 3%;" name="registrar">
 	</BODY>	 
</HTML>	 	 