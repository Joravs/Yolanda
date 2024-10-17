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

    public function ver_atributo(Vehiculo $ver){
        echo "Color: ".$ver->getColor();
        echo "<br>Peso: ".$ver->getPeso()."kg";
        if($ver instanceof Cuatro_ruedas){
            echo "<br>Numero de Puertas: ".$ver->getNumeroPuertas();
            if($ver instanceof Coche){
                echo "<br>Numero de Cadenas para la nieve: ".$ver->getNumero_cadenas_nieve();
            }else{
                echo "<br>Longitud: ".$ver->getLongitud();
            }
        }else{
            echo "<br>Cilindrada: ".$ver->getCilindrada()."CC";
        }
    }
}
?>