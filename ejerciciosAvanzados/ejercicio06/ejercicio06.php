<?php
// Hacer un programa que muestre una tabla con los campos “#”, “carácter” 
// y “Cód. URL” que muestre para los caracteres ASCII del 0 al 255 su 
// representación gráfica. PISTA: investigar función chr() ) y urlencode()

    echo <<<HTML
        <table border="1">
            <tr>
                <th>#</th><th>Carácter</th><th>Cód. URL</th>
            </tr>
    HTML;

    for ($i = 0; $i <= 255; $i++){
        $caracter = chr($i);
        $codigo = urlencode(chr($i));
        
        echo <<<HTML
            <tr>
                <td>$i</td><td>$caracter</td><td>$codigo</td>
            </tr>
        HTML;
    }
    
    echo "</table>";
?>
