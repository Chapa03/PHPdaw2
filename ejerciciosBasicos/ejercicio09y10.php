<?php
//ejercicio 9
// Preguntar por teclado un número n (del 1 al 10), y a continuación
// qué formato se requiere, Si se indica “nombre”, saldrán los nombres
// de los números del 1..N (uno, dos, tres, cuatro, …), si se indica
// “romano”, saldrán los números del 1..N en formato romano (i, ii, iii, iv, …)
// Diseñar el programa para que sólo tenga un bucle (y no tenga sentencias
// “if” ni “switch”), de manera que se puedan añadir nuevos formatos de
// números en el futuro, sin cambiar casi el código.

//ejercicio 10
// Mejorar el programa anterior para que cicle alrededor de la introducción 
// del número N, hasta que sea un número entre 1 y 10, y para que cicle en la 
// introducción del formato hasta que sea un formato que el programa conozca 
// (pudiendo estar abierto a la introducción de nuevos formatos, sin necesidad 
// de cambiar el código de comprobación)

    $numeros = [
                    'numero' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                    'nombre' => ['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez'],
                    'romano' => ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X']
                ];

    echo "Introduce un número: ";
    fscanf(STDIN, '%d\n', $n);
    
    while ($n < 0 || $n > 10){
        echo "Introduce un número válido entre 0 y 10, por favor: ";
        fscanf(STDIN, '%d\n', $n);
    }
    
    echo "Introduce el formato: ";
    fscanf(STDIN, '%s\n', $formato);
   
    
    while (!array_key_exists($formato, $numeros)) {
        echo "Introduce un formato válido, por favor: ";
        fscanf(STDIN, '%s\n', $formato);
    }
    
    for ($i = 0; $i < $n; $i++){
        echo $numeros[$formato][$i]; 
        echo ($i == $n - 1) ? "" : ", ";
    }
    
?>