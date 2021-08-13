<link rel="stylesheet" href="estilos.css">
<h2>Modificar perfil</h2> <img src="">"
<form action="PerfilAlumno.php" method="post">
    <label for="cedula">Cedula</label> 
    <input type="text" placeholder="Cedula" name="cedulaalumnoperfil" >
    <label for="nombre">Nombre</label> 
    <input type="text" placeholder="Nombre Nombre" name="nombrealumnoperfil" >
    <label for="apellido">Apellido</label> 
    <input type="text" placeholder="Apellido Apellido" name="apellidoalumnoperfil" >
    <label for="grupo">Grupo</label> 
    <input type="text" placeholder="Grupo" name="grupoalumnoperfil" >
    <label for="password">Contraseña</label> 
    <input type="password" placeholder="Contraseña" name="passalumnoperfil" >
    <label for="nickname">Nombre de Usuario</label> 
    <input type="text" placeholder="franco21" name="nickname">
    <label for="cambiarfoto">Cambiar foto de perfil</label><br>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotoperfilusuario">
    <input type="submit" value="Aplicar cambios" name="aplicarcambiosalumno" style="margin: 3%;">
</form>
<h2><a href="PerfilAlumno.php">Volver al perfil</h2><br></a>