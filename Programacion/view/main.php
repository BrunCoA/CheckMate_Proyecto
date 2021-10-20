<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>ChatMate ingreso</title>
</head>
<body>
            <form class="form" action="../model/login.php" method="POST" enctype="multipart/form-data">
                <div class="titulos">
                    <h1>ChatMate</h1>
                    <h2 class="title">Iniciar Sesión</h2></div>
                <div class="input">
                    <label for="ci">CI de usuario</label>
                    <input type="text" id="ci" name="cilogin">
                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" name="passlogin">
                </div>
                <div class="ingresar">
                    <input type="submit" value="Ingresar">
                    <input type="button" value="Registrarse">
                </div>
            </form>
</body>
</html>
