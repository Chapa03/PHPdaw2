<?php
require_once '../bd/bdh.php';

$nombreAficion = isset($_POST['aficion']) ? $_POST['aficion'] : null;

if ($nombreAficion != null) {
    conectar();
    
    $aficion = R::dispense('aficion');
    $aficion -> nombreAficion = $nombreAficion;
    R::store($aficion);
    desconectar();
    header('location:../leerAficion/leerAficion.php');
}   
?>