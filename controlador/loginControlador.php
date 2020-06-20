<?php
    session_start();
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    
    if($username == $_POST["username"]){
        $_SESSION["username"] = $username;
        header("Location: ../index.php");
    }
