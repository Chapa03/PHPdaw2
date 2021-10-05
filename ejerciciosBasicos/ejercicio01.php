<?php

//     Pedir infinitos números enteros (hasta que se introduzca) el cero. 
//     Indicar finalmente cuál fue el máximo y cuál fue el mínimo.
    $numero = 0;
    
//     Pido el numero
    echo "Introduce tu numero: ";
    fscanf(STDIN, "%d\n", $numero);
    
//     Se crean dos variables minimo y maximo para comparar con el numero nuevo introducido
    $min = $numero;
    $max = $numero;
    
//     Mientras que el numero nuevo introducido sea distinto de 0, seguira en el bucle pidiendo numeros
//     y sustituyendo el valos de las variables min y max por los nuevos, en función de cual sea mayor
//     o menor que el nuevo valor
    while ($numero != 0) {
        echo "Introduce tu numero: ";
        fscanf(STDIN, "%d\n", $numero);
        if ($numero != 0) {
            $min = ($numero != 0 && $numero < $min) ? $numero : $min;
            $max = ($numero != 0 && $numero > $max) ? $numero : $max;
        }
        
        echo "\n";
        echo "Maximo: $max\n";
        echo "Minimo: $min\n";
    }
    
?>