<?php
    $a = [
        'pepe' => 1,
        'maria' => 2
    ];
    
//     array_keys nos devuelve un array solo con las claves del array que le pasas
    foreach (array_keys($a) as $v) {
        echo $v . ' ';
    }
    
    $b[0] = 'Pepe';
    $b[1] = 'Juan';
    
    echo $b[0];
//     unset() elimina una variable o de un índice de un array
    unset($b[0]);
    echo $b[0];
?>