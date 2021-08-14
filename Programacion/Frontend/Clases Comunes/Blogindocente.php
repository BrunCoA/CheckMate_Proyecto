<?php
include 'conexion.php';
session_start();
$ceduladocentelogin=$_POST['ceduladocentelogin'];
$passdocentelogin=$_POST['passdocentelogin'];
$cons = "SELECT * FROM usuario WHERE pass = '$passdocentelogin' and ci = '$ceduladocentelogin'";
$resultado = mysqli_query($conexion, $cons);
$verificar = mysqli_num_rows($resultado);
if($verificar > 0){
    $_SESSION['usuario'] = $ceduladocentelogin;
    header("location:Fappdocente.php");
}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>