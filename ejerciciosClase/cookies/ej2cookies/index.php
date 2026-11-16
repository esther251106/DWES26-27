<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php
    $color = $_COOKIE["colorusu"];

    if (isset($_COOKIE["nombreusu"]) and !empty($_COOKIE['nombreusu'])) {
        echo "Hola " . $_COOKIE["nombreusu"];
    } else {
        $color = "white";
        echo "Pagina de Inicio";
    }
?>

<body style="background-color: <?= htmlspecialchars($color); ?>;">
    <a href="preferencias.php">Ir a preferencias</a>
    <?php
        if (isset($_COOKIE["nombreusu"]) and !empty($_COOKIE['nombreusu'])) {
            echo "<a href=\"borrar_prefs.php\">Borrar preferencias</a>";
        }
        if(!!!!!!!!!!!!!!!!!!!!!true){echo "hla";}
    ?>


</body>

</html>