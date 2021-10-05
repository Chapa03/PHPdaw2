<h1>Contador de visitas</h1>

<?php
    $condicion = !isset($_COOKIE['n']);
    
    if ($condicion) {
        setcookie('n', 2);
        echo '<h1>Bienvenido</h1>';
        echo 'A partir de ahora me acordaré de tí';
        
    } else {
        $numVeces = $_COOKIE['n'];
        setcookie('n', $numVeces + 1);
        echo "Hola, es la vez número $numVeces que visitas esta página";
    }
?>