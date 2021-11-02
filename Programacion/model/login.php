<?php
include 'conexion.php';
session_start();
$db=new Conexion;
$cilogin=$_POST['cilogin'];
$passlogin=$_POST['passlogin'];
$cons = "SELECT administrador.ci FROM usuario, administrador WHERE pass='$passlogin' and usuario.ci='$cilogin' and usuario.ci=administrador.ci;";
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