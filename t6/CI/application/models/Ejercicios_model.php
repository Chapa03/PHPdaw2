<?php
class Ejercicios_model extends CI_Model {
    public function getLinks() {
        return R::findAll('enlaces');
    }
}
?>