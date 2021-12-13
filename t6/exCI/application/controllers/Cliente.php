<?php
class Cliente extends CI_Controller {
    function r() {
        $this -> load -> model('Cliente_model');
        $data['clientes'] = $this -> Cliente_model -> getAll();
        
        frame($this, 'cliente/r', $data);
    }
    
    function c() {
        //-------------------------------
        $this -> load -> model('Localidad_model');
        $data['localidades'] = $this -> Localidad_model -> getAll();
        //-------------------------------
        
        frame($this, 'cliente/c', $data);
    }
    
    function cPost() {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Ninguno';
        $idLocalidad = isset($_POST['idLocalidad']) ? $_POST['idLocalidad'] : 'Ninguna';
        
        $this -> load -> model('Cliente_model');
        
        try {
            $this -> Cliente_model -> c($nombre, $idLocalidad);
            
            info("El usuario $nombre se ha registrado correctamente.", 'cliente/r');
        } catch (Exception $e){
            error($e -> getMessage(), 'cliente/c');
        }
    }
    
}
?>







