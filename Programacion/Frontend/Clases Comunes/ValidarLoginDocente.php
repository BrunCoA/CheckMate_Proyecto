<?php
$ceduladocentelogin=$_POST['ceduladocentelogin'];
$passdocentelogin=$_POST['passdocentelogin'];
if($ceduladocenteregistro=$ceduladocentelogin and $passdocentelogin=$passdocenteregistro){
    header ("AppDocente.php");
}else{
    echo "Fallo de autenticación compruebe que los datos ingresados son correctos";
}
?>