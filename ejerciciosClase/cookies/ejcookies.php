<!-- Realizar una aplicación que compruebe si existe la cookie “user” tiene datos, vuestro
nombre, en caso de estar vacia que la cree con una caducidad de 1000. En la siguiente
ejecución debe de aparecer vuetros nombre en el navegador-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">    
    <title>Ej cookies</title>
</head>
<body>
    <div class="card">
        <?php
        if(isset($_COOKIE['user'])){
           echo $_COOKIE['user']; 

        } else {
            setcookie("user","jose",time() + 5);
            echo "cookie creada";

        }       
        ?>
    </div>
</body>
</html>