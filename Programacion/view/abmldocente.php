<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Docentes</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.1/kt-2.6.2/r-2.2.9/sl-1.3.3/datatables.min.css"/>
 	<link rel="stylesheet" type="text/css" href="css/abml.css"/>
</head>
<body>
	<div class="container box">
		<h1 align="center">Lista de Docentes</h1>
	    <div>
			<div align="right">
				<button type="button" id="btn_agregar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abmlModal">
					Agregar Docente
				</button>
			</div>
			<br />
			<table id="user_data" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Primer Nombre</th>
						<th>Segundo Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Contraseña</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</body>
</html>
<!-- Modal -->
<div class="modal fade" id="abmlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form method="post" id="frm_abml">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar Docente</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<label>Cédula</label>
					<input type="number" name="txt_cedula" id="txt_cedula" class="form-control" />
					<br />
					<label>Primer Nombre</label>
					<input type="text" name="txt_primer_nombre" id="txt_primer_nombre" class="form-control" />
					<br />
					<label>Segundo Nombre</label>
					<input type="text" name="txt_segundo_nombre" id="txt_segundo_nombre" class="form-control" />
					<br />
					
					<label>Primer Apellido</label>
					<input type="text" name="txt_primer_apellido" id="txt_primer_apellido" class="form-control" />
					<br />
					
					<label>Segundo Apellido</label>
					<input type="text" name="txt_segundo_apellido" id="txt_segundo_apellido" class="form-control" />
					<br />

					<label>Contraseña</label>
					<input type="text" name="txt_pass" id="txt_pass" class="form-control" />
					<br />
				</div>
				<div class="modal-footer">
					<input type="hidden" name="h_cedula" id="h_cedula" />
					<input type="hidden" name="h_operacion" id="h_operacion" />
					<input type="submit" name="accion" id="accion" class="btn btn-success" value="Agregar" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.1/kt-2.6.2/r-2.2.9/sl-1.3.3/datatables.min.js"></script>

<script type="text/javascript" src="ajaxDocente.js" language="javascript"></script>