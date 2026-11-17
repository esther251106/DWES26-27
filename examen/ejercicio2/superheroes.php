<?php
//comprobar de q el usu ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioRecibido = $_POST['usu'] ?? '';
    $contraRecibida = $_POST['contra'] ?? '';

    //leemos fichero
    $archivo = file('usuarios.txt');
    $loginCorrecto = false;

    //recorremos el array
    foreach ($archivo as $linea) {
        list($usuRec, $contraRec) = explode(':', $linea);
        if ($usuRec === $usuarioRecibido && $contraRec === $contraRecibida) {
            $loginCorrecto = true;
            break;
        }
    }

    // si el login es correcto o no,: 
    if (!$loginCorrecto) {
        session_start();
        $_SESSION['loginusu'] = $usuarioRecibido;
        header('Location: index.php');
        exit();
    } else {
        $mensajeError = "El usuario o la contraseña son incorrectos.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superheroe</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="usu">Usuario: </label>
        <input type="text" name="usu" id="usu" placeholder="usuario">
        <label for="contra">Contraseña: </label>
        <input type="text" name="contra" id="contra" placeholder="xxx">
        <button type="submit">Iniciar sesion</button>
    </form>
</body>

</html>