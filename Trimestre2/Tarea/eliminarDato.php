<?php
    if(isset($_POST)){
        require_once "../ctdbMongo.php";
        if ($_POST['submit']=="eliminar"){
            $dato=["calle"=>$_POST["calle"]];
            $clCalles->find($dato);
            
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