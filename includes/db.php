<?php 
    $host = 'localhost';
    $dbname = 'sistema';
    $username = 'root';
    $password = '';

    $conn = new mysqli(hostname: $host, username: $username, password: $password, database: $dbname);

    if ($conn->connect_error) {
        die('Conexão falhou: '. $conn->connect_error);
    } 
?>