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
                <li><a href="abmlOrientacion.php" target="abml">Orientaciones</a></li>
                <li><a href="abmlAsignatura.php" target="abml">Asignaturas</a></li>
                <li><a href="abmlGrupo.php" target="abml">Grupos</a></li>
                <li><a href="abmlDocente.php" target="abml">Docentes</a></li>
                <li><a href="abmlAlumno.php" target="abml">Alumnos</a></li>
            </ul>
        </div>
            <iframe name="abml" frameborder="0"></iframe>
    </div>
</body>
</html>