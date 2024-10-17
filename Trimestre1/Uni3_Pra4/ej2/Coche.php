<?php
    require_once "Cuatro_ruedas.php";
    class Coche extends Cuatro_ruedas{
        private int $numero_cadenas_nieve;

        public function __construct($numero_cadenas_nieve,$numero_puertas,$color,$peso){
            parent::__construct($numero_puertas,$color,$peso);
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        }
        public function getNumero_cadenas_nieve(){
            return $this->numero_cadenas_nieve;
        }
        public function setNumero_cadenas_nieve($numero_cadenas_nieve){
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        }
        public function aniadir_cadenas_nieve($num){

        }
        public function quitar_cadenas_nieve($num){

        }

    }
?>