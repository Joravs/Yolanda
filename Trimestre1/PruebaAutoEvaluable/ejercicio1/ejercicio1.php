<?php
    if(isset($_POST['calcular'])){
        for($i=0;$i<3;$i++){
            for($j=0;$j<2;$j++){
                echo "<p>".$_POST[$i.$j]." = ".decbin($_POST[$i.$j])."</p>";
            }
        }
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <?php
        $matriz=[];
            for($i=0;$i<3;$i++){
                for($j=0;$j<2;$j++){
                    echo "<label for='$i$j'>E.$i.$j</label>";
                    echo "<input id='$i$j' type='number' name='$i$j' min='1' max='100'></input>";
                }
                echo "<br>";
            }
        ?>
        <input type="submit" value="Calcular" name="calcular">
    </form>
</body>
</html>
<?php
    }
?>