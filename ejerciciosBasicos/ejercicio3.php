<?php
//     Dado dos números n y p (con p entre 1 y 10), 
//     ciclar entre el cero y el p-1 tantas veces como diga n.
    $n = 0;
    $p = 0;
    
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n", $n);
    
    echo "Introduce p: ";
    fscanf(STDIN, "%d\n", $p);
    
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 0; $j < $p; $j++){
            echo "$j ";
        }
    }
?>