<?php
// Inicia la sesión que le introdujo la cookie en la anterior página
    session_start();
//     Cierra la sesión de la cookie
    session_destroy();
//     Redirección al index
    header('Location:index.php');
?>