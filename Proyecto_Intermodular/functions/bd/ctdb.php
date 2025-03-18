<?php
    $localhost="localhost";
    $usernameBD="adminDiabetes";
    $pwdBD="adminDiabetes";
    $database="controlDiabetes";

    $conn=new mysqli($localhost,$usernameBD,$pwdBD,$database);
    if ($conn->error){die("Error connecting to Database");}
?>