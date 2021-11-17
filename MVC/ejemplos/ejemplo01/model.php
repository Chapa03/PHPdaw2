<?php
function getPersonas() {
    $db = new PDO ("mysql:host=localhost;dbname=test","root","");
    $resultado = $db -> query("select id,nombre_persona from persona");
    
    return $resultado;
}
?>