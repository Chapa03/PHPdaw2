<?php
class Localidad_model extends CI_Model {
    function c($nombre, $provincia) {
        $localidad = R::findOne('localidad','nombre=?',[$nombre]);
        
        if ($localidad == null) {
            $localidad = R::dispense('localidad');
            $localidad -> nombre = $nombre;
            $localidad -> provincia = $provincia;
            R::store($localidad);
        } else {
            throw new Exception("La localidad {$localidad -> nombre} ya existe");
        }
    }
    
    
    function getAll() {
        return R::findAll('localidad');
    }
    
    function getLocalidadById($id) {
        return R::load('localidad', $id);
    }
}
?>