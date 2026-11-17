<?php
session_start();
//si no existe la sesion la iniciamos
if (!isset($_SESSION['loginusu'])) {
    $_SESSION['loginusu'] = [];
}

//abrimos archivo
$archivo = fopen("heroes.csv", "r");

//array para guardar Dc y MARVEL
$dc = [];
$marvel = [];

//leemos fichero
if ($archivo !== false) {
    $cabecera = fgetcsv($archivo, 100, ";");
    //linea d datos
    $linea = fgetcsv($archivo, 100, ";");

    //mientras haya linea
    while ($linea !== false) {
        if ($linea[1] === "DC Comics") {
            $dc[] = $linea;
        } else {
            $marvel[] = $linea;
        }
        //leemos la siguiente linea para q el bucle avance
        $linea = fgetcsv($archivo, 100, ";");
    }
    //cerramos archivpo
    fclose($archivo);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superheores</title>
</head>

<body>
    <h1>Listado de superheroe</h1>
    <?php
    //recorremos arrar d dc
    foreach ($dc as $super) {
        echo "<strong>" . htmlspecialchars($super[0]) . "</strong></br>";
        echo htmlspecialchars($super[1]) . "</br>";
        echo "<strong> Aparicion " . "</strong>" . htmlspecialchars($super[3]) . "</br>";
        echo "<strong> Alter Ego " . "</strong>" . htmlspecialchars($super[4]) . "</br>";
        echo htmlspecialchars($super[5]) . "</br>";
        echo htmlspecialchars($super[7]) . "</br>";
        echo htmlspecialchars($super[10]) . "</br>";
    }
    ?>

</body>

</html>