<?php
include 'conexion.php';
include 'Fpaginaprincipal.php';
session_start();
$cedulaalumnologin=$_POST['cedulausuario'];
$passalumnologin=$_POST['password'];
$cons = "SELECT * FROM usuario WHERE pass = '$passalumnologin' and ci = '$cedulaalumnologin'";
$resultado = mysqli_query($conexion, $cons);
$verificar = mysqli_num_rows($resultado);
if($verificar > 0){
    $_SESSION['usuario'] = $cedulaalumnologin;
    header("location:Fappalumno.php");
}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>