<?php
include "Usuario.php";

if (!isset($_POST["usuario"])) {
    header("location: loginN.php?error=1");
    exit();
}

if ($_POST["usuario"] == "") {
    header("location: loginN.php?error=2");
    exit();
}

if ($_POST["contrasena"] == "") {
    header("location: loginN.php?error=2");
    exit();
}

$usuario = Usuario::getByUserName($_POST["usuario"]);


if (!$usuario) {
    header("location: loginN.php?error=3");
    exit();
}

if ($usuario->validarClave($_POST["contrasena"])) {
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["usuario"] = $usuario->getUsuario();
    $_SESSION["codigo"] = $usuario->getCodigo();
    header("location: admin.php");
    exit();
} else {
    header("location: loginN.php?error=3");
    exit();
}



