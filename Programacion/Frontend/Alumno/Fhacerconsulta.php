<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    </style>
    <link rel="stylesheet" href="estilos2.css">
    <title>Aplicacion de Alumno</title>
</head>

<body>
    <div class="contenedor-consulta">
        <div class="ctn-consulta">
            <form action="Bhacerconsulta.php" method="POST">
                <div class="tituloconsulta">
                    <label for="">Titulo consulta</label>
                </div>
                <div class="tituloconsulta">
                    <input type="text" name="cedulaalumnologin">
                </div>
                <div class="asignatura">
                    <label for="">Seleccione una asignatura</label>
                </div>
                <input type="radio" id="matematica" name="asignatura" value="asignatura">
                <label for="html">Matematica</label><br>
                <input type="radio" id="biologia" name="asignatura" value="asignatura">
                <label for="css">Biologia</label><br>
                <input type="radio" id="geografia" name="asignatura" value="asignatura">
                <label for="javascript">Geografia</label>
                <div class="consulta">
                    <label for="">Escriba su consulta</label>
                </div>
                <div class="consulta">
                    <input type="text" name="consulta">
                </div>
                <div class="enviarconsulta">
                    <input type="submit" value="Enviar consulta">
                </div>
            </form>
            <div class="gotoappalumno">
                <button onclick="location.href='Fappalumno.php'">Cancelar</button>
            </div>

        </div>
    </div>
</body>

</html>