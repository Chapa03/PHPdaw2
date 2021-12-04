<?php
class Pais_model extends CI_Model {
    //Funcion para crear un nuevo país a partir de un nombre
    function c($nombre) {
        //Control - Si el nombre de país que llega, está
        //en la bbdd, manda un mensaje de error
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        
        if ($pais == null) {
            $pais = R::dispense('pais');
            $pais -> nombre = $nombre;
            R::store($pais);
        } else {
            throw new Exception("El país {$pais -> nombre} ya existe");
        }
    }
    
    function d() {
        
    }
    
    function getAll() {
        return R::findAll('pais');
    }
}
?>