<?php
class Ejercicios extends CI_Controller {
    //Index es la función que ejecuta el controlador por defecto
    public function ej01() {
        $this -> load -> view('ejercicios/ej01/index');
    }
    
    public function ej02() {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'John Doe';
        $datos['nombre'] = $nombre;
        $this -> load -> view('ejercicios/ej02/index', $datos);
    }
    
    public function ej03() {
//         //Custom helper en application>helpers
//         $this -> load -> helper('ejercicios');
        $this -> load -> model('Ejercicios_model');
        $d['links'] = $this -> Ejercicios_model -> getLinks();
        $this -> load -> view('ejercicios/ej03/index', $d);
    }
    
}