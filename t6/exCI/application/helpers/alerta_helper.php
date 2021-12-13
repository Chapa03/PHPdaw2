<?php
function info($mensaje, $uri = '') {
    $bu = base_url();
    
    //Envío del mensaje de error al controlador Info con sesion
    session_start();
    $_SESSION['_msg']['text'] = $mensaje;
    $_SESSION['_msg']['severity'] = 'success';
    $_SESSION['_msg']['uri'] = $uri;
    header("Location:{$bu}info");
}

function error($mensaje, $uri = '') {
    $bu = base_url();
    
    //Envío del mensaje de error al controlador Info con sesion
    session_start();
    $_SESSION['_msg']['text'] = $mensaje;
    $_SESSION['_msg']['severity'] = 'danger';
    $_SESSION['_msg']['uri'] = $uri;
    header("Location:{$bu}info");
}

?>