<?php
session_start();
//borramos array persona seession
unset($_SESSION['persona']);

//volvemos pagina inicial
header("Location: index.php");
exit;
?>