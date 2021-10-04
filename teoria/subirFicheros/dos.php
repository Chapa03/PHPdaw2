<?php
    $nombreArchivo = $_FILES['foto']['name'];
    echo "<h2>Recibido el archivo $nombreArchivo!!</h1>";
    
    $carpeta = 'c:\tmp\fotos';
    copy($_FILES, $carpeta)
?>