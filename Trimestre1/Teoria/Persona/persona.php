<?php
    class Persona{
        public ?string $nombre;
        public ?string $apellido;
        public int $edad;

        public function __construct(){
            echo "Se acaba de crear un objeto persona<br>";
        }
        public function __destruct(){
            echo "<br>Se ha eliminado el objeto persona";
        }
        public function saludar(){
            return 'Hola, soy ' . $this->nombre . ' ' . $this->apellido . ' y
            tengo ' . $this->edad . ' años ';
            }
    }
?>