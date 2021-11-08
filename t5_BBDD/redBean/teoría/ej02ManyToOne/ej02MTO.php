<?php
require_once '../../rb.php';

function conectar() {
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar() {
    R::close();
}

conectar();

// Composición
// MANY TO ONE / MTO -------------------------------------------

//CREACIÓN DESDE EL LADO 'ONE'                  ----------------

//CREAR COLEGIO                                         --------
$c = R::dispense('colegio');
$c -> nombre = 'IES Rey Fernando VI';
R::store($c);

//CREAR ALUMNO                                          --------
$a = R::dispense('alumno');
$a -> nombre = 'Pepe';

//CREAR RELACIÓN                                        --------
//Asignar la relacion entre el alumno y el colegio
//(Muchos alumnos son contenidos en el colegio - MTO)
//Se hace antes del store del alumno
$a -> colegio = $c;
R::store($a);




//CREACIÓN DESDE EL LADO 'MANY'                 ----------------
//CREAR ALUMNO                                          --------
$a1 = R::dispense('alumno');
$a1 -> nombre = 'Juan';
R::store($a1);

//CREAR COLEGIO                                         --------
$c = R::dispense('colegio');
$c -> nombre = 'IES Rey Fernando VI';

//CREAR RELACIÓN                                        --------
//Añadir alumno a mi propia lista de alumnos del colegio
$c -> ownAlumnoList[] = $a1;
//array_push($c->ownAlumnoList, $a1); - igual que la anterior

R::store($c);


desconectar();

?>









