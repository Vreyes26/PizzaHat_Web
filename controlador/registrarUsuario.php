<?php
include 'Connect.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$user = $_POST["user"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];

//CONSULTA INSERTAR
$insertar = "INSERT INTO usuarios(Nombre, Apellido, User, Correo, Contraseña) VALUES ('$nombre', '$apellido', '$user', '$correo', '$clave')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo'error';
}else{
    echo'correcto';
}