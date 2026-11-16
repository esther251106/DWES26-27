<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <form action="guarda_prefs.php" method="POST">
            <label for="nombre">Dime tu nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="color">Pon tu color favorito</label>
            <input type="color" name="color" id="color">
            <button type="submit">Envia</button>
        </form>
    </div>
</body>
</html>