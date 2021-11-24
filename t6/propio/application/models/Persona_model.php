<?php
class Persona_model extends CI_Model {
    
    function c($nombre, $idPais) {
        $persona = R::findOne('persona','nombre=?',[$nombre]);
        
        if ($persona == null) {
            $persona = R::dispense('persona');
            $persona -> nombre = $nombre;
            $persona -> paisNacimiento = R::load('pais', $idPais);
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