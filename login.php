<!DOCTYPE html>

<html>
    <head>
        <title>title</title>
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
            </form>
        </div>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
