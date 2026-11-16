<?php
session_start();

if(!isset($_SESSION['persona'])) {
    $_SESSION['persona'] = [];
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $edad = trim($_POST['edad'] ?? '');

    if ($nombre == '' || $email == '' || $edad == '') {
        echo "No puede haber un campo vacio";
    } else if ((int)$edad < 18) {
        echo "Tienes q ser mayor de edad";
    } else if (strpos($email, '@') === false) {
        echo "El email no es valido";
    }else {
        echo "<h3> Datos recibidos: </h3>";
        echo "Nombre: " . htmlspecialchars($nombre)."<br>";
        echo "Email: " . htmlspecialchars($email)."<br>";
        echo "Edad: " . htmlspecialchars($edad)."<br>";

    }
}
?>