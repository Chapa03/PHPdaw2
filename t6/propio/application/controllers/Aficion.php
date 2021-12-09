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
            
            info("La afición $textoAficion se ha creado correctamente.", 'aficion/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'aficion/c');
        }
    }
    
    function u() {
        $idAficion = isset($_GET['idAficion']) ? $_GET['idAficion'] : null;
        $this -> load -> model('Aficion_model');
        $data['aficion'] = $this -> Aficion_model -> getAficionById($idAficion);
        frame($this, 'aficion/u', $data);
    }
    
    function uPost() {
        $textoAficion = isset($_POST['textoAficion']) ? $_POST['textoAficion'] : 'Error' ;
        $idAficion = isset($_POST['idAficion']) ? $_POST['idAficion'] : null;
        
        $this -> load -> model('Aficion_model');
        
        try {
            $this -> Aficion_model -> u($idAficion, $textoAficion);
            redirect(base_url() . 'aficion/r');
        } catch (Exception $e) {
            errorMsg($e -> getMessage(), 'aficion/r');
        }
    }
    
    function d() {
        $idAficion = isset($_POST['idAficion']) ? $_POST['idAficion'] : null;
        $this -> load -> model('Aficion_model');
        try {
            $this -> Aficion_model -> d($idAficion);
            redirect(base_url() . 'aficion/r');
        } catch (Exception $e){
            errorMsg($e -> getMessage(), 'aficion/r');
        }
    }
}
?>

























