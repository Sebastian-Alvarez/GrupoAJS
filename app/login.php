<?php
    require 'db_config.php';

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">

        <title>Login</title>
        
    </head>
    <body>

        <h1>Login</h1>

        <form action="login.php" method="POST">
            <input type="text" name="email" placeholder="Ingrese su correo" required>
            <br><br>
            <input type="password" name="pass" placeholder="Ingrese su contraseña" required>
            <br><br>
            <button type="submit" class="boton-estilo"> Ingresar </button>
        </form>

        <br><?= $mensaje ?><br>

        <br>Si aun no te has registrado
        <a href="signup.php">SingUp</a>

    </body>
</html>