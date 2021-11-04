<?php
$palabra = isset($_GET['palabra']) ? $_GET['palabra'] : null;

if ($palabra == null) {
    header('location:index.php');
}

$articulo = file_get_contents('../ejercicio01/articulo.txt');
?>

<h3>Fichero /ejercicio01/articulo.txt con la palabra <?= $palabra ?></h3>
<textarea disabled="disabled" rows="20" cols="40"><?= $articulo . "\n" . $palabra?></textarea>