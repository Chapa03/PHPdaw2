<?php
//ejercicio 12
// Dado un texto contenido en una cadena, sustituir todas las 
// apariciones de la palabra ‘payasos’ por ‘*******’

//ejercicio13
// Mejorar el programa anterior para que haga esa sustitución, 
// no sólo para la palabra ‘tonto’, sino para una lista de palabras 
// prohibidas proporcionada en un array de string.

    $cadena = "Unos 'guau! guau!' como un perro, otros 'miau! miau!' como un gato y demasiados 'bla, bla' como payasos";
    $cadena2 = "Ese tío es un tonto, un imbécil y siempre está rodeado de payasos";
    $prohibidas = ['payasos', 'tonto', 'imbécil'];
    
    //replace("buscar", "sustituir", $variable)
    echo $cadena, PHP_EOL, str_replace("payasos", "*******", $cadena);
    echo "\n";
    
    //También se puede hacer pasando por búsqueda un array de strings
    echo $cadena2, PHP_EOL, str_replace($prohibidas, "*****", $cadena2);
?>