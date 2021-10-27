<?php
require_once '../ejercicio01/uno.php';
$sustantivo = (isset($_GET['sustantivo'])) ? $_GET['sustantivo'] : null;

if ($sustantivo != null) {
    echo combinaciones(sacarRaiz($sustantivo));
}

?>