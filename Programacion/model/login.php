<?php
include 'conexion.php';
session_start();
$db=new Conexion;
$cilogin=$_POST['cilogin'];
$passlogin=$_POST['passlogin'];

/* ALUMNO */
$cons1 = "SELECT alumno.ci FROM usuario, alumno WHERE pass='$passlogin' and usuario.ci='$cilogin' and usuario.ci=alumno.ci;";
$resultado1 = $db->query($cons1);
$verificar1 = $resultado1->fetch();
/* DOCENTE */
$cons2 = "SELECT docente.ci FROM usuario, docente WHERE pass='$passlogin' and usuario.ci='$cilogin' and usuario.ci=docente.ci;";
$resultado2 = $db->query($cons2);
$verificar2 = $resultado2->fetch();

/* ADMINISTRADOR */
$cons3 = "SELECT administrador.ci FROM usuario, administrador WHERE pass='$passlogin' and usuario.ci='$cilogin' and usuario.ci=administrador.ci;";
$resultado3 = $db->query($cons3);
$verificar3 = $resultado3->fetch();

/* LOGIN */
if($verificar1 > 0){
    $_SESSION['usuario'] = $cilogin;
    header("location:../view/alumno.php");
}elseif ($verificar2 > 0) {
    $_SESSION['usuario'] = $cilogin;
    header("location:../view/docente.php");
    
}elseif ($verificar3 > 0) {
    $_SESSION['usuario'] = $cilogin;
    header("location:../view/administrador.php");
}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>