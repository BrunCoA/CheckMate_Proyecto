<!DOCTYPE html>
<html lang="es">	 	 
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Agenda</TITLE>
</head>	 
 	<body>	 
         <h2>Agenda</h2>
    <form action="V_VerAgenda_docente.php" method="post">
         <div class="form-group">
      <br>
    <label for="asignatura">¿De que asignatura es esta agenda?</label>
    <select class="form-control" name="asignatura">
      <option>Matematica</option>
      <option>Literatura</option>
      <option>Fisica</option>
      <option>Ingles</option>
      <option>Filosofia</option>
    </select>
  </div>
  <br> <label for="horarioagenda">Escriba el horario de la agenda de la siguiente forma: dia1-00:00-00:00,dia2-00:00-00:00</label>
  <div class="form-group">
    <input class="form-control" name="horario" rows="5"></input>
    <input type="submit" value="Agregar Agenda" name="agregaragenda" style="margin: 3%;"> 
  </div>
</form>
<h2><a href="V_App_docente.php">Cancelar</h2><br></a>
    </body>	 
</HTML>	 	 