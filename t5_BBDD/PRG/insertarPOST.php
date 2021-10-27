<?php
require_once '../utilBD.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$precio = isset($_POST['precio']) ? $_POST['precio'] : null;

$sql = <<<SQL
    insert into producto(nombre, precio)
    values(:n, :p)
SQL;

$bd = conectarMySQL();
$sp = $bd->prepare($sql);
$sp -> bindParam(':n', $nombre);
$sp -> bindParam(':p', $precio);

try {
    $sp -> execute();
    header('location:insertarPostOK.php');
} catch (Exception $e) {
    header('location:insertarPostMal.php?msg=' . $e -> getMessage());
}

mostrarTablaProductos($bd);
?>
