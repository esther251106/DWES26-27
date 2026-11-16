<?php
    // recogemos las variables, ponemos valor x defcto si no se escriben
    $x = isset($_GET["x"]) ? $_GET["x"] : 0;
    $y = isset($_GET["y"]) ? $_GET["y"] : 0;

    //hacemos las operaciones
    $suma = $x + $y;
    $resta = $x - $y;
    $multiplicacion = $x * $y;
    //evitamos dividir entre 0
    $division = ($y != 0) ? ($x / $y) : "No se puede dividir entre 0";

    //incluimos la VISTA para mostrar resultados
    include('calculadora.view.php');
?>