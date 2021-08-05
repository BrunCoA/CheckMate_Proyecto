<?php
include 'conexion.php';
$cedulaalumnologin=$_POST['cedulaalumnologin'];
$passalumnologin=$_POST['passalumnologin'];
$cons = "SELECT * FROM usuario WHERE pass = '$passalumnologin' and ci = '$cedulaalumnologin'";
$resultado = mysqli_query($conexion, $cons);
$verificar = mysqli_num_rows($resultado);
if($verificar > 0){
    header("location:AppAlumno.php");
}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>