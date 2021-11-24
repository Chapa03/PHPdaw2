<?php
class Aficion_model extends CI_Model {
    
    function c($texto) {
        $aficion = R::findOne('aficion','nombre=?',[$texto]);
        
        if ($aficion == null) {
            $aficion = R::dispense('aficion');
            $aficion -> texto = $texto;
            R::store($aficion);
        } else {
            throw new Exception("{$aficion -> texto} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('aficion');
    }
}
?>