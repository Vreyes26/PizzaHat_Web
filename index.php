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
        <header>
        
            <div class="container">
                <img src="img/icon.png" class="logoPizzaHat" alt="logo pizzaHat"/>

                <nav>
                    <?php
                    if(isset($_SESSION["username"])){
                    ?>
                    <div class="dropdown">
                        <a id="label_username"><?php echo($_SESSION["username"]);?></a>
                        <div class="dropdown-contenido">
                            <a href="logout.php" id="sesion-close">Cerrar sesion</a>
                        </div>
                    </div>
                        <?php
                    }
                    else{
                        ?>
                        <a href="login.php">Iniciar sesion</a>
                        <?php
                    }
                    ?>
                </nav>

            </div>
        </header>
        
        <div class="fondoMenu">
            <img src="img/PizzaBanner.jpg" class="bannerPizza" alt="imagen de pizza"/>
            <img src="img/pizza-espanola.jpg" alt="Pizza española imagen"/>
        </div>
    </body>
</html>
