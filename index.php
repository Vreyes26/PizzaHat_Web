<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PizzaHut</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href="img/icon.ico" rel="icon" type="icon/ico"/>
    </head>
    <body>
        <div class="register-box">
            <img class="pizzaLogo" src="img/icon.png" alt="Logo PizzaHat"/>
            <form class="register">
                <h1>Registrar cuenta</h1>
                <label for="nombre">Nombre:</label>
                <input type="text" name="user_nombre" placeholder="Ingrese su nombre" required/>
                <label for="apellido">Apellido:</label>
                <input type="text" name="user_apellido" placeholder="Ingrese su apellido" required/>
                <label for="correo">Correo:</label>
                <input type="email" name="user_email" placeholder="Ingrese su correo" required/>
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="user_password" placeholder="Ingrese su contraseña" required/>
                <label for="reContraseña">Repetir contraseña:</label>
                <input type="password" name="user_password2" placeholder="Repita su contraseña" required/>
                <input type="submit" value="Registrarse"/>

                <label>¿ya tienes tu cuenta?</label>
                <a href="login.php">Iniciar sesion</a>
            </form>
        </div>
        
        <?php
        
        ?>
    </body>
</html>
