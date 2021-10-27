<?php
$nombre = (isset($_GET['nombre'])) ? $_GET['nombre'] : null;
$contenido = (isset($_GET['contenido'])) ? $_GET['contenido'] : null;
$nivel = (isset($_GET['nivel'])) ? $_GET['nivel'] : null;
$rutaBase = pathinfo($_SERVER['REQUEST_URI'])['dirname'];

// A la ruta base se le concatena el directorio objetivo
// setcookie($nombre, $contenido, 0, $rutaBase.'/');

if (($nombre != null) && ($contenido != null)) {
    switch ($nivel){
        case 0:
            setcookie($nombre, $contenido, 0, $rutaBase.'/');
            header('location:cero.php');
            break;
        case 1:
            setcookie($nombre, $contenido, 0, $rutaBase.'/nivel1/');
            header('location:cero.php');
            break;
        case 2:
            setcookie($nombre, $contenido, 0, $rutaBase.'/nivel1/nivel2/');
            header('location:cero.php');
            break;
    }
} else {
    echo 'Los valores Nombre y Contenido no pueden estar vacíos';
}

?>


