<?php
class Persona_model extends CI_Model {
    
    function c($nombre, $idPaisNacimiento, $idPaisResidencia, $idAficionesGustos, $idAficionesOdios) {
        $persona = R::findOne('persona','nombre=?',[$nombre]);
        
        if ($persona == null) {
            $persona = R::dispense('persona');
            $persona -> nombre = $nombre;
            $persona -> paisNacimiento = R::load('pais', $idPaisNacimiento);
            $persona -> paisResidencia = R::load('pais', $idPaisResidencia);
            
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
    
    function d($idPersona) {
        if ($idPersona != null) {
            $persona = R::load('persona', $idPersona);
            if($persona -> id == 0) {
                throw new Exception ("La persona con id={$persona -> id} no existe.");
            }
            R::trash($persona);
        }
    }
    
    function u($idPersona, $nombrePersona, $idPaisNacimiento, $idPaisResidencia, $idAficionesGustos, $idAficionesOdios) {
        $persona = R::load('persona', $idPersona);
        
        $persona -> nombre = $nombrePersona;
        $persona -> paisNacimiento = R::load('pais', $idPaisNacimiento);
        $persona -> paisResidencia = R::load('pais', $idPaisResidencia);
        //$persona -> paisResidencia_id = $idPaisResidencia;
        
        $idsComunes = [];
        
        foreach ($persona -> ownGustaList as $gusta) {
            if (in_array($gusta -> aficion_id, $idAficionesGustos)) {
                $idsComunes[] = $gusta -> aficion_id;
            }
            else {
                R::store($persona);
                R::trash($gusta);
            }
        }
        
        foreach (array_diff($idAficionesGustos, $idsComunes) as $idAficion) {
            $aficion = R::load('aficion', $idAficion);
            $gusta = R::dispense('gusta');
            $gusta -> persona = $persona;
            $gusta -> aficion = $aficion;
            R::store($persona);
            R::store($gusta);
        }
        
        $idsComunes = [];
        
        foreach ($persona -> ownOdiaList as $odia) {
            if (in_array($odia -> aficion_id, $idAficionesOdios)) {
                $idsComunes[] = $odia -> aficion_id;
            }
            else {
                R::store($persona);
                R::trash($odia);
            }
        }
        
        foreach (array_diff($idAficionesOdios, $idsComunes) as $idAficion) {
            $aficion = R::load('aficion', $idAficion);
            $odia = R::dispense('odia');
            $odia -> persona = $persona;
            $odia -> aficion = $aficion;
            R::store($persona);
            R::store($odia);
        }
        
        R::store($persona);
        
    }
    
    function getAll() {
        return R::findAll('persona');
    }
    
    function getPersonaById($idPersona) {
        return R::load('persona', $idPersona);
    }
}
?>






