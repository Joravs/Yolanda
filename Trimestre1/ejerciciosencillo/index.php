<?php
    session_start();
    if (isset($_POST['valor'])){
        $_SESSION['cont']=parseInt($_POST['valor']).parseInt($_POST['valor']);
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