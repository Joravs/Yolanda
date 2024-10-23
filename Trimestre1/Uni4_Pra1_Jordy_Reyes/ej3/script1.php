<?php
    if (isset($_POST['num1'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $calcular=$_POST['calcular'];
        switch ($calcular){
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
        echo "Resultado: ".$result;
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
        <label for="operacion"><br><br></label>
        <input type="submit" name="calcular" value="suma"></input>
        <input type="submit" name="calcular" value="resta"></input>
        <input type="submit" name="calcular" value="multiplicacion"></input>
        <input type="submit" name="calcular" value="division"></input>
    </form>
</body>
</html>
<?php
    }
?>