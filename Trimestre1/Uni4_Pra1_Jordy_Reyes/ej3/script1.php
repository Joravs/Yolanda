<?php
    if (isset($_POST)){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operacion=$_POST['operacion'];
        switch ($operacion){
            case "suma":
                $result=$num1+$num2;
                break;
            case "resta":
                $result=$num1-$num2;
                break;
            case "multiplicacion":
                $result=$num1*$num2;
                break;
            case "division":
                if ($num2!=0){
                    $result=$num1/$num2;
                }
                else{
                    $result="Error: División por cero";
                }
                break;
        }
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="#" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1">
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2">
        <label for="operacion">Operación:</label>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
    }
?>