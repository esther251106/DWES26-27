<?php
session_start();

//Datos dados por el enunciado
$usuarioCorrecto = "admin";
$passwordCorrecta = "1234";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $contra = trim($_POST['contra'] ?? '');

    //comprobamos q no esten vacios
    if($usuario === '' || $contra === '') {
        echo "No puede haber un campo vacio";
    }
    //comprobamos que coinciden 
    if($usuario == $usuarioCorrecto && $contra == $passwordCorrecta) {
        //guardamos sesion
        $_SESSION['usuario'] = $usuario;
    }else {
        echo "usuario o contraseña incorrectos";
    }
}

?>