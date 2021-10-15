<?php
    require_once 'Persona.php';
    class Musico extends Persona {
        public function cantar() {
            echo 'LALALA';
        }
        
        public function hablar() {
            echo 'LOLOLO';
        }
    }

?>
