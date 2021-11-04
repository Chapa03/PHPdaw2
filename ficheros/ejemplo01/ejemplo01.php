<?php 
// Abrir el fichero en modo escritura
// $f = fopen('prueba.txt', 'w');

// Abrir el fichero en modo append o añadir
$f1 = fopen('prueba.txt', 'a');
$f2 = fopen('copia.txt', 'w');

echo 'Fichero abierto';

// Mientras no llegue al final del fichero $f
while (! feof($f1)){
    $linea = fgets($f1);
    fputs($f2, $linea);
}

$linea1 = 'En un lugar de la mancha';
$linea2 = 'de cuyo nombre no quiero acordarme';
$linea3 = 'no ha mucho que vivía un hidalgo';
fputs($f1, $linea1);
fputs($f1, $linea2);
fputs($f1, $linea3);

fclose($f1);
fclose($f2);
echo 'Fichero cerrado';
?>