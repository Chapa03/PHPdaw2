<?php
class Localidad extends CI_Controller {
    function r() {
        $this -> load -> model('Localidad_model');
        
        $data['localidades'] = $this -> Localidad_model -> getAll();
        
        frame($this, 'localidad/r', $data);
    }
    
    function c() {
        frame($this, 'localidad/c');
    }
    
    function cPost() {
        $nombreLocalidad = isset($_POST['nombre']) ? $_POST['nombre'] : 'ninguno';
        $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : 'ninguna';
        $this -> load -> model('Localidad_model');
        
        try {
            $this -> Localidad_model -> c($nombreLocalidad, $provincia);
            
            info("La localidad $nombreLocalidad se ha creado correctamente.", 'localidad/r');
        } catch (Exception $e){
            //Código movido al alerta_helper.php
            error($e -> getMessage(), 'localidad/c');
        }
    }

}
?>







