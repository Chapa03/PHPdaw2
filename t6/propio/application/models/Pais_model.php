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
    
    function u($idPais, $nombre) {
        $paisNuevo = R::findOne('pais','nombre=?',[$nombre]);
        $pais = R::load('pais', $idPais);
        
        if ($paisNuevo == null) {
            $pais -> nombre = $nombre;
            R::store($pais);
        } else {
            throw new Exception("El país {$paisNuevo -> nombre} ya existe");
        }
    }
    
    function d($idPais) {
        if ($idPais != null) {
            $pais = R::load('pais', $idPais);
            if($pais -> id == 0) {
                throw new Exception ("El país con id={$pais -> id} no existe.");
            }
            R::trash($pais);
        }
    }
    
    
    function getAll() {
        return R::findAll('pais');
    }
    
    function getPaisById($id) {
        return R::load('pais', $id);
    }
}
?>