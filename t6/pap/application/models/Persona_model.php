<?php
class Persona_model extends CI_Model {
    
    function c($nombre) {
        $persona = R::findOne('persona','nombre=?',[$nombre]);
        
        if ($persona == null) {
            $persona = R::dispense('persona');
            $persona -> nombre = $nombre;
            R::store($persona);
        } else {
            throw new Exception("El usuario {$persona -> nombre} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('persona');
    }
}
?>