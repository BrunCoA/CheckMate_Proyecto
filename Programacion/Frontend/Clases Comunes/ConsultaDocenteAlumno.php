<link rel="stylesheet" href="estilos.css">
<?php
if ( isset( $_POST['enviarconsulta'] ) ) {
    $temaconsultarecibidadocente=$_POST['temaconsulta'];
    $nombrealumnoconsultarecibidadocente=$_POST['nombrealumno'];
    $asignaturaconsultarecibidadocente=$_POST['asignatura']; 
    $preguntarecibidaconsultadocente=$_POST['pregunta'];
}
?>
<h2><?php echo "Nombre alumno: $nombrealumnoconsultarecibidadocente";?></h2><br>
<h2><?php echo "Tema: $temaconsultarecibidadocente";?></h2><br>
<h2><?php echo "Asignatura: $asignaturaconsultarecibidadocente";?></h2><br>
<h2><?php echo "Pregunta: $preguntarecibidaconsultadocente";?></h2><br>
<form action="VerConsultasAlumno.php" method="post">
  <br>
<div class="form-group">
    <label for="tituloconsulta">Tema</label>
    <input type="text" class="form-control" name="temaconsulta" placeholder="Metodo de abacos">
  </div>
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
    <h2><label for="respuesta">Escriba su respuesta</label></h2>
    <input type="text" class="form-control" name="respuestadocente">
  </div>
  <div class="form-group">
    <input type="submit" value="Enviar Respuesta" name="enviarrespuesta" style="margin: 3%;"> 
  </div>
</form>
<h2><a href="AppDocente.php">Volver a la aplicacion</h2><br></a>