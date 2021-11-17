<?php
/**
 * Despliega una vista
 */

function view($nombre, $d) {
    extract($d);
    include $nombre . '.php';    
}

?>