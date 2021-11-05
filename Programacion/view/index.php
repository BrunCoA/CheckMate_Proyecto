<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />
    <title>ChatMate ingreso</title>
</head>

<body>
    <form class="form" action="../model/login.php" method="POST" enctype="multipart/form-data">
        <div class="titulos">
            <h1>ChatMate</h1>
            <h2 class="title">Iniciar Sesión</h2>
        </div>
        <div class="input">
            <label for="ci">CI de usuario</label>
            <input type="text" id="ci" name="cilogin">
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="passlogin">
        </div>
        <div class="ingresar">
            <input type="submit" value="Ingresar">
            <input type="button" value="Registrarse">
        </div>
    </form>

    <div class="register">

        <div class="qm-registro">
            <h2>Registrarse como:</h2>
            <input type="button" value="Alumno">
            <input type="button" value="Docente">
        </div>


        <form class="formAlumno" action="../controller/registro.php" method="post" enctype="multipart/form-data">
            <div class="reg_alumnoTitulo" id="reg_alumnoTitulo">
                <h2>Registro de alumno</h2>
            </div>
            <div class="input w-inp">
                <input type="text" placeholder="Primer nombre" name="p_nomAlumno">
                <input type="text" placeholder="segundo nombre" name="s_nomAlumno">
                <input type="text" placeholder="Primer apellido" name="p_apeAlumno">
                <input type="text" placeholder="Segundo apellido" name="s_apeAlumno">
                <input type="text" placeholder="Nombre de usuario" name="apodoAlumno">
                <div class="pares">
                    <input type="text" placeholder="Cedula" name="ciAlumno">
                    <input type="password" placeholder="Contraseña" name="passAlumno">
                </div>
                <div class="pares">
                    <input type="text" placeholder="Grupo" name="grupoAlumno">
                    <input type="password" placeholder="Verificar" name="verif_passAlumno">
                </div>
            </div>
            <div class="selectFoto">
                <label class="fotito">
                    <input type="file" name="fotoAlumno" />
                    Seleccione una foto
                </label>
            </div>
            <input type="submit" id="submitAlumno" value="Registrarse" name="registrar">
        </form>


        <form class="formDocente" action="../controller/registro.php" method="post" enctype="multipart/form-data">
            <div class="reg_docenteTitulo" id="reg_docenteTitulo">
                <h2>Registro de Docente</h2>
            </div>
            <div class="input w-inp">
                <input type="text" placeholder="Primer nombre" name="p_nomDocente">
                <input type="text" placeholder="segundo nombre" name="s_nomDocente">
                <input type="text" placeholder="Primer apellido" name="p_apeDocente">
                <input type="text" placeholder="Segundo apellido" name="s_apeDocente">
            </div>
            <div class="multiSelect">
                <div class="selectBox" onclick="showCheckboxes()">
                    <select>
                        <option>Seleccione sus asignaturas</option>
                    </select>
                    <div class="overSelect"></div>
                </div>
                <div id="checkboxes" class="hide">
                    <label for="c1"><input type="checkbox" id="c1" /> Matematicas</label>
                    <label for="c2"><input type="checkbox" id="c2" /> Economia</label>
                    <label for="c3"><input type="checkbox" id="c3" /> Formacion Empresarial</label>
                    <label for="c4"><input type="checkbox" id="c4" /> sdfsdf</label>
                    <label for="c5"><input type="checkbox" id="c5" /> adasdas</label>
                    <label for="c6"><input type="checkbox" id="c6" /> asdsd</label>
                    <label for="c7"><input type="checkbox" id="c7" /> dsad</label>
                    <label for="c8"><input type="checkbox" id="c8" /> adasd</label>
                    <label for="c9"><input type="checkbox" id="c9" /> dasdas</label>
                    <label for="c10"><input type="checkbox" id="c10" /> dasdasdad</label>
                </div>
            </div>
            <div class="input w-inp">
                <div class="pares">
                    <input type="text" placeholder="Cedula" name="ciDocente">
                    <input type="password" placeholder="Contraseña" name="passDocente">
                </div>
                <div class="pares">
                    <input type="text" placeholder="Grupo" name="grupoDocente">
                    <input type="password" placeholder="Verificar" name="verif_passDocente">
                </div>
            </div>
            <div class="selectFoto">
                <label class="fotito">
                    <input type="file" name="fotoDocente" />
                    Seleccione una foto
                </label>
            </div>
            <input type="submit" id="submitDocente" value="Registrarse" name="registrar">
        </form>
        <div class="cerrar">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</body>
<script src="app.js"></script>

</html>