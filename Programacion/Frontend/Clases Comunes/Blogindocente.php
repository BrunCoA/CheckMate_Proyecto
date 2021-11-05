<?php
include '../Alumno/conexion.php';
$ceduladocentelogin=$_POST['ceduladocentelogin'];
$passdocentelogin=$_POST['passdocentelogin'];
$cons = "SELECT * FROM usuario WHERE ci = '".$ceduladocentelogin."' and pass = '".$passdocentelogin."' ";
$query =  mysqli_query($conexion, $cons);
if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['ci'] = $row['nom'];
			header('Location: Fappdocente.php');
		}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>