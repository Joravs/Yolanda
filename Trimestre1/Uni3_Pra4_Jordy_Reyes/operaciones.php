<?php
    class Operaciones{
        private int $num1;
        private int $num2;
        
        function __construct($num1,$num2){
            $this->num1=$num1;
            $this->num2=$num2;
        }

        function sumar(){
            return $this->num1+$this->num2;
        }
        function restar(){
            return $this->num1-$this->num2;
        }
        function multiplicar(){
            return $this->num1*$this->num2;
        }
        function dividir(){
            return $this->num1/$this->num2;
        }        
    }

    $num1=50;
    $num2=20;

    $operar=new Operaciones($num1,$num2);

    echo "Suma: ".$operar->sumar()."<br>";
    echo "Resta: ".$operar->restar()."<br>";
    echo "Multiplicacion: ".$operar->multiplicar()."<br>";
    echo "Division: ".$operar->dividir()."<br>";
?>