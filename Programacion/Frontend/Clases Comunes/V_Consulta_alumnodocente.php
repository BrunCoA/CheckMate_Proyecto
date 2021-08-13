<link rel="stylesheet" href="estilos.css">
<form action="V_Consulta_docentealumno.php" method="post">
<div class="form-group">
    <label for="nombrealumno">Nombre</label>
    <input type="text" class="form-control" name="nombrealumno" placeholder="Franco">
  </div>
  <div class="form-group">
    <label for="tituloconsulta">Tema</label>
    <input type="text" class="form-control" name="temaconsulta" placeholder="Metodo de abacos">
  </div>
  <div class="form-group">
      <br>
    <label for="asignatura">Asignatura</label>
    <select class="form-control" name="asignatura">
      <option>Matematica</option>
      <option>Literatura</option>
      <option>Fisica</option>
      <option>Ingles</option>
      <option>Filosofia</option>
    </select>
  </div>
  <div class="form-group">
  <br> <label for="textoconsulta">Escriba su consulta</label>
    <input type="text" class="form-control" name="pregunta">
  </div>
  <div class="form-group">
    <input type="submit" value="Enviar Consulta" name="enviarconsulta" style="margin: 3%;"> 
  </div>
</form>
<h2><a href="V_App_alumno.php">Cancelar consulta</h2><br></a>