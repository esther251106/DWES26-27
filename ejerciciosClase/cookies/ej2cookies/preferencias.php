<!-- Con un formulario que le pida al usuario su nombre y su color
favorito (a elegir de una lista desplegable, o con el control input type=”color” de
HTML5). El formulario deberá enviarse a guarda_prefs.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="guarda_prefs.php" method="POST">
        <label for="nombre">Dime tu nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="color">Pon tu color favorito</label>
        <input type="color" name="color" id="color">
        <button type="submit">Envia</button>
    </form>
</body>
</html>