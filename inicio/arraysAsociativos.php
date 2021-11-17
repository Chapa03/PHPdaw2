<?php

//     Array en el que el índice tiene la libertad de ser cualquier cosa
//     Todos los arrays en PHP son asociativos
    $a[10] = 100;
    $a[20] = 200;
    $a[30] = 'pepe';
    $a['pepe'] = 100;
    $a['pepe'] = -5;
    
    foreach ($a as $k => $v){
        echo "($k)$v ";
    }
    
    
//     ---------------------
//      Podemos utilzar otras variables como indice de arrays asociativos
    $colorFavorito['pepe'] = 'azul';
    $colorFavorito['maria'] = 'rosa';
    
    echo $colorFavorito['pepe'];
    echo ' --- ';
    
    $nombre = 'maria';
    echo $colorFavorito[$nombre];
    
//     ------------------

    
//     $miColorFavorito = [
//         'rosa', 
//         'azul'
//     ];
    
//     $miColorFavorito['maria'] = 'rosa';
//     $miColorFavorito['pepe'] = 'azul';

//     De esta forma establecemos el indice asociativo con su valor de manera ordenadaen una sola sentencia
    $miColorFavorito = [
        'maria' => 'rosa',
        'pepe' => 'azul'
    ];
    echo "\n";
    
    foreach ($miColorFavorito as $k => $v){
        echo "($k)$v \n";
    }
    
    //crea una variable por cada indice no numérico (asociativo)
    // con el contenido de su posición en el array
    extract($a);
    echo $pepe;
    
?>
