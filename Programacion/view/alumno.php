<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <TITLE>Aplicacion de Alumno</TITLE>
    <link rel="stylesheet" href="css/appalumno.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <ul>
                <li class="agenda" id="openagenda"><a href="Falumnoveagenda.php">Ver agenda de profesores</a></li>
                <li class="consulta"><a href="Fhacerconsulta.php">Consultas</a>
                    <div class="hacerconsulta">
                        <ul>
                            <li><a href="Fhacerconsulta.php">Hacer Consulta</a></li>
                        </ul>
                    </div>
                </li>
                <li class="salachat"><a href="">Sala de chat</a></li>
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