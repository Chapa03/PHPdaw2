<?php
// Los controladores simpre van a ser clases
class Persona extends CI_Controller {
    
    /** 
     * Las funciones generarán vistas con $this -> load -> view()
     * Apuntando con la ruta al nombre del archivo .php de la
     * vista correspondiente. Por defecto .php, si necesitamos
     * abrir otra extensión, se detalla ('persona/saludo.html')
     * 
     * Al introducir la ruta localhost/daw2/t6/CI/persona/saludo
     * Se creará una instancia de Persona, que será la que genere
     * una vista  a través de saludo().
     */
    public function saludo() {
        $this -> load -> view('persona/saludo');
    }
    
    public function despedida(){
        $this -> load -> view('persona/despedida');
    }
}

?>