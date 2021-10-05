<?php
// Pedir por teclado nombres de personas y sus edades, 
// hasta que se introduzca el nombre “fin”. Mostrar a 
// continuación el nombre de cada persona introducida y su edad 
// (entre paréntesis). NOTA: Utilizar arrays asociativos. ¿Qué 
// ocurre si dos personas se llaman igual? ¿Cómo podríamos ver la 
// información anterior ordenada por nombre? ¿Y por edad descendente?
    echo 'Dime un nombre (fin para acabar): ';
    
    fscanf(STDIN, '%s\n', $nombre);
    
    while ($nombre != 'fin') {
        echo "Dime la edad de $nombre: ";
        fscanf(STDIN, '%d\n', $edad);
        $persona[$nombre] = $edad;
        
        echo 'Dime otro nombre: ';
        fscanf(STDIN, '%s\n', $nombre);
    }
    
    echo "\nLos nombres y sus edades introducidos han sido:\n";
    $cont = 1;
    foreach ($persona as $nombre => $edad) {
        echo $cont++ . "\tNombre: " . $nombre . "\n\tEdad: " . $edad;
        echo "\n";
    }

?>