<?php
$cedulaalumnologin=$_POST['cedulaalumnologin'];
$passalumnologin=$_POST['passalumnologin'];
if($cedulaalumnoregistro=$cedulaalumnologin and $passalumnologin=$passalumnoregistro){
    header ("AppAlumno.php");
}else{
    echo "Fallo de autenticación compruebe que los datos ingresados son correctos";
}
?>