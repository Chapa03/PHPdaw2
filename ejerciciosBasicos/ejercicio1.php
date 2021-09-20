<?php

//     Pedir infinitos números enteros (hasta que se introduzca) el cero. 
//     Indicar finalmente cuál fue el máximo y cuál fue el mínimo.
    $numero = 0;
    
    echo "Introduce tu numero: ";
    
    fscanf(STDIN, "%d\n", $numero);
    
    $min = $numero;
    $max = $numero;
    
    while ($numero != 0) {
        echo "Introduce tu numero: ";
        fscanf(STDIN, "%d\n", $numero);
        if ($numero != 0) {
            $min = ($numero != 0 && $numero < $min) ? $numero :$min;
            $max = ($numero != 0 && $numero < $max) ? $numero :$max;
            
        }
        
        echo "\n";
        echo "Maximo: $max\n";
        echo "Minimo: $min\n";
    }
    
?>