<?php
require_once '../ejercicio01/utilEJ01.php';

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : null;

if ($_POST['accion'] == 'Insertar'){
    if ($nombre != null && $precio != null) {
        insertar([$nombre,$precio]);
        header('location:index.php');
    } else {
        echo '<h1>Datos insuficientes</h1>';
    }
} else {
    session_start();
    $_SESSION['preparados'][] = [$nombre, $precio];
    header('location:index.php');
}

?>