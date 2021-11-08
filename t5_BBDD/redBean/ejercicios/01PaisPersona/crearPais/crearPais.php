<?php
require_once '../bd/bdh.php';

$nombrePais = isset($_GET['pais']) ? $_GET['pais'] : null;

if ($nombrePais != null) {
    conectar();
    $pais = R::dispense('pais');
    $pais -> nombrePais = $nombrePais;
    desconectar();
    header('location:../leerPais/leerPais.php');
}   
?>