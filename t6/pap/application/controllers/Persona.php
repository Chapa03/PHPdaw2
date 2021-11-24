<?php
class Persona extends CI_Controller {
    function r() {
        $this -> load -> model('Persona_model');
        $data['personas'] = $this -> Persona_model -> getAll();
        
        frame($this, 'persona/r', $data);
    }
    
    function c() {
        frame($this, 'persona/c');
    }
    
    function cPost() {
        $nombrePersona = isset($_POST['nombre']) ? $_POST['nombre'] : 'ninguno';
        $this -> load -> model('Persona_model');
        
        try {
            $this -> Persona_model -> c($nombrePersona);
            
            info("El usuario $nombrePersona se ha registrado correctamente.", 'persona/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'persona/c');
        }
    }
}
?>