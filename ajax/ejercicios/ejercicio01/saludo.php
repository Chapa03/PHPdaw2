<?php 
    $esAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;

    if ($esAjax){
        
    }
    
    $tamanio = rand(1, 3);
    
    function saludo($nombre){
        $num = rand(1,3);
        $saludo = "";
        switch ($num) {
            case 1:
                $saludo = "¡Hola $nombre!";
                break;
            case 2:
                $saludo = "¡Qué pasa $nombre!";
                break;
            case 3:
                $saludo = "¿Qué tal estás, $nombre?";
                break;
        }
        return $saludo;
    }
?>

<h<?= $tamanio?>><?= saludo($_GET['nombre'])?></h<?= $tamanio?>>