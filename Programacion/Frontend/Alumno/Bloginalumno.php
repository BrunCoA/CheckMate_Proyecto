<?php
include 'conexion.php';
$cedulaalumnologin=$_POST['cedulaalumnologin'];
$passalumnologin=$_POST['passalumnologin'];
$sql = "SELECT * FROM `usuario` where ci = '".$cedulaalumnologin."' and pass = '".$passalumnologin."' ";
		$query =  mysqli_query($conexion, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['ci'] = $row['nom'];
			header('Location: Fappalumno.php');
		}else{
    echo '<script>
    alert("Los datos ingresados no coinciden");
    window.history.go(-1);
    </script>';
}
?>