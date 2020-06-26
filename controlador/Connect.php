<?php
$conexion = mysqli_connect("localhost", "root", "", "pizza_hut_db");
if(!$conexion){
    echo 'Error';
}
else
{
    echo'conectado';
}