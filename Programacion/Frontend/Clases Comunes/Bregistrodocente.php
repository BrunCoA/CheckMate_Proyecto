<?php
include '../Alumno/conexion.php';
$imagen='';
@$ci = $_POST ['ceduladocenteregistro'];
@$nombre = $_POST ['nombredocenteregistro'];
@$apellido = $_POST ['apellidodocenteregistro'];
@$asignatura = $_POST ['asignaturadocenteregistro'];
@$pass = $_POST ['passdocenteregistro'];
@$verpass = $_POST ['passverdocenteregistro'];
if(isset($_FILES["foto"])){
$foto = $_FILES["foto"];
$nomfoto = $foto["name"];
$tipo = $foto["type"];
$ruta_prov = $foto["tmp_name"];
$ruta = "../Alumno/images/";
if($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
    echo '<script>
    alert("El archivo ingresado no es una imagen");
    window.history.go(-1);
    </script>';
    exit;
}else{
    $directorio = $ruta.$nomfoto;
    move_uploaded_file($ruta_prov, $directorio);
    $imagen="../Alumno/images/".$nomfoto;
}
}
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
if (strlen($pass) == null){
    echo '<script>
    alert("Ingrese una contraseña");
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
$insertar = "INSERT INTO usuario(ci, nom, ape, pass, foto) VALUES ('$ci','$nombre','$apellido','$pass','$imagen')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'error al registrarse';
}else{
    header("location: ../Alumno/Fpaginaprincipal.php");
}
mysqli_close($conexion);