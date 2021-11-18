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
        $datos = [
            'links' => [
                'Bing' => 'http://www.bing.com',
                'Google' => 'http://www.google.es',
                'Yahoo!' => 'http://www.yahoo.com'
            ]
        ];
        $this -> load -> view('ejercicios/ej03/index', $datos);
    }
    
}