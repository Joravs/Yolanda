<?php
    /**  Funcion de cadenas
       * explode($token,$cad) ; implode($token,$array) ; strtolower,strtoupper
    
    *Pasamos una cadena con un separador ";" y lo añadimos a un array en minusculas.
    *Luego este array lo pasaremos a una cadena con strtoupper y un separador diferente "/"*/
    echo "<h1>Cadenas</h1>";
    function cadenas5php($cadena){
        $token=';';
        $exp=explode($token,strtolower($cadena));
        $token='/';
        $imp=strtoupper(implode($token,$exp));

        foreach($exp as $cad){
            echo $cad . " ";
        }
        echo "<br> $imp";
    }

    $cadena="hola;que;tal;como;estas;Yolanda";
    cadenas5php($cadena);

    /**  Funcion de variables
     *   is_int($var),is_array($var) ; is_null($var) empty($var)
    *
    *Comprobamos si una variable tiene valor NULL, si no esta inicializada, y comprobar que tipo de variable es
    */
    echo "<br><br><h1>Variables</h1>";

    function variables5php($variable){

        if(!empty($variable)){
            if(!is_null($variable)){
                if(is_int($variable)){
                    echo "La variable es entero";
                }elseif(is_array($variable)){
                    echo "La variable es un array";
                }
            }else{
                echo "La variable es nula";
            }
        }else{
            echo "La variable no esta inicializada";
        }
    }

    $variable=5;
    variables5php($variable);

    /**  Funcion de array
     *   array_values($arr); array_keys($arr); array_key_exists($cla,$arr);
     * 
     * Mostrar los valores de un array, y sus claves, y comprobar si existe la clave "Banana";
     */
        echo "<br><br><h1>Arrays</h1>";
     function array5php($arr){
        print_r(array_values($arr));
        print_r(array_keys($arr));
        $key="Banana";
        if (array_key_exists($key,$arr)){
            echo "<br>Existe la clave 'Banana'";
        }else{
            echo "<br>No existe la clave 'Banana'";
        }
     }

     $arr=array('Pedro'=>"Garcia", 'Fruta'=>"Banana", 'Banana'=>"es una fruta");
     array5php($arr);
?>