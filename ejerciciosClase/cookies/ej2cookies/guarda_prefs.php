<?php 
setcookie("nombreusu",$_POST["nombre"], time()+300);
setcookie("colorusu",$_POST["color"], time()+300);
header("Location: index.php");
exit();
?>
