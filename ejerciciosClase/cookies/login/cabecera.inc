<?php
    session_start();
    if(isset($_SESSION['loginusu'])) {
        echo '<nav>';
        echo '<a href="pag1.php"> PÃ¡gina 1 </a>';
        echo '<a href="pag2.php"> PÃ¡gina 2 </a>';
        echo '</nav>';
    } else {
        header('Location: login.php');
        exit();
    }

?>