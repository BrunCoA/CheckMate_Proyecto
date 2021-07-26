<?php
//Variables provisorias
$cidocente="00000000";
    $ceduladocenteregistro=$_POST['ceduladocenteregistro'];
    $passdocenteregistro=$_POST['passdocenteregistro']; 
    $passverdocenteregistro=$_POST['passverdocenteregistro'];
if ($passdocenteregistro==$passverdocenteregistro and $ceduladocenteregistro==$cidocente) {
    header ("location:AppDocente.php");
}else{
    header ("location:InterfaceRegistroDocente.php");
}

