<?php
    session_start();
    $img=['OIP0.jfif','OIP1.jfif','OIP2.jfif','OIP3.jfif','OIP4.jfif'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>
</head>
<body>
    <h1>Agenda</h1>
    <p>Hola<?php echo $_SESSION['login']?></p>
</body>
</html>