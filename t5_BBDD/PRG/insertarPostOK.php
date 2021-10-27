<?php
require_once '../utilBD.php';

function mostrarTablaProductos($bd) {
    $sql = <<<SQL
        select nombre, precio
        from producto
    SQL;
    $filas = $bd -> query($sql);
    echo '<table><tr><th>Nombre</th><th>Precio</th></tr>';
    foreach ($filas as $f) {
        echo "<tr><th>{$f['nombre']}</th></tr>";
        echo "<th>{$f['precio']}</th></tr>";
        
    }
    echo '</table>';
}

$bd = conectarMySQL();
mostrarTablaProductos($bd);
echo '<form action="insertarGet.php"><input type="submit" value="Volver"/></form>';
?>