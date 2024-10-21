<?php
    require_once "Vehiculo.php";
    class Cuatro_ruedas extends Vehiculo{
        private int $numero_puertas;

        public function __construct($numero_puertas,$color,$peso){
            parent::__construct($color, $peso);
            $this->numero_puertas=$numero_puertas;
        }
        public function getNumeroPuertas(): int{
            return $this->numero_puertas;
        }
        public function setNumeroPuertas($numero_puertas){
            $this->numero_puertas=$numero_puertas;
        }
        public function repintar($color){
            $this->setColor($color);
        }
        public function aniadir_personas($peso_persona){
            $this->setPeso($this->getPeso()+$peso_persona);
        }
    }
?>