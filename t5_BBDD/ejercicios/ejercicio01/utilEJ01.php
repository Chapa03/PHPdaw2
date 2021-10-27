<?php
require_once '../../utilBD.php';


function insertar($productos) {
    $bd = conectarMySQL();
    foreach ($productos as $producto) {
        $sql = <<<SQL
            insert into producto(nombre, precio)
            values (:nombre, :precio)
            SQL;
        $sentenciaPreparada = $bd->prepare($sql);
        $sentenciaPreparada->bindParam(':nombre', $producto[0]);
        $sentenciaPreparada->bindParam(':precio', $producto[1]);
        $sentenciaPreparada->execute();
    }
}


?>