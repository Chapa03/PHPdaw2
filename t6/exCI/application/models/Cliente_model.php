<?php
class Cliente_model extends CI_Model {
    
    function c($nombre, $idLocalidad) {
        $cliente = R::findOne('cliente','nombre=?',[$nombre]);
        
        if ($cliente == null) {
            $cliente = R::dispense('cliente');
            $cliente -> nombre = $nombre;
            $cliente -> localidad = R::load('localidad', $idLocalidad);
            
            R::store($cliente);
        } else {
            throw new Exception("El cliente {$cliente -> nombre} ya existe");
        }
    }
    
    function getAll() {
        return R::findAll('cliente');
    }
    
    function getPersonaById($idPersona) {
        return R::load('cliente', $idPersona);
    }
}
?>






