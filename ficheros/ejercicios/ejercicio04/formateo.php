<?php 
session_start();

$texto = file_get_contents('../ejercicio01/articulo.txt');
$color = isset($_GET['color']) ? $_GET['color'] : 'black';
$palabra = isset($_GET['palabra']) ? $_GET['palabra'] : null;
$negrita = isset($_GET['negrita']) ? true : false;
$subrayar = isset($_GET['subrayar']) ? true : false;
$tAux = '';
$_SESSION['textoF'] = '';

if ($palabra != null) {
    
    $ena = ($negrita) ? '<b>' : '';
    $enc = ($negrita) ? '</b>' : '';
    $esa = ($subrayar) ? '<u>' : '';
    $esc = ($subrayar) ? '</u>' : '';
    $eca = '<font style="color:' . $color . '">';
    $ecc = '</font>';
    
    $numCoinc = substr_count(strtolower($texto), strtolower($palabra));
    
    for ($i = 0; $i < $numCoinc; $i++){
        //Posicion de la coincidencia de la busqueda
        $coinc = strpos(strtolower($texto), strtolower($palabra));
        if($coinc){
            $tAux .= substr($texto, 0, $coinc) . $eca . $ena . $esa . substr($texto, $coinc, strlen($palabra)) . $esc . $enc . $ecc;
            //Recorte de la parte restante del texto a partir
            //de la palabra o fragmento formateado
            $texto = substr($texto, ($coinc + strlen($palabra)), (strlen($texto)));
        }
    }
    //Almacenar en la variable de sesion el resultado con el restante del texto
    $_SESSION['textoF'] = $tAux . substr($texto, 0, strlen($tAux));
} else {
    $_SESSION['textoF'] = null;
}

header('location:index.php');
?>