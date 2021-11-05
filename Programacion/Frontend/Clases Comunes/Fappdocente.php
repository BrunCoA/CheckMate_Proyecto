<?php
include "conexiondocente.php";
session_start();
$sesion=$_SESSION['ci'];
if($sesion == null || $sesion =''){
    header("Location: Fpaginaprincipal.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    </style>
    <link rel="stylesheet" href="../Alumno/estilos2.css">
    <TITLE>Aplicacion de Docente</TITLE>
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
                <li class="salachat"><a href="chatdocente.php">Sala de chat</a></li>
                <li>
                    <div class="chatmate"><button onclick="location.href='Fappdocente.php'">ChatMate</button></div>
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
                <div class="cerrarsesion"><button onclick="location.href='../Alumno/Blogout.php'">Cerrar sesion</button></div>
                <div class="cancelar"><button id="close">Cancelar</button></div>
            </div>
        </div>
    </div>

    <script src="../Alumno/app2.js"></script>
</body>

</HTML>