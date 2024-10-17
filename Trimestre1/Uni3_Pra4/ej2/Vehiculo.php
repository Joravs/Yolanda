<?php
abstract class Vehiculo{
    private ?string $color;
    private float $peso;

    public function __construct(?string $color, float $peso){
        $this->color=$color;
        $this->peso=$peso;
    }
    public function getColor():?string{
        return $this->color;
    }
    public function getPeso():float{
        return $this->peso;
    }
    public function setColor(?string $color){
        $this->color=$color;
    }
    public function setPeso(float $peso){
        $this->peso=$peso;
    }
    public function circular(){
        echo "<br>El vehiculo circula";
    }
    public abstract function aniadir_personas($peso_persona);

    public function _toString(){
        return get_class()." de color ". $this->color. ", y peso ". $this->peso."kg";
    }

    public function ver_atributo(){
        
    }
}
?>