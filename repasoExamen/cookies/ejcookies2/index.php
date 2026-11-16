<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<?php
$color = $_COOKIE['colorusu'] ?? "white";

if (isset($_COOKIE['nombreusu'])) {
    echo "hola " . $_COOKIE['nombreusu'];
} else {
    $color = "white";
    echo "Página de inicio";
}
?>

<body style="background-color: <?= htmlspecialchars($color); ?>;">
    <a href="preferencias.php">Ir a preferencias</a>
</body>

</html>