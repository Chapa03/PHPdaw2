<?php
require_once '../../rb.php';

function conectar() {
    //CONEXION --------------------------------------------------
    // configurar la conexion con la base de datos: IP, Nombre bd, Nombre usuario, pass
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar() {
    //DESCONEXION -----------------------------------------------
    //Desconectar de la base de datos para acabar con todas las operaciones
    R::close();
}

conectar();
echo 'conectado!';

//CREACION ------------------------------------------------------
//crear un objeto persistente de la clase persona (aunque no exista previamente)
//Este objeto por ahora está en la RAM y está vacío
$p = R::dispense('persona');

//AÑADIR ATRIBUTOS ----------------------------------------------
//Añadir atributos al objeto (por defecto publicos)
//Si en nuevas ejecuciones se añaden más atributos
//RedBeans los añadirá a la tabla de la base de datos sea cual sea el tipo de dato
$p -> nombre = 'Cristian';
$p -> apellido = 'Chaparro';
$p -> telefono = 917638929;
$p -> nacimiento = '1993-03-01';
$p -> adulto = true;

//ALMACENAR EL OBJETO EN BBDD -----------------------------------
//Guardar el objeto en la base de datos pasándole su referencia
R::store($p);

//RECUPERAR UN BEAN/OBJETO / CONSULTA ---------------------------
//POR ID                                                ---------
//Recuperamos el objeto a través de su ID
$p2 = R::load('persona', 1);


//Mostrar los atributos del objeto
echo $p2 -> nombre . PHP_EOL;
echo $p2 -> nacimiento . PHP_EOL;

//Cambiar o añadir los datos de un atributo
$p2 -> telefono = 976666555;
$p2 -> profesion = 'Programador';

//Volvemos a almacenar el objeto con los cambios
R::store($p2);

//POR CLASE (tabla)                                     ---------
//Array con una posición por cada persona en la tabla
$personas = R::findAll('persona');

//Vamos recorriendo cada una de las personas (arrays asociativos)
//del array de personas
foreach ($personas as $persona) {
    //podemos acceder a los atributos del array como la 
    //posicion del array asociativo
    echo 'NOMBRE: ' . $persona['nombre'] . PHP_EOL;
    //Y podemos acceder de la manera normal para objetos
    echo 'APELLIDO: ' . $persona -> apellido . PHP_EOL;
}

//POR CONSULTA CON 'WHERE'                              --------
$nombre = 'Juan';
$apellido = 'García';
//Lo siguiente es susceptible a inyecciones de SQL:
// $apellidadosGarcia = R::find('persona', 'apellido="García"');

//Protegido contra inyecciones de SQL con consultas preparadas:
// $apellidadosGarcia = R::find('persona', "nombre=? and apellido=?",[$nombre, $apellido]);
//Anterior: rellena la consulta con las posiciones del array
//Siguiente: Rellena la consulta con el array asociativo
$apellidadosGarcia = R::find('persona', "nombre=:nom and apellido=:ape",['nom'=>$nombre, 'ape'=>$apellido]);

foreach ($apellidadosGarcia as $persona) {
    echo 'NOMBRE: ' . $persona['nombre'] . PHP_EOL;
    echo 'TELEFONO: ' . $persona['telefono'] . PHP_EOL;
}

//POR CONSULTA SQL GENÉRICO                             --------
//Podemos buscar en la base de datos con cuaquier consulta SQL
$sql = <<<SQL
SELECT count(*) as NumPers
FROM persona
WHERE apellido is not null
SQL;

//         //getAll almacena todos los resultados de la consulta
//         $resultado = R::getAll($sql);
        
//         //Recorremos el resultado
//         foreach ($filas as $fila) {
//             echo $fila -> NumPers . PHP_EOL;
//         }

//En caso de saber que sólo vamos a obtener una celda
$resultado = R::getCell($sql);
echo $resultado . PHP_EOL;


//ELIMINAR UN BEAN ---------------------------------------------
//POR ID                                                --------
//Lo recuperamos de la base de datos con su ID
$p3 = R::load('persona', 2);
//Trash lo borra completamente
R::trash($p3);


desconectar();
echo 'desconectado!';
?>








