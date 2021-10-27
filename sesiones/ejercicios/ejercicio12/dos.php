<?php
session_start();

// Si llega numSumandos desde el formulario y si no existe dentro de $_SESSION (la primera vez)
if (isset($_GET['numSumandos']) && !isset($_SESSION['numSumandos'])) {
    $_SESSION['numSumandos'] = $_GET['numSumandos'];
    $_SESSION['etapa'] = 1;
    $_SESSION['sumandos'] = [];
}


?>

