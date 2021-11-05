<?php
include_once('../model/registro.php');

if ($ci = $_POST['ciAlumno']) {
    $reg=new Registro;
    $reg->Registro_Alumno();
}
?>
