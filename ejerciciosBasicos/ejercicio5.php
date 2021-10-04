<?php
// Similar al ejercicio 3, dado un número ciclar entre las 
// palabras “as”, “dos”, … “siete”, “sota”, “caballo” y “rey” 
// tantas veces como diga tal número.

    $n = 0;
    $cartas = ["as", "dos", "tres", "cuatro", "cinco", "seis", "siete", "sota", "caballo", "rey"];
    
    echo "Introduce un número: ";
    fscanf(STDIN, "%d\n", $n);
    
    for($i = 0; $i < $n; $i++){
        foreach ($cartas as $card){
            echo $card . " ";
        }
        echo "\n";
    }
    
    
?>