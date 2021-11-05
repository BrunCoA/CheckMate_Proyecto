<?php
session_start();
include "../model/conexion.php";
$sql = "SELECT * FROM `chat`";

$query = mysqli_query($conexion, $sql);
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
            <h2 style="color: white;">Bienvenid@ <span style="color: red;"><?php echo $_SESSION['ci']; ?> !</span></h2>
        </center></br>
        <center>
            <div class="display-chat" id="display-chat">
                <?php
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                ?>
                        <div class="message">
                            <p>

                                <b><span><?php echo $row['name']; ?>:</span></b>
                                <span style=""><?php echo $row['mensaje']; ?></span>
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
            <button onclick="location.href='docente.php'">Cancelar</button>
        </div>
    </center>
</body>

</html>