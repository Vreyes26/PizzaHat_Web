<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PizzaHut</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href="img/icon.ico" rel="icon" type="icon/ico"/>
    </head>
    <body>
        <div class="boxForm">
            <img class="pizzaLogo" src="img/icon.png" alt="Logo PizzaHat"/>
            <form action="data/register.php" autocomplete="off" method="POST">
                <h1>Registrar cuenta</h1>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required/>
                <label for="apellidos">Apellido:</label>
                <input type="text" name="apellido" id="apellidos" placeholder="Ingrese su apellido" required/>
                <label for="alias">Nombre de usuario:</label>
                <input type="text" name="user" id="alias" maxlength="12" placeholder="Ingrese nombre de usuario" required/>
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo" required/>
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="clave" id="contraseña" placeholder="Ingrese su contraseña" required/>
                <input type="submit" value="Registrarse"/>

                <label>¿ya tienes tu cuenta?</label>
                <a href="login.php">Iniciar sesion</a>
            </form>
        </div>
        <?php
        
        ?>
    </body>
</html>