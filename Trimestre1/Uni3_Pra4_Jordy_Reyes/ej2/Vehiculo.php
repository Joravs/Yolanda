<?php
abstract class Vehiculo{
    private ?string $color;
    private float $peso;
    public static $SALTO_DE_LINEA="<br/>";
    protected static $NUMERO_CAMBIO_COLOR=0;

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
        Vehiculo::$NUMERO_CAMBIO_COLOR++;
    }
    public function setPeso(float $peso){
        if ($peso<=2100){
            $this->peso=$peso;
        }else{
            echo "El peso no puede ser superior a 2100kg";
        }
    }
    public function circular(){
        echo "<br>El vehiculo circula";
    }
    public abstract function aniadir_personas($peso_persona);

    public function _toString(){
        return get_class()." de color ". $this->color. ", y peso ". $this->peso."kg";
    }

    public static function ver_atributo(Vehiculo $ver){
        echo "El color es: ".$ver->getColor();
        echo Vehiculo::$SALTO_DE_LINEA ."El peso es: ".$ver->getPeso()."kg";
        if($ver instanceof Cuatro_ruedas){
            echo Vehiculo::$SALTO_DE_LINEA ."El numero de puertas es: ".$ver->getNumeroPuertas();
            if($ver instanceof Coche){
                echo Vehiculo::$SALTO_DE_LINEA ."El numero de cadenas para la nieve es: ".$ver->getNumero_cadenas_nieve();
            }else{
                echo Vehiculo::$SALTO_DE_LINEA ."La longitud es: ".$ver->getLongitud();
            }
            
            echo Vehiculo::$SALTO_DE_LINEA."El color se ha cambiado ". Vehiculo::$NUMERO_CAMBIO_COLOR;
        }else{
            echo Vehiculo::$SALTO_DE_LINEA ."La cilindrada es: ".$ver->getCilindrada()."CC";
        }
    }
}
?>