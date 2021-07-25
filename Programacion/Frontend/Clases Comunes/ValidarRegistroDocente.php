<?php
//Variables provisorias
$cidocente="00000000";
$error;
include('Variables.php');
if ( isset( $_POST['submit'] ) ) {
    $ceduladocenteregistro=$_POST['ceduladocenteregistro'];
    $passdocenteregistro=$_POST['passdocenteregistro']; 
    $passverdocenteregistro=$_POST['passverdocenteregistro'];
}
if ($passdocenteregistro==$passverdocenteregistro and $ceduladocenteregistro==$cidocente) {
    $error="OK";
    header ("location:InterfaceLogin.php?error-$error&$ceduladocenteregistro");
    echo "Accedió";
}else{
    $error="Incorrecto";
    header ("location:InterfaceRegistroDocente.php?error-$error");
}
