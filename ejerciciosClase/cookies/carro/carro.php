<?php
    // Iniciamos sesión para poder guardar al carrito 
    session_start();

    // Si no existe el carrito en la sesión lo creamos vacío
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Definimos arrays artículos
    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
    );

    // Si el usuario hace clic en un artículo, capturamos su ID con el GET
    if (isset($_GET['id'])) {
        $idbuscado = (int)$_GET['id'];
        // Buscamos el articulo en el array de articulos
        foreach ($articulos as $articulo) {
            if ($articulo['id'] === $idbuscado) {
                $_SESSION['carrito'][] = $articulo;
                break;
            }
        }

        // Redirigimos a la misma página para limpiar URL y evitar duplicados
        header("Location: carro.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <h1>Lista de artículos</h1>
    <ul>
        <?php foreach ($articulos as $articulo): ?>
            <li>
                <a href="carro.php?id=<?= $articulo['id'] ?>">
                    <?= $articulo['nombre'] ?> 
                    (<?= $articulo['precio'] ?> euros)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Carro de compras</h2>
    <ul>
        <?php
        $total = 0;
        if (!empty($_SESSION['carrito'])):
            foreach ($_SESSION['carrito'] as $item):
                $total += $item['precio'];
        ?>
                <li><?= htmlspecialchars($item['nombre']) ?> - <?= $item['precio'] ?> €</li>
        <?php 
            endforeach; 
        else:
        ?>
            <li>El carrito está vacío</li>
        <?php endif; ?>
    </ul>

    <p>Total acumulado: <?= $total ?> euros</p>
</body>
</html>