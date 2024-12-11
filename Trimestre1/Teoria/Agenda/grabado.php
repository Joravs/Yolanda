<?php
    require_once 'datdb.php';
    session_start();
    /* $ctdb=new mysqli($hn,$user,$pw,$db);
    if($ctdb->connect_error) die("Error connecting"); */
    /* $qryUsuario="Select codigo from usuarios where Nombre='{$_SESSION['usuario']}'";
    $us=$ctdb->query($qryUsuario);
    $codigousu=$us->fetch_assoc()['codigo']; */
    $codigousu=1;
    $qryInsert="INSERT INTO contactos (nombre,email,telefono,codusuario) values ".
    for($i=1;$i<=$_SESSION['cont'];$i++){
        echo "({$_POST['nombre'.$i]},${$_POST['email'.$i]},${$_POST['telefono'.$i]},$codigousu)";
    };
    echo $qryInsert;
?>