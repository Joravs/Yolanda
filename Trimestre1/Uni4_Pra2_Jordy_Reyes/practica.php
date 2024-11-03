<?php
    function test_entrada($valor){
        $valor=trim($valor);// Elimina espacios del principio y final del valor
        $valor=stripslashes($valor);// Elimina barras del valor
        return $valor;
    }
    $valor=" Es tu nombre O\'reilly? ";
    echo test_entrada($valor);
?>

<!--Ejercicio 3-->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"><!--Devuelve la misma url de la pagina-->

<!--Ejercicio 4-->
<input type="radio" name="sexo"
<?php if (isset($sexo) && $sexo=="mujer") echo "checked";?>
value="mujer"> Mujer
<input type="radio" name="sexo"
<?php if (isset($sexo) && $sexo=="hombre") echo "checked";?>
value="hombre"> Hombre
<span class="error">* <?php //echo $sexoErr;?></span><br><br>

<!--Ejercicio 5-->
<?php
    $email="abc@abc.com";
    $emailErr="Email correcto";
    if (empty($email)) {
        $emailErr = "Se requiere Email";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Fomato de Email invalido";
        }
    }
    echo $email;
    echo "<br>";
    echo $emailErr;
?>
<!--Ejercicio 6-->
<br>mail: <input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span><br><br>

<!--Ejercicio 7-->
<!--Es un patron que se compara con una cadena objetivo, sirven para buscar, comparar y sustituirr cadenas en Strings-->

<!--Ejercicio 8-->
<?php
    if (empty($_POST["name"])) {
        $nameErr = "El nombre es obligatorio";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Únicamente se permiten letras y espacios";
        }
    }
?>