<?php
// Hacer un programa que muestre una tabla con los campos “#”, “carácter”
// y “Cód. URL” que muestre para los caracteres ASCII del 0 al 255 su
// representación gráfica. PISTA: investigar función chr() ) y urlencode()

    $buffer = '<table border="1">
                <tr>
                    <th>#</th><th>Carácter</th><th>Cód. URL</th>
                </tr>';
    
    for ($i = 0; $i <= 255; $i++){
        $buffer .= "<tr>
                        <td>$i</td><td>" . chr($i) . "</td><td>" . urlencode(chr($i)) . "</td>
                    </tr>";
    }
    
    $buffer .= '</table>';
    
    echo $buffer;
?>