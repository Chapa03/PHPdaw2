<?php
class Persona extends CI_Controller {
    function r() {
        $this -> load -> model('Persona_model');
        $data['personas'] = $this -> Persona_model -> getAll();
        
        frame($this, 'persona/r', $data);
    }
    
    function c() {
        //-------------------------------
        $this -> load -> model('Pais_model');
        $this -> load -> model('Aficion_model');
        $data['paises'] = $this -> Pais_model -> getAll();
        $data['aficiones'] = $this -> Aficion_model -> getAll();
        //-------------------------------
        
        frame($this, 'persona/c', $data);
    }
    
    function cPost() {
        $nombrePersona = isset($_POST['nombre']) ? $_POST['nombre'] : 'Ninguno';
        $idPaisNacimiento = isset($_POST['idPaisNacimiento']) ? $_POST['idPaisNacimiento'] : 'Ninguno';
        $idPaisResidencia = isset($_POST['idPaisResidencia']) ? $_POST['idPaisResidencia'] : 'Ninguno';
        $idAficionesGustos = isset($_POST['idAficionesGustos']) ? $_POST['idAficionesGustos'] : [];
        $idAficionesOdios = isset($_POST['idAficionesOdios']) ? $_POST['idAficionesOdios'] : [];
        
        $this -> load -> model('Persona_model');
        
        try {
            $this -> Persona_model -> c($nombrePersona, $idPaisNacimiento, $idPaisResidencia, $idAficionesGustos, $idAficionesOdios);
            
            info("El usuario $nombrePersona se ha registrado correctamente.", 'persona/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'persona/c');
        }
    }
    
    function u() {
        $idPersona = isset($_GET['idPersona']) ? $_GET['idPersona'] : null;
        $this -> load -> model('Persona_model');
        $this -> load -> model('Pais_model');
        $this -> load -> model('Aficion_model');
        $data['persona'] = $this -> Persona_model -> getPersonaById($idPersona);
        $data['paises'] = $this -> Pais_model -> getAll();
        $data['aficiones'] = $this -> Aficion_model -> getAll();
        frame($this, 'persona/u', $data);
    }
    
    function uPost() {
        $nombrePersona = isset($_POST['nombrePersona']) ? $_POST['nombrePersona'] : 'Error';
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
        $idPaisNacimiento = isset($_POST['idPaisNacimiento']) ? $_POST['idPaisNacimiento'] : null;
        $idPaisResidencia = isset($_POST['idPaisResidencia']) ? $_POST['idPaisResidencia'] : null;
        $idAficionesGustos = isset($_POST['idAficionesGustos']) ? $_POST['idAficionesGustos'] : [];
        $idAficionesOdios = isset($_POST['idAficionesOdios']) ? $_POST['idAficionesOdios'] : [];
        
        $this -> load -> model('Persona_model');
        
        try {
            $this -> Persona_model -> u($idPersona, $nombrePersona, $idPaisNacimiento, $idPaisResidencia, $idAficionesGustos, $idAficionesOdios);
            redirect(base_url() . 'persona/r');
        } catch (Exception $e) {
            errorMsg($e -> getMessage(), 'persona/r');
        }
    }
    
    function d() {
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
        $this -> load -> model('Persona_model');
        try {
            $this -> Persona_model -> d($idPersona);
            redirect(base_url() . 'persona/r');
        } catch (Exception $e){
            errorMsg($e -> getMessage(), 'persona/r');
        }
    }
    
}
?>







