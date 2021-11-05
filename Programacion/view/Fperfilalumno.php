<?php
session_start();
if (!isset($_SESSION['ci'])) {
	header("Location: Fpaginaprincipal.php");
}
include "conexion.php";

$ci = $_SESSION['ci'];
$sql = "SELECT * FROM `usuario` where ci = '".$ci."'";
$query =  mysqli_query($conexion, $sql);
?>
<html>
<html lang="es">

<head>
	<link rel="stylesheet" href="styles2.css">
	<TITLE>Perfil</TITLE>
</head>

<BODY>
	<div class="all">
		<div class="listadatos">
			<div class="titulo">
				<h2>Perfil de alumno</h2>
			</div>
			<?php
			if(mysqli_num_rows($query)>0) {
		while ($row = $query->fetch_array()) {
	    $cedula = $row['ci'];
	    $nombre = $row['nom'];
	    $ape = $row['ape'];
	    ?>
        <div>
        	<div>
        		<p>
        			<b>CI: </b> <?php $cedula ?><br>
        		    <b>Nombre: </b> <?php $nombre ?><br>
        		    <b>Apellido: </b> <?php $ape ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
?>  
			<div class="botones">
				<div><button onclick="location.href='Fmodificarperfilalumno.php'">Modificar perfil</button></div>
				<div style="padding: 25px;"><button onclick="location.href='Fappalumno.php'">Volver</button></div>
			</div>
		</div>

	</div>
	</div>
</BODY>

</HTML>