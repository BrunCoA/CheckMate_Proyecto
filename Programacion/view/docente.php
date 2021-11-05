
<!DOCTYPE html>
<html lang="es">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    </style>
    <link rel="stylesheet" href="css/estilos2.css">
    <TITLE>Aplicacion de Docente</TITLE>
</head>

<body>
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
                <li class="salachat"><a href="chatdocente.php">Sala de chat</a></li>
                <li>
                    <div class="chatmate"><button onclick="location.href='docente.php'">ChatMate</button></div>
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
                <div class="verPerfil"><button onclick="location.href='perfil.php'">Ver perfil</button></div>
                <div class="cerrarSesion"><button onclick="location.href='../Alumno/logout.php'">Cerrar sesion</button></div>
                <div class="cancelar"><button id="close">Cancelar</button></div>
            </div>
        </div>
    </div>

    <script src="../Alumno/app2.js"></script>
</body>

</HTML>