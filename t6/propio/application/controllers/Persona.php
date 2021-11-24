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
        $data['paises'] = $this -> Pais_model -> getAll();
        //-------------------------------
        
        frame($this, 'persona/c', $data);
    }
    
    function cPost() {
        $nombrePersona = isset($_POST['nombre']) ? $_POST['nombre'] : 'Ninguno';
        $idPais = isset($_POST['idPais']) ? $_POST['idPais'] : 'Ninguno';
        
        $this -> load -> model('Persona_model');
        
        try {
            $this -> Persona_model -> c($nombrePersona, $idPais);
            
            info("El usuario $nombrePersona se ha registrado correctamente.", 'persona/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'persona/c');
        }
    }
}
?>