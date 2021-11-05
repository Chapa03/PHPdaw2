<?php
require_once '../../rb.php';

function conectar() {
    // configurar la conexion con la base de datos: IP, Nombre bd, Nombre usuario, pass
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar() {
    //Desconectar de la base de datos para acabar con todas las operaciones
    R::close();
}

conectar();
echo 'conectado!';

//crear un objeto persistente de la clase persona (aunque no exista previamente)
//Este objeto por ahora está en la RAM y está vacío
$p = R::dispense('Persona');

//Añadir atributos al objeto (por defecto publicos)
//Si en nuevas eejecuciones se añaden más atributos
//RedBeans los añadirá a la tabla de la base de datos
$p -> nombre = 'Cristian';
$p -> apellido = 'Chaparro';

//Guardar el objeto en la base de datos pasándole su referencia
R::store($p);


desconectar();
echo 'desconectado!';
?>