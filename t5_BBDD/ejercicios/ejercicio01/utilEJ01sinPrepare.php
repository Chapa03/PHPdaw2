<?php
require_once '../../utilBD.php';


function insertar($productos) {
    $bd = conectarMySQL();
    foreach ($productos as $producto) {
        $nombre = $producto[0];
        $precio = $producto[1];
        $sql = <<<SQL
            insert into producto(nombre, precio)
            values ('$nombre', '$precio')
            SQL;
        $bd->exec($sql);
    }
}


?>