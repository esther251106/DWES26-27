
<?php
    //comprobaciÃ³n de q el usu ha enviado el formulario
    if($_SERVER['REQUEST_METHOD'] ==='POST') {
        //recogemos lo q el usuario ha puesto en el post
        $usuarioRecibido = $_POST['usuario'] ?? '';
        $contraRecibida = $_POST['contra'] ?? '';

        //leemos el archivo usuarios.txt, lo guarda array
        $archivo = file('usuarios.txt');
        $loginCorrecto = false;

        //recorremos el array
        foreach ($archivo as $linea) {
            // Separamos el usuario y la contraseÃ±a usando los dos puntos ':' como separador
            // list() coge la primera parte antes de ':' y la guarda en $usuFichero, y la segunda en $passFichero
            list($usuFichero, $passFichero) = explode(':', $linea);
            if($usuFichero ===$usuarioRecibido && $passFichero === $contraRecibida) {
                $loginCorrecto = true;
                break;
            } 
        }

        //  SegÃºn si el login es correcto o no, actuamos
        if ($loginCorrecto) {
            // Si coincide, iniciamos sesiÃ³n y redirigimos a index.php
            session_start();
            $_SESSION['loginusu'] = $usuarioRecibido;
            header('Location: index.php');
            exit();
        } else {
            // Si no coincide, guardamos un mensaje de error para mostrarlo en rojo
            $mensajeError = "El usuario o la contraseÃ±a son incorrectos.";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Iniciar sesiÃ³n</h1>
    <form action="" method="POST">
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div>
            <label for="contra">ContraseÃ±a</label>
            <input type="text" id="contra" name="contra">
        </div>
            <button type="submit">Enviar</button>
    </form>
</body>
</html>