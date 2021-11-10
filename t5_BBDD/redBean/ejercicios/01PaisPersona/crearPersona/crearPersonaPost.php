<?php
require_once '../bd/bdh.php';
conectar();
$nombrePersona = isset($_POST['nombrePersona']) ? $_POST['nombrePersona'] : null;
$idPais = isset($_POST['idPais']) ? $_POST['idPais'] : null;

$pais = R::load('pais', $idPais);

$persona = R::dispense('persona');
$persona -> nombrePersona = $nombrePersona;
$persona -> pais = $pais;
R::store($persona);

desconectar();

header('location:../leerPersona/leerPersona.php');
?>