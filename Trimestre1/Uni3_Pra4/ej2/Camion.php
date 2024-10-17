<?php
    require_once "Cuatro_ruedas.php";
    class Camion extends Cuatro_ruedas{
        private float $longitud;

        public function __construct($longitud,$numero_puertas,$color,$peso){
            parent::__construct($numero_puertas,$color,$peso);
            $this->longitud = $longitud;
        }
        public function getLongitud():float{
            return $this->longitud;
        }
        public function setLongitud($longitud){
            $this->longitud = $longitud;
        }
        public function aniadir_remolque($longitud_remolque){

        }
    }
?>