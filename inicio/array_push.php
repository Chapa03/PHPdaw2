<?php
    echo "Dame un número (0 para terminar): ";
    fscanf(STDIN, "%s\n", $n);
    
    $i = 0;
    $numeros = [];
    
    while($n != 0){
        array_push($numeros,$n);
        echo "Dame un número (0 para terminar): ";
        fscanf(STDIN, "%s\n", $n);
    }
    
    foreach ($numeros as $numero){
        echo array_pop($numeros);
        echo " ";
    }
    echo in_array(10, $numeros) ? "Si, está" : "No, no está";
 
    print_r($numeros);
?>