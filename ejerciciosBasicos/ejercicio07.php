<?php
// Dada una línea de texto y un número entre 1 y 6, generar un
// código HTML que contenga dicha línea entre tags <hX> crecientes 
// desde 1 hasta n y luego decreciendo hasta 1 de nuevo.
    echo "Introduce (1-6): ";
    fscanf(STDIN, '%d\n', $n);
    
    echo "Introduce el texto que se repetirá: ";
    fscanf(STDIN, '%s\n', $txt);
    
    for ($i = 1; $i <= $n; $i++) {
        echo "<h$i>$txt</h$i>\n";    
    }
    for ($i = $n - 1; $i > 0; $i--) {
        echo "<h$i>$txt</h$i>\n";
    }
?>