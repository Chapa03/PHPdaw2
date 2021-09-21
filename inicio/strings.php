<?php
    $a = [
        'pepe' => 1,
        'maria' => 2
    ];
    $b = 'Pepe';
    $c = [[100, 200], 300];
    
    echo $b;
    echo "\n";
//     Impresion del array y sus indices
    print_r($a);
    
//     Informacion de contenido y tipo de una variable
    var_dump($a);
    var_dump($b);
    echo "\n";
    
//     Para imprimir el contenido de un array de arrays en una cadena, hay que rodearlo de corchetes en el string
    echo "El valor [0][1] del array c es {$c[0][1]} ";
    
    
    $mensaje = "Buenos días";
    
    //Con este echo, imprimimos todo el contenido, con saltos de linea incluidos
    echo <<<CODIGO
    <body>
    <h1>Cabecera</h1>
    <h3>$mensaje</h3>
    <h2>{$c[0][1]}</h2>
    </body>
    CODIGO;
    echo "\n";
    
    $d = "En un lugar de la mancha";
    echo $d . "\n";
    
    //explode sirve para separar un string por el caracter que nosotros elijamos
    $i = 1;
    foreach (explode(' ', $d) as $palabra) {
        echo "$i: $palabra\n";
        $i++;
    }
    
//     implode sirve para juntar varios strings con un caracter que nosotros elijamos
    $e = ['Junta', 'esta', 'frase'];
    echo implode('--', $e);
    echo "\n";
    
    
?>