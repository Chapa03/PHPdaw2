<?php
function getSaludos() {
    $db = new PDO ("mysql:host=localhost;dbname=saludar","root","");
    $resultado = $db -> query("select id,texto from saludo");
    $saludos = [];
    
    foreach ($filas as $fila) {
        $saludos[] = $fila['texto'];
    }
    
    return $resultado;
}
?>