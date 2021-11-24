<?php
class Pais extends CI_Controller {
    //Leer países
    function r() {
        //Cargamos el modelo que nos devolverá la
        //lista de paises
        $this -> load -> model('Pais_model');
        
        //Lista de paises recuperada desde el modelo
        $data['paises'] = $this -> Pais_model -> getAll();
        
        //Se carga la vista a través de la función frame()
        //Pasándole la lista de países
        frame($this, 'pais/r', $data);
    }
    
    //Crear paises GET
    function c() {
        frame($this, 'pais/c');
    }
    
    //Crear paises POST
    function cPost() {
        $nombrePais = isset($_POST['nombre']) ? $_POST['nombre'] : 'ninguno';
        //Cargar el modelo
        $this -> load -> model('Pais_model');
        
        //Crear un nuevo país controlando la excepción de que 
        //ya haya un país con el mismo nombre
        try {
            //Llamar al metodo c() del modelo para crear un
            //país a partir del nombre que recibimos vía POST
            $this -> Pais_model -> c($nombrePais);
            
            info("El país $nombrePais se ha creado correctamente.", 'pais/r');
        } catch (Exception $e){
            //Código movido al alerta_helper.pho
            error($e -> getMessage(), 'pais/c');
        }
    }
}
?>