<?php
class Aficion_model extends CI_Model {
    
    function c($texto) {
        $aficion = R::findOne('aficion','texto=?',[$texto]);
        
        if ($aficion == null) {
            $aficion = R::dispense('aficion');
            $aficion -> texto = $texto;
            R::store($aficion);
        } else {
            throw new Exception("La afición {$aficion -> texto} ya existe");
        }
    }
    
    function u($idAficion, $textoAficion) {
        $aficionNueva = R::findOne('aficion', 'texto=?', [$textoAficion]);
        $aficion = R::load('aficion', $idAficion);
        
        if ($aficionNueva == null) {
            $aficion -> texto = $textoAficion;
            R::store($aficion);
        } else {
            throw new Exception("La afición con la descrición \"{$aficion -> texto}\" ya existe");
        }
    }
    
    function d($idAficion) {
        if ($idAficion != null) {
            $aficion = R::load('aficion', $idAficion);
            if($aficion -> id == 0) {
                throw new Exception ("La afición con id={$aficion -> id} no existe.");
            }
            R::trash($aficion);
        }
    }
    
    function getAll() {
        return R::findAll('aficion');
    }
    
    function getAficionById($idAficion) {
        return R::load('aficion', $idAficion);
    }
}
?>