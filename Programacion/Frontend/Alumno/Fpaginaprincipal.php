<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="styles.css">
    <TITLE>ChatMate</TITLE>
</head>

<body>

    <div class="container-all">
        <div class="modal-container" id="modal_container">
            <div class="modal">
                <label for="">¿Eres alumno o docente?</label>
                <div class="botonesuwu">
                    <div><button id="openregalumno" style="margin-bottom: 3%; width: 45%; color: #F66B05; height: 40px; border: 0px; background-image: url(html-color-codes-color-tutorials-hero.jpg); font-weight: 300;
       cursor:pointer;">Soy un alumno</button><button id="openregdocente" style="margin-bottom: 3%; margin-left: 3%; width: 45%; color: #F66B05; height: 40px; border: 0px; background-image: url(html-color-codes-color-tutorials-hero.jpg);">Soy un docente</button></div>
                </div>
                <div class="ctn-reg-alumno" style="background-color: white; width:50%;" id="ctn-reg-alumno">
                <h2 style="font-size: 10px;">Registro de Alumno</h2>
                    <div class="formregistroalumno" display:flex; id=formregalumno>
                        <form action="Bregistroalumno.php" method="post" enctype="multipart/form-data">
                            <input type="text" placeholder="Cedula" name="cedulaalumnoregistro">
                            <input type="text" placeholder="Nombre Nombre" name="nombrealumnoregistro">
                            <input type="text" placeholder="Apellido Apellido" name="apellidoalumnoregistro">
                            <input type="text" placeholder="Grupo" name="grupoalumnoregistro">
                            <input type="password" placeholder="Contraseña" name="passalumnoregistro">
                            <input type="password" style="margin-bottom: 0px; margin-top: 0px;" placeholder="Verificar Contraseña" name="passveralumnoregistro">
                            <h2 style="font-size: 10px;">Seleccione una foto de perfil</h2>
                            <input type="file" name="foto">
                            <input type="submit" value="Registrarse" style="margin: 3%; width:45%" name="registrar">
                        </form>
                        <h2 style="font-size: 10px;">Registro de Docente</h2>
                            <form action="Bregistrodocente.php" method="post" enctype="multipart/form-data">
                                <input type="text" placeholder="Cedula" name="ceduladocenteregistro">
                                <input type="text" placeholder="Nombre Nombre" name="nombredocenteregistro">
                                <input type="text" placeholder="Apellido Apellido" name="apellidodocenteregistro">
                                <input type="text" placeholder="Grupo" name="grupodocenteregistro">
                                <input type="password" placeholder="Contraseña" name="passdocenteregistro">
                                <input type="password" placeholder="Verificar Contraseña" name="passverdocenteregistro">
                                <h2 style="font-size: 10px;">Seleccione una foto de perfil</h2>
                                <input type="file" name="foto">
                                <input type="submit" value="Registrarse" style="margin: 3%; width:45%" name="registrar">
                            </form>
                    </div>
                </div>
                <button id="close" style="margin-bottom: 3%;">Cancelar</button>
            </div>
        </div>
        <div class="ctn-text">
            <h2 class="title-description">ChatMate</h2>
            <p class="text-description">Inicia sesion e interactua con tus alumnos, profesores y compañeros de clase</p>
        </div>
        <div class="ctn-form">
            <h2 class="title">Iniciar Sesión</h2>
            <form action="">
                <div class="nombredeusuario">
                    <label for="">Nombre de usuario</label>
                </div>
                <div class="nombreusuario">
                    <input type="text">
                </div>
                <div class="contraseña">
                    <label for="">Contraseña</label>
                </div>
                <div class="password">
                    <input type="password" id="pass">
                </div>
                <div class="ingresar">
                    <input type="submit" value="Ingresar">
                </div>
            </form>
            <div class="footer">
                <span class="text-footer">¿Aún no tienes una cuenta? <button id="open">Registrarse</button></span>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</HTML>