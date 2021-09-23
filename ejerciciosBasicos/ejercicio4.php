<?php
// Obtener por teclado infinitos números hasta introducir el 0. 
// Una vez hecho eso, pedir al usuario qué operación realizar, 
// pudiendo ser ésta “sumar” o “multiplicar”, mostrándose a continuación 
// la suma o multiplicación (respectivamente) de los datos previamente introducidos, 
// y en caso de que se introduzca una operación no válida, un mensaje de error.
    
    $n = 0;
    $suma = 0;
    $producto = 1;    
    $operacion = "";
    $prueba = 0;
    
    echo "Introduce número: ";
    fscanf(STDIN, "%d\n", $n);
    
    $suma += $n;
    $producto *= $n;
    
    while ($n != 0) {
        echo "Introduce número: ";
        fscanf(STDIN, "%d\n", $n);
        if($n != 0){
            $suma += $n;
            $producto *= $n;
        }
    }
    
    echo "Qué operación quieres hacer (sumar/multiplicar)? ";
    fscanf(STDIN, "%s\n", $operacion);
    
    while ($prueba == 0){
        switch ($operacion){
            case "sumar":
                echo "La suma de todos los números es $suma";
                $prueba = 1;
                break;
            case "multiplicar";
                echo "La multiplicación de todos los números es $producto";
                $prueba = 1;
                break;
            default:
                echo "Operación no reconocida.\n";
                echo "Qué operación quieres hacer (sumar/multiplicar)? ";
                fscanf(STDIN, "%s\n", $operacion);
        }
    }
?>