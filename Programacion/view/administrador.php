<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal del administrador</title>
    <link rel="stylesheet" href="css/appadmin.css">
</head>
<body>
    <div class="container-all">
        <?php
            include "layout/header.php";
            $hdr= new Header();
            $hdr->admin()
        ?>
        <div class="ABML-container">
            <ul>
                <li><a href="">Orientaciones</a></li>
                <li><a href="">Asignaturas</a></li>
                <li><a href="">Grupos</a></li>
                <li><a href="">Docentes</a></li>
                <li><a href="">Alumnos</a></li>
            </ul>
        </div>
    </div>
</body>
</html>