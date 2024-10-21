<?php
    require_once "Vehiculo.php";
    class Dos_ruedas extends Vehiculo{
        private $cilindrada;

        public function __construct($cilindrada,$color,$peso){
            parent::__construct($color, $peso);
            $this->cilindrada = $cilindrada;
        }
        public function getCilindrada():float{
            return $this->cilindrada;
        }
        public function setCilindrada(float $cilindrada){
            $this->cilindrada=$cilindrada;
        }
        public function poner_Gasolina($litros){
            $this->setPeso($this->getPeso()+$litros);
        }

        public function _toString(){
            return $this->_toString() . ", cilindrada: " . $this->getCilindrada();
        }

        public function aniadir_personas($peso_persona){
            $this->setPeso($this->getPeso()+$peso_persona+2);        
        }
    }
?>