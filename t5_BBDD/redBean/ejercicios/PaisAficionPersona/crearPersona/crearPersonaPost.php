<?php
require_once '../bd/bdh.php';
$nombrePersona = isset($_POST['nombrePersona']) ? $_POST['nombrePersona'] : null;
$idPaisN = isset($_POST['idPaisN']) ? $_POST['idPaisN'] : null;
$idPaisR = isset($_POST['idPaisR']) ? $_POST['idPaisR'] : null;
//$idAficiones = isset($_POST['aficion']) ? $_POST['aficion'] : [];
$idAficionesGustos = isset($_POST['gusto']) ? $_POST['gusto'] : [];
$idAficionesOdios = isset($_POST['odio']) ? $_POST['odio'] : [];

conectar();
$persona = R::dispense('persona');
$persona -> nombrePersona = $nombrePersona;
$persona -> nacimiento = R::load('pais', $idPaisN);
$persona -> residencia = R::load('pais', $idPaisR);

// foreach ($idAficiones as $idAficion) {
//     $persona ->sharedAficionList[] = R::load('aficion', $idAficion);
// }

foreach ($idAficionesGustos as $idAficionGusto) {
    $aficionGusta = R::load('aficion', $idAficionGusto);
    $gusta = R::dispense('gusta');
    $gusta -> aficion = $aficionGusta;
    $gusta -> persona = $persona;
    R::store($gusta);
}

foreach ($idAficionesOdios as $idAficionOdio) {
    $aficionOdia = R::load('aficion', $idAficionOdio);
    $odia = R::dispense('odia');
    $odia -> aficion = $aficionOdia;
    $odia -> persona = $persona;
    R::store($odia);
}

R::store($persona);

desconectar();

header('location:../leerPersona/leerPersona.php');
?>