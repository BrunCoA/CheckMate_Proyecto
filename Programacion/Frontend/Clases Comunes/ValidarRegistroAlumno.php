<?php
//Variables provisorias
$cialumno="11111111";
$error;
include('Variables.php');
if ( isset( $_POST['submit'] ) ) {
    $cedulaalumnoregistro=$_POST['cedulaalumnoregistro'];
    $passalumnoregistro=$_POST['passalumnoregistro']; 
    $passveralumnoregistro=$_POST['passveralumnoregistro'];
}
if ($passalumnoregistro==$passveralumnoregistro and $cedulaalumnoregistro==$cialumno) {
    $error="OK";
    header ("location:InterfaceLoginAlumno.php?error-$error&$cedulaalumnoregistro");
    echo "Accedió";
}else{
    $error="Incorrecto";
    header ("location:InterfaceRegistroAlumno.php?error-$error");
}
