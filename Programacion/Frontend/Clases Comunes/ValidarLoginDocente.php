<?php
include 'conexion.php';
$ceduladocentelogin=$_POST['ceduladocentelogin'];
$passdocentelogin=$_POST['passdocentelogin'];
$cons = "SELECT * FROM usuario WHERE pass = '$passdocentelogin' and ci = '$ceduladocentelogin'";
$resultado = mysqli_query($conexion, $cons);
$verificar = mysqli_num_rows($resultado);
if($verificar > 0){
    header("location:AppDocente.php");
}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>