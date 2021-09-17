<?php

    //No hay que indicar el tipo de dato, ya que para cada variable
    //estará determinada por su contenido. El tipo de dato es sobreescribible
    $numeroEntero = 3;
    $numeroDecimal = 1.5;
    $cadena = "Hola mundo";
    $booleana = true;
    
    //Hay dos formas de definir una constante
    const pi = 3.141592;
    define ( 'pi2' , 3.141592 );
    
    //No es posible hacer una division entera en php, habria que castear al entero
    //de la variable, truncar o redondear la variable
    echo "Division de 7/3: " . 7 / 3;
    echo "\nDivision casteada a entero de 7/3: " . (int) (7 / 3);
    echo "\nDivision redondeada a entero de 7/3: " . round(7 / 3);
    
    //En PHP se pueden comparar cadenas directamente
    echo 'a' > 'p' ? "\nSi, a es mayor que p" : "\nNo, a no es mayor que p";
    
    //En PHP cualquier numero entero es true, a excepcion de el 0, que es false
    //Por eso, la condición se cumple hasta que $numeroEntero vale 0
    while ($numeroEntero) {
        echo "\n" . $numeroEntero--;
    }
?>