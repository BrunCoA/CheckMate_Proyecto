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
            $hdr=new Header;
            $hdr->admin()
        ?>
        <div class="listas">
            <ul>
                <li><a href="abmladmin.php" target="abml1">Orientaciones</a></li>
                <li><a href="abmladmin.php" target="abml2">Asignaturas</a></li>
                <li><a href="abmladmin.php" target="abml3">Grupos</a></li>
                <li><a href="abmladmin.php" target="abml4">Docentes</a></li>
                <li><a href="abmladmin.php" target="abml5">Alumnos</a></li>
            </ul>
        </div>
            <iframe src="" name="abml1" frameborder="0"></iframe>
            <iframe src="" name="abml2" frameborder="0"></iframe>
            <iframe src="" name="abml3" frameborder="0"></iframe>
            <iframe src="" name="abml4" frameborder="0"></iframe>
            <iframe src="" name="abml5" frameborder="0"></iframe>
    </div>
</body>
</html>