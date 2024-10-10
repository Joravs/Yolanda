<?php
class Vehiculo{
    private ?string $color;
    private float $peso;

    public function __construct(?string $color, float $peso){
        $this->color=$color;
        $this->peso=$peso;
    }
    public function circular(){
        echo "<br>El vehiculo circula";
    }
    public function aniadir_personas($peso_persona){
        echo "<br>Se sube una persona al vehiculo";
        $this->peso+=$peso_persona;
    }

    public function _toString(){
        return "Vehiculo de color ". $this->color. ", y peso ". $this->peso."kg";
    }
}
?>