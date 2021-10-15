<?php
    require_once 'SerVivo.php';
    class Persona implements SerVivo{
        //ATRIBUTOS
        private $nombre;
        private $edad;
        
        //METODOS DE LA INTERFACE
        public function hablar(){
            echo 'BLABLABLA';
        }
        
        //CONSTRUCTORES
        //en php no se puede sobrecargar el constructore
        //podemos pasarle un parámetro por defecto, para el caso
        //en que al no pasarle ese atributo, que lo genere
        public function __construct($edad=18){
            $this->edad = $edad;
        }
        
        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }
    
        /**
         * @return mixed
         */
        public function getEdad()
        {
            return $this->edad;
        }
    
        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
    
        /**
         * @param mixed $edad
         */
        public function setEdad($edad)
        {
            $this->edad = $edad;
        }
    
        //METODOS
        public function dimeNombre() {
            echo "Mi nombre es: {$this -> nombre} \n";
        }
        
        public function __toString(){
            return "{this -> nombre} [{$this -> edad}]";
        }
        
        
    }

?>