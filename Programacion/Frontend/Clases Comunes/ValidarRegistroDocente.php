<?php
include 'conexion.php';
@$ci = $_POST ['ceduladocenteregistro'];
@$nombre = $_POST ['nombredocenteregistro'];
@$apellido = $_POST ['apellidodocenteregistro'];
@$materia = $_POST ['materiadocenteregistro'];
@$grupo = $_POST ['grupodocenteregistro'];
@$pass = $_POST ['passdocenteregistro'];
@$verpass = $_POST ['passverdocenteregistro'];
@$foto = $_FILES['foto'];
$insertar = "INSERT INTO usuario(ci, nombre, apellido, pass, foto) VALUES ('$ci','$nombre','$apellido','$pass','$foto')";
$insertar2 = "INSERT INTO usuario_docente(ci, materia) VALUES ('$ci','$materia')";


if (strlen($ci) != 8){
    echo '<script>
    alert("Cedula no valida");
    window.history.go(-1);
    </script>';
    exit;
}
if ($pass != $verpass){
    echo '<script>
    alert("La contraseñas no coinciden");
    window.history.go(-1);
    </script>';
    exit;
}
$verificar_ci = mysqli_query($conexion, "SELECT * FROM usuario WHERE ci = '$ci'");
if (mysqli_num_rows($verificar_ci) > 0){
    echo '<script>
    alert("La cedula ingresada ya está registrada");
    window.history.go(-1);
    </script>';
    exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'error al registrarse';
}else{
    header("location: InterfaceLoginDocente.php");
}
$resultado2 = mysqli_query($conexion, $insertar2);
if (!$resultado2){
    echo 'error al registrarse';
}else{
    header("location: InterfaceLoginDocente.php");
}
mysqli_close($conexion);