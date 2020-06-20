<!DOCTYPE html>

<html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href="img/icon.ico" rel="icon" type="icon/ico"/>
    </head>
    <body>
        <div class="loginBox">
            <img class="pizzaLogo" src="img/icon.png" alt="Logo PizzaHat"/>
            <form action="data/loginUser.php" method="POST">
                <h1>Ingresar cuenta</h1>
                <label for="user">Correo:</label>
                <input type="text" name="user" id="user" placeholder="e-mail" required/>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar sesion" name="buttonSesion"/>
                <label>¿No tienes cuenta?</label>
                <a href="register.php">Crear cuenta</a>
            </form>
        </div>
    </body>
</html>