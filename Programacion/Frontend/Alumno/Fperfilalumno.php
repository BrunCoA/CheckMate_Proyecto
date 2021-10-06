<?php
include 'conexion.php';
session_start();
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
			<tr>
				<div class="datos">
					<td><img src="imagenperfil.png"></td>

					<div class="ci">
						<td>51800449</td>
					</div>
					<div class="nombre">
						<td>Franco Joaquin</td>
					</div>
					<div class="apellido">
						<td>Machado Rosales</td>
					</div>
			</tr>
			<div class="botones">
			<div><button onclick="location.href='Fmodificarperfilalumno.php'">Modificar perfil</button></div><div style="padding: 25px;"><button onclick="location.href='Fappalumno.php'">Volver</button></div>
		</div>
		</div>
		
	</div>
	</div>
</BODY>

</HTML>