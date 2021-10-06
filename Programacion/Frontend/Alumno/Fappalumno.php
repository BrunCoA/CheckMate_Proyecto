<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
</style>
    <link rel="stylesheet" href="styles.css">
    <TITLE>Aplicacion de Alumno</TITLE>
</head>

<body>
    <header>
        <div class="nav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About</a></li>
                <li>
                    <div class="chatmate"><button onclick="location.href='Fappalumno.php'">ChatMate</button></div>
                </li>
                <li>
                    <div class="fotodeperfil">
                        <button id="open"></button>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="ctn-all">
        <div class="ctn-modal" id="modal">
            <div class="botones">
                <div class="fotodeperfil2"><img src="imagenperfil.png"></div>
                <div class="verperfil"><button onclick="location.href='Fperfilalumno.php'">Ver perfil</button></div>
                <div class="cerrarsesion"><button onclick="location.href='Blogout.php'">Cerrar sesion</button></div>
                <div class="cancelar"><button id="close">Cancelar</button></div>
            </div>
        </div>
    </div>
    <script src="app2.js"></script>
</body>

</HTML>