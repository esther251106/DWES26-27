<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="card">
        <h1>Resultado calculadora</h1>
        <!-- en en navegador poner 
        http://10.2.24.112/php/DWES26-27/formularios/calculadora.phpx=10&y=5 -->
        <h2>Operaciones</h2>
        <p>Suma: <?=$x?> + <?= $y ?> = <?= $suma ?></p>
        <p>Resta: <?=$x?> - <?= $y ?> = <?= $resta ?></p>
        <p>Multiplicacion: <?=$x?> * <?= $y ?> = <?= $multiplicacion ?></p>
        <p>Division: <?=$x?> / <?= $y ?> = <?= $division ?></p>
    
        <h2>Información del servidor ($_SERVER):</h2>
        <p><strong>Ordenador que hace la petición (REMORE_ADDR):</strong><?= $_SERVER['REMOTE_ADDR'] ?? 'No disponible' ?></p>
        <p><strong>¿En qué variable están los parámetros de la petición?</strong> En el array <code>$_GET</code> (o mediante la QueryString en <code>QUERY_STRING</code>: <?= $_SERVER['QUERY_STRING'] ?? '' ?>)</p>
        <p><strong>¿Qué es la ruta del sitio web en el ordenador local? (DOCUMENT_ROOT / PHP_SELF):</strong> <?= $_SERVER['PHP_SELF'] ?? '' ?></p>
    </div>
</body>
</html>