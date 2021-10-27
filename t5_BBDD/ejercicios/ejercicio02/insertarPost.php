<?php
require_once '../ejercicio01/utilEJ01sinPrepare.php';

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : null;

if ($nombre != null && $precio != null) {
    insertar([$nombre,$precio]);
    header('location:insertarGet.php');
} else {
    echo '<h1>Datos insuficientes</h1>';
}
?>