<?php
session_start();
include "../model/conexion.php";
$con=new Conexion;
$sql = "SELECT * FROM sala_chat, mensaje";
$query = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/estiloschat.css">
    <title>ChatMate</title>
</head>

<body>
    <script>
        $(document).ready(function() {
            var trigger = $('.container .display-chat '),
                container = $('#content');
            trigger.on('click', function() {
                var $this = $(this),
                    target = $this.data('target');
                container.load(target + '.php');


                return false;
            });
        });
    </script>


    <div class="container">
        <center>
            <h2 style="color: white;">BIENVENIDO/A <span style="color: red;"><?php echo $_SESSION['usuario']; ?> !</span></h2>
        </center></br>
        <center>
            <div class="display-chat" id="display-chat">
                <?php
                if ($query->columnCount() > 0) {
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                ?>
                        <div class="message">
                            <p>

                                <b><span><?php echo $row['name']; ?>:</span></b>
                                <span style="display: inline-block;"><?php echo $row['msj']; ?></span>
                                <span style="font-size: 10px; color: #949494"><?php echo $row['created_on']; ?></span>
                            </p>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="message">
                        <p>
                            No hay ninguna conversación previa.
                        </p>
                    </div>
                <?php
                }
                ?>

            </div>
        </center>



        <form class="form-horizontal" method="post" action="enviarmensaje.php">
            <center>
                <div class="form-group">
                    <div class="form">
                        <textarea name="msj" class="form-control" placeholder="Ingresa tu mensaje aquí..."></textarea>
                        <div>
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </center>
        </form>
    </div>
    <center>
        <div class="cancelar">
            <button onclick="location.href='alumno.php'">Cancelar</button>
        </div>
    </center>
</body>

</html>