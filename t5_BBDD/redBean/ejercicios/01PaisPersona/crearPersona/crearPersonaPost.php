<?php
require_once '../bd/bdh.php';
conectar();
$nombrePersona = isset($_POST['nombrePersona']) ? $_POST['nombrePersona'] : null;
$nombrePais = isset($_POST['nombrePais']) ? $_POST['nombrePais'] : null;

$consultaPais = <<<SQL
    SELECT * FROM `pais` WHERE `nombre_pais` LIKE '$nombrePais';
SQL;
$pais = R::getAll($consultaPais);

if ($nombrePais != null) {
    $persona = R::dispense('persona');
    $persona -> nombrePersona = $nombrePersona;
    $persona -> pais = $pais;
    R::store($persona);
    header('location:../leerPersona/leerPersona.php');
} else {
    header('location:crearPersonaGet.php');
}
desconectar();
?>