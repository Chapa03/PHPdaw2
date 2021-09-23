<?php
//     en php no existe un tipo de datos fecha
// fecha actual en numero de segundos desde el 1 de enero de 1970 - EPOCH
    echo time();
    $t = time();
    
    echo "\n";
//     Hay que darle formato a la fecha almacenada en segundos para poder mostrarla de manera legible
    echo date('(d/M/Y) - H:i:s', $t);
    
    echo "\n";
//     Numero de segundos que han pasado hasta determinada fecha desde 01/01/1970
    echo strtotime("01/03/1993");
    
    
?>