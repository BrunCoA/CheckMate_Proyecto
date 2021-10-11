<?php

class Header{
    function admin(){
        echo '
        <header id="header">
            <a id="logo" href="administrador.php">
                <span class="appname">ChatMate</span>
                <span class="user">Administrador</span>
            </a>
            <nav>
                <ul>
                    <li><a href="#"><img src="css/solicitud.svg" alt="Solicitud"></a></li>
                    <li><a href="#"><img src="css/perfil.svg" alt="Perfil"></a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </header>';
    }
    function alumno(){
        echo '<header>
        <div class="nav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About</a></li>
                <li>
                    <div class="chatmate"><button onclick="location.href=' . "'alumno.php'" . '">ChatMate</button></div>
                </li>
                <li>
                    <div class="fotodeperfil">
                        <button id="open"></button>
                    </div>
                </li>
            </ul>
        </div>
    </header>';
    }
    function docente(){
        echo '';
    }
}
?>