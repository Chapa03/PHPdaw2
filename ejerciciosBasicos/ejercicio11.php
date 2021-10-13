<?php
// Dada una cadena del estilo
// “Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono// ....... ”
// Hacer un programa que muestre los datos de forma legible:
// Ejemplo:
// $cadena = “Alberto:Garay:913334455//Ana:Garcia:914445566”

// Nombre: Alberto
// Apellido: Garay
// Teléfono: 913334455
// ============
// Nombre: Ana
// Apellido: Garcia
// Teléfono: 914445566

    $cadena = "Cristian:Chaparro:684787647//Alberto:Hlhshl:7937390873//Jorge:jkhgcdwljh:976297369328//Alejandro:ilgadakl:9837298379";
    
    $personas = explode("//", $cadena);
    
    foreach ($personas as $persona){
        $datos = explode(":", $persona);
        
        echo "Nombre:\t\t$datos[0]\n";
        echo "Fantasía:\t$datos[1]\n";
        echo "Teléfono:\t$datos[2]\n\n";
    }
    
?>