<!DOCTYPE html>
<html lang="es">	 	 
 	<head>
   <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Registro de Docente</TITLE>
    </head>	 
 	<BODY>	 
         <h2>Registro de Docente</h2>
 	 	<form action="ValidarRegistroDocente.php" method="post" enctype="multipart/form-data"> 
              <input type="text" placeholder="Cedula" name="ceduladocenteregistro" >
              <input type="text" placeholder="Nombre Nombre" name="nombredocenteregistro" >
              <input type="text" placeholder="Apellido Apellido" name="apellidodocenteregistro" >
              <input type="text" placeholder="Grupo" name="grupodocenteregistro" >
              <input type="text" placeholder="Materia" name="materiadocenteregistro" >
              <input type="password" placeholder="Contraseña" name="passdocenteregistro" >
              <input type="password" placeholder="Verificar Contraseña" name="passverdocenteregistro" >
              <input type="submit" value="Registrarse" style="margin: 3%;">
 	</BODY>	 
</HTML>	 	 