<?php
    require_once "Vehiculo.php";
    class Dos_ruedas extends Vehiculo{
        private $cilindrada;

        public function __construct($cilindrada,$color,$peso){
            parent::__construct($color, $peso);
            $this->cilindrada = $cilindrada;
        }
        public function poner_Gasolina($litros){
            parent::setPeso(parent::getPeso()+$litros);
        }

        
    }
?>