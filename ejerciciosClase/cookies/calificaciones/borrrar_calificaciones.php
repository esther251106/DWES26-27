<?php 
session_start();
//borramos el array de la sesion
unset($_SESSION['alumnos']);

//volvemos a la pagina principal
header("Location: calificaciones.php");
exit;
?>