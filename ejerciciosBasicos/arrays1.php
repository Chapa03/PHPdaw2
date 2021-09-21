<?php
    $a = [
        'pepe' => 1,
        'maria' => 2
    ];
    
//     array_keys nos devuelve un array solo con las claves del array que le pasas
    foreach (array_keys($a) as $v) {
        echo $v . ' ';
    }
?>