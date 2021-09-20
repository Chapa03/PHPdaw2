<?php
// Los arrays pueden mezclar tipos de datos
// No hace falta declararlos

// Se pueden inicializar con los datos uno por uno en su posición o todos seguidos dentro de un
// corchete y separados por comas
//     $a[0] = 10;
//     $a[1] = 20;
//     $a[1] = 20;
    
    $a = [1, 2, 3, 4, 5, 6, 7, 8];
    
//     La funcion sizeof($var) nos devuelve la longitud del array (como .length en java)
    for ($i = 0; $i < sizeof($a); $i++) {
        echo $a[$i] . ', ';
    }
?>