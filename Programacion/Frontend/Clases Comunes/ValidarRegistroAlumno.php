<?php
//Variables provisorias
$cialumno="11111111";
if ( isset( $_POST['registrar'] ) ) {
    $cedulaalumnoregistro=$_POST['cedulaalumnoregistro'];
    $passalumnoregistro=$_POST['passalumnoregistro']; 
    $passveralumnoregistro=$_POST['passveralumnoregistro'];
}
if ($passalumnoregistro==$passveralumnoregistro and $cedulaalumnoregistro==$cialumno) {
    header ("location:AppAlumno.php");
}else{
    header ("location:InterfaceRegistroAlumno.php");
}
