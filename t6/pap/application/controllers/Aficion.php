<?php
class Aficion extends CI_Controller {
    function r() {
        $this -> load -> model('Aficion_model');
        $data['aficiones'] = $this -> Aficion_model -> getAll();
        
        frame($this, 'aficion/r', $data);
    }
    
    function c() {
        frame($this, 'aficion/c');
    }
    
    function cPost() {
        $textoAficion = isset($_POST['texto']) ? $_POST['texto'] : 'ninguna';
        $this -> load -> model('Aficion_model');
        
        try {
            $this -> Aficion_model -> c($textoAficion);
            
            info("$textoAficion se ha creado correctamente.", 'aficion/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'aficion/c');
        }
    }
}
?>