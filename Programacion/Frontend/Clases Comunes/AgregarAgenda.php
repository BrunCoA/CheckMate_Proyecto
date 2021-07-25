<!DOCTYPE html>
<html lang="es">	 	 
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
 	 	<TITLE>Agenda</TITLE>
</head>	 
 	<body>	 
         <h2>Agenda</h2>
         <div class="form-group">
      <br>
    <label for="asignatura">¿De que asignatura es esta agenda?</label>
    <select class="form-control" name="tituloconsulta">
      <option>Matematica</option>
      <option>Literatura</option>
      <option>Fisica</option>
      <option>Ingles</option>
      <option>Filosofia</option>
    </select>
  </div>
  <br> <label for="textoconsulta">Escriba el horario de la agenda de la siguiente forma: dia1-00:00-00:00,dia2-00:00-00:00</label>
  <div class="form-group">
    <textarea class="form-control" name="horario" rows="5"></textarea>
    <input type="submit" value="Agregar Agenda" style="margin: 3%;"> 
  </div>
</form>
<h2><a href="AppDocente.php">Cancelar</h2><br></a>
    </body>	 
</HTML>	 	 