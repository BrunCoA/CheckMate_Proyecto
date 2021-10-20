<?php
include 'conexion.php';
session_start();
$cilogin=$_POST['cilogin'];
$passlogin=$_POST['passlogin'];
$cons = "SELECT * FROM usuario WHERE pass = '$passlogin' and ci = '$cilogin'";
$resultado = $db->query($cons);
$verificar = $resultado->fetch();
if($verificar > 0){
    $_SESSION['usuario'] = $cilogin;
    header("location:../view/administrador.php");
}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>