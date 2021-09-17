<?php
//     Podemos establecer un parametro por defecto para una funcion
//     en caso de que llamasemos a la funcion sin argumentos, tomaria el valor por defecto
    function mayor($edad = 18) {
        return $edad >= 18 ? "MAYOR\n" : "MENOR\n";
    }
    
    echo mayor(2);
    echo mayor();
    
?>

