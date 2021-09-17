<?php
    $a = 1;
    $b = 3;
    
    //aCopiaValor va a almacenar el valor que contiene $a
    $aCopiaValor = $a;
    
    //bPuntero va a almacenar la posición de memoria de $b
    $bPuntero = &$b;
    
    //Al incrementar $aCopiaValor estamos incrementando el valor de una variable nueva
    $aCopiaValor++;
    //Al incrementar $bPuntero estamos incrementando el valor de esa posición de memoria, por lo que cualquier
    //variable que apunte a ella tendrá ese valor
    $bPuntero++;
    echo 'Valor de $a: ' . $a . ' - $aCopiaValor: ' . $aCopiaValor . ' - Valor de $b: ' . $b . ' - $bPuntero: ' . $bPuntero;

?>