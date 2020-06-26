<?php
    session_start();
    
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href="img/icon.ico" rel="icon" type="icon/ico"/>
    </head>
    <body>
        <div class="loginBox">
            <a href="index.php"><img class="pizzaLogo" src="img/icon.png" alt="Logo PizzaHat"/></a>
            <form action="controlador/loginControlador.php" method="POST">
                <h1>Ingresar cuenta</h1>
                <label for="user">Usuario:</label>
                <input type="text" name="username" id="user" maxlength="12" placeholder="Usuario" required/>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <input type="submit" value="Ingresar" name="buttonSesion"/>
                <label>¿No tienes cuenta?</label>
                <a href="register.php">Crear cuenta</a>
            </form>
        </div>
    </body>
</html>