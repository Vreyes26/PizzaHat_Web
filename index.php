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
            <form action="data/register.php">
                <h1>Registrar cuenta</h1>
                <label for="nombre">Nombre:</label>
                <input type="text" name="user_nombre" id="nombre" placeholder="Ingrese su nombre" required/>
                <label for="apellido">Apellido:</label>
                <input type="text" name="user_apellido" id="apellido" placeholder="Ingrese su apellido" required/>
                <label for="correo">Correo:</label>
                <input type="email" name="user_email" id="correo" placeholder="Ingrese su correo" required/>
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="user_password" id="contraseña" placeholder="Ingrese su contraseña" required/>
                <input type="submit" value="Registrarse"/>

                <label>¿ya tienes tu cuenta?</label>
                <a href="login.php">Iniciar sesion</a>
            </form>
        </div>
        <?php
        
        ?>
    </body>
</html>
