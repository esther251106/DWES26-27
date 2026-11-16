<?php
session_start();

// 1. comprobamos si existe la sesión, si no creamos un array vacío
if (!isset($_SESSION['alumnos'])) {
    $_SESSION['alumnos'] = [];
}

// 2. creamos array asociativo con el nombre y las notas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST["nombreAlumno"] ?? '');
    $nota1 = floatval($_POST['nota1'] ?? 0);
    $nota2 = floatval($_POST['nota2'] ?? 0);
    $nota3 = floatval($_POST['nota3'] ?? 0);

    //si el nombre no está vacío
    if ($nombre !== '') {
        $media = ($nota1 + $nota2 + $nota3) / 3;

        // Guardamos el alumno en el array de la sesión
        $_SESSION['alumnos'][] = [
            'nombre' => $nombre,
            'nota1' => $nota1,
            'nota2' => $nota2,
            'nota3' => $nota3,
            'media' => round($media, 2)
        ];
    }
    header("Location: calificaciones.php");
    exit;
}
?>