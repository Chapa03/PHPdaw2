<?php
class Home extends CI_Controller {
    public function index() {
        frame($this, 'home/index');
        /**
         * Carga de la vista del index de home sin la función frame():
         * $this -> load -> view('home/index');
         */
        
    }
}
?>