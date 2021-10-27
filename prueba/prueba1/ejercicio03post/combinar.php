<?php
require_once '../ejercicio01/uno.php';
$sustantivo = (isset($_POST['sustantivo'])) ? $_POST['sustantivo'] : null;

if ($sustantivo != null) {
    echo combinaciones(sacarRaiz($sustantivo));
}

?>