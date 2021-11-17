<?php
// Realizar un “Hola mundo” con un patrón MVC, de manera 
// que el mensaje a mostrar esté en una Base de Datos.
// Mejorarlo para que pueda mostrar una lista de saludos, guardados en la BD
include '../model/model.php';

$datos['saludos'] = getSaludos();

include '../helperView.php';

view('saludo', $saludos);
?>