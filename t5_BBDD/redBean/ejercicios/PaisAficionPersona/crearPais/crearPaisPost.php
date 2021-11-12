<?php
require_once '../bd/bdh.php';

$nombrePais = isset($_POST['pais']) ? $_POST['pais'] : null;

if ($nombrePais != null) {
    conectar();
    
    $pais = R::dispense('pais');
    $pais -> nombrePais = $nombrePais;
    R::store($pais);
    desconectar();
    header('location:../leerPais/leerPais.php');
}   
?>