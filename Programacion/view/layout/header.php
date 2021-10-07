<?php

class Header{
    function admin(){
        echo '<div class="container-all"><header><div class="nav"><div class="nav1"><a href=""><img src="css/ChatMate.svg" alt="ChatMate"></a></div><div class="nav2"><a href="">
                <img src="css/perfil.svg" alt="Perfil"></a><a href=""><img src="css/solicitud.svg" alt="Solicitud Alumno"></a></div></div></header></div>';
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