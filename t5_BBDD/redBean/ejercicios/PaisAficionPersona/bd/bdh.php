<?php
require_once 'rb.php';

function conectar() {
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar() {
    R::close();
}

?>