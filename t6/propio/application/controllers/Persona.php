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
        $idPais = isset($_POST['idPais']) ? $_POST['idPais'] : 'Ninguno';
        $idAficionesGustos = isset($_POST['idAficionesGustos']) ? $_POST['idAficionesGustos'] : [];
        $idAficionesOdios = isset($_POST['idAficionesOdios']) ? $_POST['idAficionesOdios'] : [];
        
        $this -> load -> model('Persona_model');
        
        try {
            $this -> Persona_model -> c($nombrePersona, $idPais, $idAficionesGustos, $idAficionesOdios);
            
            info("El usuario $nombrePersona se ha registrado correctamente.", 'persona/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'persona/c');
        }
    }
}
?>