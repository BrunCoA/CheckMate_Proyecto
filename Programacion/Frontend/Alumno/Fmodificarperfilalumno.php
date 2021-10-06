<?php
include 'conexion.php';
session_start();
?>
<html>
<html lang="es">

<head>
    <link rel="stylesheet" href="styles3.css">
    <TITLE>Modificacion de perfil</TITLE>
</head>

<BODY>
    <div class="all">
        <div class="ctn-form">
            <div class="titulo">
                <h2>Modificar perfil</h2>
            </div>
            <div class="form">
                <form action="Fperfilalumno.php" method="post" enctype="multipart/form-data">
                    <div class="cilabel"><label for="cedula">Cedula</label></div>
                    <div class="ciinput"><input type="text" placeholder="Cedula" name="cedulaalumnoperfil"></div>
                    <div class="nomlabel"><label for="nombre">Nombre</label> </div>
                    <div class="nominput"><input type="text" placeholder="Nombre Nombre" name="nombrealumnoperfil"></div>
                    <div class="grupolabel"><label for="grupo">Grupo</label> </div>
                    <div class="grupoinput"><input type="text" placeholder="Grupo" name="grupoalumnoperfil"></div>
                    <div class="passlabel"><label for="password">Contraseña</label> </div>
                    <div class="passinput"><input type="password" placeholder="Contraseña" name="passalumnoperfil"></div>
                    <div class="file"><input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotoperfilusuario"></div>
                    <div class="submit"><input type="submit" value="Aplicar cambios" name="aplicarcambiosalumno"></div>
            </div>
            <div class="cancelar">
                <button onclick="location.href='Fappalumno.php'">Cancelar</button>
            </div>
        </div>

    </div>
</BODY>

</HTML>