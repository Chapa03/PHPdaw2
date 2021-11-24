<?php
class Persona_model extends CI_Model {
    
    function c($nombre, $idPais, $idAficionesGustos, $idAficionesOdios) {
        $persona = R::findOne('persona','nombre=?',[$nombre]);
        
        if ($persona == null) {
            $persona = R::dispense('persona');
            $persona -> nombre = $nombre;
            $persona -> paisNacimiento = R::load('pais', $idPais);
            
            foreach ($idAficionesGustos as $idAficionGusto) {
                $aficionGusta = R::load('aficion', $idAficionGusto);
                $gusta = R::dispense('gusta');
                $gusta -> aficion = $aficionGusta;
                $gusta -> persona = $persona;
                R::store($gusta);
            }
            
            foreach ($idAficionesOdios as $idAficionOdio) {
                $aficionOdia = R::load('aficion', $idAficionOdio);
                $odia = R::dispense('odia');
                $odia -> aficion = $aficionOdia;
                $odia -> persona = $persona;
                R::store($odia);
            }
            
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