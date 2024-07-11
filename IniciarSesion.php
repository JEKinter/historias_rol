<?php
    require_once "scrips/Usuarios/LoginUsuario.php";

    $usuario=htmlentities(addslashes($_POST["usuario"]));
    $contrasenia=htmlentities(addslashes($_POST["contrasenia"]));

    $loginUsuario = new LoginUsuario();

    $ingresoValido=$loginUsuario->login($usuario, $contrasenia);

    if($ingresoValido){
        session_start();
        $_SESSION["usuario"]=$usuario;
        header("location:index.php");

    }else{
        header("location:IniciarSesion.html");
    }
?>