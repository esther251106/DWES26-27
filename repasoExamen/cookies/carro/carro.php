<?php
//iniciamos sesion
session_start();

//si no existe el carrito en la sesión, lo creamos
if(!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}


//creamos array con articulos
$articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);

    //si el usu hace clic
    if(isset($_GET['id'])) {
        $idbuscado = (int)$_GET['id'];
        //buscamos el articulo en el array
        foreach ($articulos as $articulo) {
            if($articulo['id'] === $idbuscado) {
                $_SESSION['carrito'][] = $articulo;
                break;
            }
        }
        //redirigimos a la misma pagina
        header("Location:carro.php");
        exit;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <div class="contenido">
        <h1>Lista de articulos</h1>
        <ul>
            <?php foreach ($articulos as $articulo): ?>
                <li>
                    <a href="carro.php?id<?= $articulo['id'] ?>">
                        <?=  $articulo['nombre'] ?>
                        (<?= $articulo['precio'] ?> euros)
                    </a>
                </li>
            <?php endforeach;  ?>
        </ul>

        <h1>Carro de compras</h1>
    </div>
</body>
</html>