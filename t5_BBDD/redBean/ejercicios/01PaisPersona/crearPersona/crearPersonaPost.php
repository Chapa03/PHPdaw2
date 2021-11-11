<?php
require_once '../bd/bdh.php';
conectar();
$nombrePersona = isset($_POST['nombrePersona']) ? $_POST['nombrePersona'] : null;
$idPais = isset($_POST['idPais']) ? $_POST['idPais'] : null;
$idAficiones = isset($_POST['aficion']) ? $_POST['aficion'] : null;

$pais = R::load('pais', $idPais);

$persona = R::dispense('persona');
$persona -> nombrePersona = $nombrePersona;
$persona -> pais = $pais;

foreach ($idAficiones as $idAficion) {
    $persona ->sharedAficionList[] = R::load('aficion', $idAficion);
}

R::store($persona);

desconectar();

header('location:../leerPersona/leerPersona.php');
?>