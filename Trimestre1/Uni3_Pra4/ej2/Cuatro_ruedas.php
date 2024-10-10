<?php
    require_once "Vehiculo.php";
    class Cuatro_ruedas extends Vehiculo{
        private int $numero_puertas;

        public function __construct($numero_puertas,$color,$peso){
            parent::__construct($color, $peso);
            $this->numero_puertas=$numero_puertas;
        }
        public function repintar($color){

        }
    }
?>