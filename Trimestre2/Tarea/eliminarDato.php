<?php
    if(isset($_POST)){
        require_once "../ctdbMongo.php";
        $dato=["calle"=>$_POST["calle"]];
        $result=$clCalles->find($dato);
        if($result->count()>0){
            $bol=TRUE;
        }
        if ($_POST['submit']=="eliminar" && $bol){
        }else{

        }
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHPSELF'];?>" method="post">
        <legend>Introduce la calle que quieres eliminar o modificar</legend>
        <label for="calle">Calle</label>
        <input type="text" name="calle" id="calle">
        <input type="submit" name="submit" value="eliminar">
        <input type="submit" name="submit" value="modificar">
    </form>
</body>
</html>
<?php
    }
?>