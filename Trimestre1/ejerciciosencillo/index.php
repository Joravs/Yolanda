<?php
    session_start();
    if (isset($_POST['valor'])){
        $simbolo=$_POST['valor'].$_POST['valor'];
        $_SESSION['cont']=$_SESSION['cont'].intval($simbolo);
    }else{
        $_SESSION['cont']=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTADOR</title>
    <style>
        input,p{
            display:inline-block;
        }
    </style>
</head>
<body>
    <h1>CONTADOR</h1>
    <form action="" method="POST">
        <input type="submit" name="valor" value="-">
        <?php echo "<p>".$_SESSION['cont']."</p>" ;?>
        <input type="submit" name="valor" value="+">
    </form>
</body>
</html>