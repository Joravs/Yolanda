<?php
    $hn= 'localhost';
    $un = "root";
    $pw = '';
    $db = 'pictogramasphp';

    $conn = new mysqli($hn,$un,$pw,$db);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }