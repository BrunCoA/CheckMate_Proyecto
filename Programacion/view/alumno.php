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
    <div class="container-all">
        <header>
            <div class="nav">
                <ul>
                    <li class="agenda" id="openAgenda"><a href="verAgenda.php">Ver agenda de profesores</a></li>
                    <li class="consulta"><a href="haceConsulta.php">Consultas</a>
                        <div class="hacerConsulta">
                            <ul>
                                <li><a href="haceConsulta.php">Hacer Consulta</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="salaChat"><a href="chat.php">Sala de chat</a></li>
                    <li>
                        <div class="chatmate"><button onclick="location.href='alumno.php'">ChatMate</button></div>
                    </li>
                    <li>
                        <div class="fotoPerfil">
                            <button id="open"></button>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <div class="ctn-all">
            <div class="ctn-modal" id="modal">
                <div class="botones">
                    <div class="fotoPerfil2"><img src="css/perfil.svg"></div>
                    <div class="verPerfil"><button onclick="location.href='perfil.php'">Ver perfil</button></div>
                    <div class="cerrarSesion"><button onclick="location.href='../controller/logout.php'">Cerrar sesion</button></div>
                    <div class="cancelar"><button id="close">Cancelar</button></div>
                </div>
            </div>
        </div>
    </div>

    <script src="app2.js"></script>
</body>

</HTML>