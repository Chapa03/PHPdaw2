<?php
//     Dado un número “n”, dibujar líneas desde n caracteres hasta un carácter 
//     disminuyendo en un carácter cada línea que se dibuje. Repetir el 
//     patrón “+” “-” “.” en cada carácter que se imprima.
    $c = '.';
    
    echo 'Introduce un numero: ';
    fscanf(STDIN, "%d\n", $n);
    
    for ($i = $n; $i >= 1; $i--){
        for ($j = 1; $j <= $i; $j++) {
            switch ($c){
                case '+':
                    $c = '-';
                    break;
                case '-':
                    $c = '.';
                    break;
                case '.':
                    $c = '+';
                    break;
            }
            echo $c;
        }
        echo "\n";
    }
?>