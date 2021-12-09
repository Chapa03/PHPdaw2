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

    //Modificar (update) paises
    function u() {
        $idPais = isset($_GET['idPais']) ? $_GET['idPais'] : null;
        $this -> load -> model('Pais_model');
        $data['pais'] = $this -> Pais_model -> getPaisById($idPais);
        frame($this, 'pais/u', $data);
    }
    
    function uPost(){
        $nombre = isset($_POST['nombrePais']) ? $_POST['nombrePais'] : 'Error';
        $idPais = isset($_POST['idPais']) ? $_POST['idPais'] : null;
        
        $this -> load -> model('Pais_model');
        
        try {
            $this -> Pais_model -> u($idPais, $nombre);
            redirect(base_url() . 'pais/r');
        } catch (Exception $e) {
            errorMsg($e -> getMessage(), 'pais/r');
        }
        
    }
    
    //Borrar (delete) países
    function d() {
        $idPais = isset($_POST['idPais']) ? $_POST['idPais'] : null;
        $this -> load -> model('Pais_model');
        try {
            $this -> Pais_model -> d($idPais); 
            redirect(base_url() . 'pais/r');
        } catch (Exception $e){
            errorMsg($e -> getMessage(), 'pais/r');
        }
    }
}
?>







