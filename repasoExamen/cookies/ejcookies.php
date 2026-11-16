<!--Realizar una aplicación que compruebe si existe la cookie “user” tiene datos, vuestro
nombre, en caso de estar vacia que la cree con una caducidad de 1000. En la siguiente
ejecución debe de aparecer vuetros nombre en el navegador.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio cookies</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Ejercicio cookies</h1>
        <?php 
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
        }else {
            setcookie("user","pepe",time() + 5);
            echo "la cookie esta vacia, cookie creada";
        }
        ?>
        <div class="resultado">

        </div>
    </div>
</body>
</html>