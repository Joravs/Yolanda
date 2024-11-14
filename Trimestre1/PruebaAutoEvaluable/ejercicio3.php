<?php
session_start();
    function generarNumero(){
        return $numero=rand(1,100);
    }
    if(!isset($_POST['enviar'])){
        $_SESSION['numRand']=generarNumero();
    }else{
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head> 
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    </form>
</body>
</html>