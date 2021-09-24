<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="estilos.css">
    <TITLE>ChatMate</TITLE>
</head>

<body style="overflow-y: visible;">

    <div class="container-all">
        <div class="ctn-text">
            <div>
                <h2 class="title-description">ChatMate</h2>
            </div>
            <div>
                <p class="text-description">Inicia sesion e interactua con tus alumnos, profesores y compañeros de clase</p>
            </div>


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
        <div class="modal-container" id="modal_container">
            <div class="modal">
                <div class="pregunta"><label for="">¿Eres alumno o docente?</label></div>
                <div class="botonesuwu">
                    <div><button id="openalumno">Soy un alumno</button><button id="openregdocente" style="margin-bottom: 3%; margin-left: 3%; width: 45%; color: #F66B05; height: 40px; border: 0px; background-image: url(html-color-codes-color-tutorials-hero.jpg);">Soy un docente</button></div>
                </div>
                <div class="ctn-reg" id="ctn-reg">
                    <div class="formregistro" id=formreg>
                        <div class="ctn-reg-alumno" id="ctn-reg-alumno">
                            <form class="formalumno" action="Bregistroalumno.php" method="post" enctype="multipart/form-data">
                                <div class="regalumnotitulo" id="regalumnotitulo">
                                    <h2>Registro de alumno</h2>
                                </div>
                                <div class="ci"><input type="text" placeholder="Cedula" name="cedulaalumnoregistro"></div>
                                <div class="nom" style="display: flex;"><input type="text" style="width: 40%;" placeholder="Primer nombre" name="nombrealumnoregistro"><input type="text" style="width: 40%;" placeholder="segundo nombre" name="nombrealumnoregistro"></div>
                                <div class="ape" style="display: flex;"><input type="text" placeholder="Primer apellido" name="apellidoalumnoregistro" style="width: 40%;"><input type="text" placeholder="Segundo apellido" name="apellidoalumnoregistro" style="width: 40%;"></div>
                                <div class="nicknamealumno"><input type="text" placeholder="Nombre de usuario" name="nicknameregistroalumno"></div>
                                <div class="grupo"><input type="text" placeholder="Grupo" name="grupoalumnoregistro"></div>
                                <div class="pass"><input type="password" placeholder="Contraseña" name="passalumnoregistro"></div>
                                <div class="verpass"><input type="password" placeholder="Verificar Contraseña" name="passveralumnoregistro"></div>
                                <div class="selectalumno">
                                    <h2>Seleccione una foto de perfil</h2>
                                </div>
                                <div class="selectfoto"><input type="file" name="foto"></div>
                                <div class="submitalumno"><input type="submit" id="submitalumno" value="Registrarse" name="registrar"></div>
                            </form>
                        </div>
                        <div class="ctn-reg-docente">
                            <form class="formdocente" action="Bregistrodocente.php" method="post" enctype="multipart/form-data">
                                <div class="regdocentetitulo">
                                    <h2>Registro de docente</h2>
                                </div>
                                <div class="cidocente"><input type="text" placeholder="Cedula" name="ceduladocenteregistro"></div>
                                <div class="nom" style="display: flex;"><input type="text" style="width: 40%;" placeholder="Primer nombre" name="nombrealumnoregistro"><input type="text" style="width: 40%;" placeholder="segundo nombre" name="nombrealumnoregistro"></div>
                                <div class="ape" style="display: flex;"><input type="text" placeholder="Primer apellido" name="apellidoalumnoregistro" style="width: 40%;"><input type="text" placeholder="Segundo apellido" name="apellidoalumnoregistro" style="width: 40%;"></div>
                                <div class="nicknamedocente"><input type="text" placeholder="Nombre de usuario" name="nicknameregistrodocente"></div>
                                <div class="grupodocente"><input type="text" placeholder="Grupo" name="grupodocenteregistro"></div>
                                <div class="passdocente"><input type="password" placeholder="Contraseña" name="passdocenteregistro"></div>
                                <div class="verpassdocente"><input type="password" placeholder="Verificar Contraseña" name="passverdocenteregistro"></div>
                                <div class="selectdocente">
                                    <h2>Seleccione una foto de perfil</h2>
                                </div>
                                <div class="selectfotodocente"><input type="file" name="foto"></div>
                                <div class="submitdocente"><input type="submit" value="Registrarse" name="registrar"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="close">
                    <button id="close">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</HTML>